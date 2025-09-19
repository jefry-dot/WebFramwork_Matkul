<x-app-layout>
    <div class="p-6">
        <h1 class="text-2xl font-bold mb-4">Tambah Produk</h1>

        <form action="{{ route('products.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label class="block">Nama Produk</label>
                <input type="text" name="name" class="border rounded w-full p-2">
            </div>
            <div class="mb-4">
                <label class="block">Deskripsi</label>
                <textarea name="description" class="border rounded w-full p-2"></textarea>
            </div>
            <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Simpan</button>
        </form>
    </div>
</x-app-layout>
