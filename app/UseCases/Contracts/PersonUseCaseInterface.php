<?php

namespace App\UseCases\Contracts;

interface PersonUseCaseInterface
{
    public function create(string $name, string $document);

    public function listAll();

    public function listOne(string $document);

    public function delete(string $document);

    public function update(string $name, string $document);
}