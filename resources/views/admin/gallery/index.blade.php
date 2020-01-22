@extends('admin.layout.app')


@section('content')
{{-- @include('admin.layout.statboard') --}}
@include('admin.layout.statboardcontainer')
<!-- Main row -->
<div class="row">
    <!-- Left col -->
    <section class="col-lg-12 connectedSortable">
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-default">
            <span class="fa fa-plus"></span> Add Gallery
        </button>
        <br><br>

        <div class="row">
            <div class="col-md-12">

                {{-- for messages --}}
                @include('admin.messages.success')

                <div class="box">
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-responsive table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Caption</th>

                                    <th>Description</th>
                                    <th>Created By</th>
                                    {{-- <th>View Details</th> --}}

                                    <th>Delete</th>


                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($galleries as $gallery)
                                <tr>

                                    <td>{{$gallery->name}}</td>
                                    <td>&#163;{{$gallery->price}}</td>
                                    <td>{{$gallery->description}}</td>
                                    <td>{{$gallery->user->firstname.' '.$gallery->user->lastname}}</td>
                                    {{-- <td><a href="{{ route('gallerys.show',$gallery->id) }}"><span
                                        class="fa fa-eye fa-2x text-primary"></span></a></td> --}}



                                    <td>
                                        <form id="delete-form-{{$gallery->id}}" style="display: none"
                                            action="{{ route('gallery.destroy',$gallery->id) }}" method="post">
                                            {{ csrf_field() }}
                                            {{method_field('DELETE')}}
                                        </form>
                                        <a href="" onclick="
                                                            if (confirm('Are you sure you want to delete this?')) {
                                                                event.preventDefault();
                                                            document.getElementById('delete-form-{{$gallery->id}}').submit();
                                                            } else {
                                                                event.preventDefault();
                                                            }
                                                        ">
                                            <p class="fa fa-trash fa-2x text-danger"></span>
                                        </a>

                                    </td>

                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Caption</th>
                                    <th>Description</th>
                                    <th>Created By</th>
                                    {{-- <th>View Details</th> --}}

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

                <form action="{{ route('gallery.store') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title"><span class="fa fa-newspaper-o"></span> Add Gallery</h4>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="">Caption <strong style="color:red;">*</strong></label>
                                <input id="caption" type="text"
                                    class="form-control{{ $errors->has('caption') ? ' is-invalid' : '' }}" name="caption"
                                    value="{{ old('caption') }}" required autofocus placeholder="Gallery Caption">

                                @if ($errors->has('caption'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('caption') }}</strong>
                                </span>
                                @endif

                            </div>

                            <div class="form-group">
                                <label for="">Gallery Description</label>
                                <textarea class="form-control" name="description" cols="30" rows="3"
                                    placeholder="Gallery Description"></textarea>
                            </div>

                            <div>
                                <label for="">Upload Image <strong style="color:red;">*</strong></label>
                                <input type="file" name="image">
                            </div>
                            <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                        </div>
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
