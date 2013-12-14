{{ content() }}
<div class="login">
    <div class="row">

        <div class="span6">
            <div class="page-header">
                <h2>Log In</h2>
            </div>            
                {{ form('class': 'form-search') }}
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="email">Email</label>
                        <div class="controls">
                             {{ form.render('email') }}
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="password">Password</label>
                        <div class="controls">
                            {{ form.render('password') }}
                        </div>
                    </div>
                    <div align="left" class="remember">
                        {{ form.render('remember') }}
                        {{ form.label('remember') }}
                    </div>

                        {{ form.render('csrf', ['value': security.getToken()]) }}

                        <hr>

                        <div class="forgot">
                            {{ link_to("session/forgotPassword", "Forgot my password") }}
                        </div>

                    <div class="form-actions">                        
                        {{ form.render('Login') }}
                    </div>
                </fieldset>
            </form>
        </div>   
    </div>
</div>
