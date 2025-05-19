/**Scolling navbar ******************************************************************************/
window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    document.getElementsByTagName("nav")[0].style.padding = "0";
    document.getElementsByTagName("nav")[0].style.height = "5vh";
    document.getElementsByClassName("nav-list")[0].style.height = "5vh";
    document.getElementsByClassName("logo")[0].style.height = "5vh";
    document.getElementsByClassName("icon-burger")[0].style.height = "5vh";
  } else {
    document.getElementsByTagName("nav")[0].style.padding = "24px 0px";
    document.getElementsByTagName("nav")[0].style.height = "9vh";
    document.getElementsByClassName("nav-list")[0].style.height = "9vh";
    document.getElementsByClassName("logo")[0].style.height = "9vh";
    document.getElementsByClassName("icon-burger")[0].style.height = "9vh";
  }
}
/**Active Page styling **************************************************************************/
document.addEventListener("DOMContentLoaded", function () {
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

  if (!slides.length) {
    console.warn("Keine Slides gefunden.");
    return;
  }

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

/*Reservation***********************************************************************************/
//flatpickr
function roundTo30Minutes(date = new Date()) {
  const minutes = date.getMinutes();
  const remainder = 30 - (minutes % 30);
  date.setMinutes(minutes + remainder);
  date.setSeconds(0);
  date.setMilliseconds(0);
  return date;
}

document.addEventListener("DOMContentLoaded", () => {
  const today = roundTo30Minutes();

  flatpickr("#reservation-time", {
    enableTime: true,
    altInput: true,
    time_24hr: true,
    minuteIncrement: 30,
    altFormat: "F j, Y H:i",
    dateFormat: "Y-m-d H:i",
    defaultDate: today,
    minTime: "12:00",
    maxTime: "21:00",
    local: "de",
  });
});

//fetch reservation data
async function fetchReservations() {
  let response = await fetch("http://localhost/guest-list/Ajax/test.php");

  return await response.json();
}

//display database
async function reservationData() {
  let reservations = await fetchReservations();

  function displayData(reservations) {
    const outputElement = document.getElementById("demo");
    outputElement.innerHTML = "";

    //Generate the table
    const table = document.createElement("table");

    const thead = table.createTHead();
    const headerRow = thead.insertRow();
    const headers = [
      "Persons",
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

    const tbody = table.createTBody();

    reservations.forEach((reservation) => {
      const row = tbody.insertRow();

      const tableCell = row.insertCell();
      tableCell.textContent = reservation.persons;

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

    outputElement.appendChild(table);
  }

  displayData(reservations);
}

/**Rotation of dishes Page *********************************************************************/
document.addEventListener("DOMContentLoaded", () => {
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

/***Accordion Carrier Page *********************************************************************************/
document.addEventListener("DOMContentLoaded", () => {
  const buttons = document.querySelectorAll(".carrier-card-btn");
  const infos = document.querySelectorAll(".carrier-card-info");

  buttons.forEach((btn) => {
    btn.classList.remove("active");
  });

  buttons.forEach((btn, index) => {
    btn.addEventListener("click", () => {
      const info = infos[index];
      const isActive = info.style.maxHeight && info.style.maxHeight !== "0px";

      infos.forEach((element) => {
        element.style.maxHeight = "0px";
        element.style.padding = "0px";
        element.style.border = "none";
      });

      if (!isActive) {
        info.style.maxHeight = "500px";
        info.style.marginTop = "16px";
        info.style.paddingLeft = "16px";
        info.style.transition = "max-height 1s ease, padding 1s ease";
        info.style.border = "var(--main-blue) 1px solid";
        info.style.borderTop = "none";
        btn.classList.add("active");
      }
    });
  });
});
