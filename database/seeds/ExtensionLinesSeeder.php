<?php

use Illuminate\Database\Seeder;

class ExtensionLinesSeeder extends Seeder
{
    private $extensionLines = [
        ['line_number' =>  1,
        'line_name' => '2006 – Alfabetização, leitura e escrita',
        'operation_way' => 'Alfabetização e letramento de crianças, jovens e adultos;
            formação do leitor e do produtor de textos; incentivo à
            leitura; literatura; desenvolvimento de metodologias de
            ensino da leitura e da escrita e sua inclusão nos projetos
            político-pedagógicos das escolas.']
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach($this->extensionLines as $line) {
            \Illuminate\Support\Facades\DB::table('extension_lines')->insert($line);
        }
    }
}
