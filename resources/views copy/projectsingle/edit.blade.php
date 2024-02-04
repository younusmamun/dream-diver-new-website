@extends('layouts.master')

@section('sidebar')
    @include('sidebar')
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 mt-4">
            <p>Project edit</p>
        </div>
        <div class="col-lg-12">

            <form class="row g-3" action="{{ route('projectsingle_update', ['id' => $project_singlepage->id]) }}"  method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="col-12">
                    <label for="projectSelect" class="form-label">Select Project</label>
                    <select id="projectSelect" name="project_id" class="form-select">
                        {{-- Loop through your projects and generate options --}}
                        @foreach($projects as $project)
                            <option value="{{ $project->id }}">{{ $project->project_title }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-12">
                    <label for="inputAddress2" class="form-label">Project Cover Photo upload</label>
                    <p>{{$project_singlepage->project_cover_photo}}</p>
                    <input type="file" id="img" name="project_cover_photo" accept="image/*" class="form-control" placeholder="">
                </div>
                <div class="col-12">
                    <label for="inputAddress2" class="form-label">Project title</label>
                    <input type="text" name="project_title" class="form-control" id="inputAddress2" value="{{ $project_singlepage->project_title}}">
                </div>
                <div class="col-12">
                    <label for="inputAddress2" class="form-label">Project Description </label>
                    <input type="text" name="project_description" class="form-control" id="inputAddress2" value="{{ $project_singlepage->project_description}}" placeholder="">
                </div>
                <div class="col-12">
                    <label for="inputAddress2" class="form-label">Project Short Description</label>
                    <input type="text" name="project_short_description" class="form-control" id="inputAddress2"  value="{{ $project_singlepage->project_short_description}}" placeholder="">
                </div>
                <div class="col-12">
                    <label for="inputAddress2" class="form-label">Project video link</label>
                    <input type="text" name="project_video_link" class="form-control" id="inputAddress2"  value="{{ $project_singlepage->project_video_link}}" placeholder="">
                </div>
                <div class="col-12">
                    <label for="inputAddress2" class="form-label">Project Link</label>
                    <input type="text" name="project_link" class="form-control" id="inputAddress2" value="{{ $project_singlepage->project_link}}" placeholder="">
                </div>
                <div class="col-12">
                    <label for="inputAddress2" class="form-label">Client Review</label>
                    <input type="text" name="project_client_review" class="form-control" id="inputAddress2"  value="{{ $project_singlepage->project_client_review}}" placeholder="">
                </div>
                <div class="col-12">
                    <label for="inputAddress2" class="form-label">Client Video Review</label>
                    <input type="text" name="project_client_video_review" class="form-control" id="inputAddress2"  value="{{ $project_singlepage->project_client_video_review}}" placeholder="">
                </div>


                <div class="col-12">
                    <label for="inputAddress2" class="form-label">Status</label>
                    <div class="form-check">
                        <input type="radio" name="status" id="statusYes" class="form-check-input" value="on" {{ $project_singlepage->status == 'on' ? 'checked' : '' }}>
                        <label for="statusYes" class="form-check-label">On</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" name="status" id="statusNo" class="form-check-input" value="off" {{ $project_singlepage->status == 'off' ? 'checked' : '' }}>
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
