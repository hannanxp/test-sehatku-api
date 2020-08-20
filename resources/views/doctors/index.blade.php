@extends('base')
@section('main')
<div class="row">
  <div class="col-sm-12">
    <h1 class="display-3">Doctors</h1>    

    <p>List Doctor</p>
    <div>
      <a href="{{ route('doctors.create')}}" class="btn btn-primary">Tambah Dokter</a>
    </div>
  </div>
</div>
@endsection