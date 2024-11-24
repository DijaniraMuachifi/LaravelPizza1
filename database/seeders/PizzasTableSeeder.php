<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PizzasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      $pizzas = [
        ['pname' => 'Áfonyás', 'categoryname' => 'king', 'vegetarian' => 0],
        ['pname' => 'Babos', 'categoryname' => 'knight', 'vegetarian' => 0],
        ['pname' => 'Barbecue chicken', 'categoryname' => 'knight', 'vegetarian' => 0],
        ['pname' => 'Betyáros', 'categoryname' => 'king', 'vegetarian' => 0],
        ['pname' => 'Caribi', 'categoryname' => 'page', 'vegetarian' => 0],
        ['pname' => 'Country', 'categoryname' => 'king', 'vegetarian' => 0],
        ['pname' => 'Csabesz', 'categoryname' => 'king', 'vegetarian' => 0],
        ['pname' => 'Csupa sajt', 'categoryname' => 'knight', 'vegetarian' => 1],
        ['pname' => 'Erdő kapitánya', 'categoryname' => 'page', 'vegetarian' => 0],
        ['pname' => 'Erős János', 'categoryname' => 'knight', 'vegetarian' => 0],
        ['pname' => 'Excellent', 'categoryname' => 'king', 'vegetarian' => 0],
        ['pname' => 'Főnök kedvence', 'categoryname' => 'knight', 'vegetarian' => 0],
        ['pname' => 'Francia', 'categoryname' => 'nobleman', 'vegetarian' => 0],
        ['pname' => 'Frankfurti', 'categoryname' => 'king', 'vegetarian' => 0],
        ['pname' => 'Füstös', 'categoryname' => 'knight', 'vegetarian' => 0],
        ['pname' => 'Gino', 'categoryname' => 'king', 'vegetarian' => 0],
        ['pname' => 'Gombás', 'categoryname' => 'page', 'vegetarian' => 1],
        ['pname' => 'Góré', 'categoryname' => 'knight', 'vegetarian' => 0],
        ['pname' => 'Görög', 'categoryname' => 'king', 'vegetarian' => 0],
        ['pname' => 'Gyros pizza', 'categoryname' => 'king', 'vegetarian' => 0],
        ['pname' => 'HamAndEggs', 'categoryname' => 'knight', 'vegetarian' => 0],
        ['pname' => 'Hamm', 'categoryname' => 'knight', 'vegetarian' => 0],
        ['pname' => 'Hawaii', 'categoryname' => 'nobleman', 'vegetarian' => 0],
        ['pname' => 'Hellas', 'categoryname' => 'king', 'vegetarian' => 0],
        ['pname' => 'Hercegnő', 'categoryname' => 'king', 'vegetarian' => 0],
        ['pname' => 'Ilike', 'categoryname' => 'knight', 'vegetarian' => 0],
        ['pname' => 'Ínyenc', 'categoryname' => 'knight', 'vegetarian' => 0],
        ['pname' => 'Jázmin álma', 'categoryname' => 'knight', 'vegetarian' => 0],
        ['pname' => 'Jobbágy', 'categoryname' => 'king', 'vegetarian' => 0],
        ['pname' => 'Juhtúrós', 'categoryname' => 'knight', 'vegetarian' => 0],
        ['pname' => 'Kagylós', 'categoryname' => 'king', 'vegetarian' => 0],
        ['pname' => 'Kétszínű', 'categoryname' => 'knight', 'vegetarian' => 0],
        ['pname' => 'Kiadós', 'categoryname' => 'king', 'vegetarian' => 0],
        ['pname' => 'Király pizza', 'categoryname' => 'king', 'vegetarian' => 0],
        ['pname' => 'Kívánság', 'categoryname' => 'knight', 'vegetarian' => 1],
        ['pname' => 'Kolbászos', 'categoryname' => 'page', 'vegetarian' => 0],
        ['pname' => 'Lagúna', 'categoryname' => 'king', 'vegetarian' => 1],
        ['pname' => 'Lecsó', 'categoryname' => 'king', 'vegetarian' => 0],
        ['pname' => 'Maffiózó', 'categoryname' => 'knight', 'vegetarian' => 0],
        ['pname' => 'Magvas', 'categoryname' => 'king', 'vegetarian' => 1],
        ['pname' => 'Magyaros', 'categoryname' => 'knight', 'vegetarian' => 0],
        ['pname' => 'Máj Fair Lady', 'categoryname' => 'king', 'vegetarian' => 0],
        ['pname' => 'Mamma fia', 'categoryname' => 'king', 'vegetarian' => 0],
        ['pname' => 'Mexikói', 'categoryname' => 'nobleman', 'vegetarian' => 0],
        ['pname' => 'Mixi', 'categoryname' => 'nobleman', 'vegetarian' => 1],
        ['pname' => 'Nikó', 'categoryname' => 'king', 'vegetarian' => 0],
        ['pname' => 'Nordic', 'categoryname' => 'king', 'vegetarian' => 0],
        ['pname' => 'Nyuszó-Muszó', 'categoryname' => 'king', 'vegetarian' => 0],
        ['pname' => 'Pacalos', 'categoryname' => 'knight', 'vegetarian' => 0],
        ['pname' => 'Pástétomos', 'categoryname' => 'king', 'vegetarian' => 0],
        ['pname' => 'Pásztor', 'categoryname' => 'knight', 'vegetarian' => 0],
        ['pname' => 'Pipis', 'categoryname' => 'knight', 'vegetarian' => 0],
        ['pname' => 'Popey', 'categoryname' => 'king', 'vegetarian' => 0],
        ['pname' => 'Quattro', 'categoryname' => 'king', 'vegetarian' => 0],
        ['pname' => 'Ráki', 'categoryname' => 'king', 'vegetarian' => 0],
        ['pname' => 'Rettenetes magyar', 'categoryname' => 'knight', 'vegetarian' => 0],
        ['pname' => 'Röfi', 'categoryname' => 'king', 'vegetarian' => 0],
        ['pname' => 'Sajtos', 'categoryname' => 'page', 'vegetarian' => 1],
        ['pname' => 'So-ku', 'categoryname' => 'page', 'vegetarian' => 0],
        ['pname' => 'Son-go-ku', 'categoryname' => 'nobleman', 'vegetarian' => 1],
        ['pname' => 'Sonkás', 'categoryname' => 'page', 'vegetarian' => 0],
        ['pname' => 'Spanyol', 'categoryname' => 'king', 'vegetarian' => 0],
        ['pname' => 'Spencer', 'categoryname' => 'nobleman', 'vegetarian' => 0],
        ['pname' => 'Szalámis', 'categoryname' => 'page', 'vegetarian' => 0],
        ['pname' => 'Szardíniás', 'categoryname' => 'knight', 'vegetarian' => 0],
        ['pname' => 'Szerzetes', 'categoryname' => 'king', 'vegetarian' => 0],
        ['pname' => 'Szőke kapitány', 'categoryname' => 'king', 'vegetarian' => 0],
        ['pname' => 'Tenger gyümölcsei', 'categoryname' => 'king', 'vegetarian' => 0],
        ['pname' => 'Tonhalas', 'categoryname' => 'knight', 'vegetarian' => 0],
        ['pname' => 'Törperős', 'categoryname' => 'knight', 'vegetarian' => 0],
        ['pname' => 'Tündi kedvence', 'categoryname' => 'king', 'vegetarian' => 0],
        ['pname' => 'Tüzes halál', 'categoryname' => 'king', 'vegetarian' => 0],
        ['pname' => 'Vega', 'categoryname' => 'knight', 'vegetarian' => 1],
        ['pname' => 'Zöldike', 'categoryname' => 'nobleman', 'vegetarian' => 1],
    ];

    DB::table('pizza')->insert($pizzas);
    }
}
