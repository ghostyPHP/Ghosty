<?php

namespace App\Models;

class User
{
    /**
     * Returns all users from users table
     *
     * @return array
     */
    public static function All()
    {
        //return DB::getPDO()->query('SELECT * FROM `users`')->fetchAll(PDO::FETCH_ASSOC);
    }
}
