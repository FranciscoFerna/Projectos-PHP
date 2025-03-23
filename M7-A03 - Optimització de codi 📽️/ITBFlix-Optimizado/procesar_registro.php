<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST['fullname'] ?? '';
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    $confirm_password = $_POST['confirm-password'] ?? '';
    $birthdate = $_POST['birthdate'] ?? '';
    $plan = $_POST['plan'] ?? '';
    $terms = isset($_POST['terms']);
    $newsletter = isset($_POST['newsletter']);

    $errors = [];

    if (empty($fullname)) {
        $errors[] = "El nombre completo es obligatorio";
    }

    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "El correo electrónico no es válido";
    }

    if (empty($password) || strlen($password) < 8) {
        $errors[] = "La contraseña debe tener al menos 8 caracteres";
    }

    if ($password !== $confirm_password) {
        $errors[] = "Las contraseñas no coinciden";
    }

    if (empty($birthdate)) {
        $errors[] = "La fecha de nacimiento es obligatoria";
    } else {
        $birth_date = new DateTime($birthdate);
        $today = new DateTime();
        $age = $birth_date->diff($today)->y;

        if ($age < 18) {
            $errors[] = "Debes ser mayor de 18 años para registrarte";
        }
    }

    if (empty($plan)) {
        $errors[] = "Debes seleccionar un plan de suscripción";
    }

    if (!$terms) {
        $errors[] = "Debes aceptar los términos y condiciones";
    }

    if (!empty($errors)) {
        session_start();
        $_SESSION['errors'] = $errors;
        $_SESSION['form_data'] = $_POST;
        header("Location: date_alta.php");
        exit;
    }
    header("Location: registro_exitoso.php");
    exit;
} else {
    header("Location: date_alta.php");
    exit;
}
?>
