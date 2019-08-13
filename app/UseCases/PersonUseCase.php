<?php

namespace App\UseCases;

use App\UseCases\Contracts\PersonUseCaseInterface;
use App\Repositories\Contracts\PersonRepositoryInterface;

class PersonUseCase implements PersonUseCaseInterface
{
    protected $personRepository;

    public function __construct(PersonRepositoryInterface $personRepository)
    {
        $this->personRepository = $personRepository;
    }

    public function create(string $name, string $document)
    {
        $this->personRepository->add($name, $document);
    }

    public function listAll()
    {
        return $this->personRepository->findAll();
    }

    public function listOne(string $document)
    {
        return $this->personRepository->findOne($document);
    }

    public function delete(string $document)
    {
        $this->personRepository->delete($document);
    }

    public function update(string $name, string $document)
    {
        $this->personRepository->update($name, $document);
    }
}