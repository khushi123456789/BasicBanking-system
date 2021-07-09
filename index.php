<html>
<head>
    <title>Basic Banking System</title>
    <link rel="shortcut icon" href="images/logo.jpg">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	 <link rel="stylesheet" href="index_button.css">
	<style>
	button{
		background-color:#8cbed6;
	}
	body
	{
		text-align:center;
	}
		#header{
		background-image:url("images/head.jpg");
		background-position: center;
		background-repeat: no-repeat;
		background-size: cover;
		padding-bottom:30px;

	}
	.car{
	
		margin-bottom:20px;
	padding-left: 80px;
	padding-right: 80px;
	left:0;
	right:0;
	border-radius:5px;
	padding-bottom:5px;
	}
	/* Style inputs with type="text", select elements and textareas */
input[type=text], select, textarea {
  width: 100%; /* Full width */
  padding: 12px; /* Some padding */ 
  border: 1px solid #ccc; /* Gray border */
  border-radius: 4px; /* Rounded borders */
  box-sizing: border-box; /* Make sure that padding and width stays in place */
  margin-top: 6px; /* Add a top margin */
  margin-bottom: 16px; /* Bottom margin */
  resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
}

/* Style the submit button with a specific background color etc */
input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

/* When moving the mouse over the submit button, add a darker green color */
input[type=submit]:hover {
  background-color: #45a049;
}

/* Add a background color and some padding around the form */
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.cards {
  margin: auto;
  display: grid;
  grid-template-columns: repeat(1, 1fr);
  grid-gap: 24px;
  max-width: 1200px;
  width: 100%;
}

@media(min-width: 540px){
  .cards {
    grid-template-columns: repeat(2, 1fr); 
  }
}

@media(min-width: 960px){
  .cards {
    grid-template-columns: repeat(4, 1fr); 
  }
}
.card {
  position: relative;
  padding-bottom: 150%;
}

.card-background {
  background-size: cover;
  background-position: center;
  border-radius: 24px;
  filter: brightness(0.75) saturate(1.2) contrast(0.85);
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  transform-origin: center;
  transition: .2s;
}
.card:hover .card-background {
  transform: scale(1.05) translateZ(0);
}

.cards:hover > .card:not(:hover) .card-background {
  filter: brightness(0.5) saturate(0) contrast(1.2) blur(20px);
}
.card-content {
  padding: 24px;
  position: absolute;
  font-family: arial, sans-serif;
}

.card-content p {
  color: rgba(255, 255, 255, .6);
  font-size: .9rem;
  margin-bottom: 10px;
  text-transform: uppercase;
}

.card-content h3 {
  color: rgba(255, 255, 255, .9);
  font-size: 1.9rem;
  text-shadow: 2px 2px 20px rgba(0,0,0,0.2);
}



