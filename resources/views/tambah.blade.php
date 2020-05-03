<!DOCTYPE html>
<html>
<head>
	<title>CRUD Pada Laravel</title>
</head>
<body>
 
	<h2>Data Berita</h2>
 
	<a href="/berita"> Kembali</a>
	
	<br/>
	<br/>
 
	<form action="/berita/store" method="post">
		{{ csrf_field() }}
		Judul Berita <input type="text" name="judul"> <br/>
		Isi Berita <textarea name="isi"></textarea> <br/>
		<input type="submit" value="Simpan Data">
	</form>
		
 
 
</body>
</html>