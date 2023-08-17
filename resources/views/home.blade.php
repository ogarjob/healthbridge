<!DOCTYPE html>
<html lang="en">
<head>
    <title>HealthBridge - The Nation's Best Healthcare Services</title>
    <meta charset=utf-8>
    <meta http-equiv=X-UA-Compatible content="IE=edge">
    <meta name=viewport content="width=device-width,initial-scale=1">
    <meta name="description" content="{{ $description ?? '' }}">
    <meta name="keywords" content="{{ $keywords ?? '' }}">
    <meta name="author" content="Ogar Job - 08126012460">
    <meta property="og:site_name" content="{{ config('app.name') }}"/>
    <meta property="og:title" content="{{ $title ?? '' }}"/>
    <meta property="og:description" content="{{ $description ?? '' }}"/>
    <meta property="og:image" content="{{ $image ?? '' }}"/>
    <title>{{ $title ?? config('app.name') }}</title>
    <meta property="og:locale" content="en_US"/>

    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('media/logos/default.svg') }}">
    <link rel="shortcut icon" type="image/png" sizes="16x16" href="{{ asset('media/logos/default.svg') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700"/>
    <link href="{{ asset('plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('css/style.bundle.css') }}" rel="stylesheet" type="text/css"/>
    <script defer src="https://unpkg.com/alpinejs@3.12.0/dist/cdn.min.js"></script>

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
            var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
            s1.async=true;
            s1.src='https://embed.tawk.to/64dcfd6994cf5d49dc6ac6be/1h7vjrplj';
            s1.charset='UTF-8';
            s1.setAttribute('crossorigin','*');
            s0.parentNode.insertBefore(s1,s0);
        })();
    </script>
    <!--End of Tawk.to Script-->
</head>
<body id="kt_body" data-bs-spy="scroll" data-bs-target="#kt_landing_menu" class="bg-white position-relative app-blank">
<script>
    var defaultThemeMode = "light";
    var themeMode;

    if (document.documentElement) {
        if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
            themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
        } else {
            if (localStorage.getItem("data-bs-theme") !== null) {
                themeMode = localStorage.getItem("data-bs-theme");
            } else {
                themeMode = defaultThemeMode;
            }
        }

        if (themeMode === "system") {
            themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
        }

        document.documentElement.setAttribute("data-bs-theme", themeMode);
    }
