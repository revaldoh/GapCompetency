@extends('layouts.dashboard')
@section('content')
<h2 class="text-center display-4">Pilih Karyawan</h2>
            <div class="row">
                <div class="col-md-4 ml-5">
                  <label >Pilih kode Karyawan</label>
                  <select class="custom-select">
                    <option value="">Pilih Karyawan</option>

                  </select>
                </div>
              </div>
              <div class="row">
                  <div class="col-md-4 ml-5">
                  <div class="form-group">
                      <label for="exampleInputEmail1">Nama Karyawan</label>
                    </div>
                  </div>
              </div>
              <div class="row">
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Nama</th>
                        </tr>
                      </thead>
                      <tbody>
                          @foreach ($tp as $tampil)
                          <tr>
                            <td>{{$tampil ->id_karyawan}}</td>
                            <td>{{$tampil ->nama}}</td>
                          </tr>
                          @endforeach
                      </tbody>
                    </table>
                  </div>
            </div>
              <div class="col-md-4 ml-5">
                  <a  class="btn btn-primary" href="{{route('tampil-form-kecerdasan')}}">Next</a>
                </div>
            </div>
@endsection

