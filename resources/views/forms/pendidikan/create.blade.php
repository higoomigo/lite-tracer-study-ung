@extends('layouts.dashboard')
@section('title-dash', 'Dashboard User')
@section('content')

<main class="p-6">

    @if ($errors->any())
        <div class="mb-6">
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold">Terjadi kesalahan!</strong>
                <ul class="mt-2 list-disc list-inside text-sm">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif
    <div class="mb-8">
        <h1 class="text-2xl font-bold text-gray-800 mb-2">Form Tracer Pekerjaan</h1>
        <p>Jawab pertanyaan berikut untuk mengisi pendataan pekerjaan Alumni</p>
    </div>  

    <form action="{{ route('lanjut_studi.store') }}" method="POST" x-data="lanjutStudiForm()" @submit.prevent="validateForm" class="p-6 bg-white rounded-lg shadow-md max-w-7xl mx-auto">
        @csrf

        <!-- Pertanyaan Awal: Apakah Anda melanjutkan studi? -->
        <div>
            <label for="plan_study" class="block text-sm font-semibold mb-1">Apakah Anda melanjutkan studi setelah lulus?</label>
            <select id="plan_study" name="plan_study" class="p-3 w-full bg-white border border-gray-300 rounded-md focus:ring focus:ring-blue-200 transition" x-model="plan_study" required>
                <option value="" disabled selected>Pilih salah satu</option>
                <option value="yes">Ya</option>
                <option value="no">Tidak</option>
            </select>
            <p class="text-xs text-gray-500 mt-1">Pilih <b>Ya</b> jika Anda melanjutkan studi setelah lulus, atau <b>Tidak</b> jika tidak.</p>
        </div>

        <!-- Sumber Pembiayaan Studi S1 (Ditampilkan untuk semua jawaban) -->
        <div x-show="plan_study === 'yes' || plan_study === 'no'" x-cloak x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 -translate-y-2" x-transition:enter-end="opacity-100 translate-y-0">
            <label for="study_financed_by" class="block text-sm font-semibold mb-1">Bagaimana Anda membiayai studi S1 Anda?</label>
            <select id="study_financed_by" name="study_financed_by" class="p-3 w-full bg-white border border-gray-300 rounded-md focus:ring focus:ring-blue-200 transition" x-model="study_financed_by" :required="plan_study === 'yes' || plan_study === 'no'">
                <option value="" disabled selected>Pilih salah satu</option>
                <option value="scholarship">Beasiswa</option>
                <option value="parents">Orang Tua</option>
                <option value="self">Biaya Sendiri</option>
                <option value="other">Lainnya</option>
            </select>
            <input type="text" id="study_financed_by_other" name="study_financed_by_other" class="mt-2 p-3 w-full bg-white border border-gray-300 rounded-md focus:ring focus:ring-blue-200 transition"
                placeholder="Sebutkan sumber biaya lain"
                x-model="study_financed_by_other"
                x-show="study_financed_by === 'other' && (plan_study === 'yes' || plan_study === 'no')"
                x-cloak
                :required="study_financed_by === 'other' && (plan_study === 'yes' || plan_study === 'no')">
            <p class="text-xs text-gray-500 mt-1">Jika memilih "Lainnya", silakan sebutkan sumber biaya Anda.</p>
        </div>

        <!-- Jika Melanjutkan Studi -->
        <div x-show="plan_study === 'yes'" x-cloak x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 -translate-y-2" x-transition:enter-end="opacity-100 translate-y-0" class="space-y-6">

            <!-- Studi Domestik atau Luar Negeri -->
            <div>
                <label for="study_location" class="block text-sm font-semibold mb-1">Apakah Anda melanjutkan studi di dalam negeri atau luar negeri?</label>
                <select id="study_location" name="study_location" class="p-3 w-full bg-white border border-gray-300 rounded-md focus:ring focus:ring-blue-200 transition" x-model="study_location" :required="plan_study === 'yes'">
                    <option value="" disabled selected>Pilih salah satu</option>
                    <option value="domestic">Dalam Negeri</option>
                    <option value="international">Luar Negeri</option>
                </select>
                <p class="text-xs text-gray-500 mt-1">Pilih lokasi studi lanjutan Anda.</p>
            </div>

            <!-- Melanjutkan Studi dengan Beasiswa -->
            <div>
                <label for="study_scholarship" class="block text-sm font-semibold mb-1">Apakah Anda melanjutkan studi dengan beasiswa?</label>
                <select id="study_scholarship" name="study_scholarship" class="p-3 w-full bg-white border border-gray-300 rounded-md focus:ring focus:ring-blue-200 transition" x-model="study_scholarship" :required="plan_study === 'yes'">
                    <option value="" disabled selected>Pilih salah satu</option>
                    <option value="yes">Ya</option>
                    <option value="no">Tidak</option>
                </select>
                <p class="text-xs text-gray-500 mt-1">Pilih <b>Ya</b> jika Anda mendapatkan beasiswa untuk studi lanjutan.</p>
            </div>

            <!-- Jika Beasiswa, Jenis Beasiswa -->
            <div x-show="study_scholarship === 'yes' && plan_study === 'yes'" x-cloak x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 -translate-y-2" x-transition:enter-end="opacity-100 translate-y-0">
                <label for="scholarship_type" class="block text-sm font-semibold mb-1">Jenis Beasiswa</label>
                <select id="scholarship_type" name="scholarship_type" class="p-3 w-full bg-white border border-gray-300 rounded-md focus:ring focus:ring-blue-200 transition" x-model="scholarship_type" :required="study_scholarship === 'yes' && plan_study === 'yes'">
                    <option value="" disabled selected>Pilih jenis beasiswa</option>
                    <option value="merit">Beasiswa Prestasi</option>
                    <option value="need">Beasiswa Kebutuhan</option>
                    <option value="government">Beasiswa Pemerintah</option>
                    <option value="private">Beasiswa Swasta</option>
                    <option value="other">Lainnya</option>
                </select>
                <input type="text" id="scholarship_type_other" name="scholarship_type_other" class="mt-2 p-3 w-full bg-white border border-gray-300 rounded-md focus:ring focus:ring-blue-200 transition"
                    placeholder="Sebutkan jenis beasiswa lain"
                    x-model="scholarship_type_other"
                    x-show="scholarship_type === 'other' && study_scholarship === 'yes' && plan_study === 'yes'"
                    x-cloak
                    :required="scholarship_type === 'other' && study_scholarship === 'yes' && plan_study === 'yes'">
                <p class="text-xs text-gray-500 mt-1">Pilih jenis beasiswa yang Anda terima. Jika "Lainnya", silakan sebutkan.</p>
            </div>

            <!-- Nama Universitas -->
            <div>
                <label for="university_name" class="block text-sm font-semibold mb-1">Nama Universitas tempat Anda melanjutkan studi</label>
                <input type="text" id="university_name" name="university_name" class="p-3 w-full bg-white border border-gray-300 rounded-md focus:ring focus:ring-blue-200 transition" placeholder="Masukkan nama universitas" x-model="university_name" :required="plan_study === 'yes'">
                <p class="text-xs text-gray-500 mt-1">Tuliskan nama universitas tujuan studi lanjutan Anda.</p>
            </div>

            <!-- Program Studi -->
            <div>
                <label for="study_program" class="block text-sm font-semibold mb-1">Program studi yang Anda pilih</label>
                <input type="text" id="study_program" name="study_program" class="p-3 w-full bg-white border border-gray-300 rounded-md focus:ring focus:ring-blue-200 transition" placeholder="Masukkan program studi" x-model="study_program" :required="plan_study === 'yes'">
                <p class="text-xs text-gray-500 mt-1">Contoh: Magister Manajemen, S2 Teknik Informatika, dll.</p>
            </div>

            <!-- Waktu Mulai Studi -->
            <div>
                <label for="study_start_date" class="block text-sm font-semibold mb-1">Kapan Anda mulai studi lanjutan?</label>
                <input type="date" id="study_start_date" name="study_start_date" class="p-3 w-full bg-white border border-gray-300 rounded-md focus:ring focus:ring-blue-200 transition" x-model="study_start_date" :required="plan_study === 'yes'">
                <p class="text-xs text-gray-500 mt-1">Pilih tanggal mulai studi lanjutan Anda.</p>
            </div>
        </div>

        <!-- Jika Tidak Melanjutkan Studi -->
        <div x-show="plan_study === 'no'" x-cloak x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 -translate-y-2" x-transition:enter-end="opacity-100 translate-y-0" class="space-y-4">
            <div class="bg-blue-50 border border-blue-200 rounded-md p-4 text-blue-700 text-center">
                <p>Terima kasih telah mengisi form tracer study.<br>Anda memilih untuk <b>tidak melanjutkan studi</b> setelah lulus.</p>
            </div>
        </div>

        <!-- Tombol Submit -->
        <div class="text-center">
            <button type="submit" class="mt-8 px-8 py-3 bg-gradient-to-r from-blue-600 to-blue-400 text-white font-semibold rounded-lg shadow hover:from-blue-700 hover:to-blue-500 transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-blue-300">
                Kirim Jawaban
            </button>
            <p class="mt-2 text-sm text-gray-500">Pastikan semua data sudah benar sebelum mengirim.</p>
        </div>
    </form>

    <!-- Alpine.js for dynamic form logic -->
    <script src="//unpkg.com/alpinejs" defer></script>
    <script>
    function lanjutStudiForm() {
        return {
            plan_study: '',
            study_location: '',
            study_financed_by: '',
            study_financed_by_other: '',
            study_scholarship: '',
            scholarship_type: '',
            scholarship_type_other: '',
            university_name: '',
            study_program: '',
            study_start_date: '',
            isValid: false,

            validateForm(event) {
                // Validasi plan_study
                if (!this.plan_study) {
                    alert('Silakan pilih apakah Anda melanjutkan studi atau tidak.');
                    this.isValid = false;
                    return;
                }

                // Validasi jika melanjutkan studi
                if (this.plan_study === 'yes') {
                    if (!this.study_location ||
                        !this.study_financed_by ||
                        (this.study_financed_by === 'other' && !this.study_financed_by_other) ||
                        !this.study_scholarship ||
                        (this.study_scholarship === 'yes' && (!this.scholarship_type || (this.scholarship_type === 'other' && !this.scholarship_type_other))) ||
                        !this.university_name ||
                        !this.study_program ||
                        !this.study_start_date
                    ) {
                        alert('Silakan lengkapi semua data mengenai studi lanjutan.');
                        this.isValid = false;
                        return;
                    }
                }

                this.isValid = true;
                // Submit if valid
                event.target.closest('form').submit();
            },

            init() {
                this.$watch('plan_study', (newValue) => {
                    if (newValue === 'yes') {
                        this.isValid = this.study_location && this.study_financed_by && this.study_scholarship && this.university_name && this.study_program && this.study_start_date;
                    } else {
                        this.isValid = true;
                    }
                });
            }
        };
    }
    </script>

</main>





@endsection