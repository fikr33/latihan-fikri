@extends('layouts.master')
@section('isi')
<div class="row">
	<center><h1>Data Siswa</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading">Data Siswa
		<div class="panel-title pull-right">
		<a href="{{URL::previous() }}">Kembali</a></div>
		</div>
		<div class="panel-body">
				<input type="hidden" name="_method" value="PUT">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<div class="form-group">
					<label class="control-lable">Nama</label>
					<input type="text" name="a" value="{{$siswas->nama}}" class="form-control" readonly="">
				</div>
				<div class="form-group">
					<label class="control-lable">Nama OrangTua</label>
						<input type="text" name="a" value="{{$siswas->orangtua->nama_ayah}} dan {{$siswas->orangtua->nama_ibu}}" class="form-control" readonly="">
				</div>
				<div class="form-group">
					<label class="control-lable">Umur</label>
					<input type="number" name="c" value="{{$siswas->umur}}" class="form-control" readonly="">
				</div>
				<div class="form-group">
					<label class="control-lable">Alamat</label>
					<textarea class="form-control" rows="10" name="d" readonly="">{{$siswas->alamat}}</textarea>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection