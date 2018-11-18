<div id="header_top" class="header_top">
    <div class="container-fluid">
        <div class="d-flex">
            <a class="header-brand" href="/"><img src="<?php echo SITE_DIR; ?>assets/theme/assets/images/logo.svg" class="header-brand-img" alt="buzzerlogo"></a>
            <div class="top_menu d-flex order-lg-2">
                <div class="hleft">
                    <div class="nav-item d-none d-md-flex">
                        <?php /*
                        <form class="input-icon input-group-sm  my-3 my-lg-0">
                            <input type="search" class="form-control header-search" placeholder="Search…" tabindex="1">
                            <div class="input-icon-addon"><i class="icon-magnifier"></i></div>
                        </form>
                        <a href="../doc/index.html" class="btn btn-link">Documentation</a>
                        <a href="#" class="btn btn-link mega_menu">Mega</a>
                        <a href="#" class="btn btn-link" target="_blank">Download</a>
                        */ ?>
                    </div>
                </div>
                <div class="hright d-flex">
                    <div class="dropdown d-flex">
<!--                        <a class="nav-link icon d-none d-md-flex" data-toggle="dropdown"><i class="icon-bell"></i><span class="nav-unread"></span></a>-->
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow vivify swoopInTop"></div>
                    </div>
                    <div class="dropdown">
                        <a href="#" class="nav-link pr-0 leading-none" data-toggle="dropdown">
                            <img class="avatar" src="<?php echo SITE_DIR; ?>assets/theme/assets/images/user.jpg" alt=""/>
                            <span class="ml-2 d-none d-lg-block">
                                    <span class="user_name"><?php echo registry::get('user')['user_name']; ?></span>
                                    <small class="text-muted d-block mt-1"><?php echo registry::get('user')['role_name']; ?></small>
                                </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow vivify flipInY">
                            <a class="dropdown-item" href="/profile/"><i class="dropdown-icon fe fe-user"></i> Профиль</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#" id="log_out"><i class="dropdown-icon fe fe-log-out"></i>Выйти</a>
                        </div>
                    </div>

                </div>
            </div>
            <a href="#" class="btn btn-sm btn-primary header-toggler d-xl-none ml-3 ml-xl-0" data-toggle="collapse" data-target="#headerMenuCollapse"><span class="header-toggler-icon"></span></a>
        </div>
    </div>
</div>

