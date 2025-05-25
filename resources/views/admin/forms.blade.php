@extends('layouts.dashboard')
@section('title', 'Dashboard Admin')
@section('content')


    <main class="p-6">
        <div class="mb-4">
            <h1 class="text-2xl font-bold text-gray-800 mb-2">Form Control</h1>
            <p class="text-gray-600">Menu Pengontrolan Formulir</p>
        </div>

        <div class="bg-blue-600 w-fit p-2 rounded-lg mb-3">
            <h3 class="text-lg font-bold text-white ">Formulir Pekerjaan</h3>
        </div>
        <div class="overflow-x-auto rounded shadow mb-6 px-6 border-2">
            <p class="text-gray-600 mb-2">Data pengisian Formulir Pekerjaan</p>
            <table id="pekerjaanTable" class="min-w-full bg-white text-sm ">
                <thead class="bg-gray-100 text-gray-700">
                    <tr>
                        <th class="py-2 px-4 text-left">No</th>
                        <th class="py-2 px-4 text-left">Nama Alumni</th>
                        <th class="py-2 px-4 text-left">Lulusan</th>
                        <th class="py-2 px-4 text-left">Slip Gaji</th>
                        <th class="py-2 px-4 text-left">Tanggal Pengisian</th>
                        <th class="py-2 px-4 text-left">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pekerjaan as $work)
                        <tr class="border-b hover:bg-gray-50">
                            <td class="py-2 px-4">{{ $loop->iteration }}</td>
                            <td class="py-2 px-4">{{ $work->user->name ?? '-' }}</td>
                            <td class="py-2 px-4">{{ $work->user->graduate_year ?? '-' }}</td>
                            <td class="py-2 px-4"><img class="w-20" src="{{ asset('storage/' . $work->bukti_pekerjaan) }}" alt="Bukti Gaji"></td>
                            <td class="py-2 px-4">{{ $work->created_at->format('d M Y H:i') }}</td>
                            <td class="py-2 px-4 flex items-center gap-4">
                                <button class="text-blue-600 hover:underline"><a
                                        href="{{ route('admin.form.pekerjaan', ['id' => $work->id]) }}">Lihat</a></button>

                                <form method="POST" onsubmit="return confirm('Yakin ingin menghapus data ini?');">
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

        <div class="bg-green-600 w-fit p-2 rounded-lg mb-3">
            <h3 class="text-lg font-bold text-white ">Formulir Lanjut Studi</h3>
        </div>

        <div class="overflow-x-auto rounded shadow mb-6 px-6 border-2">
            <p class="text-gray-600 mb-2">Data pengisian Formulir Lanjut Studi</p>
            <table id="lanjutStudiTable" class="min-w-full bg-white text-sm ">
                <thead class="bg-gray-100 text-gray-700">
                    <tr>
                        <th class="py-2 px-4 text-left">No</th>
                        <th class="py-2 px-4 text-left">Nama Alumni</th>
                        <th class="py-2 px-4 text-left">Lulusan</th>
                        <th class="py-2 px-4 text-left">Tanggal Pengisian</th>
                        <th class="py-2 px-4 text-left">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($lanjutStudi as $study)
                        <tr class="border-b hover:bg-gray-50">
                            <td class="py-2 px-4">{{ $loop->iteration }}</td>
                            <td class="py-2 px-4">{{ $study->user->name ?? '-' }}</td>
                            <td class="py-2 px-4">{{ $study->user->graduate_year ?? '-' }}</td>
                            <td class="py-2 px-4">{{ $study->created_at->format('d M Y H:i') }}</td>
                            <td class="py-2 px-4 flex items-center gap-4">
                                <button class="text-blue-600 hover:underline"><a
                                        href="{{ route('admin.form.lanjut-studi', ['id' => $study->id]) }}">Lihat</a></button>
                                <form method="POST" onsubmit="return confirm('Yakin ingin menghapus data ini?');">
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

        <div class="bg-yellow-600 w-fit p-2 rounded-lg mb-3">
            <h3 class="text-lg font-bold text-white ">Formulir Wirausaha</h3>
        </div>
        <div class="overflow-x-auto rounded shadow mb-6 px-6 border-2">
            <p class="text-gray-600 mb-2">Data pengisian Formulir Wirausaha</p>
            <table id="wirausahaTable" class="min-w-full bg-white text-sm ">
                <thead class="bg-gray-100 text-gray-700">
                    <tr>
                        <th class="py-2 px-4 text-left">No</th>
                        <th class="py-2 px-4 text-left">Nama Alumni</th>
                        <th class="py-2 px-4 text-left">Lulusan</th>
                        <th class="py-2 px-4 text-left">Tanggal Pengisian</th>
                        <th class="py-2 px-4 text-left">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($wirausaha as $usaha)
                        <tr class="border-b hover:bg-gray-50">
                            <td class="py-2 px-4">{{ $loop->iteration }}</td>
                            <td class="py-2 px-4">{{ $usaha->user->name ?? '-' }}</td>
                            <td class="py-2 px-4">{{ $usaha->user->graduate_year ?? '-' }}</td>
                            <td class="py-2 px-4">{{ $usaha->created_at->format('d M Y H:i') }}</td>
                            <td class="py-2 px-4 flex items-center gap-4">
                                <button class="text-blue-600 hover:underline"><a
                                        href="{{ route('admin.form.wirausaha', ['id' => $usaha->id]) }}">Lihat</a></button>
                                <form method="POST" onsubmit="return confirm('Yakin ingin menghapus data ini?');">
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


    </main>

    <script>
        const dataTablePekerjaan = new simpleDatatables.DataTable("#pekerjaanTable", {
            searchable: true,
            fixedHeight: false,
            perPage: 5,
            labels: {
                placeholder: "Cari...",
                perPage: " data per halaman",
                noRows: "Tidak ada data",
                info: "Menampilkan {start} sampai {end} dari {rows} data"
            }
        });

        const dataTableStudi = new simpleDatatables.DataTable("#lanjutStudiTable", {
            searchable: true,
            fixedHeight: false,
            perPage: 5,
            labels: {
                placeholder: "Cari...",
                perPage: " data per halaman",
                noRows: "Tidak ada data",
                info: "Menampilkan {start} sampai {end} dari {rows} data"
            }
        });

        const dataTableWirausaha = new simpleDatatables.DataTable("#wirausahaTable", {
            searchable: true,
            fixedHeight: false,
            perPage: 5,
            labels: {
                placeholder: "Cari...",
                perPage: " data per halaman",
                noRows: "Tidak ada data",
                info: "Menampilkan {start} sampai {end} dari {rows} data"
            }
        });
    </script>
@endsection
