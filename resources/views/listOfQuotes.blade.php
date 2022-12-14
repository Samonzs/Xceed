<!doctype html>
<html lang="en">
<head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">
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
                      <a class="nav-link" href="<?php echo url('createquotes')?>">Create Variations</a>
                      </ul>
                      <ul class="navbar-nav ml-auto">
                      <div class="dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Admin Panel
                        </a>
                     <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="<?php echo url('listofstaff')?>">Staff List</a>
                        <a class="dropdown-item" href="<?php echo url('createstaff')?>">Create Staff</a>
                        <a class="dropdown-item" href="<?php echo url('TaC')?>">Terms & Conditions</a>
                     </div>
                     </div>
                        <li class="nav-item">
                        <a class="nav-link" href="<?php echo url('welcome')?>"><span class="glyphicon glyphicon-log-in"></span>Logout</a>
                        </li>
                      </ul>
                    </div>
                </nav>
</header>          


    <center>
    <h2>List of Variations</h2>
   
    <table class="table table-striped table-responsive-sm table-hover text-center">
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
          <td><button type="button" class="btn btn-secondary text-nowrap">View</button> <button type="button" class="btn btn-secondary">Edit</button> <button type="button" class="btn btn-secondary">Approve</button> <button type="button" class="btn btn-secondary">Close</button>
        </tr>
        <tr>
          <th scope="row">2. Quote-2</th>
          <td>132456</td>
          <td>$--</td>
          <td>Done</td>
          <td><button type="button" class="btn btn-secondary text-nowrap">View</button> <button type="button" class="btn btn-secondary">Edit</button> <button type="button" class="btn btn-secondary">Approve</button> <button type="button" class="btn btn-secondary">Close</button>
        </tr>
        <tr>
          <th scope="row">3. Quote-3</th>
          <td>123654</td>
          <td>$--</td>
          <td>In Progress</td>
          <td><button type="button" class="btn btn-secondary text-nowrap">View</button> <button type="button" class="btn btn-secondary">Edit</button> <button type="button" class="btn btn-secondary">Approve</button> <button type="button" class="btn btn-secondary">Close</button>
        </tr>
      </tbody>
    </table>
<center>

<footer class="text-center text-lg-start bg-white text-muted">
         <section class="">
            <div class="container text-center text-md-start mt-5">
               <!-- Grid row -->
               <div class="row mt-3">
                  <!-- Grid column -->
                  <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                     <!-- Content -->
                     <h6 class="text-uppercase fw-bold mb-4">
                        <i class="fas fa-gem me-3 text-secondary"></i>XCEED Electrical
                     </h6>
                     <p>
                        Very useful disclaimer/ or warning rerouting users to an agreement here...
                     </p>
                  </div>
                  <!-- Grid column -->
                  <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                     <!-- Links -->
                     <h6 class="text-uppercase fw-bold mb-4">
                        Useful Products
                     </h6>
                     <p>
                        <a href="#!" class="text-reset">Useful Product</a>
                     </p>
                     <p>
                        <a href="#!" class="text-reset">Useful Product</a>
                     </p>
                     <p>
                        <a href="#!" class="text-reset">Useful Product</a>
                     </p>
                     <p>
                        <a href="#!" class="text-reset">Useful Product</a>
                     </p>
                  </div>
                  <!-- Grid column -->
                  <!-- Grid column -->
                  <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                     <!-- Links -->
                     <h6 class="text-uppercase fw-bold mb-4">
                        Useful links
                     </h6>
                     <p>
                        <a href="#!" class="text-reset">Useful Link</a>
                     </p>
                     <p>
                        <a href="#!" class="text-reset">Useful Link</a>
                     </p>
                     <p>
                        <a href="#!" class="text-reset">Useful Link</a>
                     </p>
                     <p>
                        <a href="#!" class="text-reset">Useful Link</a>
                     </p>
                  </div>
                  <!-- Grid column -->
                  <!-- Grid column -->
                  <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                     <!-- Links -->
                     <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                     <p><i class="fas fa-home me-3 text-secondary"></i> Sydney, Australia</p>
                     <p>
                        <i class="fas fa-envelope me-3 text-secondary"></i>
                        example@site.com
                     </p>
                     <p><i class="fas fa-phone me-3 text-secondary"></i> + 61 xxxx xxx xxx</p>
                     <p><i class="fas fa-print me-3 text-secondary"></i> + 61 xxxx xxx xxx</p>
                  </div>
                  <!-- Grid column -->
               </div>
               <!-- Grid row -->
            </div>
         </section>
         <!-- Section: Links  -->
         <!-- Copyright -->
         <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.025);">
            ?? 2022 Copyright:
            <a class="text-reset fw-bold" href="#">homeSite.com</a>
         </div>
      </footer>
   </body>
   </html>