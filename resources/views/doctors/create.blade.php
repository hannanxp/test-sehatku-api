@extends('base')
@section('main')

<div class="module-title">Tambah Dokter</div>
<div>
  @if(session()->has('success'))
  <div class="alert alert-success">
    {{ session()->get('success') }}
  </div>
  @endif

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
      <div class="col-md-2">
        <div class="form-group">    
          <label for="experience">Gambar</label>
          <textarea class="form-control" name="photo"></textarea>
        </div>
      </div>
      <div class="col-md-10">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">    
              <label for="first_name">Nama Dokter</label>
              <div class="form-group row">
                <div class="col-sm-4">
                  <select name="title" class="form-control">
                    <option value="prof">Prof</option>
                    <option value="dr">dr</option>
                  </select>
                </div>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="fullname"/>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">    
              <label for="gender">Jenis Kelamin</label>
              <div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="gender" id="genderPria" value="pria">
                  <label class="form-check-label" for="genderPria">Pria</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="gender" id="genderWanita" value="wanita">
                  <label class="form-check-label" for="genderWanita">Wanita</label>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="form-group">    
              <label for="doctor_specialist_id">Spesialisasi</label>
              <select name="doctor_specialist_id" class="form-control">
                <option value="2">Akupuntur</option>
                <option value="4">Bedah Anak</option>
              </select>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">    
              <label for="experience">Pengalaman</label>
              <input type="text" class="form-control" name="experience"/>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="form-group">    
              <label for="education">Pendidikan Terakhir</label>
              <input type="text" class="form-control" name="education"/>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">    
              <label for="str_no">No. STR</label>
              <input type="text" class="form-control" name="str_no"/>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="form-group">    
              <label for="place">Tempat Praktik</label>
              <input type="text" class="form-control" name="place"/>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">    
              <label for="sip_no">No. SIP</label>
              <input type="text" class="form-control" name="sip_no"/>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="form-group">    
              <label for="status">Status</label>
              <select name="status" class="form-control">
                <option value="active">Aktif</option>
                <option value="inactive">Tidak Aktif</option>
              </select>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">    
              <label for="phone">No. Handphone</label>
              <input type="text" class="form-control" name="phone"/>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="form-group">    
              <label for="email">Email</label>
              <input type="text" class="form-control" name="email"/>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">    
              <label for="password">Password</label>
              <input type="password" class="form-control" name="password"/>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <div class="form-group">    
              <label for="description">Deskripsi</label>
              <textarea class="form-control" name="description"></textarea>
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

      </div>
    </div>  

  </form>

  <div style="margin-bottom: 50px">

  </div>
</div>

@endsection