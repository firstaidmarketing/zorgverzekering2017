<form action="<?php echo get_home_url( null, 'rechtsbijstandverzekering/' ); ?>#vergelijken" method="get">
    <p>
        <label for="person_single">Verzekerde personen</label>
        <select id="person_single" name="f[person_single]" required="">
            <option value="" disabled="">Kies de verzekerde personen</option>
            <option value="alleenstaande zonder kinderen" selected="">Alleenstaande zonder kinderen</option>
            <option value="alleenstaande met kinderen">Alleenstaande met kinderen</option>
            <option value="gezin met kinderen">Gezin met kinderen</option>
            <option value="gezin zonder kinderen">Gezin zonder kinderen</option>
        </select>
    </p>
    <p>
        <label for="resource.output.coverage_amount">Verzekerd bedrag</label>
        <select id="resource.output.coverage_amount" name="f[resource.output.coverage_amount]" required="">
            <option value="" disabled="">Kies het verzekerd bedrag</option>
            <option value="12500~∞">€ 12500,-</option>
            <option value="25000~∞">€ 25000,-</option>
            <option value="50000~∞">€ 50000,-</option>
            <option value="1000000~∞">€ 1000000,-</option>
            <option value="∞">Onbeperkt</option>
        </select>
    </p>
    <p>
        <label for="insure_basic_coverage">Basisdekking</label>
        <select id="insure_basic_coverage" name="f[insure_basic_coverage]" required="">
            <option value="false">Niet verzekerd</option>
            <option value="true" selected="">Wel verzekerd</option>
        </select>
    </p>
    <p>
        <label for="insure_consumer">Consument</label>
        <select id="insure_consumer" name="f[insure_consumer]" required="">
            <option value="false" selected="">Niet verzekerd</option>
            <option value="true">Wel verzekerd</option>
        </select>
    </p>
    <p>
        <label for="insure_income">Werk en inkomen</label>
        <select id="insure_income" name="f[insure_income]" required="">
            <option value="false" selected="">Niet verzekerd</option>
            <option value="true">Wel verzekerd</option>
        </select>
    </p>
    <p>
        <label for="insure_capital">Belasting en vermogen</label>
        <select id="insure_capital" name="f[insure_capital]" required="">
            <option value="false" selected="">Niet verzekerd</option>
            <option value="true">Wel verzekerd</option>
        </select>
    </p>
    <p>
        <label for="insure_housing">Wonen</label>
        <select id="insure_housing" name="f[insure_housing]" required="">
            <option value="false" selected="">Niet verzekerd</option>
            <option value="true">Wel verzekerd</option>
        </select>
    </p>
    <p>
        <label for="insure_traffic">Verkeer en medisch</label>
        <select id="insure_traffic" name="f[insure_traffic]" required="">
            <option value="false" selected="">Niet verzekerd</option>
            <option value="true">Wel verzekerd</option>
        </select>
    </p>
    <p class="buttons">
        <input type="submit" class="button" value="Direct vergelijken">
    </p>
</form>