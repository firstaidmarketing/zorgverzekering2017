<?php
	$body_class = 'home';
	require_once( 'header.php' );
?>

<section class="featured">
	<div class="wrapper">
		<div id="form-tabs">
		    <ul class="nav">
		        <li><a href="#tab-auto">Auto</a></li>
		        <li><a href="#tab-zorg">Zorg</a></li>
		        <li><a href="#tab-inboedel">Inboedel</a></li>
		        <li><a href="#tab-recht">Recht</a></li>
		        <li><a href="#tab-energie">Energie</a></li>
		        <li><a href="#tab-mobiel">Sim-Only</a></li>
		    </ul>

		    <div class="panels">
			    <div class="tab" id="tab-auto">
			    	<h2>Autoverzekering vergelijken</h2>
			    	<div class="form">
				    	<form action="" method="get">
				    		<p>
				    			<label for="auto-kenteken">Je kenteken</label>
				    			<input type="text" id="auto-kenteken" name="kenteken" class="kenteken">
				    			<span class="description"><a href="#">Ik weet mijn kenteken niet</a></span>
				    		</p>
				    		<p>
				    			<label for="auto-postcode">Je postcode</label>
				    			<input type="text" id="auto-postcode" name="postcode" class="postcode">
				    		</p>
				    		<p>
				    			<label for="auto-geboortedatum">Je geboortedatum</label>
				    			<input type="text" id="auto-geboortedatum" name="geboortedatum" class="geboortedatum">
				    		</p>
				    		<p>
				    			<label for="auto-schadevrij">Schadevrije jaren</label>
				    			<select id="auto-schadevrij" name="schadevrij" class="schadevrij">
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
				    </div>
			    	<div class="text">
			    		<p>
			    			<strong>Een titeltje</strong><br>
			    			Wordt dit de eerste keer dat je een autoverzekering afsluit, of ben je gewoon nieuwsgierig of je kunt besparen op je maandelijkse uitgaven? Door een paar gegevens van jou en je auto in te vullen, zie je direct welke autoverzekering het meest voldoet aan jouw wensen.
			    		</p>
			    	</div>
			    </div>
			    <div class="tab" id="tab-zorg">
			    	<h2>zorg tab</h2>
			    	<div class="form">
			    		<form action="" method="get">
						    <p class="field-date">
							    <label for="zorg-geboortedatum">Geboortedatum</label>
							    <input type="number" class="date date-d" maxlength="2" min="1" max="31" placeholder="01">
							    <input type="number" class="date date-m" maxlength="2" min="1" max="12" placeholder="01">
							    <input type="number" class="date date-y" maxlength="4" min="1900" max="" placeholder="1980">
						    </p>
						    <p>
							    <label for="zorg-eigenrisico">Eigen risico</label>
							    <select name="" id="zorg-eigenrisico">
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
			    	</div>
			    	<div class="text">
			    		<p>
			    			<strong>Een titeltje</strong><br>
			    			Wordt dit de eerste keer dat je een autoverzekering afsluit, of ben je gewoon nieuwsgierig of je kunt besparen op je maandelijkse uitgaven? Door een paar gegevens van jou en je auto in te vullen, zie je direct welke autoverzekering het meest voldoet aan jouw wensen.
			    		</p>
			    	</div>
			    </div>
			    <div class="tab" id="tab-inboedel">
			    	<h2>inboedel tab</h2>
			    	<div class="form">
			    		<form action="" method="get">
						    <p>
							    <label for="">Aantal personen</label>
							    <select name="" id="">
								    <option value="">1 persoon verzekerd</option>
								    <option value="">2 personen verzekerd</option>
								    <option value="">Gezin verzekerd</option>
							    </select>
						    </p>
						    <p>
							    <label for="">Huurder of eigenaar</label>
							    <select name="" id="">
								    <option value="">Eigenaar</option>
								    <option value="">Huurder</option>
							    </select>
						    </p>
						    <p>
							    <label for="">Soort woning</label>
							    <select name="soortwoning" id="">
								    <option value="6tussenwoning" class="icon-ok">Tussenwoning</option>
								    <option value="7flat" class="icon-ok">Flat / appartement / etage</option>
								    <option value="82onder1kap" class="icon-ok">2 onder 1 kap</option>
								    <option value="9hoekwoning" class="icon-ok">Hoekwoning</option>
								    <option value="10vrijstaand" class="icon-ok">Vrijstaand / Herenhuis</option>
							    </select>
						    </p>
						    <p>
							    <label for="">Beveiliging</label>
							    <select name="" id="">
								    <option value="">Niet beveiligd</option>
								    <option value="">Elektronisch</option>
								    <option value="">Bouwkundig</option>
								    <option value="">Elektronisch en bouwkundig</option>
							    </select>
						    </p>
						    <p>
							    <label for="">Soort dak</label>
							    <select name="" id="">
								    <option value="">Dakpannen / overig</option>
								    <option value="">Riet</option>
							    </select>
						    </p>
						    <p class="buttons">
							    <input type="submit" class="button" value="Direct vergelijken">
						    </p>
			    		</form>
			    	</div>
			    	<div class="text">
			    		<p>
			    			<strong>Een titeltje</strong><br>
			    			Wordt dit de eerste keer dat je een autoverzekering afsluit, of ben je gewoon nieuwsgierig of je kunt besparen op je maandelijkse uitgaven? Door een paar gegevens van jou en je auto in te vullen, zie je direct welke autoverzekering het meest voldoet aan jouw wensen.
			    		</p>
			    	</div>
			    </div>
			    <div class="tab" id="tab-recht">
			    	<h2>recht tab</h2>
			    	<div class="form">
			    		<form action="" method="get">
						    <p>
							    <label for="">Consument en wonen</label>
							    <select name="" id="">
								    <option value="">Wel verzekerd</option>
								    <option value="">Niet verzekerd</option>
							    </select>
						    </p>
						    <p>
							    <label for="">Verkeer en medisch</label>
							    <select name="" id="">
								    <option value="">Wel verzekerd</option>
								    <option value="">Niet verzekerd</option>
							    </select>
						    </p>
						    <p>
							    <label for="">Werk en inkomen</label>
							    <select name="" id="">
								    <option value="">Wel verzekerd</option>
								    <option value="">Niet verzekerd</option>
							    </select>
						    </p>
						    <p>
							    <label for="">Belasting en vermogen</label>
							    <select name="" id="">
								    <option value="">Wel verzekerd</option>
								    <option value="">Niet verzekerd</option>
							    </select>
						    </p>
						    <p>
							    <label for="">Echtscheiding</label>
							    <select name="" id="">
								    <option value="">Wel verzekerd</option>
								    <option value="">Niet verzekerd</option>
							    </select>
						    </p>
			    		</form>
			    	</div>
			    	<div class="text">
			    		<p>
			    			<strong>Een titeltje</strong><br>
			    			Wordt dit de eerste keer dat je een autoverzekering afsluit, of ben je gewoon nieuwsgierig of je kunt besparen op je maandelijkse uitgaven? Door een paar gegevens van jou en je auto in te vullen, zie je direct welke autoverzekering het meest voldoet aan jouw wensen.
			    		</p>
			    	</div>
			    </div>
			    <div class="tab" id="tab-energie">
			    	<h2>energie tab</h2>
			    	<div class="form">
			    		<form action="" method="get">
						    <p class="field-zipcode">
							    <label for="">Postcode</label>
							    <input type="text" class="zipcode" name="" placeholder="3521 AT">
						    </p>
						    <p class="field-huisnnr">
							    <label for="">Huisnummer + toevoeging</label>
							    <input type="number" class="huisnr huisnr-nr" name="" placeholder="Bijv 1">
							    <input type="text" class="huisnr huisnr-nadd" name="" placeholder="">
						    </p>
						    <p>
							    <label for="">Type meter</label>
							    <select name="">
								    <option value="">Enkele meter</option>
								    <option value="">Dubbele meter</option>
							    </select>
						    </p>
						    <p>
							    <label for="">Schatting verbruik</label>
							    <select name="">
								    <option value="">Eenpersoons huishouden</option>
								    <option value="">Tweepersoons huishouden</option>
								    <option value="">Gezin met 3 personen</option>
								    <option value="">Gezin met 4+ personen</option>
							    </select>
						    </p>
						    <p class="buttons">
							    <input type="submit" class="button" value="Direct vergelijken">
						    </p>
			    		</form>
			    	</div>
			    	<div class="text">
			    		<p>
			    			<strong>Een titeltje</strong><br>
			    			Wordt dit de eerste keer dat je een autoverzekering afsluit, of ben je gewoon nieuwsgierig of je kunt besparen op je maandelijkse uitgaven? Door een paar gegevens van jou en je auto in te vullen, zie je direct welke autoverzekering het meest voldoet aan jouw wensen.
			    		</p>
			    	</div>
			    </div>
			    <div class="tab" id="tab-mobiel">
			    	<h2>mobiel tab</h2>
			    	<div class="form">
			    		<form action="" method="get">
						    <p>
							    <label for="">Belminuten</label>
							    <select name="minuten" id="minuten">
								    <option value="0">0 minuten</option>
								    <option value="50">50 minuten</option>
								    <option value="100" selected="selected">100 minuten</option>
								    <option value="150">150 minuten</option>
								    <option value="200">200 minuten</option>
								    <option value="300">300 minuten</option>
								    <option value="400">400 minuten</option>
								    <option value="500">500 minuten</option>
								    <option value="600">600 minuten</option>
								    <option value="700">700 minuten</option>
								    <option value="800">800 minuten</option>
								    <option value="1000">1000 minuten</option>
								    <option value="1500">1500 minuten</option>
								    <option value="1501">&gt; 1500 minuten</option>
							    </select>
						    </p>
						    <p>
							    <label for="">SMS</label>
							    <select name="sms" id="sms">
								    <option value="0" selected="selected">0 smsjes</option>
								    <option value="50">50 smsjes</option>
								    <option value="100">100 smsjes</option>
								    <option value="200">200 smsjes</option>
								    <option value="300">300 smsjes</option>
								    <option value="400">400 smsjes</option>
								    <option value="500">500 smsjes</option>
								    <option value="1000">1000 smsjes</option>
								    <option value="1500">1500 smsjes</option>
								    <option value="2000">2000 smsjes</option>
								    <option value="2001">&gt; 2000 smsjes</option>
							    </select>
						    </p>
						    <p>
							    <label for="">Mobiele Internet MB's</label>
							    <select name="data" id="data">
								    <option value="0" selected="selected">0 MB</option>
								    <option value="200">200 MB</option>
								    <option value="500">500 MB</option>
								    <option value="1000">1000 MB</option>
								    <option value="1500">1500 MB</option>
								    <option value="2000">2000 MB</option>
								    <option value="2500">2500 MB</option>
								    <option value="2501">&gt; 2500MB</option>
							    </select>
						    </p>
						    <p class="buttons">
							    <input type="submit" class="button" value="Direct vergelijken">
						    </p>
			    		</form>
			    	</div>
			    	<div class="text">
			    		<p>
			    			<strong>Een titeltje</strong><br>
			    			Wordt dit de eerste keer dat je een autoverzekering afsluit, of ben je gewoon nieuwsgierig of je kunt besparen op je maandelijkse uitgaven? Door een paar gegevens van jou en je auto in te vullen, zie je direct welke autoverzekering het meest voldoet aan jouw wensen.
			    		</p>
			    	</div>
			    </div>
			</div>
		</div>
	</div>	
