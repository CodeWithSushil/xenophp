<?php
pageAdd('include/header.php');
?>
<div class="container">
    <div id="loginForm" class="row justify-content-center">
        <div class="py-4 col-12 col-md-6 col-lg-4">
            <h2 class="text-uppercase text-center">register</h2>
            <form action="/submit-register" method="POST">
                <div class="mb-3">
                    <label class="form-label" for="name">Name:</label>
                    <input type="text" class="form-control" id="name" placeholder="Full name" required>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="email">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Email address" name="email" required>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="password">Password:</label>
                    <input type="password" class="form-control" id="password" placeholder="Set password" name="password" required>
                </div>
                <button type="submit" class="w-100 btn btn-dark text-uppercase">Register</button>
                <p class="mt-3 text-center">
                    I have already
                    <a href="/login" class="text-primary">login ?</a>
                </p>
            </form>
        </div>
    </div>
</div>

<?php
    pageAdd('include/footer.php');
?>
