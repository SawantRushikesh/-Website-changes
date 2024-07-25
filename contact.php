<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Winneers - IT Solutions </title>
        <link rel="icon" href="img\wit-logo.png" type="image/x-icon">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Saira:wght@500;600;700&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
        <!-- Spinner Start -->
        <div id="spinner" class="show position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" role="status"></div>
        </div>
        <!-- Spinner End -->

        
        <!-- Topbar Start -->
        <div class="container-fluid bg-dark py-2 d-none d-md-flex">
            <div class="container">
                <div class="d-flex justify-content-between topbar">
                    <div class="top-info">
         
                        <small class="me-3 text-white-50"><a href="#"><i class="fas fa-envelope me-2 text-secondary"></i></a>info@winnersitsolutions.com</small>
                    </div>
                    <div id="note" class="text-secondary d-none d-xl-flex">  
                        
                     <!-- Display Current Marquee -->
    <marquee direction="left" behavior="scroll" scrollamount="3" scrolldelay="100">
                    <?php
        $hostname = 'localhost';
        $username = 'root';
        $password = '';
        $database = 'etms_db'; // Use the name of your database

        $conn = new mysqli($hostname, $username, $password, $database);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT text FROM marquee_text";
        $result = $conn->query($sql);

        $marqueeText = "";

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $marqueeText .= $row["text"] . "<br>";
            }
        }

        $conn->close();

        echo $marqueeText;
        ?>
    </marquee></div>
    <div class="top-link">
    <a href="https://www.facebook.com/your_facebook_page" target="_blank" class="bg-light nav-fill btn btn-sm-square rounded-circle"><i class="fab fa-facebook-f text-primary"></i></a>
    <a href="https://twitter.com/your_twitter_handle" target="_blank" class="bg-light nav-fill btn btn-sm-square rounded-circle"><i class="fab fa-twitter text-primary"></i></a>
    <a href="https://www.instagram.com/winners_it_solutions?igsh=OTAycXQxeXR3N2x2" target="_blank" class="bg-light nav-fill btn btn-sm-square rounded-circle"><i class="fab fa-instagram text-primary"></i></a>
    <a href="https://www.linkedin.com/your_linkedin_profile" target="_blank" class="bg-light nav-fill btn btn-sm-square rounded-circle"><i class="fab fa-linkedin-in text-primary"></i></a>
    <a href="/etms/index.php" class="bg-light nav-fill btn btn-sm-square rounded-circle admin-login-button me-0">
        <i class="fas fa-user text-primary"></i>
    </a>
</div>


                </div>
            </div>
        </div>

        
         
        <!-- Topbar End -->

            <!-- Navbar Start -->
    <div class="container-fluid bg-primary">
        <div class="container">
            <nav class="navbar navbar-dark navbar-expand-lg py-0">
                <a href="index.php" class="navbar-brand">
                <p>  <h3 class="text-white fw-bold d-block">  <img src="img\wit-logo.png" style="margin-right: 10px;" alt="Your Logo" width="70" height="70">Winners<span class="text-secondary">IT</span> </h3></p>
            </a>
                <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse bg-transparent" id="navbarCollapse">
                    <div class="navbar-nav ms-auto mx-xl-auto p-0">
                        <a href="index.php" class="nav-item nav-link active text-secondary">Home</a>
                        <a href="product.php" class="nav-item nav-link">Product</a>
                        <a href="online_training.php" class="nav-item nav-link">Online Training</a>
                        <a href="industrial_training.php" class="nav-item nav-link">Industrial Training</a>
                        <a href="wit_certification.php" class="nav-item nav-link">W-IT Certification</a>
                        <a href="https://store.shoopy.in/winnersitsolutions" class="nav-item nav-link">Order Books</a>
                        <a href="educational_projects.php" class="nav-item nav-link">Educational Projects</a>
                        <a href="contact.php" class="nav-item nav-link">Contact Us</a>
                    </div>
                </div>
               
                
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


        
        <!-- Page Header Start -->
        <div class="container-fluid page-header py-5">
            <div class="container text-center py-5">
                <h1 class="display-2 text-white mb-4 animated slideInDown">Contact Us</h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item" aria-current="page">Contact</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Page Header End -->


        <!-- Fact Start -->
        <div class="container-fluid bg-secondary py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 wow fadeIn" data-wow-delay=".1s">
                        <div class="d-flex counter">
                            <h1 class="me-3 text-primary counter-value">99</h1>
                            <h5 class="text-white mt-1">Success in getting happy customer</h5>
                        </div>
                    </div>
                    <div class="col-lg-3 wow fadeIn" data-wow-delay=".3s">
                        <div class="d-flex counter">
                            <h1 class="me-3 text-primary counter-value">25</h1>
                            <h5 class="text-white mt-1">Thousands of successful business</h5>
                        </div>
                    </div>
                    <div class="col-lg-3 wow fadeIn" data-wow-delay=".5s">
                        <div class="d-flex counter">
                            <h1 class="me-3 text-primary counter-value">120</h1>
                            <h5 class="text-white mt-1">Total clients who love HighTech</h5>
                        </div>
                    </div>
                    <div class="col-lg-3 wow fadeIn" data-wow-delay=".7s">
                        <div class="d-flex counter">
                            <h1 class="me-3 text-primary counter-value">5</h1>
                            <h5 class="text-white mt-1">Stars reviews given by satisfied clients</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fact End -->

