<form action="<?php echo get_home_url( null, 'autoverzekering/' ); ?>#vergelijken" method="get">
    <p>
        <label for="auto-kenteken">Je kenteken</label>
        <input type="text" id="auto-kenteken" name="f[licenseplate]" class="kenteken">
        <span class="description"><a href="#">Ik weet mijn kenteken niet</a></span>
    </p>
    <p>
        <label for="auto-postcode">Je postcode</label>
        <input type="text" id="auto-postcode" name="f[postal_code]" class="postcode">
    </p>
    <p>
        <label for="auto-geboortedatum">Je geboortedatum</label>
        <input type="text" id="auto-geboortedatum" name="f[birthdate]" class="geboortedatum" placeholder="24-01-1979">
    </p>
    <p>
        <label for="auto-schadevrij">Schadevrije jaren</label>
        <select id="auto-schadevrij" name="f[years_without_damage]" class="schadevrij">
            <option value="0">-2</option>
            <option value="0">-1</option>
            <option value="0" selected="selected">0</option>
            <option value="0">1</option>
            <option value="0">2</option>
            <option value="0">3</option>
            <option value="0">4</option>
            <option value="0">5</option>
            <option value="0">6</option>
            <option value="0">7</option>
            <option value="0">8</option>
            <option value="0">9</option>
        </select>
    </p>
    <p class="buttons">
        <input type="submit" class="button" value="Direct vergelijken">
    </p>
</form>