@if(Auth::user()->hasRole('user')) 
<span style="color:black">Error: Unauthorised Access</span>

@elseif(Auth::user()->hasRole('admin')) 

<!DOCTYPE html>
<html>
<head>
    <title>Terms anc Conditions</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
  
<div class="container">
    @yield('content')
</div>
  
</body>
</html>
@endif
