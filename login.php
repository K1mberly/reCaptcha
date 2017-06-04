<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="css/login.css" rel="stylesheet" type="text/css">
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <link rel="icon" type="image/png" href="img/favicon-sign-in.ico">
  </head>
  <body>
    <div class="login-wrap">
       <div class="login add-transparency">
        	<div class="logo">
                <strong>System Access</strong>
        	</div>
        	<!-- /Logo -->

        	<!-- Login Box -->
        	<div class="box">
                <div class="content">
                    <!-- Login Formular -->
                    <form class="form-vertical login-form" action="" method="post" autocomplete="on">
                        <!-- Title -->
                        <h3 class="form-title">Sign In to your Account</h3>


                        <!-- Error Message -->
                        <div class="alert fade in alert-danger" style="display: none;">
                                <i class="icon-remove close" data-dismiss="alert">
                                        <svg width="11" height="11" viewBox="0 0 1792 1792"><path d="M1490 1322q0 40-28 68l-136 136q-28 28-68 28t-68-28l-294-294-294 294q-28 28-68 28t-68-28l-136-136q-28-28-28-68t28-68l294-294-294-294q-28-28-28-68t28-68l136-136q28-28 68-28t68 28l294 294 294-294q28-28 68-28t68 28l136 136q28 28 28 68t-28 68l-294 294 294 294q28 28 28 68z"/></svg>
                                </i>
                                Enter your username and password.
                        </div>

                        <!-- Input Fields -->
                            <div class="form-group">
                                <div class="input-icon">
                                    <i class="fa fa-user">
                                        <svg fill="#d1d1d1" width="16" height="16" viewBox="0 0 1792 1792"><path d="M1600 1405q0 120-73 189.5t-194 69.5h-874q-121 0-194-69.5t-73-189.5q0-53 3.5-103.5t14-109 26.5-108.5 43-97.5 62-81 85.5-53.5 111.5-20q9 0 42 21.5t74.5 48 108 48 133.5 21.5 133.5-21.5 108-48 74.5-48 42-21.5q61 0 111.5 20t85.5 53.5 62 81 43 97.5 26.5 108.5 14 109 3.5 103.5zm-320-893q0 159-112.5 271.5t-271.5 112.5-271.5-112.5-112.5-271.5 112.5-271.5 271.5-112.5 271.5 112.5 112.5 271.5z"/></svg>
                                    </i>
                                    <input type="text" name="email" id="email" class="form-control" placeholder="email@udemy.com" autofocus="autofocus" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-icon">
                                    <i class="fa fa-lock">
                                        <svg fill="#d1d1d1" width="16" height="16" viewBox="0 0 1792 1792"><path d="M640 768h512v-192q0-106-75-181t-181-75-181 75-75 181v192zm832 96v576q0 40-28 68t-68 28h-960q-40 0-68-28t-28-68v-576q0-40 28-68t68-28h32v-192q0-184 132-316t316-132 316 132 132 316v192h32q40 0 68 28t28 68z"/></svg>
                                    </i>
                                    <input type="password" name="password" id="password" class="form-control" placeholder="Password" value="">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="g-recaptcha" data-sitekey="6LehHCMUAAAAADoM1CoXgzEJQs0hJUglNcOk8peG"></div>
                            </div>
                        <!-- /Input Fields -->

                            <!-- Form Actions -->
                            <div class="form-actions">
                                <button type="submit" class="submit btn btn-primary pull-right">
                                        Sign In
                                </button>
                            </div>
                    </form>


                </div>
        	</div>
            <div class="footer-login">
              Developed by <strong>Juan Pablo Donayre</strong>
            </div>
      </div>
    </div>
  </body>
</html>