</script>
<!--begin::Root-->
<div class="d-flex flex-column flex-root" id="kt_app_root">
    <!--begin::Header Section-->
    <div class="mb-0" id="home">
        <!--begin::Wrapper-->
        <div class="bgi-size-contain bgi-position-x-center bgi-position-y-bottom landing-dark-bg"
             style="background-image: url({{ asset('media/svg/illustrations/landing.svg') }})">
            <!--begin::Header-->
            <div class="landing-header" data-kt-sticky="true" data-kt-sticky-name="landing-header"
                 data-kt-sticky-offset="{default: '200px', lg: '300px'}">
                <!--begin::Container-->
                <div class="container">
                    <!--begin::Wrapper-->
                    <div class="d-flex align-items-center justify-content-between">
                        <!--begin::Logo-->
                        <div class="d-flex align-items-center flex-equal">
                            <!--begin::Mobile menu toggle-->
                            <button class="btn btn-icon btn-active-color-primary me-3 d-flex d-lg-none" id="kt_landing_menu_toggle">
                                <i class="ki-duotone ki-abstract-14 fs-2hx">
                                    <span class="path1"></span><span class="path2"></span>
                                </i>
                            </button>
                            <!--end::Mobile menu toggle-->
                            <!--begin::Logo image-->
                            <a href="{{ route('home') }}">
                                <img alt="Logo" src="{{ asset('media/logos/landing.svg') }}" class="logo-default h-25px h-lg-30px"/>
                                <img alt="Logo" src="{{ asset('media/logos/landing-dark.svg') }}" class="logo-sticky h-20px h-lg-25px"/>
                            </a>
                            <!--end::Logo image-->
                        </div>
                        <!--end::Logo-->
                        <!--begin::Menu wrapper-->
                        <div class="d-lg-block" id="kt_header_nav_wrapper">
                            <div class="d-lg-block p-5 p-lg-0" data-kt-drawer="true" data-kt-drawer-name="landing-menu"
                                 data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
                                 data-kt-drawer-width="200px" data-kt-drawer-direction="start" data-kt-swapper-mode="prepend"
                                 data-kt-drawer-toggle="#kt_landing_menu_toggle" data-kt-swapper="true"
                                 data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav_wrapper'}"
                            >
                                <div class="menu menu-column flex-nowrap menu-rounded menu-lg-row menu-title-gray-500 menu-state-title-danger nav nav-flush fs-5 fw-semibold" id="kt_landing_menu">
                                    <div class="menu-item">
                                        <a class="menu-link nav-link active py-3 px-4 px-xxl-6" href="#kt_body"
                                           data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">{{ __('Home') }}</a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link nav-link text-active-danger py-3 px-4 px-xxl-6" href="#e-health"
                                           data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">
                                            {{ __('E-health') }}
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link nav-link text-active-danger py-3 px-4 px-xxl-6" href="#our-services"
                                           data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">
                                            {{ __('Our Services') }}</a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link nav-link text-active-danger py-3 px-4 px-xxl-6" href="#team"
                                           data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">
                                            {{ __('Our Team') }}</a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link nav-link text-active-danger py-3 px-4 px-xxl-6" href="#our-branches"
                                           data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">
                                            {{ __('Our Branches') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex-equal text-end ms-1">
                            @auth()
                                <a href="{{ route('dashboard') }}" class="symbol symbol-35px symbol-md-40px me-2">
                                    <img src="{{ user()->photo }}" alt="user photo"/>
                                </a>
                            @else
                                <button id="add-role-drawer-toggle" class="symbol symbol-35px symbol-md-40px me-2 p-0">
                                    <span class="symbol-label bg-white">
                                        <i class="ki-duotone ki-profile-circle text-danger fs-2x">
                                            <i class="path1"></i><i class="path2"></i><i class="path3"></i>
                                        </i>
                                    </span>
                                </button>
                            @endauth
                        </div>
                    </div>
                </div>
                <!--end::Container-->
            </div>
            <!--end::Header-->
            <!--begin::Landing hero-->
            <div class="d-flex flex-column flex-center w-100 min-h-350px min-h-lg-500px px-9">
                <div class="text-center mb-5 mb-lg-10 py-10 py-lg-20">
                    <h1 class="text-white lh-base fw-bold fs-2x fs-lg-3x mb-15">
                        {{ __('Bridging the Gap in the Provision') }}<br/> {{ __('of') }}
                        <span style="background: linear-gradient(to right, #f1416c 0%, #f1416c 100%);-webkit-background-clip: text;-webkit-text-fill-color: transparent;">
                            <span id="kt_landing_hero_text">{{ __('Healthcare Services') }}</span>
                        </span>
                        {{ __('in Nigeria') }}
                    </h1>
                    <div class="tns tns-default">
                        <div data-tns="true" data-tns-speed="2000" data-tns-autoplay-timeout="8000" data-tns-controls="false"
                             data-tns-nav-position="bottom" data-tns-mouse-drag="true" data-tns-items="1"
                             data-tns-responsive="{1200: {items: 3}, 992: {items: 2}}"
                        >
                            <div class="text-center px-1">
                                <img src="{{ asset('media/home/hospital5.jpg') }}" class="card-rounded shadow mh-lg-650px mw-100" alt=""/>
                            </div>
                            <div class="text-center px-1">
                                <img src="{{ asset('media/home/hospital2.jpg') }}" class="card-rounded shadow mh-lg-650px mw-100" alt=""/>
                            </div>
                            <div class="text-center px-1">
                                <img src="{{ asset('media/home/hospital3.jpg') }}" class="card-rounded shadow mh-lg-650px mw-100" alt=""/>
                            </div>
                            <div class="text-center px-1">
                                <img src="{{ asset('media/home/hospital4.jpg') }}" class="card-rounded shadow mh-lg-650px mw-100" alt=""/>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#book-appointment-modal">{{ __('Book Appointment') }}</button>
                </div>
                <!--begin::Clients-->
                <div class="d-flex flex-center flex-wrap position-relative px-5">
                    <div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip" title="KPMG International">
                        <img src="{{ asset('media/svg/brand-logos/kpmg.svg') }}" class="mh-30px mh-lg-40px" alt=""/>
                    </div>
                    <div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip" title="Nasa">
                        <img src="{{ asset('media/svg/brand-logos/nasa.svg') }}" class="mh-30px mh-lg-40px" alt=""/>
                    </div>
                    <div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip" title="Aspnetzero">
                        <img src="{{ asset('media/svg/brand-logos/aspnetzero.svg') }}" class="mh-30px mh-lg-40px" alt=""/>
                    </div>
                    <div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip" title="AON - Empower Results">
                        <img src="{{ asset('media/svg/brand-logos/aon.svg') }}" class="mh-30px mh-lg-40px" alt=""/>
                    </div>
                    <div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip" title="Truman">
                        <img src="{{ asset('media/svg/brand-logos/truman.svg') }}" class="mh-30px mh-lg-40px" alt=""/>
                    </div>
                </div>
                <!--end::Clients-->
            </div>
            <!--end::Landing hero-->
        </div>
        <!--end::Wrapper-->
        <!--begin::Curve bottom-->
        <div class="landing-curve landing-dark-color mb-10 mb-lg-20">
            <svg viewBox="15 12 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 11C3.93573 11.3356 7.85984 11.6689 11.7725 12H1488.16C1492.1 11.6689 1496.04 11.3356 1500 11V12H1488.16C913.668 60.3476 586.282 60.6117 11.7725 12H0V11Z" fill="currentColor"></path>
            </svg>
        </div>
        <!--end::Curve bottom-->
    </div>
    <!--end::Header Section-->
    <!--begin::Why Choose Us Section-->
    <div class="z-index-2">
        <div class="container">
            <div class="text-center mb-17">
                <h3 class="fs-2hx text-dark mb-5" id="e-health" data-kt-scroll-offset="{default: 100, lg: 150}">{{ __('E-health') }}</h3>
                <div class="fs-5 text-muted fw-bold">
                    {{ __('Our E-health platform offers video consultations with specialist Doctors in various fields of Medicine. This innovative platform which is the first of its kind in Nigeria, brings about a change in outpatient consultation, leveraging technology through telemedicine. With Our E-health platform, all Nigerians, wherever they are located, now have access to premium healthcare services.') }}
                </div>
            </div>
            <div class="row w-100 gy-10 mb-md-20">
                <div class="col-md-4 px-5">
                    <div class="text-center mb-10 mb-md-0">
                        <img src="{{ asset('media/illustrations/sketchy-1/2.png') }}" class="mh-125px mb-9" alt=""/>
                        <div class="d-flex flex-center mb-5">
                            <span class="badge badge-circle badge-light-success fw-bold p-5 me-3 fs-3">1</span>
                            <div class="fs-5 fs-lg-3 fw-bold text-dark">{{ __('Consult with E-health') }}</div>
                        </div>
                        <div class="fw-semibold fs-6 fs-lg-4 text-muted">
                            {{ __('Log on to our website and click on the "Consult with E-health" button then Choose your preferred doctor and the appointment date/time') }}
                        </div>
                    </div>
                </div>
                <div class="col-md-4 px-5">
                    <div class="text-center mb-10 mb-md-0">
                        <img src="{{ asset('media/illustrations/sketchy-1/4.png') }}" class="mh-125px mb-9" alt=""/>
                        <div class="d-flex flex-center mb-5">
                            <span class="badge badge-circle badge-light-success fw-bold p-5 me-3 fs-3">2</span>
                            <div class="fs-5 fs-lg-3 fw-bold text-dark">{{ __('Confirm Appointment') }}</div>
                        </div>
                        <div class="fw-semibold fs-6 fs-lg-4 text-muted">
                            {{ __('An email will be sent to you to make payment for the consultation. Click on pay now, then make payment online using your bank card or transfer') }}
                        </div>
                    </div>
                </div>
                <div class="col-md-4 px-5">
                    <div class="text-center mb-10 mb-md-0">
                        <img src="{{ asset('media/illustrations/sketchy-1/15.png') }}" class="mh-125px mb-9" alt=""/>
                        <div class="d-flex flex-center mb-5">
                            <span class="badge badge-circle badge-light-success fw-bold p-5 me-3 fs-3">3</span>
                            <div class="fs-5 fs-lg-3 fw-bold text-dark">{{ __('Meet your doctor') }}</div>
                        </div>
                        <div class="fw-semibold fs-6 fs-lg-4 text-muted">
                            {{ __('Once payment is confirmed, an email with the consultation link will be sent to you so you can log on at the scheduled time by clicking on the link') }}
                        </div>
                    </div>
                </div>
            </div>
            <button class="btn btn-danger d-block mx-auto mb-md-20" data-bs-toggle="modal" data-bs-target="#ehealth-modal">
                {{ __('Consult with E-health') }}
            </button>
            <div class="accordion mb-md-20" id="faq">
                <h1 class="text-dark mb-5 text-center mb-10">{{ __('Frequently Asked Questions (FAQs)') }}</h1>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="faq_header_1">
                        <button class="accordion-button fs-4 fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq_body_1" aria-expanded="true" aria-controls="faq_body_1">
                            {{ __('What are some benefits of using the E-health platform?') }}
                        </button>
                    </h2>
                    <div id="faq_body_1" class="accordion-collapse collapse" aria-labelledby="faq_header_1" data-bs-parent="#faq">
                        <div class="accordion-body fw-semibold text-gray-600">
                            {{ __('E-health distinguishes itself as the first proper hospital operator-based telemedicine platform designed to offer the entire value chain under one platform – consultation & diagnostics, all the way to prescriptions and lab referrals') }}
                            <br><br>
                            {{ __('Standing out from other telemedicine providers, E-health provides access to a wide range of specialists across different areas of medicine (multidisciplinary care) under one platform') }}
                            <br><br>
                            {{ __('E-health has a two-way add-on feature that allows the patient to invite a family member or friend on the consultation and at the same time permits the Clinician to invite a colleague in case of a multi-disciplinary or complicated consultation. It also provides the flexibility of choosing the specialty or Specialist and the preferred appointment time') }}
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="faq_header_2">
                        <button class="accordion-button fs-4 fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq_body_2" aria-expanded="false" aria-controls="faq_body_2">
                            {{ __('What is the mode of payment on E-health?') }}
                        </button>
                    </h2>
                    <div id="faq_body_2" class="accordion-collapse collapse" aria-labelledby="faq_header_2" data-bs-parent="#faq">
                        <div class="accordion-body fw-semibold text-gray-600">
                            {{ __('You can make payments online using your bank card, USSD code or via bank transfers. Payments are secured with Paystack') }}
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="faq_header_3">
                        <button class="accordion-button fs-4 fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq_body_3" aria-expanded="false" aria-controls="faq_body_3">
                            {{ __('How much is a consult on the E-health platform?') }}
                        </button>
                    </h2>
                    <div id="faq_body_3" class="accordion-collapse collapse" aria-labelledby="faq_header_3" data-bs-parent="#faq">
                        <div class="accordion-body fw-semibold text-gray-600">
                            {{ __('It costs ₦5,000 to consult with a specialist for 1hour') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end::Why Choose Us Section-->

    <!--begin::Services Section-->
    <div class="mt-sm-5 ">
        <!--begin::Curve top-->
        <div class="landing-curve landing-dark-color ">
            <svg viewBox="15 -1 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 48C4.93573 47.6644 8.85984 47.3311 12.7725 47H1489.16C1493.1 47.3311 1497.04 47.6644 1501 48V47H1489.16C914.668 -1.34764 587.282 -1.61174 12.7725 47H1V48Z" fill="currentColor"></path>
            </svg>
        </div>
        <!--end::Curve top-->
        <div class="py-20 landing-dark-bg ">
            <div class="container">
                <div class="d-flex flex-column container pt-lg-20">
                    <div class="mb-13 text-center">
                        <h1 class="fs-2hx fw-bold text-white mb-5" id="our-services" data-kt-scroll-offset="{default: 100, lg: 150}">{{ __('Our Services') }}</h1>
                        <div class="text-gray-600 fw-semibold fs-5">
                            {{ __('You Can Call Us And Book A Visit') }} +2348126012460, +2348196879815
                        </div>
                    </div>
                    <div class="text-center">
                        <div class="row g-10 mb-10">
                            <div class="col-xl-4">
                                <div class="d-flex h-100 align-items-center">
                                    <div class="w-100 d-flex flex-column flex-center rounded-3 bg-body py-15 px-10">
                                        <div class="mb-7 text-center">
                                            <h1 class="text-dark mb-5 fw-boldest">PRIMARY CARE</h1>
                                        </div>
                                        @php
                                            $services = (['Dental Clinic', 'Eye Clinic', 'Physiotherapy', 'Family Planning', 'Immunization Clinic', '24 Hour Pharmacy'])
                                        @endphp
                                        <div class="w-100 mb-10">
                                            @foreach($services as $service)
                                                <div class="d-flex flex-stack mb-5">
                                                    <span class="fw-semibold fs-6 text-gray-800 text-start pe-3">{{ $service }}</span>
                                                    <i class="ki-duotone ki-check-circle fs-1 text-danger">
                                                        <i class="path1"></i><i class="path2"></i>
                                                    </i>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="d-flex h-100 align-items-center">
                                    <div class="w-100 d-flex flex-column flex-center rounded-3 bg-danger py-20 px-10">
                                        <div class="mb-7 text-center">
                                            <h1 class="text-white mb-5 fw-boldest">DIAGNOSTICS/LAB</h1>
                                        </div>
                                        @php
                                            $services = (['Ultrasound Scan-2D,3D,&4D', 'Hematology', 'Chemistry', 'Microbiology', 'Cardiotocography (CTG)', '24 Hour Ambulatory BP Monitoring', ])
                                        @endphp
                                        <div class="w-100 mb-10">
                                            @foreach($services as $service)
                                                <div class="d-flex flex-stack mb-5">
                                                    <span class="fw-semibold fs-6 text-white opacity-75 text-start pe-3">{{ $service }}</span>
                                                    <i class="ki-duotone ki-check-circle fs-1 text-white">
                                                        <i class="path1"></i><i class="path2"></i>
                                                    </i>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="d-flex h-100 align-items-center">
                                    <div class="w-100 d-flex flex-column flex-center rounded-3 bg-body py-15 px-10">
                                        <div class="mb-7 text-center">
                                            <h1 class="text-dark mb-5 fw-boldest">OBS & GYNAE/ PAEDIATRICS</h1>
                                        </div>
                                        @php
                                            $services = (['Antenatal Care', 'Obstetrics', 'Gynaecology', 'Fibroid & Infertility Clinic', 'Neonatal Care', 'Behaviour & Growth Clinic'])
                                        @endphp
                                        <div class="w-100 mb-10">
                                            @foreach($services as $service)
                                                <div class="d-flex flex-stack mb-5">
                                                    <span class="fw-semibold fs-6 text-gray-800 text-start pe-3">{{ $service }}</span>
                                                    <i class="ki-duotone ki-check-circle fs-1 text-danger">
                                                        <i class="path1"></i><i class="path2"></i>
                                                    </i>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row g-10 mb-10">
                            <div class="col-xl-4">
                                <div class="d-flex h-100 align-items-center">
                                    <div class="w-100 d-flex flex-column flex-center rounded-3 bg-body py-15 px-10">
                                        <div class="mb-7 text-center">
                                            <h1 class="text-dark mb-5 fw-boldest">SPECIALIST CLINIC</h1>
                                        </div>
                                        @php
                                            $services = (['Internal Medicine', 'Cardiology', 'Endocrinology', 'Neurology', 'Psychiatry', 'Stress & Sex Clinic'])
                                        @endphp
                                        <div class="w-100 mb-10">
                                            @foreach($services as $service)
                                                <div class="d-flex flex-stack mb-5">
                                                    <span class="fw-semibold fs-6 text-gray-800 text-start pe-3">{{ $service }}</span>
                                                    <i class="ki-duotone ki-check-circle fs-1 text-danger">
                                                        <i class="path1"></i><i class="path2"></i>
                                                    </i>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="d-flex h-100 align-items-center">
                                    <div class="w-100 d-flex flex-column flex-center rounded-3 bg-danger py-20 px-10">
                                        <div class="mb-7 text-center">
                                            <h1 class="text-white mb-5 fw-boldest">HEALTH SCREENING</h1>
                                        </div>
                                        @php
                                            $services = (['Routine Medical Check-up', 'Well Woman Check-up', 'Well Man Check-up', 'Wellness Clinic', 'Occupational Health Screening', 'Domestic Staff Screening', ])
                                        @endphp
                                        <div class="w-100 mb-10">
                                            @foreach($services as $service)
                                                <div class="d-flex flex-stack mb-5">
                                                    <span class="fw-semibold fs-6 text-white opacity-75 text-start pe-3">{{ $service }}</span>
                                                    <i class="ki-duotone ki-check-circle fs-1 text-white">
                                                        <i class="path1"></i><i class="path2"></i>
                                                    </i>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="d-flex h-100 align-items-center">
                                    <div class="w-100 d-flex flex-column flex-center rounded-3 bg-body py-15 px-10">
                                        <div class="mb-7 text-center">
                                            <h1 class="text-dark mb-5 fw-boldest">SURGERY</h1>
                                        </div>
                                        @php
                                            $services = (['General & Breast Surgery', 'Orthopaedics', 'Urology', 'Anaesthesia & Pain Clinic', 'Radiology', 'Paediatric Surgery'])
                                        @endphp
                                        <div class="w-100 mb-10">
                                            @foreach($services as $service)
                                                <div class="d-flex flex-stack mb-5">
                                                    <span class="fw-semibold fs-6 text-gray-800 text-start pe-3">{{ $service }}</span>
                                                    <i class="ki-duotone ki-check-circle fs-1 text-danger">
                                                        <i class="path1"></i><i class="path2"></i>
                                                    </i>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--begin::Statistics-->
                    <div class="d-flex flex-center">
                        <div class="d-flex flex-wrap flex-center justify-content-lg-between mb-15 mx-auto w-xl-900px">
                            <div class="d-flex flex-column flex-center h-200px w-200px h-lg-250px w-lg-250px m-3 bgi-no-repeat bgi-position-center bgi-size-contain" style="background-image: url('{{ asset('media/svg/misc/octagon.svg') }}')">
                                <i class="ki-duotone ki-capsule fs-2tx text-white mb-3">
                                    <i class="path1"></i><i class="path2"></i>
                                </i>
                                <div class="mb-0">
                                    <div class="fs-lg-2hx fs-2x fw-bold text-white d-flex flex-center">
                                        <div class="min-w-70px" data-kt-countup="true" data-kt-countup-value="60"
                                             data-kt-countup-suffix="+">0
                                        </div>
                                    </div>
                                    <span class="text-gray-600 fw-semibold fs-5 lh-0">{{ __('Services') }}</span>
                                </div>
                            </div>
                            <div class="d-flex flex-column flex-center h-200px w-200px h-lg-250px w-lg-250px m-3 bgi-no-repeat bgi-position-center bgi-size-contain" style="background-image: url('{{ asset('media/svg/misc/octagon.svg') }}')">
                                <i class="ki-duotone ki-chart-pie-4 fs-2tx text-white mb-3">
                                    <i class="path1"></i><i class="path2"></i><i class="path3"></i>
                                </i>
                                <div class="mb-0">
                                    <div class="fs-lg-2hx fs-2x fw-bold text-white d-flex flex-center">
                                        <div class="min-w-70px" data-kt-countup="true" data-kt-countup-value="30"
                                             data-kt-countup-suffix="+">0
                                        </div>
                                    </div>
                                    <span class="text-gray-600 fw-semibold fs-5 lh-0">{{ __('Departments') }}</span>
                                </div>
                            </div>
                            <div class="d-flex flex-column flex-center h-200px w-200px h-lg-250px w-lg-250px m-3 bgi-no-repeat bgi-position-center bgi-size-contain" style="background-image: url('{{ asset('media/svg/misc/octagon.svg') }}')">
                                <i class="ki-duotone ki-user-tick fs-2tx text-white mb-3">
                                    <i class="path1"></i><i class="path2"></i><i class="path3"></i>
                                </i>
                                <div class="mb-0">
                                    <div class="fs-lg-2hx fs-2x fw-bold text-white d-flex flex-center">
                                        <div class="min-w-70px" data-kt-countup="true" data-kt-countup-value="90"
                                             data-kt-countup-suffix="+">0
                                        </div>
                                    </div>
                                    <span class="text-gray-600 fw-semibold fs-5 lh-0">{{ __('Doctors') }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Statistics-->
                </div>
            </div>
        </div>
        <!--end::Wrapper-->
        <!--begin::Curve bottom-->
        <div class="landing-curve landing-dark-color ">
            <svg viewBox="15 12 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 11C3.93573 11.3356 7.85984 11.6689 11.7725 12H1488.16C1492.1 11.6689 1496.04 11.3356 1500 11V12H1488.16C913.668 60.3476 586.282 60.6117 11.7725 12H0V11Z" fill="currentColor"></path>
            </svg>
        </div>
        <!--end::Curve bottom-->
    </div>
    <!--end::Services Section-->

    <!--begin::Team Section-->
    <div class="py-10 py-lg-20">
        <div class="container">
            <div class="text-center mb-12">
                <h3 class="fs-2hx text-dark mb-5" id="team" data-kt-scroll-offset="{default: 100, lg: 150}">{{ __('Our Management Team') }}</h3>
            </div>
            <div class="tns tns-default" style="direction: ltr">
                <div data-tns="true" data-tns-loop="true" data-tns-swipe-angle="false" data-tns-speed="2000" data-tns-autoplay="true"
                     data-tns-autoplay-timeout="8000" data-tns-controls="true" data-tns-nav="false" data-tns-items="1"
                     data-tns-center="false" data-tns-dots="false" data-tns-prev-button="#kt_team_slider_prev"
                     data-tns-next-button="#kt_team_slider_next" data-tns-responsive="{1200: {items: 3}, 992: {items: 2}}"
                >
                    <div class="text-center">
                        <div class="octagon mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center"
                             style="background-image:url('{{ asset('media/avatars/2.jpg') }}')">
                        </div>
                        <div class="mb-0">
                            <a href="#" class="text-dark fw-bold text-hover-primary fs-3">Dr. Ayoola Shonibare</a>
                            <div class="text-muted fs-6 fw-semibold mt-1">Chief Medical Officer</div>
                        </div>
                    </div>
                    <div class="text-center">
                        <div class="octagon mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center"
                            style="background-image:url('{{ asset('media/avatars/1.jpg') }}')">
                        </div>
                        <div class="mb-0">
                            <a href="#" class="text-dark fw-bold text-hover-primary fs-3">Irfan Khan</a>
                            <div class="text-muted fs-6 fw-semibold mt-1">Chief Commercial Officer</div>
                        </div>
                    </div>
                    <div class="text-center">
                        <div class="octagon mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center"
                            style="background-image:url('{{ asset('media/avatars/3.jpg') }}')">
                        </div>
                        <div class="mb-0">
                            <a href="#" class="text-dark fw-bold text-hover-primary fs-3">Dr Adefemi Daniel</a>
                            <div class="text-muted fs-6 fw-semibold mt-1">Medical Director</div>
                        </div>
                    </div>
                    <div class="text-center">
                        <div class="octagon mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center"
                            style="background-image:url('{{ asset('media/avatars/4.jpg') }}')">
                        </div>
                        <div class="mb-0">
                            <a href="#" class="text-dark fw-bold text-hover-primary fs-3">Kehinde Oyesiku</a>
                            <div class="text-muted fs-6 fw-semibold mt-1">Chief Business Officer</div>
                        </div>
                    </div>
                    <div class="text-center">
                        <div class="octagon mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center"
                            style="background-image:url('{{ asset('media/avatars/5.jpg') }}')">
                        </div>
                        <div class="mb-0">
                            <a href="#" class="text-dark fw-bold text-hover-primary fs-3">Peter Osuji</a>
                            <div class="text-muted fs-6 fw-semibold mt-1">Head, Information Technology</div>
                        </div>
                    </div>
                    <div class="text-center">
                        <div class="octagon mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center"
                            style="background-image:url('{{ asset('media/avatars/6.jpg') }}')">
                        </div>
                        <div class="mb-0">
                            <a href="#" class="text-dark fw-bold text-hover-primary fs-3">Ayodele Odufuye</a>
                            <div class="text-muted fs-6 fw-semibold mt-1">Human Resources Director</div>
                        </div>
                    </div>
                    <div class="text-center">
                        <div class="octagon mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center"
                            style="background-image:url('{{ asset('media/avatars/7.jpg') }}')">
                        </div>
                        <div class="mb-0">
                            <a href="#" class="text-dark fw-bold text-hover-primary fs-3">Eric Ochieng</a>
                            <div class="text-muted fs-6 fw-semibold mt-1">Director of Operations</div>
                        </div>
                    </div>
                    <div class="text-center">
                        <div class="octagon mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center"
                            style="background-image:url('{{ asset('media/avatars/8.jpg') }}')">
                        </div>
                        <div class="mb-0">
                            <a href="#" class="text-dark fw-bold text-hover-primary fs-3">Adebowale Odulana</a>
                            <div class="text-muted fs-6 fw-semibold mt-1">Chief Innovation Officer</div>
                        </div>
                    </div>
                </div>
                <button class="btn btn-icon btn-active-color-primary" id="kt_team_slider_prev">
                    <i class="ki-duotone ki-left fs-2x"></i></button>
                <button class="btn btn-icon btn-active-color-primary" id="kt_team_slider_next">
                    <i class="ki-duotone ki-right fs-2x"></i></button>
            </div>
        </div>
        <!--end::Container-->
    </div>
    <!--end::Team Section-->

    <x-home.branches />

    <!--begin::Footer Section-->
    <div class="mb-0">
        <!--begin::Curve top-->
        <div class="landing-curve landing-dark-color ">
            <svg viewBox="15 -1 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 48C4.93573 47.6644 8.85984 47.3311 12.7725 47H1489.16C1493.1 47.3311 1497.04 47.6644 1501 48V47H1489.16C914.668 -1.34764 587.282 -1.61174 12.7725 47H1V48Z" fill="currentColor"></path>
            </svg>
        </div>
        <!--end::Curve top-->
        <div class="landing-dark-bg pt-20">
            <div class="container">
                <div class="row py-10 py-lg-20">
                    <div class="col-lg-6 pe-lg-16 mb-10 mb-lg-0">
                        <div class="rounded landing-dark-border p-9 mb-10">
                            <h2 class="text-white">{{ __('To Contact Our Support Team') }}</h2>
                            <span class="fw-normal fs-4 text-gray-700">{{ __('Email us') }}
                                <a href="" class="text-white opacity-50 text-hover-primary">support@healthbridge.com</a>
                            </span>
                        </div>
                        <div class="rounded landing-dark-border p-9">
                            <h2 class="text-white">{{ __('To Speak with one of Our Consultants') }}</h2>
                            <span class="fw-normal fs-4 text-gray-700">
                                {{ __('Use Our E-health Service.') }}
                                <a href="" class="text-white opacity-50 text-hover-primary">{{ __('Click here to start') }}</a>
                            </span>
                        </div>
                    </div>
                    <div class="col-lg-6 ps-lg-16">
                        <div class="d-flex justify-content-center">
                            <div class="d-flex fw-semibold flex-column me-20">
                                <h4 class="fw-bold text-gray-400 mb-6">Quick Links</h4>
                                <a href="" class="text-white opacity-50 text-hover-primary fs-5 mb-6">E-health</a>
                                <a href="{{ route('dashboard') }}" class="text-white opacity-50 text-hover-primary fs-5 mb-6">Patient Portal</a>
                                <a href="" class="text-white opacity-50 text-hover-primary fs-5 mb-6">Online Payment</a>
                                <a href="" class="text-white opacity-50 text-hover-primary fs-5 mb-6">Book An Appointment</a>
                                <a href="" class="text-white opacity-50 text-hover-primary fs-5 mb-6">Support Forum</a>
                            </div>
                            <div class="d-flex fw-semibold flex-column ms-lg-20">
                                <h4 class="fw-bold text-gray-400 mb-6">Stay Connected</h4>
                                <a href="" class="mb-6">
                                    <img src="{{ asset('media/svg/brand-logos/facebook-4.svg') }}" class="h-20px me-2" alt=""/>
                                    <span class="text-white opacity-50 text-hover-primary fs-5 mb-6">Facebook</span>
                                </a>
                                <a href="" class="mb-6">
                                    <img src="{{ asset('media/svg/brand-logos/twitter.svg') }}" class="h-20px me-2" alt=""/>
                                    <span class="text-white opacity-50 text-hover-primary fs-5 mb-6">Twitter</span>
                                </a>
                                <a href="" class="mb-6">
                                    <img src="{{ asset('media/svg/brand-logos/instagram-2-1.svg') }}" class="h-20px me-2" alt=""/>
                                    <span class="text-white opacity-50 text-hover-primary fs-5 mb-6">Instagram</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="landing-dark-separator"></div>
            <div class="container">
                <div class="d-flex flex-column flex-md-row flex-stack py-7 py-lg-10">
                    <div class="d-flex align-items-center order-2 order-md-1">
                        <a href="{{ route('home') }}">
                            <img alt="Logo" src="{{ asset('media/logos/landing.svg') }}" class="h-15px h-md-20px"/>
                        </a>
                        <span class="mx-5 fs-6 fw-semibold text-gray-600 pt-1" href="">&copy; 2023 HealthBridge</span>
                    </div>
                    @guest
                        <div class="app-sidebar-footer flex-column-auto pt-5">
                            <form action="{{ route('api.set-locale') }}" x-submit x-data @finish="location.reload()" @change="$dispatch('submit')">
                                <div class="mb-7">
                                    <select class="form-select form-select-sm form-select-solid" name="language" aria-label="language" data-hide-search="true" data-control="select" data-placeholder="Select Language" required>
                                        <option value="english" @selected(session()->get('locale') == 'english')>English</option>
                                        <option value="yoruba" @selected(session()->get('locale') == 'yoruba')>Yoruba</option>
                                        <option value="hausa" @selected(session()->get('locale') == 'hausa')>Hausa</option>
                                        <option value="igbo" @selected(session()->get('locale') == 'igbo')>Igbo</option>
                                    </select>
                                </div>
                            </form>
                        </div>
                    @endguest
                    <ul class="menu menu-gray-600 menu-hover-primary fw-semibold fs-6 fs-md-5 order-1 mb-5 mb-md-0">
                        <li class="menu-item">
                            <a href="" target="_blank" class="menu-link px-2">About</a>
                        </li>
                        <li class="menu-item mx-5">
                            <a href="" target="_blank" class="menu-link px-2">Support</a>
                        </li>
                        <li class="menu-item">
                            <a href="#" target="_blank" class="menu-link px-2">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
    <i class="ki-duotone ki-arrow-up"><i class="path1"></i><i class="path2"></i></i>
</div>

<x-appointments.modal-create />

<x-appointments.modal-ehealth />

<x-home.login-drawer />

<script src="{{ asset('plugins/global/plugins.bundle.js') }}"></script>
<script src="{{ asset('js/scripts.bundle.js') }}"></script>
<script src="{{ asset('js/custom/landing.js') }}"></script>

<script src="https://unpkg.com/axios@1.4.0/dist/axios.min.js"></script>
<script src="{{ asset("js/request.js") }}"></script>
</body>
</html>
