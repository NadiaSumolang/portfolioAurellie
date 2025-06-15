
<section id="about" class="mb-28 creative-card p-12">
    <div class="flex flex-col md:flex-row items-center">
        <div class="md:w-1/2 mb-12 md:mb-0 md:pr-12">
            <h2 class="text-4xl font-bold creative-heading mb-8">About Me</h2>
            <p class="text-gray-600 mb-6 leading-relaxed">
                Hi! I'm Aurellie Wibowo, a 4th-semester Informatics student passionate about creating meaningful digital experiences through UI/UX design and web development. 
                I love turning ideas into functional, user-friendly interfaces.
            </p>
            <p class="text-gray-600 mb-6 leading-relaxed">
                Throughout my academic journey and personal projects, I've explored both design principles and programming fundamentals. 
                I work with HTML, CSS, JavaScript, and am currently learning Laravel, Tailwind CSS and React to build modern responsive websites.
                My favorite tools include Figma, Visual Studio Code, Git & GitHub.
            </p>
            <p class="text-gray-600 mb-8 leading-relaxed">
                Outside of design and coding, I enjoy watching movies—especially Korean dramas—or going for walks 
                to refresh my mind and spark creativity.
            </p>
            <div class="flex flex-wrap gap-4">
                <div class="flex items-center">
                    <div class="w-3 h-3 rounded-full bg-pink-400 mr-2"></div>
                    <span class="text-gray-700">Based in Manado</span>
                </div>
                <div class="flex items-center">
                    <div class="w-3 h-3 rounded-full bg-blue-400 mr-2"></div>
                    <span class="text-gray-700">4th Semester</span>
                </div>
                <div class="flex items-center">
                    <div class="w-3 h-3 rounded-full bg-purple-400 mr-2"></div>
                    <span class="text-gray-700">Actively Building Projects</span>
                </div>
            </div>
        </div>
        <div class="md:w-1/2">
            <div class="relative">
                <div class="w-full h-[400px] rounded-3xl overflow-hidden shadow-xl">
                    <img src="{{ asset('images/aboutme1.jpg')}}" 
                         alt="Brian working" 
                         class="w-full h-full object-cover">
                </div>
               <div class="absolute -bottom-6 -right-6 px-4 py-2 rounded-xl bg-white shadow-lg">
                <div class="text-sm font-semibold text-pink-500 whitespace-nowrap">
                    Still Learning, But All In!
                </div>
                </div>
            </div>
        </div>
    </div>
</section>
