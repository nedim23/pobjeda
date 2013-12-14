

<?php echo $this->getContent(); ?>
<table id="dvData" class="table table-bordered table-striped" align="center">
    <thead>
        <tr>
            <th>Belonging palete Id</th>
            <td><?php echo $this->tag->linkTo(array('items/palete/' . $item->Palete, $item->Palete, 'class' => 'btn')); ?></td>            
        </tr>
        <tr>
            <th>Artupal Id</th>
            <td><?php echo $item->idArtupal; ?></td>            
        </tr>
        <tr>
            <th>Product code</th>
            <td><?php echo $item->Product_Code; ?></td>            
        </tr>
        <tr>
            <th>Description</th>
            <td><?php echo $item->Description; ?></td>            
        </tr>
        <tr>
            <th>Lot number</th>
            <td><?php echo $item->Lot_Number; ?></td>            
        </tr>
        <tr>
            <th>Quantity</th>
            <td><?php echo $item->Quantity; ?></td>            
        </tr>
        <tr>
            <th>Unit of measure</th>
            <td><?php echo $item->Unit_Of_Measure; ?></td>            
        </tr>
        <tr>
            <th>Count of units</th>
            <td><?php echo $item->Count_Of_Units; ?></td>            
        </tr>
        <tr>
            <th>Item type</th>                    
            <td><?php echo $item->Item_Type; ?></td>            
        </tr>        
        <tr>
            <th>Containing Paketi with IDs</th>
            <td>
                <?php foreach ($subItems as $p) { ?>   
                     <?php echo $this->tag->linkTo(array('items/paketi/' . $p->idPaketi, $p->idPaketi, 'class' => 'btn')); ?>
                <?php } ?>
            </td>      
        </tr>

    </tbody>
</table>



<button id="print" class="btn"><i class="icon-print"></i>Print</button>
<?php echo $this->tag->linkTo(array('items/pdf/' . $item->idArtupal . '?itemtype=artupal', '<i class=\'icon-leaf icon-white\'></i>Get as PDF', 'class' => 'btn btn-danger', 'target' => '_blank')); ?>




