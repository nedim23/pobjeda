
{{ content() }}
<div class="hero-unit">
    <h1>Postavite narudžbu</h1>
    <p>Here you can upload your order's XML file.</p>   
     {{ form('xml/upload', 'class': 'form-inline', 'enctype': 'multipart/form-data') }}
     	<span>
        	{{ file_field('xml', 'class': 'input-xxlarge', 'style' : 'font-size:15px; height:40px; margin-top: 3px;') }}
        	{{ submit_button('Upload XML', 'class': 'btn btn-primary btn-large btn-success') }}
    	</span>
	</form>
</div>


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
    <h2>Kako radi?</h2>
    <p>Aplikacija ima sljedece funkcionalnosti:
<ul><li>Upload XML faja</li><li>Pretraga baze podataka</li><li>Kreiranje novih korisnika</li><li> Mogucnost pracenja historije pretraga, u okviru administrativnog dijela</li><li>Korisnik može biti administrator ili gost</li><li>Export podataka u pdf ili xls formate.</li></ul></p>
    </div>
    
  </div>








