<x-app-layout>
    <header>
        <section class="w-full flex items-center justify-between px-8 py-6">
            <div class="flex items-center space-x-2">
                <span class="text-xl font-semibold">{{env('APP_NAME')}}</span>
            </div>

            <nav class="hidden md:flex items-center space-x-8 text-sm">
                <a href="#" class="hover:text-gray-300">Para Devs</a>
                <span class="text-gray-600">|</span>
                <a href="#" class="hover:text-gray-300">Entrar</a>
            </nav>

            <a href="{{ route('profile') }}" class="bg-white text-black px-5 py-2 rounded-full text-sm font-medium">
                Seu perfil
            </a>
        </section>

        <section class="px-8 md:px-20 py-20">
            <h1 class="text-4xl md:text-6xl font-bold leading-tight">
                t1 <br />
                t2
            </h1>
            <p class="text-xl md:text-2xl text-gray-300 mt-6 max-w-3xl">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi voluptatibus dicta vero saepe accusantium quibusdam! Ex ipsa veritatis aliquam repellendus incidunt labore? Fugit maxime ullam eos at, cumque unde ipsa?
            </p>

            <button class="mt-10 bg-white text-black px-8 py-4 rounded-full text-lg font-semibold">
                Button
            </button>
        </section>
    </header>

    <section class="px-8 md:px-20 py-16">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-12 text-center text-white">

            <div>
                <div class="flex justify-center mb-4">
                    <div class="w-10 h-10 border border-gray-400 rounded-full">1</div>
                </div>
                <h3 class="text-xl font-semibold">1</h3>
                <p class="text-gray-400 mt-2">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsa aspernatur quisquam eius! Quis quo a laborum reiciendis consequuntur ab laboriosam sit modi officiis aperiam minima fugit velit, doloribus doloremque nostrum.
                </p>
            </div>

           <div>
                <div class="flex justify-center mb-4">
                    <div class="w-10 h-10 border border-gray-400 rounded-full">2</div>
                </div>
                <h3 class="text-xl font-semibold">2</h3>
                <p class="text-gray-400 mt-2">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsa aspernatur quisquam eius! Quis quo a laborum reiciendis consequuntur ab laboriosam sit modi officiis aperiam minima fugit velit, doloribus doloremque nostrum.
                </p>
            </div>

            <div>
                <div class="flex justify-center mb-4">
                    <div class="w-10 h-10 border border-gray-400 rounded-full">3</div>
                </div>
                <h3 class="text-xl font-semibold">3</h3>
                <p class="text-gray-400 mt-2">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsa aspernatur quisquam eius! Quis quo a laborum reiciendis consequuntur ab laboriosam sit modi officiis aperiam minima fugit velit, doloribus doloremque nostrum.
                </p>
            </div>

            <div>
                <div class="flex justify-center mb-4">
                    <div class="w-10 h-10 border border-gray-400 rounded-full">4</div>
                </div>
                <h3 class="text-xl font-semibold">4</h3>
                <p class="text-gray-400 mt-2">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsa aspernatur quisquam eius! Quis quo a laborum reiciendis consequuntur ab laboriosam sit modi officiis aperiam minima fugit velit, doloribus doloremque nostrum.
                </p>
            </div>

        </div>
    </section>

    <section class="px-8 md:px-20 py-24 bg-white text-black flex flex-col md:flex-row items-center gap-16">
        <div class="flex-1">
            <h2 class="text-4xl md:text-5xl font-bold leading-tight">
                Conecte-se com a comunidade, Seja encontrado.
            </h2>

            <p class="text-gray-700 mt-6 max-w-xl text-lg">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa maxime delectus nemo. Repudiandae animi vitae facere, iure numquam nisi pariatur non molestiae eveniet atque enim quibusdam quam itaque unde neque?
            </p>

            <a href="#" class="text-black font-semibold inline-block mt-6">
                Criar meu perfil →
            </a>
        </div>

        <div class="flex-1 relative">
            <div class="w-full h-auto rounded-xl overflow-hidden shadow-xl bg-gray-200">
                <!-- Placeholder visual -->
                <div class="w-full h-80 bg-gradient-to-br from-gray-800 to-gray-600 flex items-center justify-center">
                    <span class="text-white text-xl opacity-70">Prévia do {{ env('APP_NAME') }}</span>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>