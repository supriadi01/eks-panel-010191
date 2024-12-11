@extends('layouts.app')
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart','bar']});
      google.charts.setOnLoadCallback(drawStunting);
      google.charts.setOnLoadCallback(drawChart);

      function drawStunting() {

        var data = google.visualization.arrayToDataTable([
          ['Bulan', 'Stunting Berat'],
          @foreach($find_sedang as $row)
                @if($row['Bulan'] == 12)
                    ['Desember {{$row['Tahun']}}', {{ $row['total'] }}],
                @elseif ($row['Bulan'] == 1) 
                    ['Januari {{$row['Tahun']}}', {{ $row['total'] }}],
                @elseif ($row['Bulan'] == 2) 
                    ['Februari {{$row['Tahun']}}', {{ $row['total'] }}],
                @elseif ($row['Bulan'] == 3) 
                    ['Maret {{$row['Tahun']}}', {{ $row['total'] }}],
                @elseif ($row['Bulan'] == 4) 
                    ['April {{$row['Tahun']}}', {{ $row['total'] }}],
                @elseif ($row['Bulan'] == 5) 
                    ['Mei {{$row['Tahun']}}', {{ $row['total'] }}],
                @elseif ($row['Bulan'] == 6) 
                    ['Juni {{$row['Tahun']}}', {{ $row['total'] }}],
                @elseif ($row['Bulan'] == 7) 
                    ['Juli {{$row['Tahun']}}', {{ $row['total'] }}],
                @elseif ($row['Bulan'] == 8) 
                    ['Agustus {{$row['Tahun']}}', {{ $row['total'] }}],
                @elseif ($row['Bulan'] == 9) 
                    ['September {{$row['Tahun']}}', {{ $row['total'] }}],
                @endif
          @endforeach
        //   ['Des 2022',  1000,      400],
        //   ['Jan 2023',  1170,      460],
        //   ['Feb 2023',  660,       1120],
        //   ['Mar 2023',  1030,      540] 
        ]);


        var options = {
          title: 'Stunting Berat',
          curveType: 'function',
          legend: { position: 'bottom' },
          series: {
            0: { lineWidth: 4 },
          },
          colors: ['red'],
        };
        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));
        chart.draw(data, options);
      }

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
        ['Task', 'Hours per Day'],
        @if($report_stunting)
          @php $report = $report_stunting['pie_chart']; @endphp
            @foreach ($report as $item)
                ['{{$item['kec']}}', {{$item['count']}}],
            @endforeach
          @else
                ['No Data',     0],
        @endif 
        ]);

        var options = {
        title: 'Jumlah Stunting Berat Perkecamatan Des 2022 s/d 2023',
        is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('stanting'));

        chart.draw(data, options);
    }


    </script>

@section('content')

<div class="container-fluid">
    <div class="row">

      <div class="col-sm-12 col-xl-12 box-col-12">
        <div class="card">
          <div class="card-header">
            <h5>Stunting</h5><span>Data stunting diambil dari REST API Dari People</span>
          </div>
          <div class="card-body chart-block">
          <center>
            <div id="curve_chart" style="height: 500px"></div>
          </center>
          </div>
        </div>

        <div class="card">
          <div class="card-body chart-block">
          <center>
            
            <div id="stanting" style="height: 500px"></div>
          </center>
          </div>
        </div>

        
      </div>
        
    </div>
</div><!-- Container-fluid Ends-->

@endsection
