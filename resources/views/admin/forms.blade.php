@extends('layouts.dashboard')
@section('title', 'Dashboard Admin')
@section('content')


<main class="p-6">
    <div class="mb-4">
        <h1 class="text-2xl font-bold text-gray-800 mb-2">Form Control</h1>
        <p class="text-gray-600">Menu Pengontrolan Formulir</p>
    </div>

    <h3 class="text-lg font-bold text-gray-800 ">Formulir Pekerjaan</h3>
    <div class="overflow-x-auto rounded shadow mb-6 px-6 border-2">
        <p class="text-gray-600 mb-2">Data pengisian Formulir Pekerjaan</p>
        <table id="pekerjaanTable" class="min-w-full bg-white text-sm ">
            <thead class="bg-gray-100 text-gray-700">
                <tr>
                    <th class="py-2 px-4 text-left">No</th>
                    <th class="py-2 px-4 text-left">Nama Alumni</th>
                    <th class="py-2 px-4 text-left">Tanggal Pengisian</th>
                    <th class="py-2 px-4 text-left">Aksi</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($pekerjaan as $work)  
                <tr class="border-b hover:bg-gray-50">
                    <td class="py-2 px-4">{{ $loop->iteration }}</td>
                    <td class="py-2 px-4">{{ $work->user->name ?? '-' }}</td>
                    <td class="py-2 px-4">{{ $work->created_at->format('d M Y H:i') }}</td>
                    <td class="py-2 px-4">
                        <form  method="POST" onsubmit="return confirm('Yakin ingin menghapus data ini?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:underline">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <h3 class="text-lg font-bold text-gray-800">Formulir Lanjut Studi</h3>
    <p class="text-gray-600 mb-2">Data pengisian Formulir Lanjut Studi</p>

    <h3 class="text-lg font-bold text-gray-800">Formulir Wirausaha</h3>
    <p class="text-gray-600 mb-2">Data pengisian Formulir Wirausaha</p>


</main>

<script>
    const dataTable = new simpleDatatables.DataTable("#myTable", {
        searchable: true,
        fixedHeight: false,
        perPage: 5,
        labels: {
            placeholder: "Cari...",
            perPage: "{select} data per halaman",
            noRows: "Tidak ada data",
            info: "Menampilkan {start} sampai {end} dari {rows} data"
        }
    });
</script>
@endsection