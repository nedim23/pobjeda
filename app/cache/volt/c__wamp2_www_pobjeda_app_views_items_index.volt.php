<?php echo $this->getContent(); ?>
<div class="center scaffold">
    <h2>Search orders</h2>
    <ul class="nav nav-tabs">
        <li class="active"><a href="#A" data-toggle="tab">Order</a></li>
        <li><a href="#B" data-toggle="tab">Packing list</a></li>
        <li><a href="#C" data-toggle="tab">Palete</a></li>
        <li><a href="#D" data-toggle="tab">Artupal</a></li>
        <li><a href="#E" data-toggle="tab">Paketi</a></li>
        <li><a href="#F" data-toggle="tab">Mikro</a></li>
        <li><a href="#G" data-toggle="tab">Jedinicno</a></li>
    </ul>
    <div class="tabbable">
        <div class="tab-content">
            <div class="tab-pane active" id="A">
                <form method="post" action="<?php echo $this->url->get('items/search'); ?>" autocomplete="off">
                    <input type="hidden" value="Order" name="ItemType"/>                    
                    <div class="clearfix left">
                        <label for="name">Order Id</label>
                        <?php echo $form->render('idOrder'); ?>
                    </div>
                    <?php echo $this->tag->submitButton(array('Search', 'class' => 'btn btn-big btn-success pull-left')); ?>
                </form>
            </div>
            <div class="tab-pane" id="B">
                <form method="post" action="<?php echo $this->url->get('items/search'); ?>" autocomplete="off">
                    <input type="hidden" value="PackingList" name="ItemType"/> 
                    <div class="clearfix left">
                        <label for="name">Packing list I Id</label>
                        <?php echo $form->render('idPacking_List'); ?>
                    </div>
                    <div class="clearfix left">
                        <label for="name">Shipment mumber</label>
                        <?php echo $form->render('Shipment_Number'); ?>
                    </div>
                    <div class="clearfix left">
                        <label for="name">Shipment date</label>
                        <?php echo $form->render('Shipment_Date'); ?>
                    </div>
                    <div class="clearfix left">
                        <label for="name">Delivery note</label>
                        <?php echo $form->render('Delivery_Note'); ?>
                    </div>
                    <div class="clearfix left">
                        <label for="name">Sender name</label>
                        <?php echo $form->render('Sender_Name'); ?>
                    </div>
                    <div class="clearfix left">
                        <label for="name">Sender code</label>
                        <?php echo $form->render('Sender_Code'); ?>
                    </div>
                    <div class="clearfix left">
                        <label for="name">Reciever name</label>
                        <?php echo $form->render('Receiver_Name'); ?>
                    </div>
                    <div class="clearfix left">
                        <label for="name">Reciever code</label>
                        <?php echo $form->render('Receiver_Code'); ?>
                    </div>
                    <div class="clearfix left">
                        <label for="name">Item type</label>
                        <?php echo $form->render('Item_Type'); ?>
                    </div>
                    <?php echo $this->tag->submitButton(array('Search', 'class' => 'btn btn-big btn-success pull-left')); ?>
                </form>
            </div>
            <div class="tab-pane" id="C">
                <form method="post" action="<?php echo $this->url->get('items/search'); ?>" autocomplete="off">
                    <input type="hidden" value="Palete" name="ItemType"/> 
                    <div class="clearfix left">
                        <label for="name">Palete Id</label>
                        <?php echo $form->render('idPalete'); ?>
                    </div>
                    <div class="clearfix left">
                        <label for="name">GS1 code</label>
                        <?php echo $form->render('GS1_Code'); ?>
                    </div>
                    <div class="clearfix left">
                        <label for="name">Item type</label>
                        <?php echo $form->render('Item_Type'); ?>
                    </div>
                    <?php echo $this->tag->submitButton(array('Search', 'class' => 'btn btn-big btn-success pull-left')); ?>
                </form>
            </div>
            <div class="tab-pane" id="D">
                <form method="post" action="<?php echo $this->url->get('items/search'); ?>" autocomplete="off">
                    <input type="hidden" value="Artupal" name="ItemType"/> 
                    <div class="clearfix left">
                        <label for="name">Artupal Id</label>
                        <?php echo $form->render('idArtupal'); ?>
                    </div>
                    <div class="clearfix left">
                        <label for="name">Postal code</label>
                        <?php echo $form->render('Product_Code'); ?>
                    </div>
                    <div class="clearfix left">
                        <label for="name">Description</label>
                        <?php echo $form->render('Description'); ?>
                    </div>
                    <div class="clearfix left">
                        <label for="name">Quantity</label>
                        <?php echo $form->render('Quantity'); ?>
                    </div>
                    <div class="clearfix left">
                        <label for="name">Unit of mesure</label>
                        <?php echo $form->render('Unit_Of_Measure'); ?>
                    </div>
                    <div class="clearfix left">
                        <label for="name">Count of units</label>
                        <?php echo $form->render('Count_Of_Units'); ?>
                    </div>
                    <div class="clearfix left">
                        <label for="name">Item type</label>
                        <?php echo $form->render('Item_Type'); ?>
                    </div> 
                    <?php echo $this->tag->submitButton(array('Search', 'class' => 'btn btn-big btn-success pull-left')); ?>
                </form>
            </div>
            <div class="tab-pane" id="E">
                <form method="post" action="<?php echo $this->url->get('items/search'); ?>" autocomplete="off">
                    <input type="hidden" value="Paketi" name="ItemType"/> 
                    <div class="clearfix left">
                        <label for="name">Paketi Id</label>
                        <?php echo $form->render('idPaketi'); ?>
                    </div>
                    <div class="clearfix left">
                        <label for="name">Item number</label>
                        <?php echo $form->render('Item_Number'); ?>
                    </div>
                    <div class="clearfix left">
                        <label for="name">Item type</label>
                        <?php echo $form->render('Item_Type'); ?>
                    </div>  
                    <div class="clearfix left">
                        <label for="name">Unique number</label>
                        <?php echo $form->render('Unique_Number'); ?>
                    </div>
                    <div class="clearfix left">
                        <label for="name">Postal code</label>
                        <?php echo $form->render('Product_Code'); ?>
                    </div>
                    <div class="clearfix left">
                        <label for="name">Description</label>
                        <?php echo $form->render('Description'); ?>
                    </div>
                    <div class="clearfix left">
                        <label for="name">Production date</label>
                        <?php echo $form->render('Production_Date'); ?>
                    </div>
                    <div class="clearfix left">
                        <label for="name">Quantity</label>
                        <?php echo $form->render('Quantity'); ?>
                    </div>
                    <div class="clearfix left">
                        <label for="name">Unit of mesure</label>
                        <?php echo $form->render('Unit_Of_Measure'); ?>
                    </div>
                    <div class="clearfix left">
                        <label for="name">Count of units</label>
                        <?php echo $form->render('Count_Of_Units'); ?>
                    </div>
                    <div class="clearfix left">
                        <label for="name">Number of items</label>
                        <?php echo $form->render('Number_Of_Items'); ?>
                    </div>
                    <div class="clearfix left">
                        <label for="name">GS1 code</label>
                        <?php echo $form->render('GS1_Code'); ?>
                    </div>
                    <div class="clearfix left">
                        <label for="name">Country code</label>
                        <?php echo $form->render('Country_Code'); ?>
                    </div>
                    <div class="clearfix left">
                        <label for="name">Site code</label>
                        <?php echo $form->render('Site_Code'); ?>
                    </div>
                    <?php echo $this->tag->submitButton(array('Search', 'class' => 'btn btn-big btn-success pull-left')); ?>
                </form>
            </div>
            <div class="tab-pane" id="F">
                <form method="post" action="<?php echo $this->url->get('items/search'); ?>" autocomplete="off">
                    <input type="hidden" value="Mikro" name="ItemType"/> 
                    <div class="clearfix left">
                        <label for="name">Mikro Id</label>
                        <?php echo $form->render('idMikro'); ?>
                    </div>
                    <div class="clearfix left">
                        <label for="name">Item number</label>
                        <?php echo $form->render('Item_Number'); ?>
                    </div>
                    <div class="clearfix left">
                        <label for="name">Item type</label>
                        <?php echo $form->render('Item_Type'); ?>
                    </div>  
                    <div class="clearfix left">
                        <label for="name">Unique number</label>
                        <?php echo $form->render('Unique_Number'); ?>
                    </div>
                    <div class="clearfix left">
                        <label for="name">Postal code</label>
                        <?php echo $form->render('Product_Code'); ?>
                    </div>
                    <div class="clearfix left">
                        <label for="name">Description</label>
                        <?php echo $form->render('Description'); ?>
                    </div>
                    <div class="clearfix left">
                        <label for="name">Production date</label>
                        <?php echo $form->render('Production_Date'); ?>
                    </div>
                    <div class="clearfix left">
                        <label for="name">Quantity</label>
                        <?php echo $form->render('Quantity'); ?>
                    </div>
                    <div class="clearfix left">
                        <label for="name">Unit of mesure</label>
                        <?php echo $form->render('Unit_Of_Measure'); ?>
                    </div>
                    <div class="clearfix left">
                        <label for="name">Count of units</label>
                        <?php echo $form->render('Count_Of_Units'); ?>
                    </div>
                    <div class="clearfix left">
                        <label for="name">Number of items</label>
                        <?php echo $form->render('Number_Of_Items'); ?>
                    </div>
                    <div class="clearfix left">
                        <label for="name">GS1 code</label>
                        <?php echo $form->render('GS1_Code'); ?>
                    </div>
                    <div class="clearfix left">
                        <label for="name">Country code</label>
                        <?php echo $form->render('Country_Code'); ?>
                    </div>
                    <div class="clearfix left">
                        <label for="name">Site code</label>
                        <?php echo $form->render('Site_Code'); ?>
                    </div> 
                    <?php echo $this->tag->submitButton(array('Search', 'class' => 'btn btn-big btn-success pull-left')); ?>
                </form>
            </div>
            <div class="tab-pane" id="G">
                <form method="post" action="<?php echo $this->url->get('items/search'); ?>" autocomplete="off">
                    <input type="hidden" value="Jedinicno" name="ItemType"/> 
                    <div class="clearfix left">
                        <label for="name">Jedinicno Id</label>
                        <?php echo $form->render('idJedinicno'); ?>
                    </div>
                    <div class="clearfix left">
                        <label for="name">Item number</label>
                        <?php echo $form->render('Item_Number'); ?>
                    </div>
                    <div class="clearfix left">
                        <label for="name">Item type</label>
                        <?php echo $form->render('Item_Type'); ?>
                    </div>  
                    <div class="clearfix left">
                        <label for="name">Unique number</label>
                        <?php echo $form->render('Unique_Number'); ?>
                    </div>
                    <div class="clearfix left">
                        <label for="name">Postal code</label>
                        <?php echo $form->render('Product_Code'); ?>
                    </div>
                    <div class="clearfix left">
                        <label for="name">Description</label>
                        <?php echo $form->render('Description'); ?>
                    </div>
                    <div class="clearfix left">
                        <label for="name">Production date</label>
                        <?php echo $form->render('Production_Date'); ?>
                    </div>
                    <div class="clearfix left">
                        <label for="name">Quantity</label>
                        <?php echo $form->render('Quantity'); ?>
                    </div>
                    <div class="clearfix left">
                        <label for="name">Unit of mesure</label>
                        <?php echo $form->render('Unit_Of_Measure'); ?>
                    </div>
                    <div class="clearfix left">
                        <label for="name">Count of units</label>
                        <?php echo $form->render('Count_Of_Units'); ?>
                    </div>
                    <div class="clearfix left">
                        <label for="name">Number of items</label>
                        <?php echo $form->render('Number_Of_Items'); ?>
                    </div>
                    <div class="clearfix left">
                        <label for="name">GS1 code</label>
                        <?php echo $form->render('GS1_Code'); ?>
                    </div>
                    <div class="clearfix left">
                        <label for="name">Country code</label>
                        <?php echo $form->render('Country_Code'); ?>
                    </div>
                    <div class="clearfix left">
                        <label for="name">Site code</label>
                        <?php echo $form->render('Site_Code'); ?>
                    </div>
                    <?php echo $this->tag->submitButton(array('Search', 'class' => 'btn btn-big btn-success pull-left')); ?>
                </form>
            </div>
        </div>
    </div>
</div>
