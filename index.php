<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300..900&family=JetBrains+Mono:wght@400;700&display=swap" rel="stylesheet">
    <title>CodeExplorer | Navegador de Proyectos | Francisco Fernández</title>
    <meta name="color-scheme" content="dark">
</head>
<body>
    <div class="noise"></div>
    <div class="grid-background"></div>

    <header>
        <div class="container header-content">
            <a href="https://itecbcn.eu" target="_blank" rel="noopener" class="logo-link">
                <img src="img/ITB-logo.png" alt="ITB Logo" class="logo" />
                <span class="logo-text">ITB<span class="accent">_</span></span>
            </a>
            <div class="theme-toggle">
                <button id="themeToggle" aria-label="Cambiar tema">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="sun-icon"><circle cx="12" cy="12" r="4"></circle><path d="M12 2v2"></path><path d="M12 20v2"></path><path d="m4.93 4.93 1.41 1.41"></path><path d="m17.66 17.66 1.41 1.41"></path><path d="M2 12h2"></path><path d="M20 12h2"></path><path d="m6.34 17.66-1.41 1.41"></path><path d="m19.07 4.93-1.41 1.41"></path></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="moon-icon"><path d="M12 3a6 6 0 0 0 9 9 9 9 0 1 1-9-9Z"></path></svg>
                </button>
            </div>
        </div>
    </header>

    <main>
        <div class="container">
            <section class="hero">
                <div class="hero-content">
                    <div class="title-container">
                        <h1>Code<span class="accent">Explorer</span></h1>
                        <div class="badge">v1.0</div>
                    </div>
                    <p class="subtitle">Navega por los archivos y carpetas de tu proyecto</p>
                </div>
                <div class="hero-decoration">
                    <div class="code-snippet">
                        <pre><code><span class="keyword">function</span> <span class="function">exploreFiles</span>() {<br>  <span class="keyword">return</span> <span class="string">"Descubre tu código"</span>;<br>}</code></pre>
                    </div>
                </div>
            </section>

            <section class="filter-section">
                <form id="filterForm" class="filter-form">
                    <div class="select-wrapper">
                        <select name="filter" id="filter">
                            <option value="none">Mostrar todo</option>
                            <option value="folder-filter">Solo archivos</option>
                            <option value="file-filter">Solo carpetas</option>
                        </select>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"></path></svg>
                    </div>
                    <button type="submit" class="btn">
                        <span>Filtrar</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 3H2l8 9.46V19l4 2v-8.54L22 3z"/></svg>
                    </button>
                </form>
            </section>

            <section class="file-explorer">
                <?php
                    $dirPath = "./";
                    $files = [];
                    $excluded = ["README.md", "index.php", "html", "css", "img"]; // Elementos a excluir

                    // Abre el directorio y recoge los archivos
                    if ($handle = opendir($dirPath)) {
                        while (false !== ($file = readdir($handle))) {
                            if (!in_array($file, $excluded) && !str_starts_with($file, ".")) {
                                $files[] = $file; // Guarda los nombres de los archivos y carpetas
                            }
                        }
                        closedir($handle);
                    }

                    // Ordena los archivos alfabéticamente
                    sort($files, SORT_NATURAL | SORT_FLAG_CASE);

                    // Procesa los archivos ordenados
                    foreach ($files as $file) {
                        if (is_dir($file)) {
                            echo "<details name='folder-content' class='folder-filter'>";
                            echo "<summary class='file-card folder'>";
                            echo "<div class='card-icon folder-icon'>";
                            echo "<svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'><path d='M4 20h16a2 2 0 0 0 2-2V8a2 2 0 0 0-2-2h-7.93a2 2 0 0 1-1.66-.9l-.82-1.2A2 2 0 0 0 7.93 3H4a2 2 0 0 0-2 2v13c0 1.1.9 2 2 2Z'></path></svg>";
                            echo "</div>";
                            echo "<span>$file</span>";
                            echo "<svg class='chevron' xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'><path d='m9 18 6-6-6-6'></path></svg>";
                            echo "</summary>";
                            echo "<ul class='folder-content'>";

                            $subfiles = array_diff(scandir($file), array('.', '..'));
                            foreach ($subfiles as $subfile) {
                                $fileExtension = pathinfo($subfile, PATHINFO_EXTENSION);
                                $fileClass = '';

                                // Asignar clases según la extensión del archivo
                                if (in_array($fileExtension, ['php', 'html', 'js', 'css'])) {
                                    $fileClass = "file-$fileExtension";
                                }

                                echo "<li class='$fileClass'>";
                                echo "<div class='file-icon'>";
                                echo "<svg xmlns='http://www.w3.org/2000/svg' width='20' height='20' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'><path d='M14.5 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7.5L14.5 2z'></path><polyline points='14 2 14 8 20 8'></polyline></svg>";
                                echo "</div>";
                                echo "<a href='./$file/$subfile' target='_BLANK'>$subfile</a>";
                                echo "</li>";
                            }

                            echo "</ul>";
                            echo "</details>";
                        } else {
                            $fileExtension = pathinfo($file, PATHINFO_EXTENSION);
                            $fileClass = '';

                            // Asignar clases según la extensión del archivo
                            if (in_array($fileExtension, ['php', 'html', 'js', 'css'])) {
                                $fileClass = "file-$fileExtension";
                            }

                            echo "<a href='$file' class='file-card file file-filter $fileClass' target='_blank'>";
                            echo "<div class='card-icon'>";
                            echo "<svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'><path d='M14.5 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7.5L14.5 2z'></path><polyline points='14 2 14 8 20 8'></polyline></svg>";
                            echo "</div>";
                            echo "<span>$file</span>";
                            echo "<div class='file-extension'>.$fileExtension</div>";
                            echo "</a>";
                        }
                    }

                    clearstatcache();
                ?>
            </section>
        </div>
    </main>

    <footer>
        <div class="container footer-content">
            <small><a href="https://itecbcn.eu" target="_blank" rel="noopener">Institut Tecnològic de Barcelona 2025</a></small>
            <div class="social-links">
                <span class="credits">Desarrollado por Francisco Fernández</span>
                <a href="https://github.com/FranciscoFerna" target="_blank" rel="noopener noreferrer" aria-label="GitHub">
                    <svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M15 22v-4a4.8 4.8 0 0 0-1-3.5c3 0 6-2 6-5.5.08-1.25-.27-2.48-1-3.5.28-1.15.28-2.35 0-3.5 0 0-1 0-3 1.5-2.64-.5-5.36-.5-8 0C6 2 5 2 5 2c-.3 1.15-.3 2.35 0 3.5A5.403 5.403 0 0 0 4 9c0 3.5 3 5.5 6 5.5-.39.49-.68 1.05-.85 1.65-.17.6-.22 1.23-.15 1.85v4"></path>
                        <path d="M9 18c-4.51 2-5-2-7-2"></path>
                    </svg>
                </a>
                <a href="https://www.instagram.com/fraanxuu_/" target="_blank" rel="noopener noreferrer" aria-label="Instagram">
                    <svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                        <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                        <line x1="17.5" x2="17.51" y1="6.5" y2="6.5"></line>
                    </svg>
                </a>
                <a href="https://www.youtube.com/channel/UCoaBtXoia1xR2T3Bb5FRUnQ" target="_blank" rel="noopener noreferrer" aria-label="YouTube">
                    <svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M2.5 17a24.12 24.12 0 0 1 0-10 2 2 0 0 1 1.4-1.4 49.56 49.56 0 0 1 16.2 0A2 2 0 0 1 21.5 7a24.12 24.12 0 0 1 0 10 2 2 0 0 1-1.4 1.4 49.55 49.55 0 0 1-16.2 0A2 2 0 0 1 2.5 17"></path>
                        <path d="m10 15 5-3-5-3z"></path>
                    </svg>
                </a>
                <a href="https://x.com/itecbcn" target="_blank" rel="noopener noreferrer" aria-label="Twitter/X">
                    <svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M4 4l11.733 16h4.267l-11.733-16z"></path>
                        <path d="M4 20l6.768-6.768"></path>
                        <path d="M20 4l-7.955 7.955"></path>
                    </svg>
                </a>
            </div>
        </div>
    </footer>

    <script>
        // Filtrado de archivos y carpetas
        const filterForm = document.getElementById("filterForm");
        filterForm.addEventListener("submit", (e) => {
            e.preventDefault();
            resetFilter();

            const filter = document.getElementById("filter").value;

            if (filter == "none") return;

            const elementsToHide = document.getElementsByClassName(filter);
            for (let e of elementsToHide) {
                e.style.display = "none";
            }
        });

        function resetFilter() {
            const folders = document.getElementsByClassName("folder-filter");
            const files = document.getElementsByClassName("file-filter");
            for (let e of folders) {
                e.style.display = "flex";
            }
            for (let e of files) {
                e.style.display = "flex";
            }
        }

        // Cambio de tema
        const themeToggle = document.getElementById('themeToggle');
        const prefersDarkScheme = window.matchMedia('(prefers-color-scheme: dark)');

        // Comprobar si hay un tema guardado en localStorage
        const currentTheme = localStorage.getItem('theme');
        if (currentTheme) {
            document.body.classList.toggle('light-theme', currentTheme === 'light');
        } else {
            // Si no hay tema guardado, usar la preferencia del sistema
            document.body.classList.toggle('light-theme', !prefersDarkScheme.matches);
        }

        // Actualizar la apariencia del botón
        updateThemeToggleAppearance();

        themeToggle.addEventListener('click', () => {
            document.body.classList.toggle('light-theme');

            // Guardar la preferencia en localStorage
            const theme = document.body.classList.contains('light-theme') ? 'light' : 'dark';
            localStorage.setItem('theme', theme);

            updateThemeToggleAppearance();
        });

        function updateThemeToggleAppearance() {
            const isLightTheme = document.body.classList.contains('light-theme');
            themeToggle.querySelector('.sun-icon').style.display = isLightTheme ? 'none' : 'block';
            themeToggle.querySelector('.moon-icon').style.display = isLightTheme ? 'block' : 'none';
        }

        // Efecto de cursor personalizado
        document.addEventListener('mousemove', function(e) {
            const cursor = document.querySelector('.custom-cursor');
            if (!cursor) return;

            cursor.style.left = e.clientX + 'px';
            cursor.style.top = e.clientY + 'px';
        });
    </script>
</body>
</html>

