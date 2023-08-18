<x-app title="{{ __('Departments') }}" :links="['Admin', 'Departments']">
    <!--begin::Image input placeholder-->
    <style>
        .image-input-placeholder {
            background-image: url('{{ asset('media/svg/files/blank-image.svg') }}');
        }
        [data-bs-theme="dark"] .image-input-placeholder {
            background-image: url('{{ asset('media/svg/files/blank-image-dark.svg') }}');
        }
    </style>
    <!--end::Image input placeholder-->
    <!--begin::Main-->
    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
        <!--begin::Content wrapper-->
        <div class="d-flex flex-column flex-column-fluid">
            <!--begin::Content-->
            <div id="kt_app_content" class="app-content flex-column-fluid" >
                <!--begin::Content container-->
                <div id="kt_app_content_container" class="app-container  container-xxl ">
                    <div class="card card-flush">
                        <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                            <div class="card-title">
                                <div class="d-flex align-items-center position-relative my-1">
                                    <span class="svg-icon svg-icon-1 position-absolute ms-4">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor"/>
                                            <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor"/>
                                        </svg>
                                    </span>
                                    <input type="text" id="search" class="form-control form-control-solid w-250px ps-14" placeholder="{{ __('Search Department') }}" aria-label="search">
                                </div>
                            </div>
                            <div class="card-toolbar">
                                <button href="" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#add-department">
                                    <i class="ki-duotone ki-abstract-10 fs-4">
                                        <i class="path1"></i><i class="path2"></i>
                                    </i>
                                    {{ __('Add Department') }}
                                </button>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <table class="table align-middle table-row-dashed fs-6 gy-5" data-table data-search-using="#search">
                                <thead>
                                    <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                        <th>{{ __('Department') }}</th>
                                        <th>{{ __('Number Of Doctors') }}</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody class="fw-semibold text-gray-600">
                                    @foreach($departments as $department)
                                        <tr x-data="{department : {{ $department }}, show : true }"
                                            x-show="show" x-transition
                                            @hide{{ $department->id }}.window="show = false"
                                            @update{{ $department->id }}.window="department = $event.detail.department;"
                                            @click="$dispatch('editing', {
                                                      department: department ?? @js($department),
                                                      action: @js(route('api.departments.update', $department))
                                                  })"
                                        >
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <button class="btn btn-link symbol symbol-50px" data-bs-toggle="modal"
                                                            data-bs-target="#edit-department"
                                                    >
                                                        <span class="symbol-label" style="background-image:url({{ $department->image }});"></span>
                                                    </button>
                                                    <div class="ms-5">
                                                        <button class="btn-link btn text-gray-800 text-hover-danger fs-5 fw-bold"
                                                                data-bs-toggle="modal" data-bs-target="#edit-department"
                                                        >
                                                            {{ $department->name }}
                                                        </button>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <a class="text-gray-600 text-hover-danger fs-5 fw-bold" href="">
                                                    {{ $department->doctors_count ?? rand(5, 15) }}
                                                </a>
                                            </td>
                                            <td>
                                                <div class="d-flex my-3 ">
                                                    <span data-bs-toggle="tooltip" title="Edit">
                                                        <button class="btn btn-icon btn-active-light-primary w-30px h-30px me-3"
                                                                data-bs-toggle="modal" data-bs-target="#edit-department"
                                                        >
                                                            <i class="fa fa-pencil"></i>
                                                        </button>
                                                    </span>
                                                    <span data-bs-toggle="tooltip" title="Delete">
                                                        <button class="btn btn-icon btn-active-light-danger w-30px h-30px me-3"
                                                                @click="$dispatch('deleting', {
                                                                    id: @js($department->id),
                                                                    action: @js(route('api.departments.destroy', $department))
                                                                })"
                                                        >
                                                            <i class="fa fa-trash"></i>
                                                        </button>
                                                    </span>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!--end::Content container-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Content wrapper-->
    </div>
    <!--end:::Main-->
    <!--Department::create Modal-->
    <div class="modal fade" id="add-department" tabindex="-1" aria-labelledby="add-department-label" aria-hidden="false">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="add-department-label">{{ __('Add Department') }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form x-data x-submit action="{{ route('api.departments.store') }}" method="POST" @finish="location.reload()" enctype="multipart/form-data">
                        <div class="card card-flush py-4">
                            {{--<div class="card-header">
                                <div class="card-title m-auto">
                                    <h5>Department Image</h5>
                                </div>
                            </div>--}}
                            <div class="card-body text-center pt-0">
                                {{--<div class="image-input image-input-empty image-input-outline image-input-placeholder mb-3" data-kt-image-input="true">
                                    <div class="image-input-wrapper w-150px h-150px"></div>
                                    <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change department image">
                                        <i class="bi bi-pencil-fill fs-7"></i>
                                        <input type="file" name="image" accept=".png, .jpg, .jpeg" />
                                    </label>
                                    <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel image">
                                            <i class="bi bi-x fs-2"></i>
                                    </span>
                                    <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                                        <i class="bi bi-x fs-2"></i>
                                    </span>
                                </div>--}}
                                <div class="{{--mt-15--}} text-start">
                                    <input type="text" name="name" id="name" class="form-control" placeholder="{{ __('Department Name') }}" aria-label="department name" required>
                                    <div class="text-muted fs-7 mt-2">{{ __('A department name is required and recommended to be unique') }}</div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('Close') }}</button>
                                <button class="btn btn-danger">{{ __('Add') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--Department::edit Modal-->
    <div class="modal fade" id="edit-department" tabindex="-1" aria-labelledby="edit-department-label" aria-hidden="false">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="edit-department-label">
                        {{ __('Edit Department') }}
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form  x-submit @finish="location.reload()" enctype="multipart/form-data"
                           :action="action" x-data="{ department: {}, action: null }"
                           @editing.window="{ department, action } = $event.detail"
                           @finish="$dispatch(`update${department.id}`, { department: department })"
                    >
                        @method('PUT')
                        <div class="card card-flush py-4">
                            {{--<div class="card-header">
                                <div class="card-title m-auto">
                                    <h5>Department Image</h5>
                                </div>
                            </div>--}}
                            <div class="card-body text-center pt-0">
                                {{--<div class="image-input image-input-empty image-input-outline image-input-placeholder mb-3" data-kt-image-input="true">
                                    <div class="image-input-wrapper w-150px h-150px" :style="`background-image: url(${department.image})`"></div>
                                    <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change category image">
                                        <i class="bi bi-pencil-fill fs-7"></i>
                                        <input type="file" name="image" accept=".png, .jpg, .jpeg" />
                                        --}}{{--<input type="hidden" name="delete_image"/>--}}{{--
                                    </label>
                                    <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel image">
                                        <i class="bi bi-x fs-2"></i>
                                    </span>
                                    <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                                        <i class="bi bi-x fs-2"></i>
                                    </span>
                                </div>--}}
                                <div class="{{--mt-15--}} text-start">
                                    <input type="text" name="name" id="name" class="form-control" placeholder="Department Name" required x-model="department.name" aria-label="department name">
                                    <div class="text-muted fs-7 mt-2">{{ __('A department name is required and recommended to be unique') }}</div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('Close') }}</button>
                                <button class="btn btn-danger">{{ __('Update') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Delete Department Form-->
    <form x-submit data-confirm="|Delete Department?"
          :action="action"
          x-data="{ action: null, id : null }"
          @deleting.window="action = $event.detail.action; id = $event.detail.id; $dispatch('submit')"
          @finish="$dispatch(`hide${id}`)"
    >
        @method('delete')
    </form>
    <!-- End Delete Department Form-->
</x-app>
