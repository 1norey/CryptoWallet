<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Slider</title>
    <link rel="stylesheet" href="Slider.css">
    <script src="Slider.js"></script>

</head>
<body>
    <a href="home-page.php" class="go-back-button">Go Back to Home Page</a>
    <h1>Rules Of The Game</h1>
    <div class="slider-container">
        <div class="slide fade">
            <img src="Slider1.png" alt="Slide 1">
        </div>
        <div class="slide fade">
            <img src="slider2.png" alt="Slide 2">
        </div>
        <div class="slide fade">
            <img src="slider3.png" alt="Slide 3">
        </div>
        <div class="slide fade">
            <img src="slide4.png" alt="Slide 4">
        </div>
        <div class="slide fade">
            <img src="slide5.png" alt="Slide 5">
        </div>
    </div>

    <div class="slider-controls">
        <button class="control-button" onclick="plusSlides(-1)">Previous</button>
        <button class="control-button" onclick="plusSlides(1)">Next</button>
    </div>

</body>
</html>