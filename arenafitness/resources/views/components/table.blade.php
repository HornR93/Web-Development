<div>
    


    <div class="relative overflow-x-auto shadow-md sm:rounded-lg my-2 mx-8">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500">
            <thead class="text-xs text-zinc-50 uppercase bg-zinc-900">
                <tr>
                    @foreach($columns as $column)
                    <th scope="col" class="px-6 py-3">
                        {{ $column }}
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <span class="sr-only">Odebrat</span>
                    </th>
                    @endforeach
                </tr>
            </thead>


            <tbody>
                <tr class="bg-zinc-700 text-white border-b border-gray-200 hover:bg-zinc-800 ">
                    <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap ">
                        Apple MacBook Pro 17"
                    </th>
                    <td class="px-6 py-4">
                        Silver
                    </td>
                    <td class="px-6 py-4">
                        Laptop
                    </td>
                    <td class="px-6 py-4">
                        $2999
                    </td>
                    <td class="px-6 py-4 text-right">
                        <a href="#" class="font-medium text-teal-600 hover:underline">Odebrat</a>
                    </td>
                </tr>
            </tbody>


        </table>
    </div>
    
    
</div>