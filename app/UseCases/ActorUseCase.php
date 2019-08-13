<?php

namespace App\UseCases;

use App\UseCases\Contracts\ActorUseCaseInterface;
use App\Repositories\Contracts\ActorRepositoryInterface;

class ActorUseCase implements ActorUseCaseInterface
{
    protected $actorRepository;

    public function __construct(ActorRepositoryInterface $actorRepository)
    {
        $this->actorRepository = $actorRepository;
    }

    public function create(string $name)
    {
        return $this->actorRepository->add($name);
    }

    public function listAll()
    {
        return $this->actorRepository->listAll();
    }

    public function listOne(string $name)
    {
        return $this->actorRepository->findOne($name);
    }

    public function delete(string $name)
    {
        $this->actorRepository->delete($name);
    }

    public function update(string $name)
    {
        $this->actorRepository->update($name);
    }
}