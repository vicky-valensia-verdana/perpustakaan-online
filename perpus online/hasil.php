<?php
    require 'fuction.php';

    $book = query("SELECT * FROM book ");

    if(isset($_GET["cari"])){
        $keyword = $_GET["keyword"];
        $book = cari($keyword);
    }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="hasi.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=EB+Garamond:ital,wght@0,400..800;1,400..800&display=swap" rel="stylesheet">
</head>
<body>
    <form action="hasil.php" method="GET" id="search-form">
        <input type="text" name="keyword" id="keyword" placeholder="Masukkan judul" autocomplete="off">
        <button type="submit" name="cari" id="search-button"><i class="uil uil-search"></i></button>
    </form>

    <div id="container">
        <div class="div1">
            <h1 class="judul2"> Search "<?php echo isset($keyword) ? $keyword : ''; ?>"</h1>

            <?php foreach($book as $row): ?>
                <div class="div2">
                    <div class="img">
                        <img src="<?php echo $row["Image"];?>" alt="n" class="gambar">
                    </div>
                    <div class="bungkus">
                        <div class="nama">
                            <h1 class="judul"><?php echo $row["book_title"]; ?></h1>
                        </div>
                        <div class="nama">
                            <p class="author"> Author : <?php echo $row["Book_Author"]; ?> </p>
                        </div>
                        <div class="nama">
                            <p class="author"> Released : <?php echo $row["year"]; ?> </p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

            <div class="div3" > </div>
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