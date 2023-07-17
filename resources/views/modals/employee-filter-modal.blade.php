<div class="modal modal-blur fade" id="modal-filter-employee" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Filter data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('employee.filter') }}" method="get">
                <div class="modal-body">
                    <div class="mb-2">
                        <label class="form-label">Name / Email / Phone (complete / partial)</label>
                        <input type="text" class="form-control" name="user" id="user"
                            value="{{ request()->query('user') ?? '' }}"
                            placeholder="Enter employee name / email / phone (complete / partial)">
                    </div>

                    <div class="form-selectgroup-boxes row">
                        <div class="col-lg-6">
                            <div class="mb-2">
                                <label class="form-label">Role</label>
                                <select class="form-select" name="role" id="role">
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
                                <select class="form-select" name="job" id="job">
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
                                        <input type="date" class="form-control" name="dob_start" id="dob_start" value="{{ request()->query('dob_start') ?? '' }}" />
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="date" class="form-control" name="dob_end" id="dob_end" value="{{ request()->query('dob_end') ?? '' }}" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-2">
                                <label class="form-label">Date of retirement (between)</label>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="date" class="form-control" name="dor_start" id="dor_start" value="{{ request()->query('dor_start') ?? '' }}" />
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="date" class="form-control" name="dor_end" id="dor_end" value="{{ request()->query('dor_end') ?? '' }}" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="f" value=true />
                    </div>
                </div>

                <div class="modal-footer">
                    <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
                        Cancel
                    </a>
                    <button class="btn btn-primary ms-auto">
                        Filter
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
