<div class="main-content bg-gray-50">
    <div class="page-content">
        <div class="container-fluid mx-[204px] px-4 pt-5">
            <h3 class="text-2xl font-semibold text-black mb-6">{{ $title }}</h3>

            <div class="md:flex md:space-x-6">
                <!-- Kolom Kiri -->
                <div class="md:w-1/2 mb-6 md:mb-0">
                    <div class="max-w-xl bg-white rounded-2xl shadow-md overflow-hidden border border-gray-200 p-4">
                        <div>
                            <a href="#" class="text-lg font-semibold text-black">Post a New Job</a>
                            <p class="text-sm text-gray-500 mt-1 mb-4">Let our AI find the perfect candidates for your
                                role</p>

                            <!-- Job Title Input -->
                            <div class="mb-2">
                                <label for="job_title" class="text-sm font-semibold text-black">Job Title</label>
                                <input type="text" name="job_title" id="job_title"
                                    class="block w-full px-3 py-2 mt-2 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 text-sm"
                                    placeholder="Mis: Senior Frontend Developer" />
                                <p class="text-xs text-gray-400 text-end mt-1">0/100 character</p>
                            </div>

                            <!-- Flex Row for Location & Duration -->
                            <div class="flex flex-row gap-4 mb-4">
                                <div class="w-1/2">
                                    <label for="location" class="text-sm font-semibold text-black">Location</label>
                                    <input type="text" name="location" id="location"
                                        class="block w-full px-3 py-2 mt-2 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 text-sm"
                                        placeholder="Mis: Jakarta" />
                                </div>

                                <div class="w-1/2">
                                    <label for="job_type" class="text-sm font-semibold text-black">Job Type</label>
                                    <select name="job_type" id="job_type"
                                        class="block w-full px-3 py-2 mt-2 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 text-sm">
                                        <option value="">Full Time</option>
                                        <option value="">Part Time</option>
                                        <option value="">Internship</option>
                                    </select>
                                </div>
                            </div>

                            <div class="flex flex-row gap-4 mb-4">
                                <div class="w-1/2">
                                    <label for="location" class="text-sm font-semibold text-black">Salary Range
                                        Min</label>
                                    <input type="text" name="location" id="location"
                                        class="block w-full px-3 py-2 mt-2 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 text-sm"
                                        placeholder="Mis: 5000000" />
                                </div>

                                <div class="w-1/2">
                                    <label for="duration" class="text-sm font-semibold text-black">Salary Range
                                        Max</label>
                                    <input type="text" name="location" id="location"
                                        class="block w-full px-3 py-2 mt-2 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 text-sm"
                                        placeholder="Mis: 8000000" />
                                </div>
                            </div>

                            <div class="mb-4">
                                <label for="req_skill" class="text-sm font-semibold text-black">Required Skills</label>
                                <input type="text" name="job_title" id="job_title"
                                    class="block w-full px-3 py-2 mt-2 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 text-sm"
                                    placeholder="Mis: React, Javascript, TypeScript" />
                                <p class="text-xs text-gray-400 text-statr mt-1">Separate skills with commas</p>
                            </div>

                            <div class="mb-2">
                                <label for="req_skill" class="text-sm font-semibold text-black">Description</label>
                                <textarea name="req_skill" id="req_skill" rows="4"
                                    class="block w-full px-3 py-2 mt-2 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 text-sm resize-y"
                                    placeholder="Describe the role , responsibilites, and qualifications..."></textarea>
                                <p class="text-xs text-gray-400 text-end mt-1">0/500 character</p>
                            </div>

                            <div class="mb-4">
                                <label for="job_type" class="text-sm font-semibold text-black">
                                    AI Matching Preferences
                                </label>
                                <select name="job_type" id="job_type"
                                    class="block w-full px-3 py-2 mt-2 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 text-sm">
                                    <option value="">-- Select Matching Preference --</option>
                                    <option value="balanced">Balance skills and cultural fit</option>
                                    <option value="skill_first">Prioritize technical skill match</option>
                                    <option value="culture_first">Prioritize culture alignment</option>
                                    <option value="fast_placement">Fast placement (urgency-based)</option>
                                    <option value="long_term_potential">Long-term growth potential</option>
                                    <option value="startup_fit">Best fit for startup environment</option>
                                    <option value="corporate_fit">Best fit for corporate environment</option>
                                </select>
                            </div>

                        </div>
                    </div>

                    <div
                        class="max-w-xl bg-white rounded-2xl mt-5 mb-5 shadow-md overflow-hidden border border-gray-200 p-4">
                        <div class="mt-2 mb-4">
                            <p class="text-lg font-semibold text-gray-800">AI-Matched Candidates</p>
                            <p class="text-sm text-gray-500">For Senior Frontend Developer position.</p>
                        </div>

                        <div class="flex justify-between items-center w-full">
                            <div class="max-w-auto">

                                <div class="flex justify-between items-center w-full mb-2">
                                    <div class="flex items-center">
                                        <img src="{{ asset('images/homepage/icon_profile_default.png') }}"
                                            alt="Candidate Photo" class="w-10 h-10 rounded-full mr-3">
                                        <h3 class="text-lg font-semibold text-gray-800 mr-40">Senior Frontend Developer
                                        </h3>
                                    </div>

                                    <button
                                        class="bg-blue-600 text-sm text-white font-semibold py-1.5 px-3 rounded-md hover:bg-blue-700">
                                        View
                                    </button>
                                </div>


                                <div class="flex flex-row pl-10 ml-3 space-x-2">
                                    <div class="flex items-center mb-2">
                                        <img src="{{ asset('images/homepage/icon_company.png') }}"
                                            alt="Candidate Photo" class="mr-3">
                                        <p class="text-sm text-gray-700 font-medium">Tech Corp. Inc</p>
                                    </div>

                                    <div class="flex items-center mb-2">
                                        <img src="{{ asset('images/homepage/icon_location.png') }}"
                                            alt="Candidate Photo" class="mr-2">
                                        <p class="text-sm text-gray-500">Jakarta, Indonesia</p>
                                    </div>
                                </div>

                                <div class="flex flex-row pl-10 ml-3 space-x-2">
                                    <span
                                        class="inline-block bg-blue-200 text-blue-700 font-semibold border border-dark text-black text-xs px-3 py-1 rounded-2xl text-center cursor-default">
                                        Figma
                                    </span>
                                    <span
                                        class="inline-block bg-blue-200 text-blue-700 font-semibold border border-dark text-black text-xs px-3 py-1 rounded-2xl text-center cursor-default">
                                        Adobe XD
                                    </span>
                                    <span
                                        class="inline-block bg-blue-200 text-blue-700 font-semibold border border-dark text-black text-xs px-3 py-1 rounded-2xl text-center cursor-default">
                                        User Research
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="pl-10 ml-3 mt-2">
                            <p class="text-sm"><span class="text-black">AI Insights:</span> Strong React skills,
                                excellent problem-solving ability, potential culture fit.</p>
                            <div class="flex flex-row space-x-2">
                                <p class="text-black text-sm">AI Match :</p>
                                <div class="flex-shrink-0 flex items-center space-x-3 w-40">
                                    <div class="w-full bg-gray-200 rounded-full h-4 overflow-hidden">
                                        <div class="bg-blue-500 h-4 rounded-full" style="width: 75%;"></div>
                                    </div>
                                    <p class="text-blue-600 font-bold">65%</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Card 1 -->
                <div class="md:w-1/2">
                    <div class="bg-white border rounded-lg shadow-sm p-5 w-full max-w-md mb-5">
                        <div class="p-4">
                            <h3 class="font-semibold text-lg text-gray-800">Company Profile</h3>
                            <p class="text-sm text-gray-400">Company information visible to candidates.</p>
                        </div>
                        <div class="p-4 text-center">
                            <img src="{{ asset('images/homepage/icon_company.png') }}" alt=""
                                class="w-20 h-20 rounded-full mx-auto mb-1">
                            <h2 class="text-md font-semibold text-gray-800">
                                <span>{{ $recruiter->FIRST_NAME }} {{ $recruiter->LAST_NAME }}</span>

                            </h2>

                            <p class="text-gray-500 text-sm mb-4">
                                Software Development
                            </p>

                            <p class="text-gray-500 text-sm mb-4">
                                Jakarta, Indonesia · 50-200 employees
                            </p>

                            <a href="#"
                                class="inline-block bg-white border border-dark hover:bg-black hover:text-white text-black text-sm px-4 py-2 rounded-lg w-full text-center mt-4">
                                Edit Company Profile
                            </a>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="bg-white border rounded-lg shadow-sm p-5 w-full max-w-md mb-5">
                        <h2 class="text-lg font-semibold text-gray-800">AI Matching Analytics</h2>
                        <p class="text-sm text-gray-500 mb-4">Insights from your job postings.</p>

                        {{-- Overall Skills Distribution --}}
                        <div class="mb-6">
                            <h3 class="text-sm font-medium text-gray-700">Skills Distribution</h3>
                            <div class="w-full bg-gray-200 rounded-full h-3 mt-2">
                                <div class="bg-purple-500 h-3 rounded-full" style="width: 75%"></div>
                            </div>
                            <div class="flex justify-between text-xs text-gray-400 mt-1">
                                <span>Needs Improvement</span>
                                <span>Excellent</span>
                            </div>
                        </div>

                        {{-- Skills Breakdown --}}
                        <div class="mb-6">
                            <h3 class="text-sm font-medium text-gray-700 mb-2">Skills Distribution</h3>

                            <div class="mb-2">
                                <div class="flex justify-between text-sm">
                                    <span class="font-medium text-gray-800">React</span>
                                    <span class="text-gray-600">90%</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2">
                                    <div class="bg-blue-500 h-2 rounded-full" style="width: 90%"></div>
                                </div>
                            </div>

                            <div class="mb-2">
                                <div class="flex justify-between text-sm">
                                    <span class="font-medium text-gray-800">TypeScript</span>
                                    <span class="text-gray-600">78%</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2">
                                    <div class="bg-green-500 h-2 rounded-full" style="width: 78%"></div>
                                </div>
                            </div>

                            <div class="mb-2">
                                <div class="flex justify-between text-sm">
                                    <span class="font-medium text-gray-800">Redux</span>
                                    <span class="text-gray-600">65%</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2">
                                    <div class="bg-yellow-500 h-2 rounded-full" style="width: 65%"></div>
                                </div>
                            </div>
                        </div>

                        {{-- AI Suggestions --}}
                        <div>
                            <h3 class="text-sm font-semibold text-gray-700 mb-2">AI Suggestions</h3>
                            <ul class="list-none space-y-1 text-sm text-gray-600">
                                <li>✨ Consider adding <strong>Next.js</strong> to attract more senior candidates</li>
                                <li>✨ Emphasize collaborative environment to improve culture fit</li>
                                <li>✨ Broaden location options to include remote candidates</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="bg-white border rounded-lg shadow-sm p-5 w-full max-w-md mb-5">
                        <div class="flex justify-between items-center mb-4">
                            <h2 class="text-lg font-semibold text-gray-900">Active Job Postings</h2>
                            <span class="bg-green-100 text-green-700 text-xs font-medium px-3 py-1 rounded-full">5
                                Active</span>
                        </div>

                        <!-- Job 1 -->
                        <div class="py-3 border-b">
                            <h3 class="text-sm font-semibold text-gray-800">Senior Frontend Developer</h3>
                            <div class="flex justify-between items-center text-xs text-gray-500 mt-1">
                                <p>Posted 5 days ago · 28 applicants</p>
                                <a href="#" class="text-blue-600 font-medium hover:underline">Manage</a>
                            </div>
                        </div>

                        <!-- Job 2 -->
                        <div class="py-3 border-b">
                            <h3 class="text-sm font-semibold text-gray-800">UX/UI Designer</h3>
                            <div class="flex justify-between items-center text-xs text-gray-500 mt-1">
                                <p>Posted 1 week ago · 15 applicants</p>
                                <a href="#" class="text-blue-600 font-medium hover:underline">Manage</a>
                            </div>
                        </div>

                        <!-- Job 3 -->
                        <div class="py-3 border-b">
                            <h3 class="text-sm font-semibold text-gray-800">Product Manager</h3>
                            <div class="flex justify-between items-center text-xs text-gray-500 mt-1">
                                <p>Posted 2 weeks ago · 42 applicants</p>
                                <a href="#" class="text-blue-600 font-medium hover:underline">Manage</a>
                            </div>
                        </div>

                        <div class="pt-4 text-center">
                            <a href="#" class="text-sm font-medium text-blue-600 hover:underline">View All
                                Jobs</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
