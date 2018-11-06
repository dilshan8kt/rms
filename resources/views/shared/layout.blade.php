<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

	<head>
		<meta charset="utf-8" />
		<title>Pilgrims | @yield('title')</title>
		<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
		<meta content="" name="description" />
		<meta content="" name="author" />
		
		<!-- ================== BEGIN BASE CSS STYLE ================== -->
		<link href="https://fonts.googleapis.com/css?family=Nunito:400,300,700" rel="stylesheet" id="fontFamilySrc" />
		<link href="{{ asset('plugins/jquery-ui/themes/base/minified/jquery-ui.min.css') }}" rel="stylesheet" />
		<link href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
		<link href="{{ asset('plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" />
		<link href="{{ asset('css/animate.min.css') }}" rel="stylesheet" />
		<link href="{{ asset('css/style.min.css') }}" rel="stylesheet" />
		<link href="{{ asset('plugins/gritter/css/jquery.gritter.css') }}" rel="stylesheet" />	
		<!-- ================== END BASE CSS STYLE ================== -->
		
		<!-- ================== BEGIN PAGE LEVEL CSS STYLE ================== -->
		@yield('css')
		<!-- ================== END PAGE LEVEL CSS STYLE ================== -->
		
		<!-- ================== BEGIN BASE JS ================== -->
		<script src="{{ asset('plugins/pace/pace.min.js') }}"></script>
		<!-- ================== END BASE JS ================== -->
	</head>
	<body>
		<!-- begin #page-loader -->
		<div id="page-loader" class="page-loader fade in"><span class="spinner">Loading...</span></div>
		<!-- end #page-loader -->

		<!-- begin #page-container -->
		<div id="page-container" class="fade page-container page-header-fixed page-sidebar-fixed page-with-two-sidebar page-with-footer">
			<!-- begin #header -->
			@include("shared.header-nav")
			<!-- end #header -->
			
			<!-- begin #sidebar -->
			@include("shared.side-nav")
			<!-- end #sidebar -->
			
			<!-- begin #content -->
			<div id="content" class="content">
				@yield('content')
			</div>
			<!-- end #content -->
		</div>
		<!-- end page container -->
		
		<!-- ================== BEGIN BASE JS ================== -->
		<script src="{{ asset('plugins/jquery/jquery-1.9.1.min.js') }}"></script>
		<script src="{{ asset('plugins/jquery/jquery-migrate-1.1.0.min.js') }}"></script>
		<script src="{{ asset('plugins/jquery-ui/ui/minified/jquery-ui.min.js') }}"></script>
		<script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
		<!--[if lt IE 9]>
			<script src="assets/crossbrowserjs/html5shiv.js"></script>
			<script src="assets/crossbrowserjs/respond.min.js"></script>
		<![endif]-->
		<script src="{{ asset('plugins/gritter/js/jquery.gritter.js') }}"></script>
		<script src="{{ asset('plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
		<script src="{{ asset('plugins/jquery-cookie/jquery.cookie.js') }}"></script>
		<script src="{{ asset('js/apps.min.js') }}"></script>
		<!-- ================== END BASE JS ================== -->
		
		<!-- ================== BEGIN PAGE LEVEL JS ================== -->
		@yield('js')
		<!-- ================== END PAGE LEVEL JS ================== -->
		@if(session()->has('success'))
			<script>
				$.gritter.add({
					title: 'SUCCESS',
					text: '{{ session()->get('success') }}',
					time: 8000,
					class_name: 'gritter-info gritter-center'
				});
			</script>
		@endif	

		@if(session()->has('error'))
			<script>
				$.gritter.add({
					title: 'ERROR',
					text: '{{ session()->get('error') }}',
					time: 5000,
					class_name: 'gritter-light gritter-center'
				});
			</script>
		@endif

		{{-- @if(session()->has('loggedin'))
			<script>
				$.gritter.add({
					title: "{{ session()->get('loggedin') }}, {{ Auth::user()->first_name }}",
					text: "",
					// image: "{{ route('image', ['filename' => Auth::user()->id . '-' . Auth::user()->first_name . '.jpg']) }}",
					time: 5000,
					class_name: "my-sticky-class"
				});
			</script>
		@endif --}}
		<script>
			$(document).ready(function() {
				App.init();
				PageDemo.init();
			});
		</script>
	</body>

</html>
