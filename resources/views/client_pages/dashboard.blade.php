@extends('layout.layout')

@section('page_title' , 'داشبورد - پنل کاربری')

@section('page_content')
    <section class="m-5 bg-light">
        <div class="container overflow-hidden">
            <h4 class="text-center my-2"></h4>

            <div class="row gx-5">
                @include('client_pages.sidebar')
                <div class="col-8 bg-white ms-4">
                    <div class="col-md-12 text-white"
                         style="background: #0d6efd;border: 2px solid #0d6efd;border-radius: 5px;text-align: center">
                        <h3>پنل مدیریت <span style="font-size: 12px">@if(auth()->user()->role_id == 3)
                                    (مدیر مرکز خدمات)
                                @else (کاربر) @endif</span></h3>
                    </div>
                    <div class="row mt-4">
                        <div class="col-6">
                            <div class="text-center">
                                <p>کل نوبت‌ها <span class="bg-success badge badge-success">
                                        {{number_format($all_turns)}}
                                    </span></p>
                                <hr>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="text-center">
                                <p>کل سرویس‌ها <span class="bg-primary badge badge-primary">
                                        {{$all_services}}
                                    </span></p>
                                <hr>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-8">
                            <div>
                                <p>سرویس‌های این ماه</p>

                                <div class="text-center">
                                    <h2 class="text-info">{{$this_month_services}}</h2>
                                </div>
                            </div>

                            <div>
                                @if(auth()->user()->role_id == 3)
                                    <p>کل دریافتی‌های این ماه</p>
                                @else
                                    <p>کل پرداختی‌های این ماه</p>
                                @endif

                                <div class="text-center">
                                    <h2 class="text-info">{{number_format($this_month_receipt)}} تومان</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <img src="/images/Cash-Payment-bro.png" alt="" class="img-thumbnail">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
