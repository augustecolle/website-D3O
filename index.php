<!-- SCHUDDEN JUIST VOOR CYCLUS 64 -->


<!DOCTYPE html>
<html lang="nl">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Auguste Colle">
    <link rel="shortcut icon" href="HTML_bat/assets/ico/favicon.ico">
    <link rel="stylesheet" type="text/css" href="HTML_bat/nvd3/nv.d3.css">
    <link rel="stylesheet" type="HTML_bat/text/css"
    href="HTML_bat/stylesheets/pythonstylesheet.css">
    <title>D3O: batterijen</title>

    <!-- Bootstrap core CSS -->
    <link href="HTML_bat/bootstrap-master/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="HTML_bat/bootstrap-master/dist/css/bootstrap-theme.min.css" rel="stylesheet">

    <!-- Slider theme -->
    <link href="HTML_bat/slider/css/simple-slider.css" rel="stylesheet" type="text/css" />
    <link href="HTML_bat/slider/css/simple-slider-volume.css" rel="stylesheet" type="text/css" />
    <script src="HTML_bat/contactform/email/validation.js" type="text/javascript"></script>


    <!-- Custom styles for this template -->
    <link href="batstylesheet.css" rel="stylesheet" type="text/css" />
    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- GOOGLE ANALYTICS <-->
    <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-52300550-1', 'auto');
          ga('send', 'pageview');

    </script>
    <!--> einde van google analytics <-->



    </head>

  <body role="document">
  <div class = "bg"> </div>
  <div class = "jumbotron" style = "padding-top:0px">
    <div class = "navbar-wrapper">
    <div class = "container" style="padding-top:10px">
    <!-- Fixed navbar -->
    <div class="navbar navbar-default" role="navigation" style
    ="padding-left:205px; box-shadow:none !important";>
      <div class="navbar-inner scrollable">
        <!-- Deze knop wordt gebruikt voor bij het herschalen van het scherm
             (probeer maar)  een dropdown knop te maken (zo eentje met drie
             streepjes gelijk op een smartphone). Kijk naar de bootstrap.CSS file onder
             .navbar-toggle klasse. De sr-only is bedoelt om informatie te
             geven aan specifieke toestellen, smartphones... Zie wikipedia -->
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#" style="font-weight:bold; font-size:20px">D3O: Batterijen</a>
        </div>
        <div class="navbar-collapse collapse scrollable">
          <ul class="nav navbar-nav">
            <li><a href="#Info" class = "test3" style="font-weight:
            bold; font-size:18px; padding-left:15px"> Info </a></li>
            <li><a href="#Dimensionering" style="font-size:18px; font-weight: bold;
            padding-left:25px; padding-right:25px" class = "test3"> Selectie
            tool </a></li>
            <li><a href="#Nikkelijzer" style="font-size:18px; font-weight: bold;
            padding-left:25px; padding-right:25px" class = "test3"> Nikkel ijzer  </a></li>
            <li><a href="#Contact" style="font-size: 18px; font-weight:bold;
            padding-left: 25px; padding-right:25px" class = "test3"> Contact </a></li>
            <!-- Geeft een dropdown menu, uncomment voor als dat nodig moest
                 zijn.
             <li class="dropdown">
             <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul> -->
        </div><!--/.nav-collapse -->
      </div>
    </div>
    </div>

         <!-- Main jumbotron for a primary marketing message or call to action -->
                <center><h1 style = "padding-top: 200px; font-size:800%"> D3O: Batterijen</h1> </center>
    </div>


 <div class="container theme-showcase" role="main">

    <a id="Info"></a>
    <div class = "page-header">
        <h1> Info </h1>
    </div>

    <div class = "page-header">
        <h2> Algemeen </h2>
    </div>
    <div>
    <p> Door de terugval van de subsidiëring en de bijkomende distributiekost is de verkoop van de photo-voltaïsche zonnepanelen teruggevallen. Hierdoor verminderde het vertrouwen van de eindklant en heeft deze markt het moeilijk. Nochtans is de huidig courant gebruikte invertortechnologie in het distributienet nodig om een kwaliteitsvolle en continue spanning te voorzien. 
D³O (Decongestie van het Distributienet door Decentrale Opslag) probeert via onderzoek de vraag en aanbod beter op elkaar af te stemmen door middel van invertor/batterijcombinaties. 
    </p>
    <button type="button" style = "outline:0;" class="btn btn-link"><a
    href="http://www.innovatienetwerk.be/projects/2009" target = "_blank"> Lees meer </a></button>
    </div>

    <div class = "page-header">
        <h2> Batterijen </h2>
    </div>
    <div>
    <p> In het kader van het takenpakket rond batterijen werd deze site
    ontwikkeld. Deze moet een hulpmiddel bieden voor het selecteren van het
    juiste type batterij. Deze tool is te vinden onder de sectie
    "Selectie tool". Naast deze tool wordt deze site ook gebruikt voor het
    visualiseren van de vergaarde data van de op- en ontlaad cycli van een
    nikkel ijzer batterij. Deze worden gelogd ten einde de grootte orde van de
    levensduur van deze batterij te achterhalen in "normale" uitbating. In de
    literatuur vindt men hier geen waarden over terwijl NiFe batterijen wel
    commercieel aangeboden worden. Meer info hierover kan gevonden worden onder
    de sectie "Nikkel ijzer".
    </p>
    </div>

    <a id = "Dimensionering"></a>
    <div class = "page-header">
        <h1> Selectie tool </h1>
    </div>
    
    <div>
    Selectie van de batterijen wordt hier op een ruime manier ge&iumlnterpreteerd, er
    wordt rekening gehouden met volgende aspecten:
    <div style="padding-top:10px; padding-bottom:5px">
    <ul>
    <li> Benodigd vermogen </li>
    <li> Benodigde capaciteit </li>
    <li> <b>Milieu impact </li>
    <li> Benodigd volume </li>
    <li> Benodigd onderhoud </li>
    <li> Levensduur</b> (vervanging van installatie) </li>
    <li> <b>Gewicht van de batterijbank </li>
    <li> Kost van de batterij </li></b>
    </ul>
    </div>
    <script type="text/javascript"
      src="https://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML">
    </script>
    
    <p>
    Hierbij wordt de gebruiker van de tool toegelaten aan de 6 laatst genoemden
    (vet gedrukt) een gewicht toe te kennen. Zo kan de gebruiker bijvoorbeeld
    de voorkeur geven aan een milieuvriendelijke batterij en minder belang
    hechten aan de kost van die batterij. De verrekening hiervan gebeurt door
    elk type batterij een punt \(\mathbf{P}(u_1,u_2,...,u_n)\) toe te kennen in een \(n\)-dimensionale ruimte,
    waarbij de \(n\) dimensies opgespannen worden door de parameters
    waar de gebruiker een respectievelijk gewicht
    \(\mathbf{X}(a_1,a_2,...,a_n)\) aan mag geven. In dit geval stelt elk
    batterij type een punt voor in een 6 dimensionale ruimte. Een rangschikking
    volgens grootte van het inproduct (zie onderstaande vergelijking) geeft dan
    de meest aangewezen batterij weer.
    
    \[\mathbf{X}(a_1,a_2,...,a_n)\cdot\mathbf{P}(u_1,u_2,...,u_n) = \sum_{i=1}^{n} a_i\cdot u_i \] 

    De gebruikte gegevens van de verschillende batterijtypes worden opgelijst
    in onderstaande tabel. Alle gegevens worden lineair geschaald naar een
    waarde in het interval 0 tot en met 1. Hierbij wordt 1 gekozen bij het
    batterijtype dat het beste scoort voor die eigenschap, 0 wordt gegeven aan
    het batterijtype dat het slechtste scoort.
    </p>
    <p>
    Onderstaande levensduur werd ingeschat voor een goed onderhouden battterij
    bij een DOD van 80%. Dit kan een vertekent beeld geven voor batterijen als
    lood-zuur AGM waarbij diep ontladen de levensduur drastisch verkort. De
    gegevens voor milieu impact zijn gebaseerd op het artikel <i>"An assessment
    of sustainable battery technology"</i>, waarbij voor de waarden van Aquion
    en NiFe een good guess werd genomen. De milieuwaarden zijn berekend van well to
    wheel waarbij ook het rendement van de batterij met de hedendaagse
    energiemix van Europa in rekening werd gebracht. Batterijen met een slecht
    rendement (de nikkel gebaseerden) kunnen met een "groenere" mix een
    betere score halen.
    <!--De milieu impact werd gehaald uit artikel [source to well...], aangevuld
    met een good guess voor NiFe en Aquion door de auteur. Zit Europese mix in
    dat slecht rendement afstraft (kernenergie/fossiele brandstoffen).
    Levensduur telkens bij 80% ontlaad diepte. Voor vermogendichtheid van de
    Aquion werd het voorbeeld van de technische brochure gebruikt. Systeem op
    boot van 14 batterijstacks S10 geeft 2000 W continu vermogen. Ik heb 3000
    gepakt voor vermogendichtheid te bekomen.-->
    </p>
