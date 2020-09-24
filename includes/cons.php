<?php

define("MAIN_TITLE", "Fischermätteli Immobilien AG Bern");
define("MAIN_LOGO_PATH", "images/logo.png");
#address parameters
define("MAIN_ADDRESS_1", "Fischermättelistrasse 5");
define("MAIN_ADDRESS_2", "3008 Bern");

define("MAIN_CONTACT_NUMBER_1", "+41 31 557 23 23");
define("MAIN_CONTACT_NUMBER_2", "+41 79 414 70 67");


define("MAIN_EMAIL", "info@fimmoag.com");
define("MAIN_WEBSITE_ADDRESS", "www.fimmoag.com");

#mail parameters
define("SEND_MAIL", True);
define("SMTP_HOST", "lx16.hoststar.hosting");
define("SMTP_PORT", "587");
define("MAIL_FROM_ADDRESS", "info@fimmoag.com");
define("MAIL_TO_ADDRESS", "info@fimmoag.com");


function getMeta(){
    return '<meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Fischermätteli Immobilien AG | Motorfahrzeugversicherung ,Krankenkasseversicherung ,Reiseversicherung ,Firmenversicherung ,Lebenversicherung ,Einkommensteur ,Rechtsschutz ,Hypothek ,Kinder Sparen ,Flugticket ,Kontact">
    <meta name="author" content="saransolutions.ch">
    <meta name="keywords" content="Fischermätteli Immobilien AG | Motorfahrzeugversicherung ,Krankenkasseversicherung ,Reiseversicherung ,Firmenversicherung ,Lebenversicherung ,Einkommensteur ,Rechtsschutz ,Hypothek ,Kinder Sparen ,Flugticket ,Kontact" />
    <meta name="generator" content="Jekyll v4.1.1">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">

  
';
}

function getLinksFavICon(){
    return '	
	<link rel="icon" href="favicon.ico" type="image/x-icon">';
}

function getCssLinks(){
    return '
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/shop-homepage.css" rel="stylesheet">';
}

function getHead($title,$customLinks,$directStyle){
    return getMeta().'<title> '.MAIN_TITLE.' | '.$title.'</title>'
        .' <!-- Bootstrap core CSS -->
    <style>
       '.$directStyle.'
    </style>
    <!-- Custom styles for this template -->  '
        .getLinksFavICon()
        .''.getCssLinks()
        .$customLinks;

}

function getNavigationMenu(){
    return '
<header>
  <nav class="navbar navbar-expand-md navbar-light fixed-top bg-light">
    <a class="navbar-brand" href="/"><img src="'.MAIN_LOGO_PATH.'" title="'.MAIN_TITLE.'"></img></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Versicherung
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="vehicle_insurance.php">Motorfahrzeugversicherung</a>
          <a class="dropdown-item" href="house_insurance.php">Hausratversicherung</a>
          <a class="dropdown-item" href="medical_insurance.php">Krankenkasseversicherung</a>
          <a class="dropdown-item" href="visitor_insurance.php">Reiseversicherung</a>
          <a class="dropdown-item" href="firma_insurance.php">Firmenversicherung</a>
          <a class="dropdown-item" href="life_insurance.php">Lebenversicherung</a>
        </div>
      </li>
        <li class="nav-item">
          <a class="nav-link" href="income_tax.php">Einkommensteur</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="law_insurance.php">Rechtsschutz</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="house_loan.php">Hypothek</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="kids_savings.php">Kinder Sparen</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="flight_ticket.php">Flugticket</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Kontact</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li> -->
      </ul>
      <!-- <form class="form-inline mt-2 mt-md-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form> -->
    </div>
  </nav>
</header>

';
}

function getSlider(){
    return '
<div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="images/slides/slide1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="images/slides/slide2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="images/slides/slide3.jpg" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
';
}

