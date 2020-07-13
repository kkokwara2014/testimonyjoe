@extends('admin.layout.app')


@section('content')
{{-- @include('admin.layout.statboard') --}}
@include('admin.layout.statboardcontainer')
<!-- Main row -->
<div class="row">
    <!-- Left col -->
    <section class="col-lg-12 connectedSortable">
        <div>
            <a href="{{ route('track.index') }}" class="btn btn-success btn-sm">
                Back</a>
        </div>
        <br>
        <div class="row">
            <div class="col-md-9">
                <div class="box">
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">

                            <div class="col-md-11">
                                <p>
                                    <h2>{{$track->title}}</h2>
                                </p>
                                <hr>

                                <div>Album: {{$track->album->title}}</div>
                                <div>Track Category: {{$track->trackcategory->name}}</div>
                                <div>Audio File:
                                    <p></p>
                                    <audio controls>
                                        <source src="{{asset('storage/tracks/'.$track->filename)}}" />
                                    </audio>
                                    {{-- <audio autoplay controls src="{{asset('storage/tracks/'.$track->filename)}}"></audio> --}}
                                </div>

                                <hr>
                                <strong>Added By</strong>
                                <p></p>
                                <div>
                                    <span class="fa fa-user"></span>
                                    <strong>{{$track->user->firstname.', '.$track->user->lastname}}</strong>
                                </div>
                                <div>
                                    <span class="fa fa-phone"></span> {{$track->user->phone}}
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
