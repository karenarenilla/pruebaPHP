<?php

namespace App\Repositories\Contracts;

interface MovieRepositoryInterface
{
    public function add(string $title, string $sinopsis, string $director);
    
    public function findAll();
    
    public function findOne(string $title);
    
    public function delete(string $title);
    
    public function update(string $title, string $sinopsis);

}