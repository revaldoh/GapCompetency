@extends('layouts.dashboard')
@section('content')
<h2 class="text-center display-4">Aspek Kepintaran</h2>
<form action="{{route('submit-form-kecerdasan')}}" method="POST">
    <div class="row">
      <div class="card-body">
        <div class="form-group">
          <div class="row">
            <div class="col-md-4 ml-5">
              <div class="form-group">
                <label for="exampleInputEmail1">Nama</label>
                <input disabled type="text" class="form-control" id="exampleInputEmail1" placeholder="">
              </div>
            </div>
            <div class="col-md-4 ml-5">
                <label >Pilih kode Karyawan</label>
                <select name="cb_id_karyawan" class="custom-select">
                  <option value="">Pilih Karyawan</option>
                    @foreach ($tp as $tampil )
                    <option value="{{$tampil->id_karyawan}}">{{$tampil ->nama}}-{{$tampil->id_karyawan}}</option>
                    @endforeach
                </select>
              </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 ml-5">
            <div class="row">
              <label>Knowledge (C)</label>
            </div>
            <div class="row">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="radio1" value="1">
                <label class="form-check-label">1</label>
              </div>
              <div class="form-check ml-2">
                <input class="form-check-input" type="radio" name="radio1" value="2">
                <label class="form-check-label">2</label>
              </div>
              <div class="form-check ml-2">
                <input class="form-check-input" type="radio" name="radio1" value="3">
                <label class="form-check-label">3</label>
              </div>
              <div class="form-check ml-2">
                <input class="form-check-input" type="radio" name="radio1" value="4">
                <label class="form-check-label">4</label>
              </div>
              <div class="form-check ml-2">
                <input class="form-check-input" type="radio" name="radio1" value="5">
                <label class="form-check-label">5</label>
              </div>
            </div>

            <div class="row mt-2">
              <label>Penguasaan Area(C)</label>
            </div>
            <div class="row">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="radio2" value="1">
                <label class="form-check-label">1</label>
              </div>
              <div class="form-check ml-2">
                <input class="form-check-input" type="radio" name="radio2" value="2">
                <label class="form-check-label">2</label>
              </div>
              <div class="form-check ml-2">
                <input class="form-check-input" type="radio" name="radio2" value="3">
                <label class="form-check-label">3</label>
              </div>
              <div class="form-check ml-2">
                <input class="form-check-input" type="radio" name="radio2" value="4">
                <label class="form-check-label">4</label>
              </div>
              <div class="form-check ml-2">
                <input class="form-check-input" type="radio" name="radio2" value="5">
                <label class="form-check-label">5</label>
              </div>
            </div>

          </div>
          <div class="col-md-4">
            <div class="row">
              <label>Kreatif</label>
            </div>
            <div class="row">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="radio3" value="1">
                <label class="form-check-label">1</label>
              </div>
              <div class="form-check ml-2">
                <input class="form-check-input" type="radio" name="radio3" value="2">
                <label class="form-check-label">2</label>
              </div>
              <div class="form-check ml-2">
                <input class="form-check-input" type="radio" name="radio3" value="3">
                <label class="form-check-label">3</label>
              </div>
              <div class="form-check ml-2">
                <input class="form-check-input" type="radio" name="radio3" value="4">
                <label class="form-check-label">4</label>
              </div>
              <div class="form-check ml-2">
                <input class="form-check-input" type="radio" name="radio3" value="5">
                <label class="form-check-label">5</label>
              </div>
            </div>
            <div class="row">
              <label>Logika (C)</label>
            </div>
            <div class="row">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="radio4" value="1">
                <label class="form-check-label">1</label>
              </div>
              <div class="form-check ml-2">
                <input class="form-check-input" type="radio" name="radio4" value="2">
                <label class="form-check-label">2</label>
              </div>
              <div class="form-check ml-2">
                <input class="form-check-input" type="radio" name="radio4" value="3">
                <label class="form-check-label">3</label>
              </div>
              <div class="form-check ml-2">
                <input class="form-check-input" type="radio" name="radio4" value="4">
                <label class="form-check-label">4</label>
              </div>
              <div class="form-check ml-2">
                <input class="form-check-input" type="radio" name="radio4" value="5">
                <label class="form-check-label">5</label>
              </div>
            </div>
            <div class="row">
              <label>Inovatif</label>
            </div>
            <div class="row">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="radio5" value="1">
                <label class="form-check-label">1</label>
              </div>
              <div class="form-check ml-2">
                <input class="form-check-input" type="radio" name="radio5" value="2">
                <label class="form-check-label">2</label>
              </div>
              <div class="form-check ml-2">
                <input class="form-check-input" type="radio" name="radio5" value="3">
                <label class="form-check-label">3</label>
              </div>
              <div class="form-check ml-2">
                <input class="form-check-input" type="radio" name="radio5" value="4">
                <label class="form-check-label">4</label>
              </div>
              <div class="form-check ml-2">
                <input class="form-check-input" type="radio" name="radio5" value="5">
                <label class="form-check-label">5</label>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 ml-5">
          <button type="submit" class="btn-primary btn"> Next</button>
          </div>
      </div>
    </div>
    @csrf
</form>
@endsection
