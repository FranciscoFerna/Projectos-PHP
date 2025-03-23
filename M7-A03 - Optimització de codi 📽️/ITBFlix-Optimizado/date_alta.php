<?php
$pageTitle = 'ITBFlix DateDeAlta';
$pageDescription = 'Únete a ITBFlix y disfruta de una amplia selección de películas y series en streaming. Sin anuncios y en alta calidad. ¡Crea tu cuenta hoy!';
$pageKeywords = 'ITBFlix, streaming, películas, series, entretenimiento, suscripción, ver películas, ver series, contenido exclusivo';

include 'includes/head.php';
include 'includes/header.php';
?>

<main class="signup-container">
    <section class="signup-content">
        <h1 class="signup-title">Únete a ITBFlix</h1>
        <p class="signup-description">Disfruta de las mejores películas y series en streaming</p>

        <form class="signup-form" action="procesar_registro.php" method="post">
            <div class="form-group">
                <label for="fullname">Nombre completo</label>
                <input type="text" id="fullname" name="fullname" required>
            </div>

            <div class="form-group">
                <label for="email">Correo electrónico</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input type="password" id="password" name="password" required>
                </div>

                <div class="form-group">
                    <label for="confirm-password">Confirmar contraseña</label>
                    <input type="password" id="confirm-password" name="confirm-password" required>
                </div>
            </div>

            <div class="form-group">
                <label for="birthdate">Fecha de nacimiento</label>
                <input type="date" id="birthdate" name="birthdate" required>
            </div>

            <div class="form-group">
                <label for="plan">Plan de suscripción</label>
                <select id="plan" name="plan" required>
                    <option value="">Selecciona un plan</option>
                    <option value="basic">Básico - 8.99€/mes</option>
                    <option value="standard">Estándar - 13.99€/mes</option>
                    <option value="premium">Premium - 17.99€/mes</option>
                </select>
            </div>

            <div class="form-group checkbox">
                <input type="checkbox" id="terms" name="terms" required>
                <label for="terms">Acepto los términos y condiciones</label>
            </div>

            <div class="form-group checkbox">
                <input type="checkbox" id="newsletter" name="newsletter">
                <label for="newsletter">Quiero recibir novedades y ofertas especiales</label>
            </div>

            <button type="submit" class="btn btn--primary">Crear cuenta</button>
        </form>

        <p class="login-link">¿Ya tienes cuenta? <a href="#">Inicia sesión</a></p>
    </section>
</main>

<?php include 'includes/footer.php'; ?>

