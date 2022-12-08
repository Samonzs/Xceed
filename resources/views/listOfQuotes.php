<!DOCTYPE html>
<html>

<head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>


<style>
    table, th, td {
    border:1px solid black;
    }
</style>
<body>

<!-- DASHBOARD  -->

<header>
            <nav class="navbar navbar-light bg-light navbar-expand-lg">
              <a class="navbar-brand" href="<?php echo url('welcome')?>"><img src="https://xceedelectrical.com.au/wp-content/uploads/2020/05/Xceed-Electrical-Logo.png" class="img-fluid" width="85" height="25" alt="XCEED ELectrical Logo"></a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                      <li class="nav-item active">
                        <a class="nav-link" href="<?php echo url('welcome')?>">Home <span class="sr-only">(current)</span></a>
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
                        <a class="nav-link" href="<?php echo url('login')?>"><span class="glyphicon glyphicon-log-in"></span> Login</a>
                        </li>
                      </ul>
                    </div>
                </nav>
</header>        


    <center>
    <h2>List of Quotes</h2>

    <table style="width:50%">
        <tr>
            <th>Client Name</th>
        </tr>
        <tr>
            <td>Alfreds Comedy&nbsp;&nbsp;&nbsp;<a href="https://www.w3schools.com/" target="_blank">View</a>&nbsp;/&nbsp;<a href="https://www.w3schools.com/" target="_blank">Edit</a> </td>
        </tr>
        <tr>
            <center>
                <td>Centro comercial Moctezuma&nbsp;&nbsp;&nbsp;<a href="https://www.w3schools.com/"      target="_blank">View</a>&nbsp;/&nbsp;<a href="https://www.w3schools.com/" target="_blank">Edit</a></td></td>
            </center>
        </tr>
</table>
<center>


</body>
</html>