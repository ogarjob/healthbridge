<span @class([
    'mb-1',
    'badge',
    'badge-light-danger'    => $appointment->status->isEmpty() || $appointment->isCancelled(),
    'badge-light-primary'   => $appointment->isConfirmed(),
    'badge-light-info'      => $appointment->isInProgress(),
    'badge-light-success'   => $appointment->isCompleted(),
])>
    {{ $appointment->status->last()?->name ?? 'Scheduled' }}
</span>
