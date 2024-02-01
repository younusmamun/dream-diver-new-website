@extends('layouts.master')

@section('sidebar')
    @include('sidebar')
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 mt-4">
            <p>Home Page Service Create</p>
        </div>
        <div class="col-lg-12">

            <form class="row g-3" action="{{ route('home_service_update', ['id' => $home_service->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                {{-- <div class="col-12">
                  <label for="inputAddress" class="form-label">Section title</label>
                  <input name="section_title" type="text" class="form-control" id="inputAddress" value="{{ $home_service->section_title}}">
                </div> --}}
                <div class="col-12">
                    <label for="inputAddress2" class="form-label">Service title</label>
                    <input type="text"  name="service_title"  class="form-control" id="inputAddress2" value="{{ $home_service->service_title}}">
                </div>
                <div class="col-12">
                  <label for="inputAddress2" class="form-label">Image upload</label>
                  <p>{{ $home_service->service_image }}</p>
                  <input type="file" id="img" name="service_image" accept="image/*"  class="form-control"  placeholder="Apartment, studio, or floor">
                </div>



                <div class="col-12">
                    <label for="inputAddress2" class="form-label">Status</label>
                    <div class="form-check">
                        <input type="radio" name="status" id="statusYes" class="form-check-input" value="on" {{ $home_service->status == 'on' ? 'checked' : '' }}>
                        <label for="statusYes" class="form-check-label">On</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" name="status" id="statusNo" class="form-check-input" value="off" {{ $home_service->status == 'off' ? 'checked' : '' }}>
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
