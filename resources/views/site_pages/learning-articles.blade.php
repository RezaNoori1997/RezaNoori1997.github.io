@extends('layout.layout')

@section('page_title' , 'مقالات آموزشی - ایساکو سرویس')

@section('page_content')
    <section class="bg-main py-4">
        <div class="container-fluid">
            <h2 class="fw-bold" style="margin: 0px 2px 50px 2px;">مقالات آموزشی</h2>
            <div class="row g-4 align-items-center">
                @if(!$articles->isEmpty())
                    @foreach($articles as $article)
                        <div class="col-md-3">
                            <div class="card" style="width: 18rem;">
                                <img src="{{asset($article->image)}}" class="card-img-top"
                                     style="height:180px; width: 100%"
                                     alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">{{$article->title}}</h5>
                                    <p class="card-text"
                                       style="height: 70px">{{str_limit($article->description , 60)}}</p>
                                    <a href="{{$article->link}}"
                                       class="btn btn-primary stretched-link">بیشتر</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div class="text-center" style="display: flex; justify-content: center;">
                        {!! $articles->links('vendor.pagination.bootstrap-4') !!}
                    </div>
                @else
                    <div class="text-center text-danger">
                        <p>مقاله‌ای یافت نشد.</p>
                    </div>
                @endif
            </div>
        </div>
    </section>

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
