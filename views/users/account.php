<section id="account">

    <div id="heading-breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h1>My Account</h1>
                </div>
                <div class="col-md-5">
                    <ul class="breadcrumb">
                        <li><a href="/">Home</a>
                        </li>
                        <li>My Account</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div id="content">
        <div class="container">

            <p class="text-muted lead">User Profile</p>

            <div class="row">

                <div class="col-md-4 box-simple box-white">
                    <div class="icon">
                        <i class="fa fa-user"></i>
                    </div>
                    <h3><?=$user->name?></h3>
                    <p class="text-muted lead">Username: <?= $user->username; ?></p>
                    <p class="text-muted lead">Email: <?= $user->email; ?></p>

                </div>



                <div class="col-md-2 col-md-offset-5">


                    <div class="panel panel-default sidebar-menu">
                        <div class="panel-heading">
                            <h3 class="panel-title">My Account</h3>
                        </div>
                        <div class="panel-body">
                            <ul class="nav nav-pills nav-stacked">
                                <?php if($user->id == Auth::id()) : ?>
                                    <li>
                                        <a href="/users/edit"><i class="fa fa-user"></i>  Edit Profile</a>
                                    </li>
                                    <li>
                                        <a href="/ads/create?id=<?=$user->id?>"><i class="fa fa-plus"></i>  Create New Ad</a>
                                    </li>
                                    <li>
                                        <a href="/logout"><i class="fa fa-sign-out"></i>  Logout</a>
                                    </li>
                                <?php endif; ?>
                            </ul>

                        </div>
                    </div>

                </div>
            </div>

            <p class="text-muted lead">My Ads</p>
            <div class="row">
                <div class="col-md-9" id="customer-orders">

                    <div class="box">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th>Date Created</th>
                                        <th>Item Views</th>
                                        <th>View Ad</th>
                                        <th>Edit Ad</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($adsToDisplay->attributes as $ad): ?>
                                    <tr>
                                        <th><?=$ad['name'];?></th>
                                        <td>$ <?=$ad['price'];?></td>
                                        <td><?=$ad['date_created'];?></td>
                                        <td><?=$ad['ad_views'];?></td>
                                        <td><a href="/ads/show?id=<?=$ad['id'];?>" class="btn btn-template-main btn-sm">View</a></td>
                                        <td><a href="/ads/edit?id=<?=$ad['id'];?>" class="btn btn-template-main btn-sm">Edit</a>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        
                        <!-- /.table-responsive -->
                    </div>
                    <!-- /.box -->
                </div>
            </div>
        </div>
    </div>

</section>
