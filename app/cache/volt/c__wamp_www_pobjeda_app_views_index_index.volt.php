<?php echo $this->getContent(); ?>

<header class="jumbotron subhead" id="overview">
	<div class="hero-unit">
		<h1>Dobrodošli !</h1>
		<p class="lead">This is a website for entering XML orders</p>
    <?php echo Phalcon\Tag::linkTo(array('session/signup', '<i class=\'icon-plus-sign\'></i> Sign Up', 'class' => 'btn btn-success btn-large')); ?>      
	</div>
</header>


<div class="row">
    <div class="span3">
      <div class="well">
        <h3>O Pobjedi-Rudet</h3>
        <p>Pobjeda-Rudet d.d. Goražde je kompanija sa poznatom industrijskom tradicijom u proizvodnji inicirajucih sredstava za razne komercijalne svrhe, koja ima velike tehnološke i proizvodne mogucnosti. Kompanija je sposobna da vodi projekte prenosa tehnologije po sistemu kljuc u ruke, samostalno ili u saradnji sa drugim renomiranim proizvodacima.
Kao poznati proizvodac inicirajucih sredstava koji se koriste u razne komercijalne svrhe, ova komapnija sa svojim proizvodima prisutna je na tržištima Australije, Malezije, SAD i širom Evrope.</p>
      </div>
    </div>

    <div class="span3">
      <h2>O web aplikaciji</h2>
        <p>Osnovne osobine:
    <ul><li>Aplikacija pruža autorizovanom korisniku upload xml fajla, koji se potom unosi u odgovarajucu bazu podataka.</li>
    <li>Posjeduje administrativni i javni dio. U administrativnom dijelu dodaju se korisnici, importuje xml fajl u bazu, i pristupa pregledima koji su tajni.</li>
    <li>Nudi svim korisnicima detaljnu pretragu proizvoda, koja je prilagodena svim korisnicima, te export rezultata u pdf ili xsl format.</li></ul></p>
     </div>
    <div class="span3">
      <h3>Pobjeda addresses</h3>
      <address>
        <strong>Pobjeda-Rudet d.d. Goražde</strong><br>
        Visegradska bb, 73000 Gorazde<br>
        www.pobjeda.com<br>
        Bosnia & Herzegovina<br>
         <abbr title="Phone">Tel:</abbr>  +387 38 221 150
      </address>
      <address>
        <strong>Full Name</strong><br>
        <a href="mailto:#">info@pobjeda.com</a>
      </address>
    </div>
  </div>
