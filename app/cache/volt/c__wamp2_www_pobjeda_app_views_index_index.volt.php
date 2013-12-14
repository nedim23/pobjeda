<?php echo $this->getContent(); ?>

<header class="jumbotron subhead" id="overview">
	<div class="hero-unit">
		<h1>Welcome to POBJEDA!</h1>
		<p class="lead">This is a website for entering XML orders</p>
    <?php echo Phalcon\Tag::linkTo(array('session/signup', '<i class=\'icon-plus-sign\'></i> Sign Up', 'class' => 'btn btn-success btn-large')); ?>      
	</div>
</header>

<div class="row">
    <div class="span4">
      <div class="well">
      	<h3>Awesome Section</h3>
      	<p>Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
      	<p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec sed odio dui.</p>
      </div>
    </div>

    <div class="span4">
      <h3>Important Stuff</h3>
      <p>Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
      <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec sed odio dui.</p>
    </div>

    <div class="span4">
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
