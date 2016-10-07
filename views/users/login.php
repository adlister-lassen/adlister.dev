    <section id="login">

        <div class="row">

            <div id="heading-breadcrumbs">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7">
                            <h1>Login</h1>
                        </div>
                        <div class="col-md-5">
                            <ul class="breadcrumb">
                                <li><a href="/">Home</a>
                                </li>
                                <li>Login</li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
</div>
            <div class="container">
                <div class="col-md-6 col-md-offset-3">
                    <div class="box">
                        <center>
                            <h2 class="text-uppercase">Login</h2>
                        </center>
                    </div>




                    <?php if (isset($_SESSION['ERROR_MESSAGE'])) : ?>
                <div class="alert alert-danger">
                    <p class="error"><?= $_SESSION['ERROR_MESSAGE']; ?></p>
                </div>
                <?php unset($_SESSION['ERROR_MESSAGE']); ?>
            <?php endif; ?>
            <?php if (isset($_SESSION['SUCCESS_MESSAGE'])) : ?>
                <div class="alert alert-success">
                    <p class="success"><?= $_SESSION['SUCCESS_MESSAGE']; ?></p>
                </div>
                <?php unset($_SESSION['SUCCESS_MESSAGE']); ?>
            <?php endif; ?>

                   

                   <form method="POST" action="/login" data-validation data-required-message="This field is required">

                        
                        <div class="form-group">
                            <input type="text" class="form-control" id="email" name="email" placeholder="Email" data-required>
                        </div>
                        
                        <div class="form-group">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password" data-required>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                 <button type="submit" class="btn btn-template-main"><i class="fa fa-sign-in"></i>Login</button>
                            </div> 
                    </form>
                            <div class="col-sm-6 text-right">
                                <a type="button" href="/signup" class="btn"><i class="fa fa-user-md"></i>Go To Signup</a>
                            </div>
                            </div>
                        </div>

            
        

    </section>

