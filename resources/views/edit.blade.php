<!DOCTYPE html>
<html>
<head>
	<title>CRUD Pada Laravel</title>
</head>
<body>
 
	<h2>Edit Berita</h2>
 
	<a href="/berita"> Kembali</a>
	
	<br/>
	<br/>
 
	@foreach($berita as $p)
	<form action="/berita/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->id }}"> <br/>
		Judul Berita <input type="text" required="required" name="judul" value="{{ $p->judul }}"> <br/>
		Isi Berita <textarea required="required" name="isi">{{ $p->isi }}</textarea> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
		
</body>
</html>