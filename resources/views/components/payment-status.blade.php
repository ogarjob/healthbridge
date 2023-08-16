<span @class([
        'badge',
        'badge-light-warning' => ! $appointment->isPaid(),
        'badge-light-success' => $appointment->isPaid()
])>
    {{ $appointment->isPaid() ? 'Fully Paid' : 'Pending Payment' }}
</span>
