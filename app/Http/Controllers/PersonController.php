<?php

namespace App\Http\Controllers;

use App\UseCases\Contracts\PersonUseCaseInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class PersonController extends Controller
{
    protected $personUseCase;

    public function __construct(PersonUseCaseInterface $personUseCase)
    {
        $this->personUseCase = $personUseCase;    
    }

    public function create(Request $request)
    {
        $this->personUseCase->create($request->post('name'), $request->post('document'));
        return Response::json(['msg' => 'hecho']);
    }

    public function listAll(Request $request)
    {
        $persons = $this->personUseCase->listAll();
        return Response::json($persons);
    }

    public function listOne(Request $request)
    {
        $person = $this->personUseCase->listOne($request->route('document'));
        return Response::json($person);
    }

    public function delete(Request $request)
    {
        $this->personUseCase->delete($request->route('document'));
        return Response::json(['msg' => 'delete']);
    }

    public function update(Request $request)
    {
        $this->personUseCase->update($request->route('document'), $request->get('name'));
        return Response::json(['msg' => 'update']);
    }
    
}