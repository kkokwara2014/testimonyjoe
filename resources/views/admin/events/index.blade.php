@extends('admin.layout.app')


@section('content')
{{-- @include('admin.layout.statboard') --}}
@include('admin.layout.statboardcontainer')
<!-- Main row -->
<div class="row">
    <!-- Left col -->
    <section class="col-lg-12 connectedSortable">


        <div class="row">
            <div class="col-md-12">

                <div class="box">
                    <!-- /.box-header -->
                    <div class="box-body">
                        @if (count($events)>0)

                        <table id="example1" class="table table-responsive table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Sender</th>
                                    {{-- <th>Email</th> --}}
                                    <th>Phone</th>
                                    <th>Event Date</th>
                                    <th>Event Time</th>
                                    <th>Location</th>
                                    <th>More Info.</th>
                                    <th>Delete</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($events as $event)
                                <tr>

                                    <td>{{$event->fullname}}</td>
                                    {{-- <td>{{$event->email}}</td> --}}
                                    <td>{{$event->phone}}</td>
                                    <td>{{$event->eventdate}}</td>
                                    <td>{{$event->eventtime}}</td>
                                    <td>{{$event->location}}</td>
                                    <td>{{$event->additionalinfo}}</td>

                                    <td>
                                        <form id="delete-form-{{$event->id}}" style="display: none"
                                            action="{{ route('event.destroy',$event->id) }}" method="post">
                                            {{ csrf_field() }}
                                            {{method_field('DELETE')}}
                                        </form>
                                        <a href="" onclick="
                                                            if (confirm('Are you sure you want to delete this?')) {
                                                                event.preventDefault();
                                                            document.getElementById('delete-form-{{$event->id}}').submit();
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
                                    <th>Sender</th>
                                    {{-- <th>Email</th> --}}
                                    <th>Phone</th>
                                    <th>Event Date</th>
                                    <th>Event Time</th>
                                    <th>Location</th>
                                    <th>More Info.</th>
                                    <th>Delete</th>
                                </tr>
                            </tfoot>
                        </table>

                        @else
                        <p class="badge badge-pill badge-warning" style="background-color:red; color:seashell">No
                            events yet!</p>
                        @endif

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
