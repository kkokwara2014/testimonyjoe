@extends('admin.layout.app')


@section('content')
{{-- @include('admin.layout.statboard') --}}
@include('admin.layout.statboardcontainer')
<!-- Main row -->
<div class="row">
    <!-- Left col -->
    <section class="col-lg-12 connectedSortable">
        <a href="{{ route('gallery.index') }}" class="btn btn-success">
            <span class="fa fa-eye"></span> All Galleries
        </a>
        <br><br>

        <div class="row">
            <div class="col-md-7">

                <div class="box">
                    <!-- /.box-header -->
                    <div class="box-body">
                        <form action="{{ route('gallery.update',$gallery->id) }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            {{method_field('PUT')}}

                            <div class="form-group">
                                <label for="">gallery Caption <strong style="color:red;">*</strong> </label>
                                <input type="text" class="form-control" name="title" placeholder="Gallery Title" value="{{ $gallery->title }}">
                            </div>
                            <input type="hidden" name="existing_title" value="{{ $gallery->title }}">

                            <div class="form-group">
                                <label for="">Description </label>
                                <textarea class="form-control" name="description" cols="30" rows="2" placeholder="gallery Description">
                                    {{ $gallery->description }}
                                </textarea>

                            </div>

                            <div class="row">
                                <div class="col-md-8">
                                    <label for="">Upload gallery Image </label>
                                    <input type="file" name="image">
                                    <input type="hidden" name="existing_image" value="{{$gallery->image}}">
                                </div>
                                <div class="col-md-4">
                                   <br>
                                    Existing image :
                                        <img src="{{url('gallery_images',$gallery->image)}}" alt=""
                                                            class="img-responsive img-circle" width="100" height="100">

                                </div>
                            </div>
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
