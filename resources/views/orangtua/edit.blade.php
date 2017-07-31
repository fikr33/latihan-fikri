@extends('layouts.master')
@section('isi')
<div class="row">
	<center><h1>Data Orang Tua</h1></center>
	<div class="panel panel-primary">
	 <div class="panel-heading">Data Orang Tua
	 <div class="panel-title pull-right"><a href="{{ URL::previous() }}">kembali</a></div></div>

	<div class="panel-body">
	  <form action="{{route('orangtua.update',$ortu->id)}}" method="post">
	  <input type="hidden" name="_method" value="PUT">
	  <input type="hidden" name="_token" value="{{csrf_token()}}">
	  	<div class="form-group">
	  	<label class="control-lable">Nama Ibu</label>
	  	<input type="text" name="a" class="form-control" required="" value="{{$ortu->nama_ibu}}">
	  	</div>
	  	<div class="form-group">
	  	<label class="control-lable">Nama Ayah</label>
	  	<input type="text" name="b" class="form-control" required="" value="{{$ortu->nama_ayah}}">
	  	</div>
	  	<div class="form-group">
	  	<label class="control-lable">Umur Ibu</label>
	  	<input type="number" name="c" class="form-control" required="" value="{{$ortu->umur_ibu}}">
	  	</div>
	  	<div class="form-group">
	  	<label class="control-lable">Umur Ayah</label>
	  	<input type="number" name="d" class="form-control" required="" value="{{$ortu->umur_ayah}}">
	  	</div>
	  	<div class="form-group">
	  	<label class="control-lable">Alamat</label>
	  	<textarea rows="10" name="e" class="form-control" required="">{{$ortu->alamat}}</textarea>
	  	</div>
	  	<div class="form-group">
	  	<button type="submit" class="btn btn-success">simpan</button>
	  	<button type="reset" class="btn btn-danger">reset</button>
	  	</div>
	  </form>
		</div>
	</div>
</div>
@endsection