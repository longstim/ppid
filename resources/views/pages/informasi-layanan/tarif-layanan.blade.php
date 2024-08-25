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
				<p align="center">
					Tarif Layanan Jasa Teknis Balai Standardisasi dan Pelayanan Jasa Industri Medan ditetapkan berdasarkan <b>Peraturan Pemerintah Republik Indonesia (PP) Nomor 54 Tahun 2021 </b> tentang Jenis dan Tarif atas Jenis Penerimaan Negara Bukan Pajak yang berlaku pada Kementerian Perindustrian sejak tanggal 24 Maret 2021.
				</p>
			</center>
			<hr>
			<div class="row">
				<div class="col-md-12">
					<div>
	        	@if(Session::has('message'))
	            	<input type="hidden" name="txtMessage" id="idmessage" value="{{Session::has('message')}}"></input>
	            	<input type="hidden" name="txtMessage_text" id="idmessage_text" value="{{Session::get('message')}}"></input>
	        	@endif
	      	</div>
				<!--<form role="form" id="tarif" method="post" action="#" >
				{{ csrf_field() }}-->
					<div class="w3-row">
						<p>
							<label><b>Komoditi<a style="color:red;">&#42;</a></b></label>
					    <select name="komoditi" id="komoditiSlc" class="form-control select2bs4" onchange="dataparameter(this.value)" style="width: 100%;" required>
                  <option value="" selected="selected">-- Pilih Komoditi --</option>
                  @foreach($komoditi as $data)
                      <option value="{{$data->id}}">{{$data->nama_komoditi}}</option>
                  @endforeach
	            </select>
						</p>
						<p>
							<label><b>Parameter<a style="color:red;">&#42;</a></b></label>
							<select name="parameter" id="parameterSlc" class="form-control select2bs4" onchange="gethargaparameter(this.value)" style="width: 100%;" required>
									<option value="" selected="selected">-- Pilih Parameter --</option>
	            </select>
						</p>
						<p>
							<label><b>Tarif (Rp)</b></label>
							<input type="text" name="harga" id="hargaTxt" placeholder="0" width="100%" disabled>
						</p>
						<p style="text-align: center;">
							<button class="button" id="btnAddParameter">Tambah</button>
						</p>
					</div>
				<!--</form >-->
				<hr/>
				<h4>Hasil Simulasi Tarif Layanan Jasa Teknis BSPJI Medan</h4>
				<div class="col-md-12">
					<table id="simulasi-table" style="width:100%;">
						<thead>
	            <tr>
	              <th>No</th>
	              <th>Komoditi</th>
	              <th>Parameter</th>
	              <th>Tarif (Rp)</th>
	              <th>Aksi</th>
	            </tr>
	           </thead>
	          <tbody>
	         	</tbody>
	         	<tfoot>
	           		<tr>
	           				<td colspan="3" align="center"><b>Total Tarif Layanan :</b></td>
	           				<td align="right" id="totaltarif">-</td>
	           		</tr>
	         	</tfoot>
    			</table>
				</div>
			</div>
		</div>
		</section>
		<section>

		</section>
</main>

<script src="{{asset('js/jquery.min.js')}}"></script>

