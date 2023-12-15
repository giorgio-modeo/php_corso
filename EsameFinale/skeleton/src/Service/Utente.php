<?php
/**
 * Skeleton application for SimpleMVC
 * 
 * @link      http://github.com/simplemvc/skeleton
 * @copyright Copyright (c) Enrico Zimuel (https://www.zimuel.it)
 * @license   https://opensource.org/licenses/MIT MIT License
 */
declare(strict_types=1);

namespace App\Service;

use App\Exception\DatabaseException;
use App\Model\Rubrica;
use PDO;

class Utente
{
    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    /**
     * Returns a user by ID
     * @throws DatabaseException
     */
    public function get(string $name): Rubrica
    {
        $sth = $this->pdo->prepare('SELECT * FROM users WHERE nome = :name');
        $sth->bindParam(':name', $name, PDO::PARAM_INT);
        $sth->execute();
        $result = $sth->fetchObject(Rubrica::class);
        if (false === $result) {
            throw new DatabaseException(sprintf(
                "The user with name %d does not exist",
                $name
            ));
        }
        return $result;
    }
    
    /**
     * Returns all users
     * @return Utenti[]
     */
    public function getAll(): array
    {
        $sth = $this->pdo->prepare('SELECT * FROM rubrica');
        $sth->execute();
        return $sth->fetchAll(PDO::FETCH_CLASS, Rubrica::class);
    }

}