<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>


<style>
    table, th, td {
    border:1px solid black;
    }
</style>
<body>

<!-- DASHBOARD  -->

<header>
    <nav class="navbar navbar-inverse">

    <div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
        </button>

        <!-- logo image located here -->
        <a class="navbar-brand" href="<?php echo url('welcome')?>"><img src="images/logo.jpg" class="img-fluid" alt="XCEED ELectrical Logo"></a>
        
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Quoting <span class="caret"></span></a>
        <ul class="dropdown-menu">
            <li><a href="<?php echo url('createquotes')?>">Create a Quote</a></li>
            <li><a href="<?php echo url('listofquotes')?>">List of Quotes</a></li>
        </ul>
        <!-- <li><a href="#">section 2</a></li>
        <li><a href="#">Section 3</a></li> -->
    </ul>
    <ul class="nav navbar-nav navbar-right">
        <!-- The glyphicon is just a symbol to use that can be called through the css and js components of bootstrap -->
        <li><a href="<?php echo url('createstaff')?>"><span class="glyphicon glyphicon-user"></span> Create Staff</a></li>
        <li><a href="<?php echo url('login')?>"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
    </div>
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