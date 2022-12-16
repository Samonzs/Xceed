<!doctype html>
<html lang="en">
<head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>XCEED Staff List</title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   </head>
 
<body>
<header>
<nav class="navbar navbar-light bg-light navbar-expand-lg">
            <a class="navbar-brand" href="<?php echo url('listofquotes')?>"><img src="https://xceedelectrical.com.au/wp-content/uploads/2020/05/Xceed-Electrical-Logo.png" class="img-fluid" width="85" height="25" alt="XCEED ELectrical Logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
               <ul class="navbar-nav">
                  <li class="nav-item">
                     <a class="nav-link" href="<?php echo url('listofquotes')?>">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="<?php echo url('createquotes')?>">Create Variation</a>
                  </li>
               </ul>
               <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                     <a class="nav-link active" href="<?php echo url('createstaff')?>"><span class="glyphicon glyphicon-user"></span> Create Staff</a>
                  </li>
                  <li class="nav-item">
                        <a class="nav-link" href="<?php echo url('listofstaff')?>"><span class="glyphicon glyphicon-user"></span> Staff List</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="<?php echo url('welcome')?>"><span class="glyphicon glyphicon-log-in"></span>Login</a>
                  </li>
               </ul>
                    </div>
                </nav>
</header>  
<center>
    <h2>Staff List</h2>

    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">First Name</th>
          <th scope="col">Last Name</th>
          <th scope="col">Editing Options</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">01</th>
          <td>Ali</td>
          <td>Samonzs</td>
          <td><button type="button" class="btn btn-secondary">Edit</button> <button type="button" class="btn btn-secondary">Delete</button></td>
        </tr>
        <tr>
          <th scope="row">02</th>
          <td>Kathy</td>
          <td>Han</td>
          <td><button type="button" class="btn btn-secondary">Edit</button> <button type="button" class="btn btn-secondary">Delete</button></td>
        </tr>
        <tr>
          <th scope="row">03</th>
          <td>Yahya</td>
          <td>Kata'A</td>
          <td><button type="button" class="btn btn-secondary">Edit</button> <button type="button" class="btn btn-secondary">Delete</button></td>
        </tr>
        <tr>
          <th scope="row">04</th>
          <td>William</td>
          <td>Carson</td>
          <td><button type="button" class="btn btn-secondary">Edit</button> <button type="button" class="btn btn-secondary">Delete</button></td>
        </tr>
      </tbody>
    </table>
<center>

   </body>
   </html>