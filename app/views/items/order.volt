
{{ content() }}
<table id="dvData" class="table table-bordered table-striped" align="center">

    <thead>        
        <tr>
            <th>Created by user</th>       
             <td>{{ auth.getUserNameById(item.User) ~ ' with id '}} {{ link_to("users/edit/" ~ item.User, item.User) }}</td>     
        </tr>
        <tr>
            <th>Order Id</th> 
            <td>{{ item.idOrder }}</td>        
        </tr>
        <tr>
            <th>Created At</th>
            <td>{{ date("Y-m-d H:i:s", item.createdAt) }}</td>      
        </tr>
        <tr>
            <th>Containing PackingList with IDs</th>
            <td>
                {% for pa in packingList %}   
                     {{ link_to("items/packingList/" ~ pa.idPacking_List, pa.idPacking_List, "class": "btn") }}
                {% endfor %}
            </td>       
        </tr>
        <tr>
            <th>Containing Palete with IDs</th>
            <td>
                {% for pl in palete %}   
                     {{ link_to("items/palete/" ~ pl.idPalete, pl.idPalete, "class": "btn") }}
                {% endfor %}
            </td>       
        </tr>
    </tbody>
</table>