</div>

<style>
.table td {
    text-align: center;   
}
.table th {
    text-align: center;
    height: 50px;
    vertical-align:middle;
}
</style>
    <div  style="padding-top:15px; padding-bottom:5px">
    <div class = "panel panel-default">
    <div class = "panel-heading"> Gegevens batterijtypes </div>
        <table class="table table-striped">
        <thead>
        <tr> <th style="vertical-align:middle"> Type </br> \(\left[-\right]\) </th><th style="vertical-align:middle"> Vermogendichtheid </br>
        \(\left[\frac{\mathrm{W}}{\mathrm{l}}\right]/\left[0-1\right]\)</th><th style="vertical-align:middle"> Energiedichtheid
        </br> \(\left[\frac{\mathrm{Wh}}{\mathrm{l}}\right]/\left[0-1\right]\)
        </th><th style="vertical-align:middle"> Milieu impact </br>
        \(\left[-\right]/\left[0-1\right]\) </th><th style="vertical-align:middle"> Kost</br>
        \(\frac{\frac{\mathrm{Euro}}{\mathrm{kWh}}}{\mathrm{cyclus}}/\left[0-1\right]\) </th><th style="vertical-align:middle"> Levensduur
        </br> \(\mathrm{Aantal}\, \mathrm{cycli}/\left[0-1\right]\) </th><th style="vertical-align:middle">
        Onderhoud </br> \(\left[-\right]/\left[0-1\right]\) </th><th style="vertical-align:middle">
        Gewicht </br> \(\frac{\mathrm{kg}}{l}/\left[0-1\right]\) </th> 
        </thead>
        <tbody>
        <tr> <td> Lood zuur FLA </td><td> 85 / 0.19 </td><td> 60 / 0.15
        </td><td> 422 / 0.05 </td><td> 0.10 / 1 </td><td> 1100 / 0.25 </td><td>
        ja / 0  </td><td> 2  </td></tr>
        <tr> <td> Lood zuur AGM </td><td> 110 / 0.25 </td><td> 100 / 0.31
        </td><td> 422 / 0.05 </td><td> 0.44 / 0.03</td><td> 450 / 0 </td><td>
        nee / 1 </td><td> 2 </td></tr>
        <tr> <td> Lood zuur VRLA </td><td> 90 / 0.21 </td><td> 80 / 0.23
        </td><td> 422 / 0.05 </td><td> 0.40 / 0.14 </td><td> 900 / 0.18
        </td><td> nee / 1  </td><td> 2 </td></tr>
        <tr> <td> NiMH </td><td> 218 / 0.51</td><td> 200 / 0.69 </td><td> 439 /
        0 </td><td> 0.45 / 0  </td><td> 1000 / 0.22 </td><td> nee / 1 </td><td>
        2.75 </td></tr>
        <tr> <td> NiFe </td><td> 77 / 0.18 </td><td> 30 / 0.04 </td><td> 376 /
        0.19 </td><td> \(\frac{582}{?}\) </td><td> ? </td><td> ja / 0 </td><td>
        1.30 </td></tr>
        <tr> <td> Lithium ijzer fosfaat </td><td> 427 / 1</td><td> 280 / 1
        </td><td> 256 / 0.54 </td><td> 0.3 / 0.43  </td><td> 2000 / 0.61
        </td><td> nee / 1  </td><td> 2.34 </td></tr>
        <tr> <td> Aquion </td><td> 2.46 / 0 </td><td> 20 / 0 </td><td> 100 / 1 </td><td>
        < 0.3 / 0.43 </td><td> >3000 / 1 </td><td> nee / 1 </td><td> 1.15 </td></tr>
        </tbody>
        </table>
    </div>
    </div>

<p></p>
<div class="well well-lg">
<div class="row" id="invoerPE">
   <div class="col-md-3">
    <div class="input-group" style="width:200px">
      <input type="text" class="form-control" style="width:160px"
      placeholder="Vermogen [W]" id="vermogeninput">
      <span class="input-group-btn">
        <button class="btn btn-primary" type="button" id="vermogenknop">Update</button>
      </span>
    </div><!-- /input-group -->
  </div><!-- /.col-lg-6 -->
 <div class="col-md-3">
    <div class="input-group" style="width:200px">
      <input type="text" class="form-control" style="width:160px"
      placeholder="Energie [Wh]" id="energieinput">
      <span class="input-group-btn">
        <button class="btn btn-primary" type="button" id="energieknop">Update</button>
      </span>
    </div><!-- /input-group -->
  </div><!-- /.col-lg-6 -->
<div class "col-md-6">
    <p style="margin-bottom:-10px; margin-top:-4px"> Invoer benodigd vermogen en energie. Nodig voor het bepalen van de
    grootte en gewicht batterijbank (keuze tussen dimensioneren op vermogen of
    op energie). </p>
</div>
</div><!-- /.row -->
</div>

<div id="sliders">

<div class="row">
    <div class="col-md-6"> 
    <h3> Milieu impact <small> (0 = onbelangrijk, 10 = zo weinig mogelijk) </small> </h3>
    <input type="text" data-slider="true" data-slider-range="0,10"
    data-slider-step="1" data-slider-snap="true" data-slider-highlight="true"
    id = "milieuslider">
    <h3 style = "margin-top:-10px"> Volume batterijbank  <small> (0 = onbelangrijk, 10 = zo klein
    mogelijk) </small> </h3>
    <input id = "grootteslider" type="text" data-slider="true" data-slider-range="0,10" data-slider-step="1" data-slider-snap="true" data-slider-highlight="true">
    <h3 style = "margin-top:-10px"> Benodigd onderhoud  <small> (0 =
    onbelangrijk, 10 = zo weinig mogelijk) </small> </h3>
    <input id = "onderhoudslider" type="text" data-slider="true" data-slider-range="0,10" data-slider-step="1" data-slider-snap="true" data-slider-highlight="true">
    <h3 style = "margin-top:-10px"> Levensduur  <small> (0 =
    onbelangrijk, 10 = zo lang mogelijk) </small> </h3>
    <input id = "levensduurslider" type="text" data-slider="true" data-slider-range="0,10" data-slider-step="1" data-slider-snap="true" data-slider-highlight="true">
    <h3 style = "margin-top:-10px"> Gewicht  <small> (0 =
    onbelangrijk, 10 = zo licht mogelijk) </small> </h3>
    <input id = "gewichtslider" type="text" data-slider="true" data-slider-range="0,10" data-slider-step="1" data-slider-snap="true" data-slider-highlight="true">
    <h3 style = "margin-top:-10px"> Kost  <small> (0 =
    onbelangrijk, 10 = zo goedkoop mogelijk) </small> </h3>
    <input id = "kostslider" type="text" data-slider="true" data-slider-range="0,10" data-slider-step="1" data-slider-snap="true" data-slider-highlight="true">
   </div>

    <div class="col-md-6" id="sliderplot"> </div>
    </div>

    
</div>




    <a id = "Nikkelijzer"></a>
    <div class = "page-header">
        <h1> Nikkel ijzer </h1>
    </div>

