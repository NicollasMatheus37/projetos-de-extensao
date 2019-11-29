<?php

use Illuminate\Database\Seeder;

class ThemeAreasSeeder extends Seeder
{
    private $themeAreas = [
        'Comunicação',
        'Meio Ambiente',
        'Cultura',
        'Saúde',
        'Direitos Humanos e Justiça',
        'Tecnologia e Produção',
        'Educação',
        'Trabalho'
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach($this->themeAreas as $area) {
            \Illuminate\Support\Facades\DB::table('theme_areas')
                ->insert([
                    'area' => $area
                ]);
        }
    }
}
