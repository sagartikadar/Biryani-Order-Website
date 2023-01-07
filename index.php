AhahSss<?php
$submit=false;
if(isset($_POST['name'])){
 // Set connection variables
$server="localhost";
$username="root";
$password="";

 // Create a database connection
$con=mysqli_connect($server, $username, $password);

// Check for connection success
if(!$con){
    die("connection failed due to". mysqli_connect_error());
}
// echo "success connection to database";

// Collect post variables
$name=$_POST['name'];
$email=$_POST['email'];
$phone =$_POST['phone'];
$address=$_POST['address'];

$sql="INSERT INTO `bhub-orders`.`orders` ( `Name`, `Email`, `Phone`, `Address`, `Date`) 
VALUES ( '$name', '$email', '$phone', '$address', current_timestamp());";

// Execute the query
if($con->query($sql)==true){
//    echo "sussecfully inserted";

// Flag for successful insertion
    $submit=true;
}
else{
echo "Error: <br> $con->error";
}

// Close the database connection
$con->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biryany Hub | Home Page</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" media="screen and (max-width:1200px)" href="css/phone.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@700&family=Bree+Serif&family=Kanit&family=Secular+One&family=Ubuntu&display=swap"
        rel="stylesheet">
</head>

<body>
    <nav id="navbar">
        <div id="logo">
            <img src="img/logo.png" alt="biryani-hub.com">
        </div>
        <ul>
            <li class="item"><a href="#home">Home</a></li>
            <li class="item"><a href="#services-container">Services</a></li>
            <li class="item"><a href="#outlet-section">Outlets</a></li>
            <li class="item"><a href="#contact-section">Contact Us</a></li>
        </ul>

        <input type="text" name="search" id="only-pc" placeholder="search here">

    </nav>
    <section id="home">
        <h1 class="primary">
            Welcome to Biryani Hub
        </h1>
        <p>Welcome, here you will find the best and delicious Biryani of the city.</p>
        <p>You can go to outlets and dine in directly or yoy can order online from our
            this website.</p>
        <a href="#contact-section"><button class="btn">Order Now</button></a><br>
        <br><br><br><br><br>
    </section>
    <?php
  if($submit==true){
   echo "<p class='submsg'>Congraturations your order has been placed!</p>";
  }
?>
    <section id="services-container">
        <h1 class="serh1 center">Our Services</h1>
        <div class="services">
            <div class="box">
                <img src="img/chiken.png" alt="">
                <h2 class="secondary center">Chiken Biryani</h2>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas ex necessitatibus dolore vitae, id
                    obcaecati ab eius ipsa cupiditate ea molestias nulla omnis rerum non iste tenetur atque autem
                    labore! Beatae, ad.</p>
            </div>
            <div class="box">
                <img src="img/mutton.png" alt="">
                <h2 class="secondary center">Mutton Biryani</h2>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas ex necessitatibus dolore vitae, id
                    obcaecati ab eius ipsa cupiditate ea molestias nulla omnis rerum non iste tenetur atque autem
                    labore! Beatae, ad.</p>
            </div>
            <div class="box">
                <img src="img/homed.png" alt="">
                <h2 class="secondary center">Home Delivery</h2>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas ex necessitatibus dolore vitae, id
                    obcaecati ab eius ipsa cupiditate ea molestias nulla omnis rerum non iste tenetur atque autem
                    labore! Beatae, ad.</p>
            </div>
        </div>
    </section>

    <section id="outlet-section">
        <h1 class="serh2 center">Our Outlets</h1>
        <div id="outlets">
            <div class="outlet-item">
                <img src="img/kfc.png" alt="">
            </div>
            <div class="outlet-item onlypc">
                <img src="img/dominos.png" alt="">
            </div>
            <div class="outlet-item">
                <img src="img/mcd.png" alt="">
            </div>
            <div class="outlet-item">
                <img src="img/phut.png" alt="">
            </div>
        </div>
    </section>

    <section id="contact-section">
        <h1 class="serh3 center">Contact Us</h1>
        <div id="contact-box">
            <form action="index.php" method="post">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name" placeholder="enter your name">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" placeholder="enter your email">
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number:</label>
                    <input type="phone" name="phone" id="phone" placeholder="enter your phone number">
                </div>
                <div class="form-group">
                    <label for="address">Address:</label>
                    <textarea type="address" name="address" id="address" placeholder="enter your address"></textarea>
                </div>
                <button id="fbtn">Place Order Now</button>
            </form>
        </div>
    </section>

    <footer>
        <div class="center">
            Copyright &copy; www.biryanihub.com. All rights reserved!
        </div>
    </footer>
</body>

</html>
