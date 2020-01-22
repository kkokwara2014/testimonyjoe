<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="{{url('user_images',$user->userimage)}}" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>{{Auth::user()->lastname.' '.Auth::user()->firstname}}</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>

    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">

      <li>
        <a href="{{route('dashboard.index')}}">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          <span class="pull-right-container">
            {{-- <i class="fa fa-angle-left pull-right"></i> --}}
          </span>
        </a>

      </li>


      <li><a href="{{route('user.profile')}}"><i class="fa fa-picture-o"></i> My Profile Photo</a></li>

      <li><a href="{{route('album.index')}}"><i class="fa fa-xing"></i> Albums</a></li>
      <li><a href="{{route('booking.index')}}"><i class="fa fa-leanpub"></i> Bookings</a></li>
      <li><a href="{{route('contact.index')}}"><i class="fa fa-envelope-o"></i> Contacts</a></li>
      {{-- <li><a href="{{route('event.index')}}"><i class="fa fa-tasks"></i> Events</a></li> --}}
      <li><a href="{{route('gallery.index')}}"><i class="fa fa-newspaper-o"></i> Gallery</a></li>
      <li><a href="{{route('equipment.index')}}"><i class="fa fa-ils"></i> Equipment</a></li>

      {{-- <li><a href="{{route('admin.index')}}"><i class="fa fa-user-plus"></i> Admins</a></li> --}}

      <li>
        <a href="{{ route('user.logout') }}"><span class="fa fa-sign-out"></span> Sign out</a>
      </li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
