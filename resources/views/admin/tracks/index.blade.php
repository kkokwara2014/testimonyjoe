@extends('admin.layout.app')


@section('content')
{{-- @include('admin.layout.statboard') --}}
@include('admin.layout.statboardcontainer')
<!-- Main row -->
<div class="row">
    <!-- Left col -->
    <section class="col-lg-12 connectedSortable">

        <div class="row">
            <div class="col-md-7">
                {{-- for messages --}}
                @include('admin.messages.deleted')

                <div class="box">
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped table-responsive">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Album</th>
                                    <th>Category</th>
                                    <th>View Details</th>
                                    <th>Action</th>


                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($tracks as $track)
                                <tr>


                                    <td>{{$track->title}}</td>
                                    <td>{{$track->album->title}}</td>
                                    <td>{{$track->trackcategory->name}}</td>

                                    <td><a href="{{ route('track.show',$track->id) }}"><span
                                                class="fa fa-eye fa-2x text-primary"></span></a></td>

                                    <td>
                                        <div class="dropdown"> <button type="button"
                                            class="btn btn-primary btn-sm dropdown-toggle" id="dropdownMenu1"
                                            data-toggle="dropdown"> Action &nbsp;&nbsp;<span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">

                                            <li role="presentation"> <a role="menuitem" tabindex="-1"
                                                    href="{{ route('track.edit',$track->id) }}"><span
                                                        class="fa fa-pencil-square"></span> Edit</a> </li>

                                            <form id="remove-{{$track->id}}" style="display: none"
                                                action="{{ route('track.destroy',$track->id) }}"
                                                method="post">
                                                {{ csrf_field() }}
                                                {{method_field('DELETE')}}
                                            </form>

                                            <li role="presentation">
                                                <a role="menuitem" tabindex="-1" href="" onclick="
                                                                if (confirm('Delete this?')) {
                                                                    event.preventDefault();
                                                                document.getElementById('remove-{{$track->id}}').submit();
                                                                } else {
                                                                    event.preventDefault();
                                                                }
                                                            "><span class="fa fa-trash-o"></span>
                                                    Delete
                                                </a>
                                            </li>

                                        </ul>
                                    </div>

                                    </td>

                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Title</th>
                                    <th>Album</th>
                                    <th>Category</th>
                                    <th>View Details</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <div class="col-md-5">
                {{-- for messages --}}
                @include('admin.messages.success')

                <div class="box">
                    <!-- /.box-header -->
                    <div class="box-body">
                        <form action="{{ route('track.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="">Track Title <strong style="color:red;">*</strong> </label>
                                <input type="text" class="form-control" name="title" placeholder="Track Title">
                            </div>

                            <div class="form-group">
                                <label for="">Album <strong style="color:red;">*</strong></label>
                                <select name="album_id" class="form-control">
                                    <option selected="disabled">Select Album</option>
                                    @foreach ($albums as $album)
                                    <option value="{{$album->id}}">{{$album->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Track Category <strong style="color:red;">*</strong></label>
                                <select name="trackcategory_id" class="form-control">
                                    <option selected="disabled">Select Track Category</option>
                                    @foreach ($trackcategories as $trackcategory)
                                    <option value="{{$trackcategory->id}}">{{$trackcategory->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div>
                                <label for="">Upload Track File <strong style="color:red;">* [mp3,wav,mp4 only]</strong></label>
                                <input type="file" name="filename" required>
                            </div>

                            <input type="hidden" name="user_id" value="{{Auth::user()->id}}">

                            <p></p>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save</button>

                        </form>
                    </div>
                </div>
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
