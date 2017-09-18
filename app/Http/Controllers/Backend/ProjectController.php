<?php

namespace App\Http\Controllers\Backend;

use File;
use App\User;
use App\Project;
use App\Post;
use App\Picture;
use App\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProjectController extends Controller
{
    //

    public function index()
	{
	    //

	    $projects = Project::orderBy('created_at', 'DESC')->progress()->get();

        return view('backend.dashboard.projects.index', ['projects' => $projects]);
	}

	public function create()
    {
       
        // Test non reussi
        // $this->authorize('create', Project::class);

        // collection d'utilisateurs avec le role "customer"
        // $customers = User::orderBy('username', 'DESC')->customers()->pluck('username', 'id')->all(); 
        $customers = User::orderBy('username', 'DESC')->pluck('username', 'id')->all(); 
        
        // retourne le formulaire de création d'un projet
        return view('backend.dashboard.projects.create', ['customers' => $customers]);
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
        // $this->authorize('create', Project::class);

        // echo '<pre>';
        // dump($request);
        // echo  '</pre>';

        $this->validate($request, [

            'user_id'       => 'integer',
            'title'         => 'string',
            'location'      => 'string',
            'scheduled_at'  => 'date'
            
        ]);

        Project::create($request->all());

        return redirect()->route('projects_home')->with('message', 'ajout réalisé');
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
        $project = Project::findOrFail($id);
        return view('backend.dashboard.projects.sheet', ['project' => $project]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        //
        // collection d'utilisateurs avec le role "customer"
        // $customers = User::orderBy('username', 'DESC')->customers()->pluck('username', 'id')->all(); 

        $customers = User::orderBy('username', 'DESC')->pluck('username', 'id')->all(); 

        $project = Project::findOrFail($id);

        return view('backend.dashboard.projects.edit', 
                    [
                        'project' => $project,
                        'customers' => $customers
                    ]);
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

}

