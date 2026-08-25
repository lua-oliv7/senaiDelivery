<?php

namespace Database\Seeders;

use App\Models\Categoria;
use App\Models\Produto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdutoSeeder extends Seeder
{
    public function run(): void
    {
        $produtos = [
            'Lanches' => [
                ['nome' => 'X-Burger', 'descricao' => 'Pão, hambúrguer, queijo e molho especial', 'preco' => 18.90, 'destaque' => true],
                ['nome' => 'X-Bacon', 'descricao' => 'Pão, hambúrguer, queijo, bacone salada', 'preco' => 18.90, 'destaque' => true],
            ],

            'Porções' => [
                ['nome' => 'Batata Frita', 'descricao' => 'Porção de Batata Frita', 'preco' => 22.90, 'destaque' => false],
                ['nome' => 'Calabresa Acebolada', 'descricao' => 'Calabresa fatiada com cebola', 'preco' => 10.00, 'destaque' => true],
            ],

            'Bebidas' => [
                ['nome' => 'Refrigerante', 'descricao' => 'Refrigerante Lata', 'preco' => 6.00, 'destaque' => false],
                ['nome' => 'Suco de Laranja', 'descricao' => 'Suco natural de laranja', 'preco' => 10.00, 'destaque' => true],
            ],

            'Sobremesas' => [
                ['nome' => 'Pudim', 'descricao' => 'Fatia de pudim', 'preco' => 9.90, 'destaque' => false],
                ['nome' => 'Sorvete', 'descricao' => 'Sorvete com cobertura', 'preco' => 10.00, 'destaque' => true],
            ],
        ];

        foreach ($produtos as $nomeCategoria => $itens) {
            $categoria = Categoria::where('nome', $nomeCategoria)->firstOrFail();

            foreach ($itens as $produto) {
                Produto::create(
                    [
                        'categoria_id' => $categoria->id,
                        'nome' => $produto['nome'],
                        'descricao' => $produto['descricao'],
                        'preco' => $produto['preco'],
                        'caminho_imagem' => null,
                        'ativo' => true,
                        'destaque' => $produto['destaque']
                    ]
                );
            }
        }
    }
}
