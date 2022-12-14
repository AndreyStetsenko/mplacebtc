@extends('site.layout.base')

@section('content')

<div class="no-bottom" id="content">
    <div id="top"></div>

    <section aria-label="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                   <div class="d_profile de-flex">
                        <div class="de-flex-col">
                            <div class="profile_avatar">
                                <img src="{{ asset($user->attach->url ?? '') }}" alt="">
                                <i class="fa fa-check"></i>
                                <div class="profile_name">
                                    <h4>
                                        {{ $user->name }}                                                
                                        <span class="profile_username">@monicaaa</span>
                                        <span id="wallet" class="profile_wallet">DdzFFzCqrhshMSxb9oW3mRo4MJrQkusV3fGFSTwaiu4wPBqMryA9DYVJCkW9n7twCffG5f5wX2sSkoDXGiZB1HPa7K7f865Kk4LqnrME</span>
                                        <button id="btn_copy" title="Copy Text">Copy</button>
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class="profile_follow de-flex">
                            <div class="de-flex-col">
                                <div class="profile_follower">500 followers</div>
                            </div>
                            <div class="de-flex-col">
                                <a href="#" class="btn-main">Follow</a>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-md-12">
                    <div class="de_tab tab_simple">

                        <ul class="de_nav">
                            <li class="active"><span>On Sale</span></li>
                            <li><span>Created</span></li>
                            <li><span>Liked</span></li>
                        </ul>
                        
                        <div class="de_tab_content">
                            
                            <div class="tab-1">
                                <div class="row">
                                        <!-- nft item begin -->
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                            <div class="nft__item style-2">
                                                <div class="de_countdown" data-year="2022" data-month="6" data-day="16" data-hour="8"></div>
                                                <div class="author_list_pp">
                                                    <a href="03_grey-author.html">                                    
                                                        <img class="lazy" src="images/author/author-1.jpg" alt="">
                                                        <i class="fa fa-check"></i>
                                                    </a>
                                                </div>
                                                <div class="nft__item_wrap">
                                                    <div class="nft__item_extra">
                                                        <div class="nft__item_buttons">
                                                            <button onclick="location.href='03_grey-item-details.html'">Buy Now</button>
                                                            <div class="nft__item_share">
                                                                <h4>Share</h4>
                                                                <a href="https://www.facebook.com/sharer/sharer.php?u=https://gigaland.io" target="_blank"><i class="fa fa-facebook fa-lg"></i></a>
                                                                <a href="https://twitter.com/intent/tweet?url=https://gigaland.io" target="_blank"><i class="fa fa-twitter fa-lg"></i></a>
                                                                <a href="mailto:?subject=I wanted you to see this site&amp;body=Check out this site https://gigaland.io"><i class="fa fa-envelope fa-lg"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="03_grey-item-details.html">
                                                        <img src="images/author_single/porto-1.jpg" class="lazy nft__item_preview" alt="">
                                                    </a>
                                                </div>
                                                <div class="nft__item_info">
                                                    <a href="03_grey-item-details.html">
                                                        <h4>Pinky Ocean</h4>
                                                    </a>
                                                    <div class="nft__item_click">
                                <span></span>
                            </div>
                            <div class="nft__item_price">
                                                        0.08 ETH<span>1/20</span>
                                                    </div>
                                                    <div class="nft__item_action">
                                                        <a href="#">Place a bid</a>
                                                    </div>
                                                    <div class="nft__item_like">
                                                        <i class="fa fa-heart"></i><span>50</span>
                                                    </div>                            
                                                </div> 
                                            </div>
                                        </div>                 
                                        <!-- nft item begin -->
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                            <div class="nft__item style-2">
                                                <div class="author_list_pp">
                                                    <a href="03_grey-author.html">                                    
                                                        <img class="lazy" src="images/author/author-1.jpg" alt="">
                                                        <i class="fa fa-check"></i>
                                                    </a>
                                                </div>
                                                <div class="nft__item_wrap">
                                                    <div class="nft__item_extra">
                                                        <div class="nft__item_buttons">
                                                            <button onclick="location.href='03_grey-item-details.html'">Buy Now</button>
                                                            <div class="nft__item_share">
                                                                <h4>Share</h4>
                                                                <a href="https://www.facebook.com/sharer/sharer.php?u=https://gigaland.io" target="_blank"><i class="fa fa-facebook fa-lg"></i></a>
                                                                <a href="https://twitter.com/intent/tweet?url=https://gigaland.io" target="_blank"><i class="fa fa-twitter fa-lg"></i></a>
                                                                <a href="mailto:?subject=I wanted you to see this site&amp;body=Check out this site https://gigaland.io"><i class="fa fa-envelope fa-lg"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="03_grey-item-details.html">
                                                        <img src="images/author_single/porto-2.jpg" class="lazy nft__item_preview" alt="">
                                                    </a>
                                                </div>
                                                <div class="nft__item_info">
                                                    <a href="03_grey-item-details.html">
                                                        <h4>The Animals</h4>
                                                    </a>
                                                    <div class="nft__item_click">
                                <span></span>
                            </div>
                            <div class="nft__item_price">
                                                        0.06 ETH<span>1/22</span>
                                                    </div>
                                                    <div class="nft__item_action">
                                                        <a href="#">Place a bid</a>
                                                    </div>
                                                    <div class="nft__item_like">
                                                        <i class="fa fa-heart"></i><span>80</span>
                                                    </div>                                 
                                                </div> 
                                            </div>
                                        </div>
                                        <!-- nft item begin -->
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                            <div class="nft__item style-2">
                                                <div class="de_countdown" data-year="2022" data-month="6" data-day="14" data-hour="8"></div>
                                                <div class="author_list_pp">
                                                    <a href="03_grey-author.html">                                    
                                                        <img class="lazy" src="images/author/author-1.jpg" alt="">
                                                        <i class="fa fa-check"></i>
                                                    </a>
                                                </div>
                                                <div class="nft__item_wrap">
                                                    <div class="nft__item_extra">
                                                        <div class="nft__item_buttons">
                                                            <button onclick="location.href='03_grey-item-details.html'">Buy Now</button>
                                                            <div class="nft__item_share">
                                                                <h4>Share</h4>
                                                                <a href="https://www.facebook.com/sharer/sharer.php?u=https://gigaland.io" target="_blank"><i class="fa fa-facebook fa-lg"></i></a>
                                                                <a href="https://twitter.com/intent/tweet?url=https://gigaland.io" target="_blank"><i class="fa fa-twitter fa-lg"></i></a>
                                                                <a href="mailto:?subject=I wanted you to see this site&amp;body=Check out this site https://gigaland.io"><i class="fa fa-envelope fa-lg"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="03_grey-item-details.html">
                                                        <img src="images/author_single/porto-3.jpg" class="lazy nft__item_preview" alt="">
                                                    </a>
                                                </div>
                                                <div class="nft__item_info">
                                                    <a href="03_grey-item-details.html">
                                                        <h4>Three Donuts</h4>
                                                    </a>
                                                    <div class="nft__item_click">
                                <span></span>
                            </div>
                            <div class="nft__item_price">
                                                        0.05 ETH<span>1/11</span>
                                                    </div>
                                                    <div class="nft__item_action">
                                                        <a href="#">Place a bid</a>
                                                    </div>
                                                    <div class="nft__item_like">
                                                        <i class="fa fa-heart"></i><span>97</span>
                                                    </div>                                 
                                                </div> 
                                            </div>
                                        </div>
                                        <!-- nft item begin -->
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                            <div class="nft__item style-2">
                                                <div class="author_list_pp">
                                                    <a href="03_grey-author.html">                                    
                                                        <img class="lazy" src="images/author/author-1.jpg" alt="">
                                                        <i class="fa fa-check"></i>
                                                    </a>
                                                </div>
                                                <div class="nft__item_wrap">
                                                    <div class="nft__item_extra">
                                                        <div class="nft__item_buttons">
                                                            <button onclick="location.href='03_grey-item-details.html'">Buy Now</button>
                                                            <div class="nft__item_share">
                                                                <h4>Share</h4>
                                                                <a href="https://www.facebook.com/sharer/sharer.php?u=https://gigaland.io" target="_blank"><i class="fa fa-facebook fa-lg"></i></a>
                                                                <a href="https://twitter.com/intent/tweet?url=https://gigaland.io" target="_blank"><i class="fa fa-twitter fa-lg"></i></a>
                                                                <a href="mailto:?subject=I wanted you to see this site&amp;body=Check out this site https://gigaland.io"><i class="fa fa-envelope fa-lg"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="03_grey-item-details.html">
                                                        <img src="images/author_single/porto-4.jpg" class="lazy nft__item_preview" alt="">
                                                    </a>
                                                </div>
                                                <div class="nft__item_info">
                                                    <a href="03_grey-item-details.html">
                                                        <h4>Graffiti Colors</h4>
                                                    </a>
                                                    <div class="nft__item_click">
                                <span></span>
                            </div>
                            <div class="nft__item_price">
                                                        0.02 ETH<span>1/15</span>
                                                    </div>
                                                    <div class="nft__item_action">
                                                        <a href="#">Place a bid</a>
                                                    </div>
                                                    <div class="nft__item_like">
                                                        <i class="fa fa-heart"></i><span>73</span>
                                                    </div>                                 
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            
                            <div class="tab-2">
                                <div class="row">

                                        <!-- nft item begin -->
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                            <div class="nft__item style-2">
                                                <div class="de_countdown" data-year="2022" data-month="6" data-day="14" data-hour="8"></div>
                                                <div class="author_list_pp">
                                                    <a href="03_grey-author.html">                                    
                                                        <img class="lazy" src="images/author/author-1.jpg" alt="">
                                                        <i class="fa fa-check"></i>
                                                    </a>
                                                </div>
                                                <div class="nft__item_wrap">
                                                    <div class="nft__item_extra">
                                                        <div class="nft__item_buttons">
                                                            <button onclick="location.href='03_grey-item-details.html'">Buy Now</button>
                                                            <div class="nft__item_share">
                                                                <h4>Share</h4>
                                                                <a href="https://www.facebook.com/sharer/sharer.php?u=https://gigaland.io" target="_blank"><i class="fa fa-facebook fa-lg"></i></a>
                                                                <a href="https://twitter.com/intent/tweet?url=https://gigaland.io" target="_blank"><i class="fa fa-twitter fa-lg"></i></a>
                                                                <a href="mailto:?subject=I wanted you to see this site&amp;body=Check out this site https://gigaland.io"><i class="fa fa-envelope fa-lg"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="03_grey-item-details.html">
                                                        <img src="images/author_single/porto-3.jpg" class="lazy nft__item_preview" alt="">
                                                    </a>
                                                </div>
                                                <div class="nft__item_info">
                                                    <a href="03_grey-item-details.html">
                                                        <h4>Three Donuts</h4>
                                                    </a>
                                                    <div class="nft__item_click">
                                <span></span>
                            </div>
                            <div class="nft__item_price">
                                                        0.05 ETH<span>1/11</span>
                                                    </div>
                                                    <div class="nft__item_action">
                                                        <a href="#">Place a bid</a>
                                                    </div>
                                                    <div class="nft__item_like">
                                                        <i class="fa fa-heart"></i><span>97</span>
                                                    </div>                                 
                                                </div> 
                                            </div>
                                        </div>
                                        <!-- nft item begin -->
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                            <div class="nft__item style-2">
                                                <div class="de_countdown" data-year="2022" data-month="6" data-day="16" data-hour="8"></div>
                                                <div class="author_list_pp">
                                                    <a href="03_grey-author.html">                                    
                                                        <img class="lazy" src="images/author/author-1.jpg" alt="">
                                                        <i class="fa fa-check"></i>
                                                    </a>
                                                </div>
                                                <div class="nft__item_wrap">
                                                    <div class="nft__item_extra">
                                                        <div class="nft__item_buttons">
                                                            <button onclick="location.href='03_grey-item-details.html'">Buy Now</button>
                                                            <div class="nft__item_share">
                                                                <h4>Share</h4>
                                                                <a href="https://www.facebook.com/sharer/sharer.php?u=https://gigaland.io" target="_blank"><i class="fa fa-facebook fa-lg"></i></a>
                                                                <a href="https://twitter.com/intent/tweet?url=https://gigaland.io" target="_blank"><i class="fa fa-twitter fa-lg"></i></a>
                                                                <a href="mailto:?subject=I wanted you to see this site&amp;body=Check out this site https://gigaland.io"><i class="fa fa-envelope fa-lg"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="03_grey-item-details.html">
                                                        <img src="images/author_single/porto-1.jpg" class="lazy nft__item_preview" alt="">
                                                    </a>
                                                </div>
                                                <div class="nft__item_info">
                                                    <a href="03_grey-item-details.html">
                                                        <h4>Pinky Ocean</h4>
                                                    </a>
                                                    <div class="nft__item_click">
                                <span></span>
                            </div>
                            <div class="nft__item_price">
                                                        0.08 ETH<span>1/20</span>
                                                    </div>
                                                    <div class="nft__item_action">
                                                        <a href="#">Place a bid</a>
                                                    </div>
                                                    <div class="nft__item_like">
                                                        <i class="fa fa-heart"></i><span>50</span>
                                                    </div>                            
                                                </div> 
                                            </div>
                                        </div>                 
                                        <!-- nft item begin -->
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                            <div class="nft__item style-2">
                                                <div class="author_list_pp">
                                                    <a href="03_grey-author.html">                                    
                                                        <img class="lazy" src="images/author/author-1.jpg" alt="">
                                                        <i class="fa fa-check"></i>
                                                    </a>
                                                </div>
                                                <div class="nft__item_wrap">
                                                    <div class="nft__item_extra">
                                                        <div class="nft__item_buttons">
                                                            <button onclick="location.href='03_grey-item-details.html'">Buy Now</button>
                                                            <div class="nft__item_share">
                                                                <h4>Share</h4>
                                                                <a href="https://www.facebook.com/sharer/sharer.php?u=https://gigaland.io" target="_blank"><i class="fa fa-facebook fa-lg"></i></a>
                                                                <a href="https://twitter.com/intent/tweet?url=https://gigaland.io" target="_blank"><i class="fa fa-twitter fa-lg"></i></a>
                                                                <a href="mailto:?subject=I wanted you to see this site&amp;body=Check out this site https://gigaland.io"><i class="fa fa-envelope fa-lg"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="03_grey-item-details.html">
                                                        <img src="images/author_single/porto-2.jpg" class="lazy nft__item_preview" alt="">
                                                    </a>
                                                </div>
                                                <div class="nft__item_info">
                                                    <a href="03_grey-item-details.html">
                                                        <h4>The Animals</h4>
                                                    </a>
                                                    <div class="nft__item_click">
                                <span></span>
                            </div>
                            <div class="nft__item_price">
                                                        0.06 ETH<span>1/22</span>
                                                    </div>
                                                    <div class="nft__item_action">
                                                        <a href="#">Place a bid</a>
                                                    </div>
                                                    <div class="nft__item_like">
                                                        <i class="fa fa-heart"></i><span>80</span>
                                                    </div>                                 
                                                </div> 
                                            </div>
                                        </div>
                                        <!-- nft item begin -->
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                            <div class="nft__item style-2">
                                                <div class="author_list_pp">
                                                    <a href="03_grey-author.html">                                    
                                                        <img class="lazy" src="images/author/author-1.jpg" alt="">
                                                        <i class="fa fa-check"></i>
                                                    </a>
                                                </div>
                                                <div class="nft__item_wrap">
                                                    <div class="nft__item_extra">
                                                        <div class="nft__item_buttons">
                                                            <button onclick="location.href='03_grey-item-details.html'">Buy Now</button>
                                                            <div class="nft__item_share">
                                                                <h4>Share</h4>
                                                                <a href="https://www.facebook.com/sharer/sharer.php?u=https://gigaland.io" target="_blank"><i class="fa fa-facebook fa-lg"></i></a>
                                                                <a href="https://twitter.com/intent/tweet?url=https://gigaland.io" target="_blank"><i class="fa fa-twitter fa-lg"></i></a>
                                                                <a href="mailto:?subject=I wanted you to see this site&amp;body=Check out this site https://gigaland.io"><i class="fa fa-envelope fa-lg"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="03_grey-item-details.html">
                                                        <img src="images/author_single/porto-4.jpg" class="lazy nft__item_preview" alt="">
                                                    </a>
                                                </div>
                                                <div class="nft__item_info">
                                                    <a href="03_grey-item-details.html">
                                                        <h4>Graffiti Colors</h4>
                                                    </a>
                                                    <div class="nft__item_click">
                                <span></span>
                            </div>
                            <div class="nft__item_price">
                                                        0.02 ETH<span>1/15</span>
                                                    </div>
                                                    <div class="nft__item_action">
                                                        <a href="#">Place a bid</a>
                                                    </div>
                                                    <div class="nft__item_like">
                                                        <i class="fa fa-heart"></i><span>73</span>
                                                    </div>                                 
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                            </div>

                            <div class="tab-3">
                                <div class="row">
                                    <!-- nft item begin -->
                                    <div class="col-lg-3 col-md-6">
                                        <div class="nft__item style-2">
                                            <div class="author_list_pp">
                                                <a href="03_grey-author.html">                                    
                                                    <img class="lazy" src="images/author/author-1.jpg" alt="">
                                                    <i class="fa fa-check"></i>
                                                </a>
                                            </div>
                                            <div class="nft__item_wrap">
                                                <a href="03_grey-item-details.html">
                                                    <img src="images/items/anim-4.webp" class="lazy nft__item_preview" alt="">
                                                </a>
                                            </div>
                                            <div class="nft__item_info">
                                                <a href="03_grey-item-details.html">
                                                    <h4>The Truth</h4>
                                                </a>
                                                <div class="nft__item_click">
                                <span></span>
                            </div>
                            <div class="nft__item_price">
                                                    0.06 ETH<span>1/20</span>
                                                </div>
                                                <div class="nft__item_action">
                                                    <a href="#">Place a bid</a>
                                                </div>
                                                <div class="nft__item_like">
                                                    <i class="fa fa-heart"></i><span>26</span>
                                                </div>                                 
                                            </div>
                                        </div>
                                    </div>
                                    <!-- nft item begin -->
                                    <div class="col-lg-3 col-md-6">
                                        <div class="nft__item style-2">
                                            <div class="de_countdown" data-year="2022" data-month="6" data-day="6" data-hour="8"></div>
                                            <div class="author_list_pp">
                                                <a href="03_grey-author.html">                                    
                                                    <img class="lazy" src="images/author/author-2.jpg" alt="">
                                                    <i class="fa fa-check"></i>
                                                </a>
                                            </div>
                                            <div class="nft__item_wrap">
                                                <a href="03_grey-item-details.html">
                                                    <img src="images/items/anim-2.webp" class="lazy nft__item_preview" alt="">
                                                </a>
                                            </div>
                                            <div class="nft__item_info">
                                                <a href="03_grey-item-details.html">
                                                    <h4>Running Puppets</h4>
                                                </a>
                                                <div class="nft__item_click">
                                <span></span>
                            </div>
                            <div class="nft__item_price">
                                                    0.03 ETH<span>1/24</span>
                                                </div>    
                                                <div class="nft__item_action">
                                                    <a href="#">Place a bid</a>
                                                </div>
                                                <div class="nft__item_like">
                                                    <i class="fa fa-heart"></i><span>45</span>
                                                </div>                                  
                                            </div> 
                                        </div>
                                    </div>
                                    <!-- nft item begin -->
                                    <div class="col-lg-3 col-md-6">
                                        <div class="nft__item style-2">
                                            <div class="author_list_pp">
                                                <a href="03_grey-author.html">                                    
                                                    <img class="lazy" src="images/author/author-3.jpg" alt="">
                                                    <i class="fa fa-check"></i>
                                                </a>
                                            </div>
                                            <div class="nft__item_wrap">
                                                <a href="03_grey-item-details.html">
                                                    <img src="images/items/anim-1.webp" class="lazy nft__item_preview" alt="">
                                                </a>
                                            </div>
                                            <div class="nft__item_info">
                                                <a href="03_grey-item-details.html">
                                                    <h4>USA Wordmation</h4>
                                                </a>
                                                <div class="nft__item_click">
                                <span></span>
                            </div>
                            <div class="nft__item_price">
                                                    0.09 ETH<span>1/25</span>
                                                </div>
                                                <div class="nft__item_action">
                                                    <a href="#">Place a bid</a>
                                                </div>
                                                <div class="nft__item_like">
                                                    <i class="fa fa-heart"></i><span>76</span>
                                                </div>                                 
                                            </div> 
                                        </div>
                                    </div>
                                    <!-- nft item begin -->
                                    <div class="col-lg-3 col-md-6">
                                        <div class="nft__item style-2">
                                            <div class="de_countdown" data-year="2022" data-month="6" data-day="8" data-hour="8"></div>
                                            <div class="author_list_pp">
                                                <a href="03_grey-author.html">                                    
                                                    <img class="lazy" src="images/author/author-4.jpg" alt="">
                                                    <i class="fa fa-check"></i>
                                                </a>
                                            </div>
                                            <div class="nft__item_wrap">
                                                <a href="03_grey-item-details.html">
                                                    <img src="images/items/anim-5.webp" class="lazy nft__item_preview" alt="">
                                                </a>
                                            </div>
                                            <div class="nft__item_info">
                                                <a href="03_grey-item-details.html">
                                                    <h4>Loop Donut</h4>
                                                </a>
                                                <div class="nft__item_click">
                                <span></span>
                            </div>
                            <div class="nft__item_price">
                                                    0.09 ETH<span>1/14</span>
                                                </div>
                                                <div class="nft__item_action">
                                                    <a href="#">Place a bid</a>
                                                </div>
                                                <div class="nft__item_like">
                                                    <i class="fa fa-heart"></i><span>94</span>
                                                </div>                                 
                                            </div> 
                                        </div>
                                    </div>                                                
                                </div>
                            </div>
                            
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
</div>

@endsection