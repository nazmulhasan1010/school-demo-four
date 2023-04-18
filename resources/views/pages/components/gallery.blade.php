<div class="gallery-wrap "
     style="background-image:linear-gradient(to bottom,rgba(233,0,100,0.70), rgba(33,0,98,0.70)),url({{asset('assets/image/gradient-g-4.jpg')}})">
    <div class="container ">
        <div class="row">
            <div class="col-md-12">
                <h3 class="gallery-style text-white">{{__('front.image')}} {{__('front.gallery')}}</h3>
            </div>
        </div>
        @php
            $count = count($data['image'])/2;
            $index = 0;
        @endphp
        @for($i = 0; $i < count($data['image'])/3; $i++)
            <div class="row">
                @for($j = 0; $j < $count; $j++)
                    @if($index < count($data['image']))
                        <div class="col-md-4">
                            <a href="{{appSetting('asset')->asset.$data['image'][$index]->image}}"
                               class="grid image-link">
                                <figure class="effect-bubba gallery-img-wrap">
                                    <img style="height: 250px" src="{{appSetting('asset')->asset.$data['image'][$index]->image}}"
                                         class="img-fluid" alt="#">
                                    <figcaption>
                                        <p><i class="fa fa-search-plus fa-2x" aria-hidden="true"></i></p>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                    @endif
                    @php $index++ @endphp
                @endfor
            </div>
        @endfor
    </div>
</div>
