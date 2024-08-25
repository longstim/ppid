@extends('layouts.web')
@section('content')
<style>
.accordion {
  background-color: #eee;
  color: #444;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
  transition: 0.4s;
  margin-bottom: 10px;
}

.panel {
  padding: 20px;
  display: none;
  background-color: white;
  overflow: hidden;
}

.accordion {
    background-color: #eee;
    color: #444;
    cursor: pointer;
    padding: 18px;
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;
    transition: 0.4s;
}

.accordion.active, .accordion:hover {
    background-color: #388da8;
    color: #fff;
}

.accordion:after {
    content: '\002B';
    color: #777;
    font-weight: bold;
    font-size: 14pt;
    float: right;
    margin-left: 5px;
}
.accordion.active:after {
    content: "\2212";
    color: #fff;
}

</style>

  <main class="main" style="margin-top:70px;">
    <!-- Features Section -->
    <section id="informasi-berkala" class="faq section">
      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Informasi Dikecualikan</h2>
        <p><i>
           Informasi yang tidak dapat diakses oleh Pemohon Informasi Publik .</i>
        </p>
      </div><!-- End Section Title -->

      <div class="container" style="margin-top:30px;">

        <div class="row justify-content-center">

          <div class="col-lg-10" data-aos="fade-up" data-aos-delay="100">

            <div class="faq-container">
              @foreach($idjudul as $data)
              <button class="accordion"><b style="font-size:15pt">{{$data->judul}}</b></button>
              <div class="panel">
                @foreach(getDikecualikanItem($data->id) as $val)
                <div class="row">
                  <div class="col-md-10">
                    {{$val->nama_item}}
                  </div>
                  <div class="col-md-2">
                    <a href="{{$val->link}}" target="_blank" class="btn-get-started">Lihat</a>
                  </div>
                </div>
                <hr>
                @endforeach
              </div>
              @endforeach
            </div>

          </div><!-- End Faq Column-->

        </div>

      </div>

    </section><!-- /Features Section -->

  </main>
  <script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
</script>
@endsection
