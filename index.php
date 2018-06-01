<!DOCTYPE HTML>
<html>

<head>
    <title>Judul</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <div id="canvas1">
        <div id="header1">HEAD</div>
        <div id="menu1">
            <ul>
                <li class="mainmenu"><a href="/tes_01">Beranda</a></li>
                <li class="mainmenu"><a href="">Isi Menu 2</a>
                    <ul>
                        <li><a href="?page=drop_menu1">Drop Menu 1</a></li>
                        <li><a href="?page=drop_menu2">Drop Menu 2</a></li>
                        <li><a href="">Drop Menu 3</a></li>
                    </ul>
                </li>
                <li class="mainmenu"><a href="">Isi Menu 3</a>
                    <ul>
                        <li><a href="?page=drop_menu4">Drop Menu 4</a></li>
                        <li><a href="">Drop Menu 5</a></li>
                        <li><a href="">Drop Menu 6</a></li>
                    </ul>
                </li>
                <li class="mainmenu"><a href="">Isi Menu 4</a></li>
            </ul>
        </div>

        <div id="isi1">
            <?php
                $page = @$_GET['page'];
                if($page == "drop_menu1"){include "incl/drop_menu1.php";}
                elseif($page == "drop_menu2"){echo"Ini Adalah Halaman Menu Kedua";}
                elseif($page == "drop_menu4"){echo"Ini Adalah Halaman Menu 4";}
                elseif($page == ""){echo"Selamat DAtang";}
                else{echo"ERROR 404!";}
            ?>
        </div>
        <div id="footer1">Footer</div>
    </div>
</body>

</html>