<?php
include 'includes/cons.php';
?>
<!doctype html>
<html lang="en">
<head>
	<?php echo getHead("Home", "", "");?>
</head>
<body>
	<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v8.0&appId=541060546046286&autoLogAppEvents=1" nonce="FiLSgwUX"></script>
	<main role="main">
	<?php echo getNavigationMenu(); ?>
	<div class="container">
		<div class="row">
			<?php echo getSlider(); ?>
		</div>
	</div>
  		<div class="container marketing">
			<div class="blog-post">
				<h2 class="blog-post-title">Fischermätteli Immobilien AG</h2>
				<p>
					<strong>உங்களை வரவேற்கிறது</strong>
				</p>
				<p>சுவிற்சலாந்தில் நீங்கள் உத்தியோகப் படிப்பை படிப்பதற்கு முன்பதாகவே
					அல்லது வேலை செய்வதற்கு முன்பதாகவே சட்டறீதியான ஆலோசனைகளைப் பெறுவது
					மிக அவசியமானது. அதனால் எமது நிறுவனத்திற்கூடாக நல்ல ஆலோசனையைத் தந்து
					சரியான பாதையில் வழி நடத்தக் காத்திருக்கிறோம்.</p>
				<p>24 மணி நேர வாடிக்கயாளர் சேவையையும், நீண்ட காலம் அனுபவம் வாய்ந்த
					ளுறளைள நிறுவனங்களுடன் இணைந்து சுவிசில் கல்வி கற்று காப்புறுதி
					மற்றும் வங்கித்துறையில் தேர்ச்சி பெற்றவர்களால் உங்களுக்கு மிகச்
					சரியான ஆலோசனை வழங்கப்படும்.</p>
				<p>நம்பிக்கை நாணயம் மற்றும் உத்தரவாதமுள்ள எமது நிறுவனத்தின் சேவைகள்
					,</p>
				<hr>
				<?php echo getVechicleInsuranceContent() ?>
				<?php echo getHouseInsuranceContent() ?>
				<?php echo getMedicalInsuranceContent() ?>
				<?php echo getVisitorInsuranceContent() ?>
				<?php echo getFirmaInsuranceContent() ?>
				<?php echo getLawInsuranceContent() ?>
				<?php echo getLifeInsuranceContent() ?>
				<?php echo getBankLoanContent() ?>
				<?php echo getHouseLoanContent() ?>
				<?php echo getKidsSavingsContent() ?>
				<?php echo getIncomeTaxContent() ?>
				<?php echo getFlightTicketContent() ?>

				
			</div>
			<div class="row" style='margin-top: 10px; margin-bottom:10px;'>
				<div class="col-md-6"><div class="fb-page" data-href="https://www.facebook.com/fimmoag/" data-tabs="" data-width="600" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/fimmoag/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/fimmoag/">Fischermätteli Immobilien AG</a></blockquote></div></div>
				<div class="col-md-6" style='float:right;'><?php getAddressBar();?>
				</div>
			</div>
			<!-- /.blog-post -->
		</div>
		<!-- /.container -->
		
	<?php echo getFooter(); ?>	
  	<?php echo getJsLinks("") ?>
</main>
</html>
