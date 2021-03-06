<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

	@include('partials.styles')
</head>
<body>
	<div class="container">
		<div id="app" v-cloak>
		@include('partials.message')
		@include('partials.navbar')

		@yield('content')

		
	</div>
	</div>
	
	@include('partials.scripts')
</body>
</html>