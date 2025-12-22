@extends('layouts.app')

@section('title', 'Register - Jakarta Luxury AI')

@section('content')
<div class='max-w-md mx-auto luxury-card p-8 rounded-lg glass mt-20'>
    <h2 class='text-3xl font-bold text-luxury-gold mb-6 text-center'>Register</h2>
    <form action='{{ route('register') }}' method='POST'>
        @csrf
        <div class='mb-4'>
            <label class='block text-sm font-medium mb-2'>Name</label>
            <input type='text' name='name' class='w-full p-3 bg-gray-800 border border-gray-600 rounded focus:border-luxury-gold' required>
        </div>
        <div class='mb-4'>
            <label class='block text-sm font-medium mb-2'>Email</label>
            <input type='email' name='email' class='w-full p-3 bg-gray-800 border border-gray-600 rounded focus:border-luxury-gold' required>
        </div>
        <div class='mb-4'>
            <label class='block text-sm font-medium mb-2'>Phone</label>
            <input type='tel' name='phone' class='w-full p-3 bg-gray-800 border border-gray-600 rounded focus:border-luxury-gold' required>
        </div>
        <div class='mb-6'>
            <label class='block text-sm font-medium mb-2'>Password</label>
            <input type='password' name='password' class='w-full p-3 bg-gray-800 border border-gray-600 rounded focus:border-luxury-gold' required>
        </div>
        <button type='submit' class='w-full bg-luxury-gold text-black py-3 rounded font-semibold hover:bg-opacity-80'>Register</button>
    </form>
    <p class='mt-4 text-center'>Already have an account? <a href='{{ route('login') }}' class='text-luxury-gold'>Login</a></p>
</div>
@endsection
