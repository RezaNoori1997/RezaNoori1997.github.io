<div class="col-2 bg-dark gy-5" style="border-radius: 20px; height: 315px;">
    <ul class="ul-panel mt-5 mb-5" style="list-style-type: none;">
        <li>
            <a href="{{route('panel.dashboard')}}">
                <button type="button" class="btn btn-dark mb-2">
                    <svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"
                         data-svg="tag">
                        <path fill="none" stroke="#000" stroke-width="1.1"
                              d="M17.5,3.71 L17.5,7.72 C17.5,7.96 17.4,8.2 17.21,8.39 L8.39,17.2 C7.99,17.6 7.33,17.6 6.93,17.2 L2.8,13.07 C2.4,12.67 2.4,12.01 2.8,11.61 L11.61,2.8 C11.81,2.6 12.08,2.5 12.34,2.5 L16.19,2.5 C16.52,2.5 16.86,2.63 17.11,2.88 C17.35,3.11 17.48,3.4 17.5,3.71 L17.5,3.71 Z"></path>
                        <circle cx="14" cy="6" r="1"></circle>
                    </svg>
                    داشبورد
                </button>
            </a>
        </li>
        <li>
            <div class="btn-group dropend mb-2">
                <button type="button" class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown"
                        aria-expanded="false">
                    <svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"
                         data-svg="user">
                        <circle fill="none" stroke="#000" stroke-width="1.1" cx="9.9" cy="6.4"
                                r="4.4"></circle>
                        <path fill="none" stroke="#000" stroke-width="1.1"
                              d="M1.5,19 C2.3,14.5 5.8,11.2 10,11.2 C14.2,11.2 17.7,14.6 18.5,19.2"></path>
                    </svg>
                    اطلاعات کاربری
                </button>
                <ul class="dropdown-menu bg-dark ml-5 mb-2">
                    <a href="{{route('panel.profile')}}">
                        <button type="button" class="btn btn-outline-secondary mb-2"
                                style="padding-inline:14px;">
                            <svg width="20" height="20" viewBox="0 0 20 20"
                                 xmlns="http://www.w3.org/2000/svg" data-svg="thumbnails">
                                <rect fill="none" stroke="#000" x="3.5" y="3.5" width="5"
                                      height="5"></rect>
                                <rect fill="none" stroke="#000" x="11.5" y="3.5" width="5"
                                      height="5"></rect>
                                <rect fill="none" stroke="#000" x="11.5" y="11.5" width="5"
                                      height="5"></rect>
                                <rect fill="none" stroke="#000" x="3.5" y="11.5" width="5"
                                      height="5"></rect>
                            </svg>
                            مشخصات کاربر
                        </button>
                    </a>
{{--                    <a href="{{route('panel.edit-profile')}}">--}}
{{--                        <button type="button" class="btn btn-outline-secondary">--}}
{{--                            <svg width="20" height="20" viewBox="0 0 20 20"--}}
{{--                                 xmlns="http://www.w3.org/2000/svg" data-svg="file-edit">--}}
{{--                                <path fill="none" stroke="#000"--}}
{{--                                      d="M18.65,1.68 C18.41,1.45 18.109,1.33 17.81,1.33 C17.499,1.33 17.209,1.45 16.98,1.68 L8.92,9.76 L8,12.33 L10.55,11.41 L18.651,3.34 C19.12,2.87 19.12,2.15 18.65,1.68 L18.65,1.68 L18.65,1.68 Z"></path>--}}
{{--                                <polyline fill="none" stroke="#000"--}}
{{--                                          points="16.5 8.482 16.5 18.5 3.5 18.5 3.5 1.5 14.211 1.5"></polyline>--}}
{{--                            </svg>--}}
{{--                            ویرایش اطلاعات--}}
{{--                        </button>--}}
{{--                    </a>--}}
                </ul>
            </div>
        </li>
        <li>
            <a href="{{route('panel.turns')}}">
                <button type="button" class="btn btn-dark mb-2">
                    <svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"
                         data-svg="tag">
                        <path fill="none" stroke="#000" stroke-width="1.1"
                              d="M17.5,3.71 L17.5,7.72 C17.5,7.96 17.4,8.2 17.21,8.39 L8.39,17.2 C7.99,17.6 7.33,17.6 6.93,17.2 L2.8,13.07 C2.4,12.67 2.4,12.01 2.8,11.61 L11.61,2.8 C11.81,2.6 12.08,2.5 12.34,2.5 L16.19,2.5 C16.52,2.5 16.86,2.63 17.11,2.88 C17.35,3.11 17.48,3.4 17.5,3.71 L17.5,3.71 Z"></path>
                        <circle cx="14" cy="6" r="1"></circle>
                    </svg>
                    نوبت‌ها
                </button>
            </a>
        </li>
        <li>
            <a href="{{route('panel.services')}}">
                <button type="button" class="btn btn-dark mb-2">
                    <svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"
                         data-svg="cart">
                        <circle cx="7.3" cy="17.3" r="1.4"></circle>
                        <circle cx="13.3" cy="17.3" r="1.4"></circle>
                        <polyline fill="none" stroke="#000"
                                  points="0 2 3.2 4 5.3 12.5 16 12.5 18 6.5 8 6.5"></polyline>
                    </svg>
                    سرویس‌ها
                </button>
            </a>
        </li>
        <li>
            <a href="{{route('user_logout')}}">
                <button type="button" class="btn btn-dark">
                    <svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"
                         data-svg="sign-out">
                        <polygon
                            points="13.1 13.4 12.5 12.8 15.28 10 8 10 8 9 15.28 9 12.5 6.2 13.1 5.62 17 9.5"></polygon>
                        <polygon points="13 2 3 2 3 17 13 17 13 16 4 16 4 3 13 3"></polygon>
                    </svg>
                    خروج
                </button>
            </a>
        </li>
    </ul>
</div>
