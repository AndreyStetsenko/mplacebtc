@extends('site.layout.base')

@section('content')

<div class="no-bottom no-top" id="content">
    <div id="top"></div>
    
    <!-- section begin -->
    <section id="subheader">
            <div class="center-y relative text-center">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-md-12 text-center">
                            <h1>Edit Profile</h1>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
    </section>
    <!-- section close -->

    <!-- section begin -->
    <section id="section-main" aria-label="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <form id="form-create-item" class="form-border" method="post" action="email.php">
                    <div class="de_tab tab_simple">
                    
                        <ul class="de_nav">
                            <li class="active"><span><i class="fa fa-user"></i>Profile</span></li>
                            <li><span><i class="fa fa-exclamation-circle"></i>Notifications</span></li>
                            <li><span><i class="fa fa-paint-brush"></i>Appearance</span></li>
                        </ul>
                        
                        <div class="de_tab_content">                            
                            <div class="tab-1">
                                <div class="row wow fadeIn">
                                    <div class="col-lg-8 mb-sm-20">
                                            <div class="field-set">
                                                <h5>Username</h5>
                                                <input type="text" name="username" id="username" class="form-control" placeholder="Enter username" value="{{ auth()->user()->name }}" />                                    

                                                <div class="spacer-20"></div>

                                                <h5>Custom URL</h5>
                                                <input type="text" name="custom_url" id="custom_url" class="form-control" placeholder="Enter your custom URL" />

                                                <div class="spacer-20"></div>

                                                <h5>Bio</h5>
                                                <textarea name="bio" id="bio" class="form-control" placeholder="Tell the world who you are!" /></textarea>

                                                <div class="spacer-20"></div>

                                                <h5>Email Address*</h5>
                                                <input type="text" name="email_address" id="email_address" class="form-control" placeholder="Enter email" value="{{ auth()->user()->email }}" />

                                                <div class="spacer-20"></div>

                                                <h5><i class="fa fa-link"></i> Your site</h5>
                                                <input type="text" name="your_site" id="your_site" class="form-control" placeholder="Enter Website URL" />

                                                <div class="spacer-20"></div>

                                                <h5><i class="fa fa-twitter"></i> Twitter username</h5>
                                                <input type="text" name="twitter_usernam" id="twitter_usernam" class="form-control" placeholder="Enter Twitter username" />

                                                <div class="spacer-20"></div>

                                                <h5><i class="fa fa-instagram"></i> Instagram username</h5>
                                                <input type="text" name="instagram_username" id="instagram_username" class="form-control" placeholder="Enter Instagram username" />

                                            </div>
                                    </div>

                                    <div id="sidebar" class="col-lg-4">
                                        <h5>Profile image <i class="fa fa-info-circle id-color-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Recommend 400 x 400. Max size: 50MB. Click the image to upload."></i></h5>

                                        <img src="images/author_single/author_thumbnail.jpg" id="click_profile_img" class="d-profile-img-edit img-fluid" alt="">
                                        <input type="file" id="upload_profile_img"> 

                                        <div class="spacer-30"></div>

                                        <h5>Profile banner <i class="fa fa-info-circle id-color-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Recommend 1500 x 500. Max size: 50MB. Click the image to upload."></i></h5>
                                        <img src="images/author_single/author_banner.jpg" id="click_banner_img" class="d-banner-img-edit img-fluid" alt="">
                                        <input type="file" id="upload_banner_img"> 

                                    </div>                                         
                                </div>
                            </div>

                            <div class="tab-2">
                                <div class="row wow fadeIn">
                                    <div class="col-md-6 mb-sm-20">
                                        <div class="switch-with-title s2">
                                            <h5>Item Sold</h5>
                                            <div class="de-switch">
                                              <input type="checkbox" id="notif-item-sold" class="checkbox">
                                              <label for="notif-item-sold"></label>
                                            </div>
                                            <div class="clearfix"></div>
                                            <p class="p-info">When someone purhased your item.</p>
                                        </div>

                                        <div class="spacer-20"></div>

                                        <div class="switch-with-title s2">
                                            <h5>Bid Activity</h5>
                                            <div class="de-switch">
                                              <input type="checkbox" id="notif-bid-activity" class="checkbox">
                                              <label for="notif-bid-activity"></label>
                                            </div>
                                            <div class="clearfix"></div>
                                            <p class="p-info">When someone purhased your item.</p>
                                        </div>

                                        <div class="spacer-20"></div>

                                        <div class="switch-with-title s2">
                                            <h5>Price Change</h5>
                                            <div class="de-switch">
                                              <input type="checkbox" id="notif-price-change" class="checkbox">
                                              <label for="notif-price-change"></label>
                                            </div>
                                            <div class="clearfix"></div>
                                            <p class="p-info">When an item you made an offer on changes in price.</p>
                                        </div>

                                    </div>

                                    <div class="col-md-6">
                                        <div class="switch-with-title s2">
                                            <h5>Auction Expiration</h5>
                                            <div class="de-switch">
                                              <input type="checkbox" id="notif-auction-expiration" class="checkbox">
                                              <label for="notif-auction-expiration"></label>
                                            </div>
                                            <div class="clearfix"></div>
                                            <p class="p-info">When an auction you created ends.</p>
                                        </div>

                                        <div class="spacer-20"></div>

                                        <div class="switch-with-title s2">
                                            <h5>Outbid</h5>
                                            <div class="de-switch">
                                              <input type="checkbox" id="notif-outbid" class="checkbox">
                                              <label for="notif-outbid"></label>
                                            </div>
                                            <div class="clearfix"></div>
                                            <p class="p-info">When an offer you placed is exceeded by another user.</p>
                                        </div>

                                        <div class="spacer-20"></div>

                                        <div class="switch-with-title s2">
                                            <h5>Successful Purchase</h5>
                                            <div class="de-switch">
                                              <input type="checkbox" id="notif-successful-purchase" class="checkbox">
                                              <label for="notif-successful-purchase"></label>
                                            </div>
                                            <div class="clearfix"></div>
                                            <p class="p-info">When you successfully buy an item.</p>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="tab-3">
                                <div class="row wow fadeIn">
                                    <div class="col-md-6 mb-sm-30">
                                        <h5>Language</h5>
                                        <p class="p-info">Select your prefered language.</p>
                                        <div id="select_lang" class="dropdown fullwidth">
                                            <a href="#" class="btn-selector">English</a>
                                            <ul>
                                                <li class="active"><span>English</span></li>
                                                <li><span>France</span></li>
                                                <li><span>German</span></li>
                                                <li><span>Japan</span></li>
                                                <li><span>Italy</span></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <h5>Scheme</h5>
                                        <p class="p-info">Customize how Gigaland looks for you.</p>
                                        <div id="select_scheme" class="dropdown fullwidth">
                                            <a href="#" class="btn-selector">Default scheme</a>
                                            <ul>
                                                <li class="active"><span>Default scheme</span></li>
                                                <li><span>Light scheme</span></li>
                                                <li><span>Dark scheme</span></li>
                                                <li><span>Grey scheme</span></li>
                                                <li><span>Retro scheme</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="spacer-30"></div>
                    <input type="button" id="submit" class="btn-main" value="Update profile">
                    </form>
                </div>
            </div>
        </div>
    </section>

</div>

@endsection