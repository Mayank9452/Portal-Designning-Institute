<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing|Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">


    <style>
        .caption-button {
            display: none;
            text-align: center;
        }
        
        @media (max-width:450px) {
            .carousel-caption button,
            .carousel-caption h1 {
                display: none;
            }
            .caption-button {
                display: block;
            }
            .caption-button h1 {
                font-size: 20px;
            }
        }
        
        @media (max-width:830px) {
            .carousel-caption h1 {
                font-size: 30px;
            }
        }
        
        @media (max-width:830px) {
            .carousel-caption h1 {
                font-size: 25px;
            }
        }
        .w-100 {
    
    height: 100vh;
}
        .container img {
            margin: auto;
            padding: auto;
        }
        /* qwfydaskbjx */
        
        .card {
            text-align: center;
            margin: 10px 10px;
        }
        
        .display {
            display: flex;
            flex-direction: row;
            flex-flow: wrap;
            text-align: center;
            justify-content: center;
        }
        
        .card {
            overflow: hidden;
        }
        
        .card img {
            transition: 0.5s all ease-in-out;
        }
        
        .card:hover img {
            transform: scale(1.1);
        }
        
        .card-body a {
            transition: 0.4s;
        }
        
        .card-body a:hover {
            font-size: 17px;
        }
    </style>
</head>

