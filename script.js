/*
let slideIndex = 1;
document.addEventListener("DOMContentLoaded", function () {
    showSlides(slideIndex);
});


function plusSlides(n) {
    showSlides(slideIndex += n);
}

function showSlides(n) {
    let i;
    let slides = document.getElementsByClassName("slides");

    if (n > slides.length) {
        slideIndex = 1;
    }
    if (n < 1) {
        slideIndex = slides.length
    }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }

    slides[slideIndex - 1].style.display = "block";
}
*/


//fetch reservation data
async function fetchReservations() {
    let response = await fetch("http://localhost/guest-list/Ajax/test.php");

    return await response.json();
}


//display database
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

}