function getFooter(){
    return '<!-- FOOTER -->
    <hr>
  <footer class="container">
    <p class="float-right"><a href="#">Back to top</a></p>
    <p>&copy; Fischermätteli Immobilien	AG. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
    <div class="container">
  <div class="row">
    <div class="col align-self-start">
      
    </div>
    <div class="col align-self-center">
      <p><small>Powered and Maintained by</small> <a href="http://www.saransolutions.ch" target="_blank" class="lead">saransolutions.ch</a></p>
    </div>
    <div class="col align-self-end">
    </div>
  </div>
</div>
  </footer>';
}

function getJsLinks($customLinks){
    return '<script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>'.$customLinks;
}


function getNavigationPages($title, $content){
    ?>
    
<!doctype html>
<html lang="en">
<head>
	<?php echo getHead($title, "", "");?>
</head>
<body>
	<main role="main">
	<?php echo getNavigationMenu(); ?>
	<?php #echo getSlider(); ?>
  		<div class="container marketing">
			<div class="blog-post" style='margin-top: 15px;'> 
				<h2 class="blog-post-title">Fischermätteli Immobilien AG</h2>
				<p>
					<strong>உங்களை வரவேற்கிறது</strong>
				</p>
				<hr>
				<?php echo $content ?>
			</div>
			<!-- /.blog-post -->
		</div>
		<!-- /.container -->
	<?php echo getFooter(); ?>	
  	<?php echo getJsLinks("") ?>
</main>
</html>
    <?php
}

function getBlockQutes($page, $target, $title){
    return '<blockquote class="blockquote">
    <p class="mb-0 text-center">
	   <strong> <a href="'.$page.'.php" title="'.$target.'" target="_blank"> '.$title.'</a></strong>
    </p>
</blockquote>';
}

