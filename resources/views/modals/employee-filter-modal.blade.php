<div class="modal modal-blur fade" id="modal-filter-employee" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Filter data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="filters" action="{{ route('employee.index') }}" method="get">
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
                                        <input type="date" class="form-control" name="dob_start" id="dob_start"
                                            value="{{ request()->query('dob_start') ?? '' }}" />
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="date" class="form-control" name="dob_end" id="dob_end"
                                            value="{{ request()->query('dob_end') ?? '' }}" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-2">
                                <label class="form-label">Date of retirement (between)</label>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="date" class="form-control" name="dor_start" id="dor_start"
                                            value="{{ request()->query('dor_start') ?? '' }}" />
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="date" class="form-control" name="dor_end" id="dor_end"
                                            value="{{ request()->query('dor_end') ?? '' }}" />
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
                                    <span id="errors"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
                        Cancel
                    </a>
                    <button type="submit" class="btn btn-primary ms-auto">Filter</button>
                </div>
            </form>
        </div>
    </div>
</div>

@push('js')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#filters').on('submit', function(e) {
            e.preventDefault();

            var user = $('#user').val();
            var role = $('#role').val();
            var job = $('#job').val();
            var dob_start = $('#dob_start').val();
            var dob_end = $('#dob_end').val();
            var dor_start = $('#dor_start').val();
            var dor_end = $('#dor_end').val();
            var baseUrl = "{{ url('/') }}";

            $.ajax({
                type: "post",
                url: "{{ route('employee.validate.date') }}",
                data: {
                    dob_start: dob_start,
                    dob_end: dob_end,
                    dor_start: dor_start,
                    dor_end: dor_end,
                },
                success: function(response) {
                    if (response.error_code == 422) {
                        $.each(response.messages, function(index, errorMessage) {
                            var error = $('<div>').text(errorMessage);
                            $('#errors').append(error);
                        });
                    } else {
                        var sendUser = user ? "user=" + user + "&" : '';
                        var sendRole = role ? "role=" + role + "&" : '';
                        var sendJob = job ? "job=" + job + "&" : '';
                        var sendDobStart = dob_start ? "dob_start=" + dob_start + "&" : '';
                        var sendDobEnd = dob_end ? "dob_end=" + dob_end + "&" : '';
                        var sendDorStart = dor_start ? "dor_start=" + dor_start + "&" : '';
                        var sendDorEnd = dor_end ? "dor_end=" + dor_end + "&" : '';

                        window.location.href = baseUrl + '/employee/list?' + sendUser + sendRole +
                            sendJob + sendDobStart + sendDobEnd + sendDorStart + sendDorEnd + 'f=true'
                    }
                }
            });
        });
    </script>
@endpush
