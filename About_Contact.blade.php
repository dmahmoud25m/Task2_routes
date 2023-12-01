<!DOCTYPE html>
<html>
<head>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
body {font-family: "Times New Roman", Georgia, Serif;}
h1, h2, h3, h4, h5, h6 {
  font-family: "Playfair Display";
  letter-spacing: 5px;
}
</style>
</head>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-padding w3-card" style="letter-spacing:4px;">
    <a href="#home" class="w3-bar-item w3-button">XYZ_Article</a>
    <!-- Right-sided navbar links. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="#about" class="w3-bar-item w3-button">About Article</a>
      <a href="#contact" class="w3-bar-item w3-button">Contact_Us</a>
    </div>
  </div>
</div>

<!-- Header -->
<header class="w3-display-container w3-content w3-wide" style="max-width:1600px;min-width:500px" id="home">
  <img class="w3-image" src="/w3images/hamburger.jpg" alt="Hamburger Catering" width="1600" height="800">
  <div class="w3-display-bottomleft w3-padding-large w3-opacity">
    <h1 class="w3-xxlarge">XYZ_Article</h1>
  </div>
</header>

<!-- Page content -->
<div class="w3-content" style="max-width:1100px">

  <!-- About Section -->
  <div class="w3-row w3-padding-64" id="About">
    <div class="w3-col m6 w3-padding-large w3-hide-small">
    </div>

    <div class="w3-col m6 w3-padding-large">
      <h1 class="w3-center">About Article</h1><br>
      <h5 class="w3-center">since 1889</h5>
      <p class="w3-large">Welcome to our article platform! We strive to provide valuable and informative articles on a wide range of topics.<span class="w3-tag w3-light-grey">XYZ_Article</span> XYZ_Article.</p>
      <p class="w3-large w3-text-grey w3-hide-medium">Our dedicated team of writers and editors work diligently to bring you well-researched and engaging content that caters to various interests and preferences.</p>
    </div>
  </div>
  
  <hr>

  <!-- Contact Section -->
  <div class="w3-container w3-padding-64" id="contact">
    <h1>Contact_Us</h1><br>
    <p>For any inquiries or to get in touch with us, please use the contact information below:</p>
    <p class="w3-text-blue-grey w3-large"><b>Article Service, 42nd Living St, 43043 New York, NY</b></p>
    <p>You can also contact us by phone 00553123-2323 or email XYZ_Article@XYZ_Article.com, or you can send us a message here:</p>
    <form action="/action_page.php" target="_blank">
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Name" required name="Name"></p>
      <p><input class="w3-input w3-padding-16" type="datetime-local" placeholder="Date and time" required name="date" value="2020-11-16T20:00"></p>
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Message \ Special requirements" required name="Message"></p>
      <p><button class="w3-button w3-light-grey w3-section" type="submit">SEND MESSAGE</button></p>
    </form>
  </div>
  <!-- End page content -->
</div>

<!-- Footer -->
<footer class="w3-center w3-light-grey w3-padding-32">
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">w3.css</a></p>
</footer>

</body>
</html>
  