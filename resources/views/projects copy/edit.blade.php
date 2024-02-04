@extends('layouts.master')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 mt-4">
            <p>Project edit</p>
        </div>
        <div class="col-lg-12">

            <form class="row g-3" action="{{ route('projects.update', ['project' => $project->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="col-12">
                    <label for="inputAddress2" class="form-label">Project Image upload</label>
                    <p>{{ $project->project_image }}</p>
                    <input type="file" id="img" name="project_image" accept="image/*"  class="form-control" >
                  </div>

                <div class="col-12">
                    <label for="inputAddress2" class="form-label">Project title</label>
                    <input type="text"  name="project_title"  class="form-control" id="inputAddress2" value="{{ $project->project_title}}">
                </div>

                <div class="col-12">
                    <label for="inputAddress2" class="form-label">Project Intro </label>
                    <input type="text"  name="project_intro"  class="form-control" id="inputAddress2" value="{{ $project->project_intro}}"  placeholder="">
                </div>
                <div class="col-12">
                    <label for="inputAddress2" class="form-label">project Link</label>
                    <input type="text"  name="project_link"  class="form-control" id="inputAddress2" value="{{ $project->project_link}}"  placeholder="">
                </div>



                <div class="col-12">
                    <label for="inputAddress2" class="form-label">Status</label>
                    <div class="form-check">
                        <input type="radio" name="status" id="statusYes" class="form-check-input" value="on" {{ $project->status == 'on' ? 'checked' : '' }}>
                        <label for="statusYes" class="form-check-label">On</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" name="status" id="statusNo" class="form-check-input" value="off" {{ $project->status == 'off' ? 'checked' : '' }}>
                        <label for="statusNo" class="form-check-label">Off</label>
                    </div>
                </div>


                <div class="col-12">
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>

              </form>






        </div>
    </div>

</div>
@endsection
