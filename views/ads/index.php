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
                    <div class='col-md-4'>
                        <div class="product">
                            <div class="row image">
                                <a href="/ads/show?id=<?=$adArray['id'];?>">
                                    <img src="<?=$adArray['image_url'];?>" alt="" class="img-responsive image1">
                                </a>
                            </div>
                            <!-- /.image -->
                            <div class="text row">
                                <h3><a href="/ads/show?id=<?=$adArray['id'];?>"</a><?=$adArray['name'];?></h3>
                                <p class="price">$<?=$adArray['price'];?></p>
                                <p>
                                    <a href="/ads/show?id=<?=$adArray['id'];?>" class="btn btn-default">View detail</a>
                                </p>
                            </div>
                            <!-- /.text -->
                        </div>
                        <!-- /.product -->
                    </div>
                <?php endforeach; ?>
            <!-- /end of products -->

            <div class="col-sm-12">

                <div class="pages">

                    <ul class="pagination">
                        <li>
                          <a href="/ads?page=<?= $page-1; ?>" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                          </a>
                        </li>
                            <?php for ($i=1; $i <= $max_page; $i++): ?>
                                <li><a href="/ads?page=<?= $i; ?>"><?= $i; ?></a></li>
                            <?php endfor; ?>
                        <li>
                            <a href="/ads?page=<?= $page+1; ?>" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </div>

            </div>
            <!-- /.col-sm-12 -->

        </div>
        <!-- /.container -->
</div>
<!-- /#content -->


