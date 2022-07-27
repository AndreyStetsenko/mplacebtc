<header class="transparent scroll-dark">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="de-flex sm-pt10">
                    <div class="de-flex-col">
                        <div class="de-flex-col">
                            <!-- logo begin -->
                            <div id="logo">
                                <a href="{{ route('home') }}">
                                    <img alt="" src="{{ asset('site/images/logo-3.png') }}" />
                                </a>
                            </div>
                            <!-- logo close -->
                        </div>
                        <div class="de-flex-col">
                            <input id="quick_search" class="xs-hide style-2" name="quick_search" placeholder="search item here..." type="text" />
                        </div>
                    </div>
                    <div class="de-flex-col header-col-mid">
                        <!-- mainmenu begin -->
                        <ul id="mainmenu">
                            <li>
                                <a href="{{ route('home') }}">Home<span></span></a>
                            </li>
                            <li>
                                <a href="{{ route('products') }}">Products<span></span></a>
                            </li>
                        </ul>
                        <!-- mainmenu close -->
                        @if ( !auth()->user() )
                        <div class="menu_side_area">
                            <a href="03_grey-wallet.html" class="btn-main btn-wallet"><i class="icon_wallet_alt"></i><span>Login</span></a>
                            <span id="menu-btn"></span>
                        </div>
                        @else
                        <div class="menu_side_area">
                            <div class="de-login-menu">
                                <a href="{{ route('account.home') }}" class="btn-main btn-wallet"><i class="icon_wallet_alt"></i><span>Create</span></a>

                                <span id="de-click-menu-notification" class="de-menu-notification">
                                    <span class="d-count">8</span>
                                    <i class="fa fa-bell"></i>
                                </span>
                                
                                <span id="de-click-menu-profile" class="de-menu-profile">                           
                                    <img src="{{ Auth::user()->attach->url ?? '' }}" class="img-fluid" alt="">
                                    {{-- <img src="{{ Auth::user()->attach->where('post_type', 'users')->get()->last()->url ?? '' }}" class="img-fluid" alt=""> --}}
                                </span>

                                <div id="de-submenu-notification" class="de-submenu">
                                    <div class="de-flex">
                                        <div><h4>Notifications</h4></div>
                                        <a href="#">Show all</a>
                                    </div>

                                    <ul>
                                        <li>
                                            <a href="#">
                                                <img class="lazy" src="images/author/author-2.jpg" alt="">
                                                <div class="d-desc">
                                                    <span class="d-name"><b>Mamie Barnett</b> started following you</span>
                                                    <span class="d-time">1 hour ago</span>
                                                </div>
                                            </a>  
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img class="lazy" src="images/author/author-3.jpg" alt="">
                                                <div class="d-desc">
                                                    <span class="d-name"><b>Nicholas Daniels</b> liked your item</span>
                                                    <span class="d-time">2 hours ago</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img class="lazy" src="images/author/author-4.jpg" alt="">
                                                <div class="d-desc">
                                                    <span class="d-name"><b>Lori Hart</b> started following you</span>
                                                    <span class="d-time">18 hours ago</span>
                                                </div>
                                            </a>    
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img class="lazy" src="images/author/author-5.jpg" alt="">
                                                <div class="d-desc">
                                                    <span class="d-name"><b>Jimmy Wright</b> liked your item</span>
                                                    <span class="d-time">1 day ago</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img class="lazy" src="images/author/author-6.jpg" alt="">
                                                <div class="d-desc">
                                                    <span class="d-name"><b>Karla Sharp</b> started following you</span>
                                                    <span class="d-time">3 days ago</span>
                                                </div>
                                            </a>    
                                        </li>
                                    </ul>
                                </div>

                                <div id="de-submenu-profile" class="de-submenu">
                                    <div class="d-name">
                                        <h4>{{ Auth::user()->name }}</h4>
                                        <a href="{{ route('account.home') }}">Set display name</a>
                                    </div>
                                    <div class="spacer-10"></div>
                                    <div class="d-balance">
                                        <h4>Balance</h4>
                                        12.858 ETH
                                    </div>
                                    <div class="spacer-10"></div>
                                    <div class="d-wallet">
                                        <h4>My Wallet</h4>
                                        <span id="wallet" class="d-wallet-address">DdzFFzCqrhshMSxb9oW3mRo4MJrQkusV3fGFSTwaiu4wPBqMryA9DYVJCkW9n7twCffG5f5wX2sSkoDXGiZB1HPa7K7f865Kk4LqnrME</span>
                                        <button id="btn_copy" title="Copy Text">Copy</button>
                                    </div>

                                    <div class="d-line"></div>

                                    <ul class="de-submenu-profile">
                                        <li><a href="{{ route('author', auth()->user()->id) }}"><i class="fa fa-user"></i> My profile</a>
                                        <li><a href="{{ route('account.home') }}"><i class="fa fa-pencil"></i> Edit profile</a>
                                        <li><a href="{{ route('logout') }}"><i class="fa fa-sign-out"></i> Sign out</a>
                                    </ul>
                                </div>
                                <span id="menu-btn"></span>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>