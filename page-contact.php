<?php
/* Template Name: Simple Contact Us Page */
get_header();
?>

<section class="contact-us-hero">
    <div class="contact-us-hero-text">
        <h1>Contact Us</h1>
        <p>Have questions? We’re here to help. Reach out to us using the form below!</p>
    </div>
</section>

<section class="contact-us-form">
    <div class="contact-form-container">
        <h2>Contact Us</h2>
        <p>Please fill out the form below and we will get back to you as soon as possible.</p>
        
        <!-- Simple Contact Form -->
        <form action="your-php-processing-file.php" method="POST">
            <label for="name">Your Name</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Your Email</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Your Message</label>
            <textarea id="message" name="message" required></textarea>

            <button type="submit">Send Message</button>
        </form>
    </div>
</section>

<section class="contact-info">
    <div class="contact-info-container">
        <h3>Our Contact Info</h3>
        <p><strong>Address:</strong> 123 Green Thumb St, Plantville, State, 12345</p>
        <p><strong>Phone:</strong> +1 (555) 123-4567</p>
        <p><strong>Email:</strong> support@greenthumb.com</p>
    </div>
</section>

<?php get_footer(); ?>