<div class="row">
    <div class="col-md-9"> <p> In de eerste gebruikerscommissie werd een overzicht
    gegeven van de hedendaagse marktbeschikbare batterijen met hun voor- en
    nadelen. Hierbij werd aangehaald dat er over de nikkel-ijzer batterij,
    ondanks zijn > 100 jarige bestaan, nagenoeg geen wetenschappelijke
    literatuur te vinden is. Deze batterij is echter wel commercieel
    beschikbaar. Naast prijzen kan men bij de leverancier "<i>Iron Edison</i>"
    ook terecht voor een garantie op levensduur van de batterij: </p>

    <div style = "padding-top:15px">
    <blockquote><p> "Our battery is guaranteed to provide 3650 cycles at 80%
    DOD.  At the end of this period, we are guaranteeing that the battery will
    provide at least 70% of the nominal capacity."
    </p><p><small>Iron Edison</small></p></blockquote>
    </div>
    <div style = "padding-top:15px">
    <blockquote><p> "Neem de levensduur die leveranciers opgeven, deel het door
    twee en het resultaat is de levensduur van een perfect onderhouden
    batterij. Een die niet bestaat dus."
    </p><p><small>Vooraanstaand batterij expert</small></p></blockquote>
    </div>
    Deze grootte-orde van levensduur wordt zelfs niet door de beste hedendaagse
    commercieel beschikbare lithium-ion batterijen ge&#235venaard. Deze
    opstelling is een poging tot het geven van een indicatie van de levensduur van de NiFe batterij.
    
    

    </div>
    <div class="col-md-3 thumbnail"> <img src="HTML_bat/images/afb1.JPG"
    class="img-thumbnail" alt=" Opstelling NiFe"></img>
    <div class="caption"><h3> Opstelling NiFe </h3>
    <p> Opstelling op- en ontladen NiFe batterij. Batterijgegevens:
    <ul>
        <li> Capaciteit = 30\(\,\)Ah</li>
        <li> V<sub>nom</sub> = 1.2\(\,\)V</li>
        <li> Oplaadstroom = 2.0\(\,\)A </li>
        <li> Ontlaadstroom &#8776 3\(\,\)A </li>
    </ul>
    </p>
    </div>
    </div>
</div>


<div class="page-header">
    <h2> Opstelling </h2>
</div>
<div class="row">
    <div class="col-md-9">
    <p>
    In bijgevoegde figuur een overzicht van de opstelling. De ATMega328
    microcontroller stuurt de 2 relais aan, leest spanning en stroom uit en
    stuurt de verkregen data door naar de PC. De meting van de stroom gebeurt
    aan de hand van de hall sensor ACS712T. De spanningsmeting gebeurt aan de
    hand van een rechtstreekse aansluiting van een analoge ingang van de
    microcontroller op de + klem en het aan massa leggen van de - klem.
    </p>
    <p>
    De NiFe batterij heeft volgende laad- en ontlaad karakteristiek:
    </p>
    <div  style="padding-top:15px; padding-bottom:5px">
    <div class = "panel panel-default">
    <div class = "panel-heading"> NiFe karakteristieken </div>
        <table class="table table-striped">
        <thead></thead>
        <tbody>
        <tr> <td> Float spanning </td><td> 1.45\(\,\)V <td></tr> 
        <tr> <td> Charge spanning </td><td> 1.45-1.70\(\,\)V <td></tr>
        <tr> <td> Equalization spanning </td><td> 1.70-1.85\(\,\)V <td></tr>
        <tr> <td> Charge rate </td><td> 0.25\(\,\)C <td></tr>
        <tr> <td> Discharge rate </td><td> 0.25\(\,\)C <td></tr>
        </tbody>
        </table>
    </div>
    </div>
    <p>
    Conventioneel wordt er eerst geladen aan constante stroom waarna, bij het
    overschrijden van een bepaalde spanning, er verder wordt geladen met
    constante spanning. Hier wordt gekozen voor te laden aan constante spanning
    met een stroom begrenzing van 2\(\,\)A (= 0.07\(\,\)C). Bij een spanning
    van 1.6\(\,\)V wordt er overgeschakeld naar ontladen over een constante
    belasting (R = 0.5\(\,\)&#8486). Wanneer de ondergrens van 1.1\(\,\)V wordt
    bereikt wordt er overgeschakeld naar opladen. De code voor microcontroller,
    seriele communicatie met microcontroller en verwerking van data kan
    hieronder gevonden worden.
    </div>
    <div class="col-md-3 thumbnail">
    <img src="HTML_bat/images/schemaNiFe.png" height="270px"
    class="img-thumbnail"></img>
    <div class="caption"> <h3> Schema opstelling </h3>
    <p> De opstelling bestaat uit:
    <ul>
        <li> Microcontroller ATMega328 </li>
        <li> Hall sensor </li>
        <li> 2 solid-state relais </li>
        <li> Belasting </li>
        <li> DC bron </li>
    </ul>
    </p>
    </div>
    </div>
</div>

<div style="padding-top:25px">
<div class="well">
    <button onclick="$(function(){
  $('#decode').show();
});" type="button" class="btn btn-primary">Toon code</button>
    <button onclick="$(function(){
  $('#decode').hide();
});" type="button" class="btn btn-default">Verberg code</button>
</div>

<div id="decode" class="pythoncode" style="display:none">
    <h2></h2>
<!-- volgend code blok -->


<div class="highlight"><pre><span class="kt">unsigned</span> <span class="kt">int</span> <span class="n">start</span> <span class="o">=</span> <span class="mi">0</span><span class="p">;</span>
<span class="kt">unsigned</span> <span class="kt">int</span> <span class="n">einde</span> <span class="o">=</span> <span class="mi">0</span><span class="p">;</span>
<span class="k">const</span> <span class="kt">int</span> <span class="n">pinRelayOpladen</span> <span class="o">=</span> <span class="mi">12</span><span class="p">;</span>
<span class="k">const</span> <span class="kt">int</span> <span class="n">pinRelayOntladen</span> <span class="o">=</span> <span class="mi">13</span><span class="p">;</span>
<span class="n">boolean</span> <span class="n">opgeladen</span> <span class="o">=</span> <span class="nb">false</span><span class="p">;</span>
<span class="n">boolean</span> <span class="n">ontladen</span> <span class="o">=</span> <span class="nb">false</span><span class="p">;</span>
<span class="kt">double</span> <span class="n">spanning</span><span class="p">;</span>

<span class="kt">void</span> <span class="nf">setup</span><span class="p">()</span>
<span class="p">{</span>
  <span class="n">Serial</span><span class="p">.</span><span class="n">begin</span><span class="p">(</span><span class="mi">9600</span><span class="p">);</span>
  <span class="n">pinMode</span><span class="p">(</span><span class="n">pinRelayOpladen</span><span class="p">,</span> <span class="n">OUTPUT</span><span class="p">);</span>
  <span class="n">pinMode</span><span class="p">(</span><span class="n">pinRelayOntladen</span><span class="p">,</span> <span class="n">OUTPUT</span><span class="p">);</span>
  <span class="n">digitalWrite</span><span class="p">(</span><span class="n">pinRelayOpladen</span><span class="p">,</span> <span class="n">LOW</span><span class="p">);</span>
  <span class="n">digitalWrite</span><span class="p">(</span><span class="n">pinRelayOntladen</span><span class="p">,</span> <span class="n">LOW</span><span class="p">);</span>
<span class="p">}</span>

