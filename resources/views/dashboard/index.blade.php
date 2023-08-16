<x-app title="Dashboard" :links="['Home', 'Dashboard']">
    <!--begin::Content wrapper-->
    <div class="d-flex flex-column flex-column-fluid">
        <!--begin::Content-->
        <div id="kt_app_content" class="app-content  flex-column-fluid ">
            <!--begin::Content container-->
            <div id="kt_app_content_container" class="app-container container-fluid">
                @admin
                    <div class="row g-5 g-xl-10">
                        <div class="col-12 mb-5 mb-xl-10">
                            <div class="card card-flush h-xl-100 bg-danger">
                                <div class="card-header rounded bgi-no-repeat bgi-size-cover bgi-position-y-top bgi-position-x-center align-items-start h-250px" data-bs-theme="light">
                                    <h3 class="card-title align-items-start flex-column text-white pt-15">
                                        <span class="fw-bold fs-2x mb-3">{{ Illuminate\Support\Carbon::greet() }}, {{ user('first_name') }}! 👋</span>
                                    </h3>
                                </div>
                                <div class="card-body mt-n20">
                                    <div class="mt-n20 position-relative">
                                        <div class="row g-3 g-lg-6">
                                            <div class="col-6 col-lg-3">
                                                <div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5">
                                                    <div class="symbol symbol-30px me-5 mb-3">
                                                        <span class="symbol-label">
                                                            <span class="symbol-label">
                                                                <i class="ki-duotone text-danger ki-user fs-2x">
                                                                    <i class="path1"></i><i class="path2"></i>
                                                                </i>
                                                            </span>
                                                        </span>
                                                    </div>
                                                    <div class="m-0">
                                                        <span class="text-gray-700 fw-bolder d-block fs-2qx mb-1">{{ number_format($patients_count) }}</span>
                                                        <span class="text-gray-500 fw-semibold fs-6">Patients</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6 col-lg-3">
                                                <div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5">
                                                    <div class="symbol symbol-30px me-5 mb-3">
                                                        <span class="symbol-label">
                                                            <span class="symbol-label">
                                                                <i class="ki-duotone ki-user-edit text-danger fs-2x">
                                                                    <i class="path1"></i><i class="path2"></i><i class="path3"></i>
                                                                </i>
                                                            </span>
                                                        </span>
                                                    </div>
                                                    <div class="m-0">
                                                        <span class="text-gray-700 fw-bolder d-block fs-2qx mb-1">{{ number_format($administrators_count) }}</span>
                                                        <span class="text-gray-500 fw-semibold fs-6">Administrators</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6 col-lg-3">
                                                <div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5">
                                                    <div class="symbol symbol-30px me-5 mb-3">
                                                        <span class="symbol-label">
                                                            <span class="symbol-label">
                                                                <i class="ki-duotone ki-lots-shopping text-danger fs-2qx">
                                                                    <i class="path1"></i><i class="path2"></i><i class="path3"></i>
                                                                    <i class="path4"></i><i class="path5"></i><i class="path6"></i>
                                                                    <i class="path7"></i><i class="path8"></i>
                                                                </i>
                                                            </span>
                                                        </span>
                                                    </div>
                                                    <div class="m-0">
                                                        <span class="text-gray-700 fw-bolder d-block fs-2qx mb-1">{{ number_format($departments_count) }}</span>
                                                        <span class="text-gray-500 fw-semibold fs-6">Departments</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6 col-lg-3">
                                                <div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5">
                                                    <div class="symbol symbol-30px me-5 mb-3">
                                                        <span class="symbol-label">
                                                            <span class="symbol-label">
                                                                <i class="ki-duotone ki-calendar-tick text-danger fs-2x">
                                                                    <i class="path1"></i><i class="path2"></i><i class="path3"></i>
                                                                    <i class="path4"></i><i class="path5"></i><i class="path6"></i>
                                                                </i>
                                                            </span>
                                                        </span>
                                                    </div>
                                                    <div class="m-0">
                                                        <span class="text-gray-700 fw-bolder d-block fs-2qx mb-1">{{ number_format($appointments_count) }}</span>
                                                        <span class="text-gray-500 fw-semibold fs-6">Appointments</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endadmin
                <div class="row g-5 g-xl-10">
                    <div class="col-12 mb-5 mb-xl-10">
                        <div class="card card-flush rounded-4" data-bs-theme="light"
                             style="background-color: #202B46; background-image:url('{{ asset('admin/media/svg/shapes/widget-bg-2.png') }}')"
                        >
                            <div class="card-body mt-6 bgi-no-repeat bgi-size-cover bgi-position-x-center">
                                <div class="text-white mb-9">
                                    <h4 class="text-white">Quote of the day! ✨ 🌈 </h4>
                                    <div class="mt-5">
                                        <span>“ Waste no more time arguing what a good man should be, be one. ” —  </span>
                                        <span class="position-relative d-inline-block">
                                            <span class="text-danger opacity-75-hover"> Marcus Aurelius .</span>
                                            <span class="position-absolute opacity-25 bottom-0 start-0 border-4 border-danger border-bottom w-100"></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-5 g-xl-10">
                    <div class="col-12 mb-5 mb-xl-10">
                        <div class="card card-flush">
                            <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                                <div class="card-title">
                                    <h4>Latest Appointments</h4>
                                </div>
                                <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                                    <a href="" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#book-appointment-modal">Book Appointment</a>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <table class="table align-middle table-row-dashed table-hover fs-6 gy-5" data-table data-search-using="#search">
                                    <thead>
                                    <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                        <th>ID</th>
                                        <th>Patient</th>
                                        <th>Status</th>
                                        <th>Total</th>
                                        <th>Phone Number</th>
                                        <th>Date</th>
                                    </tr>
                                    </thead>
                                    <tbody class="fw-semibold text-gray-600">
                                    @foreach($appointments as $appointment)
                                        <tr class="cursor-pointer" onclick="location.href = @js(route('appointments.show', $appointment))">
                                            <td data-appointment="{{ $appointment->id }}" class="min-w-50px">
                                                <a href="{{ route('appointments.show', $appointment) }}" class="text-gray-800 text-hover-primary fw-bold"># {{ $appointment->id }}</a>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="symbol symbol-circle symbol-35px overflow-hidden me-2">
                                                        <a href="{{ route('users.show', $appointment->user) }}">
                                                            <div class="symbol-label">
                                                                <img src="{{ $appointment->user->photo }}" alt="{{ $appointment->user->name }}" class="w-100" />
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="ms-2">
                                                        <a href="{{ route('users.show', $appointment->user) }}" class="text-gray-800 text-hover-primary fs-5 fw-bold">{{ $appointment->user->name }}</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="pe-0">
                                                <!--begin::Badges-->
                                                <x-payment-status :$appointment />
                                                <br>
                                                <x-appointment-status :$appointment />
                                                <!--end::Badges-->
                                            </td>
                                            <td class="pe-0" data-appointment="{{ $appointment->total }}">
                                                <span class="fw-bold">₦{{ number_format($appointment->total) }}</span>
                                            </td>
                                            <td data-appointment="{{ $appointment->user->phone }}">
                                                <span class="fw-bold">{{ $appointment->user->phone }}</span>
                                            </td>
                                            <td class="min-w-50px" data-appointment="{{ $appointment->created_at }}">
                                                <span class="fw-bold">{{ $appointment->created_at->format('d M Y, h:i a') }}</span>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end::Content container-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Content wrapper-->
</x-app>
