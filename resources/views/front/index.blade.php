<!DOCTYPE html>
<html lang="ar" direction="rtl", dir="rtl">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>تطبيق احسان</title>
        <link rel="icon" type="image/x-icon" href="{{ asset('front_files/assets/favicon.ico') }}" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,wght@0,600;1,600&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,500;0,600;0,700;1,300;1,500;1,600;1,700&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;1,400&amp;display=swap" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('front_files/css/styles.css') }}" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm" id="mainNav">
            <div class="container px-5">
                <a class="navbar-brand fw-bold" href="#page-top">احسان</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="bi-list"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto me-4 my-3 my-lg-0">
                        <li class="nav-item"><a class="nav-link me-lg-3" href="#page-top">الرئسية</a></li>
                        <li class="nav-item"><a class="nav-link me-lg-3" href="#contact-us">رؤيتنا</a></li>
                        <li class="nav-item"><a class="nav-link me-lg-3" href="#features">حول التطبيق</a></li>
                        <li class="nav-item"><a class="nav-link me-lg-3" href="#download">حمل التطبيق</a></li>
                    </ul>
                    <button class="btn btn-primary rounded-pill px-3 mb-2 mb-lg-0" data-bs-toggle="modal" data-bs-target="#feedbackModal">
                        <span class="d-flex align-items-center">
                            <i class="bi-chat-text-fill me-2"></i>
                            <span class="small">تواصل معنا</span>
                        </span>
                    </button>
                </div>
            </div>
        </nav>
        <!-- Mashead header-->
        <header class="masthead">
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6">
                        <!-- Mashead text and app badges-->
                        <div class="mb-5 mb-lg-0 text-center text-lg-start">
                            <h1 class="display-1 lh-1 mb-3">تطبيق احسان </h1>
                            <p class="lead fw-normal text-muted mb-8"> والمشافي  بخطواط بسيطة    أصبح بامكانك  من خلال التطبيق التبرع للمساجد</p>
                            <div class="d-flex flex-column flex-lg-row align-items-center">
                                <a class="me-lg-3 mb-4 mb-lg-0" href="#!"><img class="app-badge" src="{{ asset('front_files/assets/img/google-play-badge.svg') }}" alt="..." /></a>
                                <a href="#!"><img class="app-badge" src="{{ asset('front_files/assets/img/app-store-badge.svg') }}" alt="..." /></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <!-- Masthead device mockup feature-->
                        <div class="masthead-device-mockup">
                            <svg class="circle" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                <defs>
                                    <linearGradient id="circleGradient" gradientTransform="rotate(45)">
                                        <stop class="gradient-start-color" offset="0%"></stop>
                                        <stop class="gradient-end-color" offset="100%"></stop>
                                    </linearGradient>
                                </defs>
                                <circle cx="50" cy="50" r="50"></circle></svg
                            ><svg class="shape-1 d-none d-sm-block" viewBox="0 0 240.83 240.83" xmlns="http://www.w3.org/2000/svg">
                                <rect x="-32.54" y="78.39" width="305.92" height="84.05" rx="42.03" transform="translate(120.42 -49.88) rotate(45)"></rect>
                                <rect x="-32.54" y="78.39" width="305.92" height="84.05" rx="42.03" transform="translate(-49.88 120.42) rotate(-45)"></rect></svg
                            ><svg class="shape-2 d-none d-sm-block" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg"><circle cx="50" cy="50" r="50"></circle></svg>
                            <div class="device-wrapper">
                                <div class="device" data-device="iPhoneX" data-orientation="portrait" data-color="black">
                                    <div class="screen bg-black">
                                        <!-- PUT CONTENTS HERE:-->
                                        <!-- * * This can be a video, image, or just about anything else.-->
                                        <!-- * * Set the max width of your media to 100% and the height to-->
                                        <!-- * * 100% like the demo example below.-->
                                        <video muted="muted" autoplay="" loop="" style="max-width: 100%; height: 100%"><source src="{{ asset('front_files/assets/img/demo-screen.mp4') }}" type="video/mp4" /></video>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>


        <section class="bg-light"id="contact-us">
            <div class="container px-5">
                <div class="row gx-5 align-items-center justify-content-center justify-content-lg-between">
                    <div class="col-12 col-lg-5">
                        <h2 class="display-4 lh-1 mb-4">رؤيتنا</h2>
                        <p class="lead fw-normal text-muted mb-5 mb-lg-0">هدا النص هو مثال ويمكن ان يستبدل</p>
                    </div>
                    <div class="col-sm-8 col-md-6">
                        <div class="px-5 px-sm-0"><img class="img-fluid rounded-circle" src="https://source.unsplash.com/u8Jn2rzYIps/900x900"  width="300%" alt="..." /></div>
                    </div>
                </div>
            </div>
        </section>

           <!-- Quote/testimonial aside-->
           <aside class="text-center bg-gradient-primary-to-secondary">
            <div class="container px-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-xl-8">
                        <div class="h2 fs-1 text-white mb-4">حول التطبيق</div>

                    </div>
                </div>
            </div>
        </aside>
         <!-- App features section-->
         <section id="features">
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-8 order-lg-1 mb-5 mb-lg-0">
                        <div class="container-fluid px-5">
                            <div class="row gx-5">
                                <div class="col-md-6 mb-5">
                                    <!-- Feature item-->
                                    <div class="text-center">
                                        <i class="bi-phone icon-feature text-gradient d-block mb-3"></i>
                                        <h3 class="font-alt">500مسجد</h3>
                                        <p class="text-muted mb-0">هدا النص يمكنك استبداله</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-5">
                                    <!-- Feature item-->
                                    <div class="text-center">
                                        <i class="bi-camera icon-feature text-gradient d-block mb-3"></i>
                                        <h3 class="font-alt">500 مشفى</h3>
                                        <p class="text-muted mb-0">هدا النص يمكنك استبدال</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-5 mb-md-0">
                                    <!-- Feature item-->
                                    <div class="text-center">
                                        <i class="bi-gift icon-feature text-gradient d-block mb-3"></i>
                                        <h3 class="font-alt">500 كرتونة مياه</h3>
                                        <p class="text-muted mb-0">هدا النص يمكنك استبدال</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <!-- Feature item-->
                                    <div class="text-center">
                                        <i class="bi-patch-check icon-feature text-gradient d-block mb-3"></i>
                                        <h3 class="font-alt">500 كرتونة عصير</h3>
                                        <p class="text-muted mb-0">هدا النص يمكنك استبدال</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 order-lg-0">
                        <!-- Features section device mockup-->
                        <div class="features-device-mockup">
                            <svg class="circle" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                <defs>
                                    <linearGradient id="circleGradient" gradientTransform="rotate(45)">
                                        <stop class="gradient-start-color" offset="0%"></stop>
                                        <stop class="gradient-end-color" offset="100%"></stop>
                                    </linearGradient>
                                </defs>
                                <circle cx="50" cy="50" r="50"></circle></svg
                            ><svg class="shape-1 d-none d-sm-block" viewBox="0 0 240.83 240.83" xmlns="http://www.w3.org/2000/svg">
                                <rect x="-32.54" y="78.39" width="305.92" height="84.05" rx="42.03" transform="translate(120.42 -49.88) rotate(45)"></rect>
                                <rect x="-32.54" y="78.39" width="305.92" height="84.05" rx="42.03" transform="translate(-49.88 120.42) rotate(-45)"></rect></svg
                            ><svg class="shape-2 d-none d-sm-block" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg"><circle cx="50" cy="50" r="50"></circle></svg>
                            <div class="device-wrapper">
                                <div class="device" data-device="iPhoneX" data-orientation="portrait" data-color="black">
                                    <div class="screen bg-black">
                                        <!-- PUT CONTENTS HERE:-->
                                        <!-- * * This can be a video, image, or just about anything else.-->
                                        <!-- * * Set the max width of your media to 100% and the height to-->
                                        <!-- * * 100% like the demo example below.-->
                                        <video muted="muted" autoplay="" loop="" style="max-width: 100%; height: 100%"><source src="{{ asset('front_files/assets/img/demo-screen.mp4') }}" type="video/mp4" /></video>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Basic features section-->
        <!-- Call to action section-->

        <!-- App badge section-->
        <section class="bg-gradient-primary-to-secondary" id="download">
            <div class="container px-5">
                <h2 class="text-center text-white font-alt mb-4">حمل التطبيق</h2>
                <div class="d-flex flex-column flex-lg-row align-items-center justify-content-center">
                    <a class="me-lg-3 mb-4 mb-lg-0" href="#!"><img class="app-badge" src="{{ asset('front_files/assets/img/google-play-badge.svg') }}" alt="..." /></a>
                    <a href="#!"><img class="app-badge" src="{{ asset('front_files/assets/img/app-store-badge.svg') }}" alt="..." /></a>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="bg-black text-center py-5">
            <div class="container px-5">
                <div class="text-white-50 small">
                    <div class="mb-2"> تطبيق احسان &copy; 2022. All Rights Reserved.</div>
                    <a href="#!"></a>
                    <span class="mx-1">&middot;</span>
                    <a href="#!"></a>
                    <span class="mx-1">&middot;</span>
                    <a href="#!"></a>
                </div>
            </div>
        </footer>
        <!-- Feedback Modal-->
        <!-- Feedback Modal-->
        <div class="modal fade" id="feedbackModal" tabindex="-1" aria-labelledby="feedbackModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header bg-gradient-primary-to-secondary p-4">
                        <h5 class="modal-title font-alt text-white" id="feedbackModalLabel">Send feedback</h5>
                        <button class="btn-close btn-close-white" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body border-0 p-4">
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- * * SB Forms Contact Form * *-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- This form is pre-integrated with SB Forms.-->
                        <!-- To make this form functional, sign up at-->
                        <!-- https://startbootstrap.com/solution/contact-forms-->
                        <!-- to get an API token!-->
                        <form   id="create-form">
                            <!-- Name input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="name" name="name" type="text" placeholder="Enter your name..."  />
                                <label for="name">Full name</label>

                            </div>
                            <!-- Email address input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="email" name="email" type="email" placeholder="name@example.com"  />
                                <label for="email">Email address</label>

                            </div>

                            <!-- Message input-->
                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" ></textarea>
                                <label for="message">Message</label>

                            </div>


                            <div class="d-grid"><button onclick="performStore()" class="btn btn-primary rounded-pill btn-lg " type="submit">Submit</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('front_files/js/scripts.js') }}"></script>
        <script src="{{ asset('js/axios.js') }}"></script>
        <script src="{{ asset('js/crud.js') }}"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->

        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

    </body>
</html>
<script>
    function performStore(){
        let data = {

            name: document.getElementById('name').value,
            email: document.getElementById('email').value,
            message: document.getElementById('message').value,

        }
        store('/contact-us',data);
    }
</script>
