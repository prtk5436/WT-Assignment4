<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Restaurant | MENU</title>
     <style type="text/css">
		* {
			margin: 0;
			padding: 0;
			box-sizing: content-box;
		}

		.header h1 {
			width: 100%;
			text-align: center;
			margin-left: 25px;
			font: bold;
			padding: 25px;
			font-family: Verdana, Geneva, Tahoma, sans-serif, bold;
			background-color: thistle;
			color: sienna;
		}

		#drop {

			background-color: lavenderblush;
			font-size: larger;
			font-family: Verdana, Geneva, Tahoma, sans-serif;
			margin: 30px;
		}

		.description {
			background-color: lightyellow;
			color: sienna;
			font-family: Verdana, Geneva, Tahoma, sans-serif;
			font-size: large;
			margin-left: 40px;
		}
	</style>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="jquery-3.5.1.min.js"></script>
	<script src="jscript.js" >
      /*  let base_url = "http://localhost/Assignment4/restaurant.php";
        $("document").ready(function(){
            getItemsNameList();
        });

        function getItemsNameList() {
            let url = base_url + "?req=item_name";
            $.get(url,function(data,success){
                              
        console.log(data.length);
        console.log(data);
            });
        }*/
    </script>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Restaurant Menu Item List</h1>
        </div>
        <br>
        <select id="drop" class="form-control">
            <option>please select menu</option>
        </select>
        <br><br>
        <div class="description"></div>
    </div>
</body>
</html>
