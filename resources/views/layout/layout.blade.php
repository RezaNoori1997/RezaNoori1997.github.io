<!doctype html>
<html lang="fa" dir="rtl">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css"
          integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <link rel="stylesheet" href="/css/main.css">
    <link rel="shortcut icon" href="images/favicon.png">
    @yield('page_css')
    <title>@yield('page_title')</title>
</head>

<body>
<header class="shadow">
    <nav class="navbar navbar-expand-lg navbar-light bg-main-footer-header">
        <div class="container">
            <a class="navbar-brand text-white" href="{{route('home')}}">خدمات موتوری خودرو</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="{{route('home')}}">صفحه اصلی</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="javascript:void(0)" id="navbarDropdown"
                           role="button"
                           data-bs-toggle="dropdown" aria-expanded="false">
                            بلاگ
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li>
                                <a class="dropdown-item" href="{{route('blog')}}">همه</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{route('articles')}}">مقالات آموزشی</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="{{route('edu_videos')}}">ویدئوهای آموزشی</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="btn btn-outline btn-grad text-white" data-bs-toggle="modal"
                                data-bs-target="#aboutme">
                            درباره ما
                        </button>
                        <div class="modal fade" id="aboutme" tabindex="-1" aria-labelledby="aboutmeModal1Label"
                             aria-hidden="true">
                            <div
                                class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-fullscreen text-dark">
                                <div class="modal-content bg-main">
                                    <div class="modal-header">
                                        <h3 class="modal-title" style="color:black;" id="aboutmeModal1Label">
                                            <img src="images/contact-us-icon-orange.png" height=60px; width=60px;
                                                 class="me-3">درباره وب سایت خدمات موتوری خودرو Car Engine Service</img>
                                        </h3>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="container">
                                            <div class="row justify-content-center align-items-center">
                                                <div class="col-8  p-4 ">
                                                    با توجه به پیشرفت روز افزون علم و فناوری در جهت پیشـرفت ، راحـتی ،
                                                    دسـترسی سریع و جلوگیری از اتلاف وقت استفاده می شود می توانیم یکی از
                                                    نیازهای جامعه رو این مورد بدانیم که قرار است مشــتری به خدمــات
                                                    دهنده برای رفع مشکلات خودرویی خود مراجعه کند، اینکه به چه خدمات
                                                    خوردویی مراجعه کند که رتبه بندی خـوبی دارد و کار خود را به خــوبی
                                                    انجام می دهد می تواند از ویژگی های وب سایت ما باشد که معرفی کند به
                                                    کاربران خب حالا سوال پیش میاد ما قرار است چه کاری انجام دهیم .
                                                </div>
                                                <div class="col-4 p-4">
                                                    <img src="images/other1.png" height=380px; width=477px;></img>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer" style="width: 120%;">
                                        <div class="row justify-content-center" style="width: 90%;">
                                            <div class="col-8  justify-content-right">
                                                <p>
                                                    ما را در شبکه‌های مجازی دنبال کنید.
                                                </p>
                                                <a href="https://instagram.com" class="text-muted"><i
                                                        class="bi bi-instagram fs-2" style="cursor: pointer"></i></a>
                                                <a href="https://telegram.com" class="text-muted"><i
                                                        class="bi bi-telegram fs-2 mx-3"
                                                        style="cursor: pointer"></i></a>
                                                <a href="https://facebook.com" class="text-muted"><i
                                                        class="bi bi-facebook fs-2 me-3"
                                                        style="cursor: pointer"></i></a>
                                                <a href="https://linkedin.com" class="text-muted"><i
                                                        class="bi bi-linkedin fs-2" style="cursor: pointer"></i></a>
                                            </div>
                                            <div class="col-4 justify-content-left">
                                                <button type="button" class="btn btn-secondary"
                                                        style="height: 50%; width: 20%;" data-bs-dismiss="modal">بستن
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </li>
                    <li class="nav-item ms-2">
                        <button type="button" class="btn btn-outline btn-grad text-white" data-bs-toggle="modal"
                                data-bs-target="#callme">
                            تماس با ما
                        </button>
                        <div class="modal fade" id="callme" tabindex="-1" aria-labelledby="callmeModal1Label"
                             aria-hidden="true">
                            <div
                                class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-fullscreen text-dark">
                                <div class="modal-content bg-main">
                                    <div class="modal-header">
                                        <h5 class="modal-title" style="color:black;" id="callmeModal1Label">
                                            خوشحال میشم باهاتون آشنا بشم منتظر انتقاد و پیشنهادات شما هسیتم.
                                        </h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="container justify-content-center">
                                            <div class="row justify-content-center align-items-center">
                                                <form id="contactUsForm" action="{{route('contact.store')}}"
                                                      method="POST"
                                                      class="col-6 mt-0">
                                                    @csrf
                                                    <h3 class="mt-0">فرم تماس <span style="font-size: 13px">(مقادیر ستاره‌دار الزامی می‌باشند!)</span>
                                                    </h3>
                                                    <div class="mb-3">
                                                        <label for="callme-name" class="form-label">نام و نام
                                                            خانوادگی <span class="text-danger">*</span></label>
                                                        <input type="text" required="" class="form-control"
                                                               id="callme-name"
                                                               name="name"
                                                               placeholder="نام و نام خانوادگی">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="callme-email" class="form-label">ایمیل<span
                                                                class="text-danger">*</span></label>
                                                        <input type="email" required="" class="form-control"
                                                               id="callme-email"
                                                               name="email"
                                                               placeholder="example@example.com">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="callme-label" class="form-label">موضوع<span
                                                                class="text-danger">*</span></label>
                                                        <input type="text" required="" class="form-control"
                                                               id="callme-label"
                                                               name="title"
                                                               placeholder="موضوع">
                                                    </div>
                                                    <div class="form-floating">
                                                        <textarea class="form-control mt-4" required=""
                                                                  placeholder="متن پیام"
                                                                  name="description"
                                                                  id="callme-massage" style="height: 150px"></textarea>
                                                        <label for="callme-massage">متن پیام<span
                                                                class="text-danger">*</span></label>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary mr-5 mt-2">ارسال
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer" style="width: 120%;">
                                        <div class="row justify-content-center" style="width: 90%;">
                                            <div class="col-8  justify-content-right">
                                                <p>
                                                    ما را در شبکه های مجازی دنبال کنید.
                                                </p>
                                                <a href="https://instagram.com" class="text-muted"><i
                                                        class="bi bi-instagram fs-2" style="cursor: pointer"></i></a>
                                                <a href="https://telegram.com" class="text-muted"><i
                                                        class="bi bi-telegram fs-2 mx-3"
                                                        style="cursor: pointer"></i></a>
                                                <a href="https://facebook.com" class="text-muted"><i
                                                        class="bi bi-facebook fs-2 me-3"
                                                        style="cursor: pointer"></i></a>
                                                <a href="https://linkedin.com" class="text-muted"><i
                                                        class="bi bi-linkedin fs-2" style="cursor: pointer"></i></a>

                                            </div>
                                            <div class="col-4 justify-content-left">
                                                <button type="button" class="btn btn-secondary"
                                                        style="height: 50%; width: 20%;" data-bs-dismiss="modal">بستن
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>

            </div>
            @auth()
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a href="{{route('panel.dashboard')}}" class="btn btn-outline btn-grad">
                            سلام {{auth()->user()->name}}
                        </a>
                    </li>
                </ul>
            @else
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <button type="button" class="btn btn-outline btn-grad" data-bs-toggle="modal"
                                data-bs-target="#exampleModal1">
                            ثبت‌نام
                        </button>
                    </li>

                    <li class="nav-item">
                        <button type="button" class="btn btn-outline btn-grad botton1 ms-2 btn-grad"
                                data-bs-toggle="modal"
                                data-bs-target="#exampleModal2">
                            ورود
                        </button>
                    </li>
                </ul>
            @endauth
        </div>
    </nav>
