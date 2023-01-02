<!DOCTYPE html>
<html lang="en">

<head>
    @include('layout.header')
</head>

<body>
	@include('layout.navbar')
		<div class="main">
			
	@include('layout.slidebar')
    @yield('content')
	@include('layout.footer')

</body>

</html>
