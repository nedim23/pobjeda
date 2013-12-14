{% for pl in parameters %}   
         {{pl}}  
{% endfor %}


{% if itemClass == "Order" %}    
    {% for item in page.items %}
        {% if loop.first %}
        <table class="table table-bordered table-striped" align="center">
            <thead>
                <tr>
                    <th>Order Id</th>
                    <th>Created by user</th>
                    <th>Created At</th>
                </tr>
            </thead>
        {% endif %}
            <tbody>
                <tr>
                    <td>{{ link_to("items/order/" ~ item.idOrder, item.idOrder, "class": "btn") }}</td>                    
                    <td>{{ link_to("users/edit/" ~ item.User, auth.getUserNameById(item.User), "class": "btn") }}</td>
                    <td>{{ date("Y-m-d H:i:s", item.createdAt) }}</td> 
                </tr>
            </tbody>
        {% if loop.last %}
            <tbody>
                <tr>
                    <td colspan="10" align="right">
                        <div class="btn-group">
                            {{ link_to("items/search?itemtype=order", '<i class="icon-fast-backward"></i> First', "class": "btn") }}
                            {{ link_to("items/search?itemtype=order&page=" ~ page.before, '<i class="icon-step-backward"></i> Previous', "class": "btn ") }}
                            {{ link_to("items/search?itemtype=order&page=" ~ page.next, '<i class="icon-step-forward"></i> Next', "class": "btn") }}
                            {{ link_to("items/search?itemtype=order&page=" ~ page.last, '<i class="icon-fast-forward"></i> Last', "class": "btn") }}
                            <span class="help-inline">{{ page.current }}/{{ page.total_pages }}</span>
                        </div>
                    </td>
                </tr>
            <tbody>
        </table>
        {% endif %}
    {% else %}
    No items are recorded
    {% endfor %}

{% endif %}

{% if itemClass == "PackingList" %}
    {% for item in page.items %}
        {% if loop.first %}
        <table class="table table-bordered table-striped" align="center">
            <thead>
                <tr>
                    <th>Packing list Id</th>
                    <th>Shipment number</th>
                    <th>Shipment date</th>
                    <th>Delivery note</th>
                    <th>Sender name</th>
                    <th>Sender code</th>
                    <th>Receiver name</th>
                    <th>Receiver code</th>
                    <th>Item type</th>
                </tr>
            </thead>
        {% endif %}
            <tbody>
                <tr>
                    <td>{{ link_to("items/packingList/" ~ item.idPacking_List, item.idPacking_List, "class": "btn") }}</td>
                    <td>{{ item.Shipment_Number }}</td>
                    <td>{{ item.Shipment_Date }}</td>
                    <td>{{ item.Delivery_Note }}</td>
                    <td>{{ item.Sender_Name }}</td>
                    <td>{{ item.Sender_Code }}</td>
                    <td>{{ item.Receiver_Name }}</td>
                    <td>{{ item.Receiver_Code }}</td>
                    <td>{{ item.Item_Type }}</td>
                </tr>
            </tbody>
        {% if loop.last %}
            <tbody>
                <tr>
                    <td colspan="10" align="right">
                        <div class="btn-group">
                            {{ link_to("items/search?itemtype=packinglist", '<i class="icon-fast-backward"></i> First', "class": "btn") }}
                            {{ link_to("items/search?itemtype=packinglist&page=" ~ page.before, '<i class="icon-step-backward"></i> Previous', "class": "btn ") }}
                            {{ link_to("items/search?itemtype=packinglist&page=" ~ page.next, '<i class="icon-step-forward"></i> Next', "class": "btn") }}
                            {{ link_to("items/search?itemtype=packinglist&page=" ~ page.last, '<i class="icon-fast-forward"></i> Last', "class": "btn") }}
                            <span class="help-inline">{{ page.current }}/{{ page.total_pages }}</span>
                        </div>
                    </td>
                </tr>
            <tbody>
        </table>
        {% endif %}
    {% else %}
    No items are recorded
    {% endfor %}
    
