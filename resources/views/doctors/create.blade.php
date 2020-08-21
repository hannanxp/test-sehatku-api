@extends('base')
@section('main')

<div class="module-title">Tambah Dokter</div>

<div class="main-card">
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
        <div class="text-center">
          <div>
            <img style="width: 120px" id="photo-preview" src="{{old('photo') ? : asset('img/default.png') }}">
          </div>
          <div>
            <input type="file" id="file-photo" />
          </div>
          <div class="btn-upload" id="btn-file-upload"> + Upload Foto</div>
          <div class="text-upload">
            Format gambar .jpg .jpeg .png dan ukuran minimum 300 x 300px dan Max Size 100kb
          </div>
        </div>  
        <div class="form-group">
          <input type="hidden" name="photo" id="input-photo" value="{{old('photo')}}">
        </div>
      </div>
      <div class="col-md-10">
        <div class="row">
          <div class="info-dokter">Informasi Dokter</div>
        </div>
        
        <div class="row">
          <div class="col-md-12">
            <label class="input-label" for="first_name">Dokter ID</label>  
            <div class="form-group row">
                <div class="input-label-value">DR-014242145</div>
            </div>
          </div>
        </div>
        
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">    
              <label class="input-label" for="first_name">Nama Dokter</label>
              <div class="form-group row">
                <div class="col-sm-4">
                  <select name="title" class="form-control">
                    <option value="prof" @if (old('title') == 'prof') selected="selected" @endif >Prof</option>
                    <option value="dr" @if (old('title') == 'dr') selected="selected" @endif>dr</option>
                  </select>
                </div>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="fullname" value="{{old('fullname')}}"/>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">    
              <label class="input-label" for="gender">Jenis Kelamin</label>
              <div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="gender" id="genderPria" value="pria" @if(old('gender') == "pria") checked @endif >
                         <label class="form-check-label" for="genderPria">Pria</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="gender" id="genderWanita" value="wanita" @if(old('gender') == "wanita") checked @endif>
                         <label class="form-check-label" for="genderWanita">Wanita</label>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="form-group">    
              <label class="input-label" for="doctor_specialist_id">Spesialisasi</label>
              <select name="doctor_specialist_id" class="form-control">
                @foreach ($specialists as $sp)
                <option value="{{$sp->id}}"  @if (old('doctor_specialist_id') == $sp->id) selected="selected" @endif >{{$sp->name}}</option>
                @endforeach
              </select>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">    
              <label class="input-label" for="experience">Pengalaman</label>
              <input type="text" class="form-control" name="experience" value="{{old('experience')}}"/>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="form-group">    
              <label class="input-label" for="education">Pendidikan Terakhir</label>
              <input type="text" class="form-control" name="education" value="{{old('education')}}"/>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">    
              <label class="input-label" for="str_no">No. STR</label>
              <input type="text" class="form-control" name="str_no" value="{{old('str_no')}}"/>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="form-group">    
              <label class="input-label" for="place">Tempat Praktik</label>
              <input type="text" class="form-control" name="place" value="{{old('place')}}"/>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">    
              <label class="input-label" for="sip_no">No. SIP</label>
              <input type="text" class="form-control" name="sip_no" value="{{old('sip_no')}}"/>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="form-group">    
              <label class="input-label" for="status">Status</label>
              <select id="input-status" name="status" class="form-control">
                <option style="color: #64da6e" value="active" @if (old('status') == 'active') sinactiveelected="selected" @endif >Aktif</option>
                <option style="color: #ff0000" value="inactive" @if (old('status') == 'inactive') selected="selected" @endif >Tidak Aktif</option>
              </select>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">    
              <label class="input-label" for="phone">No. Handphone</label>
              <input type="text" class="form-control" name="phone" value="{{old('phone')}}"/>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="form-group">    
              <label class="input-label" for="email">Email</label>
              <input type="text" class="form-control" name="email" value="{{old('email')}}"/>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">    
              <label class="input-label" for="password">Password</label>
              <input type="password" class="form-control" name="password"/>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <div class="form-group">    
              <label class="input-label" for="description">Deskripsi</label>
              <textarea rows="5" class="form-control" name="description">{{old('description')}}</textarea>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <div class="form-group">    
              
              <button type="submit" class="btn-save">Simpan</button>
              
              <div class="btn-cancel">Batal</div> 
              
            </div>
          </div>
        </div>

      </div>
    </div>  

  </form>

  <div style="margin-bottom: 50px">

  </div>
</div>

<script>
    $(document).ready(function () {

      function readURL(input) {
        if (input.files && input.files[0]) {
          var reader = new FileReader();

          reader.onload = function (e) {
            $("#photo-preview").attr("src", e.target.result);
            $("#input-photo").val(e.target.result);
            
            var pic_size = Math.round(input.files[0].size / 1024); // KB
            console.log(pic_size);
          };
          
          

          reader.readAsDataURL(input.files[0]); // convert to base64 string
        }
      }

      $("#btn-file-upload").click(function () {
        $("#file-photo").trigger("click");
      });

      $("#file-photo").change(function () {
        readURL(this);
      });
      
      checkStatus();
      function checkStatus() {
        if ($("#input-status").val() === 'active') {
            $("#input-status").css('color', '#64da6e');
        } else {
            $("#input-status").css('color', '#ff0000');
        }
      };
      $("#input-status").change(function(){
          checkStatus();
      });
      
      

    });

</script>

@endsection