<?php

namespace App\Repositories;

use App\Repositories\Contracts\MovieRepositoryInterface;
use App\Models\Movie;

class MovieRepository implements MovieRepositoryInterface
{
    public function add(string $title, string $sinopsis, string $director)
    {
        $newMovie = new Movie();
        $newMovie->title = $title;
        $newMovie->sinopsis = $sinopsis;
        $newMovie->director = $director;
        $newMovie->save();
        return $newMovie;
    }

    public function findAll()
    {
        return Movie::all();
    }

    public function findOne(string $title)
    {
        return Movie::where('title', $title)->first();
    }

    public function delete(string $title)
    {
        Movie::where('title', $title)->delete();   
    }

    public function update(string $title, string $sinopsis)
    {
        Movie::where('title', $title)->update(['sinopsis'=>$sinopsis]);
    }

}