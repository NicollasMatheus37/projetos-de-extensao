<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HumanResourceTypesSeeder extends Seeder
{
    private $humanResourceTypes = [
        'Informar coordenador e professores com horas/aula e/ou voluntários',
        'Discentes com bolsa',
        'Discentes sem bolsa'
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach($this->humanResourceTypes as $humanResourceType) {
            DB::table('human_resource_types')->insert([
                'name' => $humanResourceType
            ]);
        }
    }
}
