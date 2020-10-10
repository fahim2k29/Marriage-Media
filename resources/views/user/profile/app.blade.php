<html lang="en">
    <head>
       

        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        {{-- <script type="text/javascript" async="" src="https://www.google-analytics.com/plugins/ua/ec.js"></script>
        <script src="https://connect.facebook.net/signals/config/2251928191696851?v=2.9.22&amp;r=stable" async=""></script>
        <script async="" src="https://connect.facebook.net/en_US/fbevents.js"></script>
        <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script>
        <script async="" src="https://www.googletagmanager.com/gtm.js?id=GTM-NNGBZLJ"></script>
        <script src="https://use.fontawesome.com/d55168d01d.js"></script> --}}

        <title>{{$info->name}}</title>

        <meta name="viewport" content="width=1200" />
        <link href="/images/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
        
        <meta name="apple-itunes-app" content="app-id=1116597910" />

        <link rel="stylesheet" href="/frontend/assets/css/less/font-awesome.min.css" />

        <link href="/frontend/assets/css/less/global.css" media="screen" rel="stylesheet" type="text/css" />
        <link href="/frontend/assets/css/less/controller/ProfileController.css" media="screen" rel="stylesheet" type="text/css" />
        <link href="/frontend/assets/css/less/controller/MembershipController.css" media="screen" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="/frontend/assets/js/global.min.js"></script>
        <script type="text/javascript" src="/frontend/assets/js/MembershipController.min.js"></script>
        <script type="text/javascript" src="/frontend/assets/js/controller/ProfileController.min.js"></script>
        <script type="text/javascript" src="/validation/validator.min.js"></script>

        <script>
            //var dataLayer=[];
        </script>
        <!-- Google Tag Manager -->
        <script>
            (function (w, d, s, l, i) {
                w[l] = w[l] || [];
                w[l].push({ "gtm.start": new Date().getTime(), event: "gtm.js" });
                var f = d.getElementsByTagName(s)[0],
                    j = d.createElement(s),
                    dl = l != "dataLayer" ? "&l=" + l : "";
                j.async = true;
                j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
                f.parentNode.insertBefore(j, f);
            })(window, document, "script", "dataLayer", "GTM-NNGBZLJ");
        </script>
    </head>
    <body id="ProfileController" class="hiddenScroll">
        <!-- Navigation -->
        <nav class="navbar navbar-default" id="mainTopnav">
            <div class="row-fluid">
                <div class="top_loginbar navbar-fixed-top">
                    <div class="colwac-xs-3 colwac-md-3 colwac-lg-3 backgorund_white"></div>

                    <div class="container">
                        <div class="col-md-2 col-lg-2 logo_topbar">
                            <div class="abslogo_position">
                                <a href="/user/dashboard">
                                    <img src="/frontend/assets/images/mmdb.png" border="0" style="height: 215px;margin-top: -60px;margin-left: -110px;width: 453px;" />
                                </a>
                            </div>
                        </div>

                        <div class="col-md-10 col-lg-10 logo_topbar">
                            <div class="login_innerbar">
                                <div class="topnav_bar">
                                    <!-- Collect the nav links, forms, and other content for toggling -->

                                    <div class="collapse navbar-collapse" id="topbar-userinfo">
                                        <ul class="nav navbar-nav navbar-right">
                                            <li class="homelink dashboard_class">
                                                <a href="/user/dashboard">
                                                    <span style="font-size: 25px; color: rgb(66, 197, 230);">
                                                        <i class="fa fa-home"></i>
                                                    </span>
                                                    <div class="icontopheader_left sm-icondefaultcolor">Home</div>
                                                </a>
                                            </li>

                                            {{-- <li class="">
                                                <a href="/gallery">
                                                    <span style="font-size: 25px; color: rgb(66, 197, 230);">
                                                        <i class="fa fa-picture-o"></i>
                                                    </span>
                                                    <div class="icontopheader_left sm-icondefaultcolor">Gallery</div>
                                                    <div class="clearfix"></div>
                                                </a>
                                            </li> --}}

                                            <li class="searchlink">
                                                <a href="/search">
                                                    <span style="font-size: 25px; color: rgb(66, 197, 230);">
                                                        <i class="fa fa-search"></i>
                                                    </span>
                                                    <div class="icontopheader_left sm-icondefaultcolor">Search</div>
                                                </a>
                                            </li>

                                            <li class="no-cpu">
                                                <a href="/profile/favourites">
                                                    <span style="font-size: 25px; color: red;">
                                                        <i class="fa fa-heart fa-spin"></i>
                                                    </span>
                                                    <div class="icontopheader_left sm-icondefaultcolor basic-heart">Likes</div>

                                                    <div class="fav-outline animate-ripple-delayed ng-scope" style="visibility: hidden;"></div>
                                                    <div class="clearfix"></div>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#" class="dropdown-toggle" data-toggle="modal" data-target="#chatModal">
                                                    <span style="font-size: 25px; color: rgb(66, 197, 230);">
                                                        <i class="fa fa-comments"></i>
                                                    </span>
                                                    <div class="icontopheader_left sm-icondefaultcolor">
                                                        Messages

                                                        <span class="badge progress-bar-danger badge-xs sm-small-badge sm-topicon-badge messageCounterUpdate" style="visibility: hidden;"> 0 </span>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </a>
                                            </li>
                                            <li class="dropdown" style="padding-top: 5px; text-align: center;">
                                                 @if (isset($addPhoto->image))
                                                <div style="float: left; padding-right: 10px; padding-left: 8px; line-height: 32px;">
                                                    <a href="/user/dashboard">
                                                        <img class="img-circle" src="{{asset('frontend/assets/images/')}}/{{ $addPhoto->image }}" height="32px" width="32px" />
                                                    </a>
                                                </div>
                                                @else
                                                <div style="float: left; padding-right: 10px; padding-left: 8px; line-height: 32px;">
                                                    <a href="/user/dashboard">
                                                        <img class="img-circle" src="{{asset('frontend/assets/images/')}}/default2.jpg" height="32px" width="32px" />
                                                    </a>
                                                </div>                                                 
                                                @endif

                                                <div style="margin-top: 10px;">
                                                    <a href="/user/dashboard/profile" class="dropdown-toggle" data-toggle="dropdown" style="font-size: 10px;"> {{$user->UserName}}</a>
                                                </div>
                                                <div style="clear: both;"></div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- /.container-fluid -->
        </nav>

        {{-- start main page from here --}} {{-- end main page from here --}}

        <div>
            <main>
                @yield('content')
            </main>
        </div>

        <!-- Footer -->

        <footer class="primary-font-2 relative-position">
            <div class="container">
                <div class="row">
                    <div class="col-xs-3">
                        <ul>
                            <li class="liheader female-text-color">
                                <h4 class="primary-text-color fontsize-14">
                                    About Us
                                </h4>
                            </li>
                            <li class="primary-font-2 light-font fontsize-12">
                                <a href="/login">
                                    Login
                                </a>
                            </li>
                            <li class="primary-font-2 light-font fontsize-12">
                                <a href="/signup">
                                    Register
                                </a>
                            </li>
                            <li class="primary-font-2 light-font fontsize-12">
                                <a href="/search">
                                    Search
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-xs-3">
                        <ul>
                            <li class="liheader male-text-color fontsize-12">
                                <h4 class="primary-text-color fontsize-14">News</h4>
                            </li>
                            
                            @foreach ($pages ->where('section', 2) as $page)
                            {{-- @dd($page); --}}
                            <li class="primary-font-2 light-font fontsize-12">
                                <a href="/pages/news/Umrah-Winners/{{$page->id}}"> {{$page->name}} </a>
                            </li>
                            @endforeach
                            
                                
                            {{-- @endforeach --}}

                            {{-- <li class="primary-font-2 light-font fontsize-12">
                            <a href="/pages/news/{{$page->slug}}/{{$page->id}}"> {{$page->name}} </a>
                            </li>
                            <li class="primary-font-2 light-font fontsize-12">
                                <a href="/pages/news/Reviews/3"> Reviews </a>
                            </li>
                            <li class="primary-font-2 light-font fontsize-12">
                                <a href="/pages/news/In-The-News"> In The News </a>
                            </li>
                            <li class="primary-font-2 light-font fontsize-12">
                                <a href="/pages/news/Site-News">
                                    Site News
                                </a>
                            </li>
                            <li class="primary-font-2 light-font fontsize-12">
                                <a href="/pages/news/PR">
                                    PR
                                </a>
                            </li> --}}
                        </ul>
                    </div>
                    <div class="col-xs-3">
                        <ul>
                            <li class="liheader female-text-color">
                                <h4 class="primary-text-color fontsize-14">Our Standards</h4>
                            </li>
                            
                            @foreach ($pages->where('section', 3) as $page)
                            {{-- @dd($page); --}}
                            <li class="primary-font-2 light-font fontsize-12">
                                <a href="/pages/news/Umrah-Winners/{{$page->id}}"> {{$page->name}} </a>
                            </li>
                            @endforeach

                        </ul>
                    </div>

                    <div class="col-xs-3">
                        <ul>
                            <li class="liheader male-text-color">
                                <h4 class="primary-text-color fontsize-14">Help</h4>
                            </li>
                           @foreach ($pages->where('section', 4) as $page)
                            {{-- @dd($page); --}}
                            <li class="primary-font-2 light-font fontsize-12">
                                <a href="/pages/news/Umrah-Winners/{{$page->id}}"> {{$page->name}} </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="col-xs-12">
                        <div class="col-xs-9">
                            <p style="font-size: 13px;">
                                <?php echo date("Y"); ?>
                                &copy; {{$info->name}}
                            </p>
                        </div>

                        <div class="col-xs-3">
                            <a href="https://www.smartsoftware.com.bd/">Developed By: <b> Smart Software Ltd. </b></a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <div class="site-overlay"></div>
        <div class="site-overlaynotification"></div>
        <div id="MessagesController">
            <div class="modal fade modal-wide" id="chatModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="false">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div id="messaging">
                            <div class="options">
                                <div class="option">
                                    <div class="check-threads pull-right">Edit</div>
                                    <div class="check-threads-selectall pull-left">Select All</div>
                                    <div class="show-thread-deleteoption">
                                        <div class="pull-right cancellink"><span class="pipeline">|</span>Cancel</div>
                                        <div class="pull-right deletelink">Delete</div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="option-readunred">
                                    <div class="input-group btn-group btn-group-radio male">
                                        <input
                                            id="general_hidden_all-0"
                                            group="general_unread_hidden"
                                            type="radio"
                                            class="form-control"
                                            checked="checked"
                                            value="0"
                                            data-size="mini"
                                            data-toggle="toggle"
                                            data-on="Yes"
                                            data-off="No"
                                            data-onstyle="success"
                                            data-offstyle="default"
                                            name="general_hidden_message"
                                        />
                                        <label id="label-general_hidden_all" for="general_hidden_all-0" class="activtab"> All Messages</label>

                                        <input
                                            id="general_unread-1"
                                            group="general_unread_hidden"
                                            type="radio"
                                            class="form-control"
                                            value="1"
                                            data-size="mini"
                                            data-toggle="toggle"
                                            data-on="Yes"
                                            data-off="No"
                                            data-onstyle="success"
                                            data-offstyle="default"
                                            name="general_hidden_message"
                                        />
                                        <label id="label-general_unread_hidden" for="general_unread-1" class=" ">
                                            Unread
                                            <span class="badge progress-bar-danger badge-xs unreadthread messageCounterUpdatemessage" style="display: none;"> 0 </span>
                                        </label>
                                    </div>

                                    <!--            Unread Only : <input id="messages-threads-unread-only" type="checkbox" data-size="mini" data-toggle="toggle" data-on="Yes" data-off="No" data-onstyle="success" data-offstyle="default">-->
                                </div>
                            </div>
                            <div id="messaging-threads"></div>
                            <div id="messaging-thread">
                                <div class="thread-header">
                                    <div class="user-details">
                                        <div class="image-holder"><img src="" /></div>
                                        <div class="userdetail-section">
                                            <div class="username"></div>
                                            <div class="user-blocked badge-info">Blocked</div>
                                            <div class="details"></div>
                                        </div>
                                        <div class="user-buttons">
                                            <div id="messages-thread-block-user" class="pull-left block-button">
                                                <span class="sm-line basic-ban"></span><br />
                                                <span class="button-label">Block User</span>
                                            </div>
                                            <div id="messages-thread-report-user" class="pull-left report-button btn-report">
                                                <span class="sm-line basic-flag1"></span><br />
                                                <span class="button-label">Report User</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pull-right closeButton">
                                        <button type="button" class="close clos_padding" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                                    </div>
                                </div>
                                <div class="messages">
                                    <div class="wrapper"></div>
                                    <div class="nomessagefound">You have no messages</div>

                                    <!--            <div class="pre-written"></div>-->
                                </div>

                                <div class="footer">
                                    <textarea id="messageText" name="message" data-noelastic="1" style="overflow-x: hidden; overflow-wrap: break-word;"></textarea>
                                    <button type="submit">
                                        <span class="glyphicon glyphicon-send"></span><br />
                                        Send
                                    </button>
                                </div>
                                <div class="footer footer-overlay"></div>
                                <div class="overlay"><div class="loader-img"></div></div>
                            </div>
                            <div id="messaging-templates">
                                <div class="thread" data-toggle="tooltip" data-original-title="" title="">
                                    <input type="checkbox" />

                                    <div class="image-holder">
                                        <img src="" />
                                        <div class="badge"></div>
                                    </div>

                                    <div class="username"></div>
                                    <div class="date"></div>
                                    <div class="last-message-text"></div>
                                    <span class="glyphicon glyphicon-remove delete"></span>
                                    <ul class="nav pull-right dots-menu">
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">...</a>
                                            <ul class="dropdown-menu extra-options">
                                                <li class="extralinks viewprofile">View Profile</li>
                                                <li class="extralinks blockuser">Block</li>
                                                <li class="extralinks markasunread cant-block">Mark as Unread</li>
                                                <li class="extralinks markasread cant-block">Mark as Read</li>
                                                <li class="extralinks blockcountry block-country" data-country="country">Block Message From</li>
                                                <li class="extralinks removeborder-extralinks report-button btn-report">Report User</li>
                                            </ul>
                                        </li>
                                    </ul>

                                    <div class="overlay"><div class="loader-img"></div></div>
                                </div>
                                <div class="message">
                                    <div class="date"></div>
                                    <div class="bubble">
                                        <div class="text"></div>
                                        <div class="seen"><span class="glyphicon glyphicon-ok"></span></div>
                                        <div class="overlay"><div class="loader-img"></div></div>
                                    </div>

                                    <div class="controls">
                                        <a id="messages-thread-delete-message" href="#"><span class="sm-line basic-trashcan"></span><span class="button-label">Delete</span></a>
                                        <a id="messages-thread-spam-message" href="#"><span class="message_ban sm-line basic-ban"></span><span class="button-label">Spam</span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="packages packagesSectionNew" style="display: none;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Global site tag (gtag.js) - Google Analytics -->

        <!--<script async src="https://www.googletagmanager.com/gtag/js?id=UA-108538968-2"></script>-->
        <!---->
        <!--<script>-->
        <!---->
        <!--    window.dataLayer = window.dataLayer || [];-->
        <!---->
        <!--    function gtag(){dataLayer.push(arguments);}-->
        <!---->
        <!--    gtag('js', new Date());-->
        <!---->
        <!---->
        <!---->
        <!--    gtag('config', 'UA-108538968-2');-->
        <!---->
        <!--</script>-->

        <script type="text/javascript" id="">
            !(function (b, e, f, g, a, c, d) {
                b.fbq ||
                    ((a = b.fbq = function () {
                        a.callMethod ? a.callMethod.apply(a, arguments) : a.queue.push(arguments);
                    }),
                    b._fbq || (b._fbq = a),
                    (a.push = a),
                    (a.loaded = !0),
                    (a.version = "2.0"),
                    (a.queue = []),
                    (c = e.createElement(f)),
                    (c.async = !0),
                    (c.src = g),
                    (d = e.getElementsByTagName(f)[0]),
                    d.parentNode.insertBefore(c, d));
            })(window, document, "script", "https://connect.facebook.net/en_US/fbevents.js");
            fbq("init", "2251928191696851");
            fbq("trackCustom", "PageViewDesktop");
        </script>
        <noscript><img height="1" width="1" style="display: none;" src="https://www.facebook.com/tr?id=2251928191696851&amp;ev=PageView&amp;noscript=1" /></noscript>

        <script type="text/javascript" id="">
            !(function (b, e, f, g, a, c, d) {
                b.fbq ||
                    ((a = b.fbq = function () {
                        a.callMethod ? a.callMethod.apply(a, arguments) : a.queue.push(arguments);
                    }),
                    b._fbq || (b._fbq = a),
                    (a.push = a),
                    (a.loaded = !0),
                    (a.version = "2.0"),
                    (a.queue = []),
                    (c = e.createElement(f)),
                    (c.async = !0),
                    (c.src = g),
                    (d = e.getElementsByTagName(f)[0]),
                    d.parentNode.insertBefore(c, d));
            })(window, document, "script", "https://connect.facebook.net/en_US/fbevents.js");
            fbq("init", "2251928191696851");
            fbq("trackCustom", "PageViewDesktop");
        </script>
        <noscript><img height="1" width="1" style="display: none;" src="https://www.facebook.com/tr?id=2251928191696851&amp;ev=PageView&amp;noscript=1" /></noscript>
    </body>
</html>
