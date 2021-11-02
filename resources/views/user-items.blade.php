<x-app-layout>
   
    <div class="mx-auto mt-6 max-w-7xl sm:px-6 lg:px-8">
        <div class="flex flex-wrap w-full mb-4">
            <div class="w-full mb-6 lg:mb-0">
            <h1 class="mb-2 font-bold text-gray-900 sm:text-4xl title-font">List Items</h1>
            <div class="w-20 h-1 bg-indigo-500 rounded"></div>
            </div>
        </div>
        
        <form action="{{ route('items.update') }}" method="post">
        @csrf
        <div class="my-3">
            <h1> Available Items </h1>
            @if (!$available_items->isEmpty())
            <div class="flex flex-row overflow-hidden overflow-x-scroll">
                <div class="flex mr-10 flex-nowrap lg:mr-40 md:mr-20">
                    @foreach ( $available_items as $key => $items)
                    <div class="inline-block p-3">
                        <div class="max-w-xs p-6 overflow-hidden transition-shadow duration-300 ease-in-out bg-white rounded shadow h-96 w-96 hover:shadow-lg">
                            <h1 class="font-bold tracking-wider">{{ $key }}</h1>
                            @foreach ( $items as $item )
                            <div class="mt-2">
                                <label class="inline-flex items-center">
                                    <input type="checkbox" class="form-checkbox" name="items[]" value="{{ $item->id }}">
                                    <span class="ml-2">{{ $item->name }}</span>
                                </label>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @endforeach
                </div>
                <input type="hidden" name="availability" value="false">
            </div>
            <div class="flex justify-end mt-6">
                <x-jet-button class="ml-4">
                    {{ __('Update Available Items') }}
                </x-jet-button>
            </div>
            </form>
            @else
            <p class="text-center"> no items</p>
            @endif 
        </div>
        
        <form action="{{ route('items.update') }}" method="post">
        @csrf
        <div class="my-3">
            <h1> Unavailable Items </h1>
            <div class="flex flex-row overflow-hidden overflow-x-scroll">
                <div class="flex mr-10 flex-nowrap lg:mr-40 md:mr-20">
                    @foreach ( $unavailable_items as $key => $items)
                    <div class="inline-block p-3">
                        <div class="max-w-xs p-6 overflow-hidden transition-shadow duration-300 ease-in-out bg-white rounded shadow h-96 w-96 hover:shadow-lg">
                            <h1 class="font-bold tracking-wider">{{ $key }}</h1>
                            @foreach ( $items as $item )
                            <div class="mt-2">
                                <label class="inline-flex items-center">
                                    <input type="checkbox" class="form-checkbox" name="items[]" value="{{ $item->id }}">
                                    <span class="ml-2">{{ $item->name }}</span>
                                </label>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @endforeach
                </div>
                <input type="hidden" name="availability" value="true">
            </div>
            <div class="flex justify-end mt-6">
                <x-jet-button class="ml-4">
                    {{ __('Update Unvailable Items') }}
                </x-jet-button>
            </div>
        </div>
        </form>
    </div>

</x-app-layout>
