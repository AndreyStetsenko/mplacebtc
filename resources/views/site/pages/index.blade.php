@extends('site.layout.base')

@section('content')

<div class="no-bottom no-top" id="content">
    <div id="top"></div>
    <section id="section-hero" class="no-bottom" data-bgimage="url({{ asset('site/images/background/13.jpg') }}) bottom">
        <div class="container">
            <div id="items-carousel-big" class="owl-carousel">
                <!-- carousel item -->
                @foreach ( $products->slice(0, 3) as $item )
                <div class="nft__item_lg">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <img src="{{ asset($attach->where('post_id', $item->id)->last()->url ?? 'site/images/items/static-1.jpg') }}" class="img-fluid" alt="{{ $item->title }}">
                        </div>
                        <div class="col-lg-6">
                            <div class="d-desc">
                                <h2>{{ $item->title }}</h2>
                                <div class="d-author">
                                    <div class="author_list_pp">
                                        <a href="03_grey-author.html">
                                        <img class="lazy" src="{{ asset('site/images/author/author-1.jpg') }}" alt="">
                                        <i class="fa fa-check"></i>
                                        </a>
                                    </div>
                                    <div class="author_list_info">
                                        <a href="03_grey-author.html">Monica Lucas</a>
                                        <span>@monicaaa</span>
                                    </div>
                                </div>
                                <div class="d-attr">
                                    <div>
                                        <span class="d-title">Current Bid</span>
                                        <h3>{{ $item->price }} USD</h3>
                                    </div>
                                    <div>
                                        <span class="d-title">Auction end in</span>
                                        <div class="de_countdown" data-year="2022" data-month="6" data-day="16" data-hour="8"></div>
                                        <h5>(November 16, 2021)</h5>
                                    </div>
                                </div>
                                <div class="spacer-10"></div>
                                <div class="d-buttons">
                                    <a href="{{ route('product', $item->id) }}" class="btn-main">Buy</a>&nbsp;
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <section id="section-collections" class="pt30 pb30">
        <div class="container">
            <div class="spacer-single"></div>
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="style-2">Hot Collections</h2>
                </div>
                <div id="collection-carousel-alt" class="owl-carousel wow fadeIn">
                    <div class="nft_coll">
                        <div class="nft_wrap">
                            <a href="03_grey-collection.html"><img src="{{ asset('site/images/collections/coll-1.jpg') }}" class="lazy img-fluid" alt=""></a>
                        </div>
                        <div class="nft_coll_pp">
                            <a href="03_grey-collection.html"><img class="lazy pp-coll" src="{{ asset('site/images/author/author-1.jpg') }}" alt=""></a>
                            <i class="fa fa-check"></i>
                        </div>
                        <div class="nft_coll_info">
                            <a href="03_grey-collection.html">
                                <h4>Abstraction</h4>
                            </a>
                            <span>ERC-192</span>
                        </div>
                    </div>
                    <div class="nft_coll">
                        <div class="nft_wrap">
                            <a href="03_grey-collection.html"><img src="{{ asset('site/images/collections/coll-2.jpg') }}" class="lazy img-fluid" alt=""></a>
                        </div>
                        <div class="nft_coll_pp">
                            <a href="03_grey-collection.html"><img class="lazy pp-coll" src="{{ asset('site/images/author/author-2.jpg') }}" alt=""></a>
                            <i class="fa fa-check"></i>
                        </div>
                        <div class="nft_coll_info">
                            <a href="03_grey-collection.html">
                                <h4>Patternlicious</h4>
                            </a>
                            <span>ERC-61</span>
                        </div>
                    </div>
                    <div class="nft_coll">
                        <div class="nft_wrap">
                            <a href="03_grey-collection.html"><img src="{{ asset('site/images/collections/coll-3.jpg') }}" class="lazy img-fluid" alt=""></a>
                        </div>
                        <div class="nft_coll_pp">
                            <a href="03_grey-collection.html"><img class="lazy pp-coll" src="{{ asset('site/images/author/author-3.jpg') }}" alt=""></a>
                            <i class="fa fa-check"></i>
                        </div>
                        <div class="nft_coll_info">
                            <a href="03_grey-collection.html">
                                <h4>Skecthify</h4>
                            </a>
                            <span>ERC-126</span>
                        </div>
                    </div>
                    <div class="nft_coll">
                        <div class="nft_wrap">
                            <a href="03_grey-collection.html"><img src="{{ asset('site/images/collections/coll-4.jpg') }}" class="lazy img-fluid" alt=""></a>
                        </div>
                        <div class="nft_coll_pp">
                            <a href="03_grey-collection.html"><img class="lazy pp-coll" src="{{ asset('site/images/author/author-4.jpg') }}" alt=""></a>
                            <i class="fa fa-check"></i>
                        </div>
                        <div class="nft_coll_info">
                            <a href="03_grey-collection.html">
                                <h4>Cartoonism</h4>
                            </a>
                            <span>ERC-73</span>
                        </div>
                    </div>
                    <div class="nft_coll">
                        <div class="nft_wrap">
                            <a href="03_grey-collection.html"><img src="{{ asset('site/images/collections/coll-5.jpg') }}" class="lazy img-fluid" alt=""></a>
                        </div>
                        <div class="nft_coll_pp">
                            <a href="03_grey-collection.html"><img class="lazy pp-coll" src="{{ asset('site/images/author/author-5.jpg') }}" alt=""></a>
                            <i class="fa fa-check"></i>
                        </div>
                        <div class="nft_coll_info">
                            <a href="03_grey-collection.html">
                                <h4>Virtuland</h4>
                            </a>
                            <span>ERC-85</span>
                        </div>
                    </div>
                    <div class="nft_coll">
                        <div class="nft_wrap">
                            <a href="03_grey-collection.html"><img src="{{ asset('site/images/collections/coll-6.jpg') }}" class="lazy img-fluid" alt=""></a>
                        </div>
                        <div class="nft_coll_pp">
                            <a href="03_grey-collection.html"><img class="lazy pp-coll" src="{{ asset('site/images/author/author-6.jpg') }}" alt=""></a>
                            <i class="fa fa-check"></i>
                        </div>
                        <div class="nft_coll_info">
                            <a href="03_grey-collection.html">
                                <h4>Papercut</h4>
                            </a>
                            <span>ERC-42</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="spacer-double"></div>
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="style-2">Top Sellers</h2>
                </div>
                <div class="col-md-12 wow fadeIn">
                    <ol class="author_list">
                        @foreach ( $users as $user )
                        <li>
                            <div class="author_list_pp">
                                <a href="03_grey-author.html">                                    
                                <img class="lazy" src="{{ asset($attachUser->where('post_id', $user->id)->last()->url ?? 'site/images/items/static-1.jpg') }}" alt="">
                                <i class="fa fa-check"></i>
                                </a>
                            </div>
                            <div class="author_list_info">
                                <a href="03_grey-author.html">Nicholas Daniels</a>
                                <span>2.5 ETH</span>
                            </div>
                        </li>
                        @endforeach
                    </ol>
                </div>
            </div>
            <div class="spacer-single"></div>
            <div class="row wow fadeIn">
                <div class="col-lg-12">
                    <h2 class="style-2">New Items</h2>
                </div>
                <!-- nft item begin -->
                @foreach ( $products as $item )
                <div class="d-item col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="nft__item style-2">
                        <div class="nft__item_wrap">
                            <div class="nft__item_extra">
                                <div class="nft__item_buttons">
                                    <button onclick="location.href='{{ route('product', $item->id) }}'">Buy Now</button>
                                    <div class="nft__item_share">
                                        <h4>Share</h4>
                                        <a href="https://www.facebook.com/sharer/sharer.php?u=https://gigaland.io" target="_blank"><i class="fa fa-facebook fa-lg"></i></a>
                                        <a href="https://twitter.com/intent/tweet?url=https://gigaland.io" target="_blank"><i class="fa fa-twitter fa-lg"></i></a>
                                        <a href="mailto:?subject=I wanted you to see this site&amp;body=Check out this site https://gigaland.io"><i class="fa fa-envelope fa-lg"></i></a>
                                    </div>
                                </div>
                            </div>
                            <a href="{{ route('product', $item->id) }}">
                                <div class="d-placeholder"></div>
                                <img src="{{ asset($attach->where('post_id', $item->id)->last()->url ?? 'site/images/items/static-1.jpg') }}" class="lazy nft__item_preview" alt="">
                            </a>
                        </div>
                        <div class="nft__item_info">
                            <a href="{{ route('product', $item->id) }}">
                                <h4>{{ $item->title }}</h4>
                            </a>
                            <div class="nft__item_click">
                                <span></span>
                            </div>
                            <div class="nft__item_price">
                                {{ $item->price }} USD
                            </div>
                            <div class="nft__item_action">
                                <a href="{{ route('product', $item->id) }}">Buy</a>
                            </div>
                            <div class="nft__item_like">
                                <i class="fa fa-heart"></i><span>50</span>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <!-- nft item begin -->
            </div>
        </div>
    </section>
    <section id="section-text" class="no-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="style-2">Create and Sell Now</h2>
                </div>
                <div class="col-lg-4 col-md-6 mb-sm-30">
                    <div class="feature-box f-boxed style-3">
                        <i class="wow fadeInUp bg-color-2 i-boxed icon_wallet"></i>
                        <div class="text">
                            <h4 class="wow fadeInUp">Set up your wallet</h4>
                            <p class="wow fadeInUp" data-wow-delay=".25s">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem.</p>
                        </div>
                        <i class="wm icon_wallet"></i>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-sm-30">
                    <div class="feature-box f-boxed style-3">
                        <i class="wow fadeInUp bg-color-2 i-boxed icon_cloud-upload_alt"></i>
                        <div class="text">
                            <h4 class="wow fadeInUp">Add your NFT's</h4>
                            <p class="wow fadeInUp" data-wow-delay=".25s">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem.</p>
                        </div>
                        <i class="wm icon_cloud-upload_alt"></i>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-sm-30">
                    <div class="feature-box f-boxed style-3">
                        <i class="wow fadeInUp bg-color-2 i-boxed icon_tags_alt"></i>
                        <div class="text">
                            <h4 class="wow fadeInUp">Sell your NFT's</h4>
                            <p class="wow fadeInUp" data-wow-delay=".25s">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem.</p>
                        </div>
                        <i class="wm icon_tags_alt"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- content close -->
