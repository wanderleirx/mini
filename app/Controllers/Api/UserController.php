<?php


namespace App\Controllers\Api;


class UserController
{
    public function findAll()
    {
        $users = [
            ["id" => 1, "name" => "João"],
            ["id" => 2, "name" => "Maria"],
            ["id" => 3, "name" => "José"]
        ];
        response()->json($users);
    }
}