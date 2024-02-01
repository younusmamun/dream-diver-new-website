@extends('layouts.master')


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
                    <th scope="col">service title</th>
                    <th scope="col">service intro</th>
                    <th scope="col">Project Link</th>
                    <th scope="col">service image</th>
                    <th scope="col">status</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                  </tr>
                </thead>

                <tbody>
                    @php
                        $sl = 1;
                    @endphp
                    @foreach ($projects as $project )
                  <tr>
                    <th scope="row">{{ $sl++ }}</th>
                    <td>{{ $project->project_title; }}</td>
                    <td>{{ $project->project_intro; }}</td>
                    <td>{{ $project->project_link; }}</td>
                    <td>{{ $project->project_image; }}</td>
                    <td>{{ $project->status; }}</td>
                    {{-- <td><a href="{{ route('projects.edit', ['id' => $project->id]) }}">edit</a></td> --}}
                    <td><a href="{{ route('projects.edit', ['project' => $project->id]) }}">edit</a></td>

                    <td><form action="{{ route('projects.destroy', ['project' => $project->id]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <p>
                            <button type="submit">Delete</button> <br>
                        </p>
                    </form></td>
                  </tr>
                  @endforeach

                </tbody>
              </table>
        </div>

    </div>

</div>
@endsection
