@extends('layouts.app')

@section('title', 'Dashboard - Jakarta Luxury AI')

@section('content')
<div class='py-12'>
    <h1 class='text-4xl font-bold text-luxury-gold mb-8'>Welcome, {{ auth()->user()->name }}!</h1>
    
    <div class='grid md:grid-cols-2 gap-8'>
        <div class='luxury-card p-6 rounded-lg glass'>
            <h3 class='text-2xl font-semibold text-luxury-gold mb-4'>Your Reservations</h3>
            <p class='mb-4'>View and manage your bookings</p>
            <a href='{{ route('reservations.index') }}' class='bg-luxury-gold text-black px-6 py-2 rounded hover:bg-opacity-80'>View Reservations</a>
        </div>
        
        <div class='luxury-card p-6 rounded-lg glass'>
            <h3 class='text-2xl font-semibold text-luxury-gold mb-4'>New Booking</h3>
            <p class='mb-4'>Make a new reservation</p>
            <a href='{{ route('reservations.create') }}' class='bg-luxury-gold text-black px-6 py-2 rounded hover:bg-opacity-80'>Create Reservation</a>
        </div>
    </div>
</div>
@endsection