<!-- Contact Start -->
<div class="container-fluid py-5 mt-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
            <h5 class="text-primary">Get In Touch</h5>
            <h1 class="mb-3">Contact for any query</h1>
            <p class="mb-2">The contact form is currently inactive. Get a functional and working contact form with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code, and you're done. <a href="https://htmlcodex.com/contact-form">Download Now</a>.</p>
        </div>
        <div class="contact-detail position-relative p-5">
            <div class="row g-5 mb-5 justify-content-center">
                <div class="col-xl-4 col-lg-6 wow fadeIn" data-wow-delay=".3s">
                    <div class="d-flex bg-light p-3 rounded">
                        <div class="flex-shrink-0 btn-square bg-secondary rounded-circle" style="width: 64px; height: 64px;">
                            <i class="fas fa-map-marker-alt text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h4 class="text-primary">Address</h4>
                            <a href="https://goo.gl/maps/Zd4BCynmTb98ivUJ6" target="_blank" class="h5">A/P Kesnand,Taleranwadi
                            Tal-Haveli,dist-Pune</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 wow fadeIn" data-wow-delay=".5s">
                    <div class="d-flex bg-light p-3 rounded">
                        <div class="flex-shrink-0 btn-square bg-secondary rounded-circle" style="width: 64px; height: 64px;">
                            <i class="fa fa-phone text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h4 class="text-primary">Call Us</h4>
                            <a class="h5" href="tel:+0123456789" target="_blank">8411850101</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 wow fadeIn" data-wow-delay=".7s">
                    <div class="d-flex bg-light p-3 rounded">
                        <div class="flex-shrink-0 btn-square bg-secondary rounded-circle" style="width: 64px; height: 64px;">
                            <i class="fa fa-envelope text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h4 class="text-primary">Email Us</h4>
                            <a class="h5" href="mailto:info@example.com" target="_blank">info@winnersitsolutions.com</a>
                        </div>
                    </div>
                </div>
            </div>



            <!--map-->
            <div class="row g-5">
    <div class="col-lg-6 wow fadeIn" data-wow-delay=".3s">
        <div class="p-5 h-100 rounded contact-map position-relative">
            <iframe class="rounded w-100 h-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d242108.98104584246!2d73.74020280481477!3d18.531033669531368!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2c3f2d72ad451%3A0xd522f7dc1f0124ef!2sWinners%20IT%20Solutions!5e0!3m2!1sen!2sin!4v1721308545756!5m2!1sen!2sin" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <a href="https://maps.app.goo.gl/zG8BG5KWHP5Tvc4v5" target="_blank" class="stretched-link"></a>
        </div>
    </div>
    <div class="col-lg-6 wow fadeIn" data-wow-delay=".5s">
        <div class="p-5 rounded contact-form">
            <form method="post" action="">
                <div class="mb-4">
                    <input type="text" class="form-control border-0 py-3" name="name" placeholder="Your Name" required>
                </div>
                <div class="mb-4">
                    <input type="email" class="form-control border-0 py-3" name="email" placeholder="Your Email" required>
                </div>
                <div class="mb-4">
                    <input type="text" class="form-control border-0 py-3" name="project" placeholder="Project" required>
                </div>
                <div class="mb-4">
                    <textarea class="w-100 form-control border-0 py-3" rows="6" cols="10" name="msg" placeholder="Message" required></textarea>
                </div>
                <div class="text-start">
                    <button class="btn bg-primary text-white py-3 px-5" name="send" type="submit">Send Message</button>
                </div>
            </form>
        </div>
    </div>
</div>

<style>
    .position-relative {
        position: relative;
    }
    .stretched-link {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 1;
        background: rgba(255, 255, 255, 0);
    }
</style>





        </div>
    </div> 
</div>

       <?php
              
              
            //Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


$name = '';
$email = '';
$project = '';
$msg = '';

