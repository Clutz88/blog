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
        return true;
    }

    public function view(User $user, Reaction $reaction): bool
    {
        return true;
    }

    public function create(User $user): bool
    {
        return true;
    }

    public function update(User $user, Reaction $reaction): bool
    {
        return true;
    }

    public function delete(User $user, Reaction $reaction): bool
    {
        return true;
    }

    public function restore(User $user, Reaction $reaction): bool
    {
        return true;
    }

    public function forceDelete(User $user, Reaction $reaction): bool
    {
        return true;
    }
}
