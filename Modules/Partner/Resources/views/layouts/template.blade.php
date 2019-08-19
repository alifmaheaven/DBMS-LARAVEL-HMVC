<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="{{ URL::asset('img/apple-icon.png') }}">
	<link rel="icon" type="image/png" href="{{ URL::asset('img/dyah/logo3.png') }}">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>
		DBMS
	</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
	<!--     Fonts and icons     -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	
{{-- datatables style --}}
<script src="//code.jquery.com/jquery-1.12.3.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.css"/>
	<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.js"></script>

	<!-- CSS Files -->
	<link href="{{ URL::asset('css/material-dashboard.css?v=2.1.1') }}" rel="stylesheet" />
	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="{{ URL::asset('demo/demo.css') }}" rel="stylesheet" />
	<link href="{{ URL::asset('css/style.css') }}" rel="stylesheet" />

	<!--   Core JS Files   -->
	<script src="{{ URL::asset('js/core/jquery.min.js') }}"></script>
	<script src="{{ URL::asset('js/core/popper.min.js') }}"></script>
	<script src="{{ URL::asset('js/core/bootstrap-material-design.min.js') }}"></script>
	<script src="{{ URL::asset('js/plugins/perfect-scrollbar.jquery.min.js') }}"></script>
	<!-- Plugin for the momentJs  -->
	<script src="{{ URL::asset('js/plugins/moment.min.js') }}"></script>
	<!--  Plugin for Sweet Alert -->
	<script src="{{ URL::asset('js/plugins/sweetalert2.js') }}"></script>
	<!-- Forms Validations Plugin -->
	<script src="{{ URL::asset('js/plugins/jquery.validate.min.js') }}"></script>
	<!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
	<script src="{{ URL::asset('js/plugins/jquery.bootstrap-wizard.js') }}"></script>
	<!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
	<script src="{{ URL::asset('js/plugins/bootstrap-selectpicker.js') }}"></script>
	<!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
	<script src="{{ URL::asset('js/plugins/bootstrap-datetimepicker.min.js') }}"></script>
	<!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
	<script src="{{ URL::asset('js/plugins/jquery.dataTables.min.js') }}"></script>
	<!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
	<script src="{{ URL::asset('js/plugins/bootstrap-tagsinput.js') }}"></script>
	<!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
	<script src="{{ URL::asset('js/plugins/jasny-bootstrap.min.js') }}"></script>
	<!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
	<script src="{{ URL::asset('js/plugins/fullcalendar.min.js') }}"></script>
	<!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
	<script src="{{ URL::asset('js/plugins/jquery-jvectormap.js') }}"></script>
	<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
	<script src="{{ URL::asset('js/plugins/nouislider.min.js') }}"></script>
	<!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
	<!-- Library for adding dinamically elements -->
	<script src="{{ URL::asset('js/plugins/arrive.min.js') }}"></script>
	<!--anyaran js e -->
	<script src="http://code.jquery.com/jquery-3.3.1.min.js"
	integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
	crossorigin="anonymous">
</script>
	<!-- Chartist JS -->
	<script src="{{ URL::asset('js/plugins/chartist.min.js') }}"></script>
	<!--  Notifications Plugin    -->
	<script src="{{ URL::asset('js/plugins/bootstrap-notify.js') }}"></script>
	<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
	<script src="{{ URL::asset('js/material-dashboard.js?v=2.1.1') }}" type="text/javascript"></script>
	<!-- Material Dashboard DEMO methods, don't include it in your project! -->
	<script src="{{ URL::asset('demo/demo.js') }}"></script>

	

</head>

<body>

<!-- DataTables -->
{{-- <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script> --}}

<script src="{{ URL::asset('js/jquery.dataTables.min.js')}}"></script>
<script src="{{ URL::asset('js/dataTables.rowsGroup.js')}}"></script>

