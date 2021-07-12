<!-- Outer Row -->
<div class="row vh-100 justify-content-center">

    <div class="col-xl-6 col-lg-6 col-md-9 align-self-center">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    
                    <div class="col-lg">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                            </div>
                            <form class="user" enctype="multipart/form-data" action="./actions/actions_login.php" method="POST">
                                <div class="form-group">
                                    <label for="inputEmail1">Email</label>
                                    <input type="text" name="inputEmail1" class="form-control shadow" id="inputEmail1" placeholder="Masukkan Email atau Username" aria-describedby="emailHelp" required="required">
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword1">Password</label>
                                    <input type="password" name="inputPassword1" class="form-control shadow" id="inputPassword1" placeholder="Masukkan Password" aria-describedby="passwordHelp" required="required">
                                </div>
                                <div class="row">
                                    <div class="col text-left">
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox mt-1">
                                                <input type="checkbox" class="custom-control-input inputCheckAgreement" id="inputCheckAgreement1" name="checkAgreement[]" value="Menyetujui Persyaratan">
                                                <label class="custom-control-label" for="inputCheckAgreement1">Remember Me</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col text-right">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary shadow" name="loginData" id="buttonData">Login</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.html">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="register.html">Create an Account!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

</div>