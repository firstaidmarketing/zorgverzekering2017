<form action="<?php echo get_home_url( null, 'energie/' ); ?>#vergelijken" method="get">
    <p class="field-zipcode">
        <label for="energie-postcode">Postcode</label>
        <input type="text" id="energie-postcode" name="f[postal_code]" placeholder="3521 AT">
    </p>
    <p class="field-huisnnr">
        <label for="energie-huisnummer">Huisnummer</label>
        <input type="text" id="energie-huisnummer" name="f[house_number]">
    </p>
    <p>
        <label for="energie-soort">Type meter</label>
        <select id="energie-soort" name="f[energy-meter]">
            <option value="single">Enkele meter</option>
            <option value="double">Dubbele meter</option>
        </select>
    </p>
    <p>
        <label for="energie-preset">Schatting verbruik</label>
        <select id="energie-preset" name="f[energy_preset]">
            <option value="single">Single</option>
            <option value="duo">Tweepersoons huishouden</option>
            <option value="family">Klein gezin</option>
            <option value="medium">Gezin</option>
            <option value="large">Groot gezin</option>
        </select>
    </p>
    <p class="buttons">
        <input type="submit" class="button" value="Direct vergelijken">
    </p>
</form>