<form action="<?php echo get_home_url( null, 'zorgverzekering/' ); ?>" method="get">
	<p class="field-date">
		<label for="zorg-geboortedatum">Geboortedatum</label>
		<input type="number" class="date date-d" maxlength="2" min="1" max="31" placeholder="01">
		<input type="number" class="date date-m" maxlength="2" min="1" max="12" placeholder="01">
		<input type="number" class="date date-y" maxlength="4" min="1900" max="" placeholder="1980">
	</p>
	<p>
		<label for="zorg-eigenrisico">Eigen risico</label>
		<select name="healthcare-own_risk" id="zorg-eigenrisico">
			<option value="375">€ 375,-</option>
			<option value="475">€ 475,-</option>
			<option value="575">€ 575,-</option>
			<option value="675">€ 675,-</option>
			<option value="775">€ 775,-</option>
			<option value="875">€ 875,-</option>
		</select>
	</p>
    <p class="buttons">
        <input type="submit" class="button" value="Direct vergelijken">
    </p>
</form>