@extends('layouts.dashboard')
@section('content')
  <!-- Main content -->
      <!-- /.col -->
    <div class="col-md-12">
      <div class="card">
        <div class="card-header p-2">
          <ul class="nav nav-pills">
            <li class="nav-item"><a class="nav-link active" href="#informasi-publik" data-toggle="tab"><b>Informasi Publik</b></a></li>
            <li class="nav-item"><a class="nav-link" href="#pengaduan" data-toggle="tab"><b>Pengaduan Masyarakat</b></a></li>
          </ul>
        </div><!-- /.card-header -->
        <div class="card-body">
          <div class="tab-content">

        <!-- /.tab-pane -->
        <div class="active tab-pane" id="informasi-publik">
           <div class="row">
              <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-primary">
                  <div class="inner">
                    <h3>{{$data_status_permohonan['open']}}</h3>
                    <b>Open</b>
                  </div>
                  <div class="icon">
                    <i class="ion ion-folder"></i>
                  </div>
                  <a href="{{url('daftar-permohonan-informasi-publik/Open')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <!-- ./col -->
              <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                  <div class="inner">
                    <h3>{{$data_status_permohonan['process']}}</h3>
                    <b>In Progress</b>
                  </div>
                  <div class="icon">
                    <i class="ion ion-ios-gear"></i>
                  </div>
                  <a href="{{url('daftar-permohonan-informasi-publik/Process')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <!-- ./col -->
              <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                  <div class="inner">
                    <h3>{{$data_status_permohonan['solved']}}</h3>
                    <b>Solved</b>
                  </div>
                  <div class="icon">
                    <i class="ion ion-android-checkmark-circle"></i>
                  </div>
                  <a href="{{url('daftar-permohonan-informasi-publik/Solved')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <!-- ./col -->
              <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-danger">
                  <div class="inner">
                    <h3>{{$data_status_permohonan['cancel']}}</h3>
                    <b>Cancel</b>
                  </div>
                  <div class="icon">
                    <i class="ion ion-android-cancel"></i>
                  </div>
                  <a href="{{url('daftar-permohonan-informasi-publik/Cancel')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
              </div>
                <!-- ./col -->
              </div>

             <div class="row">
                <!-- Permohonan Informasi Publik per Bulan -->
                <div class = "col-md-6">
                  <div class="card card-light">
                    <div class="card-header">
                      <h3 class="card-title"><b>Permohonan Informasi Publik per Bulan</b></h3>    
                    </div>
                    <div class="card-body">
                      <div class="chart">
                        <canvas id="barChartPermohonanInformasi" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                      </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
              </div>

                <!-- Status Permohonan Informasi Publik -->
                <div class = "col-md-6">
                  <div class="card card-light">
                    <div class="card-header">
                      <h3 class="card-title"><b>Status Permohonan Informasi Publik</b></h3>
                    </div>
                    <div class="card-body">
                      <canvas id="donutChartPermohonanInformasi" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                    </div>
                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
                </div>
            </div>
          </div>
            <!-- /.tab-pane -->
            

            <!-- /.tab-pane -->
            <div class="tab-pane" id="pengaduan">

              <div class="row">
              <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-primary">
                  <div class="inner">
                    <h3>{{$data_status_pengaduan['open']}}</h3>
                    <b>Open</b>
                  </div>
                  <div class="icon">
                    <i class="ion ion-folder"></i>
                  </div>
                  <a href="{{url('daftar-pengaduan/Cancel')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <!-- ./col -->
              <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                  <div class="inner">
                    <h3>{{$data_status_pengaduan['process']}}</h3>
                    <b>In Progress</b>
                  </div>
                  <div class="icon">
                    <i class="ion ion ion-ios-gear"></i>
                  </div>
                  <a href="{{url('daftar-pengaduan/Process')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <!-- ./col -->
              <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                  <div class="inner">
                    <h3>{{$data_status_pengaduan['solved']}}</h3>
                    <b>Solved</b>
                  </div>
                  <div class="icon">
                    <i class="ion ion-android-checkmark-circle"></i>
                  </div>
                  <a href="{{url('daftar-pengaduan/Solved')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <!-- ./col -->
              <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-danger">
                  <div class="inner">
                    <h3>{{$data_status_pengaduan['cancel']}}</h3>
                    <b>Cancel</b>
                  </div>
                  <div class="icon">
                    <i class="ion ion-android-cancel"></i>
                  </div>
                  <a href="{{url('daftar-pengaduan/Cancel')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
              </div>
                <!-- ./col -->
              </div>

                
                <div class="row">
                <!-- PENGADUAN-->
                  <div class = "col-md-6">
                    <div class="card card-light">
                      <div class="card-header">
                        <h3 class="card-title"><b>Pengaduan Masyarakat per Bulan</b></h3>
                      </div>
                      <div class="card-body">
                        <div class="chart">
                          <canvas id="barChartPengaduan" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                        </div>
                      </div>
                      <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
                </div>

                  <div class = "col-md-6">

                    <div class="card card-light">
                      <div class="card-header">
                        <h3 class="card-title"><b>Status Pengaduan Masyarakat</b></h3>
                      </div>
                      <div class="card-body">
                        <canvas id="donutChartPengaduan" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>
              </div>
              
            </div>
            <!-- /.tab-pane -->

          </div>
          <!-- /.tab-content -->
        </div><!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- /.col -->

  

