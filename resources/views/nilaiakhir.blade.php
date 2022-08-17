@extends('layouts.dashboard')
@section('content')
<h2 class="text-center display-4">Hasil Nilai Akhir</h2>
<div class="row">
  <div class="col-md-4 ml-5">
    <div class="form-group">
      <label for="exampleInputEmail1">Nama Karyawan</label>
      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-9 ml-5">
    <label>Nilai Pembobotan Kecerdasan</label>
    <div class="card-body table-responsive p-0">
      <table class="table table-hover text-nowrap">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Nilai Kecerdasan</th>
            <th>Nilai Target Kerja</th>
            <th>Nilai Sikap Kerja</th>
            <th>Nilai AKhir</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-12 mt-5">
    <canvas id="pieChart"
      style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%; display: block; width: 764px;"
      width="764" height="250" class="chartjs-render-monitor">
    </canvas>
  </div>
</div>
<div class="col-md-4 ml-5">
  <a  class="btn btn-primary ml-5 mt-5 mb-5" href="index.html">Home</a>
</div>

@endsection
