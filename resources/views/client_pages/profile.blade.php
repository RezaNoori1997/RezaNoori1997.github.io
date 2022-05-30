@extends('layout.layout')

@section('page_title' , 'پروفایل - پنل کاربری')

@section('page_content')
    <section class="m-5 bg-light">
        <div class="container overflow-hidden">
            <div class="row gx-5">
                @include('client_pages.sidebar')
                <div class="col-8 bg-white ms-4">
                    <div class="col-md-12 text-white "
                         style="background: #0d6efd;border: 2px solid #0d6efd;border-radius: 5px;text-align: center">
                        <h3>مشخصات کاربر</h3>
                    </div>
                    <form class="row g-3 align-items-center">
                        <img src="{{asset(auth()->user()->avatar)}}" class="img-panel mt-5"
                             style="width: 75px; height: 60px;margin-right: 75px;">
                        <ul class="ms-5" style="list-style-type:none;">
                            <hr style="width: 600px">
                            <li>
                                <p>نام : {{auth()->user()->name}}</p>
                            </li>
                            <hr style="width: 600px">
                            <li>
                                <p>نام خانوادگی : {{auth()->user()->last_name}}</p>
                            </li>
                            <hr style="width: 600px">
                            <li>
                                <p>ایمیل :
                                    @if(is_null(auth()->user()->email))
                                        ثبت نشده!
                                    @else
                                        {{auth()->user()->email}}
                                    @endif
                                </p>
                            </li>
                            <hr style="width: 600px">
                            <li>
                                <p>شماره تماس : {{auth()->user()->mobile}}</p>
                            </li>

                            <hr style="width: 600px">
                            @if(auth()->user()->role_id == 3)
                                <li>
                                    <p>پروانه کسب :
                                        @if(!is_null(auth()->user()->service_center))
                                            <a href="{{asset(auth()->user()->service_center->business_license)}}">دانلود
                                                فایل پروانه کسب</a>
                                        @endif
                                    </p>
                                </li>
                            @endif
                        </ul>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
