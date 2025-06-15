<section id="contact" class="mb-20 creative-card p-12 relative overflow-hidden">
    <div class="absolute -right-20 -top-20 w-64 h-64 rounded-full bg-purple-200 opacity-20"></div>
    <div class="absolute -left-20 -bottom-20 w-80 h-80 rounded-full bg-green-200 opacity-20"></div>

    <div class="relative z-10">
        <h1 class="text-4xl md:text-5xl font-bold text-center mb-6 creative-heading">Let's create something amazing together</h1>
        <p class="text-xl text-gray-600 text-center mb-12">Always excited to learn, collaborate, and contribute to meaningful projects — feel free to reach out!</p>

        <div class="bg-white rounded-2xl shadow-lg p-8">
            <h2 class="text-2xl font-bold mb-6">Contact Me</h2>

            <!-- FIX: Tambahkan method dan action -->
            <form id="contactForm" action="https://formspree.io/f/mdkzznqq" method="POST">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Left -->
                    <div class="space-y-6">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Name</label>
                            <input type="text" id="name" name="name" required
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-pink-500 focus:border-pink-500">
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                            <input type="email" id="email" name="email" required
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-pink-500 focus:border-pink-500 invalid:border-red-500 invalid:text-red-600 focus:invalid:border-red-500 focus:invalid:ring-red-500"
                                pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                        </div>
                    </div>
                    <!-- Right -->
                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Your Message</label>
                        <textarea id="message" name="message" rows="4" required
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-pink-500 focus:border-pink-500 h-full"></textarea>
                    </div>
                </div>

                <div class="mt-8 flex justify-end">
                    <button type="submit" class="bg-pink-500 hover:bg-pink-600 text-white font-bold py-2 px-6 rounded-lg transition duration-300">
                        Send Message
                    </button>
                </div>
            </form>

            <!-- Notification -->
            <div id="notification" style="display: none;"
                class="absolute bottom-8 right-8 left-8 bg-green-100 border border-green-300 text-green-800 px-6 py-3 rounded-lg shadow-lg flex items-center justify-center z-50 transition-opacity duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                        clip-rule="evenodd" />
                </svg>
                Message sent successfully!
            </div>
        </div>
    </div>
</section>