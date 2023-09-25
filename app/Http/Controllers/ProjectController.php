<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();
        return view('projects.index')
        ->with('projects', $projects);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('projects.create', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Project::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $request->image,
            'category_id' => $request->category_id,
        ]);
        return redirect()->route('projects.index')->with('succes', 'Project is aangemaakt');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        $categories = Category::all();
        return view('projects.edit', compact('project', 'categories'));

    }

    /**
     * Update the specified resource in storage.
     */

     public function search(Request $request)
     {
         $search = $request->search;
     
         $projects = Project::where(function ($query) use ($search) {
             $query->where('title', 'like', "%$search%")
                   ->orWhere('description', 'like', "%$search%");
         })
         ->orWhereHas('category', function ($query) use ($search) {
             $query->where('name', 'like', "%$search%");
         })
         ->get();
         return view('projects.index', compact('projects', 'search'));
     }
     
     
     public function update(Request $request, Project $project)
     {
         $request->validate([
             'title' => ['required'],
             'image' => ['required'],
             'description' => ['required'],
             'category_id' => ['required'],
         ]);
     
         // Update the project attributes with values from the request
         $project->title = $request->input('title');
         $project->image = $request->input('image');
         $project->description = $request->input('description');
         $project->category_id = $request->input('category_id');
     
         // Save the updated project
         $project->save();
     
         return redirect()
             ->route('projects.index')
             ->with('success', 'Project is geüpdatet'); // Use 'success' instead of 'Edit is geüpdatet'
     }
     

 
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        {
    
            $project = Project::findOrFail($id); // 
    
            $project->delete();
            return redirect()
                ->route('projects.index')
                ->with('success', 'Project verwijderd');
    
        }
    }
}