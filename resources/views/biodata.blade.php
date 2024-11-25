<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Laravel #4 : Passing Data Controller Ke View Laravel - www.malasngoding.com</title>
</head>
<body>

	<h1>Tutorial Laravel</h1>
    <p>Nama : {{ $nama }}</p>
    <p>Umur : {{ $umur }}</p>
    <p>Hasil Perkalian : {{ $hasil_kali }}</p>
    <p>Mata Pelajaran</p>
	<ul>

		@foreach($matkul as $m)

		<li>{{ $m }}</li>

		@endforeach

	</ul>

	<a href="https://www.malasngoding.com/category/laravel">www.malasngoding.com</a>

</body>
</html>
