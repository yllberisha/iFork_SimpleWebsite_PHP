<!DOCTYPE html>

<!-- <?php
// check for error message in query string
session_start();

// Get errors array from session
$errors = isset($_SESSION['errors']) ? $_SESSION['errors'] : [];
?> -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/validation.js"></script>
    <title>iFork</title>
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
     <!-- custom css -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>

    <section class="header">

        <a href="#" class="logo"> <i> <img src="images/fork.png" alt=""></i>iFork</a>

        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#about">about</a>
            <a href="#reviews">reviews</a>
            <a href="#order">order</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>

    </section>
<!-- header -->
    <!-- home section -->

    <section class="home" id="home">

        <div class="swiper home-slider">

            <div class="swiper-wrapper" >
                <div class="swiper-slide slide" style="background: url(images/main.png) no-repeat;">
                    <div class="content">
                        <h3>do you know how pleasure tastes?</h3>
                        <!-- <a href="#" class="btn" data-toggle="modal" data-target="#video" >watch the film</a> -->
                        <a href="#" class="btn"  id="myBtn">watch the film</a>

                    </div>
                </div>

            </div>

	<!-- Modal container -->
	<div id="myModal" class="modal">

		<!-- Modal content -->
		<div class="modal-content">
			<span class="close">&times;</span>
            <video width="100%" controls >
                <source src="images/forkVideo.mp4" type="video/mp4" >
            </video>
		</div>

	</div>
        </div>

    </section> 

    <!-- home section -->

    <!-- about us -->

    <section class="about" id="about">

        <h1 class="heading">about us</h1>

        <div class="row">

            <div class="image">
                <img src="images/aboutUs.jpg" alt="">
            </div>
    
            <div class="content">
                <h3>Introducing the Ultimate Fork: Perfect for Every Meal</h3>
                <p>Crafted with the finest stainless steel, the iFork will bring joy to every meal. With its sleek design and comfortable grip, it will make your dining experience a wonder to behold. But the iFork is more than just an eating tool. It represents a sense of unity and balance in our daily lives. It reminds us that even the smallest things can bring us together and create moments of happiness. </p>
                <p>So don't just invest in a fork, invest in a mindset. Let the iFork guide you on your culinary adventures, and watch as your meals become not just a source of sustenance, but a source of wonder and inspiration. Join us in our quest for a world filled with delicious food and meaningful connections, one iForkful at a time!</p>
            </div>

        </div>

    </section>

    <!-- about us -->

    <!-- reviews -->

    <section class="reviews" id="reviews">

        <h1 class="heading"> reviews </h1>

      
        <div class="row">
                <div class="swiper-slide slide">
                    <p>I'm really impressed with the steel fork I bought from this company. It's made from high-quality stainless steel, which makes it durable and easy to clean. The sleek design looks great on my table and the comfortable grip is perfect for every meal. Plus, it's eco-friendly and reusable. Overall, a great purchase that I highly recommend!</p>
                    <img src="images/review_img1.jpg" alt="">
                    <h3>Omer Kuleta</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <p>The ifrok is a total game-changer, folks. I never thought I could get so excited about a fork, but here we are. It's like the James Bond of utensils - sleek, stylish, and oh-so-effective. I feel like I could take on any dish with this thing, from a fancy steak to a simple bowl of spaghetti. And the best part? It's basically indestructible. I've dropped it, smacked it, and even used it as a back scratcher (don't judge me), and it's still going strong. So if you want to feel like a total badass at your next meal, get the ifrok. It'll make your other utensils look like a bunch of wimps..</p>
                    <img src="images/review_img2.jpg" alt="">
                    <h3>Nart Raci</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <p>The ifrok is the ultimate lazy person's dream come true. I mean, it basically washes itself in the washing machine. It's like having a magical fairy do your dishes for you. And don't even get me started on the way it makes me feel - like a culinary mastermind with a futuristic utensil. So if you want to impress your friends and never do dishes again, get the ifrok. It's worth every penny.</p>
                    <img src="images/review_img3.jpg" alt="">
                    <h3>hana hoxha</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>   
       
       
   

    </section>


    <!-- reviews -->

    <!-- order -->

    <section class="order" id="order">
        <h1 class="heading">order now</h1>
        <form id="orderForm" action="proccessor.php" onsubmit="return validate();" method="POST">
        <?php if (!empty($errors)): ?>
		<div style="color: red">
			<?php foreach ($errors as $name => $error): ?>
				<span id="<?php echo $name; ?>-error"><?php echo $error; ?></span><br>
			<?php endforeach; ?>
		</div>
	<?php endif; ?>
            <div class="box-container">
        
                <div class="box">
                    <div class="inputBox">
                        <span>First Name <span id="fName" class="red" ></span></span>
                        <input type="text" name="namef" id="namef" placeholder="enter your name">
                    </div>
                    <div class="inputBox">
                        <span>Last Name <span id="lName" class="red" ></span></span>
                        <input type="text" name="lastnamef" id="lastnamef" placeholder="enter your name">
                    </div>
                    <div class="inputBox">
                        <span>Address <span id="addressInput" class="red" ></span></span>
                        <input type="text" name="addressf" id="addressf" placeholder="enter your address">
                    </div>
        
                    <div class="inputBox">
                        <span>Apt/suite <span id="aptInput" class="red" ></span></span>
                        <input type="text" name="Aptf" id="Aptf" placeholder="enter your apt/suite">
                    </div>
        
                </div>
        
                <div class="box">
                    <div class="inputBox">
                        <span >City <span id="city" class="red" ></span></span>
                        <input type="text" name="cityf" id="cityf" placeholder="enter your city">
                    </div>
        
                    <div class="inputBox">
                        <span>State <span id="state" class="red" ></span></span>
                        <select name="statef">
                            <option value="CA">California</option>
                            <option value="NY">New York</option>
                            <option value="TX">Texas</option>
                            <option value="FL">Florida</option>
                            <option value="IL">Illinois</option>
                        </select>
                    </div>
        
                    <div class="inputBox">
                        <span>ZIP/Postal Code <span id="zip" class="red" ></span></span>
                        <input type="text" name="zipf" id="zipf" placeholder="enter your ZIP/postal code">
                    </div>
        
                    <div class="inputBox">
                        <span>Phone Number <span id="phoneNumber" class="red" ></span></span>
                        <input type="tel" name="phoneNumf" id="phoneNumf" placeholder="enter your phone number">
                    </div>
        
                    <div class="inputBox">
                        <span>Email Address <span id="email" class="red" ></span></span>
                        <input type="email" name="emailf" id="emailf" placeholder="enter your email address">
                    </div>
        
                </div>
        
            </div>
            <input type="submit" value="order now"  class="btn">
        </form>
         </div>

                </div>

            <!-- </div>
            <input type="submit" value="order now" class="btn">
        </form> -->

    </section> 

    <!-- order -->

    <!-- footer -->

    <section class="footer">

        <div class="icons-container">

            <div class="icons">
                <i class="fas fa-map"></i>
                <h3>address</h3>
                <p> Kosovo <br>
                    Prishtina </p>
            </div>

            <div class="icons">
                <i class="fas fa-phone"></i>
                <h3>phone</h3>
                <p>049-111-111</p>
                <p>044-111-111</p>
            </div>

            <div class="icons">
                <i class="fas fa-envelope"></i>
                <h3>email</h3>
                <a href="#" class="link">yll.b.berisha@gmail.com</a>
            </div>

            <div class="icons">
                <i class="fas fa-clock"></i>
                <h3>opening hours</h3>
                <p>monday - friday: 08:00 - 16:00 <br> Saturday: 10:00 - 16:00</p>
            </div>

        </div>

        <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="https://github.com/yllberisha" class="fab fa-github"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="https://www.linkedin.com/in/yllberisha/" class="fab fa-linkedin"></a>
        </div>

        <div class="credit">created by <span>Yll</span></div>

    </section>

    <!-- footer -->

    <!-- custom js -->
    <script src="js/script.js"></script>
</body>
</html>    
<?php
// Clear errors from session
unset($_SESSION['errors']);
?>