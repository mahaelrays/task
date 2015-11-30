@extends('master')
@section('content')
{!! Form::open(['route'=>['employees.update',$employees->id],'method'=>'put']) !!}
<center><legend>Edit Employee</legend></center>
<br/>
  <div class="form-group">
    <label >First Name :</label>
    <input type="text" class="form-control" value="{{ $employees->first_name }}"  name="first_name"/>
  </div>
  <br/>
   <div class="form-group">
    <label >Last Name :</label>
    <input type="text" class="form-control" value="{{ $employees->last_name }}" name="last_name"/>
  </div>
  <br/>
   <div class="form-group">
    <label >Salary:</label>
    <input type="text" class="form-control" value="{{ $employees->salary }}" name="salary" />
  </div>
  <br/>
   <div class="form-group">
    <label >department:</label>
    <input type="text" class="form-control" value="{{ $employees->department }}" name="department"/>
  </div>
  <br/>
 
  <center><button type="submit" class="btn btn-primary" >Save</button></center>
  <br/>
  <a href="http://localhost:8000/employees">Back</a>
  {!! Form::close()!!}
@stop