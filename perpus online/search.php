<?php
    require 'fuction.php';

    $keyword = $_GET["keyword"];
    $query = "SELECT * FROM book where book_title LIKE '%$keyword%'";
    $book = query($query);
?>

<a href="utama.php" class="back-button"><i class="uil uil-arrow-left"></i> Back to Home</a>
<div class="div1">
        <h1 class="judul2"> Search "<?php echo isset($keyword) ? $keyword : ''; ?>"</h1>

        <?php foreach($book as $row): ?>
            <div class="div2">
                <div class="img">
                    <img src="<?php echo $row["Image"];?>" alt="n" class="gamba">
                </div>
                <div class="bungkus">
                    <div class="nama">
                        <a href="detail.php?book_title=<?php echo $row['book_title']; ?>">
                        <h1 class="judu"><?php echo $row["book_title"]; ?></h1></a>
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