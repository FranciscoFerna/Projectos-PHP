<?php
$pageTitle = 'ITBFlix - Stream Your Favorite Movies & Shows';
$pageDescription = 'Disfruta de películas y series exclusivas en ITBFlix. Streaming de alta calidad, sin anuncios y con la mejor selección de entretenimiento. ¡Únete hoy!';
$pageKeywords = 'ITBFlix, películas en línea, series en línea, streaming, entretenimiento, ver películas, ver series, películas en HD, suscripción de streaming';
$lang = 'en';

include 'includes/head.php';
include 'includes/header.php';
?>

<!-- Hero Section -->
<section class="hero-section">
    <div class="video-wrapper">
        <video class="hero-video" autoplay muted loop playsinline poster="ruta-a-tu-poster.jpg">
            <source src="./src/video/BatmanTriller.mp4" type="video/mp4" />
            Tu navegador no soporta el elemento de video.
        </video>
    </div>

    <div class="content-wrapper">
        <h1 class="title">Batman</h1>
        <p class="description">
            Cuando un asesino apunta a la élite de Gotham con una serie de
            maquinaciones sádicas, un rastro de pistas crípticas lleva al Mejor
            Detective del Mundo a realizar una investigación en el inframundo,
            donde se cruza con personajes como Catwoman, El Pingüino, Falcone y
            Enigma.
        </p>
        <div class="actions">
            <button class="btn btn--primary-video">
                <i class="fa-solid fa-play" aria-hidden="true"></i>
                <span>Reproducir</span>
            </button>
            <button class="btn btn--secondary-video">Más Información</button>
        </div>
    </div>
</section>

<!-- Section for films -->
<section class="movies-section">
    <div class="movies-wrapper">
        <h2 class="movies-title">Las 10 películas más populares hoy</h2>

        <div class="movies-container">
            <!-- Film 1 -->
            <article class="movie-card">
                <div class="movie-poster-wrapper">
                    <img src="./src/images/films/Batman.jpg" alt="Batman" class="movie-poster" />
                </div>
                <h3 class="movie-name">Batman</h3>
            </article>

            <!-- Film 2 -->
            <article class="movie-card">
                <div class="movie-badge">Recién llegada</div>
                <div class="movie-poster-wrapper">
                    <img src="./src/images/films/Braveheart.jpg" alt="Braveheart" class="movie-poster" />
                </div>
                <h3 class="movie-name">Braveheart</h3>
            </article>

            <!-- Film 3 -->
            <article class="movie-card">
                <div class="movie-badge">Recién llegada</div>
                <div class="movie-poster-wrapper">
                    <img src="./src/images/films/Gladiator.jpg" alt="Gladiator" class="movie-poster" />
                </div>
                <h3 class="movie-name">Gladiator</h3>
            </article>

            <!-- Film 4 -->
            <article class="movie-card">
                <div class="movie-poster-wrapper">
                    <img src="./src/images/films/Goodfellas.jpg" alt="Goodfellas" class="movie-poster" />
                </div>
                <h3 class="movie-name">Goodfellas</h3>
            </article>

            <!-- Film 5 -->
            <article class="movie-card">
                <div class="movie-badge">Recién llegada</div>
                <div class="movie-poster-wrapper">
                    <img src="./src/images/films/Se7en.jpg" alt="Se7en" class="movie-poster" />
                </div>
                <h3 class="movie-name">Se7en</h3>
            </article>

            <!-- Film 6 -->
            <article class="movie-card">
                <div class="movie-poster-wrapper">
                    <img src="./src/images/films/The-Dark-Knight.jpg" alt="The Dark Knight" class="movie-poster" />
                </div>
                <h3 class="movie-name">The Dark Knight</h3>
            </article>

            <!-- Film 7 -->
            <article class="movie-card">
                <div class="movie-poster-wrapper">
                    <img src="./src/images/films/The-Shawshank-Redemption.jpg" alt="The Shawshank Redemption"
                        class="movie-poster" />
                </div>
                <h3 class="movie-name">The Shawshank Redemption</h3>
            </article>
        </div>
    </div>
</section>

