<!DOCTYPE html>
<html>

<head>
    <title>Demo Menu Responsive Top Navigation</title>
    <style>
        /* Remove margins and padding from the list, and add a black background color */

        ul.topnav {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
        }

        /* Float the list items side by side */

        ul.topnav li {
            float: left;
        }

        /* Style the links inside the list items */

        ul.topnav li a {
            display: inline-block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            transition: 0.3s;
            font-size: 17px;
        }

        /* Change background color of links on hover */

        ul.topnav li a:hover {
            background-color: #111;
        }

        /* Hide the list item that contains the link that should open and close the topnav on small screens */

        ul.topnav li.icon {
            display: none;
        }

        /* Saat lebar layar kurang dari 680 pixel, sembunyikan semua menu item kecuali item 
yang pertama yaitu("Home"). Tampilkan juga list item yang berisi link untuk membuka 
menu yaitu (li.icon) 
*/

        @media screen and (max-width:680px) {
            ul.topnav li:not(:first-child) {
                display: none;
            }
            ul.topnav li.icon {
                float: right;
                display: inline-block;
            }
        }

        /* Class dengan nama "responsive" akan ditambahkan oleh JavaScript saat user mengklik icon. 
   Munculnya Class ini akan mendisplay isi list menu
*/

        @media screen and (max-width:680px) {
            ul.topnav.responsive {
                position: relative;
            }
            ul.topnav.responsive li.icon {
                position: absolute;
                right: 0;
                top: 0;
            }
            ul.topnav.responsive li {
                float: none;
                display: inline;
            }
            ul.topnav.responsive li a {
                display: block;
                text-align: left;
            }
        }
    </style>

</head>

<body>
    <ul class="topnav sa">
        <li><a href="#home">Home</a></li>
        <li><a href="#news">News</a></li>
        <li><a href="#contact">Contact</a></li>
        <li><a href="#about">About</a></li>
        <li class="icon">
            <a href="javascript:void(0);" onclick="myFunction()">☰</a>
        </li>
    </ul>

    <script>
        /* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
        function myFunction() {
            document.getElementsByClassName("topnav")[0].classList.toggle("responsive");
        }
    </script>
</body>

</html>