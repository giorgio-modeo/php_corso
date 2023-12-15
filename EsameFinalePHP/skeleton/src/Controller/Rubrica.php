<?php
/**
 * Skeleton application for SimpleMVC
 * 
 * @link      http://github.com/simplemvc/skeleton
 * @copyright Copyright (c) Enrico Zimuel (https://www.zimuel.it)
 * @license   https://opensource.org/licenses/MIT MIT License
 */
declare(strict_types=1);

namespace App\Controller;

use App\Config\Route;
use App\Exception\DatabaseException;
use App\Service\Utente;
use League\Plates\Engine;
use Nyholm\Psr7\Response;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Log\LoggerInterface;
use SimpleMVC\Controller\ControllerInterface;
use SimpleMVC\Controller\RouteTrait;

class Rubrica implements ControllerInterface
{
    use RouteTrait;

    protected Engine $plates;
    protected Utente $utente;

    public function __construct(Engine $plates, Utente $utente)
    {
        $this->plates = $plates;
        $this->utente = $utente;

    }

    protected function get(ServerRequestInterface $request, ResponseInterface $response): ResponseInterface
    {
        $utenti = $this->utente->getAll();
        return new Response(
            200, 
            [], 
            $this->plates->render('rubrica', ['rubrica_url' => Route::RUBRICA, 'utenti' => $utenti])
        );
    }

    protected function getFromName($name) {
        $utente = $this->utente->get($name);
        return new Response(
            200, 
            [], 
            $this->plates->render('rubrica', ['rubrica_url' => Route::RUBRICA, 'utente' => $utente])
        );
    }

}
