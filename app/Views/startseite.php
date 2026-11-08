<!DOCTYPE html>
<!-- Seitensprache auf Deutsch einstellen -->
<html lang="de">
<head>
    <meta charset="UTF-8">

    <!-- viewport ist die responsive Logik für die Handyansicht, damit Handys die Webseiten nicht wie ein Computer aufrufen -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Kanban-Board</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('style.css') ?>">
</head>
<body class="d-flex flex-column min-vh-100">
<nav class="navbar">
    <div class="d-flex gap-3">
        <img src="<?= base_url('images/logo.svg') ?>" height="40">
        <a href="#">Tasks</a>
    <a href="#">Boards</a>
    <a href="#">Spalten</a>
    </div>
</nav>
<div class="container mt-3">
    <div class="card">
        <div class="card-header">
            <h1 class="h4 mb-0">Tasks</h1>
        </div>
        <div class="card-body">
            <p class="mb-0">Porta reparieren (Viel Glück!)</p>
        </div>
    </div>
</div>
<footer>
    <span>© Web-Entwicklung Team 10</span>
    <span>Impressum | Datenschutz | Kontakt</span>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
