<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
  <div class="flex h-screen">

    <x-nav></x-nav>

        <main class="bg-zinc-800 flex-1">

            <x-header></x-header>
          
              <div class="px-4 px-2 text-xl text-white">

                <p>
                  Nový příchozí do fitka 
                </p>

                
                  <button type="button" id="AddUser" class="ml-2 text-white mr-1 pt-1">
                    
                    
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-plus hover:text-teal-500"><circle cx="12" cy="12" r="10"/><path d="M8 12h8"/><path d="M12 8v8"/></svg>
  
                  </button>
                  
                </div>

                <div class="flex bg-zinc-900 px-4 py-2 border rounded-lg gap-4">

                  <div class="flex-col">
                    
                    <label for="Name" class="text-white ">
                      Jméno
                      <p class="text-white"></p>
                      <input type="name" class="pl-2">
                    </label>
                      
                  </div>
                  
                  <div>

                    <label for="Skrinka">

                      <p class="text-white">Číslo skříňky</p>
                    </label>
                    <input type="number" id="skrinka" class="pl-2" min="1" max="22">Muž</input>


                  </div>

                  <div>

                    <label for="Skrinka">

                      <p class="text-white">Pohlaví</p>
                    </label>
                    <input type="radio" id="muz" value="muz"  class="pl-2"></input>


                  </div>
                  
                  
                </div>
                
                <p class="px-4 px-2 text-xl text-white">
                  <span id="datumCas"></span>
                </p>

                
                <table class="text-white border rounded-xl px-4 py-2 mx-4 my-2">
                  <thead>
                    <tr class="bg-zinc-900">
                      <th class="w-68">Jméno</th><th class="w-48">Příchod</th><th class="w-32">Permanentka</th>
                    </tr>
                </thead>
                  <tbody class="border">
                    <tr >
                      <td>Jiří Lábus</td><td><span class="datumCas"></span></td><td>Nemá</td>
                    </tr>
                    <tr class="bg-zinc-700">
                      <td>Zdeněk Polraich</td><td><span class="datumCas"></span></td><td>13.2.2025</td>
                    </tr>
                    <tr>
                      <td>Ozzák Pacovský</td><td><span class="datumCas"></span></td><td>24.2.2025</td>
                    </tr>
                    <tr class="bg-zinc-700">
                      <td>Dalai-Lama</td><td><span class="datumCas"></span></td><td>1.3.2025</td>
                    </tr>
                    <tr >
                      <td>Grzegorz Brzęczyszczykiewicz</td><td><span class="datumCas"></span></td><td>Nemá</td>
                    </tr>
                  </tbody>
                  <tfoot>
                    <tr>
                      <td></td><td>Hodnota celkem:</td><td>4 050,00 Kč</td>
                    </tr>
                  </tfoot>
                </table>



            </main>
            
            
            

           
          <script src="script.js"></script>
        </body>
</html>