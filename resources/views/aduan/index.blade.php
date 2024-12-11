@extends('layouts.app')
@section('content')

<div class="container-fluid">
<div class="row">
    <div class="col-sm-6 col-xl-3 col-lg-6">
        <div class="card o-hidden border-0">
            <div class="bg-primary b-r-4 card-body">
                <div class="media static-top-widget">
                    <div class="align-self-center text-center"><i data-feather="phone-incoming"></i></div>
                    <div class="media-body">
                        <span class="m-0">Total Aduan</span>
                        <h4 class="mb-0 counter">6659</h4>
                        <i class="icon-bg" data-feather="phone-incoming"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-xl-3 col-lg-6">
        <div class="card o-hidden border-0">
            <div class="bg-secondary b-r-4 card-body">
                <div class="media static-top-widget">
                    <div class="align-self-center text-center"><i data-feather="shopping-bag"></i></div>
                    <div class="media-body">
                        <span class="m-0">Topik</span>
                        <h4 class="mb-0 counter">256</h4>
                        <i class="icon-bg" data-feather="shopping-bag"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-xl-3 col-lg-6">
        <div class="card o-hidden border-0">
            <div class="bg-primary b-r-4 card-body">
                <div class="media static-top-widget">
                    <div class="align-self-center text-center"><i data-feather="message-circle"></i></div>
                    <div class="media-body">
                        <span class="m-0">Pesan Baru</span>
                        <h4 class="mb-0 counter">93</h4>
                        <i class="icon-bg" data-feather="message-circle"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-xl-3 col-lg-6">
        <div class="card o-hidden border-0">
            <div class="bg-primary b-r-4 card-body">
                <div class="media static-top-widget">
                    <div class="align-self-center text-center"><i data-feather="user-plus"></i></div>
                    <div class="media-body">
                        <span class="m-0">Total Pengadu</span>
                        <h4 class="mb-0 counter">4531</h4>
                        <i class="icon-bg" data-feather="user-plus"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-12">
        <div class="card">
          <div class="card-header">
            <h5>List Aduan</h5><span>List aduan diambil dari REST API SISDA bagian aplikasi HALO.</span> <span>Agar lebih mudah, gunakan fasilitas filter untuk mencari data. Klik tombol Tindak Lanjuti untuk menolak laporan.</span>
          </div>
          <div class="card-body">
            <div class="table-responsive">
                <table class="display" id="basic-1">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Judul Aduan</th>
                        <th>Keterangan</th>
                        <th>Stackholder / OPD</th>
                        <th>Tanggal Aduan</th>
                        <th>Lampiran</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td style="text-transform: uppercase;">Pelecehan Seksual</td>
                        <td>Terjadi pelecehan seksual di area suwering kota labuha</td>
                        <td>POLRES</td>
                        <td>11 Oktober 2022</td>
                        <td><a href="#">lampiran1.jpg</a></td>
                        <td>
                          {{-- <button class="btn btn-success btn-sm">Tindak Lanjuti</button> --}}
                          <button class="btn btn-danger btn-sm">Tindak Lanjuti</button>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td style="text-transform: uppercase;">Pesta miras</td>
                        <td>Tolong ditertipkan di area suwering kota labuha</td>
                        <td>POLRES</td>
                        <td>14 Oktober 2022</td>
                        <td><a href="#">lampiran2.jpg</a></td>
                        <td>
                          {{-- <button class="btn btn-success btn-sm">Tindak Lanjuti</button> --}}
                          <button class="btn btn-danger btn-sm">Tindak Lanjuti</button>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td style="text-transform: uppercase;">Tumpukan Sampah</td>
                        <td>Ada tumpukan sampah yang belum diangkut</td>
                        <td>DLH</td>
                        <td>20 Oktober 2022</td>
                        <td><a href="#">lampiran3.jpg</a></td>
                        <td>
                          {{-- <button class="btn btn-success btn-sm">Tindak Lanjuti</button> --}}
                          <button class="btn btn-danger btn-sm">Tindak Lanjuti</button>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">4</th>
                        <td style="text-transform: uppercase;">Pencemaran Lingkungan</td>
                        <td>Ada tumpahan limbah ke laut di pulau obi</td>
                        <td>DLH</td>
                        <td>1 November 2022</td>
                        <td><a href="#">lampiran4.jpg</a></td>
                        <td>
                          {{-- <button class="btn btn-success btn-sm">Tindak Lanjuti</button> --}}
                          <button class="btn btn-danger btn-sm">Tindak Lanjuti</button>
                        </td>
                      </tr>
                      
                    </tbody>
                  </table>
            </div>
          </div>
        </div>
      </div>
</div>
</div><!-- Container-fluid Ends-->

@endsection
