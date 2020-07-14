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
    <?php
        $email = $_POST['email'];
        $pdo = new PDO('mysql:host=127.0.0.1;dbname=mail_sheet', 'admin', 'Mojeedewe.123');
        $pdo->exec("INSERT INTO mails (email) VALUES ('$email')");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    ?>
    <section class="container-fluid custom__py-main custom__px-main bg-main pos-rel">
        <div class="row align-items-center justify-content-center index-1">
            <div class="col-12"><img src="./images/logo.png" alt="Logo" class="logo" /></div>
            <main class="col-12 col-md-8 text-center justify-content-center text-md-left order-2 order-md-1 pl-0 mt-lg-2 pt-5 d-trans">
                <div>
                    <img src="./images/shield-w.png" alt="shield" class="d-block mx-auto mt-5 pt-5 wow animate__flipInY" data-wow-duration="2s">
                    <h1 class="text-center text-light mt-4 mt-lg-5 mb-3 wow animate__fadeInLeft" data-wow-duration="2s">Thank <span class="font-weight-bold">You!!!</span></h1>
                    <p class="text-center text-light wow animate__fadeInRight" data-wow-duration="2s">
                        Notification will be sent to your email when <span class="font-weight-bold">Play</span>Smart is ready.
                    </p>
                </div>
            </main>
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
    <section class="container-fluid custom__px-main pos-rel d-md-none">
        <div class="row vh-10 justify-content-center">
            <main class="col-12 col-md-6 col-lg-6 text-center text-md-left order-2 order-md-1 pl-0 mt-rev-sm">
                <div>
                    <img src="./images/shield-b.png" alt="shield" class="d-block mx-auto wow animate__flipInY" data-wow-duration="2s">
                    <h1 class="text-center mt-3 wow animate__fadeInLeft" data-wow-duration="1s">Thank <span class="font-weight-bold">You!!!</span></h1>
                    <p class="text-center px-5 wow animate__fadeInRight" data-wow-duration="1s">
                        Notification will be sent to your email <br> when <span class="font-weight-bold">Play</span>Smart is ready.
                    </p>
                </div>
                </div>
            </main>
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