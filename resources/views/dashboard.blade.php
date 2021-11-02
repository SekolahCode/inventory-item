<x-app-layout>
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 sm:px-20">
                    <div class="mt-8 text-2xl">
                        Selamat Datang Ke EasyTracking
                    </div>
                
                    <div class="mt-6 text-gray-500">
                        Disini Kami menyediakan platform memudahkan anda menjejaki barangan keperluan rumah anda.
                    </div>
                    <a href="{{ route('items.index') }}">
                        <div class="flex items-center mt-3 text-sm font-semibold text-indigo-700">
                                <div>Lihat senarai barang anda</div>
                
                                <div class="ml-1 text-indigo-500">
                                    <svg viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                </div>
                        </div>
                    </a>
                </div>
                
                <div class="grid grid-cols-1 bg-gray-200 bg-opacity-25 md:grid-cols-2">
                    @foreach ($types as $key => $type)

                    <div class="p-6">
                        <div class="flex items-center">
                            <img src="{{ asset($type->icon) }}" alt="" height="32" width="32">
                            <div class="ml-4 text-lg font-semibold leading-7 text-gray-600"><a href="{{ route($type->route) }}">{{ ucwords($type->name) }}</a></div>
                        </div>
                
                        <div class="ml-12">
                            <div class="mt-2 text-sm text-gray-500">
                               {{$type->description}}
                            </div>
                
                            <a href="{{ route('groceries.create') }}">
                                <div class="flex items-center mt-3 text-sm font-semibold text-indigo-700">
                                    
                                    <div>{{ $type->id == isset($user_type[$loop->iteration]) ? 'Tambah' : 'Buat' }} barang keperluan dapur</div>
                                   
                                    <div class="ml-1 text-indigo-500">
                                        <svg viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>                
            </div>
        </div>
    </div>
</x-app-layout>
