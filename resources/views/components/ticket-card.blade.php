@props(['movieName', 'seat', 'row', 'date', 'screen', 'username', 'price', 'action' => false])

<div class="ticket-card">
    <div class="flex justify-center items-center" style="flex-direction: column">
        <h2 class="ticket-card-title">{{$movieName}}</h2>
        <h3 class="mt-2">{{$screen}}</h3>
    </div>
    <div class="flex justify-center items-center mt-4">
        <span>Date: {{$date}}</span>
    </div>
    <div class="flex justify-between items-center mt-4">
        <span>Seat: {{$seat}}</span>
        <span>Row: {{$row}}</span>
    </div>
    <div class="mt-4">
        <div>Ticket Price: {{$price}} SP </div>
        <div>User: {{$username}}</div>
    </div>
    @if ($action)
        <div class="mt-10">
            <x-button style="no-background-btn" px="10" py="5">Cancel Ticket</x-button>
        </div>
    @endif
</div>
