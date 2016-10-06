<!--Page for creating new advertisement listings-->
<div id="all">

<!-- ==== Bread crumb for navigations ===== -->
	<div id="heading-breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
					<form method="POST" id="createAd" action="" data-validation data-required-message="This field is required">
                		<div class="form-group">
						    <input type="text" class="form-control" id="name" name="name" placeholder="Product Name" data-required>
						</div>
					</form>
                </div>
                <div class="col-md-5">
                    <ul class="breadcrumb">
                        <li><a href="/">Home</a>
                        </li>
                        <li><a href="/ads">All Items</a>
                        </li>
                        <li>Create an Ad</li>
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
	                        <img src="http://placehold.it/450x450" alt="" class="img-responsive">
	                    </div>
	                </div>
	                <!-- /.col-sm-6 -->
	                    <div class="col-sm-6">
	                        <div class="box">
	                                <div class="sizes">

	                                    <h3>Product Details</h3>
	                                	<div class="form-group">
										    <textarea placeholder="Product Description" form="createAd" rows="8" class="form-control" id="description" name="description"  data-required></textarea>
										</div>
	                                </div>
	                                <div class="form-group">
						    			<input form="createAd" type="text" class="form-control" id="price" name="price" placeholder="Product price $" data-required>
									</div>
									<div class="heading">
                                        <h3>Sold by --seller name --</h3>
                                    </div>
	                        </div>
	                        <!-- /.box -->
	                    </div>
	                    <!-- /.col-sm-6 -->
	            </div>
                <div class="box" id="tagline">
                    <blockquote>
                        <p><em>Be sure to include all necessary details buyers will be interested in.</em>
                        </p>
                    </blockquote>
                </div>
            </div>
            <!-- /.col-md-9 -->
            <!-- *** LEFT COLUMN END *** -->

            <!-- *** RIGHT COLUMN *** -->

                <div class="col-sm-3">
                    <div class="panel panel-default sidebar-menu">
                        <div class="panel-heading">
                            <h3 class="panel-title">create your ad</h3>
                        </div>
                    </div>
                    <!-- /.bar -->
					<div class="bar background-dark-gray padding-horizontal margin-vertical">
                        <button type="button" class="features-buttons button btn btn-lg btn-template-transparent-primary">Save This Add</button>
                        <p style="margin-bottom:40px"></p>
                        <button type="button" class="btn btn-lg btn-template-transparent-primary">Delete This Add</button>
                    </div>
                </div>
                <!-- /.col-sm-3 -->

                    <!-- *** RIGHT COLUMN END *** -->

                </div>
                <!-- /.row -->

            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->
    </div>


