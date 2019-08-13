<?php

namespace App\UseCases;

use App\UseCases\Contracts\MovieUseCaseInterface;
use App\Repositories\Contracts\MovieRepositoryInterface;

class MovieUseCase implements MovieUseCaseInterface
{
    protected $movieRepository;

    public function __construct(MovieRepositoryInterface $movieRepository)
    {
        $this->movieRepository = $movieRepository;
    }

    public function create(string $title, string $sinopsis, string $director)
    {
        return $this->movieRepository->add($title, $sinopsis, $director);
    }

    public function listAll()
    {
        return $this->movieRepository->findAll();
    }

    public function listOne(string $title)
    {
        return $this->movieRepository->findOne($title);
    }

    public function update(string $title, string $sinopsis)
    {
        $this->movieRepository->update($title, $sinopsis);
    }

    public function delete(string $title)
    {
        $this->movieRepository->delete($title);
    }
}