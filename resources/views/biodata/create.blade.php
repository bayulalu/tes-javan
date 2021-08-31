@extends('master.layout')



@section('conten')

<div class="container">
    <h1 class="text-center">Biodata</h1><br><br>
    <div class="row justify-content-center">
        <div class="col-md-10">

<p class="text-right"> <a href="{{ route('biodata') }}" class="btn btn-info" href="" >Kembali</a> </p>   
        <form action="{{ route('biodata.create') }}" method="POST">
            @csrf
            <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
            {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
            </div>
            <div class="form-group">
                <label for="jk">Jenis Kelamin</label>
                <select name="jk" class="form-control" id="jk">
                <option value="pria">pria</option>
                <option value="wanita">wanita</option>
                </select>
            </div>

            <div class="form-group">
                <label for="level">Level</label>
                <select class="form-control" name="level" id="level">
                <option value="0">Kakek</option>
                <option value="1">anak</option>
                <option value="2">cucu</option>
                </select>
            </div>
            
            <button type="submit" class="btn btn-primary">Simpan</button>
            <button type="reset" class="btn btn-danger">Batal</button>

        </form>

        </div>
    </div>
    </div>
  @endsection