<body>
    <!-- Image and text -->
    <?php include 'partials/_header.php'; ?>

    <!--Carousel Wrapper-->
    <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
        <!--Indicators-->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-2" data-slide-to="1"></li>
            <li data-target="#carousel-example-2" data-slide-to="2"></li>
            <li data-target="#carousel-example-2" data-slide-to="3"></li>
        </ol>
        <!--/.Indicators-->
        <!--Slides-->
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <div class="view">
                    <img class="d-block w-100" src="./images/b1.jpg" alt="First slide">
                    <div class="mask rgba-black-light"></div>
                </div>
                <div class="carousel-caption">
                    <h1 class="animated bounce" style="color:#fff;animation-delay:1s;font-weight: bold;">Helping You Choose the Right College <br> Our Vision</h1> <br>

                    <!-- <p>First text</p> -->
                </div>
            </div>
            <div class="carousel-item">
                <!--Mask color-->
                <div class="view">
                    <img class="d-block w-100" src="./images/b2.jpg" alt="Second slide">
                    <div class="mask rgba-black-strong"></div>
                </div>
                <div class="carousel-caption">
                    <h1 class="animated bounce" style="color:#fff;animation-delay:1s;font-weight: bold;">Helping You Choose the Right College <br> Our Vision</h1> <br>
                    <!-- <p>Secondary text</p> -->
                </div>
            </div>
            <div class="carousel-item">
                <!--Mask color-->
                <div class="view">
                    <img class="d-block w-100" src="./images/b3.jpg" alt="Third slide">
                    <div class="mask rgba-black-slight"></div>
                </div>
                <div class="carousel-caption">
                    <h1 class="animated bounce" style="color:#fff;animation-delay:1s;font-weight: bold;">Helping You Choose the Right College <br> Our Vision</h1><br>
                    <!-- <p>Third text</p> -->
                </div>
            </div>
            <div class="carousel-item">
                <!--Mask color-->
                <div class="view">
                    <img class="d-block w-100" src="./images/b4.jpg" alt="Fourth slide">
                    <div class="mask rgba-black-slight"></div>
                </div>
                <div class="carousel-caption">
                    <h1 class="animated bounce" style="color:#fff;animation-delay:1s;font-weight: bold;">Helping You Choose the Right College <br> Our Vision</h1><br>
                    <!-- <p>Third text</p> -->
                </div>
            </div>
        </div>
        <!--/.Slides-->
        <!--Controls-->
        <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        <!--/.Controls-->
    </div>
    <!--/.Carousel Wrapper-->
    <div class="caption-button my-5 mx-3">
        <h1 class="animated bounce" style="animation-delay:1s">Helping You Choose the Right College <br>Our Vision</h1><br>
        <button type="button" class="btn btn-dark btn-lg">Read More</button>
    </div>
    <div class="my-5 text-center" style="color:indigo">
        <h1>CHOOSE YOUR FUTURE, FIND YOUR BEST COLLEGE</h1>
    </div>

    <div class="container my-5">
        <div class="card-group" style="outline:none;">
            <div class="card mx-2">
                <img class="card-img-top p-5" src="./images/collaboration.png" alt="Card image cap">
                <div class="card-body">
                    <a href="./college_mba/college.php">
                        <h5 class="card-title text-center">MANAGEMENT</h5>
                    </a>
                </div>
            </div>
            <div class="card mx-2">
                <img class="card-img-top p-5" src="./images/architect.png" alt="Card image cap">
                <div class="card-body">
                    <a href="./college/college.php">
                        <h5 class="card-title text-center">ENGINEERING</h5>
                    </a>
                </div>
            </div>
            <div class="card mx-2">
                <img class="card-img-top p-5" src="./images/doctor.png" alt="Card image cap">
                <div class="card-body">
                    <a href="./college_medical/college.php">
                        <h5 class="card-title text-center">MEDICAL</h5>
                    </a>
                </div>
            </div>
           
        </div>
    </div>

    <div class="my-5 text-center" style="color:indigo">
        <h1>TOP FEATURED COLLEGES</h1>
    </div>

    <div class="display">
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="https://images.collegedunia.com/public/college_data/images/campusimage/143540526216.jpg?w=205&h=130&mode=stretch" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">IIT BHU</h5>
                <p class="card-text"><small class="text-muted">B.E./B.Tech</small></p>
                <a href="#">Know More About All Courses</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="https://images.collegedunia.com/public/college_data/images/campusimage/143512662114089724036695153809_8ffdd3a3fb_z.jpg?w=205&h=130&mode=stretch" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">IIT KANPUR</h5>
                <p class="card-text"><small class="text-muted">B.E./B.Tech</small></p>
                <a href="#">Know More About All Courses</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="https://images.collegedunia.com/public/college_data/images/campusimage/14973327741443084987AMITYNOIDA_NEW.jpg?w=205&h=130&mode=stretch" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">AMITY UNIVERSITY</h5>
                <p class="card-text"><small class="text-muted">B.E./B.Tech</small></p>
                <a href="#">Know More About All Courses</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="https://images.collegedunia.com/public/college_data/images/campusimage/143178217514061197651488174_736966512981939_320808996_n.jpg?w=205&h=130&mode=stretch" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">IIM LUCKNOW</h5>
                <p class="card-text"><small class="text-muted">MBA</small></p>
                <a href="#">Know More About All Courses</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="https://images.collegedunia.com/public/college_data/images/campusimage/1451721605mj.png?w=205&h=130&mode=stretch" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">ALIGARH MUSLIM UNIVERSITY</h5>
                <p class="card-text"><small class="text-muted">MBBS</small></p>
                <a href="#">Know More About All Courses</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="https://images.collegedunia.com/public/college_data/images/campusimage/147280329110.jpg?w=205&h=130&mode=stretch" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">GLA UNIVERSITY</h5>
                <p class="card-text"><small class="text-muted">B.E./B.Tech</small></p>
                <a href="#">Know More About All Courses</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="https://images.collegedunia.com/public/college_data/images/campusimage/14966624361496464164Sharda800x414.jpg?w=205&h=130&mode=stretch" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">SHARADA UNIVERSITY</h5>
                <p class="card-text"><small class="text-muted">B.E./B.Tech</small></p>
                <a href="#">Know More About All Courses</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="https://images.collegedunia.com/public/college_data/images/campusimage/14175121698.JPG?w=205&h=130&mode=stretch" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">KING GEORGE'S MEDICAL UNIVERSITY</h5>
                <p class="card-text"><small class="text-muted">MBBS</small></p>
                <a href="#">Know More About All Courses</a>
            </div>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>

</html>