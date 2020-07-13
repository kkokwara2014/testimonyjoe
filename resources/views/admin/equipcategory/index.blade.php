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

                @include('admin.messages.deleted')

                <div class="box">
                    <!-- /.box-header -->
                    <div class="box-body">

                        <table id="example1" class="table table-bordered table-striped table-responsive">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Action</th>


                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($equipcategories as $equipcategory)
                                <tr>
                                    <td>{{$equipcategory->name}}</td>
                                   <td>
                                    <div class="dropdown"> <button type="button"
                                        class="btn btn-primary btn-sm dropdown-toggle"
                                        id="dropdownMenu1" data-toggle="dropdown"> Action &nbsp;&nbsp;<span
                                            class="caret"></span> </button>
                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">

                                        <li role="presentation"> <a role="menuitem" tabindex="-1" href="{{ route('equipcategory.edit',$equipcategory->id) }}"><span
                                            class="fa fa-pencil-square"></span> Edit</a> </li>

                                        <form id="remove-{{$equipcategory->id}}" style="display: none"
                                            action="{{ route('equipcategory.destroy',$equipcategory->id) }}" method="post">
                                            {{ csrf_field() }}
                                            {{method_field('DELETE')}}
                                        </form>

                                        <li role="presentation">
                                            <a role="menuitem" tabindex="-1" href="" onclick="
                                                                    if (confirm('Delete this?')) {
                                                                        event.preventDefault();
                                                                    document.getElementById('remove-{{$equipcategory->id}}').submit();
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
                                    <th>Name</th>
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
                <div class="box">
                    <!-- /.box-header -->
                    <div class="box-body">
                        @include('admin.messages.success')

                        <form action="{{ route('equipcategory.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name"
                                    value="{{ old('name') }}" placeholder="Equipment Category Name" autofocus>

                                    @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <span style="color: red">{{ $errors->first('name','Enter Equipment Category name') }}</span>
                                    </span>
                                    @endif
                            </div>

                            <button type="reset" class="btn btn-default btn-sm">Cancel</button>
                            <button type="submit" class="btn btn-primary btn-sm">Submit</button>

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
