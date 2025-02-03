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

<button class="button-theme-brown" id="kadabra" onclick="reservationData()">AJAX</button>

<div id="demo">Hier wird Text generiert</div>

<script>
async function reservationData(){

    let reservations = await fetchReservations();  // Asynchrone Funktion, um Reservierungen abzurufen
    console.log(reservations);

    function displayData(reservations){
        const outputElement = document.getElementById("demo"); // Das Ziel-Element für die Ausgabe
        outputElement.innerHTML = ""; // Leert den Inhalt von 'outputElement'


        //Erstellen der Tabelle
        const table = document.createElement("table");

        const thead = table.createTHead();
        const headerRow = thead.insertRow();
        const headers = ["Table", "Name", "Confirmed", "Time", "Date", "Email", "ID"];

        headers.forEach(headerText => {
            const headerCell = document.createElement("th");
            headerCell.textContent = headerText;
            headerRow.appendChild(headerCell);
        });

        // Erstelle den Tabellenkörper (tbody)
        const tbody = table.createTBody();

        // Erstelle für jede Reservierung eine neue Tabellenzeile
        reservations.forEach(reservation => {
            const row = tbody.insertRow();

            const tableCell = row.insertCell();
            tableCell.textContent = reservation.table;

            const nameCell = row.insertCell();
            nameCell.textContent = reservation.user_name;

            const confirmedCell = row.insertCell();
            confirmedCell.textContent = reservation.confirmed;

            const timeCell = row.insertCell();
            timeCell.textContent = reservation.time;

            const dateCell = row.insertCell();
            dateCell.textContent = reservation.date;

            const email_addressCell = row.insertCell();
            email_addressCell.textContent = reservation.email_address;

            const idCell = row.insertCell();
            idCell.textContent = reservation.id;

        });

        // Füge die Tabelle zum DOM hinzu
        outputElement.appendChild(table);
    }
    // Aufruf der Funktion zur Anzeige der Reservierungen
    displayData(reservations);

};

</script>

<!--

<header>
    <img alt="logo" class="logo" src="Images/yummi-stuff-high-resolution-logo-Photoroom3.png"/>
</header>

<div class="container-max">
    <nav class="container-min">
        <button class="button-theme-brown">Locations</button>
        <button class="button-theme-brown">Delivery</button>
        <button class="button-theme-brown">Food and Drinks</button>
        <button class="button-theme-brown">Jobs</button>
        <button class="button-theme-brown">About us</button>
    </nav>
</div>

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
                lobby
            </div>
        </div>
    </div>
    <div class="side-menu">
        <button class="button-theme-brown">Table for two</button>
        <button class="button-theme-brown">Table for six</button>
    </div>
</div>
-->

<!--
    <div class="slides">
        <img alt="customer" src="Images/Designer%20(1).jpeg">
        <div class="caption-text">Caption1</div>
    </div>
    <div class="slides">
        <img alt="customer" src="Images/Designer%20(2).jpeg">
        <div class="caption-text">Caption2</div>
    </div>
    <div class="slides">
        <img alt="customer" src="Images/Designer%20(3).jpeg">
        <div class="caption-text">Caption3</div>
    </div>

    <a class="prev" onclick="plusSlides(-1)"><</a>
    <a class="next" onclick="plusSlides(1)">></a>
    -->


</body>



</html>