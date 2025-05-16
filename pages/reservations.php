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
                        <option value="1" class="select-option">1</option>
                        <option value="2" class="select-option">2</option>
                        <option value="3" class="select-option">3</option>
                        <option value="4" class="select-option">4</option>
                        <option value="5" class="select-option">5</option>
                    </select>
                    <image src="graphics/icons/arrow-down.svg" class="select-icon"></image>
                </div>
                <div class="select-box-container">
                   <select id="date">
                    <option></option>
                   </select>
                </div>
               <select id="time">Zeit</select>
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
