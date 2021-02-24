<?php 
        include '../components/header.php';
    ?>
    <head>
    <link rel="stylesheet" href="../css/style.css" type="text/css" />
    
    <link
      href="//db.onlinewebfonts.com/c/dbf69272e2482b8d0f1fc45d9f9a45b8?family=OitaW01-CondDemiItalic"
      rel="stylesheet"
      type="text/css"
    />
    <link
      rel="stylesheet"
      href="../fontawesome-free-5.15.1-web/css/all.css"
    />
    </head>
  <body>
    <div class="intro-div">
      <img src="../photos/cover-ph1.jpg" alt="" class="intro-pic" />
      <div class="quote-div">
        <h1>
          Eat. Sleep. Burn It.
          <h1 class="repeat-col">Repeat.</h1>
        </h1>
        <p>
          Work on building strength or losing weight, it all happens at BurnIt.
          Drop in for a quick workout or join us as a member. We offer a
          selection of affordable options for you to come in and enjoy our
          clean, fully-equipped facility and assistance from our professional
          training staff.
        </p>
        <a href="register.php">
          <button class="join-us-button"><h2>Join Us</h2></button>
        </a>
      </div>
    </div>

    <div class="slideshow-container">
      <div class="slideshow-title">
        <h1>Some of our products.</h1>
      </div>
      <div class="slider-div">
        <div class="slide fade">
          <div class="product7 prod">
            <img src="../photos/IntegritySe.jpg" alt="" class="equipment-img" />
            <h3>Club Series + Upright Lifecycle® Bike</h3>
            <h4>
              999.99
              <sub>EUR</sub>
            </h4>
            <a href="shop.php"><button>Explore more</button></a>
          </div>
        </div>
        <div class="slide fade">
          <div class="product8 prod">
            <img src="../photos/PCS-UprightBi.jpg" alt="" class="equipment-img" />
            <h3>Platinum Club Series Lifecycle Exercise Bike</h3>
            <h4>
              729.99
              <sub>EUR</sub>
            </h4>
            <a href="shop.php"><button>Explore more</button></a>
          </div>
        </div>
        <div class="slide fade">
          <div class="product15 prod">
            <img src="../photos/DumbbellR2.jpg" alt="" class="equipment-img" />
            <h3>Hammer Strength Two-Tier Dumbbell Rack</h3>
            <h4>
              999.99
              <sub>EUR</sub>
            </h4>
            <a href="shop.php"><button>Explore more</button></a>
          </div>
        </div>

        <div class="slide fade">
          <div class="product12 prod">
            <img
              src="../photos/Hammer-Strength-Assist-Dip-Chin-M[1].jpg"
              alt=""
              class="equipment-img"
            />
            <h3>Hammer Strength Assist Dip/Chin</h3>
            <h4>
              1509.99
              <sub>EUR</sub>
            </h4>
            <a href="shop.php"><button>Explore more</button></a>
          </div>
        </div>
        <div class="slide fade">
          <div class="product9 prod">
            <img
              src="../photos/CPO-Treadmill-M[1].jpg"
              alt=""
              class="equipment-img"
            />
            <h3>Integrity Series Certified Used Treadmill</h3>
            <h4>
              1209.99
              <sub>EUR</sub>
            </h4>
            <a href="shop.php"><button>Explore more</button></a>
          </div>
        </div>
      </div>
      <button class="back-button" onclick="plusSlides(-1)"><</button>
      <button class="forward-button" onclick="plusSlides(1)">></button>
    </div>

    <div class="workout-classes-container">
      <div class="workout-classes-title">
        <h1>What Happens in our Classes.</h1>
      </div>
      <div class="inner-workout inner-workout1">
        <div><img src="../photos/strength-training.jpg" alt="" /></div>
        <div class="inner-workout-text">
          <h1>Strength Training.</h1>
          <p>
            Our weight and floor exercises change daily so you can focus on
            different muscles. Your coach can provide options for any movement
            if you have injuries or limitations.
          </p>
        </div>
      </div>
      <div class="inner-workout inner-workout2">
        <div class="inner-workout-text">
          <h1>Cardio.</h1>
          <p>
            Whether you walk, jog or run, you’ll go at your own pace based on
            your fitness level. We also have bikes and striders available as
            alternates to the treadmill.
          </p>
        </div>
        <div><img src="../photos/cardio-training.jpg" alt="" /></div>
      </div>
      <div class="inner-workout inner-workout3">
        <div><img src="../photos/yoga-classes.jpeg" alt="" /></div>
        <div class="inner-workout-text">
          <h1>Yoga.</h1>
          <p>
            Engage your body and mind or build lean muscle as you flow through
            every bend, bridge, plank, and pose.Yoga is a great practice for
            both the body and the mind,it offers peace and mindfulness to its
            lovers.
          </p>
        </div>
      </div>
    </div>
    <div class="about-us-container">
      <div class="first-inner">
        <img src="../photos/weight-light.png" alt="" />
      </div>
      <div class="second-inner">
        <h1>ABOUT THE GYM</h1>
        <p>
          ​At Burn It, our approach is what makes us the best value in Pristina
          and we have proudly continued that philosophy since 2000. We asked
          ourselves what is vitally important to our clients, and we arrived at
          a method that is efficient and effective. It doesn’t matter if you
          have never worked out before or are just ready to take it to the next
          level. At Burn It, we will help you get where you want to go.
        </p>
      </div>
      <div class="third-inner">
        <img src="../photos/girl-training.png" alt="" />
      </div>
    </div>
    <div class="contact-form-container">
      <div class="get-in-touch">
        <h1>GET IN TOUCH</h1>
        <p>Pristina,10000</p>
        <p>burnit@gmail.com</p>
        <p>123-456-7890</p>
      </div>
      <form action="">
        <input type="text" placeholder="Name" />
        <input type="text" placeholder="Email" />
        <br />
        <input type="tel" placeholder="Phone" />
        <input type="text" placeholder="Address" />
        <br />
        <textarea
          name=""
          id=""
          cols="30"
          rows="5"
          placeholder="Type your message here..."
        ></textarea>
        <div class="contact-form-submit">
          <button id="submit">Submit</button>
        </div>
      </form>
    </div>
    <script src="../js/index.js"></script>
    <?php 
        include '../components/footer.php';
    ?>