$primary-light-blue: #8DB9ED;
$primary-line-color: #ccc;
* {
  box-sizing: border-box
}
html, body {
  height: 100%
}
body {
	font: 11px "Open Sans", sans-serif;
	-webkit-font-smoothing: antialiased;
	-moz-osx-font-smoothing: grayscale;
	margin: auto;
  display: flex;
  flex-flow: column nowrap;
 
}
ul {
  list-style: none
}
a {
  text-decoration: none
}
.generic-anchor {
	color: $primary-light-blue;
	&:visited {
		color: $primary-light-blue
	}
	&:hover {
		color: $primary-line-color
	}
}
.flex-rw {
  display: flex;
  flex-flow: row wrap;
}
//This main is mostly to push the footer to the bottom and for demo purposes.
main {
  flex: 1 1 auto; //For IE11
  display: flex;
  align-items: center;
  justify-content: center;
  font: 10em "Oswald", sans-serif;
  color: rgb(155,155,155);
  line-height: 1
}
footer {
  background: rgb(55,55,55);
  margin-top: auto;
  width: 100%
}
.footer-list-top {
  width: 33.333%
}
.footer-list-top > li {
  text-align: center;
  padding-bottom: 10px
}
.footer-list-header {
  padding: 10px 0 5px 0;
  color: #fff;
  font: 2.3vw "Oswald", sans-serif
}
.footer-list-anchor {
  font: 1.3em "Open Sans", sans-serif
}
.footer-social-section {
  width: 100%;
  align-items: center;
  justify-content: space-around;
  position: relative;
  margin-top: 5px;
}
.footer-social-section::after {
  content: "";
  position: absolute;
  z-index: 1;
  top: 50%;
  left: 10px;
  border-top: 1px solid $primary-line-color;
  width: calc(100% - 20px)
}
.footer-social-overlap {
  position: relative;
  z-index: 2;
  background: rgb(55,55,55);
  padding: 0 20px
}
.footer-social-connect {
  display: flex;
  align-items: center;
  font: 3.5em "Oswald", sans-serif;
  color: #fff
}
.footer-social-small {
  font-size: 0.6em;
  padding: 0px 20px
}
.footer-social-overlap > a {
  font-size: 3em
}
.footer-social-overlap > a:not(:first-child) {
  margin-left: 0.38em
}
.footer-bottom-section {
  width: 100%;
  padding: 10px;
  border-top: 1px solid $primary-line-color;
  margin-top: 10px
}
.footer-bottom-section > div:first-child {
  margin-right: auto
}
.footer-bottom-wrapper {
  font-size: 1.5em;
  color: #fff
}
.footer-address {
  display: inline;
  font-style: normal
}
@media only screen and (max-width: 768px) {
  .footer-list-header {
    font-size: 2em
  }
  .footer-list-anchor {
    font-size: 1.1em
  }
  .footer-social-connect {
    font-size: 2.5em
  }
  .footer-social-overlap > a {
    font-size: 2.24em
  }
  .footer-bottom-wrapper {
    font-size: 1.3em
  }
}
@media only screen and (max-width: 568px) {
  main {
    font-size: 5em
  }
  .footer-list-top {
    width: 100%
  }
  .footer-list-header {
    font-size: 3em;
  }
  .footer-list-anchor {
    font-size: 1.5em
  }
  .footer-social-section {
    justify-content: center
  }
  .footer-social-section::after {
    top: 25%
  }
  .footer-social-connect {
    margin-bottom: 10px;
    padding: 0 10px
  }
  .footer-social-overlap {
    display: flex;
    justify-content: center;
  }
  .footer-social-icons-wrapper {
    width: 100%;
    padding: 0
  }
  .footer-social-overlap > a:not(:first-child) {
    margin-left: 20px;
  }
  .footer-bottom-section {
    padding: 0 5px 10px 5px
  }
  .footer-bottom-wrapper {
    text-align: center;
    width: 100%;
    margin-top: 10px
  }
}
@media only screen and (max-width: 480px) {
  .footer-social-overlap > a {
    margin: auto
  }
  .footer-social-overlap > a:not(:first-child) {
    margin-left: 0;
  }
  .footer-bottom-rights {
    display: block
  }
}
@media only screen and (max-width: 320px) {
  .footer-list-header {
    font-size: 2.2em
  }
  .footer-list-anchor {
    font-size: 1.2em
  }
  .footer-social-connect {
    font-size: 2.4em
  }
  .footer-social-overlap > a {
    font-size: 2.24em
  }
  .footer-bottom-wrapper {
    font-size: 1.3em
  }
}

	</style>
</head>
<body >


<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Urban Bank</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">Sponsers</a></li>
      <li><a href="#">Contact Us</a></li>
    </ul>
  </div>
</nav>
	<div id="header">
       <br>
       <h1 style=" font-family:Times New Roman, Times, serif; font-size: 70px; color:black;text-shadow: 2px 2px black; padding-bottom:5px;"> Sparks Foundation Internship Project </h1>
       <h2 style=" font-family:Agency FB; font-size: 55px;color:gray;text-shadow: 2px 2px black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Urban Bank </h2>

        <div id="section">
            <table>
                <tr></tr>
                <tr><br>
				<a href="getdetail.php">
               <button class="primary_btn" id="button "type="button" href="getdetail.php">View users</button>
                </a>

               
                </tr>

                <tr>        
               <br> <br> <br>
			   <a href="transfer.php">
			   <button class="primary_btn" id="button" type="button">Credit Transfer</button>
               </a>
               
               </tr>
			   
			    <tr>        
               <br> <br> <br>
			   <a href="transaction.php">
			   <button class="primary_btn" id="button" type="button">All Transaction</button>
               </a>

            </table>
    </div>
	</div>
	<div class="car">
	<h1 style=" font-family:Times New Roman, Times, serif; font-size: 70px; color:black;text-shadow: 2px 2px black;"> 
	About Us </h1>
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="images/f1.jpg" alt="Chania" width="100%" >
      <div class="carousel-caption">
        <h3>Create a community</h3>
        <p>create a community with our banking parteners and grow you business with us!</p>
      </div>
    </div>

    <div class="item">
      <img src="images/f2.jpg" alt="Chicago" width="100%" >
      <div class="carousel-caption">
        <h3>Perfect workspace</h3>
        <p> We help you grow your business with faster rate!</p>
      </div>
    </div>

    <div class="item">
      <img src="images/f4.jpg" alt="New York" width="100%">
      <div class="carousel-caption">
        <h3>Minimum loss and maximum profit</h3>
        <p>We help the farmers and urban to grow their business with less amount of interest</p>
      </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
<h1 style=" font-family:Times New Roman, Times, serif; font-size: 70px; color:black;text-shadow: 2px 2px black; padding-bottom:7px;"> Our Sponsors </h1>
<section class="cards">


