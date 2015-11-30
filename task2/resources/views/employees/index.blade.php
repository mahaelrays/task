@extends('master')
@section('content')
<table class="table table-striped">
		<thead>
			<tr class="info">
				<th>id</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Salary</th>
				<th>Department</th>
				<th>Operation</th>
			</tr>
		</thead>
		<tbody>
			@foreach($employees as $employe)
				<tr>
					<td class="active">{{$employe->id}}</td>
					  <td class="success">{{$employe->first_name}}</td>
					  <td class="warning">{{$employe->last_name}}</td>
					  <td class="danger">{{$employe->salary}}</td>
					  <td class="info">{{$employe->department}}</td>	
					  <td>
					  	<a href="/employees/{{$employe->id}}">Show</a>
					  	<a href="/employees/{{$employe->id}}/edit">Edit</a>
					  	<a href="/employees/destroy/{{$employe->id}}">Delete</a>
					  	
					  </td>
				</tr>
			@endforeach
		</tbody>
</table>
<a href="http://localhost:8000/">Back</a>
@stop