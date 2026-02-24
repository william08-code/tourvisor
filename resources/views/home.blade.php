<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tourvisor</title>
  <link rel="icon" type="image/png" href="{{ asset('assets/favicon2.png') }}">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <script src="{{ asset('js/script.js') }}" defer></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>

  <!-- Header -->
  <header class="header">
    <div class="container header-content">
      <div class="logo">Tourvisor</div>
      <nav class="nav">
        <a href="#">Home</a>
        <a href="#">Destinations</a>
        <a href="#">Contact Us</a>
        <button class="btn-signin">Sign in</button>
      </nav>
    </div>
  </header>

  <!-- Hero Section -->
  <section class="hero">
    <h1>Stay somewhere great</h1>
    <div class="search-bar">
      <i class="fa fa-search"></i>
      <input type="text" placeholder="Hotel name or destination">
      <button>Search</button>
    </div>
  </section>

  <!-- Main Image / Carousel -->
  <section class="carousel">
    <div class="carousel-image placeholders" style="background-image: url('/assets/hero1.jpg')"></div>
  </section>


  <!-- You might like these -->
  <section class="section">
    <div class="container">
      <h2>You might like these</h2>
      <p class="section-desc">Whatever you're into, we've got it.</p>
      <div class="card-grid">
        <div class="card" style="background-image: url('/assets/anathera-resort-kuta.jpg');"></div>
        <div class="card"></div>
        <div class="card"></div>
        <div class="card"></div>
      </div>
    </div>
  </section>

  <!-- Highest rating -->
  <section class="section">
    <div class="container">
      <h2>Highest rating</h2>
      <p class="section-desc">Trusted by travelers, loved by everyone.</p>
      <div class="card-grid">
        <div class="card placeholder"></div>
        <div class="card placeholder"></div>
        <div class="card placeholder"></div>
        <div class="card placeholder"></div>
      </div>
    </div>
  </section>

  <!-- Explore destinations -->
  <section class="section">
    <div class="container">
      <h2>Explore destinations</h2>
      <p class="section-desc">Uncover unique places and stories across Badung Regency.</p>
      <div class="destination-grid">
        <div class="destination placeholder">Jimbaran</div>
        <div class="destination placeholder">Ungasan</div>
        <div class="destination placeholder">Canggu</div>
        <div class="destination placeholder">Legian</div>
        <div class="destination placeholder">Pecatu</div>
        <div class="destination placeholder">Nusa Dua</div>
        <div class="destination placeholder">Seminyak</div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer">
    <div class="container footer-content">
      <div class="footer-col">
        <h3>Tourvisor</h3>
        <p>We connect travelers with the best destinations, stays, and experiences in Badung — designed to inspire, explore, and enjoy Bali your way.</p>
      </div>
      <div class="footer-col">
        <h3>Quick Links</h3>
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">Destinations</a></li>
          <li><a href="#">Contact Us</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h3>Get in Touch</h3>
        <p>example@mail.com<br>+12 345 6789</p>
      </div>
    </div>
    <div class="footer-bottom">
      © Tourvisor. All Right Reserved.
    </div>
  </footer>

</body>
</html>
