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
                    <h3><?=$_SESSION['IS_LOGGED_IN']?></h3>
                    <p>
                        <?=$_SESSION[ 'LOGGED_IN_ID']?>
                    </p>
                </div>


                <div class="col-md-2 col-md-offset-5">


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
                                        <th>Details</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>item1</th>
                                        <td>150</td>
                                        <td>1/1/2016</td>
                                        <td>description goes here</td>
                                        <td><a href="/ads/show" class="btn btn-template-main btn-sm">View</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>item2</th>
                                        <td>150</td>
                                        <td>1/1/2016</td>
                                        <td>description goes here</td>
                                        <td><a href="/ads/show" class="btn btn-template-main btn-sm">View</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>item3</th>
                                        <td>150</td>
                                        <td>1/1/2016</td>
                                        <td>description goes here</td>
                                        <td><a href="/ads/show" class="btn btn-template-main btn-sm">View</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>item4</th>
                                        <td>150</td>
                                        <td>1/1/2016</td>
                                        <td>description goes here</td>
                                        <td><a href="/ads/show" class="btn btn-template-main btn-sm">View</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>item5</th>
                                        <td>150</td>
                                        <td>1/1/2016</td>
                                        <td>description goes here</td>
                                        <td><a href="/ads/show" class="btn btn-template-main btn-sm">View</a>
                                        </td>
                                    </tr>
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

