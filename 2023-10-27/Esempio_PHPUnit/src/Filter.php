<?php
declare(strict_types=1);

namespace App;

class Filter
{
    public function isEmail(string $email): bool
    {
            return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
    }
}
