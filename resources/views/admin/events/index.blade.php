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
                                    <th>Image</th>
                                    <th>Caption</th>
                                    <th>Date</th>
                                    <th>View Details</th>
                                    <th>Action</th>


                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($events as $event)
                                <tr>

                                    <td>
                                        <img src="{{url('event_images',$event->image)}}" alt=""
                                            class="img-responsive" width="40" height="40">
                                    </td>
                                    <td>{{$event->title}}</td>
                                    <td>{{$event->eventdate}}</td>

                                    <td><a href="{{ route('event.show',$event->id) }}"><span
                                                class="fa fa-eye fa-2x text-primary"></span></a></td>

                                    <td>
                                        <div class="dropdown"> <button type="button"
                                            class="btn btn-primary btn-sm dropdown-toggle" id="dropdownMenu1"
                                            data-toggle="dropdown"> Action &nbsp;&nbsp;<span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">

                                            <li role="presentation"> <a role="menuitem" tabindex="-1"
                                                    href="{{ route('event.edit',$event->id) }}"><span
                                                        class="fa fa-pencil-square"></span> Edit</a> </li>

                                            <form id="remove-{{$event->id}}" style="display: none"
                                                action="{{ route('event.destroy',$event->id) }}"
                                                method="post">
                                                {{ csrf_field() }}
                                                {{method_field('DELETE')}}
                                            </form>

                                            <li role="presentation">
                                                <a role="menuitem" tabindex="-1" href="" onclick="
                                                                if (confirm('Delete this?')) {
                                                                    event.preventDefault();
                                                                document.getElementById('remove-{{$event->id}}').submit();
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
                                    <th>Image</th>
                                    <th>Caption</th>
                                    <th>Date</th>
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
                        <form action="{{ route('event.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="">Event Caption <strong style="color:red;">*</strong> </label>
                                <input type="text" class="form-control" name="title" placeholder="Event Caption">
                            </div>

                            <div class="form-group">
                                <label for="">Venue <strong style="color:red;">*</strong></label>
                                <input type="text" name="venue" class="form-control"
                                    placeholder="Venue">
                            </div>
                            <div class="form-group">
                                <label for="">Event Date <strong style="color:red;">*</strong></label>
                                <input type="text" id="datepicker" name="eventdate" class="form-control"
                                    placeholder="Event date">
                            </div>
                            <div class="form-group">
                                <label for="">Event Time <strong style="color:red;">*</strong></label>
                                <input type="text" name="eventtime" class="form-control timepicker1"
                                    placeholder="Event time">
                            </div>

                            <div class="form-group">
                                <label for="">Description </label>
                                <textarea class="form-control" name="description" cols="30" rows="2" placeholder="event Description"></textarea>

                            </div>
                            <div>
                                <label for="">Upload event Image <strong style="color:red;">*</strong></label>
                                <input type="file" name="image" required>
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