</header>
@yield('page_content')

{{-- Modals --}}
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModal1Label"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable text-dark">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModal1Label">ایجاد حساب کاربری</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
            </div>
            <div class="modal-body">
                اگر سرویس دهنده هستید می توانید در قسمت <strong class="text-primary">ثبت نام
                    سرویس
                    دهنده</strong> و اگر
                مشتری هستید می
                توانید در قسمت <strong class="text-primary">مشتریان</strong> ثبت نام کنید.
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" data-bs-target="#exampleModalToggle2"
                        data-bs-toggle="modal">ثبت نام سرویس دهنده
                </button>
                <button class="btn btn-primary" data-bs-target="#exampleModalToggle3"
                        data-bs-toggle="modal">ثبت نام مشتریان
                </button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="exampleModalToggle2" aria-hidden="true"
     aria-labelledby="exampleModalToggle2" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-dark" id="exampleModalToggleLabel2">ثبت‌نام
                    سرویس‌دهنده</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
            </div>
            <form action="{{route('user_register')}}" method="post"
                  enctype="multipart/form-data" class="text-dark centerRegisterForm">
                @csrf
                <div class="row g-2 modal-body">
                    <p class="text-center text-muted" style="font-size: 13px">اطلاعات صاحب
                        مرکز</p>
                    <div class="col-md">
                        <div class="form-floating">
                            <input type="text" name="fname" required="" class="form-control"
                                   id="floatingInputGridCreate-name"
                                   value="">
                            <label for="floatingInputGridCreate-name">نام <span
                                    class="text-danger">*</span></label>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="form-floating">
                            <input type="text" name="lname" required="" class="form-control"
                                   id="floatingInputGridCreate-lname"
                                   value="">
                            <label for="floatingInputGridCreate-lname">نام خانوادگی <span
                                    class="text-danger">*</span></label>
                        </div>
                    </div>
                    <div class="form-floating mt-2">
                        <input type="text" name="mobile" required="" class="form-control"
                               id="floatingInputGridCreate-mobile">
                        <label for="floatingInputGridCreate-mobile">شماره موبایل <span
                                class="text-danger">*</span></label>
                    </div>
                    <div class="form-floating mt-2">
                        <input type="password" name="password" required="" class="form-control"
                               id="floatingInputGridCreate-password" placeholder="رمز عبور">
                        <label for="floatingInputGridCreate-password">رمز عبور <span
                                class="text-danger">*</span></label>
                    </div>

                    <div class=" form-floating mt-4">
                        <p class="text-center text-muted" style="font-size: 13px">اطلاعات
                            مرکز</p>
                    </div>

                    <div class="col-md-6">
                        <div class="form-floating">
                            @php
                                $provinces = \Illuminate\Support\Facades\DB::table('provinces')->get();
                            @endphp
                            <select id="selectState" data-url="{{route('get_cities')}}"
                                    required=""
                                    class="w-100 form-control">
                                <option selected disabled>استان را انتخاب کنید</option>
                                @foreach($provinces as $province)
                                    <option class="states"
                                            value="{{$province->id}}">{{$province->name}}</option>
                                @endforeach
                            </select>
                            <label for="selectState">استان <span
                                    class="text-danger">*</span></label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <select id="selectCity" required=""
                                    class="w-100 form-control"
                                    name="city">
                                <option selected disabled>ابتدا استان را انتخاب کنید</option>
                            </select>
                            <label for="selectCity">شهر <span
                                    class="text-danger">*</span></label>
                        </div>
                    </div>
                    <div class="form-floating mt-2">
                        <input type="text" name="center_title" class="form-control" required=""
                               id="floatingInputGridCreate-title"
                               placeholder="مثال: تعویض روغنی رحیمی">
                        <label for="floatingInputGridCreate-title">نام مرکز <span
                                class="text-danger">*</span></label>
                    </div>
                    <div class="mb-3 mt-2">
                        <label for="floatingInputGridCreate-upload" class="form-label">تصویر
                            پروانه کسب <span
                                class="text-danger">*</span></label>
                        <input class="form-control" name="image" required type="file"
                               accept="image/*"
                               id="floatingInputGridCreate-upload"/>
                    </div>
                </div>
                <input hidden type="text" name="add" value="1">
                <div class="modal-footer align-items-center">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">بستن
                    </button>
                    <button type="submit" class="btn btn-primary">ذخیره</button>
                </div>
            </form>
            <button class="btn btn-primary" data-bs-target="#exampleModal1"
                    data-bs-toggle="modal">
                بازگشت
            </button>
        </div>
    </div>
