@extends('admin.layout.app')


@section('content')
{{-- @include('admin.layout.statboard') --}}
@include('admin.layout.statboardcontainer')
<!-- Main row -->
<div class="row">
    <!-- Left col -->
    <section class="col-lg-12 connectedSortable">
        <div>
            <a href="{{ route('staffs.index') }}" class="btn btn-success btn-sm">
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
                                <img src="{{url('user_images',$staff->userimage)}}" alt=""
                                    class="img-responsive img-rounded" width="250" height="250">

                            </div>
                            <div class="col-md-7">
                                <p>
                                    <h2>{{$staff->firstname.' '.$staff->lastname}}</h2>
                                </p>
                                <hr>
                               
                                <div>Email : {{$staff->email}} </div>
                                <div>Phone : {{$staff->phone}}</div>
                                <div>Created : {{$staff->created_at->diffForHumans()}} </div>
                                <div>
                                    Status : 
                                    @if ($staff->isactive==1)
                                        <span class="badge badge-success badge-pill" style="background-color: seagreen; color:seashell"> Active</span>
                                        @else
                                        <span class="badge badge-danger badge-pill" style="background-color: sienna; color:seashell"> Inactive</span>
                                        
                                    @endif
                                 </div>
                                

                                <br>
                                
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