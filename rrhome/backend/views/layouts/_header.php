<header class="navbar navbar-inverse" role="banner">
    <div class="navbar-header">
        <button class="navbar-toggle" type="button" data-toggle="collapse" id="menu-toggler">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html"><img src="<?= Yii::$app->request->baseUrl ?>/img/admin-logo.png"></a>
    </div>
    <ul class="nav navbar-nav pull-right hidden-xs">
        <li class="hidden-xs hidden-sm">
            <input class="search" type="text" />
        </li>
        <li class="notification-dropdown hidden-xs hidden-sm">
            <a href="#" class="trigger">
                <i class="icon-warning-sign"></i>
                <span class="count">8</span>
            </a>
            <div class="pop-dialog">
                <div class="pointer right">
                    <div class="arrow"></div>
                    <div class="arrow_border"></div>
                </div>
                <div class="body">
                    <a href="#" class="close-icon"><i class="icon-remove-sign"></i></a>
                    <div class="notifications">
                        <h3>You have 6 new notifications</h3>
                        <a href="#" class="item">
                            <i class="icon-signin"></i> New user registration
                            <span class="time"><i class="icon-time"></i> 13 min.</span>
                        </a>
                        <a href="#" class="item">
                            <i class="icon-signin"></i> New user registration
                            <span class="time"><i class="icon-time"></i> 18 min.</span>
                        </a>
                        <a href="#" class="item">
                            <i class="icon-envelope-alt"></i> New message from Alejandra
                            <span class="time"><i class="icon-time"></i> 28 min.</span>
                        </a>
                        <a href="#" class="item">
                            <i class="icon-signin"></i> New user registration
                            <span class="time"><i class="icon-time"></i> 49 min.</span>
                        </a>
                        <a href="#" class="item">
                            <i class="icon-download-alt"></i> New order placed
                            <span class="time"><i class="icon-time"></i> 1 day.</span>
                        </a>
                        <div class="footer">
                            <a href="#" class="logout">View all notifications</a>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li class="notification-dropdown hidden-xs hidden-sm">
            <a href="#" class="trigger">
                <i class="icon-envelope"></i>
            </a>
            <div class="pop-dialog">
                <div class="pointer right">
                    <div class="arrow"></div>
                    <div class="arrow_border"></div>
                </div>
                <div class="body">
                    <a href="#" class="close-icon"><i class="icon-remove-sign"></i></a>
                    <div class="messages">
                        <a href="#" class="item">
                            <img src="img/contact-img.png" class="display" />
                            <div class="name">Alejandra Galván</div>
                            <div class="msg">
                                There are many variations of available, but the majority have suffered alterations.
                            </div>
                            <span class="time"><i class="icon-time"></i> 13 min.</span>
                        </a>
                        <a href="#" class="item">
                            <img src="img/contact-img2.png" class="display" />
                            <div class="name">Alejandra Galván</div>
                            <div class="msg">
                                There are many variations of available, have suffered alterations.
                            </div>
                            <span class="time"><i class="icon-time"></i> 26 min.</span>
                        </a>
                        <a href="#" class="item last">
                            <img src="img/contact-img.png" class="display" />
                            <div class="name">Alejandra Galván</div>
                            <div class="msg">
                                There are many variations of available, but the majority have suffered alterations.
                            </div>
                            <span class="time"><i class="icon-time"></i> 48 min.</span>
                        </a>
                        <div class="footer">
                            <a href="#" class="logout">View all messages</a>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li class="settings hidden-xs hidden-sm">
            <a href="<?= Yii::$app->request->baseUrl ?>/site/setting" role="button">
                <i class="icon-cog"></i>
            </a>
        </li>
        <li class="settings hidden-xs hidden-sm">
            <a href="<?= Yii::$app->request->baseUrl ?>/site/logout" role="button">
                <i class="icon-share-alt"></i>
            </a>
        </li>
    </ul>
</header>
<!-- end navbar -->

<!-- sidebar -->
<div id="sidebar-nav">
    <ul id="dashboard-menu">
        <li class="active">
            <div class="pointer">
                <div class="arrow"></div>
                <div class="arrow_border"></div>
            </div>
            <a href="index.html">
                <i class="icon-home"></i>
                <span>Home</span>
            </a>
        </li>
        <li>
            <a href="chart-showcase.html">
                <i class="icon-signal"></i>
                <span>Charts</span>
            </a>
        </li>
        <li>
            <a class="dropdown-toggle" href="#">
                <i class="icon-group"></i>
                <span>Users</span>
                <i class="icon-chevron-down"></i>
            </a>
            <ul class="submenu">
                <li><a href="user-list.html">User list</a></li>
                <li><a href="new-user.html">New user form</a></li>
                <li><a href="user-profile.html">User profile</a></li>
            </ul>
        </li>
        <li>
            <a class="dropdown-toggle" href="#">
                <i class="icon-edit"></i>
                <span>Forms</span>
                <i class="icon-chevron-down"></i>
            </a>
            <ul class="submenu">
                <li><a href="form-showcase.html">Form showcase</a></li>
                <li><a href="form-wizard.html">Form wizard</a></li>
            </ul>
        </li>
        <li>
            <a href="gallery.html">
                <i class="icon-picture"></i>
                <span>Gallery</span>
            </a>
        </li>
        <li>
            <a href="calendar.html">
                <i class="icon-calendar-empty"></i>
                <span>Calendar</span>
            </a>
        </li>
        <li>
            <a class="dropdown-toggle" href="tables.html">
                <i class="icon-th-large"></i>
                <span>Tables</span>
                <i class="icon-chevron-down"></i>
            </a>
            <ul class="submenu">
                <li><a href="tables.html">Custom tables</a></li>
                <li><a href="datatables.html">DataTables</a></li>
            </ul>
        </li>
        <li>
            <a class="dropdown-toggle ui-elements" href="#">
                <i class="icon-code-fork"></i>
                <span>UI Elements</span>
                <i class="icon-chevron-down"></i>
            </a>
            <ul class="submenu">
                <li><a href="ui-elements.html">UI Elements</a></li>
                <li><a href="icons.html">Icons</a></li>
            </ul>
        </li>
        <li>
            <a href="personal-info.html">
                <i class="icon-cog"></i>
                <span>My Info</span>
            </a>
        </li>
        <li>
            <a class="dropdown-toggle" href="#">
                <i class="icon-share-alt"></i>
                <span>Extras</span>
                <i class="icon-chevron-down"></i>
            </a>
            <ul class="submenu">
                <li><a href="code-editor.html">Code editor</a></li>
                <li><a href="grids.html">Grids</a></li>
                <li><a href="signin.html">Sign in</a></li>
                <li><a href="signup.html">Sign up</a></li>
            </ul>
        </li>
    </ul>
</div>
<!-- end sidebar -->
