@extends('layouts.dashboard')

@section('content')
    <main class="p-6">

        <h3 class="text-lg font-bold text-gray-800 mb-4">Filter Alumni berdasarkan Angkatan</h3>

        <!-- Form filter -->
        <form action="{{ route('admin.student') }}" method="GET" class="mb-6">
            <label for="graduate_year" class="block mb-1 font-medium">Filter Angkatan:</label>
            <select name="graduate_year" id="graduate_year"
                class="border border-gray-300 rounded px-3 py-2 text-sm inline-block">
                <option value="">Semua</option>
                @foreach ($years as $year)
                    <option value="{{ $year }}" {{ request('graduate_year') == $year ? 'selected' : '' }}>
                        {{ $year }}</option>
                @endforeach
            </select>
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded ml-2 hover:bg-blue-700">Filter</button>
            <a href="{{ route('admin.student') }}" class="ml-3 text-gray-600 underline">Reset</a>
        </form>

        <!-- Tabel -->
        <table id="studentsTable" class="min-w-full bg-white text-sm">
            <thead class="bg-gray-100 text-gray-700">
                <tr>
                    <th class="py-2 px-4 text-left">No</th>
                    <th class="py-2 px-4 text-left">Nama Alumni</th>
                    <th class="py-2 px-4 text-left">Angkatan</th>
                    <th class="py-2 px-4 text-left">Tanggal Pengisian</th>
                    <th class="py-2 px-4 text-left">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-2 px-4">{{ $loop->iteration }}</td>
                        <td class="py-2 px-4">{{ $student->name ?? '-' }}</td>
                        <td class="py-2 px-4">{{ $student->graduate_year ?? '-' }}</td>
                        <td class="py-2 px-4">{{ $student->created_at->format('d M Y H:i') }}</td>
                        <td class="py-2 px-4"><a href="{{ route('admin.student.show', $student->id) }}">Lihat</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </main>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            new simpleDatatables.DataTable("#studentsTable", {
                searchable: true,
                fixedHeight: false,
                perPage: 10,
                labels: {
                    placeholder: "Cari...",
                    noRows: "Tidak ada data",
                    info: "Menampilkan {start} sampai {end} dari {rows} data"
                }
            });
        });
    </script>
@endsection
