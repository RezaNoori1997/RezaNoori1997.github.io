@extends('layout.layout')

@section('page_title' , 'مدیریت پنل - پنل کاربری')

@section('page_content')
    <section class="m-5 bg-light">
        <div class="container overflow-hidden">
            <div class="row gx-5">
                @include('client_pages.sidebar')
                <div class="col-8 bg-white ms-4">
                    <form id="serviceForm" action="{{route('service.store')}}" method="post"
                          class="row g-3 justify-content-center">
                        @csrf
                        <div class="col-md-12 text-white "
                             style="background: #0d6efd;border: 2px solid #0d6efd;border-radius: 5px;text-align: center">
                            <h3>سرویس جدید</h3>
                        </div>

                        <div class="row mt-2">
                            <p class="text-primary text-center my-4">اطلاعات پلاک را اینجا از چپ به راست وارد
                                نمائید.</p>
                            <div class="col-md-3">
                                <label class="form-label">ایران</label>
                                <input type="text" name="p_ir" maxlength="2" required="" class="form-control"
                                       placeholder="ایران">
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">سه رقم شماره پلاک</label>
                                <input type="text" name="p_3" required="" maxlength="3" class="form-control"
                                       placeholder="شماره پلاک">
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">حرف الفبا</label>
                                <select name="p_alphabet" required="" class="form-control">
                                    <option value="الف">الف</option>
                                    <option value="ب">ب</option>
                                    <option value="پ">پ</option>
                                    <option value="ت">ت</option>
                                    <option value="ث">ث</option>
                                    <option value="ج">ج</option>
                                    <option value="چ">چ</option>
                                    <option value="ح">ح</option>
                                    <option value="خ">خ</option>
                                    <option value="د">د</option>
                                    <option value="ذ">ذ</option>
                                    <option value="ر">ر</option>
                                    <option value="ز">ز</option>
                                    <option value="ژ">ژ</option>
                                    <option value="س">س</option>
                                    <option value="ش">ش</option>
                                    <option value="ص">ص</option>
                                    <option value="ض">ض</option>
                                    <option value="ط">ط</option>
                                    <option value="ظ">ظ</option>
                                    <option value="ع">ع</option>
                                    <option value="غ">غ</option>
                                    <option value="ف">ف</option>
                                    <option value="ق">ق</option>
                                    <option value="ک">ک</option>
                                    <option value="گ">گ</option>
                                    <option value="ل">ل</option>
                                    <option value="م">م</option>
                                    <option value="ن">ن</option>
                                    <option value="و">و</option>
                                    <option value="ه">ه</option>
                                    <option value="ی">ی</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">دو رقم اول شماره پلاک</label>
                                <input type="text" name="p_2" required="" maxlength="2" class="form-control"
                                       placeholder="شماره پلاک">
                            </div>
                        </div>
                        <hr/>
                        <p class="text-primary text-center my-4">اطلاعات سرویس را در این قسمت تکمیل نمائید</p>
                        @php
                            $center = Auth::user()->service_center;

                            $users = $center
                                ->turns()
                                ->groupBy('users.id')
                                ->latest()
                                ->get();
                        @endphp

                        <div class="col-md-4">
                            <label class="form-label">کاربر مربوطه</label>
                            <select name="user" class="form-control" required>
                                <option selected disabled>کاربر را انتخاب نمائید!</option>
                                @foreach($users as $user)
                                    <option value="{{$user->id}}">{{$user->name .' : '. $user->mobile }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label class="form-label">کیلومتر فعلی</label>
                            <input type="text" name="current_km" class="form-control" placeholder="مثال: 15000">
                        </div>

                        <div class="col-md-4">
                            <label class="form-label">کیلومتر بعدی</label>
                            <input type="text" name="next_km" class="form-control" placeholder="مثال: 19000">
                        </div>

                        <div class="col-md-4">
                            <label class="form-label">تعویض روغن</label>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" name="ch_oil"
                                       id="flexSwitchCheckDefault">
                                <label class="form-check-label" for="flexSwitchCheckDefault"></label>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <label for="callme-name" class="form-label">تعویض فیلتر هوا</label>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" name="ch_air"
                                       id="flexSwitchCheckDefault">
                                <label class="form-check-label" for="flexSwitchCheckDefault"></label>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <label for="callme-name" class="form-label">تعویض فیلتر روغن</label>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" name="ch_oil_filter"
                                       id="flexSwitchCheckDefault">
                                <label class="form-check-label" for="flexSwitchCheckDefault"></label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="callme-name" class="form-label">تعویض روغن گیربکس</label>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" name="cg_oil_gearbox"
                                       id="flexSwitchCheckDefault">
                                <label class="form-check-label" for="flexSwitchCheckDefault"></label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="callme-name" class="form-label">تعویض روغن دیفرانسیل</label>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" name="cg_oil_def"
                                       id="flexSwitchCheckDefault">
                                <label class="form-check-label" for="flexSwitchCheckDefault"></label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="callme-name" class="form-label">تنظیم باد</label>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" name="wind"
                                       id="flexSwitchCheckDefault">
                                <label class="form-check-label" for="flexSwitchCheckDefault"></label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label class="form-label">صورتحساب</label>
                            <input type="text" class="form-control" name="payment" placeholder="صورتحساب">
                        </div>
                        <button type="submit" class="btn btn-primary">ذخیره</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('page_js')
    <script>
        $('#serviceForm').submit(function (e) {
            e.preventDefault();

            swal.fire('', 'در حال ثبت اطلاعات سرویس ...', '');
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
