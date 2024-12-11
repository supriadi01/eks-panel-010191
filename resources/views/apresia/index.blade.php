@extends('layouts.app')
@push('api-apresia')
<script type="text/javascript">
    // google.load('current', {packages: ['corechart']});
    google.load('visualization', '1.1', {
        'packages': ['corechart']
    });
    google.setOnLoadCallback(drawChart);
    google.setOnLoadCallback(drawFisik);
    google.setOnLoadCallback(drawKeuangan);
    // google.charts.setOnLoadCallback(drawAxisTickColors);

    function drawChart() {
      var data = new google.visualization.arrayToDataTable([
        ['Galaxy', 'Total Anggaran', {label: 'T1', role: 'tooltip'}, 'Reaslisasi Anggaran', {label: 'T2', role: 'tooltip'}, 'Realisasi Fisik', {label: 'T3', role: 'tooltip'}],
        @foreach($data_apresia['data'] as $result)        
            ['{{$result['nama_opd']}}',{{$result['total_anggaran']}},'Total Anggaran {{$result['rp_total_anggaran']}}',{{$result['resi_keuangan']}},'Realisasi Keuangan {{$result['rp_resi_keuangan']}}',{{$result['note_resi_fisik']}},'Realisasi Fisik {{$result['resi_fisik']}} %'],
        @endforeach  

      ]);
      // data.addColumn({type: 'string', role: 'tooltip'});
      var options = {
        title: 'REALISASI ANGGARAN Periode 2022',
        chartArea: {width: '50%'},
        hAxis: {
          title: 'NAMA DINAS',
          minValue: 0,
          textStyle: {
            bold: true,
            fontSize: 12,
            color: '#4d4d4d'
          },
          titleTextStyle: {
            bold: true,
            fontSize: 18,
            color: '#4d4d4d'
          }
        },
        vAxis: {
          title: 'ANGGARAN',
          textStyle: {
            fontSize: 14,
            bold: true,
            color: '#848484'
          },
          titleTextStyle: {
            fontSize: 14,
            bold: true,
            color: '#848484'
          }
        }
      };

      var chart = new google.visualization.ColumnChart(document.getElementById('barchart_material'));
      chart.draw(data,options);

    }

    function drawFisik() {
                var data = new google.visualization.arrayToDataTable([
                  ['Nama OPD','Realisasi Fisik',{label: 'T1', role: 'tooltip'}],
                  @foreach($data_fisik['data'] as $result)        
                      ['{{$result['nama_opd']}}',{{$result['resi_fisik']}},'Realisasi Fisik {{$result['resi_fisik']}} %'],
                  @endforeach  

                ]);
                // data.addColumn({type: 'string', role: 'tooltip'});
                var options = {
                  title: 'REALISASI FISIK DIURUTKAN DARI JUMALAH PERSEN TERTINGGI (Periode 2022)',
                  chartArea: {width: '50%'},
                  hAxis: {
                    title: 'NAMA DINAS',
                    minValue: 0,
                    textStyle: {
                      bold: true,
                      fontSize: 12,
                      color: '#4d4d4d'
                    },
                    titleTextStyle: {
                      bold: true,
                      fontSize: 18,
                      color: '#4d4d4d'
                    }
                  },
                  vAxis: {
                    title: 'PERSENTASI',
                    textStyle: {
                      fontSize: 14,
                      bold: true,
                      color: '#848484'
                    },
                    titleTextStyle: {
                      fontSize: 14,
                      bold: true,
                      color: '#848484'
                    }
                  }
                };

                var chart2 = new google.visualization.ColumnChart(document.getElementById('resi_fisik'));
                chart2.draw(data,options);

              }

              function drawKeuangan() {
                var data = new google.visualization.arrayToDataTable([
                  ['Nama OPD','Realisasi Keuangan',{label: 'T1', role: 'tooltip'}],
                  @foreach($data_keuangan['data'] as $result)        
                      ['{{$result['nama_opd']}}',{{$result['note_resi_keuangan']}},'Realisasi Keuangan {{$result['note_resi_keuangan']}} %'],
                  @endforeach  

                ]);
                // data.addColumn({type: 'string', role: 'tooltip'});
                var options = {
                  title: 'REALISASI KEUANGAN DIURUTKAN DARI JUMALAH PERSEN TERTINGGI (Periode 2022)',
                  chartArea: {width: '50%'},
                  hAxis: {
                    title: 'NAMA DINAS',
                    minValue: 0,
                    textStyle: {
                      bold: true,
                      fontSize: 12,
                      color: '#4d4d4d'
                    },
                    titleTextStyle: {
                      bold: true,
                      fontSize: 18,
                      color: '#4d4d4d'
                    }
                  },
                  vAxis: {
                    title: 'PERSENTASI',
                    textStyle: {
                      fontSize: 14,
                      bold: true,
                      color: '#848484'
                    },
                    titleTextStyle: {
                      fontSize: 14,
                      bold: true,
                      color: '#848484'
                    }
                  },
                  colors: ['#d35400']
                };

                var chart3 = new google.visualization.ColumnChart(document.getElementById('resi_keuangan'));
                chart3.draw(data,options);

              }
  </script>
  @endpush
@section('content')

<div class="container-fluid">
  <div class="row">
        <div class="col-md-12">
            <center>
            <div id="barchart_material" style="height: 700px;"></div>
            <br>
            <div id="resi_fisik" style="height: 700px;"></div>
            <br>
            <div id="resi_keuangan" style="height: 700px;"></div>
            <br>
            </center>
        </div><!-- END DIGRAM -->  
  </div><!-- END ROW 2 -->
</div><!-- Container-fluid Ends-->

@endsection
