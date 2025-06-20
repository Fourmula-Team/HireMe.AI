@extends('homepage.home')

@section('content')
<div class="text-center pt-[30px]">
    <h2 class="text-3xl font-extrabold text-gray-900">
        Log in to your account
    </h2>
    <p class="mt-2 text-sm text-gray-600">
        Or <a href="{{ url('/register') }}" class="font-medium text-blue-600 hover:text-blue-500">create a new account</a>
    </p>

    <div class="min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full space-y-8 bg-white p-8 rounded-lg shadow mt-[-150px]">
            <div class="text-left"></div>

            <form class="mt-8 space-y-6" action="{{ route('login') }}" method="POST">
                @csrf

                <div>

                    <!-- <div class="text-left">
                        <label for="account_type" class="block text-sm font-medium text-gray-700 mb-2 text-left">
                            Account Type
                        </label>
                         <div class="flex space-x-4">
                            <button
                                type="button"
                                onclick="setAccountType('job_seeker')"
                                id="job_seeker_btn"
                                class="flex-1 py-2 px-4 border rounded-md text-sm font-medium focus:z-10 focus:outline-none focus:ring-1">
                                Find a Job
                            </button>
                            <button
                                type="button"
                                onclick="setAccountType('employer')"
                                id="employer_btn"
                                class="flex-1 py-2 px-4 border rounded-md text-sm font-medium focus:z-10 focus:outline-none focus:ring-1">
                                Hire Talent
                            </button>
                        </div> 
                        <input type="hidden" name="account_type" id="account_type" value="job_seeker" />
                    </div> -->

                    <!-- Email -->
                    <div class="mt-4 text-left">
                        <label for="email" class="block text-sm font-medium text-gray-700 text-left">
                            Email address
                        </label>
                        <input id="email" name="email" type="email" autocomplete="email" required
                            class="appearance-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                            placeholder="youremail@example.com">
                        @error('email')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Password -->
                    <div class="mt-4 text-left">
                        <label for="password" class="block text-sm font-medium text-gray-700 text-left">
                            Password
                        </label>
                        <input id="password" name="password" type="password" autocomplete="current-password" required
                            class="appearance-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                            placeholder="••••••">
                        @error('password')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <input id="remember" name="remember" type="checkbox"
                            class="h-4 w-4 accent-blue-500 focus:ring-blue-300 border-gray-300 rounded">
                        <label for="remember" class="ml-2 block text-sm text-gray-900">Remember me</label>
                    </div>

                    <div class="text-sm">
                        <a href="{{ url('/user-dashboard') }}" class="font-medium text-blue-600 hover:text-blue-500">Forgot your password?</a>
                    </div>
                </div>

                <div>
                    <button type="submit"
                        class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        Log in
                    </button>
                </div>
            </form>

            <div class="relative">
                <div class="absolute inset-0 flex items-center">
                    <div class="w-full border-t border-gray-300"></div>
                </div>
                <div class="relative flex justify-center text-sm">
                    <span class="px-2 bg-white text-gray-500">Or continue with</span>
                </div>
            </div>

            <div class="flex justify-center space-x-4">
                <button type="button"
                    class="w-[140px] h-[50px] border rounded-md hover:bg-gray-50 flex items-center justify-center">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3c/Google_Favicon_2025.svg/250px-Google_Favicon_2025.svg.png"
                        alt="Google" class="h-6 w-6">
                </button>
                <button type="button"
                    class="w-[140px] h-[50px] border rounded-md hover:bg-gray-50 flex items-center justify-center">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/81/LinkedIn_icon.svg/108px-LinkedIn_icon.svg.png"
                        alt="Linkedin" class="h-6 w-6">
                </button>
                <button type="button"
                    class="w-[140px] h-[50px] border rounded-md hover:bg-gray-50 flex items-center justify-center">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/9/91/Octicons-mark-github.svg" alt="Github"
                        class="h-6 w-6">
                </button>
            </div>
        </div>
    </div>

    <script>
        function setAccountType(type) {
            document.getElementById('account_type').value = type;

            const jobSeekerBtn = document.getElementById('job_seeker_btn');
            const employerBtn = document.getElementById('employer_btn');

            if (type === 'job_seeker') {
                jobSeekerBtn.classList.add('bg-blue-600', 'text-white', 'border-blue-600');
                jobSeekerBtn.classList.remove('bg-white', 'text-gray-700', 'border-gray-300');

                employerBtn.classList.remove('bg-blue-600', 'text-white', 'border-blue-600');
                employerBtn.classList.add('bg-white', 'text-gray-700', 'border-gray-300');
            } else {
                employerBtn.classList.add('bg-blue-600', 'text-white', 'border-blue-600');
                employerBtn.classList.remove('bg-white', 'text-gray-700', 'border-gray-300');

                jobSeekerBtn.classList.remove('bg-blue-600', 'text-white', 'border-blue-600');
                jobSeekerBtn.classList.add('bg-white', 'text-gray-700', 'border-gray-300');
            }
        }

        // Set default state on page load
        window.onload = () => {
            setAccountType('job_seeker');
        };
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if(session('success'))
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'success',
                title: 'Berhasil Daftar',
                text: '{{ session("success") }}',
                showConfirmButton: true,
            });
        });
    </script>
    @endif
    @endsection