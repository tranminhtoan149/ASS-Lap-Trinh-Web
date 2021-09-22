<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>My Web</title>
    <link rel="stylesheet" href="lib/bootstrap.min.css" />
    <script src="lib/jquery.min.js"></script>
    <script src="lib/popper.min.js"></script>
    <script src="lib/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet" />
</head>

<body>
    <div class="loading">
        <div class="start">Welcome</div>
        <img src="images/login/circle/circle1.png" class="spin" id="circle1" alt="" />
        <img src="images/login/circle/circle2.png" class="spin" id="circle2" alt="" />
        <img src="images/login/circle/circle3.png" class="spin" id="circle3" alt="" />
        <img src="images/login/circle/circle4.png" class="spin" id="circle4" alt="" />
        <img src="images/login/circle/circle5.png" class="spin" id="circle5" alt="" />
        <img src="images/login/circle/circle6.png" class="spin" id="circle6" alt="" />
        <div class="success">Success!</div>
    </div>
    <div class="main">
        <div class="mainmenu">
            <div class="menu-item menu-begin">Begin</div>
            <div class="menu-item menu-login">
                <span title="Login">
                    <ion-icon name="log-in-outline"></ion-icon>
                </span>
            </div>
            <div class="menu-item menu-about">
                <span title="About us">
                    <ion-icon name="people-circle-outline"></ion-icon>
                </span>
            </div>
            <div class="menu-item menu-home">
                <span title="HomePage">
                    <ion-icon name="home-outline"></ion-icon>
                </span>
            </div>
            <div class="menu-item menu-contact">
                <span title="Contact">
                    <ion-icon name="navigate-outline"></ion-icon>
                </span>
            </div>
        </div>
        <div class="container">
            <div class="clearfix">
                <div class="float-left" style="width: 50%">
                    <p id="content-left">MY WEB DEVELOPER'S ASSIGNMENT</p>
                </div>
                <div class="float-right" style="width: 50%">
                    <div class="content-right">
                        <form action="">
                            <div class="login-form">
                                <div class="username">
                                    <input type="text" class="form-control form-control-lg w-100" id="usrn" placeholder="Username" />
                                </div>
                                <div class="password">
                                    <input type="password" class="form-control form-control-lg w-100 mt-4" id="pw" placeholder="Password" />
                                </div>
                                <div class="login">
                                    <button type="submit" class="btn w-100 mt-4 btn-lg" id="login">Login</button>
                                </div>
                                <div class="forgot">
                                    <a href="#">Forgot password?</a>
                                </div>
                            </div>
                        </form>
                        <div class="register">
                            <div class="register-form">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-lg w-50 register-btn" data-toggle="modal" data-target="#modelId">Register</button>

                                <!-- Modal -->
                                <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <form action="">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Register</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <div class="name">
                                                            <div class="row">
                                                                <div class="col">
                                                                    <input type="text" class="form-control" name="" id="" placeholder="First Name" />
                                                                </div>
                                                                <div class="col"><input type="text" class="form-control" name="" id="" placeholder="Last Name" /></div>
                                                            </div>
                                                        </div>
                                                        <div class="username mt-3">
                                                            <input type="text" class="form-control" name="" id="" placeholder="Username" />
                                                        </div>
                                                        <div class="password mt-3">
                                                            <input type="password" class="form-control" name="" id="" placeholder="Password" />
                                                        </div>
                                                        <div class="birthday mt-3">
                                                            <div class="row">
                                                                <div class="col">
                                                                    <select class="form-control" name="day" id="">
                                                                        <option value="0">Day</option>
                                                                        <?php for ($i = 1; $i <= 30; $i++) { ?>

                                                                            <option value="<?php echo $i ?>"><?php echo $i ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                                <div class="col">
                                                                    <select class="form-control" name="month" id="">
                                                                        <option value="0">Month</option>
                                                                        <?php for ($i = 1; $i <= 12; $i++) { ?>
                                                                            <option value="<?php echo $i ?>"><?php echo $i ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                                <div class="col">
                                                                    <select class="form-control" name="year" id="">
                                                                        <option value="0">Year</option>
                                                                        <?php for ($i = 2021; $i >= 1905; $i--) { ?>

                                                                            <option value="<?php echo $i ?>"><?php echo $i ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="gender mt-3">
                                                            <input type="radio" value="" name="my-gender"> Male
                                                            <input type="radio" value="" name="my-gender"> Female
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button class="btn register-btn">Register</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(".main").hide();
        $(".spin").hide();
        $(".success").hide();
        $(".start").click(function() {
            $(this).hide(500);
            $(".spin").delay(500).fadeIn();
            $(".success").delay(5500).fadeIn();
            setTimeout(function() {
                $(".loading").fadeOut(500);
                $(".main").delay(500).fadeIn(500);
            }, 6500);
        });
    </script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>