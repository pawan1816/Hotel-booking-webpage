<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PJ Hotel - contact</title>
    <?php require('inc/links.php');?>
</head>

<body class="bg-light">
<?php require("inc/header.php");?>

<div class="my-5 px-4">
  <h2 class="fw-bold h-font text-center">Contact Us</h2>
  <div class="h-Line bg-dark"></div>
  <p class="text-center mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
    Ad earum perspiciatis aperiam impedit <br> inventore iusto, facilis, quibusdam 
    veritatis alias repudiandae iure asperiores ut libero ullam, debitis at est
    porro similique?
  </p>
</div>
<div class="container">
  <div class="row">
    <div class="col-lg-6 col-md-6 mb-5 px-4">
      <div class="bg-white rounded p-4">
        <iframe class="w-100 rounded mb-4" height="300px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d54594.79704470471!2d75.758852!3d31.215885800000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391af4e8654ed27b%3A0x44f046dd6942ae0d!2sPhagwara%2C%20Punjab!5e0!3m2!1sen!2sin!4v1699470221273!5m2!1sen!2sin"   loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <h5>Adress</h5>
        <a href="https://maps.app.goo.gl/eUqu4sJ6xjrK5vwa9" target="_blank" class="d-inline-block text-decoration-none text-dark mb-2">
          <i class="bi bi-geo-alt-fill"></i> xyz,phagwara punjab.
        </a>
        <h5 class="mt-4">Call us</h5>
        <a href="tel: +916203277096" class="d-inline-block mb-2  text-decoration-none text-dark">
          <i class="bi bi-telephone-fill"></i>+916203277096</a><br>
        <a href="tel: +916203277096" class="d-inline-block  text-decoration-none text-dark">
          <i class="bi bi-telephone-fill"></i>
          +916203277096</a>
        <h5 class="mt-4">Email </h5>
        <a href="mailto: paikpawan18@gmail.com" class="d-inline-block mb-2  text-decoration-none text-dark">
          <i class="bi bi-envelope"></i>paikpawan18@gmail.com
        </a>
        <h5 class="mt-4">Follow us</h5>
        <a href="#" class="d-inline-block text-dark fs-5 me-2">
          <i class="bi bi-twitter me-1"></i>
        </a>
        <a href="#" class="d-inline-block text-dark fs-5 me-2">
            <i class="bi bi-facebook me-1"></i>
        </a>
        <a href="#" class="d-inline-block text-dark fs-5 ">
            <i class="bi bi-instagram me-1"></i>
        </a>
      </div>
    </div>
    <div class="col-lg-6 col-md-6 px-4">
      <div class="bg-white rounded p-4">
        <form>
          <h5>Send A message</h5>
          <div class="mt-3">
            <label class="form-label" style="font-weight:500">Name</label>
            <input type="text" class="form-control shadow-none">
          </div>
          <div class="mt-3">
            <label class="form-label" style="font-weight:500">Email</label>
            <input type="email" class="form-control shadow-none">
          </div>
          <div class="mt-3">
            <label class="form-label" style="font-weight:500">Subject</label>
            <input type="text" class="form-control shadow-none">
          </div>
          <div class="mt-3">
            <label class="form-label" style="font-weight:500">Message</label>
            <textarea class="form-control" rows="5" style="resize:none"></textarea>
          </div>
          <button type="submit" class="btn btn-white custom-bg mt-3">Send</button>
        </form>
      </div>
    </div>
  </div>
</div>

<?php require('inc/footer.php');?>
</body>
</html>