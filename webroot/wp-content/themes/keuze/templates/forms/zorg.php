<form action="<?php echo get_home_url( null, 'zorgverzekering/' ); ?>#vergelijken" method="get">
	<p class="field-date">
		<label for="zorg-geboortedatum">Geboortedatum</label>
		<input type="number" id="zorg-geboortedatum" name="healthcare-personal[birthday][0][0]" class="date date-d" maxlength="2" min="1" max="31" placeholder="01">
		<input type="number" name="healthcare-personal[birthday][0][1]" class="date date-m" maxlength="2" min="1" max="12" placeholder="01">
		<input type="number" name="healthcare-personal[birthday][0][2]" class="date date-y" maxlength="4" min="1900" max="" placeholder="1980">
	</p>
	<p>
		<label for="zorg-eigenrisico">Eigen risico</label>
		<select name="healthcare-own_risk" id="zorg-eigenrisico">
			<option value="385">€ 385,-</option>
			<option value="485">€ 485,-</option>
			<option value="585">€ 585,-</option>
			<option value="685">€ 685,-</option>
			<option value="785">€ 785,-</option>
			<option value="885">€ 885,-</option>
		</select>
	</p>
    <p class="buttons">
        <input type="submit" class="button" value="Direct vergelijken">
    </p>
</form>