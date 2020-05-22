@extends('admin.layout.app')


@section('content')
{{-- @include('admin.layout.statboard') --}}
@include('admin.layout.statboardcontainer')
<!-- Main row -->
<div class="row">
    <!-- Left col -->
    <section class="col-lg-12 connectedSortable">

        <br>
        <div class="row">
            <div class="col-md-5">
                <div class="box">
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                                <img src="{{url('user_images',$user->userimage)}}" alt=""
                                    class="img-responsive img-circle" style="width: 150px; height: 150px; border-radius: 50%;">
                                <form action="{{ route('user.profile.update') }}" method="post"
                                    enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <br>
                                    <input type="file" name="userimage" required>
                                    <p></p>
                                    <button type="submit" class="btn btn-success btn-sm text-center"><span
                                            class="fa fa-upload"></span>
                                        Upload your
                                        Photo</button>
                                </form>
                            </div>
                            <div class="col-md-4"></div>
                        </div>

                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <div class="col-md-7">
                <div class="box">
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-12">
                                <h3>{{ auth()->user()->firstname.' '.auth()->user()->lastname }}'s Details</h3>
                                <hr>
                                <div><span class="fa fa-envelope"></span> {{ auth()->user()->email }}</div>
                                <div><span class="fa fa-phone"></span> {{ auth()->user()->phone }}</div>
                                <div><span class="fa fa-briefcase"></span> {{ auth()->user()->role->name }}</div>
                                <div><span class="fa fa-clock-o"></span> {{ auth()->user()->created_at->format('l d F, Y') }} [Date Created]</div>
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
