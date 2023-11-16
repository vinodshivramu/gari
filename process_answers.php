<?php
require_once "./include/database-connection.php"; // Include your database connection

$correctAnswers = array(); // Initialize an array to store correct answers

// Fetch the correct answers from the Python table
$correctAnswersQuery = "SELECT MCQID, CorrectOption FROM Python";
$correctAnswersResult = mysqli_query($conn, $correctAnswersQuery);
while ($row = mysqli_fetch_assoc($correctAnswersResult)) {
  $correctAnswers[$row['MCQID']] = $row['CorrectOption'];
}

// Close the database connection
mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="LettStartDesign">
  <meta name="robots" content="noindex, nofollow">
  <title>Webnet Solutions</title>

  <link href="css/owl.carousel.min.css" rel="stylesheet">
  <link href="css/magnific-popup.css" rel="stylesheet">

  <link href="css/bootstrap.min.css" rel="stylesheet">

  <link href="css/remixicon.css" rel="stylesheet">
  <link href="css/aos.min.css" rel="stylesheet">


  <link href="css/style.min.css" rel="stylesheet">
  <style>
    body {
      font-family: Arial, sans-serif;
    }

    .container {
      margin: 20px auto;
      width: 100%;
    }

    .col {
      background-color: #f4f4f4;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }

    form {
      margin-top: 20px;
    }

    ul {
      list-style-type: none;
      padding-left: 0;
    }

    ul li {
      margin-bottom: 10px;
    }

    button[type="submit"] {
      background-color: #007bff;
      color: #fff;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      cursor: pointer;
    }

    label {
      display: inline-block;
      width: 150px;
      font-weight: bold;
    }

    input[type="text"] {
      width: 300px;
      padding: 5px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
  </style>
  <style>
    /* Custom CSS styles */
    .correct-answer {
      color: green;
      /* Set the color for correct answers */
      font-weight: bold;
    }
  </style>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>


<body class="scrollbar">

  <div class="page-wrapper">

    <nav class="navbar navbar-expand-lg navbar-default navbar-fixed navbar-light">
      <div class="container">

        <a class="navbar-brand logo" href="index.html">
          Webnet Solutions
        </a>
        <button type="button" class="navbar-toggler collapsed" data-bs-toggle="collapse"
          data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
          aria-label="Toggle navigation">
          <span></span>
          <span></span>
          <span></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="nav navbar-nav ms-auto navbar-center" id="mySidenav">
            <li class="nav-item">
              <a href="#home" class="nav-link" data-scroll-nav="0">Home</a>
            </li>
            <li class="nav-item">
              <a href="#courses" class="nav-link" data-scroll-nav="1">Courses</a>
            </li>

            <li class="nav-item">
              <a href="#faq" class="nav-link" data-scroll-nav="3">FAQ</a>
            </li>

          </ul>
        </div>

        <div class="right-bar ms-30">
          <button class="btn btn-primary btn-sm shadow-none login-btn" open-modal data-id="loginModal">
            <span class="d-none d-md-block">Login</span>
            <i class="ri-user-line d-block d-md-none"></i>
          </button>
        </div>
      </div>
    </nav>



    <section class="pt-100 pb-70" data-scroll-index="1">

      <div class="container">
        <div class="section-title text-center" data-aos="fade" data-aos-duration="400" data-aos-delay="400">

          <h2>Webnet Solutions</h2>
          <p class="sub">Software Training Institute,Mandya-571401</p>
          <h5>Call:7795296176</h5>
        </div>
        <div class="container mt-5">
          <p>Python programs related to the topics we covered in the previous class, such as print(), type(),
            input(), int(input()), and float(input())</p>

          <h1>PYTHON MCQ Questions</h1>
          <div class="container">
            <h1 class="mt-5">Correct Answers</h1>
            <ul class="list-group mt-3">
              <?php
              foreach ($correctAnswers as $mcqID => $correctOption) {
                echo "<li class='list-group-item'>";
                echo "<span class='correct-answer'>Question $mcqID: Correct answer is $correctOption</span>";
                echo "</li>";
              }
              ?>
            </ul>
          </div>
        </div>


      </div>

    </section>


    <footer class="footer-one">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-4">
            <a class="navbar-brand text-white" href="index.html">
              Webnet Solutions
            </a>
            <p class="my-30">Empowering individuals with industry-oriented software training. Our mission is to provide
              hands-on experience and innovative learning.</p>



          </div>

          <div class="col-lg-2 col-md-6">
            <h5>Explore</h5>
            <ul class="list-unstyled footer-links">
              <li><a href="index.html">Home</a></li>
              <li><a href="index.html">Courses</a></li>

              <li><a href="index.html">FAQ</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-6">
            <h5>Resources</h5>
            <ul class="list-unstyled footer-links">
              <li><a href="index.html">Privacy Policy</a></li>
              <li><a href="index.html">Terms & Conditions</a></li>
              <li><a href="index.html">Blog</a></li>
            </ul>
          </div>

          <div class="col-md-6 col-lg-4">
            <div class="mb-15">
              <h5>Contact Us</h5>
              <ul class="list-unstyled footer-links">
                <li>
                  <i class="ri-map-pin-line me-2 font-18"></i>
                  <span>above HP Gas office, opposite to police parade ground, Chamundeshwari nagar, Mandya, Karnataka
                    571401</span>
                </li>
                <li>
                  <i class="ri-phone-line me-2 font-18"></i>
                  <span>+91-7795296176</span>
                </li>
                <li>
                  <i class="ri-mail-send-line me-2 font-18"></i>
                  <span><a href="mailto:info@webnetsolutions.com">vinodram07@gmail.com</a></span>
                </li>
              </ul>
            </div>
            <div>

              <div class="subscribe-form mb-3">
                <h5>Stay Updated</h5>
                <li class="list-inline-item"><a href="https://www.instagram.com/webnet_solutions_official_page/"><i
                      class="ri-instagram-line"></i></a></li>
              </div>
            </div>
          </div>
        </div> <!-- end row -->
      </div>
      <!-- end container -->
      <div class="whatsapp-float" style="position: fixed; float: right;
      bottom: 20px;
      right: 20px; z-index: 9999;">
        <a href="https://api.whatsapp.com/send?phone=+917795296176&amp;text=Hi!">
          <img style="width: 70px; position: relative;" src="/images/wt.png">
          <span class="plus-background"></span>
        </a>
      </div>


      <div class="whatsapp-float" style="position: fixed;
  bottom: 25px;
  left: 20px;z-index: 9999">
        <a href="tel:7795296176"><img style="width:48px;    border-radius: 50%;" src="/images/call.png"></a>
      </div>
      <div class="footer-one-alt text-center">
        <div class="container">
          <p class="font-13 mb-0">Designed and © <span id="currentYear"></span> Webnet Solutions - 7795296176. <a
              href="https://webnetsolutions.co.in/" class="fw-normal text-white" target="_blank">Visit our website</a>.
          </p>
        </div>
      </div>
    </footer>

    <!--End Footer-->
  </div>
  <!--Auth Modals-->
  <!-- Modal -->
  <div class="modal fade auth-modal" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="mb-2" id="loginModalLabel">Login into account</h4>
          <p class="mb-0">Use your credentials to access your account.</p>
          <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close">
            <i class="ri-close-line font-18"></i>
          </button>
        </div>
        <div class="modal-body">
          <form id="loginForm" class="mb-30" name="loginForm" novalidate>
            <div class="form-group app-label mb-30">
              <input type="email" class="form-control" name="validation-email" id="email">
              <label for="email">Email Address</label>
              <div class="validation-error d-none">
                <p>Email must be a valid email address</p>
              </div>
            </div>
            <div class="form-group app-label mb-30">
              <input type="password" class="form-control" name="validation-password" id="password">
              <label for="password">Password</label>
              <div class="validation-error d-none">
                <p>This field is required</p>
              </div>
            </div>
            <div class="d-grid">
              <button class="btn btn-primary" type="submit">
                <span class="d-none"><i class="ri-loader-4-line spin h6 text-white"></i></span>
                <span class="d-block">Log In</span>
              </button>
            </div>
          </form>
          <div class="text-center">
            <p class="mb-1">
              <a routerlink="/recover" class="link">Forgot your password?</a>
            </p>
            <p class="mb-30">
              Don't have an account?
              <a href="javascript:void(0)" class="link" open-modal data-id="registerModal">Create account</a>
            </p>
            <div class="position-relative mb-30">
              <span class="login-border"></span>
              <p class="social-login">OR</p>
            </div>
            <div class="social-icons justify-content-center">
              <button class="social-icon btn-twitter text-white" type="button">
                <i class="ri-twitter-line"></i>
              </button>
              <button class="social-icon btn-facebook text-white" type="button">
                <i class="ri-facebook-line"></i>
              </button>
              <button class="social-icon btn-google text-white" type="button">
                <i class="ri-google-line"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade auth-modal" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="mb-2" id="registerModalLabel">Sign into account</h4>
          <p class="mb-0">Create an account to access an application.</p>
          <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close">
            <i class="ri-close-line font-18"></i>
          </button>
        </div>
        <div class="modal-body">
          <form id="signupForm" class="mb-30" name="signupForm" novalidate>
            <div class="form-group app-label mb-30">
              <input type="text" class="form-control" name="validation-fullname" id="name">
              <label for="name">Name</label>
              <div class="validation-error d-none">
                <p>This Field is required</p>
              </div>
            </div>
            <div class="form-group app-label mb-30">
              <input type="email" class="form-control" name="validation-email" id="email">
              <label for="email">Email Address</label>
              <div class="validation-error d-none">
                <p>Email must be a valid email address</p>
              </div>
            </div>
            <div class="form-group app-label mb-30">
              <input type="password" class="form-control" name="validation-password" id="password">
              <label for="password">Password</label>
              <div class="validation-error d-none">
                <p>This field is required</p>
              </div>
            </div>
            <div class="form-group app-label mb-30">
              <input type="password" class="form-control" name="validation-cpassword" id="cpassword">
              <label for="cpassword">Confirm Password</label>
              <div class="validation-error d-none">
                <p>This field is required</p>
              </div>
            </div>
            <div class="d-grid">
              <button class="btn btn-primary" type="submit">
                <span class="d-none"><i class="ri-loader-4-line spin h6 text-white"></i></span>
                <span class="d-block">Register</span>
              </button>
            </div>
          </form>
          <div class="text-center">
            <p class="mb-30">
              Already have an account?
              <a href="javascript:void(0)" class="link" open-modal data-id="loginModal">Login Here</a>
            </p>
            <div class="position-relative mb-30">
              <span class="login-border"></span>
              <p class="social-login">OR</p>
            </div>
            <div class="social-icons justify-content-center">
              <button class="social-icon btn-twitter text-white" type="button">
                <i class="ri-twitter-line"></i>
              </button>
              <button class="social-icon btn-facebook text-white" type="button">
                <i class="ri-facebook-line"></i>
              </button>
              <button class="social-icon btn-google text-white" type="button">
                <i class="ri-google-line"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script data-cfasync="false" src="js/email-decode.min.js"></script>
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>

  <script src="js/aos.min.js"></script>

  <script src="js/jquery.easing.min.js"></script>

  <script src="js/scrollIt.min.js"></script>

  <script src="js/jquery.validate.min.js"></script>
  <script src="js/additional-methods.min.js"></script>

  <script src="js/jquery.magnific-popup.min.js"></script>

  <script src="js/owl.carousel.min.js"></script>

  <script src="js/auth.min.js"></script>
  <script src="js/jquery.app.min.js"></script>



</body>

</html>