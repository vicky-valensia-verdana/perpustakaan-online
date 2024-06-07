<?php
    require 'fuction.php';

    $book_title = $_GET["book_title"];

    $query = "SELECT * FROM book WHERE book_title = '" . addslashes($book_title) . "'";
    $book = query($query);

    $row = $book[0];
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="detaill.css">
</head>
<body>
    <div class="div1">
        <div class="gas">
            <div class="gmbr">
                <div class="Image">
                    <img src="<?php echo $row["Image"]; ?>" alt="<?php echo $row["book_title"]; ?>" class="gambar">
                    <a href=""><button class="tombol1">Read</button></a>
                    <div class="judul">
                        <h1><?php echo $row["book_title"]; ?></h1>
                        <h3 class="Author">Author : <?php echo $row["Book_Author"]; ?> </h3>
                        <h3 class="genre">Publisher : <?php echo $row["Publisher"]; ?> </h3>
                        <h3 class="Released">Released : <?php echo $row["year"]; ?></h3>
                    </div>
                </div>
                <div class="sinopsis">
                    <h3 style="position: relative; left: 4rem;">Synopsis</h3>
                    <p>An eleven-year-old boy’s violated corpse is found in a town park. Eyewitnesses and fingerprints point unmistakably to one of Flint City’s most popular citizens. He is Terry Maitland, Little League coach, English teacher, husband, and father of two girls. Detective Ralph Anderson, whose son Maitland once coached, orders a quick and very public arrest. Maitland has an alibi, but Anderson and the district attorney soon add DNA evidence to go with the fingerprints and witnesses. Their case seems ironclad.</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>