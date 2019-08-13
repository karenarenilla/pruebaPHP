<?php

namespace App\Repositories;

use App\Repositories\Contracts\ActorRepositoryInterface;
use App\Models\Actor;

class ActorRepository implements ActorRepositoryInterface
{
    public function add(string $name)
    {
        $newActor = new Actor();
        $newActor->name();
        $newActor->save();
        return $newActor;
    }
    public function findAll()
    {
        return Actor::all();
    }

    public function findOne(string $name)
    {
        return Actor::where('name', $name)->first();
    }

    public function delete(string $name)
    {
        Actor::where('name', $name)->delete();
    }

    public function update(string $name)
    {
        Actor::where('name', $name)->update(['name' => $name]);
    }
}