<div wire:ignore.self wire:click.away='redirectUser' class="modal modal-blur fade" id="modal-success" tabindex="-1"
    role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
        <div class="modal-content">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="modal-status bg-success"></div>
            <div class="modal-body text-center py-4">
                <span class="text-success"><i class="ti ti-checkbox fs-1"></i></span>
                <h3>{{ $notificationTitle }}</h3>
                <div class="text-muted">{{ $notificationBody }}</div>
            </div>
            <div class="modal-footer">
                <div class="w-100">
                    <div class="row">
                        {{-- <div class="col">
                            <button class="btn w-100" wire:click='resetForm'>Close notification</button>
                        </div> --}}
                        <div class="col">
                            <button class="btn btn-success w-100" wire:click='redirectUser'>Go to dashboard</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
