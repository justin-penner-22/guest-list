<div class="container-max">
    <div class="container">
        <div class="reservation-container">
            <h2 class="reservation-title">Saruman - Vegetarisches Essen</h2>
            <picture class="reservation-grid-image">
                <img src="images/others/location1.jpg" alt="restaurant">
            </picture>
            <div class="reservation-grid-card">
                <h2>Tisch reservieren</h2>
                <div class="reservation-option-container">
                    <button id="dropdown-button" class="btn-primary">
                        2 Personen
                    </button>

                    <form>
                        <input class="form-control" type="datetime-local" placeholder="Wähle ein Datum aus"></input>
                    </form>
                </div>

                <div id="dropdown-display">
                    <ul class="dropdown-list">
                        <li class="dropdown-item">1 Personen</li>
                        <li class="dropdown-item">2 Personen</li>
                        <li class="dropdown-item">3 Personen</li>
                        <li class="dropdown-item">4 Personen</li>
                        <li class="dropdown-item">5 Personen</li>
                        <li class="dropdown-item">6 Personen</li>
                        <li class="dropdown-item">7 Personen</li>
                        <li class="dropdown-item">8 Personen</li>
                        <li class="dropdown-item">9 Personen</li>
                        <li class="dropdown-item">10 Personen</li>
                        <li class="dropdown-item">11 Personen</li>
                        <li class="dropdown-item">12 Personen</li>
                        <li class="dropdown-item">13 Personen</li>
                        <li class="dropdown-item">14 Personen</li>
                        <li class="dropdown-item">15 Personen</li>
                        <li class="dropdown-item">16 Personen</li>
                        <li class="dropdown-item">17 Personen</li>
                        <li class="dropdown-item">18 Personen</li>
                        <li class="dropdown-item">19 Personen</li>
                        <li class="dropdown-item">20 Personen</li>
                    </ul>
                </div>

            </div>


            <div class="reservation-infos">
                Infors über das Restaurant: Öffnungszeiten, Fotos, Speisekarte, Bewertungen etc.
            </div>
        </div>
    </div>
</div>

<div class="container-max">
    <div class="container">
        <button class="btn-primary" id="kadabra" onclick="reservationData()">AJAX</button>
        <div id="demo">
        </div>
    </div>
</div>