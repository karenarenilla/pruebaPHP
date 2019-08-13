<?php

namespace App\UseCases\Contracts;

interface MovieUseCaseInterface
{
    public function create(string $title, string $sinopsis, string $director);

    public function listAll();

    public function listOne(string $title);

    public function delete(string $title);

    public function update(string $title, string $sinopsis);
}