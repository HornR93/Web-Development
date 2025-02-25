<div>
    <header class="border-b bg-zinc-900 sticky top-0">
            
        <div class="flex justify-between ">
          
          <H1 class="text-4xl px-6 py-4 text-white font-bold">Aktuální stav</H1>
          
          
          
          <div class="flex">

            
            <button type="button" id="LogInOpen" class=" px-4 py-4">
              
              <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-white lucide lucide-circle-user hover:text-teal-500"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="10" r="3"/><path d="M7 20.662V19a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v1.662"/></svg>
              
            </button>



          </div>
            
        </div>
          
          
          
          
        
        <dialog id="LogIn" class="border bg-zinc-900 rounded-lg">
          
          <div class="flex justify-end">

            <button type="button" id="LogInClose" class=" bg-zinc-900 mr-1 pt-1">
              
              
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-white lucide lucide-circle-x hover:text-teal-500 justify-end"><circle cx="12" cy="12" r="10"/><path d="m15 9-6 6"/><path d="m9 9 6 6"/></svg>
              
            </button>
            
          </div>
          

          
          <form action="1" method="post" class=" bg-zinc-900 px-6 pb-2">
            
            <div>
              <label class="text-white py-1 text-xl">
                E-mail
              </label>
            </div>
              <input type="email" class="text-black px-1 text-xl">
              
            <div>
              <label class="text-white py-1 text-xl">
                Heslo
              </label>
            </div>
              <input type="password" class="text-black px-1 text-xl">
              
            <div>
              <label class="py-1 text-white">
                <input type="checkbox" class="text-sm text-white accent-teal-400">
                Zůstat přihlášen
              </label>
            </div>
              
            <p>                                  
              <button class="bg-teal-500 text-white px-4 my-2 py-2 rounded-xl hover:bg-teal-600">
                potvrdit
              </button>
            </p>
                                                            
          </form>
                        
        </header>

</div>