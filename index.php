<?php include 'functions/header_checkauth.php'; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Learning Light House</title>
        <link rel="stylesheet" href="assets/css/index.css">
    </head>
    <body>
        <?php
            include 'functions/newsletter.php';
            $userEmail = handleNewsletterSubscription();
        ?>
        <?php include 'layouts/header.php'; ?>
        
        <main>
            <section class="hero">
                <h1>Welcome to Learning Light House</h1>
                <p>Your ultimate destination for learning and fun.</p>
                <a href="register.php" class="cta-button">Get Started</a>
            </section>
            <section class="about">
                <h2>About Us</h2>
                <p>Learning Light House is dedicated to making learning fun and interactive for everyone. 
                    Explore our wide range of activities including reading, writing, 
                    and games designed to enhance your skills and knowledge.</p>
            </section>
            <section class="activities">
                <h2>Explore Our Activities</h2>
                <div class="activity" id="reading">
                    <!-- <a href='reading.php'> -->
                    <img src="assets/images/idx_reading.gif" alt="Reading">
                    <h3>Reading</h3>
                    <p>Discover a variety of reading materials that will improve your literacy skills and expand your knowledge.</p>
                </div>
                <!-- <div class="activity" id="writing">
                    <img src="assets/images/idx_writing.gif" alt="Writing">
                    <h3>Writing</h3>
                    <p>Practice your writing skills with engaging prompts and exercises tailored to various levels.</p>
                </div> -->
                <div class="activity" id="games">
                    <img src="assets/images/idx_games.gif" alt="Games">
                    <h3>Games</h3>
                    <p>Have fun while learning! Explore educational games that challenge and entertain.</p>
                </div>
            </section>
            <section class="testimonials">
                <h2>What Our Users Say</h2>
                <div class="testimonial">
                    <p>"Learning Light House helped me improve my reading comprehension significantly. The resources are top-notch!"</p>
                    <p><em>- John Doe</em></p>
                </div>
                <div class="testimonial">
                    <p>"I love the interactive writing exercises. They've made writing so much more enjoyable for me!"</p>
                    <p><em>- Jane Smith</em></p>
                </div>
            </section>
            <section class="newsletter">
                <h2>Subscribe to Our Newsletter</h2>
                <form action="index.php" method="post">
                    <input type="email" name="email" placeholder="Enter your email" value="<?php echo $userEmail; ?>" required>
                    <button type="submit">Subscribe</button>
                </form>
            </section>
            <section class="benefits">
                <h2>Benefits of Learning with Us</h2>
                <div class="benefit">
                    <img src="assets/images/idx_bnf1.gif" alt="Benefit 1">
                    <h3>Interactive Learning</h3>
                    <p>Engage in interactive learning activities that make education fun.</p>
                </div>
                <div class="benefit">
                    <img src="assets/images/idx_bnf2.gif" alt="Benefit 2">
                    <h3>Personalized Approach</h3>
                    <p>Receive personalized feedback and resources tailored to your learning needs.</p>
                </div>
                <div class="benefit">
                    <img src="assets/images/idx_bnf3.gif" alt="Benefit 3">
                    <h3>Community Support</h3>
                    <p>Join a vibrant community of learners and educators dedicated to knowledge sharing.</p>
                </div>
            </section>
            <?php include 'index_contactus.php'; ?>
        </main>
      <?php include 'layouts/footer.php'; ?>
    </body>
</html>
