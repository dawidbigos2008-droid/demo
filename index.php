<?php require_once 'config.php'; $stmt = $pdo->query(" SELECT * FROM works ORDER BY created_at DESC "); $works = $stmt->fetchAll(); ?> <!DOCTYPE html> <html lang="pl"> <head>
<meta charset="UTF-8">

<meta
    name="viewport"
    content="width=device-width, initial-scale=1.0"
>

<title>Bedi Tattoo — Studio Tatuażu</title>

<meta
    name="description"
    content="Bedi Tattoo — autorskie tatuaże, indywidualne projekty i profesjonalne podejście. Zobacz realizacje i umów swój tatuaż."
>

<meta name="theme-color" content="#090909">

<link rel="stylesheet" href="style.css">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link
    href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Oswald:wght@400;500;600;700&display=swap"
    rel="stylesheet"
>

</head> <body> <!-- ===================================================== NAVBAR ===================================================== --> <header class="navbar">
<div class="container nav-inner">

    <a href="#home" class="logo">
        <img src="logo.jpg" alt="Bedi Tattoo">
        <span>BEDI<span>.</span>TATTOO</span>
    </a>

    <nav class="nav-links">

        <a href="#home">
            Home
        </a>

        <a href="#about">
            O mnie
        </a>

        <a href="#works">
            Prace
        </a>

        <a href="#contact">
            Kontakt
        </a>

    </nav>

    <a
        href="https://www.instagram.com/bedi.tattoo/"
        target="_blank"
        rel="noopener noreferrer"
        class="instagram-btn"
    >
        Instagram
    </a>

</div>

</header> <!-- ===================================================== HERO ===================================================== --> <section id="home" class="hero">
<div class="hero-overlay"></div>

<div class="container hero-content">

    <p class="hero-small">
        TATTOO ARTIST / STUDIO
    </p>

    <h1>
        NAJLEPSZE <br>
        TATUAŻE <span>W STALOWEJ WOLI</span>
    </h1>

    <p class="hero-description">
        Autorskie tatuaże tworzone z dbałością o każdy detal.
        Indywidualny projekt, charakter i profesjonalne wykonanie.
    </p>

    <div class="hero-buttons">

        <a
            href="#works"
            class="btn btn-primary"
        >
            ZOBACZ PRACE
        </a>

        <a
            href="#contact"
            class="btn btn-outline"
        >
            UMÓW TATUAŻ
        </a>

    </div>

</div>

<div class="scroll-down">

    SCROLL

    <span></span>

</div>

</section> <!-- ===================================================== ABOUT ===================================================== --> <section id="about" class="about section">
<div class="container about-grid">

    <div class="about-image">

        <div class="image-frame"></div>

    </div>

    <div class="about-content">

        <p class="section-label">
            01 / O STUDIU
        </p>

        <h2>
            TATUAŻ,<br>
            KTÓRY MA <span>ZNACZENIE.</span>
        </h2>

        <p>
            Bedi Tattoo to miejsce stworzone z pasji do tatuażu
            i sztuki. Każdy projekt powstaje indywidualnie,
            z uwzględnieniem charakteru i pomysłu osoby,
            która będzie go nosić.
        </p>

        <p>
            Zależy mi nie tylko na dobrym wyglądzie tatuażu,
            ale również na jakości wykonania, higienie
            i komfortowej atmosferze podczas całego procesu.
        </p>

        <div class="about-stats">

            <div>

                <strong>100%</strong>

                <span>
                    INDYWIDUALNYCH PROJEKTÓW
                </span>

            </div>

            <div>

                <strong>∞</strong>

                <span>
                    POMYSŁÓW
                </span>

            </div>

            <div>

                <strong>1:1</strong>

                <span>
                    INDYWIDUALNE PODEJŚCIE
                </span>

            </div>

        </div>

    </div>

</div>

