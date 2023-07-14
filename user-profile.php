<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once 'scripts/headScripts.php';?>
    <title>Mr. Yehezkiel - Profile</title>
    <meta name="description" content="We assist financially successful families and business owners in making smart financial decisions so they can enjoy the lifestyle of their dreams. Click here to learn more." />
</head>

<body data-theme="">        
    <?php require_once 'includes/appHeader.php';?>
    <?php require_once 'includes/appSidebar.php';?>

    <main id="main" class="main">

    <div class="pagetitle">
      <h1>THIS IS A PAGE ABOUT THE AUTHOR'S PROFILE</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item active"><a href="index.php"><i></i> Home</a></li>
          <li class="breadcrumb-item"><a href="user-profile.php"><i></i>Author Profile</a></li>
          <li class="breadcrumb-item"><a href="contact.php"><i></i>Contact</a></li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="row">
        <div class="col-xl-4">

          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

              <img src="assets/img/kiel.jpeg" alt="Profile" class="rounded-circle">
              <h2>Mr. YEHEZKIEL</h2>
              <div class="social-links mt-2">
                <a href="https://instagram.com/yehezkiell_w?igshid=NTc4MTIwNjQ2YQ==" class="instagram"><b class="bi bi-instagram"> @yehezkiell_w</b></a>
              </div>
            </div>
          </div>

        </div>

        <div class="col-xl-8">

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                </li>

              </ul>
              <div class="tab-content pt-2">

                  <h5 class="card-title">Profile Details</h5>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Full Name</div>
                    <div class="col-lg-9 col-md-8">YEHEZKIEL WAKKARY</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">University</div>
                    <div class="col-lg-9 col-md-8">University Methodist of Indonesia</div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Country</div>
                    <div class="col-lg-9 col-md-8">INDONESIA</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Address</div>
                    <div class="col-lg-9 col-md-8">Sedap Malam 3</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Phone</div>
                    <div class="col-lg-9 col-md-8">0877 7777 7777</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Email</div>
                    <div class="col-lg-9 col-md-8">yehezkiel@gmail.com</div>
                  </div>

               

        </div>
      </div>
    </section>

  </main><!-- End #main -->

    <?php require_once 'includes/footer.php';?>
    <?php require_once 'scripts/bodyScripts.php';?>
</body>

</html>