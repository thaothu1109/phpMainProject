@extends('Layout_user')
@section('title')
    {{ $header_name }}
@endsection
@section('content')
    <section class="main-container col2-left-layout">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-8 col-xs-12 col-sm-push-4 col-md-push-3">
                    <!-- Breadcrumbs -->
                    <div class="breadcrumbs" style="float: right;">
                        <ul>
                            <li class="home"> <a href="{{ route('home') }}" title="Go to Home Page">Home</a>
                                <span>/</span>
                            </li>
                            @foreach ($categoryProduct as $cate_pro)
                                @if ($cate_pro->cate_product->category_sub != '')
                                    @php
                                        $cateparent = App\Category::where('category_id', $cate_pro->cate_product->category_sub)->first();
                                        $cateparent2 = App\Category::where('category_id', $cateparent->category_sub)->first();
                                    @endphp
                                    @if ($cateparent2)
                                        <li style="text-transform: lowercase;" class="category1599"> <a href=""
                                                title="">{{ $cateparent2->category_name }}</a> <span>/ </span> </li>
                                    @endif
                                    @if ($cateparent)
                                        <li style="text-transform: lowercase;" class="category1600"> <a href=""
                                                title="">{{ $cateparent->category_name }}</a> <span>/</span> </li>
                                    @endif
                                @endif
                            @endforeach

                            <li style="text-transform: lowercase;" class="category1600"> <a href=""
                                    title="">{{ $header_name }}</a> </li>
                        </ul>
                    </div>
                    <!-- Breadcrumbs End -->
                    <div class="page-title">
                        <h2 class="page-heading"> <span class="page-heading-title">{{ $header_name }}</span>
                        </h2>
                    </div>
                    <div class="category-description std">
                        <div class="slider-items-products">
                            <div id="category-desc-slider" class="product-flexslider hidden-buttons">
                                <div class="slider-items slider-width-col1 owl-carousel owl-theme">

                                    <!-- Item -->
                                    <div class="item"> <a href="#"><img alt=""
                                                src="{{ asset('frontend/images/anhanh.png') }}"></a>
                                                <div class="cat-img-title cat-bg cat-box">
                                             <div class="small-tag" style="color: #6F4E37;" >Trung Nguyen Legend</div>
                                            
                                         </div>
                                     </div>
                                     <!-- Mục Kết thúc -->

                                     <!-- Mục -->
                                     <div class="item"><a href="#"><img alt=""
                                     src="{{ asset('frontend/images/anhbanner.png') }}"></a>
                                         <div class="cat-img-title cat-bg cat-box">
                                             <div class="small-tag">Trung Nguyen Legend</div>
                                            
                                         </div>
                                         <!-- Mục Kết thúc -->

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <article class="col-main" id="table_data">
                        @include('FrontEnd.cate_include');
                    </article>
                    <!--	///*///======    End article  ========= //*/// -->
                </div>
                <aside class="col-left sidebar col-md-3 col-sm-4 col-xs-12 col-sm-pull-8 col-md-pull-9">
                    <div class="side-banner"><img src="{{ asset('frontend/images/2.jpg') }}" alt="banner">
                    </div>

                    <div class="block block-compare" id="loadare">

                    </div>

                    <div class="custom-slider-wrap">
                        <div class="custom-slider-inner">
                            <div class="home-custom-slider">
                                <div>
                                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                        <ol class="carousel-indicators">
                                            <li class="active" data-target="#carousel-example-generic"
                                                data-slide-to="0"></li>
                                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                        </ol>
                                        <div class="carousel-inner">
                                            <div class="item active"> <img
                                                    src="{{ asset('frontend/images/anh1.webp') }}" alt="slide3">
                                                    <div class="carousel-caption"> <span>Siêu ưu đãi lớn</span>
                                                     <p>Tiết kiệm tới <strong>GIẢM GIÁ 70%</strong> Bộ sưu tập Fahion</p>
                                                 </div>
                                            </div>
                                            <div class="item"> <img
                                                    src="{{ asset('frontend/images/custom-slide2.jpg') }}" alt="slide2">
                                                    <div class="carousel-caption"> <span>Giảm giá <strong>khủng</strong></span>
                                                     <p>Tiết kiệm tới <strong>GIẢM GIÁ 70%</strong> Bộ sưu tập Fahion</p>
                                                 </div>
                                             </div>
                                            <div class="item"> <img
                                                    src="{{ asset('frontend/images/custom-slide3.jpg') }}" alt="slide1">
                                                    <div class="carousel-caption"> <span>Ưu đãi <strong>hấp dẫn</strong></span>
                                                     <p>Tiết kiệm tới <strong>GIẢM GIÁ 70%</strong> Bộ sưu tập Fahion</p>
                                                 </div>
                                             </div>
                                         </div>
                                         <a class="left carousel-control" href="#" data-slide="prev"> <span
                                                 class="sr-only">Trước</span></a> <a
                                             class="right carousel-control" href="#" data-slide="next"> <span
                                                 class="sr-only">Tiếp theo</span></a>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="block-list block-viewed">
                         <div class="block-title"> Đã xem gần đây </div>
                         <div class="block-content">
                             <ol id="recently-viewed-items">
                                 <li class="item lẻ">
                                     <p class="product-name"><a href="#">Cà phê G7 Gold Picasso Latte</a></p>
                                 </li>
                                 <li class="item chẵn">
                                     <p class="product-name"><a href="#">Cà phê G7 3in1 - Bịch 50 sticks</a></p>
                                 </li>
                                 <li class="mục lẻ cuối cùng">
                                     <p class="product-name"><a href="#">Trung Nguyên Legend</a></p>
                                 </li>
                             </ol>
                         </div>
                     </div>
                     <div class="block block-poll">
                         <div class="block-title">Thăm dò ý kiến cộng đồng </div>
                        <form id="pollForm" action="#" method="post" onSubmit="return validatePollAnswerIsSelected();">
                            <div class="block-content">
                                <p class="block-subtitle">What is your favorite coffee?</p>
                                <ul id="poll-answers">
                                    <li class="odd">
                                    <input type="radio" name="vote" class="radio poll_vote" id="vote_5" value="5">
                                         <span class="label">
                                             <label for="vote_5">Cappuccino Coconut</label>
                                         </span>
                                     </li>
                                     <li class="even">
                                         <input type="radio" name="vote" class="radio poll_vote" id="vote_6" value="6">
                                         <span class="label">
                                             <label for="vote_6">G7 Gold Picasso Latte</label>
                                         </span>
                                     </li>
                                     <li class="lẻ">
                                         <input type="radio" name="vote" class="radio poll_vote" id="vote_7" value="7">
                                         <span class="label">
                                             <label for="vote_7">Legend Classic </label>
                                         </span>
                                     </li>
                                     <li class="chẵn cuối cùng">
                                         <input type="radio" name="vote" class="radio poll_vote" id="vote_8" value="8">
                                         <span class="label">
                                             <label for="vote_8">Legend Success 3</label>
                                         </span>
                                     </li>
                                 </ul>
                                 <div class="actions">
                                     <button type="submit" title="Bình chọn"
                                         class="button button-vote"><span>Bình chọn</span></button>
                                 </div>
                             </div>
                         </form>
                    </div>
                    <div class="hot-banner"><img alt="banner"
                            src="{{ asset('frontend/images/hot-trends-banner.jpg') }}"></div>
                </aside>
                <input type="hidden" id="hiden_id_slug" value="{{ $header_id }}">
            </div>
        </div>
    </section>
