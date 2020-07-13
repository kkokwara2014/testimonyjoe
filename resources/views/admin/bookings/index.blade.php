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
                {{-- for messages --}}
                @include('admin.messages.deleted')

                <div class="box">
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped table-responsive">
                            <thead>
                                <tr>
                                    <th>Booking Ref.</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>View Details</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($bookings as $booking)
                                <tr>
                                    <td>{{$booking->bookingref}}</td>
                                    <td>{{$booking->fullname}}</td>
                                    <td>{{$booking->email}}</td>
                                    <td>{{$booking->phone}}</td>
                                    <td>{{ date('D d M, Y', strtotime($booking->eventdate)) }}</td>
                                    <td>{{$booking->eventtime}}</td>

                                    <td><a href="{{ route('booking.show',$booking->id) }}"><span
                                                class="fa fa-eye fa-2x text-primary"></span></a></td>

                                    <td>
                                        <div class="dropdown"> <button type="button"
                                            class="btn btn-primary btn-sm dropdown-toggle" id="dropdownMenu1"
                                            data-toggle="dropdown"> Action &nbsp;&nbsp;<span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">

                                            <form id="remove-{{$booking->id}}" style="display: none"
                                                action="{{ route('booking.destroy',$booking->id) }}"
                                                method="post">
                                                {{ csrf_field() }}
                                                {{method_field('DELETE')}}
                                            </form>

                                            <li role="presentation">
                                                <a role="menuitem" tabindex="-1" href="" onclick="
                                                                if (confirm('Delete this?')) {
                                                                    event.preventDefault();
                                                                document.getElementById('remove-{{$booking->id}}').submit();
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
                                    <th>Booking Ref.</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Date</th>
                                    <th>Time</th>
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