<!-- Actor Section -->
<section class="actors-section">
    <div class="actors-wrapper">
        <h2 class="actors-title">Top 10 mejores actores</h2>
        <div class="actors-container">
            <!-- Actor 1 -->
            <article class="actor-card">
                <div class="actor-photo">
                    <img src="./src/images/actors/author-1.jpg" alt="actor 1" class="actor-photo" />
                </div>
                <h3 class="actor-name">Christopher Nolan</h3>
                <div class="actor-rating">
                    <span class="star">&#9733;</span>
                    <span class="star">&#9733;</span>
                    <span class="star">&#9733;</span>
                    <span class="star">&#9734;</span>
                    <span class="star">&#9734;</span>
                </div>
            </article>

            <article class="actor-card">
                <div class="actor-photo">
                    <img src="./src/images/actors/author-2.jpg" alt="actor 2" class="actor-photo" />
                </div>
                <h3 class="actor-name">Quentin Tarantino</h3>
                <div class="actor-rating">
                    <span class="star">&#9733;</span>
                    <span class="star">&#9733;</span>
                    <span class="star">&#9733;</span>
                    <span class="star">&#9733;</span>
                    <span class="star">&#9733;</span>
                </div>
            </article>

            <article class="actor-card">
                <div class="actor-photo">
                    <img src="./src/images/actors/author-3.jpg" alt="actor 3" class="actor-photo" />
                </div>
                <h3 class="actor-name">Steven Spielberg</h3>
                <div class="actor-rating">
                    <span class="star">&#9733;</span>
                    <span class="star">&#9733;</span>
                    <span class="star">&#9733;</span>
                    <span class="star">&#9734;</span>
                    <span class="star">&#9734;</span>
                </div>
            </article>

            <article class="actor-card">
                <div class="actor-photo">
                    <img src="./src/images/actors/author-4.jpg" alt="actor 4" class="actor-photo" />
                </div>
                <h3 class="actor-name">Martin Scorsese</h3>
                <div class="actor-rating">
                    <span class="star">&#9733;</span>
                    <span class="star">&#9733;</span>
                    <span class="star">&#9733;</span>
                    <span class="star">&#9733;</span>
                    <span class="star">&#9734;</span>
                </div>
            </article>

            <article class="actor-card">
                <div class="actor-photo">
                    <img src="./src/images/actors/author-5.jpg" alt="actor 5" class="actor-photo" />
                </div>
                <h3 class="actor-name">David Lynch</h3>
                <div class="actor-rating">
                    <span class="star">&#9733;</span>
                    <span class="star">&#9733;</span>
                    <span class="star">&#9734;</span>
                    <span class="star">&#9734;</span>
                    <span class="star">&#9734;</span>
                </div>
            </article>

            <article class="actor-card">
                <div class="actor-photo">
                    <img src="./src/images/actors/author-6.jpg" alt="actor 6" class="actor-photo" />
                </div>
                <h3 class="actor-name">Joss Whedon</h3>
                <div class="actor-rating">
                    <span class="star">&#9733;</span>
                    <span class="star">&#9733;</span>
                    <span class="star">&#9733;</span>
                    <span class="star">&#9733;</span>
                    <span class="star">&#9733;</span>
                </div>
            </article>

            <article class="actor-card">
                <div class="actor-photo">
                    <img src="./src/images/actors/author-7.jpg" alt="actor 7" class="actor-photo" />
                </div>
                <h3 class="actor-name">Ryan Murphy</h3>
                <div class="actor-rating">
                    <span class="star">&#9733;</span>
                    <span class="star">&#9733;</span>
                    <span class="star">&#9733;</span>
                    <span class="star">&#9733;</span>
                    <span class="star">&#9734;</span>
                </div>
            </article>
        </div>
    </div>
</section>

<!-- Festival & Series -->
<section class="festival-series">
    <div class="festival">
        <h2 class="festival-title">Festivales</h2>
        <div class="festival-poster">
            <img src="./src/images/festival/festival-1.jpg" alt="Festival 1" />
        </div>
        <div class="festival-poster">
            <img src="./src/images/festival/festival-2.jpg" alt="Festival 2" />
        </div>
    </div>

    <div>
        <h2 class="series-title">Series</h2>
        <div class="series">
            <a href="./detalle-serie.php">
                <div class="series-poster">
                    <img src="./src/images/series/Stranger Things.jpg" alt="Serie 1" />
                    <h3 class="serie-name">Stranger Things</h3>
                </div>
            </a>
            <a href="./detalle-serie.php">
                <div class="series-poster">
                    <img src="./src/images/series/breaking-bad.jpg" alt="Serie 2" />
                    <h3 class="serie-name">Breaking Bad</h3>
                </div>
            </a>
            <a href="./detalle-serie.php">
                <div class="series-poster">
                    <img src="./src/images/series/the-witcher.jpg" alt="Serie 3" />
                    <h3 class="serie-name">The Witcher</h3>
                </div>
            </a>
            <a href="./detalle-serie.php">
                <div class="series-poster">
                    <img src="./src/images/series/friends.jpg" alt="Serie 4" />
                    <h3 class="serie-name">Friends</h3>
                </div>
            </a>
            <a href="./detalle-serie.php">
                <div class="series-poster">
                    <img src="./src/images/series/money-heist.jpg" alt="Serie 5" />
                    <h3 class="serie-name">Money Heist</h3>
                </div>
            </a>
            <a href="./detalle-serie.php">
                <div class="series-poster">
                    <img src="./src/images/series/the-mandalorian.jpg" alt="Serie 6" />
                    <h3 class="serie-name">The Mandalorian</h3>
                </div>
            </a>
            <a href="./detalle-serie.php">
                <div class="series-poster">
                    <img src="./src/images/series/the-crown.jpg" alt="Serie 7" />
                    <h3 class="serie-name">The Crown</h3>
                </div>
            </a>
            <a href="./detalle-serie.php">
                <div class="series-poster">
                    <img src="./src/images/series/narcos.jpg" alt="Serie 8" />
                    <h3 class="serie-name">Narcos</h3>
                </div>
            </a>
            <a href="./detalle-serie.php">
                <div class="series-poster">
                    <img src="./src/images/series/ozark.jpg" alt="Serie 9" />
                    <h3 class="serie-name">Ozark</h3>
                </div>
            </a>
        </div>
    </div>