{% endif %}

{% if itemClass == "Palete" %}

    {% for item in page.items %}
        {% if loop.first %}
        <table class="table table-bordered table-striped" align="center">
            <thead>
                <tr>
                    <th>Palete Id</th>
                    <th>GS1_Code</th>
                    <th>Item type</th>
                </tr>
            </thead>
        {% endif %}
            <tbody>
                <tr>
                    <td>{{ link_to("items/palete/" ~ item.idPalete, item.idPalete, "class": "btn") }}</td>
                    <td>{{ item.GS1_Code }}</td>
                    <td>{{ item.Item_Type }}</td>
                </tr>
            </tbody>
        {% if loop.last %}
            <tbody>
                <tr>
                    <td colspan="10" align="right">
                        <div class="btn-group">
                            {{ link_to("items/search?itemtype=palete", '<i class="icon-fast-backward"></i> First', "class": "btn") }}
                            {{ link_to("items/search?itemtype=palete&page=" ~ page.before, '<i class="icon-step-backward"></i> Previous', "class": "btn ") }}
                            {{ link_to("items/search?itemtype=palete&page=" ~ page.next, '<i class="icon-step-forward"></i> Next', "class": "btn") }}
                            {{ link_to("items/search?itemtype=palete&page=" ~ page.last, '<i class="icon-fast-forward"></i> Last', "class": "btn") }}
                            <span class="help-inline">{{ page.current }}/{{ page.total_pages }}</span>
                        </div>
                    </td>
                </tr>
            <tbody>
        </table>
        {% endif %}
    {% else %}
    No items are recorded
    {% endfor %}

{% endif %}

{% if itemClass == "Artupal" %}

    {% for item in page.items %}
        {% if loop.first %}
        <table class="table table-bordered table-striped" align="center">
            <thead>
                <tr>
                    <th>Artupal Id</th>
                    <th>Product code</th>
                    <th>Description</th>
                    <th>Lot number</th>
                    <th>Quantity</th>
                    <th>Unit of measure</th>
                    <th>Count of units</th>
                    <th>Item type</th>                    
                </tr>
            </thead>
        {% endif %}
            <tbody>
                <tr>
                    <td>{{ link_to("items/artupal/" ~ item.idArtupal, item.idArtupal, "class": "btn") }}</td>
                    <td>{{ item.Product_Code }}</td>
                    <td>{{ item.Description }}</td>
                    <td>{{ item.Lot_Number }}</td>
                    <td>{{ item.Quantity }}</td>
                    <td>{{ item.Unit_Of_Measure }}</td>
                    <td>{{ item.Count_Of_Units }}</td>
                    <td>{{ item.Item_Type }}</td>
                </tr>
            </tbody>
        {% if loop.last %}
            <tbody>
                <tr>
                    <td colspan="10" align="right">
                        <div class="btn-group">
                            {{ link_to("items/search?itemtype=artupal&", '<i class="icon-fast-backward"></i> First', "class": "btn") }}
                            {{ link_to("items/search?itemtype=artupal&page=" ~ page.before, '<i class="icon-step-backward"></i> Previous', "class": "btn ") }}
                            {{ link_to("items/search?itemtype=artupal&page=" ~ page.next, '<i class="icon-step-forward"></i> Next', "class": "btn") }}
                            {{ link_to("items/search?itemtype=artupal&page=" ~ page.last, '<i class="icon-fast-forward"></i> Last', "class": "btn") }}
                            <span class="help-inline">{{ page.current }}/{{ page.total_pages }}</span>
                        </div>
                    </td>
                </tr>
            <tbody>
        </table>
        {% endif %}
    {% else %}
    No items are recorded
    {% endfor %}

{% endif %}

