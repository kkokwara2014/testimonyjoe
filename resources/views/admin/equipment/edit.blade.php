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
            <div class="col-md-7">

                <div class="box">
                    <!-- /.box-header -->
                    <div class="box-body">
                        <form action="{{ route('equipment.update',$equipment->id) }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            {{method_field('PUT')}}

                            <div class="form-group">
                                <label for="">Equipment Name <strong style="color:red;">*</strong> </label>
                                <input type="text" class="form-control" name="name" placeholder="Equipment Name" value="{{ $equipment->name }}">
                            </div>
                            <input type="hidden" name="existing_name" value="{{ $equipment->name }}">

                            <div class="form-group">
                                <label for="">Equipment Category <strong style="color:red;">*</strong></label>
                                <select name="equipcategory_id" class="form-control">
                                    <option selected="disabled">Select Equipment Category</option>
                                    @foreach ($equipcategories as $equipcategory)
                                    <option value="{{$equipcategory->id}}" {{$equipcategory->id==$equipment->equipcategory_id ? 'selected':''}}>{{$equipcategory->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="">Price <strong style="color:red;">*</strong></label>
                                <input type="text" name="price" class="form-control"
                                    placeholder="Price" pattern="[0-9]+" value="{{ $equipment->price }}">
                            </div>
                            <div class="form-group">
                                <label for="">Description </label>
                                <textarea class="form-control" name="description" cols="30" rows="2" placeholder="Equipment Description">
                                    {{ $equipment->description }}
                                </textarea>

                            </div>


                            <div class="row">
                                <div class="col-md-8">
                                    <label for="">Upload Equipment Image </label>
                                    <input type="file" name="image">
                                    <input type="hidden" name="existing_image" value="{{$equipment->image}}">
                                </div>
                                <div class="col-md-4">
                                   <br>
                                    Existing image :
                                        <img src="{{url('equipment_images',$equipment->image)}}" alt=""
                                                            class="img-responsive img-circle" width="100" height="100">

                                </div>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary">Update</button>
                            <a href="{{ route('equipment.index') }}" class="btn btn-default">Cancel</a>

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