if(isset($_POST['send'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $project = $_POST['project'];
    $msg = $_POST['msg'];
}


//Load Composer's autoloader
require 'Exception.php';
require 'PHPMailer.php';
require 'SMTP.php';
//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'balajiguvala@gmail.com';                     //SMTP username
    $mail->Password   = 'zkbuyfufsbzjurkp';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('balajiguvala@gmail.com', 'Mailer');
    $mail->addAddress('balajiguvala20@gmail.com', ' User');     //Add a recipient
   
    
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'test mail';
    $mail->Body    = "Sender Name- $name<br> Sender Email- $email <br> Project- $project <br> Message- $msg";
    

    $mail->send();
    echo '';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
       ?>
        <!-- Contact End -->


        <!-- Footer Start -->
         <div class="container-fluid footer bg-dark wow fadeIn" data-wow-delay=".3s">
            <div class="container pt-5 pb-4">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <a href="index.html">
                            <h1 class="text-white fw-bold d-block">Winners It<span class="text-secondary"></span> </h1>
                        </a>
                        <p class="mt-4 text-light">Get a Responsive Website that presents optimal viewing experience across a range of digital media platforms, and who can do it better than us for you? Portal Websites, the doorway to all cyber world explorations, are mushrooming! And you find all that the good ones have in common in our web designs.

</p>
                        <div class="d-flex hightech-link">
                            <a href="" class="btn-light nav-fill btn btn-square rounded-circle me-2"><i class="fab fa-facebook-f text-primary"></i></a>
                            <a href="" class="btn-light nav-fill btn btn-square rounded-circle me-2"><i class="fab fa-twitter text-primary"></i></a>
                            <a href="" class="btn-light nav-fill btn btn-square rounded-circle me-2"><i class="fab fa-instagram text-primary"></i></a>
                            <a href="" class="btn-light nav-fill btn btn-square rounded-circle me-0"><i class="fab fa-linkedin-in text-primary"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <a href="#" class="h3 text-secondary">Short Link</a>
                        <div class="mt-4 d-flex flex-column short-link">
                            <a href="" class="mb-2 text-white"><i class="fas fa-angle-right text-secondary me-2"></i>About us</a>
                            <a href="" class="mb-2 text-white"><i class="fas fa-angle-right text-secondary me-2"></i>Contact us</a>
                            <a href="" class="mb-2 text-white"><i class="fas fa-angle-right text-secondary me-2"></i>Our Services</a>
                            <a href="" class="mb-2 text-white"><i class="fas fa-angle-right text-secondary me-2"></i>Our Projects</a>
                            <a href="" class="mb-2 text-white"><i class="fas fa-angle-right text-secondary me-2"></i>Latest Blog</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <a href="#" class="h3 text-secondary">Help Link</a>
                        <div class="mt-4 d-flex flex-column help-link">
                            <a href="" class="mb-2 text-white"><i class="fas fa-angle-right text-secondary me-2"></i>Terms Of use</a>
                            <a href="" class="mb-2 text-white"><i class="fas fa-angle-right text-secondary me-2"></i>Privacy Policy</a>
                            <a href="" class="mb-2 text-white"><i class="fas fa-angle-right text-secondary me-2"></i>Helps</a>
                            <a href="" class="mb-2 text-white"><i class="fas fa-angle-right text-secondary me-2"></i>FQAs</a>
                            <a href="" class="mb-2 text-white"><i class="fas fa-angle-right text-secondary me-2"></i>Contact</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <a href="#" class="h3 text-secondary">Contact Us</a>
                        <div class="text-white mt-4 d-flex flex-column contact-link">
                            <a href="#" class="pb-3 text-light border-bottom border-primary"><i class="fas fa-map-marker-alt text-secondary me-2"></i> A/P Kesnand,Taleranwadi
                            Tal-Haveli,dist-Pune</a>
                            <a href="#" class="py-3 text-light border-bottom border-primary"><i class="fas fa-phone-alt text-secondary me-2"></i> 8411850101</a>
                            <a href="#" class="py-3 text-light border-bottom border-primary"><i class="fas fa-envelope text-secondary me-2"></i>info@winnersitsolutions.com</a>
                        </div>
                    </div>
                </div>
                <hr class="text-light mt-5 mb-4">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start">
                        <span class="text-light"><a href="#" class="text-secondary"><i class="fas fa-copyright text-secondary me-2"></i>Your Site Name</a>, All right reserved.</span>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        <span class="text-light">Designed By<a href="https://htmlcodex.com" class="text-secondary">HTML Codex</a> Distributed By <a href="https://themewagon.com">ThemeWagon</a></span>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-secondary btn-square rounded-circle back-to-top"><i class="fa fa-arrow-up text-white"></i></a>

        
        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
                
  <!-- WhatsApp Icon -->
<a href="https://api.whatsapp.com/send?phone=+91%208411850101&text=Hello!%20We%20are%20interested%20to%20know%20more%20about%20all%20the%20services%20you%20provide..." style="position: fixed; top: 70%; left: 20px; transform: translateY(-50%); z-index: 999;">
  <img src="img\whatsapp.png" alt="WhatsApp Icon" style="width: 50px; height: auto; cursor: pointer;">
</a>

<!-- Contact Icon -->
<a href="tel:+91 8411850101" style="position: fixed; top: 70%; right: 20px; transform: translateY(-50%); z-index: 999;">
  <img src="img\phone-call.png" alt="Contact Icon" style="width: 50px; height: auto; cursor: pointer;">
</a>

    </body>

</html>