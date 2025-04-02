<x-layouts.layout>

    <form action="/login" method="POST" class="bg-gradient-to-b from-zinc-300 via-zinc-100 to-zinc-300 p-8 rounded-xl shadow-lg border border-zinc-200 flex flex-col gap-4 w-1/3">
        <a href="/">
        
            <div class="flex justify-end">
              
              <button type="button" class="mr-1 pt-1 absolute">
                
                
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-zinc-500 lucide lucide-circle-x hover:text-zinc-600 justify-end"><circle cx="12" cy="12" r="10"/><path d="m15 9-6 6"/><path d="m9 9 6 6"/></svg>
                
              </button>
              
            </div>
          </a>

        @csrf
        <h1 class="text-center text-xl text-zinc-900 font-semibold">Přihlásit se</h1>
        <x-input label="E-mail" type="email" name="email" />
        <x-input label="Heslo" type="password" name="password" />
        <x-button>Přihlásit se</x-button>
        <a href="/register" class="text-zinc-900 hover:text-zinc-600">Ještě nemáte učet? Založte si ho.</a>
    </form>

</x-layouts.layout>