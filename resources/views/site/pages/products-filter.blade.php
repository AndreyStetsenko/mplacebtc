@extends('site.layout.base')

@section('content')

<div class="no-bottom" id="content">
    <div id="top"></div>

    <!-- section begin -->
    <section aria-label="section">
        <div class="container">
            <div class="row wow fadeIn">
                <aside class="col-md-3">
                    <div class="item_filter_group">
                        <h4>Select Categories</h4>
                        <div class="de_form">
                            <div class="de_checkbox">
                                <input id="check_cat_1" name="check_cat_1" type="checkbox" value="check_cat_1">
                                <label for="check_cat_1">Art</label>
                            </div>

                            <div class="de_checkbox">
                                <input id="check_cat_2" name="check_cat_2" type="checkbox" value="check_cat_2">
                                <label for="check_cat_2">Music</label>
                            </div>

                            <div class="de_checkbox">
                                <input id="check_cat_3" name="check_cat_3" type="checkbox" value="check_cat_3">
                                <label for="check_cat_3">Domain Names</label>
                            </div>

                            <div class="de_checkbox">
                                <input id="check_cat_4" name="check_cat_4" type="checkbox" value="check_cat_4">
                                <label for="check_cat_4">Virtual World</label>
                            </div>

                            <div class="de_checkbox">
                                <input id="check_cat_5" name="check_cat_5" type="checkbox" value="check_cat_5">
                                <label for="check_cat_5">Trading Cards</label>
                            </div>

                            <div class="de_checkbox">
                                <input id="check_cat_6" name="check_cat_6" type="checkbox" value="check_cat_6">
                                <label for="check_cat_6">Collectibles</label>
                            </div>

                            <div class="de_checkbox">
                                <input id="check_cat_7" name="check_cat_7" type="checkbox" value="check_cat_7">
                                <label for="check_cat_7">Sports</label>
                            </div>

                            <div class="de_checkbox">
                                <input id="check_cat_8" name="check_cat_8" type="checkbox" value="check_cat_8">
                                <label for="check_cat_8">Utility</label>
                            </div>

                        </div>
                    </div>

                    <div class="item_filter_group">
                        <h4>Status</h4>
                        <div class="de_form">
                            <div class="de_checkbox">
                                <input id="check_stat_1" name="check_stat_1" type="checkbox" value="check_stat_1">
                                <label for="check_stat_1">Buy Now</label>
                            </div>

                            <div class="de_checkbox">
                                <input id="check_stat_2" name="check_stat_2" type="checkbox" value="check_stat_2">
                                <label for="check_stat_2">On Auction</label>
                            </div>

                            <div class="de_checkbox">
                                <input id="check_stat_3" name="check_stat_3" type="checkbox" value="check_stat_3">
                                <label for="check_stat_3">has Offers</label>
                            </div>
                        </div>
                    </div>

                    <div class="item_filter_group">
                        <h4>Items Type</h4>
                        <div class="de_form">
                            <div class="de_checkbox">
                                <input id="check_item_type_1" name="check_item_type_1" type="checkbox" value="check_item_type_1">
                                <label for="check_item_type_1">Single Items</label>
                            </div>

                            <div class="de_checkbox">
                                <input id="check_item_type_2" name="check_item_type_2" type="checkbox" value="check_item_type_2">
                                <label for="check_item_type_2">Bundles</label>
                            </div>
                        </div>
                    </div>

                    <div class="item_filter_group">
                        <h4>Collections</h4>
                        <div class="de_form">
                            <div class="de_checkbox">
                                <input id="check_coll_1" name="check_coll_1" type="checkbox" value="check_coll_1">
                                <label for="check_coll_1">Abstraction</label>
                            </div>

                            <div class="de_checkbox">
                                <input id="check_coll_2" name="check_coll_2" type="checkbox" value="check_coll_2">
                                <label for="check_coll_2">Patternlicious</label>
                            </div>

                            <div class="de_checkbox">
                                <input id="check_coll_3" name="check_coll_3" type="checkbox" value="check_coll_3">
                                <label for="check_coll_3">Skecthify</label>
                            </div>

                            <div class="de_checkbox">
                                <input id="check_coll_4" name="check_coll_4" type="checkbox" value="check_coll_4">
                                <label for="check_coll_4">Cartoonism</label>
                            </div>

                            <div class="de_checkbox">
                                <input id="check_coll_5" name="check_coll_5" type="checkbox" value="check_coll_5">
                                <label for="check_coll_5">Virtuland</label>
                            </div>

                            <div class="de_checkbox">
                                <input id="check_coll_6" name="check_coll_6" type="checkbox" value="check_coll_6">
                                <label for="check_coll_6">Papercut</label>
                            </div>
                        </div>
                    </div>
                </aside>

                <div class="col-md-9">
                    <div class="row">
                        <!-- nft item begin -->

                        @foreach ($products as $item)

                        <div class="d-item col-lg-4 col-md-6 col-sm-6 col-xs-12">
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
                                        {{ $item->price ?? '0' }} USD
                                    </div>
                                    <div class="nft__item_action">
                                        <a href="{{ route('product', $item->id) }}">Place a bid</a>
                                    </div>
                                    <div class="nft__item_like">
                                        <i class="fa fa-heart"></i><span>50</span>
                                    </div>                            
                                </div> 
                            </div>
                        </div>
                            
                        @endforeach

                        <div class="col-md-12 text-center">
                            <a href="#" id="loadmore" class="btn-main wow fadeInUp lead">Load more</a>
                        </div>  
                    </div>
                </div>                     
            </div>
        </div>
    </section>

</div>

@endsection