<!-- ChartJS -->
<script src="{{asset('assets/plugins/chart.js/Chart.min.js')}}"></script>
<script src="{{asset('js/jquery.min.js')}}"></script>
<script>
  $( document ).ready(function () {
 
    //-------------
    //- STATUS PERMOHONAN INFORMASI -
    //-------------

    var dataPermohonanInformasi        = {
      labels: [
          'Open', 'In Progress', 'Solved', 'Cancel', 
      ],
      datasets: [
        {
          data: [{{$data_status_permohonan['open']}},{{$data_status_permohonan['process']}}, {{$data_status_permohonan['solved']}}, {{$data_status_permohonan['cancel']}}],
          backgroundColor : ['#007bff',  '#ffc107',  '#28a745', '#dc3545'],
        }
      ]
    }

    // Get context with jQuery - using jQuery's .get() method.
    var pieChartCanvas = $('#donutChartPermohonanInformasi').get(0).getContext('2d')
    var pieData        = dataPermohonanInformasi;
    var pieOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    new Chart(pieChartCanvas, {
      type: 'doughnut',
      data: pieData,
      options: pieOptions
    })


    //-------------
    //- PERMOHONAN INFORMASI PER BULAN -
    //-------------

    var areaChartData = {
    labels  : ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agt', 'Sep', 'Okt', 'Nov', 'Des'],
    datasets: [
        {
          label               : 'Jumlah Permohonan',
          backgroundColor     : '#20639B',
          borderColor         : 'rgba(210, 214, 222, 1)',
          pointRadius         : false,
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [{{$datapermohonan[1]}},{{$datapermohonan[2]}},{{$datapermohonan[3]}}, {{$datapermohonan[4]}}, {{$datapermohonan[5]}}, {{$datapermohonan[6]}},{{$datapermohonan[7]}}, {{$datapermohonan[8]}}, {{$datapermohonan[9]}}, {{$datapermohonan[10]}}, {{$datapermohonan[11]}}, {{$datapermohonan[12]}}]
        }
      ]
    }

    var barChartCanvas = $('#barChartPermohonanInformasi').get(0).getContext('2d')
    var barChartData = $.extend(true, {}, areaChartData)
    var temp1 = areaChartData.datasets[0]
    barChartData.datasets[0] = temp1

    var barChartOptions = {
      responsive              : true,
      maintainAspectRatio     : false,
      datasetFill             : false
    }

    new Chart(barChartCanvas, {
      type: 'bar',
      data: barChartData,
      options: barChartOptions
    })

    //-------------
    //- STATUS PENGADUAN -
    //-------------

    // Get context with jQuery - using jQuery's .get() method.
     var donutChartCanvas = $('#donutChartPengaduan').get(0).getContext('2d')
    var donutData        = {
      labels: ['Open', 'In Progress', 'Solved', 'Cancel'
      ],
      datasets: [
        {
          data: [{{$data_status_pengaduan['open']}}, {{$data_status_pengaduan['process']}}, {{$data_status_pengaduan['solved']}}, {{$data_status_pengaduan['cancel']}}],
          backgroundColor : ['#007bff',  '#ffc107',  '#28a745', '#dc3545'],
        }
      ]
    }
    var donutOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    new Chart(donutChartCanvas, {
      type: 'doughnut',
      data: donutData,
      options: donutOptions
    })


    //-------------
    //- PENGADUAN PER BULAN -
    //-------------

    var areaChartData = {
    labels  : ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agt', 'Sep', 'Okt', 'Nov', 'Des'],
    datasets: [
        {
          label               : 'Jumlah Pengaduan',
          backgroundColor     : '#20639B',
          borderColor         : 'rgba(210, 214, 222, 1)',
          pointRadius         : false,
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [{{$datapengaduan[1]}},{{$datapengaduan[2]}},{{$datapengaduan[3]}}, {{$datapengaduan[4]}}, {{$datapengaduan[5]}}, {{$datapengaduan[6]}},{{$datapengaduan[7]}}, {{$datapengaduan[8]}}, {{$datapengaduan[9]}}, {{$datapengaduan[10]}}, {{$datapengaduan[11]}}, {{$datapengaduan[12]}}]
        }
      ]
    }

    var barChartCanvas = $('#barChartPengaduan').get(0).getContext('2d')
    var barChartData = $.extend(true, {}, areaChartData)
    var temp1 = areaChartData.datasets[0]
    barChartData.datasets[0] = temp1

    var barChartOptions = {
      responsive              : true,
      maintainAspectRatio     : false,
      datasetFill             : false
    }

    new Chart(barChartCanvas, {
      type: 'bar',
      data: barChartData,
      options: barChartOptions
    }) 

  })
</script>
@endsection
