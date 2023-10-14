<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Fitur Post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">


            <form action="{{ route('post.simpan') }}" method="post">
                @csrf
                <div class="grid gap-6 mb-6">
                    <div>
                    <label for="judul" class="black mb-2 text-sm font-medium text-gray-900">Judul</label>
                    <input type="text" name="judul" class="bg-gray-50 border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 fokus:border-blue-500 block w-full">
                    </div>
                    <div>
                    <label for="judul" class="black mb-2 text-sm font-medium text-gray-900">Deskripsi</label>
                    <input type="text" name="deskripsi" class="bg-gray-50 border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 fokus:border-blue-500 block w-full">
                    </div>
                </div>
                <button type="submit" class="text-white text-center font-medium bg-blue-700 hover:bg-blue-500 fokus:ring-blue-300 rounded-lg sm:w-auto px-5 py-2.5">
                    Simpan
                </button>

            </form>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <table class="min-w max w-full table-auto">
                    <thead>
                        <tr class="bg-blue-200">
                        <th class="py-3 px-6 text-center">No</th>
                        <th class="py-3 px-6 text-center">Judul</th>
                        <th class="py-3 px-6 text-center">Deskripsi</th>
                        </tr>
                    <thead>
                    <tbody>
                        @foreach ($data as $item)
                    <tr>
                        <td class="py-3 px-6 text-center">{{$item->id}}</td>
                        <td class="py-3 px-6 text-center">{{$item->judul}}</td>
                        <td class="py-3 px-6 text-center">{{$item->deskripsi}}</td>
                    </tr>
                    @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </div>
</x-app-layout>
