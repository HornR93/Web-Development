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

                {{$slot}}


                <x-visit/>

                
               <x-table/>


            </main>
            
            
            

           
          <script src="script.js"></script>
        </body>
</html>