<form action="<?php echo get_home_url( null, 'inboedelverzekering/' ); ?>" method="get">
    <p>
        <label for="personal_circumstances">Gezinssamenstelling</label>
        <select id="personal_circumstances" name="f[personal_circumstances]">
            <option value="" selected="" disabled="">Kies je gezinssamenstelling</option>
            <option value="gezin met kinderen">Gezin met kinderen</option>
            <option value="gezin zonder kinderen">Gezin zonder kinderen</option>
            <option value="alleenstaande zonder kinderen">Alleenstaande zonder kinderen</option>
            <option value="alleenstaande met kinderen">Alleenstaande met kinderen</option>
        </select>
    </p>
    <p>
        <label for="inboedel-type">Soort woning</label>
        <select id="inboedel-type" name="f[type]">
            <option value="" selected="" disabled="">Kies je woningtype</option>
            <option value="Rijtjeswoning">Rijtjeswoning</option>
            <option value="Hoekwoning">Hoekwoning</option>
            <option value="2-1 Kapwoning">2-1 Kapwoning</option>
            <option value="Vrijstaande woning">Vrijstaande woning</option>
            <option value="Villa">Villa</option>
            <option value="Woonboerderij">Woonboerderij</option>
            <option value="Herenhuis">Herenhuis</option>
            <option value="Grachtenpand">Grachtenpand</option>
            <option value="Monumentaal pand">Monumentaal pand</option>
            <option value="Appartement / flat (1-4 lagen)">Appartement / flat (1-4 lagen)</option>
            <option value="Appartement / flat (5-99 lagen)">Appartement / flat (5-99 lagen)</option>
            <option value="Etagewoning">Etagewoning</option>
            <option value="Recreatiewoning">Recreatiewoning</option>
        </select>
    </p>
    <p>
        <label for="inboedel-eigenaar">Huurder of eigenaar</label>
        <select name="f[owner]" id="inboedel-eigenaar">
            <option value="true">Eigenaar</option>
            <option value="false">Huurder</option>
        </select>
    </p>

    <p>
        <label for="inboedel-security">Beveiliging</label>
        <select id="inboedel-security" name="f[security]">
            <option value="" selected="" disabled="">Kies de beveiliging</option>
            <option data-advice="contentsinsurance.advice.geen" value="geen">Geen beveiliging</option>
            <option data-advice="contentsinsurance.advice.Politiekeurmerk veilig wonen" value="Politiekeurmerk veilig wonen">Politiekeurmerk veilig wonen</option>
            <option data-advice="contentsinsurance.advice.BORG certificaat" value="BORG certificaat">BORG certificaat</option>
            <option data-advice="contentsinsurance.advice.beide" value="beide">Politiekeurmerk en BORG</option>
        </select>
    </p>
    <p class="buttons">
        <input type="submit" class="button" value="Direct vergelijken">
    </p>
</form>