<?php

namespace Database\Seeders;

use App\Models\SiteContato;
use Carbon\Factory;
use Database\Factories\SiteContatoFactory;
use Illuminate\Database\Eloquent\Factories\Factory as FactoriesFactory;
use Illuminate\Database\Seeder;

class SiteContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*$contato = new SiteContato();
        $contato->nome = "Sistema 5G";
        $contato->telefone = "4554";
        $contato->email = "contato@gmail.com";
        $contato->motivo_contato = 1;
        $contato->mensagem = "Seja bem vindo ao sistema super gistao";

        $contato->save();*/

        \App\Models\SiteContato::factory()->count(100)->create();
    }
}
