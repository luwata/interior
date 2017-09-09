<?php

namespace App\Policies;

use App\User;
use App\Project;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProjectPolicy
{
    use HandlesAuthorization;

    public function before($user, $ability)
    {
        if ( $user->isAdmin() ) {
            return true;
        }
    }

    /**
     * Determine whether the user can view the project.
     *
     * @param  \App\User  $user
     * @param  \App\Project  $project
     * @return mixed
     */
    public function view(User $user, Project $project = null)
    {
        // return true;
    }

    /**
     * Determine whether the user can create projects.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        // Si on est un éditeur on pourra créer un projet
        return $user->isEditor();
    }

    public function edit(User $user, Project $project)
    {
        // J'édite que le project que j'ai déjà crée
        // return $user->id === $project->user_id;
        return $user->owner($project->user_id);
    }

    /**
     * Determine whether the user can update the project.
     *
     * @param  \App\User  $user
     * @param  \App\Project  $project
     * @return mixed
     */
    public function update(User $user, Project $project)
    {
        // mettre à jour un projet que j'ai crée
        return $user->owner($project->user_id);
    }

    /**
     * Determine whether the user can delete the project.
     *
     * @param  \App\User  $user
     * @param  \App\Project  $project
     * @return mixed
     */
    public function delete(User $user, Project $project)
    {
        // Supprimer un projet que j'ai crée
        return $user->owner($project->user_id);
    }
}
