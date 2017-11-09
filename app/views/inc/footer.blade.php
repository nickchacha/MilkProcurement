</div>
</body>
 <!-- jQuery 2.0.2 -->
		<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script> -->
        <script src="{{ url('adminlte/js/jquery.min.js') }}"></script>
        <!-- jQuery UI 1.10.3 -->
        <script src="{{ url('adminlte/js/jquery-ui-1.10.3.min.js') }}"></script>
        <!-- Bootstrap -->
        <script src="{{ url('adminlte/js/bootstrap.min.js') }}"></script>
        <!-- jQuery Knob Chart -->
        <script src="{{ url('adminlte/js/plugins/jqueryKnob/jquery.knob.js') }}"></script>
        <!-- daterangepicker -->
        <script src="{{ url('adminlte/js/plugins/daterangepicker/daterangepicker.js') }}"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="{{ url('adminlte/js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
        <!-- iCheck -->
        <script src="{{ url('adminlte/js/plugins/iCheck/icheck.min.js') }}"></script>
        <!-- InputMask -->
        <script src="{{ url('adminlte/js/plugins/input-mask/jquery.inputmask.js') }}"></script>
        <script src="{{ url('adminlte/js/plugins/input-mask/jquery.inputmask.date.extensions.js') }}"></script>
        <script src="{{ url('adminlte/js/plugins/input-mask/jquery.inputmask.extensions.js') }}"></script>
		<!-- DataTables -->
	    <script src="{{asset('assets/js/datatables.min.js')}}"></script>
	    <script src="{{asset('assets/js/datatables-bootstrap.js')}}"></script>
	    <script src="{{asset('assets/js/datatables.fnReloadAjax.js')}}"></script>
        <!-- Select2 -->
        <script src="{{asset('assets/js/select2/select2.min.js')}}"></script>
	    <!-- ColorBox -->
	    <script src="{{asset('assets/js/jquery.colorbox.js')}}"></script>
        <script src="{{asset('assets/js/prettify.js')}}"></script>
        <!-- DatePicker -->
        <link rel="stylesheet" href="{{asset('assets/js/datepicker/css/datepicker.css')}}">
        <script src="{{asset('assets/js/datepicker/js/bootstrap-datepicker.js')}}"></script>
        <!-- AdminLTE App -->
        <script src="{{ url('adminlte/js/AdminLTE/app.js') }}"></script>

        @yield('scripts')

	    <script type="text/javascript">
    	$('.wysihtml5').wysihtml5();
        $(prettyPrint);

        $(document).ready(function() {
            // select2 style
            $('.select2').select2();

            // dataTables bootstrap style
            $('.dataTables_length select').select2({width: 80})
            $('.dataTables_filter input').addClass('form-control')

            // inputmask
            $(".inputmask").inputmask();

            //Date range picker
            $('.daterange').daterangepicker();
            // Date picker
            $('.datepicker').datepicker({
                format: 'yyyy-mm-dd'
            });
            // add blue bg on header
            $('.dataTable th').addClass('bg-blue');

        });
	    </script>
</html>
