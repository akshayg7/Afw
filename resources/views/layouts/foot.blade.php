<script src="{{asset('/js/dashmix.core.min.js')}}"></script>
<!--
    Dashmix JS

    Custom functionality including Blocks/Layout API as well as other vital and optional helpers
    webpack is putting everything together at assets/_es6/main/app.js
-->
<script src="{{asset('/js/dashmix.app.min.js')}}"></script>
<script src="{{asset('/js/pages/be_ui_icons.min.js')}}"></script>
<script src="{{asset('/js/dashmix.core.min-2.1.js')}}"></script>
<script src="{{asset('/js/dashmix.app.min-2.1.js')}}"></script>
<!-- Page JS Plugins -->
<script src="{{asset('/js/plugins/jquery-sparkline/jquery.sparkline.min.js')}}"></script>

<!-- Page JS Code -->
<script src="{{asset('/js/pages/be_pages_dashboard.min.js')}}"></script>

<!-- Page JS Helpers (jQuery Sparkline plugin) -->
<script>jQuery(function(){ Dashmix.helpers('sparkline'); });</script>
@yield('footer_script')
