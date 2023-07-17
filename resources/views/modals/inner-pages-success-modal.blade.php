<div wire:ignore.self wire:click.away='redirectUser' class="modal modal-blur fade" id="inner-page-success" tabindex="-1"
    role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
        <div class="modal-content">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="modal-status bg-success"></div>
            <div class="modal-body text-center py-4">
                <span class="text-success"><i class="ti ti-checkbox fs-1"></i></span>
                <h3>{{ session('title') ?? 'Title' }}</h3>
                <div class="text-muted">{{ session('body') ?? 'Body' }}</div>
            </div>
            <div class="modal-footer">
                <div class="w-100">
                    <div class="row">
                        <div class="col">
                            <button class="btn btn-default w-100" data-bs-dismiss="modal">{{ $btnLabel ?? 'Close' }}</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
