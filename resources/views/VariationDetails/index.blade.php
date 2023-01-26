@extends('VariationDetails.layout')
@section('content')
<header>
            <nav class="navbar navbar-light bg-light navbar-expand-lg">
              <a class="navbar-brand" href="<?php echo url('lov')?>"><img src="https://xceedelectrical.com.au/wp-content/uploads/2020/05/Xceed-Electrical-Logo.png" class="img-fluid" width="85" height="25" alt="XCEED ELectrical Logo"></a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                      <li class="nav-item active">
                        <a class="nav-link" href="<?php echo url('lov')?>">Home <span class="sr-only">(current)</span></a>
                      </li>
                      <a class="nav-link" href="<?php echo url('createquotes')?>">Create Variations</a>
                      </ul>

                      <ul class="navbar-nav ml-auto">
                     @if(isset(Auth::user()->staff_email))
                      <strong class="nav-link">Welcome {{ Auth::user()->staff_fname }}</strong>
                     @else
                     <script>window.location = "/user";</script>
                     @endif
               
                     <div class="dropdown">
                     @if(Auth::user()->hasRole('admin')) 

                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Admin Panel
                        </a>
                     <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="<?php echo url('staffListCrud')?>">Staff List</a>
                        <a class="dropdown-item" href="<?php echo url('createstaff')?>">Create Staff</a>
                        <a class="dropdown-item" href="<?php echo url('TaC')?>">Terms & Conditions</a>
                     </div> 
                     @endif
                     </div>
                        <li class="nav-item">
                        <a class="nav-link" href="<?php echo url('welcome')?>"><span class="glyphicon glyphicon-log-in"></span>Logout</a>
                        </li>
                      </ul>
                    </div>
                </nav>
</header>  
                            
<table class="table table-striped table-responsive-sm table-hover text-center">
                                   
   <thead>                                
      <tr>                                      
         <th>#</th>                                    
         <th>Client Name</th>
         <th>Job Number</th>
         <th>Variation Date</th>                                                            
         <th>Total Price</th>
         <th>Created By</th>
         <!-- <th>Status</th>-->
         <th>Actions</th>                      
      </tr>             
   </thead>                         
   <tbody>
@foreach($VariationDetails as $item)

   @if($item->createdBy == Auth::user()->staff_fname)                                  
      <tr>                                 
         <td>{{ $loop->iteration }}</td>                                
         <td>{{ $item->firstName }} {{ $item->lastName }}</td>
         <td>{{ $item->jobReferenceNumber }}</td>      
         <td>{{ $item->variationDateRequest }}</td>  
         <td>${{ $item->totalCost }}</td>   
         <td>{{ $item->createdBy }}</td>            
         <td>
         <a href="{{ url('/lov/' . $item->id) }}" title="View Variation"><button class="btn btn-secondary btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a> 

         <form action="{{ url('/lov/' . $item->id . '/store') }} " style="display:inline" method="POST">
            {{ csrf_field() }}
            {{ method_field('POST') }}
            @if($item->approveStatus=="0")
            <button type="submit" class="btn btn-success btn-sm" id="approveStatus" name="approveStatus" onclick="return confirm(&quot;Approve Variation?&quot;)">Approve</button>
            @elseif($item->approveStatus=="1")
            <button type="submit" class="btn btn-success btn-sm" id="approveStatus" name="approveStatus" disabled >Approve</button>
            @endif
         </form>

         @if($item->approveStatus=="0")
         <a href="{{ url('/lov/' . $item->id . '/edit') }}" title="Edit variation"><button id="edit_btn" class="btn btn-secondary btn-primary btn-sm "><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
         
         @elseif($item->approveStatus=="1")
         <a href="{{ url('/lov/' . $item->id . '/edit') }}" title="Edit variation"><button id="edit_btn" disabled class="btn btn-secondary btn-primary btn-sm "><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
         @endif

         @if(Auth::user()->hasRole('admin')) 
         <form method="POST" action="{{ url('/lov' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline"> {{ method_field('DELETE') }} {{ csrf_field() }} <button type="submit" class="btn btn-secondary btn-danger btn-sm" title="Delete Variation" onclick="return confirm(&quot;Do you want to delete the variation?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button> </form>                                        
         @endif
         
         </td>                               
      </tr>
   
   @elseif(Auth::user()->role == "admin")

      <tr>                                 
         <td>{{ $loop->iteration }}</td>                                
         <td>{{ $item->firstName }} {{ $item->lastName }}</td>
         <td>{{ $item->jobReferenceNumber }}</td>      
         <td>{{ $item->variationDateRequest }}</td>  
         <td>${{ $item->totalCost }}</td>               
         <td>
         <a href="{{ url('/lov/' . $item->id) }}" title="View Variation"><button class="btn btn-secondary btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a> 

         


         <form action="{{ url('/lov/' . $item->id . '/store') }} " style="display:inline" method="POST">
            {{ csrf_field() }}
            {{ method_field('POST') }}
            @if($item->approveStatus=="0")
            <button type="submit" class="btn btn-success btn-sm" data-toggle="modal" data-target="#approveModalCenter" id="approveStatus" name="approveStatus" onclick="return confirm(&quot;Approve Variation?&quot;)">Approve</button>
            @elseif($item->approveStatus=="1")
            <button type="submit" class="btn btn-success btn-sm" data-toggle="modal" data-target="#approveModalCenter" id="approveStatus" name="approveStatus" disabled >Approve</button>
            @endif
         </form>


         @if($item->approveStatus=="0")
         <a href="{{ url('/lov/' . $item->id . '/edit') }}" title="Edit variation"><button id="edit_btn" class="btn btn-secondary btn-primary btn-sm "><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
         
         @elseif($item->approveStatus=="1")
         <a href="{{ url('/lov/' . $item->id . '/edit') }}" title="Edit variation"><button id="edit_btn" disabled class="btn btn-secondary btn-primary btn-sm "><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
         @endif

         @if(Auth::user()->hasRole('admin')) 
         <form method="POST" action="{{ url('/lov' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline"> {{ method_field('DELETE') }} {{ csrf_field() }} <button type="submit" class="btn btn-secondary btn-danger btn-sm" title="Delete Variation" onclick="return confirm(&quot;Do you want to delete the variation?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button> </form>                                        
         @endif
         </td>                               
      </tr>

   
   @endif

   
@endforeach
                                      
   </tbody>
                               
</table>



@endsection