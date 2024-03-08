<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/js/app.js','resources/sass/app.scss'])
    <title>@yield('titulo')</title>
    @stack('head')
    
</head>


         
            </div>
            @yield('cabecera')
        </div>
        <div class="ml-auto sm:hidden " id="dropdown">
            <button>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                    <path fill-rule="evenodd" d="M2 3.75A.75.75 0 0 1 2.75 3h14.5a.75.75 0 0 1 0 1.5H2.75A.75.75 0 0 1 2 3.75Zm0 4.167a.75.75 0 0 1 .75-.75h14.5a.75.75 0 0 1 0 1.5H2.75a.75.75 0 0 1-.75-.75Zm0 4.166a.75.75 0 0 1 .75-.75h14.5a.75.75 0 0 1 0 1.5H2.75a.75.75 0 0 1-.75-.75Zm0 4.167a.75.75 0 0 1 .75-.75h14.5a.75.75 0 0 1 0 1.5H2.75a.75.75 0 0 1-.75-.75Z" clip-rule="evenodd" />
                </svg>
            </button>
            <script>
                document.getElementById('dropdown').addEventListener('click', function() {
                    document.getElementById('nav-content-mobile').classList.toggle('hidden');
                });
            </script>
        </div>
    </header>


    <main class="min-h-screen flex-grow flex items-center justify-center mt-[84.5px]">
        @yield('contenido')
    </main> 
</body>

</html>