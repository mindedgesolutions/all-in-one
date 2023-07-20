<div class="modal modal-blur fade" id="modal-filter-client" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Filter data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="filters" action="{{ route('client.index') }}" method="get">
                <input type="hidden" name="f" value=true />
                <div class="modal-body">
                    <div class="form-selectgroup-boxes row">
                        <div class="col-lg-6">
                            <div class="mb-2">
                                <label class="form-label">Client name</label>
                                <input type="text" class="form-control" name="client" id="client"
                                    value="{{ request()->query('client') ?? '' }}"
                                    placeholder="Enter client name (complete / partial)">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-2">
                                <label class="form-label">Contact name / email / phone</label>
                                <input type="text" class="form-control" name="contact" id="contact"
                                    value="{{ request()->query('contact') ?? '' }}"
                                    placeholder="Enter employee name / email / phone (complete / partial)">
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
