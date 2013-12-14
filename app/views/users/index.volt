{{ content() }}

<div align="right">
   {{ link_to('session/signup', '<i class="icon-ok icon-white"></i> Create User', 'class': 'btn btn-primary btn-large') }}
</div>

<form method="post" action="{{ url("users/search") }}" autocomplete="off">

    <div class="left scaffold">

        <h2>Search users</h2>

        <div class="clearfix">
            <label for="idUsers">Id</label>
            {{ form.render("idUsers") }}
        </div>

        <div class="clearfix">
            <label for="username">Username</label>
            {{ form.render("username") }}
        </div>

        <div class="clearfix">
            <label for="name">Name</label>
            {{ form.render("name") }}
        </div>

        <div class="clearfix">
            <label for="email">E-Mail</label>
            {{ form.render("email") }}
        </div>

        <div class="clearfix">
            <label for="mobile">Mobile</label>
            {{ form.render("mobile") }}
        </div>

        <div class="clearfix">
            <label for="profilesId">Profile</label>
            {{ form.render("Profiles") }}
        </div>

        <div class="clearfix">
            {{ submit_button("Search", "class": "btn btn-primary") }}
        </div>

    </div>

</form>