</section>

<section class="section section-grey">
	<div class="wrapper home-entries">
		<article class="entry">
			<div class="icon icon-auto"></div>
			<h3><a href="#">Auto</a></h3>
			<p> Vergelijk diverse aanbieders en sluit jouw autoverzekering af.</p>
			<a href="#" class="button">Vergelijk</a>
		</article>
		<article class="entry">
			<div class="icon icon-zorg"></div>
			<h3><a href="#">Zorg</a></h3>
			<p> Vergelijk diverse aanbieders en sluit jouw autoverzekering af.</p>
			<a href="#" class="button">Vergelijk</a>
		</article>
		<article class="entry">
			<div class="icon icon-reis"></div>
			<h3><a href="#">Reis</a></h3>
			<p> Vergelijk diverse aanbieders en sluit jouw autoverzekering af.</p>
			<a href="#" class="button">Vergelijk</a>
		</article>
		<article class="entry">
			<div class="icon icon-inboedel"></div>
			<h3><a href="#">Inboedel</a></h3>
			<p> Vergelijk diverse aanbieders en sluit jouw autoverzekering af.</p>
			<a href="#" class="button">Vergelijk</a>
		</article>
		<article class="entry">
			<div class="icon icon-recht"></div>
			<h3><a href="#">Recht</a></h3>
			<p> Vergelijk diverse aanbieders en sluit jouw autoverzekering af.</p>
			<a href="#" class="button">Vergelijk</a>
		</article>
		<article class="entry">
			<div class="icon icon-uitvaart"></div>
			<h3><a href="#">Uitvaart</a></h3>
			<p> Vergelijk diverse aanbieders en sluit jouw autoverzekering af.</p>
			<a href="#" class="button">Vergelijk</a>
		</article>
		<article class="entry">
			<div class="icon icon-energie"></div>
			<h3><a href="#">Energie</a></h3>
			<p> Vergelijk diverse aanbieders en sluit jouw autoverzekering af.</p>
			<a href="#" class="button">Vergelijk</a>
		</article>
		<article class="entry">
			<div class="icon icon-mobiel"></div>
			<h3><a href="#">Mobiel</a></h3>
			<p> Vergelijk diverse aanbieders en sluit jouw autoverzekering af.</p>
			<a href="#" class="button">Vergelijk</a>
		</article>
	</div>