@endsection
@section('js')
    <script>
        $(document).ready(function() {
            loadCompare();
            $(document).on('click', '.pagination a', function(e) {
                e.preventDefault();
                var page = $(this).attr('href').split('page=')[1];
                fetch_data(page);
            });
            // Change Show
            $(document).on('change', '.change_view', function(e) {
                e.preventDefault();
                var show = $(this).val();

                $.ajax({
                    type: 'get',
                    url: '{{ route('category-product.index') }}',
                    data: {show:show, id:$('#hiden_id_slug').val()},
                    success:function(data){
                        $('#table_data').html(data);
                    }
                });
            });
            $('.click_compare').click(function(){
                window.location.href = '{{ route('wishlist.create') }}';
            });
            $(document).on('click', '.click_clear', function(e) {
                e.preventDefault();
                $.ajax({
                    type: 'post',
                    url: "{{ route('product-detail.store') }}",
                    dataType: 'json',
                    success: function(response) {
                        if(response.status==200){
                            loadCompare();
                        }

                    }
                });

            });
        });
        function fetch_data(page) {
            $.ajax({
                url: "{{ url('category-product/create?page=') }}" +page,
                data: {id:$('#hiden_id_slug').val() },
                success: function(data) {
                    $('#table_data').html(data);
                }
            });
        }

    </script>
@endsection
