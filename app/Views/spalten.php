<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">

    <!-- viewport ist die responsive Logik für die Handyansicht, damit Handys die Webseiten nicht wie ein Computer aufrufen -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kanban-Board</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url('style.css') ?>">
</head>
<body class="d-flex flex-column min-vh-100">
<nav class="navbar navbar-expand-lg" data-bs-theme="dark">
    <div class="container">
        <!-- Logo in Navbar Brand-->
        <a class="navbar-brand" href="#">
            <img src="<?= base_url('images/logo.svg') ?>" height="55" alt="Webentwicklung-Logo">
        </a>

        <!-- Button für das Burger-Menü (Aufklappbares Menü) welches auf die ID navbarNav gelinkt ist -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Menü öffnen">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar-Links mit einer Einklappbaren Leiste auf Handys und Verlinkungen -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?= site_url('/') ?>">Tasks</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= site_url('/') ?>">Boards</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?= site_url('spalten') ?>">Spalten</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container mt-3">
    <div class="card">

        <div class="card-header">
            <h1 class="h4 mb-0">Spalten</h1>
        </div>

        <div class="card-body">

            <a href="<?= site_url('spalten-erstellen') ?>" class="btn btn-primary mb-3">Erstellen</a>

            <div class="table-responsive">
                <table class="table">

                    <tr>
                        <th>ID</th>
                        <th>Board</th>
                        <th>Sortid</th>
                        <th>Spalte</th>
                        <th>Spaltenbeschreibung</th>
                        <th>Bearbeiten</th>
                    </tr>

                    <tr>
                        <td>1</td>
                        <td>Allgemeine Tasks</td>
                        <td>100</td>
                        <td>Zu bearbeiten</td>
                        <td>Noch offene Aufgaben</td>
                        <td>
                            <i class="fa-solid fa-pen"></i>
                            <i class="fa-solid fa-trash"></i>
                        </td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>Allgemeine Tasks</td>
                        <td>200</td>
                        <td>In Bearbeitung</td>
                        <td>Aufgaben in Bearbeitung</td>
                        <td>
                            <i class="fa-solid fa-pen"></i>
                            <i class="fa-solid fa-trash"></i>
                        </td>
                    </tr>

                </table>
            </div>

        </div>
    </div>
</div>
<footer>
    <span>© Web-Entwicklung Team 10 </span>
    <span>Impressum | Datenschutz | Kontakt</span>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