<a href="#" class="card">
    <div class="card-background" style="background-image: url(https://images.unsplash.com/photo-1619454016518-697bc231e7cb?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8bWljcm9zb2Z0JTIwc3ltYm9sfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=60)"></div>
    <div class="card-content">
      <p>Company</p>
      <h3>McDonald's</h3>
    </div>
  </a>

  <a href="#" class="card">
    <div class="card-background" style="background-image: url(https://images.unsplash.com/photo-1600367163359-d51d40bcb5f8?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTd8fGdvb2dsZSUyMHN5bWJvbHxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=60)"></div>
    <div class="card-content">
      <p>Company</p>
      <h3>Google</h3>
    </div>
  </a>

  <a href="#" class="card">
    <div class="card-background" style="background-image: url(https://images.unsplash.com/photo-1585184394271-4c0a47dc59c9?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8YXBwbGUlMjBsb2dvfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=60)"></div>
    <div class="card-content">
      <p>Company</p>
      <h3>Apple</h3>
    </div>
  </a>

  <a href="#" class="card">
    <div class="card-background" style="background-image: url(https://images.unsplash.com/photo-1611162617474-5b21e879e113?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjJ8fGZhY2Vib29rJTIwbG9nb3xlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=60)"></div>
    <div class="card-content">
      <p>Company</p>
      <h3>Netflix</h3>
    </div>
  </a>
</div>
  </section>

<div class="container">
<h1 style=" font-family:Times New Roman, Times, serif; font-size: 70px; color:black;text-shadow: 2px 2px black; padding-bottom:5px;"> Contact Us </h1>
  <form action="action_page.php">

    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:100px"></textarea>

    <input type="submit" value="Submit">

  </form>
</div>




<footer class="flex-rw">
  
  <ul class="footer-list-top">
    <li>
      <h4 class="footer-list-header">About Urban bank</h4></li>
    <li><a href='#' class="generic-anchor footer-list-anchor" itemprop="significantLink">GET TO KNOW US</a></li>
  
    

    <li><a href='#' itemprop="significantLink" class="generic-anchor footer-list-anchor">JOB OPENINGS</a></li>

    <li><a href='#' class="generic-anchor footer-list-anchor" itemprop="significantLink">EVENTS</a></li>
  </ul>
 
  <ul class="footer-list-top">
    <li id='help'>
      <h4 class="footer-list-header">Others</h4></li>
    <li><a href='#' class="generic-anchor footer-list-anchor" itemprop="significantLink">CONTACT</a></li>
    <li><a href='#' class="generic-anchor footer-list-anchor" itemprop="significantLink">FAQ</a></li>
    <li id='find-a-store'><a href='#' class="generic-anchor footer-list-anchor" itemprop="significantLink"> LOCATOR</a></li>
    <li id='user-registration'><a href='#' class="generic-anchor footer-list-anchor" itemprop="significantLink">NEW USERS</a></li>
  
  </ul>
  <section class="footer-social-section flex-rw">
      
      <span class="footer-social-overlap footer-social-icons-wrapper">
      <a href="https://www.pinterest.com/paviliongift/" class="generic-anchor" target="_blank" title="Pinterest" itemprop="significantLink"><i class="fa fa-pinterest"></i></a>
      <a href="https://www.facebook.com/paviliongift" class="generic-anchor" target="_blank" title="Facebook" itemprop="significantLink"><i class="fa fa-facebook"></i></a>
      <a href="https://twitter.com/PavilionGiftCo" class="generic-anchor" target="_blank" title="Twitter" itemprop="significantLink"><i class="fa fa-twitter"></i></a>
      <a href="http://instagram.com/paviliongiftcompany" class="generic-anchor" target="_blank" title="Instagram" itemprop="significantLink"><i class="fa fa-instagram"></i></a>
      <a href="https://www.youtube.com/channel/UCYgUODvd0qXbu_LkUWpTVEg" class="generic-anchor" target="_blank" title="Youtube" itemprop="significantLink"><i class="fa fa-youtube"></i></a>
      <a href="https://plus.google.com/+Paviliongift/posts" class="generic-anchor" target="_blank" title="Google Plus" itemprop="significantLink"><i class="fa fa-google-plus"></i></a>
      </span>
  </section>
  <section class="footer-bottom-section flex-rw">
<div class="footer-bottom-wrapper">   
<i class="fa fa-copyright" role="copyright">
 
</i>  <address class="footer-address" role="company address"></address><span class="footer-bottom-rights"> - All Rights Reserved - </span>
    </div>
    <div class="footer-bottom-wrapper">
    <a href="#" class="generic-anchor" rel="nofollow">Terms</a> | <a href="#" class="generic-anchor" rel="nofollow">Privacy</a>
      </div>
  </section>
</footer>
</body>
</html>