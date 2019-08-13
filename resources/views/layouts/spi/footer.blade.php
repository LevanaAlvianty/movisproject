        <!-- Essential javascripts for application to work-->
        <script src="{{asset('/vali_admin/docs/js/jquery-3.2.1.min.js')}}"></script>
        <script src="{{asset('/vali_admin/docs/js/popper.min.js')}}"></script>
        <script src="{{asset('/vali_admin/docs/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('/vali_admin/docs/js/main.js')}}"></script>
        
        <!-- The javascript plugin to display page loading on top-->
        <script src="{{asset('/vali_admin/docs/js/plugins/pace.min.js')}}"></script>
        
        <!-- Page specific javascripts-->
        <!-- <script type="text/javascript" src="{{asset('/vali_admin/docs/js/plugins/chart.js')}}"></script> -->

        <!-- Data table plugin-->
        <script type="text/javascript" src="{{asset('/vali_admin/docs/js/plugins/jquery.dataTables.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('/vali_admin/docs/js/plugins/dataTables.bootstrap.min.js')}}"></script>
        <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>

        <!-- AutoComplete -->
        <!-- <script src="{{ asset('js/movis/jquery.min.js')}}"></script> -->
        <script src="{{ asset('/vali_admin/plugins/jqueryui/jquery-ui.min.js')}}"></script>

        <!-- Select2 -->
        <script src="{{asset('js/movis/select2.min.js')}}"></script>

        <!-- TinyMCE -->
        <script src="{{asset('/vendor/tinymce/js/tinymce/tinymce.min.js')}}"></script>
        <!-- <script src="{{asset('/vendor/laravel-filemanager/js/lfm.js')}}"></script> -->
        <!-- <script src="{{asset('/vali_admin/plugins/tinymce/js/tinymce/tinymce.min.js')}}"></script> -->
       
         
        
        <!-- Animate Easing -->
        <script src="{{ asset('/js/movis/jquery.easing.min.js')}}"></script>

        <!-- Toastr-->
        <script src="{{asset('js/toastr.min.js')}}"></script>
        {!! Toastr::message() !!}
        @stack('js')
    </body>
</html>