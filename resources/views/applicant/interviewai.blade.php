<div class="main-content bg-white">
    <div class="page-content">
        <div class="container-fluid mx-auto px-4">
            <h3 class="text-2xl font-semibold text-black mb-6">{{ $title }}</h3>

            <div class="md:flex md:space-x-6">
                <!-- Kolom Kiri -->
                <div class="md:w-1/2 mb-6 md:mb-0">
                    <div class="max-w-xl bg-white rounded-2xl shadow-md overflow-hidden border border-gray-200 p-4">
                        <h3 class="text-xl text-black font-semibold">AI Interview</h3>
                        <p>Practice for your next interview with our AI interviewer.</p>
                        <label for="interviewType">Interview Type</label>
                        <select id="interviewType" name="interviewType"
                            class="block w-full px-3 py-2 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 text-sm">
                            <option value="">-- Choose an option --</option>
                            <option value="frontend">Frontend Developer</option>
                            <option value="backend">Backend Developer</option>
                            <option value="fullstack">Fullstack Developer</option>
                        </select>

                        <label for="experienceLevel">Experience Level</label>
                        <select id="experienceLevel" name="experienceLevel"
                            class="block w-full px-3 py-2 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 text-sm">
                            <option value="">Basic</option>
                            <option value="">Intermediate</option>
                            <option value="">Advanced</option>
                        </select>

                        <label for="interviewFocus">Interview Focus</label>
                        <div class="mb-1">
                            <label class="inline-flex items-center">
                                <input type="checkbox"
                                    class="form-checkbox h-4 w-4 text-blue-600 border-gray-300 rounded">
                                <span class="ml-2 text-sm text-gray-700">Technical Skill</span>
                            </label>
                        </div>
                        <div class="mb-1">
                            <label class="inline-flex items-center">
                                <input type="checkbox"
                                    class="form-checkbox h-4 w-4 text-blue-600 border-gray-300 rounded">
                                <span class="ml-2 text-sm text-gray-700">Behavioral</span>
                            </label>
                        </div>
                        <div class="mb-1">
                            <label class="inline-flex items-center">
                                <input type="checkbox"
                                    class="form-checkbox h-4 w-4 text-blue-600 border-gray-300 rounded">
                                <span class="ml-2 text-sm text-gray-700">Situational</span>
                            </label>
                        </div>
                        <label for="duration">Duration</label>
                        <select name="duration" id="duration"
                            class="block w-full px-3 py-2 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 text-sm">
                            <option value="">15 Minutes</option>
                            <option value="">30 Minutes</option>
                            <option value="">45 Minutes</option>
                            <option value="">60 Minutes</option>
                        </select>

                        <button
                            class="bg-blue-600 text-sm text-white font-semibold py-1.5 px-3 rounded-md hover:bg-blue-700 w-full mt-4">Restart
                            Interview</button>
                    </div>

                    <div class="max-w-xl bg-white rounded-2xl shadow-md overflow-hidden border border-gray-200 p-4">
                        <h3>Interview Tips</h3>
                        <div class="block">
                            <div class="flex">
                                <img src="{{ asset('images/homepage/icon_check_mark.png') }}" alt="">
                                <p>Take your time thinking before answering</p>
                            </div>
                            <div class="flex">
                                <img src="{{ asset('images/homepage/icon_check_mark.png') }}" alt="">
                                <p>Take your time thinking before answering</p>
                            </div>
                            <div class="flex">
                                <img src="{{ asset('images/homepage/icon_check_mark.png') }}" alt="">
                                <p>Take your time thinking before answering</p>
                            </div>
                            <div class="flex">
                                <img src="{{ asset('images/homepage/icon_check_mark.png') }}" alt="">
                                <p>Take your time thinking before answering</p>
                            </div>
                            <div class="flex">
                                <img src="{{ asset('images/homepage/icon_check_mark.png') }}" alt="">
                                <p>Take your time thinking before answering</p>
                            </div>
                            <div class="flex">
                                <img src="{{ asset('images/homepage/icon_check_mark.png') }}" alt="">
                                <p>Take your time thinking before answering</p>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Kolom Kanan -->
                <div class="md:w-1/2">
                    <div
                        class="max-w-sm h-[500px] bg-white rounded-2xl shadow-md overflow-hidden border border-gray-200 flex flex-col">

                        <!-- Header -->
                        <div class="p-4 border-b border-gray-200">
                            <h3 class="text-lg font-semibold text-gray-800">Chat</h3>
                        </div>

                        <!-- Chat Messages Area -->
                        <div class="flex-1 overflow-y-auto p-4 space-y-3">
                            <!-- Message from other -->
                            <div class="bg-gray-100 p-2 rounded-lg w-fit max-w-[80%] text-sm">
                                Hi, how can I help you?
                            </div>
                            <!-- Message from self -->
                            <div class="bg-blue-500 text-white p-2 rounded-lg w-fit max-w-[80%] text-sm self-end">
                                I have a question about my profile.
                            </div>
                            <!-- Add more messages here dynamically -->
                        </div>

                        <!-- Input Area -->
                        <div class="p-3 border-t border-gray-200">
                            <form class="flex items-center space-x-2">
                                <input type="text" placeholder="Type a message..."
                                    class="flex-1 border border-gray-300 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring focus:ring-blue-300">
                                <button type="submit"
                                    class="bg-blue-600 text-white px-4 py-2 text-sm rounded-lg hover:bg-blue-700">
                                    Send
                                </button>
                            </form>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </div>
</div>
