<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once 'scripts/headScripts.php'; ?>
    <title>Signup : McCormick Financial Advisors</title>
    <meta name="description" content="We assist financially successful families and business owners in making smart financial decisions so they can enjoy the lifestyle of their dreams. Click here to learn more." />
</head>

<body data-theme="">

    <main>
        <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center bg-sky py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-6 d-flex flex-column align-items-center justify-content-center">

                        <div class="d-flex justify-content-center py-4">
                            <a href="dashboard.php" class="logo d-flex align-items-center w-auto">
                                <!-- <img src="assets/img/logo.png" alt=""> -->
                            </a>
                        </div>

                        <div class="card mb-3">

                            <div class="card-body">

                                <div class="pt-2">
                                    <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
                                    <p class="text-center small">Enter your personal details to create account</p>
                                </div>

                                <form class="row g-3 needs-validation" novalidate>
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-6">
                                                <label for="" class="form-label">Username or Email</label>
                                                <div class="input-group has-validation">
                                                    <span class="input-group-text" id="inputGroupPrepend"><i class="bi bi-person"></i></span>
                                                    <input type="text" name="username" class="form-control" id="" required>
                                                    <div class="invalid-feedback">Please enter your username.</div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <label for="yourEmail" class="form-label">Your Email</label>
                                                <div class="input-group has-validation">
                                                    <span class="input-group-text" id="inputGroupPrepend"><i class="bi bi-envelope"></i></span>
                                                    <input type="email" name="email" class="form-control" id="yourEmail" required>
                                                    <div class="invalid-feedback">Please enter a valid Email!</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-6">
                                                <label for="yourUsername" class="form-label">Username</label>
                                                <div class="input-group has-validation">
                                                    <span class="input-group-text" id="inputGroupPrepend"><i class="bi bi-at"></i></span>
                                                    <input type="text" name="username" class="form-control" id="yourUsername" required>
                                                    <div class="invalid-feedback">Please choose a username.</div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <label for="yourPassword" class="form-label">Password</label>
                                                <div class="input-group has-validation">
                                                    <span class="input-group-text" id="inputGroupPrepend"><i class="bi bi-key"></i></span>
                                                    <input type="text" name="password" class="form-control" id="yourPassword" required>
                                                    <div class="invalid-feedback">Please enter your password!</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" required>
                                            <label class="form-check-label" for="acceptTerms">I agree and accept the <a href="#">terms and conditions</a></label>
                                            <div class="invalid-feedback">You must agree before submitting.</div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="r-btn r-btn-primary btn-block ft-uppercase w-100" type="submit">
                                            <i class="bi bi-pencil-square ft-sm mr-2"></i> Create Account</button>
                                    </div>
                                    <div class="col-12">
                                        <p class="small">Already have an account? <a href="login.php">Log in</a></p>
                                    </div>
                                </form>

                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php require_once 'scripts/bodyScripts.php'; ?>
</body>

</html>