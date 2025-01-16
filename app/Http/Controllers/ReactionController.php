<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReactionRequest;
use App\Http\Resources\ReactionResource;
use App\Models\Reaction;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class ReactionController extends Controller
{
    use AuthorizesRequests;

    public function index()
    {
        $this->authorize('viewAny', Reaction::class);

        return ReactionResource::collection(Reaction::all());
    }

    public function store(ReactionRequest $request)
    {
        $this->authorize('create', Reaction::class);

        return new ReactionResource(Reaction::create($request->validated()));
    }

    public function show(Reaction $reaction)
    {
        $this->authorize('view', $reaction);

        return new ReactionResource($reaction);
    }

    public function update(ReactionRequest $request, Reaction $reaction)
    {
        $this->authorize('update', $reaction);

        $reaction->update($request->validated());

        return new ReactionResource($reaction);
    }

    public function destroy(Reaction $reaction)
    {
        $this->authorize('delete', $reaction);

        $reaction->delete();

        return response()->json();
    }
}
