@extends('master')
@section('content')

	
<p >
<center class="bg-info">
	Id : {{$employees->id}} <br/>
	First Name : {{$employees->first_name}}<br/>
	Last Name : {{$employees->last_name}}<br/>
	Salary : {{$employees->salary}}<br/>
	Department : {{$employees->department}}<br/>
	<br/>
	</center>
</p>
<a href="http://localhost:8000/employees">Back</a>
@stop