<!DOCTYPE html>
<html>
<head>
	<title>CRUD Pada Laravel</title>
</head>
<body>
 
	<h2>Data Berita</h2>
 
	<a href="/berita/tambah"> + Tambah Berita Baru</a>
	
	<br/>
	<br/>
 
	<table border="1">
		<tr>
			<th>Judul Berita</th>
			<th>Isi Berita</th>
			<th>Opsi</th>
		</tr>
		@foreach($berita as $p)
		<tr>
			<td>{{ $p->judul }}</td>
			<td>{{ $p->isi }}</td>
			<td>
				<a href="/berita/edit/{{ $p->id }}">Edit</a>
				|
				<a href="/berita/hapus/{{ $p->pid }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
 
 
</body>
</html>