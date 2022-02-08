<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<title>Form Handling</title>
	<style type="text/css">
		.error{
			color: red;
		}

	</style>
</head>
<body>

<form id="myform" method="post" name="myform" action="form_data.php">
	<label>Name:</label>
	<input type="text" name="name" id="name"><br/><br/>
	<span class="error" id="name_err"></span><br>

	<label>Email:</label>
	<input type="text" name="email" id="email"><br/><br/> 
	<span class="error" id="email_err"></span>
	<span class="error" id="email_err2"></span><br>

	<label>Phone No:</label>
<input onkeypress="return event.charCode >= 48"  type="number" name="phone" id="phone"  ><br><br>
<span class="error" id="phone_err"></span>
<span class="error" id="phone_err2"></span><br>

<label>Password:</label>
<input type="password" name="Password" id="password"><br><br>
<span class="error" id="password_err"></span>
<span class="error" id="password_err2"></span><br>

<label>Pincode:</label>
<input type="number" name="Pincode" id="pincode"><br>
<span class="error" id="pincode_err"></span><br><br>
<span class="error" id="pincode_err2"></span><br><br>


 <label for="language">Choose a Language:</label>
  <select name="l" id="language">
    <option name="l" >PHP</option>
    <option name="l" >Html</option>
    <option name="l" >CSS</option>
    <option name="l" >JS</option>
  </select>


	<input type="submit" name="submit" value="submit">
	
</form>

<script type="text/javascript">


	$("#myform").submit(function(){
		var name = $("#name").val();
		var email = $("#email").val();
		var phone=$("#phone").val().toString();
		var password=$("#password").val().toString();
		var pincode=$("#pincode").val().toString();

		$("#name_err").text('');
		$("#email_err").text('');
		$("#email_err2").text('');
		$("#phone_err").text('');
		$("#phone_err2").text('');
		$("#password_err").text('');
		$("#password_err2").text('');
		$("#pincode_err").text('');
		$("#pincode_err2").text('');


		if(name == "" && email == "" && phone == "" && password == "" && pincode == "")
        {
            $("#name_err").text('This Field is required');
            $("#email_err").text('This Field is required');
            $("#phone_err").text('This Field is required');
            $("#password_err").text('This Field is required');
            $("#pincode_err").text('This Field is required');
        }
        else if(email == "" && phone == "" && password == "" && pincode == "")
        {
            $("#email_err").text('This Field is required');
            $("#phone_err").text('This Field is required');
            $("#password_err").text('This Field is required');
            $("#pincode_err").text('This Field is required');
        }
        else if(phone == "" && password == "" && pincode == "")
        {
             $("#phone_err").text('This Field is required');
            $("#password_err").text('This Field is required');
            $("#pincode_err").text('This Field is required');
        }
        else if(password == "" && pincode == "")
        {
            $("#password_err").text('This Field is required');
            $("#pincode_err").text('This Field is required');
        }
        else if(pincode == "")
        {
            $("#pincode_err").text('This Field is required');
        }


		if(name == ""){
			$("#name_err").text("This Field is required");
			return false;
		}

		if(email == ""){
			$("#email_err").text('This field is required');
			return false;

		}
		else{

			var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

			if(email.match(mailformat)){

			}
			else{
				$("#email_err2").text('Invalid email');
			return false;

			}
		}


		if(phone == ""){
			$("#phone_err").text('This field is required');
			return false;

		}
		else{

			if(phone.length==10){

			}
			else{
				$("#phone_err2").text('Mobile no must be of 10 digit');
				return false;
			}

		}

		if(password == ""){
			$("#password_err").text('This field is required');
			return false;
		}
		else
		{
			var pass_format=  /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/;
			if(password.match(pass_format)){

			}
			else{
				$("#password_err2").text('Invalid Password');
				return false;
			}
		}

		if(pincode == ""){
			$("#pincode_err").text('This Field is required');
			return false;
		}

		else{
			if(pincode.length==6){

			}
			else{
				$("#pincode_err2").text('Pincode should be of 6 digit');
				return false;
			}
		}

	});
		
</script>
</body>
</html>