<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <h1 class="text-center">Sistem Manajemen Kepegawaian</h1>
    <div class="row my-4">
        <div class="col">
            <a href="#" <button class="btn btn-primary w-75">Manajemen Pegawai</button></a>
        </div>
        <div class="col">
            <a href="#" <button class="btn btn-primary w-75">Manajemen Departemen</button></a>
        </div>
        <div class="col">
            <a href="#" <button class="btn btn-primary w-75">Manajemen Jabatan</button></a>
        </div>
        <div class="col">
            <a href="#" <button class="btn btn-primary w-75">Manajemen Absensi</button></a>
        </div>
    </div>
</x-app-layout>
