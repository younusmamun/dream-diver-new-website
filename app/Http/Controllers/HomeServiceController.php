<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomeService;

class HomeServiceController extends Controller
{

    public function index(){
        $home_services = Homeservice::all();
        return view('home_services.index', compact('home_services'));
    }

    public function create()
    {
        return view('home_services.create');
    }


    public function store(Request $request)
    {
        $data = $request->all();

        $filename_path = null;
        if (isset($data['service_image']) && $data['service_image']) {
            $file = $data['service_image'];

            $name = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $filename = pathinfo($name, PATHINFO_FILENAME) . time() . '.' . $extension;
            $filename_path = request()->file('service_image')->storeAs('services_image', $filename);
        }

        $home_service = new Homeservice();

        $home_service->service_title = $data['service_title'];
        $home_service->service_image = $filename_path;
        $home_service->status = $data['status'];
        $home_service->save();



        return redirect()->back()->with('success', 'Home service created successfully!');
    }


    public function edit($id)
    {
        $home_service = Homeservice::where('id', $id)->first();

        return view('home_services.edit', compact('home_service'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();

        // Find the existing record by ID
        $home_service = Homeservice::findOrFail($id);

        $filename_path = $home_service->service_image;

        // Check if a new service image is provided
        if (isset($data['service_image']) && $data['service_image']) {
            $file = $data['service_image'];

            $name = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $filename = pathinfo($name, PATHINFO_FILENAME) . time() . '.' . $extension;
            $filename_path = request()->file('service_image')->storeAs('services_image', $filename);
        }

        // Update the attributes
        $home_service->service_title = $data['service_title'];
        $home_service->service_image = $filename_path;
        $home_service->status = $data['status'];

        // Save the changes
        $home_service->save();

        return redirect()->back()->with('success', 'Home service updated successfully!');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Find the HomeService record by ID
        $homeService = HomeService::find($id);

        // Check if the record exists
        if (!$homeService) {
            return redirect()->route('home_service_index')->with('error', 'Record not found');
        }

        // Perform the deletion
        $homeService->delete();

        // Redirect with a success message
        return redirect()->route('home_service_index')->with('success', 'Record deleted successfully');
    }

}
