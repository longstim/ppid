@extends('layouts.web')
@section('page_heading', $title)
@section('content')

<style>
	#tarif-form {
			margin-bottom: 50px;
			margin-left: 200px;
			margin-right: 200px;
			text-align: left;
		}

	table{
			width: 100%;
			border-collapse: collapse;
		}

	table, th, td {
	  border: 1px solid #AFAFAF;
	}

	th {
		text-align: center;
		background-color: #1d809f;
		color:#ffffff;
	}

	th, td{
	  padding: 10px;
	}

	.removeRow
	{
		color: red;
		font-weight: bold;
		text-decoration: none;
	}

	.removeRow:hover
	{
		color: #007dfe;
	}


	@media only screen and (max-width:800px) {
		  /* For mobile phones: */
		  	
			#tarif-form {
				margin-bottom: 50px;
				margin-left: 50px;
				margin-right: 50px;
				text-align: left;
			}

			#tarif-title{
				font-size:20px;
			}
		}
</style>

<main>
	<div class="banner">
	</div>
		<section id="tarif-form">
			<center><h1 id="tarif-title">{{$title}}</h1>
				<hr style="border: 2px solid #1d809f; width: 70px;" />				
			</center>

			<div id="Standar-Pelayanan-Pengujian">
				<h4>Standar Pelayanan Pengujian</h4>
				<iframe src="{{asset('dokumen/Standar-Pelayanan-Pengujian.pdf')}}" align="top" height="620" width="100%" frameborder="0" scrolling="auto"></iframe>
			</div>
			<hr/>
			<div id="Standar-Pelayanan-Kalibrasi">
				<h4>Standar Pelayanan Kalibrasi</h4>
				<iframe src="{{asset('dokumen/Standar-Pelayanan-Kalibrasi.pdf')}}" align="top" height="620" width="100%" frameborder="0" scrolling="auto"></iframe>
			</div>
			<hr/>
			<div id="Standar-Pelayanan-Sertifikasi-Produk">
				<h4>Standar Pelayanan Sertifikasi Produk</h4>
				<iframe src="{{asset('dokumen/Standar-Pelayanan-Sertifikasi-Produk.pdf')}}" align="top" height="620" width="100%" frameborder="0" scrolling="auto"></iframe>
			</div>
		</section>
</main>

<script src="{{asset('js/jquery.min.js')}}"></script>

<script>
</script>

@endsection