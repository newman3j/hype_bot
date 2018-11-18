<div id="header_top" class="header_top">
    <div class="container-fluid">
        <div class="d-flex">
            <a class="header-brand" href="/"><img src="<?php echo SITE_DIR; ?>assets/theme/assets/images/logo.svg" class="header-brand-img" alt="buzzerlogo"></a>
            <div class="top_menu d-flex order-lg-2">
                <div class="hleft">
                    <div class="nav-item d-none d-md-flex">
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
                            <a class="dropdown-item" href="#" id="log_out"><i class="dropdown-icon fe fe-log-out"></i> Выйти</a>
                        </div>
                    </div>

                </div>
            </div>
            <a href="#" class="btn btn-sm btn-primary header-toggler d-xl-none ml-3 ml-xl-0" data-toggle="collapse" data-target="#headerMenuCollapse"><span class="header-toggler-icon"></span></a>
        </div>
    </div>
</div>