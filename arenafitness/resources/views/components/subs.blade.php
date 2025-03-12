<button id="toggleButton" class="text-white bg-teal-500 p-2 rounded">Přidat permanentku</button>

<div id="popupForm" class="hidden fixed inset-0 bg-zinc-800 bg-opacity-50 flex justify-center items-center z-50">
    <div class="bg-zinc-900 p-8 rounded-xl shadow-lg border border-zinc-200 flex flex-col gap-4 w-1/3">

        <div class="flex justify-end">

            <button id="closeButton" class=" bg-zinc-900 mr-1 pt-1 absolute">
                
                
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-white lucide lucide-circle-x hover:text-teal-500 justify-end"><circle cx="12" cy="12" r="10"/><path d="m15 9-6 6"/><path d="m9 9 6 6"/></svg>
                
            </button>
        </div>

        <form action="{{ route('subscription.create') }}" method="POST">
            @csrf
            <h1 class="text-center text-xl text-teal-500 font-semibold">Přidat permenentku</h1>

            <x-input label="Jméno" type="text" name="name" class="mt-4" />
            <x-input label="E-mail" type="email" name="mail" class="mt-4"/>

            <div class="flex mt-2">
                <div class="text-white">
                    <input type="radio" id="male" name="gender" value="male" class="mr-2">
                    <label for="male" class="pr-8">Muž</label>
                    <input type="radio" id="female" name="gender" value="female" class="mr-2">
                    <label for="female">Žena</label>
                </div>        
            </div>

            <x-input label="Poznámka" type="text" name="note" class="mt-4 mb-4"/>
            
            <x-button class="mt-2">Potvrdit</x-button>
        </form>
    </div>
</div>