<!-- place a bid -->
<div class="modal fade" id="place_a_bid" tabindex="-1" aria-labelledby="place_a_bid" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered de-modal">
        <div class="modal-content">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="modal-body">
                <div class="p-3 form-border">
                    <h3>Place a Bid</h3>
                    You are about to place a bid for <b>Red Ocean</b> from <b>Monica Lucas</b>
                    <div class="spacer-single"></div>
                    <h6>Your bid (ETH)</h6>
                    <input type="text" name="bid_value" id="bid_value" class="form-control" placeholder="Enter bid" />
                    <div class="spacer-single"></div>
                    <h6>Enter quantity. <span class="id-color-2">10 available</span></h6>
                    <input type="text" name="bid_qty" id="bid_qty" class="form-control" value="1" />
                    <div class="spacer-single"></div>
                    <div class="de-flex">
                        <div>Your bidding balance</div>
                        <div><b>0.013325 ETH</b></div>
                    </div>
                    <div class="de-flex">
                        <div>Your balance</div>
                        <div><b>10.67856 ETH</b></div>
                    </div>
                    <div class="de-flex">
                        <div>Service fee 2.5%</div>
                        <div><b>0.00325 ETH</b></div>
                    </div>
                    <div class="de-flex">
                        <div>You will pay</div>
                        <div><b>0.013325 ETH</b></div>
                    </div>
                    <div class="spacer-single"></div>
                    <a href="03_grey-wallet.html" target="_blank" class="btn-main btn-fullwidth">Place a bid</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection