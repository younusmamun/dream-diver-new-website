<?php

namespace App\Http\Controllers;

use App\Models\Projectsinglepage;
use App\Models\Project;
use App\Http\Requests\StoreProjectsinglepageRequest;
use App\Http\Requests\UpdateProjectsinglepageRequest;
use Illuminate\Http\Request;


class ProjectsinglepageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $single_projects = Projectsinglepage::all();
        return view('projectsingle.index', compact('single_projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
{
    $projects = Project::all();
    return view('projectsingle.create', compact('projects'));
}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $data = $request->all();

        $filename_path = null;
        if (isset($data['project_cover_photo']) && $data['project_cover_photo']) {
            $file = $data['project_cover_photo'];

            $name = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $filename = pathinfo($name, PATHINFO_FILENAME) . time() . '.' . $extension;
            $filename_path = request()->file('project_cover_photo')->storeAs('projects_cover_photo', $filename);
        }

        $project = new Projectsinglepage();

        $project->project_id = $data['project_id'];
        $project->project_cover_photo = $filename_path;
        $project->project_title = $data['project_title'];
        $project->project_description = $data['project_description'];
        $project->project_short_description = $data['project_short_description'];
        $project->project_video_link = $data['project_video_link'];
        $project->project_link = $data['project_link'];
        $project->project_client_review = $data['project_client_review'];
        $project->project_client_video_review = $data['project_client_video_review'];
        $project->status = $data['status'];
        $project->save();



        return redirect()->back()->with('success', 'Project Single page created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Projectsinglepage $projectsinglepage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //return view('projectsingle.edit', compact('projectsinglepage'));

        $projects = Project::all();

        $project_singlepage = Projectsinglepage::where('id', $id)->first();

        return view('projectsingle.edit', compact('project_singlepage','projects'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();

        $project = Projectsinglepage::findOrFail($id);

        $filename_path = null;
        if (isset($data['project_cover_photo']) && $data['project_cover_photo']) {
            $file = $data['project_cover_photo'];

            $name = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $filename = pathinfo($name, PATHINFO_FILENAME) . time() . '.' . $extension;
            $filename_path = request()->file('project_cover_photo')->storeAs('projects_cover_photo', $filename);
        }



        $project->project_id = $data['project_id'];
        $project->project_cover_photo = $filename_path;
        $project->project_title = $data['project_title'];
        $project->project_description = $data['project_description'];
        $project->project_short_description = $data['project_short_description'];
        $project->project_video_link = $data['project_video_link'];
        $project->project_link = $data['project_link'];
        $project->project_client_review = $data['project_client_review'];
        $project->project_client_video_review = $data['project_client_video_review'];
        $project->status = $data['status'];
        $project->save();



        return redirect()->back()->with('success', 'Project Single page Updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // $projectsinglepage->delete();

        // // You can add a redirect or any other logic after the deletion.
        // return redirect()->route('projectsingle.index')->with('success', 'ProjectSingle deleted successfully');

        // Find the HomeService record by ID
        //$homeService = HomeService::find($id);
        $project_singlepage = Projectsinglepage::where('id', $id)->first();

        // Check if the record exists
        if (!$project_singlepage) {
            return redirect()->route('projectsingle')->with('error', 'Record not found');
        }

        // Perform the deletion
        $project_singlepage->delete();

        // Redirect with a success message
        return redirect()->back()->with('success', 'Record deleted successfully');
    }
}