<span class="kt">void</span> <span class="nf">loop</span><span class="p">(){</span>

  <span class="c1">//-----------Opladen------------//</span>
  <span class="c1">// Opladen tot als spanning &gt; 1.60</span>
  <span class="n">digitalWrite</span><span class="p">(</span><span class="n">pinRelayOpladen</span><span class="p">,</span> <span class="n">HIGH</span><span class="p">);</span>
  <span class="n">delay</span><span class="p">(</span><span class="mi">20</span><span class="p">);</span>
  <span class="n">digitalWrite</span><span class="p">(</span><span class="n">pinRelayOntladen</span><span class="p">,</span> <span class="n">LOW</span><span class="p">);</span>
  <span class="n">delay</span><span class="p">(</span><span class="mi">20</span><span class="p">);</span>
  <span class="c1">//Serial.println(&quot;OPLADEN&quot;);</span>
  <span class="k">while</span> <span class="p">(</span><span class="o">!</span><span class="n">opgeladen</span><span class="p">){</span>
    <span class="k">if</span> <span class="p">(</span><span class="n">spanning</span> <span class="o">&gt;</span> <span class="mf">1.85</span><span class="p">){</span>
      <span class="n">opgeladen</span> <span class="o">=</span> <span class="nb">true</span><span class="p">;</span>
      <span class="n">ontladen</span> <span class="o">=</span> <span class="nb">false</span><span class="p">;</span>
    <span class="p">}</span>
    <span class="n">meetSpanningStroom</span><span class="p">();</span>
  <span class="p">}</span>  
    
  <span class="c1">//-----------Ontladen------------//</span>
  <span class="n">digitalWrite</span><span class="p">(</span><span class="n">pinRelayOntladen</span><span class="p">,</span> <span class="n">HIGH</span><span class="p">);</span>
  <span class="n">delay</span><span class="p">(</span><span class="mi">20</span><span class="p">);</span>
  <span class="n">digitalWrite</span><span class="p">(</span><span class="n">pinRelayOpladen</span><span class="p">,</span> <span class="n">LOW</span><span class="p">);</span>
  <span class="n">delay</span><span class="p">(</span><span class="mi">20</span><span class="p">);</span>
  <span class="c1">//ontladen tot als spanning &lt; 1.10</span>
  <span class="k">while</span><span class="p">(</span><span class="o">!</span><span class="n">ontladen</span><span class="p">){</span>
    <span class="k">if</span> <span class="p">(</span><span class="n">spanning</span> <span class="o">&lt;</span> <span class="mf">1.10</span><span class="p">){</span>
      <span class="n">ontladen</span> <span class="o">=</span> <span class="nb">true</span><span class="p">;</span>
      <span class="n">opgeladen</span> <span class="o">=</span> <span class="nb">false</span><span class="p">;</span>  
    <span class="p">}</span>
    <span class="n">meetSpanningStroom</span><span class="p">();</span>
  <span class="p">}</span>
<span class="p">}</span>


<span class="kt">void</span> <span class="nf">meetSpanningStroom</span><span class="p">(){</span>
    <span class="n">leegBuffer</span><span class="p">();</span>
    <span class="n">start</span> <span class="o">=</span> <span class="n">millis</span><span class="p">();</span>
    <span class="n">spanning</span> <span class="o">=</span> <span class="n">analogRead</span><span class="p">(</span><span class="n">A1</span><span class="p">);</span>
    <span class="n">Serial</span><span class="p">.</span><span class="n">println</span><span class="p">(</span><span class="n">spanning</span><span class="p">);</span> <span class="c1">//lees spanning in, berekening naar spanning gebeuren op PC</span>
    <span class="n">Serial</span><span class="p">.</span><span class="n">println</span><span class="p">(</span><span class="n">analogRead</span><span class="p">(</span><span class="n">A0</span><span class="p">));</span> <span class="c1">//lees stroom in, berekening naar stroom gebeuren op PC</span>
    <span class="n">einde</span> <span class="o">=</span> <span class="n">millis</span><span class="p">();</span>
    <span class="n">delay</span><span class="p">(</span><span class="mi">1000</span><span class="o">-</span><span class="p">(</span><span class="n">einde</span><span class="o">-</span><span class="n">start</span><span class="p">));</span> <span class="c1">//wacht altijd precies een seconde, interne klok heeft driftfout =~ 3 sec per 24 uur</span>
<span class="p">}</span>

<span class="kt">void</span> <span class="nf">leegBuffer</span><span class="p">(){</span>
  <span class="k">while</span><span class="p">(</span><span class="n">Serial</span><span class="p">.</span><span class="n">available</span><span class="p">()){</span>
    <span class="n">Serial</span><span class="p">.</span><span class="n">read</span><span class="p">();</span>
  <span class="p">}</span>
<span class="p">}</span>
</pre></div>

<!-- Volgend code blok -->


<div class="highlight"><pre><span class="err">﻿</span><span class="s">&#39;&#39;&#39;</span>
<span class="s">Created on Apr 18, 2014</span>

<span class="s">@author: auguste</span>
<span class="s">&#39;&#39;&#39;</span>


<span class="kn">import</span> <span class="nn">serial</span><span class="o">,</span> <span class="nn">csv</span>
<span class="kn">from</span> <span class="nn">serial.tools</span> <span class="kn">import</span> <span class="n">list_ports</span>
<span class="kn">import</span> <span class="nn">os</span><span class="o">,</span> <span class="nn">sys</span><span class="o">,</span> <span class="nn">select</span><span class="o">,</span> <span class="nn">time</span>
<span class="kn">from</span> <span class="nn">time</span> <span class="kn">import</span> <span class="n">strftime</span>
<span class="kn">import</span> <span class="nn">msvcrt</span>

<span class="n">ser</span> <span class="o">=</span> <span class="n">serial</span><span class="o">.</span><span class="n">Serial</span><span class="p">()</span>
<span class="n">ser</span><span class="o">.</span><span class="n">baudrate</span> <span class="o">=</span> <span class="mi">9600</span>
<span class="n">ser</span><span class="o">.</span><span class="n">timeout</span> <span class="o">=</span> <span class="mi">1</span>
<span class="n">bestandgrootte</span> <span class="o">=</span> <span class="mi">86400</span><span class="o">/</span><span class="mi">24</span><span class="o">*</span><span class="mi">3</span><span class="c">#86400#hoeveel lijnen in csv file, 86400 seconden in een dag</span>

