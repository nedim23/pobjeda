
<?php echo $this->getContent(); ?>
<table id="dvData" class="table table-bordered table-striped" align="center">

    <thead>
        <tr>
            <th>Belonging artupal Id</th>
            <td><?php echo $this->tag->linkTo(array('items/artupal/' . $item->Artupal, $item->Artupal, 'class' => 'btn')); ?></td>            
        </tr>   
        <tr>
            <th>Paketi Id</th>
            <td><?php echo $item->idPaketi; ?></td>            
        </tr>
        <tr>
            <th>Item number</th>
            <td><?php echo $item->Item_Number; ?></td>            
        </tr>
        <tr>
            <th>Item type</th>   
            <td><?php echo $item->Item_Type; ?></td>            
        </tr>
        <tr>
            <th>Unique number</th>
            <td><?php echo $item->Unique_Number; ?></td>            
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
            <th>Production date</th>
            <td><?php echo $item->Production_Date; ?></td>            
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
            <th>Number of items</th>
            <td><?php echo $item->Number_Of_Items; ?></td>            
        </tr>
        <tr>
            <th>GS1 code</th>
            <td><?php echo $item->GS1_Code; ?></td>            
        </tr>
        <tr>
            <th>Country code</th>                    
            <td><?php echo $item->Country_Code; ?></td>            
        </tr>
        <tr>
            <th>Site code</th>                    
            <td><?php echo $item->Site_Code; ?></td>            
        </tr>     
        <tr>
            <th>Containing Mikro with IDs</th>
            <td>
                <?php foreach ($subItems as $p) { ?>   
                     <?php echo $this->tag->linkTo(array('items/mikro/' . $p->idMikro, $p->idMikro, 'class' => 'btn')); ?>
                <?php } ?>
            </td>       
        </tr>
    </tbody>
</table>


<button id="print" class="btn"><i class="icon-print"></i>Print</button>
<?php echo $this->tag->linkTo(array('items/pdf/' . $item->idPaketi . '?itemtype=paketi', '<i class=\'icon-leaf icon-white\'></i>Get as PDF', 'class' => 'btn btn-danger', 'target' => '_blank')); ?>







