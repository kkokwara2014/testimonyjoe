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
                        @if (count($allcontacts)>0)

                        <table id="example1" class="table table-responsive table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Sender</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Event Date</th>
                                    <th>Event Time</th>
                                    <th>Location</th>
                                    <th>More Info.</th>
                                    <th>Delete</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($bookings as $booking)
                                <tr>

                                    <td>{{$booking->fullname}}</td>
                                    <td>{{$booking->email}}</td>
                                    <td>{{$booking->phone}}</td>
                                    <td>{{$booking->eventdate}}</td>
                                    <td>{{$booking->eventtime}}</td>
                                    <td>{{$booking->location}}</td>
                                    <td>{{$booking->aditionalinfo}}</td>

                                    <td>
                                        <form id="delete-form-{{$booking->id}}" style="display: none"
                                            action="{{ route('booking.destroy',$booking->id) }}" method="post">
                                            {{ csrf_field() }}
                                            {{method_field('DELETE')}}
                                        </form>
                                        <a href="" onclick="
                                                            if (confirm('Are you sure you want to delete this?')) {
                                                                event.preventDefault();
                                                            document.getElementById('delete-form-{{$booking->id}}').submit();
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
                                    <th>Email</th>
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
                            bookings yet!</p>
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