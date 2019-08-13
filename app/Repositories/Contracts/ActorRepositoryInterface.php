<?php

namespace App\Repositories\Contracts;

interface ActorRepositoryInterface
{
    public function add(string $name);
    
    public function findAll();
    
    public function findOne(string $name);
    
    public function delete(string $name);
    
    public function update(string $name);

}