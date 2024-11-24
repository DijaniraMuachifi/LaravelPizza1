<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    protected static ?string $password;
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
           'name' => 'Dijanira Muachifid',
            'email' => 'muachifi@mail.com',
            'email_verified_at' => now(),
            'role'=>'admin',
            'password' => static::$password ??= Hash::make('U2FELP'),
            'remember_token' => Str::random(10),
      ]);


        $this->call([
          CategoriesTableSeeder::class,
          PizzasTableSeeder::class,
      ]);
    }
}
