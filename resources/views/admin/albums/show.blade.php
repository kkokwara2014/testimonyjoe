@extends('admin.layout.app')


@section('content')
{{-- @include('admin.layout.statboard') --}}
@include('admin.layout.statboardcontainer')
<!-- Main row -->
<div class="row">
    <!-- Left col -->
    <section class="col-lg-12 connectedSortable">
        <div>
            <a href="{{ route('album.index') }}" class="btn btn-success btn-sm">
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
                                <img src="{{url('album_images',$album->albumimage)}}" alt=""
                                    class="img-responsive img-rounded" width="250" height="250">

                            </div>
                            <div class="col-md-7">
                                <p>
                                    <h2>{{$album->title}}</h2>
                                </p>
                                <hr>

                                <div>Artist : <strong>{{$album->artistfullname}}</strong> </div>
                                <div>Category : {{$album->albumcategory->name}} </div>
                                <div>Year of Release : {{$album->yearofpub}} </div>

                                <br>
                                <div>
                                    Added by :
                                    <strong>{{$album->user->firstname.', '.$album->user->lastname}}</strong>
                                </div>
                                <div>Phone : {{$album->user->phone}}</div>
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
