@include('admin.layouts.header')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">{{$head}}</h1>
          </div>
        </div>
      </div>
    </div>
    <!-- Main content -->
    @yield('content')

  </div>

@include('admin.layouts.footer')

