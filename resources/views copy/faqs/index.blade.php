@extends('layouts.master')

@section('sidebar')
    @include('sidebar')
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 mt-4">
            <p>Home Page All FAQ </p>
        </div>

        <div class="col-lg-12">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">sl</th>
                    <th scope="col">FAQ Question title</th>
                    <th scope="col">FAQ Answer</th>
                    <th scope="col">status</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                  </tr>
                </thead>

                <tbody>
                    @php
                        $sl = 1;
                    @endphp
                    @foreach ($faqs as $faq )
                  <tr>
                    <th scope="row">{{ $sl++ }}</th>
                    <td>{{ $faq->faq_question; }}</td>
                    <td>{{ $faq->faq_answer; }}</td>
                    <td>{{ $faq->status; }}</td>
                    {{-- <td><a href="{{ route('projects.edit', ['id' => $project->id]) }}">edit</a></td> --}}
                    <td><a href="{{ route('faqs.edit', ['faq' => $faq->id]) }}">edit</a></td>

                    <td><form action="{{ route('faqs.destroy', ['faq' => $faq->id]) }}" method="POST">
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
