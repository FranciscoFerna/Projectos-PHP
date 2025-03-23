<?php
$pageTitle = 'Stranger Things - ITBFlix';
$pageDescription = 'Disfruta de Stranger Things en ITBFlix. Un grupo de niños en un pequeño pueblo se enfrenta a eventos sobrenaturales mientras buscan a su amigo desaparecido.';
$pageKeywords = 'Stranger Things, serie, Netflix, ciencia ficción, terror, drama, ITBFlix, streaming';

include 'includes/head.php';
include 'includes/header.php';
?>

<main>
    <section class="video-content">
        <div class="video-wrapper">
            <video class="hero-video" autoplay muted loop>
                <source src="./src/video/Stranger Things T1.mp4" type="video/mp4">
                Tu navegador no soporta el video.
            </video>
        </div>
        <div class="content-wrapper">
            <h1 class="title">Stranger Things</h1>
            <p class="description">Un grupo de niños en un pequeño pueblo se enfrenta a eventos sobrenaturales y criaturas de otra dimensión mientras buscan a su amigo desaparecido.</p>
            <div class="actions">
                <button class="btn btn--primary-video"><i class="fas fa-play"></i> Ver Ahora</button>
                <button class="btn btn--secondary-video">Añadir a Mi Lista</button>
            </div>
        </div>
    </section>

    <section class="filter-section">
        <div class="filter-container">
            <div class="filter-header">
                <h2 class="filter-title">Detalles de la Serie</h2>
            </div>
            <div class="filter-options">
                <div class="filter-group">
                    <label>Géneros:</label>
                    <span class="filter-tag">Ciencia Ficción</span>
                    <span class="filter-tag">Terror</span>
                    <span class="filter-tag">Drama</span>
                </div>
                <div class="filter-group">
                    <label>Calificación:</label>
                    <span class="filter-tag">TV-14</span>
                </div>
                <div class="filter-group">
                    <label>Año:</label>
                    <span class="filter-tag">2016 - Presente</span>
                </div>
                <div class="filter-group">
                    <label>Temporadas:</label>
                    <span class="filter-tag">4 Temporadas</span>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>

