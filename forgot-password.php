<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once 'scripts/headScripts.php'; ?>
    <title>Forgot Password : McCormick Financial Advisors</title>
    <meta name="description" content="We assist financially successful families and business owners in making smart financial decisions so they can enjoy the lifestyle of their dreams. Click here to learn more." />
</head>

<body data-theme="">

    <main>
        <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center bg-sky py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                        <div class="d-flex justify-content-center py-4">
                            <a href="dashboard.php" class="logo d-flex align-items-center w-auto">
                                <!-- <img src="assets/img/logo.png" alt=""> -->
                            </a>
                        </div><!-- End Logo -->

                        <div class="card mb-3">

                            <div class="card-body">

                                <div class="pt-2 pb-2">
                                    <h5 class="card-title text-center pb-0 fs-4">Forgot Password</h5>
                                    <p class="text-center small">Lorem, ipsum dolor sit amet dolor sit.</p>
                                </div>

                                <form class="row g-3 needs-validation" novalidate>

                                    <div class="col-12">
                                        <label for="" class="form-label">Username or Email</label>
                                        <div class="input-group has-validation">
                                            <span class="input-group-text" id="inputGroupPrepend"><i class="bi bi-person"></i></span>
                                            <input type="text" name="username" class="form-control" id="" required>
                                            <div class="invalid-feedback">Please enter your username.</div>
                                        </div>
                                    </div>                                 

                                    <div class="col-12 mt-4">
                                        <a href="dashboard.php" class="r-btn r-btn-primary btn-block ft-uppercase">
                                            <i class="bi bi-send ft-sm mr-2"></i> Send Password Reset Link

                                        </a>

                                    </div>
                                    <div class="col-12">
                                        <p class="small mb-2">Don't have account? <a href="signup.php">Create an account</a></p>
                                    </div>
                                </form>

                            </div>
                        </div>

                        <!-- <div class="credits">                    
                        Designed by <a href=""></a>
                    </div> -->

                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php require_once 'scripts/bodyScripts.php'; ?>
</body>

</html>