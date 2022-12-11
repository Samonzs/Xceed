<!DOCTYPE html>
<html>

<head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

<body>

<!-- DASHBOARD  -->

<header>
            <nav class="navbar navbar-light bg-light navbar-expand-lg">
              <a class="navbar-brand" href="<?php echo url('listofquotes')?>"><img src="https://xceedelectrical.com.au/wp-content/uploads/2020/05/Xceed-Electrical-Logo.png" class="img-fluid" width="85" height="25" alt="XCEED ELectrical Logo"></a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                      <li class="nav-item active">
                        <a class="nav-link" href="<?php echo url('listofquotes')?>">Home <span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Quoting
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                          <a class="dropdown-item" href="<?php echo url('createquotes')?>">Create a Quote</a>
                          <a class="dropdown-item" href="<?php echo url('listofquotes')?>">List of Quotes</a>
                        </div>
                      </li>
                      </ul>
                      <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                        <a class="nav-link" href="<?php echo url('createstaff')?>"><span class="glyphicon glyphicon-user"></span> Create Staff</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="<?php echo url('welcome')?>"><span class="glyphicon glyphicon-log-in"></span> Login</a>
                        </li>
                      </ul>
                    </div>
                </nav>
</header>        


    <center>
    <h2>List of Quotes</h2>

    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">Quote/Client Name</th>
          <th scope="col">Job Number</th>
          <th scope="col">Price</th>
          <th scope="col">Status</th>
          <th scope="col">Editing Options</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1. Quote-1</th>
          <td>123456</td>
          <td>$--</td>
          <td>In Progress</td>
          <td><button type="button" class="btn btn-secondary">View</button> <button type="button" class="btn btn-secondary">Edit</button> <button type="button" class="btn btn-secondary">Approve</button> <button type="button" class="btn btn-secondary">Close</button>
        </tr>
        <tr>
          <th scope="row">2. Quote-2</th>
          <td>132456</td>
          <td>$--</td>
          <td>Done</td>
        </tr>
        <tr>
          <th scope="row">3. Quote-3</th>
          <td>123654</td>
          <td>$--</td>
          <td>In Progress</td>
        </tr>
      </tbody>
    </table>
<center>


</body>
</html>