<div class="col-xs-offset-2 col-md-offset-0 col-sm-offset-0"> 
<br>
<li><button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#myModal"><i class="fa fa-sign-in"></i> Login</button></li>

<a href="register"><li><button type="button" class="btn btn-primary btn-md "><i class="fa fa-lock"></i> Sign Up !</button></li></a>
</div>




     <div class="modal fade" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- header -->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" id="loginCloseButtonClick">&times;</button>
                    <h3 class="modal-title">Log In</h3>
                </div>

                <!-- body (form) -->
                <div class="modal-body">
                    <form role="form" action="login" method="post" >
                        <div class="form-group">
                            <input type="text" class="form-control" name="username" placeholder="Username" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">LOGIN</button>
                     </form>
                     <br>
                         Forgot <a href="recover?mode=username">Username</a> or <a href="recover?mode=password">password</a>?
                    </div>
            </div>
        </div>
    </div>