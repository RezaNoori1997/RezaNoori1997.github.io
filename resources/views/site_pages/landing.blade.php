@extends('layout.layout')

@section('page_title' , 'ایساکو سرویس - سامانه آنلاین خدمات خودرو')

@section('page_content')
    <section class="pt-4 text-dark" style="background:url('images/mainslider6-1.jpg') no-repeat; height: 520px;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h4 class="fw-bold mt-5">خوش آمدید</h4>
                    <h5 class="fw-bold my-4 text-black">سامانه ایساکو سرویس</h5>
                    <p>
                        در این وب سایت سرویس دهندگان می توانند ثبت نام کنند و به پنل مدیریت وارد بشوند.
                    </p>
                    <button type="button" class="btn btn-outline btn-grad ms-3 border-3" data-bs-toggle="modal"
                            data-bs-target="#exampleModal1">
                        ثبت نام
                    </button>

                    <button type="button" class="btn btn-outline btn-grad ms-3 botton1 border-3" data-bs-toggle="modal"
                            data-bs-target="#exampleModal2">
                        ورود
                    </button>

{{--                    <form class="d-flex pt-5">--}}
{{--                        <input class="form-control me-2 border-3 w-50" type="search" placeholder="Search"--}}
{{--                               aria-label="Search">--}}
{{--                        <button class="btn btn-outline-dark border-3" type="submit">Search</button>--}}
{{--                    </form>--}}
                </div>
                <div class="col-md-6 mt-4 mt-md-0 mb-5">
                    <!--                    <img class="img-fluid" src="images/img_1.jpg" alt="">-->
                </div>
            </div>
        </div>
    </section>

    <section class="bg-main">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-md-4">
                    <i class="bi bi-app-indicator icon fs-2 mb-4"></i>
                    <h2 class="fw-bold">خدمات</h2>
                    <h4>
                        خدماتی که در این مراکز انجام می شود.
                    </h4>
                </div>
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card shadow text-center bg-main">
                                <div class="card-body">
                                    <i class="bi bi-truck icon fs-2 mb-4"></i>
                                    <p class="card-title fw-bold mb-4 bg-text">تعوض روغن</p>
                                    <p class="card-text bg-text">
                                        به صورت سرویس های دوره ای 5 هزار کیلومتر تعویض روغن انجام میگردد.
                                    </p>
                                </div>
                            </div>

                            <div class="card shadow text-center mt-4 bg-main">
                                <div class="card-body">
                                    <i class="bi bi-tsunami icon fs-2 mb-4"></i>
                                    <p class="card-title fw-bold mb-4 bg bg-text">تعویض فیلتر روغن و فیلتر هوا</p>
                                    <p class="card-text bg-text">
                                        به صورت سرویس های دوره ای 5 هزار کیلومتر تعویض روغن انجام میگردد.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mt-5">
                            <div class="card shadow text-center bg-main">
                                <div class="card-body">
                                    <i class="bi bi-wind icon fs-2 mb-4"></i>
                                    <p class="card-title fw-bold mb-4 bg-text">تنظیم باد تایرها</p>
                                    <p class="card-text bg-text">
                                        در هر بار مراجعه بررسی می شود.
                                    </p>
                                </div>
                            </div>

                            <div class="card shadow text-center mt-4 mb-5 bg-main">
                                <div class="card-body">
                                    <i class="bi bi-truck-flatbed icon fs-2 mb-4"></i>
                                    <p class="card-title fw-bold mb-4 bg-text">چک کردن موارد زیر</p>
                                    <p class="card-text bg-text">
                                        به صورت دوره ای آب رادیات ،شیشه شور و روغن گیربکس و روغن دیفرانسیل چک می شود.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-main">
        <div class="container">
            <div class="row text-center">
                <h4 class="fw-bold  mt-5">مراکز فعال</h4>
                <p>مراکز فعال با امتیاز بالا</p>
            </div>
            <div class="row g-3 align-items-center">
                @foreach($service_centers as $center)
                    <div class="col-md-4">
                        <div class="card shadow text-center py-4">
                            <div class="card-body">
                                <i class="bi bi-menu-button-wide-fill icon fs-2 mb-4"></i>
                                <p class="card-title fw-bold mb-4">{{$center->title}}</p>
                                <p class="card-title fw-bold mb-4">{{$center->city->name}}</p>
                                <p class="card-text text-muted">ساعت کاری</p>
                                <p class="card-text text-muted">صبح: از{{$center->morning_time}}
                                    تا {{$center->noon_time}}</p>
                                <p class="card-text text-muted">عصر: از{{$center->evening_time}}
                                    تا {{$center->night_time}}</p>
                                <p class="card-text text-muted">حداکثر سرویس در روز
                                    : {{$center->max_services_in_day}}</p>

                                <button class="btn btn-primary mt-4 reserveButton" data-key="{{$center->id}}">رزرو وقت
                                    قبلی
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="bg-main">
        <div class="container">
            <div class="row text-center text-black">
                <h4 class="fw-bold mt-5 mb-4">گالری تصاویر</h4>
                <p>کیفیت را از ما بخواهید.</p>
            </div>

            <div class="row">
                <div class="col">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                    aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                    aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner" style="height: auto;width: auto">
                            <div class="carousel-item active">
                                <img src="/images/img_2.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="/images/img_3.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="/images/img_4.jpg" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                                data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                                data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col mt-5">
                    <button class="btn btn-outline-light mb-5">مشاهده گالری</button>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-main">
        <div class="container">
            <div class="row text-center">
                <h4 class="fw-bold mb-4 mt-5">نظرات و پیشنهادات</h4>
                <p>منتظر هر گونه انتقاد و پیشنهاد جهت کارایی بهتر جهت خدمت به شما هستیم.</p>
            </div>
            <div class="row align-items-center">
                <div class="col-md-5">
                    <form id="offerForm" action="{{route('offers.store')}}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">ایمیل <span class="text-danger">*</span></label>
                            <input type="email" placeholder="Enter your email address here" required="" id="offerEmail"
                                   name="email" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">متن پیام <span class="text-danger">*</span></label>
                            <textarea id="offerMessage" placeholder="متن پیام را اینجا وارد کنید" required=""
                                      name="description" class="form-control"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">ارسال پیام</button>
                    </form>
                </div>
                <div class="col-md-5 offset-md-2">
                    <img class="img-fluid" src="/images/img_5.png" alt="">
                </div>
            </div>

            <!--            <div class="row text-center gy-5">-->
            <!--                <div class="col-md-2">-->
            <!--                    <img width="70" class="img-fluid" src="./images/img_6.svg" alt="">-->
            <!--                </div>-->
            <!--                <div class="col-md-2">-->
            <!--                    <img width="70" class="img-fluid" src="./images/img_7.svg" alt="">-->
            <!--                </div>-->
            <!--                <div class="col-md-2">-->
            <!--                    <img width="70" class="img-fluid" src="./images/img_8.svg" alt="">-->
            <!--                </div>-->
            <!--                <div class="col-md-2">-->
            <!--                    <img width="70" class="img-fluid" src="./images/img_9.svg" alt="">-->
            <!--                </div>-->
            <!--                <div class="col-md-2">-->
            <!--                    <img width="70" class="img-fluid" src="./images/img_10.svg" alt="">-->
            <!--                </div>-->
            <!--                <div class="col-md-2">-->
            <!--                    <img width="70" class="img-fluid" src="./images/img_11.svg" alt="">-->
            <!--                </div>-->
            <!--            </div>-->
        </div>
    </section>

    <div class="modal fade" id="reserveModal" data-url="{{route('reserve')}}" tabindex="-1"
         aria-labelledby="reserveModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModal1Label">رزرو نوبت</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                </div>
                <div class="modal-body text-center reserveBox">

                </div>

                <div class="modal-footer">
                    <button class="btn btn-primary reserveBtn" data-from="" data-to=""
                            data-url="{{route('store_turn')}}">گرفتن نوبت
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('page_js')
    <script>
        $('#offerForm').submit(function (e) {
            e.preventDefault();

            swal.fire('', 'در حال ثبت اطلاعات ...', '');
            swal.showLoading();

            let self = $(this);
            let form = new FormData(this);

            $.ajax({
                url: self.attr('action'),
                method: 'POST',
                data: form,
                cache: false,
                contentType: false,
                processData: false,
                success: function (response) {
                    swal.close();
                    response = JSON.parse(response);
                    if (response.status) {
                        swal.fire({
                            title: 'موفق',
                            text: response.msg,
                            icon: 'success',
                            confirmButtonText: 'بستن',
                        });

                        $('#offerEmail').val(null);
                        $('#offerMessage').val(null);

                    } else {
                        swal.fire({
                            title: 'خطا',
                            text: response.msg,
                            icon: 'error',
                            confirmButtonText: 'بستن',
                        });
                    }
                },
                error: function () {
                    swal.close();
                    swal.fire({
                        title: 'خطا',
                        text: 'خطا در ثبت اطلاعات',
                        icon: 'error',
                        confirmButtonText: 'بستن',
                    });
                },
            })
        });

        function reserveLoaing() {
            $('.reserveBox').html(`<div class="spinner-grow text-secondary" role="status">
                                        <span class="sr-only">Loading...</span>
                                    </div>
                                    <div class="spinner-grow text-secondary" role="status">
                                        <span class="sr-only">Loading...</span>
                                    </div>
                                    <div class="spinner-grow text-secondary" role="status">
                                        <span class="sr-only">Loading...</span>
                                    </div>`);
        }

        $('.reserveButton').click(function (e) {
            reserveLoaing();

            let self = $(this);

            swal.fire('', 'در حال دریافت نوبت‌ها ...', '');
            swal.showLoading();

            $('.reserveBtn').attr('data-key', self.attr('data-key'));

            setTimeout(function () {
                $.ajax({
                    url: $('#reserveModal').attr('data-url'),
                    method: 'POST',
                    data: {
                        key: self.attr('data-key'),
                    },

                    success: function (response) {
                        swal.close();
                        $('.reserveBox').html(response);
                        $('#reserveModal').modal('show');
                    },

                    error: function () {
                        swal.close();
                        swal.fire({
                            title: 'خطا',
                            text: 'خطا در دریافت نوبت‌ها',
                            icon: 'error',
                            confirmButtonText: 'بستن',
                        });
                    },
                })
            }, 1000);
        });

        $(document).on('click', '.reserveTime', function (e) {
            let self = $(this);
            if (self.attr('data-free') == 1) {
                $('.reserveTime').removeClass('bg-primary');
                $('.reserveTime').addClass('bg-secondary');
                self.removeClass('bg-secondary');
                self.addClass('bg-primary');

                $('.reserveBtn').attr('data-from', self.attr('data-from'));
                $('.reserveBtn').attr('data-to', self.attr('data-to'));

            } else {
                swal.fire({
                    title: 'خطا',
                    text: 'این نوبت قبلا رزرو شده است!',
                    icon: 'warning',
                    confirmButtonText: 'بستن',
                });
                return;
            }
        });

        $('.reserveBtn').click(function (e) {

            let self = $(this);

            swal.fire('', 'در حال ثبت نوبت‌ ...', '');
            swal.showLoading();

            $.ajax({
                url: self.attr('data-url'),
                method: 'POST',
                data: {
                    key: self.attr('data-key'),
                    from: self.attr('data-from'),
                    to: self.attr('data-to'),
                },

                success: function (response) {
                    swal.close();
                    response = JSON.parse(response);

                    if (response.status) {
                        swal.fire({
                            title: 'موفق',
                            text: response.msg,
                            icon: 'success',
                            confirmButtonText: 'بستن',
                        });
                        setTimeout(function () {
                            window.location.href = response.url;
                        }, 1000);
                    } else {
                        swal.fire({
                            title: 'خطا',
                            text: response.msg,
                            icon: 'error',
                            confirmButtonText: 'بستن',
                        });
                    }
                },
                error: function () {
                    swal.close();
                    swal.fire({
                        title: 'خطا',
                        text: 'خطا در ثبت اطلاعات',
                        icon: 'error',
                        confirmButtonText: 'بستن',
                    });
                },
            })
        });
    </script>
@endsection
