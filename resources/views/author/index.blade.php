@extends('layouts.master')
@section('isi')

<div class="row">
<center><h1>Data Author</h1></center>
<div class="panel panel-primary">
<div class="panel-heading">Data Author
<div class="panel-title pull-right"><a href="/orangtua/create">Tambah Data</a></div></div>
<div class="panel-body">
<table class="table">
	<thead>
		<tr>
			<th>Nama </th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
	  @foreach($author as $data)
	    <tr>
		    <td>{{$data->nama}}</td>
		    </td>
		    <td>
		    	<a class="btn btn-warning" href="/author/{{$data->id}}/edit">EDIT</a> </td>|
		    	<td>
		    	<a class="btn btn-info" href="/author/{{$data->id}}">Show</a> </td>|
		    	<td>
		    	<form action="{{route('author.destroy',$data->id)}}" method="post">
		    		<input type="hidden" name="_method" value="Delete">
		    		<input type="hidden" name="_token">
		    		<input type="submit" value="Delete" class="btn btn-danger">
		    		{{csrf_field()}}
		    	</form>
		    </td>
	   </tr>
	   @endforeach
	</tbody>
</table>
</div>
</div>
</div>
@endsection