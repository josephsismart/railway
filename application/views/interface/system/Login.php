<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>CTE Project</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="<?= $system_svg ?>" />
    <!-- Font Awesome icons (free version)-->
    <!-- <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" /> -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" /> -->
    <!-- Core theme CSS (includes Bootstrap)-->

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url() ?>plugins/fontawesome-free/css/all.min.css">
    <!-- Ekko Lightbox -->
    <link rel="stylesheet" href="<?= base_url() ?>dist/css/adminlte.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>dist/css/alt/styles.css">

</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#page-top">CTE PROJECT</a>
            <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#mgabulan">Mga Bulan</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#1stMonth">Unang Bulan</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#about">About</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->

    <header class="masthead bg-primary text-white text-center">
        <div class="container d-flex align-items-center flex-column">
            <!-- Masthead Avatar Image-->
            <img class="masthead-avatar mb-5" src="<?= $system_svg ?>" alt="..." />
            <!-- Masthead Heading-->
            <h1 class="masthead-heading mb-0"><i class="text-secondary"><b>C</b></i>atch <i class="text-secondary"><b>T</b></i>hem <i class="text-secondary"><b>E</b></i>arly</h1>
            <!-- Icon Divider-->
            <p class="masthead-subheading font-weight-light mb-0">A Reading Remediation Material <button class="btn btn-sm btn-warning" onclick="playAudio('\'<?= $cte_intro ?>\'');"><i class="fa fa-volume-up"></i></button></p>
            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <i class="fas fa-book-open fa-3x"></i>
                <!-- <div class="divider-custom-line"></div> -->
                <div class="divider-custom-line"></div>
            </div>
            <!-- Masthead Subheading-->
            <h1 class="masthead-heading font-weight-light mb-0 pt-0" style="font-size:1.7rem;"><i>"Tampo para sa Sulong Edukalidad"</i></h1>
        </div>
    </header>

    <!-- Portfolio Section-->
    <section class="page-section portfolio" id="mgabulan">
        <div class="container">
            <!-- Portfolio Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Mga Bulan</h2>
            <!-- Icon Divider-->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-book-open"></i></div>
                <div class="divider-custom-line"></div>
            </div>

            <div class="alert alert-info alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h5><i class="icon fas fa-calendar-check"></i> Direksyon: <i calss="fa fa-speaker"></i></h5>
                Pagpili og bulan (<i>Select a month</i>).
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-3 mb-5">
                    <div class="portfolio-item mx-auto">
                        <a onclick="$('#1stMonth').slideDown();playAudio('\'<?= $m1w1_mp3 ?>\'');" href="#1stMonth">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white">Ipakita ang Ikaunang Bulan<br />(<i>View 1st Month</i>)</div>
                            </div>
                            <img class="img-fluid" src="<?= $item1 ?>" alt="..." />
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-5">
                    <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal2">
                        <a onclick="$('#1stMonth').slideDown();" href="#1stMonth">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white">Ipakita ang Ikaduhang Bulan<br />(<i>View 2nd Month</i>)</div>
                            </div>
                            <img class="img-fluid" src="<?= $item2 ?>" alt="..." />
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-5">
                    <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal3">
                        <a onclick="$('#1stMonth').slideDown();" href="#1stMonth">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white">Ipakita ang Ikatulong Bulan<br />(<i>View 3rd Month</i>)</div>
                            </div>
                            <img class="img-fluid" src="<?= $item3 ?>" alt="..." />
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
                    <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal4">
                        <a onclick="$('#1stMonth').slideDown();" href="#1stMonth">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white">Ipakita ang Ikaupat nga Bulan<br />(<i>View 4th Month</i>)</div>
                            </div>
                            <img class="img-fluid" src="<?= $item4 ?>" alt="..." />
                        </a>
                    </div>
                </div>

            </div>



            <section class="page-section bg-white text-white mb-0" id="1stMonth" style="display:none;">
                <!-- <section class="page-section bg-white text-white mb-0" id="1stMonth"> -->
                <div class="col-12">
                    <div class="card card-purple">
                        <div class="card-header">
                            <h3 class="card-title">Ikaunang Bulan <i class="small">1st Month</i></h4>
                                <div class="card-tools">
                                    <!-- <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-minus"></i>
                                    </button> -->
                                    <button type="button" class="btn btn-tool" onclick="$('#1stMonth').slideUp();">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card card-primary card-tabs">
                                        <div class="card-header p-0 pt-1">
                                            <ul class="nav nav-tabs" id="custom-tabs-five-tab" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" onclick="playAudio('\'<?= $w1_mp3 ?>\'');" id="custom-tabs-five-overlay-tab" data-toggle="pill" href="#m1w1" role="tab" aria-selected="true">Ikaunang Semana (<i>1st Week</i>)</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" onclick="playAudio('\'<?= $w2_mp3 ?>\'');" id="custom-tabs-five-overlay-dark-tab" data-toggle="pill" href="#m1w2" role="tab">Ikaduhang Semana (<i>2nd Week</i>)</a>
                                                </li>
                                                <!-- <li class="nav-item">
                                                    <a class="nav-link" id="custom-tabs-five-normal-tab" data-toggle="pill" href="#custom-tabs-five-normal" role="tab" aria-controls="custom-tabs-five-normal">Normal Tab</a>
                                                </li> -->
                                            </ul>
                                        </div>
                                        <div class="card-body">
                                            <div class="tab-content" id="custom-tabs-five-tabContent">
                                                <div class="tab-pane fade active show" id="m1w1" role="tabpanel">
                                                    <?php $this->load->view('interface/system/layout/m1/m1w1') ?>
                                                </div>
                                                <div class="tab-pane fade" id="m1w2" role="tabpanel">
                                                    <?php $this->load->view('interface/system/layout/m1/m1w2') ?>
                                                </div>
                                                <div class="tab-pane fade" id="custom-tabs-five-normal" role="tabpanel" aria-labelledby="custom-tabs-five-normal-tab">
                                                    Mauris tincidunt mi at erat gravida, eget tristique urna bibendum. Mauris pharetra purus ut ligula tempor, et vulputate metus facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Maecenas sollicitudin, nisi a luctus interdum, nisl ligula placerat mi, quis posuere purus ligula eu lectus. Donec nunc tellus, elementum sit amet ultricies at, posuere nec nunc. Nunc euismod pellentesque diam.
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.card -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>


        </div>
    </section>
    <!-- About Section-->



    <!-- About Section-->
    <section class="page-section bg-primary text-white mb-0" id="about">
        <div class="container">
            <!-- About Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-white">About the Project</h2>
            <!-- Icon Divider-->
            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-book-open"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- About Section Content-->
            <div class="row">
                <div class="col-lg-4 ms-auto">
                    <p class="lead">Freelancer is a free bootstrap theme created by Start Bootstrap. The download includes the complete source files including HTML, CSS, and JavaScript as well as optional SASS stylesheets for easy customization.</p>
                </div>
                <div class="col-lg-4 me-auto">
                    <p class="lead">You can create your own custom avatar for the masthead, change the icon in the dividers, and add your email address to the contact form to make it fully functional!</p>
                </div>
            </div>
        </div>
    </section>


    <div class="portfolio-modal modal fade" id="modal-default" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header border-0"><button class="btn-close" type="button" data-dismiss="modal" aria-label="Close"></button></div>
                <div class="modal-body text-center pb-2">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Portfolio Modal - Title-->
                                <h4 class="portfolio-modal-title text-secondary mb-0 mt-n4"></h4>
                                <!-- <h4 class="portfolio-modal-title text-secondary text-uppercase mb-0">Submarine</h4> -->

                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-book-open"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <!-- Portfolio Modal - Image-->
                                <video id="myvideo" width="100%" height="340" controls autoplay>
                                    <source src="" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>

                                <audio id="myAudio">
                                    <source src="" type="audio/mpeg">
                                    Your browser does not support the audio element.
                                </audio>

                                <!-- Portfolio Modal - Text-->
                                <p><i class="mb-2">Paminawa ug sunduga kini.</i></p>
                                <button class="btn btn-primary mt-3" data-dismiss="modal">
                                    <i class="fas fa-times"></i>
                                    Isarado (<i>Close</i>)
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- <div class="modal fade" id="modal-default">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="embed-responsive embed-responsive-16by9">
                        <video id="myvideo" width="100%" height="340" controls autoplay>
                            <source src="" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Isarado (<i>Close</i>)</button>
                </div>
            </div>
        </div>
    </div> -->



    <!-- Footer-->
    <footer class="footer text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4">Location</h4>
                    <p class="lead mb-0">
                        Libertad Central Elementary School
                        <br />
                        Libetad, Butuan City, 8600
                    </p>
                </div>
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4">Reach us in web</h4>
                    <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-google"></i></a>
                </div>
                <!-- <div class="col-lg-4">
                    <h4 class="text-uppercase mb-4">About Freelancer</h4>
                    <p class="lead mb-0">
                        Freelance is a free to use, MIT licensed Bootstrap theme created by
                        <a href="http://startbootstrap.com">Start Bootstrap</a>
                        .
                    </p>
                </div> -->
            </div>
        </div>
    </footer>
    <!-- Copyright Section-->
    <div class="copyright py-4 text-center text-white">
        <div class="container"><small>Copyright &copy; CTE Project 2022</small></div>
    </div>

    <!-- jQuery -->
    <script src="<?= base_url() ?>plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?= base_url() ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Ekko Lightbox -->
    <script src="<?= base_url() ?>plugins/ekko-lightbox/ekko-lightbox.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url() ?>dist/js/adminlte.min.js"></script>
    <!-- <script src="<?= base_url() ?>dist/js/demo.js"></script> -->
    <!-- Page specific script -->
    <script>
        $(function() {
            $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                event.preventDefault();
                $(this).ekkoLightbox({
                    alwaysShowClose: true
                });
            });
        });


        $(document).ready(function() {
            $(".btn-fweek").click();
        });

        function playVideo(a, b) {
            var videoFile = a;
            var audio = $("#myAudio")[0]; // id or class of your <audio> tag
            audio.pause();

            $(".portfolio-modal-title").text(b);
            $("#myvideo").html('<source src=' + videoFile + ' type="video/mp4"></source>');
            var video = $("#myvideo")[0]; // id or class of your <video> tag
            video.load();
            video.play();
            $("#modal-default").modal("show");
        }

        function playAudio(a) {
            var audioFile = a;
            $("#myAudio").html('<source src=' + audioFile + ' type="audio/mpeg"></source>');
            var audio = $("#myAudio")[0]; // id or class of your <audio> tag
            audio.load();
            audio.play();
        }

        $('#modal-default').on('hidden.bs.modal', function() {
            $('#myvideo').each(function() {
                $(this).get(0).pause();
            });
        })
    </script>
</body>
<!-- /.modal -->

</html>