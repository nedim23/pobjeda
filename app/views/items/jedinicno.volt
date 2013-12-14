
{{ content() }}
<table id="dvData" class="table table-bordered table-striped" align="center">

    <thead>
        <tr>
            <th>Belonging mikro Id</th>
            <td>{{ link_to("items/mikro/" ~ item.Mikro, item.Mikro, "class": "btn") }}</td>            
        </tr>
         <tr>
            <th>Jedinicno Id</th>
            <td>{{ item.idJedinicno }}</td>            
        </tr>
        <tr>
            <th>Item number</th>
            <td>{{ item.Item_Number }}</td>            
        </tr>
        <tr>
            <th>Item type</th>   
            <td>{{ item.Item_Type }}</td>            
        </tr>
        <tr>
            <th>Unique number</th>
            <td>{{ item.Unique_Number }}</td>            
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
            <th>Production date</th>
            <td>{{ item.Production_Date }}</td>            
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
            <th>Number of items</th>
            <td>{{ item.Number_Of_Items }}</td>            
        </tr>
        <tr>
            <th>GS1 code</th>
            <td>{{ item.GS1_Code }}</td>            
        </tr>
        <tr>
            <th>Country code</th>                    
            <td>{{ item.Country_Code }}</td>            
        </tr>
        <tr>
            <th>Site code</th>                    
            <td>{{ item.Site_Code }}</td>            
        </tr>
    </tbody>
</table>

<button id="print" class="btn"><i class="icon-print"></i>Print</button>
{{ link_to("items/pdf/" ~ item.idJedinicno ~ "?itemtype=jedinicno", "<i class='icon-leaf icon-white'></i>Get as PDF", "class": "btn btn-danger", "target": "_blank") }}