</section> <!-- ===================================================== WORKS ===================================================== --> <section id="works" class="works section">
<div class="container">

    <div class="section-heading">

        <div>

            <p class="section-label">
                02 / GALERIA
            </p>

            <h2>
                OSTATNIE <span>PRACE</span>
            </h2>

        </div>

        <p class="section-description">
            Kilka ostatnich realizacji.
            Więcej znajdziesz na Instagramie.
        </p>

    </div>


    <?php if (count($works) > 0): ?>

        <div class="gallery">

            <?php foreach ($works as $work): ?>

                <article class="work-card">

                    <div class="work-image">

                        <img
                            src="uploads/<?= htmlspecialchars($work['image']) ?>"
                            alt="<?= htmlspecialchars($work['title']) ?>"
                            loading="lazy"
                        >

                        <div class="work-overlay">

                            <div>

                                <h3>
                                    <?= htmlspecialchars($work['title']) ?>
                                </h3>

                                <?php if (!empty($work['description'])): ?>

                                    <p>
                                        <?= htmlspecialchars($work['description']) ?>
                                    </p>

                                <?php endif; ?>

                            </div>

                        </div>

                    </div>

                </article>

            <?php endforeach; ?>

        </div>

    <?php else: ?>

        <div class="empty-gallery">

            <p>
                Pierwsze realizacje pojawią się tutaj już wkrótce.
            </p>

        </div>

    <?php endif; ?>


    <div class="gallery-more">

        <a
            href="https://www.instagram.com/bedi.tattoo/"
            target="_blank"
            rel="noopener noreferrer"
            class="btn btn-outline"
        >
            ZOBACZ WIĘCEJ NA INSTAGRAMIE
        </a>

    </div>

</div>

</section> <!-- ===================================================== PROCESS ===================================================== --> <section class="process section">
<div class="container">

    <p class="section-label">
        03 / JAK TO DZIAŁA
    </p>

    <h2>
        OD POMYSŁU<br>
        DO <span>SKÓRY.</span>
    </h2>

    <div class="process-grid">

        <div class="process-item">

            <span>01</span>

            <h3>
                KONTAKT
            </h3>

            <p>
                Napisz i opowiedz mi o swoim pomyśle.
            </p>

        </div>

        <div class="process-item">

            <span>02</span>

            <h3>
                PROJEKT
            </h3>

            <p>
                Ustalamy szczegóły, rozmiar, miejsce
                i charakter tatuażu.
            </p>

        </div>

        <div class="process-item">

            <span>03</span>

            <h3>
                SESJA
            </h3>

            <p>
                Spotykamy się w studiu i wykonujemy
                Twój wymarzony tatuaż.
            </p>

        </div>

    </div>

</div>

</section> <!-- ===================================================== CONTACT ===================================================== --> <section id="contact" class="contact section">
<div class="container contact-grid">

    <div>

        <p class="section-label">
            04 / KONTAKT
        </p>

        <h2>
            MASZ<br>
            <span>POMYSŁ?</span>
        </h2>

        <p class="contact-text">
            Chcesz zrobić tatuaż? Napisz do mnie na Instagramie
            lub skontaktuj się telefonicznie.
        </p>

        <div class="contact-details">

            <p>
                <strong>ADRES</strong><br>
                ul. Poniatowskiego 21<br>
                37-450 Stalowa Wola
            </p>

            <p>
                <strong>TELEFON</strong><br>
                <a href="tel:+48517644539">
                    517 644 539
                </a>
            </p>

        </div>

    </div>


    <div class="contact-card">

        <p>
            NAJSZYBSZY KONTAKT
        </p>

        <a
            href="tel:+48517644539"
            class="phone-large"
        >
            517 644 539
        </a>

        <a
            href="https://www.instagram.com/bedi.tattoo/"
            target="_blank"
            rel="noopener noreferrer"
            class="instagram-large"
        >
            @bedi.tattoo
        </a>

        <a
            href="https://www.instagram.com/bedi.tattoo/"
            target="_blank"
            rel="noopener noreferrer"
            class="btn btn-primary"
        >
            NAPISZ NA INSTAGRAMIE
        </a>

    </div>

</div>


<!-- GOOGLE MAPS -->

<div class="container contact-map">

    <div class="map-header">

        <p class="section-label">
            LOKALIZACJA
        </p>

        <h3>
            GDZIE NAS <span>ZNAJDZIESZ?</span>
        </h3>

        <p>
            ul. Poniatowskiego 21, Stalowa Wola
        </p>

    </div>

    <div class="map-wrapper">

        <iframe
            src="https://www.google.com/maps?q=ul.+Poniatowskiego+21,+Stalowa+Wola,+Polska&output=embed"
            width="100%"
            height="450"
            style="border:0;"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
            title="Bedi Tattoo — ul. Poniatowskiego 21, Stalowa Wola"
        ></iframe>

    </div>

</div>

</section> <!-- ===================================================== FOOTER ===================================================== --> <footer>
<div class="container footer-inner">

    <div class="logo">
        BEDI<span>.</span>TATTOO
    </div>

    <p>
        © <?= date('Y') ?> Bedi Tattoo. All rights reserved.
    </p>

    <a
        href="https://www.instagram.com/bedi.tattoo/"
        target="_blank"
        rel="noopener noreferrer"
    >
        Instagram ↗
    </a>

</div>

</footer> </body> </html>