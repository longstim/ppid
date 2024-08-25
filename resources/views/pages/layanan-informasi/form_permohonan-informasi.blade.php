@extends('layouts.web')
@section('content')

<main class="main" style="margin-top:70px;">
		<section id="permohonan-form" class="features section">
			<!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Form Permohonan Informasi</h2>
        <p><i>
					Silahkan isi data permohonan anda dengan benar!</i>
				</p>
      </div><!-- End Section Title -->
      <div class="container"  style="margin-top:30px;">
        <div class="row justify-content-between">
        	<div class="col-lg-12" style="margin-bottom: 20px;">
             <div class="col-md-12">
             	<form role="form" id="permohonan-informasi" method="post" action="{{url('layanan-informasi/proses-permohonan-informasi')}}" enctype="multipart/form-data">
							{{ csrf_field() }}
              <div>
              	@if(Session::has('message'))
	            	<input type="hidden" name="txtMessage" id="idmessage" value="{{Session::has('message')}}"></input>
	            	<input type="hidden" name="txtMessage_text" id="idmessage_text" value="{{Session::get('message')}}"></input>
		        		@endif

		        		@if(Session::has('failed'))
				          <input type="hidden" name="txtMessageFailed" id="idmessagefailed" value="{{Session::has('failed')}}"></input>
				          <input type="hidden" name="txtMessageFailed_text" id="idmessagefailed_text" value="{{Session::get('failed')}}"></input>
				        @endif
		        		<div>
	                <div class="row form-group col-md-12">
	                	<div class="col-md-4">
	                		<label><b>Nama Pemohon</b></label>
	                	</div>
	                	<div class="col-md-8">
	                  	<input type="text" name="nama_pemohon" class="form-control" placeholder="Nama Pemohon" width="100%" required>
	                  </div>
	                </div>
	                <br>
	                <div class="row form-group col-md-12">
	                	<div class="col-md-4">
										<label><b>Nomor Identitas</b></label>
										</div>
										<div class="col-md-8">
										<input type="text" name="no_identitas" class="form-control" placeholder="No. KTP / SIM / NPWP" width="100%" required>
										</div>	
	              	</div>
	              	<br>
	              	<div class="row form-group col-md-12">
	              		<div class="col-md-4">
	                		<label><b>Lampirkan Softcopy Dokumen Identitas Pribadi (.jpg / .pdf) File Size Max = 2MB</b>
	                	</label>
	               		</div>
	                	<div class="col-md-8">
	              			<input type="file" name="upload_dokumen" class="custom-file-input form-control" id="uploadFile" required>
	              		</div>
	              	</div>
	              	<br>
	              	<div class="row form-group col-md-12">
	                	<div class="col-md-4">
										<label><b>Alamat</b></label>
										</div>
										<div class="col-md-8">
										<input type="text" name="alamat" class="form-control" placeholder="Alamat" width="100%" required>
										</div>	
	              	</div>
	              	<br>
	              	<div class="row form-group col-md-12">
	                	<div class="col-md-4">
										<label><b>Pekerjaan</b></label>
										</div>
										<div class="col-md-8">
										<input type="text" name="pekerjaan" class="form-control" placeholder="Pekerjaan" width="100%" required>
										</div>	
	              	</div>
	              	<br>
	              	<div class="row form-group col-md-12">
	                	<div class="col-md-4">
										<label><b>No. HP (Whatsapp)</b></label>
										</div>
										<div class="col-md-8">
										<input type="text" name="no_hp" class="form-control" placeholder="No. HP (Whatsapp)" width="100%" required>
										</div>	
	              	</div>
	              	<br>
	              	<div class="row form-group col-md-12">
	                	<div class="col-md-4">
										<label><b>E-Mail</b></label>
										</div>
										<div class="col-md-8">
										<input type="email" name="email" class="form-control" placeholder="E-Mail" width="100%" required>
										</div>	
	              	</div>
	              	<br>
	              	<div class="row form-group col-md-12">
	                	<div class="col-md-4">
										<label><b>Rincian Informasi yang dibutuhkan</b></label>
										</div>
										<div class="col-md-8">
										<textarea name="rincian" style="width: 100%;" placeholder="" rows="3" class="form-control" required></textarea>
										</div>	
	              	</div>
	              	<br>
	              	<div class="row form-group col-md-12">
	                	<div class="col-md-4">
										<label><b>Tujuan Penggunaan Informasi</b></label>
										</div>
										<div class="col-md-8">
										<textarea name="tujuan" style="width: 100%;" placeholder="" rows="3" class="form-control" required></textarea>
										</div>	
	              	</div>
	              	<br>
	              	<div class="row form-group col-md-12">
	                	<div class="col-md-4">
										<label><b>Cara Memperoleh Informasi</b></label>
										</div>
										<div class="col-md-8">
										<p>
										 	<label>
			                  <input type="radio" name="cara_memperoleh" id="melihat" value="Melihat" required> Melihat
			                </label>
			              </p>
			              <p>
										 	<label>
			                  <input type="radio" name="cara_memperoleh" id="membaca" value="Membaca"> Membaca
			                </label>
			              </p>
			              <p>
										 	<label>
			                  <input type="radio" name="cara_memperoleh" id="Mendengarkan" value="Membaca"> Mendengarkan
			                </label>
			              </p>
			              <p>
										 	<label>
			                  <input type="radio" name="cara_memperoleh" id="Mencatat" value="Membaca"> Mencatat
			                </label>
			              </p>
			              <p>
			                <label>
			                  <input type="radio" name="cara_memperoleh" id="hardcopy" value="Mendapatkan salinan informasi (hardcopy)"> Mendapatkan salinan informasi (hardcopy)
			                </label>
			              </p>
			              <p>
			                <label>
			                  <input type="radio" name="cara_memperoleh" id="softcopy" value="Mendapatkan salinan informasi (softcopy)"> Mendapatkan salinan informasi (softcopy)
			                </label>
			              </p>
										</div>	
	              	</div>
	              	<br>
	              	<div class="row form-group col-md-12">
	                	<div class="col-md-4">
										<label><b>Cara Mendapatkan Salinan Informasi</b></label>
										</div>
										<div class="col-md-8">
											<p>
			                <label>
			                  <input type="radio" name="cara_mendapatkan" id="langsung" value="Mengambil Langsung" required> Mengambil Langsung
			                </label>
			              </p>
			              <p>
			                <label>
			                  <input type="radio" name="cara_mendapatkan" id="kurir" value="Kurir"> Kurir
			                </label>
			              </p>
			              <p>
			                <label>
			                  <input type="radio" name="cara_mendapatkan" id="pos" value="Pos"> Pos
			              </p>
			              <p>
			                <label>
			                  <input type="radio" name="cara_mendapatkan" id="faksimili" value="Faksimili"> Faksimili
			                </label>
			              </p>
			              <p>
			                <label>
			                  <input type="radio" name="cara_mendapatkan" id="email" value="E-Mail"> E-Mail
			               </label>
			              </p>
										</div>	
	              	</div>
	              	<br>
	              	<div class="form-group col-md-12 services">
										<label><h6>Math Captcha</h6></label>
										<div class="row">
											<div class="col-md-2">
												@php
													$a = captcha();
													$b = captcha();
												@endphp

												<input type="hidden" name="a" value="{{$a}}">
												<input type="hidden" name="b" value="{{$b}}">

												<h3><b>{{$a}}</b> + <b>{{$b}}</b> = </h3>
											</div>
											<div class="col-md-3">
												<input type="text" name="captcha" class="form-control" width="100%" required>
											</div>
										</div>
	              	</div>
	              	<br>
	              	<div class="row form-group col-md-12">
	              		<p>
			                <label>
			                  <input type="checkbox" name="persetujuan" id="persetujuan" value="persetujuan" required> <i style="font-size:13px;"> Data dan informasi yang saya terima akan dipergunakan sesuai peraturan perundang-undangan yang berlaku.</i>
											</label>
			            	</p>
	              	</div>
            		</div>
            	</div> 
            	<br>
            	<div class="col-md-12">
            		<p style="text-align: center;">
									<button class="btn-get-started" style="border:none">Kirim</button>
								</p>
            	</div>
            	</form> 
            </div>
          </div>
       </div>
     </div>
		</div>
		</section>
</main>

<script src="{{asset('js/jquery.min.js')}}"></script>
<script>
	$(document).ready(function () {
      //SweetAlert Success
      var message = $("#idmessage").val();
      var message_text = $("#idmessage_text").val();

      if(message=="1")
      {
        Swal.fire({     
           icon: 'success',
           title: 'Success!',
           text: message_text,
           showConfirmButton: true,
	         confirmButtonClass: 'btn bg-success rounded-pill',
        })
      }

      //SweetAlert Failed
	    var failed = $("#idmessagefailed").val();
	    var messagefailed_text = $("#idmessagefailed_text").val();

	    if(failed=="1")
	    {
	      Swal.fire({     
	         icon: 'error',
	         title: 'Gagal!',
	         text: messagefailed_text,
	         showConfirmButton: true,
	         confirmButtonClass: 'btn bg-danger rounded-pill',
	      })
	    }
	});
</script>

@endsection