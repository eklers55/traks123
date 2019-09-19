<?php

namespace App\Policies;
use App\Atalgojums;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class atalgojumsPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function destroy(User $user, Atalgojums $atalgojums)
    {
        return $user->id === $atalgojums->lietotajs_id;
    }
}
