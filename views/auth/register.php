<?php
pageAdd('include/header.php');
?>

<section class="container">
		<div id="loginForm" class="row justify-content-center">
			<div class="pt-4 col-12 col-md-6 col-lg-4">
				<div class="card border-0 shadow-lg px-2">
					<div class="card-body">
						<h2 class="mt-3 mb-4 text-primary" >Welcome to Sign Up</h2>
                        <form action="/submit-register" method="post">
                            <div class="mb-3">
								<label class="form-label"  for="name">Full name</label>
								<input class="form-control" type="text" name="name" id="name" placeholder="Full name" required />
							</div>
                            <div class="mb-3">
								<label class="form-label"  for="email">Email</label>
								<input class="form-control" type="text" name="email" id="email" placeholder="Email address" required />
							</div>
							<div class="mb-3">
								<label class="form-label"  for="password">Password</label>
								<input class="form-control" type="password" name="password" id="password" placeholder="Password" required />
                            </div>
							<button class="w-100 btn btn-indigo">Sign Up</button>
							<p class="mt-3 text-center lead" >
								Already have an account?
								<a class="none text-dark" href="/login">Sign In</a>
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
