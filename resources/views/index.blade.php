    @vite(['resources/css/app.css', 'resources/js/app.js'])

        Пример страницы


<x-main-layout>
</x-main-layout>

    <p>Это контент страницы</p>




    @for ($i = 0; $i < 10; $i++)
        @php
            $type = rand(1,3)
        @endphp
        <x-status :type=$type>
            @if($type==1)
                новый
            @elseif($type==2)
                подтверждено
            @else
                отклонено
            @endif    
        </x-status>
    @endfor