<span class="c">#---------------Vind actieve poort-------------</span>
<span class="k">if</span> <span class="n">os</span><span class="o">.</span><span class="n">name</span> <span class="o">==</span> <span class="s">&#39;nt&#39;</span><span class="p">:</span>
	
	<span class="k">for</span> <span class="n">i</span> <span class="ow">in</span> <span class="nb">range</span><span class="p">(</span><span class="mi">256</span><span class="p">):</span>
		<span class="k">try</span><span class="p">:</span>
			<span class="n">s</span> <span class="o">=</span> <span class="n">serial</span><span class="o">.</span><span class="n">Serial</span><span class="p">(</span><span class="n">i</span><span class="p">)</span>
			<span class="n">poort</span> <span class="o">=</span> <span class="n">s</span>
			<span class="n">s</span><span class="o">.</span><span class="n">close</span><span class="p">()</span>
			<span class="k">print</span><span class="p">(</span><span class="s">&#39;COM&#39;</span><span class="o">+</span><span class="nb">str</span><span class="p">(</span><span class="n">i</span><span class="o">+</span><span class="mi">1</span><span class="p">))</span>
		<span class="k">except</span> <span class="n">serial</span><span class="o">.</span><span class="n">SerialException</span><span class="p">:</span>
			<span class="k">pass</span>
<span class="k">else</span><span class="p">:</span>
    <span class="k">for</span> <span class="n">port</span> <span class="ow">in</span> <span class="n">list_ports</span><span class="o">.</span><span class="n">comports</span><span class="p">():</span>
        <span class="k">try</span><span class="p">:</span>
            <span class="n">ser</span><span class="o">.</span><span class="n">port</span> <span class="o">=</span> <span class="n">port</span><span class="p">[</span><span class="mi">0</span><span class="p">]</span>
            <span class="n">ser</span><span class="o">.</span><span class="n">open</span><span class="p">()</span>
            <span class="n">ser</span><span class="o">.</span><span class="n">readline</span><span class="p">()</span>
            <span class="n">ser</span><span class="o">.</span><span class="n">close</span><span class="p">()</span>
            <span class="n">poort</span> <span class="o">=</span> <span class="n">ser</span>
        <span class="k">except</span> <span class="n">serial</span><span class="o">.</span><span class="n">SerialException</span><span class="p">:</span>
            <span class="k">continue</span>
<span class="c">#-----------------------------------------------</span>

<span class="c">#============Lees seriele bus uit tot als enter gedrukt wordt============</span>

<span class="n">poort</span><span class="o">.</span><span class="n">open</span><span class="p">()</span>
<span class="c">#poort.readline()</span>
<span class="n">naamt</span> <span class="o">=</span> <span class="mi">0</span>
<span class="n">b</span> <span class="o">=</span> <span class="bp">True</span>
<span class="k">while</span> <span class="bp">True</span><span class="p">:</span>
    <span class="c"># if msvcrt.kbhit():</span>
        <span class="c"># if msvcrt.getch() == &#39;s&#39;:</span>
            <span class="c"># break</span>
    <span class="n">lijstvolt</span> <span class="o">=</span> <span class="p">[]</span>
    <span class="n">lijstamp</span> <span class="o">=</span> <span class="p">[]</span>
    <span class="n">tijdlijst</span> <span class="o">=</span> <span class="p">[]</span>
    <span class="k">for</span> <span class="n">i</span> <span class="ow">in</span> <span class="nb">range</span><span class="p">(</span><span class="n">bestandgrootte</span><span class="p">):</span>
        <span class="n">ctime</span> <span class="o">=</span> <span class="n">strftime</span><span class="p">(</span><span class="s">&quot;%Y-%m-</span><span class="si">%d</span><span class="s"> %H:%M:%S&quot;</span><span class="p">,</span> <span class="n">time</span><span class="o">.</span><span class="n">localtime</span><span class="p">())</span>
        <span class="k">if</span> <span class="n">msvcrt</span><span class="o">.</span><span class="n">kbhit</span><span class="p">():</span>
            <span class="n">charcatch</span> <span class="o">=</span> <span class="n">msvcrt</span><span class="o">.</span><span class="n">getch</span><span class="p">()</span>
            <span class="k">if</span> <span class="n">charcatch</span> <span class="o">==</span> <span class="s">&#39;q&#39;</span><span class="p">:</span>
                <span class="n">sys</span><span class="o">.</span><span class="n">exit</span><span class="p">()</span>
            <span class="k">elif</span> <span class="n">charcatch</span> <span class="o">==</span> <span class="s">&#39;s&#39;</span><span class="p">:</span>
                <span class="k">break</span>
        <span class="k">try</span><span class="p">:</span>
            <span class="n">volt</span> <span class="o">=</span> <span class="n">poort</span><span class="o">.</span><span class="n">readline</span><span class="p">()</span>
            <span class="n">amp</span> <span class="o">=</span> <span class="n">poort</span><span class="o">.</span><span class="n">readline</span><span class="p">()</span>
            <span class="n">voltnew</span> <span class="o">=</span> <span class="nb">float</span><span class="p">(</span><span class="s">&#39;{:5.3f}&#39;</span><span class="o">.</span><span class="n">format</span><span class="p">((</span><span class="nb">float</span><span class="p">(</span><span class="nb">str</span><span class="p">(</span><span class="n">volt</span><span class="o">.</span><span class="n">strip</span><span class="p">()))</span><span class="o">+</span> <span class="mf">2.74739</span><span class="p">)</span><span class="o">/</span><span class="mf">201.0421</span><span class="p">))</span> <span class="c">#5 karakters, 3 achter het floating point</span>
            <span class="n">ampnew</span> <span class="o">=</span> <span class="nb">float</span><span class="p">(</span><span class="s">&#39;{:5.3f}&#39;</span><span class="o">.</span><span class="n">format</span><span class="p">((</span><span class="nb">float</span><span class="p">(</span><span class="nb">str</span><span class="p">(</span><span class="n">amp</span><span class="o">.</span><span class="n">strip</span><span class="p">()))</span> <span class="o">-</span> <span class="mf">509.50197</span><span class="p">)</span><span class="o">/</span><span class="mf">19.887069</span><span class="p">))</span>
            <span class="n">b</span> <span class="o">=</span> <span class="bp">True</span>
            <span class="k">print</span><span class="p">(</span><span class="n">voltnew</span><span class="p">)</span>
            <span class="c">#print(amp.strip())</span>
            <span class="k">print</span><span class="p">(</span><span class="n">ampnew</span><span class="p">)</span>
        <span class="k">except</span><span class="p">:</span>
            <span class="n">i</span><span class="o">=</span><span class="n">i</span><span class="o">-</span><span class="mi">1</span>
            <span class="n">poort</span><span class="o">.</span><span class="n">readline</span><span class="p">()</span>
            <span class="n">b</span> <span class="o">=</span> <span class="bp">False</span>
            <span class="k">continue</span>
        <span class="k">if</span> <span class="n">b</span><span class="p">:</span>
            <span class="n">lijstvolt</span><span class="o">.</span><span class="n">append</span><span class="p">(</span><span class="n">voltnew</span><span class="p">)</span>
            <span class="n">lijstamp</span><span class="o">.</span><span class="n">append</span><span class="p">(</span><span class="n">ampnew</span><span class="p">)</span>
            <span class="n">tijdlijst</span><span class="o">.</span><span class="n">append</span><span class="p">(</span><span class="n">ctime</span><span class="p">)</span>
            
    <span class="c">#-----Data wegschrijven naar csv------</span>
    <span class="n">lijstnaam</span> <span class="o">=</span> <span class="s">&#39;testr&#39;</span><span class="o">+</span><span class="nb">str</span><span class="p">(</span><span class="n">naamt</span><span class="p">)</span><span class="o">.</span><span class="n">zfill</span><span class="p">(</span><span class="mi">9</span><span class="p">)</span><span class="o">+</span><span class="s">&#39;.csv&#39;</span>
    <span class="n">naamt</span> <span class="o">+=</span> <span class="mi">1</span>
    <span class="n">header</span> <span class="o">=</span> <span class="p">[</span><span class="s">&#39;Tijd&#39;</span><span class="p">,</span> <span class="s">&#39;Spanning&#39;</span><span class="p">,</span><span class="s">&#39;Stroom&#39;</span><span class="p">]</span>
    
    <span class="n">lijst</span> <span class="o">=</span> <span class="nb">zip</span><span class="p">(</span><span class="n">tijdlijst</span><span class="p">,</span><span class="n">lijstvolt</span><span class="p">,</span><span class="n">lijstamp</span><span class="p">)</span>
    <span class="k">with</span> <span class="nb">open</span><span class="p">(</span><span class="n">lijstnaam</span><span class="p">,</span> <span class="s">&#39;wb&#39;</span><span class="p">)</span> <span class="k">as</span> <span class="n">csvbestand</span><span class="p">:</span>
        <span class="n">schrijver</span> <span class="o">=</span> <span class="n">csv</span><span class="o">.</span><span class="n">writer</span><span class="p">(</span><span class="n">csvbestand</span><span class="p">,</span> <span class="n">delimiter</span> <span class="o">=</span> <span class="s">&#39;,&#39;</span><span class="p">)</span>
        <span class="n">schrijver</span><span class="o">.</span><span class="n">writerow</span><span class="p">(</span><span class="n">header</span><span class="p">)</span>
        <span class="n">schrijver</span><span class="o">.</span><span class="n">writerows</span><span class="p">(</span><span class="n">lijst</span><span class="p">)</span>
<span class="n">poort</span><span class="o">.</span><span class="n">close</span><span class="p">()</span>
</pre></div>

    <div class="highlight">
    <pre><span class="kn">    import</span> <span class="nn">os</span>
    <span class="kn">import</span> <span class="nn">numpy</span> <span class="kn">as</span> <span class="nn">np</span>
    <span class="kn">import</span> <span class="nn">csv</span>
    <span class="kn">from</span> <span class="nn">pylab</span> <span class="kn">import</span> <span class="o">*</span>


    <span class="n">timestep</span> <span class="o">=</span> <span class="mi">100</span> <span class="c">#om de hoeveel seconden neem ik een punt</span>

    <span class="n">files</span> <span class="o">=</span> <span class="n">os</span><span class="o">.</span><span class="n">listdir</span><span class="p">(</span><span class="s">&#39;.&#39;</span><span class="p">)</span>

    <span class="n">csvfiles</span> <span class="o">=</span> <span class="p">[</span><span class="n">f</span> <span class="k">for</span> <span class="n">f</span> <span class="ow">in</span> <span class="n">files</span> <span class="k">if</span> <span class="n">f</span><span class="o">.</span><span class="n">endswith</span><span class="p">(</span><span class="s">&#39;.csv&#39;</span><span class="p">)]</span> 
    <span class="n">amps</span> <span class="o">=</span> <span class="n">np</span><span class="o">.</span><span class="n">array</span><span class="p">([])</span>
    <span class="n">volts</span> <span class="o">=</span> <span class="n">np</span><span class="o">.</span><span class="n">array</span><span class="p">([])</span>

    <span class="n">csvfiles</span> <span class="o">=</span> <span class="nb">sorted</span><span class="p">(</span><span class="n">csvfiles</span><span class="p">)</span>

    <span class="k">for</span> <span class="nb">file</span> <span class="ow">in</span> <span class="n">csvfiles</span><span class="p">:</span>
        <span class="n">count</span> <span class="o">=</span> <span class="mi">0</span>
        <span class="k">with</span> <span class="nb">open</span><span class="p">(</span><span class="nb">file</span><span class="p">)</span> <span class="k">as</span> <span class="n">csvfile</span><span class="p">:</span>
            <span class="n">reader</span> <span class="o">=</span> <span class="n">csv</span><span class="o">.</span><span class="n">reader</span><span class="p">(</span><span class="n">csvfile</span><span class="p">,</span> <span class="n">delimiter</span><span class="o">=</span><span class="s">&#39;,&#39;</span><span class="p">)</span>
            <span class="k">for</span> <span class="n">row</span> <span class="ow">in</span> <span class="n">reader</span><span class="p">:</span>
                <span class="n">count</span> <span class="o">=</span> <span class="n">count</span> <span class="o">+</span> <span class="mi">1</span>
                <span class="k">if</span> <span class="n">count</span><span class="o">%</span><span class="n">timestep</span> <span class="o">==</span> <span class="mi">0</span><span class="p">:</span> <span class="c">#om de hoeveel punten neem ik eentje om te</span>
                <span class="c"># plotten</span>
                    <span class="k">try</span><span class="p">:</span>
                        <span class="n">volts</span> <span class="o">=</span> <span class="n">np</span><span class="o">.</span><span class="n">append</span><span class="p">(</span><span class="n">volts</span><span class="p">,</span> <span class="nb">float</span><span class="p">(</span><span class="n">row</span><span class="p">[</span><span class="mi">1</span><span class="p">]))</span>
                        <span class="n">amps</span> <span class="o">=</span> <span class="n">np</span><span class="o">.</span><span class="n">append</span><span class="p">(</span><span class="n">amps</span><span class="p">,</span> <span class="nb">float</span><span class="p">(</span><span class="n">row</span><span class="p">[</span><span class="mi">2</span><span class="p">]))</span>
                    <span class="k">except</span><span class="p">:</span>
                        <span class="k">continue</span>
    <span class="n">length</span> <span class="o">=</span> <span class="nb">len</span><span class="p">(</span><span class="n">volts</span><span class="p">)</span>
    <span class="n">t</span> <span class="o">=</span> <span class="n">np</span><span class="o">.</span><span class="n">arange</span><span class="p">(</span><span class="n">length</span><span class="p">)</span>

    <span class="n">fig</span> <span class="o">=</span> <span class="n">figure</span><span class="p">(</span><span class="n">figsize</span><span class="o">=</span><span class="p">(</span><span class="mi">12</span><span class="p">,</span><span class="mi">8</span><span class="p">),</span> <span class="n">dpi</span><span class="o">=</span><span class="mi">80</span><span class="p">)</span>

    <span class="n">subplot</span><span class="p">(</span><span class="mi">6</span><span class="p">,</span><span class="mi">1</span><span class="p">,</span><span class="mi">1</span><span class="p">)</span>

    <span class="n">plot</span><span class="p">(</span><span class="n">t</span><span class="p">,</span><span class="n">volts</span><span class="p">,</span> <span class="s">&#39;bo&#39;</span><span class="p">,</span>  <span class="n">markersize</span> <span class="o">=</span> <span class="mi">1</span><span class="p">,</span> <span class="n">markeredgecolor</span> <span class="o">=</span> <span class="s">&#39;blue&#39;</span><span class="p">)</span>
    <span class="n">ylabel</span><span class="p">(</span><span class="s">r&#39;Spanning [V]&#39;</span><span class="p">)</span>

    <span class="n">subplot</span><span class="p">(</span><span class="mi">6</span><span class="p">,</span><span class="mi">1</span><span class="p">,</span><span class="mi">2</span><span class="p">)</span>

    <span class="n">plot</span><span class="p">(</span><span class="n">t</span><span class="p">,</span> <span class="n">amps</span><span class="p">,</span> <span class="s">&#39;ko&#39;</span><span class="p">,</span> <span class="n">markersize</span> <span class="o">=</span> <span class="mi">1</span><span class="p">,</span> <span class="n">markeredgecolor</span> <span class="o">=</span> <span class="s">&#39;black&#39;</span><span class="p">)</span>
    <span class="n">ylabel</span><span class="p">(</span><span class="s">r&#39;Stroom [A]&#39;</span><span class="p">)</span>
    <span class="n">yticks</span><span class="p">([</span><span class="o">-</span><span class="mi">4</span><span class="p">,</span><span class="o">-</span><span class="mi">2</span><span class="p">,</span><span class="mi">0</span><span class="p">,</span><span class="mi">2</span><span class="p">,</span><span class="mi">4</span><span class="p">])</span>

    <span class="n">subplot</span><span class="p">(</span><span class="mi">6</span><span class="p">,</span><span class="mi">1</span><span class="p">,</span><span class="mi">3</span><span class="p">)</span>

    <span class="n">vermogen</span> <span class="o">=</span> <span class="n">amps</span><span class="o">*</span><span class="n">volts</span> 

    <span class="n">plot</span><span class="p">(</span><span class="n">t</span><span class="p">,</span> <span class="n">vermogen</span><span class="p">,</span> <span class="s">&#39;ro&#39;</span><span class="p">,</span> <span class="n">markersize</span> <span class="o">=</span> <span class="mi">1</span><span class="p">,</span> <span class="n">markeredgecolor</span> <span class="o">=</span> <span class="s">&#39;red&#39;</span><span class="p">)</span>
    <span class="n">ylabel</span><span class="p">(</span><span class="s">r&#39;Vermogen [W]&#39;</span><span class="p">)</span>

    <span class="n">subplot</span><span class="p">(</span><span class="mi">6</span><span class="p">,</span><span class="mi">1</span><span class="p">,</span><span class="mi">4</span><span class="p">)</span>

    <span class="n">cumP</span> <span class="o">=</span> <span class="n">np</span><span class="o">.</span><span class="n">cumsum</span><span class="p">(</span><span class="n">vermogen</span><span class="p">)</span><span class="o">*</span><span class="n">timestep</span>

    <span class="n">plot</span><span class="p">(</span><span class="n">t</span><span class="p">,</span><span class="n">cumP</span><span class="p">,</span> <span class="s">&#39;go&#39;</span><span class="p">,</span>  <span class="n">markersize</span> <span class="o">=</span> <span class="mi">1</span><span class="p">,</span> <span class="n">markeredgecolor</span> <span class="o">=</span> <span class="s">&#39;green&#39;</span><span class="p">)</span>
    <span class="n">ylabel</span><span class="p">(</span><span class="s">r&#39;Cum Verm&#39;</span><span class="p">)</span>
    <span class="n">xlabel</span><span class="p">(</span><span class="s">r&#39;Tijd * &#39;</span><span class="o">+</span><span class="nb">str</span><span class="p">(</span><span class="n">timestep</span><span class="p">)</span><span class="o">+</span><span class="s">&#39; [s]&#39;</span><span class="p">)</span>
    <span class="n">yticks</span><span class="p">([</span><span class="o">-</span><span class="mi">40000</span><span class="p">,</span><span class="mi">60000</span><span class="p">,</span><span class="mi">160000</span><span class="p">,</span> <span class="mi">260000</span><span class="p">,</span> <span class="mi">360000</span><span class="p">])</span>
    <span class="n">ax</span> <span class="o">=</span> <span class="n">gca</span><span class="p">()</span>
    <span class="n">ax</span><span class="o">.</span><span class="n">yaxis</span><span class="o">.</span><span class="n">get_major_formatter</span><span class="p">()</span><span class="o">.</span><span class="n">set_powerlimits</span><span class="p">((</span><span class="mi">0</span><span class="p">,</span> <span class="mi">1</span><span class="p">))</span>
    <span class="c">#rendement en degradatie plotten</span>
    <span class="n">x</span> <span class="o">=</span> <span class="mi">0</span><span class="p">;</span>
    <span class="n">rendement</span> <span class="o">=</span> <span class="n">np</span><span class="o">.</span><span class="n">array</span><span class="p">([])</span>
    <span class="n">cumPos</span> <span class="o">=</span> <span class="n">np</span><span class="o">.</span><span class="n">array</span><span class="p">([])</span> <span class="c">#voor degradatie</span>
    <span class="n">cumNeg</span> <span class="o">=</span> <span class="n">np</span><span class="o">.</span><span class="n">array</span><span class="p">([])</span> <span class="c">#voor degradatie</span>

    <span class="k">while</span> <span class="bp">True</span><span class="p">:</span>
        <span class="k">try</span><span class="p">:</span>
            <span class="n">posP</span> <span class="o">=</span> <span class="mi">0</span>
            <span class="n">negP</span> <span class="o">=</span> <span class="mi">0</span>

            <span class="k">while</span> <span class="n">vermogen</span><span class="p">[</span><span class="n">x</span><span class="p">]</span><span class="o">&gt;</span><span class="mi">0</span><span class="p">:</span>
                <span class="n">posP</span> <span class="o">=</span> <span class="n">posP</span> <span class="o">+</span> <span class="n">vermogen</span><span class="p">[</span><span class="n">x</span><span class="p">]</span>
                <span class="n">x</span> <span class="o">=</span> <span class="n">x</span> <span class="o">+</span> <span class="mi">1</span>
            <span class="n">cumPos</span> <span class="o">=</span> <span class="n">np</span><span class="o">.</span><span class="n">append</span><span class="p">(</span><span class="n">cumPos</span><span class="p">,</span> <span class="n">posP</span><span class="o">*</span><span class="n">timestep</span><span class="p">)</span>              
            <span class="k">while</span> <span class="n">vermogen</span><span class="p">[</span><span class="n">x</span><span class="p">]</span><span class="o">&lt;</span><span class="mi">0</span><span class="p">:</span> 
                <span class="n">negP</span> <span class="o">=</span> <span class="n">negP</span> <span class="o">+</span> <span class="n">vermogen</span><span class="p">[</span><span class="n">x</span><span class="p">]</span>
                <span class="n">x</span> <span class="o">=</span> <span class="n">x</span> <span class="o">+</span> <span class="mi">1</span>
            <span class="n">cumNeg</span> <span class="o">=</span> <span class="n">np</span><span class="o">.</span><span class="n">append</span><span class="p">(</span><span class="n">cumNeg</span><span class="p">,</span> <span class="n">negP</span><span class="o">*</span><span class="n">timestep</span><span class="p">)</span>
            <span class="n">rendement</span> <span class="o">=</span> <span class="n">np</span><span class="o">.</span><span class="n">append</span><span class="p">(</span><span class="n">rendement</span><span class="p">,</span> <span class="nb">abs</span><span class="p">(</span><span class="n">negP</span><span class="o">/</span><span class="n">posP</span><span class="p">))</span>
       
        <span class="k">except</span><span class="p">:</span>
            <span class="k">break</span>


    <span class="n">referencePos</span> <span class="o">=</span> <span class="n">cumPos</span><span class="p">[</span><span class="mi">1</span><span class="p">]</span>
    <span class="n">referenceNeg</span> <span class="o">=</span> <span class="n">cumNeg</span><span class="p">[</span><span class="mi">1</span><span class="p">]</span>
    <span class="n">cumPos</span> <span class="o">=</span> <span class="n">cumPos</span><span class="p">[</span><span class="mi">1</span><span class="p">:]</span>
    <span class="n">cumNeg</span> <span class="o">=</span> <span class="n">cumNeg</span><span class="p">[</span><span class="mi">1</span><span class="p">:]</span>

    <span class="n">plotPosDegradation</span> <span class="o">=</span> <span class="p">[</span><span class="n">x</span><span class="o">/</span><span class="n">referencePos</span> <span class="k">for</span> <span class="n">x</span> <span class="ow">in</span> <span class="n">cumPos</span><span class="p">]</span>
    <span class="n">plotNegDegradation</span> <span class="o">=</span> <span class="p">[</span><span class="n">x</span><span class="o">/</span><span class="n">referenceNeg</span> <span class="k">for</span> <span class="n">x</span> <span class="ow">in</span> <span class="n">cumNeg</span><span class="p">]</span>

    <span class="n">rendement</span> <span class="o">=</span> <span class="n">rendement</span><span class="p">[</span><span class="mi">1</span><span class="p">:]</span> <span class="c">#eerste cyclus niet meetellen (weet niet vanwaar ik</span>
    <span class="c">#begon met opladen)</span>

    <span class="k">print</span><span class="p">(</span><span class="n">plotPosDegradation</span><span class="p">)</span>
    <span class="k">print</span><span class="p">(</span><span class="n">plotNegDegradation</span><span class="p">)</span>

    <span class="n">subplot</span><span class="p">(</span><span class="mi">6</span><span class="p">,</span><span class="mi">1</span><span class="p">,</span><span class="mi">5</span><span class="p">)</span>

    <span class="n">plot</span><span class="p">(</span><span class="nb">range</span><span class="p">(</span><span class="mi">1</span><span class="p">,</span> <span class="nb">len</span><span class="p">(</span><span class="n">rendement</span><span class="p">)</span><span class="o">+</span><span class="mi">1</span><span class="p">),</span> <span class="n">rendement</span><span class="p">,</span> <span class="s">&#39;rD&#39;</span><span class="p">)</span>
    <span class="n">ylabel</span><span class="p">(</span><span class="s">r&#39;$\eta$ [%]&#39;</span><span class="p">)</span>
    <span class="n">xlim</span><span class="p">([</span><span class="mi">0</span><span class="p">,</span> <span class="nb">len</span><span class="p">(</span><span class="n">rendement</span><span class="p">)</span><span class="o">+</span><span class="mi">1</span><span class="p">])</span>
    <span class="n">plt</span><span class="o">.</span><span class="n">tick_params</span><span class="p">(</span>\
        <span class="n">axis</span><span class="o">=</span><span class="s">&#39;x&#39;</span><span class="p">,</span>          <span class="c"></span>
        <span class="n">which</span><span class="o">=</span><span class="s">&#39;both&#39;</span><span class="p">,</span>      <span class="c"></span>
        <span class="n">bottom</span><span class="o">=</span><span class="s">&#39;off&#39;</span><span class="p">,</span>      <span class="c"></span>
        <span class="n">top</span><span class="o">=</span><span class="s">&#39;off&#39;</span><span class="p">,</span>         <span class="c"></span>
        <span class="n">labelbottom</span><span class="o">=</span><span class="s">&#39;off&#39;</span><span class="p">)</span> <span class="c"></span>
    <span class="n">yticks</span><span class="p">([</span><span class="mf">0.5</span><span class="p">,</span><span class="mf">0.6</span><span class="p">,</span><span class="mf">0.7</span><span class="p">,</span><span class="mf">0.8</span><span class="p">,</span><span class="mf">0.9</span><span class="p">])</span>
    <span class="n">grid</span><span class="p">()</span>

    <span class="n">subplot</span><span class="p">(</span><span class="mi">6</span><span class="p">,</span><span class="mi">1</span><span class="p">,</span><span class="mi">6</span><span class="p">)</span>

    <span class="n">plot</span><span class="p">(</span><span class="nb">range</span><span class="p">(</span><span class="mi">1</span><span class="p">,</span><span class="nb">len</span><span class="p">(</span><span class="n">plotNegDegradation</span><span class="p">)</span><span class="o">+</span><span class="mi">1</span><span class="p">),</span> <span class="n">plotNegDegradation</span><span class="p">,</span> <span class="s">&#39;rd&#39;</span><span class="p">)</span>
    <span class="n">ylabel</span><span class="p">(</span><span class="s">r&#39;Degr [%]&#39;</span><span class="p">)</span>
    <span class="n">xlim</span><span class="p">([</span><span class="mi">0</span><span class="p">,</span> <span class="nb">len</span><span class="p">(</span><span class="n">plotNegDegradation</span><span class="p">)</span><span class="o">+</span><span class="mi">1</span><span class="p">])</span>
    <span class="n">xlabel</span><span class="p">(</span><span class="s">r&#39;# volledige cycli&#39;</span><span class="p">)</span>
    <span class="n">yticks</span><span class="p">([</span><span class="mf">0.7</span><span class="p">,</span><span class="mf">0.8</span><span class="p">,</span><span class="mf">0.9</span><span class="p">,</span><span class="mi">1</span><span class="p">,</span><span class="mf">1.1</span><span class="p">])</span>
    <span class="n">grid</span><span class="p">()</span>

    <span class="n">subplots_adjust</span><span class="p">(</span><span class="n">hspace</span> <span class="o">=</span> <span class="mf">0.5</span><span class="p">)</span>

    <span class="n">tight_layout</span><span class="p">(</span><span class="n">pad</span><span class="o">=</span><span class="mf">0.3</span><span class="p">,</span> <span class="n">w_pad</span><span class="o">=</span><span class="mf">0.3</span><span class="p">,</span> <span class="n">h_pad</span><span class="o">=</span><span class="mf">0.2</span><span class="p">)</span>

    <span class="c">#wegschrijven naar CSV</span>
    <span class="n">header</span> <span class="o">=</span> <span class="p">[</span><span class="s">&quot;Rendement&quot;</span><span class="p">,</span><span class="s">&quot;Degradatie&quot;</span><span class="p">]</span>

    <span class="n">lijst</span> <span class="o">=</span> <span class="nb">zip</span><span class="p">(</span><span class="n">rendement</span><span class="p">[</span><span class="mi">1</span><span class="p">:],</span> <span class="n">plotPosDegradation</span><span class="p">)</span>

    <span class="k">with</span> <span class="nb">open</span><span class="p">(</span><span class="s">&#39;../../HTML keuzeboom batterijen/data/data.csv&#39;</span><span class="p">,</span> <span class="s">&#39;wb&#39;</span><span class="p">)</span> <span class="k">as</span> <span class="n">csvFile</span><span class="p">:</span>
        <span class="n">csvWriter</span> <span class="o">=</span> <span class="n">csv</span><span class="o">.</span><span class="n">writer</span><span class="p">(</span><span class="n">csvFile</span><span class="p">,</span> <span class="n">delimiter</span> <span class="o">=</span> <span class="s">&#39;,&#39;</span><span class="p">)</span>
        <span class="n">csvWriter</span><span class="o">.</span><span class="n">writerow</span><span class="p">(</span><span class="n">header</span><span class="p">)</span>
        <span class="n">csvWriter</span><span class="o">.</span><span class="n">writerows</span><span class="p">(</span><span class="n">lijst</span><span class="p">)</span>


    <span class="n">savefig</span><span class="p">(</span><span class="s">&#39;plot1.jpg&#39;</span><span class="p">)</span>
    <span class="n">savefig</span><span class="p">(</span><span class="s">&#39;plot1.png&#39;</span><span class="p">)</span>
    <span class="n">savefig</span><span class="p">(</span><span class="s">&#39;plot1.pdf&#39;</span><span class="p">)</span>
    <span class="c">#show()</span>
    </pre></div>

</div>
</div>
<div class="page-header"> <h2> Resultaten </h2> </div>
<div>
<p>
De meetwaarden worden van de besproken opstelling wordt hieronder
grafisch weergegeven. Er wordt slechts 1 cel onderzocht. De testcondities zijn:

<ul>
    <li> Testopstelling bij &#8776 constante temperatuur</li>
    <li> Vari&#235rende vochtigheidsgraad</li>
    <li> Geen ventilatie</li>
    <li> Geen invallend zonlicht</li>
</ul>

De totale energie gestockeerd in de eerste volledige laadcyclus werd als
referentie gekozen voor het bepalen van de evolutie van capaciteit tussen vaste
spanningsniveaus.

</p>
</div>

    <div id = "test2" style="padding-top:35px">
    <!-- hier komt de d3js script gegenereerde code -->
    </div>


    <a id = "Contact"></a>
    <div class = "page-header">
        <h1> Contact </h1>
    </div>

<div class="container" style="padding-bottom:50px">
	<div class="panel panel-default"
        style="margin:0
        auto;width:1000px">
		<div class="panel-heading">
			<h2 class="panel-title">
                        Auguste @ kuleuven </h2>
		</div>
		<div class="panel-body">
			<form name="contactform"
                        method="post" action="mailer.php" class="form-horizontal" role="form">
				<div class="form-group">
					<label
                                        for="inputName"
                                        class="col-lg-2
                                        control-label">Naam</label>
					<div class="col-lg-10">
						<input
                                                type="text"
                                                class="form-control"
                                                id="inputName"
                                                name="inputName"
                                                placeholder="vb: Piet Smet">
					</div>
				</div>
				<div class="form-group">
					<label for="inputEmail1" class="col-lg-2 control-label">Email</label>
					<div class="col-lg-10">
						<input
                                                type="text"
                                                class="form-control"
                                                id="inputEmail"
                                                name="inputEmail"
                                                placeholder="vb: pietsmet@gmail.com">
					</div>
				</div>
				<div class="form-group">
					<label
                                        for="inputPassword"
                                        class="col-lg-2
                                        control-label">Onderwerp</label>
					<div class="col-lg-10">
						<input
                                                type="text"
                                                class="form-control"
                                                id="inputSubject"
                                                name="inputSubject"
                                                placeholder="Onderwerp">
					</div>
				</div>
				<div class="form-group">
					<label
                                        for="inputPassword1"
                                        class="col-lg-2
                                        control-label">Bericht</label>
					<div class="col-lg-10">
						<textarea
                                                class="form-control"
                                                rows="4"
                                                id="inputMessage"
                                                name="inputMessage"
                                                placeholder="Bericht..."></textarea>
					</div>
				</div>
				<div class="form-group">
					<div class="col-lg-offset-2 col-lg-10">
						<button type="submit" class="btn btn-default">
							Verstuur
                                                        bericht
						</button>
					</div>
				</div>
			</form>

		</div>
	</div>
    </div>

										 
    <div id = "test">
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="HTML_bat/d3.min.js" type="text/javascript"></script>
    <!--<script src="../localscroll/jquery.localScroll.js" type="text/javascript"></script> 
    <script src="../localscroll/jquery.scrollTo.js"
    type="text/javascript"></script>--> 
    <script src="HTML_bat/bootstrap-master/dist/js/bootstrap.min.js"></script>
    <script src="HTML_bat/bootstrap-master/docs/assets/js/docs.min.js"></script>
    <script src="HTML_bat/slider/js/simple-slider.js"></script>
    <script src="custom.js"></script>    
    <script src="HTML_bat/nvd3/nv.d3.js"></script>
    <script src="grafieknv.js"></script>
    <script src="batsliders.js"></script>

 </body>
</html>
