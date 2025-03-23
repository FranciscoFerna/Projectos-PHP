<?php
$pageTitle = 'ITBFlix - Películas';
$pageDescription = 'Explora nuestra amplia selección de películas en ITBFlix. Encuentra tus títulos favoritos y disfruta de streaming de alta calidad. ¡Mira ahora!';
$pageKeywords = 'ITBFlix, películas, streaming, ver películas, cine, entretenimiento, películas en línea, películas en HD';

include 'includes/head.php';
include 'includes/header.php';
?>

<main>
    <section class="filter-section" aria-label="Filtros de películas">
        <div class="filter-container">
            <section class="filter-header">
                <h1 class="filter-title">Explorar Películas</h1>
                <p class="filter-count">352 películas encontradas</p>
            </section>

            <div class="filter-options">
                <div class="filter-group">
                    <label for="genre">Género</label>
                    <select id="genre" class="filter-select">
                        <option value="">Todos los géneros</option>
                        <option value="action">Acción</option>
                        <option value="drama">Drama</option>
                        <option value="comedy">Comedia</option>
                        <option value="scifi">Ciencia Ficción</option>
                    </select>
                </div>

                <div class="filter-group">
                    <label for="year">Año</label>
                    <select id="year" class="filter-select">
                        <option value="">Todos los años</option>
                        <option value="2024">2024</option>
                        <option value="2023">2023</option>
                        <option value="2022">2022</option>
                    </select>
                </div>

                <div class="filter-group">
                    <label for="rating">Valoración</label>
                    <select id="rating" class="filter-select">
                        <option value="">Todas las valoraciones</option>
                        <option value="9">9+ ⭐</option>
                        <option value="8">8+ ⭐</option>
                        <option value="7">7+ ⭐</option>
                    </select>
                </div>

                <div class="filter-group">
                    <label for="sort">Ordenar por</label>
                    <select id="sort" class="filter-select">
                        <option value="popularity">Popularidad</option>
                        <option value="recent">Más recientes</option>
                        <option value="rating">Mejor valoradas</option>
                    </select>
                </div>
            </div>

            <div class="filter-tags">
                <button class="filter-tag active">Todas</button>
                <button class="filter-tag">Estrenos</button>
                <button class="filter-tag">Más Valoradas</button>
                <button class="filter-tag">Premiadas</button>
                <button class="filter-tag">Clásicos</button>
            </div>
        </div>
    </section>

    <section class="movies-section" aria-label="Lista de películas">
        <div class="filter-container">
            <div class="movies-grid">
                <article class="movie-card">
                  <figure class="movie-poster-wrapper"></figure>
                    <img src="./src/images/films/The-Dark-Knight.jpg" alt="The Dark Knight" class="movie-poster">
                  </figure>
                  <div class="movie-info">
                    <h2 class="movie-name">The Dark Knight</h2>
                    <div class="movie-metadata">
                      <span class="movie-rating"><i class="fas fa-star"></i> 9.5</span>
                      <span class="movie-duration"><i class="fas fa-clock"></i> 2h 32m</span>
                    </div>
                    <div class="movie-genres">
                      <span class="movie-genre">Acción</span>
                      <span class="movie-genre">Drama</span>
                      <span class="movie-genre">Crimen</span>
                    </div>
                  </div>
                </article>

                <article class="movie-card">
                  <figure class="movie-poster-wrapper">
                    <img src="./src/images/films/inception.jpg" alt="Inception" class="movie-poster">
                  </figure>
                  <div class="movie-info">
                    <h2 class="movie-name">Inception</h2>
                    <div class="movie-metadata">
                      <span class="movie-rating"><i class="fas fa-star"></i> 9.3</span>
                      <span class="movie-duration"><i class="fas fa-clock"></i> 2h 28m</span>
                    </div>
                    <div class="movie-genres">
                      <span class="movie-genre">Sci-Fi</span>
                      <span class="movie-genre">Acción</span>
                    </div>
                  </div>
                </article>

                <article class="movie-card">
                  <figure class="movie-poster-wrapper">
                    <img src="./src/images/films/Gladiator.jpg" alt="Gladiator" class="movie-poster">
                  </figure>
                  <div class="movie-info">
                    <h2 class="movie-name">Gladiator</h2>
                    <div class="movie-metadata">
                      <span class="movie-rating"><i class="fas fa-star"></i> 9.1</span>
                      <span class="movie-duration"><i class="fas fa-clock"></i> 2h 35m</span>
                    </div>
                    <div class="movie-genres">
                      <span class="movie-genre">Acción</span>
                      <span class="movie-genre">Drama</span>
                    </div>
                  </div>
                </article>

                <article class="movie-card">
                  <figure class="movie-poster-wrapper">
                    <img src="./src/images/films/pulpfiction.jpg" alt="Pulp Fiction" class="movie-poster">
                  </figure>
                  <div class="movie-info">
                    <h2 class="movie-name">Pulp Fiction</h2>
                    <div class="movie-metadata">
                      <span class="movie-rating"><i class="fas fa-star"></i> 9.4</span>
                      <span class="movie-duration"><i class="fas fa-clock"></i> 2h 34m</span>
                    </div>
                    <div class="movie-genres">
                      <span class="movie-genre">Crimen</span>
                      <span class="movie-genre">Drama</span>
                    </div>
                  </div>
                </article>

                <article class="movie-card">
                  <figure class="movie-poster-wrapper">
                    <img src="./src/images/films/thegoodfather.avif" alt="The Godfather" class="movie-poster">
                  </figure>
                  <div class="movie-info">
                    <h2 class="movie-name">The Godfather</h2>
                    <div class="movie-metadata">
                      <span class="movie-rating"><i class="fas fa-star"></i> 9.6</span>
                      <span class="movie-duration"><i class="fas fa-clock"></i> 2h 55m</span>
                    </div>
                    <div class="movie-genres">
                      <span class="movie-genre">Crimen</span>
                      <span class="movie-genre">Drama</span>
                    </div>
                  </div>
                </article>

                <article class="movie-card">
                  <figure class="movie-poster-wrapper">
                    <img src="./src/images/films/Interstellar.jpg" alt="Interstellar" class="movie-poster">
                  </figure>
                  <div class="movie-info">
                    <h2 class="movie-name">Interstellar</h2>
                    <div class="movie-metadata">
                      <span class="movie-rating"><i class="fas fa-star"></i> 9.2</span>
                      <span class="movie-duration"><i class="fas fa-clock"></i> 2h 49m</span>
                    </div>
                    <div class="movie-genres">
                      <span class="movie-genre">Sci-Fi</span>
                      <span class="movie-genre">Drama</span>
                    </div>
                  </div>
                </article>
            </div>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>

