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
		  	
			#alur-form {
				margin-bottom: 50px;
				margin-left: 50px;
				margin-right: 50px;
				text-align: left;
			}

			#alur-title{
				font-size:20px;
			}

		}
</style>

<main>
		<div class="banner">
		</div>
		<section id="alur-layanan-form">
		<div class="w3-row">
			<center><h1 id="alur-title">{{$title}}</h1>
			<hr style="border: 2px solid #1d809f; width: 70px;" />	
					<img id="img-alur-layanan" src="{{asset('image/picture/alur-pelayanan-sertifikasi.png')}}" width="80%">
			</center>
		</div>
		<section>
			<br><br><br>
</main>

<script src="{{asset('js/jquery.min.js')}}"></script>

@endsection