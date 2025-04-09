<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('homepage-styles.css') }}">

        <link href="https://fonts.googleapis.com" rel="preconnect">
        <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">


      <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">



    </head>
    <body>
        <header id="header" class="header sticky-top">

            <div class="branding d-flex align-items-center">

              <div class="container position-relative d-flex align-items-center justify-content-between">
                <a href="index.html" class="logo d-flex align-items-center me-auto">

                  <h1 class="sitename">HSMS</h1>
                </a>

                <nav id="navmenu" class="navmenu">
                  <ul>
                    <li><a href="homepage.html" class="active">Home<br></a></li>
                    <li><a href="#about-us">About</a></li>

                      <ul>
                        <li><a href="#footer">Contact Us</a></li>
                     </ul>
                  <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
                </nav>

              </div>

            </div>

          </header>

          <div class="container fade-in">
            <div id="content" class="mt-5 fade-in">
                <div class="jumbotron mt-5 fade-in">
                    <h1 class="display-4 text-center">Welcome to Hospital Services</h1>
                    <h1 class="display-4 text-center fade-in">Management System</h1>
                    <p class="lead fade-in text-center">Your one-stop solution for all hospital management needs.</p>
                    <hr class="my-4 fade-in">
                    <div class="d-flex justify-content-center fade-in">
                        <a class="btn cta-btn btn-lg fade-in custom-btn" href="/login" role="button">Sign in</a>
                        <a class="btn cta-btn btn-lg fade-in custom-btn ms-3" href="/register" role="button">Register</a>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>


        <script>
            function scrollToServices() {
                document.getElementById('services').scrollIntoView({ behavior: 'smooth' });
            }
        </script>


        <script>
        document.addEventListener("DOMContentLoaded", function() {
            const elements = document.querySelectorAll('.fade-in');
            elements.forEach(element => {
                element.classList.add('show');
            });
        });
        </script>
        <br>
        <br>
        <section id="about-us" class="about-us">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <img src="abt-us.jpg"  alt="About Us" class="img-fluid">
                    </div>
                            <div class="col-md-6 ">
                                <div class="abt-us">
                                    <h2>About Us</h2>
                                    <br>
                                    <p>Welcome to our hospital. Our motto is always to provide the best treatment to our society. To provide quality health care and see that each and every patient gets optimal treatment is our goal. Our ingenuity medical project encompasses smart channeling, smooth medical record storing facilities, and efficient insurance claiming facilities. To tap advanced technology in an effort to make the experience of our patients simple is our dream, in order to gain easy access to health care. Our expert and committed staff will be with you at every step to support you in this regard, ensuring that your health and well-being remain our top priorities.</p>
                                </div>
                                <div class="vision">
                                    <h2>Vision</h2>
                                    <br>
                                    <p>"To Be the Best Healthcare Providers in Sri Lanka"</p>
                                    <br>
                                </div>
                                <div class="mission">
                                    <h2>Mission</h2>
                                    <br>
                                    <p>"To integrate advanced technology with

                                        empowered healthcare teams to deliver

                                        exceptional patient centric care."</p>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </section>
        <br>
        <br>

        <script>
            function scrollToServices() {
                document.getElementById('services').scrollIntoView({ behavior: 'smooth' });
            }
        </script>





        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
    <footer id="footer" class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5>Contact Us</h5>
                    <ul class="list-unstyled">

                        <li><i class="fas fa-phone"></i> +94 71 471 9634</li>
                        <li><i class="fas fa-envelope"></i> info@hsms.com</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="/">Home</a></li>
                        <li><a href="#about-us">About Us</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#contact-us">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>Follow Us</h5>
                    <ul class="list-unstyled social-links">
                        <li><a href="www.facebook.com"><img src="facebook.png"></a></li>
                        <li><a href="www.instagram.com"><img src="insta.jpeg"></a></li>
                        <li><a href="www.x.com"><img src="x.png"></a></li>
                    </ul>
                </div>
            </div>
            <div class="text-center mt-4">
                <p>&copy; 2024 Hospital Services Management. All rights reserved.</p>
            </div>
        </div>
    </footer>

    </html>


