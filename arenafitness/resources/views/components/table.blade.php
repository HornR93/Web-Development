<div>

    @props([
        'columns' => [], 
        'rows' => [],  
    ])
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg my-2 mx-8">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500">
            <thead>
                <tr class="text-xs text-zinc-50 uppercase bg-zinc-900">
                    @foreach ($columns as $column)
                    <th class="border border-gray-300 px-4 py-2 text-left">{{ $column }}</th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
                @foreach ($rows as $row)
                <tr class="hover:bg-gray-100">
                    @foreach ($row as $cell)
                    <td class="border border-gray-300 px-4 py-2">{{ $cell }}</td>
                    @endforeach
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
        
</div>