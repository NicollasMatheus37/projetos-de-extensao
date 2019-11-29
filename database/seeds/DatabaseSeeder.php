<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(HumanResourceTypesSeeder::class);
        $this->call(PermissionsSeeder::class);
        $this->call(PublicsSeeder::class);
        $this->call(KnowledgeAreasSeeder::class);
        $this->call(ThemeAreasSeeder::class);
        $this->call(ExtensionLinesSeeder::class);
    }
}