define("house_insurance", '
<p>நீங்கள் வசிக்கும் வீட்டினை பாதுகாக்க வேண்டிய தேவையை கருத்திற்
    கொண்டும், உங்கள் குடும்பத்தின் நலன் கருதி மிகக் குறைந்த
    வீதத்திலும், உங்களிற்கு பிடித்தமான காப்புறுதி நிறுவனத்தை நீங்களே
    தெரிவு செய்யும் அளவிற்கு ஆலோசனைகளை தந்து வழிநடத்தக்
    காத்திருக்கிறோம்.</p>
<p>திருடர்களினால் விலையுயர்ந்த ஆபரணங்கள், வீட்டுப் பொருட்கள் களவாடப்படும் பட்சத்தில், அதற்கான இழப்பீடுத் தொகையை இந்த காப்புறுதி
திட்டத்தினுடாக பெறுவதற்கு வழிகள் உண்டு.</p>
<p>வீட்டில் உள்ள பொருட்களுக்கு சிறுவர்களினாலும் ஏற்படும் அசௌரியமான
    பாதிப்புகளுக்கான நட்டஈட்டுத் தொகையை இக் காப்புறுதித் திட்டம்
    வழங்குகிறது.</p>
    <p>நீராலோ, நெருப்பாலோ ஏற்படும் பாதிப்புகளுக்கு இக்
            காப்புறுதித்திட்டம் இழப்பீடுவழங்கி பாதுகாப்பளிக்கின்றது.</p>
');

define("vechicle_insurance", '<p>வாகனம் நம் அன்றாட வாழ்வில் அத்தியாவசியமாகி விட்டது. இதனால் பல	இடையூறுகளை சந்திக்க வேண்டியுள்ளது. உங்கள் நலன் கருதி மிகக் குறைந்த	வீதத்திலும், உங்களிற்கு பிடித்தமான காப்புறுதி நிறுவனத்தை நீங்களே	தெரிவு செய்யும் விதத்திலும் விரிவான விளக்கங்களைத் தரக்	காத்திருக்கிறோம்.</p>
<p>உங்கள் வாகனத்தை நல்ல காப்புறுதி நிறுவனங்களில் குறைந்த	கட்டணத்திலும், குறைந்த வீதத்திலும் செய்து கொடுக்கப்படும்.</p>
<p>கூடிய கட்டணத்தில் இருப்பவர்களுக்கு குறைந்த கட்டணத்தில் மாற்றம்	செய்து கொடுக்கப்படும்.</p>
<p>ஏற்கனவே காப்புறுதி செய்திருப்பவர்களுக்கு புதிய சட்ட விதிமுறைக்கு	ஏற்ப, மாற்றம் செய்து கொடுத்தல்.</p>
<p>காப்புறுதி செய்யப்பட்ட வாகனங்களில் பயனிக்கும் போது பழுதடையும்	பட்சத்தில் துரித கதியில் இலவசமாக திருத்தி அமைக்க (Pannanhilfe) இக்	காப்புறுதி திட்டம் துணை நிற்கிறது. மேலும், இச் சேவை ஜரோப்பா நாடுகள்	அடங்கலாக விஸ்தரிக்கப்பட்டுள்ளது.</p>
');

define("medical_insurance", '
<p>மருத்துவ காப்புறுதியானது பல நலன்களை வழங்க விருக்கின்ற தென்பதை
					அறிந்து கொள்ளுங்கள்.</p>
				<p>உங்கள் குடும்பத்தின் நலன் கருதி, குடும்ப எண்ணிகைகளின்
					அடிப்படையில் மிகக் குறைந்த கட்டணத்திலும், அனைத்து சலுகைகளிலும்,
					தரமான முறையிலும், நம்பிக்கையாகவும் நீங்க விரும்பத்தக்கதான
					ஆலோசனையிலும் உதவி செய்யக் காத்திருக்கிறோம்.</p>
				<p>உயர்தர காப்புறுதி நிறுவனங்களில் உங்கள் விருப்பத்திற்கேற்ப
					முறையில் மருத்துவக்காப்புறுதியை செய்து கொடுக்கப்படும்.</p>
				<p>மருத்துவக்காப்புறுதி நிறுவனங்களால் ஆண்டுக்கு ஒருமுறை கொண்டு
					வரப்படும் புதிய நடைமுறைச்சலுகைகளுக்கு ஏற்ப, உங்கள் நலன்களை
					கருத்தில் கொண்டு நீங்கள் விரும்பும் மருத்துவ நிறுவனத்தில்
					காப்புறுதியினை செய்து கொடுத்தல்.</p>
				<p>உங்கள் மருத்துவக்காப்புறுதியை கூடிய கட்டணத்திலிருந்து குறைந்த
					கட்டணதிற்கு எம்மிடம் மாற்றம் செய்தல்.</p>
				<p>மருத்துவ காப்புறுதியானது சுவிஸ்லாந்தின் அனைத்து மாநிலங்களிலுள்ள
					வைத்தியசாலைகளிலும், சர்வதேச நாடுகாளில் மருத்துவ சிகிச்சை பெற வழி
					வகுக்கின்றது.</p>
				<p>விபத்துகள் நேரிடும் பட்சத்தில் உடனடியாக விபத்து நடந்த இடத்திற்கு
					விரைந்து தேவையான சேவையை இக் காப்புறுதித்திட்டம் வழங்கும்.</p>
				<p>இன்னும் பல ஆலேசனைகள் வழங்க காத்திருக்கின்றோம்.</p>
				<p></p>
');


define("visitor_insurance", 'உங்கள் உறவினர்கள் வெளிதேசத்திலிருந்து சுற்றுலா வருவதாயிருந்தால்,
					அவர்களுக்கு மருத்துவக் காப்புறுதி செய்ய வேண்டும். அந்த
					காப்புறுதியையும் நாங்கள் துரிதமான முறையில் செய்து தருகிறோம். 
');


define("firma_insurance", '<p> உங்கள் வியாபார நிறுவனத்திற்கு ஏற்படும் இழப்புகளுக்கு எவ்வாறான
					காப்புறுதி நிறுவனத்தில் காப்புறுதி செய்தால் நல்லது என்பதனை,
					உங்களிற்கு தெளிவுபடுத்தி உங்களுக்கு விரிவான ஆலோசனைகளைத் தரக்
					காத்திருக்கின்றோம்.
 <p> ');


define("law_insurance", ' <p>உங்களது தனிப்பட்ட வாழ்விற்கும், குடும்பத்திற்கும், வாகனப்
					போக்குவரத்திலும் பல பிரச்சினைகளை நீங்கள் எதிர்நோக்கும் போது, சட்டக்
					காப்புறுதியானது உங்களிற்கு பெரும் உதவியாக இருக்கும். அது குறித்த
					விளக்கங்களையும் ஆலோசனைகளையும் தரக்காத்திருக்கின்றோம்.</p>
				<p>தொழில்சாலைகளில் ஏற்படும் பிரச்சனைகளுக்கும்.</p>
				<p>சிறுவா;களின் உரிமைகளுக்கு பாதிப்பு ஏற்படும் போதும்.</p>
				<p>வதிவிடங்கள் மற்றும் சுழல்களில் ஏற்படும் அன்றாடபிரச்சனைகளுக்கும்.
				</p>
				<p>வாகன விபத்துக்களின் போது ஏற்படுத்தப்படும் நடைமுறை சிக்கல்களை
					தீர்த்து</p>
				<p>வைப்பதற்கும் இக் காப்புறுதித்திட்டமானது உதவி செய்கின்றது.</p>
				<p></p>
');


define("life_insurance", ' <p>ஆயுட் காப்புறுதியானது பலவகையான முறையில் செய்யலாம்.</p>
				<p>ஆனால் அதை எப்போது ,எங்கே செய்தால் சரியாக இருக்கும் என்பதை
					உங்களுடன் ஆலோசித்த பிற்பாடு உங்களிற்கு செய்து தருவதற்கு நாங்கள்
					சரியான விளக்கங்களையும் ஆலோசனைகளையும் தர காத்திருக்கின்றோம்.</p>
				<p>தொழில்சாலைகளில் ஏற்படும் பிரச்சனைகளுக்கும்.</p>
				<p>சிறுவா;களின் உரிமைகளுக்கு பாதிப்பு ஏற்படும் போதும்.</p>
				<p>வதிவிடங்கள் மற்றும் சுழல்களில் ஏற்படும் அன்றாடபிரச்சனைகளுக்கும்.
				</p>
				<p>வாகன விபத்துக்களின் போது ஏற்படுத்தப்படும் நடைமுறை சிக்கல்களை
					தீர்த்து</p>
				<p>வைப்பதற்கும் இக் காப்புறுதித்திட்டமானது உதவி செய்கின்றது.</p>
');


define("bank_credit", ' <p>உங்களது வாழ்வில் பணப்பிரச்சனைகள் ஏற்படும் போது, அதற்கான தகுந்த
					ஆலோசனைகளைத் தந்து வங்கிக்கடன் எடுப்பதில் இருக்கும் நடைமுறை
					சிக்கல்களை தீர்த்து, உங்களிற்கு தேவையான வங்கிக்கடனை குறைந்த
					வட்டியுடன் கூடிய தொகையினை பெற்றுத் தரக்காத்திருக்கின்றோம்.</p>
');


define("house_loan", ' <p>உங்களிற்கென்று சொந்த வீடு கட்டுவதற்கும், வாங்குவதற்கும் குறைந்த
					வட்டியில்வங்கிக்கடன் வசதி உங்கள் வசதிக்கேற்ற வகையில், விரிவான
					ஆலோசனைகளையும் விளக்கங்களையும் தரக் காத்திருக்கின்றோம்.</p>
');


define("kids_savings", ' <p>குழந்தைகளுடைய எதிர்காலத்தையும், பட்டப் படிப்பினையும் நலன் கருதி,
					பணம் சேமிப்பதோடு மாத்திரம் இல்லாமல், ஆயுள் காப்புறுதியைக் கூட
					சேர்ந்து செய்து தருகிறோம். அதற்குரிய தகுந்த ஆலோசனைகளையும்
					உங்களிற்கு வழங்குகிறோம்.</p>
');


define("income_tax", ' <p>சுவிற்சலாந்தில் மிக முக்கியமான அரச பொறுப்புக்களின் இன்றியமையாத
					கட்டணமாக வருமானவரி கருதப்படுகின்றது. அனுபவமிக்க வல்லுனர்களைக்
					கொண்டு சட்ட முறைகளுக்கு அமைவாக B.C.CH உங்களின் வருமானவரிக்
					கட்டணத்தை நேர்த்தியாகவும், துரிதமாகவும் செய்து
					தரக்காத்திருக்கின்றோம். மேலும் வருமானவரி சம்பந்தமான ஆலோசனைகளையும்
					பெற்றுக் கொள்ளலாம்.</p>
');

define("flight_ticket", ' <p>எமது நிறுவனத்தினூடாக விரைவாகவும், குறைந்த கட்டணத்திலும் எந்த
நாட்டிற்கான விமானச்சீட்டுகளை பெற்றுக் கொள்ள எம்மை நாடுங்கள்.</p>
<p>எம்மூடாக காப்புறுதி செய்து கொள்பவர்களுக்கு விமானபயணச் சீட்டு
சலுகைக்கட்டணத்தில் வழங்கப்படும்.</p>
');



function getHouseInsuranceContent(){
    return getBlockQutes("house_insurance", "House Insurance", " வீட்டுக்காப்புறுதி ").house_insurance;
}

function getVechicleInsuranceContent(){
    return getBlockQutes("vechicle_insurance", "Vechicle Insurance", " வாகனக்காப்புறுதி ").vechicle_insurance;
}

function getMedicalInsuranceContent(){
    return getBlockQutes("medical_insurance", "Medical Insurance", " மருத்துவ காப்புறுதி  ").medical_insurance;
}

function getVisitorInsuranceContent(){
    return getBlockQutes("visitor_insurance", "Visitor Insurance", " வெளிநாட்டிலிருந்து வருவோர்க்கான காப்புறுதி ").visitor_insurance;
}


function getFirmaInsuranceContent(){
    return getBlockQutes("firma_insurance", "Firma Insurance", " நிறுவனக் காப்புறுதி ").firma_insurance;
}


function getLawInsuranceContent(){
    return getBlockQutes("law_insurance", "Law Insurance", " சட்டக் காப்புறுதி ").law_insurance;
}

function getLifeInsuranceContent(){
    return getBlockQutes("life_insurance", "Life Insurance", " ஆயுள் காப்புறுதி ").life_insurance;
}

function getBankLoanContent(){
    return getBlockQutes("bank_loan", "Bank Loan", " வங்கிக் கடன் ").bank_credit;
}


function getHouseLoanContent(){
    return getBlockQutes("house_loan", "House Loan", " வீட்டுக்கடன் ").house_loan;
}


function getKidsSavingsContent(){
    return getBlockQutes("kids_savings", "Kids Savings", " குழந்தைகளின் சேமிப்பு ").kids_savings;
}

function getIncomeTaxContent(){
    return getBlockQutes("income_tax", "Income Tax Suggestion", " வருமானவரி ").income_tax;
}


function getFlightTicketContent(){
    return getBlockQutes("flight_ticket", "Flight Ticket", " விமான பயணச்சீட்டு ").flight_ticket;
}

function getAddressBar(){
    ?> <ul class="list-unstyled"'>
						<li>
							<p class="h4">Büro</p>
						</li>
						<li><?php echo MAIN_ADDRESS_1?></li>
						<li><?php echo MAIN_ADDRESS_2?></li>
						
						<li><i class="fa fa-phone-square" aria-hidden="true"></i> <?php echo MAIN_CONTACT_NUMBER_1?></li>
						<li><i class="fa fa-mobile" aria-hidden="true"></i> <?php echo MAIN_CONTACT_NUMBER_2?></li>

						<li><i class="fa fa-envelope" aria-hidden="true"></i> Email :
							<?php echo MAIN_EMAIL?></li>
						
					</ul> <?php 
}

?>

