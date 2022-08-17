@extends('layouts.dashboard')
@section('content')
<h2 class="text-center display-4">Hasil Pembobotan</h2>
<form action="{{route('submit-form-hasilakhir')}}" method="POST">
@csrf
<div class="row">
  <div class="col-md-4 ml-5">
    <div class="form-group">
      <label for="exampleInputEmail1">Nama Karyawan</label>
      <input type="text" class="form-control" id="exampleInputEmail1" disabled>
    </div>
  </div>
</div>
<div class="row mt-5">
  <div class="col-md-10 ml-5">
    <label>Nilai Pembobotan Kecerdasan</label>
    <div class="card-body table-responsive p-0">
      <table class="table table-hover text-nowrap">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Knowledge</th>
            <th>Penguasaan Area</th>
            <th>Kreatif</th>
            <th>Logika</th>
            <th>Inovatif</th>

          </tr>
        </thead>
        <tbody>
            @foreach ($join_kecerdasan as $cerdas )
            <tr>
              <td>{{$cerdas->id_karyawan}}</td>
              <td>{{$cerdas->nama}}</td>
              <td>{{$cerdas->b_knowledge}}</td>
              <td>{{$cerdas->b_area}}</td>
              <td>{{$cerdas->b_kreatif}}</td>
              <td>{{$cerdas->b_logika}}</td>
              <td>{{$cerdas->b_inovatif}}</td>

            </tr>
            @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
<div class="row mt-5">
  <div class="col-md-10 ml-5">
    <label>Nilai Pembobotan Target Kerja</label>
    <div class="card-body table-responsive p-0">
      <table class="table table-hover text-nowrap">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Komitmen</th>
            <th>Fokus</th>
            <th>Terukur</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($join_targetkerja as $target )
            <tr>
                <td>{{$target->id_karyawan}}</td>
                <td>{{$target->nama}}</td>
                <td>{{$target->b_komitmen}}</td>
                <td>{{$target->b_fokus}}</td>
                <td>{{$target->b_terukur}}</td>
              </tr>
            @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
<div class="row mt-5">
  <div class="col-md-10 ml-5">
    <label>Nilai Pembobotan Sikap Kerja</label>
    <div class="card-body table-responsive p-0">
      <table class="table table-hover text-nowrap">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Jujur</th>
            <th>Teliti</th>
            <th>Disiplin</th>
            <th>Pandai Berkomunikasi</th>
            <th>Kerja Sama</Samp></th>
            <th>Percaya Diri</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($join_sikapkerja as $sikap )
            <tr>
              <td>{{$sikap->id_karyawan}}</td>
              <td>{{$sikap->nama}}</td>
              <td>{{$sikap->b_jujur}}</td>
              <td>{{$sikap->b_teliti}}</td>
              <td>{{$sikap->b_disiplin}}</td>
              <td>{{$sikap->b_komunikasi}}</td>
              <td>{{$sikap->b_kerjasama}}</td>
              <td>{{$sikap->b_percayadiri}}</td>
            </tr>
            @endforeach
        </tbody>
      </table>
      @foreach($join_corefactor as $core)
          @php
            $corekecerdasan = ($core->b_knowledge + $core->b_area + $core->b_logika)/3;
            $coretarget = ($core->b_komitmen + $core->b_terukur)/2;
            $coresikap = ($core->b_jujur+ $core->b_teliti + $core->b_komunikasi + $core->b_percayadiri)/4;   
          @endphp
          @endforeach
        @foreach ($join_secondfactor as $secondfactor)
          @php
            $secondkecerdasan = ($secondfactor ->b_kreatif + $secondfactor ->b_inovatif)/2;  
            $secondtarget = ($secondfactor ->b_fokus)/1;
            $secondsikap = ($secondfactor ->b_disiplin + $secondfactor -> b_kerjasama)/2;
          @endphp
        @endforeach
        @php
        $totalnilaikecerdasan = (0.6 * $corekecerdasan) + (0.4 * $secondkecerdasan);
        $totalnilaitarget = (0.6 * $coretarget) + (0.4 * $secondtarget);
        $totalnilaisikap = (0.6 * $coresikap) + (0.4 * $secondsikap);
        
        $nilaiakhir = (0.2 * $totalnilaikecerdasan) + (0.5 * $totalnilaitarget) + (0.3 * $totalnilaisikap);
       
        @endphp
        <input type="hidden" name="cerdas" value="{{$totalnilaikecerdasan}}">
        <input type="hidden" name="target" value="{{$totalnilaitarget}}">
        <input type="hidden" name="sikap" value="{{$totalnilaisikap}}">
        <input type="hidden" name="akhir" value="{{$nilaiakhir}}">
    </div>
  </div>
</div>
<div class="d-flex justify-content-between">

    <a  class="btn btn-primary ml-5 mt-5 mb-5" href="index.html">Submit Karyawan Lain </a>

    <a  class="btn btn-primary ml-5 mt-5 mb-5" href="index.html">Lihat Hasil </a>

    <button class="btn btn-primary mr-5 mt-5 mb-5" type="submit">save</button>
</div>
</form>
@endsection
