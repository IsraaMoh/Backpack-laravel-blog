<?php

namespace App\Policies;

use App\User;
use App\Post;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */

    public function create (User $user) {
        if($user->can('posts-create')){
            return true;
        }
    }

    public function edit (User $user) {
        return true;
    }

    public function update (User $user) {
        return true;
    }

    public function __construct()
    {
        //
    }
}
