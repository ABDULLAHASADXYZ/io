<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Abdullah.net</title>
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr"
    crossorigin="anonymous"
  />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
  
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<link rel="stylesheet" href="style.css">
<link rel="icon" type="image/x-icon" href="images/favicon.ico">
<script>
  
  AOS.init();
</script>

</head>
<body>

<nav class="navbar navbar-expand-lg">
  <div class="container">

    <a class="navbar-brand" href="https://cyberwarriors.netlify.app/">
      <img src="images/logo.png" alt="Instagram" class="brand-logo">
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
      aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
      <ul class="navbar-nav text-center">
        
        <li class="nav-item">
          <a class="nav-link" href="#">
            <img src="images/home.jpeg" alt="HOME" class="social-logo">
          </a>

                            <li class="nav-item">
          <a class="nav-link" href="#downloads">
            <img src="images/downloads.jpeg" alt="Downloads" class="social-logo">
          </a>
           
              <li class="nav-item">
          <a class="nav-link" href="https://wowowowowowow.netlify.app/">
            <img src="images/lock-icon-black-white-black-background-illustration-lock-icon-black-white-black-background-vector-illustration-170336738.webp" alt="instagram" class="social-logo">
          </a>
        </li>

                    <li class="nav-item">
          <a class="nav-link" href="http://nu63c3orsu55wwfhmgu6ucxnwituyssvxm7khdof23mfvi4fuitgvhqd.onion">
            <img src="images/hacker-internet-web-digital-logo-hoodie-silhouette-clip-art-icon-symbol-dark-web-scurity-hack-editable-vector.jpg" alt="instagram" class="social-logo">
          </a>
        </li>
           
              <li class="nav-item">
          <a class="nav-link" href="https://mehfil-e-sur.netlify.app/">
            <img src="images/Music.png" alt="HOME" class="social-logo">
          </a>

          <li class="nav-item">
          <a class="nav-link" href="#info">
            <img src="images/About.jpeg" alt="instagram" class="social-logo">
          </a>
        </li>
  
          
          
          
          <li class="nav-item">
          <a class="nav-link" href="https://wa.me/+923353393213">
            <img src="images/whats.jpeg" alt="whatsapp" class="social-logo">
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://www.instagram.com/abdullah.net.io">
            <img src="images/insta.jpeg" alt="instagram" class="social-logo">
          </a>
        </li>

        
        
 
          </ul>
        </li>
      </ul>
    </div>

  </div>
</nav>






<?php
include "db.php";
session_start();

$message = "";

if(isset($_POST['login'])){
    $email = mysqli_real_escape_string($conn, trim($_POST['email']));
    $password = $_POST['password'];

    $query = "SELECT * FROM Janta WHERE email='$email' LIMIT 1";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) == 1){
        $row = mysqli_fetch_assoc($result);

        if(password_verify($password, $row['password'])){
            $_SESSION['username'] = $row['username'];
            header("Location: dashboard.php");
            exit();
        } else {
            $message = "Ghalat He";
        }
    } else {
        $message = "Ghalat Email He Shayad";
    }
}
?>

<div class="container mt-5" style="max-width: 400px;">
    <h3 class="text-center text-light mb-3">Login Maar Jaldi</h3>
    
    <?php if(!empty($message)) { ?>
        <div class="alert alert-danger text-center">
            <?php echo $message; ?>
        </div>
    <?php } ?>

    <form action="" method="POST" class="bg-dark p-4 rounded border border-secondary shadow">
        <input class="form-control mb-3" type="email" name="email" placeholder="Email" required>
        <input class="form-control mb-3" type="password" name="password" placeholder="Password" required>
        <button type="submit" name="login" class="btn btn-primary w-100">Login</button>
    </form>

    <p class="text-center text-light mt-3">
        Account Nahi? <a href="signup.php" class="text-warning">Signup Karo</a>
    </p>
</div>



<br>

