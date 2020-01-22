@extends('admin.layout.app')


@section('content')
{{-- @include('admin.layout.statboard') --}}
@include('admin.layout.statboardcontainer')
<!-- Main row -->
<div class="row">
    <!-- Left col -->
    <section class="col-lg-12 connectedSortable">
        <a href="{{ route('gallery.index') }}" class="btn btn-success">
           <span class="fa fa-eye"></span> All Gallery
        </a>
        <br><br>

        <div class="row">
            <div class="col-md-6">

                <div class="box">
                    <!-- /.box-header -->
                    <div class="box-body">
                        <form action="{{ route('gallery.update',$galleries->id) }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            {{method_field('PUT')}}

                            <div>
                                <label for="name">Caption <strong style="color:red;">*</strong></label>
                                <input type="text" class="form-control" name="caption" value="{{$galleries->caption}}">
                            </div>
                            <div class="form-group">
                                <label for="">Gallery Description</label>
                                <textarea class="form-control" name="description" cols="30" rows="3"
                            >{{$galleries->description}}</textarea>
                            </div>

                            <div>
                                <label for="">Upload Image <strong style="color:red;">*</strong></label>
                            <input type="file" name="image" value="{{$galleries->image}}">
                            </div>
                            <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                            <br>
                            <button type="submit" class="btn btn-primary">Update</button>
                            <a href="{{ route('gallery.index') }}" class="btn btn-default">Cancel</a>

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