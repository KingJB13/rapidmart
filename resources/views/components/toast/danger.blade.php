

<div id="danger-toast" class="gap-5 bg-red-500 bottom-5 left-5 sticky flex items-center w-fit border-red-600 text-md text-white rounded-lg  py-3 px-5">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
    </svg>  
    {{ $slot }}    
    <button type="button" id="deleted-toast" class="bg-transparent hover:text-gray-300 rounded-lg text-white transition-colors duration-200 ease-in-out p-2">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
        </svg>
    </button>
</div>

@section('scripts')
    @parent
    @vite(['resources/js/utils/toast/danger.js'])
@endsection