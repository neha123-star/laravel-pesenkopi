<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>Admin Pesen Kopi</title>


	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet"> 
	<link rel="stylesheet" type="text/css" href="{{ url('assets/admin/vendors/styles/core.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ url('assets/admin/vendors/styles/icon-font.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ url('assets/admin/src/plugins/datatables/css/dataTables.bootstrap4.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ url('assets/admin/src/plugins/datatables/css/responsive.bootstrap4.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ url('assets/admin/vendors/styles/style.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ url('assets/admin/src/plugins/dropzone/src/dropzone.css')}}">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>
</head>
<body>
	<div class="header">
		<div class="header-left">
			<div class="menu-icon dw dw-menu"></div>
		</div>
		<div class="header-right">
			<div class="user-notification">
				@guest
				<li class="nav-item">
					<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
				</li>
				@if (Route::has('register'))
					<li class="nav-item">
						<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
					</li>
				@endif
				@else
				<div class="dropdown">
					<a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
						<i class="icon-copy dw dw-user-12"></i>
						<span class="user-name" style="font-size: 18px">{{ Auth::user()->name }}</span>
					</a>
					<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
						<a class="dropdown-item" href="{{ route('logout') }}" 
							onclick="event.preventDefault();
							document.getElementById('logout-form').submit();">
							<i class="dw dw-logout"></i> Log Out
						</a>
						<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
							@csrf
						</form>
					</div>
				</div>
				@endguest
			</div>
		</div>
	</div>

	
	<div class="left-side-bar">
		<div class="brand-logo">
			<a href="index.html">
				<img src="{{ url('assets/admin/vendors/images/deskapp-logo.svg')}}" alt="" class="dark-logo">
				<img src="{{ url('assets/admin/vendors/images/deskapp-logo-white.svg')}}" alt="" class="light-logo">
			</a>
			<div class="close-sidebar" data-toggle="left-sidebar-close">
				<i class="ion-close-round"></i>
			</div>
        </div>
		<div class="menu-block customscroll">
			<div class="sidebar-menu">
				<ul id="accordion-menu">
					<li class="dropdown">
						<a href="/adminhome" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-house-1"></span><span class="mtext">Home</span>
						</a>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<i class="micon dw dw-coffee-1"></i><span class="mtext">Menu Minuman</span>
						</a>
						<ul class="submenu">
							<li><a href="{{route('ice.index')}}">Coffe/Kopi</a></li>
							<li><a href="{{route('tea.index')}}">Tea</a></li>
							<li><a href="{{route('dalgona.index')}}">Dalgona</a></li>
							<li><a href="{{route('choco.index')}}">Choco</a></li>
							<li><a href="{{route('bottle.index')}}">Bottle Series</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<i class="micon dw dw-cookie"></i></i><span class="mtext">Menu Snack/Cake</span>
						</a>
						<ul class="submenu">
							<li><a href="{{route('brownis.index')}}">Brownis</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="mobile-menu-overlay"></div>

    @yield('content')


    <!-- js -->
	<script src="{{ url('assets/admin/vendors/scripts/core.js')}}"></script>
	<script src="{{ url('assets/admin/vendors/scripts/script.min.js')}}"></script>
	<script src="{{ url('assets/admin/vendors/scripts/process.js')}}"></script>
	<script src="{{ url('assets/admin/vendors/scripts/layout-settings.js')}}"></script>
	<script src="{{ url('assets/admin/src/plugins/apexcharts/apexcharts.min.js')}}"></script>
	<script src="{{ url('assets/admin/src/plugins/datatables/js/jquery.dataTables.min.js')}}"></script>
	<script src="{{ url('assets/admin/src/plugins/datatables/js/dataTables.bootstrap4.min.js')}}"></script>
	<script src="{{ url('assets/admin/src/plugins/datatables/js/dataTables.responsive.min.js')}}"></script>
	<script src="{{ url('assets/admin/src/plugins/datatables/js/responsive.bootstrap4.min.js')}}"></script>
	<script src="{{ url('assets/admin/vendors/scripts/dashboard.js')}}"></script>
	<script src="{{ url('assets/admin/src/plugins/dropzone/src/dropzone.js')}}"></script>
	<script>
		Dropzone.autoDiscover = false;
		$(".dropzone").dropzone({
			addRemoveLinks: true,
			removedfile: function(file) {
				var name = file.name;
				var _ref;
				return (_ref = file.previewElement) != null ? _ref.parentNode.removeChild(file.previewElement) : void 0;
			}
		});
	</script>
</body>
</html>