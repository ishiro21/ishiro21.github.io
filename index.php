<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>

<head>
    <meta charset="utf-8">
    <title>Welcome</title>
    <!--Import Google Icon Font-->
    <link href="fonts/icon.css" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
    <link type="text/css" rel="stylesheet" href="style.css" media="screen,projection" />
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

</head>

<body>
    <header>
        <div class="navbar-fixed">
            <nav class="green" role="navigation">
                <div class="nav-wrapper container"> <a href="#!" class="brand-logo"></a>
                    <ul class="left">
                        <li class="icon"><a href="javascript:void(0);" onclick="myFunction()">☰ Explore</a></li>
                        <li><a href="?page=home1">Home</a></li>
                        <li><a href="?page=project1">{Project}</a></li>
                        <li><a href="?page=about1">About Me</a></li>
                        <li><a href="?page=contact1">Contact</a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <script>
            /* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
            function myFunction() {
                document.getElementsByClassName("left")[0].classList.toggle("responsive");
            }
        </script>
        <div id="banner">
            <header id="logo">
                <img src="images/logo2.jpg" alt="">
                <h1>have you become a hero today?</h1>
                <span id="jobdesc">
			An Indonesian Illustrator
		</span>
            </header>
            <div id="overlay"></div>
        </div>
    </header>

    <section>
        <span>How I Work</span>
        <div class="section">
            <div class="content">
                <div class="box">
                    <img src="images/logo.jpg" alt="">
                    <h3>Step 1: Sketch.</h3>
                    <p>Pencils Graphite (H) on 17x14" Strathmore Windpower Bristol</p>
                </div>
                <div class="box">
                    <img src="images/logo2.jpg" alt="">
                    <h3>Step 2: Inking.</h3>
                    <p>Inks Windsor Newton Series 7s (0-2), Copic Technical Pens, White Out. Scanned at 1200DPI (Bitmap)</p>
                </div>
                <div class="box">
                    <img src="images/banner1.jpg" alt="">
                    <h3>Step 3: Coloring.</h3>
                    <p>Finish Treatment: Photoshop Gradiant layers, hue/adjustment layers. Diffusion achieved using solid fill layer based on colour channel, blurred and reducied to 20% Opacity.</p>
                </div>
            </div>
        </div>
    </section>

    <aside class="testimonial">
        <span>Testimonial from <strong>'Steve Jobs</strong></span>
        <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, voluptates, neque. Nesciunt, iste, soluta</h3>
    </aside>

    <footer>
        <div class="content">
            <div class="box">&copy; All Right Reserved</div>
            <div class="box"><strong>Find me on: </strong><a href="http://www.twitter.com/tut_web">Twitter</a> / <a href="http://www.facebook.com/bos.tutweb">Facebook</a> / <a href="#">Dribbble</a> / <a href="#">Instagram</a><br><br><strong>Phone:</strong> +62210000000; <strong>Email:</strong> tut.webdesign@gmail.com</div>
        </div>
    </footer>

</body>

</html>