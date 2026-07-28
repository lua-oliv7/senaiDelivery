<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Categoria::create([
            'nome' => 'Lanches',
            'descricao' => 'Lanches Diversos',
            'ativo' => true,
            'ordem_exibicao' => 1
        ]);

        Categoria::create([
            'nome' => 'Porções',
            'descricao' => 'Porções Diversas',
            'ativo' => true,
            'ordem_exibicao' => 2
        ]);

        Categoria::create([
            'nome' => 'Bebidas',
            'descricao' => 'Bebidas Diversas',
            'ativo' => true,
            'ordem_exibicao' => 3
        ]);
    }
}
