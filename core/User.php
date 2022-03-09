<?php

namespace core;

class User
{
    private static string $id;

    public function __construct(
        private string $name,
        private string $last_name,
        private int $edad
    ){}

    public static function create($params) {
        
    }
}