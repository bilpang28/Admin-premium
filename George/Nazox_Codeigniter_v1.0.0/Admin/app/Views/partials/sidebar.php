<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title"><?= lang('Files.Menu') ?></li>

                <li>
                    <a href="/" class="waves-effect">
                        <i class="ri-dashboard-line"></i><span class="badge rounded-pill bg-success float-end">3</span>
                        <span><?= lang('Files.Dashboard') ?></span>
                    </a>
                </li>

                <li>
                    <a href="calendar" class=" waves-effect">
                        <i class="ri-calendar-2-line"></i>
                        <span><?= lang('Files.Calendar') ?></span>
                    </a>
                </li>

                <li>
                    <a href="apps-chat" class=" waves-effect">
                        <i class="ri-chat-1-line"></i>
                        <span><?= lang('Files.Chat') ?></span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-store-2-line"></i>
                        <span><?= lang('Files.Ecommerce') ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="ecommerce-products"><?= lang('Files.Products') ?></a></li>
                        <li><a href="ecommerce-product-detail"><?= lang('Files.Product_Detail') ?></a></li>
                        <li><a href="ecommerce-orders"><?= lang('Files.Orders') ?></a></li>
                        <li><a href="ecommerce-customers"><?= lang('Files.Customers') ?></a></li>
                        <li><a href="ecommerce-cart"><?= lang('Files.Cart') ?></a></li>
                        <li><a href="ecommerce-checkout"><?= lang('Files.Checkout') ?></a></li>
                        <li><a href="ecommerce-shops"><?= lang('Files.Shops') ?></a></li>
                        <li><a href="ecommerce-add-product"><?= lang('Files.Add_Product') ?></a></li>
                    </ul>
                </li>
                
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-mail-send-line"></i>
                        <span><?= lang('Files.Email') ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="email-inbox"><?= lang('Files.Inbox') ?></a></li>
                        <li><a href="email-read"><?= lang('Files.Read_Email') ?></a></li>
                    </ul>
                </li>

                <li>
                    <a href="apps-kanban-board" class=" waves-effect">
                        <i class="ri-artboard-2-line"></i>
                        <span><?= lang('Files.Kanban_Board') ?></span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-layout-3-line"></i>
                        <span><?= lang('Files.Layouts') ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li>
                            <a href="javascript: void(0);" class="has-arrow"><?= lang('Files.Vertical') ?></a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="layouts-light-sidebar"><?= lang('Files.Light_Sidebar') ?></a></li>
                                <li><a href="layouts-compact-sidebar"><?= lang('Files.Compact_Sidebar') ?></a></li>
                                <li><a href="layouts-icon-sidebar"><?= lang('Files.Icon_Sidebar') ?></a></li>
                                <li><a href="layouts-boxed"><?= lang('Files.Boxed_Width') ?></a></li>
                                <li><a href="layouts-preloader"><?= lang('Files.Preloader') ?></a></li>
                                <li><a href="layouts-colored-sidebar"><?= lang('Files.Colored_Sidebar') ?></a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow"><?= lang('Files.Horizontal') ?></a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="layouts-horizontal"><?= lang('Files.Horizontal') ?></a></li>
                                <li><a href="layouts-hori-topbar-light"><?= lang('Files.Topbar_light') ?></a></li>
                                <li><a href="layouts-hori-boxed-width"><?= lang('Files.Boxed_width') ?></a></li>
                                <li><a href="layouts-hori-preloader"><?= lang('Files.Preloader') ?></a></li>
                                <li><a href="layouts-hori-colored-header"><?= lang('Files.Colored_Header') ?></a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li class="menu-title"><?= lang('Files.Pages') ?></li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-account-circle-line"></i>
                        <span><?= lang('Files.Authentication') ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="auth-login"><?= lang('Files.Login') ?></a></li>
                        <li><a href="auth-register"><?= lang('Files.Register') ?></a></li>
                        <li><a href="auth-recoverpw"><?= lang('Files.Recover_Password') ?></a></li>
                        <li><a href="auth-lock-screen"><?= lang('Files.Lock_Screen') ?></a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-profile-line"></i>
                        <span><?= lang('Files.Utility') ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="pages-starter"><?= lang('Files.Starter_Page') ?></a></li>
                        <li><a href="pages-maintenance"><?= lang('Files.Maintenance') ?></a></li>
                        <li><a href="pages-comingsoon"><?= lang('Files.Coming_Soon') ?></a></li>
                        <li><a href="pages-timeline"><?= lang('Files.Timeline') ?></a></li>
                        <li><a href="pages-faqs"><?= lang('Files.FAQs') ?></a></li>
                        <li><a href="pages-pricing"><?= lang('Files.Pricing') ?></a></li>
                        <li><a href="pages-404"><?= lang('Files.Error_404') ?></a></li>
                        <li><a href="pages-500"><?= lang('Files.Error_500') ?></a></li>
                    </ul>
                </li>

                <li class="menu-title"><?= lang('Files.Components') ?></li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-pencil-ruler-2-line"></i>
                        <span><?= lang('Files.UI_Elements') ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="ui-alerts"><?= lang('Files.Alerts') ?></a></li>
                        <li><a href="ui-buttons"><?= lang('Files.Buttons') ?></a></li>
                        <li><a href="ui-cards"><?= lang('Files.Cards') ?></a></li>
                        <li><a href="ui-carousel"><?= lang('Files.Carousel') ?></a></li>
                        <li><a href="ui-dropdowns"><?= lang('Files.Dropdowns') ?></a></li>
                        <li><a href="ui-grid"><?= lang('Files.Grid') ?></a></li>
                        <li><a href="ui-images"><?= lang('Files.Images') ?></a></li>
                        <li><a href="ui-lightbox"><?= lang('Files.Lightbox') ?></a></li>
                        <li><a href="ui-modals"><?= lang('Files.Modals') ?></a></li>
                        <li><a href="ui-rangeslider"><?= lang('Files.Range_Slider') ?></a></li>
                        <li><a href="ui-roundslider"><?= lang('Files.Round_Slider') ?></a></li>
                        <li><a href="ui-session-timeout"><?= lang('Files.Session_Timeout') ?></a></li>
                        <li><a href="ui-progressbars"><?= lang('Files.Progress_Bars') ?> </a></li>
                        <li><a href="ui-sweet-alert"><?= lang('Files.Sweetalert_2') ?> </a></li>
                        <li><a href="ui-tabs-accordions"><?= lang('Files.Tabs_and_Accordions') ?></a></li>
                        <li><a href="ui-typography"><?= lang('Files.Typography') ?></a></li>
                        <li><a href="ui-video"><?= lang('Files.Video') ?></a></li>
                        <li><a href="ui-general"><?= lang('Files.General') ?></a></li>
                        <li><a href="ui-rating"><?= lang('Files.Rating') ?></a></li>
                        <li><a href="ui-notifications"><?= lang('Files.Notifications') ?></a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="ri-eraser-fill"></i>
                        <span class="badge rounded-pill bg-danger float-end">6</span>
                        <span><?= lang('Files.Forms') ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="form-elements"><?= lang('Files.Elements') ?></a></li>
                        <li><a href="form-validation"><?= lang('Files.Validation') ?></a></li>
                        <li><a href="form-advanced"><?= lang('Files.Advanced_Plugins') ?></a></li>
                        <li><a href="form-editors"><?= lang('Files.Editors') ?></a></li>
                        <li><a href="form-uploads"><?= lang('Files.File_Upload') ?></a></li>
                        <li><a href="form-xeditable"><?= lang('Files.X_editable') ?></a></li>
                        <li><a href="form-wizard"><?= lang('Files.Wizard') ?></a></li>
                        <li><a href="form-mask"><?= lang('Files.Mask') ?></a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-table-2"></i>
                        <span><?= lang('Files.Tables') ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="tables-basic"><?= lang('Files.Basic_Tables') ?></a></li>
                        <li><a href="tables-datatable"><?= lang('Files.Data_Tables') ?></a></li>
                        <li><a href="tables-responsive"><?= lang('Files.Responsive_Table') ?></a></li>
                        <li><a href="tables-editable"><?= lang('Files.Editable_Table') ?></a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-bar-chart-line"></i>
                        <span><?= lang('Files.Charts') ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="charts-apex"><?= lang('Files.Apex_Charts') ?></a></li>
                        <li><a href="charts-chartjs"><?= lang('Files.Chartjs') ?></a></li>
                        <li><a href="charts-flot"><?= lang('Files.Flot') ?></a></li>
                        <li><a href="charts-knob"><?= lang('Files.Jquery_Knob') ?></a></li>
                        <li><a href="charts-sparkline"><?= lang('Files.Sparkline') ?></a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-brush-line"></i>
                        <span><?= lang('Files.Icons') ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="icons-remix"><?= lang('Files.Remix_Icons') ?></a></li>
                        <li><a href="icons-materialdesign"><?= lang('Files.Material_Design') ?></a></li>
                        <li><a href="icons-dripicons"><?= lang('Files.Dripicons') ?></a></li>
                        <li><a href="icons-fontawesome"><?= lang('Files.Font_awesome_5') ?></a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-map-pin-line"></i>
                        <span><?= lang('Files.Maps') ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="maps-google"><?= lang('Files.Google_Maps') ?></a></li>
                        <li><a href="maps-vector"><?= lang('Files.Vector_Maps') ?></a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-share-line"></i>
                        <span><?= lang('Files.Multi_Level') ?> </span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="javascript: void(0);"><?= lang('Files.Level_1_1') ?></a></li>
                        <li><a href="javascript: void(0);" class="has-arrow"><?= lang('Files.Level_1_2') ?></a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="javascript: void(0);"><?= lang('Files.Level_2_1') ?></a></li>
                                <li><a href="javascript: void(0);"><?= lang('Files.Level_2_2') ?></a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->