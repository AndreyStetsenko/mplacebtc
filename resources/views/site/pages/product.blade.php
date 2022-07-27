@extends('site.layout.base')

@section('content')

<div class="no-bottom no-top" id="content">
    <div id="top"></div>
    

    <section id="nft-item-details" aria-label="section" class="sm-mt-0">
        <div class="container">
            <div class="row g-5">
                <div class="col-md-6 text-center">
                    <div class="nft-image-wrapper">
                        <img src="{{ asset('site/images/items/big-4.jpg') }}" class="img-fluid img-rounded mb-sm-30" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="item_info">
                        {{-- Auctions ends in <div class="de_countdown" data-year="2022" data-month="6" data-day="16" data-hour="8"></div> --}}
                        <h2>{{ $product->title }}</h2>
                        <div class="item_info_counts">
                            <div class="item_info_type">{{ $product->categories->last()->name ?? '' }}</div>
                            {{-- <div class="item_info_views"><i class="fa fa-eye"></i>250</div> --}}
                            {{-- <div class="item_info_like"><i class="fa fa-heart"></i>18</div> --}}
                        </div>

                        <div class="d-flex flex-row">
                            <div class="mr40">
                                <h6>Creator</h6>
                                <div class="item_author">                                    
                                    <div class="author_list_pp">
                                        <a href="03_grey-author.html">
                                            <img class="lazy" src="{{ asset($attachUser->where('post_id', $product->author->id)->last()->url ?? 'site/images/items/static-1.jpg') }}" alt="">
                                            <i class="fa fa-check"></i>
                                        </a>
                                    </div>                                    
                                    <div class="author_list_info">
                                        <a href="03_grey-author.html">{{ $product->author->name }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="spacer-40"></div>

                        <h6>Price</h6>
                        @if ( $product->price_sale != '' )
                        <div class="nft-item-price"><span>{{ $product->price_sale }}$</span><s>{{ $product->price }}$</s></div>
                        @else
                        <div class="nft-item-price"><span>{{ $product->price }}$</span></div>
                        @endif

                        <!-- Button trigger modal -->
                        <a href="#" class="btn-main btn-lg" data-bs-toggle="modal" data-bs-target="#buy_now">
                          To Cart
                        </a>

                        <div class="spacer-40"></div>

                        <h6>Description</h6>
                        <p>
                            {!! $product->description !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
</div>

@endsection