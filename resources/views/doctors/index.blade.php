@extends('base')
@section('main')
<div class="row">
  <div class="col-sm-12">
    <h1 class="display-3">Doctors</h1>    

    <p>List Doctor</p>
    <div>
      <a href="{{ route('doctors.create')}}" class="btn btn-primary">Tambah Dokter</a>
    </div>


    <table>
      <tr>
        <th>Nama</th>
        <th>Foto</th>
      </tr>
      @foreach ($doctors as $doctor)
      <tr>
        <td>{{$doctor->fullname}}</td>
        <td>
          <img style="width: 120px" src="{{$doctor->photo}}">
        </td>
      </tr>
      @endforeach
    </table>





  </div>
</div>
@endsection