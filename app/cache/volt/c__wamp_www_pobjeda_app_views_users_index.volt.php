<?php echo $this->getContent(); ?>

<div align="right">
   <?php echo Phalcon\Tag::linkTo(array('session/signup', '<i class="icon-ok icon-white"></i> Create User', 'class' => 'btn btn-primary btn-large')); ?>
</div>

<form method="post" action="<?php echo $this->url->get('users/search'); ?>" autocomplete="off">

    <div class="left scaffold">

        <h2>Search users</h2>

        <div class="clearfix">
            <label for="idUsers">Id</label>
            <?php echo $form->render('idUsers'); ?>
        </div>

        <div class="clearfix">
            <label for="username">Username</label>
            <?php echo $form->render('username'); ?>
        </div>

        <div class="clearfix">
            <label for="name">Name</label>
            <?php echo $form->render('name'); ?>
        </div>

        <div class="clearfix">
            <label for="email">E-Mail</label>
            <?php echo $form->render('email'); ?>
        </div>

        <div class="clearfix">
            <label for="mobile">Mobile</label>
            <?php echo $form->render('mobile'); ?>
        </div>

        <div class="clearfix">
            <label for="profilesId">Profile</label>
            <?php echo $form->render('Profiles'); ?>
        </div>

        <div class="clearfix">
            <?php echo Phalcon\Tag::submitButton(array('Search', 'class' => 'btn btn-primary')); ?>
        </div>

    </div>

</form>