<script>
	$(document).ready(function () {
	  $('#permohonan-informasi-publik').validate({
	    rules: {
	      komoditi: {
	        required: true
	      },
	      parameter: {
	        required: true
	      },
	      alamat: {
	        required: true
	      },
	    },
	    messages: {
	      komoditi: {
	        required: "Komoditi harus diisi."
	      },
	      parameter: {
	        required: "Parameter harus diisi."
	      },
	      alamat: {
	        required: "Alamat harus diisi."
	      },
	    },
	    errorElement: 'span',
	    errorPlacement: function (error, element) {
	      error.addClass('invalid-feedback');
	      element.closest('.form-group').append(error);
	    },
	    highlight: function (element, errorClass, validClass) {
	      $(element).addClass('is-invalid');
	    },
	    unhighlight: function (element, errorClass, validClass) {
	      $(element).removeClass('is-invalid');
	    }
	  });

      //SweetAlert Success
      var message = $("#idmessage").val();
      var message_text = $("#idmessage_text").val();

      if(message=="1")
      {
        Swal.fire({     
           icon: 'success',
           title: 'Success!',
           text: message_text,
           showConfirmButton: false,
           timer: 1500
        })
      }


	  //datepicker
	  $('#datepickerawal').datepicker({
	      format: 'dd/mm/yyyy',
	      autoclose: true
		})

		$('#datepickerakhir').datepicker({
	      format: 'dd/mm/yyyy',
	      autoclose: true
		})

	});

	function dataparameter(id_komoditi)
  {
	    //alert(id_komoditi);
	    var APP_URL = {!! json_encode(url('/')) !!};

	    if(id_komoditi!="")
	    {
	      $.ajax({
		        url: APP_URL+'/jsondataparameter/'+id_komoditi,
		        type : 'GET',
		        datatype: "json",
		        success:function(data)
		        {
		        	//alert(output);
		          var output = JSON.parse(data);
		          //console.log(output);
		   
	            $('#parameterSlc').empty();
	            $("#hargaTxt").val("0");
	            $('#parameterSlc').append('<option value="" selected="selected">-- Pilih Parameter --</option>');
              $.each(output, function(key, value) {
                  $('#parameterSlc').append('<option value="'+ key +'">'+ value +'</option>');
              });
		        } 
	      	});
	    }
	    else
	    {
	      	$('#parameterSlc').empty();
	      	$("#hargaTxt").val("0");
	      	$('#parameterSlc').append('<option value="" selected="selected">-- Pilih Parameter --</option>');
	    }
  }

  function gethargaparameter(id_parameter)
  {
	    //alert(id_parameter);
	    var APP_URL = {!! json_encode(url('/')) !!};

	    if(id_parameter!="")
	    {
	      $.ajax({
		        url: APP_URL+'/jsongethargaparameter/'+id_parameter,
		        type : 'GET',
		        datatype: "json",
		        success:function(data)
		        {
		          var output = JSON.parse(data);
		          console.log(output);
		          //alert(output);
		   				$("#hargaTxt").val(output.harga);
		        } 
	      	});
	    }
	    else
	    {
	    		$("#hargaTxt").val("0");
	    }
  }

</script>

<script type="text/javascript">
 $( document ).ready(function () {

 		no=0;

    $('#btnAddParameter').on('click', function(){

    	if($('#parameterSlc').val()!="")
    	{
    		if(no < 1)
    		{
    			 $('#simulasi-table tbody').empty();
    			 no=1;
    		}
    		else
    		{
    			 no++;
    		}

        addRow(no);	

      	$('#simulasi-table tbody tr').each(function(i){            
      				$($(this).find('td')[0]).html(i+1);         
  			}); 

  			calc_total();
    	}
    });

    $("#simulasi-table tbody").on('click','.removeRow',function(){

			    $(this).parent().parent().remove();

      		$('#simulasi-table tbody tr').each(function(i){            
        				$($(this).find('td')[0]).html(i+1);          
    			}); 

    			calc_total();
    });

    function addRow(no)
    {

    	kom_value = $('#komoditiSlc option:selected').text();
    	par_value = $('#parameterSlc option:selected').text();
    	harga_value = $("#hargaTxt").val();
     
      var tr = '<tr'+ '>'+
                   '<td align="center">'+
                      no +
                    '</td>'+
                    '<td>'+
                      kom_value +
                    '</td>'+
                    '<td>'+
                      par_value +
                    '</td>'+
                    '<td align="right">'+
                      harga_value +
                    '</td>'+
                    '<td align="center">'+
                       '<a href="javascript:void(0);" class="removeRow">Hapus</a>'+
                    '</td>'+
                 '</tr>';
        
      $('#simulasi-table tbody').append(tr);

    }

    function calc_total()
    {
		  var sum = 0;
		  $('#simulasi-table tbody tr').each(function()
		  {
		  		//alert($($(this).find('td')[3]).text());
		    	sum += parseFloat($($(this).find('td')[3]).text());
		  });

		  $('#totaltarif').html('<b>'+formatNumber(sum)+'</b>');
		}

		function formatNumber(num) 
		{
		  return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1.')
		}

  });
  </script>

@endsection