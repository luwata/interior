<?php

namespace App\Http\Controllers\Backend;

use File;
use Project;
use Post;
use Picture;
use Contact;
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
    //********** METHODS ***********
    //******************************

    public function projects()
    {
        $foo = 'Project 1';

        return view('backend.dashboard.projects.index', [
                'foo' => $foo,
            ]);
    }



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
    }
}
