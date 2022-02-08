<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Laravel - Role - Permission</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">

    <link href="{{asset('backend/css/main.css')}}" rel="stylesheet">
</head>

<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-header fixed-sidebar">
        <div class="app-header header-shadow">
            <div class="app-header__logo">
                <div class="logo-src"></div>
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                <span>
                    <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                </button>
                </span>
            </div>
            <div class="app-header__content">
                <div class="app-header-right">
                    <div class="header-dots">
                  
                        <div class="dropdown">
                            <button type="button" data-toggle="dropdown" class="p-0 mr-2 btn btn-link">
                                <span class="icon-wrapper icon-wrapper-alt rounded-circle">
                                    <span class="icon-wrapper-bg bg-focus"></span>
                                    <span class="language-icon opacity-8 flag large DE"></span>
                                </span>
                            </button>
                            <div tabindex="-1" role="menu" aria-hidden="true" class="rm-pointers dropdown-menu dropdown-menu-right">
                                <div class="dropdown-menu-header">
                                    <div class="dropdown-menu-header-inner pt-4 pb-4 bg-focus">
                                        <div class="menu-header-image opacity-05" style="background-image: url('assets/images/dropdown-header/city2.jpg');"></div>
                                        <div class="menu-header-content text-center text-white">
                                            <h6 class="menu-header-subtitle mt-0"> Choose Language</h6>
                                        </div>
                                    </div>
                                </div>
                                <h6 tabindex="-1" class="dropdown-header"> Popular Languages</h6>
                                <button type="button" tabindex="0" class="dropdown-item">
                                    <span class="mr-3 opacity-8 flag large US"></span> USA
                                </button>
                                <button type="button" tabindex="0" class="dropdown-item">
                                    <span class="mr-3 opacity-8 flag large CH"></span> Switzerland
                                </button>
                                <button type="button" tabindex="0" class="dropdown-item">
                                    <span class="mr-3 opacity-8 flag large FR"></span> France
                                </button>
                                <button type="button" tabindex="0" class="dropdown-item">
                                    <span class="mr-3 opacity-8 flag large ES"></span>Spain
                                </button>
                                <div tabindex="-1" class="dropdown-divider"></div>
                                <h6 tabindex="-1" class="dropdown-header">Others</h6>
                                <button type="button" tabindex="0" class="dropdown-item active">
                                    <span class="mr-3 opacity-8 flag large DE"></span> Germany
                                </button>
                                <button type="button" tabindex="0" class="dropdown-item">
                                    <span class="mr-3 opacity-8 flag large IT"></span> Italy
                                </button>
                            </div>
                        </div>
                    
                    </div>

                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="btn-group">
                                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                            <img width="42" class="rounded-circle" src="{{asset('backend/images/avatars/1.jpg')}}" alt="">
                                            <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                        </a>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="rm-pointers dropdown-menu-lg dropdown-menu dropdown-menu-right">
                                            <div class="dropdown-menu-header">
                                                <div class="dropdown-menu-header-inner bg-info">
                                                    <div class="menu-header-image opacity-2" style="background-image: url('assets/images/dropdown-header/city3.jpg');"></div>
                                                    <div class="menu-header-content text-left">
                                                        <div class="widget-content p-0">
                                                            <div class="widget-content-wrapper">
                                                                <div class="widget-content-left mr-3">
                                                                    <img width="42" class="rounded-circle" src="assets/images/avatars/1.jpg" alt="">
                                                                </div>
                                                                <div class="widget-content-left">
                                                                    <div class="widget-heading">Alina Mcloughlin</div>
                                                                    <div class="widget-subheading opacity-8">A short profile description</div>
                                                                </div>
                                                                <div class="widget-content-right mr-2">
                                                                    <button class="btn-pill btn-shadow btn-shine btn btn-focus">Logout</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="scroll-area-xs" style="height: 150px;">
                                                <div class="scrollbar-container ps">
                                                    <ul class="nav flex-column">
                                                        <li class="nav-item-header nav-item">Activity</li>
                                                        <li class="nav-item">
                                                            <a href="javascript:void(0);" class="nav-link">Chat
                                                                <div class="ml-auto badge badge-pill badge-info">8</div>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="javascript:void(0);" class="nav-link">Recover Password</a>
                                                        </li>
                                                        <li class="nav-item-header nav-item">My Account
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="javascript:void(0);" class="nav-link">Settings
                                                                <div class="ml-auto badge badge-success">New</div>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="javascript:void(0);" class="nav-link">Messages
                                                                <div class="ml-auto badge badge-warning">512</div>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="javascript:void(0);" class="nav-link">Logs</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <ul class="nav flex-column">
                                                <li class="nav-item-divider mb-0 nav-item"></li>
                                            </ul>
                                            <div class="grid-menu grid-menu-2col">
                                                <div class="no-gutters row">
                                                    <div class="col-sm-6">
                                                        <button class="btn-icon-vertical btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-warning">
                                                            <i class="pe-7s-chat icon-gradient bg-amy-crisp btn-icon-wrapper mb-2"></i> Message Inbox
                                                        </button>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <button class="btn-icon-vertical btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-danger">
                                                            <i class="pe-7s-ticket icon-gradient bg-love-kiss btn-icon-wrapper mb-2"></i>
                                                            <b>Support Tickets</b>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <ul class="nav flex-column">
                                                <li class="nav-item-divider nav-item">
                                                </li>
                                                <li class="nav-item-btn text-center nav-item">
                                                    <button class="btn-wide btn btn-primary btn-sm"> Open Messages </button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content-left  ml-3 header-user-info">
                                    <div class="widget-heading"> Alina Mclourd </div>
                                    <div class="widget-subheading"> VP People Manager </div>
                                </div>
                                <div class="widget-content-right header-user-info ml-3">
                                    <button type="button" class="btn-shadow p-1 btn btn-primary btn-sm show-toastr-example">
                                        <i class="fa text-white fa-calendar pr-1 pl-1"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="app-main">
            <div class="app-sidebar sidebar-shadow">
                <div class="app-header__logo">
                    <div class="logo-src"></div>
                    <div class="header__pane ml-auto">
                        <div>
                            <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="app-header__mobile-menu">
                    <div>
                        <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
                <div class="app-header__menu">
                    <span>
                        <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                            <span class="btn-icon-wrapper">
                                <i class="fa fa-ellipsis-v fa-w-6"></i>
                            </span>
                    </button>
                    </span>
                </div>
                <div class="scrollbar-sidebar">
                    <div class="app-sidebar__inner">
                        <ul class="vertical-nav-menu">
                            <li class="app-sidebar__heading">Menu</li>
                            <li class="mm-active">
                                <a href="#">
                                    <i class="metismenu-icon pe-7s-rocket"></i>Dashboards
                                </a>
                            </li>
                            @can('create permission')
                            <li>
                                <a href="{{route('permission-list')}}">
                                    <i class="metismenu-icon pe-7s-browser"></i>Permission
                                    {{-- <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i> --}}
                                </a>
                                {{-- <ul>
                                    <li>
                                        <a href="pages-login.html">
                                            <i class="metismenu-icon"></i> Login
                                        </a>
                                    </li>
                                    <li>
                                        <a href="pages-login-boxed.html">
                                            <i class="metismenu-icon"></i>Login Boxed
                                        </a>
                                    </li>
                                    <li>
                                        <a href="pages-register.html">
                                            <i class="metismenu-icon"></i>Register
                                        </a>
                                    </li>
                                    <li>
                                        <a href="pages-register-boxed.html">
                                            <i class="metismenu-icon"></i>Register Boxed
                                        </a>
                                    </li>
                                    <li>
                                        <a href="pages-forgot-password.html">
                                            <i class="metismenu-icon"></i>Forgot Password
                                        </a>
                                    </li>
                                    <li>
                                        <a href="pages-forgot-password-boxed.html">
                                            <i class="metismenu-icon"></i>Forgot Password Boxed
                                        </a>
                                    </li>
                                </ul> --}}
                            </li>
                            @endcan

                            @can('create role')
                            <li>
                                <a href="{{route('role-list')}}">
                                    <i class="metismenu-icon pe-7s-plugin"></i>Roles
                                </a>
                            </li>
                            @endcan

                            {{-- @can('create user') --}}
                            <li>
                                <a href="{{route('users.index')}}">
                                    <i class="metismenu-icon pe-7s-users"></i>Users
                                </a>
                            </li>
                            {{-- @endcan --}}
                            
                            
                            
                            {{-- <li>
                                <a href="#">
                                    <i class="metismenu-icon pe-7s-plugin"></i>Applications
                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                </a>
                                <ul>
                                    <li>
                                        <a href="apps-mailbox.html">
                                            <i class="metismenu-icon"></i>Mailbox
                                        </a>
                                    </li>
                                    <li>
                                        <a href="apps-chat.html">
                                            <i class="metismenu-icon"></i>Chat
                                        </a>
                                    </li>
                                    <li>
                                        <a href="apps-faq-section.html">
                                            <i class="metismenu-icon"></i>FAQ Section
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="metismenu-icon"></i>Forums
                                            <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                        </a>
                                        <ul>
                                            <li>
                                                <a href="apps-forum-list.html">
                                                    <i class="metismenu-icon"></i>Forum Listing
                                                </a>
                                            </li>
                                            <li>
                                                <a href="apps-forum-threads.html">
                                                    <i class="metismenu-icon"></i>Forum Threads
                                                </a>
                                            </li>
                                            <li>
                                                <a href="apps-forum-discussion.html">
                                                    <i class="metismenu-icon"></i>Forum Discussion
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li> --}}
                            {{-- <li class="app-sidebar__heading">UI Components</li>
                            <li>
                                <a href="#">
                                    <i class="metismenu-icon pe-7s-diamond"></i> Elements
                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                </a>
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="metismenu-icon"></i> Buttons
                                            <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                        </a>
                                        <ul>
                                            <li>
                                                <a href="elements-buttons-standard.html">
                                                    <i class="metismenu-icon"></i>Standard
                                                </a>
                                            </li>
                                            <li>
                                                <a href="elements-buttons-pills.html">
                                                    <i class="metismenu-icon"></i>Pills
                                                </a>
                                            </li>
                                            <li>
                                                <a href="elements-buttons-square.html">
                                                    <i class="metismenu-icon"></i>Square
                                                </a>
                                            </li>
                                            <li>
                                                <a href="elements-buttons-shadow.html">
                                                    <i class="metismenu-icon"></i>Shadow
                                                </a>
                                            </li>
                                            <li>
                                                <a href="elements-buttons-icons.html">
                                                    <i class="metismenu-icon"></i>With Icons
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="elements-dropdowns.html">
                                            <i class="metismenu-icon"></i>Dropdowns
                                        </a>
                                    </li>
                                    <li>
                                        <a href="elements-icons.html">
                                            <i class="metismenu-icon"></i>Icons
                                        </a>
                                    </li>
                                    <li>
                                        <a href="elements-badges-labels.html">
                                            <i class="metismenu-icon"></i>Badges
                                        </a>
                                    </li>
                                    <li>
                                        <a href="elements-cards.html">
                                            <i class="metismenu-icon"></i>Cards
                                        </a>
                                    </li>
                                    <li>
                                        <a href="elements-loaders.html">
                                            <i class="metismenu-icon"></i>Loading Indicators
                                        </a>
                                    </li>
                                    <li>
                                        <a href="elements-list-group.html">
                                            <i class="metismenu-icon"></i>List Groups
                                        </a>
                                    </li>
                                    <li>
                                        <a href="elements-navigation.html">
                                            <i class="metismenu-icon"></i>Navigation Menus
                                        </a>
                                    </li>
                                    <li>
                                        <a href="elements-timelines.html">
                                            <i class="metismenu-icon"></i>Timeline
                                        </a>
                                    </li>
                                    <li>
                                        <a href="elements-utilities.html">
                                            <i class="metismenu-icon"></i>Utilities
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="metismenu-icon pe-7s-car"></i> Components
                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                </a>
                                <ul>
                                    <li>
                                        <a href="components-tabs.html">
                                            <i class="metismenu-icon"></i>Tabs
                                        </a>
                                    </li>
                                    <li>
                                        <a href="components-accordions.html">
                                            <i class="metismenu-icon"></i>Accordions
                                        </a>
                                    </li>
                                    <li>
                                        <a href="components-notifications.html">
                                            <i class="metismenu-icon"></i>Notifications
                                        </a>
                                    </li>
                                    <li>
                                        <a href="components-modals.html">
                                            <i class="metismenu-icon"></i>Modals
                                        </a>
                                    </li>
                                    <li>
                                        <a href="components-loading-blocks.html">
                                            <i class="metismenu-icon"></i>Loading Blockers
                                        </a>
                                    </li>
                                    <li>
                                        <a href="components-progress-bar.html">
                                            <i class="metismenu-icon"></i>Progress Bar
                                        </a>
                                    </li>
                                    <li>
                                        <a href="components-tooltips-popovers.html">
                                            <i class="metismenu-icon"> </i>Tooltips &amp; Popovers
                                        </a>
                                    </li>
                                    <li>
                                        <a href="components-carousel.html">
                                            <i class="metismenu-icon"></i>Carousel
                                        </a>
                                    </li>
                                    <li>
                                        <a href="components-calendar.html">
                                            <i class="metismenu-icon"></i>Calendar
                                        </a>
                                    </li>
                                    <li>
                                        <a href="components-pagination.html">
                                            <i class="metismenu-icon"></i>Pagination
                                        </a>
                                    </li>
                                    <li>
                                        <a href="components-count-up.html">
                                            <i class="metismenu-icon"></i>Count Up
                                        </a>
                                    </li>
                                    <li>
                                        <a href="components-scrollable-elements.html">
                                            <i class="metismenu-icon"></i>Scrollable
                                        </a>
                                    </li>
                                    <li>
                                        <a href="components-tree-view.html">
                                            <i class="metismenu-icon"></i>Tree View
                                        </a>
                                    </li>
                                    <li>
                                        <a href="components-maps.html">
                                            <i class="metismenu-icon"></i>Maps
                                        </a>
                                    </li>
                                    <li>
                                        <a href="components-ratings.html">
                                            <i class="metismenu-icon"></i>Ratings
                                        </a>
                                    </li>
                                    <li>
                                        <a href="components-image-crop.html">
                                            <i class="metismenu-icon"></i>Image Crop
                                        </a>
                                    </li>
                                    <li>
                                        <a href="components-guided-tours.html">
                                            <i class="metismenu-icon"></i>Guided Tours
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="metismenu-icon pe-7s-display2"></i> Tables
                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                </a>
                                <ul>
                                    <li>
                                        <a href="tables-data-tables.html">
                                            <i class="metismenu-icon"> </i>Data Tables
                                        </a>
                                    </li>
                                    <li>
                                        <a href="tables-regular.html">
                                            <i class="metismenu-icon"></i>Regular Tables
                                        </a>
                                    </li>
                                    <li>
                                        <a href="tables-grid.html">
                                            <i class="metismenu-icon"></i>Grid Tables
                                        </a>
                                    </li>
                                </ul>
                            </li>
                       
                            <li class="app-sidebar__heading">Forms</li>
                            <li>
                                <a href="#">
                                    <i class="metismenu-icon pe-7s-light"></i> Elements
                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                </a>
                                <ul>
                                    <li>
                                        <a href="forms-controls.html">
                                            <i class="metismenu-icon"></i>Controls
                                        </a>
                                    </li>
                                    <li>
                                        <a href="forms-layouts.html">
                                            <i class="metismenu-icon"></i>Layouts
                                        </a>
                                    </li>
                                    <li>
                                        <a href="forms-validation.html">
                                            <i class="metismenu-icon"></i>Validation
                                        </a>
                                    </li>
                                    <li>
                                        <a href="forms-wizard.html">
                                            <i class="metismenu-icon"></i>Wizard
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="metismenu-icon pe-7s-joy"></i> Widgets
                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                </a>
                                <ul>
                                    <li>
                                        <a href="forms-datepicker.html">
                                            <i class="metismenu-icon"></i>Datepicker
                                        </a>
                                    </li>
                                    <li>
                                        <a href="forms-range-slider.html">
                                            <i class="metismenu-icon"></i>Range Slider
                                        </a>
                                    </li>
                                    <li>
                                        <a href="forms-input-selects.html">
                                            <i class="metismenu-icon"></i>Input Selects
                                        </a>
                                    </li>
                                    <li>
                                        <a href="forms-toggle-switch.html">
                                            <i class="metismenu-icon"></i>Toggle Switch
                                        </a>
                                    </li>
                                    <li>
                                        <a href="forms-wysiwyg-editor.html">
                                            <i class="metismenu-icon"></i>WYSIWYG Editor
                                        </a>
                                    </li>
                                    <li>
                                        <a href="forms-input-mask.html">
                                            <i class="metismenu-icon"></i>Input Mask
                                        </a>
                                    </li>
                                    <li>
                                        <a href="forms-clipboard.html">
                                            <i class="metismenu-icon"></i>Clipboard
                                        </a>
                                    </li>
                                    <li>
                                        <a href="forms-textarea-autosize.html">
                                            <i class="metismenu-icon"></i>Textarea Autosize
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="app-sidebar__heading">Charts</li>
                            <li>
                                <a href="charts-chartjs.html">
                                    <i class="metismenu-icon pe-7s-graph2"></i>ChartJS
                                </a>
                            </li>
                            <li>
                                <a href="charts-apexcharts.html">
                                    <i class="metismenu-icon pe-7s-graph"></i>Apex Charts
                                </a>
                            </li>
                            <li>
                                <a href="charts-sparklines.html">
                                    <i class="metismenu-icon pe-7s-graph1"></i>Chart Sparklines
                                </a>
                            </li> --}}
                        </ul>
                    </div>
                </div>
            </div>
            <div class="app-main__outer">
                <div class="app-main__inner">
                   @yield('content')
                </div>
                <div class="app-wrapper-footer">
                    <div class="app-footer">
                        <div class="app-footer__inner">
                            <div class="app-footer-left">
                                
                            </div>
                            <div class="app-footer-right">
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="app-drawer-overlay d-none animated fadeIn"></div>
    <script type="text/javascript" src="{{asset('backend/scripts/main.js')}}"></script>
</body>
</html>