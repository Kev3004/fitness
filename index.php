<?php include 'session.php'; ?>
<style>
  #hero {
    width: 100%;
    height: calc(100vh - 70px);
    background: url("assets/hero.jpg") top center;
    background-size: cover;
    position: relative;
  }

  #hero:before {
    content: "";
    background: rgba(0, 0, 0, 0.6);
    position: absolute;
    bottom: 0;
    top: 0;
    left: 0;
    right: 0;
  }

  #hero .container {
    position: relative;
    padding-top: 74px;
    text-align: center;
  }

  #hero h1 {
    margin: 0;
    font-size: 56px;
    font-weight: 700;
    line-height: 64px;
    color: #fff;
    font-family: "Poppins", sans-serif;
  }

  #hero h1 span {
    color: #ffc451;
  }

  #hero h2 {
    color: rgba(255, 255, 255, 0.9);
    margin: 10px 0 0 0;
    font-size: 24px;
  }

  #hero .icon-box {
    padding: 30px 20px;
    transition: ease-in-out 0.3s;
    border: 1px solid rgba(255, 255, 255, 0.3);
    height: 100%;
    text-align: center;
  }

  #hero .icon-box i {
    font-size: 32px;
    line-height: 1;
    color: #ffc451;
  }

  #hero .icon-box h3 {
    font-weight: 700;
    margin: 10px 0 0 0;
    padding: 0;
    line-height: 1;
    font-size: 20px;
    line-height: 26px;
  }

  #hero .icon-box h3 a {
    color: #fff;
    transition: ease-in-out 0.3s;
  }

  #hero .icon-box h3 a:hover {
    color: #ffc451;
  }

  #hero .icon-box:hover {
    border-color: #ffc451;
  }

  @media (min-width: 1024px) {
    #hero {
      background-attachment: fixed;
    }
  }

  @media (max-width: 768px) {
    #hero {
      height: auto;
    }

    #hero h1 {
      font-size: 28px;
      line-height: 36px;
    }

    #hero h2 {
      font-size: 20px;
      line-height: 24px;
    }
  }
</style>

<?php include 'header.php'; ?>
<section id="hero" class="d-flex align-items-center justify-content-center">
  <div class="container" data-aos="fade-up">

    <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
      <div class="col-xl-6 col-lg-8">
        <h1>BHealthy<span>.</span></h1>
        <h2>As for your fitness and to meet your goals.</h2>
      </div>
    </div>

    <div class="row gy-4 mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">
      <div class="col-xl-2 col-md-4">
        <div class="icon-box">
          <i class="fa-solid fa-dumbbell"></i>
          <h3><a href="addexercise.php" class=" text-decoration-none">Make Your Workout </a></h3>
        </div>
      </div>
      <div class="col-xl-2 col-md-4">
        <div class="icon-box">
          <i class="fa-solid fa-bowl-food"></i>
          <h3><a href="Add.php" class=" text-decoration-none">Track Your Calories</a></h3>
        </div>
      </div>
    </div>
  </div>

  </div>
</section>