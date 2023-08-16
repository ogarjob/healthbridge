<!--Book Appointment Modal-->
<div class="modal fade" id="book-appointment-modal" tabindex="-1" aria-labelledby="book-appointment-modal-label" aria-hidden="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title text-gray-800">Book Appointment</h3>
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <i class="ki-duotone ki-abstract-11 fs-2"><i class="path1"></i><i class="path2"></i></i>
                </div>
            </div>
            <div class="modal-body">
                <form action="{{ route('api.appointments.store') }}" x-submit @finish="location.reload()">
                    <div class="row">
                        <div class="mb-5 col-md-6">
                            <input class="form-control form-control-solid" name="first_name" required placeholder="First Name"
                                   value="{{ user('first_name') }}" @disabled(auth()->check())
                            >
                        </div>
                        <div class="mb-5 col-md-6">
                            <input class="form-control form-control-solid" name="last_name" placeholder="Last Name"
                                   value="{{ user('last_name') }}" @disabled(auth()->check())
                            >
                        </div>
                    </div>
                    <div>
                        <input class="form-control form-control-solid mb-7" name="email" placeholder="Email Address"
                               value="{{ user('email') }}" @disabled(auth()->check())
                        >
                    </div>
                    <div>
                        <input class="form-control form-control-solid mb-7" name="phone" placeholder="Phone Number"
                               value="{{ user('phone') }}" @disabled(auth()->check())
                        >
                    </div>
                    <div class="form-group mb-7">
                        <select class="form-select form-select-solid" name="department_id" data-placeholder="Select Department" data-control="select2" data-hide-search="true">
                            <option></option>
                            @foreach(app('departments') as $department)
                                <option value="{{ $department->id }}">{{ $department->name }}</option>
                            @endforeach
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
