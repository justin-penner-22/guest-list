/**Active Page styling **************************************************************************/
document.addEventListener("DOMContentLoaded", () => {
  const links = document.querySelectorAll(".nav-btn");

  function getCurrentPage() {
    const params = new URLSearchParams(window.location.search);
    const p = params.get("p") || "home";
    return p;
  }
  const currentPage = getCurrentPage();

  links.forEach((link) => {
    const href = link.getAttribute("href");
    const parts = href.split("?");

    let linkPage = "home";
    if (parts[1]) {
      linkPage = new URLSearchParams(parts[1]).get("p") || "home";
    }

    if (linkPage === currentPage) {
      link.classList.add("active");
    }
  });

  /*small menu*************************************************************************************/
  function showMenu() {
    var x = document.getElementById("my-links");
    if (x.style.display === "block") {
      x.style.display = "none";
    } else {
      x.style.display = "block";
    }
  }

  /*slider*****************************************************************************************/
  let slideIndex = 1;
  document.addEventListener("DOMContentLoaded", function () {
    showSlides(slideIndex);
    autoSlide();
  });

  function plusSlides(n) {
    showSlides((slideIndex += n));
  }

  function showSlides(n) {
    let i;
    let slides = document.getElementsByClassName("slides");

    // Reset slideIndex if it exceeds the number of slides
    if (n > slides.length) {
      slideIndex = 1;
    }
    // Set slideIndex to the last slide if n is less than 1
    if (n < 1) {
      slideIndex = slides.length;
    }
    // Hide all slides
    for (i = 0; i < slides.length; i++) {
      slides[i].classList.remove("active");
      slides[i].style.opacity = 0;
      slides[i].style.visibility = "hidden";
    }

    // Display the current slide
    slides[slideIndex - 1].classList.add("active");
    slides[slideIndex - 1].style.opacity = 1;
    slides[slideIndex - 1].style.visibility = "visible";
  }

  function autoSlide() {
    autoSlideInterval = setInterval(() => plusSlides(1), 8000);
  }

  /*fetch reservation data******************************************************************************************/
  async function fetchReservations() {
    let response = await fetch("http://localhost/guest-list/Ajax/test.php");

    return await response.json();
  }

  //display database
  async function reservationData() {
    let reservations = await fetchReservations(); // Asynchrone Funktion, um Reservierungen abzurufen
    console.log(reservations);

    function displayData(reservations) {
      const outputElement = document.getElementById("demo"); // Das Ziel-Element für die Ausgabe
      outputElement.innerHTML = ""; // Leert den Inhalt von 'outputElement'

      //Erstellen der Tabelle
      const table = document.createElement("table");

      const thead = table.createTHead();
      const headerRow = thead.insertRow();
      const headers = [
        "Table",
        "Name",
        "Confirmed",
        "Time",
        "Date",
        "Email",
        "ID",
      ];

      headers.forEach((headerText) => {
        const headerCell = document.createElement("th");
        headerCell.textContent = headerText;
        headerRow.appendChild(headerCell);
      });

      // Erstelle den Tabellenkörper (tbody)
      const tbody = table.createTBody();

      // Erstelle für jede Reservierung eine neue Tabellenzeile
      reservations.forEach((reservation) => {
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

  /**Rotation of dishes Page *********************************************************************/

  const rotationImage = document.querySelectorAll(".dish-image");

  rotationImage.forEach((rotationImage) => {
    rotationImage.addEventListener("mouseenter", () => {
      if (!rotationImage.classList.contains("rotate-once")) {
        rotationImage.classList.add("rotate-once");
      }
    });
  });

  rotationImage.forEach((rotationImage) => {
    rotationImage.addEventListener("animationend", () => {
      if (rotationImage.classList.contains("rotate-once")) {
        rotationImage.classList.remove("rotate-once");
      }
    });
  });
});
