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
                    <blockquote>
                        <p><em>Say something witty • revolving knock knock joke</em>
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
                        <div class="panel-heading">
                            <h3 class="panel-title">My Account</h3>
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
                                    <a href="/ads/edit"><i class="fa fa-pencil"></i>  Edit Ad</a>
                                </li>
                                <li>
                                    <a href="/"><i class="fa fa-sign-out"></i>  Logout</a>
                                </li>
                            </ul>
                        </div>
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

