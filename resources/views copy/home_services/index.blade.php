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
                    {{-- <th scope="col">section title</th> --}}
                    <th scope="col">service title</th>
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
                    @foreach ($home_services as $service )
                  <tr>
                    <th scope="row">{{ $sl++ }}</th>
                    {{-- <td>{{ $service->section_title; }}</td> --}}
                    <td>{{ $service->service_title; }}</td>
                    <td>{{ $service->service_image; }}</td>
                    <td>{{ $service->status; }}</td>
                    <td><a href="{{ route('home_service_edit', ['id' => $service->id]) }}">edit</a></td>
                    <td><form action="{{ route('home_service_destroy', ['id' => $service->id]) }}" method="POST">
                        @csrf
                        @method('PUT')
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
