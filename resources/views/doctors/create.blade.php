@extends('base')
@section('main')
<div class="row">
  <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Tambah Dokter</h1>
    <div>
      @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div><br />
      @endif
      <form method="post" action="{{ route('doctors.store') }}">
        @csrf
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">    
              <label for="first_name">Nama Dokter</label>
              <div class="form-group row">
                <div class="col-sm-4">
                  <select class="form-control">
                    <option>Prof</option>
                    <option>dr</option>
                  </select>
                </div>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="first_name"/>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">    
              <label for="first_name">Jenis Kelamin</label>
              <div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                  <label class="form-check-label" for="inlineRadio1">Pria</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                  <label class="form-check-label" for="inlineRadio2">Wanita</label>
                </div>
              </div>


            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="form-group">    
              <label for="first_name">Spesialisasi</label>
              <input type="text" class="form-control" name="first_name"/>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">    
              <label for="first_name">Pengalaman</label>
              <input type="text" class="form-control" name="first_name"/>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="form-group">    
              <label for="first_name">Pendidikan Terakhir</label>
              <input type="text" class="form-control" name="first_name"/>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">    
              <label for="first_name">No. STR</label>
              <input type="text" class="form-control" name="first_name"/>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="form-group">    
              <label for="first_name">Tempat Praktik</label>
              <input type="text" class="form-control" name="first_name"/>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">    
              <label for="first_name">No. SIP</label>
              <input type="text" class="form-control" name="first_name"/>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="form-group">    
              <label for="first_name">Status</label>
              <input type="text" class="form-control" name="first_name"/>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">    
              <label for="first_name">No. Handphone</label>
              <input type="text" class="form-control" name="first_name"/>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="form-group">    
              <label for="first_name">Email</label>
              <input type="text" class="form-control" name="first_name"/>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">    
              <label for="first_name">Password</label>
              <input type="text" class="form-control" name="first_name"/>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <div class="form-group">    
              <label for="first_name">Deskripsi</label>
              <input type="text" class="form-control" name="first_name"/>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <div class="form-group">    
              <a class="btn btn-primary-outline">Batal</a> 
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
          </div>
        </div>




      </form>

      <div style="margin-bottom: 50px">

      </div>
    </div>
  </div>
</div>
@endsection