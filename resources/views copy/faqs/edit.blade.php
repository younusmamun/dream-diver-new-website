@extends('layouts.master')

@section('sidebar')
    @include('sidebar')
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 mt-4">
            <p>FAQ edit</p>
        </div>
        <div class="col-lg-12">

            <form class="row g-3" action="{{ route('faqs.update', ['faq' => $faq->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')



                <div class="col-12">
                    <label for="inputAddress2" class="form-label">FAQ Question</label>
                    <input type="text"  name="faq_question"  class="form-control" id="inputAddress2" value="{{ $faq->faq_question}}">
                </div>

                <div class="col-12">
                    <label for="inputAddress2" class="form-label">FAQ Answer</label>
                    <input type="text"  name="faq_answer"  class="form-control" id="inputAddress2" value="{{ $faq->faq_answer}}"  placeholder="">
                </div>


                <div class="col-12">
                    <label for="inputAddress2" class="form-label">Status</label>
                    <div class="form-check">
                        <input type="radio" name="status" id="statusYes" class="form-check-input" value="on" {{ $faq->status == 'on' ? 'checked' : '' }}>
                        <label for="statusYes" class="form-check-label">On</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" name="status" id="statusNo" class="form-check-input" value="off" {{ $faq->status == 'off' ? 'checked' : '' }}>
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
