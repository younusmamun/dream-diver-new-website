@extends('layouts.master')

@section('sidebar')
    @include('sidebar')
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 mt-4">
            <p>Project Single view Create</p>
        </div>
        <div class="col-lg-12">

            <form class="row g-3" action="{{ route('projectsingle.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col-12">
                    <label for="inputAddress2" class="form-label">Project Cover Photo upload</label>
                    <input type="file" id="img" name="project_cover_photo" accept="image/*"  class="form-control"  placeholder="">
                  </div>
                <div class="col-12">
                    <label for="inputAddress2" class="form-label">Project title</label>
                    <input type="text"  name="project_title"  class="form-control" id="inputAddress2" placeholder="">
                </div>
                <div class="col-12">
                    <label for="inputAddress2" class="form-label">Project Intro </label>
                    <input type="text"  name="project_intro"  class="form-control" id="inputAddress2" placeholder="">
                </div>
                <div class="col-12">
                    <label for="inputAddress2" class="form-label">project Link</label>
                    <input type="text"  name="project_link"  class="form-control" id="inputAddress2" placeholder="">
                </div>

                <div class="col-12">
                    <label for="inputAddress2" class="form-label">Status</label>
                    <div class="form-check">
                        <input type="radio" name="status" id="statusYes" class="form-check-input" value="on" checked>
                        <label for="statusYes" class="form-check-label">On</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" name="status" id="statusNo" class="form-check-input" value="off">
                        <label for="statusNo" class="form-check-label">Off</label>
                    </div>
                </div>


                <div class="col-12">
                  <button type="submit" class="btn btn-primary">Create</button>
                </div>

              </form>





            @php
                //dd($home_services);
            @endphp
        </div>
    </div>

</div>
@endsection
