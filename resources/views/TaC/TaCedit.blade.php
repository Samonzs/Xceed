@extends('TaC.layout')
@section('content')
<div class="card">
  <div class="card-body">
      
      <form action="{{ route('TaC.update' .$TermnsAndConditions->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$clientSiteDetails->id}}" id="id" />
        <label>Terms and Conditions</label></br>
        <input type="text" name="Terms and Conditions" id="name" value="{{$clientSiteDetails->Terms and Conditions}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop