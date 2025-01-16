<?php

namespace App\Policies;

use App\Models\Reaction;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ReactionPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {

    }

    public function view(User $user, Reaction $reaction): bool
    {
    }

    public function create(User $user): bool
    {
    }

    public function update(User $user, Reaction $reaction): bool
    {
    }

    public function delete(User $user, Reaction $reaction): bool
    {
    }

    public function restore(User $user, Reaction $reaction): bool
    {
    }

    public function forceDelete(User $user, Reaction $reaction): bool
    {
    }
}
