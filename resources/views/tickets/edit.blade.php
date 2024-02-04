@extends('layouts.master')


@section('content')
<div class="content-wrapper" style="min-height: 320.4px;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Ticket Reply</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Ticket comment</li>
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

            <form class="row g-3" action="{{ route('tickethistory_store') }}" method="POST" enctype="multipart/form-data">
                @csrf


                <div class="col-12">
                    <label for="inputAddress2" class="form-label">Ticket id (hidden)</label>
                    <input type="text"  name="ticket_id"  class="form-control" id="inputAddress2" value="{{ $ticket->id}}" readonly>
                </div>

                <div class="col-12">
                    <label for="inputAddress2" class="form-label">User id (hidden)</label>
                    <input type="text" name="user_id" class="form-control" id="inputAddress2" value="{{ auth()->user()->id }}" readonly>
                </div>


                <div class="col-12">
                    <label for="inputAddress2" class="form-label">User Email</label>
                    <input type="text"  name="email"  class="form-control" id="inputAddress2" value="{{ $ticket->email}}" readonly>
                </div>

                <div class="col-12">
                    <label for="inputAddress2" class="form-label">Status</label>
                    <div class="form-check">
                        <input type="radio" name="status" id="statusYes" class="form-check-input" value="on" {{ $ticket->status == 'on' ? 'checked' : '' }} readonly>
                        <label for="statusYes" class="form-check-label">On</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" name="status" id="statusNo" class="form-check-input" value="off" {{ $ticket->status == 'off' ? 'checked' : '' }} readonly>
                        <label for="statusNo" class="form-check-label">Off</label>
                    </div>
                </div>

                <div class="col-12">
                    <label for="inputAddress2" class="form-label">Issue</label>
                    <input type="text"  name="issue"  class="form-control" id="inputAddress2" value="{{ $ticket->issue}}"  placeholder="" readonly>
                </div>

                <div class="col-12 mt-4">
                    <P>Ticket comment history</P>
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Ticket Creator</th>
                                <th>Admin</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($ticket_history as $history)
                                <tr>
                                    @if($history->comment_user_id != 1)
                                        <td class="table-success">{{$history->comment}}</td>
                                        <td></td>
                                    @else
                                        <td></td>
                                        <td class="table-info">{{$history->comment}}</td>
                                    @endif
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>




                <div class="col-12 mb-4">
                    <label for="inputAddress2" class="form-label">Comment for ticket</label>
                    <input type="text"  name="comment"  class="form-control" id="inputAddress2" value=""  placeholder="">
                </div>


                <div class="col-12 mb-4">
                  <button type="submit" class="btn btn-primary">Update</button>
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
