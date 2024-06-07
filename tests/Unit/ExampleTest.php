<?php
namespace Tests\Unit;

use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_that_true_is_true(): void
    {
        $this->assertTrue(true);
    }



    public function testExemplohome(): void
    {
        $response = $this->get('/login');
      
        $response->assertStatus(200);
    } 



    /*
        com este comando "php artisan test tests/Feature/ExemploTeste.php"
        é possivel realisar texte diretamente no arquivo criado como "ExempleTest.php"

        para realisar texte em todo diretorio texte é usado "php artisan test"

        e para realisar textes apenas em uma determinada classe como no "ExampleTesr.php" é usado "php artisan test --filter Exemplohome"
    */

    /*   
        *************RESULTADO***************

        php artisan test tests/Feature/ExampleTest.php

        PASS  Tests\Feature\ExampleTest
        ✓ the application returns a successful response                                                                                                                     0.07s  

        Tests:    1 passed (1 assertions)
        Duration: 0.14s

    */
              
    
}
