<div class="container-max">
    <div class="container">
        <div class="reservation-container">
            <picture class="reservation-grid-image">
                <img src="images/others/location1.jpg" alt="restaurant">
            </picture>
            <div class="reservation-grid-card">
                <h2>Tisch reservieren</h2>
                <div class="select-box-container">
                    <select id="persons" name="Personen" class="select-box">
                            <option value="1" class="select-option">1 Personen</option>
                            <option value="2" class="select-option">2 Personen</option>
                            <option value="3" class="select-option">3 Personen</option>
                            <option value="4" class="select-option">4 Personen</option>
                            <option value="5" class="select-option">5 Personen</option>
                            <option value="1" class="select-option">6 Personen</option>
                            <option value="2" class="select-option">7 Personen</option>
                            <option value="3" class="select-option">8 Personen</option>
                            <option value="4" class="select-option">9 Personen</option>
                            <option value="5" class="select-option">10 Personen</option>
                            <option value="1" class="select-option">11 Personen</option>
                            <option value="2" class="select-option">12 Personen</option>
                            <option value="3" class="select-option">13 Personen</option>
                            <option value="4" class="select-option">14 Personen</option>
                            <option value="5" class="select-option">15 Personen</option>
                            <option value="1" class="select-option">16 Personen</option>
                            <option value="2" class="select-option">17 Personen</option>
                            <option value="3" class="select-option">18 Personen</option>
                            <option value="4" class="select-option">19 Personen</option>
                            <option value="5" class="select-option">20 Personen</option>
                    </select>
                        <image nclick="reservationArrow()" src="graphics/icons/arrow-down.svg" class="select-icon"><image>                   
                </div>

                <div class="select-box-container">
                        <form class="select-box">
                            <input id="reservation-time" placeholder="Datum">   
                        </form>
                    </div>
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
        <div id="demo">Hier wird Text generiert</div>
    </div>  
</div> 
