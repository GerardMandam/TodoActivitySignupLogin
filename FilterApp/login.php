<!DOCTYPE html>
<html ng-app=" LoginApp">
		<title>FilApp</title>
		<head>
						<meta charset="utf-8">
						<meta name="viewport" content="width=device-width, initial-scale=1">
						<link rel="stylesheet" type="text/css" href="./css/editable2.css">
			</head>

					<body ng-controller="filCtrl">
						<div class ="layout">
						<h1>Login</h1>
									<div class="box"><label >:   <input type="text" id="textbox" ng-model="filfname" placeholder="your username" style="text-align:center;">
									<div class="box"><label>:   <input type="text" id="textbox" ng-model="filpwd" placeholder="your password" style="text-align:center;">

									</label><input type="button" id="button" value="Proceed" ng-click="pushData()"></inpu
									</div>


					</body>
				</div>
					

				<script src="./js/angular.min.js"></script>
				<script src="./js/editable.js"></script>
</html>
