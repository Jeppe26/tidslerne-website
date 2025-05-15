<?php get_header(); ?>

<?php if (have_posts()): ?>
<?php while (have_posts()): the_post(); ?>


<body>
    <div class="hero">
        <div class="hero-image-container"></div>
        <div class="hero-content">
            <h1 class="hero-title">TIDSLERNE</h1>
            <p class="hero-subtitle">Kræftforeningen Tidslerne er en forening for tidligere og nuværende kræftpatienter samt deres pårørende og i øvrigt enhver, der ønsker at støtte.</p>
            <a href="#" class="hero-button">UDFORSK →</a>
        </div>
    </div>

    <div class="info-section">
        <div class="info-card">
            <div class="icon icon-star"></div>
            <h3>Betroet og krediteret</h3>
            <p>Vi er anerkendt af både fagfolk og brugere for vores troværdighed og kvalitet. Din tillid er vores styrke.</p>
        </div>
        <div class="info-card">
            <div class="icon icon-newspaper"></div>
            <h3>Bliv informeret</h3>
            <p>Få seneste nyt direkte i din indbakke - tilmeld dig vores nyhedsbrev og hold dig opdateret.</p>
            <div class="icon icon-arrow-down"></div>
        </div>
    </div>
</body>
</html>

























<?php endwhile; ?>
<?php endif; ?>