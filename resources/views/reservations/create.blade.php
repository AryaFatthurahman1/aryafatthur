@extends('layouts.app')

@section('title', 'Create Reservation - Jakarta Luxury AI')

@section('content')
<div class='max-w-2xl mx-auto luxury-card p-8 rounded-lg glass mt-8'>
    <h2 class='text-3xl font-bold text-luxury-gold mb-6'>Create New Reservation</h2>
    <form action='{{ route('reservations.store') }}' method='POST'>
        @csrf
        <div class='mb-4'>
            <label class='block text-sm font-medium mb-2'>Type</label>
            <select name='type' class='w-full p-3 bg-gray-800 border border-gray-600 rounded focus:border-luxury-gold' required>
                <option value='food'>Food Order</option>
                <option value='hotel'>Hotel Booking</option>
                <option value='flight'>Flight Booking</option>
            </select>
        </div>
        <div class='mb-4'>
            <label class='block text-sm font-medium mb-2'>Name</label>
            <input type='text' name='name' class='w-full p-3 bg-gray-800 border border-gray-600 rounded focus:border-luxury-gold' placeholder='e.g., Steak Dinner, Grand Hotel, Flight to Bali' required>
        </div>
        <div class='mb-4'>
            <label class='block text-sm font-medium mb-2'>Details</label>
            <textarea name='details' rows='3' class='w-full p-3 bg-gray-800 border border-gray-600 rounded focus:border-luxury-gold' placeholder='Additional details...'></textarea>
        </div>
        <div class='mb-4'>
            <label class='block text-sm font-medium mb-2'>Price</label>
            <input type='number' name='price' step='0.01' class='w-full p-3 bg-gray-800 border border-gray-600 rounded focus:border-luxury-gold' required>
        </div>
        <div class='mb-4'>
            <label class='block text-sm font-medium mb-2'>Date</label>
            <input type='date' name='date' class='w-full p-3 bg-gray-800 border border-gray-600 rounded focus:border-luxury-gold' required>
        </div>
        <div class='mb-4'>
            <label class='block text-sm font-medium mb-2'>Time (optional)</label>
            <input type='time' name='time' class='w-full p-3 bg-gray-800 border border-gray-600 rounded focus:border-luxury-gold'>
        </div>
        <div class='mb-6'>
            <label class='block text-sm font-medium mb-2'>Quantity</label>
            <input type='number' name='quantity' value='1' min='1' class='w-full p-3 bg-gray-800 border border-gray-600 rounded focus:border-luxury-gold' required>
        </div>
        <button type='submit' class='w-full bg-luxury-gold text-black py-3 rounded font-semibold hover:bg-opacity-80'>Create Reservation</button>
    </form>
</div>
@endsection