</section>

<section class="section section-grey why-keuze">
	<h2>Waarom keuze.nl?</h2>

	<div class="usps">
		<ul>
		<li>Vergelijk en sluit direct af</li>
			<li>Eenvoudige keuzehulp</li>
			<li>Betrouwbare merken</li>
			<li>Bespaar veel geld</li>
		</ul>
	</div>
</section>

<section class="section section-grey">
	<div class="wrapper sidebar sidebar-home">
		<section class="widget widget-recent-news">
			<h4>Blog en nieuws</h4>
			<ul>
				<li>
					<div class="side">
						<span class="day">18</span>
						<span class="month">jun</span>
					</div>
					<div class="text">
						<h3><a href="#">Complex en misleidend</a></h3>
						<p>De goedkopere Verrichtingen Polissen van Stadholland en DSW Zorgverzekeringen vergoeden, net als voo.. <a href="#" class="readmore">lees meer</a></p>
					</div>
				</li>
				<li>
					<div class="side">
						<span class="day">18</span>
						<span class="month">jun</span>
					</div>
					<div class="text">
						<h3><a href="#">Complex en misleidend</a></h3>
						<p>De goedkopere Verrichtingen Polissen van Stadholland en DSW Zorgverzekeringen vergoeden, net als voo.. <a href="#" class="readmore">lees meer</a></p>
					</div>
				</li>
				<li>
					<div class="side">
						<span class="day">18</span>
						<span class="month">jun</span>
					</div>
					<div class="text">
						<h3><a href="#">Complex en misleidend</a></h3>
						<p>De goedkopere Verrichtingen Polissen van Stadholland en DSW Zorgverzekeringen vergoeden, net als voo.. <a href="#" class="readmore">lees meer</a></p>
					</div>
				</li>
			</ul>

			<p class="readall"><a href="#" class="button">Alle items</a></p>
		</section>

		<section class="widget widget-recent-reviews">
			<h4>Laatste beoordelingen</h4>
			<ul>
				<li>
					<div class="side">
						4,4
					</div>
					<div class="text">
						<h3><a href="#">Complex en misleidend</a></h3>
						<p>De goedkopere Verrichtingen Polissen van Stadholland en DSW Zorgverzekeringen vergoeden, net als voo.. <a href="#">lees meer</a></p>
					</div>
				</li>
				<li>
					<div class="side">
						5,0
					</div>
					<div class="text">
						<h3><a href="#">Complex en misleidend</a></h3>
						<p>De goedkopere Verrichtingen Polissen van Stadholland en DSW Zorgverzekeringen vergoeden, net als voo.. <a href="#">lees meer</a></p>
					</div>
				</li>
				<li>
					<div class="side">
						2,0
					</div>
					<div class="text">
						<h3><a href="#">Complex en misleidend</a></h3>
						<p>De goedkopere Verrichtingen Polissen van Stadholland en DSW Zorgverzekeringen vergoeden, net als voo.. <a href="#">lees meer</a></p>
					</div>
				</li>
			</ul>

			<p class="readall"><a href="#" class="button">Alle beoordelingen</a></p>
		</section>

		<article class="content">
			<h2>Over keuze.nl</h2>
			<p>
				Ben je actief op zoek naar een dienst of product en struikel je over het ruime aanbod aan vergelijkingssites? Welke vergelijker geeft betrouwbaar en compleet advies? Het antwoord op deze vragen is Keuze.nl met heldere, overzichtelijke en complete informatie over een ruim aanbod van producten en diensten. Zodat je binnen een paar stappen een goede keuze kunt maken!
			</p>
			<p>
				Op Keuze.nl heb je alle producten en diensten die je wilt vergelijken onder één dak. Geen idee hoe je een product of dienst moet vergelijken, of waar je precies op moet letten? Ook daar helpen we je bij.
			</p>
			<h3>In een paar stappen</h3>
			<p>
				Op Keuze.nl wordt het vergelijken van producten en diensten een stuk eenvoudiger. In slechts een paar simpele stappen weten wij waar je naar op zoek bent. Of je nu op zoek bent naar een autoverzekering, of de stap wilt maken naar een goedkopere energiemaatschappij; Keuze.nl laat je de resultaten zien die het best aansluiten op jouw voorkeuren. 
			</p>
			<h3>Keuzehulp</h3>
			<p>
				Schakel onze hulp in tijdens het vergelijken, wij proberen het je zo gemakkelijk mogelijk te maken. Wij bieden keuzehulp, een begrippenlijst met alle belangrijke termen én een overzicht van de meest gestelde vragen
			</p>
		</article>
	</div>	
</section>

<?php require_once( 'footer.php' ); ?>