<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Testing\RefreshDatabase;  // linha relacionada ao teste do bd localizado em : /vendor/laravel/framework/src/Illuminate/Foundation/Testing/RefreshDatabase.php
use Illuminate\Foundation\Testing\RefreshDatabaseState;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
    }
}

uses(RefreshDatabaseState::class);
 
test('dados podem ser criados', function () {
    // executando o DatabaseSeeder...
    $this->seed();
 
    // executa um seeder expecifico...
    $this->seed(UserSeeder::class);
 
    // ...
 
    // Run an array of specific seeders...
    $this->seed([
        UserSeeder::class,
        TransactionStatusSeeder::class,
        // ...
    ]);
});