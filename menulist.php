<?php 
require 'header.php'; ?>

	<!-- Add New Food Form -->
	<div class="container tb1" id="addFooddiv">
		<form method="POST" action="addmenu.php" enctype="multipart/form-data">
			<h1 class="p-3 text-center font-weight-light ">Add Food Menu</h1>

			<!-- Profile -->
			<div class="form-group row">
				<div class="col-sm-2">
					<label for="profile">Food Profile</label>
				</div>
				<div class="col-sm-10"> 
					<input type="file" class="form-control-file" id="profile" name="profile">
				</div>
			</div>

		  <!-- Name -->
		  	<div class="form-group row">
			    <label for="name" class="col-sm-2 col-form-label">Food Name</label>
			  	<div class="col-sm-10">
			      <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name">
			    </div>
			</div>

			<!-- Price -->
			  <div class="form-group row">
			    <label for="price" class="col-sm-2 col-form-label">Price</label>
			  	<div class="col-sm-10">
			      <input type="text" class="form-control" name="price" id="price" placeholder="Enter Price">
			    </div>
			  </div>

			  <!-- Save -->
			  <div class="form-group row">
			    <div class="col-sm-10">
			      <button type="submit" class="btn btn-primary">Save</button>
			    </div>
			  </div>
		</form>
	</div>

	<!-- Edit Food Menu Form -->
	<div class="container tb2" id="editFooddiv" style="display: none;">

		<form method="post" action="updatefoodmenu.php" enctype="multipart/form-data">

			<input type="hidden" name="edit_id" id="edit_id">
			<input type="hidden" name="edit_oldprofile" id="edit_oldprofile">

			<h1 class="p-3 text-center font-weight-light ">Edit Food Menu</h1>
			<div class="form-group row">
				<div class="col-sm-2">
					<label for="choosefile">Food Profile</label>
				</div>
				<div class="col-sm-10">
					<ul class="nav nav-tabs" id="myTab" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Old Profile</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">New Profile</a>
						</li>
					</ul>
					<!-- Old Profile -->
					<div class="tab-content" id="myTabContent">
						<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
							<img src="" id="old_img" class="w-25 h-25">
						</div>
						<!-- New Profile -->
						<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
							<input type="file" class="form-control-file" id="choosefile" name="newprofile">
						</div>
					</div>
						   
				</div>
			</div>
			<div class="form-group row">
				<label for="inputname" class="col-sm-2 col-form-label" > Food Name</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="edit_name" name="edit_name" placeholder="Enter Name">
				</div>
			</div>
			<div class="form-group row">
				<label for="inputEmail3" class="col-sm-2 col-form-label">Food Price</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="edit_price" name="edit_price"placeholder="Enter Price">
				</div>
			</div>

			<div class="form-group row">
				<div class="col-sm-10">
					<button type="submit" class="btn btn-primary">Update</button>
				</div>
			</div>
		</form>
	</div>

	<!-- Table -->
	<div class="container">
		<table class="table table-bordered table-responsive-sm">
			<thead>
				<th>#</th>
				<th>Name</th>
				<th>Price</th>
				<th>Action</th>
			</thead>
			<tbody id="tbody">
				
			</tbody>
		</table>	
	</div>

<?php require 'footer.php'; ?>