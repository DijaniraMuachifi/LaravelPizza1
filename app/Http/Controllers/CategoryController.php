<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Pizza;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
  public function index()
  {
    // Obter as categorias com paginação de 10 itens por página
    $categories = Category::paginate(10);

    // Retornar a view com as categorias
    return view('category.list', compact('categories'));
  }
  public function edit($cname)
  {
    // Fetch the category based on the name
    $category = Category::where('cname', $cname)->first();

    // Check if the category exists
    if (!$category) {
      return redirect()->route('category.index')->with('error', 'Category not found.');
    }
    return view('category.edit', compact('category'));
  }
  public function remove($cname)
  {
    // Check if there are any pizzas associated with this category name
    $pizzaCount = Pizza::where('categoryname', $cname)->count();

    if ($pizzaCount > 0) {
      // Return error message if there are associated pizzas
      return redirect()->route('category.index')->with('error', 'You cannot delete this category because there are pizzas associated with it.');
    }

    // Attempt to delete the category if there are no associated pizzas
    try {
      Category::where('cname', $cname)->delete();
      return redirect()->route('category.index')->with('success', 'Category deleted successfully.');
    } catch (\Exception $e) {
      // Handle any other exceptions
      return redirect()->route('category.index')->with('error', 'An error occurred while trying to delete the category.');
    }
  }
  // Method to update the category
  public function update(Request $request, $cname)
  {
    // Validação dos dados de entrada
    $request->validate([
      'cname' => 'required|string|max:255',
      'price' => 'required|numeric',
    ]);

    // O novo nome da categoria
    $newCname = $request->input('cname');

    // Verifique se o novo cname já existe (exceto para o cname atual)
    if (Category::where('cname', $newCname)->where('cname', '!=', $cname)->exists()) {
      return redirect()->back()->withErrors(['cname' => 'This category name already exists.']);
    }

    // Obtém a categoria existente
    $category = Category::where('cname', $cname)->first();

    if (!$category) {
      return redirect()->route('category.index')->with('error', 'Category not found.');
    }

    // Atualiza os dados da categoria
    $category->cname = $newCname; // Atualiza o cname
    $category->price = $request->input('price');
    $category->save(); // Salve as alterações

    // Redirecione de volta para a lista de categorias com uma mensagem de sucesso
    return redirect()->route('category.index')->with('success', 'Category updated successfully.');
  }
  public function create()
  {
    return view('category.add'); // Retorna a view do formulário
  }

  // Método para armazenar a nova categoria
  public function store(Request $request)
  {
    // Validação dos dados de entrada
    $request->validate([
      'cname' => 'required|string|max:255|unique:category,cname', // Verifica se o cname é único
      'price' => 'required|numeric',
    ]);

    // Criação da nova categoria
    Category::create([
      'cname' => $request->input('cname'),
      'price' => $request->input('price'),
    ]);

    // Redireciona para a lista de categorias com uma mensagem de sucesso
    return redirect()->route('category.index')->with('success', 'Category created successfully.');
  }

  
}
