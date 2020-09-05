let BASE_URL = "http://localhost/Assignment4/Connection.php";

let data = null;
$("document").ready(function () {
	getMenuItemList();
});

function getMenuItemList() {
	let url = BASE_URL + "?req=all_items";
	$.get(url, function (data, success) {

		console.log(data.length);
		console.log(data[0]);
		var drop = document.querySelector("#drop");
		drop.addEventListener("click", createList);
		function createList() {
			console.log(data);
			for (var i = 0; i < data.length; i++) {
				var droplist = document.querySelector("#drop");
				var optn = document.createElement("option");
				optn.value = i;
				optn.text = data[i].name;
				droplist.appendChild(optn);
			}

			var selDrop = document.getElementById('drop');
			var optnSelct = selDrop.options[selDrop.selectedIndex];
			if (optnSelct.value == "please select menu") {

				document.querySelector(".description").innerHTML = null;
			}
			else {
				var input = optnSelct.text;
				let final_url = BASE_URL + "?req=sel_menu_item&menu_name=" + input;

				$.get(final_url, function (Ndata, success) {
					console.log(Ndata);
					document.querySelector(".description").innerHTML = `<div class="panel panel-default">
						<div class="panel-heading">
					<h3 class="panel-title"><b>  D E T A I L S  </b> </h3>
						</div>
						<div class="panel-body">
						<div class="row">
						<div class="col-md-2">
						</div>
						<div class="col-md-8">
							<ul class="list-group">
								<li class="list-group-item"><b>Id</b>: `+ Ndata.id + `</li>
								<li class="list-group-item"><b>Short name</b>: `+ Ndata.short_name + `</li>
								<li class="list-group-item"><b>Name</b>: `+ Ndata.name + `</li>
								<li class="list-group-item"><b>Description</b>: `+ Ndata.description + `</li>
								<li class="list-group-item"><b>Price_small</b>: `+ Ndata.price_small + `</li>
								<li class="list-group-item"><b>Price_large</b>: `+ Ndata.price_large + `</li>
								<li class="list-group-item"><b>Small Portion Name</b>: `+ Ndata.small_portion_name + `</li>
								<li class="list-group-item"><b>Large Portion Name</b>:`+ Ndata.large_portion_name + ` </li>
							</ul>
							</div>
						<div class="col-md-2">
						</div>
						</div>
						</div>
				</div>`;
				});
			}
		}
	});
}