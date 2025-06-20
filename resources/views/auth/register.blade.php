@extends('homepage.home')

@section('content')
<section class="min-h-screen flex flex-col items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">

    {{-- Heading di luar card --}}
    <div class="mb-6 text-center">
        <h2 class="text-2xl font-bold text-gray-900">Create your account</h2>
        <p class="text-sm text-gray-600">
            Or <a href="{{ url('/login') }}" class="text-blue-600 hover:underline">log in to an existing account</a>
        </p>
    </div>



    {{-- Card form --}}
    <div class="w-full max-w-md bg-white p-8 rounded-lg shadow-md">
        @if (session('success'))
        <div class="text-green-600 mb-3 text-sm">{{ session('success') }}</div>
        @endif
        @if ($errors->any())
        <div class="text-red-600 mb-3 text-sm">
            @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
            @endforeach
        </div>
        @endif

        <form action="{{ route('register') }}" method="POST" class="space-y-4">
            @csrf

            {{-- Account Type (tombol dummy, opsional bisa dihubungkan ke radio di bawah jika mau) --}}
            <!-- <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">I want to</label>
                <div class="flex space-x-2">
                    <button type="button" class="w-1/2 border border-gray-300 text-gray-700 py-2 rounded-md hover:bg-gray-100">Find a Job</button>
                    <button type="button" class="w-1/2 border border-gray-300 text-gray-700 py-2 rounded-md hover:bg-gray-100">Hire Talent</button>
                </div>
            </div> -->

            {{-- Role Selection --}}
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Register as</label>
                <div class="flex space-x-4">
                    <label class="flex items-center space-x-2">
                        <input type="radio" name="role" value="APPLICANT" required class="focus:ring focus:ring-blue-300">
                        <span class="text-gray-700">Applicant</span>
                    </label>
                    <label class="flex items-center space-x-2">
                        <input type="radio" name="role" value="RECRUITER" required class="focus:ring focus:ring-blue-300">
                        <span class="text-gray-700">Recruiter</span>
                    </label>
                </div>
            </div>


            {{-- First & Last Name --}}
            <div class="flex space-x-2">
                <div class="w-1/2">
                    <label for="first_name" class="block text-sm font-medium text-gray-700">First Name</label>
                    <input type="text" name="first_name" placeholder="John" id="first_name" required class="w-full border border-gray-300 px-3 py-2 rounded-md focus:ring focus:ring-blue-200">
                </div>
                <div class="w-1/2">
                    <label for="last_name" class="block text-sm font-medium text-gray-700">Last Name</label>
                    <input type="text" name="last_name" placeholder="Doe" id="last_name" required class="w-full border border-gray-300 px-3 py-2 rounded-md focus:ring focus:ring-blue-200">
                </div>
            </div>

            {{-- Email --}}
            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
            <input type="email" name="email" placeholder="your.email@example.com" required class="w-full border border-gray-300 px-3 py-2 rounded-md focus:ring focus:ring-blue-200">

            {{-- Username --}}
            <label for="username" class="block text-sm font-medium text-gray-700 mb-1">Username</label>
            <input type="text" name="username" placeholder="Username" required class="w-full border border-gray-300 px-3 py-2 rounded-md focus:ring focus:ring-blue-200">

            {{-- Password --}}
            <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
            <input type="password" name="password" placeholder="Password" required class="w-full border border-gray-300 px-3 py-2 rounded-md focus:ring focus:ring-blue-200">

            {{-- Confirm Password --}}
            <label for="confirm_password" class="block text-sm font-medium text-gray-700">Confirm Password</label>
            <input type="password" name="password_confirmation" placeholder="Confirm password" required class="w-full border border-gray-300 px-3 py-2 rounded-md focus:ring focus:ring-blue-200">

            {{-- Terms Checkbox --}}
            <div class="flex items-start space-x-2">
                <input type="checkbox" name="terms" id="terms" required class="mt-1">
                <label for="terms" class="text-sm text-gray-700">
                    I agree to the <a href="#" class="text-blue-600 hover:underline">Terms of Service</a> and <a href="#" class="text-blue-600 hover:underline">Privacy Policy</a>
                </label>
            </div>

            {{-- Submit --}}
            <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-md font-semibold hover:bg-blue-700 transition">
                Create account
            </button>
        </form>
    </div>

</section>
@endsection