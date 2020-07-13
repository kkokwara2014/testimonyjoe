
@include('admin.layout.statboardcontainer')
    <!-- Small boxes (Stat box) -->
    <div class="row">

      @if (Auth::user()->role->id==1)

      <div class="col-lg-3 col-md-3">
        <!-- small box -->
        <div class="small-box bg-orange">
          <div class="inner">
          <h3>{{ $contacts }}</h3>

            <p>Contacts</p>
          </div>
          <div class="icon">
            <i class="fa fa-envelope"></i>
          </div>

        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-md-3">
        <!-- small box -->
        <div class="small-box bg-green">
          <div class="inner">
          <h3>{{ $bookings }}</h3>

            <p>Bookings</p>
          </div>
          <div class="icon">
            <i class="fa fa-leanpub"></i>
          </div>

        </div>
      </div>
      <!-- ./col -->

      <div class="col-lg-3 col-md-3">
        <!-- small box -->
        <div class="small-box bg-blue-active">
          <div class="inner">
            <h3>{{ $equipment }}</h3>

            <p>Equipment</p>
          </div>
          <div class="icon">
            <i class="fa fa-ils"></i>
          </div>

        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-md-3">
        <!-- small box -->
        <div class="small-box bg-aqua">
          <div class="inner">
            <h3>{{ $users }}</h3>

            <p>Users</p>
          </div>
          <div class="icon">
            <i class="fa fa-user-plus"></i>
          </div>

        </div>
      </div>
      <!-- ./col -->
      @endif


    </div>
    <!-- /.row -->
