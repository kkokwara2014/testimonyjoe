@extends('admin.layout.app')


@section('content')
{{-- @include('admin.layout.statboard') --}}
@include('admin.layout.statboardcontainer')
<!-- Main row -->
<div class="row">
    <!-- Left col -->
    <section class="col-lg-12 connectedSortable">
        <a href="{{ route('event.index') }}" class="btn btn-success">
            <span class="fa fa-eye"></span> All Event
        </a>
        <br><br>

        <div class="row">
            <div class="col-md-7">

                <div class="box">
                    <!-- /.box-header -->
                    <div class="box-body">
                        <form action="{{ route('event.update',$event->id) }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            {{method_field('PUT')}}

                            <div class="form-group">
                                <label for="">Event Caption <strong style="color:red;">*</strong> </label>
                                <input type="text" class="form-control" name="title" placeholder="Event Caption" value="{{ $event->title }}">
                            </div>
                            <input type="hidden" name="existing_title" value="{{ $event->title }}">

                            <div class="form-group">
                                <label for="">Venue <strong style="color:red;">*</strong></label>
                                <input type="text" name="venue" class="form-control"
                                    placeholder="Venue" value="{{ $event->venue }}">
                            </div>
                            <div class="form-group">
                                <label for="">Event Date <strong style="color:red;">*</strong></label>
                                <input type="text" id="datepicker" name="eventdate" class="form-control"
                                    placeholder="Event date" value="{{ $event->eventdate }}">
                            </div>
                            <div class="form-group">
                                <label for="">Event Time <strong style="color:red;">*</strong></label>
                                <input type="text" name="eventtime" class="form-control timepicker1"
                                    placeholder="Event time" value="{{ $event->eventtime }}">
                            </div>

                            <div class="form-group">
                                <label for="">Description </label>
                                <textarea class="form-control" name="description" cols="30" rows="2" placeholder="event Description">
                                    {{ $event->description }}
                                </textarea>

                            </div>

                            <div class="row">
                                <div class="col-md-8">
                                    <label for="">Upload Event Image </label>
                                    <input type="file" name="image">
                                    <input type="hidden" name="existing_image" value="{{$event->image}}">
                                </div>
                                <div class="col-md-4">
                                   <br>
                                    Existing image :
                                        <img src="{{url('event_images',$event->image)}}" alt=""
                                                            class="img-responsive img-circle" width="100" height="100">

                                </div>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary">Update</button>
                            <a href="{{ route('event.index') }}" class="btn btn-default">Cancel</a>

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
