
<head><script
  src="https://code.jquery.com/jquery-3.6.1.min.js"
  integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="
  crossorigin="anonymous"></script></head>

<form action="auth.blade.php" method="POST">

<div class="info"></div>

<label for="firstname">First Name:</label>
<input type="text" class="firstname" name="firstname" placeholder="Enter First Name..."/><br><br> 
<label for="lastname">Last Name:</label>
<input type="text" class="lastname" name="lastname" placeholder="Enter Last Name..."/><br><br> 
<label for="username">Preferred Username:</label>
<input type="text" class="username" name="username" placeholder="Enter UserName..."/><br><br> 

<label for="email">Email:</label>
<input type="email" class="email" name="email" placeholder="Enter Email..."/>  <br><br> 

<label for="name">Gender:</label>
<select name="gender" class="gender">
<option>Male</option>
<option>Female</option>
<option>Others</option>
</select><br><br> 

<label for="name">password:</label>
<input type="password" class="password" name="password" placeholder="Enter Password..."/><br><br> 

<input type="submit" name="submit">



</form>


<script>
$(document).ready(function(){
	
	var fname = $(".firstname").val();
	var lname = $(".lastname").val();
	var uname = $(".email").val();
	var gen = $(".gender").val();
	var pass = $(".password").val();
	
	$.ajax({
		url: "auth.blade.php",
		method: POST,
		async: true,
		data: {
		firstname: fname,	
		lastname: lname,
		username: uname,
		gender: gen,
		password: pass,
		submit: "submit"
		},
		success: function(data){
			$(".info").html("Message: " + data);
		}
	});
	
	
	});
});
</script>