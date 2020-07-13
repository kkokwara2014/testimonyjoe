@extends('admin.layout.app')


@section('content')
{{-- @include('admin.layout.statboard') --}}
@include('admin.layout.statboardcontainer')
<!-- Main row -->
<div class="row">
    <!-- Left col -->
    <section class="col-lg-12 connectedSortable">
        <div>
            <a href="{{ route('event.index') }}" class="btn btn-success btn-sm">
                Back</a>
        </div>
        <br>
        <div class="row">
            <div class="col-md-9">
                <div class="box">
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-5">
                                <img src="{{url('event_images',$event->image)}}" alt=""
                                    class="img-responsive img-rounded" width="350" height="350">

                            </div>
                            <div class="col-md-7">
                                <p>
                                    <h2>{{$event->title}}</h2>
                                </p>
                                <hr>

                                <div>Venue : {{ $event->venue }} </div>
                                <div>Event Date : {{ $event->eventdate }} </div>
                                <div>Event time : {{ $event->eventtime }} </div>
                                <div>Description : {{$event->description!=''?$event->description:'N/A'}} </div>

                                <hr>
                                <strong>Added By</strong><p></p>
                                <div>
                                    <span class="fa fa-user"></span>
                                    <strong>{{$event->user->firstname.', '.$event->user->lastname}}</strong>
                                </div>
                                <div>
                                    <span class="fa fa-phone"></span> {{$event->user->phone}}
                                </div>
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
