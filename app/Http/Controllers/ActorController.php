<?php

namespace App\Http\Controllers;

use App\UseCases\Contracts\ActorUseCaseInterface;
use Illuminate\Http\Request;

class ActorController extends Controller
{
    protected $actorUseCase;

    public function __construct(ActorUseCaseInterface $actorUseCase)
    {
        $this->actorUseCase = $actorUseCase;
    }

    public function create(Request $request)
    {
        $newActor = $this->actorUseCase->create($request->post('name'));
        return $this->response->json(['msg' => 'the actor added Successfully', 'data' => $newActor]);
    }

    public function listAll()
    {
        $actors = $this->actorUseCase->listAll();
        return $this->response->json($actors);
    }

    public function listOne(Request $request)
    {
        $actor = $this->actorUseCase->listOne($request->route('name'));
        return $this->actorUseCase->json($actor);
    }

    public function delete(Request $request)
    {
        $this->actorUseCase->delete($request->route('name'));
        return Response::json(['msg' => ' the actor delete Successfully']);
    }

    public function update(Request $request)
    {
        $this->actorUseCase->update($request->route('name'), $request->get('name'));
        return Response::json(['msg' => ' the update delete Successfully']);
    }
}