<x-layouts.guest>

    <form action="/login" method="POST" class="bg-zinc-900 p-8 rounded-xl shadow-lg border border-zinc-200 flex flex-col gap-4 w-1/3">
        <a href="/">
        
            <div class="flex justify-end">
              
              <button type="button" id="LogInClose" class=" bg-zinc-900 mr-1 pt-1 absolute">
                
                
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-white lucide lucide-circle-x hover:text-teal-500 justify-end"><circle cx="12" cy="12" r="10"/><path d="m15 9-6 6"/><path d="m9 9 6 6"/></svg>
                
              </button>
              
            </div>
          </a>

        @csrf
        <h1 class="text-center text-xl text-teal-500 font-semibold">Přihlásit se</h1>
        <x-input label="E-mail" type="email" name="email" />
        <x-input label="Heslo" type="password" name="password" />
        <x-button>Přihlásit se</x-button>
        <a href="/register" class="text-zinc-200">Ještě nemáte učet? Založte si ho.</a>
    </form>

</x-layouts.guest>