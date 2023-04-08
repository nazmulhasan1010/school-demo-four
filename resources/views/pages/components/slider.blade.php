@php
    $assetServer = appSetting('asset')->asset;
@endphp
<div class="container-fluid notice-and-slider" style="background-image:linear-gradient(to bottom,rgba(233,0,100,0.70), rgba(33,0,98,0.70)),url({{asset('assets/image/gradient-g-3.jpg')}})">
    <div class="row banner-section">
        <div class="col-md-4 notice-section">
            <div class="notice-board">
                <div class="notice-board-header">
                    <h3 class="text-font">{{__('front.notice-board')}}</h3>
                    <a href="">{{__('front.see')}} {{__('front.all')}}</a>
                </div>
                @foreach($data['notice_board'] as $notice)
                    @php
                        $date = date("d", strtotime($notice->notice_date));
                        $month = date('M', strtotime($notice->notice_date ));
                        $year = date('y', strtotime($notice->notice_date ))
                    @endphp
                    <div class="notices">
                        <div class="date-box">
                            <h3 class="m-0">{{$date}}</h3>
                            <h6 class="m-0">{{$month .' '. $year}} </h6>
                        </div>
                        <div class="text-box">
                            <p class="title">{{$notice->notice_title}}</p>
                            <p class="description">{{$notice->notice_message}}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="col-md-8 slider-section">
            <section class="banner-slider">
                <div class="slider_img">
                    <div id="carousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            @foreach($data['slider'] as $key=>$slider)
                                <li data-target="#carousel" data-slide-to="{{$key}}"
                                    class="{{$key==0?'active':''}}"></li>
                            @endforeach
                        </ol>
                        <div class="carousel-inner" role="listbox">
                            @foreach($data['slider'] as $key=>$slider)
                                <div class="carousel-item {{$key==0?'active':''}}">
                                    <img class="d-block" src="{{$assetServer.$slider->image}}" alt="First slide"/>
                                    <div class="carousel-caption d-md-block">
                                        <div class="slider_title">
                                            <h1>{{$slider->title}}</h1>
                                            {{--                                <h4>--}}
                                            {{--                                    Proactively utilize open-source users--}}
                                            {{--                                    for process-centric total linkage.<br/>--}}
                                            {{--                                    Energistically reinvent web-enabled--}}
                                            {{--                                    initiatives with premium--}}
                                            {{--                                    <br/>processes. Proactively drive.--}}
                                            {{--                                </h4>--}}
                                            {{--                                <div class="slider-btn">--}}
                                            {{--                                    <a href="#" class="btn btn-default">SEE Programs</a>--}}
                                            {{--                                    <a href="#" class="btn btn-default">Learn more</a>--}}
                                            {{--                                </div>--}}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                            <i class="fa-solid fa-arrow-left"></i>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                            <i class="fa-solid fa-arrow-right"></i>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
