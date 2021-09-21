{{-- Extends layout --}}
@extends('layout.default')



{{-- Content --}}
@section('content')


		<!--**********************************
            Content body start
        ***********************************-->
        <div class="adduser container-fluid">
                <div class="page-titles">
                    <h4>Add User </h4>
                   
                </div>
                <!-- row -->
                <table class="form-table" role="presentation">
                    <tbody><tr class="form-field form-required">
                        <th scope="row"><label for="user_login">Username <span class="description">(required)</span></label></th>
                        <td><input  class="form-control input-default " name="user_login" type="text" id="user_login" value="" aria-required="true" autocapitalize="none" autocorrect="off" maxlength="60" class=""></td>
                    </tr>
                    <tr class="form-field form-required">
                        <th scope="row"><label for="email">Email <span class="description">(required)</span></label></th>
                        <td><input class="form-control input-default " name="email" type="email" id="email" value=""></td>
                    </tr>
                        <tr class="form-field">
                        <th scope="row"><label for="first_name">First Name </label></th>
                        <td><input class="form-control input-default " name="first_name" type="text" id="first_name" value=""></td>
                    </tr>
                    <tr class="form-field">
                        <th scope="row"><label for="last_name">Last Name </label></th>
                        <td><input class="form-control input-default " name="last_name" type="text" id="last_name" value=""></td>
                    </tr>
                    <tr class="form-field">
                        <th scope="row"><label for="url">Website</label></th>
                        <td><input class="form-control input-default code" name="url" type="url" id="url" value=""></td>
                    </tr>
                               
                            <tr class="form-field form-required user-pass1-wrap">
                        <th scope="row">
                            <label for="pass1">
                                Password				<span class="description hide-if-js">(required)</span>
                            </label>
                        </th>
                        <td>
                         
                            <button type="button" class="btn btn-primary wp-generate-pw hide-if-no-js">Generate password</button>
                            <div class="wp-pwd">
                                                <span class="password-input-wrapper">
                                    <input type="text" name="pass1" id="pass1" class="form-control input-default  regular-text strong" autocomplete="off" data-reveal="1" data-pw="3C7GvE5oVPAm1qAS@CU(2UvC" aria-describedby="pass-strength-result">
                                </span>
                                <button type="button" class="btn btn-primary  button wp-hide-pw hide-if-no-js" data-toggle="0" aria-label="Hide password">
                                    <span class="dashicons dashicons-hidden" aria-hidden="true"></span>
                                    <span class="text">Hide</span>
                                </button>
                                <div  id="pass-strength-result" aria-live="polite" class="strong">Strong</div>
                            </div>
                        </td>
                    </tr>
                    <tr class="form-field form-required user-pass2-wrap hide-if-js" style="display: none;">
                        <th scope="row"><label for="pass2">Repeat Password <span class="description">(required)</span></label></th>
                        <td>
                        <input name="pass2" class="form-control input-default "  type="password" id="pass2" autocomplete="off" aria-describedby="pass2-desc">
                        <p class="description" id="pass2-desc">Type the password again.</p>
                        </td>
                    </tr>
                    <tr class="pw-weak" style="display: none;">
                        <th>Confirm Password</th>
                        <td>
                            <label>
                                <input type="checkbox" name="pw_weak" class="pw-checkbox">
                                Confirm use of weak password			</label>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Send User Notification</th>
                        <td>
                            <input type="checkbox" name="send_user_notification" id="send_user_notification" value="1" checked="checked">
                            <label for="send_user_notification">Send the new user an email about their account.</label>
                        </td>
                    </tr>
                            <tr class="form-field">
                        <th scope="row"><label for="role">Role</label></th>
                        <td>

                            <div class="form-group">
                                <div class="dropdown bootstrap-select form-control default-select"><select class="form-control default-select" tabindex="-98">
                                    <option>Option 1</option>
                                    <option>Option 2</option>
                                    <option>Option 3</option>
                                </select></div>
                            </div>
                        </td>
                    </tr>
                        </tbody></table>
                        <button type="button" class="btn btn-primary">Add New User</button>

                      
            </div>
		<!--**********************************
            Content body end
        ***********************************-->
			
@endsection