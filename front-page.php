<?php

get_header();
?>

<div class="home-hero">
    <div class="hero-text">
        <h1>Welcome to Green Thumb Nursery</h1>
        <p>Your go-to place for healthy plants, gardening tips, and expert advice.</p>
        <a href="#plants" class="btn">Browse Our Plants</a>
    </div>
</div>

<section class="categories">
    <h2>Explore Our Categories</h2>
    <div class="category-list">
        <div class="category-item">
        <img src="<?php echo get_theme_file_uri("images/flowers.png");?>" alt="Dive 6">
            <h3>Flower Plants</h3>
            <p>Brighten your garden with vibrant flowers!</p>
        </div>
        <div class="category-item">
        <img src="<?php echo get_theme_file_uri("images/indoor.png");?>" alt="Dive 6">
            <h3>Indoor Plants</h3>
            <p>Perfect plants for your indoor spaces.</p>
        </div>
        <div class="category-item">
        <img src="<?php echo get_theme_file_uri("images/trees.png");?>" alt="Dive 6">
            <h3>Trees</h3>
            <p>Large trees for your garden or yard.</p>
        </div>
    </div>
</section>

<section class="featured-plants">
    <h2>Featured Plants</h2>
    <div class="plant-cards">
        <div class="plant-card">
            <img src="<?php echo get_theme_file_uri('images/ficus.png'); ?>" alt="Ficus Plant">
            <h3>Ficus Plant</h3>
            <p>Perfect for indoor and low light spaces.</p>
            <a href="javascript:void(0);" class="view-more-btn" data-plant="ficus">View More</a>
            <div class="extra-info" id="ficus-info" style="display: none;">
                <p>This plant thrives in low light and is easy to care for, making it ideal for indoor spaces.</p>
                <p>Water it once a week, ensuring the soil doesn't get too dry.</p>
            </div>
        </div>
        
        <div class="plant-card">
            <img src="<?php echo get_theme_file_uri('images/aloe vera.png'); ?>" alt="Aloe Vera">
            <h3>Aloe Vera</h3>
            <p>Great for your health and home decor.</p>
            <a href="javascript:void(0);" class="view-more-btn" data-plant="aloe-vera">View More</a>
            <div class="extra-info" id="aloe-vera-info" style="display: none;">
                <p>Aloe Vera is great for soothing skin and purifying the air in your home.</p>
                <p>It requires bright light and minimal watering.</p>
            </div>
        </div>
        
        <div class="plant-card">
            <img src="<?php echo get_theme_file_uri('images/rose.png'); ?>" alt="Rose Plant">
            <h3>Rose Plant</h3>
            <p>Bring color and fragrance to your garden.</p>
            <a href="javascript:void(0);" class="view-more-btn" data-plant="rose">View More</a>
            <div class="extra-info" id="rose-info" style="display: none;">
                <p>Roses need plenty of sunlight and well-drained soil. They bloom beautifully in spring and summer.</p>
                <p>Water regularly but avoid over-watering, and prune them to maintain their shape.</p>
            </div>
        </div>
    </div>
</section>

<section class="contact-cta">
    <h2>Need Help? Get in Touch!</h2>
    <p>If you need advice on plant care or choosing the right plants, we're here to help.</p>
    <a href="/contact" class="btn">Contact Us</a>
</section>

<script>
    // JavaScript to toggle visibility of extra information
    document.querySelectorAll('.view-more-btn').forEach(button => {
        button.addEventListener('click', () => {
            const plantId = button.getAttribute('data-plant');
            const infoDiv = document.getElementById(`${plantId}-info`);

            // Toggle the visibility of the extra information
            if (infoDiv.style.display === 'none') {
                infoDiv.style.display = 'block';
                button.textContent = 'View Less'; // Change the button text
            } else {
                infoDiv.style.display = 'none';
                button.textContent = 'View More'; // Change the button text back
            }
        });
    });
</script>



<?php
get_footer();
?>
