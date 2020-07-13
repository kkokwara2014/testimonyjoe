@extends('admin.layout.app')


@section('content')
{{-- @include('admin.layout.statboard') --}}
@include('admin.layout.statboardcontainer')
<!-- Main row -->
<div class="row">
    <!-- Left col -->
    <section class="col-lg-12 connectedSortable">
        <a href="{{ route('track.index') }}" class="btn btn-success">
            <span class="fa fa-eye"></span> All Track
        </a>
        <br><br>

        <div class="row">
            <div class="col-md-7">

                <div class="box">
                    <!-- /.box-header -->
                    <div class="box-body">
                        <form action="{{ route('track.update',$track->id) }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            {{method_field('PUT')}}

                            <div class="form-group">
                                <label for="">Track Title <strong style="color:red;">*</strong> </label>
                                <input type="text" class="form-control" name="title" placeholder="Track Title" value="{{ $track->title }}">
                            </div>
                            <input type="hidden" name="existing_title" value="{{ $track->title }}">

                            <div class="form-group">
                                <label for="">Album <strong style="color:red;">*</strong></label>
                                <select name="album_id" class="form-control">
                                    <option selected="disabled">Select Album</option>
                                    @foreach ($albums as $album)
                                    <option value="{{$album->id}}" {{$album->id==$track->album_id ? 'selected':''}}>{{$album->title}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="">Track Category <strong style="color:red;">*</strong></label>
                                <select name="trackcategory_id" class="form-control">
                                    <option selected="disabled">Select Track Category</option>
                                    @foreach ($trackcategories as $trackcategory)
                                    <option value="{{$trackcategory->id}}" {{$trackcategory->id==$track->trackcategory_id ? 'selected':''}}>{{$trackcategory->name}}</option>
                                    @endforeach
                                </select>
                            </div>



                            <div class="row">
                                <div class="col-md-8">
                                    <label for="">Upload Track File <strong style="color:red;">* [mp3,wav,mp4 only]</strong></label>
                                    <input type="file" name="filename">
                                    <input type="hidden" name="existing_filename" value="{{asset('storage/tracks/'.$track->filename)}}">

                                    <br>
                                    <label for="">Existing file</label>
                                    <p></p>
                                        <audio controls>
                                            <source src="{{asset('storage/tracks/'.$track->filename)}}" />
                                        </audio>

                                </div>

                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary">Update</button>
                            <a href="{{ route('track.index') }}" class="btn btn-default">Cancel</a>

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