<div id="mega_menubar" class="mega_menubar">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Subscribe</h3>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <input type="text" value="" placeholder="Enter Name" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="text" value="" placeholder="Enter Email" class="form-control">
                            </div>
                            <button class="btn btn-primary">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Accordion</h3>
                    </div>
                    <div class="card-body">
                        <ul class="accordion2">
                            <li class="accordion-item is-active">
                                <h3 class="accordion-thumb"><span>Lorem ipsum</span></h3>
                                <p class="accordion-panel">
                                    Lorem ipsum dolor sit amet, elit. Placeat, quibusdam! Voluptate nobis
                                </p>
                            </li>

                            <li class="accordion-item">
                                <h3 class="accordion-thumb"><span>Dolor sit amet</span></h3>
                                <p class="accordion-panel">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing  Voluptate nobis
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Company</h3>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled links">
                            <li><a href="javascript:void(0);" title="" >Our Facts</a></li>
                            <li><a href="javascript:void(0);" title="" >Confidentiality</a></li>
                            <li><a href="javascript:void(0);" title="" >About Us</a></li>
                            <li><a href="javascript:void(0);" title="" >Testimonials</a></li>
                            <li><a href="javascript:void(0);" title="" >Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Image Gallery</h3>
                    </div>
                    <div class="card-body">
                        <div class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active">
                                    <img src="<?php echo SITE_DIR; ?>assets/theme/assets/images/gallery/1.jpg" class="img-fluid" alt="img" />
                                </div>
                                <div class="carousel-item">
                                    <img src="<?php echo SITE_DIR; ?>assets/theme/assets/images/gallery/2.jpg" class="img-fluid" alt="img" />
                                </div>
                                <div class="carousel-item">
                                    <img src="<?php echo SITE_DIR; ?>assets/theme/assets/images/gallery/3.jpg" class="img-fluid" alt="img" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="headerMenuCollapse" class="header sticky-top d-lg-flex collapse">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-4 col-lg-3 col-md-2 ml-auto">
                <form class="input-icon input-group-sm  my-3 my-lg-0">
                    <input type="search" class="form-control header-search" placeholder="Search&hellip;" tabindex="1">
                    <div class="input-icon-addon"><i class="icon-magnifier"></i></div>
                </form>
            </div>
            <div class="col-lg order-lg-first">
                <ul class="nav nav-tabs border-0 flex-column flex-lg-row">
                    <li class="nav-item"><a href="index.html" class="nav-link active"><i class="icon-speedometer"></i> Dashboard</a></li>
                    <li class="nav-item dropdown">
                        <a href="javascript:void(0)" class="nav-link" data-toggle="dropdown"><i class="icon-grid"></i> Application</a>
                        <div class="dropdown-menu dropdown-menu-arrow submenu_sm">
                            <a class="dropdown-item" href="app-email.html">Email</a>
                            <a class="dropdown-item" href="app-chat.html">Chat</a>
                            <a class="dropdown-item" href="app-calendar.html">Calendar</a>
                            <a class="dropdown-item" href="app-contact.html">Contact</a>
                            <a class="dropdown-item" href="app-taskboard.html">TaskBoard</a>
                            <a class="dropdown-item" href="blog-list.html">Blog List</a>
                            <a class="dropdown-item" href="blog-grid.html">Blog Grid</a>
                            <a class="dropdown-item" href="blog-list2.html">Blog v2</a>
                            <a class="dropdown-item" href="blog-detail.html">Blog Detail</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="javascript:void(0)" class="nav-link" data-toggle="dropdown"><i class="icon-bar-chart"></i> Charts</a>
                        <div class="dropdown-menu dropdown-menu-arrow">
                            <a class="dropdown-item" href="charts.html">Charts</a>
                            <a class="dropdown-item" href="charts-morris.html">Morris Chart</a>
                            <a class="dropdown-item" href="charts-flot.html">Flot Chart</a>
                            <a class="dropdown-item" href="charts-knob.html">JQuery Knob</a>
                            <a class="dropdown-item" href="charts-c3.html">C3 Chart</a>
                            <a class="dropdown-item" href="charts-sparkline.html">Sparkline Chart</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="javascript:void(0)" class="nav-link" data-toggle="dropdown"><i class="fe fe-box"></i> Widgets</a>
                        <div class="dropdown-menu dropdown-menu-arrow">
                            <a class="dropdown-item" href="w-cards.html">Cards design</a>
                            <a class="dropdown-item" href="w-statistics.html">Statistics</a>
                            <a class="dropdown-item" href="w-data.html">Data</a>
                            <a class="dropdown-item" href="w-social.html">Social</a>
                            <a class="dropdown-item" href="w-store.html">eCommerce</a>
                            <a class="dropdown-item" href="w-other.html">Widgets Mix</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="javascript:void(0)" class="nav-link" data-toggle="dropdown"><i class="fe fe-check-square"></i> Forms</a>
                        <div class="dropdown-menu dropdown-menu-arrow">
                            <a class="dropdown-item" href="form-elements.html">Basic Elements</a>
                            <a class="dropdown-item" href="form-advanced.html">Advanced Elements</a>
                            <a class="dropdown-item" href="form-validation.html">Form Validation</a>
                            <a class="dropdown-item" href="form-wizard.html">Form Wizard</a>
                            <a class="dropdown-item" href="form-summernote.html">Summernote</a>
                            <a class="dropdown-item" href="form-markdown.html">Markdown</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="javascript:void(0)" class="nav-link" data-toggle="dropdown"><i class="fe fe-check-square"></i> Tables</a>
                        <div class="dropdown-menu dropdown-menu-arrow">
                            <a class="dropdown-item" href="table-basic.html">Table Example</a>
                            <a class="dropdown-item" href="table-normal.html">Table Normal</a>
                            <a class="dropdown-item" href="table-datatable.html">Jquery Datatable</a>
                            <a class="dropdown-item" href="table-editable.html">Editable</a>
                            <a class="dropdown-item" href="table-color.html">Table Color</a>
                            <a class="dropdown-item" href="table-filter.html">Table Filter</a>

                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="javascript:void(0)" class="nav-link" data-toggle="dropdown"><i class="fe fe-file"></i> Pages</a>
                        <div class="dropdown-menu dropdown-menu-arrow submenu_sm">
                            <a class="dropdown-item" href="page-empty.html">Empty page</a>
                            <a class="dropdown-item" href="page-profile.html">Profile</a>
                            <a class="dropdown-item" href="page-timeline.html">Timeline</a>
                            <a class="dropdown-item" href="page-pricing.html">Pricing cards</a>
                            <a class="dropdown-item" href="page-invoices.html">Invoices</a>
                            <a class="dropdown-item" href="page-search.html">Search Results</a>
                            <a class="dropdown-item" href="page-testimonials.html">Testimonials</a>
                            <a class="dropdown-item" href="page-maps.html">Maps</a>
                            <a class="dropdown-item" href="page-icons.html">Icons</a>
                            <a class="dropdown-item" href="page-carousel.html">Carousel</a>
                            <a class="dropdown-item" href="page-gallery.html">Gallery</a>
                            <a class="dropdown-item" href="page-userslist.html">Users List</a>
                            <a class="dropdown-item" href="page-lookup.html">Lookup</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="javascript:void(0)" class="nav-link" data-toggle="dropdown"><i class="icon-lock"></i> Auth</a>
                        <div class="dropdown-menu dropdown-menu-arrow">
                            <a class="dropdown-item" href="login.html">Login</a>
                            <a class="dropdown-item" href="register.html">Register</a>
                            <a class="dropdown-item" href="forgot-password.html">Forgot password</a>
                            <a class="dropdown-item" href="400.html">400 error</a>
                            <a class="dropdown-item" href="401.html">401 error</a>
                            <a class="dropdown-item" href="403.html">403 error</a>
                            <a class="dropdown-item" href="404.html">404 error</a>
                            <a class="dropdown-item" href="500.html">500 error</a>
                            <a class="dropdown-item" href="503.html">503 error</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>