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
                        <h3>نوبت ها</h3>
                    </div>
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">ردیف</th>
                            @if(auth()->user()->role_id == 3)
                                <th scope="col">نام کاربر</th>
                            @else
                                <th scope="col">نام مرکز سرویس‌دهنده</th>
                            @endif

                            <th scope="col">تاریخ رزرو شده</th>
                            <th scope="col">زمان رزرو شده</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(!$turns->isEmpty())
                            @foreach($turns as $turn)
                                @if(auth()->user()->role_id == 3)
                                    <tr>
                                        <th scope="row">{{$loop->iteration}}</th>
                                        <td>{{$turn->name}}</td>
                                        <td>{{$turn->pivot->date}}</td>
                                        <td> از {{$turn->pivot->start_time.' تا '.$turn->pivot->end_time}}</td>
                                    </tr>
                                @else
                                    <tr>
                                        <th scope="row">{{$loop->iteration}}</th>
                                        <td>{{$turn->title}}</td>
                                        <td>{{$turn->pivot->date}}</td>
                                        <td> از {{$turn->pivot->start_time.' تا '.$turn->pivot->end_time}}</td>
                                    </tr>
                                @endif
                            @endforeach
                        @else
                            <tr>نوبتی یافت نشد!</tr>
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
