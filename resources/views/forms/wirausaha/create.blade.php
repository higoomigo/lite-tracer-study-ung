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

    <form action="{{ route('wirausaha.store') }}" method="POST" x-data="wirausahaForm()" @submit.prevent="validateForm" class="p-6 bg-white rounded-lg shadow-md max-w-7xl mx-auto">
        @csrf

        <!-- Apakah Anda saat ini menjalankan usaha sendiri? -->
        <div>
            <label class="block text-sm font-semibold mb-1">Apakah Anda saat ini menjalankan usaha sendiri?</label>
            <select name="is_entrepreneur" x-model="is_entrepreneur" class="p-3 w-full bg-white border border-gray-300 rounded-md focus:ring focus:ring-blue-200 transition" required>
                <option value="" disabled selected>Pilih salah satu</option>
                <option value="yes">Ya</option>
                <option value="no">Tidak</option>
            </select>
        </div>

        <!-- Jika Ya, detail usaha -->
        <div x-show="is_entrepreneur === 'yes'" x-cloak class="space-y-6 mt-6">

            <!-- Jenis Usaha -->
            <div>
                <label class="block text-sm font-semibold mb-1">Jika Anda menjalankan usaha, jenis usaha apa yang Anda jalankan?</label>
                <select name="business_type" x-model="business_type" class="p-3 w-full bg-white border border-gray-300 rounded-md focus:ring focus:ring-blue-200 transition" :required="is_entrepreneur === 'yes'">
                    <option value="" disabled selected>Pilih jenis usaha</option>
                    <option value="makanan_minuman">Makanan & Minuman</option>
                    <option value="fashion">Fashion/Pakaian</option>
                    <option value="teknologi">Teknologi/IT</option>
                    <option value="pendidikan">Pendidikan</option>
                    <option value="kesehatan">Kesehatan</option>
                    <option value="jasa">Jasa</option>
                    <option value="pertanian">Pertanian/Perkebunan</option>
                    <option value="peternakan">Peternakan/Perikanan</option>
                    <option value="perdagangan">Perdagangan/Retail</option>
                    <option value="kreatif">Industri Kreatif</option>
                    <option value="lainnya">Lainnya (harap sebutkan)</option>
                </select>
                <input type="text" name="business_type_other" x-model="business_type_other" class="mt-2 p-3 w-full bg-white border border-gray-300 rounded-md focus:ring focus:ring-blue-200 transition" placeholder="Sebutkan jenis usaha lain" x-show="business_type === 'lainnya'" x-cloak :required="business_type === 'lainnya' && is_entrepreneur === 'yes'" :disabled="business_type !== 'lainnya'">
            </div>

            <!-- Nama Usaha -->
            <div>
                <label class="block text-sm font-semibold mb-1">Apa nama usaha yang Anda jalankan?</label>
                <input type="text" name="business_name" x-model="business_name" class="p-3 w-full bg-white border border-gray-300 rounded-md focus:ring focus:ring-blue-200 transition" placeholder="Tulis nama usaha Anda" :required="is_entrepreneur === 'yes'">
            </div>

            <!-- Sejak Kapan -->
            <!-- Dihilangkan sesuai permintaan -->

            <!-- Alasan Memulai Usaha -->
            <div>
                <label class="block text-sm font-semibold mb-1">Apa alasan utama Anda memulai usaha ini?</label>
                <select name="business_reason" x-model="business_reason" class="p-3 w-full bg-white border border-gray-300 rounded-md focus:ring focus:ring-blue-200 transition" :required="is_entrepreneur === 'yes'">
                    <option value="" disabled selected>Pilih salah satu</option>
                    <option value="opportunity">Kesempatan untuk berwirausaha</option>
                    <option value="no_job">Tidak mendapatkan pekerjaan yang sesuai</option>
                    <option value="interest">Menuruti minat atau hobi</option>
                    <option value="financial">Kebutuhan finansial</option>
                    <option value="other">Lainnya (harap sebutkan)</option>
                </select>
                <input type="text" name="business_reason_other" x-model="business_reason_other" class="mt-2 p-3 w-full bg-white border border-gray-300 rounded-md focus:ring focus:ring-blue-200 transition" placeholder="Sebutkan alasan lain" x-show="business_reason === 'other'" x-cloak :required="business_reason === 'other' && is_entrepreneur === 'yes'">
            </div>

            <!-- Sumber Pembiayaan Usaha -->
            <div>
                <label class="block text-sm font-semibold mb-1">Bagaimana Anda membiayai usaha Anda?</label>
                <select name="business_funding" x-model="business_funding" class="p-3 w-full bg-white border border-gray-300 rounded-md focus:ring focus:ring-blue-200 transition" :required="is_entrepreneur === 'yes'">
                    <option value="" disabled selected>Pilih salah satu</option>
                    <option value="personal">Uang pribadi</option>
                    <option value="parents">Uang orang tua</option>
                    <option value="loan">Pinjaman atau dana dari pihak lain</option>
                    <option value="institution">Modal usaha dari lembaga/instansi (beasiswa kewirausahaan, dll)</option>
                    <option value="other">Lainnya (harap sebutkan)</option>
                </select>
                <input type="text" name="business_funding_other" x-model="business_funding_other" class="mt-2 p-3 w-full bg-white border border-gray-300 rounded-md focus:ring focus:ring-blue-200 transition" placeholder="Sebutkan sumber dana lain" x-show="business_funding === 'other'" x-cloak :required="business_funding === 'other' && is_entrepreneur === 'yes'">
            </div>

            <!-- Perkembangan Usaha -->
            <div>
                <label class="block text-sm font-semibold mb-1">Apakah usaha yang Anda jalankan saat ini berkembang?</label>
                <select name="business_progress" x-model="business_progress" class="p-3 w-full bg-white border border-gray-300 rounded-md focus:ring focus:ring-blue-200 transition" :required="is_entrepreneur === 'yes'">
                    <option value="" disabled selected>Pilih salah satu</option>
                    <option value="very_good">Sangat berkembang</option>
                    <option value="good">Cukup berkembang</option>
                    <option value="stagnant">Stagnan</option>
                    <option value="decline">Menurun</option>
                </select>
            </div>

            <!-- Kendala Usaha -->
            <div>
                <label class="block text-sm font-semibold mb-1">Apa kendala utama yang Anda hadapi dalam menjalankan usaha ini?</label>
                <select name="business_obstacle" x-model="business_obstacle" class="p-3 w-full bg-white border border-gray-300 rounded-md focus:ring focus:ring-blue-200 transition" :required="is_entrepreneur === 'yes'">
                    <option value="" disabled selected>Pilih salah satu</option>
                    <option value="capital">Modal terbatas</option>
                    <option value="competition">Persaingan yang tinggi</option>
                    <option value="skill">Kurangnya keterampilan atau pengetahuan di bidang tertentu</option>
                    <option value="marketing">Kesulitan dalam pemasaran atau promosi</option>
                    <option value="other">Lainnya (harap sebutkan)</option>
                </select>
                <input type="text" name="business_obstacle_other" x-model="business_obstacle_other" class="mt-2 p-3 w-full bg-white border border-gray-300 rounded-md focus:ring focus:ring-blue-200 transition" placeholder="Sebutkan kendala lain" x-show="business_obstacle === 'other'" x-cloak :required="business_obstacle === 'other' && is_entrepreneur === 'yes'">
            </div>

            <!-- Pernah Pelatihan -->
            <div>
                <label class="block text-sm font-semibold mb-1">Apakah Anda pernah mendapatkan pelatihan atau pembinaan kewirausahaan?</label>
                <select name="entrepreneur_training" x-model="entrepreneur_training" class="p-3 w-full bg-white border border-gray-300 rounded-md focus:ring focus:ring-blue-200 transition" :required="is_entrepreneur === 'yes'">
                    <option value="" disabled selected>Pilih salah satu</option>
                    <option value="yes">Ya</option>
                    <option value="no">Tidak</option>
                </select>
                <input type="text" name="entrepreneur_training_source" x-model="entrepreneur_training_source" class="mt-2 p-3 w-full" placeholder="Sebutkan sumber pelatihan" x-show="entrepreneur_training === 'yes'" x-cloak :required="entrepreneur_training === 'yes' && is_entrepreneur === 'yes'">
            </div>

            <!-- Rencana Jangka Panjang -->
            <div>
                <label class="block text-sm font-semibold mb-1">Apa rencana jangka panjang Anda untuk usaha ini?</label>
                <select name="business_plan" x-model="business_plan" class="p-3 w-full bg-white border border-gray-300 rounded-md focus:ring focus:ring-blue-200 transition" :required="is_entrepreneur === 'yes'">
                    <option value="" disabled selected>Pilih salah satu</option>
                    <option value="expand">Ekspansi dan memperbesar usaha</option>
                    <option value="maintain">Menjaga kestabilan dan mempertahankan usaha</option>
                    <option value="stop">Berhenti dan mencari peluang usaha baru</option>
                    <option value="other">Lainnya</option>
                </select>
                <input type="text" name="business_plan_other" x-model="business_plan_other" class="mt-2 p-3 w-full bg-white border border-gray-300 rounded-md focus:ring focus:ring-blue-200 transition" placeholder="Sebutkan rencana lain" x-show="business_plan === 'other'" x-cloak :required="business_plan === 'other' && is_entrepreneur === 'yes'">
            </div>

            <!-- Dukungan/Bantuan -->
            <div>
                <label class="block text-sm font-semibold mb-1">Apakah Anda membutuhkan dukungan atau bantuan terkait dengan usaha Anda?</label>
                <select name="business_support" x-model="business_support" class="p-3 w-full bg-white border border-gray-300 rounded-md focus:ring focus:ring-blue-200 transition" :required="is_entrepreneur === 'yes'">
                    <option value="" disabled selected>Pilih salah satu</option>
                    <option value="yes">Ya</option>
                    <option value="no">Tidak</option>
                </select>
                <div x-show="business_support === 'yes'" x-cloak class="mt-2">
                    <label class="block text-sm font-semibold mb-1">Jika Ya, jenis dukungan atau bantuan apa yang Anda butuhkan?</label>
                    <select name="business_support_type" x-model="business_support_type" class="p-3 w-full bg-white border border-gray-300 rounded-md focus:ring focus:ring-blue-200 transition">
                        <option value="" disabled selected>Pilih salah satu</option>
                        <option value="funding">Pendanaan/Modal</option>
                        <option value="training">Pelatihan bisnis</option>
                        <option value="mentoring">Pembinaan atau mentoring</option>
                        <option value="marketing">Pemasaran atau jaringan</option>
                        <option value="other">Lainnya</option>
                    </select>
                    <input type="text" name="business_support_type_other" x-model="business_support_type_other" class="mt-2 p-3 w-full bg-white border border-gray-300 rounded-md focus:ring focus:ring-blue-200 transition" placeholder="Sebutkan dukungan lain" x-show="business_support_type === 'other'" x-cloak :required="business_support_type === 'other' && business_support === 'yes' && is_entrepreneur === 'yes'">
                </div>
            </div>

            <!-- Rencana Pasar Internasional -->
            <div>
                <label class="block text-sm font-semibold mb-1">Apakah Anda berencana untuk mengembangkan usaha ke pasar internasional?</label>
                <select name="business_international" x-model="business_international" class="p-3 w-full bg-white border border-gray-300 rounded-md focus:ring focus:ring-blue-200 transition" :required="is_entrepreneur === 'yes'">
                    <option value="" disabled selected>Pilih salah satu</option>
                    <option value="yes">Ya</option>
                    <option value="no">Tidak</option>
                    <option value="maybe">Mungkin di masa depan</option>
                </select>
            </div>

            <!-- Tujuan Usaha -->
            <div>
                <label class="block text-sm font-semibold mb-1">Apa tujuan utama Anda dalam menjalankan usaha ini?</label>
                <select name="business_goal" x-model="business_goal" class="p-3 w-full bg-white border border-gray-300 rounded-md focus:ring focus:ring-blue-200 transition" :required="is_entrepreneur === 'yes'">
                    <option value="" disabled selected>Pilih salah satu</option>
                    <option value="profit">Mendapatkan keuntungan finansial</option>
                    <option value="employment">Memberikan lapangan pekerjaan</option>
                    <option value="social">Memberikan kontribusi sosial</option>
                    <option value="innovation">Mengembangkan ide atau produk yang inovatif</option>
                    <option value="other">Lainnya</option>
                </select>
                <input type="text" name="business_goal_other" x-model="business_goal_other" class="mt-2 p-3 w-full bg-white border border-gray-300 rounded-md focus:ring focus:ring-blue-200 transition" placeholder="Sebutkan tujuan lain" x-show="business_goal === 'other'" x-cloak :required="business_goal === 'other' && is_entrepreneur === 'yes'">
            </div>

            <!-- Memiliki Karyawan -->
            <div>
                <label class="block text-sm font-semibold mb-1">Apakah Anda memiliki karyawan?</label>
                <select name="has_employee" x-model="has_employee" class="p-3 w-full bg-white border border-gray-300 rounded-md focus:ring focus:ring-blue-200 transition" :required="is_entrepreneur === 'yes'">
                    <option value="" disabled selected>Pilih salah satu</option>
                    <option value="yes">Ya</option>
                    <option value="no">Tidak</option>
                </select>
                <input type="number" name="employee_count" x-model="employee_count" class="mt-2 p-3 w-full bg-white border border-gray-300 rounded-md focus:ring focus:ring-blue-200 transition" placeholder="Jumlah karyawan" min="1" x-show="has_employee === 'yes'" x-cloak :required="has_employee === 'yes' && is_entrepreneur === 'yes'">
            </div>

            <!-- Saran atau Tips -->
            <div>
                <label class="block text-sm font-semibold mb-1">Jika Anda sudah memiliki pengalaman dalam berwirausaha, apakah Anda memiliki saran atau tips yang ingin Anda bagi dengan calon pengusaha lainnya?</label>
                <textarea name="business_tips" x-model="business_tips" class="p-3 w-full bg-white border border-gray-300 rounded-md focus:ring focus:ring-blue-200 transition" rows="3" placeholder="Tulis saran atau tips yang ingin dibagikan"></textarea>
            </div>
        </div>

        <!-- Jika Tidak -->
        <div x-show="is_entrepreneur === 'no'" x-cloak class="mt-6">
            <div class="bg-blue-50 border border-blue-200 rounded-md p-4 text-blue-700 text-center">
                <p>Terima kasih telah mengisi form tracer study.<br>Anda memilih untuk <b>belum menjalankan usaha sendiri</b> saat ini.</p>
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

    <script>
    function wirausahaForm() {
        return {
            is_entrepreneur: '',
            business_type: '',
            business_type_other: '',
            business_name: '',
            business_start: '',
            business_reason: '',
            business_reason_other: '',
            business_funding: '',
            business_funding_other: '',
            business_progress: '',
            business_obstacle: '',
            business_obstacle_other: '',
            entrepreneur_training: '',
            entrepreneur_training_source: '',
            business_plan: '',
            business_plan_other: '',
            business_support: '',
            business_support_type: '',
            business_support_type_other: '',
            business_international: '',
            business_goal: '',
            business_goal_other: '',
            has_employee: '',
            employee_count: '',
            business_tips: '',
            isValid: false,

            validateForm(event) {
                if (!this.is_entrepreneur) {
                    alert('Silakan pilih apakah Anda menjalankan usaha sendiri.');
                    this.isValid = false;
                    return;
                }
                if (this.is_entrepreneur === 'yes') {
                    if (
                        !this.business_type ||
                        (this.business_type === 'lainnya' && !this.business_type_other) ||
                        !this.business_name ||
                        !this.business_reason ||
                        (this.business_reason === 'other' && !this.business_reason_other) ||
                        !this.business_funding ||
                        (this.business_funding === 'other' && !this.business_funding_other) ||
                        !this.business_progress ||
                        !this.business_obstacle ||
                        (this.business_obstacle === 'other' && !this.business_obstacle_other) ||
                        !this.entrepreneur_training ||
                        (this.entrepreneur_training === 'yes' && !this.entrepreneur_training_source) ||
                        !this.business_plan ||
                        (this.business_plan === 'other' && !this.business_plan_other) ||
                        !this.business_support ||
                        (this.business_support === 'yes' && !this.business_support_type) ||
                        (this.business_support_type === 'other' && !this.business_support_type_other) ||
                        !this.business_international ||
                        !this.business_goal ||
                        (this.business_goal === 'other' && !this.business_goal_other) ||
                        !this.has_employee ||
                        (this.has_employee === 'yes' && (!this.employee_count || this.employee_count < 1))
                    ) {
                        alert('Silakan lengkapi semua data usaha Anda.');
                        this.isValid = false;
                        return;
                    }
                }
                this.isValid = true;
                event.target.closest('form').submit();
            }
        };
    }
    </script>

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