<div class="text-center my-4">
  <a href="https://wa.me/+923353393213?text=I%20Want%20To%20Buy%20Ethical,course" class="buy-btn">Buy Course</a>
</div>

























<section class="container my-5 text-center">
  <h2 class="mb-4 text-light">✨ Why Choose Abdullah.net?</h2>
  <div class="row g-4">
    <div class="col-md-3">
      <div class="card bg-dark text-white h-100 shadow">
        <div class="card-body">
          <h1>🎯</h1>
          <h5>Beginner Friendly</h5>
          <p>No prior experience needed, start from scratch.</p>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card bg-dark text-white h-100 shadow">
        <div class="card-body">
          <h1>🛡️</h1>
          <h5>Practical Tools</h5>
          <p>Hands-on vault access with real hacking tools.</p>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card bg-dark text-white h-100 shadow">
        <div class="card-body">
          <h1>🚀</h1>
          <h5>Advanced Modules</h5>
          <p>Dark Web, Brute Attacks & Social Media Hacking</p>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card bg-dark text-white h-100 shadow">
        <div class="card-body">
          <h1>🎥</h1>
          <h5>Live Classes</h5>
          <p>Interactive sessions with instant Q&A.</p>
        </div>
      </div>
    </div>
  </div>
</section>





<div style="background-color:#111; padding:20px 10px; text-align:center; border-top:2px solid #444;">
  <img src="images/Music.png" alt="Music Icon" style="height:50px; vertical-align:middle; margin-right:10px;">
  <span style="font-size:1.2rem; color:white; vertical-align:middle;">
    Explore our <b>Mehfil-e-Sur</b> Music Collection 🎶
  </span>
  <br><br>
  <a href="https://mehfil-e-sur.netlify.app/" class="btn btn-outline-light btn-sm">
    🎧 Listen Now
  </a>
</div>

<hr>
  <footer>    
    <a href="https://www.instagram.com/abdullah.net.io" target="_blank">
            <img src="images/insta.jpeg" alt="Instagram" class="social-logo">
        </a>
           <a href="https://wa.me/+923353393213" target="_blank">
            <img src="images/whatsapp.avif" alt="Instagram" class="social-logo">
        </a>
                  <a href="https://www.facebook.com/people/Abdullah-Asad/pfbid0ZAbF3bMdgndb3tRvsY6Z4g2f2MdjT9JNPU35fzREDEWKwhimLrXLfH73V5XjkVEUl/" target="_blank">
            <img src="images/facebook.webp" alt="Instagram" class="social-logo">
        </a>

      </footer>
 <div
 class="foter">
 <a href="terms.html"> Terms of Service</a> |
  <a href="privacy.html">Privacy Policy</a>
 
  <footer class="text-white text-center">
  &copy; <span id="year"></span> Abdullah.net
</footer>
<script>
  document.getElementById("year").textContent = new Date().getFullYear();
</script>







</div>

   <br>



<script>

document.addEventListener("contextmenu", function(e){
    e.preventDefault();
}, false);


document.addEventListener("selectstart", function(e){
    e.preventDefault();
}, false);

document.addEventListener("dragstart", function(e){
    e.preventDefault();
}, false);


document.addEventListener("keydown", function(e) {
   
    if(e.key === "F12") e.preventDefault();
    
    if(e.ctrlKey && e.shiftKey && e.key.toLowerCase() === "i") e.preventDefault();
    
    if(e.ctrlKey && e.shiftKey && e.key.toLowerCase() === "j") e.preventDefault();
    
    if(e.ctrlKey && e.key.toLowerCase() === "u") e.preventDefault();
    
    if(e.ctrlKey && e.key.toLowerCase() === "c") e.preventDefault();
    
    if(e.ctrlKey && e.key.toLowerCase() === "s") e.preventDefault();
    
    if(e.ctrlKey && e.shiftKey && e.key.toLowerCase() === "c") e.preventDefault();
});
</script>


  </body>
</html>
