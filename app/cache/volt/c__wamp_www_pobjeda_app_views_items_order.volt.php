
<?php echo $this->getContent(); ?>
<table id="dvData" class="table table-bordered table-striped" align="center">

    <thead>        
        <tr>
            <th>Created by user</th>       
             <td><?php echo $this->auth->getUserNameById($item->User) . ' with id '; ?> <?php echo Phalcon\Tag::linkTo(array('users/edit/' . $item->User, $item->User)); ?></td>     
        </tr>
        <tr>
            <th>Order Id</th> 
            <td><?php echo $item->idOrder; ?></td>        
        </tr>
        <tr>
            <th>Created At</th>
            <td><?php echo date('Y-m-d H:i:s', $item->createdAt); ?></td>      
        </tr>
        <tr>
            <th>Containing PackingList with IDs</th>
            <td>
                <?php foreach ($packingList as $pa) { ?>   
                     <?php echo Phalcon\Tag::linkTo(array('items/packingList/' . $pa->idPacking_List, $pa->idPacking_List, 'class' => 'btn')); ?>
                <?php } ?>
            </td>       
        </tr>
        <tr>
            <th>Containing Palete with IDs</th>
            <td>
                <?php foreach ($palete as $pl) { ?>   
                     <?php echo Phalcon\Tag::linkTo(array('items/palete/' . $pl->idPalete, $pl->idPalete, 'class' => 'btn')); ?>
                <?php } ?>
            </td>       
        </tr>
    </tbody>
</table>
