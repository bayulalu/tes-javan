@extends('master.layout')



@section('conten')


@if (session('msg'))
{{-- expr --}}
  <div class="col-sm-12">
    <div class="alert alert-success alert-dismissible tess">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      {{-- <h4><i class="icon fa fa-check"></i> Berhasil</h4> --}}
      {{session('msg')}}
    </div>
  </div>  
@endif



<div class="container">
    <h1 class="text-center">Biodata</h1><br><br>
    <div class="row justify-content-center">
        <div class="col-md-10">
            <a href="{{ route('biodata.create') }}" class="btn btn-primary">Tambah Data</a> <br> <br>

            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jenis Kelamain</th>
                    <th scope="col">Status</th>
                    <th scope="col">Aksi</th>

                  </tr>
                </thead>
                <tbody>
                @php
                    $no = 1;
                @endphp
                @foreach ($datas as $data)
                    <tr>
                        <th scope="row">{{$no}}</th>
                        <td>{{$data->nama}}</td>
                        <td>{{$data->jk}}</td>
                        <td>
                            @if ($data->level == 0)
                                Kakek
                            @elseif($data->level == 1)
                                Anak
                            @else
                                cucu
                            @endif

                        </td>
                        <td>
                            <a href="{{ route('biodata.edit', ['id'=> $data->id]) }}" class="btn btn-warning">Edit</a> || 
                            <a href="{{ route('biodata.delete', ['id'=> $data->id]) }}" class="btn btn-danger">Delete</a> 
                        
                        </td>
                    </tr>
                    @php
                        $no = $no + 1;
                    @endphp
                @endforeach


                </tbody>
              </table>
        </div>
    </div>
</div>
@endsection