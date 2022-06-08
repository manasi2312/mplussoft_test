<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Index</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
	.content{
		max-width: 500px;
    	margin: auto;
	}

	.container{
		margin-top: 50px;
	}

	h1{
		text-align: center;
    	font-family: emoji;
	}

	.btn{
		font-size: larger;
	}

	table {
	  	font-family: arial, sans-serif;
	  	border-collapse: collapse;
	  	width: 100%;
	}

	td, th {
  		border: 1px solid #dddddd;
  		text-align: left;
  		padding: 8px;
	}

	h4{
		float: right;
    	margin: 40px 0px;
	}
</style>
<script>
	function textOnly(id)
 {
    var element = document.getElementById(id);
    element.value = element.value.replace(/[^A-Za-z]/g, "");
  }
</script>
<body>
	<div class="container">
		<div class="content">
			<div class="row">
				<h1>User Registration Form</h1>
					<form action="{{config('app.baseURL')}}/registration" id="form" method="post" enctype="multipart/form-data">
						<div class="form-group">
							<label>Name</label>
							<input type="text" name="name" id="name" class="form-control" placeholder="Please enter your name" oninput="textOnly(this.id);">
						</div>
						<div class="form-group">
							<label>Email ID</label>
							<input type="email" name="email" id="email" class="form-control" placeholder="Please enter your email id">
						</div>
						<div class="form-group">
							<label>Contact Number</label>
							<input type="tel" name="contact" id="contact" class="form-control" placeholder="Please enter your valid contact number">
						</div>
						<div class="form-group">
							<label>City</label>
							<input type="text" name="city" id="city" class="form-control" placeholder="Please enter your city">
						</div>
						<div class="form-group">
							<label>Profile Image</label>
								<input type="file" id="profile_image" name="profile_image" class="form-control" placeholder="Profile Image"/>
						</div>
						<div class="form-group">
							<label>Address</label>
							<textarea name="address" id="address" class="form-control" placeholder="Please enter your address" rowspan="5" colspan="30" ></textarea>
						</div>	
						<div class="form-group">
							<label>Password</label>
							<input type="password" name="password" id="password" class="form-control" placeholder="Please enter your password">
						</div>				
						<div class="form-group">
							<label>Confirm Password</label>
							<input type="password" name="confirm_password" id="confirm_password" class="form-control" placeholder="Please confirm your password">
						</div>
						<div class="form-group">
							<label>Designation</label>
							<select class="form-control" name="role" id="role" required/>
							<option value="" selected disabled>Select</option>
							<option value="1">Admin</option>
							<option value="2">User</option>
							</select>
						</div>
						<div class="form-group" style="text-align: center;">
							<button type="submit" class="btn btn-block btn-primary">
								Submit
							</button>			
						</div>
						
					</form>	
					<p style="text-align: center;">
                        To login your account.  <span style="color:#337ab7;"><a href="{{config('app.baseURL')}}/login">Click here</span></a>
                    </p>                     						
			</div>	
		</div>	
	</div>
</body>
</html>
