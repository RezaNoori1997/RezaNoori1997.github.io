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
                        <h3>سرویس ها</h3>
                    </div>
                    @if(\Illuminate\Support\Facades\Auth::user()->role_id == 3)
                        <div class="mx-auto" style="display: flex; align-items: flex-end; justify-content: left">
                            <a href="{{route('panel.service')}}" class="btn btn-primary m-2">افزودن سرویس جدید</a>
                        </div>
                    @endif

                    <div class="mt-4" style="overflow-x: scroll">
                        <p class="text-center text-primary">در زیر سرویس‌های خود را مشاهده می‌کنید</p>
                        <table class="table table-striped">
                            <thead>
                            <tr class="text-center">
                                <th scope="col">ردیف</th>
                                @if(auth()->user()->role_id == 3)
                                    <th scope="col" style="white-space: nowrap">نام کاربر</th>
                                @else
                                    <th scope="col" style="white-space: nowrap">نام مرکز سرویس‌دهنده</th>
                                @endif
                                <th scope="col" style="white-space: nowrap">تاریخ سرویس</th>
                                <th scope="col" style="white-space: nowrap">کیلومتر فعلی</th>
                                <th scope="col" style="white-space: nowrap">کیلومتر بعدی مراجعه</th>
                                <th scope="col" style="white-space: nowrap">شماره پلاک</th>
                                <th scope="col" style="white-space: nowrap">تعویض روغن</th>
                                <th scope="col" style="white-space: nowrap">تعویض روغن گیربکس</th>
                                <th scope="col" style="white-space: nowrap">تعویض روغن دیفرانسیل</th>
                                <th scope="col" style="white-space: nowrap">تعویض فیلتر روغن</th>
                                <th scope="col" style="white-space: nowrap">تعویض فیلتر هوا</th>
                                <th scope="col" style="white-space: nowrap">تنظیم باد</th>
                                <th scope="col" style="white-space: nowrap">هزینه</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(!$services->isEmpty())
                                @foreach($services as $service)
                                    <tr class="text-center">
                                        <th scope="row">{{$loop->iteration}}</th>
                                        @if(auth()->user()->role_id == 3)
                                            <td style="white-space: nowrap">{{$service->name.' : '.$service->mobile }}</td>
                                        @else
                                            <td>{{$service->title}}</td>
                                        @endif
                                        @php
                                            $pivot = $service->pivot;
                                        @endphp
                                        <td style="white-space: nowrap; direction: ltr">{{$pivot->created_at}}</td>
                                        <td>{{number_format($pivot->current_km)}}</td>
                                        <td>{{number_format($pivot->next_km)}}</td>

                                        <td style="white-space: nowrap">
                                            <span>ایران {{$pivot->plaque_ir}}</span>
                                            <span class="text-info">/</span>
                                            <span>{{$pivot->plaque_3}}</span>
                                            <i class="text-info">{{$pivot->plaque_alpha}}</i>
                                            <span>{{$pivot->plaque_2}}</span>
                                        </td>

                                        <td>{{($pivot->oil_change == 1) ? "بله" : "خیر"}}</td>
                                        <td>{{($pivot->gearbox_oil_change == 1) ? "بله" : "خیر"}}</td>
                                        <td>{{($pivot->differential_oil_change == 1) ? "بله" : "خیر"}}</td>
                                        <td>{{($pivot->oil_filter_replacement == 1) ? "بله" : "خیر"}}</td>
                                        <td>{{($pivot->air_filter_replacement == 1) ? "بله" : "خیر"}}</td>
                                        <td>{{($pivot->wind_adjustment == 1) ? "بله" : "خیر"}}</td>

                                        <td style="white-space: nowrap">{{number_format($pivot->payment)}} تومان</td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="13" class="text-center text-muted">تاکنون سرویسی اضافه نشده است!</td>
                                </tr>
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
