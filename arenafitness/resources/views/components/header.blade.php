<div>
    <header class="border-b bg-zinc-900 sticky top-0">
            
        <div class="flex justify-between ">
          
          <H1 class="text-4xl px-6 py-4 text-white font-bold">Aktuální stav</H1>
          
          
          
          <div class="flex border rouded-lg bg-zinc-800">
            <div class="flex-center justify-center text-white">
           
            </div>

            <div class="flex-col items-center justify-center">
              
              <p>{{auth()->user()->name}}</p>
              <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"/><polyline points="16 17 21 12 16 7"/><line x1="21" x2="9" y1="12" y2="12"/></svg>
                  <p>
                    Odhlásit se
                  </p>
                </button>
              </form>
            </div>
          </a>


          </div>
            
        </div>
          
        </header>

</div>