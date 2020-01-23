@extends('admin.layout.app')


@section('content')
{{-- @include('admin.layout.statboard') --}}
@include('admin.layout.statboardcontainer')
<!-- Main row -->
<div class="row">
    <!-- Left col -->
    <section class="col-lg-12 connectedSortable">
        <a href="{{ route('equipment.index') }}" class="btn btn-success">
           <span class="fa fa-eye"></span> All Equipment
        </a>
        <br><br>

        <div class="row">
            <div class="col-md-6">

                <div class="box">
                    <!-- /.box-header -->
                    <div class="box-body">
                        <form action="{{ route('equipment.update',$equipment->id) }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            {{method_field('PUT')}}

                            <div>
                                <label for="name">Equipment Name <strong style="color:red;">*</strong></label>
                                <input type="text" class="form-control" name="name" value="{{$equipment->name}}">
                            </div>
                            <div>
                                <label for="price">Equipment Price <strong style="color:red;">*</strong></label>
                                <input type="text" class="form-control" name="price" value="{{$equipment->price}}">
                            </div>
                            <div class="form-group">
                                <label for="">Equipment Description</label>
                                <textarea class="form-control" name="description" cols="30" rows="3"
                            >{{$equipment->description}}</textarea>
                            </div>
                            <div>
                                <label for="">Upload Equipment Image <strong style="color:red;">*</strong></label>
                            <input type="file" name="image" value="{{$equipment->image}}">
                            </div>
                            <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                            <br>
                            <button type="submit" class="btn btn-primary">Update</button>
                            <a href="{{ route('equipment.index') }}" class="btn btn-default">Cancel</a>

                    </div>
                    </form>
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