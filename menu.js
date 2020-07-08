$(document).ready(function(){
	getMenu();
	function getMenu(){
		$.get('menulist.json', function(response){
			if(response){
				// var menuObjArray = JSON.parse(i);
				var menuObjArray = (typeof response == "object" ? response : JSON.parse(response));
				 
				// if(response=="object"){
				// 	menuObjArray = response;
				// }else{
				// 	menuObjArray = JSON.parse(response);
				// }
				// var menuObjArray = JSON.parse(JSON.stringify(response));
				// var menuObjArray = JSON.parse(JSON.stringify(response));
				var html =' ';
				var yml=' ';
				var j = 1;
				$.each(menuObjArray,function(i,v){
					html += `<div class="col-12 col-md-4 mb-4">
								<div class="card text-center" style="position: relative;">
									<div class="card-img-top">
										<img src="${v.profile}" width="100%" height="100%">
									</div>
									<div class="card-body p-0">
										<p class="text-center mt-3 yy">${v.name}</p>
										<span style="position: absolute;top: 10px;left: 10px; border-radius: 10px;padding: 5px 20px;font-size: 12px;" class="bg-dark text-light">${v.price}</span>
									</div>
									<div class="card-footer px-2 py-2">
										<button class="btn btn-outline-danger atc" data-id="${i} data-price="${v.price} data-name="${v.name}">Add to Card </button>
									</div>
								</div>
							</div>`;
					yml +=`<tr>
							 <td>${j++}</td>
							 <td>${v.name}</td>
							 <td>${v.price}</td>
							 <td> 
									<button class="btn btn-outline-primary">
									<i class="fas fa-info-circle"></i>
									</button>

									<button class="btn btn-outline-warning edit " data-id="${i}">
									<i class="fas fa-edit"></i>
									</button>

									<button class="btn btn-outline-danger delete" data-id="${i}">
									<i class="fas fa-trash-alt"></i>
									</button>
								</td>
							</tr>`;
				})
				$('#come').html(html);
				$('#tbody').html(yml);
				// getMenu();
				//object
				//var studentObjArray = response;
			}
		})
	}
	// $('tbody').on('click', '.delete', function() {
		
	// 		let id = $(this).data('id');
	// 		// console.log(id);

	// 		var ans= confirm('Are You Sure want to delete?')
	// 		if(ans){
	// 			$.post('deletestudent.php',{id:id},function(data){
	// 				getMenu();
	// 			})
	// 		}
	// })

	$('tbody').on('click','.delete', function(){
		var id = $(this).data('id');
		var ans = confirm('are u sure')
		if(ans){
			
		// let id = $(this).data('id');
		$.post('deletefood.php',{id: id}, function(data) {
				getMenu();
			});
		}
	});

	$('tbody').on('click', '.edit', function() {
		var id = $(this).data('id');
		
		//string
		$.get('menulist.json', function(response){
		
		// console.log(typeof(response));
			var menuObjArray = JSON.parse(response);

			var name= menuObjArray[id].name;
			var price= menuObjArray[id].price;
			var profile= menuObjArray[id].profile;

			console.log(name);
			console.log(price);
			// console.log(address);
			// console.log(gender);
			console.log(profile);

			$('#edit_name').val(name);
			$('#edit_price').val(price);
			// $('#edit_').val(profile);

			//show edit photo in old profile
			$('#old_img').attr('src',profile);

			//new photo
			$('#edit_id').val(id);
			$('#edit_oldprofile').val(profile);
		})
		
		$('#editFooddiv').show(500);
		$('#addFooddiv').hide(500);				
	})

	// $('#come').on('click','.atc',function() {
	// 	var name = $(this).data('name');
	// 	var price = $(this).data('price');
		
		// alert(name);

	// });
	// getMenu();
});