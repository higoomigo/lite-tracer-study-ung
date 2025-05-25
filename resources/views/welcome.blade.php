
@extends('layouts.landing.main_app')
@section('title-dash', 'Tracer Study - Teknik Informatika UNG')
@extends('partials.navbar')
@section('content')    
    <!-- Hero Section -->
    <section id="home" class="hero min-h-screen flex items-center pt-16">
        <div class="container mx-auto px-6 py-24 text-center text-white">
            <h1 class="text-4xl md:text-6xl font-bold mb-4 animate__animated animate__fadeInDown">Jelajahi Keberhasilan Lulusan TI - UNG</h1>
            <p class="text-xl md:text-2xl mb-8 animate__animated animate__fadeInUp">Lulusan kami telah tersebar di dunia kerja dan pendidikan di dalam negeri dan luar negeri.</p>
            <div class="flex flex-col md:flex-row justify-center space-y-4 md:space-y-0 md:space-x-4">
                <a href="#statistics" class="btn-navy px-8 py-3 rounded-full font-semibold text-lg shadow-lg">Lihat Statistik Lulusan Kami</a>
                <a href="#programs" class="bg-white text-navy px-8 py-3 rounded-full font-semibold text-lg shadow-lg hover:bg-gray-100 transition transform hover:-translate-y-1">Pelajari Program Studi</a>
            </div>
        </div>
    </section>

    <!-- Statistics Section -->
    <section id="statistics" class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl md:text-4xl font-bold text-center text-navy mb-16 scroll-reveal active">Statistik Lulusan</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-16">
                <div class="bg-white rounded-lg shadow-lg p-6 stat-card scroll-reveal active">
                    <h3 class="text-xl font-semibold text-navy mb-4">Persebaran Karir Lulusan</h3>
                    <div class="aspect-w-16 aspect-h-9">
                        <canvas id="locationChart" class="w-full" style="display: block; box-sizing: border-box; height: 400px; width: 400px;" width="850" height="850"></canvas>
                    </div>
                    <div class="mt-4 text-sm text-gray-600">
                        <p>* Data berdasarkan tracer study tahun 2023</p>
                    </div>
                </div>
                
                <div class="bg-white rounded-lg shadow-lg p-6 stat-card scroll-reveal active">
                    <h3 class="text-xl font-semibold text-navy mb-4">Jenjang Lanjut Lulusan</h3>
                    <div class="aspect-w-16 aspect-h-9">
                        <canvas id="careerChart" class="w-full" style="display: block; box-sizing: border-box; height: 340px; width: 680px;" width="850" height="425"></canvas>
                    </div>
                    <div class="mt-4 text-sm text-gray-600">
                        <p>* Data berdasarkan tracer study tahun 2023</p>
                    </div>
                </div>
            </div>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
                <div class="bg-white rounded-lg shadow-lg p-6 text-center stat-card scroll-reveal active">
                    <div class="text-4xl font-bold text-navy mb-2 count-number count-animation">{{ round($persentaseKarir['pekerjaan']) }}%</div>
                    <p class="text-gray-600">Lulusan Terserap Dunia Kerja</p>
                </div>
                <div class="bg-white rounded-lg shadow-lg p-6 text-center stat-card scroll-reveal active">
                    <div class="text-4xl font-bold text-navy mb-2 count-number count-animation">{{ round($rataRataWaktuKerja) }}</div>
                    <p class="text-gray-600">Bulan Rata-rata Waktu Tunggu</p>
                </div>
                <div class="bg-white rounded-lg shadow-lg p-6 text-center stat-card scroll-reveal active">
                    <div class="text-4xl font-bold text-navy mb-2 count-number count-animation">{{ round($persentaseKarir['lanjut_studi']) }}%</div>
                    <p class="text-gray-600">Lulusan Melanjutkan Studi</p>
                </div>
                <div class="bg-white rounded-lg shadow-lg p-6 text-center stat-card scroll-reveal active">
                    <div class="text-4xl font-bold text-navy mb-2 count-number count-animation">{{ round($persentaseKarir['wirausaha']) }}%</div>
                    <p class="text-gray-600">Lulusan Berwirausaha</p>
                </div>
            </div>
            
            <div class="text-center">
                <a href="{{ route('statistik-detail') }}" class="btn-navy px-8 py-3 rounded-full font-semibold text-lg shadow-lg inline-block">Lihat Detail Statistik</a>
            </div>
        </div>
    </section>

    <!-- Programs Section -->
    <section id="programs" class="py-20">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl md:text-4xl font-bold text-center text-navy mb-16 scroll-reveal active">Program Studi Fakultas Teknik Informatika</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-white rounded-lg shadow-lg overflow-hidden program-card scroll-reveal active">
                    <div class="h-48 bg-blue-100 flex items-center justify-center">
                        <svg class="w-24 h-24 text-navy" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M3 5a2 2 0 012-2h10a2 2 0 012 2v8a2 2 0 01-2 2h-2.22l.123.489.804.804A1 1 0 0113 18H7a1 1 0 01-.707-1.707l.804-.804L7.22 15H5a2 2 0 01-2-2V5zm5.771 7H5V5h10v7H8.771z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-bold text-navy mb-3">Sistem Informasi</h3>
                        <p class="text-gray-600 mb-4">Program studi yang
                            memfokuskan pada pengembangan sistem informasi untuk mendukung proses 
                            bisnis dan pengambilan keputusan dalam organisasi.</p>
                                                    <h4 class="font-semibold text-navy mb-2">Manfaat:</h4>
                                                    <ul class="list-disc list-inside text-gray-600 mb-6">
                                                        <li>Peluang karir yang luas di berbagai industri</li>
                                                        <li>Kemampuan menganalisis dan merancang sistem informasi</li>
                                                        <li>Keterampilan dalam manajemen data dan basis data</li>
                                                        <li>Pemahaman tentang proses bisnis dan teknologi informasi</li>
                                                    </ul>
                                                    <a href="#" class="text-navy font-semibold hover:underline">Pelajari lebih lanjut →</a>
                                                </div>
                                            </div>
                                            
                                            <div class="bg-white rounded-lg shadow-lg overflow-hidden program-card scroll-reveal active">
                                                <div class="h-48 bg-blue-100 flex items-center justify-center">
                                                    <svg class="w-24 h-24 text-navy" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z"></path>
                                                    </svg>
                                                </div>
                                                <div class="p-6">
                                                    <h3 class="text-2xl font-bold text-navy mb-3">Pendidikan Teknologi Informasi</h3>
                                                    <p class="text-gray-600 mb-4">Program studi yang mempersiapkan mahasiswa untuk menjadi pendidik profesional dalam bidang teknologi informasi dan komputer.</p>
                                                    <h4 class="font-semibold text-navy mb-2">Manfaat:</h4>
                                                    <ul class="list-disc list-inside text-gray-600 mb-6">
                                                        <li>Kemampuan mengajar dan merancang pembelajaran teknologi</li>
                                                        <li>Penguasaan teknologi informasi dan pemrograman</li>
                                                        <li>Peluang karir sebagai pendidik atau profesional IT</li>
                                                        <li>Kontribusi dalam pengembangan pendidikan berbasis teknologi</li>
                                                    </ul>
                                                    <a href="#" class="text-navy font-semibold hover:underline">Pelajari lebih lanjut →</a>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="mt-12 text-center">
                                            <a href="#" class="btn-navy px-8 py-3 rounded-full font-semibold text-lg shadow-lg inline-block">Daftar Sekarang</a>
                                        </div>
                                    </div>
                                </section>

                                <!-- Testimonials Section -->
                                <section id="testimonials" class="py-20 bg-gray-50">
                                    <div class="container mx-auto px-6">
                                        <h2 class="text-3xl md:text-4xl font-bold text-center text-navy mb-16 scroll-reveal active">Testimonial Lulusan</h2>
                                        
                                        <div class="carousel">
                                            <div class="carousel-inner" style="transform: translateX(-100%);">
                                                <!-- Testimonial 1 -->
                                                <div class="carousel-item">
                                                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                                                        <div class="bg-white rounded-lg shadow-lg p-6 testimonial-card">
                                                            <div class="flex items-center mb-4">
                                                                <div class="w-16 h-16 rounded-full bg-blue-100 flex items-center justify-center mr-4">
                                                                    <svg class="w-10 h-10 text-navy" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                                                                    </svg>
                                                                </div>
                                                                <div>
                                                                    <h4 class="font-bold text-navy">Ahmad Rizki</h4>
                                                                    <p class="text-gray-600">Sistem Informasi 2018</p>
                                                                    <p class="text-sm text-blue-600">Software Engineer di Tokopedia</p>
                                                                </div>
                                                            </div>
                                                            <div class="relative">
                                                                <svg class="w-8 h-8 text-gray-300 absolute -top-4 -left-2" fill="currentColor" viewBox="0 0 24 24">
                                                                    <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"></path>
                                                                </svg>
                                                                <p class="text-gray-600 italic">UNG 
                            memberikan saya fondasi yang kuat dalam pengembangan perangkat lunak. 
                            Dosen-dosen yang kompeten dan kurikulum yang relevan dengan industri 
                            membuat saya siap menghadapi dunia kerja.</p>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="bg-white rounded-lg shadow-lg p-6 testimonial-card">
                                                            <div class="flex items-center mb-4">
                                                                <div class="w-16 h-16 rounded-full bg-blue-100 flex items-center justify-center mr-4">
                                                                    <svg class="w-10 h-10 text-navy" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                                                                    </svg>
                                                                </div>
                                                                <div>
                                                                    <h4 class="font-bold text-navy">Siti Nurhaliza</h4>
                                                                    <p class="text-gray-600">Pendidikan TI 2017</p>
                                                                    <p class="text-sm text-blue-600">Guru TIK di SMAN 1 Gorontalo</p>
                                                                </div>
                                                            </div>
                                                            <div class="relative">
                                                                <svg class="w-8 h-8 text-gray-300 absolute -top-4 -left-2" fill="currentColor" viewBox="0 0 24 24">
                                                                    <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"></path>
                                                                </svg>
                                                                <p class="text-gray-600 italic">Program
                            Pendidikan TI di UNG membekali saya dengan keterampilan mengajar dan 
                            pengetahuan teknologi yang sangat bermanfaat. Saya bisa langsung 
                            menerapkan ilmu yang didapat untuk mengembangkan metode pembelajaran 
                            berbasis teknologi.
                        </p>
                        </div>
                            </div>
                            
                            <div class="bg-white rounded-lg shadow-lg p-6 testimonial-card">
                                <div class="flex items-center mb-4">
                                    <div class="w-16 h-16 rounded-full bg-blue-100 flex items-center justify-center mr-4">
                                        <svg class="w-10 h-10 text-navy" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-navy">Budi Santoso</h4>
                                        <p class="text-gray-600">Sistem Informasi 2016</p>
                                        <p class="text-sm text-blue-600">Founder Startup GoTech</p>
                                    </div>
                                </div>
                                <div class="relative">
                                    <svg class="w-8 h-8 text-gray-300 absolute -top-4 -left-2" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"></path>
                                    </svg>
                                    <p class="text-gray-600 italic">UNG 
