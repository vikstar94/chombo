<div class="site-inner">
	<div class="content-sidebar-wrap">
		<main class="content">
			<div class="content_panel">
				<div class="title">Sign In</div>
				<form  action="http://localhost/chombo/index.php/users/login_do" method="POST" >
				<input type="text" placeholder="Username" name="credentials[username]" />
				<input type="password" placeholder="Password" name="credentials[password]"/>
				<input type="checkbox" id="rememberMe" name="credentials[remember]"/>
				<label for="rememberMe"> <span> remember me</span></label>
				<button type="submit">Create Account</button>
				</form>
				<div class="social"> <span>or sign up with social media</span></div>
				<div class="buttons">
					<button class="facebook"><i class="fa fa-facebook"></i>Facebook</button>
					<button class="twitter"><i class="fa fa-twitter"></i>Twitter</button>
					<button class="google"><i class="fa fa-google-plus"></i>Google</button>
				</div>
				<div class="already">Don't have an account? <a href="http://localhost/chombo/index.php/users/register">Sign Up Now</a></div>
			</div>
		</main>
	</div>
</div>
  
 <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>