<div wire:ignore.self wire:click.away='modalClosed' class="modal modal-blur fade" id="simple-notification" tabindex="-1"
    role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{ $notificationTitle }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    wire:click='modalClosed'></button>
            </div>
            <div class="modal-body">{{ $notificationBody }}</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal" wire:click='modalClosed'>Go to
                    Dashboard</button>
            </div>
        </div>
    </div>
</div>
