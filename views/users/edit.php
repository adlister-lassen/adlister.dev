<section id="edit">

        <div class="row">

            <div id="heading-breadcrumbs">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7">
                            <h1>Edit Profile</h1>
                        </div>
                        <div class="col-md-5">
                            <ul class="breadcrumb">
                                <li><a href="/">Home</a>
                                </li>
                                <li>Edit Profile</li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="box">
                        <center>
                            <h2 class="text-uppercase">Edit Your Profile</h2>
                        </center>
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-md-4 col-md-offset-4 box-simple box-white">
                    <div class="icon">
                        <i class="fa fa-user"></i>
                    </div>
                    <h3><?=$user->name?></h3>
                    <p>
                        <?= $user->email; ?>
                        <?= $user->username; ?>
                    </p>
                </div>
                </div>




		
			<div class="row">
			<div class="col-md-6 col-md-offset-3">

				<p class="text-muted lead">Please provide the information below to update your profile.</p>
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

				<form method="POST" action="/users/edit?id=<?= $user->id; ?>" data-validation data-required-message="This field is required">

					<div class="form-group">
					    <input type="text" class="form-control" id="name" name="name" placeholder="Full Name" value="<?= $user->name; ?>" data-required>
					</div>
					<div class="form-group">
					    <input type="text" class="form-control" id="email" name="email" placeholder="Email" value="<?= $user->email; ?>" data-required>
					</div>
					<div class="form-group">
					    <input type="text" class="form-control" id="username" name="username" placeholder="Username" value="<?= $user->username; ?>" data-required>
					</div>
					<div class="row">
					<div class="col-sm-6">
					 <button type="submit" class="btn btn-template-main"><i class="fa fa-sign-in"></i>Update Profile</button>
					 </div>
				</form>
				 <div class="col-sm-6 text-right">
				<a type="button" href="/users/account" class="btn"><i class="fa fa-ban"></i>Cancel</a>
				</div>
				</div>

</div>
			</div>

		</div>


	</section>

</div>