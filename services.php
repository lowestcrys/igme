<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en">
<style>
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  body {
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background: url("home2.png") no-repeat center center fixed;
    background-size: cover;
  }

  .wrapper {
    display: flex;
    max-width: 550px;
    width: 100%;
    height: 400px;
    background: #fff;
    align-items: center;
    justify-content: center;
    position: relative;
    border-radius: 12px;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
  }

  .wrapper i.button {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    height: 36px;
    width: 36px;
    background-color: #343f4f;
    border-radius: 50%;
    text-align: center;
    line-height: 36px;
    color: #fff;
    font-size: 15px;
    transition: all 0.3s linear;
    z-index: 100;
    cursor: pointer;
  }

  i.button:active {
    transform: scale(0.94) translateY(-50%);
  }

  i#prev {
    left: 25px;
  }

  i#next {
    right: 25px;
  }

  .image-container {
    height: 200%;
    width: 100%;
    overflow: hidden;
  }

  .image-container .carousel {
    display: flex;
    height: 100%;
    transition: all 0.4s ease;
  }

  .back-button {
            background-color: #343f4f;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
          
            margin-top: 750px;
        }

        .back-button:hover {
            background-color: #596475;
        }
  .carousel img {
    height: auto;
    width: 100%;
    max-width: 100%;
    border-radius: 18px;
    border: 10px solid #fff;
    object-fit: fill;
  }
</style>

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>IGME</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
  <script src="script.js" defer></script>
</head>

<body>
  <section class="wrapper">
    <i class="fa-solid fa-arrow-left button" id="prev"></i>
    <div class="image-container">
      <div class="carousel">
        <img src="img/cleaning.jpg" alt="" />
        <img src="img/building.jpg" alt="" />
        <img src="img/repairing.jpg" alt="" />
        <img src="img/product.jpg" alt="" />
        <img src="img/rental.jpg" alt="" />
      </div>
    </div>
    <i class="fa-solid fa-arrow-right button" id="next"></i>
  </section>
  </button>

</body>
<button class="back-button" onclick="goBack()">Back
<script>
  function goBack() {
    window.history.back();
  }


  // Get the DOM elements for the image carousel
  const wrapper = document.querySelector(".wrapper"),
    carousel = document.querySelector(".carousel"),
    images = document.querySelectorAll("img"),
    buttons = document.querySelectorAll(".button");

  let imageIndex = 0,
    intervalId;

  // Define function to start automatic image slider
  const autoSlide = () => {
    // Start the slideshow by calling slideImage() every 2 seconds
    // intervalId = setInterval(() => slideImage(++imageIndex), 2000);
  };
  // Call autoSlide function on page load
  autoSlide();

  // A function that updates the carousel display to show the specified image
  const slideImage = () => {
    // Calculate the updated image index
    imageIndex = imageIndex === images.length ? 0 : imageIndex < 0 ? images.length - 1 : imageIndex;
    // Update the carousel display to show the specified image
    carousel.style.transform = `translate(-${imageIndex * 100}%)`;
  };

  // A function that updates the carousel display to show the next or previous image
  const updateClick = (e) => {
    // Stop the automatic slideshow
    clearInterval(intervalId);
    // Calculate the updated image index based on the button clicked
    imageIndex += e.target.id === "next" ? 1 : -1;
    slideImage(imageIndex);
    // Restart the automatic slideshow
    autoSlide();
  };

  // Add event listeners to the navigation buttons
  buttons.forEach((button) => button.addEventListener("click", updateClick));

  // Add mouseover event listener to wrapper element to stop auto sliding
  wrapper.addEventListener("mouseover", () => clearInterval(intervalId));
  // Add mouseleave event listener to wrapper element to start auto sliding again
  wrapper.addEventListener("mouseleave", autoSlide);
</script>

</html>