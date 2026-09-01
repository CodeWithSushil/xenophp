<?php
pageAdd('include/header.php');
?>
<div class="container">
    <div id="loginForm" class="row justify-content-center">
        <div class="col-12 col-md-6 col-lg-4 py-4">
            <h2 class="text-uppercase text-center">Login</h2>
            <form action="/submit-login" method="POST">
                <div class="mb-3">
                    <label class="form-label" for="email">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="password">Password:</label>
                    <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" required>
                </div>
                <button type="submit" class="w-100 btn btn-dark text-uppercase">login</button>
                <p class="mt-3 text-center">
                    I want to
                    <a href="register" class="text-primary">Register</a>
                </p>
            </form>
        </div>
    </div>
</div>

<?php
    pageAdd('include/footer.php');
?>
