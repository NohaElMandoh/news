@extends('layouts.app')

@section('content')
    <div class="container-fluid paddding ">
        <div class="row mx-0">
            <div class="col-md-6 col-12 paddding animate-box" data-animate-effect="fadeIn">
                <div class="fh5co_suceefh5co_height"><img src="{{ $json_data["articles"][0]["urlToImage"] }}" alt="{{ $json_data["articles"][0]["title"] }}"/>
                    <div class="fh5co_suceefh5co_height_position_absolute"></div>
                    <div class="fh5co_suceefh5co_height_position_absolute_font">
                        <div class=""><a href="{{ $json_data["articles"][0]["url"] }}" class="color_fff"> <i class="fa fa-clock-o"></i>&nbsp;
                                &nbsp;{{ $json_data["articles"][0]["publishedAt"] }}
                            </a></div>
                        <div class=""><a href="{{ $json_data["articles"][0]["url"] }}" class="fh5co_good_font">
                                {{ str_limit($json_data["articles"][0]["description"],200,'...') }}
                            </a></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-6 col-6 paddding animate-box" data-animate-effect="fadeIn">
                        <div class="fh5co_suceefh5co_height_2"><img src={{ $json_data["articles"][1]["urlToImage"] }} alt="{{ $json_data["articles"][1]["title"] }}"/>
                            <div class="fh5co_suceefh5co_height_position_absolute"></div>
                            <div class="fh5co_suceefh5co_height_position_absolute_font_2">
                                <div class=""><a href="{{ $json_data["articles"][1]["url"] }}" class="color_fff"> <i class="fa fa-clock-o"></i>&nbsp;&nbsp;{{ $json_data["articles"][1]["publishedAt"] }}</a></div>
                                <div class=""><a href="{{ $json_data["articles"][1]["url"] }}" class="fh5co_good_font_2"> {{ str_limit($json_data["articles"][1]["description"],200,'...') }} </a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-6 paddding animate-box" data-animate-effect="fadeIn">
                        <div class="fh5co_suceefh5co_height_2"><img src={{ $json_data["articles"][2]["urlToImage"] }} alt="{{ $json_data["articles"][2]["title"] }}"/>
                            <div class="fh5co_suceefh5co_height_position_absolute"></div>
                            <div class="fh5co_suceefh5co_height_position_absolute_font_2">
                                <div class=""><a href="{{ $json_data["articles"][2]["url"] }}" class="color_fff"> <i class="fa fa-clock-o"></i>&nbsp;&nbsp;{{ $json_data["articles"][2]["publishedAt"] }}</a></div>
                                <div class=""><a href="{{ $json_data["articles"][2]["url"] }}" class="fh5co_good_font_2"> {{ str_limit($json_data["articles"][2]["description"],150,'...') }} </a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-6 paddding animate-box" data-animate-effect="fadeIn">
                        <div class="fh5co_suceefh5co_height_2"><img src={{ $json_data["articles"][3]["urlToImage"] }} alt="{{ $json_data["articles"][3]["title"] }}"/>
                            <div class="fh5co_suceefh5co_height_position_absolute"></div>
                            <div class="fh5co_suceefh5co_height_position_absolute_font_2">
                                <div class=""><a href="{{ $json_data["articles"][3]["url"] }}" class="color_fff"> <i class="fa fa-clock-o"></i>&nbsp;&nbsp;{{ $json_data["articles"][3]["publishedAt"] }} </a></div>
                                <div class=""><a href="{{ $json_data["articles"][3]["url"] }}" class="fh5co_good_font_2"> {{ str_limit($json_data["articles"][3]["description"],150,'...') }} </a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-6 paddding animate-box" data-animate-effect="fadeIn">
                        <div class="fh5co_suceefh5co_height_2"><img src={{ $json_data["articles"][4]["urlToImage"] }} alt="img"/>
                            <div class="fh5co_suceefh5co_height_position_absolute"></div>
                            <div class="fh5co_suceefh5co_height_position_absolute_font_2">
                                <div class=""><a href="{{ $json_data["articles"][4]["url"] }}" class="color_fff"> <i class="fa fa-clock-o"></i>&nbsp;&nbsp;{{ $json_data["articles"][4]["publishedAt"] }}</a></div>
                                <div class=""><a href="{{ $json_data["articles"][4]["url"] }}" class="fh5co_good_font_2"> {{ str_limit($json_data["articles"][4]["description"],200,'...') }}</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    {{---------political-------------------}}
    <div class="container-fluid pt-3" dir="ltr">
        <div class="container animate-box" data-animate-effect="fadeIn">
            <div>
                <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">سياسة</div>
            </div>
            <div class="owl-carousel owl-theme js" id="slider1">
                @if(intval( $firstElement["totalResults"])<10)
                    @for ($i = 0; $i < intval( $firstElement["totalResults"]); $i++)


                    <div class="item px-2">

                    <div class="fh5co_latest_trading_img_position_relative">
                        <div class="fh5co_latest_trading_img"><img src="{{ $firstElement["posts"][$i]["thread"]["main_image"] }}" alt=""
                                                                   class="fh5co_img_special_relative"/></div>
                        <div class="fh5co_latest_trading_img_position_absolute"></div>
                        <div class="fh5co_latest_trading_img_position_absolute_1">
                            <a href="#" class="text-white">  {{ str_limit($firstElement["posts"][$i]["title"],200,'...') }} </a>
                            <div class="fh5co_latest_trading_date_and_name_color"> {{ $firstElement["posts"][$i]["author"] }} - {{ $firstElement["posts"][$i]["published"] }}</div>
                        </div>
                    </div>
                </div>
                @endfor
                    @else
                    @for ($i = 0; $i < 10; $i++)


                        <div class="item px-2">

                            <div class="fh5co_latest_trading_img_position_relative">
                                <div class="fh5co_latest_trading_img"><img src="{{ $firstElement["posts"][$i]["thread"]["main_image"] }}" alt=""
                                                                           class="fh5co_img_special_relative"/></div>
                                <div class="fh5co_latest_trading_img_position_absolute"></div>
                                <div class="fh5co_latest_trading_img_position_absolute_1">
                                    <a href="#" class="text-white">  {{ str_limit($firstElement["posts"][$i]["title"],200,'...') }} </a>
                                    <div class="fh5co_latest_trading_date_and_name_color"> {{ $firstElement["posts"][$i]["author"] }} - {{ $firstElement["posts"][$i]["published"] }}</div>
                                </div>
                            </div>
                        </div>
                    @endfor
