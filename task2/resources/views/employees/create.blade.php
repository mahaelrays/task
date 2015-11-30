@extends('master')
@section('content')
{!! Form::open(['route'=>'employees.store','method'=>'post']) !!}

	<center><legend>Add new employe</legend></center>
	<br/>
  <div class="form-group">
    <label >First Name :</label>
    <input type="text" class="form-control"  placeholder="First Name" name="first_name"/>
  </div>
  <br/>
   <div class="form-group">
    <label >Last Name :</label>
    <input type="text" class="form-control"  placeholder="Last Name" name="last_name"/>
  </div>
  <br/>
   <div class="form-group">
    <label >Salary:</label>
    <input type="text" class="form-control"  placeholder="Salary" name="salary" />
  </div>
  <br/>
   <div class="form-group">
    <label >department:</label>
    <input type="text" class="form-control"  placeholder="department" name="department"/>
  </div>
  <br/>
 
  <center><button type="submit" class="btn btn-primary" >Save</button></center>
  <br/>
{!! Form::close()!!}
@stop