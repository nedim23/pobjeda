
<?php echo $this->getContent(); ?>
<table id="dvData" class="table table-bordered table-striped" align="center">

    <thead>
        <tr>
            <th>Belonging order Id</th>
            <td><?php echo Phalcon\Tag::linkTo(array('items/order/' . $item->Order, $item->Order, 'class' => 'btn')); ?></td>
        </tr>  
        <tr>
            <th>Palete Id</th>
            <td><?php echo $item->idPalete; ?></td>      
        </tr>
        <tr>
            <th>GS1_Code</th>
            <td><?php echo $item->GS1_Code; ?></td>            
        </tr>
        <tr>
            <th>Item type</th>
            <td><?php echo $item->Item_Type; ?></td>
        </tr>      
        <tr>
            <th>Containing Artupal with IDs</th>
            <td>                
                <?php foreach ($subItems as $p) { ?>   
                     <?php echo Phalcon\Tag::linkTo(array('items/artupal/' . $p->idArtupal, $p->idArtupal, 'class' => 'btn')); ?>
                <?php } ?>
            </td>      
        </tr>
    </tbody>
</table>


<button id="print" class="btn"><i class="icon-print"></i>Print</button>
<?php echo Phalcon\Tag::linkTo(array('items/pdf/' . $item->idPalete . '?itemtype=palete', '<i class=\'icon-leaf icon-white\'></i>Get as PDF', 'class' => 'btn btn-danger', 'target' => '_blank')); ?>
                   





                   
                    