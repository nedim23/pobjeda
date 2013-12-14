
{{ content() }}
<table id="dvData" class="table table-bordered table-striped" align="center">

    <thead>
        <tr>
            <th>Belonging order Id</th>
            <td>{{ link_to("items/order/" ~ item.Order, item.Order, "class": "btn") }}</td>
        </tr>  
        <tr>
            <th>Palete Id</th>
            <td>{{ item.idPalete }}</td>      
        </tr>
        <tr>
            <th>GS1_Code</th>
            <td>{{ item.GS1_Code }}</td>            
        </tr>
        <tr>
            <th>Item type</th>
            <td>{{ item.Item_Type }}</td>
        </tr>      
        <tr>
            <th>Containing Artupal with IDs</th>
            <td>                
                {% for p in subItems %}   
                     {{ link_to("items/artupal/" ~ p.idArtupal, p.idArtupal, "class": "btn") }}
                {% endfor %}
            </td>      
        </tr>
    </tbody>
</table>


<button id="print" class="btn"><i class="icon-print"></i>Print</button>
{{ link_to("items/pdf/" ~ item.idPalete ~ "?itemtype=palete", "<i class='icon-leaf icon-white'></i>Get as PDF", "class": "btn btn-danger", "target": "_blank") }}
                   





                   
                    