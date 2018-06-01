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
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <style>
        ul.left {
            list-style-type: none;
            overflow: hidden;
        }

        /* Style the links inside the list items */

        ul.left li a {
            display: inline-block;
            text-align: center;
            text-decoration: none;
            transition: 1s;
            font-size: 17px;
        }

        /* Change background color of links on hover */

        ul.left li a:hover {
            background-color: #111;
        }

        /* Hide the list item that contains the link that should open and close the topnav on small screens */

        ul.left li.icon {
            display: none;
        }

        @media screen and (max-width:680px) {
            ul.left li:not(:first-child) {
                display: none;
            }
            ul.left li.icon {
                float: left;
                display: inline-block;
            }

            ul.left.responsive {
                position: relative;
            }
            ul.left.responsive li.icon {
                position: relative;
                right: 0;
                top: 0;
            }
            ul.left.responsive li {
                float: none;
                display: inline;
            }
            ul.left.responsive li a {
                display: block;
                text-align: left;
                background: grey;
            }
            ul.left li a:hover {
                background-color: #111;
            }
        }
    </style>
</head>

<body>
    <header>
        <div class="navbar-fixed">
            <nav class="green" role="navigation">
                <div class="nav-wrapper container"> <a href="#!" class="brand-logo"></a>
                    <ul class="left">
                        <li class="icon">
                            <a href="javascript:void(0);" onclick="myFunction()">☰ Explore</a>
                        </li>
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
    </header>

</body>

</html>