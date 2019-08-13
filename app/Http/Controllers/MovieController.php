<?php

namespace App\Http\Controllers;

use App\UseCases\Contracts\MovieUseCaseInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class MovieController extends Controller
{
    protected $movieUseCase;

    public function __construct(MovieUseCaseInterface $movieUseCase)
    {
        $this->movieUseCase = $movieUseCase;
    }

    public function create(Request $request)
    {
        $newMovie = $this->movieUseCase->create($request->post('title'), $request->post('sinopsis'), $request->post('director'));
        return Response::json(['msg' => 'the movie added Successfully', 'data' => $newMovie]);

    }

    public function listall()
    {
        $movies = $this->movieUseCase->listAll();
        return Response::json($movies);
    }

    public function listOne(Request $request)
    {
        $movie = $this->movieUseCase->listOne($request->route('title'));
        return Response::json($movie);
    }

    public function delete(Request $request)
    {
        $this->movieUseCase->delete($request->route('title'));
        return Response::json(['msg' => ' the movie delete Successfully']);
    }

    public function update(Request $request)
    {
        $this->movieUseCase->update($request->route('title'), $request->get('sinopsis'));
        return Response::json(['msg' => ' the movie delete Successfully']);
    }
}