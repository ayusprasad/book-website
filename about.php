<?php
include 'config.php';
session_start();
$user_id = $_SESSION['user_id'];
if(!isset($user_id)){
    header('location:login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css?v=time()">
</head>
<body>
    <?php include 'header.php';?>
    <div class="heading-1">
        <h3>About Us</h3>
        <p><a href="home.php">Home</a> / About</p>
    </div>
    <section class="about">
        <div class="flex">
            <div class="image">
                <img src="about-img.jpg" alt="">
            </div>
            <div class="content">
                <h3>Why Choose Us?</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In ut quibusdam maiores veritatis similique illo distinctio nostrum, ipsam harum culpa, quas autem, quis explicabo! Expedita odio soluta animi praesentium doloribus!</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea explicabo ipsum ab rem inventore recusandae pariatur vel facere dolore sint!</p>
                <a href="contact.php" class="btn">Contact Us</a>
            </div>
        </div>
    </section>
    <section class="reviews">
        <h1 class="title">Client's Reviews</h1>
        <div class="box-container">
            <div class="box">
                <img src="people images/pic-1.png" alt="">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, asperiores similique culpa corrupti omnis pariatur soluta? Enim et beatae eum.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half"></i>
                </div>
                <h3>Manideep Singh</h3>
            </div>
            <div class="box">
                <img src="people images/pic-2.png" alt="">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, asperiores similique culpa corrupti omnis pariatur soluta? Enim et beatae eum.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h3>Kapil Narayan</h3>
            </div>
            <div class="box">
                <img src="people images/pic-3.png" alt="">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, asperiores similique culpa corrupti omnis pariatur soluta? Enim et beatae eum.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h3>Indumati Verma</h3>
            </div>
            <div class="box">
                <img src="people images/pic-4.png" alt="">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, asperiores similique culpa corrupti omnis pariatur soluta? Enim et beatae eum.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half"></i>
                </div>
                <h3>Gayatri Krishnan</h3>
            </div>
            <div class="box">
                <img src="people images/pic-5.png" alt="">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, asperiores similique culpa corrupti omnis pariatur soluta? Enim et beatae eum.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h3>Dhanush Kumar</h3>
            </div>
            <div class="box">
                <img src="people images/pic-6.png" alt="">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, asperiores similique culpa corrupti omnis pariatur soluta? Enim et beatae eum.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h3>Payal Pandey</h3>
            </div>
        </div>
    </section>
    <section class="authors">
        <h1 class="title">Great Authors</h1>
        <div class="box-container">
            <div class="box">
                <img src="author images/author-1.png" alt="">
                <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
                </div>
                <h3>Stephen K Dirk</h3>
            </div>
            <div class="box">
                <img src="author images/author-2.png" alt="">
                <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
                </div>
                <h3>Jamie Rowling</h3>
            </div>
            <div class="box">
                <img src="author images/author-3.png" alt="">
                <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
                </div>
                <h3>Maggie Swift</h3>
            </div>
            <div class="box">
                <img src="author images/author-4.png" alt="">
                <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
                </div>
                <h3>Sukhwant Singh</h3>
            </div>
            <div class="box">
                <img src="author images/author-5.png" alt="">
                <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
                </div>
                <h3>Sanaya Khan</h3>
            </div>
            <div class="box">
                <img src="author images/author-6.png" alt="">
                <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
                </div>
                <h3>George Martin</h3>
            </div>
        </div>
    </section>
    <?php include 'footer.php';?>
    <script src="script.js"></script>
</body>
</html>