
<head><script
  src="https://code.jquery.com/jquery-3.6.1.min.js"
  integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="
  crossorigin="anonymous"></script></head>

<form>

<div class="info"></div>

<label for="firstname">First Name:</label>
<input type="text" class="firstname" name="firstname" required placeholder="Enter First Name..."/><br><br> 
<label for="lastname">Last Name:</label>
<input type="text" class="lastname" name="lastname" required placeholder="Enter Last Name..."/><br><br> 
<label for="username">Preferred Username:</label>
<input type="text" class="username" name="username" required placeholder="Enter UserName..." minlength="5" /><br><br> 

<label for="email">Email:</label>
<input type="email" class="email" name="email" required placeholder="Enter Email..."/>  <br><br> 

<label for="name">Gender:</label>
<select name="gender" class="gender" required>
<option>Male</option>
<option>Female</option>
<option>Others</option>
</select><br><br> 

<label for="name">password:</label>
<input type="password" class="password" required name="password" placeholder="Enter Password..."/><br><br> 

<input type="submit" name="submit">



</form>


<script>
$(document).ready(function(e){
	e.PreventDefault();
	
	var fname = $(".firstname").val();
	var lname = $(".lastname").val();
	var uname = $(".email").val();
	var gen = $(".gender").val();
	var pass = $(".password").val();
	var loading = "processing....";
	
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
		
		beforeSend: function(){
			$("[input type=submit]").val().append(loading);

		},
		
		success: function(data){
			$(".info").html("Message: " + data);
		}
	});
	
	
	});
});
</script>
