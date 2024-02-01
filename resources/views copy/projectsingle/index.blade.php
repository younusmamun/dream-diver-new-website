@extends('layouts.master')

@section('sidebar')
    @include('sidebar')
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 mt-4">
            <p>Home Page All Services</p>
        </div>

        <div class="col-lg-12">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">sl</th>
                    <th scope="col">project id</th>
                    <th scope="col">Project image</th>
                    <th scope="col">Project title</th>
                    <th scope="col">Project desc</th>
                    <th scope="col">Project short desc</th>
                    <th scope="col">Project Link</th>
                    <th scope="col">video Link</th>
                    <th scope="col">Client Review</th>
                    <th scope="col">Client Video Review</th>
                    <th scope="col">status</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                  </tr>
                </thead>

                <tbody>
                    @php
                        $sl = 1;
                    @endphp
                    @foreach ($single_projects as $project )
                  <tr>
                    <th scope="row">{{ $sl++ }}</th>
                    <td>{{ $project->project_id; }}</td>
                    <td>{{ $project->project_cover_photo; }}</td>
                    <td>{{ $project->project_title; }}</td>
                    <td>{{ $project->project_description; }}</td>
                    <td>{{ $project->project_short_description; }}</td>
                    <td>{{ $project->project_link; }}</td>

                    <td>{{ $project->project_video_link; }}</td>
                    <td>{{ $project->project_client_review; }}</td>
                    <td>{{ $project->project_client_video_review; }}</td>


                    <td>{{ $project->status; }}</td>
                    {{-- <td><a href="{{ route('projects.edit', ['id' => $project->id]) }}">edit</a></td> --}}
                    {{-- <td><a href="{{ route('projectsingle.edit', ['projectsingle' => $project->id]) }}">edit</a></td> --}}
                    <td><a href="{{ route('projectsingle_edit', ['id' => $project->id]) }}">edit</a></td>



                    <td><form action="{{ route('projectsingle_destroy', ['id' => $project->id]) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <p>
                            <button type="submit">Delete</button> <br>
                        </p>
                    </form></td>
                  </tr>


                  </tr>
                  @endforeach

                </tbody>
              </table>
        </div>

    </div>

</div>
@endsection
