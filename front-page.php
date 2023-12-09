<?php get_header(); ?>

<section class="home-hero">
    <div class="hero-content">
        <div class="hero-headline">Welcome to Wildwood.</div>
        <div class="hero-tagline">Get lost in the wilderness and immerse yourself in the soothing ambiance of our spa</div>
        <button class="home-button"><a href="<?php echo site_url('/appointments'); ?>">Book Now</a></button>
    </div>

    </div>
</section>

<section class="hero-grid">
    <div class="hero-grid-heading">Treatments</div>
        <div class="home-page-grid">
            <div class="grid-item">
                <div class="grid-heading">Massage</div>
                <div class="grid-text">
                    Experience tranquility with one of our massages. Our Wildwood Signature Massage is a soothing embrace of nature and our Deep Forest Hot Stone Massage uses heated stones strategically placed on key energy points. These treatments will release tension, promote circulation, and envelop you in a state of deep relaxation.
                </div>
                <button class="grid-button">
                    <a href="<?php echo site_url('/appointments'); ?>">Book Now</a>
                </button>
            </div>

            <div class="grid-item">
            <div class="grid-heading">Skincare</div>
                <div class="grid-text">
                    Go on a magical journey with our skincare treatments. Our Unicorn Elixir Skincare Ritual is a lavish experience crafted to captivate your senses and our Highland Renewal Scrub is a body treatment inspired by the rugged beauty of the Scottish countryside. Infused with a blend of local herbs and exfoliating elements, these treatments will revitalise your skin.
                </div>
                <button class="grid-button">
                    <a href="<?php echo site_url('/appointments'); ?>">Book Now</a>
                </button>
            </div>

            <div class="grid-item">
            <div class="grid-heading">Holistic Therapies</div>
                <div class="grid-text">
                    Embark on a serene journey with our holistic therapies. Our Forest Bathing Meditation and Mindful Breathing Workshop are guided sessions inspired by the peaceful energy of the forest. These sessions combine ancient techniques with modern mindfulness practices, aiming to promote relaxation, reduce stress, and elevate your overall well-being.
                </div>
                <button class="grid-button">
                    <a href="<?php echo site_url('/appointments'); ?>">Book Now</a>
                </button>
            </div>
        </div>
</section>

<?php get_footer(); ?>