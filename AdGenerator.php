<?php
	
?>

<html>
<head>
	<title>Ad Generator Test</title>
	
	<!-- Style -->
	<style>
		.col_wrap {
			width: 48%;
			float: left;
			padding: 10px;
		}
		
		#col_left {
			background-color: #ddd;
		}
		
		caption {
			color: white;
		}
		
		input {
			opacity: .4;
		}
		
		input:valid {
			opacity: 1;
			color: green;
		}
		
	</style>
	
	<!-- JavaScript -->
	<script type="text/javascript">
		// Set JavaScript update speed
		var myVar = setInterval(function(){updateAd()}, 250);
		
		// Update preview elements with form data
		function updateAd() {
			document.getElementById("company_name").innerHTML = document.getElementById("company").value;
			document.getElementById("company_phone").innerHTML = document.getElementById("phone").value;
			document.getElementById("company_info").innerHTML = document.getElementById("info").value;
			document.getElementById("ad_summary").innerHTML = document.getElementById("summary").value;			
			document.getElementById("company_street_address").innerHTML = document.getElementById("street_address").value;			
			document.getElementById("company_city").innerHTML = document.getElementById("city").value;			
			document.getElementById("company_state").innerHTML = document.getElementById("state").value;			
			document.getElementById("company_postal_code").innerHTML = document.getElementById("postal_code").value;			
			document.getElementById("ad_feature_1").innerHTML = document.getElementById("feature_1").value;			
			document.getElementById("ad_feature_2").innerHTML = document.getElementById("feature_2").value;			
			document.getElementById("ad_feature_3").innerHTML = document.getElementById("feature_3").value;			
			document.getElementById("ad_feature_4").innerHTML = document.getElementById("feature_4").value;			
			document.getElementById("ad_feature_5").innerHTML = document.getElementById("feature_5").value;			
			document.getElementById("ad_feature_6").innerHTML = document.getElementById("feature_6").value;			
			document.getElementById("ad_make").innerHTML = document.getElementById("make").value;			
			document.getElementById("ad_model").innerHTML = document.getElementById("model").value;			

			// Allow more than one usage of of input value (i.e #year.value = "2014") inside of generated content.
			var aYear = document.getElementsByClassName("ad_year");
			for (var i = 0; i < aYear.length; i++) {
				var year = document.getElementById("year");
				aYear[i].innerHTML = year.value;
			}
			
			// create function to process a loop that 
			// aug = ad_* (or output), meanwhile the pat = value (or input)
			function multiuse(aug, pat){
				var x = aug;
				for (var i = 0; i < aug.length; i++) {
					var year = document.getElementById("pat");
					aYear[i].innerHTML = year.value;
				}
			}			
			
			document.getElementById("ad_length").innerHTML = document.getElementById("length").value;			
			document.getElementById("ad_slides").innerHTML = document.getElementById("slides").value;			
		};
		
		/*
		function addFeature() {
			alert("hello");
			var btn = document.createElement("li");
			document.getElementById("")
			document.body.appendChild(btn);
		}
		*/
		
	</script>
</head>

<body>
	<div id="wrap">
		
		<!-- Left Column // Form for Data input -->
		<div id="col_left" class="col_wrap">
			<h2>Ad Generator</h2>
			<p>Create craigslist ads easily by filling out the form below</p>
			
			<form>
				<label for="company">Company Name</label>
				<input type="text" id="company" value="RW Associates Inc." required>
				
				<br />
				
				<label for="phone">Phone Number</label>
				<input type="tel" id="phone" value="(360) 574-5858" required>
				
				<br />
				
				<label for="street_address">Street Address</label>
				<input type="text" id="street_address" value="14615 NE 13th Ct">
				
				<br />
				
				<label for="city">City</label>
				<input type="text" id="city" value="Vancouver">

				<br />
				
				<label for="state">State</label>
				<input type="text" id="state" value="WA">
				
				<br />
				
				<label for="postal_code">Zip Code</label>
				<input type="text" id="postal_code" value="98685">
				
				<br />
				
				<label for="info">Company Information</label>
				<textarea cols="80" rows="10" id="info">We are a Pre-Owned RV Dealership. Great prices, Trades, and Consignments Welcome! Financing Available... Including those who have less than perfect credit... Trades gladly accepted! Come visit us! Get Directions off our Website: www.anniesrvs.com</textarea>
				
				<br />
				
				<label for="make">Make</label>
				<input type="text" id="make" value="Itasca">
				
				<label for="model">Model</label>
				<input type="text" id="model" value="Sunrise">
				
				<label for="year">Year</label>
				<input type="date" id="year" value="2017">
				
				<label for="length">Length</label>
				<input type="number" id="length" value="33">
				
				<label for="slides">Slides</label>
				<input type="number" id="slides" value="2">
				
				

				<label for="summary">AD Summary</label>
				<br />
				<textarea cols="80" rows="10" id="summary">5 Year Comprehensive Service Contract included at no charge on this like new 5th wheel. Equipped with a Polar Package for all year round RVing! Spacious enough for a cabin in the woods or full time living! Very Spacious Living room with Opposing Slides and a cozy fireplace. Equipped with Island Kitchen, Leather Furniture, Beautiful Cherry Cabinetry, Large Windows, Power Awning, HDTVs, Auto Leveling, and more!"</textarea>
				
				<br />
				
				<label for="specs">Specifications</label>
				<input type="text" id="spec_1" value="Feature 1">
				<input type="text" id="feature_2" value="Feature 2">
				<input type="text" id="feature_3" value="Feature 3">

				<label for="features">Features</label>
				<input type="text" id="feature_1" value="Feature 1">
				<input type="text" id="feature_2" value="Feature 2">
				<input type="text" id="feature_3" value="Feature 3">
				<input type="text" id="feature_4" value="Feature 4">
				<input type="text" id="feature_5" value="Feature 5">
				<input type="text" id="feature_6" value="Feature 6">
				<!-- <button value="add feature" onclick="addFeature()">Add Feature</button> -->
				
				<br />
				
				<input type="submit">
			</form>
		</div>
		
		<!-- Right Column // Ad display -->
		<div id="col_right" class="col_wrap">
			<h2 id="company_name"></h2>
				
			<div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
				<span id="company_phone"></span>
				<span> &nbsp; • &nbsp; </span>
				<span id="company_street_address" itemprop="streetAddress"></span>
				<span id="company_city" itemprop="addressLocality"></span>,
				<span id="company_state" itemprop="addressRegion"></span>
				<span id="company_postal_code" itemprop="postalCode"></span>
			</div>
			<hr />
			<p id="company_info"></p>
			
			<br>
			<p><span class="ad_year"></span> 
				<span id="ad_make"></span>
				<span id="ad_model"></span>
				<span class="ad_year"></span>
			
			
			<span id="ad_summary"></span>
			
			<ul>
				<li><span id="ad_feature_1"></span></li>
				<li><span id="ad_feature_2"></span></li>
				<li><span id="ad_feature_3"></span></li>
				<li><span id="ad_feature_4"></span></li>
				<li><span id="ad_feature_5"></span></li>
				<li><span id="ad_feature_6"></span></li>
			</ul>
			
			<table>
				<th><span class="ad_year"></span><span class="ad_make"</th>
				<th><span
			<ul>
				<li><span id="ad_feature_1"></span></li>
				<li><span id="ad_feature_2"></span></li>
				<li><span id="ad_feature_3"></span></li>
				<li><span id="ad_feature_4"></span></li>
				<li><span id="ad_feature_5"></span></li>
				<li><span id="ad_feature_6"></span></li>
			</ul>
				
		</div>
	</div>
</body>
</html>