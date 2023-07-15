<div wire:ignore.self wire:click.away='closeModal' class="modal modal-blur fade" id="modal-danger" tabindex="-1"
    role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
        <div class="modal-content">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="modal-status bg-danger"></div>
            <div class="modal-body text-center py-4">
                <span class="text-danger"><i class="ti ti-exclamation-circle fs-1"></i></span>
                <h3>{{ $notificationTitle }}</h3>
                <div class="text-muted">{{ $notificationBody }}</div>
            </div>
            <div class="modal-footer">
                <div class="w-100">
                    <div class="row">
                        <div class="col">
                            <button class="btn btn-danger w-100" wire:click='closeModal'>Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
