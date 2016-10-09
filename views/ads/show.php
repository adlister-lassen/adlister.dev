<!--Page for single advertisement -->
<div id="all">

<!-- ==== Bread crumb for navigations ===== -->
	<div id="heading-breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h1><?= $ad->name;?></h1>
                </div>
                <div class="col-md-5">
                    <ul class="breadcrumb">
                        <li><a href="/">Home</a>
                        </li>
                        <li><a href="/ads">All Items</a>
                        </li>
                        <li><?= $ad->name;?></li>
                    </ul>

                </div>
            </div>
        </div>
	</div>
<!-- ==== Page contents ===== -->
    <div id="content">
        <div class="container">

            <div class="row">

	        <!-- *** LEFT COLUMN *** -->

            <div class="col-md-9">
	            <div class="row" id="productMain">
	                <div class="col-sm-6">
	                    <div id="mainImage">
	                        <img src="<?= $ad->image_url;?>" alt="" class="img-responsive">
	                    </div>
	                </div>
	                    <div class="col-sm-6">
	                        <div class="box">
                                <div class="sizes">

                                    <h3>Product Details</h3>

                                    <p><?=$ad->description;?></p>

                                </div>

                                <p class="price">$ <?=$ad->price;?></p>
                                <br>
                                <div class="heading">
                                    <h3>Sold by <?=$seller->username?></h3>
                                </div>
	                        </div>
	                    </div>
                        <!-- /.col-md-6 -->
	            </div>
                <!-- /.row-->

                <div class="box" id="tagline">

                        <?php
                                $jokes = array(
                                "Knock, knock----Who's there?----Nobel----Nobel who?  " . str_repeat('&nbsp;', 95) . "No bell, that's why I knocked!",
                                "Knock, knock----Who's There?----Ashe-----Ashe who?   " . str_repeat('&nbsp;', 95) . "Bless you!",
                                "Knock, knock----Who's there?----Leaf-----Leaf who?   " . str_repeat('&nbsp;', 95) . "Leaf me alone!", 
                                "Knock, knock----Who's There?----lettuce--lettuce who?" . str_repeat('&nbsp;', 95) . "Lettuce in and you'll find out!", 
                                "Knock, knock----Who's there?----Aaron----Aaron who?  " . str_repeat('&nbsp;', 95) . "Why Aaron you opening the door?", 
                                "Knock, knock----Who's There?----Tank-----Tank Who?   " . str_repeat('&nbsp;', 95) . "You're welcome!", 
                                "Knock, knock----Who's there?----Hawaii---Hawaii who? " . str_repeat('&nbsp;', 95) . "I'm fine, Hawaii you?",
                                "Knock, knock----Who's there?----Gray Z---Gray Z who? " . str_repeat('&nbsp;', 95) . "Gray Z mixed up kid.",
                                "Knock, knock----Who's There?----Who------Who Who?    " . str_repeat('&nbsp;', 95) . "Is there an owl in there?", 
                                "Knock, knock----Who's There?----Anita----Anita who?  " . str_repeat('&nbsp;', 95) . "Anita to borrow a pencil."
                                );
                                $arrayNo = rand(0,9);
                        ?>


                    <blockquote>
                        <p class="lead">Here's a joke just for you!</p>
                        <p class="text-muted lead"><em><?php echo $jokes[$arrayNo]; ?></em>
                        </p>
                    </blockquote>
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col-md-9 -->
            <!-- *** LEFT COLUMN END *** -->

            <!-- *** RIGHT COLUMN *** -->

                <div class="col-sm-3">
               
                    <div class="panel panel-default sidebar-menu">
                     <?php if (Auth::check()) : ?>
                        <div class="panel-heading">
                            <h3 class="panel-title" href="/users/account?id=<?= Auth::id(); ?>">My Account</h3>
                        </div>
                        <div class="panel-body">
                            <ul class="nav nav-pills nav-stacked">
                                <li>
                                    <a href="/users/edit"><i class="fa fa-user"></i>  Edit Profile</a>
                                </li>
                                <li>
                                    <a href="/ads/create"><i class="fa fa-plus"></i>  Create New Ad</a>
                                </li>
                                <li>
                                    <a href="/ads/edit?id=<?= $ad->id;?>"><i class="fa fa-pencil"></i>  Edit Ad</a>
                                </li>
                                <li>
                                    <a href="/"><i class="fa fa-sign-out"></i>  Logout</a>
                                </li>
                                </ul>
                                 <?php else : ?>
                                
                                
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
                <!-- /.col-md-3 -->

                    <!-- *** RIGHT COLUMN END *** -->

                </div>
                <!-- /.row -->

            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->
    </div>