tidak hanya mengajarkan saya tentang teknologi, tapi juga kewirausahaan.
 Berkat bimbingan dosen dan program inkubasi bisnis kampus, saya 
berhasil mendirikan startup yang kini memiliki 20 karyawan.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Testimonial 2 -->
                    <div class="carousel-item">
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                            <div class="bg-white rounded-lg shadow-lg p-6 testimonial-card">
                                <div class="flex items-center mb-4">
                                    <div class="w-16 h-16 rounded-full bg-blue-100 flex items-center justify-center mr-4">
                                        <svg class="w-10 h-10 text-navy" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-navy">Dewi Anggraini</h4>
                                        <p class="text-gray-600">Sistem Informasi 2019</p>
                                        <p class="text-sm text-blue-600">Data Analyst di Gojek</p>
                                    </div>
                                </div>
                                <div class="relative">
                                    <svg class="w-8 h-8 text-gray-300 absolute -top-4 -left-2" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"></path>
                                    </svg>
                                    <p class="text-gray-600 italic">Mata
 kuliah analisis data dan statistik di UNG sangat membantu karir saya. 
Dosen-dosen selalu update dengan tren industri terkini, sehingga ilmu 
yang diberikan sangat relevan dengan kebutuhan perusahaan.</p>
                                </div>
                            </div>
                            
                            <div class="bg-white rounded-lg shadow-lg p-6 testimonial-card">
                                <div class="flex items-center mb-4">
                                    <div class="w-16 h-16 rounded-full bg-blue-100 flex items-center justify-center mr-4">
                                        <svg class="w-10 h-10 text-navy" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-navy">Reza Mahendra</h4>
                                        <p class="text-gray-600">Pendidikan TI 2018</p>
                                        <p class="text-sm text-blue-600">Mahasiswa S2 di NTU Singapore</p>
                                    </div>
                                </div>
                                <div class="relative">
                                    <svg class="w-8 h-8 text-gray-300 absolute -top-4 -left-2" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"></path>
                                    </svg>
                                    <p class="text-gray-600 italic">Berkat
 bimbingan dosen dan program pertukaran pelajar di UNG, saya berhasil 
