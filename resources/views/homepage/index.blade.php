@extends('homepage.home')

@section('content')
    {{-- Section Hero --}}
    <section class="py-8 text-left" style="background: linear-gradient(to bottom, #d9e4f7, #ffffff);">

        <div class="container mx-auto px-4 py-10">
            <div class="flex flex-col md:flex-row gap-8">
                <!-- Kolom kiri (lebih kecil) -->
                <div class="w-full md:w-5/12 p-6">
                    <!-- Label -->
                    <h1 class="inline-block px-4 py-2 rounded-lg font-bold text-blue-600 cursor-default select-none mb-2"
                        style="background: #dae2eb">
                        AI-Powered Job Platform
                    </h1>

                    <!-- Judul Besar -->
                    <h1 class="text-black text-4xl font-bold mt-4 mb-4">
                        Where <span class="text-blue-600">AI</span> Meets Recruitment.
                    </h1>

                    <!-- Deskripsi -->
                    <p class="leading-relaxed mb-6">
                        Revolutionize your job search or hiring process with our AI-powered platform that matches the right
                        talents
                        with the right opportunities.
                    </p>

                    <!-- Tombol Aksi -->
                    <div class="flex gap-4 mb-6">
                        <a href="#about"
                            class="font-bold inline-block bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition">
                            Find a Job
                        </a>
                        <a href="#about"
                            class="font-bold inline-block bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition">
                            Hire Talent
                        </a>
                    </div>

                    <!-- Fitur List -->
                    <div class="inline-flex gap-3">
                        <div class="flex items-center gap-2">
                            <img src="{{ asset('images/homepage/icon_check_mark.png') }}" alt="" class="w-5 h-5">
                            <p class="text-gray-700">AI Matching</p>
                        </div>
                        <div class="flex items-center gap-2">
                            <img src="{{ asset('images/homepage/icon_user_checked.png') }}" alt="" class="w-5 h-5">
                            <p class="text-gray-700">Personality Test</p>
                        </div>
                        <div class="flex items-center gap-2">
                            <img src="{{ asset('images/homepage/icon_bag.png') }}" alt="" class="w-5 h-5">
                            <p class="text-gray-700">Interview Simulation</p>
                        </div>
                    </div>
                </div>


                <!-- Kolom kanan (lebih besar) -->
                <div class="w-full md:w-7/12 p-6">
                    <img src="{{ asset('images/homepage/hero_images_1.png') }}" alt="Hero Image"
                        class="w-full h-auto rounded-md">
                </div>
            </div>
        </div>
    </section>

    {{-- Section Tentang Kami --}}
    <section id="about" class="bg-gray-100 py-16">
        <div class="container mx-auto px-4 text-center">
            <p class="text-blue-600 text-xl font-semibold mb-2">INNOVATION AT WORK</p>
            <h1 class="text-3xl font-bold mb-6">Why Choose HireMe.AI?</h1>
            <p class="text-2xl text-gray-400 max-w-4xl mx-auto">
                Our platform harnesses the power of cutting-edge AI to create perfect matches between talent and opportunity
            </p>
        </div>
        <div class="flex gap-2 p-4 justify-center">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 justify-items-center">
                <div class="bg-white shadow-xl p-6 rounded-lg w-[320px]">
                    <div>
                        <img src="{{ asset('images/homepage/img_brain.png') }}" alt="" class="w-14 h-auto">
                    </div>
                    <h2 class="mt-4 text-lg font-bold">AI-Powered Matching</h2>
                    <p class="text-gray-500 mt-2">
                        Our sophisticated algorithms analyze skills, experience, and personality to
                        find perfect job matches with unprecedented accuracy.
                    </p>
                </div>

                <div class="bg-white shadow-xl p-6 rounded-lg w-[320px]">
                    <div>
                        <img src="{{ asset('images/homepage/img_msg.png') }}" alt="" class="w-14 h-auto">
                    </div>
                    <h2 class="mt-4 text-lg font-bold">Virtual Interview</h2>
                    <p class="text-gray-500 mt-2">
                        Practice with our realistic AI interviewer and get detailed feedback to improve your interview
                        performance and confidence.
                    </p>
                </div>

                <div class="bg-white shadow-xl p-6 rounded-lg w-[320px]">
                    <div>
                        <img src="{{ asset('images/homepage/img_circle.png') }}" alt="" class="w-14 h-auto">
                    </div>
                    <h2 class="mt-4 text-lg font-bold">Personality Insights</h2>
                    <p class="text-gray-500 mt-2">
                        Discover your unique working style and find companies with matching culture and values for greater
                        job satisfaction.
                    </p>
                </div>
            </div>
        </div>

        <div class="px-4 mt-8">
            <div
                class="bg-white shadow-xl p-8 rounded-lg max-w-5xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-6 items-center">
                <!-- Kolom Teks -->
                <div>
                    <h2 class="text-xl font-bold">Powerful tools for every career stage</h2>
                    <p class="text-gray-600 mt-2 text-justify">
                        Whether you're just starting your career journey or looking to take your next big leap, our
                        comprehensive suite of tools is designed to support professionals at every stage.
                    </p>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">

                        <!-- Kolom 1 -->
                        <div class="flex bg-white p-3 rounded-lg">
                            <img src="{{ asset('images/homepage/img_brain.png') }}" alt="" class="w-7 h-7 mr-3">
                            <div>
                                <p class="font-semibold text-sm mb-1">Gamified Learning</p>
                                <p class="text-gray-500 text-sm">
                                    Earn XP and badges while improving your skills
                                </p>
                            </div>
                        </div>

                        <!-- Kolom 2 -->
                        <div class="flex bg-white p-3 rounded-lg">
                            <img src="{{ asset('images/homepage/img_circle.png') }}" alt="" class="w-7 h-7 mr-3">
                            <div>
                                <p class="font-semibold text-sm mb-1">Smart Job Alerts</p>
                                <p class="text-gray-500 text-sm">
                                    Get notified when perfect opportunities arise
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

                        <!-- Kolom 1 -->
                        <div class="flex bg-white p-3 rounded-lg">
                            <img src="{{ asset('images/homepage/img_brain.png') }}" alt="" class="w-7 h-7 mr-3">
                            <div>
                                <p class="font-semibold text-sm mb-1">Candidate Tracking</p>
                                <p class="text-gray-500 text-sm">
                                    Streamlined recruitment workflow for teams
                                </p>
                            </div>
                        </div>

                        <!-- Kolom 2 -->
                        <div class="flex bg-white p-3 rounded-lg">
                            <img src="{{ asset('images/homepage/img_circle.png') }}" alt="" class="w-7 h-7 mr-3">
                            <div>
                                <p class="font-semibold text-sm mb-1">Skill Certification</p>
                                <p class="text-gray-500 text-sm">
                                    Validate your expertise with AI assessments
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

                        <!-- Kolom 1 -->
                        <div class="flex bg-white p-3 rounded-lg">
                            <img src="{{ asset('images/homepage/img_brain.png') }}" alt="" class="w-7 h-7 mr-3">
                            <div>
                                <p class="font-semibold text-sm mb-1">Career Trajectory</p>
                                <p class="text-gray-500 text-sm">
                                    Visualize and plan your professional growth
                                </p>
                            </div>
                        </div>

                        <!-- Kolom 2 -->
                        <div class="flex bg-white p-3 rounded-lg">
                            <img src="{{ asset('images/homepage/img_circle.png') }}" alt="" class="w-7 h-7 mr-3">
                            <div>
                                <p class="font-semibold text-sm mb-1">Recruitment Analytics</p>
                                <p class="text-gray-500 text-sm">
                                    Data-driven insights for hiring optimization
                                </p>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Kolom Gambar (padding dikurangi) -->
                <div class="flex justify-center md:justify-center relative md:p-0">
                    <!-- Layer gambar utama -->
                    <div
                        class="w-[25rem] h-[18rem] border-2 border-blue-500 rounded-lg flex items-center justify-center relative z-10 bg-white">
                        <img src="{{ asset('images/homepage/img_msg.png') }}" alt=""
                            class="w-20 h-auto z-10 relative">
                    </div>

                    <!-- Layer gambar tumpukan -->
                    <img src="{{ asset('images/homepage/hero_images_1.png') }}" alt=""
                        class="w-[26rem] h-auto absolute bottom-2 left-0 translate-x-3 z-20">
                </div>
            </div>
        </div>

    </section>

    {{-- Section Keunggulan --}}
    <section id="success-stories" class="bg-white py-16">
        <div class="container mx-auto px-4 text-center">
            <p class="text-blue-600 text-xl font-semibold mb-2">TESTIMONIALS</p>
            <h1 class="text-3xl font-bold mb-6">Success Stories</h1>
            <p class="text-2xl text-gray-400 max-w-4xl mx-auto">
                Join thousands of job seekers and recruiters who have found their perfect match
            </p>
        </div>
    
        <div class="flex justify-center mt-10">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 justify-items-center">
                <!-- Testimonial Card 1 -->
                <div class="bg-white shadow-xl p-5 rounded-lg w-[320px]">
                    <div class="flex items-center justify-between">
                        <img src="{{ asset('images/homepage/img_brain.png') }}" alt="" class="w-10 h-10 rounded-full object-cover">
                        <div class="text-left flex-1 px-6">
                            <p class="font-bold text-sm">Marcello Ilham</p>
                            <p class="text-sm">Software Developer</p>
                            <span class="text-xs text-gray-400">at</span>
                            <p class="text-sm">Company Name</p>
                        </div>
                        <div class="flex space-x-0.5 text-yellow-400">
                            <!-- Star icons -->
                            @for ($i = 0; $i < 5; $i++)
                            <svg class="w-3 h-3 fill-current" viewBox="0 0 20 20">
                                <path d="M10 15l-5.878 3.09 1.122-6.545L.487 6.91l6.561-.955L10 0l2.952 5.955 6.561.955-4.757 4.635 1.122 6.545z"/>
                            </svg>
                            @endfor
                        </div>
                    </div>
                    <p class="text-gray-500 mt-2 text-sm leading-relaxed">
                        Our sophisticated algorithms analyze skills, experience, and personality to
                        find perfect job matches with unprecedented accuracy.
                    </p>
                    <div class="flex items-center justify-between mt-4">
                        <p class="text-xs text-gray-400">Posted on</p>
                        <p class="text-xs text-gray-400">May 2025</p>
                    </div>
                </div>
    
                <!-- Card 2 -->
                <div class="bg-white shadow-xl p-6 rounded-lg w-[320px]">
                    <div>
                        <img src="{{ asset('images/homepage/img_msg.png') }}" alt="" class="w-14 h-auto">
                    </div>
                    <h2 class="mt-4 text-lg font-bold">Virtual Interview</h2>
                    <p class="text-gray-500 mt-2">
                        Practice with our realistic AI interviewer and get detailed feedback to improve your interview
                        performance and confidence.
                    </p>
                </div>
    
                <!-- Card 3 -->
                <div class="bg-white shadow-xl p-6 rounded-lg w-[320px]">
                    <div>
                        <img src="{{ asset('images/homepage/img_circle.png') }}" alt="" class="w-14 h-auto">
                    </div>
                    <h2 class="mt-4 text-lg font-bold">Personality Insights</h2>
                    <p class="text-gray-500 mt-2">
                        Discover your unique working style and find companies with matching culture and values for greater
                        job satisfaction.
                    </p>
                </div>
            </div>
        </div>
    
        <!-- Total Rating Section (outside the cards) -->
        <div class="text-center mt-8">
            <span class="inline-block px-5 py-2 text-sm bg-blue-100 text-blue-700 rounded-full font-semibold shadow-md">
                ★ Overall Rating: 4.9 / 5.0
            </span>
        </div>
    </section>

    <section class="bg-primary">
        <div class="container mx-auto px-4 py-16">
            <div class="flex flex-col md:flex-row gap-8">
                
                <!-- Kolom Kiri -->
                <div class="w-full md:w-1/2 text-start space-y-4 content-center">
                    <h3 class="text-5xl font-semibold text-white">
                        Ready to Transform Your Career Journey?
                    </h3>
                    <p class="font-semibold text-white" style="margin-top: 30px; margin-bottom: 30px">
                        Join thousands of professionals finding their perfect match every day. Start your journey to career success with HireMe.AI today.
                    </p>
    
                    <div class="flex items-start gap-3">
                        <img src="{{ asset('images/homepage/icon_check_mark_2.png') }}" alt="" class="w-5 h-5 mt-1">
                        <p class="text-white">
                            Get matched with jobs that fit your skills, personality, and career goals
                        </p>
                    </div>

                    <div class="flex items-start gap-3">
                        <img src="{{ asset('images/homepage/icon_check_mark_2.png') }}" alt="" class="w-5 h-5 mt-1">
                        <p class="text-white">
                            Practice interviews with our AI and receive personalized feedback
                        </p>
                    </div>

                    <div class="flex items-start gap-3">
                        <img src="{{ asset('images/homepage/icon_check_mark_2.png') }}" alt="" class="w-5 h-5 mt-1">
                        <p class="text-white">
                            No more wasted time on jobs that don't match your profile
                        </p>
                    </div>
                </div>
    
                <!-- Kolom Kanan -->
                <div class="w-[400px] bg-white shadow-lg rounded-xl p-6 text-start space-y-4">

                    <h2 class="text-xl font-bold">Get started in minutes</h2>
                
                    <div class="flex items-start space-x-3">
                        <img src="{{ asset('images/homepage/icon_number_one.png') }}" alt="" class="w-8 h-8 mt-1">
                        <div>
                            <p class="font-semibold text-black">Get started in minutes</p>
                            <p class="text-md text-gray-500">Sign up in under 2 minutes</p>
                        </div>
                    </div>
                
                    <div class="flex items-start space-x-3">
                        <img src="{{ asset('images/homepage/icon_number_two.png') }}" alt="" class="w-8 h-8 mt-1">
                        <div>
                            <p class="font-semibold text-black">Complete your profile</p>
                            <p class="text-md text-gray-500">Take our personality assesment</p>
                        </div>
                    </div>
                
                    <div class="flex items-start space-x-3">
                        <img src="{{ asset('images/homepage/icon_number_three.png') }}" alt="" class="w-8 h-8 mt-1">
                        <div>
                            <p class="font-semibold text-black">Get matched</p>
                            <p class="text-md text-gray-500">Our AI finds perfect opportunities</p>
                        </div>
                    </div>

                    <button class="w-full bg-blue-600 text-white font-semibold py-2 px-4 rounded-md hover:bg-blue-700 focus:outline-none flex items-center justify-center">
                        Find Your Dream Job
                        <img src="{{ asset('images/homepage/icon_arrow.png') }}" alt="Arrow" class="inline-block w-3 h-3 ml-2">
                    </button>
                    
                      
                    <button class="w-full bg-white text-blue-600 font-semibold py-2 px-4 rounded-md hover:bg-gray-200 outline outline-1 outline-blue-600">
                        I'm Hiring Talent
                    </button>                    
                    
                </div>
                
    
            </div>
        </div>
    </section>    
    
@endsection
