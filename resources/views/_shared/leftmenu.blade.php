<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="/" class="site_title"><i class="fa fa-paw"></i> <span>G-BladeOne</span></a>
        </div>

        <div class="clearfix"></div>

        <!-- menu profile quick info -->
        <div class="profile clearfix">
            <div class="profile_pic">
                <img src="{{ asset('images/img.jpg') }}" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
                <span>Welcome,</span>
                <h2>{{$username}}</h2>
            </div>
        </div>
        <!-- /menu profile quick info -->

        <br />

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                    <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="/dashboard1">Dashboard</a></li>
                            <li><a href="/dashboard2">Dashboard2</a></li>
                            <li><a href="/dashboard3">Dashboard3</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-edit"></i> Forms <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="/forms">General Form</a></li>
                            <li><a href="/forms/advanced">Advanced Components</a></li>
                            <li><a href="/forms/validation">Form Validation</a></li>
                            <li><a href="/forms/wizards">Form Wizard</a></li>
                            <li><a href="/forms/upload">Form Upload</a></li>
                            <li><a href="/forms/buttons">Form Buttons</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-desktop"></i> UI Elements <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="/elements">General Elements</a></li>
                            <li><a href="/elements/media_gallery">Media Gallery</a></li>
                            <li><a href="/elements/typography">Typography</a></li>
                            <li><a href="/elements/icons">Icons</a></li>
                            <li><a href="/elements/glyphicons">Glyphicons</a></li>
                            <li><a href="/elements/widgets">Widgets</a></li>
                            <li><a href="/elements/invoice">Invoice</a></li>
                            <li><a href="/elements/inbox">Inbox</a></li>
                            <li><a href="/elements/calendar">Calendar</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-table"></i> Tables <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="/tables">Tables</a></li>
                            <li><a href="/tables/dynamic">Table Dynamic</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-bar-chart-o"></i> Data Presentation <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="/presentation">Chart JS</a></li>
                            <li><a href="/presentation/chartjs2">Chart JS2</a></li>
                            <li><a href="/presentation/morisjs">Moris JS</a></li>
                            <li><a href="/presentation/echarts">ECharts</a></li>
                            <li><a href="/presentation/other_charts">Other Charts</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-clone"></i>Layouts <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="/layouts">Fixed Sidebar</a></li>
                            <li><a href="/layouts/fixed_footer">Fixed Footer</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="menu_section">
                <h3>Live On</h3>
                <ul class="nav side-menu">
                    <li><a><i class="fa fa-bug"></i> Additional Pages <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="/additional">E-commerce</a></li>
                            <li><a href="/additional/projects">Projects</a></li>
                            <li><a href="/additional/project_detail">Project Detail</a></li>
                            <li><a href="/additional/contacts">Contacts</a></li>
                            <li><a href="/additional/profile">Profile</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-windows"></i> Extras <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="/extras">403 Error</a></li>
                            <li><a href="/extras/page_404">404 Error</a></li>
                            <li><a href="/extras/page_500">500 Error</a></li>
                            <li><a href="/extras/plain_page">Plain Page</a></li>
                            <li><a href="/extras/login">Login Page</a></li>
                            <li><a href="/extras/pricing_tables">Pricing Tables</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-sitemap"></i> Multilevel Menu <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="#level1_1">Level One</a>
                            <li><a>Level One<span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li class="sub_menu"><a href="/level/level2">Level Two</a>
                                    </li>
                                    <li><a href="#level2_1">Level Two</a>
                                    </li>
                                    <li><a href="#level2_2">Level Two</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#level1_2">Level One</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="javascript:void(0)"><i class="fa fa-laptop"></i> Landing Page <span class="label label-success pull-right">Coming Soon</span></a></li>
                </ul>
            </div>

        </div>
        <!-- /sidebar menu -->

        <!-- /menu footer buttons -->
        <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.php">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
        </div>
        <!-- /menu footer buttons -->
    </div>
</div>