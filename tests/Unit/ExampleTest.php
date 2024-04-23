<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_that_true_is_true(): void
    {
        $this->assertTrue(true);
    }

    public function testExemploRota()
    {
        $response = $this->get('/exemplo-rota');

        $response->assertStatus(200);
    }

    public function testExemplohome()
    {
        $response = $this->get('/materiasProf');
      
        $response->assertStatus(200);
    } 

    /*
        com este comando "php artisan test tests/Feature/ExemploTeste.php"
        é possivel realisar texte diretamente no arquivo criado como "ExempleTest.php"

        para realisar texte em todo diretorio texte é usado "php artisan test"

        e para realisar textes apenas em uma determinada classe como no "ExampleTesr.php" é usado "php artisan test --filter ExemploTeste
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
