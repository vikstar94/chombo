<div class="site-inner">
	<div class="content-sidebar-wrap">
		<main class="content">
			<div class="content_panel">
				<div class="title">Create account</div>
				<form id='login_form' action="http://localhost/chombo/index.php/users/register_do" method="POST">
					<input type="text" placeholder="First Name" autocomplete="off" name="credentials[first_name]"/>
					<input type="text" placeholder="Last Name" autocomplete="off" name="credentials[last_name]"/>
					<input type="username" placeholder="Username" autocomplete="off" name="credentials[username]"/>
					<input type="email" placeholder="Email" autocomplete="off" name="credentials[email]" />
					<input type="email" placeholder="Confirm Email" autocomplete="off" name="confirm_email" />
					<input type="password" placeholder="Password" name="credentials[password]"/>
					<input type="password" placeholder="Confirm Password" name="confirm_password"/>
					<input type="checkbox" id="agree"/>
					<label for="agree"></label><span>I have read and agree to the <a href="#">Terms of Use </a>and <a href="#">Privacy Policy</a></span>
					<button>Create Account</button>
				</form>
				<div class="social"> <span>or sign up with social media</span></div>
				<div class="buttons">
					<button class="facebook"><i class="fa fa-facebook"></i>Facebook</button>
					<button class="twitter"><i class="fa fa-twitter"></i>Twitter</button>
					<button class="google"><i class="fa fa-google-plus"></i>Google</button>
				</div>
				<div class="already">Already have an account? <a href="http://localhost/chombo/index.php/users/login">Sign In</a></div>
			</div>
		</main>
	</div>
</div>
  
 <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
 <!-- <script type="text/javascript">
 	//for every submit in this form to run the following function
 	jQuery("form").submit(function(e){
 		e.preventDefault();
 	
 		datastring = "";
 		jQuery("#login_form input").each(function()){

 		}
 	});

 </script> -->