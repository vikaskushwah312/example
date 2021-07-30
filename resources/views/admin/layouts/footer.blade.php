 <footer class="main-footer">
    <strong>Copyright &copy; <?php echo date('Y'); ?> <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.5
    </div>
  </footer>
</div>
<!-- ./wrapper -->
@if(Session::has('success'))
<script type="text/javascript">
    swal({
        title: 'Success!',
        text: "{{Session::get('success')}}",
        timer: 5000,
        type: 'success'
    }).then((value) => {
        //location.reload();
    }).catch(swal.noop);
</script>
@endif

@if(Session::has('fail'))
<script type="text/javascript">
    swal({
        title: 'Oops!',
        text: "{{Session::get('fail')}}",
        type: 'error',
        timer: 5000
    }).then((value) => {
        //location.reload();
    }).catch(swal.noop);
</script>
@endif
<!-- jQuery -->


<script src="{{url('public/admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{url('public/admin/plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{url('public/admin/plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<!-- <script src="{{url('public/admin/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{url('public/admin/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script> -->
<!-- jQuery Knob Chart -->
<script src="{{url('public/admin/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{url('public/admin/plugins/moment/moment.min.js')}}"></script>
<script src="{{url('public/admin/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{url('public/admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>

<!-- AdminLTE App -->
<script src="{{url('public/admin/dist/js/adminlte.js')}}"></script>
@yield('js')
</body>
</html>
