<form action="<?php echo get_home_url( null, 'sim/' ); ?>#vergelijken" method="get">
    <p>
        <label for="mobiel-minuten">Belminuten</label>
        <select name="f[minutes]" id="mobiel-minuten">
            <option value="0">0</option>
            <option value="50">50</option>
            <option value="75">75</option>
            <option value="100">100</option>
            <option value="120">120</option>
            <option value="150">150</option>
            <option value="200">200</option>
            <option value="240">240</option>
            <option value="250">250</option>
            <option value="300">300</option>
            <option value="450">450</option>
            <option value="500">500</option>
            <option value="800">800</option>
            <option value="1000">1000</option>
            <option value="1200">1200</option>
            <option value="1250">1250</option>
            <option value="1500">1500</option>
            <option value="1800">1800</option>
            <option value="\u221e">Onbeperkt</option>
        </select>
    </p>
    <p>
        <label for="mobiel-sms">SMS</label>
        <select name="f[sms]" id="mobiel-sms">
	        <option value="0">0</option>
	        <option value="75">75</option>
	        <option value="100">100</option>
	        <option value="150">150</option>
	        <option value="200">200</option>
	        <option value="250">250</option>
	        <option value="300">300</option>
	        <option value="450">450</option>
	        <option value="500">500</option>
	        <option value="800">800</option>
	        <option value="1000">1000</option>
	        <option value="1200">1200</option>
	        <option value="1250">1250</option>
	        <option value="1500">1500</option>
	        <option value="1800">1800</option>
	        <option value="\u221e">Onbeperkt</option>
        </select>
    </p>
    <p>
        <label for="mobiel-data">Mobiele Internet MB's</label>
        <select name="f[data]" id="mobiel-data">
            <option value="0">0</option>
            <option value="100">100</option>
            <option value="125">125</option>
            <option value="200">200</option>
            <option value="250">250</option>
            <option value="300">300</option>
            <option value="500">500</option>
            <option value="700">700</option>
            <option value="750">750</option>
            <option value="800">800</option>
            <option value="1000">1000</option>
            <option value="1200">1200</option>
            <option value="1250">1250</option>
            <option value="1500">1500</option>
            <option value="1800">1800</option>
            <option value="2000">2000</option>
            <option value="2500">2500</option>
            <option value="3000">3000</option>
            <option value="4000">4000</option>
            <option value="5000">5000</option>
            <option value="5250">5250</option>
            <option value="6000">6000</option>
            <option value="7000">7000</option>
            <option value="10000">10000</option>
            <option value="10250">10250</option>
            <option value="12000">12000</option>
            <option value="\u221e">Onbeperkt</option>
        </select>
    </p>
    <p class="buttons">
        <input type="submit" class="button" value="Direct vergelijken">
    </p>
</form>