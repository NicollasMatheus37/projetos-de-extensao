<?php

use Illuminate\Database\Seeder;

class PublicsSeeder extends Seeder
{
    private $publics = [
        'Escolas públicas',
        'Escolas particulares',
        'Associações',
        'Pequenos produtores',
        'Pessoas com deficiência',
        'Negros/Índios/Quilombolas',
        'Adolescentes em conflito com a lei',
        'Indivíduos apenados e/ou egressos do sistema penitenciário',
        'Indivíduos em situação de rua (moradores de rua)',
        'Migrantes/Imigrantes',
        'Família',
        'Usuários de substâncias psicoativas',
        'Comunidades locais',
        'Comunidade científica',
        'Lideranças Locais',
        'Moradores de área de ocupação',
        'Outras ONG’s',
        'Organizações/movimentos populares',
        'Outros'
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach($this->publics as $public) {
            \Illuminate\Support\Facades\DB::table('publics')
                ->insert([
                    'name' => $public
                ]);
        }
    }
}
