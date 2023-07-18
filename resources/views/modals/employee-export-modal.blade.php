<div class="modal modal-blur fade" id="modal-export-employee" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Filter data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="exports" method="get"
                onsubmit="return validateFormData">
                @csrf
                <!--------- Export file type -------->
                <div class="modal-body">
                    <div class="form-selectgroup-boxes row mb-3">
                        <div class="col-lg-6">
                            <label class="form-selectgroup-item">
                                <input type="radio" name="exportType" value="excel" class="form-selectgroup-input"
                                    checked="">
                                <span class="form-selectgroup-label d-flex align-items-center p-3">
                                    <span class="me-3">
                                        <span class="form-selectgroup-check"></span>
                                    </span>
                                    <span class="form-selectgroup-label-content">
                                        <span class="form-selectgroup-title strong mb-1">Excel</span>
                                    </span>
                                </span>
                            </label>
                        </div>
                        <div class="col-lg-6">
                            <label class="form-selectgroup-item">
                                <input type="radio" name="exportType" value="csv" class="form-selectgroup-input">
                                <span class="form-selectgroup-label d-flex align-items-center p-3">
                                    <span class="me-3">
                                        <span class="form-selectgroup-check"></span>
                                    </span>
                                    <span class="form-selectgroup-label-content">
                                        <span class="form-selectgroup-title strong mb-1">CSV</span>
                                    </span>
                                </span>
                            </label>
                        </div>
                    </div>
                </div>

                <!--------- Table fields -------->
                <div class="modal-body">
                    <div class="form-selectgroup-boxes row mb-3">
                        <div class="col-lg-4 mb-2">
                            <label class="form-selectgroup-item">
                                <input type="checkbox" name="selectedFields[]" value="name"
                                    class="form-selectgroup-input" @checked(true)>
                                <span class="form-selectgroup-label d-flex align-items-center p-3">
                                    <span class="me-3">
                                        <span class="form-selectgroup-check"></span>
                                    </span>
                                    <span class="form-selectgroup-label-content">
                                        <span class="form-selectgroup-title strong mb-1">Name</span>
                                    </span>
                                </span>
                            </label>
                        </div>
                        <div class="col-lg-4 mb-2">
                            <label class="form-selectgroup-item">
                                <input type="checkbox" name="selectedFields[]" value="email"
                                    class="form-selectgroup-input" @checked(true)>
                                <span class="form-selectgroup-label d-flex align-items-center p-3">
                                    <span class="me-3">
                                        <span class="form-selectgroup-check"></span>
                                    </span>
                                    <span class="form-selectgroup-label-content">
                                        <span class="form-selectgroup-title strong mb-1">Email</span>
                                    </span>
                                </span>
                            </label>
                        </div>
                        <div class="col-lg-4 mb-2">
                            <label class="form-selectgroup-item">
                                <input type="checkbox" name="selectedFields[]" value="phone"
                                    class="form-selectgroup-input" @checked(true)>
                                <span class="form-selectgroup-label d-flex align-items-center p-3">
                                    <span class="me-3">
                                        <span class="form-selectgroup-check"></span>
                                    </span>
                                    <span class="form-selectgroup-label-content">
                                        <span class="form-selectgroup-title strong mb-1">Phone</span>
                                    </span>
                                </span>
                            </label>
                        </div>
                        <div class="col-lg-4 mb-2">
                            <label class="form-selectgroup-item">
                                <input type="checkbox" name="selectedFields[]" value="role"
                                    class="form-selectgroup-input" @checked(true)>
                                <span class="form-selectgroup-label d-flex align-items-center p-3">
                                    <span class="me-3">
                                        <span class="form-selectgroup-check"></span>
                                    </span>
                                    <span class="form-selectgroup-label-content">
                                        <span class="form-selectgroup-title strong mb-1">Role</span>
                                    </span>
                                </span>
                            </label>
                        </div>
                        <div class="col-lg-4 mb-2">
                            <label class="form-selectgroup-item">
                                <input type="checkbox" name="selectedFields[]" value="user_type_id"
                                    class="form-selectgroup-input" @checked(true)>
                                <span class="form-selectgroup-label d-flex align-items-center p-3">
                                    <span class="me-3">
                                        <span class="form-selectgroup-check"></span>
                                    </span>
                                    <span class="form-selectgroup-label-content">
                                        <span class="form-selectgroup-title strong mb-1">Job profile</span>
                                    </span>
                                </span>
                            </label>
                        </div>
                        <div class="col-lg-4 mb-2">
                            <label class="form-selectgroup-item">
                                <input type="checkbox" name="selectedFields[]" value="address"
                                    class="form-selectgroup-input" @checked(true)>
                                <span class="form-selectgroup-label d-flex align-items-center p-3">
                                    <span class="me-3">
                                        <span class="form-selectgroup-check"></span>
                                    </span>
                                    <span class="form-selectgroup-label-content">
                                        <span class="form-selectgroup-title strong mb-1">Address</span>
                                    </span>
                                </span>
                            </label>
                        </div>
                        <div class="col-lg-4 mb-2">
                            <label class="form-selectgroup-item">
                                <input type="checkbox" name="selectedFields[]" value="dob"
                                    class="form-selectgroup-input" @checked(true)>
                                <span class="form-selectgroup-label d-flex align-items-center p-3">
                                    <span class="me-3">
                                        <span class="form-selectgroup-check"></span>
                                    </span>
                                    <span class="form-selectgroup-label-content">
                                        <span class="form-selectgroup-title strong mb-1">D.O.B</span>
                                    </span>
                                </span>
                            </label>
                        </div>
                        <div class="col-lg-4 mb-2">
                            <label class="form-selectgroup-item">
                                <input type="checkbox" name="selectedFields[]" value="dor"
                                    class="form-selectgroup-input" @checked(true)>
                                <span class="form-selectgroup-label d-flex align-items-center p-3">
                                    <span class="me-3">
                                        <span class="form-selectgroup-check"></span>
                                    </span>
                                    <span class="form-selectgroup-label-content">
                                        <span class="form-selectgroup-title strong mb-1">D.O.R</span>
                                    </span>
                                </span>
                            </label>
                        </div>
                        <div class="col-lg-4 mb-2">
                            <label class="form-selectgroup-item">
                                <input type="checkbox" name="selectedFields[]" value="salary"
                                    class="form-selectgroup-input" @checked(true)>
                                <span class="form-selectgroup-label d-flex align-items-center p-3">
                                    <span class="me-3">
                                        <span class="form-selectgroup-check"></span>
                                    </span>
                                    <span class="form-selectgroup-label-content">
                                        <span class="form-selectgroup-title strong mb-1">Salary</span>
                                    </span>
                                </span>
                            </label>
                        </div>
                    </div>
                </div>

                <!--------- Export data filters -------->
                <div class="modal-body">
                    <div class="mb-2">
                        <label class="form-label">Name / Email / Phone (complete / partial)</label>
                        <input type="text" class="form-control" name="export_user" id="export_user"
                            value="{{ request()->query('user') ?? '' }}"
                            placeholder="Enter employee name / email / phone (complete / partial)">
                    </div>

                    <div class="form-selectgroup-boxes row">
                        <div class="col-lg-6">
                            <div class="mb-2">
                                <label class="form-label">Role</label>
                                <select class="form-select" name="export_role" id="export_role">
                                    <option value="">-- Select --</option>
                                    @foreach ($filterRoles as $filterRole)
                                        <option value="{{ $filterRole->name }}"
                                            @if (request()->query('role') == $filterRole->name) @selected(true) @endif>
                                            {{ $filterRole->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">Job profile</label>
                                <select class="form-select" name="export_job" id="export_job">
                                    <option value="">-- Select --</option>
                                    @foreach ($filterUserTypes as $filterUserType)
                                        <option value="{{ $filterUserType->id }}"
                                            @if (request()->query('job') == $filterUserType->id) @selected(true) @endif>
                                            {{ $filterUserType->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-selectgroup-boxes row">
                        <div class="col-lg-6">
                            <div class="mb-2">
                                <label class="form-label">Date of birth (between)</label>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="date" class="form-control" name="export_dob_start"
                                            id="export_dob_start" value="{{ request()->query('dob_start') ?? '' }}" />
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="date" class="form-control" name="export_dob_end"
                                            id="export_dob_end" value="{{ request()->query('dob_end') ?? '' }}" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-2">
                                <label class="form-label">Date of retirement (between)</label>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="date" class="form-control" name="export_dor_start"
                                            id="export_dor_start" value="{{ request()->query('dor_start') ?? '' }}" />
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="date" class="form-control" name="export_dor_end"
                                            id="export_dor_end" value="{{ request()->query('dor_end') ?? '' }}" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="f" value=true />
                    </div>

                    <div class="form-selectgroup-boxes row">
                        <div class="col-lg-6 mt-3">
                            <div class="mb-2">
                                <div class="row fs-6 text-uppercase text-danger">
                                    <span id="errors-export"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
                        Cancel
                    </a>
                    <button type="submit" class="btn btn-primary ms-auto">Export</button>
                </div>
            </form>
        </div>
    </div>
</div>