<!--begin:: Signup drawer-->
<div  id="add-role-drawer" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="add-role" data-kt-drawer-activate="true"
      data-kt-drawer-width="{default:'100%', 'md': '450px'}" data-kt-drawer-toggle="#add-role-drawer-toggle"
      data-kt-drawer-close="#add-role-drawer-close"
>
    <!--begin::Card-->
    <div class="card shadow-none rounded-0 w-100">
        <!--begin::Body-->
        <div class="card-body" id="add-role-body">
            <!--begin::Content-->
            <div id="kt_explore_scroll" class="scroll-y me-n5 pe-5" data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-wrappers="#add-role-body" data-kt-scroll-dependencies="#add-role-header" data-kt-scroll-offset="5px">
                <ul class="nav nav-tabs nav-line-tabs nav-line-tabs-2x mb-5 fs-6">
                    <li class="nav-item">
                        <a class="nav-link active menu-state-title-danger fs-3 fw-bold" data-bs-toggle="tab" href="#login-tab">LOGIN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-3 fw-bold" data-bs-toggle="tab" href="#register-tab">REGISTER</a>
                    </li>
                    <li class="nav-item w-50">
                        <button type="button" class="btn float-end btn-sm btn-icon btn-active-color-danger h-40px w-40px me-n6 mt-n2" id="add-role-drawer-close">
                            <i class="ki-duotone ki-abstract-11 fs-1">
                                <i class="path1"></i><i class="path2"></i>
                            </i>
                        </button>
                    </li>
                </ul>
                <div class="tab-content mt-10" id="myTabContent">
                    <div class="tab-pane fade show active" id="login-tab" role="tabpanel">
                        <div class="mb-0">
                            <form x-submit x-data class="form w-100" action="{{ route('api.login') }}" method="POST" @finish="location.reload()">
                                <div class="text-center mb-10">
                                    <div class="text-gray-400 fw-semibold fs-5">
                                        New Here? <a href="" class="link-danger fw-bold">Create an Account</a>
                                    </div>
                                </div>
                                <div class="fv-row mb-10">
                                    <input class="form-control form-control-lg form-control-solid" type="email"
                                           name="email" placeholder="Email Address" aria-label="name" required
                                    >
                                </div>
                                <div class="fv-row mb-15 position-relative" data-kt-password-meter="true">
                                    <input class="form-control form-control-lg form-control-solid" type="password" name="password"
                                           placeholder="Password" autocomplete="off" aria-label="password" required
                                    >
                                    <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility">
                        <i class="bi bi-eye-slash fs-2"></i>
                        <i class="bi bi-eye fs-2 d-none"></i>
                    </span>
                                    <a href="#" class="link-danger mt-2 fs-6 fw-bold float-end">Forgot Password ?</a>
                                </div>
                                <div class="fv-row mb-8">
                                    <label for="remember" class="form-check form-check-inline form-check-danger">
                                        <input id="remember" name="remember" class="form-check-input" type="checkbox"/>
                                        <span class="form-check-label fw-semibold text-gray-700 fs-base ms-1">
                            Remember me
                        </span>
                                    </label>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-lg btn-danger w-100"><i class="fa fa-sign-in-alt"></i>Sign in</button>
                                </div>
                            </form>
                            <!--begin::Separator-->
                            <div class="d-flex align-items-center my-10">
                                <div class="border-bottom border-gray-300 mw-50 w-100"></div>
                                <span class="fw-semibold text-gray-400 fs-7 mx-2">OR</span>
                                <div class="border-bottom border-gray-300 mw-50 w-100"></div>
                            </div>
                            <!--end::Separator-->
                            <a href="#" class="btn btn-flex flex-center btn-light-primary btn-lg w-100 mb-5">
                                <img alt="Logo" src="{{ asset('media/svg/brand-logos/apple-black.svg') }}" class="h-20px me-3"/>
                                Continue with Apple
                            </a>
                            <a href="#" class="btn btn-flex flex-center btn-light-danger btn-lg w-100 mb-5">
                                <img alt="Logo" src="{{ asset('media/svg/brand-logos/google-icon.svg') }}" class="h-20px me-3"/>
                                Continue with Google
                            </a>
                            <a href="#" class="btn btn-flex flex-center btn-light-info btn-lg w-100">
                                <img alt="Logo" src="{{ asset('media/svg/brand-logos/facebook-4.svg') }}" class="h-20px me-3"/>
                                Continue with Facebook
                            </a>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="register-tab" role="tabpanel">
                        <div class="mb-0">
                            <form x-submit x-data class="w-100" action="{{ route('api.register') }}" method="POST" @finish="location.reload()">
                                <div class="mb-7 text-center">
                                    <div class="text-gray-400 fw-semibold fs-5">
                                        It takes less than a minute.
                                    </div>
                                </div>
                                <div class="row fv-row">
                                    <div class="col-xl-6 mb-7">
                                        <input class="form-control form-control-lg form-control-solid" type="text"
                                               placeholder="First Name" name="first_name" aria-label="name" required
                                        >
                                    </div>
                                    <div class="col-xl-6 mb-7">
                                        <input class="form-control form-control-lg form-control-solid" type="text"
                                               placeholder="Last Name" name="last_name" aria-label="name" required
                                        >
                                    </div>
                                </div>
                                <div class="fv-row mb-7">
                                    <input class="form-control form-control-lg form-control-solid" type="email"
                                           placeholder="Email Address" name="email" aria-label="email" required
                                    >
                                </div>
                                <div class="row fv-row">
                                    <div class="col-xl-6 mb-7">
                                        <input class="form-control form-control-lg form-control-solid" type="tel"
                                               placeholder="Phone Number" name="phone" aria-label="phone" required
                                        >
                                    </div>
                                    <div class="col-xl-6 mb-7">
                                        <select class="form-select form-select-lg form-select-solid" name="gender" id="gender" aria-label="gender" data-hide-search="true" data-control="select2" data-placeholder="Gender" required>
                                            <option></option>
                                            <option value="M">Male</option>
                                            <option value="F">Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 fv-row" data-kt-password-meter="true">
                                    <div class="mb-1">
                                        <div class="position-relative mb-3">
                                            <input class="form-control form-control-lg form-control-solid" aria-label="password"
                                                   type="password" placeholder="Password" name="password" autocomplete="off" required
                                            >
                                            <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility">
                                <i class="bi bi-eye-slash fs-2"></i>
                                <i class="bi bi-eye fs-2 d-none"></i>
                            </span>
                                        </div>
                                        <div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
                                            <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                            <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                            <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                            <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
                                        </div>
                                    </div>
                                    <div class="text-muted"><sup>Password Strength</sup></div>
                                </div>
                                <div class="fv-row mb-7 mt-0">
                                    <input class="form-control form-control-lg form-control-solid" type="password" aria-label="password"
                                           placeholder="Confirm Password" name="password_confirmation" autocomplete="off" required
                                    >
                                </div>
                                <div class="text-center mb-3">
                                    <button class="btn btn-lg btn-danger w-100"><i class="fa fa-user-circle"></i>Create Account</button>
                                </div>
                                <div class="text-gray-400 fw-semibold fs-6 text-center">
                                    Already have an account? <a href="" class="link-danger fw-bold">Sign in here</a>
                                </div>
                                <!--begin::Separator-->
                                <div class="d-flex align-items-center my-10">
                                    <div class="border-bottom border-gray-300 mw-50 w-100"></div>
                                    <span class="fw-semibold text-gray-400 fs-7 mx-2">OR</span>
                                    <div class="border-bottom border-gray-300 mw-50 w-100"></div>
                                </div>
                                <!--end::Separator-->
                                <button type="button" class="btn btn-flex flex-center btn-light-primary fw-bold w-100 mb-5">
                                    <img alt="Logo" src="{{ asset('media/svg/brand-logos/apple-black.svg') }}" class="h-20px me-3"/>
                                    Sign in with Apple
                                </button>
                                <button type="button" class="btn btn-light-danger btn-flex flex-center fw-bold w-100 mb-5">
                                    <img alt="Logo" src="{{ asset('media/svg/brand-logos/google-icon.svg') }}" class="h-20px me-3"/>
                                    Sign in with Google
                                </button>
                                <button type="button" class="btn btn-flex flex-center btn-light-info fw-bold w-100 mb-5">
                                    <img alt="Logo" src="{{ asset('media/svg/brand-logos/facebook-4.svg') }}" class="h-20px me-3"/>
                                    Sign in with Facebook
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--end::Content-->
        </div>
        <!--end::Body-->
    </div>
    <!--end::Card-->
</div>
