@extends('layouts.master')
@section('isi')
<div class="row">
	<center><h1>Data Author</h1></center>
	<div class="panel panel-primary">
	 <div class="panel-heading">Data Author
	 <div class="panel-title pull-right"><a href="{{ URL::previous() }}">kembali</a></div></div>

	<div class="panel-body">
	  <input type="hidden" name="_token" value="{{csrf_token()}}">
	  	<div class="form-group">
	  	<label class="control-lable">Nama </label>
	  	<input type="text" name="a" class="form-control" readonly ="" value="{{$author->nama}}">
	  </form>
		</div>
	</div>
</div>
@endsection