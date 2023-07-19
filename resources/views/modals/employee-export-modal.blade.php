<div class="modal modal-blur fade" id="modal-export-employee" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Export data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="exports" action="{{ route('employee.export.data') }}" method="post">
                @csrf
                <div class="modal-body">
                    <div class="form-selectgroup-boxes row mb-3">
                        <div class="col-lg-4">
                            <label class="form-selectgroup-item">
                                <input type="radio" name="extension" value="xlsx" class="form-selectgroup-input"
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
                        <div class="col-lg-4">
                            <label class="form-selectgroup-item">
                                <input type="radio" name="extension" value="csv" class="form-selectgroup-input">
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

                <div class="modal-body">
                    <div class="form-selectgroup-boxes row">
                        <div class="col-lg-3">
                            <div class="mb-2">
                                <label class="form-selectgroup-item">
                                    <input type="checkbox" name="selectedFields[]" value="exportName"
                                        class="form-selectgroup-input" checked="">
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
                        </div>
                        <div class="col-lg-3">
                            <div class="mb-2">
                                <label class="form-selectgroup-item">
                                    <input type="checkbox" name="selectedFields[]" value="exportEmail"
                                        class="form-selectgroup-input" checked="">
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
                        </div>
                        <div class="col-lg-3">
                            <div class="mb-2">
                                <label class="form-selectgroup-item">
                                    <input type="checkbox" name="selectedFields[]" value="exportPhone"
                                        class="form-selectgroup-input" checked="">
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
                        </div>
                        <div class="col-lg-3">
                            <div class="mb-2">
                                <label class="form-selectgroup-item">
                                    <input type="checkbox" name="selectedFields[]" value="exportRole"
                                        class="form-selectgroup-input" checked="">
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
                        </div>
                        <div class="col-lg-3">
                            <div class="mb-2">
                                <label class="form-selectgroup-item">
                                    <input type="checkbox" name="selectedFields[]" value="exportUserTypeId"
                                        class="form-selectgroup-input" checked="">
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
                        </div>
                        <div class="col-lg-3">
                            <div class="mb-2">
                                <label class="form-selectgroup-item">
                                    <input type="checkbox" name="selectedFields[]" value="exportAddress"
                                        class="form-selectgroup-input" checked="">
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
                        </div>
                        <div class="col-lg-3">
                            <div class="mb-2">
                                <label class="form-selectgroup-item">
                                    <input type="checkbox" name="selectedFields[]" value="exportDob"
                                        class="form-selectgroup-input" checked="">
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
                        </div>
                        <div class="col-lg-3">
                            <div class="mb-2">
                                <label class="form-selectgroup-item">
                                    <input type="checkbox" name="selectedFields[]" value="exportDor"
                                        class="form-selectgroup-input" checked="">
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
                        </div>
                        <div class="col-lg-3">
                            <div class="mb-2">
                                <label class="form-selectgroup-item">
                                    <input type="checkbox" name="selectedFields[]" value="exportSalary"
                                        class="form-selectgroup-input" checked="">
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
                </div>
                
                <input type="hidden" name="user" value="{{ request()->query('user') ?? null }}" />
                <input type="hidden" name="role" value="{{ request()->query('role') ?? null }}" />
                <input type="hidden" name="job" value="{{ request()->query('job') ?? null }}" />
                <input type="hidden" name="dob_start" value="{{ request()->query('dob_start') ?? null }}" />
                <input type="hidden" name="dob_end" value="{{ request()->query('dob_end') ?? null }}" />
                <input type="hidden" name="dor_start" value="{{ request()->query('dor_start') ?? null }}" />
                <input type="hidden" name="dor_end" value="{{ request()->query('dor_end') ?? null }}" />
                <input type="hidden" name="f" value="{{ request()->query('f') ?? null }}" />

                <div class="modal-footer">
                    <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
                        Cancel
                    </a>
                    <button type="submit" class="btn btn-success ms-auto">Export</button>
                </div>
            </form>
        </div>
    </div>
</div>
