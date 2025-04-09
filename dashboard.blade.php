<x-app-layout>
    <x-slot name="header">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('homepage-styles.css') }}">

        <link href="https://fonts.googleapis.com" rel="preconnect">
        <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">


      <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    </x-slot>

    @if(Auth::user()->user_type == "doctor"){

        <div class="container fade-in" style="position: relative; background-image: url('{{ asset('doctor-banner.jpg') }}'); background-size: cover; background-position: center; height: 100vh; padding: 50px 0;">

        <div class="container fade-in">
            <div id="content" class="mt-5 fade-in">

                <div class="jumbotron mt-5 fade-in">
                    <h1 class="display-4 text-center">Welcome Doctor's Portal</h1>

                    <p class="lead fade-in text-center" style="color:#ffffff">Facilitates Your All Proffesional Work.</p>
                    <hr class="my-4 fade-in">
                    <div class="d-flex justify-content-center fade-in">
                        <a class="btn btn-primary btn-lg fade-in" href="#services" role="button" onclick="scrollToServices()">Explore Our Services</a>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <br>
        <br>

        <section id="services" class="services mt-5">
            <div class="container">
                <h2>Our Services</h2>
                <div id="services-container" class="row">
                    <div class="col-md-4">
                        <div class="card" style="width: 18rem;">
                            <img src="appview.jpg" class="card-img-top" alt="Service 1">
                            <div class="card-body">
                                <h5 class="card-title text-center">View Appointments</h5>
                                <p class="card-text text-center">View the appointments sheduled for you.</p>
                                <div class="d-flex justify-content-center">
                                    <a href="/viewappointments" class="btn btn-primary">View</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" style="width: 18rem;">
                            <img src="med-records.jpg" class="card-img-top" alt="Service 2">
                            <div class="card-body">
                                <h5 class="card-title text-center">Store Medical Records</h5>
                                <p class="card-text text-center">Store Patient's Medical Records.</p>
                                <br>
                                <div class="d-flex justify-content-center">
                                    <a href="{{ route('medical_records.create') }}" class="btn btn-primary">Store Records</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex align-items-stretch">
                        <div class="card" style="width: 18rem;">
                            <img src="record-view.jpg" class="card-img-top" alt="Service 2">
                            <div class="card-body">
                                <h5 class="card-title text-center">View Records</h5>
                                <p class="card-text text-center">View Stored Records.</p>
                                <div class="d-flex justify-content-center">
                                    <a href="{{ route('doctor.records.form') }}" class="btn btn-primary">View</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <script>
            function scrollToServices() {
                document.getElementById('services').scrollIntoView({ behavior: 'smooth' });
            }
        </script>
    }

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
        <br>





    }@elseif(Auth::user()->user_type == "patient"){

        <div class="container fade-in" style="position: relative; background-image: url('{{ asset('patient-banner.jpg') }}'); background-size: cover; background-position: center; height: 100vh; padding: 50px 0;">

            <!-- Background Overlay for better text visibility -->



        <div class="container fade-in">
            <div id="content" class="mt-5 fade-in">

                <div class="jumbotron mt-5 fade-in">
                    <h1 class="display-4 text-center">Welcome to Patient's Portal</h1>

                    <p class="lead fade-in text-center">Your one-stop solution for all hospital management needs.</p>
                    <hr class="my-4 fade-in">
                    <div class="d-flex justify-content-center fade-in">
                        <a class="btn btn-primary btn-lg fade-in" href="#services" role="button" onclick="scrollToServices()">Explore Our Services</a>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <br>
        <br>

        <div class="container mt-5">
            <div id="fade-in-container" style="opacity: 0; transform: translateY(20px); transition: opacity 1.5s ease-in-out, transform 1.5s ease-in-out;">
                <section class="p-4" style="background: linear-gradient(to right, rgba(255, 255, 255, 0.9), rgba(240, 240, 240, 0.9)); border-radius: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);">
                    <p class="lead text-center" style="font-size: 1.5rem; line-height: 1.6; color: #222222;">
                        <i class="fas fa-heartbeat" style="margin-right: 10px;"></i> <!-- FontAwesome icon -->
                        Welcome to a world of convenience! Our patient portal offers seamless access to essential services, including smart doctor channeling, easy access to your medical records, and a hassle-free insurance claim process. Explore our comprehensive solutions designed to support your healthcare journey every step of the way.
                    </p>
                </section>
            </div>
        </div>

        <script>
            // Trigger fade-in and slide effect when the page has fully loaded
            document.addEventListener('DOMContentLoaded', function() {
                var fadeInElement = document.getElementById('fade-in-container');
                fadeInElement.style.opacity = '1'; // Make the element fully visible
                fadeInElement.style.transform = 'translateY(0)'; // Slide into view
            });
        </script>




        <br>




        <section id="services" class="services mt-5">
            <div class="container">
                <h2>Our Services</h2>
                <div id="services-container" class="row">
                    <div class="col-md-4">
                        <div class="card" style="width: 18rem;">
                            <img src="channeling.jpg" class="card-img-top" alt="Service 1">
                            <div class="card-body">
                                <h5 class="card-title text-center">Channeling</h5>
                                <p class="card-text text-center">Facilitating the Smart Channeling Facility.</p>
                                <div class="d-flex justify-content-center">
                                    <a href="{{ route('appointments.create') }}" class="btn btn-primary">Channel a Doctor</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" style="width: 18rem;">
                            <img src="appview.jpg" class="card-img-top" alt="Service 2">
                            <div class="card-body">
                                <h5 class="card-title text-center">View Appointments</h5>
                                <p class="card-text text-center">View Your Scheduled Appointments.</p>
                                <div class="d-flex justify-content-center">
                                    <a href="/patient/appointments" class="btn btn-primary">View</a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4 d-flex align-items-stretch">
                        <div class="card" style="width: 18rem;">
                            <img src="record-view.jpg" class="card-img-top" alt="Service 2">
                            <div class="card-body">
                                <h5 class="card-title text-center">View Medical Records</h5>
                                <p class="card-text text-center">View Your Stored Medical Records.</p>
                                <div class="d-flex justify-content-center">
                                    <a href="{{ route('medical_records.index') }}" class="btn btn-primary">View</a>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <div id="services-container" class="row d-flex justify-content-center align-items-center" style="height: 100vh;">
                    <div class="card" style="width: 18rem;">
                        <img src="insclaimview.jpg" class="card-img-top" alt="Service 2">
                        <div class="card-body">
                            <h5 class="card-title text-center">Claim Insurance</h5>
                            <p class="card-text text-center">Claim You Insurarance Here</p>
                            <div class="d-flex justify-content-center">
                                <a href="{{ route('claim-insurance.create') }}" class="btn btn-primary">Claim</a>
                            </div>
                        </div>
                    </div>
                </div>




        </section>
        <br>
        <br>



    }@else{
        <div class="container fade-in" style="position: relative; background-image: url('{{ asset('insurance-consultation.jpg') }}'); background-size: cover; background-position: center; height: 100vh; padding: 50px 0;">




            <div class="container fade-in" style="position: relative; z-index: 2;">
                <div id="content" class="mt-5 fade-in">

                    <div class="jumbotron mt-5 fade-in text-white">
                        <h1 class="display-4 text-center" style="font-size: 3rem;  color: #1977cc;">Welcome to Insurance Portal</h1>

                        <p class="lead fade-in text-center" style="font-size: 1.5rem; color: #0a0a0a">Your one-stop solution for all Insurance management.</p>
                        <hr class="my-4 fade-in" style="border-top: 2px solid #fff;">
                        <div class="d-flex justify-content-center fade-in">
                            <a class="btn btn-primary btn-lg fade-in" href="#services" role="button" onclick="scrollToServices()" style="padding: 10px 30px; font-size: 1.2rem; transition: 0.3s ease;">
                                Explore Our Services
                            </a>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <br>
        <br>

        <section id="services" class="services mt-5">
            <div class="container">
                <h2 class="text-center">Our Services</h2>
                <div id="services-container" class="row justify-content-center">
                    <!-- First Service Card -->
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="card h-100">
                            <img src="insclaimview.jpg" class="card-img-top" alt="Service 1">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title text-center">View Claims</h5>
                                <p class="card-text text-center">View Medical Claims.</p>
                                <div class="mt-auto d-flex justify-content-center">
                                    <a href="{{ route('insurance-claims.index') }}" class="btn btn-primary">View Claims</a>
                                </div>
                            </div>
                        </div>
                    </div>
        </section>
    }
        @endif

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
                    <br>
                    <ul class="list-unstyled">

                        <li><i class="fas fa-phone"></i><b>Tel:</b> +94 71 471 9634</li>
                        <li><i class="fas fa-envelope"></i><b>E-Mail:</b> info@hsms.com</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>Quick Links</h5>
                    <br>
                    <ul class="list-unstyled">
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about-us">About Us</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#contact-us">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>Follow Us</h5>
                    <br>
                    <ul class="list-unstyled social-links">
                        <li><a href="#"><img src="facebook.png"></a></li>
                        <li><a href="#"><img src="insta.jpeg"></a></li>
                        <li><a href=""><img src="x.png"></a></li>
                    </ul>
                </div>
            </div>
            <div class="text-center mt-4">
                <hr>
                <p>&copy; 2024 Hospital Services Management. All rights reserved.</p>
            </div>
        </div>
    </footer>


</x-app-layout>
