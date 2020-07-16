<!DOCTYPE html>
<html lang="en">

<head>
    <title>Play Smart</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="icon" href="./images/icon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <link rel="stylesheet" href="style.css" />
    <script>
        new WOW().init();
    </script>
</head>

<body>
    <section class="container-fluid custom__px-main custom__py-main bg-main pos-rel">
        <div class="row index-1">
            <div class="d-md-none mx-auto">
                <img src="./images/logo.png" alt="Logo" class="logo d-flex mx-auto" />
                <h1 class="mt-md-5 text-light text-center pt-3">
                        <span class="d-md-block font-weight-light animate__animated animate__delay-2s wow animate__flash" data-wow-duration='1s'>Don&apos;t Play Hard,</span>
                        <span class="font-weight-bold animate__animated animate__delay-4s wow animate__flash" data-wow-duration="1s">Play Smart.</span>
                </h1>
            </div>
            <main class="col-12 col-md-6 col-lg-6 text-center text-md-left order-2 order-md-1 pl-0">
                <div class="d-none d-md-block">
                    <img src="./images/logo.png" alt="Logo" class="logo" />
                    <h1 class="mt-md-5 text-light pt-3">
                        <span class="d-md-block font-weight-light animate__animated animate__delay-2s wow animate__flash" data-wow-duration='1s'>Don&apos;t Play Hard,</span>
                        <span class="font-weight-bold animate__animated animate__delay-4s wow animate__flash" data-wow-duration="1s">Play Smart.</span>
                    </h1>
                </div>
                <div class="mt-4 mt-md-0 pt-2 pt-md-0">
                    <p class="mt-4 text-lg-light pr-lg-5 mr-lg-5">
                        We are building an app that studies the first 10 minutes of a match,
                        analyze the opposition team's strategy and weaknesses to switch
                        formation and ensure 90% winning chance. <br><br> Would you like to get
                        notified when the app is ready?
                    </p>
                    <form class="form-row index-1" method="POST" action="success.php">
                        <div class="col-12 col-md-9">
                            <input type="email" name="email" class="form-control px-3 px-lg-5" placeholder="Your Email Address" required>
                        </div>
                        <div class="col-5 col-md-3 my-2 my-md-0 mx-auto">
                            <button class="btn btn-primary btn-block font-weight-bold" type="submit">
                                SUBMIT
                            </button>
                        </div>
                    </form>
                </div>
            </main>
            <aside class="col-8 offset-2 col-md-6 offset-md-0 col-lg-6 col-xl-5 offset-xl-1 justify-content-center pl-5 order-1 order-md-2 mt-4 mt-md-5 mt-lg-0 phone pos-rel">
                <div class="d-flex wow animate__fadeInDown" data-wow-duration="1s">
                    <div class="pos-rel">
                        <video autoplay loop muted class="front">
                            <source src="./images/gif.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        <img src="./images/frame.png" class="off" alt="">
                    </div>
                </div>
                <img src="./images/back.png" alt="" class="back animate__animated wow animate__fadeInUp animate__delay-1s" data-wow-duration="1s">
            </aside>
        </div>
        <section class="bgs d-flex flex-column justify-content-between bg-ligh index-0">
            <div class="d-flex">
                <div class="d-flex flex-column align-items-center box inf">
                    <div class="box-lg"></div>
                    <div class="box-sm mt-2"></div>
                </div>
                <div class="d-flex flex-column align-items-center box inf">
                    <div class="box-lg"></div>
                    <div class="box-sm mt-2"></div>
                </div>
                <div class="d-flex flex-column align-items-center box inf">
                    <div class="box-lg"></div>
                    <div class="box-sm mt-2"></div>
                </div>
            </div>
            <div class="d-flex">
                <div class="d-flex flex-column align-items-center box inf">
                    <div class="box-lg"></div>
                    <div class="box-sm mt-2"></div>
                </div>
                <div class="d-flex flex-column align-items-center box inf">
                    <div class="box-lg"></div>
                    <div class="box-sm mt-2"></div>
                </div>
                <div class="d-flex flex-column align-items-center box inf">
                    <div class="box-lg"></div>
                    <div class="box-sm mt-2"></div>
                </div>
            </div>
            <div class="d-flex">
                <div class="d-flex flex-column align-items-center box inf">
                    <div class="box-lg"></div>
                    <div class="box-sm mt-2"></div>
                </div>
                <div class="d-flex flex-column align-items-center box inf">
                    <div class="box-lg"></div>
                    <div class="box-sm mt-2"></div>
                </div>
                <div class="d-flex flex-column align-items-center box inf">
                    <div class="box-lg"></div>
                    <div class="box-sm mt-2"></div>
                </div>
            </div>
        </section>
    </section>
    <section class="container-fluid custom__px-main mt-rev">
        <div class="row features py-md-4 py-lg-5">
            <section class="col-12 col-md-4 my-3 my-md-0 px-5 px-md-2 text-center wow animate__flipInY" data-wow-duration="1s">
                <img src="./images/analyze.png" alt="" class="d-block mx-auto">
                <p class="font-weight-bold my-2">Analyze</p>
                <p class="small">
                    Studies first 10 minutes <br> of a match
                </p>
            </section>
            <section class="col-12 col-md-4 my-3 my-md-0 px-5 px-md-2 text-center wow animate__flipInY" data-wow-duration="1s">
                <img src="./images/detect.png" alt="" class="d-block mx-auto">
                <p class="font-weight-bold my-2">Detect</p>
                <p class="small">
                    Find Opposition team’s <br>strategy and wickness
                </p>
            </section>
            <section class="col-12 col-md-4 my-3 my-md-0 px-5 px-md-2 text-center wow animate__flipInY" data-wow-duration="1s">
                <img src="./images/solution.png" alt="" class="d-block mx-auto">
                <p class="font-weight-bold my-2">Solution</p>
                <p class="small">
                    Suggest tactics and <br>formation to win
                </p>
            </section>
        </div>
    </section>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>