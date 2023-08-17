<x-app title="Appointment {{ $appointment->id }}" :links="['Admin', 'Appointment', '#'.$appointment->id]">
    <!--begin::Main-->
    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
        <!--begin::Content wrapper-->
        <div class="d-flex flex-column flex-column-fluid">
            <!--begin::Content-->
            <div id="kt_app_content" class="app-content  flex-column-fluid ">
                <!--begin::Content container-->
                <div id="kt_app_content_container" class="app-container  container-xxl ">
                    <div class="d-flex flex-column gap-7 gap-lg-10">
                        <div class="d-flex flex-wrap flex-stack gap-5 gap-lg-10">
                            <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-lg-n2 me-auto">
                                <li class="nav-item">
                                    <a class="nav-link text-active-danger pb-4 active" data-bs-toggle="tab"
                                       href="#summary">Summary</a>
                                </li>
                            </ul>
                            @admin
                                <a  class="btn btn-danger btn-sm me-lg-n7" data-bs-toggle="modal" data-bs-target="#status">Update Appointment Status</a>
                            @endadmin
                            <button data-bs-toggle="modal" data-bs-target="#payment-modal" class="btn btn-success btn-sm">
                                <i class="ki-duotone ki-credit-cart fs-2"><i class="path1"></i><i class="path2"></i></i>
                                Make Payment
                            </button>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="summary">
                                <div class="d-flex flex-column flex-xl-row gap-7 gap-lg-10">
                                    <div class="card card-flush py-4 flex-row-fluid">
                                        <div class="card-header">
                                            <div class="card-title">
                                                <h2>Appointment Details (#{{ $appointment->id }})</h2>
                                            </div>
                                        </div>
                                        <div class="card-body pt-0">
                                            <div class="table-responsive">
                                                <table class="table align-middle table-row-bordered mb-0 fs-6 gy-5 min-w-300px">
                                                    <tbody class="fw-semibold text-gray-600">
                                                        <tr>
                                                            <td class="text-muted">
                                                                <div class="d-flex align-items-center">
                                                                    <i class="ki-duotone ki-calendar fs-1 me-2">
                                                                        <i class="path1"></i><i class="path2"></i>
                                                                    </i>
                                                                    Scheduled Date
                                                                </div>
                                                            </td>
                                                            <td class="fw-bold text-end">
                                                                {{ $appointment->scheduled_date->format('d M Y, h:i a') }}
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-muted">
                                                                <div class="d-flex align-items-center">
                                                                    <i class="ki-duotone ki-calendar-add fs-1 me-2">
                                                                        <i class="path1"></i><i class="path2"></i><i class="path3"></i>
                                                                        <i class="path4"></i><i class="path5"></i><i class="path6"></i>
                                                                    </i>
                                                                    Date Added
                                                                </div>
                                                            </td>
                                                            <td class="fw-bold text-end">{{ $appointment->created_at->format('d M Y, h:i a') }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-muted">
                                                                <div class="d-flex align-items-center">
                                                                    <i class="ki-duotone ki-geolocation-home fs-1 me-2">
                                                                        <i class="path1"></i><i class="path2"></i>
                                                                    </i>
                                                                    Department
                                                                </div>
                                                            </td>
                                                            <td class="fw-bold text-end">{{ $appointment->department->name }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-muted">
                                                                <div class="d-flex align-items-center">
                                                                    <i class="ki-duotone ki-abstract-48 fs-1 me-2">
                                                                        <i class="path1"></i><i class="path2"></i><i class="path3"></i>
                                                                    </i>
                                                                    Appointment Status
                                                                </div>
                                                            </td>
                                                            <td class="fw-bold text-end">
                                                                <x-appointment-status :$appointment/>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-muted">
                                                                <div class="d-flex align-items-center">
                                                                    <i class="ki-duotone ki-wallet fs-1 me-2">
                                                                        <i class="path1"></i><i class="path2"></i>
                                                                        <i class="path3"></i><i class="path4"></i>
                                                                    </i>
                                                                    Payment Status
                                                                </div>
                                                            </td>
                                                            <td class="fw-bold text-end">
                                                                <x-payment-status :$appointment/>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card card-flush py-4  flex-row-fluid">
                                        <div class="card-header">
                                            <div class="card-title">
                                                <h2>Patient Details</h2>
                                            </div>
                                        </div>
                                        <div class="card-body pt-0">
                                            <div class="table-responsive">
                                                <table class="table align-middle table-row-bordered mb-0 fs-6 gy-5 min-w-300px">
                                                    <tbody class="fw-semibold text-gray-600">
                                                        <tr>
                                                            <td class="text-muted">
                                                                <div class="d-flex align-items-center">
                                                                    <i class="ki-duotone ki-profile-circle fs-2 me-2">
                                                                        <i class="path1"></i><i class="path2"></i><i class="path3"></i>
                                                                    </i>
                                                                    Patient
                                                                </div>
                                                            </td>
                                                            <td class="fw-bold text-end">
                                                                <div class="d-flex align-items-center justify-content-end">
                                                                    <div class="symbol symbol-circle symbol-25px overflow-hidden me-3">
                                                                        <a href="{{ route('users.show', $appointment->user) }}">
                                                                            <div class="symbol-label">
                                                                                <img src="{{ $appointment->user->photo }}"
                                                                                     alt="Dan Wilson" class="w-100"/>
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                    <a href="{{ route('users.show', $appointment->user) }}" class="text-gray-600 text-hover-primary">
                                                                        {{ $appointment->user->name }}
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-muted">
                                                                <div class="d-flex align-items-center">
                                                                    <i class="ki-duotone ki-sms fs-2 me-2">
                                                                        <i class="path1"></i><i class="path2"></i>
                                                                    </i>
                                                                    Email
                                                                </div>
                                                            </td>
                                                            <td class="fw-bold text-end">
                                                                <a href="{{ route('users.show', $appointment->user) }}"
                                                                   class="text-gray-600 text-hover-primary">
                                                                    {{ $appointment->user->email }}
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-muted">
                                                                <div class="d-flex align-items-center">
                                                                    <i class="ki-duotone ki-phone fs-1 me-2">
                                                                        <i class="path1"></i><i class="path2"></i>
                                                                    </i>
                                                                    Phone
                                                                </div>
                                                            </td>
                                                            <td class="fw-bold text-end">{{ $appointment->user->phone }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-muted">
                                                                <div class="d-flex align-items-center">
                                                                    <i class="ki-duotone ki-pulse fs-1 me-2">
                                                                        <i class="path1"></i><i class="path2"></i>
                                                                    </i>
                                                                    Health Status
                                                                </div>
                                                            </td>
                                                            <td class="fw-bold text-end">
                                                                <textarea class="form-control form-select-sm cursor-pointer" disabled
                                                                          data-bs-toggle="modal" data-bs-target="#health-status"
                                                                >{{ $appointment->health_status }}</textarea>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex flex-column gap-7 gap-lg-10 mt-10">
                                    <div class="card card-flush py-4 flex-row-fluid overflow-hidden">
                                        <div class="card-header">
                                            <div class="card-title">
                                                <h2>Payment Information</h2>
                                            </div>
                                        </div>
                                        <div class="card-body pt-0">
                                            <div class="table-responsive">
                                                <table class="table align-middle table-row-dashed fs-6 gy-5 mb-0">
                                                    <thead>
                                                    <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                                        <th>Reference</th>
                                                        <th>Channel</th>
                                                        <th>Amount</th>
                                                        <th>Status</th>
                                                        <th>Date</th>
                                                        <th>Initiated by</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody class="fw-semibold text-gray-600">
                                                    @foreach($appointment->transactions as $transaction)
                                                        <tr>
                                                            <td>{{ $transaction->reference }}</td>
                                                            <td>{{ $transaction->channel }}</td>
                                                            <td>₦{{ number_format($transaction->amount) }}</td>
                                                            <td>
                                                                <div @class(['badge', 'badge-light-success' => $transaction->paid_at, 'badge-light-warning' => ! $transaction->paid_at])>{{ $transaction->paid_at ? 'Successful' : 'Pending Payment' }}</div>
                                                            </td>
                                                            <td>{{ $transaction->created_at->format('d M Y, h:i a') }}</td>
                                                            <td>
                                                                @if($transaction->creator)
                                                                    <a href="{{ route('users.show', $transaction->creator) }}" class="text-gray-600 text-hover-primary">{{ $transaction->creator?->name }}</a>
                                                                @else
                                                                    None
                                                                @endif
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <x-transactions.modal-create :$appointment />

    @admin()
    <!--AppointmentStatus::store Modal-->
    <div class="modal fade" id="status" tabindex="-1" aria-labelledby="status-label" aria-hidden="false">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="status-label">Update Appointment Status</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form x-submit x-data action="{{ route('api.appointments.status.store', $appointment) }}" method="POST" @finish="location.reload()">
                        <div class="mb-10">
                            <label class="form-label required" for="status">Status</label>
                            @if($status->isEmpty() || $appointment->isCompleted())
                                <input class="form-control form-control-solid" placeholder="Appointment has been Completed" aria-label="fulfilled" disabled>
                            @else
                                <select name="status_id" class="form-select form-select-solid" id="status" data-hide-search="true" data-control="select2" data-placeholder="Select a Status" required>
                                    <option></option>
                                    @foreach($status as $status)
                                        <option value="{{ $status->id }}">{{ $status->name }}</option>
                                    @endforeach
                                </select>
                            @endif
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-danger">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--HealthStatus::edit Modal-->
    <div class="modal fade" id="health-status" tabindex="-1" aria-labelledby="health-status-label" aria-hidden="false">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="health-status-label">Update Patient Health Status</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form x-submit x-data action="{{ route('api.appointments.update', $appointment) }}" method="POST" @finish="location.reload()">
                        @method('put')
                        <div class="mb-10">
                            <label class="form-label required" for="status">Status</label>
                            <textarea class="form-control form-control-solid" name="health_status">{{ $appointment->health_status }}</textarea>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-danger">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endadmin

</x-app>
