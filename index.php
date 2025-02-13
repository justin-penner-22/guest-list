<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Guest List</title>
    <link href="style.css" rel="stylesheet"/>
    <script src="script.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
          rel="stylesheet"/>
</head>
<body>

<nav>
    <div class="container">
        <div class="nav-list">
            <img class="logo", href="http://localhost/guest-list/", src="images/primary-saruman-high-resolution-logo.svg">
            <ul>
                <li><a href="" class="nav-btn">Reservierungen</a></li>
                <li><a href="" class="nav-btn">Speisen und Getränke</a></li>
                <li><a href="" class="nav-btn">Reviews</a></li>
                <li><a href="" class="nav-btn">Karriere</a></li>
                <li><a href="" class="nav-btn">Über uns</a></li>
                <li><a href="" class="nav-btn">Standort</a></li>
            </ul>
        </div>
    </div>
</nav>

<img class="slider-img" alt="test" src="images/slides-drinks.jpg">

<div class="slides">
        <img alt="customer" src="Images/slides-drinks.jpeg">
        <div class="caption-text">Caption1</div>
    </div>
    <div class="slides">
        <img alt="customer" src="Images/Designer%20(2).jpeg">
        <div class="caption-text">Caption2</div>
    </div>
    <div class="slides">
        <img alt="customer" src="Images/slides-red-wine.jpeg">
        <div class="caption-text">Caption3</div>
    </div>

    <a class="prev" onclick="plusSlides(-1)"><</a>
    <a class="next" onclick="plusSlides(1)">></a>

<!--
<div class="container-max">
    <div class="container-min">
        <div class="map">
            <div id="entrance">Entrance</div>
            <div id="table-1">
                <div class="seat6">
                    <div class="chair-container">
                        <div class="chair"></div>
                        <div class="chair"></div>
                        <div class="chair"></div>
                    </div>
                    <div class="table6"></div>
                    <div class="chair-container">
                        <div class="chair"></div>
                        <div class="chair"></div>
                        <div class="chair"></div>
                    </div>
                </div>
            </div>
            <div id="table-2">
                <div class="seat6">
                    <div class="chair-container">
                        <div class="chair"></div>
                        <div class="chair"></div>
                        <div class="chair"></div>
                    </div>
                    <div class="table6"></div>
                    <div class="chair-container">
                        <div class="chair"></div>
                        <div class="chair"></div>
                        <div class="chair"></div>
                    </div>
                </div>
            </div>
            <div id="table-3">
                <div class="seat6">
                    <div class="chair-container">
                        <div class="chair"></div>
                        <div class="chair"></div>
                        <div class="chair"></div>
                    </div>
                    <div class="table6"></div>
                    <div class="chair-container">
                        <div class="chair"></div>
                        <div class="chair"></div>
                        <div class="chair"></div>
                    </div>
                </div>
            </div>
            <div id="table-4">
                <div class="seat6">
                    <div class="chair-container">
                        <div class="chair"></div>
                        <div class="chair"></div>
                        <div class="chair"></div>
                    </div>
                    <div class="table6"></div>
                    <div class="chair-container">
                        <div class="chair"></div>
                        <div class="chair"></div>
                        <div class="chair"></div>
                    </div>
                </div>
            </div>
            <div id="table-5">
                <div class="seat2">
                    <div class="chair"></div>
                    <div class="table2"></div>
                    <div class="chair"></div>
                </div>
            </div>
            <div id="table-6">
                <div class="seat2">
                    <div class="chair"></div>
                    <div class="table2"></div>
                    <div class="chair"></div>
                </div>
            </div>
            <div id="table-7">
                <div class="seat2">
                    <div class="chair"></div>
                    <div class="table2"></div>
                    <div class="chair"></div>
                </div>
            </div>
            <div id="table-8">
                <div class="seat2">
                    <div class="chair"></div>
                    <div class="table2"></div>
                    <div class="chair"></div>
                </div>
            </div>
            <div id="table-9">
                <div class="seat2">
                    <div class="chair"></div>
                    <div class="table2"></div>
                    <div class="chair"></div>
                </div>
            </div>
            <div id="table-10">
                <div class="seat2">
                    <div class="chair"></div>
                    <div class="table2"></div>
                    <div class="chair"></div>
                </div>
            </div>
            <div id="table-11">
                <div class="seat2">
                    <div class="chair"></div>
                    <div class="table2"></div>
                    <div class="chair"></div>
                </div>
            </div>
            <div id="table-12">
                <div class="seat2">
                    <div class="chair"></div>
                    <div class="table2"></div>
                    <div class="chair"></div>
                </div>
            </div>
            <div id="table-13">
                <div class="seat2">
                    <div class="chair"></div>
                    <div class="table2"></div>
                    <div class="chair"></div>
                </div>
            </div>
            <div id="table-14">
                <div class="seat2">
                    <div class="chair"></div>
                    <div class="table2"></div>
                    <div class="chair"></div>
                </div>
            </div>
            <div id="table-15">
                <div class="seat2">
                    <div class="chair"></div>
                    <div class="table2"></div>
                    <div class="chair"></div>
                </div>
            </div>
            <div id="table-16">
                <div class="seat2">
                    <div class="chair"></div>
                    <div class="table2"></div>
                    <div class="chair"></div>
                </div>
            </div>
            <div id="table-17">
                <div class="seat2">
                    <div class="chair"></div>
                    <div class="table2"></div>
                    <div class="chair"></div>
                </div>
            </div>
            <div id="table-18">
                <div class="seat2">
                    <div class="chair"></div>
                    <div class="table2"></div>
                    <div class="chair"></div>
                </div>
            </div>
            <div id="lobby">
                Lobby
            </div>
        </div>
    </div>
</div>
-->

<!--

    -->

<!-- Generate database table
<button class="button-theme-brown" id="kadabra" onclick="reservationData()">AJAX</button>
<div id="demo">Hier wird Text generiert</div>
-->

</body>



</html>