</section>

<!-- More Visited -->
<section class="mas-visto" id="mosted-views">
    <div class="mas-visto-wrapper">
        <h2 class="mas-visto-title">Lo más visto</h2>

        <div class="mas-visto-container">
            <!-- Item 1 -->
            <article class="mas-visto-card">
                <div class="mas-visto-badge" aria-label="Posición top 1">TOP 1</div>
                <figure class="mas-visto-poster-wrapper">
                    <img src="./src/images/series/breaking-bad.jpg" alt="Poster de Breaking Bad"
                        class="mas-visto-poster" />
                    <figcaption class="mas-visto-info">
                        <div class="mas-visto-stats">
                            <span class="views" aria-label="Vistas">10M+ views</span>
                            <span class="rating" aria-label="Calificación">
                                <i class="fas fa-star" aria-hidden="true"></i>
                                9.8
                            </span>
                        </div>
                    </figcaption>
                </figure>

                <div class="mas-visto-content">
                    <h3 class="mas-visto-name">Breaking Bad</h3>
                    <span class="mas-visto-type">Serie</span>
                </div>
            </article>

            <!-- Item 2 -->
            <article class="mas-visto-card">
                <div class="mas-visto-badge" aria-label="Posición top 2">TOP 2</div>
                <figure class="mas-visto-poster-wrapper">
                    <img src="./src/images/films/The-Dark-Knight.jpg" alt="Poster de The Dark Knight"
                        class="mas-visto-poster" />
                    <figcaption class="mas-visto-info">
                        <div class="mas-visto-stats">
                            <span class="views" aria-label="Vistas">8.5M+ views</span>
                            <span class="rating" aria-label="Calificación">
                                <i class="fas fa-star" aria-hidden="true"></i>
                                9.5
                            </span>
                        </div>
                    </figcaption>
                </figure>

                <div class="mas-visto-content">
                    <h3 class="mas-visto-name">The Dark Knight</h3>
                    <span class="mas-visto-type">Película</span>
                </div>
            </article>

            <!-- Item 3 -->
            <article class="mas-visto-card">
                <div class="mas-visto-badge" aria-label="Posición top 3">TOP 3</div>
                <figure class="mas-visto-poster-wrapper">
                    <img src="./src/images/series/Stranger Things.jpg" alt="Poster de Stranger Things"
                        class="mas-visto-poster" />
                    <figcaption class="mas-visto-info">
                        <div class="mas-visto-stats">
                            <span class="views" aria-label="Vistas">7.9M+ views</span>
                            <span class="rating" aria-label="Calificación">
                                <i class="fas fa-star" aria-hidden="true"></i>
                                9.2
                            </span>
                        </div>
                    </figcaption>
                </figure>

                <div class="mas-visto-content">
                    <h3 class="mas-visto-name">Stranger Things</h3>
                    <span class="mas-visto-type">Serie</span>
                </div>
            </article>

            <!-- Item 4 -->
            <article class="mas-visto-card">
                <div class="mas-visto-badge" aria-label="Posición top 4">TOP 4</div>
                <figure class="mas-visto-poster-wrapper">
                    <img src="./src/images/films/The-Shawshank-Redemption.jpg"
                        alt="Poster de The Shawshank Redemption" class="mas-visto-poster" />
                    <figcaption class="mas-visto-info">
                        <div class="mas-visto-stats">
                            <span class="views" aria-label="Vistas">7.2M+ views</span>
                            <span class="rating" aria-label="Calificación">
                                <i class="fas fa-star" aria-hidden="true"></i>
                                9.7
                            </span>
                        </div>
                    </figcaption>
                </figure>

                <div class="mas-visto-content">
                    <h3 class="mas-visto-name">The Shawshank Redemption</h3>
                    <span class="mas-visto-type">Película</span>
                </div>
            </article>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>

