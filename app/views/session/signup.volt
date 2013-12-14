{{ content() }}

<div class="login">
    <div class="row">
        <div class="span6">
            <div class="page-header">
                <h2>Sign Up</h2>
            </div>
            {{ form('class': 'form-inline') }}
                <fieldset>
                    <div class="control-group">
	                	 <label class="control-label" for="name">Name</label>
	                    <div class="controls">
	                        {{ form.render('name') }}
							{{ form.messages('name') }}
	                    </div>
	                </div>

                   <div class="control-group">
	                	 <label class="control-label" for="email">Email</label>
	                    <div class="controls">
        					{{ form.render('email') }}
							{{ form.messages('email') }}
	                    </div>
	                </div>

	                <div class="control-group">
	                	 <label class="control-label" for="username">Username</label>
	                    <div class="controls">
        					{{ form.render('username') }}
							{{ form.messages('username') }}
	                    </div>
	                </div>

                    <div class="control-group">
	                	 <label class="control-label" for="password">Password</label>
	                    <div class="controls">
	                        {{ form.render('password') }}
							{{ form.messages('password') }}
	                    </div>
	                </div>

                    <div class="control-group">
	                	 <label class="control-label" for="confirmPassword">Confirm Password</label>
	                    <div class="controls">
	                        {{ form.render('confirmPassword') }}
							{{ form.messages('confirmPassword') }}
	                    </div>
	                </div>


	                <div class="control-group">
	                	 <label class="control-label" for="mobile">Mobile</label>
	                    <div class="controls">
	                        {{ form.render('mobile') }}
							{{ form.messages('mobile') }}
	                    </div>
	                </div>

                    <div class="control-group">
	                	 {{ form.render('terms') }} {{ form.label('terms') }}
							{{ form.messages('terms') }}
	                </div>

            		{{ form.render('csrf', ['value': security.getToken()]) }}
					{{ form.messages('csrf') }}

                    <div class="form-actions">
                        {{ submit_button('Sign Up', 'class': 'btn btn-primary btn-large') }}
                    </div>
                </fieldset>
            </form>
        </div>   
    </div>
</div>


