<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Guest List</title>
    <link href="style.css" rel="stylesheet"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <script src="script.js"></script>
    <link 
    href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet"/>
    <link rel="stylesheet" 
    href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr/dist/l10n/de.js"></script>
</head>
<body>

<nav>
    <div class="container">
        <div class="nav-list">
            <a  href="/guest-list"><img class="logo", src="graphics/logo/logo-no-background-blue.svg"></a>
            <ul>
                <li><a href="?p=reservations" class="nav-btn">Reservierungen</a></li>
                <li><a href="?p=dishes" class="nav-btn">Speisen und Getränke</a></li>
                <li><a href="?p=reviews" class="nav-btn">Reviews</a></li>
                <li><a href="?p=carrier" class="nav-btn">Karriere</a></li>
                <li><a href="?p=aboutUs" class="nav-btn">Über uns</a></li>
                <li><a href="?p=location" class="nav-btn">Standort</a></li>
            </ul>
            
            <div class="small-nav">
                <a href="javascript:void(0);" onclick="showMenu()">
                    <img src="graphics/icons/burger.svg" class="icon-burger"></img>
                </a>
                <div id="my-links">
                    <li><a href="/guest-list" class="bold">Home</a></li>
                    <li><a href="?p=reservations">Reservierungen</a></li>
                    <li><a href="?p=dishes">Speisen</a></li>
                    <li><a href="?p=reviews">Reviews</a></li>
                    <li><a href="?p=carrier">Karriere</a></li>
                    <li><a href="?p=aboutUs">Über uns</a></li>
                    <li><a href="?p=location">Standort</a></li>
                </div>
            </div>
        </div>
    </div>
</nav>
