<x-app-layout>
    <div class="mx-auto mt-6 max-w-7xl sm:px-6 lg:px-8">
        <div class="flex h-32 space-x-4">
            @foreach ($types as $type)
            {{dd($type)}}
            <div class="flex-1 p-4 bg-white rounded-md hover:shadow-lg">
                <div class="grid grid-flow-col grid-rows-3">
                    <div class="flex items-center row-span-3">
                        <div class="mt-4 bg-white rounded-full shadow">
                            <img class="object-contain w-full h-16 p-2" src="{{ asset($type->icon) }}" alt="">
                        </div>
                    </div>
                    <div class="flex justify-center col-span-2 row-span-2 font-bold">
                        <h3 class="text-3xl font-normal">{{ $type->name }}</h3>
                    </div>
                    <div class="flex justify-center col-span-2">
                        <h3 class="-mb-4 text-4xl font-normal">96</h3>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        {{-- <div class="flex flex-wrap w-full mb-4">
            <div class="w-full mb-6 lg:mb-0">
            <h1 class="mb-2 font-bold text-gray-900 sm:text-4xl title-font">Create List Groceries</h1>
            <div class="w-20 h-1 bg-indigo-500 rounded"></div>
            </div>
        </div> --}}

        <form action="{{ route('groceries.store') }}" method="post">
            @csrf
            <div class="flex flex-row flex-wrap mt-6 -mx-4">
                @foreach ( $sub_types as $sub_type )
                <div class="p-4 xl:w-1/3 md:w-1/2">
                    <div class="p-6 bg-white rounded-lg">
                        <h2 class="mb-4 text-lg font-bold tracking-wider text-gray-900 title-font">{{ $sub_type->name }}</h2>
                        <div class="block">
                            <div class="mt-2">
                                @foreach ( $sub_type->item as $item)
                                    <div>
                                        <label class="inline-flex items-center">
                                            <input type="checkbox" class="form-checkbox" name="items[]" value="{{ $item->id }}" {{ !in_array($item->id, $user_item->toArray())?: 'checked' }}>
                                            <span class="ml-2">{{ $item->name }}</span>
                                        </label>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="flex justify-end mt-6">
                <x-jet-button class="ml-4">
                    {{ __('Submit') }}
                </x-jet-button>
            </div>
        </form>
    </div>
</x-app-layout>
