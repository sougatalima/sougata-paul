<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Audi-homepage</title>
    <link rel="stylesheet" href="style.css">
   
</head>
<body>
    <!-- Navigation Section -->
    <header>
        <nav class="navbar">
            <div class="logo"><img src="logo.png" alt="Audi" class="hii"></div>
            <ul class="nav-links">
                <li><a href="#features">Features</a></li>
                <li><a href="#gallery">Gallery</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
            <button class="cta-btn">Buy Now</button>
        </nav>
    </header>

    <!-- bootstrap -->
    <div class="hero">


    <div class="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="car1.png" alt="Image 1">
            </div>
            <div class="carousel-item">
                <img src="car2.png" alt="Image 2">
            </div>
            <div class="carousel-item">
                <img src="car3.png" alt="Image 3">
            </div>
            <div class="carousel-item">
                <img src="car4.png" alt="Image 4">
            </div>
            <div class="carousel-item">
                <img src="car5.png" alt="Image 4">
            </div>
        </div>
    </div>
    </div>  
<center>
        <div class="hero-content">
            <a href="#features"><button class="hero-btn">Explore More</button></a>
        </div>
 </center>  
 
    <!-- Features Section -->
    <section id="features" class="features-section">
        <h2>Key Features</h2>
        <div class="features">
            <div class="feature">
                <h3>Top Speed</h3>
                <p>Reach speeds up to 200 mph with our state-of-the-art engine.</p>
            </div>
            <div class="feature">
                <h3>Luxury Interior</h3>
                <p>Step inside the ultimate luxury cabin designed for your comfort.</p>
            </div>
            <div class="feature">
                <h3>Advanced Technology</h3>
                <p>Fully equipped with the latest safety and entertainment tech.</p>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section id="gallery" class="gallery-section">
        <h2>Gallery</h2>
        <div class="gallery">
            <img src="front.png" alt="Car Front View">
            <img src="back.png" alt="Car Interior View">
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact-section">
        <h2>Get in Touch</h2>
        <p>Want to learn more or schedule a test drive? Contact us below:</p>
        <form action="#" method="POST" class="contact-form">
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Your Email" required>
            <textarea name="message" placeholder="Your Message" rows="4" required></textarea>
            <button type="submit" class="submit-btn">Send Message</button>
        </form>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 CarBrand. All Rights Reserved.</p>
    </footer>



    
</body>
</html>
