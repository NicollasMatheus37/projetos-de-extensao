<?php

use Illuminate\Database\Seeder;

class KnowledgeAreasSeeder extends Seeder
{
    private $knowledgeAreas = [
        'Ciências Exatas e da Terra',
        'Ciências Biológicas',
        'Engenharia / Tecnologia',
        'Ciências da Saúde',
        'Ciências Agrárias',
        'Ciências Sociais',
        'Ciências Humanas',
        'Lingüística, Letras e Artes'
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach($this->knowledgeAreas as $area) {
            \Illuminate\Support\Facades\DB::table('knowledge_areas')
                ->insert([
                    'area' => $area
                ]);
        }
    }
}
