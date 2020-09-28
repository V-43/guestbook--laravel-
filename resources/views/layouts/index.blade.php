<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="utf-8">  
		<title>Гостевая книга</title>
		<link rel="stylesheet" href="{{ asset('public/css/bootstrap/css/bootstrap.css') }}">
		<link rel="stylesheet" href="{{ asset('public/css/styles.css') }}">
		<script src="https://ru.vuejs.org/js/vue.js"></script>
	</head>
	<body>
		<div id="wrapper">
			@yield('content')
		</div>
	</body>
</html>

