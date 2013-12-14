
<?php echo $this->getContent(); ?>
<table id="dvData" class="table table-bordered table-striped" align="center">
    <thead>
        <tr>
            <th>Belonging order Id</th>
            <td><?php echo $this->tag->linkTo(array('items/order/' . $item->Order, $item->Order, 'class' => 'btn')); ?></td>            
        </tr>
        <tr>
            <th>Packing list Id</th>
            <td><?php echo $item->idPacking_List; ?></td>            
        </tr>
        <tr>
            <th>Shipment number</th>
            <td><?php echo $item->Shipment_Number; ?></td>            
        </tr>
        <tr>
            <th>Shipment date</th>
            <td><?php echo $item->Shipment_Date; ?></td>            
        </tr>
        <tr>
            <th>Delivery note</th>
            <td><?php echo $item->Delivery_Note; ?></td>            
        </tr>
        <tr>
            <th>Sender name</th>
            <td><?php echo $item->Sender_Name; ?></td>            
        </tr>
        <tr>
            <th>Sender code</th>
            <td><?php echo $item->Sender_Code; ?></td>
            
        </tr>
        <tr>
            <th>Receiver name</th>
            <td><?php echo $item->Receiver_Name; ?></td>
            
        </tr>
        <tr>
            <th>Receiver code</th>
            <td><?php echo $item->Receiver_Code; ?></td>            
        </tr>
        <tr>
            <th>Item type</th>
            <td><?php echo $item->Item_Type; ?></td>            
        </tr>
    </tbody>
</table>

<button id="print" class="btn"><i class="icon-print"></i>Print</button>
<?php echo $this->tag->linkTo(array('items/pdf/' . $item->idPacking_List . '?itemtype=packingList', '<i class=\'icon-leaf icon-white\'></i>Get as PDF', 'class' => 'btn btn-danger', 'target' => '_blank')); ?>
















