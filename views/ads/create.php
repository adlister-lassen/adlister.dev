<!--Page for creating new advertisement listings-->
<?php 

$_SESSION['IS_LOGGED_IN'] = 'bob';
$_SESSION['LOGGED_IN_ID'] = 1;

?>


<div id="all">
    <!-- ==== Bread crumb for navigations ===== -->
    <div id="heading-breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h1>Create Your New Ad</h1>
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
                                <img src="http://placehold.it/450x450" alt="placeholder image" class="img-responsive">
                            </div>
                        </div>
                        <!-- /.col-sm-6 -->
                        <div class="col-sm-6">
                            <div class="box">
                                <form method="POST" action="/ads/create?submitted=true" id="createAd" data-validation data-required-message="This field is required">
                                    <div class="sizes">
                                        <h3>Product Information</h3>
                                    </div>
                                    <div class="form-group">
                                        <input value="<?= Input::get('name') ?>" type="text" class="form-control" id="name" name="name" placeholder="Product Name" data-required>
                                    </div>
                                    <div class="form-group">
                                        <textarea placeholder="Product Description" rows="8" class="form-control" id="description" name="description" data-required><?= Input::get('description') ?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <input value="<?= Input::get('price') ?>" type="text" class="form-control" id="price" name="price" placeholder="Product price $" data-required>
                                    </div>
                                    <div class="form-group">
                                        <input value="<?= Input::get('image_url') ?>" type="text" class="form-control" id="image_url" name="image_url" placeholder="Filepath/imagename.png" data-required>
                                    </div>
                                    <div class="sizes">
                                        <!-- ========== PULL AND POPULATE LOGGED IN USERNAME  ========== -->
                                        <h3>Sold by <?=$_SESSION['IS_LOGGED_IN']?></h3>
                                    </div>
                            </div>
                            <!-- /.box -->
                                    <div class="col-sm-6">
                                         <button type="submit" class="btn btn-template-main"><i class="fa fa-floppy-o"></i>  Save This Ad</button>
                                    </div> </form>

                                    <div class="col-sm-6 text-right">
                                        <a type="button" href="/users/account" class="btn"><i class="fa fa-ban"></i>  Cancel</a>
                                    </div>



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
                            <h3 class="panel-title">Create Your Ad</h3>
                        </div>
                        <!-- /.bar -->
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
