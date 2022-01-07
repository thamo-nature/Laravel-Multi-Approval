<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Project;


class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $requests = Project::latest()->get();
        return view('projects.index', compact('requests'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        Project::create([
            'title' => $request['name'],
            'user_id' => Auth::user()->role_id,
            'body' => $request['body'],
            'price' =>$request['price'],
            'location' => $request['location'],     
            'status' => 0,               
        ]);

        return redirect('projects');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $project = Project::findOrFail($id);        
        return view('projects.show',compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $project = Project::findOrFail($id);        
        return view('projects.edit',compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $project = Project::findOrFail($id);
        $project->title = $request->name;
        $project->body = $request->body;
        $project->price = $request->price;
        $project->location = $request->location;
        $project->status = 1;
        $project->save();

        return redirect('projects');
    }


    public function admin_update(Request $request, $id)
    {
        $project = Project::findOrFail($id);
        $project->title = $request->name;
        $project->body = $request->body;
        $project->price = $request->price;
        $project->location = $request->location;
        $project->status = 2;
        $project->save();

        return redirect('projects');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = Project::findOrFail($id);
        $project->delete();
        return redirect('projects');
    }
}
