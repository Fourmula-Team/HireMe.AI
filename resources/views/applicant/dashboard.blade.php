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
                                <button class="bg-blue-600 text-sm text-white font-semibold py-1.5 px-3 rounded-md hover:bg-blue-700 w-full">
                                  Apply Now
                                </button>
                                <button class="bg-gray-200 text-sm text-gray-600 font-semibold py-1.5 px-3 rounded-md hover:bg-gray-300 w-full">
                                  Save
                                </button>
                              </div>
                              
                          </div>
                          
                    
                        <div class="">
                          <p class="text-sm">Looking for a senior frontend developer with experience in React and TypeScript...</p>
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

        </div>
    </div>
</div>
