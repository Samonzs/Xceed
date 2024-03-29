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

   @if($item->createdBy == Auth::user()->staff_fname || Auth::user()->role == "admin")

      <tr>                                 
         <td>{{ $item->id }}</td>                                
         <td>{{ $item->firstName }} {{ $item->lastName }}</td>
         <td>{{ $item->jobReferenceNumber }}</td>      
         <td>{{ $item->variationDateRequest }}</td>  
         <td>${{ $item->totalCost }}</td>          
         <td>{{ $item->createdBy }}</td>          
         <td>
			 <a href="{{ url('/lov/' . $item->id) }}" title="View Variation"><button class="btn btn-secondary btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>

			@if($item->approveStatus=="0")
			<!-- Button trigger modal -->
			<button class="btn btn-success btn-sm" data-toggle="modal" data-target="#approveVariationModal" data-item="{{ $item->id }}" data-type="store">Approve</button>

			@elseif($item->approveStatus=="1")
			<button class="btn btn-success btn-sm" disabled>Approve</button>
			@endif


			@if($item->approveStatus=="0")
			<a href="{{ url('/lov/' . $item->id . '/edit') }}" title="Edit variation"><button id="edit_btn" class="btn btn-secondary btn-primary btn-sm ">Edit</button></a>

			@elseif($item->approveStatus=="1")
			<a href="{{ url('/lov/' . $item->id . '/edit') }}" title="Edit variation"><button id="edit_btn" disabled class="btn btn-secondary btn-primary btn-sm "> Edit</button></a>
			@endif

			@if(Auth::user()->hasRole('admin'))
			<!-- Button trigger modal -->
			<button class="btn btn-secondary btn-danger btn-sm" data-toggle="modal" data-target="#approveVariationModal" data-item="{{ $item->id }}" data-type="delete">Delete</button>
			@endif
         </td>                               
      </tr>

   
   @endif

   
@endforeach
                                      
   </tbody>
                               
</table>

<!-- Modal -->
<div class="modal fade" id="approveVariationModal" tabindex="-1" role="dialog" aria-labelledby="approveVariationModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">

			<form id="form-confirm" action="" method="POST">
				{{ csrf_field() }}
				{{ method_field('POST') }}

				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">n/a</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>

				<div class="modal-body">
					n/a
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
	
	$("#approveVariationModal").on('shown.bs.modal', function (e) {
	   const base = "{{ url('') }}";
      
      // grab data-type and data-item from button
      const type = e.relatedTarget.dataset['type'];
		const item = e.relatedTarget.dataset['item'];
		
		let action, method, text, label;

		if (type === "store") {
			action = `${base}/lov/${item}/store`;
			method = "POST";
			text = "Are you sure you want to approve this variation? You won't be able to edit or make changes once you do this.";
			label = "Approve Variation";
		}
		else if (type === "delete") {
			action = `${base}/lov/${item}`;
			method = "DELETE";
			text = `Do you want to delete the variation (${item})?`;
			label = "Delete Variation";
		}
	
		const form = $("#form-confirm")[0];
		const formMethod = $("#form-confirm > input[name='_method']")[0];
		const modalBody = $("#form-confirm > .modal-body")[0];
		const modalLabel = $("#exampleModalLabel")[0];

		form.action = action;
		formMethod.value = method;
		modalBody.innerText = text;
		modalLabel.innerText = label;
	});
	
</script>

@endsection