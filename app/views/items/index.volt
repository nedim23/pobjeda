{{ content() }}
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
                <form method="post" action="{{ url("items/search") }}" autocomplete="off">
                    <input type="hidden" value="Order" name="ItemType"/>                    
                    <div class="clearfix left">
                        <label for="name">Order Id</label>
                        {{ form.render("idOrder") }}
                    </div>
                    {{ submit_button("Search", "class": "btn btn-big btn-success pull-left") }}
                </form>
            </div>
            <div class="tab-pane" id="B">
                <form method="post" action="{{ url("items/search") }}" autocomplete="off">
                    <input type="hidden" value="PackingList" name="ItemType"/> 
                    <div class="clearfix left">
                        <label for="name">Packing list I Id</label>
                        {{ form.render("idPacking_List") }}
                    </div>
                    <div class="clearfix left">
                        <label for="name">Shipment mumber</label>
                        {{ form.render("Shipment_Number") }}
                    </div>
                    <div class="clearfix left">
                        <label for="name">Shipment date</label>
                        {{ form.render("Shipment_Date") }}
                    </div>
                    <div class="clearfix left">
                        <label for="name">Delivery note</label>
                        {{ form.render("Delivery_Note") }}
                    </div>
                    <div class="clearfix left">
                        <label for="name">Sender name</label>
                        {{ form.render("Sender_Name") }}
                    </div>
                    <div class="clearfix left">
                        <label for="name">Sender code</label>
                        {{ form.render("Sender_Code") }}
                    </div>
                    <div class="clearfix left">
                        <label for="name">Reciever name</label>
                        {{ form.render("Receiver_Name") }}
                    </div>
                    <div class="clearfix left">
                        <label for="name">Reciever code</label>
                        {{ form.render("Receiver_Code") }}
                    </div>
                    <div class="clearfix left">
                        <label for="name">Item type</label>
                        {{ form.render("Item_Type") }}
                    </div>
                    {{ submit_button("Search", "class": "btn btn-big btn-success pull-left") }}
                </form>
            </div>
            <div class="tab-pane" id="C">
                <form method="post" action="{{ url("items/search") }}" autocomplete="off">
                    <input type="hidden" value="Palete" name="ItemType"/> 
                    <div class="clearfix left">
                        <label for="name">Palete Id</label>
                        {{ form.render("idPalete") }}
                    </div>
                    <div class="clearfix left">
                        <label for="name">GS1 code</label>
                        {{ form.render("GS1_Code") }}
                    </div>
                    <div class="clearfix left">
                        <label for="name">Item type</label>
                        {{ form.render("Item_Type") }}
                    </div>
                    {{ submit_button("Search", "class": "btn btn-big btn-success pull-left") }}
                </form>
            </div>
            <div class="tab-pane" id="D">
                <form method="post" action="{{ url("items/search") }}" autocomplete="off">
                    <input type="hidden" value="Artupal" name="ItemType"/> 
                    <div class="clearfix left">
                        <label for="name">Artupal Id</label>
                        {{ form.render("idArtupal") }}
                    </div>
                    <div class="clearfix left">
                        <label for="name">Postal code</label>
                        {{ form.render("Product_Code") }}
                    </div>
                    <div class="clearfix left">
                        <label for="name">Description</label>
                        {{ form.render("Description") }}
                    </div>
                    <div class="clearfix left">
                        <label for="name">Quantity</label>
                        {{ form.render("Quantity") }}
                    </div>
                    <div class="clearfix left">
                        <label for="name">Unit of mesure</label>
                        {{ form.render("Unit_Of_Measure") }}
                    </div>
                    <div class="clearfix left">
                        <label for="name">Count of units</label>
                        {{ form.render("Count_Of_Units") }}
                    </div>
                    <div class="clearfix left">
                        <label for="name">Item type</label>
                        {{ form.render("Item_Type") }}
                    </div> 
                    {{ submit_button("Search", "class": "btn btn-big btn-success pull-left") }}
                </form>
            </div>
            <div class="tab-pane" id="E">
                <form method="post" action="{{ url("items/search") }}" autocomplete="off">
                    <input type="hidden" value="Paketi" name="ItemType"/> 
                    <div class="clearfix left">
                        <label for="name">Paketi Id</label>
                        {{ form.render("idPaketi") }}
                    </div>
                    <div class="clearfix left">
                        <label for="name">Item number</label>
                        {{ form.render("Item_Number") }}
                    </div>
                    <div class="clearfix left">
                        <label for="name">Item type</label>
                        {{ form.render("Item_Type") }}
                    </div>  
                    <div class="clearfix left">
                        <label for="name">Unique number</label>
                        {{ form.render("Unique_Number") }}
                    </div>
                    <div class="clearfix left">
                        <label for="name">Postal code</label>
                        {{ form.render("Product_Code") }}
                    </div>
                    <div class="clearfix left">
                        <label for="name">Description</label>
                        {{ form.render("Description") }}
                    </div>
                    <div class="clearfix left">
                        <label for="name">Production date</label>
                        {{ form.render("Production_Date") }}
                    </div>
                    <div class="clearfix left">
                        <label for="name">Quantity</label>
                        {{ form.render("Quantity") }}
                    </div>
                    <div class="clearfix left">
                        <label for="name">Unit of mesure</label>
                        {{ form.render("Unit_Of_Measure") }}
                    </div>
                    <div class="clearfix left">
                        <label for="name">Count of units</label>
                        {{ form.render("Count_Of_Units") }}
                    </div>
                    <div class="clearfix left">
                        <label for="name">Number of items</label>
                        {{ form.render("Number_Of_Items") }}
                    </div>
                    <div class="clearfix left">
                        <label for="name">GS1 code</label>
                        {{ form.render("GS1_Code") }}
                    </div>
                    <div class="clearfix left">
                        <label for="name">Country code</label>
                        {{ form.render("Country_Code") }}
                    </div>
                    <div class="clearfix left">
                        <label for="name">Site code</label>
                        {{ form.render("Site_Code") }}
                    </div>
                    {{ submit_button("Search", "class": "btn btn-big btn-success pull-left") }}
                </form>
            </div>
            <div class="tab-pane" id="F">
                <form method="post" action="{{ url("items/search") }}" autocomplete="off">
                    <input type="hidden" value="Mikro" name="ItemType"/> 
                    <div class="clearfix left">
                        <label for="name">Mikro Id</label>
                        {{ form.render("idMikro") }}
                    </div>
                    <div class="clearfix left">
                        <label for="name">Item number</label>
                        {{ form.render("Item_Number") }}
                    </div>
                    <div class="clearfix left">
                        <label for="name">Item type</label>
                        {{ form.render("Item_Type") }}
                    </div>  
                    <div class="clearfix left">
                        <label for="name">Unique number</label>
                        {{ form.render("Unique_Number") }}
                    </div>
                    <div class="clearfix left">
                        <label for="name">Postal code</label>
                        {{ form.render("Product_Code") }}
                    </div>
                    <div class="clearfix left">
                        <label for="name">Description</label>
                        {{ form.render("Description") }}
                    </div>
                    <div class="clearfix left">
                        <label for="name">Production date</label>
                        {{ form.render("Production_Date") }}
                    </div>
                    <div class="clearfix left">
                        <label for="name">Quantity</label>
                        {{ form.render("Quantity") }}
                    </div>
                    <div class="clearfix left">
                        <label for="name">Unit of mesure</label>
                        {{ form.render("Unit_Of_Measure") }}
                    </div>
                    <div class="clearfix left">
                        <label for="name">Count of units</label>
                        {{ form.render("Count_Of_Units") }}
                    </div>
                    <div class="clearfix left">
                        <label for="name">Number of items</label>
                        {{ form.render("Number_Of_Items") }}
                    </div>
                    <div class="clearfix left">
                        <label for="name">GS1 code</label>
                        {{ form.render("GS1_Code") }}
                    </div>
                    <div class="clearfix left">
                        <label for="name">Country code</label>
                        {{ form.render("Country_Code") }}
                    </div>
                    <div class="clearfix left">
                        <label for="name">Site code</label>
                        {{ form.render("Site_Code") }}
                    </div> 
                    {{ submit_button("Search", "class": "btn btn-big btn-success pull-left") }}
                </form>
            </div>
            <div class="tab-pane" id="G">
                <form method="post" action="{{ url("items/search") }}" autocomplete="off">
                    <input type="hidden" value="Jedinicno" name="ItemType"/> 
                    <div class="clearfix left">
                        <label for="name">Jedinicno Id</label>
                        {{ form.render("idJedinicno") }}
                    </div>
                    <div class="clearfix left">
                        <label for="name">Item number</label>
                        {{ form.render("Item_Number") }}
                    </div>
                    <div class="clearfix left">
                        <label for="name">Item type</label>
                        {{ form.render("Item_Type") }}
                    </div>  
                    <div class="clearfix left">
                        <label for="name">Unique number</label>
                        {{ form.render("Unique_Number") }}
                    </div>
                    <div class="clearfix left">
                        <label for="name">Postal code</label>
                        {{ form.render("Product_Code") }}
                    </div>
                    <div class="clearfix left">
                        <label for="name">Description</label>
                        {{ form.render("Description") }}
                    </div>
                    <div class="clearfix left">
                        <label for="name">Production date</label>
                        {{ form.render("Production_Date") }}
                    </div>
                    <div class="clearfix left">
                        <label for="name">Quantity</label>
                        {{ form.render("Quantity") }}
                    </div>
                    <div class="clearfix left">
                        <label for="name">Unit of mesure</label>
                        {{ form.render("Unit_Of_Measure") }}
                    </div>
                    <div class="clearfix left">
                        <label for="name">Count of units</label>
                        {{ form.render("Count_Of_Units") }}
                    </div>
                    <div class="clearfix left">
                        <label for="name">Number of items</label>
                        {{ form.render("Number_Of_Items") }}
                    </div>
                    <div class="clearfix left">
                        <label for="name">GS1 code</label>
                        {{ form.render("GS1_Code") }}
                    </div>
                    <div class="clearfix left">
                        <label for="name">Country code</label>
                        {{ form.render("Country_Code") }}
                    </div>
                    <div class="clearfix left">
                        <label for="name">Site code</label>
                        {{ form.render("Site_Code") }}
                    </div>
                    {{ submit_button("Search", "class": "btn btn-big btn-success pull-left") }}
                </form>
            </div>
        </div>
    </div>
</div>
