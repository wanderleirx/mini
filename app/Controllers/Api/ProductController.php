<?php

namespace App\Controllers\Api;

class ProductController
{
    public function findAll()
    {
        $product = [
            ["id" => 1, "name" => "TV"],
            ["id" => 2, "name" => "Fogão"],
            ["id" => 3, "name" => "Geladeira"]
        ];

        response()->json($product);
    }
}