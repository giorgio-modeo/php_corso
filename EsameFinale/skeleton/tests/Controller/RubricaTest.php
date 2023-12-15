<?php
declare(strict_types=1);

namespace SimpleMVC\Test\Controller;

use App\Config\Route;
use App\Controller\Rubrica;
use App\Service\Utente;
use League\Plates\Engine;
use Nyholm\Psr7\ServerRequest;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Log\LoggerInterface;
use Psr\Log\NullLogger;

final class RubricaTest extends TestCase
{
    /** @var ServerRequestInterface|MockObject */
    private $request;

    /** @var ResponseInterface|MockObject */
    private $response;

    /** @var Auth|MockObject */
    private $auth;

    /** @var Users|MockObject */
    private $Utente;

    private Rubrica $rubrica;

    private Engine $plates;

    private LoggerInterface $logger;

    public function setUp(): void
    {
        $this->plates = new Engine(__DIR__ . '/../../src/View');
        $this->logger = new NullLogger();

        $this->rubrica = new Utente();
        $this->request = $this->createMock(ServerRequestInterface::class);
        $this->response = $this->createMock(ResponseInterface::class);
    }
    
    public function testGetReturn200(): void
    {
        $this->request = new ServerRequest('GET', Route::RUBRICA);
        $response = $this->rubrica->execute($this->request, $this->response);
        $this->assertEquals(200, $response->getStatusCode());
    }

}