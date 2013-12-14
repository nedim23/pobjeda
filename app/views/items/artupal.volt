

{{ content() }}
<table id="dvData" class="table table-bordered table-striped" align="center">
    <thead>
        <tr>
            <th>Belonging palete Id</th>
            <td>{{ link_to("items/palete/" ~ item.Palete, item.Palete, "class": "btn") }}</td>            
        </tr>
        <tr>
            <th>Artupal Id</th>
            <td>{{ item.idArtupal }}</td>            
        </tr>
        <tr>
            <th>Product code</th>
            <td>{{ item.Product_Code }}</td>            
        </tr>
        <tr>
            <th>Description</th>
            <td>{{ item.Description }}</td>            
        </tr>
        <tr>
            <th>Lot number</th>
            <td>{{ item.Lot_Number }}</td>            
        </tr>
        <tr>
            <th>Quantity</th>
            <td>{{ item.Quantity }}</td>            
        </tr>
        <tr>
            <th>Unit of measure</th>
            <td>{{ item.Unit_Of_Measure }}</td>            
        </tr>
        <tr>
            <th>Count of units</th>
            <td>{{ item.Count_Of_Units }}</td>            
        </tr>
        <tr>
            <th>Item type</th>                    
            <td>{{ item.Item_Type }}</td>            
        </tr>        
        <tr>
            <th>Containing Paketi with IDs</th>
            <td>
                {% for p in subItems %}   
                     {{ link_to("items/paketi/" ~ p.idPaketi, p.idPaketi, "class": "btn") }}
                {% endfor %}
            </td>      
        </tr>

    </tbody>
</table>



<button id="print" class="btn"><i class="icon-print"></i>Print</button>
{{ link_to("items/pdf/" ~ item.idArtupal ~ "?itemtype=artupal", "<i class='icon-leaf icon-white'></i>Get as PDF", "class": "btn btn-danger", "target": "_blank") }}




