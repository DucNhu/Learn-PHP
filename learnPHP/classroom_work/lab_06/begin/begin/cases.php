<?php
$conn = new mysqli("localhost", "root", "", "mysqlitest");
if($conn -> connect_errno) die("Connect DB error");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>My Portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900|Cormorant+Garamond:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
<header>
    <a href="index.html" class="header-brand">mmtuts</a>
    <nav>
        <ul>
            <li><a href="portfolio.html">Portfolio</a></li>
            <li><a href="about.html">About me</a></li>
            <li><a href="contact.html">Contact</a></li>
        </ul>
        <a href="cases.html" class="header-cases">Cases</a>
    </nav>
</header>
<main>
    <section class="cases-links">
        <div class="wrapper">
            <h2>Gallery</h2>
                <div class="cases-container">
                    <?php
                        $query = "select * from gallery ORDER BY orderGallery DESC";
                        $result = $conn -> query($query);
                        // Đếm số hàng được sêlect:
                        $rows = mysqli_num_rows($result);
                        // Câu lệnh qua đó sẽ gọi trực tiếp tên cột:
                        $row = mysqli_fetch_array($result);
                        // Vòng for duyệt đủ số lượng hàng
                        for($i = 0; $i < $rows; $i++) 
                        {
                            echo ' 
                            <div class="frame">           
                                <img src="img/gallery/'.$row[3].'" />
                                <h3>'.$row[1].'</h3>
                                <p>'.$row[2].'</p> 
                            </div>                    
                            ';
                            // Trong đó: $row[3]: cho ra thôg số ở cột thứ 3 trong hàg được trả về qua lệnh dòng thứ 32
                        }
                      
                    ?>
            </div>
        </div>
    </section>
</main>
<!--<div class="wrapper">-->
<!--    <footer>-->
<!--        <ul class="footer-links-main">-->
<!--            <li><a href="#">Home</a></li>-->
<!--            <li><a href="#">Cases</a></li>-->
<!--            <li><a href="#">Portfolio</a></li>-->
<!--            <li><a href="#">About me</a></li>-->
<!--            <li><a href="#">Contact</a></li>-->
<!--        </ul>-->
<!--        <ul class="footer-links-cases">-->
<!--            <li><p>Latest cases</p></li>-->
<!--            <li><a href="#">MALING SHAOLIN - WEB DEVELOPMENT</a></li>-->
<!--            <li><a href="#">EXCELLENTO - WEB DEVELOPMENT, SEO</a></li>-->
<!--            <li><a href="#">MMTUTS - YOUTUBE CHANNEL</a></li>-->
<!--            <li><a href="#">WELTEC - VIDEO PRODUCTION</a></li>-->
<!--        </ul>-->
<!--        <div class="footer-sm">-->
<!--            <a href="#">-->
<!--                <img src="img/youtube-symbol.png" alt="youtube icon">-->
<!--            </a>-->
<!--            <a href="#">-->
<!--                <img src="img/twitter-logo-button.png" alt="youtube icon">-->
<!--            </a>-->
<!--            <a href="#">-->
<!--                <img src="img/facebook-logo-button.png" alt="youtube icon">-->
<!--            </a>-->
<!--        </div>-->
<!--    </footer>-->
<!--</div>-->
</body>
</html>
<?php 
mysqli_close($conn);
?>

