@extends('admin.layout.app')


@section('content')
{{-- @include('admin.layout.statboard') --}}
@include('admin.layout.statboardcontainer')
<!-- Main row -->
<div class="row">
    <!-- Left col -->
    <section class="col-lg-12 connectedSortable">
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-default">
            <span class="fa fa-plus"></span> Add Album
        </button>
        <br><br>

        <div class="row">
            <div class="col-md-12">

                <div class="box">
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped table-responsive">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th>Added By</th>
                                    <th>View Details</th>
                                    <th>Edit</th>
                                    <th>Delete</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($albums as $album)
                                <tr>

                                    <td>{{$album->title}}</td>

                                    <td>{{$album->albumcategory->name}}</td>
                                    <td><a href="{{ route('album.show',$album->id) }}"><span
                                                class="fa fa-eye fa-2x text-primary"></span></a></td>

                                    <td><a href="{{ route('album.edit',$album->id) }}"><span
                                                class="fa fa-edit fa-2x text-primary"></span></a></td>
                                    <td>
                                        <form id="delete-form-{{$album->id}}" style="display: none"
                                            action="{{ route('album.destroy',$album->id) }}" method="post">
                                            {{ csrf_field() }}
                                            {{method_field('DELETE')}}
                                        </form>
                                        <a href="" onclick="
                                                            if (confirm('Are you sure you want to delete this?')) {
                                                                event.preventDefault();
                                                            document.getElementById('delete-form-{{$album->id}}').submit();
                                                            } else {
                                                                event.preventDefault();
                                                            }
                                                        "><span class="fa fa-trash fa-2x text-danger"></span>
                                        </a>

                                    </td>

                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th>Added By</th>
                                    <th>View Details</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
        </div>


        {{-- Data input modal area --}}
        <div class="modal fade" id="modal-default">
            <div class="modal-dialog">

                <form action="{{ route('album.store') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title"><span class="fa fa-xing"></span> Add Album</h4>
                        </div>
                        <div class="modal-body">
                            <div>
                                <label for="">Album Title <strong style="color:red;">*</strong> </label>
                                <input type="text" class="form-control" name="albumtitle" placeholder="Album Title">
                            </div>

                            <div>
                                <label for="">Category <strong style="color:red;">*</strong></label>
                                <select name="albumcategory_id" class="form-control">
                                    <option selected="disabled">Select Category</option>
                                    @foreach ($albumcategories as $albumcategory)
                                    <option value="{{$albumcategory->id}}">{{$albumcategory->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div>
                                <label for="">Description </label>
                                <textarea name="description" class="form-control" cols="10" rows="2"
                                    placeholder="Description"></textarea>
                            </div>
                            <br>
                            <div>
                                <label for="">Upload Album Image <strong style="color:red;">*</strong></label>
                                <input type="file" name="albumimage">
                            </div>
                            <br>
                            <div>
                                <label for="">Upload Music File <strong style="color:red;">*</strong></label>
                                <input type="file" name="audio">
                            </div>
                        </div>
                        <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                    <!-- /.modal-content -->

                </form>
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->


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