@stack('scripts')

	<div id="headerku">
				<img src="{{ URL::asset('img/dyah/logo2-white.png') }}" class="logoku">
				<div class="text-right">
					<a href="{{ url('/logout') }}" >
						<img src="{{ URL::asset('img/dyah/ic-logout.png') }}" class="ic-logout">
					</a>

					<a href="{{ url('/detail') }}">
							<div class="isine text-left"><span><b>{{Session::get('user_name')}}</b></span><br><span class="small">{{Session::get('user_nik')}}</span></div>
							<img src="{{ URL::asset('img/dyah/user.png') }}" class="rounded-circle">
					</a>
					
				</div>
		</div>

    {{-- content --}}
	
        @yield('content')

	<footer>
		Copyright &copy; 2019
		<div class="text-right" style="float: right;font-size: 15px">Made with <span style="color: red;">❤</span> by Karet Double</div>
	</footer>

	
	<script>
		$(document).ready(function() {
			$().ready(function() {
				$sidebar = $('.sidebar');

				$sidebar_img_container = $sidebar.find('.sidebar-background');

				$full_page = $('.full-page');

				$sidebar_responsive = $('body > .navbar-collapse');

				window_width = $(window).width();

				fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

				if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
					if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
						$('.fixed-plugin .dropdown').addClass('open');
					}

				}

				$('.fixed-plugin a').click(function(event) {

					if ($(this).hasClass('switch-trigger')) {
						if (event.stopPropagation) {
							event.stopPropagation();
						} else if (window.event) {
							window.event.cancelBubble = true;
						}
					}
				});

				$('.fixed-plugin .active-color span').click(function() {
					$full_page_background = $('.full-page-background');

					$(this).siblings().removeClass('active');
					$(this).addClass('active');

					var new_color = $(this).data('color');

					if ($sidebar.length != 0) {
						$sidebar.attr('data-color', new_color);
					}

					if ($full_page.length != 0) {
						$full_page.attr('filter-color', new_color);
					}

					if ($sidebar_responsive.length != 0) {
						$sidebar_responsive.attr('data-color', new_color);
					}
				});

				$('.fixed-plugin .background-color .badge').click(function() {
					$(this).siblings().removeClass('active');
					$(this).addClass('active');

					var new_color = $(this).data('background-color');

					if ($sidebar.length != 0) {
						$sidebar.attr('data-background-color', new_color);
					}
				});

				$('.fixed-plugin .img-holder').click(function() {
					$full_page_background = $('.full-page-background');

					$(this).parent('li').siblings().removeClass('active');
					$(this).parent('li').addClass('active');


					var new_image = $(this).find("img").attr('src');

					if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
						$sidebar_img_container.fadeOut('fast', function() {
							$sidebar_img_container.css('background-image', 'url("' + new_image + '")');
							$sidebar_img_container.fadeIn('fast');
						});
					}

					if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
						var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

						$full_page_background.fadeOut('fast', function() {
							$full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
							$full_page_background.fadeIn('fast');
						});
					}

					if ($('.switch-sidebar-image input:checked').length == 0) {
						var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
						var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

						$sidebar_img_container.css('background-image', 'url("' + new_image + '")');
						$full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
					}

					if ($sidebar_responsive.length != 0) {
						$sidebar_responsive.css('background-image', 'url("' + new_image + '")');
					}
				});

				$('.switch-sidebar-image input').change(function() {
					$full_page_background = $('.full-page-background');

					$input = $(this);

					if ($input.is(':checked')) {
						if ($sidebar_img_container.length != 0) {
							$sidebar_img_container.fadeIn('fast');
							$sidebar.attr('data-image', '#');
						}

						if ($full_page_background.length != 0) {
							$full_page_background.fadeIn('fast');
							$full_page.attr('data-image', '#');
						}

						background_image = true;
					} else {
						if ($sidebar_img_container.length != 0) {
							$sidebar.removeAttr('data-image');
							$sidebar_img_container.fadeOut('fast');
						}

						if ($full_page_background.length != 0) {
							$full_page.removeAttr('data-image', '#');
							$full_page_background.fadeOut('fast');
						}

						background_image = false;
					}
				});

				$('.switch-sidebar-mini input').change(function() {
					$body = $('body');

					$input = $(this);

					if (md.misc.sidebar_mini_active == true) {
						$('body').removeClass('sidebar-mini');
						md.misc.sidebar_mini_active = false;

						$('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

					} else {

						$('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

						setTimeout(function() {
							$('body').addClass('sidebar-mini');

							md.misc.sidebar_mini_active = true;
						}, 300);
					}

					var simulateWindowResize = setInterval(function() {
						window.dispatchEvent(new Event('resize'));
					}, 180);

					setTimeout(function() {
						clearInterval(simulateWindowResize);
					}, 1000);

				});
			});
});
</script>
<script>
	$(document).ready(function() {
		md.initDashboardPageCharts();

	});
</script>
</body>

</html>