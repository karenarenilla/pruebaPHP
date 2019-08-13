<?php

namespace App\UseCases\Contracts;

interface ActorUseCaseInterface
{
    public function create(string $name);
    
    public function listAll();
    
    public function listOne(string $name);
    
    public function delete(string $name);
    
    public function update(string $name);
    
}