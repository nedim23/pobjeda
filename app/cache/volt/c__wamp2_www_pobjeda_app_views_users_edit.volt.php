
<form method="post" autocomplete="off">

    <ul class="pager">
        <li class="previous pull-left">
            <?php echo $this->tag->linkTo(array('users', '&larr; Go Back')); ?>
        </li>
        <li class="pull-right">
            <?php echo $this->tag->submitButton(array('Save', 'class' => 'btn btn-big btn-success')); ?>
        </li>
    </ul>

    <?php echo $this->getContent(); ?>

    <div class="center scaffold">
        <h2>Edit users</h2>

        <ul class="nav nav-tabs">
            <li class="active"><a href="#A" data-toggle="tab">Basic</a></li>
            <li><a href="#B" data-toggle="tab">Search Performed</a></li>
            <li><a href="#C" data-toggle="tab">Successful Logins</a></li>
            <li><a href="#D" data-toggle="tab">Failed Logins</a></li>
            <li><a href="#E" data-toggle="tab">Successful Logouts</a></li>
            <li><a href="#F" data-toggle="tab">Password Changes</a></li>
            <li><a href="#H" data-toggle="tab">Reset Passwords</a></li>
        </ul>

        <div class="tabbable">
            <div class="tab-content">
                <div class="tab-pane active" id="A">

                    <?php echo $form->render('idUsers'); ?>

                    <div class="span4">

                        <div class="clearfix">
                            <label for="username">Username</label>
                            <?php echo $form->render('username'); ?>
                        </div>

                        <div class="clearfix">
                            <label for="username">Name</label>
                            <?php echo $form->render('name'); ?>
                        </div>

                        <div class="clearfix">
                            <label for="Profiles">Profile</label>
                            <?php echo $form->render('Profiles'); ?>
                        </div>

                        <div class="clearfix">
                            <label for="suspended">Suspended?</label>
                            <?php echo $form->render('suspended'); ?>
                        </div>

                    </div>

                    <div class="span4">

                        <div class="clearfix">
                            <label for="email">E-Mail</label>
                            <?php echo $form->render('email'); ?>
                        </div>

                        <div class="clearfix">
                            <label for="mobile">Mobile</label>
                            <?php echo $form->render('mobile'); ?>
                        </div>

                        <div class="clearfix">
                            <label for="banned">Banned?</label>
                            <?php echo $form->render('banned'); ?>
                        </div>

                        <div class="clearfix">
                            <label for="active">Confirmed?</label>
                            <?php echo $form->render('active'); ?>
                        </div>

                    </div>

                    <?php echo $this->tag->linkTo(array('users/changePassword', 'Change Password')); ?>
                </div>

                <div class="tab-pane" id="B">
                    <p>
                        <table class="table table-bordered table-striped" align="center">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>IP Address</th>
                                    <th>User Agent</th>
                                    <th>Occurred</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $v19676911221iterated = false; ?><?php foreach ($user->successSearch as $search) { ?><?php $v19676911221iterated = true; ?>
                                <tr>
                                    <td><?php echo $search->idSearch; ?></td>
                                    <td><?php echo $search->ipAddress; ?></td>
                                    <td><?php echo $search->userAgent; ?></td>
                                    <td><?php echo date('Y-m-d H:i:s', $search->occurred); ?></td>                            
                                </tr>
                            <?php } if (!$v19676911221iterated) { ?>
                                <tr><td colspan="3" align="center">User does not have any searches</td></tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </p>
                </div>

                <div class="tab-pane" id="C">
                    <p>
                        <table class="table table-bordered table-striped" align="center">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>IP Address</th>
                                    <th>User Agent</th>
                                    <th>Occurred</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $v19676911221iterated = false; ?><?php foreach ($user->successLogins as $slogins) { ?><?php $v19676911221iterated = true; ?>
                                <tr>
                                    <td><?php echo $slogins->idLogins; ?></td>
                                    <td><?php echo $slogins->ipAddress; ?></td>
                                    <td><?php echo $slogins->userAgent; ?></td>
                                    <td><?php echo date('Y-m-d H:i:s', $slogins->occurred); ?></td>                            
                                </tr>
                            <?php } if (!$v19676911221iterated) { ?>
                                <tr><td colspan="3" align="center">User does not have successfull logins</td></tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </p>
                </div>

                <div class="tab-pane" id="D">
                    <p>
                        <table class="table table-bordered table-striped" align="center">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>IP Address</th>
                                    <th>User Agent</th>
                                    <th>Occurred</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $v19676911221iterated = false; ?><?php foreach ($user->failedLogins as $login) { ?><?php $v19676911221iterated = true; ?>
                                <tr>
                                    <td><?php echo $login->idFailed; ?></td>
                                    <td><?php echo $login->ipAddress; ?></td>
                                    <td><?php echo $login->userAgent; ?></td>
                                    <td><?php echo date('Y-m-d H:i:s', $login->occurred); ?></td>
                                </tr>
                            <?php } if (!$v19676911221iterated) { ?>
                                <tr><td colspan="3" align="center">User does not have failed logins</td></tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </p>
                </div>

                <div class="tab-pane" id="E">
                    <p>
                        <table class="table table-bordered table-striped" align="center">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>IP Address</th>
                                    <th>User Agent</th>
                                    <th>Occurred</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $v19676911221iterated = false; ?><?php foreach ($user->successLogouts as $logout) { ?><?php $v19676911221iterated = true; ?>
                                <tr>
                                    <td><?php echo $logout->idLogouts; ?></td>
                                    <td><?php echo $logout->ipAddress; ?></td>
                                    <td><?php echo $logout->userAgent; ?></td>
                                    <td><?php echo date('Y-m-d H:i:s', $logout->occurred); ?></td>
                                </tr>
                            <?php } if (!$v19676911221iterated) { ?>
                                <tr><td colspan="3" align="center">User does not have successfull logouts</td></tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </p>
                </div>

                <div class="tab-pane" id="F">
                    <p>
                        <table class="table table-bordered table-striped" align="center">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>IP Address</th>
                                    <th>User Agent</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $v19676911221iterated = false; ?><?php foreach ($user->passwordChanges as $change) { ?><?php $v19676911221iterated = true; ?>
                                <tr>
                                    <td><?php echo $change->idChanges; ?></td>
                                    <td><?php echo $change->ipAddress; ?></td>
                                    <td><?php echo $change->userAgent; ?></td>
                                    <td><?php echo date('Y-m-d H:i:s', $change->createdAt); ?></td>
                                </tr>
                            <?php } if (!$v19676911221iterated) { ?>
                                <tr><td colspan="3" align="center">User has not changed his/her password yet</td></tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </p>
                </div>

                <div class="tab-pane" id="H">
                    <p>
                        <table class="table table-bordered table-striped" align="center">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Date</th>
                                    <th>Reset?</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $v19676911221iterated = false; ?><?php foreach ($user->resetPasswords as $reset) { ?><?php $v19676911221iterated = true; ?>
                                    <tr>
                                        <th><?php echo $reset->idReset; ?></th>
                                        <th><?php echo date('Y-m-d H:i:s', $reset->createdAt); ?></th>
                                        <th><?php echo ($reset->reset == 'Y' ? 'Yes' : 'No'); ?></th>
                                    </tr>
                                <?php } if (!$v19676911221iterated) { ?>
                                    <tr><td colspan="3" align="center">User has not requested reset his/her password yet</td></tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </p>
                </div>

            </div>
        </div>
    </div>
</form>
