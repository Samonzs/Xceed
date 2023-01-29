@extends('users.layout')
@section('content')

@if(Auth::user()->hasRole('user')) 
<span style="color:black">Error: Unauthorised Access</span>

@elseif(Auth::user()->hasRole('admin')) 
<header>
            <nav class="navbar navbar-light bg-light navbar-expand-lg">
              <a class="navbar-brand" href="<?php echo url('lov')?>"><img src="https://xceedelectrical.com.au/wp-content/uploads/2020/05/Xceed-Electrical-Logo.png" class="img-fluid" width="85" height="25" alt="XCEED ELectrical Logo"></a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                      <li class="nav-item">
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
                        <a class="nav-link" href="{{ url('/user/logout') }}"><span class="glyphicon glyphicon-log-in"></span>Logout</a>
                        </li>
                      </ul>
                    </div>
                </nav>
</header>   

<table class="table table-striped table-responsive-sm table-hover text-center">
                                   
   <thead>                                
      <tr>                                      
         <th>#</th>                                    
         <th>First Name</th>
         <th>Last Name</th>                              
         <th>Email</th> 
         <th>Role</th>                                                                                                                                             
         <th>Actions</th>                      
      </tr>             
   </thead>                         
   <tbody>
      @foreach($users as $item)
                                          
      <tr>                                 
         <td>{{ $loop->iteration }}</td>                                
         <td>{{ $item->staff_fname }}</td>
         <td>{{ $item->staff_lname }}</td>                       
         <td>{{ $item->staff_email }}</td>
         <td>{{ $item->role }}</td>                                                                                                                                                                          
         <td>
            <a href="{{ url('/staffListCrud/' . $item->id) }}" title="View Staff"><button class="btn btn-secondary btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a> <a href="{{ url('/staffListCrud/' . $item->id . '/edit') }}" title="Edit Staff"><button class="btn btn-secondary btn-primary btn-sm "><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a> 
            @if($item->role=="user") 
            <button class="btn btn-secondary btn-danger btn-sm" data-toggle="modal" data-target="#confirmationModal" data-item="{{ $item->id }}">Delete</button>                                      
            @endif
         </td>                               
      </tr>
@endforeach
   </tbody>
                               
</table>


<!-- Modal -->
<div class="modal fade" id="confirmationModal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">

			<form id="form-confirm" action="" method="POST">
				{{ csrf_field() }}
				{{ method_field('DELETE') }}

				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Delete User?</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>

				<div class="modal-body">
					
				</div>

				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Confirm</button>
				</div>
			</form>
		</div>
	</div>
</div>

<script>
	
	$("#confirmationModal").on('shown.bs.modal', function (e) {
		const base = "{{ url('') }}";
		const item = e.relatedTarget.dataset['item'];
    
		const action = `${base}/staffListCrud/${item}`;
		const text = `Do you want to delete the user (${item})?`;

		const form = $("#form-confirm")[0];
		const modalBody = $("#form-confirm > .modal-body")[0];

		form.action = action;
		modalBody.innerText = text;

	});
	
</script>

@endsection
@endif