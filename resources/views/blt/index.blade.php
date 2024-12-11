@extends('layouts.app')
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
  google.charts.load('current', {'packages':['corechart','bar']});
  google.charts.setOnLoadCallback(drawChart);
  google.charts.setOnLoadCallback(drawStacked);

  function drawChart() {

    var data = google.visualization.arrayToDataTable([
      ['Task', 'Hours per Day'],
      ['BLT BPNT',     {{$report_blt['bpnt']}}],
      ['BLT PKH',      {{$report_blt['pkh']}}],
      ['BLT PBI JKN',  {{$report_blt['pbiJKN']}}],
      ['BLT DESA',     {{$report_blt['desa']}}]
    ]);

    var options = {
      title: 'Penerima Bantuan Langsung Tunai Per Tahun 2022',
      is3D: true,
    };

    var chart = new google.visualization.PieChart(document.getElementById('piechart'));

    chart.draw(data, options);
  }

  function drawStacked() {
            var data = google.visualization.arrayToDataTable([
                ['Kecamatan', 'Total'],
                @if($report_blt)
                @php $report = $report_blt['nama_kec']; @endphp
                  @foreach ($report as $item)
                      ['{{$item['nama_kec']}}', {{$item['count']}}],
                  @endforeach
                @else
                    ['No Data',     0],
                @endif
            ]);

            var options = {
                title: 'Penerima Bantuan Langsung Tunai Per Tahun 2022',
                chartArea: {width: '70%'},
                isStacked: true,
                hAxis: {
                title: 'Total Penerima',
                minValue: 0,
                },
                vAxis: {
                title: 'Kecamatan'
                }
            };
      var chart = new google.visualization.BarChart(document.getElementById('chart_div'));
      chart.draw(data, options);
    }


</script>

@section('content')

<div class="container-fluid">
    <div class="row">

      <div class="col-sm-12 col-xl-12 box-col-12">
        <div class="card">
          <div class="card-header">
            <h5>BLT</h5><span>Data pencari kerja diambil dari REST API Dari People</span>
          </div>
          <div class="card-body chart-block">
          <center>
            <div id="piechart" style="width: 900px; height: 500px;"></div>
          </center>
          </div>
        </div>

        <div class="card">
          <div class="card-body chart-block">
          <center>
            <div id="chart_div" style="width: 1200px; height: 900px;"></div>
          </center>
          </div>
        </div>

        
      </div>
        
    </div>
</div><!-- Container-fluid Ends-->

@endsection
