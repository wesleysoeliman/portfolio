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
        return view('projects.index')->with('projects', $projects);
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
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'category_id' => 'required',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();

            $image->storeAs('public/img', $imageName);

            $imageName = 'storage/img/' . $imageName;

            Project::create([
                'title' => $request->title,
                'description' => $request->description,
                'image' => $imageName,
                'category_id' => $request->category_id,
            ]);

            return redirect()->route('dashboard')->with('success', 'Project is aangemaakt');
        }

        return redirect()->back()->with('error', 'Geen afbeelding geüpload');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        return view('projects.show',compact('project'));
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
    public function update(Request $request, Project $project)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'category_id' => 'required',
        ]);

        // Update the project attributes with values from the request
        $project->title = $request->input('title');
        $project->description = $request->input('description');
        $project->category_id = $request->input('category_id');

        // Check if there is a new image uploaded
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();

            $image->storeAs('public/img', $imageName);

            $imageName = 'storage/img/' . $imageName;

            $project->image = $imageName;
        }

        // Save the updated project
        $project->save();

        return redirect()->route('dashboard')->with('success', 'Project is geüpdatet');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $project = Project::findOrFail($id);

        $project->delete();
        return redirect()->route('dashboard')->with('success', 'Project verwijderd');
    }
}