@endif

            </div>
        </div>
    </div>

    {{---------Sports-------------------}}
    <div class="container-fluid pb-4 " dir="ltr">
        <div class="container animate-box">
            <div>
                <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">رياضة</div>
            </div>
            <div class="owl-carousel owl-theme" id="slider2">

                @if(intval( $sportsElements["totalResults"])<10)
                    @for ($i = 0; $i < intval( $sportsElements["totalResults"]); $i++)

                <div class="item px-2">
                    <div class="fh5co_hover_news_img">
                        <div class="fh5co_news_img"><img src={{ $sportsElements["articles"][$i]["urlToImage"] }} alt=""/></div>
                        <div>
                            <a href="{{ $sportsElements["articles"][$i]["url"] }}" class="d-block fh5co_small_post_heading"><span class="">
                                    {{ str_limit($sportsElements["articles"][$i]["description"],200,'...') }}</span></a>
                            <div class="c_g"><i class="fa fa-clock-o"></i> {{ $sportsElements["articles"][$i]["publishedAt"] }}</div>
                        </div>
                    </div>
                </div>
                @endfor
                    @else
                    @for ($i = 0; $i < 10; $i++)

                        <div class="item px-2">
                            <div class="fh5co_hover_news_img">
                                <div class="fh5co_news_img"><img src={{ $sportsElements["articles"][$i]["urlToImage"] }} alt=""/></div>
                                <div>
                                    <a href="{{ $sportsElements["articles"][$i]["url"] }}" class="d-block fh5co_small_post_heading"><span class="">
                                    {{ str_limit($sportsElements["articles"][$i]["description"],200,'...') }}</span></a>
                                    <div class="c_g"><i class="fa fa-clock-o"></i> {{ $sportsElements["articles"][$i]["publishedAt"] }}</div>
                                </div>
                            </div>
                        </div>
                    @endfor
                    @endif
            </div>
        </div>
    </div>

    {{---------Arts-------------------}}
    <div class="container-fluid pb-4 " dir="ltr">
        <div class="container animate-box">
            <div>
                <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">فنون</div>
            </div>
            <div class="owl-carousel owl-theme" id="slider3">

                {{--sportsElements--}}
                @if(intval( $artsElements["totalResults"])<10)
                @for ($i = 0; $i < intval( $artsElements["totalResults"]); $i++)
                    <div class="item px-2">
                        <div class="fh5co_hover_news_img">
                            <div class="fh5co_news_img"><img src="{{ $artsElements["posts"][$i]["thread"]["main_image"] }}" alt=""/></div>
                            <div>
                                <a href="{{ $artsElements["posts"][$i]["url"] }}" class="d-block fh5co_small_post_heading"><span class="">
                                   {{ str_limit($artsElements["posts"][$i]["title"],200,'...') }}</span></a>
                                <div class="c_g"><i class="fa fa-clock-o"></i> {{ $artsElements["posts"][$i]["published"]}}</div>
                            </div>
                        </div>
                    </div>

                @endfor
                    @else
                    @for ($i = 0; $i < 10; $i++)
                        <div class="item px-2">
                            <div class="fh5co_hover_news_img">
                                <div class="fh5co_news_img"><img src="{{ $artsElements["posts"][$i]["thread"]["main_image"] }}" alt=""/></div>
                                <div>
                                    <a href="{{ $artsElements["posts"][$i]["url"] }}" class="d-block fh5co_small_post_heading"><span class="">
                                   {{ str_limit($artsElements["posts"][$i]["title"],200,'...') }}</span></a>
                                    <div class="c_g"><i class="fa fa-clock-o"></i> {{ $artsElements["posts"][$i]["published"]}}</div>
                                </div>
                            </div>
                        </div>
                    @endfor
                @endif
            </div>
        </div>
    </div>
{{-------------------------}}
    <div class="container-fluid pb-4 pt-4 paddding" >
        <div class="container paddding">
            <div class="row mx-0">
                <div class="col-md-8 animate-box" data-animate-effect="fadeInLeft">
                    <div>
                        <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">آخر الأخبار</div>
                    </div>
                    {{--------------------my edit--------------------}}
                    @for ($i = 0; $i < 5; $i++)
                    {{--@foreach($json_data["articles"] as $n)     intval( $json_data["totalResults"])--}}
                    <div class="row pb-4">
                        <div class="col-md-5">
                            <div class="fh5co_hover_news_img">
                                <div class="fh5co_news_img">
                                    <a href="{{ $json_data["articles"][$i]['url'] }}" class="thumbnail">
                                        <img src="{{ $json_data["articles"][$i]["urlToImage"] }}" alt="{{ $json_data["articles"][$i]["title"] }}"/></a></div>

                            </div>
                        </div>
                        <div class="col-md-7 animate-box">

                            <a href="single.html" class="fh5co_magna py-2"> {{ $json_data["articles"][$i]["title"] }} </a>
                            <a href="single.html" class="fh5co_mini_time py-3">{{ $json_data["articles"][$i]["publishedAt"] }} -
                                April 18,2016 </a>
                            <div class="fh5co_consectetur"> {{ str_limit($json_data["articles"][$i]["description"],200,'...') }}
                            </div>
                        </div>
                    </div>
                    @endfor
                    {{--------------------------------------------------------------}}

                </div>
                <div class="col-md-3 animate-box" data-animate-effect="fadeInRight">
                    <div>
                        <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Tags</div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="fh5co_tags_all">
                        <a href="#" class="fh5co_tagg">سياسة</a>
                        <a href="#" class="fh5co_tagg">رياضة</a>
                        <a href="#" class="fh5co_tagg">فتوت</a>
                        <a href="#" class="fh5co_tagg">علوم وتكنولوجيا</a>
                        <a href="#" class="fh5co_tagg">أكلات</a>
                        <a href="#" class="fh5co_tagg">تراث</a>
                        <a href="#" class="fh5co_tagg">مرأه وطفل</a>
                        <a href="#" class="fh5co_tagg">آراء حرة</a>
                        <a href="#" class="fh5co_tagg">الأسرة</a>
                        <a href="#" class="fh5co_tagg">Education</a>
                        <a href="#" class="fh5co_tagg">Social</a>
                        <a href="#" class="fh5co_tagg">Three</a>
                    </div>
                    <div>
                        <div class="fh5co_heading fh5co_heading_border_bottom pt-3 py-2 mb-4">Most Popular</div>
                    </div>
                    <div class="row pb-3">
                        <div class="col-5 align-self-center">
                            <img src="images/download (1).jpg" alt="img" class="fh5co_most_trading"/>
                        </div>
                        <div class="col-7 paddding">
                            <div class="most_fh5co_treding_font"> Magna aliqua ut enim ad minim veniam quis nostrud.</div>
                            <div class="most_fh5co_treding_font_123"> April 18, 2016</div>
                        </div>
                    </div>
                    <div class="row pb-3">
                        <div class="col-5 align-self-center">
                            <img src="images/allef-vinicius-108153.jpg" alt="img" class="fh5co_most_trading"/>
                        </div>
                        <div class="col-7 paddding">
                            <div class="most_fh5co_treding_font"> Enim ad minim veniam nostrud xercitation ullamco.</div>
                            <div class="most_fh5co_treding_font_123"> April 18, 2016</div>
                        </div>
                    </div>
                    <div class="row pb-3">
                        <div class="col-5 align-self-center">
                            <img src="images/download (2).jpg" alt="img" class="fh5co_most_trading"/>
                        </div>
                        <div class="col-7 paddding">
                            <div class="most_fh5co_treding_font"> Magna aliqua ut enim ad minim veniam quis nostrud.</div>
                            <div class="most_fh5co_treding_font_123"> April 18, 2016</div>
                        </div>
                    </div>
                    <div class="row pb-3">
                        <div class="col-5 align-self-center"><img src="images/seth-doyle-133175.jpg" alt="img"
                                                                  class="fh5co_most_trading"/></div>
                        <div class="col-7 paddding">
                            <div class="most_fh5co_treding_font"> Magna aliqua ut enim ad minim veniam quis nostrud.</div>
                            <div class="most_fh5co_treding_font_123"> April 18, 2016</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mx-0 animate-box" data-animate-effect="fadeInUp" dir="ltr">
                <div class="col-12 text-center pb-4 pt-4">
                    <a href="#" class="btn_mange_pagging"><i class="fa fa-long-arrow-left"></i>&nbsp;&nbsp; Previous</a>
                    <a href="#" class="btn_pagging">1</a>
                    <a href="#" class="btn_pagging">2</a>
                    <a href="#" class="btn_pagging">3</a>
                    <a href="#" class="btn_pagging">...</a>
                    <a href="#" class="btn_mange_pagging">Next <i class="fa fa-long-arrow-right"></i>&nbsp;&nbsp; </a>
                </div>
            </div>
        </div>
    </div>

@endsection
