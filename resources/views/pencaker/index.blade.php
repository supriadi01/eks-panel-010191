@extends('layouts.app')
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
  google.charts.load('current', {'packages':['corechart']});
  google.charts.setOnLoadCallback(drawChart);
  google.charts.setOnLoadCallback(drawChartPendidikan);
  google.charts.setOnLoadCallback(drawChartGender);

  function drawChart() {

    var data = google.visualization.arrayToDataTable([

      ['Task', 'Hours per Day'],
      @if($pencaker_kec)
      @php $kec = $pencaker_kec['countsByKecamatan']; @endphp
            @foreach ($kec as $item)
                ['{{$item['kecamatan']}}',     {{$item['total']}}],
            @endforeach
      @else
          ['No Data',     0],
      @endif

    ]);

    var options = {
      title: 'Total Pencaker Berdasarkan Kecamatan'
    };

    var chart = new google.visualization.PieChart(document.getElementById('piechart_pencaker'));

    chart.draw(data, options);
  }

  function drawChartPendidikan() {

    var data = google.visualization.arrayToDataTable([

      ['Task', 'Hours per Day'],
      @if($pencaker_pendidikan)
      @php $pendidikans = $pencaker_pendidikan['countsByPendidikan']; @endphp
            @foreach ($pendidikans as $item)
                ['{{$item['pendidikan']}}',     {{$item['total']}}],
            @endforeach
      @else
          ['No Data',     0],
      @endif

    ]);

    var options = {
      title: 'Total Pencaker Berdasarkan Pendidikan'
    };

    var chart_2 = new google.visualization.PieChart(document.getElementById('piechart_pendidikan'));

    chart_2.draw(data, options);
  }

  function drawChartGender() {

  var data = google.visualization.arrayToDataTable([

      ['Task', 'Hours per Day'],
      @if($pencaker_gender)
      @php $genders = $pencaker_gender['countsByGender']; @endphp
            @foreach ($genders as $item)
                ['{{$item['gender']}}',     {{$item['total']}}],
            @endforeach
      @else
          ['No Data',     0],
      @endif

    ]);

    var options = {
      title: 'Total Pencaker Berdasarkan Gender'
    };

    var chart_3 = new google.visualization.PieChart(document.getElementById('piechart_gender'));

    chart_3.draw(data, options);
    }



</script>

@section('content')

<div class="container-fluid">
    <div class="row">

      <div class="col-sm-12 col-xl-12 box-col-12">
        <div class="card">
          <div class="card-header">
            <h5>PENCAKER</h5><span>Data pencari kerja diambil dari REST API SIPIKER dan KEMENAKER.</span>
          </div>
          <div class="card-body chart-block">
          <center>
            <div id="piechart_pencaker" style="width: 900px; height: 500px;"></div>
          </center>
          </div>
        </div>

        <div class="card">
          <div class="card-body chart-block">
          <center>
            <div id="piechart_pendidikan" style="width: 900px; height: 500px;"></div>
          </center>
          </div>
        </div>

        <div class="card">
          <div class="card-body chart-block">
          <center>
            <div id="piechart_gender" style="width: 900px; height: 500px;"></div>
          </center>
          </div>
        </div>
      </div>
        
    </div>
</div><!-- Container-fluid Ends-->

@endsection
