@extends('admin.layout.app')


@section('content')
{{-- @include('admin.layout.statboard') --}}
@include('admin.layout.statboardcontainer')
<!-- Main row -->
<div class="row">
    <!-- Left col -->
    <section class="col-lg-12 connectedSortable">
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-default">
            <span class="fa fa-plus"></span> Add Equipment
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
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Description</th>
                                    <th>Created By</th>
                                    {{-- <th>View Details</th> --}}

                                    <th>Delete</th>


                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($equipments as $equipment)
                                <tr>

                                    <td>{{$equipment->name}}</td>
                                    <td>&#163;{{$equipment->price}}</td>
                                    <td>{{$equipment->description}}</td>
                                    <td>{{$equipment->user->firstname}}</td>
                                    {{-- <td><a href="{{ route('equipments.show',$equipment->id) }}"><span
                                        class="fa fa-eye fa-2x text-primary"></span></a></td> --}}



                                    <td>
                                        <form id="delete-form-{{$equipment->id}}" style="display: none"
                                            action="{{ route('equipment.destroy',$equipment->id) }}" method="post">
                                            {{ csrf_field() }}
                                            {{method_field('DELETE')}}
                                        </form>
                                        <a href="" onclick="
                                                            if (confirm('Are you sure you want to delete this?')) {
                                                                event.preventDefault();
                                                            document.getElementById('delete-form-{{$equipment->id}}').submit();
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
                                    <th>Name</th>
                                    <th>Price</th>
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

                <form action="{{ route('equipment.store') }}" method="post">
                    {{ csrf_field() }}

                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title"><span class="fa fa-ils"></span> Add Equipment</h4>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="">Equipment Name <strong style="color:red;">*</strong></label>
                                <input id="name" type="text"
                                    class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name"
                                    value="{{ old('name') }}" required autofocus placeholder="Equipment Name">

                                @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                                @endif

                            </div>
                            <div class="form-group">
                                <label for="">Equipment Price <strong style="color:red;">*</strong></label>
                                <input id="price" type="text" maxlength="4"
                                    class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}" name="price"
                                    value="{{ old('price') }}" required autofocus placeholder="Equipment Price">

                                @if ($errors->has('price'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('price') }}</strong>
                                </span>
                                @endif

                            </div>

                            <div class="form-group">
                                <label for="">Equipment Description</label>
                                <textarea class="form-control" name="description" id="" cols="30" rows="3"
                                    placeholder="Your Description"></textarea>
                            </div>

                            <div>
                                <label for="">Upload Equipment Image <strong style="color:red;">*</strong></label>
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
