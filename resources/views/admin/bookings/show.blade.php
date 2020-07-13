@extends('admin.layout.app')


@section('content')
{{-- @include('admin.layout.statboard') --}}
@include('admin.layout.statboardcontainer')
<!-- Main row -->
<div class="row">
    <!-- Left col -->
    <section class="col-lg-12 connectedSortable">
        <div>
            <a href="{{ route('booking.index') }}" class="btn btn-success btn-sm">
                Back</a>
        </div>
        <br>
        <div class="row">
            <div class="col-md-7">
                <div class="box">
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">

                            <div class="col-md-11">

                                <hr>

                                <div>Booking Ref. # : <strong>{{$booking->bookingref}}</strong> </div>
                                <div>Booked by : <strong>{{$booking->fullname}}</strong> </div>
                                <div><span class="fa fa-envelope-o"></span> {{ $booking->email }}</div>
                                <div><span class="fa fa-phone"></span> {{ $booking->phone }}</div>
                                <div><span class="fa fa-calendar"></span> {{ $booking->eventdate }}</div>
                                <div><span class="fa fa-clock-o"></span> {{ $booking->eventtime }}</div>
                                <div>Event Type: {{ $booking->eventtype }}</div>
                                <div>Location: {{ $booking->country->name }}</div>
                                <div>Booked on: {{ date('D d M, Y', strtotime($booking->created_at)) }}</div>
                                <div>Additional Info. : {{$booking->additionalinfo!=''?$booking->additionalinfo:'N/A'}} </div>

                                <hr>

                            </div>

                        </div>

                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
        </div>



    </section>
    <!-- /.Left col -->
    <!-- right col (We are only adding the ID to make the widgets sortable)-->
    {{-- <section class="col-lg-5 connectedSortable"> --}}


    {{-- </section> --}}
    <!-- right col -->
</div>
<!-- /.row (main row) -->

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection
