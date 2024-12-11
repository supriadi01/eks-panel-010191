@extends('layouts.app')
@section('content')

<div class="container-fluid">
  <div class="col-md-12">
      <div class="row">
          <div class="col-md-6" style="padding-top: 1%">
            <div class="card">
              <div class="card-header">
                <h5>Simpang 3 Zero Poin (Kamera 01)</h5><span>CCTV Berada di pertigaan zero poin</span>
              </div>
              <div class="card-body">
                <center>
                  {{-- <img src="{{ asset('assets/images/cctv/cctv_01.jpg')}}" class="rounded float-left" style="width: 550px;height: 270px;">
                   --}}
                   <div><iframe width="640" height="280" src="https://rtsp.me/embed/4kSZDfeH/" frameborder="0" allowfullscreen></iframe></div>
                </center>
              </div>
            </div>
            </div>
          <div class="col-md-6" style="padding-top: 1%">
            <div class="card">
              <div class="card-header">
                <h5>Simpang 3 Zero Poin (Kamera 02)</h5><span>CCTV Berada di pertigaan zero poin</span>
              </div>
              <div class="card-body">
                <center>
                  <div><iframe width="640" height="280" src="https://rtsp.me/embed/3RRGAykz/" frameborder="0" allowfullscreen></iframe></div>
                </center>
              </div>
            </div>
              
          </div>
      </div>

      <div class="row">
        <div class="col-md-6" style="padding-top: 1%">
            <div class="card">
              <div class="card-header">
                <h5>Marano DISHUB (Kamera 01)</h5><span>CCTV Berada di depan hotel Marano</span>
              </div>
              <div class="card-body">
                <center>
                  <div><iframe width="640" height="280" src="https://rtsp.me/embed/BAHYER98/" frameborder="0" allowfullscreen></iframe></div>
                </center>
              </div>
            </div>
          </div>
        <div class="col-md-6" style="padding-top: 1%">
            <div class="card">
              <div class="card-header">
                <h5>Marano DISHUB (Kamera 02)</h5><span>CCTV Berada di depan hotel Marano</span>
              </div>
              <div class="card-body">
                <center>
                  <div><iframe width="640" height="280" src="https://rtsp.me/embed/zAyHTEbd/" frameborder="0" allowfullscreen></iframe></div>
                </center>
              </div>
            </div>
          </div>
    </div>
    <div class="row">
      <div class="col-md-6" style="padding-top: 1%">
          <div class="card">
            <div class="card-header">
              <h5>Tugu PKK (Kamera 01)</h5><span>CCTV Berada di pertigaan tugu PKK</span>
            </div>
            <div class="card-body">
              <center>
                <div><iframe width="640" height="280" src="https://rtsp.me/embed/i69Qba3n/" frameborder="0" allowfullscreen></iframe></div>
              </center>
            </div>
          </div>
        </div>
      <div class="col-md-6" style="padding-top: 1%">
          <div class="card">
            <div class="card-header">
              <h5>Tugu PKK (Kamera 02)</h5><span>CCTV Berada di pertigaan tugu PKK</span>
            </div>
            <div class="card-body">
              <center>
                <div><iframe width="640" height="280" src="https://rtsp.me/embed/BryabDiQ/" frameborder="0" allowfullscreen></iframe></div>
              </center>
            </div>
          </div>
        </div>
  </div>
  <div class="row">
    <div class="col-md-6" style="padding-top: 1%">
        <div class="card">
          <div class="card-header">
            <h5>Lapangan Merdeka (Kamera 01)</h5><span>CCTV Berada di pertigaan lapangan merdeka</span>
          </div>
          <div class="card-body">
            <center>
              <div><iframe width="640" height="280" src="https://rtsp.me/embed/Q4TH6SsB/" frameborder="0" allowfullscreen></iframe></div>
            </center>
          </div>
        </div>
      </div>
    <div class="col-md-6" style="padding-top: 1%">
        <div class="card">
          <div class="card-header">
            <h5>Lapangan Merdeka (Kamera 02)</h5><span>CCTV Berada di pertigaan lapangan merdeka</span>
          </div>
          <div class="card-body">
            <center>
              <div><iframe width="640" height="280" src="https://rtsp.me/embed/GN8HQN7D/" frameborder="0" allowfullscreen></iframe></div>
            </center>
          </div>
        </div>
      </div>
</div>
  </div><!-- END CCTV -->
</div><!-- Container-fluid Ends-->

@endsection
