@extends('layouts.app')

@section('body')
<body class="hold-transition sidebar-mini sidebar-collapse">
	{{-- Wrapper --}}
    <div id="app" class="wrapper">
    	
    	{{-- Navbar --}}
    	@include('adm.navbar')
    	{{-- /.navbar --}}

    	{{-- Main Sidebar Container --}}
		@include('adm.main-sidebar')
    	{{-- /.sidebar --}}

    	{{-- Content Wrapper. Contains page content --}}
		@yield('content')
    	{{-- /.content-wrapper --}}

    	{{-- Footer --}}
		@include('adm.footer')
    	{{-- /.footer --}}
		
		{{-- Control Sidebar --}}
		@include('adm.control-sidebar')
		{{-- /.control-sidebar --}}

    </div>
    {{-- ./wrapper --}}
</body>
@endsection