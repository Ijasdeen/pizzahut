<?php require_once('includes/header.php')?>
    <main>
        <!--     Caraousal-->
        <section class="caraousal-division">
            <div class="container-fluid">
                <div id="demo" class="carousel slide" data-ride="carousel">

                    <!-- Indicators -->
                    <ul class="carousel-indicators">
                        <li data-target="#demo" data-slide-to="0" class="active"></li>
                        <li data-target="#demo" data-slide-to="1"></li>
                        <li data-target="#demo" data-slide-to="2"></li>
                        <li data-target="#demo" data-slide-to="3"></li>
                    </ul>

                    <!-- The slideshow -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="Images/slider-images/img3.jpg" alt="">
                        </div>
                        <div class="carousel-item">
                            <img src="Images/slider-images/img1.JPG" alt="">
                        </div>
                        <div class="carousel-item">
                            <img src="Images/slider-images/img4.jpg" alt="">
                        </div>
                        <div class="carousel-item">
                            <img src="Images/slider-images/img2.jpg" alt="">
                        </div>

                    </div>

                    <!-- Left and right controls -->
                    <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
                    <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

                </div>
            </div>
        </section>

        <!--      Ads section-->
        <section class="ads">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 py-2">
                        <img src="Images/mydeal1.PNG" alt="Deal one" class="img-fluid">
                    </div>
                    <div class="col-md-6 py-2">
                        <img src="Images/mydeal2.PNG" alt="Deal two" class="img-fluid">
                    </div>
                </div>
            </div>
        </section>

        <!--   Parallax-section -->

        <section class="parallax-section">
            <div class="container-fluid">
                <div class="my-paroller" data-paroller-factor="0.3" data-paroller-type="foreground" data-paroller-direction="horizontal">
                    <div class="jumbotron" style="background: url('Images/half-pizza.jpg')  no-repeat center; background-size: cover;" data-paroller-factor="-0.2">

                    </div>
                </div>

            </div>
        </section>

        <!--     Second ads-->
        <section class="second-ads">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <img src="Images/pizza.PNG" alt="Pizza ads" class="img-fluid">
                    </div>
                    <div class="col-md-6">
                        <img src="Images/pizza.PNG" alt="Pizza ads" class="img-fluid">
                    </div>
                </div>
            </div>
        </section>

        <!--    Second parallax section     -->
        <section class="parallax-section">

            <div class="container-fluid">
                <div class="my-paroller" data-paroller-factor="0.3" data-paroller-type="foreground" data-paroller-direction="horizontal">
                    <div class="jumbotron" style="background: url('Images/food-pizza-fast-food.jpg')  no-repeat center; background-size: cover;" data-paroller-factor="-0.2">

                    </div>
                </div>

            </div>
        </section>

        <!--    Menu-->
        <section class="menu-inBottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <a href="pizza.php">
                    <img src="Images/menu1.PNG" alt="Pizza mneu" class="img-fluid">
                </a>
                    </div>
                    <div class="col-md-4">
                        <a href="wings.php">
                <img src="Images/menu2.PNG" alt="Wings menu" class="img-fluid">
                </a>
                    </div>
                    <div class="col-md-4">
                        <a href="sides.php">
                    <img src="Images/menu4.PNG" alt="Sides menu" class="img-fluid">
                </a>
                    </div>
                </div>
                <div class="row second-row">
                    <div class="col-md-4">
                        <a href="pasta.php">
                      <img src="Images/menu5.PNG" alt="Pasta menu" class="img-fluid">
                  </a>
                    </div>
                    <div class="col-md-4">
                        <a href="wings.php">
                      <img src="Images/menu6.PNG" alt='Wings menu' class="img-fluid">
                  </a>
                    </div>
                    <div class="col-md-4">
                        <a href="drinks.php">
                      <img src="Images/menu7.PNG" alt="drinks Menu" class="img-fluid">
                  </a>
                    </div>
                </div>
            </div>
        </section>

    </main>
    <?php require_once('includes/footer.php')?>