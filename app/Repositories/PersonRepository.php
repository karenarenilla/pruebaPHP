<?php

namespace App\Repositories;

use App\Repositories\Contracts\PersonRepositoryInterface;
use App\Models\Person;

class PersonRepository implements PersonRepositoryInterface
{
    public function add(string $name, string $document)
    {
        $newPerson = new Person();
        $newPerson->name = $name;
        $newPerson->document = $document;
        $newPerson->save();
    }

    public function findAll()
    {
        return Person::all();
    }

    public function findOne(string $document)
    {
        return Person::where('document', $document)->first();
    }

    public function delete(string $document)
    {
        Person::where('document', $document)->delete();
    }
    
    public function update(string $document, string $name)
    {
        Person::where('document', $document)->update(['name'=>$name]);
    }
}