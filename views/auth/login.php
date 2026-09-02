<?php
pageAdd('include/header.php');
?>

<section class="container">
		<div id="loginForm" class="row justify-content-center">
			<div class="py-4 col-12 col-md-6 col-lg-4">
				<div class="card border-0 shadow-lg px-2">
					<div class="card-body">
						<h2 class="mt-3 mb-4 text-primary" >Welcome to Sign In</h2>
						<form action="/submit-login" method="post">
							<div class="mb-3">
								<label class="form-label"  for="email">Email</label>
								<input class="form-control" type="email" name="email" id="email" placeholder="Email address" required />
							</div>
							<div class="mb-3">
								<label class="form-label"  for="password">Password</label>
								<input class="form-control" type="password" name="password" id="password" placeholder="Password" required />
							</div>
							<div class="mb-3 between">
								<label class="form-checkbox"  for="username">
                                <input class="form-checkbox" type="checkbox" name="remember_me" value="<?=remember_me();?>" checked="checked"/>
									Remember Me
								</label>
								<a class="text-dark none" href="#">Forgot Password</a>
							</div>
							<button class="w-100 btn btn-indigo">Sign In</button>
							<p class="mt-3 text-center lead" >
								Don't have an account?
								<a class="none text-dark" href="/register">Sign Up</a>
							</p>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php
    pageAdd('include/footer.php');
?>
