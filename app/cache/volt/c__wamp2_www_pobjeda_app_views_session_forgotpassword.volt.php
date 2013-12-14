<?php echo $this->getContent(); ?>

<div align="center" class="well">

	<?php echo Phalcon\Tag::form(array('class' => 'form-search')); ?>

	<div align="left">
		<h2>Forgot Password?</h2>
	</div>

		<?php echo $form->render('email'); ?>
		<?php echo $form->render('Send'); ?>

		<hr>

	</form>

</div>