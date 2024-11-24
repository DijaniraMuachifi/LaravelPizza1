<?php

namespace App\Http\Controllers;

use App\Models\Pizza;
use App\Models\Category; // Importa o modelo Category
use Illuminate\Http\Request;

class PizzaController extends Controller
{
  public function index()
  {
    // Obter as pizzas com paginação de 8 itens por página
    $pizzas = Pizza::paginate(8);

    // Retornar a view com as pizzas
    return view('pizza.list', compact('pizzas'));
  }

  public function create()
  {
    // Busca todas as categorias para o formulário de criação
    $categories = Category::all();
    return view('pizza.add', compact('categories'));
  }

  public function store(Request $request)
  {
    // Validação dos dados
    $request->validate([
      'pname' => 'required|string|max:255|unique:pizza,pname',
      'categoryname' => 'required|string|exists:category,cname',
      'vegetarian' => 'required|boolean',
    ]);

    // Criação da nova pizza
    Pizza::create($request->all());

    return redirect()->route('pizza.index')->with('success', 'Pizza created successfully.');
  }

  public function edit($pname)
  {
    // Busca a pizza pelo nome
    $pizza = Pizza::where('pname', $pname)->firstOrFail();
    // Busca todas as categorias
    $categories = Category::all();
    return view('pizza.edit', compact('pizza', 'categories'));
  }

  public function update(Request $request, $pname)
  {
    // Validação dos dados
    $request->validate([
      'pname' => 'required|string|max:255',
      'categoryname' => 'required|string|exists:category,cname',
      'vegetarian' => 'required|boolean',
    ]);

    // Atualiza a pizza
    $pizza = Pizza::where('pname', $pname)->firstOrFail();
    $pizza->update($request->all());

    return redirect()->route('pizza.index')->with('success', 'Pizza updated successfully.');
  }

  public function destroy($pname)
  {
    // Exclui a pizza
    $pizza = Pizza::where('pname', $pname)->firstOrFail();
    $pizza->delete();

    return redirect()->route('pizza.index')->with('success', 'Pizza deleted successfully.');
  }

  public function search(Request $request)
    {
        // Obter os parâmetros da consulta
        $query = $request->input('query');
        $categoryName = $request->input('categoryname');
        $isVegetarian = $request->input('vegetarian');

        // Obter todas as categorias para o select
        $categories = Category::all();

        // Construir a consulta para buscar as pizzas
        $pizzas = Pizza::with('category') // Carregar a relação com categoria
            ->when($query, function ($queryBuilder) use ($query) {
                return $queryBuilder->where('pname', 'like', "%{$query}%");
            })
            ->when($categoryName, function ($queryBuilder) use ($categoryName) {
                return $queryBuilder->where('categoryname', $categoryName);
            })
            ->when($isVegetarian !== null, function ($queryBuilder) use ($isVegetarian) {
                return $queryBuilder->where('vegetarian', $isVegetarian);
            })
            ->paginate(10); // Paginação de 10 por página

        // Retornar a view com os resultados
        return view('pizza.search', compact('pizzas', 'categories', 'query', 'categoryName', 'isVegetarian'));
    }
}
