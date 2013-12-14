<?php echo $this->getContent(); ?>
<div class="login">
    <div class="row">

        <div class="span6">
            <div class="page-header">
                <h2>Log In</h2>
            </div>            
                <?php echo Phalcon\Tag::form(array('class' => 'form-search')); ?>
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="email">Email</label>
                        <div class="controls">
                             <?php echo $form->render('email'); ?>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="password">Password</label>
                        <div class="controls">
                            <?php echo $form->render('password'); ?>
                        </div>
                    </div>
                    <div align="left" class="remember">
                        <?php echo $form->render('remember'); ?>
                        <?php echo $form->label('remember'); ?>
                    </div>

                        <?php echo $form->render('csrf', array('value' => $this->security->getToken())); ?>

                        <hr>

                        <div class="forgot">
                            <?php echo Phalcon\Tag::linkTo(array('session/forgotPassword', 'Forgot my password')); ?>
                        </div>

                    <div class="form-actions">                        
                        <?php echo $form->render('Login'); ?>
                    </div>
                </fieldset>
            </form>
        </div>   
    </div>
</div>
