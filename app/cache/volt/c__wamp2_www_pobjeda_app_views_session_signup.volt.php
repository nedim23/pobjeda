<?php echo $this->getContent(); ?>

<div class="login">
    <div class="row">
        <div class="span6">
            <div class="page-header">
                <h2>Sign Up</h2>
            </div>
            <?php echo Phalcon\Tag::form(array('class' => 'form-inline')); ?>
                <fieldset>
                    <div class="control-group">
	                	 <label class="control-label" for="name">Name</label>
	                    <div class="controls">
	                        <?php echo $form->render('name'); ?>
							<?php echo $form->messages('name'); ?>
	                    </div>
	                </div>

                   <div class="control-group">
	                	 <label class="control-label" for="email">Email</label>
	                    <div class="controls">
        					<?php echo $form->render('email'); ?>
							<?php echo $form->messages('email'); ?>
	                    </div>
	                </div>

	                <div class="control-group">
	                	 <label class="control-label" for="username">Username</label>
	                    <div class="controls">
        					<?php echo $form->render('username'); ?>
							<?php echo $form->messages('username'); ?>
	                    </div>
	                </div>

                    <div class="control-group">
	                	 <label class="control-label" for="password">Password</label>
	                    <div class="controls">
	                        <?php echo $form->render('password'); ?>
							<?php echo $form->messages('password'); ?>
	                    </div>
	                </div>

                    <div class="control-group">
	                	 <label class="control-label" for="confirmPassword">Confirm Password</label>
	                    <div class="controls">
	                        <?php echo $form->render('confirmPassword'); ?>
							<?php echo $form->messages('confirmPassword'); ?>
	                    </div>
	                </div>


	                <div class="control-group">
	                	 <label class="control-label" for="mobile">Mobile</label>
	                    <div class="controls">
	                        <?php echo $form->render('mobile'); ?>
							<?php echo $form->messages('mobile'); ?>
	                    </div>
	                </div>

                    <div class="control-group">
	                	 <?php echo $form->render('terms'); ?> <?php echo $form->label('terms'); ?>
							<?php echo $form->messages('terms'); ?>
	                </div>

            		<?php echo $form->render('csrf', array('value' => $this->security->getToken())); ?>
					<?php echo $form->messages('csrf'); ?>

                    <div class="form-actions">
                        <?php echo Phalcon\Tag::submitButton(array('Sign Up', 'class' => 'btn btn-primary btn-large')); ?>
                    </div>
                </fieldset>
            </form>
        </div>   
    </div>
</div>


