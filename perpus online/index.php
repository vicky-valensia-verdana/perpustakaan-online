<?php
    require 'fuction.php';

    $book = query("SELECT * FROM book");

    if(isset($_GET["cari"])){
        $keyword = $_GET["keyword"];
        $book = cari($keyword);
    }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <link rel="stylesheet" href="stylehome.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link rel="stylesheet" href="hasill.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=EB+Garamond:ital,wght@0,400..800;1,400..800&display=swap" rel="stylesheet">
    
</head>
<body>
    <div>
    <header>
        <h1 class="logo">LIBRARY</h1>
        <nav>
            <ul>
                <li><a href="#home">HOME</a></li>
                <li><a href="#book">BOOKS</a></li>
                <li><a href="#about">ABOUT US</a></li>
            </ul>
        </nav>
    
    <form action="" method="GET" id="search-form">
        <input type="text" name="keyword" id="keyword" placeholder="Masukkan judul" autocomplete="off">
        <button type="submit" name="cari" id="search-button"><i class="uil uil-search"></i></button>
    </form>
</header>
    
<div id="container">
    <!-- HOME -->
    <section class="home" id="home">
        <h1 class="H1">HOME</h1>
        <div class="swiper container">
            <div class="swiper-wrapper wrapper">
                <div class="swiper-slide slide">
                    <a href="buku/The-Outsider-PDF.pdf"><button class="tombol1">Read</button></a>
                        <div class="tulisan">
                        <a href="detail.html">
                            <h1 class="judul">The Outsider</h1>
                        </a>
                        <h2>Summary</h2>
                        <p class="text">'The Outsider' Follow the story of a detective, Ralph Anderson,<br> Who Arrests Terry Maitland, the coach of the junior boy's <br> football team, aftera heinous crime occurs in Flint City.</p>
                        <br><p class="text">Author : Stephen King</p>
                    </div>
                    <div class="Image-a">
                        <img src="gambar/bookout.jpg" alt="n" class="gambar">
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <a href="buku/The-Antidote-PDF-Book.pdf"><button class="tombol1">Read</button></a>
                    <div class="tulisan">
                        <a href="detailantidote.html">
                             <h1 class="judul">The Antidote</h1>
                        </a>
                        <h2>Summary</h2>
                        <p class="text">'It is just after eight o'clock on a December morning, in a darkened<br>basketball stadium on the outskirts of San Antonio in Texas,<br>and according to the orange man - I am about to learn<br>'the one thing that will change your life forever'.</p>
                        <br><p class="text">Author : Oliver Burkeman</p>
                    </div>
                    <div class="Image-a">
                        <img src="gambar/antidote.jpg" alt="n" class="gambar">
                    </div>
                </div>
                <div class="swiper-slide slide">
                    <a href="buku/Chernobyl-History-of-a-Tragedy-PDF-Book.pdf"><button class="tombol1">Read</button></a>
                    <div class="tulisan1">
                    <a href="detailchernobyl.html">
                        <h1 class="judul" style="font-size: 2.5rem;">Chernobyl : History Of Tragedy</h1>
                    </a>
                        <h2>Summary</h2>
                        <p class="text" style="font-size: 1.3rem;">‘It was a big day—many in Moscow and throughout the Soviet Union<br>believed that it signaled the dawn of a new era. On the cold winter<br>morning of February 25, 1986—the temperature during the previous night<br>had fallen to minus two degrees Fahrenheit—close to 5,000 warmly dressed<br>men and women, including senior Communist Party and state officials.</p>
                        <br><p style="position: relative; top: 5rem; font-size: 1.3rem;">Author : Serhiii Plokhy</p>
                    </div>
                    <div class="Image-a">
                        <img src="gambar/cher.jpg" alt="n" class="gambar">
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>
    <!-- HOME -->
    
    <!-- BOOKS -->
    <section class="kotak" style="background-color: transparent;" id="book">
        <h1 style="color: black;" class="H1">BOOKS</h1>

        <div class="box-container">

            <div class="box">
                <div class="Image">
                    <img src="gambar/thornes.jpg" alt="n">
                </div>
                <div class="as">
                    <h3 class="judul3">A Game of Thrones</h3><br>
                </div>
                <a href="buku/1-A Game of Thrones.pdf"><button class="a1">Read</button></a>
            </div>
            <div class="box">
                <div class="Image">
                    <img src="gambar/book1.jpg" alt="n">
                </div>
                <div class="as">
                    <h3 class="judul3">Hujan</h3><br>
                </div>
                <a href="buku/Tere Liye - Hujan.pdf"><button class="a1">Read</button></a>
            </div>
            <div class="box">
                <div class="Image">
                    <img src="gambar/book3.jpg" alt="n">
                </div>
                <div class="as">
                    <h3 class="judul3">Haunting Adeline</h3><br>
                </div>
                <a href="buku/Haunting Adeline.pdf"><button class="a1">Read</button></a>
            </div>
            <div class="box">
                <div class="Image">
                    <img src="gambar/book4.jpg" alt="n">
                </div>
                <div class="as">
                    <h3 class="judul3">Twisted Games</h3><br>
                </div>
                <a href="buku/twisted-games.pdf"><button class="a1">Read</button></a>
            </div>
            <div class="box">
                <div class="Image">
                    <img src="gambar/book5.jpg" alt="n">
                </div>
                <div class="as">
                    <h3 class="judul3">Ugly Love</h3><br>
                </div>
                <a href="buku/Ugly Love.pdf"><button class="a1">Read</button></a>
            </div>
            <div class="box">
                <div class="Image">
                    <img src="gambar/book6.jpg" alt="n">
                </div>
                <div class="as">
                    <h3 class="judul3">The Art of War</h3><br>
                </div>
                <a href="buku/ArtOfWar.pdf"><button class="a1">Read</button></a>
            </div>
            <div class="box">
                <div class="Image">
                    <img src="gambar/book7.jpg" alt="n">
                </div>
                <div class="as">
                    <h3 class="judul3">Twilight</h3><br>
                </div>
                <a href="buku/Twilight.pdf"><button class="a1">Read</button></a>
            </div>
            <div class="box">
                <div class="Image">
                    <img src="gambar/book13.jpg" alt="n">
                </div>
                <div class="as">
                    <h3 class="judul3">Calculus</h3><br>
                </div>
                <a href="buku/Calculus.pdf"><button class="a1">Read</button></a>
            </div>
            <div class="box">
                <div class="Image">
                    <img src="gambar/book12.jpg" alt="n">
                </div>
                <div class="as">
                    <h3 class="judul3">Secrets of Santa Muerte</h3><br>
                </div>
                <a href=""><button class="a1">Read</button></a>
            </div>
            <div class="box">
                <div class="Image">
                    <img src="gambar/book11.jpg" alt="n">
                </div>
                <div class="as">
                    <h3 class="judul3">Ignite Me</h3><br>
                </div>
                <a href="buku/Shatter.pdf"><button class="a1">Read</button></a>
            </div>
            <div class="box">
                <div class="Image">
                    <img src="gambar/book10.jpg" alt="n">
                </div>
                <div class="as">
                    <h3 class="judul3">Do Epic Shit</h3><br>
                </div>
                <a href="buku/Do Epic Shit.pdf"><button class="a1">Read</button></a>
            </div>
            <div class="box">
                <div class="Image">
                    <img src="gambar/book8.jpg" alt="n">
                </div>
                <div class="as">
                    <h3 class="judul3">Six of Crows</h3><br>
                </div>
                <a href="buku/six-of-crows-.pdf"><button class="a1">Read</button></a>
            </div>
        </div>
    </section>
    <!-- BOOKs -->
    
    <!-- About -->
    <section class="about" id="about">
        <h1>ABOUT US</h1>
        <div class="container2">
            <video controls src="video.mp4" class="video"></video>
            <p class="textabout">"A room without books is like a body without a soul." - Cicero. Welcome to the online library, where you can read books from all overthe world from anywhere with a better and faster reading experience. We are dedicated to providing a place for book readers to read the books they want more easily and free of charge.</p>
        </div>
    </section>
    <!-- About -->

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="srcrip.js"></script>
</div>
</div>
<script>
        var keyword = document.getElementById('keyword');
        var cari = document.getElementById('search-button');
        var container = document.getElementById('container');

        cari.addEventListener('click', function(event){
            event.preventDefault();
            var xhr = new XMLHttpRequest();

            xhr.onreadystatechange = function(){
                if(xhr.readyState == 4 && xhr.status == 200) {
                    container.innerHTML = xhr.responseText;
                }
            }

            xhr.open('GET', 'search.php?keyword=' + keyword.value, true);
            xhr.send();
        });
    </script>

</body>

</html>