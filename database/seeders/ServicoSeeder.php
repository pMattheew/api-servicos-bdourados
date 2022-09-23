<?php

namespace Database\Seeders;

use App\Models\Servico;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServicoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Servico::create([
            "nome" => "Barba",
            "preco" => 30.00,
            "descricao" => "Uma barba feitinha muda o homem! Feita com as melhores técnicas e toalha quente."
        ]);
        Servico::create([
            "nome" => "Corte",
            "preco" => 40.00,
            "descricao" => "Corte masculino/feminino de cabelo, com todo o charme e qualidade dourados!"
        ]);
        Servico::create([
            "nome" => "Corte e Barba",
            "preco" => 70.00,
            "descricao" => "Corte masculino de cabelo e de barba para ficar na régua!"
        ]);
        Servico::create([
            "nome" => "Progressiva",
            "preco" => 60.00,
            "descricao" => "Progressiva com Salon Line para deixar o cabelo liso!"
        ]);
        Servico::create([
            "nome" => "Relaxamento",
            "preco" => 40.00,
            "descricao" => "Menos agressivo que a progressiva, deixa seu cabelo alisado e no estilo!"
        ]);
    }
}
