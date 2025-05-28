<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>about</title>
       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
        <link rel="stylesheet" href="css/style.css?v=1.0">

        

    </head>

    <body>
<section class="header">
    <a href="home.php" class="logo">Events</a>
    <nav class="navbar">
        <a href="home.php">home</a>
        <a href="about.php">about</a>
        <a href="package.php">package</a>
        <a href="book.php">book</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

</section>

<div class="heading" style="background:url(images/header-bg-3.jpeg) no-repeat">
    <h1>book now</h1>
</div>

<section class="booking">
    <h1 class="heading-title">book your event!</h1>
    
    <form action="book_form.php" method="post" class="book-form">
        <div class="flex">
            <div class="inputBox">
                <span>name :</span>
                <input type="text" placeholder="enter your name" name="name">
            </div>
            <div class="inputBox">
                <span>email :</span>
                <input type="email" placeholder="enter your email" name="email">
            </div>
            <div class="inputBox">
                <span>phone :</span>
                <input type="number" placeholder="enter your number" name="phone">
            </div>
            <div class="inputBox">
                <span>address :</span>
                <input type="text" placeholder="enter your address" name="address">
            </div>
            <div class="inputBox">
                <span>event :</span>
                <select id="event-select" name="event">
                <option value="wedding">Wedding</option>
                <option value="conference">Conference</option>
                 <option value="Dining Room">Dining Room</option>
                 <option value="Theatre">Theatre</option>
                </select>

            </div>
             <div id="event-images" class="image-container">
            </div>

            <div class="inputBox">
                <span>how many :</span>
                <input type="number" placeholder="number of guests" name="guests">
            </div>
            <div class="inputBox">
                <span>time :</span>
                <input type="time" name="time">
            </div>
            <div class="inputBox">
                <span>date :</span>
                <input type="date" name="date">
            </div>
        </div>

        <input type="submit" value="submit" class="btn" name="send">
    </form>

</section>


<script>
    const eventSelect = document.getElementById('event-select');
    const eventImages = document.getElementById('event-images');

    const imagesByEvent = {
        wedding: [
            'images/img-4.jpeg',
            'images/img-7.jpeg',
            'images/img-8.jpeg',
            'images/img-12.jpeg'
        ],
        conference: [
            'images/img-3.jpeg',
            'images/img-6.jpeg',
            'images/home-slide-3.jpeg',
            'images/img-13.jpeg'
        ],
        "Dining Room": [
            'images/img-10.jpeg',
            'images/img-11.jpeg',
            'images/img-114.jpeg',
            'images/img-15.jpeg'
        ],
        Theatre: [
            'images/img-1.jpeg',
            'images/img-9.jpeg',
            'images/img-16.jpeg',
            'images/img-17.jpeg'
        ]
    };

    eventSelect.addEventListener('change', function () {
        const selected = this.value;
        const images = imagesByEvent[selected] || [];

        eventImages.innerHTML = images.map(src => `
            <label class="event-option">
                <input type="radio" name="event_image" value="${src}" required>
                <img src="${src}" alt="${selected}" class="selectable-image">
            </label>
        `).join('');
    });

    // Trigger image load on initial value (optional)
    window.addEventListener('DOMContentLoaded', () => {
        const selected = eventSelect.value;
        const images = imagesByEvent[selected] || [];

        eventImages.innerHTML = images.map(src => `
            <label class="event-option">
                <input type="radio" name="event_image" value="${src}" required>
                <img src="${src}" alt="${selected}" class="selectable-image">
            </label>
        `).join('');
    });
</script>



<section class="footer">
    <div class="box-container">
        <div class="box">
            <h3>quick links</h3>
            <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
            <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
            <a href="package.php"> <i class="fas fa-angle-right"></i> package</a>
            <a href="book.php"> <i class="fas fa-angle-right"></i> book</a>

        </div>

        <div class="box">
            <h3>extra links</h3>
            <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
            <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
            <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
            <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>

        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#"> <i class="fas fa-phone"></i> +961-03-123456</a>
            <a href="#"> <i class="fas fa-phone"></i> +961-03-123455</a>
            <a href="#"> <i class="fas fa-envelope"></i> events@gmail.com</a>
            <a href="#"> <i class="fas fa-map"></i>Ashrafieh,Lebanon-400104 </a>
        </div>
        <div class="box">
            <h3>follow us</h3>
            <a href="#"><i class="fab fa-facebook-f"></i> facebook </a>
            <a href="#"><i class="fab fa-twitter"></i> twitter </a>
            <a href="#"><i class="fab fa-instagram"></i> instagram </a>
            <a href="#"><i class="fab fa-linkedin"></i> linkedin </a>
        </div>
    </div>

<div class="credit"> created by <span>© 2025 Events. All rights reserved. </span>all right reserved</div>

</section>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>

