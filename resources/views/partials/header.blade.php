<header>
    {{--    @php--}}
    {{--    @dd($data['abouts'])--}}
    {{--    @endphp--}}
    <div class="container nav-menu ">
        <div class="row navigation ">
            <div class="col-md-6 res-logo ">
                <a href="{{route('/')}}">
                    <img src="{{appSetting('asset')->asset.$data['setting']->logo}}" class="responsive-logo img-fluid"
                         alt="responsive-logo"/>
                </a>
            </div>
            <div class="col navigation-modal ">
                <nav class="navbar navbar-toggleable-md ">
                    <button class="navbar-toggler" style="margin-right: 10px" type="button" data-toggle="collapse"
                            data-target="#navbarNavDropdown">
                        <i style="color: #fff" class="fa-solid fa-bars"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav ">
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('/')}}">{{__('front.home')}}</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true"
                                   aria-expanded="false">{{__('front.about')}}</a>
                                <ul class="dropdown-menu">
                                    @foreach($data['abouts'] as $about)
                                        <li>
                                            <a class="dropdown-item" href="">{{$about->title}}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="admission-form.html">{{__('front.admissions')}}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="academics.html">{{__('front.academics')}}</a>
                            </li>
                            <li class="nav-logo">
                                <a href="#" class="navbar-brand">
                                    <img src="{{appSetting('asset')->asset.$data['setting']->logo}}" class="img-fluid" alt="logo"/>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="research.html">{{__('front.notice')}}</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true"
                                   aria-expanded="false">Pages</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="index-2.html">Home Style Two</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="index-video.html">Home Video</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="blog.html">Blog</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="blog-post.html">Blog Post</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="index-landing-page.html">Landing Page</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="events.html">Events</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="course-detail.html">Course Details</a>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-item dropdown-toggle" data-toggle="dropdown"
                                           aria-haspopup="true" aria-expanded="false" href="#">Others Pages</a>
                                        <ul class="dropdown-menu dropdown-menu1">
                                            <li>
                                                <a class="dropdown-item" href="notice-board.html">Notice Board</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="chairman-speech.html">Chairman Speech</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="sample-page.html">Sample Page</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="sign-up.html">Sign Up</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact.html">{{__('front.contact')}}</a>
                            </li>
                            <li class="nav-item">
                                @if (!auth()->check())
                                    <a class="nav-link" href="{{appSetting('asset')->asset.'login'}}">{{__('front.login')}}</a>
                                @else
                                    <a class="nav-link" href="{{appSetting('asset')->asset.'admin-dashboard'}}">{{__('front.dashboard')}}</a>
                                @endif
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
