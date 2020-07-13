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
                        @if (count($contacts)>0)

                        <table id="example1" class="table table-responsive table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Sender</th>
                                    <th>Email</th>
                                    <th>Subject</th>
                                    <th>Message</th>
                                    <th>Date</th>

                                    <th>Delete</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($contacts as $contact)
                                <tr>

                                    <td>{{$contact->sender}}</td>
                                    <td>{{$contact->email}}</td>
                                    <td>{{$contact->subject}}</td>
                                    <td>{{$contact->body}}</td>
                                    <td>{{$contact->created_at->diffForHumans()}}</td>

                                    <td>
                                        <div class="dropdown"> <button type="button"
                                            class="btn btn-primary btn-sm dropdown-toggle" id="dropdownMenu1"
                                            data-toggle="dropdown"> Action &nbsp;&nbsp;<span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">


                                            <form id="remove-{{$contact->id}}" style="display: none"
                                                action="{{ route('contact.destroy',$contact->id) }}"
                                                method="post">
                                                {{ csrf_field() }}
                                                {{method_field('DELETE')}}
                                            </form>

                                            <li role="presentation">
                                                <a role="menuitem" tabindex="-1" href="" onclick="
                                                                if (confirm('Delete this?')) {
                                                                    event.preventDefault();
                                                                document.getElementById('remove-{{$contact->id}}').submit();
                                                                } else {
                                                                    event.preventDefault();
                                                                }
                                                            "><span class="fa fa-trash-o"></span>
                                                    Delete
                                                </a>
                                            </li>

                                        </ul>

                                    </td>

                                </tr>


                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Sender</th>
                                    <th>Email</th>
                                    <th>Subject</th>
                                    <th>Message</th>
                                    <th>Date</th>

                                    <th>Delete</th>
                                </tr>
                            </tfoot>
                        </table>

                        @else
                        <p class="badge badge-pill badge-warning" style="background-color:red; color:seashell">No contacts yet!</p>
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
