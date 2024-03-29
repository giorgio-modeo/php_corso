<?php
/**
 * Skeleton application for SimpleMVC
 * 
 * @link      http://github.com/simplemvc/skeleton
 * @copyright Copyright (c) Enrico Zimuel (https://www.zimuel.it)
 * @license   https://opensource.org/licenses/MIT MIT License
 */
declare(strict_types=1);

namespace App\Model;

class Rubrica
{
    const MIN_PASSWORD_LENGHT = 10;
    
    public int $id;
    public string $nome;
    public string $telefono;
    public int $eamil;
}