@extends('TaC.layout')
@section('content')
<div class="card">
  <div class="card-body">
      
      <form action="{{ url('TaC/' .$TaC->id) }}" method="post">
      {!! csrf_field() !!}
        @method("PATCH")
        <label>Name</label></br>
        <input type="text" name="id" id="id" value="{{$TaC->id}}" id="id" /></br>
        <label>Terms and Conditions</label></br>
        <input type="text" id ="TaC" name="Terms and Conditions" value="{{$TaC->TermsAndConditions}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
      </form>
  
  </div>
</div>
@stop

