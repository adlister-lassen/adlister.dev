<!--partial view for navbar-->

<header>
            <!-- *** NAVBAR ***
    _________________________________________________________ -->
            <div class="navbar-affixed-top" data-spy="affix" data-offset-top="200">
                <div class="navbar navbar-default yamm" role="navigation" id="navbar">
                    <div class="container">
                        <div class="navbar-header">
                            <a class="navbar-brand home" href="/">
                                <img src="/img/gaglister-logo.png" alt="Universal logo" class="hidden-xs hidden-sm">
                                <img src="/img/gaglister-logo.png" alt="Universal logo" class="visible-xs visible-sm"><span class="sr-only">Gaglister</span>
                            </a>
                            <div class="navbar-buttons">
                                <button type="button" class="navbar-toggle btn-template-main" data-toggle="collapse" data-target="#navigation">
                                    <span class="sr-only">Toggle navigation</span>
                                    <i class="fa fa-align-justify"></i>
                                </button>
                            </div>
                        </div>
                        <!--/.navbar-header -->
<!-- ADD id and inner HTML to highlight which page is class="active" -->

                        <div class="navbar-collapse collapse" id="navigation">
                            <ul class="nav navbar-nav navbar-right">
                                <li>
                                    <a href="/">Home</a>
                                </li>
                                <li>
                                    <a href="/ads">Items</a>
                                </li>
                               <?php if (Auth::check()) : ?>
                                <!-- DISPLAY if authorized user -->
                                <li>
                                    <a href="/users/account?id=<?= Auth::id(); ?>">Account</a>
                                </li>
                                <li>
                                    <a href="/ads/create">Create Ad</a>
                                </li>
                                <li>
                                    <a href="/logout">Logout</a>
                                </li>
                            <?php else : ?>
                               
                                <li>
                                    <a href="/login">Login</a>
                                </li>
                                <li>
                                    <a href="/signup">Signup</a>
                                </li>
                            <?php endif; ?>
                                
                            </ul>
                            <!-- ========== FULL WIDTH MEGAMENU END ================== -->
                        </div>
                        <!--/.nav-collapse -->
                        <div class="collapse clearfix" id="search">
                            <form class="navbar-form" role="search">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search">
                                    <span class="input-group-btn">

                    <button type="submit" class="btn btn-template-main"><i class="fa fa-search"></i></button>

                </span>
                                </div>
                            </form>
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                </div>
                <!-- /#navbar -->
            </div>
            <!-- *** NAVBAR END *** -->
        </header>