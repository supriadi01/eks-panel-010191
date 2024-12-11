@extends('layouts.app')
@push('api-apresia')
<script type="text/javascript">
    // google.load('current', {packages: ['corechart']});
    google.load('visualization', '1.1', {
        'packages': ['corechart']
    });
    google.setOnLoadCallback(drawChart);
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
  </script>
  @endpush
@section('content')

<div class="container-fluid" style="display:block; position: absolute; z-index: 1;">
        <div class="row">
            <!-- CCTV -->
            <h6><strong>CCTV KOTA LABUHA</strong></h6>
            <div class="col-md-5">
                <div class="row">
                    <div class="col-md-6" style="padding-top: 1%">
                        <center>
                            <div class="rounded float-left"><iframe width="270" height="170" src="https://rtsp.me/embed/i69Qba3n/" frameborder="0" allowfullscreen></iframe></div>
                        </center>
                    </div>
                    <div class="col-md-6" style="padding-top: 1%">
                        <center>
                            <div class="rounded float-left"><iframe width="270" height="170" src="https://rtsp.me/embed/BryabDiQ/" frameborder="0" allowfullscreen></iframe></div>
                        </center>
                    </div>
                    <div class="col-md-6" style="padding-top: 1%">
                        <center>
                            <div class="rounded float-left"><iframe width="270" height="170" src="https://rtsp.me/embed/Q4TH6SsB/" frameborder="0" allowfullscreen></iframe></div>
                        </center>
                    </div>
                    <div class="col-md-6" style="padding-top: 1%">
                        <center>
                            <div class="rounded float-left"><iframe width="270" height="170" src="https://rtsp.me/embed/GN8HQN7D/" frameborder="0" allowfullscreen></iframe></div>
                        </center>
                        
                    </div>
                </div>
            </div><!-- END CCTV -->

            <div class="col-md-4">
                <div class="col-md-12 chart_data_right">
                    <div class="card income-card card-secondary">
                        <div class="card-body align-items-center">
                            <div class="round-progress knob-block text-center">
                                <h5>4567</h5>
                                <p>Total Pegawai</p>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                <thead>
                                    <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Desa / Kota</th>
                                    <th scope="col">Jumlah Pegawai</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <th scope="row">1</th>
                                    <td>Kampung Makian</td>
                                    <td>1320</td>
                                    </tr>
                                    <tr>
                                    <th scope="row">2</th>
                                    <td>Labuha</td>
                                    <td>780</td>
                                    </tr>
                                    <tr>
                                    <th scope="row">3</th>
                                    <td>Ternate</td>
                                    <td>680</td>
                                    </tr>
                                    <tr>
                                    <th scope="row">4</th>
                                    <td>Mandaong</td>
                                    <td>480</td>
                                    </tr>
                                </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- END PEGAWAI -->

            <div class="col-md-3">
                <div class="col-md-12 chart_data_right">
                    <div class="card income-card card-secondary">
                        <div class="card-body align-items-center">
                            <div class="round-progress knob-block text-center">
                                <h5>251.299</h5>
                                <p>Jumlah Penduduk</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                <div class="col-md-6 chart_data_right">
                        <div class="card income-card card-secondary">
                            <div class="card-body align-items-center">
                                <div class="round-progress knob-block text-center">
                                    <h5>249</h5>
                                    <p>Desa</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 chart_data_right second">
                        <div class="card income-card card-primary">
                            <div class="card-body">
                                <div class="round-progress knob-block text-center">
                                    <h5>30</h5>
                                    <p>Kecamatan</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- END PEOPLE -->
        </div><!-- END ROW 1 -->

        <div class="row">
           {{-- <div class="col-md-4">
                <div class="card">
                  <div class="card-header">
                    <h7>Pie Chart <span class="digits">People</span></h7>
                  </div>
                  <div class="card-body p-0 chart-block">
                    <div class="chart-overflow" id="pie-chart2"></div>
                  </div>
                </div>
            </div><!-- END PIE CHART --> --}}

            <div class="col-md-12">
                <center>
                <div id="barchart_material" style="height: 700px;"></div>
                </center>
            </div><!-- END DIGRAM -->
            
        </div><!-- END ROW 2 -->
</div><!-- Container-fluid Ends-->


   
@endsection