{% if itemClass == "Paketi" %}

    {% for item in page.items %}
        {% if loop.first %}
        <table class="table table-bordered table-striped" align="center">
            <thead>
                <tr>
                    <th>Paketi Id</th>
                    <th>Item number</th>
                    <th>Item type</th>   
                    <th>Unique number</th>
                    <th>Product code</th>
                    <th>Description</th>
                    <th>Production date</th>
                    <th>Quantity</th>
                    <th>Unit of measure</th>                    
                    <th>Count of units</th>
                    <th>Number of items</th>
                    <th>GS1 code</th>
                    <th>Country code</th>                    
                    <th>Site code</th>                    
                </tr>
            </thead>
        {% endif %}
            <tbody>
                <tr>
                    <td>{{ link_to("items/paketi/" ~ item.idPaketi, item.idPaketi, "class": "btn") }}</td>
                    <td>{{ item.Item_Number }}</td>
                    <td>{{ item.Item_Type }}</td>
                    <td>{{ item.Unique_Number }}</td>
                    <td>{{ item.Product_Code }}</td>
                    <td>{{ item.Description }}</td>
                    <td>{{ item.Production_Date }}</td>
                    <td>{{ item.Quantity }}</td>
                    <td>{{ item.Unit_Of_Measure }}</td>
                    <td>{{ item.Count_Of_Units }}</td>
                    <td>{{ item.Number_Of_Items }}</td>
                    <td>{{ item.GS1_Code }}</td>
                    <td>{{ item.Country_Code }}</td>
                    <td>{{ item.Site_Code }}</td>
                </tr>
            </tbody>
        {% if loop.last %}
            <tbody>
                <tr>
                    <td colspan="10" align="right">
                        <div class="btn-group">
                            {{ link_to("items/search?itemtype=paketi", '<i class="icon-fast-backward"></i> First', "class": "btn") }}
                            {{ link_to("items/search?itemtype=paketi&page=" ~ page.before, '<i class="icon-step-backward"></i> Previous', "class": "btn ") }}
                            {{ link_to("items/search?itemtype=paketi&page=" ~ page.next, '<i class="icon-step-forward"></i> Next', "class": "btn") }}
                            {{ link_to("items/search?itemtype=paketi&page=" ~ page.last, '<i class="icon-fast-forward"></i> Last', "class": "btn") }}
                            <span class="help-inline">{{ page.current }}/{{ page.total_pages }}</span>
                        </div>
                    </td>
                </tr>
            <tbody>
        </table>
        {% endif %}
    {% else %}
    No items are recorded
    {% endfor %}

{% endif %}

{% if itemClass == "Mikro" %}

 {% for item in page.items %}
        {% if loop.first %}
        <table class="table table-bordered table-striped" align="center">
            <thead>
                <tr>
                    <th>Mikro Id</th>
                    <th>Item number</th>
                    <th>Item type</th>   
                    <th>Unique number</th>
                    <th>Product code</th>
                    <th>Description</th>
                    <th>Production date</th>
                    <th>Quantity</th>
                    <th>Unit of measure</th>                    
                    <th>Count of units</th>
                    <th>Number of items</th>
                    <th>GS1 code</th>
                    <th>Country code</th>                    
                    <th>Site code</th>                    
                </tr>
            </thead>
        {% endif %}
            <tbody>
                <tr>
                    <td>{{ link_to("items/mikro/" ~ item.idMikro, item.idMikro, "class": "btn") }}</td>
                    <td>{{ item.Item_Number }}</td>
                    <td>{{ item.Item_Type }}</td>
                    <td>{{ item.Unique_Number }}</td>
                    <td>{{ item.Product_Code }}</td>
                    <td>{{ item.Description }}</td>
                    <td>{{ item.Production_Date }}</td>
                    <td>{{ item.Quantity }}</td>
                    <td>{{ item.Unit_Of_Measure }}</td>
                    <td>{{ item.Count_Of_Units }}</td>
                    <td>{{ item.Number_Of_Items }}</td>
                    <td>{{ item.GS1_Code }}</td>
                    <td>{{ item.Country_Code }}</td>
                    <td>{{ item.Site_Code }}</td>
                </tr>
            </tbody>
        {% if loop.last %}
            <tbody>
                <tr>
                    <td colspan="10" align="right">
                        <div class="btn-group">
                            {{ link_to("items/search?itemtype=mikro", '<i class="icon-fast-backward"></i> First', "class": "btn") }}
                            {{ link_to("items/search?itemtype=mikro&page=" ~ page.before, '<i class="icon-step-backward"></i> Previous', "class": "btn ") }}
                            {{ link_to("items/search?itemtype=mikro&page=" ~ page.next, '<i class="icon-step-forward"></i> Next', "class": "btn") }}
                            {{ link_to("items/search?itemtype=mikro&page=" ~ page.last, '<i class="icon-fast-forward"></i> Last', "class": "btn") }}
                            <span class="help-inline">{{ page.current }}/{{ page.total_pages }}</span>
                        </div>
                    </td>
                </tr>
            <tbody>
        </table>
        {% endif %}
    {% else %}
    No items are recorded
    {% endfor %}

