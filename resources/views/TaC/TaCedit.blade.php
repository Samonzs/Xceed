@extends('TaC.layout')
@section('content')
<div class="card">
  <div class="card-body">
      
      <form action="{{ url('TaC/' .$TaC->id) }}" method="post">
      {!! csrf_field() !!}
        @method("PATCH")
       
        <label>Terms and Conditions</label></br><br>
        <input type="text" id ="TaC" name="TermsAndConditions" value="{{$TaC->TermsAndConditions}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
      </form>
  
  </div>
</div>
@stop

