<?php

namespace App\Http\Controllers\Backend;

use File;
use App\Project;
use App\Post;
use App\Picture;
use App\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //******************************
    //************ CRUD ************
    //******************************

    public function index()
    {
        //
        return view('backend.dashboard.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Policies - voir la classe ProjectPolicy de l'application App/Policies
        // Un service est transverse, tous les controleurs peuvent accéder aux services
        // Il est nécessaire de passer la signature Project::class en signature car c'est fait pour avoir une autorisation par rapport à une ressource 
        $this->authorize('create', Project::class);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->authorize('create', Project::class);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        //
         $this->authorize('create', Project::class);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        //
         $this->authorize('create', Project::class);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $project = Project::findOrFail($id);
        //$this->authorize('delete', $project);

        $title = $project->title;
        $project->delete();
        return redirect()->route('projects_home')->with('message', 'Suppression du projet $title effectué !');
    }
    // méthode permettant de supprimer une image facilement dans le contrôleur
    // mettez votre private pour éviter un jour de la connecter à une URI

}
