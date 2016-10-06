<div>

    <section id="signup">

        <div class="row">

            <div id="heading-breadcrumbs">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7">
                            <h1>Signup</h1>
                        </div>
                        <div class="col-md-5">
                            <ul class="breadcrumb">
                                <li><a href="index.html">Home</a>
                                </li>
                                <li>Signup</li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="col-md-8 col-md-offset-2">
                    <div class="box">
                        <center>
                            <h2 class="text-uppercase">Create new account</h2>
                        </center>
                    </div>




                    <?php if (isset($_SESSION[ 'ERROR_MESSAGE'])) : ?>
                    <div class="alert alert-danger">
                        <p class="error">
<<<<<<< HEAD
                            <?=$_SESSION[ 'ERROR_MESSAGE']; ?>
=======
                            <?= $_SESSION[ 'ERROR_MESSAGE']; ?>
>>>>>>> master
                        </p>
                    </div>
                    <?php unset($_SESSION[ 'ERROR_MESSAGE']); ?>
                    <?php endif; ?>
                    <?php if (isset($_SESSION[ 'SUCCESS_MESSAGE'])) : ?>
                    <div class="alert alert-success">
                        <p class="success">
<<<<<<< HEAD
                            <?=$_SESSION[ 'SUCCESS_MESSAGE']; ?>
=======
                            <?= $_SESSION[ 'SUCCESS_MESSAGE']; ?>
>>>>>>> master
                        </p>
                    </div>
                    <?php unset($_SESSION[ 'SUCCESS_MESSAGE']); ?>
                    <?php endif; ?>

                   

                   <form method="POST" action="" data-validation data-required-message="This field is required">

                        <div class="form-group">
                            <input type="text" class="form-control" id="name-login" name="name" placeholder="Full Name" data-required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="email-login" name="email" placeholder="Email" data-required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="username-login" name="username" placeholder="Username" data-required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="password-login" name="password" placeholder="Password" data-required>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <button type="submit" class="btn btn-template-main"><i class="fa fa-user-md"></i> Register</button>
                            </div>
                            <div class="col-sm-6 text-right">
                                <a type="button" href="/login" class="btn"><i class="fa fa-sign-in"></i>Go To Login</a>
                            </div>
                        </div>

                    </form>

                </div>

            </div>
        </div>

    </section>

</div>