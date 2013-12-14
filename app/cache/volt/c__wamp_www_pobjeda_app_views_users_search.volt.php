<?php echo $this->getContent(); ?>

<ul class="pager">
    <li class="previous pull-left">
        <?php echo Phalcon\Tag::linkTo(array('users/index', '&larr; Go Back')); ?>
    </li>
    <li class="pull-right">
        <?php echo Phalcon\Tag::linkTo(array('users/create', 'Create users', 'class' => 'btn btn-primary')); ?>
    </li>
</ul>

<?php $v12972009121iterated = false; ?><?php $v12972009121iterator = $page->items; $v12972009121incr = 0; $v12972009121loop = new stdClass(); $v12972009121loop->length = count($v12972009121iterator); $v12972009121loop->index = 1; $v12972009121loop->index0 = 1; $v12972009121loop->revindex = $v12972009121loop->length; $v12972009121loop->revindex0 = $v12972009121loop->length - 1; ?><?php foreach ($v12972009121iterator as $user) { ?><?php $v12972009121loop->first = ($v12972009121incr == 0); $v12972009121loop->index = $v12972009121incr + 1; $v12972009121loop->index0 = $v12972009121incr; $v12972009121loop->revindex = $v12972009121loop->length - $v12972009121incr; $v12972009121loop->revindex0 = $v12972009121loop->length - ($v12972009121incr + 1); $v12972009121loop->last = ($v12972009121incr == ($v12972009121loop->length - 1)); ?><?php $v12972009121iterated = true; ?>
<?php if ($v12972009121loop->first) { ?>
<table class="table table-bordered table-striped" align="center">
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Profile</th>
            <th>Banned?</th>
            <th>Suspended?</th>
            <th>Confirmed?</th>
        </tr>
    </thead>
<?php } ?>
    <tbody>
        <tr>
            <td><?php echo $user->idUsers; ?></td>
            <td><?php echo $user->name; ?></td>
            <td><?php echo $user->email; ?></td>
            <td><?php echo $user->profile->name; ?></td>
            <td><?php echo ($user->banned == 'Y' ? 'Yes' : 'No'); ?></td>
            <td><?php echo ($user->suspended == 'Y' ? 'Yes' : 'No'); ?></td>
            <td><?php echo ($user->active == 'Y' ? 'Yes' : 'No'); ?></td>
            <td width="12%"><?php echo Phalcon\Tag::linkTo(array('users/edit/' . $user->idUsers, '<i class="icon-pencil"></i> Edit', 'class' => 'btn')); ?></td>
            <td width="12%"><?php echo Phalcon\Tag::linkTo(array('users/delete/' . $user->idUsers, '<i class="icon-remove"></i> Delete', 'class' => 'btn')); ?></td>
        </tr>
    </tbody>
<?php if ($v12972009121loop->last) { ?>
    <tbody>
        <tr>
            <td colspan="10" align="right">
                <div class="btn-group">
                    <?php echo Phalcon\Tag::linkTo(array('users/search', '<i class="icon-fast-backward"></i> First', 'class' => 'btn')); ?>
                    <?php echo Phalcon\Tag::linkTo(array('users/search?page=' . $page->before, '<i class="icon-step-backward"></i> Previous', 'class' => 'btn ')); ?>
                    <?php echo Phalcon\Tag::linkTo(array('users/search?page=' . $page->next, '<i class="icon-step-forward"></i> Next', 'class' => 'btn')); ?>
                    <?php echo Phalcon\Tag::linkTo(array('users/search?page=' . $page->last, '<i class="icon-fast-forward"></i> Last', 'class' => 'btn')); ?>
                    <span class="help-inline"><?php echo $page->current; ?>/<?php echo $page->total_pages; ?></span>
                </div>
            </td>
        </tr>
    <tbody>
</table>
<?php } ?>
<?php $v12972009121incr++; } if (!$v12972009121iterated) { ?>
    No users are recorded
<?php } ?>
