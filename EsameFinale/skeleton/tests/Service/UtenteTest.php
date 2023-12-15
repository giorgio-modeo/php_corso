<?php
namespace SimpleMVC\Test\Service;

use PHPUnit\Framework\TestCase;
use App\Service\Utente;

class UtenteTest extends TestCase
{



    public function setUp(): void
    {
    $dsn = 'mysql:host=127.0.0.1;dbname=esamefinale';
    $user = 'root';
    $password = '';
    $pdo = new \PDO($dsn, $user, $password);

    $this->utente = new Utente($pdo);
    }

public function testGetAll() {
    $result = $this->utente->getAll();
    $this->assertIsArray($result);
    }

}