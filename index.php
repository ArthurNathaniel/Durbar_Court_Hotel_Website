<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'meta.php'; ?>
    <?php include 'cdn.php'; ?>
    <title>Home | Durbar Court Hotel</title>
    <link rel="stylesheet" href="./css/base.css">
    <link rel="stylesheet" href="./css/index.css">
</head>

<body>
    <?php include 'navbar.php'; ?>
    <section>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide hero-slide">
                    <img src="./images/hero_one.jpg" alt="">
                    <div class="swiper-text">
                        <h1>Welcome to Durbar Court Hotel – Where Luxury Meets Tradition.</h1>
                        <p>
                            Experience the epitome of opulence and cultural charm at Durbar Court Hotel, where every stay is a seamless blend of modern luxury and timeless tradition.
                        </p>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>
    <?php include 'book.php';?>
</body>

</html>