mendapatkan beasiswa untuk melanjutkan studi S2 di luar negeri. 
Pengalaman riset selama kuliah sangat membantu dalam studi lanjut saya.</p>
                                </div>
                            </div>
                            
                            <div class="bg-white rounded-lg shadow-lg p-6 testimonial-card">
                                <div class="flex items-center mb-4">
                                    <div class="w-16 h-16 rounded-full bg-blue-100 flex items-center justify-center mr-4">
                                        <svg class="w-10 h-10 text-navy" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-navy">Anita Wijaya</h4>
                                        <p class="text-gray-600">Sistem Informasi 2017</p>
                                        <p class="text-sm text-blue-600">UI/UX Designer di Traveloka</p>
                                    </div>
                                </div>
                                <div class="relative">
                                    <svg class="w-8 h-8 text-gray-300 absolute -top-4 -left-2" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"></path>
                                    </svg>
                                    <p class="text-gray-600 italic">Mata
 kuliah desain antarmuka dan pengalaman pengguna di UNG membuka jalan 
karir saya di bidang UI/UX. Proyek-proyek praktis selama kuliah menjadi 
portofolio yang sangat berharga saat melamar pekerjaan.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <button class="carousel-control prev">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                </button>
                <button class="carousel-control next">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </button>
            </div>
            
            <div class="mt-12 text-center">
                <a href="#" class="btn-navy px-8 py-3 rounded-full font-semibold text-lg shadow-lg inline-block">Daftar Sekarang</a>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 navy text-white">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-6 scroll-reveal active">Siap Menjadi Bagian dari Keluarga UNG?</h2>
            <p class="text-xl mb-8 max-w-2xl mx-auto scroll-reveal active">Bergabunglah dengan ribuan alumni sukses kami dan mulai perjalanan karir cemerlang Anda bersama Universitas Negeri Gorontalo.</p>
            <div class="flex flex-col md:flex-row justify-center space-y-4 md:space-y-0 md:space-x-4">
                <a href="#" class="bg-white text-navy px-8 py-3 rounded-full font-semibold text-lg shadow-lg hover:bg-gray-100 transition transform hover:-translate-y-1">Daftar Sekarang</a>
                <a href="#contact" class="border-2 border-white px-8 py-3 rounded-full font-semibold text-lg shadow-lg hover:bg-white hover:text-navy transition transform hover:-translate-y-1">Hubungi Kami</a>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl md:text-4xl font-bold text-center text-navy mb-16 scroll-reveal active">Hubungi Kami</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-white rounded-lg shadow-lg p-6 scroll-reveal active">
                    <h3 class="text-xl font-semibold text-navy mb-4">Informasi Kontak</h3>
                    
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <svg class="w-6 h-6 text-navy mr-3 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            <div>
                                <h4 class="font-semibold">Alamat</h4>
                                <p class="text-gray-600">Jl. Jenderal Sudirman No. 6, Kota Gorontalo, 96128</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <svg class="w-6 h-6 text-navy mr-3 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>
                            <div>
                                <h4 class="font-semibold">Telepon</h4>
                                <p class="text-gray-600">(0435) 821125</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <svg class="w-6 h-6 text-navy mr-3 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                            <div>
                                <h4 class="font-semibold">Email</h4>
                                <p class="text-gray-600">info@ung.ac.id</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <svg class="w-6 h-6 text-navy mr-3 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <div>
                                <h4 class="font-semibold">Jam Operasional</h4>
                                <p class="text-gray-600">Senin - Jumat: 08.00 - 16.00 WITA</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-6">
                        <h4 class="font-semibold text-navy mb-3">Ikuti Kami</h4>
                        <div class="flex space-x-4">
                            <a href="#" class="w-10 h-10 rounded-full navy flex items-center justify-center text-white hover:bg-blue-800 transition">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"></path>
                                </svg>
                            </a>
                            <a href="#" class="w-10 h-10 rounded-full navy flex items-center justify-center text-white hover:bg-blue-800 transition">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"></path>
                                </svg>
                            </a>
                            <a href="#" class="w-10 h-10 rounded-full navy flex items-center justify-center text-white hover:bg-blue-800 transition">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"></path>
                                </svg>
                            </a>
                            <a href="#" class="w-10 h-10 rounded-full navy flex items-center justify-center text-white hover:bg-blue-800 transition">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white rounded-lg shadow-lg p-6 scroll-reveal active">
                    <h3 class="text-xl font-semibold text-navy mb-4">Kirim Pesan</h3>
                    
                    <form id="contactForm" class="space-y-4">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Nama Lengkap</label>
                            <input type="text" id="name" name="name" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                        
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                            <input type="email" id="email" name="email" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                        
                        <div>
                            <label for="subject" class="block text-sm font-medium text-gray-700 mb-1">Subjek</label>
                            <input type="text" id="subject" name="subject" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                        
                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Pesan</label>
                            <textarea id="message" name="message" rows="4" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                        </div>
                        
                        <div>
                            <button type="submit" class="w-full btn-navy py-2 px-4 rounded-md font-semibold">Kirim Pesan</button>
                        </div>
                    </form>
                    
                    <div id="formSuccess" class="hidden mt-4 p-4 bg-green-100 text-green-700 rounded-md">
                        Pesan Anda telah berhasil dikirim. Kami akan segera menghubungi Anda.
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection 