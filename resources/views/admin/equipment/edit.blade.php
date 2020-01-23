@extends('admin.layout.app')


@section('content')
{{-- @include('admin.layout.statboard') --}}
@include('admin.layout.statboardcontainer')
<!-- Main row -->
<div class="row">
    <!-- Left col -->
    <section class="col-lg-12 connectedSortable">
        <a href="{{ route('equipment.index') }}" class="btn btn-success">
           <span class="fa fa-eye"></span> All Equipment
        </a>
        <br><br>

        <div class="row">
            <div class="col-md-6">

                <div class="box">
                    <!-- /.box-header -->
                    <div class="box-body">
                        <form action="{{ route('equipment.update',$equipment->id) }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            {{method_field('PUT')}}

                            <div class="form-group">
                                <label for="">Equipment Name <strong style="color:red;">*</strong></label>
                                <input id="name" type="text"
                                    class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name"
                            value="{{ old('name') }}" required autofocus value="{{$equipment->name}}">

                                @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                                @endif
                            </div>
                            
                            <div class="form-group">
                                <label for="">Equipment Price <strong style="color:red;">*</strong></label>
                                <input type="text" maxlength="4"
                                    class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}" name="price"
                            value="{{ old('price') }}" required autofocus value="{{$equipment->price}}">

                                @if ($errors->has('price'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('price') }}</strong>
                                </span>
                                @endif

                            </div>

                            <div class="form-group">
                                <label for="">Equipment Description</label>
                                <textarea class="form-control" name="description" cols="30" rows="3"
                            >{{$equipment->description!=''?$equipment->description:''}}</textarea>
                            </div>

                            <div>
                                <label for="">Upload Equipment Image <strong style="color:red;">*</strong></label>
                            <input type="file" name="image" value="{{$equipment->image}}">
                            </div>
                            <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                            <br>
                            <button type="submit" class="btn btn-primary">Update</button>
                            <a href="{{ route('gallery.index') }}" class="btn btn-default">Cancel</a>

                    </div>
                    </form>
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