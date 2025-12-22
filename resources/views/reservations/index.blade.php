@extends('layouts.app')

@section('title', 'My Reservations - Jakarta Luxury AI')

@section('content')
<div class='py-12'>
    <div class='flex justify-between items-center mb-8'>
        <h1 class='text-4xl font-bold text-luxury-gold'>My Reservations</h1>
        <a href='{{ route('reservations.create') }}' class='bg-luxury-gold text-black px-6 py-2 rounded hover:bg-opacity-80'>New Reservation</a>
    </div>
    
    @if(->count() > 0)
        <div class='grid gap-6'>
            @foreach( as )
                <div class='luxury-card p-6 rounded-lg glass'>
                    <div class='flex justify-between items-start'>
                        <div>
                            <h3 class='text-xl font-semibold text-luxury-gold mb-2'>{{ ucfirst(->type) }}: {{ ->name }}</h3>
                            <p class='text-gray-300 mb-2'>{{ ->details }}</p>
                            <p class='text-sm text-gray-400'>Date: {{ ->date }} @if(->time) at {{ ->time }}@endif</p>
                            <p class='text-sm text-gray-400'>Quantity: {{ ->quantity }} | Price: Rp {{ number_format(->price, 0, ',', '.') }}</p>
                            <span class='inline-block px-3 py-1 rounded text-sm {{ ->status === 'confirmed' ? 'bg-green-600' : (->status === 'pending' ? 'bg-yellow-600' : 'bg-red-600') }}'>
                                {{ ucfirst(->status) }}
                            </span>
                        </div>
                        <div class='flex space-x-2'>
                            <a href='{{ route('reservations.edit', ) }}' class='bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700'>Edit</a>
                            <form action='{{ route('reservations.destroy', ) }}' method='POST' class='inline'>
                                @csrf
                                @method('DELETE')
                                <button type='submit' class='bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700' onclick='return confirm(\"Are you sure?\")'>Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <div class='text-center py-12'>
            <p class='text-xl text-gray-400 mb-4'>No reservations found.</p>
            <a href='{{ route('reservations.create') }}' class='bg-luxury-gold text-black px-6 py-2 rounded hover:bg-opacity-80'>Create Your First Reservation</a>
        </div>
    @endif
</div>
@endsection
