<?php

namespace App\Policies;

use App\Enums\Role;
use App\Models\Election;
use App\Models\User;

class ElectionPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user, Election $election): bool
    {
        return $user->role === Role::ADMIN && $user->section()->is($election->section);
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Election $election): bool
    {
        return $user->role === Role::ADMIN && $user->section()->is($election->section);
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->role === Role::ADMIN;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Election $election): bool
    {
        return $user->role === Role::ADMIN && $user->section()->is($election->section);
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Election $election): bool
    {
        return $user->role === Role::ADMIN && $user->section()->is($election->section);
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Election $election): bool
    {
        return $user->role === Role::ADMIN && $user->section()->is($election->section);
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Election $election): bool
    {
        return $user->role === Role::ADMIN && $user->section()->is($election->section);
    }
}
