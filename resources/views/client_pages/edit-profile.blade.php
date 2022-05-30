@extends('layout.layout')

@section('page_title' , 'ویرایش پروفایل - پنل کاربری')

@section('page_content')
    <section class="m-5 bg-light">
        <div class="container overflow-hidden">
            <div class="row gx-5">
                @include('client_pages.sidebar')
                <div class="col-8 bg-white ms-4">
                    <form class="row g-3 justify-content-center">
                        <img src="images/icon-panel.png" class="img-panel mt-5"
                             style="width: 75px; height: 60px;margin-right: 75px;">
                        <div class="mb-3 mt-5 w-50">
                            <label for="floatingInputGridCreate-upload" class="form-label">بارگذاری آیکن</label>
                            <input class="form-control" type="file" id="floatingInputGridCreate-upload" multiple>
                        </div>
                        <form class="row g-3 ">
                            <hr style="width: 750px">
                            <div class="col-md-12 w-75">
                                <label for="callme-name" class="form-label">نام</label>
                                <input type="text" class="form-control" id="callme-name1" placeholder="نام">
                            </div>
                            <!--                            <hr style="width: 750px">-->
                            <div class="col-md-12 w-75">
                                <label for="callme-name" class="form-label">نام خانوادگی</label>
                                <input type="text" class="form-control" id="callme-name2" placeholder="نام خانوادگی">
                            </div>
                            <!--                            <hr style="width: 750px">-->
                            <div class="col-md-12 w-75">
                                <label for="inputEmail4" class="form-label">ایمیل</label>
                                <input type="email" class="form-control" id="inputEmail4"
                                       placeholder="example@example.com">
                            </div>
                            <!--                            <hr style="width: 750px">-->
                            <div class="col-md-12 w-75">
                                <label for="inputPassword4" class="form-label">رمز عبور قدیمی</label>
                                <input type="password" class="form-control" id="inputPassword4" placeholder="*********">
                            </div>
                            <div class="col-md-12 w-75">
                                <label for="inputPassword4n" class="form-label">رمز عبور جدید</label>
                                <input type="password" class="form-control" id="inputPasswordn" placeholder="">
                            </div>
                            <div class="col-md-12 w-75">
                                <label for="inputPasswordn" class="form-label">تکرار رمز عبور جدید</label>
                                <input type="password" class="form-control" id="inputPassword4n" placeholder="">
                            </div>
                            <div class="col-md-12 w-75">
                                <label for="callme-name" class="form-label">شماره تماس</label>
                                <input type="text" class="form-control" id="callme-name2" placeholder="شماره تماس">
                            </div>
                            <div class="col-md-12 w-75">
                                <label for="callme-name" class="form-label">آدرس</label>
                                <input type="text" class="form-control" id="callme-name2" placeholder="آدرس">
                            </div>
                            <div class="mb-3 mt-2 w-75">
                                <label for="floatingInputGridCreate-upload" class="form-label">بارگذاری پروانه
                                    کسب</label>
                                <input class="form-control" type="file" id="floatingInputGridCreate-upload" multiple>
                            </div>
                            <button type="submit" class="btn btn-primary mr-5 mt-2 w-75">ذخیره تغییرات</button>
                        </form>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
