@extends('layouts.admin.base')
@section('page_title', 'Pengaturan Kriteri | Admin')
@section('content')
<div class="p-4 sm:ml-64">
    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
        <div class="bg-gray-800 grid py-8 px-7 rounded-lg">
            <form action="#" method="POST" data-no-reset="true">
                @csrf
                <div class="relative z-0 w-full mb-6 group">
                    <select name="harga" id="floating_email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required>
                        @foreach($kriteria as $key)
                        <option value="1" @if ($key->key == "c1" and $key->value == 1) {{ "selected" }} @endif>Rendah</option>
                        <option value="3" @if ($key->key == "c1" and $key->value == 3) {{ "selected" }} @endif>Sedang</option>
                        <option value="5" @if ($key->key == "c1" and $key->value == 5) {{ "selected" }} @endif>Tinggi</option>
                        @endforeach
                    </select>
                    <label for="floating_email" class="peer-focus:font-medium absolute text-lg text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Harga</label>
                </div>
                <div class="grid md:grid-cols-2 md:gap-6">
                    <div class="relative z-0 w-full mb-6 group">
                        <select name="berat" id="floating_first_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required>
                            <option value="1" selected>Rendah</option>
                            <option value="3">Sedang</option>
                            <option value="5">Tinggi</option>
                        </select>
                        <label for="floating_first_name" class="peer-focus:font-medium absolute text-lg text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Jumlah/Berat</label>
                    </div>
                    <div class="relative z-0 w-full mb-6 group">
                        <select name="jml_vitamin_a" id="floating_last_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required>
                            <option value="1" selected>Rendah</option>
                            <option value="3">Sedang</option>
                            <option value="5">Tinggi</option>
                        </select>
                        <label for="floating_last_name" class="peer-focus:font-medium absolute text-lg text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Kandungan Vitamin A</label>
                    </div>
                </div>
                <div class="grid md:grid-cols-2 md:gap-6">
                    <div class="relative z-0 w-full mb-6 group">
                        <select name="jml_vitamin_b" id="floating_phone" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required>
                            <option value="1" selected>Rendah</option>
                            <option value="3">Sedang</option>
                            <option value="5">Tinggi</option>
                        </select>
                        <label for="floating_phone" class="peer-focus:font-medium absolute text-lg text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Kandungan Vitamin B</label>
                    </div>
                    <div class="relative z-0 w-full mb-6 group">
                        <select name="jml_vitamin_c" id="floating_company" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required>
                            <option value="1" selected>Rendah</option>
                            <option value="3">Sedang</option>
                            <option value="5">Tinggi</option>
                        </select>
                        <label for="floating_company" class="peer-focus:font-medium absolute text-lg text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Kandungan Vitamin C</label>
                    </div>
                </div>
                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-8">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection
