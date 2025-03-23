<?php
$pageTitle = 'Registro Exitoso - ITBFlix';
$pageDescription = '¡Gracias por unirte a ITBFlix! Tu cuenta ha sido creada con éxito.';

include 'includes/head.php';
include 'includes/header.php';
?>

<main class="success-container">
    <section class="success-content">
        <h1 class="success-title">¡Registro Completado!</h1>
        <div class="success-icon">
            <i class="fas fa-check-circle"></i>
        </div>
        <p class="success-message">Tu cuenta ha sido creada con éxito. Ahora puedes disfrutar de todo el contenido de ITBFlix.</p>
        <p class="success-details">Hemos enviado un correo electrónico de confirmación a tu dirección de correo. Por favor, verifica tu bandeja de entrada.</p>

        <div class="success-actions">
            <a href="index.php" class="btn btn--primary">Ir a la página principal</a>
            <a href="#" class="btn btn--secondary">Configurar mi perfil</a>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>

