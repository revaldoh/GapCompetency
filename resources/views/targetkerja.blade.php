@extends('layouts.dashboard')
@section('content')
<h2 class="text-center display-4">Aspek Target Kerja</h2>
<form action="{{route('submit-form-targetkerja')}}" method="POST">
    <div class="row">
      <div class="card-body">
        <div class="form-group">
          <div class="row">
            <div class="col-md-4 ml-5">
              <div class="form-group">
                <label for="exampleInputEmail1">Nama</label>
                <input disabled value="{{$nama_karyawan}}" type="text" class="form-control" id="exampleInputEmail1" placeholder="">
                <input type="hidden" name="id_karyawan" value="{{$id_karyawan}}">
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 ml-5">
            <div class="row">
              <label>Komitmen (C)</label>
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
              <label>Fokus</label>
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
            <div class="row mt-2">
              <label>Terukur (C)</label>
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

          </div>
        </div>
        <div class="col-md-4 ml-5 mt-5">
           <button class="btn btn-primary" type="submit">Next</button>
        </div>

      </div>
    </div>
    @csrf
</form>
@endsection
