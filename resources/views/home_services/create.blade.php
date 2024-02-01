@extends('layouts.master')


@section('content')
<div class="content-wrapper" style="min-height: 320.4px;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Home Page Service Create</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Home Page Service Create</li>
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

            <form class="row g-3" action="{{ route('home_service_store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                {{-- <div class="col-12">
                  <label for="inputAddress" class="form-label">Section title</label>
                  <input name="section_title" type="text" class="form-control" id="inputAddress" placeholder="">
                </div> --}}
                <div class="col-12">
                    <label for="inputAddress2" class="form-label">Service title</label>
                    <input type="text"  name="service_title"  class="form-control" id="inputAddress2" placeholder="">
                </div>
                <div class="col-12">
                  <label for="inputAddress2" class="form-label">Image upload</label>
                  <input type="file" id="img" name="service_image" accept="image/*"  class="form-control"  placeholder="">
                </div>


                {{-- <div class="col-12">
                    <label for="inputAddress2" class="form-label">Status</label>
                    <input type="text"  name="status"  class="form-control" id="inputAddress2" value="yes">
                </div> --}}

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


        </div>
        </div>
        <!-- /.row -->

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

@endsection