{% endif %}

{% if itemClass == "Jedinicno" %}

 {% for item in page.items %}
        {% if loop.first %}
        <table class="table table-bordered table-striped" align="center">
            <thead>
                <tr>
                    <th>Jedinicno Id</th>
                    <th>Item number</th>
                    <th>Item type</th>   
                    <th>Unique number</th>
                    <th>Product code</th>
                    <th>Description</th>
                    <th>Production date</th>
                    <th>Quantity</th>
                    <th>Unit of measure</th>                    
                    <th>Count of units</th>
                    <th>Number of items</th>
                    <th>GS1 code</th>
                    <th>Country code</th>                    
                    <th>Site code</th>                    
                </tr>
            </thead>
        {% endif %}
            <tbody>
                <tr>
                    <td>{{ link_to("items/jedinicno/" ~ item.idJedinicno, item.idJedinicno, "class": "btn") }}</td>
                    <td>{{ item.Item_Number }}</td>
                    <td>{{ item.Item_Type }}</td>
                    <td>{{ item.Unique_Number }}</td>
                    <td>{{ item.Product_Code }}</td>
                    <td>{{ item.Description }}</td>
                    <td>{{ item.Production_Date }}</td>
                    <td>{{ item.Quantity }}</td>
                    <td>{{ item.Unit_Of_Measure }}</td>
                    <td>{{ item.Count_Of_Units }}</td>
                    <td>{{ item.Number_Of_Items }}</td>
                    <td style="word-break:break-all;">{{ item.GS1_Code }}</td>
                    <td>{{ item.Country_Code }}</td>
                    <td>{{ item.Site_Code }}</td>
                </tr>
            </tbody>
        {% if loop.last %}
            <tbody>
                <tr>
                    <td colspan="10" align="right">
                        <div class="btn-group">
                            {{ link_to("items/search?itemtype=jedinicno", '<i class="icon-fast-backward"></i> First', "class": "btn") }}
                            {{ link_to("items/search?itemtype=jedinicno&page=" ~ page.before, '<i class="icon-step-backward"></i> Previous', "class": "btn ") }}
                            {{ link_to("items/search?itemtype=jedinicno&page=" ~ page.next, '<i class="icon-step-forward"></i> Next', "class": "btn") }}
                            {{ link_to("items/search?itemtype=jedinicno&page=" ~ page.last, '<i class="icon-fast-forward"></i> Last', "class": "btn") }}
                            <span class="help-inline">{{ page.current }}/{{ page.total_pages }}</span>
                        </div>
                    </td>
                </tr>
            <tbody>
        </table>
        {% endif %}
    {% else %}
    No items are recorded
    {% endfor %}

{% endif %}


