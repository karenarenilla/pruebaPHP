<?php

namespace App\Repositories\Contracts;

interface PersonRepositoryInterface
{
    public function add(string $name, string $document);

    public function findAll();

    public function findOne(string $document);

    public function delete(string $document);

    public function update(string $document, string $name);
}