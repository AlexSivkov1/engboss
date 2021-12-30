@extends('admin.layouts.layout')

@section('content')


    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="index.html"><img class="main-logo" src="img/logo/logo.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse"
                                                    class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                                <i class="icon nalika-menu-task"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                        <div class="header-top-menu tabl-d-n">
                                            <div class="breadcome-heading">
                                                <form role="search" class="">
                                                    <input type="text" placeholder="Search..." class="form-control">
                                                    <a href=""><i class="fa fa-search"></i></a>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                                <li class="nav-item dropdown">
                                                    <a href="#" data-toggle="dropdown" role="button"
                                                       aria-expanded="false" class="nav-link dropdown-toggle"><i
                                                                class="icon nalika-mail nalika-chat-pro"
                                                                aria-hidden="true"></i><span
                                                                class="indicator-ms"></span></a>
                                                    <div role="menu"
                                                         class="author-message-top dropdown-menu animated zoomIn">
                                                        <div class="message-single-top">
                                                            <h1>Message</h1>
                                                        </div>
                                                        <ul class="message-menu mCustomScrollbar _mCS_2 mCS-autoHide mCS_no_scrollbar"
                                                            style="position: relative; overflow: visible;">
                                                            <div id="mCSB_2"
                                                                 class="mCustomScrollBox mCS-light-1 mCSB_vertical mCSB_outside"
                                                                 style="max-height: 325px;" tabindex="0">
                                                                <div id="mCSB_2_container"
                                                                     class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y"
                                                                     style="position:relative; top:0; left:0;"
                                                                     dir="ltr">
                                                                    <li>
                                                                        <a href="#">
                                                                            <div class="message-img">
                                                                                <img src="img/contact/1.jpg" alt=""
                                                                                     class="mCS_img_loaded">
                                                                            </div>
                                                                            <div class="message-content">
                                                                                <span class="message-date">16 Sept</span>
                                                                                <h2>Advanda Cro</h2>
                                                                                <p>Please done this project as soon
                                                                                    possible.</p>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">
                                                                            <div class="message-img">
                                                                                <img src="img/contact/4.jpg" alt=""
                                                                                     class="mCS_img_loaded">
                                                                            </div>
                                                                            <div class="message-content">
                                                                                <span class="message-date">16 Sept</span>
                                                                                <h2>Sulaiman din</h2>
                                                                                <p>Please done this project as soon
                                                                                    possible.</p>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">
                                                                            <div class="message-img">
                                                                                <img src="img/contact/3.jpg" alt=""
                                                                                     class="mCS_img_loaded">
                                                                            </div>
                                                                            <div class="message-content">
                                                                                <span class="message-date">16 Sept</span>
                                                                                <h2>Victor Jara</h2>
                                                                                <p>Please done this project as soon
                                                                                    possible.</p>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">
                                                                            <div class="message-img">
                                                                                <img src="img/contact/2.jpg" alt=""
                                                                                     class="mCS_img_loaded">
                                                                            </div>
                                                                            <div class="message-content">
                                                                                <span class="message-date">16 Sept</span>
                                                                                <h2>Victor Jara</h2>
                                                                                <p>Please done this project as soon
                                                                                    possible.</p>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                </div>
                                                            </div>
                                                            <div id="mCSB_2_scrollbar_vertical"
                                                                 class="mCSB_scrollTools mCSB_2_scrollbar mCS-light-1 mCSB_scrollTools_vertical"
                                                                 style="display: none;">
                                                                <div class="mCSB_draggerContainer">
                                                                    <div id="mCSB_2_dragger_vertical"
                                                                         class="mCSB_dragger"
                                                                         style="position: absolute; min-height: 30px; top: 0px;">
                                                                        <div class="mCSB_dragger_bar"
                                                                             style="line-height: 30px;"></div>
                                                                    </div>
                                                                    <div class="mCSB_draggerRail"></div>
                                                                </div>
                                                            </div>
                                                        </ul>
                                                        <div class="message-view">
                                                            <a href="#">View All Messages</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="nav-item"><a href="#" data-toggle="dropdown" role="button"
                                                                        aria-expanded="false"
                                                                        class="nav-link dropdown-toggle"><i
                                                                class="icon nalika-alarm" aria-hidden="true"></i><span
                                                                class="indicator-nt"></span></a>
                                                    <div role="menu"
                                                         class="notification-author dropdown-menu animated zoomIn">
                                                        <div class="notification-single-top">
                                                            <h1>Notifications</h1>
                                                        </div>
                                                        <ul class="notification-menu mCustomScrollbar _mCS_3 mCS-autoHide mCS_no_scrollbar"
                                                            style="position: relative; overflow: visible;">
                                                            <div id="mCSB_3"
                                                                 class="mCustomScrollBox mCS-light-1 mCSB_vertical mCSB_outside"
                                                                 style="max-height: 325px;" tabindex="0">
                                                                <div id="mCSB_3_container"
                                                                     class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y"
                                                                     style="position:relative; top:0; left:0;"
                                                                     dir="ltr">
                                                                    <li>
                                                                        <a href="#">
                                                                            <div class="notification-icon">
                                                                                <i class="icon nalika-tick"
                                                                                   aria-hidden="true"></i>
                                                                            </div>
                                                                            <div class="notification-content">
                                                                                <span class="notification-date">16 Sept</span>
                                                                                <h2>Advanda Cro</h2>
                                                                                <p>Please done this project as soon
                                                                                    possible.</p>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">
                                                                            <div class="notification-icon">
                                                                                <i class="icon nalika-cloud"
                                                                                   aria-hidden="true"></i>
                                                                            </div>
                                                                            <div class="notification-content">
                                                                                <span class="notification-date">16 Sept</span>
                                                                                <h2>Sulaiman din</h2>
                                                                                <p>Please done this project as soon
                                                                                    possible.</p>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">
                                                                            <div class="notification-icon">
                                                                                <i class="icon nalika-folder"
                                                                                   aria-hidden="true"></i>
                                                                            </div>
                                                                            <div class="notification-content">
                                                                                <span class="notification-date">16 Sept</span>
                                                                                <h2>Victor Jara</h2>
                                                                                <p>Please done this project as soon
                                                                                    possible.</p>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">
                                                                            <div class="notification-icon">
                                                                                <i class="icon nalika-bar-chart"
                                                                                   aria-hidden="true"></i>
                                                                            </div>
                                                                            <div class="notification-content">
                                                                                <span class="notification-date">16 Sept</span>
                                                                                <h2>Victor Jara</h2>
                                                                                <p>Please done this project as soon
                                                                                    possible.</p>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                </div>
                                                            </div>
                                                            <div id="mCSB_3_scrollbar_vertical"
                                                                 class="mCSB_scrollTools mCSB_3_scrollbar mCS-light-1 mCSB_scrollTools_vertical"
                                                                 style="display: none;">
                                                                <div class="mCSB_draggerContainer">
                                                                    <div id="mCSB_3_dragger_vertical"
                                                                         class="mCSB_dragger"
                                                                         style="position: absolute; min-height: 30px; top: 0px;">
                                                                        <div class="mCSB_dragger_bar"
                                                                             style="line-height: 30px;"></div>
                                                                    </div>
                                                                    <div class="mCSB_draggerRail"></div>
                                                                </div>
                                                            </div>
                                                        </ul>
                                                        <div class="notification-view">
                                                            <a href="#">View All Notification</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button"
                                                       aria-expanded="false" class="nav-link dropdown-toggle">
                                                        <i class="icon nalika-user nalika-user-rounded header-riht-inf"
                                                           aria-hidden="true"></i>
                                                        <span class="admin-name">Advanda Cro</span>
                                                        <i class="icon nalika-down-arrow nalika-angle-dw nalika-icon"></i>
                                                    </a>
                                                    <ul role="menu"
                                                        class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                        <li><a href="register.html"><span
                                                                        class="icon nalika-home author-log-ic"></span>
                                                                Register</a>
                                                        </li>
                                                        <li><a href="#"><span
                                                                        class="icon nalika-user author-log-ic"></span>
                                                                My Profile</a>
                                                        </li>
                                                        <li><a href="lock.html"><span
                                                                        class="icon nalika-diamond author-log-ic"></span>
                                                                Lock</a>
                                                        </li>
                                                        <li><a href="#"><span
                                                                        class="icon nalika-settings author-log-ic"></span>
                                                                Settings</a>
                                                        </li>
                                                        <li><a href="login.html"><span
                                                                        class="icon nalika-unlocked author-log-ic"></span>
                                                                Log Out</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="nav-item nav-setting-open"><a href="#" data-toggle="dropdown"
                                                                                         role="button"
                                                                                         aria-expanded="false"
                                                                                         class="nav-link dropdown-toggle"><i
                                                                class="icon nalika-menu-task"></i></a>

                                                    <div role="menu"
                                                         class="admintab-wrap menu-setting-wrap menu-setting-wrap-bg dropdown-menu animated zoomIn">
                                                        <ul class="nav nav-tabs custon-set-tab">
                                                            <li class="active"><a data-toggle="tab"
                                                                                  href="#Notes">News</a>
                                                            </li>
                                                            <li><a data-toggle="tab" href="#Projects">Activity</a>
                                                            </li>
                                                            <li><a data-toggle="tab" href="#Settings">Settings</a>
                                                            </li>
                                                        </ul>

                                                        <div class="tab-content custom-bdr-nt">
                                                            <div id="Notes" class="tab-pane fade in active">
                                                                <div class="notes-area-wrap">
                                                                    <div class="note-heading-indicate">
                                                                        <h2><i class="icon nalika-chat"></i> Latest News
                                                                        </h2>
                                                                        <p>You have 10 New News.</p>
                                                                    </div>
                                                                    <div class="notes-list-area notes-menu-scrollbar mCustomScrollbar _mCS_4 mCS-autoHide mCS_no_scrollbar"
                                                                         style="position: relative; overflow: visible;">
                                                                        <div id="mCSB_4"
                                                                             class="mCustomScrollBox mCS-light-1 mCSB_vertical mCSB_outside"
                                                                             style="max-height: 315px;" tabindex="0">
                                                                            <div id="mCSB_4_container"
                                                                                 class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y"
                                                                                 style="position:relative; top:0; left:0;"
                                                                                 dir="ltr">
                                                                                <ul class="notes-menu-list">
                                                                                    <li>
                                                                                        <a href="#">
                                                                                            <div class="notes-list-flow">
                                                                                                <div class="notes-img">
                                                                                                    <img src="img/contact/4.jpg"
                                                                                                         alt=""
                                                                                                         class="mCS_img_loaded">
                                                                                                </div>
                                                                                                <div class="notes-content">
                                                                                                    <p> The point of
                                                                                                        using Lorem
                                                                                                        Ipsum is that it
                                                                                                        has a
                                                                                                        more-or-less
                                                                                                        normal.</p>
                                                                                                    <span>Yesterday 2:45 pm</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="#">
                                                                                            <div class="notes-list-flow">
                                                                                                <div class="notes-img">
                                                                                                    <img src="img/contact/1.jpg"
                                                                                                         alt=""
                                                                                                         class="mCS_img_loaded">
                                                                                                </div>
                                                                                                <div class="notes-content">
                                                                                                    <p> The point of
                                                                                                        using Lorem
                                                                                                        Ipsum is that it
                                                                                                        has a
                                                                                                        more-or-less
                                                                                                        normal.</p>
                                                                                                    <span>Yesterday 2:45 pm</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="#">
                                                                                            <div class="notes-list-flow">
                                                                                                <div class="notes-img">
                                                                                                    <img src="img/contact/2.jpg"
                                                                                                         alt=""
                                                                                                         class="mCS_img_loaded">
                                                                                                </div>
                                                                                                <div class="notes-content">
                                                                                                    <p> The point of
                                                                                                        using Lorem
                                                                                                        Ipsum is that it
                                                                                                        has a
                                                                                                        more-or-less
                                                                                                        normal.</p>
                                                                                                    <span>Yesterday 2:45 pm</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="#">
                                                                                            <div class="notes-list-flow">
                                                                                                <div class="notes-img">
                                                                                                    <img src="img/contact/3.jpg"
                                                                                                         alt=""
                                                                                                         class="mCS_img_loaded">
                                                                                                </div>
                                                                                                <div class="notes-content">
                                                                                                    <p> The point of
                                                                                                        using Lorem
                                                                                                        Ipsum is that it
                                                                                                        has a
                                                                                                        more-or-less
                                                                                                        normal.</p>
                                                                                                    <span>Yesterday 2:45 pm</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="#">
                                                                                            <div class="notes-list-flow">
                                                                                                <div class="notes-img">
                                                                                                    <img src="img/contact/4.jpg"
                                                                                                         alt=""
                                                                                                         class="mCS_img_loaded">
                                                                                                </div>
                                                                                                <div class="notes-content">
                                                                                                    <p> The point of
                                                                                                        using Lorem
                                                                                                        Ipsum is that it
                                                                                                        has a
                                                                                                        more-or-less
                                                                                                        normal.</p>
                                                                                                    <span>Yesterday 2:45 pm</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="#">
                                                                                            <div class="notes-list-flow">
                                                                                                <div class="notes-img">
                                                                                                    <img src="img/contact/1.jpg"
                                                                                                         alt=""
                                                                                                         class="mCS_img_loaded">
                                                                                                </div>
                                                                                                <div class="notes-content">
                                                                                                    <p> The point of
                                                                                                        using Lorem
                                                                                                        Ipsum is that it
                                                                                                        has a
                                                                                                        more-or-less
                                                                                                        normal.</p>
                                                                                                    <span>Yesterday 2:45 pm</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="#">
                                                                                            <div class="notes-list-flow">
                                                                                                <div class="notes-img">
                                                                                                    <img src="img/contact/2.jpg"
                                                                                                         alt=""
                                                                                                         class="mCS_img_loaded">
                                                                                                </div>
                                                                                                <div class="notes-content">
                                                                                                    <p> The point of
                                                                                                        using Lorem
                                                                                                        Ipsum is that it
                                                                                                        has a
                                                                                                        more-or-less
                                                                                                        normal.</p>
                                                                                                    <span>Yesterday 2:45 pm</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="#">
                                                                                            <div class="notes-list-flow">
                                                                                                <div class="notes-img">
                                                                                                    <img src="img/contact/1.jpg"
                                                                                                         alt=""
                                                                                                         class="mCS_img_loaded">
                                                                                                </div>
                                                                                                <div class="notes-content">
                                                                                                    <p> The point of
                                                                                                        using Lorem
                                                                                                        Ipsum is that it
                                                                                                        has a
                                                                                                        more-or-less
                                                                                                        normal.</p>
                                                                                                    <span>Yesterday 2:45 pm</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="#">
                                                                                            <div class="notes-list-flow">
                                                                                                <div class="notes-img">
                                                                                                    <img src="img/contact/2.jpg"
                                                                                                         alt=""
                                                                                                         class="mCS_img_loaded">
                                                                                                </div>
                                                                                                <div class="notes-content">
                                                                                                    <p> The point of
                                                                                                        using Lorem
                                                                                                        Ipsum is that it
                                                                                                        has a
                                                                                                        more-or-less
                                                                                                        normal.</p>
                                                                                                    <span>Yesterday 2:45 pm</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="#">
                                                                                            <div class="notes-list-flow">
                                                                                                <div class="notes-img">
                                                                                                    <img src="img/contact/3.jpg"
                                                                                                         alt=""
                                                                                                         class="mCS_img_loaded">
                                                                                                </div>
                                                                                                <div class="notes-content">
                                                                                                    <p> The point of
                                                                                                        using Lorem
                                                                                                        Ipsum is that it
                                                                                                        has a
                                                                                                        more-or-less
                                                                                                        normal.</p>
                                                                                                    <span>Yesterday 2:45 pm</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                        <div id="mCSB_4_scrollbar_vertical"
                                                                             class="mCSB_scrollTools mCSB_4_scrollbar mCS-light-1 mCSB_scrollTools_vertical"
                                                                             style="display: none;">
                                                                            <div class="mCSB_draggerContainer">
                                                                                <div id="mCSB_4_dragger_vertical"
                                                                                     class="mCSB_dragger"
                                                                                     style="position: absolute; min-height: 30px; top: 0px;">
                                                                                    <div class="mCSB_dragger_bar"
                                                                                         style="line-height: 30px;"></div>
                                                                                </div>
                                                                                <div class="mCSB_draggerRail"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div id="Projects" class="tab-pane fade">
                                                                <div class="projects-settings-wrap">
                                                                    <div class="note-heading-indicate">
                                                                        <h2><i class="icon nalika-happiness"></i> Recent
                                                                            Activity</h2>
                                                                        <p> You have 20 Recent Activity.</p>
                                                                    </div>
                                                                    <div class="project-st-list-area project-st-menu-scrollbar mCustomScrollbar _mCS_5 mCS-autoHide mCS_no_scrollbar"
                                                                         style="position: relative; overflow: visible;">
                                                                        <div id="mCSB_5"
                                                                             class="mCustomScrollBox mCS-light-1 mCSB_vertical mCSB_outside"
                                                                             style="max-height: 315px;" tabindex="0">
                                                                            <div id="mCSB_5_container"
                                                                                 class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y"
                                                                                 style="position:relative; top:0; left:0;"
                                                                                 dir="ltr">
                                                                                <ul class="projects-st-menu-list">
                                                                                    <li>
                                                                                        <a href="#">
                                                                                            <div class="project-list-flow">
                                                                                                <div class="projects-st-heading">
                                                                                                    <h2>New User
                                                                                                        Registered</h2>
                                                                                                    <p> The point of
                                                                                                        using Lorem
                                                                                                        Ipsum is that it
                                                                                                        has a more or
                                                                                                        less normal.</p>
                                                                                                    <span class="project-st-time">1 hours ago</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="#">
                                                                                            <div class="project-list-flow">
                                                                                                <div class="projects-st-heading">
                                                                                                    <h2>New Order
                                                                                                        Received</h2>
                                                                                                    <p> The point of
                                                                                                        using Lorem
                                                                                                        Ipsum is that it
                                                                                                        has a more or
                                                                                                        less normal.</p>
                                                                                                    <span class="project-st-time">2 hours ago</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="#">
                                                                                            <div class="project-list-flow">
                                                                                                <div class="projects-st-heading">
                                                                                                    <h2>New Order
                                                                                                        Received</h2>
                                                                                                    <p> The point of
                                                                                                        using Lorem
                                                                                                        Ipsum is that it
                                                                                                        has a more or
                                                                                                        less normal.</p>
                                                                                                    <span class="project-st-time">3 hours ago</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="#">
                                                                                            <div class="project-list-flow">
                                                                                                <div class="projects-st-heading">
                                                                                                    <h2>New Order
                                                                                                        Received</h2>
                                                                                                    <p> The point of
                                                                                                        using Lorem
                                                                                                        Ipsum is that it
                                                                                                        has a more or
                                                                                                        less normal.</p>
                                                                                                    <span class="project-st-time">4 hours ago</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="#">
                                                                                            <div class="project-list-flow">
                                                                                                <div class="projects-st-heading">
                                                                                                    <h2>New User
                                                                                                        Registered</h2>
                                                                                                    <p> The point of
                                                                                                        using Lorem
                                                                                                        Ipsum is that it
                                                                                                        has a more or
                                                                                                        less normal.</p>
                                                                                                    <span class="project-st-time">5 hours ago</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="#">
                                                                                            <div class="project-list-flow">
                                                                                                <div class="projects-st-heading">
                                                                                                    <h2>New Order</h2>
                                                                                                    <p> The point of
                                                                                                        using Lorem
                                                                                                        Ipsum is that it
                                                                                                        has a more or
                                                                                                        less normal.</p>
                                                                                                    <span class="project-st-time">6 hours ago</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="#">
                                                                                            <div class="project-list-flow">
                                                                                                <div class="projects-st-heading">
                                                                                                    <h2>New User</h2>
                                                                                                    <p> The point of
                                                                                                        using Lorem
                                                                                                        Ipsum is that it
                                                                                                        has a more or
                                                                                                        less normal.</p>
                                                                                                    <span class="project-st-time">7 hours ago</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="#">
                                                                                            <div class="project-list-flow">
                                                                                                <div class="projects-st-heading">
                                                                                                    <h2>New Order</h2>
                                                                                                    <p> The point of
                                                                                                        using Lorem
                                                                                                        Ipsum is that it
                                                                                                        has a more or
                                                                                                        less normal.</p>
                                                                                                    <span class="project-st-time">9 hours ago</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                        <div id="mCSB_5_scrollbar_vertical"
                                                                             class="mCSB_scrollTools mCSB_5_scrollbar mCS-light-1 mCSB_scrollTools_vertical"
                                                                             style="display: none;">
                                                                            <div class="mCSB_draggerContainer">
                                                                                <div id="mCSB_5_dragger_vertical"
                                                                                     class="mCSB_dragger"
                                                                                     style="position: absolute; min-height: 30px; top: 0px;">
                                                                                    <div class="mCSB_dragger_bar"
                                                                                         style="line-height: 30px;"></div>
                                                                                </div>
                                                                                <div class="mCSB_draggerRail"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div id="Settings" class="tab-pane fade">
                                                                <div class="setting-panel-area">
                                                                    <div class="note-heading-indicate">
                                                                        <h2><i class="icon nalika-gear"></i> Settings
                                                                            Panel</h2>
                                                                        <p> You have 20 Settings. 5 not completed.</p>
                                                                    </div>
                                                                    <ul class="setting-panel-list">
                                                                        <li>
                                                                            <div class="checkbox-setting-pro">
                                                                                <div class="checkbox-title-pro">
                                                                                    <h2>Show notifications</h2>
                                                                                    <div class="ts-custom-check">
                                                                                        <div class="onoffswitch">
                                                                                            <input type="checkbox"
                                                                                                   name="collapsemenu"
                                                                                                   class="onoffswitch-checkbox"
                                                                                                   id="example">
                                                                                            <label class="onoffswitch-label"
                                                                                                   for="example">
                                                                                                <span class="onoffswitch-inner"></span>
                                                                                                <span class="onoffswitch-switch"></span>
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="checkbox-setting-pro">
                                                                                <div class="checkbox-title-pro">
                                                                                    <h2>Disable Chat</h2>
                                                                                    <div class="ts-custom-check">
                                                                                        <div class="onoffswitch">
                                                                                            <input type="checkbox"
                                                                                                   name="collapsemenu"
                                                                                                   class="onoffswitch-checkbox"
                                                                                                   id="example3">
                                                                                            <label class="onoffswitch-label"
                                                                                                   for="example3">
                                                                                                <span class="onoffswitch-inner"></span>
                                                                                                <span class="onoffswitch-switch"></span>
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="checkbox-setting-pro">
                                                                                <div class="checkbox-title-pro">
                                                                                    <h2>Enable history</h2>
                                                                                    <div class="ts-custom-check">
                                                                                        <div class="onoffswitch">
                                                                                            <input type="checkbox"
                                                                                                   name="collapsemenu"
                                                                                                   class="onoffswitch-checkbox"
                                                                                                   id="example4">
                                                                                            <label class="onoffswitch-label"
                                                                                                   for="example4">
                                                                                                <span class="onoffswitch-inner"></span>
                                                                                                <span class="onoffswitch-switch"></span>
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="checkbox-setting-pro">
                                                                                <div class="checkbox-title-pro">
                                                                                    <h2>Show charts</h2>
                                                                                    <div class="ts-custom-check">
                                                                                        <div class="onoffswitch">
                                                                                            <input type="checkbox"
                                                                                                   name="collapsemenu"
                                                                                                   class="onoffswitch-checkbox"
                                                                                                   id="example7">
                                                                                            <label class="onoffswitch-label"
                                                                                                   for="example7">
                                                                                                <span class="onoffswitch-inner"></span>
                                                                                                <span class="onoffswitch-switch"></span>
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="checkbox-setting-pro">
                                                                                <div class="checkbox-title-pro">
                                                                                    <h2>Update everyday</h2>
                                                                                    <div class="ts-custom-check">
                                                                                        <div class="onoffswitch">
                                                                                            <input type="checkbox"
                                                                                                   name="collapsemenu"
                                                                                                   checked=""
                                                                                                   class="onoffswitch-checkbox"
                                                                                                   id="example2">
                                                                                            <label class="onoffswitch-label"
                                                                                                   for="example2">
                                                                                                <span class="onoffswitch-inner"></span>
                                                                                                <span class="onoffswitch-switch"></span>
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="checkbox-setting-pro">
                                                                                <div class="checkbox-title-pro">
                                                                                    <h2>Global search</h2>
                                                                                    <div class="ts-custom-check">
                                                                                        <div class="onoffswitch">
                                                                                            <input type="checkbox"
                                                                                                   name="collapsemenu"
                                                                                                   checked=""
                                                                                                   class="onoffswitch-checkbox"
                                                                                                   id="example6">
                                                                                            <label class="onoffswitch-label"
                                                                                                   for="example6">
                                                                                                <span class="onoffswitch-inner"></span>
                                                                                                <span class="onoffswitch-switch"></span>
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="checkbox-setting-pro">
                                                                                <div class="checkbox-title-pro">
                                                                                    <h2>Offline users</h2>
                                                                                    <div class="ts-custom-check">
                                                                                        <div class="onoffswitch">
                                                                                            <input type="checkbox"
                                                                                                   name="collapsemenu"
                                                                                                   checked=""
                                                                                                   class="onoffswitch-checkbox"
                                                                                                   id="example5">
                                                                                            <label class="onoffswitch-label"
                                                                                                   for="example5">
                                                                                                <span class="onoffswitch-inner"></span>
                                                                                                <span class="onoffswitch-switch"></span>
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu start -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="mobile-menu">
                                <nav id="dropdown" style="display: block;">
                                    <ul class="mobile-menu-nav">
                                        <li><a data-toggle="collapse" data-target="#Charts" href="#">Home <span
                                                        class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                            <ul class="collapse dropdown-header-top">
                                                <li><a href="index.html">Dashboard v.1</a></li>
                                                <li><a href="index-1.html">Dashboard v.2</a></li>
                                                <li><a href="index-3.html">Dashboard v.3</a></li>
                                                <li><a href="product-list.html">Product List</a></li>
                                                <li><a href="product-edit.html">Product Edit</a></li>
                                                <li><a href="product-detail.html">Product Detail</a></li>
                                                <li><a href="product-cart.html">Product Cart</a></li>
                                                <li><a href="product-payment.html">Product Payment</a></li>
                                                <li><a href="analytics.html">Analytics</a></li>
                                                <li><a href="widgets.html">Widgets</a></li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#demo" href="#">Mailbox <span
                                                        class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                            <ul id="demo" class="collapse dropdown-header-top">
                                                <li><a href="mailbox.html">Inbox</a>
                                                </li>
                                                <li><a href="mailbox-view.html">View Mail</a>
                                                </li>
                                                <li><a href="mailbox-compose.html">Compose Mail</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#others" href="#">Miscellaneous <span
                                                        class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                            <ul id="others" class="collapse dropdown-header-top">
                                                <li><a href="file-manager.html">File Manager</a></li>
                                                <li><a href="contacts.html">Contacts Client</a></li>
                                                <li><a href="projects.html">Project</a></li>
                                                <li><a href="project-details.html">Project Details</a></li>
                                                <li><a href="blog.html">Blog</a></li>
                                                <li><a href="blog-details.html">Blog Details</a></li>
                                                <li><a href="404.html">404 Page</a></li>
                                                <li><a href="500.html">500 Page</a></li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Miscellaneousmob" href="#">Interface
                                                <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                            <ul id="Miscellaneousmob" class="collapse dropdown-header-top">
                                                <li><a href="google-map.html">Google Map</a>
                                                </li>
                                                <li><a href="data-maps.html">Data Maps</a>
                                                </li>
                                                <li><a href="pdf-viewer.html">Pdf Viewer</a>
                                                </li>
                                                <li><a href="x-editable.html">X-Editable</a>
                                                </li>
                                                <li><a href="code-editor.html">Code Editor</a>
                                                </li>
                                                <li><a href="tree-view.html">Tree View</a>
                                                </li>
                                                <li><a href="preloader.html">Preloader</a>
                                                </li>
                                                <li><a href="images-cropper.html">Images Cropper</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Chartsmob" href="#">Charts <span
                                                        class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                            <ul id="Chartsmob" class="collapse dropdown-header-top">
                                                <li><a href="bar-charts.html">Bar Charts</a>
                                                </li>
                                                <li><a href="line-charts.html">Line Charts</a>
                                                </li>
                                                <li><a href="area-charts.html">Area Charts</a>
                                                </li>
                                                <li><a href="rounded-chart.html">Rounded Charts</a>
                                                </li>
                                                <li><a href="c3.html">C3 Charts</a>
                                                </li>
                                                <li><a href="sparkline.html">Sparkline Charts</a>
                                                </li>
                                                <li><a href="peity.html">Peity Charts</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Tablesmob" href="#">Tables <span
                                                        class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                            <ul id="Tablesmob" class="collapse dropdown-header-top">
                                                <li><a href="static-table.html">Static Table</a>
                                                </li>
                                                <li><a href="data-table.html">Data Table</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#formsmob" href="#">Forms <span
                                                        class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                            <ul id="formsmob" class="collapse dropdown-header-top">
                                                <li><a href="basic-form-element.html">Basic Form Elements</a>
                                                </li>
                                                <li><a href="advance-form-element.html">Advanced Form Elements</a>
                                                </li>
                                                <li><a href="password-meter.html">Password Meter</a>
                                                </li>
                                                <li><a href="multi-upload.html">Multi Upload</a>
                                                </li>
                                                <li><a href="tinymc.html">Text Editor</a>
                                                </li>
                                                <li><a href="dual-list-box.html">Dual List Box</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Appviewsmob" href="#">App views
                                                <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                            <ul id="Appviewsmob" class="collapse dropdown-header-top">
                                                <li><a href="basic-form-element.html">Basic Form Elements</a>
                                                </li>
                                                <li><a href="advance-form-element.html">Advanced Form Elements</a>
                                                </li>
                                                <li><a href="password-meter.html">Password Meter</a>
                                                </li>
                                                <li><a href="multi-upload.html">Multi Upload</a>
                                                </li>
                                                <li><a href="tinymc.html">Text Editor</a>
                                                </li>
                                                <li><a href="dual-list-box.html">Dual List Box</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Pagemob" href="#">Pages <span
                                                        class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                            <ul id="Pagemob" class="collapse dropdown-header-top">
                                                <li><a href="login.html">Login</a>
                                                </li>
                                                <li><a href="register.html">Register</a>
                                                </li>
                                                <li><a href="lock.html">Lock</a>
                                                </li>
                                                <li><a href="password-recovery.html">Password Recovery</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu end -->
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="breadcomb-wp">
                                            <div class="breadcomb-icon">
                                                <i class="icon nalika-home"></i>
                                            </div>
                                            <div class="breadcomb-ctn">
                                                <h2>Dashboard Two</h2>
                                                <p>Welcome to Nalika <span class="bread-ntd">Admin Template</span></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="breadcomb-report">
                                            <button data-toggle="tooltip" data-placement="left" title="" class="btn"
                                                    data-original-title="Download Report"><i
                                                        class="icon nalika-download"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-admin container-fluid res-mg-t-15">
            <div class="row admin text-center">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="admin-content analysis-progrebar-ctn">
                                <h4 class="text-left text-uppercase"><b>Orders</b></h4>
                                <div class="row vertical-center-box vertical-center-box-tablet">
                                    <div class="col-xs-3 mar-bot-15 text-left">
                                        <label class="label bg-green">30% <i class="fa fa-level-up"
                                                                             aria-hidden="true"></i></label>
                                    </div>
                                    <div class="col-xs-9 cus-gh-hd-pro">
                                        <h2 class="text-right no-margin">10,000</h2>
                                    </div>
                                </div>
                                <div class="progress progress-mini">
                                    <div style="width: 78%;" class="progress-bar bg-green"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12" style="margin-bottom:1px;">
                            <div class="admin-content analysis-progrebar-ctn res-mg-t-30">
                                <h4 class="text-left text-uppercase"><b>Tax Deduction</b></h4>
                                <div class="row vertical-center-box vertical-center-box-tablet">
                                    <div class="text-left col-xs-3 mar-bot-15">
                                        <label class="label bg-red">15% <i class="fa fa-level-down"
                                                                           aria-hidden="true"></i></label>
                                    </div>
                                    <div class="col-xs-9 cus-gh-hd-pro">
                                        <h2 class="text-right no-margin">5,000</h2>
                                    </div>
                                </div>
                                <div class="progress progress-mini">
                                    <div style="width: 38%;" class="progress-bar progress-bar-danger bg-red"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="admin-content analysis-progrebar-ctn res-mg-t-30">
                                <h4 class="text-left text-uppercase"><b>Revenue</b></h4>
                                <div class="row vertical-center-box vertical-center-box-tablet">
                                    <div class="text-left col-xs-3 mar-bot-15">
                                        <label class="label bg-blue">50% <i class="fa fa-level-up"
                                                                            aria-hidden="true"></i></label>
                                    </div>
                                    <div class="col-xs-9 cus-gh-hd-pro">
                                        <h2 class="text-right no-margin">$70,000</h2>
                                    </div>
                                </div>
                                <div class="progress progress-mini">
                                    <div style="width: 60%;" class="progress-bar bg-blue"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="admin-content analysis-progrebar-ctn res-mg-t-30">
                                <h4 class="text-left text-uppercase"><b>Yearly Sales</b></h4>
                                <div class="row vertical-center-box vertical-center-box-tablet">
                                    <div class="text-left col-xs-3 mar-bot-15">
                                        <label class="label bg-purple">80% <i class="fa fa-level-up"
                                                                              aria-hidden="true"></i></label>
                                    </div>
                                    <div class="col-xs-9 cus-gh-hd-pro">
                                        <h2 class="text-right no-margin">$100,000</h2>
                                    </div>
                                </div>
                                <div class="progress progress-mini">
                                    <div style="width: 60%;" class="progress-bar bg-purple"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-sales-area mg-tb-30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-sales-chart">
                            <div class="portlet-title">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="caption pro-sl-hd">
                                            <span class="caption-subject text-uppercase"><b>Product Sales</b></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="actions graph-rp">
                                            <div class="btn-group" data-toggle="buttons">
                                                <label class="btn btn-grey active">
                                                    <input type="radio" name="options" class="toggle" id="option1"
                                                           checked="">Today</label>
                                                <label class="btn btn-grey">
                                                    <input type="radio" name="options" class="toggle" id="option2">Week</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="curved-line-chart" class="flot-chart-sts flot-chart curved-chart-statistic"
                                 style="padding: 0px; position: relative;">
                                <canvas class="flot-base"
                                        style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 1260px; height: 432px;"
                                        width="1575" height="540"></canvas>
                                <canvas class="flot-overlay"
                                        style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 1260px; height: 432px;"
                                        width="1575" height="540"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="traffic-analysis-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="white-box tranffic-als-inner">
                            <h3 class="box-title">
                                <small class="pull-right m-t-10 last-month-sc cl-one"><i class="fa fa-sort-asc"></i> 18%
                                    last month
                                </small>
                                Site Traffic
                            </h3>
                            <div class="stats-row">
                                <div class="stat-item">
                                    <h6>Overall Growth</h6>
                                    <b>80.40%</b></div>
                                <div class="stat-item">
                                    <h6>Montly</h6>
                                    <b>15.40%</b></div>
                                <div class="stat-item">
                                    <h6>Day</h6>
                                    <b>5.50%</b></div>
                            </div>
                            <div id="sparkline8">
                                <canvas style="display: inline-block; width: 368px; height: 50px; vertical-align: top;"
                                        width="368" height="50"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="white-box tranffic-als-inner res-mg-t-30">
                            <h3 class="box-title">
                                <small class="pull-right m-t-10 last-month-sc cl-two"><i class="fa fa-sort-desc"></i>
                                    18% last month
                                </small>
                                Site Traffic
                            </h3>
                            <div class="stats-row">
                                <div class="stat-item">
                                    <h6>Overall Growth</h6>
                                    <b>80.40%</b></div>
                                <div class="stat-item">
                                    <h6>Montly</h6>
                                    <b>15.40%</b></div>
                                <div class="stat-item">
                                    <h6>Day</h6>
                                    <b>5.50%</b></div>
                            </div>
                            <div id="sparkline9">
                                <canvas style="display: inline-block; width: 368px; height: 50px; vertical-align: top;"
                                        width="368" height="50"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="white-box tranffic-als-inner res-mg-t-30">
                            <h3 class="box-title">
                                <small class="pull-right m-t-10 last-month-sc cl-three"><i class="fa fa-sort-asc"></i>
                                    18% last month
                                </small>
                                Site Traffic
                            </h3>
                            <div class="stats-row">
                                <div class="stat-item">
                                    <h6>Overall Growth</h6>
                                    <b>80.40%</b></div>
                                <div class="stat-item">
                                    <h6>Montly</h6>
                                    <b>15.40%</b></div>
                                <div class="stat-item">
                                    <h6>Day</h6>
                                    <b>5.50%</b></div>
                            </div>
                            <div id="sparkline10">
                                <canvas style="display: inline-block; width: 368px; height: 50px; vertical-align: top;"
                                        width="368" height="50"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-new-list-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="single-new-trend mg-t-30">
                            <a href="#"><img src="img/new-product/5.png" alt=""></a>
                            <div class="overlay-content">
                                <a href="#">
                                    <h2>$280</h2>
                                </a>
                                <a href="#" class="btn-small">Now</a>
                                <div class="product-action">
                                    <ul>
                                        <li>
                                            <a data-toggle="tooltip" title="" href="#" data-original-title="Shopping"><i
                                                        class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                                        </li>
                                        <li>
                                            <a data-toggle="tooltip" title="" href="#" data-original-title="Quick view"><i
                                                        class="fa fa-heart" aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <a href="#">
                                    <h4>Princes Diamond</h4>
                                </a>
                                <div class="pro-rating">
                                    <i class="fa fa-star color"></i>
                                    <i class="fa fa-star color"></i>
                                    <i class="fa fa-star color"></i>
                                    <i class="icon nalika-half-filled-rating-star color"></i>
                                    <i class="icon nalika-half-filled-rating-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="single-new-trend mg-t-30">
                            <a href="#"><img src="img/new-product/5.png" alt=""></a>
                            <div class="overlay-content">
                                <a href="#">
                                    <h2>$280</h2>
                                </a>
                                <a href="#" class="btn-small">Now</a>
                                <div class="product-action">
                                    <ul>
                                        <li>
                                            <a data-toggle="tooltip" title="" href="#" data-original-title="Shopping"><i
                                                        class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                                        </li>
                                        <li>
                                            <a data-toggle="tooltip" title="" href="#" data-original-title="Quick view"><i
                                                        class="fa fa-heart" aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <a href="#">
                                    <h4>Princes Diamond</h4>
                                </a>
                                <div class="pro-rating">
                                    <i class="fa fa-star color"></i>
                                    <i class="fa fa-star color"></i>
                                    <i class="fa fa-star color"></i>
                                    <i class="icon nalika-half-filled-rating-star color"></i>
                                    <i class="icon nalika-half-filled-rating-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="single-new-trend mg-t-30">
                            <a href="#"><img src="img/new-product/5.png" alt=""></a>
                            <div class="overlay-content">
                                <a href="#">
                                    <h2>$280</h2>
                                </a>
                                <a href="#" class="btn-small">Now</a>
                                <div class="product-action">
                                    <ul>
                                        <li>
                                            <a data-toggle="tooltip" title="" href="#" data-original-title="Shopping"><i
                                                        class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                                        </li>
                                        <li>
                                            <a data-toggle="tooltip" title="" href="#" data-original-title="Quick view"><i
                                                        class="fa fa-heart" aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <a href="#">
                                    <h4>Princes Diamond</h4>
                                </a>
                                <div class="pro-rating">
                                    <i class="fa fa-star color"></i>
                                    <i class="fa fa-star color"></i>
                                    <i class="fa fa-star color"></i>
                                    <i class="icon nalika-half-filled-rating-star color"></i>
                                    <i class="icon nalika-half-filled-rating-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="single-new-trend mg-t-30">
                            <a href="#"><img src="img/new-product/5.png" alt=""></a>
                            <div class="overlay-content">
                                <a href="#">
                                    <h2>$280</h2>
                                </a>
                                <a href="#" class="btn-small">Now</a>
                                <div class="product-action">
                                    <ul>
                                        <li>
                                            <a data-toggle="tooltip" title="" href="#" data-original-title="Shopping"><i
                                                        class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                                        </li>
                                        <li>
                                            <a data-toggle="tooltip" title="" href="#" data-original-title="Quick view"><i
                                                        class="fa fa-heart" aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <a href="#">
                                    <h4>Princes Diamond</h4>
                                </a>
                                <div class="pro-rating">
                                    <i class="fa fa-star color"></i>
                                    <i class="fa fa-star color"></i>
                                    <i class="fa fa-star color"></i>
                                    <i class="icon nalika-half-filled-rating-star color"></i>
                                    <i class="icon nalika-half-filled-rating-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-sales-area mg-tb-30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-sales-chart">
                            <div class="portlet-title">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="caption pro-sl-hd">
                                            <span class="caption-subject text-uppercase"><b>Order Statistic</b></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="actions graph-rp">
                                            <a href="#" class="btn btn-dark-blue btn-circle active tip-top"
                                               data-toggle="tooltip" title="" data-original-title="Upload">
                                                <i class="fa fa-cloud-download" aria-hidden="true"></i>
                                            </a>
                                            <a href="#" class="btn btn-dark btn-circle active tip-top"
                                               data-toggle="tooltip" title="" data-original-title="Refresh">
                                                <i class="fa fa-reply" aria-hidden="true"></i>
                                            </a>
                                            <a href="#" class="btn btn-blue-grey btn-circle active tip-top"
                                               data-toggle="tooltip" title="" data-original-title="Delete">
                                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="line-chart" class="flot-chart flot-chart-sts line-chart-statistic"
                                 style="padding: 0px; position: relative;">
                                <canvas class="flot-base"
                                        style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 1260px; height: 362px;"
                                        width="1575" height="452"></canvas>
                                <canvas class="flot-overlay"
                                        style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 1260px; height: 362px;"
                                        width="1575" height="452"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="author-area-pro">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="personal-info-wrap">
                            <div class="widget-head-info-box">
                                <div class="persoanl-widget-hd">
                                    <h2>Jon Royita</h2>
                                    <p>Founder of Uttara It Park</p>
                                </div>
                                <img src="img/notification/5.jpg" class="img-circle circle-border m-b-md" alt="profile">
                                <div class="social-widget-result">
                                    <span>100 Tweets</span> |
                                    <span>350 Following</span> |
                                    <span>610 Followers</span>
                                </div>
                            </div>
                            <div class="widget-text-box">
                                <h4>Jhon Royita</h4>
                                <p>To all the athaists attacking me right now, I can't make you believe in God, you have
                                    to have faith.</p>
                                <div class="text-right like-love-list">
                                    <a class="btn btn-xs btn-white"><i class="fa fa-thumbs-up"></i> Like </a>
                                    <a class="btn btn-xs btn-primary"><i class="fa fa-heart"></i> Love</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="author-widgets-single res-mg-t-30">
                            <div class="author-wiget-inner">
                                <div class="perso-img">
                                    <img src="img/notification/6.jpg" class="img-circle circle-border m-b-md"
                                         alt="profile">
                                </div>
                                <div class="persoanl-widget-hd persoanl1-widget-hd">
                                    <h2>Fire Foxy</h2>
                                    <p>Founder of Uttara It House</p>
                                </div>
                                <div class="social-widget-result social-widget1-result">
                                    <span>100 Tweets</span> |
                                    <span>350 Following</span> |
                                    <span>610 Followers</span>
                                </div>
                            </div>
                            <div class="widget-text-box">
                                <h4>Fire Foxy</h4>
                                <p>To all the athaists attacking me right now, I can't make you believe in God, you have
                                    to have faith.</p>
                                <div class="text-right like-love-list">
                                    <a class="btn btn-xs btn-white"><i class="fa fa-thumbs-up"></i> Like </a>
                                    <a class="btn btn-xs btn-primary"><i class="fa fa-heart"></i> Love</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="personal-info-wrap personal-info-ano res-mg-t-30">
                            <div class="widget-head-info-box">
                                <div class="persoanl-widget-hd">
                                    <h2>Jon Royita</h2>
                                    <p>Founder of Uttara It Park</p>
                                </div>
                                <img src="img/contact/2.jpg" class="img-circle circle-border m-b-md" alt="profile">
                                <div class="social-widget-result">
                                    <span>100 Tweets</span> |
                                    <span>350 Following</span> |
                                    <span>610 Followers</span>
                                </div>
                            </div>
                            <div class="widget-text-box">
                                <h4>Jhon Royita</h4>
                                <p>To all the athaists attacking me right now, I can't make you believe in God, you have
                                    to have faith.</p>
                                <div class="text-right like-love-list">
                                    <a class="btn btn-xs btn-white"><i class="fa fa-thumbs-up"></i> Like </a>
                                    <a class="btn btn-xs btn-primary"><i class="fa fa-heart"></i> Love</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="calender-area mg-tb-30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="calender-inner">
                            <div id="calendar" class="fc fc-unthemed fc-ltr">
                                <div class="fc-toolbar fc-header-toolbar">
                                    <div class="fc-left">
                                        <div class="fc-button-group">
                                            <button type="button"
                                                    class="fc-prev-button fc-button fc-state-default fc-corner-left">
                                                <span class="fc-icon fc-icon-left-single-arrow"></span></button>
                                            <button type="button"
                                                    class="fc-next-button fc-button fc-state-default fc-corner-right">
                                                <span class="fc-icon fc-icon-right-single-arrow"></span></button>
                                        </div>
                                        <button type="button"
                                                class="fc-today-button fc-button fc-state-default fc-corner-left fc-corner-right fc-state-disabled"
                                                disabled="">today
                                        </button>
                                    </div>
                                    <div class="fc-right">
                                        <div class="fc-button-group">
                                            <button type="button"
                                                    class="fc-month-button fc-button fc-state-default fc-corner-left fc-state-active">
                                                month
                                            </button>
                                            <button type="button"
                                                    class="fc-agendaWeek-button fc-button fc-state-default">week
                                            </button>
                                            <button type="button"
                                                    class="fc-agendaDay-button fc-button fc-state-default">day
                                            </button>
                                            <button type="button"
                                                    class="fc-listWeek-button fc-button fc-state-default fc-corner-right">
                                                list
                                            </button>
                                        </div>
                                    </div>
                                    <div class="fc-center"><h2>December 2021</h2></div>
                                    <div class="fc-clear"></div>
                                </div>
                                <div class="fc-view-container" style="">
                                    <div class="fc-view fc-month-view fc-basic-view" style="">
                                        <table class="">
                                            <thead class="fc-head">
                                            <tr>
                                                <td class="fc-head-container fc-widget-header">
                                                    <div class="fc-row fc-widget-header">
                                                        <table class="">
                                                            <thead>
                                                            <tr>
                                                                <th class="fc-day-header fc-widget-header fc-sun"><span>Sun</span>
                                                                </th>
                                                                <th class="fc-day-header fc-widget-header fc-mon"><span>Mon</span>
                                                                </th>
                                                                <th class="fc-day-header fc-widget-header fc-tue"><span>Tue</span>
                                                                </th>
                                                                <th class="fc-day-header fc-widget-header fc-wed"><span>Wed</span>
                                                                </th>
                                                                <th class="fc-day-header fc-widget-header fc-thu"><span>Thu</span>
                                                                </th>
                                                                <th class="fc-day-header fc-widget-header fc-fri"><span>Fri</span>
                                                                </th>
                                                                <th class="fc-day-header fc-widget-header fc-sat"><span>Sat</span>
                                                                </th>
                                                            </tr>
                                                            </thead>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                            </thead>
                                            <tbody class="fc-body">
                                            <tr>
                                                <td class="fc-widget-content">
                                                    <div class="fc-scroller fc-day-grid-container"
                                                         style="overflow: hidden; height: 899px;">
                                                        <div class="fc-day-grid fc-unselectable">
                                                            <div class="fc-row fc-week fc-widget-content fc-rigid"
                                                                 style="height: 137px;">
                                                                <div class="fc-bg">
                                                                    <table class="">
                                                                        <tbody>
                                                                        <tr>
                                                                            <td class="fc-day fc-widget-content fc-sun fc-other-month fc-past"
                                                                                data-date="2021-11-28"></td>
                                                                            <td class="fc-day fc-widget-content fc-mon fc-other-month fc-past"
                                                                                data-date="2021-11-29"></td>
                                                                            <td class="fc-day fc-widget-content fc-tue fc-other-month fc-past"
                                                                                data-date="2021-11-30"></td>
                                                                            <td class="fc-day fc-widget-content fc-wed fc-past"
                                                                                data-date="2021-12-01"></td>
                                                                            <td class="fc-day fc-widget-content fc-thu fc-past"
                                                                                data-date="2021-12-02"></td>
                                                                            <td class="fc-day fc-widget-content fc-fri fc-past"
                                                                                data-date="2021-12-03"></td>
                                                                            <td class="fc-day fc-widget-content fc-sat fc-past"
                                                                                data-date="2021-12-04"></td>
                                                                        </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                                <div class="fc-content-skeleton">
                                                                    <table>
                                                                        <thead>
                                                                        <tr>
                                                                            <td class="fc-day-top fc-sun fc-other-month fc-past"
                                                                                data-date="2021-11-28"><a
                                                                                        class="fc-day-number"
                                                                                        data-goto="{&quot;date&quot;:&quot;2021-11-28&quot;,&quot;type&quot;:&quot;day&quot;}">28</a>
                                                                            </td>
                                                                            <td class="fc-day-top fc-mon fc-other-month fc-past"
                                                                                data-date="2021-11-29"><a
                                                                                        class="fc-day-number"
                                                                                        data-goto="{&quot;date&quot;:&quot;2021-11-29&quot;,&quot;type&quot;:&quot;day&quot;}">29</a>
                                                                            </td>
                                                                            <td class="fc-day-top fc-tue fc-other-month fc-past"
                                                                                data-date="2021-11-30"><a
                                                                                        class="fc-day-number"
                                                                                        data-goto="{&quot;date&quot;:&quot;2021-11-30&quot;,&quot;type&quot;:&quot;day&quot;}">30</a>
                                                                            </td>
                                                                            <td class="fc-day-top fc-wed fc-past"
                                                                                data-date="2021-12-01"><a
                                                                                        class="fc-day-number"
                                                                                        data-goto="{&quot;date&quot;:&quot;2021-12-01&quot;,&quot;type&quot;:&quot;day&quot;}">1</a>
                                                                            </td>
                                                                            <td class="fc-day-top fc-thu fc-past"
                                                                                data-date="2021-12-02"><a
                                                                                        class="fc-day-number"
                                                                                        data-goto="{&quot;date&quot;:&quot;2021-12-02&quot;,&quot;type&quot;:&quot;day&quot;}">2</a>
                                                                            </td>
                                                                            <td class="fc-day-top fc-fri fc-past"
                                                                                data-date="2021-12-03"><a
                                                                                        class="fc-day-number"
                                                                                        data-goto="{&quot;date&quot;:&quot;2021-12-03&quot;,&quot;type&quot;:&quot;day&quot;}">3</a>
                                                                            </td>
                                                                            <td class="fc-day-top fc-sat fc-past"
                                                                                data-date="2021-12-04"><a
                                                                                        class="fc-day-number"
                                                                                        data-goto="{&quot;date&quot;:&quot;2021-12-04&quot;,&quot;type&quot;:&quot;day&quot;}">4</a>
                                                                            </td>
                                                                        </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                        <tr>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td class="fc-event-container"><a
                                                                                        class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable fc-resizable"
                                                                                        style="background-color:#e91e63;border-color:#e91e63;color:#1f2e86">
                                                                                    <div class="fc-content"><span
                                                                                                class="fc-title">All Day Event</span>
                                                                                    </div>
                                                                                    <div class="fc-resizer fc-end-resizer"></div>
                                                                                </a></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                        </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                            <div class="fc-row fc-week fc-widget-content fc-rigid"
                                                                 style="height: 137px;">
                                                                <div class="fc-bg">
                                                                    <table class="">
                                                                        <tbody>
                                                                        <tr>
                                                                            <td class="fc-day fc-widget-content fc-sun fc-past"
                                                                                data-date="2021-12-05"></td>
                                                                            <td class="fc-day fc-widget-content fc-mon fc-past"
                                                                                data-date="2021-12-06"></td>
                                                                            <td class="fc-day fc-widget-content fc-tue fc-past"
                                                                                data-date="2021-12-07"></td>
                                                                            <td class="fc-day fc-widget-content fc-wed fc-past"
                                                                                data-date="2021-12-08"></td>
                                                                            <td class="fc-day fc-widget-content fc-thu fc-past"
                                                                                data-date="2021-12-09"></td>
                                                                            <td class="fc-day fc-widget-content fc-fri fc-past"
                                                                                data-date="2021-12-10"></td>
                                                                            <td class="fc-day fc-widget-content fc-sat fc-past"
                                                                                data-date="2021-12-11"></td>
                                                                        </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                                <div class="fc-content-skeleton">
                                                                    <table>
                                                                        <thead>
                                                                        <tr>
                                                                            <td class="fc-day-top fc-sun fc-past"
                                                                                data-date="2021-12-05"><a
                                                                                        class="fc-day-number"
                                                                                        data-goto="{&quot;date&quot;:&quot;2021-12-05&quot;,&quot;type&quot;:&quot;day&quot;}">5</a>
                                                                            </td>
                                                                            <td class="fc-day-top fc-mon fc-past"
                                                                                data-date="2021-12-06"><a
                                                                                        class="fc-day-number"
                                                                                        data-goto="{&quot;date&quot;:&quot;2021-12-06&quot;,&quot;type&quot;:&quot;day&quot;}">6</a>
                                                                            </td>
                                                                            <td class="fc-day-top fc-tue fc-past"
                                                                                data-date="2021-12-07"><a
                                                                                        class="fc-day-number"
                                                                                        data-goto="{&quot;date&quot;:&quot;2021-12-07&quot;,&quot;type&quot;:&quot;day&quot;}">7</a>
                                                                            </td>
                                                                            <td class="fc-day-top fc-wed fc-past"
                                                                                data-date="2021-12-08"><a
                                                                                        class="fc-day-number"
                                                                                        data-goto="{&quot;date&quot;:&quot;2021-12-08&quot;,&quot;type&quot;:&quot;day&quot;}">8</a>
                                                                            </td>
                                                                            <td class="fc-day-top fc-thu fc-past"
                                                                                data-date="2021-12-09"><a
                                                                                        class="fc-day-number"
                                                                                        data-goto="{&quot;date&quot;:&quot;2021-12-09&quot;,&quot;type&quot;:&quot;day&quot;}">9</a>
                                                                            </td>
                                                                            <td class="fc-day-top fc-fri fc-past"
                                                                                data-date="2021-12-10"><a
                                                                                        class="fc-day-number"
                                                                                        data-goto="{&quot;date&quot;:&quot;2021-12-10&quot;,&quot;type&quot;:&quot;day&quot;}">10</a>
                                                                            </td>
                                                                            <td class="fc-day-top fc-sat fc-past"
                                                                                data-date="2021-12-11"><a
                                                                                        class="fc-day-number"
                                                                                        data-goto="{&quot;date&quot;:&quot;2021-12-11&quot;,&quot;type&quot;:&quot;day&quot;}">11</a>
                                                                            </td>
                                                                        </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                        <tr>
                                                                            <td rowspan="2"></td>
                                                                            <td rowspan="2"></td>
                                                                            <td class="fc-event-container" colspan="3">
                                                                                <a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable fc-resizable"
                                                                                   style="background-color:#59e0c5;border-color:#59e0c5;color:#1f2e86">
                                                                                    <div class="fc-content"><span
                                                                                                class="fc-title">Long Event</span>
                                                                                    </div>
                                                                                    <div class="fc-resizer fc-end-resizer"></div>
                                                                                </a></td>
                                                                            <td rowspan="2"></td>
                                                                            <td rowspan="2"></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td class="fc-event-container"><a
                                                                                        class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable"
                                                                                        style="background-color:#FF5370;border-color:#FF5370;color:#1f2e86">
                                                                                    <div class="fc-content"><span
                                                                                                class="fc-time">4p</span>
                                                                                        <span class="fc-title">Repeating Event</span>
                                                                                    </div>
                                                                                </a></td>
                                                                        </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                            <div class="fc-row fc-week fc-widget-content fc-rigid"
                                                                 style="height: 137px;">
                                                                <div class="fc-bg">
                                                                    <table class="">
                                                                        <tbody>
                                                                        <tr>
                                                                            <td class="fc-day fc-widget-content fc-sun fc-past"
                                                                                data-date="2021-12-12"></td>
                                                                            <td class="fc-day fc-widget-content fc-mon fc-past"
                                                                                data-date="2021-12-13"></td>
                                                                            <td class="fc-day fc-widget-content fc-tue fc-past"
                                                                                data-date="2021-12-14"></td>
                                                                            <td class="fc-day fc-widget-content fc-wed fc-past"
                                                                                data-date="2021-12-15"></td>
                                                                            <td class="fc-day fc-widget-content fc-thu fc-past"
                                                                                data-date="2021-12-16"></td>
                                                                            <td class="fc-day fc-widget-content fc-fri fc-past"
                                                                                data-date="2021-12-17"></td>
                                                                            <td class="fc-day fc-widget-content fc-sat fc-past"
                                                                                data-date="2021-12-18"></td>
                                                                        </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                                <div class="fc-content-skeleton">
                                                                    <table>
                                                                        <thead>
                                                                        <tr>
                                                                            <td class="fc-day-top fc-sun fc-past"
                                                                                data-date="2021-12-12"><a
                                                                                        class="fc-day-number"
                                                                                        data-goto="{&quot;date&quot;:&quot;2021-12-12&quot;,&quot;type&quot;:&quot;day&quot;}">12</a>
                                                                            </td>
                                                                            <td class="fc-day-top fc-mon fc-past"
                                                                                data-date="2021-12-13"><a
                                                                                        class="fc-day-number"
                                                                                        data-goto="{&quot;date&quot;:&quot;2021-12-13&quot;,&quot;type&quot;:&quot;day&quot;}">13</a>
                                                                            </td>
                                                                            <td class="fc-day-top fc-tue fc-past"
                                                                                data-date="2021-12-14"><a
                                                                                        class="fc-day-number"
                                                                                        data-goto="{&quot;date&quot;:&quot;2021-12-14&quot;,&quot;type&quot;:&quot;day&quot;}">14</a>
                                                                            </td>
                                                                            <td class="fc-day-top fc-wed fc-past"
                                                                                data-date="2021-12-15"><a
                                                                                        class="fc-day-number"
                                                                                        data-goto="{&quot;date&quot;:&quot;2021-12-15&quot;,&quot;type&quot;:&quot;day&quot;}">15</a>
                                                                            </td>
                                                                            <td class="fc-day-top fc-thu fc-past"
                                                                                data-date="2021-12-16"><a
                                                                                        class="fc-day-number"
                                                                                        data-goto="{&quot;date&quot;:&quot;2021-12-16&quot;,&quot;type&quot;:&quot;day&quot;}">16</a>
                                                                            </td>
                                                                            <td class="fc-day-top fc-fri fc-past"
                                                                                data-date="2021-12-17"><a
                                                                                        class="fc-day-number"
                                                                                        data-goto="{&quot;date&quot;:&quot;2021-12-17&quot;,&quot;type&quot;:&quot;day&quot;}">17</a>
                                                                            </td>
                                                                            <td class="fc-day-top fc-sat fc-past"
                                                                                data-date="2021-12-18"><a
                                                                                        class="fc-day-number"
                                                                                        data-goto="{&quot;date&quot;:&quot;2021-12-18&quot;,&quot;type&quot;:&quot;day&quot;}">18</a>
                                                                            </td>
                                                                        </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                        <tr>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td class="fc-event-container"><a
                                                                                        class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable"
                                                                                        style="background-color:#FF5370;border-color:#FF5370;color:#1f2e86">
                                                                                    <div class="fc-content"><span
                                                                                                class="fc-time">4p</span>
                                                                                        <span class="fc-title">Repeating Event</span>
                                                                                    </div>
                                                                                </a></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                        </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                            <div class="fc-row fc-week fc-widget-content fc-rigid"
                                                                 style="height: 137px;">
                                                                <div class="fc-bg">
                                                                    <table class="">
                                                                        <tbody>
                                                                        <tr>
                                                                            <td class="fc-day fc-widget-content fc-sun fc-past"
                                                                                data-date="2021-12-19"></td>
                                                                            <td class="fc-day fc-widget-content fc-mon fc-past"
                                                                                data-date="2021-12-20"></td>
                                                                            <td class="fc-day fc-widget-content fc-tue fc-past"
                                                                                data-date="2021-12-21"></td>
                                                                            <td class="fc-day fc-widget-content fc-wed fc-past"
                                                                                data-date="2021-12-22"></td>
                                                                            <td class="fc-day fc-widget-content fc-thu fc-past"
                                                                                data-date="2021-12-23"></td>
                                                                            <td class="fc-day fc-widget-content fc-fri fc-past"
                                                                                data-date="2021-12-24"></td>
                                                                            <td class="fc-day fc-widget-content fc-sat fc-past"
                                                                                data-date="2021-12-25"></td>
                                                                        </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                                <div class="fc-content-skeleton">
                                                                    <table>
                                                                        <thead>
                                                                        <tr>
                                                                            <td class="fc-day-top fc-sun fc-past"
                                                                                data-date="2021-12-19"><a
                                                                                        class="fc-day-number"
                                                                                        data-goto="{&quot;date&quot;:&quot;2021-12-19&quot;,&quot;type&quot;:&quot;day&quot;}">19</a>
                                                                            </td>
                                                                            <td class="fc-day-top fc-mon fc-past"
                                                                                data-date="2021-12-20"><a
                                                                                        class="fc-day-number"
                                                                                        data-goto="{&quot;date&quot;:&quot;2021-12-20&quot;,&quot;type&quot;:&quot;day&quot;}">20</a>
                                                                            </td>
                                                                            <td class="fc-day-top fc-tue fc-past"
                                                                                data-date="2021-12-21"><a
                                                                                        class="fc-day-number"
                                                                                        data-goto="{&quot;date&quot;:&quot;2021-12-21&quot;,&quot;type&quot;:&quot;day&quot;}">21</a>
                                                                            </td>
                                                                            <td class="fc-day-top fc-wed fc-past"
                                                                                data-date="2021-12-22"><a
                                                                                        class="fc-day-number"
                                                                                        data-goto="{&quot;date&quot;:&quot;2021-12-22&quot;,&quot;type&quot;:&quot;day&quot;}">22</a>
                                                                            </td>
                                                                            <td class="fc-day-top fc-thu fc-past"
                                                                                data-date="2021-12-23"><a
                                                                                        class="fc-day-number"
                                                                                        data-goto="{&quot;date&quot;:&quot;2021-12-23&quot;,&quot;type&quot;:&quot;day&quot;}">23</a>
                                                                            </td>
                                                                            <td class="fc-day-top fc-fri fc-past"
                                                                                data-date="2021-12-24"><a
                                                                                        class="fc-day-number"
                                                                                        data-goto="{&quot;date&quot;:&quot;2021-12-24&quot;,&quot;type&quot;:&quot;day&quot;}">24</a>
                                                                            </td>
                                                                            <td class="fc-day-top fc-sat fc-past"
                                                                                data-date="2021-12-25"><a
                                                                                        class="fc-day-number"
                                                                                        data-goto="{&quot;date&quot;:&quot;2021-12-25&quot;,&quot;type&quot;:&quot;day&quot;}">25</a>
                                                                            </td>
                                                                        </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                        <tr>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td class="fc-event-container"><a
                                                                                        class="fc-day-grid-event fc-h-event fc-event fc-start fc-not-end fc-draggable"
                                                                                        style="background-color:#f3c30b;border-color:#f3c30b;color:#1f2e86">
                                                                                    <div class="fc-content"><span
                                                                                                class="fc-title">Conference</span>
                                                                                    </div>
                                                                                </a></td>
                                                                        </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                            <div class="fc-row fc-week fc-widget-content fc-rigid">
                                                                <div class="fc-bg">
                                                                    <table class="">
                                                                        <tbody>
                                                                        <tr>
                                                                            <td class="fc-day fc-widget-content fc-sun fc-today "
                                                                                data-date="2021-12-26"></td>
                                                                            <td class="fc-day fc-widget-content fc-mon fc-future"
                                                                                data-date="2021-12-27"></td>
                                                                            <td class="fc-day fc-widget-content fc-tue fc-future"
                                                                                data-date="2021-12-28"></td>
                                                                            <td class="fc-day fc-widget-content fc-wed fc-future"
                                                                                data-date="2021-12-29"></td>
                                                                            <td class="fc-day fc-widget-content fc-thu fc-future"
                                                                                data-date="2021-12-30"></td>
                                                                            <td class="fc-day fc-widget-content fc-fri fc-future"
                                                                                data-date="2021-12-31"></td>
                                                                            <td class="fc-day fc-widget-content fc-sat fc-other-month fc-future"
                                                                                data-date="2022-01-01"></td>
                                                                        </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                                <div class="fc-content-skeleton">
                                                                    <table>
                                                                        <thead>
                                                                        <tr>
                                                                            <td class="fc-day-top fc-sun fc-today "
                                                                                data-date="2021-12-26"><a
                                                                                        class="fc-day-number"
                                                                                        data-goto="{&quot;date&quot;:&quot;2021-12-26&quot;,&quot;type&quot;:&quot;day&quot;}">26</a>
                                                                            </td>
                                                                            <td class="fc-day-top fc-mon fc-future"
                                                                                data-date="2021-12-27"><a
                                                                                        class="fc-day-number"
                                                                                        data-goto="{&quot;date&quot;:&quot;2021-12-27&quot;,&quot;type&quot;:&quot;day&quot;}">27</a>
                                                                            </td>
                                                                            <td class="fc-day-top fc-tue fc-future"
                                                                                data-date="2021-12-28"><a
                                                                                        class="fc-day-number"
                                                                                        data-goto="{&quot;date&quot;:&quot;2021-12-28&quot;,&quot;type&quot;:&quot;day&quot;}">28</a>
                                                                            </td>
                                                                            <td class="fc-day-top fc-wed fc-future"
                                                                                data-date="2021-12-29"><a
                                                                                        class="fc-day-number"
                                                                                        data-goto="{&quot;date&quot;:&quot;2021-12-29&quot;,&quot;type&quot;:&quot;day&quot;}">29</a>
                                                                            </td>
                                                                            <td class="fc-day-top fc-thu fc-future"
                                                                                data-date="2021-12-30"><a
                                                                                        class="fc-day-number"
                                                                                        data-goto="{&quot;date&quot;:&quot;2021-12-30&quot;,&quot;type&quot;:&quot;day&quot;}">30</a>
                                                                            </td>
                                                                            <td class="fc-day-top fc-fri fc-future"
                                                                                data-date="2021-12-31"><a
                                                                                        class="fc-day-number"
                                                                                        data-goto="{&quot;date&quot;:&quot;2021-12-31&quot;,&quot;type&quot;:&quot;day&quot;}">31</a>
                                                                            </td>
                                                                            <td class="fc-day-top fc-sat fc-other-month fc-future"
                                                                                data-date="2022-01-01"><a
                                                                                        class="fc-day-number"
                                                                                        data-goto="{&quot;date&quot;:&quot;2022-01-01&quot;,&quot;type&quot;:&quot;day&quot;}">1</a>
                                                                            </td>
                                                                        </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                        <tr>
                                                                            <td class="fc-event-container"><a
                                                                                        class="fc-day-grid-event fc-h-event fc-event fc-not-start fc-end fc-draggable fc-resizable"
                                                                                        style="background-color:#f3c30b;border-color:#f3c30b;color:#1f2e86">
                                                                                    <div class="fc-content"><span
                                                                                                class="fc-title">Conference</span>
                                                                                    </div>
                                                                                    <div class="fc-resizer fc-end-resizer"></div>
                                                                                </a></td>
                                                                            <td class="fc-event-container" rowspan="6">
                                                                                <a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable"
                                                                                   style="background-color:#FF5722;border-color:#FF5722;color:#1f2e86">
                                                                                    <div class="fc-content"><span
                                                                                                class="fc-time">7a</span>
                                                                                        <span class="fc-title">Birthday Party</span>
                                                                                    </div>
                                                                                </a></td>
                                                                            <td class="fc-event-container" rowspan="6">
                                                                                <a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable fc-resizable"
                                                                                   href="http://google.com/"
                                                                                   style="background-color:#323232;border-color:#323232;color:#1f2e86">
                                                                                    <div class="fc-content"><span
                                                                                                class="fc-title">Click for Google</span>
                                                                                    </div>
                                                                                    <div class="fc-resizer fc-end-resizer"></div>
                                                                                </a></td>
                                                                            <td rowspan="6"></td>
                                                                            <td rowspan="6"></td>
                                                                            <td rowspan="6"></td>
                                                                            <td rowspan="6"></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="fc-event-container"><a
                                                                                        class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable"
                                                                                        style="background-color:#1f2e86;border-color:#1f2e86;color:#1f2e86">
                                                                                    <div class="fc-content"><span
                                                                                                class="fc-time">10:30a</span>
                                                                                        <span class="fc-title">Meeting</span>
                                                                                    </div>
                                                                                </a></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="fc-event-container"><a
                                                                                        class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable"
                                                                                        style="background-color:#0D4CFF;border-color:#0D4CFF;color:#1f2e86">
                                                                                    <div class="fc-content"><span
                                                                                                class="fc-time">12p</span>
                                                                                        <span class="fc-title">Lunch</span>
                                                                                    </div>
                                                                                </a></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="fc-event-container"><a
                                                                                        class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable"
                                                                                        style="background-color:#1f2e86;border-color:#1f2e86;color:#1f2e86">
                                                                                    <div class="fc-content"><span
                                                                                                class="fc-time">2:30p</span>
                                                                                        <span class="fc-title">Meeting</span>
                                                                                    </div>
                                                                                </a></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="fc-event-container"><a
                                                                                        class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable"
                                                                                        style="background-color:#AA00FF;border-color:#AA00FF;color:#1f2e86">
                                                                                    <div class="fc-content"><span
                                                                                                class="fc-time">5:30p</span>
                                                                                        <span class="fc-title">Happy Hour</span>
                                                                                    </div>
                                                                                </a></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="fc-event-container"><a
                                                                                        class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable"
                                                                                        style="background-color:#00BCD4;border-color:#00BCD4;color:#1f2e86">
                                                                                    <div class="fc-content"><span
                                                                                                class="fc-time">8p</span>
                                                                                        <span class="fc-title">Dinner</span>
                                                                                    </div>
                                                                                </a></td>
                                                                        </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                            <div class="fc-row fc-week fc-widget-content fc-rigid"
                                                                 style="height: 140px;">
                                                                <div class="fc-bg">
                                                                    <table class="">
                                                                        <tbody>
                                                                        <tr>
                                                                            <td class="fc-day fc-widget-content fc-sun fc-other-month fc-future"
                                                                                data-date="2022-01-02"></td>
                                                                            <td class="fc-day fc-widget-content fc-mon fc-other-month fc-future"
                                                                                data-date="2022-01-03"></td>
                                                                            <td class="fc-day fc-widget-content fc-tue fc-other-month fc-future"
                                                                                data-date="2022-01-04"></td>
                                                                            <td class="fc-day fc-widget-content fc-wed fc-other-month fc-future"
                                                                                data-date="2022-01-05"></td>
                                                                            <td class="fc-day fc-widget-content fc-thu fc-other-month fc-future"
                                                                                data-date="2022-01-06"></td>
                                                                            <td class="fc-day fc-widget-content fc-fri fc-other-month fc-future"
                                                                                data-date="2022-01-07"></td>
                                                                            <td class="fc-day fc-widget-content fc-sat fc-other-month fc-future"
                                                                                data-date="2022-01-08"></td>
                                                                        </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                                <div class="fc-content-skeleton">
                                                                    <table>
                                                                        <thead>
                                                                        <tr>
                                                                            <td class="fc-day-top fc-sun fc-other-month fc-future"
                                                                                data-date="2022-01-02"><a
                                                                                        class="fc-day-number"
                                                                                        data-goto="{&quot;date&quot;:&quot;2022-01-02&quot;,&quot;type&quot;:&quot;day&quot;}">2</a>
                                                                            </td>
                                                                            <td class="fc-day-top fc-mon fc-other-month fc-future"
                                                                                data-date="2022-01-03"><a
                                                                                        class="fc-day-number"
                                                                                        data-goto="{&quot;date&quot;:&quot;2022-01-03&quot;,&quot;type&quot;:&quot;day&quot;}">3</a>
                                                                            </td>
                                                                            <td class="fc-day-top fc-tue fc-other-month fc-future"
                                                                                data-date="2022-01-04"><a
                                                                                        class="fc-day-number"
                                                                                        data-goto="{&quot;date&quot;:&quot;2022-01-04&quot;,&quot;type&quot;:&quot;day&quot;}">4</a>
                                                                            </td>
                                                                            <td class="fc-day-top fc-wed fc-other-month fc-future"
                                                                                data-date="2022-01-05"><a
                                                                                        class="fc-day-number"
                                                                                        data-goto="{&quot;date&quot;:&quot;2022-01-05&quot;,&quot;type&quot;:&quot;day&quot;}">5</a>
                                                                            </td>
                                                                            <td class="fc-day-top fc-thu fc-other-month fc-future"
                                                                                data-date="2022-01-06"><a
                                                                                        class="fc-day-number"
                                                                                        data-goto="{&quot;date&quot;:&quot;2022-01-06&quot;,&quot;type&quot;:&quot;day&quot;}">6</a>
                                                                            </td>
                                                                            <td class="fc-day-top fc-fri fc-other-month fc-future"
                                                                                data-date="2022-01-07"><a
                                                                                        class="fc-day-number"
                                                                                        data-goto="{&quot;date&quot;:&quot;2022-01-07&quot;,&quot;type&quot;:&quot;day&quot;}">7</a>
                                                                            </td>
                                                                            <td class="fc-day-top fc-sat fc-other-month fc-future"
                                                                                data-date="2022-01-08"><a
                                                                                        class="fc-day-number"
                                                                                        data-goto="{&quot;date&quot;:&quot;2022-01-08&quot;,&quot;type&quot;:&quot;day&quot;}">8</a>
                                                                            </td>
                                                                        </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                        <tr>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                        </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-copy-right">
                            <p>Copyright © 2018 <a href="https://colorlib.com/wp/templates/">Colorlib</a> All rights
                                reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


