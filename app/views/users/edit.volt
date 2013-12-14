
<form method="post" autocomplete="off">

    <ul class="pager">
        <li class="previous pull-left">
            {{ link_to("users", "&larr; Go Back") }}
        </li>
        <li class="pull-right">
            {{ submit_button("Save", "class": "btn btn-big btn-success") }}
        </li>
    </ul>

    {{ content() }}

    <div class="center scaffold">
        <h2>Edit users</h2>

        <ul class="nav nav-tabs">
            <li class="active"><a href="#A" data-toggle="tab">Basic</a></li>
            <li><a href="#B" data-toggle="tab">Search Performed</a></li>
            <li><a href="#C" data-toggle="tab">Successful Logins</a></li>
            <li><a href="#D" data-toggle="tab">Failed Logins</a></li>
            <li><a href="#E" data-toggle="tab">Successful Logouts</a></li>
            <li><a href="#F" data-toggle="tab">Password Changes</a></li>
            <li><a href="#H" data-toggle="tab">Reset Passwords</a></li>
        </ul>

        <div class="tabbable">
            <div class="tab-content">
                <div class="tab-pane active" id="A">

                    {{ form.render("idUsers") }}

                    <div class="span4">

                        <div class="clearfix">
                            <label for="username">Username</label>
                            {{ form.render("username") }}
                        </div>

                        <div class="clearfix">
                            <label for="username">Name</label>
                            {{ form.render("name") }}
                        </div>

                        <div class="clearfix">
                            <label for="Profiles">Profile</label>
                            {{ form.render("Profiles") }}
                        </div>

                        <div class="clearfix">
                            <label for="suspended">Suspended?</label>
                            {{ form.render("suspended") }}
                        </div>

                    </div>

                    <div class="span4">

                        <div class="clearfix">
                            <label for="email">E-Mail</label>
                            {{ form.render("email") }}
                        </div>

                        <div class="clearfix">
                            <label for="mobile">Mobile</label>
                            {{ form.render("mobile") }}
                        </div>

                        <div class="clearfix">
                            <label for="banned">Banned?</label>
                            {{ form.render("banned") }}
                        </div>

                        <div class="clearfix">
                            <label for="active">Confirmed?</label>
                            {{ form.render("active") }}
                        </div>

                    </div>

                    {{ link_to("users/changePassword", "Change Password") }}
                </div>

                <div class="tab-pane" id="B">
                    <p>
                        <table class="table table-bordered table-striped" align="center">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>IP Address</th>
                                    <th>User Agent</th>
                                    <th>Occurred</th>
                                </tr>
                            </thead>
                            <tbody>
                            {% for search in user.successSearch %}
                                <tr>
                                    <td>{{ search.idSearch }}</td>
                                    <td>{{ search.ipAddress }}</td>
                                    <td>{{ search.userAgent }}</td>
                                    <td>{{ date("Y-m-d H:i:s", search.occurred) }}</td>                            
                                </tr>
                            {% else %}
                                <tr><td colspan="3" align="center">User does not have any searches</td></tr>
                            {% endfor %}
                            </tbody>
                        </table>
                    </p>
                </div>

                <div class="tab-pane" id="C">
                    <p>
                        <table class="table table-bordered table-striped" align="center">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>IP Address</th>
                                    <th>User Agent</th>
                                    <th>Occurred</th>
                                </tr>
                            </thead>
                            <tbody>
                            {% for slogins in user.successLogins %}
                                <tr>
                                    <td>{{ slogins.idLogins }}</td>
                                    <td>{{ slogins.ipAddress }}</td>
                                    <td>{{ slogins.userAgent }}</td>
                                    <td>{{ date("Y-m-d H:i:s", slogins.occurred) }}</td>                            
                                </tr>
                            {% else %}
                                <tr><td colspan="3" align="center">User does not have successfull logins</td></tr>
                            {% endfor %}
                            </tbody>
                        </table>
                    </p>
                </div>

                <div class="tab-pane" id="D">
                    <p>
                        <table class="table table-bordered table-striped" align="center">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>IP Address</th>
                                    <th>User Agent</th>
                                    <th>Occurred</th>
                                </tr>
                            </thead>
                            <tbody>
                            {% for login in user.failedLogins %}
                                <tr>
                                    <td>{{ login.idFailed }}</td>
                                    <td>{{ login.ipAddress }}</td>
                                    <td>{{ login.userAgent }}</td>
                                    <td>{{ date("Y-m-d H:i:s", login.occurred) }}</td>
                                </tr>
                            {% else %}
                                <tr><td colspan="3" align="center">User does not have failed logins</td></tr>
                            {% endfor %}
                            </tbody>
                        </table>
                    </p>
                </div>

                <div class="tab-pane" id="E">
                    <p>
                        <table class="table table-bordered table-striped" align="center">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>IP Address</th>
                                    <th>User Agent</th>
                                    <th>Occurred</th>
                                </tr>
                            </thead>
                            <tbody>
                            {% for logout in user.successLogouts %}
                                <tr>
                                    <td>{{ logout.idLogouts }}</td>
                                    <td>{{ logout.ipAddress }}</td>
                                    <td>{{ logout.userAgent }}</td>
                                    <td>{{ date("Y-m-d H:i:s", logout.occurred) }}</td>
                                </tr>
                            {% else %}
                                <tr><td colspan="3" align="center">User does not have successfull logouts</td></tr>
                            {% endfor %}
                            </tbody>
                        </table>
                    </p>
                </div>

                <div class="tab-pane" id="F">
                    <p>
                        <table class="table table-bordered table-striped" align="center">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>IP Address</th>
                                    <th>User Agent</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                            {% for change in user.passwordChanges %}
                                <tr>
                                    <td>{{ change.idChanges }}</td>
                                    <td>{{ change.ipAddress }}</td>
                                    <td>{{ change.userAgent }}</td>
                                    <td>{{ date("Y-m-d H:i:s", change.createdAt) }}</td>
                                </tr>
                            {% else %}
                                <tr><td colspan="3" align="center">User has not changed his/her password yet</td></tr>
                            {% endfor %}
                            </tbody>
                        </table>
                    </p>
                </div>

                <div class="tab-pane" id="H">
                    <p>
                        <table class="table table-bordered table-striped" align="center">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Date</th>
                                    <th>Reset?</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for reset in user.resetPasswords %}
                                    <tr>
                                        <th>{{ reset.idReset }}</th>
                                        <th>{{ date("Y-m-d H:i:s", reset.createdAt) }}</th>
                                        <th>{{ reset.reset == 'Y' ? 'Yes' : 'No' }}</th>
                                    </tr>
                                {% else %}
                                    <tr><td colspan="3" align="center">User has not requested reset his/her password yet</td></tr>
                                {% endfor %}
                            </tbody>
                        </table>
                    </p>
                </div>

            </div>
        </div>
    </div>
</form>
