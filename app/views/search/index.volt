{{ content() }}

<ul class="pager">
    <li class="previous pull-left">
        {{ link_to("search/index", "&larr; Go Back") }}
    </li>
</ul>

{% for order in page.items %}
{% if loop.first %}
<table class="table table-bordered table-striped" align="center">
    <thead>
        <tr>
            <th>Id</th>
            <th>Username</th>
            <th>Name</th>
            <th>Surname</th>
            <th>Email</th>
            <th>Profile</th>
            <th>Mobile</th>
            <th>Banned?</th>
            <th>Suspended?</th>
            <th>Confirmed?</th>
        </tr>
    </thead>
{% endif %}
    <tbody>
        <tr>
            <td>{{ user.idUsers }}</td>
            <td>{{ user.username }}</td>
            <td>{{ user.name }}</td>
            <td>{{ user.surname }}</td>
            <td>{{ user.email }}</td>
            <td>{{ user.profile.name }}</td>
            <td>{{ user.mobile }}</td>
            <td>{{ user.banned == 'Y' ? 'Yes' : 'No' }}</td>
            <td>{{ user.suspended == 'Y' ? 'Yes' : 'No' }}</td>
            <td>{{ user.active == 'Y' ? 'Yes' : 'No' }}</td>
            <td width="12%">{{ link_to("users/edit/" ~ user.idUsers, '<i class="icon-pencil"></i> Edit', "class": "btn") }}</td>
            <td width="12%">{{ link_to("users/delete/" ~ user.idUsers, '<i class="icon-remove"></i> Delete', "class": "btn btn-danger") }}</td>
        </tr>
    </tbody>
{% if loop.last %}
    <tbody>
        <tr>
            <td colspan="10" align="right">
                <div class="btn-group">
                    {{ link_to("users/search", '<i class="icon-fast-backward"></i> First', "class": "btn") }}
                    {{ link_to("users/search?page=" ~ page.before, '<i class="icon-step-backward"></i> Previous', "class": "btn ") }}
                    {{ link_to("users/search?page=" ~ page.next, '<i class="icon-step-forward"></i> Next', "class": "btn") }}
                    {{ link_to("users/search?page=" ~ page.last, '<i class="icon-fast-forward"></i> Last', "class": "btn") }}
                    <span class="help-inline">{{ page.current }}/{{ page.total_pages }}</span>
                </div>
            </td>
        </tr>
    <tbody>
</table>
{% endif %}
{% else %}
    No users are recorded 
{% endfor %}
