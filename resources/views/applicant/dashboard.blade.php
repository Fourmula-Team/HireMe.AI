<div class="main-content bg-white">
    <div class="page-content">
        <div class="container-fluid mx-auto px-4">
            <h3 class="text-2xl font-semibold text-black mb-6">{{ $title }}</h3>

            <div class="md:flex md:space-x-6">
                <!-- Kolom Kiri -->
                <div class="md:w-1/2 mb-6 md:mb-0">
                    <div class="max-w-xl bg-white rounded-2xl shadow-md overflow-hidden border border-gray-200 p-4">
                        <div class="flex justify-between items-center w-full">
                            <div class="max-w-[65%]">
                                <h3 class="text-lg font-semibold text-gray-800">Profile Completion</h3>
                                <p class="text-gray-600 text-sm">Complete your profile to get better job matches</p>
                            </div>
                            <div class="flex-shrink-0 flex items-center space-x-3 w-40">
                                <p class="text-gray-700 font-medium whitespace-nowrap">Rating</p>
                                <p>65%</p>
                                <div class="w-full bg-gray-200 rounded-full h-4 overflow-hidden">
                                    <div class="bg-blue-500 h-4 rounded-full" style="width: 75%;"></div>
                                </div>
                            </div>
                        </div>

                        <div class="grid grid-cols-3 gap-4 mt-4">
                            <div class="block">
                                <p class="text-gray-600 text-sm">Applications</p>
                                <p class="font-semibold">200</p>
                            </div>
                            <div class="block">
                                <p class="text-gray-600 text-sm">Interviews</p>
                                <p class="font-semibold">200</p>
                            </div>
                            <div class="block">
                                <p class="text-gray-600 text-sm">Profile Views</p>
                                <p class="font-semibold">200</p>
                            </div>
                        </div>
                    </div>

                    <div class="flex justify-between items-center mt-4">
                        <p>AI Reccomendation Jobs</p>
                        <a href="">View All Reccomendation</a>
                    </div>

                    <div class="max-w-xl bg-white rounded-2xl shadow-md overflow-hidden border border-gray-200 p-4">
                        <div class="flex justify-between items-center w-full">
                            <div class="max-w-[65%]">
                                <h3 class="text-lg font-semibold text-gray-800 mb-1">Senior Frontend Developer</h3>
                                <div class="flex flex-row space-x-2">
                                    <div class="flex">
                                        <img src="{{ asset('images/homepage/icon_company.png') }}" alt="">
                                        <p class="text-gray-600 text-sm">Tech Corp.Inc</p>
                                    </div>
                                    <div class="flex">
                                        <img src="{{ asset('images/homepage/icon_location.png') }}" alt="">
                                        <p class="text-gray-600 text-sm">Jakarta, Indonesia</p>
                                    </div>
                                    <div class="flex">
                                        <img src="{{ asset('images/homepage/icon_money.png') }}" alt="">
                                        <p class="text-gray-600 text-sm">$70k - $90k</p>
                                    </div>
                                </div>
                                <div class="flex items-center justify-start space-x-2 mt-2">
                                    <span
                                        class="inline-block bg-blue-200 text-blue-700 font-semibold border border-dark text-black text-xs px-3 py-1 rounded-2xl text-center cursor-default">
                                        React
                                    </span>
                                    <span
                                        class="inline-block bg-blue-200 text-blue-700 font-semibold border border-dark text-black text-xs px-3 py-1 rounded-2xl text-center cursor-default">
                                        Javascript
                                    </span>
                                    <span
                                        class="inline-block bg-blue-200 text-blue-700 font-semibold border border-dark text-black text-xs px-3 py-1 rounded-2xl text-center cursor-default">
                                        Kotlin
                                    </span>
                                </div>
                            </div>
                            <div class="flex flex-col space-y-2 w-30">
                                <button onclick="toggleModal(true)"
                                    class="bg-blue-600 text-sm text-white font-semibold py-1.5 px-3 rounded-md hover:bg-blue-700 w-full">
                                    Apply Now
                                </button>

                                <button
                                    class="bg-gray-200 text-sm text-gray-600 font-semibold py-1.5 px-3 rounded-md hover:bg-gray-300 w-full">
                                    Save
                                </button>
                            </div>

                        </div>


                        <div class="">
                            <p class="text-sm">Looking for a senior frontend developer with experience in React and
                                TypeScript...</p>
                            <div class="flex flex-row space-x-2">
                                <p>AI Match :</p>
                                <div class="flex-shrink-0 flex items-center space-x-3 w-40">
                                    <div class="w-full bg-gray-200 rounded-full h-4 overflow-hidden">
                                        <div class="bg-blue-500 h-4 rounded-full" style="width: 75%;"></div>
                                    </div>
                                    <p>65%</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Card -->
                <div class="md:w-1/2">
                    <div class="max-w-sm bg-white rounded-2xl shadow-md overflow-hidden border border-gray-200">
                        <div class="p-4">
                            <h3 class="font-semibold text-lg text-gray-800">Your Profile</h3>
                            <p class="text-sm text-gray-600">CV and personal information</p>
                        </div>
                        <div class="p-4 text-center">
                            <img src="{{ asset('images/homepage/icon_profile_default.png') }}" alt=""
                                class="w-20 h-20 rounded-full mx-auto mb-1">
                            <h2 class="text-md font-semibold text-gray-800">Marcello Ilham</h2>
                            <p class="text-gray-500 text-sm mb-4">
                                Senior Frontend Developer
                            </p>

                            <!-- Tag Display (Non-Klikable) -->
                            <div class="flex items-center justify-center space-x-2">
                                <span
                                    class="inline-block bg-blue-200 text-blue-700 font-semibold border border-dark text-black text-xs px-3 py-1 rounded-2xl text-center cursor-default">
                                    React
                                </span>
                                <span
                                    class="inline-block bg-blue-200 text-blue-700 font-semibold border border-dark text-black text-xs px-3 py-1 rounded-2xl text-center cursor-default">
                                    Javascript
                                </span>
                                <span
                                    class="inline-block bg-blue-200 text-blue-700 font-semibold border border-dark text-black text-xs px-3 py-1 rounded-2xl text-center cursor-default">
                                    Kotlin
                                </span>
                            </div>


                            <!-- Tombol interaktif -->
                            <a href="#"
                                class="inline-block bg-white border border-dark hover:bg-black hover:text-white text-black text-sm px-4 py-2 rounded-lg w-full text-center mt-4">
                                Edit Profile
                            </a>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div id="applyModal"
                class="fixed inset-0 z-50 hidden bg-black bg-opacity-50 flex items-center justify-center">
                <div class="bg-white w-full max-w-4xl rounded-lg overflow-hidden shadow-lg">

                    <!-- Header -->
                    <div class="flex justify-between items-center px-6 py-4 border-b">
                        <div class="flex items-center space-x-3">
                            <img src="{{ asset('images/homepage/icon_company.png') }}" class="w-6 h-6"
                                alt="Company Logo">
                            <div>
                                <h2 class="text-xl font-bold text-black">Senior Frontend Developer</h2>
                                <p class="text-sm text-gray-600">Technology Company</p>
                            </div>
                        </div>
                        <button onclick="toggleModal(false)"
                            class="text-gray-500 hover:text-black text-2xl leading-none">
                            &times;
                        </button>
                    </div>

                    <div id="cvAlert"
                        class="bg-green-100 text-green-800 text-sm px-4 py-2 mx-6 mt-2 rounded-md border border-green-300 hidden">
                        Your CV is Eligible
                    </div>

                    <!-- Body -->
                    <div class="px-6 py-4">
                        <h3 class="text-lg font-semibold text-black mb-4 mt-4">Company Overview</h3>
                        <div class="flex flex-col md:flex-row md:space-x-6">

                            <!-- Kiri: Deskripsi -->
                            <div class="w-full md:w-2/4">
                                <p class="text-sm text-gray-700">
                                    TechCorp Inc. is an innovative technology company focused on developing digital
                                    solutions based on artificial intelligence (AI), cloud computing, and business
                                    automation.
                                </p>

                                <div class="flex flex-row gap-6 mt-4">
                                    {{-- Kiri --}}
                                    <div class="flexbox">
                                        <div class="flex">
                                            <img src="{{ asset('images/homepage/icon_location.png') }}" class="w-5 h-5"
                                                alt="Location Icon">
                                            <p class="text-sm text-gray-700 ml-2">Jakarta, Indonesia</p>
                                        </div>
                                        <div class="flex mt-2">
                                            <img src="{{ asset('images/homepage/icon_location.png') }}"
                                                class="w-5 h-5" alt="Location Icon">
                                            <p class="text-sm text-gray-700 ml-2">Jakarta, Indonesia</p>
                                        </div>
                                        <div class="flex mt-2">
                                            <img src="{{ asset('images/homepage/icon_location.png') }}"
                                                class="w-5 h-5" alt="Location Icon">
                                            <p class="text-sm text-gray-700 ml-2">Jakarta, Indonesia</p>
                                        </div>
                                    </div>

                                    {{-- Kanan --}}
                                    <div class="flexbox">
                                        <div class="flex">
                                            <img src="{{ asset('images/homepage/icon_location.png') }}"
                                                class="w-5 h-5" alt="Location Icon">
                                            <p class="text-sm text-gray-700 ml-2">Jakarta, Indonesia</p>
                                        </div>
                                        <div class="flex mt-2">
                                            <img src="{{ asset('images/homepage/icon_location.png') }}"
                                                class="w-5 h-5" alt="Location Icon">
                                            <p class="text-sm text-gray-700 ml-2">Jakarta, Indonesia</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Kanan: Rating -->
                            <div class="w-full md:w-2/4 mt-4 md:mt-0">
                                <div class="flexbox">
                                    <div class="rounded-2xl p-4 h-auto mb-2" style="background-color: #e8fce9">
                                        <p class="text-black font-semibold mb-2">Company Rating</p>
                                        <div class="flex items-center space-x-2">
                                            <svg class="w-5 h-5 text-yellow-400" fill="currentColor"
                                                viewBox="0 0 20 20">
                                                <path
                                                    d="M10 15l-5.878 3.09 1.122-6.545L.488 6.91l6.561-.954L10 0l2.951 5.956 6.561.954-4.756 4.635 1.122 6.545z" />
                                            </svg>
                                            <span class="text-sm text-gray-600">4.5 / 5.0</span>
                                        </div>
                                    </div>

                                    <div class="rounded-2xl p-4 h-auto mt-2" style="background-color: #e0ffe1">
                                        <p class="font-bold mb-2" style="color: #336334">Benefits</p>
                                        <div class="flex items-center space-x-2">
                                            <svg class="w-5 h-5 text-yellow-400" fill="currentColor"
                                                viewBox="0 0 20 20">
                                                <path
                                                    d="M10 15l-5.878 3.09 1.122-6.545L.488 6.91l6.561-.954L10 0l2.951 5.956 6.561.954-4.756 4.635 1.122 6.545z" />
                                            </svg>
                                            <span class="text-sm text-gray-600">4.5 / 5.0</span>
                                        </div>
                                        <p class="text-xs text-gray-500 mt-2">Based on 120 reviews</p>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <p class="text-lg font-bold text-black mb-3">Job Description</p>
                        <div class="block space-y-1">
                            <div class="flex items-start">
                                <span class="text-sm text-black mr-1">1.</span>
                                <span class="text-sm text-black">Bachelor's Degree</span>
                            </div>
                            <div class="flex items-start">
                                <span class="text-sm text-black mr-1">2.</span>
                                <span class="text-sm text-black">Bachelor's Degree</span>
                            </div>
                        </div>

                        <label for="cv_screening" class="block text-sm font-medium text-gray-700 mb-2">
                            Check Your Eligibility
                        </label>

                        <div class="flex w-full gap-2 items-center">
                            <!-- Custom Input File -->
                            <label for="cv_screening"
                                class="flex-1 cursor-pointer bg-gray-200 border-2 border-dashed border-gray-600 rounded-md min-h-[70px] flex items-center justify-center text-sm text-gray-700 text-center">
                                Drop Your CV
                                <input type="file" id="cv_screening" class="hidden" />
                            </label>

                            <!-- Button -->
                            <button type="button" onclick="showCVAlert()"
                                class="min-w-[180px] min-h-[70px] bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium px-4 py-3 rounded-md">
                                Check CV
                            </button>
                        </div>



                    </div>

                    <!-- Footer -->
                    <div class="px-6 py-4 border-t flex justify-between items-center">
                        <!-- Bookmark Icon Button -->
                        <button class="p-2 rounded hover:bg-gray-200 text-gray-600" aria-label="Bookmark">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                fill="currentColor" class="bi bi-bookmark" viewBox="0 0 16 16">
                                <path
                                    d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1z" />
                            </svg>
                        </button>

                        <!-- Full Width Apply Button -->
                        <button class="bg-blue-600 text-sm text-white px-6 py-2 rounded hover:bg-blue-700 w-full ml-3">
                            Apply
                        </button>
                    </div>


                </div>
            </div>




        </div>
    </div>
</div>

<script>
    function toggleModal(show = true) {
        const modal = document.getElementById('applyModal');
        if (show) {
            modal.classList.remove('hidden');
        } else {
            modal.classList.add('hidden');
        }
    }

    function showCVAlert() {
        const alertBox = document.getElementById('cvAlert');
        alertBox.classList.remove('hidden');
        alertBox.classList.add('block');

        // Optional: hide alert after 3 seconds
        setTimeout(() => {
            alertBox.classList.add('hidden');
        }, 3000);
    }
</script>