</div>
<div class="modal fade" id="exampleModalToggle3" aria-hidden="true"
     aria-labelledby="exampleModalToggle3" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-dark" id="exampleModalToggleLabel3">ثبت‌نام
                    مشتری</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
            </div>
            <div class="modal-body text-dark">
                <form class="row form g-2 centerRegisterForm" method="post"
                      action="{{route('user_register')}}">
                    @csrf
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="text" required="" name="fname" class="form-control"
                                   id="floatingInputGridCreate-m-name"
                                   placeholder="نام را وارد کنید"
                                   value="">
                            <label for="floatingInputGridCreate-name">نام<span
                                    class="text-danger">*</span></label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="text" required="" name="lname" class="form-control"
                                   id="floatingInputGridCreate-m-lname"
                                   placeholder="نام خانواگی را وارد کنید"
                                   value="">
                            <label for="floatingInputGridCreate-lname">نام خانوادگی<span
                                    class="text-danger">*</span></label>
                        </div>
                    </div>
                    <div class="form-floating mt-2">
                        <input type="text" required="" name="mobile" class="form-control"
                               id="floatingInputGridCreate-m-mobile"
                               placeholder="شماره موبایل را وارد کنید">
                        <label for="floatingInputGridCreate-mobile">موبایل<span
                                class="text-danger">*</span></label>
                    </div>
                    <input hidden type="text" name="add" value="0"/>
                    <div class="form-floating mt-2">
                        <input type="password" name="password" required="" class="form-control"
                               id="floatingInputGridCreate-m-password" placeholder="رمز عبور">
                        <label for="floatingInputGridCreate-password">رمز عبور</label>
                    </div>

                    <button type="submit" class="btn btn-primary mt-2">ثبت‌نام</button>
                </form>
                <!--                                        <div class="dropdown-divider"></div>-->
                <!--                                        <a class="dropdown-item" href="#">ورود به حساب</a>-->
            </div>
            <!--                                    <div class="modal-footer align-items-center">-->
            <!--                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">بستن</button>-->
            <!--                                        <button type="submit" class="btn btn-primary">ذخیره</button>-->
            <!--                                    </div>-->
            <button class="btn btn-primary" data-bs-target="#exampleModal1"
                    data-bs-toggle="modal">
                بازگشت
            </button>
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModal2Label"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable text-dark">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">ورود به حساب کاربری</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
            </div>
            <form id="loginForm" action="{{route('user_login')}}" method="post"
                  class="px-4 py-3">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="exampleDropdownFormMobile1" class="form-label">شماره
                            موبایل<span
                                class="text-danger">*</span></label>
                        <input type="text" required="" name="mobile" class="form-control"
                               id="exampleDropdownFormMobile1"
                               placeholder="مثال: 0912xxxXXXX" style="direction: rtl">
                    </div>
                    <div class="mb-3">
                        <label for="exampleDropdownFormPassword1" class="form-label">رمز
                            عبور<span
                                class="text-danger">*</span> </label>
                        <input type="password" name="password" required="" class="form-control"
                               id="exampleDropdownFormPassword1"
                               placeholder="رمز عبور را وارد کنید">
                    </div>
                    <div class="mb-3">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="dropdownCheck">
                            <label class="form-check-label" for="dropdownCheck">
                                مرا بخاطر داشته باش!
                            </label>
                        </div>
                    </div>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="javascript:void(0)" data-bs-toggle="modal"
                       data-bs-target="#exampleModal1">حساب کاربری ندارید؟ ایجاد حساب کاربری</a>
                </div>
                <div class="modal-footer align-items-center">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">بستن
                    </button>
                    <button type="submit" class="btn btn-primary">ورود به حساب</button>
                </div>
            </form>
        </div>
    </div>
