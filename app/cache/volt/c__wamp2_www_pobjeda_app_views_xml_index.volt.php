
<?php echo $this->getContent(); ?>
<div class="hero-unit">
    <h1>Welcome to POBJEDA</h1>
    <p>Here you can upload your order's XML file.</p>   
     <?php echo $this->tag->form(array('xml/upload', 'class' => 'form-inline', 'enctype' => 'multipart/form-data')); ?>
     	<span>
        	<?php echo $this->tag->fileField(array('xml', 'class' => 'input-xxlarge', 'style' => 'font-size:15px; height:40px; margin-top: 3px;')); ?>
        	<?php echo $this->tag->submitButton(array('Upload XML', 'class' => 'btn btn-primary btn-large btn-success')); ?>
    	</span>
	</form>
</div>

<div class="row">
    <div class="span4">
        <h2>Some info</h2>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. </p>
    </div>
    <div class="span4">
        <h2>Some notification</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
    </div>
    <div class="span4">
        <h2>Some advice</h2>
        <p>Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. </p>
    </div>
</div>
