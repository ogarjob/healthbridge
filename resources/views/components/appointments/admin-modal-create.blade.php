<div class="modal fade" id="book-appointment-modal" tabindex="-1" aria-labelledby="book-appointment-modal-label" aria-hidden="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title text-gray-800">Book Appointment</h3>
                <div class="btn btn-sm btn-icon btn-active-color-danger" data-bs-dismiss="modal">
                    <i class="ki-duotone ki-abstract-11 fs-2"><i class="path1"></i><i class="path2"></i></i>
                </div>
            </div>
            <div class="modal-body" x-data="{ user : 'existing' }">
                <form x-submit action="{{ route('api.appointments.store') }}" id="checkout-form" method="POST">
                    <div class="fv-row mb-10">
                        <div class="row" data-kt-buttons="true" data-kt-buttons-target=".user">
                            <div class="col-12 col-md-6 mb-5">
                                <label class="btn btn-outline btn-outline-dashed btn-outline-danger btn-active-light-danger active d-flex text-start p-4 user">
                                        <span class="form-check form-check-custom form-check-danger form-check-solid form-check-sm align-items-center">
                                            <input class="form-check-input" type="radio" name="patient" value="existing" checked="checked" x-model="user">
                                        </span>
                                    <span class="ms-5">
                                            <span class="fs-6 fw-bold text-gray-800 d-block">Existing Patient</span>
                                        </span>
                                </label>
                            </div>
                            <div class="col-12 col-md-6 mb-5">
                                <label class="btn btn-outline btn-outline-dashed btn-outline-danger btn-active-light-danger d-flex text-start p-4 user">
                                        <span class="form-check form-check-custom form-check-danger form-check-solid form-check-sm align-items-start">
                                            <input class="form-check-input" type="radio" name="patient" value="new" x-model="user">
                                        </span>
                                    <span class="ms-5">
                                            <span class="fs-6 fw-bold text-gray-800 d-block">New Patient</span>
                                        </span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-10" x-show="user === 'existing'" x-transition>
                        <div class="form-group">
                            <select class="form-select form-select-solid" id="user" aria-label="User" name="user_id"
                                    data-placeholder="Select Patient" data-control="select2" data-hide-search="true"
                            >
                                <option></option>
                                @foreach (app('users') as $user)
                                    <option value="{{ $user->id }}">{{ $user->name .' - '. $user->phone }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row mb-10" x-show="user === 'new'" x-transition>
                        <div class="mb-5 col-md-4">
                            <input class="form-control form-control-solid" type="text" name="first_name" id="first-name"
                                   placeholder="First Name"
                            >
                        </div>
                        <div class="mb-5 col-md-4">
                            <input class="form-control form-control-solid" type="text" name="last_name" id="last-name"
                                   placeholder="Last Name"
                            >
                        </div>
                        <div class="mb-5 col-md-4">
                            <select class="form-select form-select-solid" name="gender" id="gender" aria-label="gender" data-hide-search="true" data-control="select2" data-placeholder="Gender">
                                <option></option>
                                <option value="M">Male</option>
                                <option value="F">Female</option>
                            </select>
                        </div>
                        <div class="mb-5 col-md-6">
                            <input class="form-control form-control-solid" type="tel" name="phone" id="phone"
                                   placeholder="Phone Number"
                            >
                        </div>
                        <div class="mb-5 col-md-6">
                            <input class="form-control form-control-solid" type="email" name="email" id="email"
                                   placeholder="Email Address"
                            >
                        </div>
                    </div>
                    <div class="form-group mb-7">
                        <select class="form-select form-select-solid" name="department_id" data-placeholder="Select Department" data-control="select2" data-hide-search="true">
                            <option></option>
                            @foreach(app('departments') as $department)
                                <option value="{{ $department->id }}">{{ $department->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mb-7">
                        <select class="form-select form-select-solid" name="type" data-placeholder="Appointment Type" data-control="select2" data-hide-search="true">
                            <option></option>
                            <option value="check-up">Check-up</option>
                            <option value="consultation">Consultation</option>
                            <option value="follow-up">Follow-up</option>
                            <option value="diagnostic">Diagnostic</option>
                            <option value="emergency">Emergency</option>
                        </select>
                    </div>
                    <div class="fv-row mb-7">
                        <input class="form-control form-control-solid" type="datetime-local" name="scheduled_date" placeholder="">
                    </div>
                    <div class="modal-footer mt-10 justify-content-center">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger">Book Appointment</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
