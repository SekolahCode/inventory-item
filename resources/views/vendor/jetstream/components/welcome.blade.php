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
    <div class="p-6">
        <div class="flex items-center">
            <img src="{{ asset('icons/shopping-cart.svg') }}" alt="" height="32" width="32">
            <div class="ml-4 text-lg font-semibold leading-7 text-gray-600"><a href="{{ route('groceries.create') }}">Barang Keperluan Dapur</a></div>
        </div>

        <div class="ml-12">
            <div class="mt-2 text-sm text-gray-500">
               Barang-barang keperluan dapur seperti barang basah, barang kering, sayur-sayuran, buah-buahan dan sebagainya.
            </div>

            <a href="{{ route('groceries.create') }}">
                <div class="flex items-center mt-3 text-sm font-semibold text-indigo-700">
                    <div>Buat/Tambah barang keperluan dapur</div>

                    <div class="ml-1 text-indigo-500">
                        <svg viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <div class="p-6 border-t border-gray-200 md:border-t-0 md:border-l">
        <div class="flex items-center">
            <img src="{{ asset('icons/user.svg') }}" alt="" height="32" width="32">
            <div class="ml-4 text-lg font-semibold leading-7 text-gray-600"><a href="https://laracasts.com">Barang Keperluan Diri</a></div>
        </div>

        <div class="ml-12">
            <div class="mt-2 text-sm text-gray-500">
                Barang keperluan diri anda seperti pencuci muka, ubat gigi, sabun mandi, deodorant dan sebagainya.
            </div>

            <a href="https://laracasts.com">
                <div class="flex items-center mt-3 text-sm font-semibold text-indigo-700">
                    <div>Buat/Tambah barang keperluan diri</div>

                    <div class="ml-1 text-indigo-500">
                        <svg viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <div class="p-6 border-t border-gray-200">
        <div class="flex items-center">
            <img src="{{ asset('icons/box.svg') }}" alt="" height="32" width="32">
            <div class="ml-4 text-lg font-semibold leading-7 text-gray-600"><a href="https://laracasts.com">Barang Keperluan Diri</a></div>
        </div>

        <div class="ml-12">
            <div class="mt-2 text-sm text-gray-500">
                Barang keperluan rumah anda seperti pencuci pinggan, plastik sampah, tisu dapur, aluminium foil dan sebagainya.
            </div>

            <a href="https://laracasts.com">
                <div class="flex items-center mt-3 text-sm font-semibold text-indigo-700">
                    <div>Buat/Tambah barang keperluan rumah</div>

                    <div class="ml-1 text-indigo-500">
                        <svg viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <div class="p-6 border-t border-gray-200 md:border-l">
        <div class="flex items-center">
            <img src="{{ asset('icons/medical-kit.svg') }}" alt="" height="32" width="32">
            <div class="ml-4 text-lg font-semibold leading-7 text-gray-600"><a href="https://laracasts.com">Barang Keperluan Diri</a></div>
        </div>

        <div class="ml-12">
            <div class="mt-2 text-sm text-gray-500">
                Ubat-ubatan seperti ubat-batuk, panadol, ubat-selsema, minyak angin dan sebagainya.
            </div>

            <a href="https://laracasts.com">
                <div class="flex items-center mt-3 text-sm font-semibold text-indigo-700">
                    <div>Buat/Tambah ubat-ubatan</div>

                    <div class="ml-1 text-indigo-500">
                        <svg viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
