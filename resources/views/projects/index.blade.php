@extends('layouts.master')


@section('content')
<div class="content-wrapper" style="min-height: 320.4px;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Home page all services</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">All Projects</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">

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
        <!-- /.row -->

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

@endsection
