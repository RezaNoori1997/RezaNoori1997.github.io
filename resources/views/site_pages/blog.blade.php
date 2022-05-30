@extends('layout.layout')

@section('page_title' , 'وبلاگ - ایساکو سرویس')

@section('page_content')
    <section class="bg-main">
        <div class="container">
            <hr class="pt-0 pd-0 mt-0 mb-0">
            <h2 class="fw-bold mt-5">جدیدترین مقالات آموزشی</h2>
            <div class="row g-4 align-items-center mt-3">
                @if(!$articles->isEmpty())
                    @foreach($articles as $article)
                        <div class="col-md-3" style="margin: 5px">
                            <div class="card" style="width: 18rem;">
                                <img src="{{asset($article->image)}}" class="card-img-top"
                                     style="height:180px; width: 100%"
                                     alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">{{$article->title}}</h5>
                                    <p class="card-text" style="height: 70px">
                                        {{str_limit($article->description , 60)}}
                                    </p>
                                    <a href="{{$article->link}}" class="btn btn-primary stretched-link">بیشتر</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="text-center text-danger">
                        <p>مقاله‌ای یافت نشد.</p>
                    </div>
                @endif
            </div>
        </div>
    </section>

    <section class="bg-main py-4">
        <div class="container">
            <h2 class="fw-bold" style="margin: 0px 2px 50px 2px;">ویدئوهای آموزشی</h2>
            <div class="row g-4 align-items-center">
                @if(!$videos->isEmpty())
                    @foreach($videos as $video)
                        <div class="col-md-3" style="margin: 5px">
                            <div class="card" style="width: 18rem;">
                                <img src="{{asset($video->image)}}" class="card-img-top"
                                     style="height:180px; width: 100%"
                                     alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">{{$video->title}}</h5>
                                    <p class="card-text" style="height: 70px">
                                        {{str_limit($video->description , 60)}}
                                    </p>
                                    <a href="{{asset($video->video)}}" class="btn btn-primary stretched-link">بیشتر</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="text-center text-danger">
                        <p>ویدئویی یافت نشد.</p>
                    </div>
                @endif
            </div>
        </div>
    </section>

    {{--    <section class="bg-main">--}}
    {{--        <div class="container">--}}
    {{--            <hr class="pt-0 pd-0 mt-0 mb-0">--}}
    {{--            <h2 class="fw-bold mt-5">پربازدیدترین مطالب</h2>--}}
    {{--            <div class="row g-4 align-items-center mt-3">--}}
    {{--                <div class="col-12">--}}
    {{--                    <div class="row">--}}
    {{--                        <div class="col-md-3" style="margin: 5px 0px 5px 0px;">--}}
    {{--                            <div class="card" style="width: 18rem;">--}}
    {{--                                <img src="images/post.png" class="card-img-top" style="height:180px; width: 100%"--}}
    {{--                                     alt="...">--}}
    {{--                                <div class="card-body">--}}
    {{--                                    <h5 class="card-title">ویدیو تست 1</h5>--}}
    {{--                                    <p class="card-text" style="height: 70px">لورم ایپسوم متن ساختگی با تولید سادگی--}}
    {{--                                        نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>--}}
    {{--                                    <a href="#" class="btn btn-primary stretched-link">بیشتر</a>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-md-3" style="margin: 5px 0px 5px 0px;">--}}
    {{--                            <div class="card" style="width: 18rem;">--}}
    {{--                                <img src="images/post.png" class="card-img-top" style="height:180px; width: 100%""--}}
    {{--                                alt="...">--}}
    {{--                                <div class="card-body">--}}
    {{--                                    <h5 class="card-title">ویدیو تست 2</h5>--}}
    {{--                                    <p class="card-text" style="height: 70px">لورم ایپسوم متن ساختگی با تولید سادگی--}}
    {{--                                        نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>--}}
    {{--                                    <a href="#" class="btn btn-primary stretched-link">بیشتر</a>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-md-3" style="margin: 5px 0px 5px 0px;">--}}
    {{--                            <div class="card" style="width: 18rem;">--}}
    {{--                                <img src="images/post.png" class="card-img-top" style="height:180px; width: 100%"--}}
    {{--                                     alt="...">--}}
    {{--                                <div class="card-body">--}}
    {{--                                    <h5 class="card-title">مقاله 3</h5>--}}
    {{--                                    <p class="card-text" style="height: 70px">لورم ایپسوم متن ساختگی با تولید سادگی--}}
    {{--                                        نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>--}}
    {{--                                    <a href="#" class="btn btn-primary stretched-link">بیشتر</a>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-md-3" style="margin: 5px 0px 5px 0px;">--}}
    {{--                            <div class="card" style="width: 18rem;">--}}
    {{--                                <img src="images/post.png" class="card-img-top" style="height:180px; width: 100%"--}}
    {{--                                     alt="...">--}}
    {{--                                <div class="card-body">--}}
    {{--                                    <h5 class="card-title">مقاله 4</h5>--}}
    {{--                                    <p class="card-text" style="height: 70px">لورم ایپسوم متن ساختگی با تولید سادگی--}}
    {{--                                        نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>--}}
    {{--                                    <a href="#" class="btn btn-primary stretched-link">بیشتر</a>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </section>--}}

    <section class="bg-main">
        <div class="container">
            <div class="row text-center">
                <h4 class="fw-bold mb-4 mt-5">عضویت در خبرنامه</h4>
                <p>جهت عضویت در خبرنامه ایمیل خود را وارد کنید و دکمه مربوطه را فسار دهید.</p>
            </div>
            <div class="row align-items-center">
                <div class="col-md-5">
                    <form id="newsMemberForm" action="{{route('news_member.store')}}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label id="memberEmail" class="form-label">ایمیل <span class="text-danger">*</span></label>
                            <input type="email" id="memberEmail" name="email" required=""
                                   placeholder="please enter your email address" class="form-control">
                        </div>

                        <button type="submit" class="btn btn-primary">عضویت در خبرنامه</button>
                    </form>
                </div>
                <div class="col-md-5 offset-md-2">
                    <img class="img-fluid" src="./images/img_5.png" alt="">
                </div>
            </div>
        </div>
    </section>
@endsection
