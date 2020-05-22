@extends('admin.layout.app')


@section('content')
{{-- @include('admin.layout.statboard') --}}
@include('admin.layout.statboardcontainer')
<!-- Main row -->
<div class="row">
    <!-- Left col -->
    <section class="col-lg-12 connectedSortable">
        <a href="{{ route('album.index') }}" class="btn btn-success">
            <span class="fa fa-eye"></span> All Albums
        </a>
        <br><br>

        <div class="row">
            <div class="col-md-7">

                <div class="box">
                    <!-- /.box-header -->
                    <div class="box-body">
                        <form action="{{ route('album.update',$album->id) }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            {{method_field('PUT')}}

                            <div class="form-group">
                                <label for="">Album Title <strong style="color:red;">*</strong> </label>
                                <input type="text" class="form-control" name="title" placeholder="Album Title" value="{{ $album->title }}">
                            </div>

                            <div class="form-group">
                                <label for="">Album Category <strong style="color:red;">*</strong></label>
                                <select name="albumcategory_id" class="form-control">
                                    <option selected="disabled">Select Album Category</option>
                                    @foreach ($albumcategories as $albumcategory)
                                    <option value="{{$albumcategory->id}}" {{$albumcategory->id==$album->albumcategory_id ? 'selected':''}}>{{$albumcategory->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="">Artist's Full Name <strong style="color:red;">*</strong></label>
                                <input type="text" name="artistfullname" class="form-control" placeholder="Artist's Full Name" value="{{ $album->artistfullname }}">
                            </div>

                            <div class="form-group">
                                <label for="">Year of Release </label>
                                <input type="text" name="yearofpub" id="datepicker" class="form-control" placeholder="Select Year" value="{{ $album->yearofpub }}">
                            </div>


                            <div class="row">
                                <div class="col-md-8">
                                    <label for="">Upload Album Image </label>
                                    <input type="file" name="albumimage">
                                    <input type="hidden" name="albumimage" value="{{$album->albumimage}}">
                                </div>
                                <div class="col-md-4">
                                   <br>
                                    Existing image :
                                        <img src="{{url('album_images',$album->albumimage)}}" alt=""
                                                            class="img-responsive img-circle" width="100" height="100">

                                </div>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary">Update</button>
                            <a href="{{ route('album.index') }}" class="btn btn-default">Cancel</a>

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
