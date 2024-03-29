<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head>	
		<title>Mark Collecting System</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Page Vendor Stylesheets(used by this page)-->
		@yield('css')
		<!--end::Page Vendor Stylesheets-->
		<!--begin::Global Stylesheets Bundle(used by all pages)-->
		<link href="{{asset('assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed aside-enabled aside-fixed" style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
		<!--begin::Main-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="page d-flex flex-row flex-column-fluid">
				<!--begin::Aside-->
				@include('layout.aside')
				<!--end::Aside-->
				<!--begin::Wrapper-->
				<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
					<!--begin::Header-->
					@include('layout.header')
					<!--end::Header-->
					<!--begin::Content-->
					@yield('content')
					<!--end::Content-->
					<!--begin::Footer-->
					@include('layout.footer')
					<!--end::Footer-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::Root-->
		<!--end::Main-->
		<!--begin::Javascript-->
		<!--begin::Global Javascript Bundle(used by all pages)-->
		<script src="{{asset('assets/plugins/global/plugins.bundle.js')}}"></script>
		<script src="{{asset('assets/js/scripts.bundle.js')}}"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Page Vendors Javascript(used by this page)-->
		@yield('js')
		<!--end::Page Vendors Javascript-->
		<!--begin::Toastr-->
		<script>
			@if(Session::has('success'))
				toastr.options =
				{
					"closeButton" : true,
					"progressBar" : true
				}
						toastr.success("{{ session('success') }}");
			@endif

			@if(Session::has('error'))
				toastr.options =
				{
					"closeButton" : true,
					"progressBar" : true
				}
						toastr.error("{{ session('error') }}");
			@endif

			@if(Session::has('info'))
				toastr.options =
				{
					"closeButton" : true,
					"progressBar" : true
				}
						toastr.info("{{ session('info') }}");
			@endif

			@if(Session::has('warning'))
				toastr.options =
				{
					"closeButton" : true,
					"progressBar" : true
				}
						toastr.warning("{{ session('warning') }}");
			@endif
		</script>
		<!--end::Toastr-->
		<!--begin::Page Custom Javascript(used by this page)-->
		@yield('custom_js')
		<!--end::Page Custom Javascript-->
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>