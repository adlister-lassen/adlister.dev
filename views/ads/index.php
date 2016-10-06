<!--Page for an index of advertisements-->
<div id="all">

<!-- ==== Bread crumb for navigations ===== -->
    <div id="heading-breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h1>Items For Sale</h1>
                </div>
                <div class="col-md-5">
                    <ul class="breadcrumb">
                        <li><a href="/">Home</a>
                        </li>
                        <li>All Items</li>
                    </ul>

                </div>
            </div>
        </div>
    </div>

<!-- ==== Page contents ===== -->
    <div id="content">
        <div class="container">
            <p class="text-muted lead text-center">You'll gag on these.</p>

            <div class="row products">
                <?php foreach($adsToDisplay as $adArray): ?>
                    <?php foreach ($adArray as $ad) : ?>
                    <div class="col-md-3 col-sm-4">
                        <div class="product">
                            <div class="image">
                                <a href="/ads/show?id=".<?=$ad['id'];?>.'"'>
                                    <img src="<?=$ad['image_url'];?>" alt="" class="img-responsive image1">
                                </a>
                            </div>
                            <!-- /.image -->
                            <div class="text">
                                <h3><a href="/ads/show?id=<?=$ad['name'];?>"</a></h3>
                                <p class="price">$<?=$ad['price'];?></p>
                                <p class="buttons">
                                    <a href="/ads/show?id=1" class="btn btn-default">View detail</a>
                                </p>
                            </div>
                            <!-- /.text -->
                        </div>
                        <!-- /.product -->
                    </div>
                    <?php endforeach; ?>
                <?php endforeach; ?>
            <!-- /end of products -->

            <div class="col-sm-12">

                <div class="pages">

                    <ul class="pagination">
                        <li><a href="#">&laquo;</a>
                        </li>
                        <li class="active"><a href="#">1</a>
                        </li>
                        <li><a href="#">2</a>
                        </li>
                        <li><a href="#">3</a>
                        </li>
                        <li><a href="#">4</a>
                        </li>
                        <li><a href="#">5</a>
                        </li>
                        <li><a href="#">&raquo;</a>
                        </li>
                    </ul>
                </div>

            </div>
            <!-- /.col-sm-12 -->

        </div>
        <!-- /.container -->
</div>
<!-- /#content -->