</div>
{{--/End Modals --}}

<footer class="bg-main-footer-header">
    <h5 class="fw-bold footer-header" style="margin-left: auto;margin-right: auto;width:90%;"></h5>
    <div class="container pb-4 mt-4">
        <div class="row g-5">
            <div class="col-md-4">
                <h3 class="fw-bold">Car engine services</h3>
                <p>
                    ما را در شبکه های مجازی دنبال کنید.
                </p>
                <a href="https://instagram.com" class="text-muted"><i
                        class="bi bi-instagram fs-2" style="cursor: pointer"></i></a>
                <a href="https://telegram.com" class="text-muted"><i
                        class="bi bi-telegram fs-2 mx-3"
                        style="cursor: pointer"></i></a>
                <a href="https://facebook.com" class="text-muted"><i
                        class="bi bi-facebook fs-2 me-3"
                        style="cursor: pointer"></i></a>
                <a href="https://linkedin.com" class="text-muted"><i
                        class="bi bi-linkedin fs-2" style="cursor: pointer"></i></a>
            </div>
            <div class="col-md-7 offset-md-1">
                <div class="row">
                    <div class="col-md-4">
                        <h6 class="fw-bold footer-header w-75">بخش‌های وب‌سایت</h6>
                        <ul class="list-unstyled">
                            <li>
                                <button type="button" class="btn btn-outline-dark btn-grad botton1 mt-3">
                                    <a class="footer-link" href="{{route('home')}}">صفحه ای اصلی</a>
                                </button>
                            </li>
                            <li class="my-2">
                                <button type="button" class="btn btn-outline-dark btn-grad botton2">
                                    <a class="footer-link" href="{{route('blog')}}">بلاگ</a>
                                </button>
                            </li>
                            <li>
                                <button type="button" class="btn btn-outline-dark btn-grad botton3"
                                        data-bs-toggle="modal" data-bs-target="#aboutme">
                                    درباره ما
                                </button>
                            </li>
                            <li class="mt-2">
                                <button type="button" class="btn btn-outline-dark btn-grad botton4"
                                        data-bs-toggle="modal" data-bs-target="#callme">
                                    تماس با ما
                                </button>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h6 class="fw-bold footer-header w-75"> بلاگ </h6>
                        <ul class="list-unstyled mt-3">
                            <li>
                                <!--                                    <a class="footer-link" href="learning-articles.html">مقالات آموزشی</a>-->
                                <button type="button" class="btn btn-outline-dark btn-grad botton1">
                                    <a class="footer-link" href="{{route('blog')}}">همه</a>
                                </button>
                            </li>
                            <li class="mt-2">
                                <!--                                    <a class="footer-link" href="learning-articles.html">مقالات آموزشی</a>-->
                                <button type="button" class="btn btn-outline-dark btn-grad botton1">
                                    <a class="footer-link" href="{{route('articles')}}">مقالات آموزشی</a>
                                </button>
                            </li>
                            <li class="my-2">
                                <!--                                    <a class="footer-link" href="educational-videos.html">فیلم های آموزشی</a>-->
                                <button type="button" class="btn btn-outline-dark btn-grad">
                                    <a class="footer-link" href="{{route('edu_videos')}}">ویدیوهای آموزشی</a>
                                </button>
                            </li>
                            <!--                                <li>-->
                            <!--                                    <a class="footer-link" href="#">تصاویر</a>-->
                            <!--                                </li>-->
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h6 class="fw-bold footer-header w-100">طراح و توسعه‌دهنده</h6>
                        <ul class="list-unstyled">
                            <li>
                                <a class="footer-link mt-3" href="#">طراح و برنامه‌نویس</a>
                            </li>
                            <li class="my-2">
                                <a class="footer-link" href="#">Reza Noori</a>
                            </li>
                        </ul>
                    </div>
                    <h6 class="fw-bold footer-header w-100">تمامی حقوق برای خدمات موتوری خودرو محفوظ می‌باشد.</h6>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<script>
    $(document).ready(function (e) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': '{{csrf_token()}}',
            }
        });
    });

    $('#contactUsForm').submit(function (e) {
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
                    clearContactForm();
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

    $('#newsMemberForm').submit(function (e) {
        e.preventDefault();

        swal.fire('', 'در حال ثبت عضویت ...', '');
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
                    $('input#memberEmail').val(null);
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

    function clearContactForm() {
        $('#callme-name').val(null);
        $('#callme-email').val(null);
        $('#callme-label').val(null);
        $('#callme-massage').val(null);
    }

    $(document).on('click', '.states', function (e) {
        e.preventDefault();
        let self = $(this);
        let key = self.val();
        $.ajax({
            url: $('#selectState').data('url'),
            method: 'POST',
            data: {
                key: key,
            },
            success: function (response) {
                swal.close();
                response = JSON.parse(response);
                if (response.status) {
                    let output = ``;
                    response.data.forEach(city => {
                        output += `<option value="${city.id}">${city.name}</option>`;
                    });
                    $('#selectCity').html(output);
                } else {
                    swal.fire({
                        title: 'خطا',
                        text: response.data,
                        icon: 'error',
                        confirmButtonText: 'بستن',
                    });
                }
            },
            error: function () {
                swal.close();
                swal.fire({
                    title: 'خطا',
                    text: 'خطا در دریافت اطلاعات شهرها',
                    icon: 'error',
                    confirmButtonText: 'بستن',
                });
            },
        })
    });

    $(".centerRegisterForm").submit(function (e) {
        e.preventDefault();

        swal.fire('', 'در حال ثبت‌نام ...', '');
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
                    setTimeout(function () {
                        window.location.href = '{{route('panel.dashboard')}}';
                    }, 1800);
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

    $('#loginForm').submit(function (e) {
        e.preventDefault();

        swal.fire('', 'در حال پردازش ...', '');
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
                    setTimeout(function () {
                        window.location.href = '{{route('panel.dashboard')}}';
                    }, 1800);
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
@yield('page_js')
</body>

</html>
