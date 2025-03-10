<x-layouts.app>
@php
    
    $visitors = [
        ['Jiří Procházka', 'jan.novak@email.cz', 25],
        ['Petr Svoboda', 'petr.svoboda@email.cz', 30],
        ['Anna Dvořáková', 'anna.dvorakova@email.cz', 22]
    ];
    
@endphp
    <x-table> 
        
        
        
        :columns="['Jméno', 'Email', 'Věk']" :rows="$visitors" 







    </x-table>
    
    

</x-layouts.app>
