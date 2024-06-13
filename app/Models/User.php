<?php

namespace App\Models;

use Ghosty\Support\Facades\DB;
use PDO;

class User
{
    /**
     * Returns all users from users table
     *
     * @return array
     */
    public static function All()
    {
        return DB::getPDO()->query('SELECT * FROM `users`')->fetchAll(PDO::FETCH_ASSOC);
    }
}
