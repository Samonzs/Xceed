@extends('TaC.layout')
@section('content')
<div class="card">
  <div class="card-body">
      
      <form action="{{ url('TaC/' .$TaC->id) }}" method="post">
      {!! csrf_field() !!}
        @method("PATCH")
       
        <label>Terms and Conditions</label></br><br><span style="color:red">@error('TermsAndConditions'){{$message}}@enderror</span>
        <textarea type="text" id ="TaC" name="TermsAndConditions" class="form-control">{{$TaC->TermsAndConditions}}</textarea></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
      </form>
        <br><a href="{{ url('TaC')}}"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o"></i> Back</button></a>

  
  </div>
</div>
@stop

