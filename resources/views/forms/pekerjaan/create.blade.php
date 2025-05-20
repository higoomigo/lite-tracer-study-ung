@extends('layouts.dashboard')
@section('title-dash', 'Dashboard User')
@section('content')

<main class="p-6">

    <div class="mb-8">
        <h1 class="text-2xl font-bold text-gray-800 mb-2">Form Tracer Pekerjaan</h1>
        <p>Jawab pertanyaan berikut untuk mengisi pendataan pekerjaan Alumni</p>
    </div>
    <div class="p-6 bg-white rounded-lg shadow-md max-w-7xl mx-auto">
        <form action="{{ route('pekerjaan.store') }}" method="POST" x-data="tracerForm()" @submit.prevent="validateForm">
            @csrf
            <div class="space-y-6">
            <!-- Pekerjaan Saat Ini -->
            <!-- Dynamic Tracer Study Form -->
            <div class="space-y-6">

                <!-- Are you currently employed? -->
                <div>
                <label for="employed" class="block text-sm font-semibold mb-1">Apakah Anda sedang bekerja saat ini?</label>
                <select id="employed" name="employed" class="p-3 w-full bg-white border border-gray-300 rounded-md"
                    x-model="employed" required>
                    <option value="" disabled selected>Pilih salah satu</option>
                    <option value="yes">Ya</option>
                    <option value="no">Tidak</option>
                </select>
                </div>

                <!-- If Employed -->
                <template x-if="employed === 'yes'">
                <div class="space-y-6">
                    <div>
                    <label for="industri" class="block text-sm font-semibold">Di industri apa Anda bekerja?</label>
                    <select id="industri" name="industri" class="mt-2 p-3 w-full bg-white border border-gray-300 rounded-md" x-model="industri" required>
                        <option value="" disabled selected>Pilih salah satu</option>
                        <option value="teknologi_informasi">Teknologi Informasi</option>
                        <option value="pendidikan">Pendidikan</option>
                        <option value="kesehatan">Kesehatan</option>
                        <option value="keuangan">Keuangan</option>
                        <option value="pemerintahan">Pemerintahan</option>
                        <option value="manufaktur">Manufaktur</option>
                        <option value="retail">Retail</option>
                        <option value="lainnya">Lainnya</option>
                    </select>
                    </div>

                    <!-- Status Pekerjaan -->
                    <div>
                    <label for="status_pekerjaan" class="block text-sm font-semibold">Apakah Anda bekerja full-time, part-time, atau sebagai freelancer?</label>
                    <select id="status_pekerjaan" name="status_pekerjaan" class="mt-2 p-3 w-full bg-white border border-gray-300 rounded-md" x-model="status_pekerjaan" required>
                        <option value="" disabled selected>Pilih salah satu</option>
                        <option value="full_time">Full-time</option>
                        <option value="part_time">Part-time</option>
                        <option value="freelancer">Freelancer</option>
                    </select>
                    </div>

                    <!-- Gaji Bulanan -->
                    <div>
                    <label for="gaji" class="block text-sm font-semibold">Berapa gaji bulanan Anda (dalam IDR)?</label>
                    <input 
                        type="text" 
                        id="gaji" 
                        name="gaji" 
                        class="mt-2 p-3 w-full bg-white border border-gray-300 rounded-md" 
                        placeholder="Masukkan gaji bulanan"
                        x-ref="gajiInput"
                        x-model="gaji"
                        x-on:input="
                            let val = $refs.gajiInput.value.replace(/\D/g, '');
                            $refs.gajiInput.value = val.replace(/\B(?=(\d{3})+(?!\d))/g, '.');
                            gaji = $refs.gajiInput.value;
                        "
                        autocomplete="off"
                        required
                    >
                    </div>

                    <!-- Lokasi Pekerjaan -->
                    <div>
                    <label for="lokasi_pekerjaan" class="block text-sm font-semibold">Dimana lokasi tempat Anda bekerja?</label>
                    <select id="lokasi_pekerjaan" name="lokasi_pekerjaan" class="mt-2 p-3 w-full bg-white border border-gray-300 rounded-md" x-model="lokasi_pekerjaan" required>
                        <option value="" disabled selected>Pilih salah satu</option>
                        <option value="dalam_daerah">Dalam Daerah Provinsi Gorontalo</option>
                        <option value="luar_daerah">Luar Daerah Provinsi Gorontalo</option>
                        <option value="luar_negeri">Luar Negeri</option>
                    </select>
                    </div>

                    <!-- Waktu Tunggu -->
                    <div>
                    <label for="waktu_tunggu" class="block text-sm font-semibold">Berapa lama Anda menunggu setelah lulus untuk mendapatkan pekerjaan pertama?</label>
                    <input type="number" id="waktu_tunggu" name="waktu_tunggu" class="mt-2 p-3 w-full bg-white border border-gray-300 rounded-md" placeholder="Masukkan waktu tunggu dalam bulan" x-model="waktu_tunggu" required>
                    </div>

                    <!-- Faktor Pemilihan Pekerjaan -->
                    <div>
                    <label for="faktor_pekerjaan" class="block text-sm font-semibold">Apa yang menjadi faktor utama dalam memilih pekerjaan pertama Anda setelah lulus?</label>
                    <select id="faktor_pekerjaan" name="faktor_pekerjaan" class="mt-2 p-3 w-full bg-white border border-gray-300 rounded-md" x-model="faktor_pekerjaan" required>
                        <option value="" disabled selected>Pilih salah satu</option>
                        <option value="gaji">Gaji</option>
                        <option value="lokasi">Lokasi pekerjaan</option>
                        <option value="kesempatan_pengembangan_karir">Kesempatan pengembangan karir</option>
                        <option value="budaya_perusahaan">Budaya perusahaan</option>
                        <option value="kesempatan_kerja_jarak_jauh">Kesempatan untuk bekerja jarak jauh</option>
                        <option value="lainnya">Lainnya</option>
                    </select>
                    </div>
                </div>
                </template>

                <!-- If Unemployed -->
                <template x-if="employed === 'no'">
                <div class="space-y-6">

                    <!-- Ever Employed? -->
                    <div>
                    <label class="block text-sm font-semibold mb-1">Apakah Anda pernah bekerja sebelumnya?</label>
                    <select name="ever_employed" class="p-3 w-full bg-white border border-gray-300 rounded-md"
                        x-model="everEmployed" required>
                        <option value="" disabled selected>Pilih salah satu</option>
                        <option value="yes">Ya</option>
                        <option value="no">Tidak</option>
                    </select>
                    </div>

                    <!-- If Previously Employed -->
                    <template x-if="everEmployed === 'yes'">
                    <div class="space-y-6">
                        <div>
                        <label class="block text-sm font-semibold mb-1">Apa jabatan pekerjaan terakhir Anda?</label>
                        <select name="last_job_title" class="p-3 w-full bg-white border border-gray-300 rounded-md" x-model="last_job_title" required>
                            <option value="" disabled selected>Pilih salah satu</option>
                            <option value="staff">Staff</option>
                            <option value="supervisor">Supervisor</option>
                            <option value="manager">Manager</option>
                            <option value="assistant_manager">Assistant Manager</option>
                            <option value="director">Direktur</option>
                            <option value="owner">Pemilik Usaha</option>
                            <option value="intern">Magang</option>
                            <option value="engineer">Engineer</option>
                            <option value="analyst">Analis</option>
                            <option value="consultant">Konsultan</option>
                            <option value="teacher">Guru/Dosen</option>
                            <option value="admin">Administrasi</option>
                            <option value="sales">Sales/Marketing</option>
                            <option value="technician">Teknisi</option>
                            <option value="other">Lainnya</option>
                        </select>
                        </div>
                        <div>
                        <label class="block text-sm font-semibold mb-1">Di perusahaan mana Anda terakhir bekerja?</label>
                        <input type="text" name="last_company" class="p-3 w-full bg-white border border-gray-300 rounded-md" x-model="last_company" required>
                        </div>
                        <div>
                        <label class="block text-sm font-semibold mb-1">Mengapa Anda meninggalkan pekerjaan terakhir Anda?</label>
                        <select name="reason_left" class="p-3 w-full bg-white border border-gray-300 rounded-md" x-model="reason_left" required>
                            <option value="" disabled selected>Pilih salah satu</option>
                            <option value="personal">Alasan pribadi</option>
                            <option value="layoff">PHK</option>
                            <option value="career_change">Ganti karir</option>
                            <option value="study">Melanjutkan pendidikan</option>
                            <option value="other">Lainnya</option>
                        </select>
                        </div>
                        <div>
                        <label class="block text-sm font-semibold mb-1">Apa yang sedang Anda lakukan saat ini?</label>
                        <select name="current_activity" class="p-3 w-full bg-white border border-gray-300 rounded-md" x-model="current_activity" required>
                            <option value="" disabled selected>Pilih salah satu</option>
                            <option value="looking_job">Mencari pekerjaan</option>
                            <option value="considering_study">Mempertimbangkan studi lanjut</option>
                            <option value="building_business">Membangun usaha</option>
                            <option value="other">Lainnya</option>
                        </select>
                        </div>
                    </div>
                    </template>

                    <!-- If Never Employed -->
                    <template x-if="everEmployed === 'no'">
                    <div class="space-y-6">
                        <div>
                        <label class="block text-sm font-semibold mb-1">Apa alasan utama Anda belum pernah bekerja?</label>
                        <select name="never_employed_reason" class="p-3 w-full bg-white border border-gray-300 rounded-md" x-model="never_employed_reason" required>
                            <option value="" disabled selected>Pilih salah satu</option>
                            <option value="no_opportunity">Kurangnya kesempatan kerja</option>
                            <option value="study">Melanjutkan pendidikan</option>
                            <option value="family">Tanggung jawab keluarga</option>
                            <option value="health">Alasan kesehatan</option>
                            <option value="other">Lainnya</option>
                        </select>
                        </div>
                        <div>
                        <label class="block text-sm font-semibold mb-1">Apakah Anda sedang mencari pekerjaan?</label>
                        <select name="never_employed_looking" class="p-3 w-full bg-white border border-gray-300 rounded-md" x-model="never_employed_looking" required>
                            <option value="" disabled selected>Pilih salah satu</option>
                            <option value="yes">Ya</option>
                            <option value="no">Tidak</option>
                        </select>
                        </div>
                        <div>
                        <label class="block text-sm font-semibold mb-1">Apakah Anda mempertimbangkan untuk memulai usaha sendiri?</label>
                        <select name="never_employed_business" class="p-3 w-full bg-white border border-gray-300 rounded-md" x-model="never_employed_business" required>
                            <option value="" disabled selected>Pilih salah satu</option>
                            <option value="yes">Ya</option>
                            <option value="no">Tidak</option>
                            <option value="not_sure">Belum yakin</option>
                        </select>
                        </div>
                    </div>
                    </template>

                    <!-- For all unemployed (previously or never) -->
                    <template x-if="everEmployed === 'yes' || everEmployed === 'no'">
                    <div class="space-y-6">
                        <div>
                        <label class="block text-sm font-semibold mb-1">Bidang atau industri apa yang Anda minati untuk bekerja?</label>
                        <input type="text" name="desired_industry" class="p-3 w-full bg-white border border-gray-300 rounded-md" x-model="desired_industry" required>
                        </div>
                        <div>
                        <label class="block text-sm font-semibold mb-1">Apakah Anda berencana melanjutkan pendidikan?</label>
                        <select name="plan_study" class="p-3 w-full bg-white border border-gray-300 rounded-md" x-model="plan_study" required>
                            <option value="" disabled selected>Pilih salah satu</option>
                            <option value="yes">Ya</option>
                            <option value="no">Tidak</option>
                            <option value="maybe">Mungkin di masa depan</option>
                        </select>
                        </div>
                    </div>
                    </template>
                </div>
                </template>

                <!-- General Information (for all respondents) -->
                <div class="space-y-6">
                <div>
                    <label class="block text-sm font-semibold mb-1">Apakah Anda sudah memulai usaha sendiri?</label>
                    <select name="has_business" class="p-3 w-full bg-white border border-gray-300 rounded-md"
                    x-model="hasBusiness" required>
                    <option value="" disabled selected>Pilih salah satu</option>
                    <option value="yes">Ya</option>
                    <option value="no">Tidak</option>
                    </select>
                </div>
                <template x-if="hasBusiness === 'yes'">
                    <div>
                    <label class="block text-sm font-semibold mb-1">Jika ya, sebutkan nama usaha Anda.</label>
                    <input type="text" name="business_name" class="p-3 w-full bg-white border border-gray-300 rounded-md" x-model="business_name" required>
                    </div>
                </template>
                <div>
                    <label class="block text-sm font-semibold mb-1">Apakah Anda tertarik untuk kembali ke sekolah melanjutkan pendidikan?</label>
                    <select name="interest_return_school" class="p-3 w-full bg-white border border-gray-300 rounded-md" x-model="interest_return_school" required>
                    <option value="" disabled selected>Pilih salah satu</option>
                    <option value="yes">Ya</option>
                    <option value="no">Tidak</option>
                    <option value="considering">Mempertimbangkan opsi</option>
                    </select>
                </div>
                </div>
            </div>

            <!-- Alpine.js for dynamic form logic -->
            <script src="//unpkg.com/alpinejs" defer></script>
            <script>
            function tracerForm() {
                return {
                    employed: '',
                    industri: '',
                    status_pekerjaan: '',
                    gaji: '',
                    lokasi_pekerjaan: '',
                    waktu_tunggu: '',
                    faktor_pekerjaan: '',
                    everEmployed: '',
                    last_job_title: '',
                    last_company: '',
                    reason_left: '',
                    current_activity: '',
                    never_employed_reason: '',
                    never_employed_looking: '',
                    never_employed_business: '',
                    desired_industry: '',
                    plan_study: '',
                    hasBusiness: '',
                    business_name: '',
                    interest_return_school: '',
                    isValid: false,

                    // Grouped validation logic
                    validateEmployed() {
                        if (!this.employed) return false;
                        if (this.employed === 'yes') {
                            return this.industri && this.status_pekerjaan && this.gaji && this.lokasi_pekerjaan && this.waktu_tunggu && this.faktor_pekerjaan;
                        }
                        if (this.employed === 'no') {
                            if (!this.everEmployed) return false;
                            if (this.everEmployed === 'yes') {
                                if (!this.last_job_title || !this.last_company || !this.reason_left || !this.current_activity) return false;
                            }
                            if (this.everEmployed === 'no') {
                                if (!this.never_employed_reason || !this.never_employed_looking || !this.never_employed_business) return false;
                            }
                            if (!this.desired_industry || !this.plan_study) return false;
                        }
                        return true;
                    },
                    validateGeneral() {
                        if (!this.hasBusiness) return false;
                        if (this.hasBusiness === 'yes' && !this.business_name) return false;
                        if (!this.interest_return_school) return false;
                        return true;
                    },
                    validateForm(event) {
                        // Validate all
                        if (!this.validateEmployed()) {
                            alert('Silakan lengkapi semua data pekerjaan.');
                            this.isValid = false;
                            return;
                        }
                        if (!this.validateGeneral()) {
                            alert('Silakan lengkapi data umum.');
                            this.isValid = false;
                            return;
                        }
                        this.isValid = true;
                        // Submit if valid
                        event.target.closest('form').submit();
                    },
                    // Watch for changes to update isValid for button state
                    init() {
                        this.$watch(
                            () => [
                                this.employed, this.industri, this.status_pekerjaan, this.gaji, this.lokasi_pekerjaan, this.waktu_tunggu, this.faktor_pekerjaan,
                                this.everEmployed, this.last_job_title, this.last_company, this.reason_left, this.current_activity,
                                this.never_employed_reason, this.never_employed_looking, this.never_employed_business,
                                this.desired_industry, this.plan_study,
                                this.hasBusiness, this.business_name, this.interest_return_school
                            ],
                            () => {
                                this.isValid = this.validateEmployed() && this.validateGeneral();
                            },
                            { deep: true }
                        );
                    }
                }
            }
            </script>

            <!-- Button Submit -->
            <div class="text-center">
                <button 
                type="submit" 
                class="mt-8 px-8 py-3 bg-gradient-to-r from-blue-600 to-blue-400 text-white font-semibold rounded-lg shadow hover:from-blue-700 hover:to-blue-500 transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-blue-300"
                :disabled="!isValid"
                x-bind:class="{'opacity-50 cursor-not-allowed': !isValid}"
                >
                Kirim Jawaban
                </button>
                <p class="mt-2 text-sm text-gray-500">Pastikan semua data sudah benar sebelum mengirim.</p>
            </div>
            </div>
        </form>
    </div>
</main>

@endsection
