<!DOCTYPE html>
<html lang="id"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Statistik Lulusan &amp; Mahasiswa Berprestasi - UNG</title>
    <!-- Chart.js CDN -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- Lottie Player (Opsional, jika digunakan) -->
    <script src="Tracer Study - Universitas Negeri Gorontalo Super_files/lottie-player.js"></script>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            scroll-behavior: smooth;
        }
        
        .navy {
            background-color: #001F3F;
        }
        
        .text-navy {
            color: #001F3F;
        }
        
        .btn-navy {
            background-color: #001F3F;
            color: white;
            transition: all 0.3s ease;
        }
        
        .btn-navy:hover {
            background-color: #003366;
            transform: translateY(-2px);
            box-shadow: 0 10px 15px -3px rgba(0, 31, 63, 0.3);
        }
        
        .scroll-reveal {
            opacity: 0;
            transform: translateY(20px);
            transition: all 0.6s ease;
        }
        
        .scroll-reveal.active {
            opacity: 1;
            transform: translateY(0);
        }
        
        /* Custom animation for statistics */
        @keyframes countUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .count-animation {
            animation: countUp 1s ease forwards;
        }
        
        /* Progress bar animation */
        @keyframes fillProgress {
            from { width: 0; }
            to { width: var(--progress-width); }
        }
        
        .progress-bar {
            animation: fillProgress 1.5s ease forwards;
        }
        
        /* Card hover effects */
        .stat-card, .student-card {
            transition: all 0.3s ease;
        }
        
        .stat-card:hover, .student-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        
        /* Table styles */
        .stats-table {
            width: 100%;
            border-collapse: collapse;
        }
        
        .stats-table th {
            background-color: #001F3F;
            color: white;
            padding: 12px;
            text-align: left;
        }
        
        .stats-table td {
            padding: 12px;
            border-bottom: 1px solid #e2e8f0;
        }
        
        .stats-table tr:hover {
            background-color: #f8fafc;
        }
        
        /* Year filter tabs */
        .year-tab {
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .year-tab.active {
            background-color: #003366;
            color: white;
            font-weight: 600;
        }
        
        /* Carousel styles */
        .carousel {
            position: relative;
            overflow: hidden;
        }
        
        .carousel-inner {
            display: flex;
            transition: transform 0.5s ease;
        }
        
        .carousel-item {
            min-width: 100%;
        }
        
        .carousel-control {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background-color: rgba(0, 31, 63, 0.7);
            color: white;
            border: none;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            z-index: 10;
        }
        
        .carousel-control.prev {
            left: 10px;
        }
        
        .carousel-control.next {
            right: 10px;
        }
        
        /* Student profile image */
        .student-image {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid #001F3F;
        }
        
        /* Quote styles */
        .quote {
            position: relative;
            padding: 20px;
            background-color: #001F3F;
            color: white;
            border-radius: 8px;
        }
        
        .quote::before {
            content: '"';
            position: absolute;
            top: 0;
            left: 10px;
            font-size: 60px;
            color: rgba(255, 255, 255, 0.2);
            line-height: 1;
        }
    </style>
<style>*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: ;--tw-contain-size: ;--tw-contain-layout: ;--tw-contain-paint: ;--tw-contain-style: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: ;--tw-contain-size: ;--tw-contain-layout: ;--tw-contain-paint: ;--tw-contain-style: }/* ! tailwindcss v3.4.16 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}:host,html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";font-feature-settings:normal;font-variation-settings:normal;-webkit-tap-highlight-color:transparent}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-feature-settings:normal;font-variation-settings:normal;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-feature-settings:inherit;font-variation-settings:inherit;font-size:100%;font-weight:inherit;line-height:inherit;letter-spacing:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}button,input:where([type=button]),input:where([type=reset]),input:where([type=submit]){-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}dialog{padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]:where(:not([hidden=until-found])){display:none}.container{width:100%}@media (min-width: 640px){.container{max-width:640px}}@media (min-width: 768px){.container{max-width:768px}}@media (min-width: 1024px){.container{max-width:1024px}}@media (min-width: 1280px){.container{max-width:1280px}}@media (min-width: 1536px){.container{max-width:1536px}}.fixed{position:fixed}.absolute{position:absolute}.left-0{left:0px}.top-full{top:100%}.z-50{z-index:50}.mx-auto{margin-left:auto;margin-right:auto}.mb-1{margin-bottom:0.25rem}.mb-12{margin-bottom:3rem}.mb-2{margin-bottom:0.5rem}.mb-4{margin-bottom:1rem}.mb-6{margin-bottom:1.5rem}.mr-2{margin-right:0.5rem}.mr-3{margin-right:0.75rem}.mt-0\.5{margin-top:0.125rem}.mt-4{margin-top:1rem}.mt-6{margin-top:1.5rem}.mt-8{margin-top:2rem}.block{display:block}.inline-block{display:inline-block}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.hidden{display:none}.h-10{height:2.5rem}.h-16{height:4rem}.h-4{height:1rem}.h-5{height:1.25rem}.h-6{height:1.5rem}.h-8{height:2rem}.w-10{width:2.5rem}.w-16{width:4rem}.w-4{width:1rem}.w-5{width:1.25rem}.w-6{width:1.5rem}.w-8{width:2rem}.w-full{width:100%}.max-w-3xl{max-width:48rem}.transform{transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-start{align-items:flex-start}.items-center{align-items:center}.justify-center{justify-content:center}.justify-between{justify-content:space-between}.gap-6{gap:1.5rem}.gap-8{gap:2rem}.space-x-4 > :not([hidden]) ~ :not([hidden]){--tw-space-x-reverse:0;margin-right:calc(1rem * var(--tw-space-x-reverse));margin-left:calc(1rem * calc(1 - var(--tw-space-x-reverse)))}.space-x-6 > :not([hidden]) ~ :not([hidden]){--tw-space-x-reverse:0;margin-right:calc(1.5rem * var(--tw-space-x-reverse));margin-left:calc(1.5rem * calc(1 - var(--tw-space-x-reverse)))}.space-y-2 > :not([hidden]) ~ :not([hidden]){--tw-space-y-reverse:0;margin-top:calc(0.5rem * calc(1 - var(--tw-space-y-reverse)));margin-bottom:calc(0.5rem * var(--tw-space-y-reverse))}.overflow-hidden{overflow:hidden}.overflow-x-auto{overflow-x:auto}.rounded-full{border-radius:9999px}.rounded-lg{border-radius:0.5rem}.rounded-md{border-radius:0.375rem}.rounded-l-md{border-top-left-radius:0.375rem;border-bottom-left-radius:0.375rem}.rounded-r-md{border-top-right-radius:0.375rem;border-bottom-right-radius:0.375rem}.border-r{border-right-width:1px}.border-t{border-top-width:1px}.border-gray-200{--tw-border-opacity:1;border-color:rgb(229 231 235 / var(--tw-border-opacity, 1))}.border-gray-700{--tw-border-opacity:1;border-color:rgb(55 65 81 / var(--tw-border-opacity, 1))}.bg-blue-100{--tw-bg-opacity:1;background-color:rgb(219 234 254 / var(--tw-bg-opacity, 1))}.bg-blue-500{--tw-bg-opacity:1;background-color:rgb(59 130 246 / var(--tw-bg-opacity, 1))}.bg-gray-200{--tw-bg-opacity:1;background-color:rgb(229 231 235 / var(--tw-bg-opacity, 1))}.bg-green-500{--tw-bg-opacity:1;background-color:rgb(34 197 94 / var(--tw-bg-opacity, 1))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity, 1))}.bg-yellow-500{--tw-bg-opacity:1;background-color:rgb(234 179 8 / var(--tw-bg-opacity, 1))}.p-4{padding:1rem}.p-6{padding:1.5rem}.px-2{padding-left:0.5rem;padding-right:0.5rem}.px-4{padding-left:1rem;padding-right:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.px-8{padding-left:2rem;padding-right:2rem}.py-1{padding-top:0.25rem;padding-bottom:0.25rem}.py-12{padding-top:3rem;padding-bottom:3rem}.py-2{padding-top:0.5rem;padding-bottom:0.5rem}.py-20{padding-top:5rem;padding-bottom:5rem}.py-3{padding-top:0.75rem;padding-bottom:0.75rem}.py-4{padding-top:1rem;padding-bottom:1rem}.pb-16{padding-bottom:4rem}.pt-24{padding-top:6rem}.pt-8{padding-top:2rem}.text-center{text-align:center}.text-3xl{font-size:1.875rem;line-height:2.25rem}.text-4xl{font-size:2.25rem;line-height:2.5rem}.text-lg{font-size:1.125rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-xs{font-size:0.75rem;line-height:1rem}.font-bold{font-weight:700}.font-medium{font-weight:500}.font-semibold{font-weight:600}.italic{font-style:italic}.text-blue-200{--tw-text-opacity:1;color:rgb(191 219 254 / var(--tw-text-opacity, 1))}.text-gray-300{--tw-text-opacity:1;color:rgb(209 213 219 / var(--tw-text-opacity, 1))}.text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity, 1))}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity, 1))}.text-gray-700{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity, 1))}.text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity, 1))}.shadow-lg{--tw-shadow:0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);--tw-shadow-colored:0 10px 15px -3px var(--tw-shadow-color), 0 4px 6px -4px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-sm{--tw-shadow:0 1px 2px 0 rgb(0 0 0 / 0.05);--tw-shadow-colored:0 1px 2px 0 var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.transition{transition-property:color, background-color, border-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-text-decoration-color, -webkit-backdrop-filter;transition-property:color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;transition-property:color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-text-decoration-color, -webkit-backdrop-filter;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.hover\:-translate-y-1:hover{--tw-translate-y:-0.25rem;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.hover\:bg-gray-100:hover{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity, 1))}.hover\:bg-gray-200:hover{--tw-bg-opacity:1;background-color:rgb(229 231 235 / var(--tw-bg-opacity, 1))}.hover\:text-blue-200:hover{--tw-text-opacity:1;color:rgb(191 219 254 / var(--tw-text-opacity, 1))}.hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity, 1))}.focus\:outline-none:focus{outline:2px solid transparent;outline-offset:2px}@media (min-width: 640px){.sm\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 768px){.md\:flex{display:flex}.md\:hidden{display:none}.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}.md\:grid-cols-3{grid-template-columns:repeat(3, minmax(0, 1fr))}.md\:grid-cols-4{grid-template-columns:repeat(4, minmax(0, 1fr))}.md\:text-4xl{font-size:2.25rem;line-height:2.5rem}}@media (min-width: 1024px){.lg\:grid-cols-4{grid-template-columns:repeat(4, minmax(0, 1fr))}}</style></head>
<body cz-shortcut-listen="true">
    <!-- Navigation -->
    @include('partials.navbar')

    <!-- Statistics Section -->
    <section id="statistics" class="navy pt-24 pb-16">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl md:text-4xl font-bold text-center text-white mb-4 scroll-reveal active">Detail Statistik Lulusan</h2>
            <p class="text-lg text-center text-white mb-12 max-w-3xl mx-auto scroll-reveal active">
                Data komprehensif tentang jalur karir, lokasi kerja, dan
                waktu tunggu lulusan Universitas Negeri Gorontalo berdasarkan tahun 
                angkatan.
            </p>
            
            <!-- Year Filter Tabs -->
            <div class="flex justify-center mb-12 scroll-reveal active">
                <div class="inline-flex rounded-md shadow-sm bg-white">
                    <button class="year-tab px-6 py-3 text-sm font-medium rounded-l-md border-r border-gray-200 active" data-year="2023">
                        Lulusan 2023
                    </button>
                    <button class="year-tab px-6 py-3 text-sm font-medium rounded-r-md border border-gray-200" data-year="2024">
                        Lulusan 2024
                    </button>
                </div>
            </div>
            
            <!-- Statistics KERJA Cards -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
                <!-- Lulusan Terserap Dunia Kerja -->
                <div class="bg-white rounded-lg shadow-lg p-6 text-center stat-card scroll-reveal active">
                    <div class="text-4xl font-bold text-navy mb-2 count-number count-animation" id="employmentRate"></div>
                    <p class="text-gray-600">Lulusan Terserap Dunia Kerja</p>
                </div>
                
                <!-- Bulan Rata-rata Waktu Tunggu -->
                <div class="bg-white rounded-lg shadow-lg p-6 text-center stat-card scroll-reveal active">
                    <div class="text-4xl font-bold text-navy mb-2 count-number count-animation" id="avgWaitingTime"></div>
                    <p class="text-gray-600">Bulan Rata-rata Waktu Tunggu</p>
                </div>

                <!-- Lulusan Melanjutkan Studi -->
                <div class="bg-white rounded-lg shadow-lg p-6 text-center stat-card scroll-reveal active">
                    <div class="text-4xl font-bold text-navy mb-2 count-number count-animation" id="studyContinuationRate"></div>
                    <p class="text-gray-600">Lulusan Melanjutkan Studi</p>
                </div>

                <!-- Lulusan Berwirausaha -->
                <div class="bg-white rounded-lg shadow-lg p-6 text-center stat-card scroll-reveal active">
                    <div class="text-4xl font-bold text-navy mb-2 count-number count-animation" id="entrepreneurshipRate"></div>
                    <p class="text-gray-600">Lulusan Berwirausaha</p>
                </div>
            </div>
            <
            <!-- Charts Section -->
            <div class="bg-white rounded-lg  shadow-lg  mb-10 text-center">
                <h3 class="text-xl font-semibold text-navy mb-4">Data Karir Alumni</h3>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">

                <!-- Career Path Chart -->
                <div class="bg-white rounded-lg shadow-lg stat-card scroll-reveal active">
                    <h3 class="text-xl font-semibold p-6 text-navy mb-4">Jalur Karir Lulusan</h3>
                    <div class="">
                        <canvas id="careerPathChart"  style="display: block; box-sizing: border-box;"></canvas>
                    </div>
                    <div class="mt-4 text-sm text-gray-600">
                        <p>* Data berdasarkan tracer study lulusan tahun 2023</p>
                    </div>
                </div>
                
                <!-- Location Chart -->
                <div class="bg-white rounded-lg shadow-lg p-6 stat-card scroll-reveal active">
                    <h3 class="text-xl font-semibold text-navy mb-4">Lokasi Kerja Lulusan</h3>
                    <div class="">
                        <canvas id="locationChart"  style="display: block; box-sizing: border-box; height: 400px" ></canvas>
                    </div>
                    <div class="mt-4 text-sm text-gray-600">
                        <p>* Data berdasarkan tracer study lulusan tahun 2023</p>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-lg p-6 stat-card scroll-reveal active">
                    <h3 class="text-xl font-semibold text-navy mb-4">Rata-rata Gaji Lulusan</h3>
                    <div class="">
                        <canvas id="avgSalaryChart"  style="display: block; box-sizing: border-box; height: 400px" ></canvas>
                    </div>
                    <div class="mt-4 text-sm text-gray-600">
                        <p>* Data berdasarkan tracer study lulusan tahun 2023</p>
                    </div>
                </div>
            </div>

            <!-- LANJUT STUDI -->
            <div class="bg-white rounded-lg p-3 shadow-lg  mb-10 text-center">
                <h3 class="text-xl font-semibold text-navy mb-4">Data Studi Alumni</h3>
                
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">

                <!-- Career Path Chart -->
                <div class="bg-white rounded-lg shadow-lg stat-card scroll-reveal active">
                    <h3 class="text-xl font-semibold p-6 text-navy mb-4">Biaya Studi S1</h3>
                    <div class="">
                        <canvas id="studyFinancedByChart"  style="display: block; box-sizing: border-box;"></canvas>
                    </div>
                    <div class="mt-4 text-sm text-gray-600">
                        <p>* Data berdasarkan tracer study lulusan tahun 2023</p>
                    </div>
                </div>
                
                <!-- Location Chart -->
                <div class="bg-white rounded-lg shadow-lg p-6 stat-card scroll-reveal active">
                    <h3 class="text-xl font-semibold text-navy mb-4">Sebaran Lanjut Pendidikan</h3>
                    <div class="">
                        <canvas id="studyLocationChart"  style="display: block; box-sizing: border-box; height: 400px" ></canvas>
                    </div>
                    <div class="mt-4 text-sm text-gray-600">
                        <p>* Data berdasarkan tracer study lulusan tahun 2023</p>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-lg p-6 stat-card scroll-reveal active">
                    <h3 class="text-xl font-semibold text-navy mb-4">Pembiayaan S2</h3>
                    <div class="">
                        <canvas id="studyScholarshipChart"  style="display: block; box-sizing: border-box; height: 400px" ></canvas>
                    </div>
                    <div class="mt-4 text-sm text-gray-600">
                        <p>* Data berdasarkan tracer study lulusan tahun 2023</p>
                    </div>
                </div>
            </div>

            <!-- LANJUT STUDI -->
            
            <div class="bg-white rounded-lg p-3 shadow-lg  mb-10 text-center">
            <h3 class="text-xl font-semibold text-navy mb-4">Data Usaha Alumni</h3>
                
            </div>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-12">
                <div class=""></div>
                <!-- Career Path Chart -->
                <div class="bg-white rounded-lg shadow-lg stat-card scroll-reveal active">
                    <h3 class="text-xl font-semibold p-6 text-navy mb-4">Tipe Bisnis</h3>
                    <div class="">
                        <canvas id="businessTypeChart"  style="display: block; box-sizing: border-box;"></canvas>
                    </div>
                    <div class="mt-4 text-sm text-gray-600">
                        <p>* Data berdasarkan tracer study lulusan tahun 2023</p>
                    </div>
                </div>
                
                <!-- Location Chart -->
                <div class="bg-white rounded-lg shadow-lg p-6 stat-card scroll-reveal active">
                    <h3 class="text-xl font-semibold text-navy mb-4">Pembiayaan Bisnis</h3>
                    <div class="">
                        <canvas id="businessFundingChart"  style="display: block; box-sizing: border-box; height: 400px" ></canvas>
                    </div>
                    <div class="mt-4 text-sm text-gray-600">
                        <p>* Data berdasarkan tracer study lulusan tahun 2023</p>
                    </div>
                </div>
                <div class=""></div>
            </div>
            
            <!-- Waiting Time Progress Bar -->
            {{-- <div class="bg-white rounded-lg shadow-lg p-6 mb-12 scroll-reveal active">
                <h3 class="text-xl font-semibold text-navy mb-4">Rata-rata Waktu Tunggu Lulusan</h3>
                
                <div class="mb-6">
                    <div class="flex justify-between mb-1">
                        <span class="text-sm font-medium text-navy">Angkatan 2023</span>
                        <span class="text-sm font-medium text-navy">6 bulan</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-4">
                        <div class="bg-blue-500 h-4 rounded-full progress-bar" style="--progress-width: 50%"></div>
                    </div>
                </div>
                
                <div class="mb-6">
                    <div class="flex justify-between mb-1">
                        <span class="text-sm font-medium text-navy">Angkatan 2020</span>
                        <span class="text-sm font-medium text-navy">5.5 bulan</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-4">
                        <div class="bg-blue-500 h-4 rounded-full progress-bar" style="--progress-width: 45%"></div>
                    </div>
                </div>
                
                <div>
                    <div class="flex justify-between mb-1">
                        <span class="text-sm font-medium text-navy">Angkatan 2021</span>
                        <span class="text-sm font-medium text-navy">4.8 bulan</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-4">
                        <div class="bg-blue-500 h-4 rounded-full progress-bar" style="--progress-width: 40%"></div>
                    </div>
                </div>
                
                <div class="mt-4 text-sm text-gray-600">
                    <p>* Waktu tunggu dihitung sejak kelulusan hingga mendapatkan pekerjaan pertama</p>
                </div>
            </div> --}}
            
            <!-- Statistics Table -->
            {{-- <div class="bg-white rounded-lg shadow-lg p-6 mb-12 scroll-reveal overflow-x-auto active">
                <h3 class="text-xl font-semibold text-navy mb-4">Tabel Statistik Lulusan</h3>
                
                <table class="stats-table">
                    <thead>
                        <tr>
                            <th>Tahun Angkatan</th>
                            <th>Total Lulusan</th>
                            <th>Bekerja</th>
                            <th>Studi Lanjut</th>
                            <th>Wirausaha</th>
                            <th>Lainnya</th>
                        </tr>
                    </thead>
                    <tbody id="statsTableBody">
                        <tr class="year-data" data-year="2023" style="">
                            <td>2023</td>
                            <td>245</td>
                            <td>158 (64.5%)</td>
                            <td>44 (18%)</td>
                            <td>37 (15.1%)</td>
                            <td>6 (2.4%)</td>
                        </tr>
                        <tr class="year-data" data-year="2020" style="display: none;">
                            <td>2020</td>
                            <td>268</td>
                            <td>175 (65.3%)</td>
                            <td>51 (19%)</td>
                            <td>35 (13.1%)</td>
                            <td>7 (2.6%)</td>
                        </tr>
                        <tr class="year-data" data-year="2021" style="display: none;">
                            <td>2021</td>
                            <td>290</td>
                            <td>192 (66.2%)</td>
                            <td>55 (19%)</td>
                            <td>38 (13.1%)</td>
                            <td>5 (1.7%)</td>
                        </tr>
                    </tbody>
                </table>
            </div> --}}
            
            {{-- <div class="text-center">
                <a href="#" class="btn-navy px-8 py-3 rounded-full font-semibold text-lg shadow-lg inline-block">Pelajari Lebih Lanjut</a>
            </div> --}}
        </div>
    </section>

    <!-- Students Achievement Section -->
    {{-- <section id="students" class="navy py-20">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl md:text-4xl font-bold text-center text-white mb-4 scroll-reveal active">Mahasiswa Berprestasi</h2>
            <p class="text-lg text-center text-white mb-12 max-w-3xl mx-auto scroll-reveal active">
                Menampilkan mahasiswa-mahasiswa UNG yang telah meraih 
                prestasi membanggakan di berbagai bidang, baik akademik maupun 
                non-akademik.
            </p>
            
            <!-- Achievement Categories -->
            <div class="flex justify-center mb-12 scroll-reveal active">
                <div class="inline-flex rounded-md shadow-sm bg-white">
                    <button class="year-tab px-6 py-3 text-sm font-medium rounded-l-md border-r border-gray-200" data-category="all">
                        Semua Kategori
                    </button>
                    <button class="year-tab px-6 py-3 text-sm font-medium border-r border-gray-200" data-category="competition">
                        Kompetisi
                    </button>
                    <button class="year-tab px-6 py-3 text-sm font-medium border-r border-gray-200" data-category="startup">
                        Startup
                    </button>
                    <button class="year-tab px-6 py-3 text-sm font-medium rounded-r-md" data-category="research">
                        Penelitian
                    </button>
                </div>
            </div>
            
            <!-- Student Achievement Chart -->
            <div class="bg-white rounded-lg shadow-lg p-6 mb-12 scroll-reveal active">
                <h3 class="text-xl font-semibold text-navy mb-4">Grafik Pencapaian Mahasiswa</h3>
                <div class="aspect-w-16 aspect-h-9">
                    <canvas id="achievementChart" class="w-full" style="display: block; box-sizing: border-box; height: 720px; width: 1440px;" width="1800" height="900"></canvas>
                </div>
                <div class="mt-4 text-sm text-gray-600">
                    <p>* Data berdasarkan pencapaian mahasiswa tahun 2023-2023</p>
                </div>
            </div>
            
            <!-- Student Profiles Carousel -->
            <div class="carousel mb-12">
                <div class="carousel-inner" style="transform: translateX(0%);">
                    <!-- Student Group 1 -->
                    <div class="carousel-item">
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                            <!-- Student 1 -->
                            <div class="bg-white rounded-lg shadow-lg overflow-hidden student-card">
                                <div class="p-6 text-center">
                                    <div class="flex justify-center mb-4">
                                        <div class="student-image bg-blue-100 flex items-center justify-center">
                                            <svg class="w-16 h-16 text-navy" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <h4 class="text-xl font-bold text-navy">Ahmad Rizki</h4>
                                    <p class="text-gray-600 mb-2">Sistem Informasi - Angkatan 2020</p>
                                    <div class="inline-block bg-yellow-500 text-white text-xs px-2 py-1 rounded-full mb-4">Kompetisi</div>
                                    <p class="text-gray-700 mb-4">Juara 1 Hackathon Nasional 2022 dengan proyek "EduConnect" - platform pembelajaran interaktif untuk daerah terpencil.</p>
                                </div>
                                <div class="navy p-4">
                                    <h5 class="font-semibold text-white mb-2">Proyek Unggulan:</h5>
                                    <div class="flex items-center">
                                        <svg class="w-8 h-8 text-white mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                        </svg>
                                        <div>
                                            <p class="text-white text-sm">EduConnect - Platform pembelajaran yang menghubungkan siswa di daerah terpencil dengan guru-guru berkualitas.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Student 2 -->
                            <div class="bg-white rounded-lg shadow-lg overflow-hidden student-card">
                                <div class="p-6 text-center">
                                    <div class="flex justify-center mb-4">
                                        <div class="student-image bg-blue-100 flex items-center justify-center">
                                            <svg class="w-16 h-16 text-navy" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <h4 class="text-xl font-bold text-navy">Siti Nurhaliza</h4>
                                    <p class="text-gray-600 mb-2">Pendidikan TI - Angkatan 2023</p>
                                    <div class="inline-block bg-green-500 text-white text-xs px-2 py-1 rounded-full mb-4">Startup</div>
                                    <p class="text-gray-700 mb-4">Founder startup "TeachTech" yang telah mendapatkan pendanaan seed sebesar Rp 500 juta dari investor lokal.</p>
                                </div>
                                <div class="navy p-4">
                                    <h5 class="font-semibold text-white mb-2">Proyek Unggulan:</h5>
                                    <div class="flex items-center">
                                        <svg class="w-8 h-8 text-white mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                        </svg>
                                        <div>
                                            <p class="text-white text-sm">TeachTech - Platform yang membantu guru mengintegrasikan teknologi dalam pembelajaran di kelas.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Student 3 -->
                            <div class="bg-white rounded-lg shadow-lg overflow-hidden student-card">
                                <div class="p-6 text-center">
                                    <div class="flex justify-center mb-4">
                                        <div class="student-image bg-blue-100 flex items-center justify-center">
                                            <svg class="w-16 h-16 text-navy" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <h4 class="text-xl font-bold text-navy">Budi Santoso</h4>
                                    <p class="text-gray-600 mb-2">Sistem Informasi - Angkatan 2021</p>
                                    <div class="inline-block bg-blue-500 text-white text-xs px-2 py-1 rounded-full mb-4">Penelitian</div>
                                    <p class="text-gray-700 mb-4">Peneliti muda dengan publikasi internasional tentang "Implementasi AI untuk Deteksi Dini Penyakit Tanaman".</p>
                                </div>
                                <div class="navy p-4">
                                    <h5 class="font-semibold text-white mb-2">Proyek Unggulan:</h5>
                                    <div class="flex items-center">
                                        <svg class="w-8 h-8 text-white mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>
                                        </svg>
                                        <div>
                                            <p class="text-white text-sm">PlantGuard - Aplikasi berbasis AI untuk mendeteksi penyakit pada tanaman melalui analisis gambar.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Student Group 2 -->
                    <div class="carousel-item">
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                            <!-- Student 4 -->
                            <div class="bg-white rounded-lg shadow-lg overflow-hidden student-card">
                                <div class="p-6 text-center">
                                    <div class="flex justify-center mb-4">
                                        <div class="student-image bg-blue-100 flex items-center justify-center">
                                            <svg class="w-16 h-16 text-navy" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <h4 class="text-xl font-bold text-navy">Dewi Anggraini</h4>
                                    <p class="text-gray-600 mb-2">Sistem Informasi - Angkatan 2020</p>
                                    <div class="inline-block bg-yellow-500 text-white text-xs px-2 py-1 rounded-full mb-4">Kompetisi</div>
                                    <p class="text-gray-700 mb-4">Juara 2 Data Science Competition 2023 dengan model prediksi pola konsumsi energi untuk smart city.</p>
                                </div>
                                <div class="navy p-4">
                                    <h5 class="font-semibold text-white mb-2">Proyek Unggulan:</h5>
                                    <div class="flex items-center">
                                        <svg class="w-8 h-8 text-white mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z"></path>
                                        </svg>
                                        <div>
                                            <p class="text-white text-sm">EnergyPredict - Model AI untuk memprediksi dan mengoptimalkan penggunaan energi di kota pintar.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Student 5 -->
                            <div class="bg-white rounded-lg shadow-lg overflow-hidden student-card">
                                <div class="p-6 text-center">
                                    <div class="flex justify-center mb-4">
                                        <div class="student-image bg-blue-100 flex items-center justify-center">
                                            <svg class="w-16 h-16 text-navy" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <h4 class="text-xl font-bold text-navy">Reza Mahendra</h4>
                                    <p class="text-gray-600 mb-2">Pendidikan TI - Angkatan 2023</p>
                                    <div class="inline-block bg-green-500 text-white text-xs px-2 py-1 rounded-full mb-4">Startup</div>
                                    <p class="text-gray-700 mb-4">Co-founder "EduGame" - startup pengembangan game edukasi yang telah digunakan di 50+ sekolah di Indonesia.</p>
                                </div>
                                <div class="navy p-4">
                                    <h5 class="font-semibold text-white mb-2">Proyek Unggulan:</h5>
                                    <div class="flex items-center">
                                        <svg class="w-8 h-8 text-white mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <div>
                                            <p class="text-white text-sm">EduGame - Platform game edukasi yang membuat pembelajaran matematika dan sains menjadi menyenangkan.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Student 6 -->
                            <div class="bg-white rounded-lg shadow-lg overflow-hidden student-card">
                                <div class="p-6 text-center">
                                    <div class="flex justify-center mb-4">
                                        <div class="student-image bg-blue-100 flex items-center justify-center">
                                            <svg class="w-16 h-16 text-navy" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <h4 class="text-xl font-bold text-navy">Anita Wijaya</h4>
                                    <p class="text-gray-600 mb-2">Sistem Informasi - Angkatan 2021</p>
                                    <div class="inline-block bg-blue-500 text-white text-xs px-2 py-1 rounded-full mb-4">Penelitian</div>
                                    <p class="text-gray-700 mb-4">Peneliti UI/UX dengan fokus pada aksesibilitas digital untuk penyandang disabilitas.</p>
                                </div>
                                <div class="navy p-4">
                                    <h5 class="font-semibold text-white mb-2">Proyek Unggulan:</h5>
                                    <div class="flex items-center">
                                        <svg class="w-8 h-8 text-white mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                        </svg>
                                        <div>
                                            <p class="text-white text-sm">AccessUI - Framework UI/UX untuk membuat aplikasi yang lebih aksesibel bagi penyandang disabilitas.</p>
                                        </div>
                                    </div>
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
            
            <!-- Testimonials -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
                <div class="quote scroll-reveal active">
                    <p class="mb-4 italic">
                        "Program Sistem Informasi di UNG memberikan saya fondasi yang kuat untuk mengembangkan startup 
                        teknologi. Dosen-dosen selalu mendukung ide-ide inovatif mahasiswa dan memberikan bimbingan yang berharga."
                    </p>
                    <div class="flex items-center">
                        <div class="w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center mr-3">
                            <svg class="w-6 h-6 text-navy" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <div>
                            <h5 class="font-semibold">Siti Nurhaliza</h5>
                            <p class="text-sm text-blue-200">Founder TeachTech</p>
                        </div>
                    </div>
                </div>
                
                <div class="quote scroll-reveal active">
                    <p class="mb-4 italic">
                        "Fasilitas laboratorium dan 
                        dukungan untuk penelitian di UNG sangat membantu saya dalam 
                        mengembangkan proyek AI untuk pertanian. Saya bisa mengaplikasikan teori
                        yang dipelajari untuk memecahkan masalah nyata di masyarakat."
                    </p>
                    <div class="flex items-center">
                        <div class="w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center mr-3">
                            <svg class="w-6 h-6 text-navy" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <div>
                            <h5 class="font-semibold">Budi Santoso</h5>
                            <p class="text-sm text-blue-200">Peneliti AI</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center">
                <a href="#" class="bg-white text-navy px-8 py-3 rounded-full font-semibold text-lg shadow-lg inline-block hover:bg-gray-100 transition transform hover:-translate-y-1">Pelajari Lebih Lanjut</a>
            </div>
        </div>
    </section> --}}

    <!-- Footer -->
    <footer class="navy text-white py-12">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <div class="flex items-center mb-4">
                        <svg class="w-10 h-10 mr-2" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M25 5L5 15V35L25 45L45 35V15L25 5Z" stroke="white" stroke-width="2" fill="#003366"></path>
                            <path d="M25 5V25M25 25V45M25 25L5 15M25 25L45 15" stroke="white" stroke-width="2"></path>
                        </svg>
                        <span class="font-bold text-xl">UNG Tracer Study</span>
                    </div>
                    <p class="text-sm text-gray-300 mb-4">
                        Universitas Negeri Gorontalo adalah perguruan tinggi negeri yang berkomitmen untuk 
                        menghasilkan lulusan berkualitas dan berdaya saing global.
                    </p>
                </div>
                
                <div>
                    <h4 class="text-lg font-semibold mb-4">Link Cepat</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-300 hover:text-white transition">Beranda</a></li>
                        <li><a href="#statistics" class="text-gray-300 hover:text-white transition">Statistik Lulusan</a></li>
                        <li><a href="#students" class="text-gray-300 hover:text-white transition">Mahasiswa Berprestasi</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white transition">Program Studi</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white transition">Kontak</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-lg font-semibold mb-4">Program Studi</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-300 hover:text-white transition">Sistem Informasi</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white transition">Pendidikan Teknologi Informasi</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white transition">Ilmu Komputer</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white transition">Teknik Informatika</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-lg font-semibold mb-4">Kontak</h4>
                    <ul class="space-y-2">
                        <li class="flex items-start">
                            <svg class="w-5 h-5 mr-2 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            <span class="text-gray-300">Jl. Jenderal Sudirman No. 6, Kota Gorontalo, 96128</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 mr-2 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>
                            <span class="text-gray-300">(0435) 821125</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 mr-2 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                            <span class="text-gray-300">info@ung.ac.id</span>
                        </li>
                    </ul>
                    
                    <div class="mt-6 flex space-x-4">
                        <a href="#" class="w-8 h-8 rounded-full bg-white flex items-center justify-center text-navy hover:bg-gray-200 transition">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"></path>
                            </svg>
                        </a>
                        <a href="#" class="w-8 h-8 rounded-full bg-white flex items-center justify-center text-navy hover:bg-gray-200 transition">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"></path>
                            </svg>
                        </a>
                        <a href="#" class="w-8 h-8 rounded-full bg-white flex items-center justify-center text-navy hover:bg-gray-200 transition">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"></path>
                            </svg>
                        </a>
                        <a href="#" class="w-8 h-8 rounded-full bg-white flex items-center justify-center text-navy hover:bg-gray-200 transition">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="border-t border-gray-700 mt-8 pt-8 text-center text-sm text-gray-400">
                <p>© 2023 Universitas Negeri Gorontalo. Hak Cipta Dilindungi.</p>
            </div>
        </div>
    </footer>

    <script>
        // Data JSON dari backend (contoh, ganti dengan variabel dinamis jika dari backend)
        // const statisticsData = {
        //     "year": "2023",
        //     "pekerjaanStats": {
            //     "job_location": {
            //         "Luar Negeri": 2,
            //         "": 9,
            //         "Luar Provinsi Gorontalo": 3,
            //         "Dalam Provinsi Gorontalo": 1
            //     },
            //     "job_status": {
            //         "freelancer": 3,
            //         "": 9,
            //         "full_time": 2,
            //         "part_time": 1
        //          },
            //     "waiting_time_avg": "11.0000",
            //     "monthly_salary_avg": "7038163.1667"
            //     },
        //     "lanjutStudiStats": {
        //     "study_location": {
        //         "domestic": 4,
        //         "international": 3,
        //         "": 6
        //     },
        //     "study_financed_by": {
        //         "other": 7,
        //         "scholarship": 3,
        //         "self": 1,
        //         "parents": 2
        //     },
        //     "study_scholarship": {
        //         "no": 3,
        //         "yes": 4,
        //         "": 6
        //     }
        //     },
        //     "wirausahaStats": {
        //     "business_type": {
        //         "": 5,
        //         "Lainnya": 4,
        //         "Teknologi": 1
        //     },
        //     "business_funding": {
        //         "": 5,
        //         "Pinjaman": 1,
        //         "Lainnya": 1,
        //         "Pribadi": 3
        //     }
        //     },
        //     "totalLulusan": 32,
        //     "totalPekerjaan": 15,
        //     "totalLanjutStudi": 13,
        //     "totalWirausaha": 10,
        //     "totalLulusanPercentages": {
        //     "pekerjaan": 46.88,
        //     "lanjut_studi": 40.63,
        //     "wirausaha": 31.25
        //     }
        // };

        
        // Mobile menu toggle
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        
        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
        
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                
                const targetId = this.getAttribute('href');
                if (targetId === '#') return;
                
                const targetElement = document.querySelector(targetId);
                
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 80,
                        behavior: 'smooth'
                    });
                    
                    // Close mobile menu if open
                    if (!mobileMenu.classList.contains('hidden')) {
                        mobileMenu.classList.add('hidden');
                    }
                }
            });
        });
        
        // Scroll reveal animation
        const revealElements = document.querySelectorAll('.scroll-reveal');
        
        function checkReveal() {
            revealElements.forEach(element => {
                const elementTop = element.getBoundingClientRect().top;
                const windowHeight = window.innerHeight;
                
                if (elementTop < windowHeight - 100) {
                    element.classList.add('active');
                }
            });
        }
        
        window.addEventListener('scroll', checkReveal);
        window.addEventListener('load', checkReveal);
        
        // Year filter tabs
        const yearTabs = document.querySelectorAll('.year-tab');
        
        yearTabs.forEach(tab => {
            tab.addEventListener('click', () => {
                // Remove active class from all tabs
                yearTabs.forEach(t => t.classList.remove('active'));
                
                // Add active class to clicked tab
                tab.classList.add('active');
                
                // Handle year filter
                if (tab.dataset.year) {
                    const year = tab.dataset.year;
                    document.querySelectorAll('.year-data').forEach(row => {
                        if (row.dataset.year === year) {
                            row.style.display = '';
                        } else {
                            row.style.display = 'none';
                        }
                    });
                    
                    // Update charts based on year
                    updateChartsForYear(year);
                }
                
                // Handle category filter
                if (tab.dataset.category) {
                    const category = tab.dataset.category;
                    // Here you would filter student cards based on category
                    // For this demo, we'll just log the category
                    console.log('Filtering by category:', category);
                }
            });
        });
        
        // ChartsCHARTSCHARTSCHARTSCHATRSCHARTSCHARTSCHARTSCHARTSCHARTSCHARTSCHARTSCHARTSCHARTSCHARTSCHARTSCHARTS
        // Global chart instances for updating
        // Chart.js global variables
        let careerPathChart, locationChart, avgSalaryChart, studyLocationChart, studyFinancedByChart, studyScholarshipChart, businessTypeChart, businessFundingChart;

        // // Helper: Convert object values to array (with fallback for missing keys)
        // function getValues(obj, keys) {
        //     return keys.map(k => obj[k] ?? 0);
        // }

        // Fetch data dari endpoint (misal: /api/statistics?year=2023)
        function fetchData(year) {
            fetch(`/api/statistics?year=${year}`)
                .then(response => response.json())
                .then(statisticsData => {
                    // Update statistic cards
                    document.getElementById('employmentRate').textContent = `${Math.round(statisticsData.totalLulusanPercentages.pekerjaan)}%`;
                    document.getElementById('avgWaitingTime').textContent = Math.round(statisticsData.pekerjaanStats.waiting_time_avg);
                    document.getElementById('studyContinuationRate').textContent = `${Math.round(statisticsData.totalLulusanPercentages.lanjut_studi)}%`;
                    document.getElementById('entrepreneurshipRate').textContent = `${Math.round(statisticsData.totalLulusanPercentages.wirausaha)}%`;

                    // Update career path chart
            if (careerPathChart) {
                careerPathChart.data.datasets[0].data = [
                    statisticsData.totalPekerjaan || 0,
                    statisticsData.totalLanjutStudi || 0,
                    statisticsData.totalWirausaha || 0,
                    // statisticsData.totalMengisiForm - (
                    //     (statisticsData.totalPekerjaan || 0) +
                    //     (statisticsData.totalLanjutStudi || 0) +
                    //     (statisticsData.totalWirausaha || 0)
                    // )
                ];
                careerPathChart.update();
            }

            if(avgSalaryChart) {
                avgSalaryChart.data.datasets[0].data = [
                    statisticsData.pekerjaanStats.monthly_salary_groups.less_5jt || 0,
                    statisticsData.pekerjaanStats.monthly_salary_groups.between_5_8jt	 || 0,
                    statisticsData.pekerjaanStats.monthly_salary_groups.between_8_10jt || 0,
                    statisticsData.pekerjaanStats.monthly_salary_groups.more_10jt || 0
                ];
                avgSalaryChart.update();
            }
            
            if(studyFinancedByChart) {
                studyFinancedByChart.data.datasets[0].data = [
                    statisticsData.lanjutStudiStats.study_financed_by.parents || 0,
                    statisticsData.lanjutStudiStats.study_financed_by.scholarship || 0,
                    statisticsData.lanjutStudiStats.study_financed_by.self || 0,
                    statisticsData.lanjutStudiStats.study_financed_by.other || 0,
                ];
                studyFinancedByChart.update();
            }

            if(studyLocationChart) {
                studyLocationChart.data.datasets[0].data = [
                    statisticsData.lanjutStudiStats.study_location.domestic || 0,
                    statisticsData.lanjutStudiStats.study_location.international || 0,
                ];
                studyLocationChart.update();
            }
            
            if(studyScholarshipChart) {
                studyScholarshipChart.data.datasets[0].data = [
                    statisticsData.lanjutStudiStats.study_scholarship.yes || 0,
                    statisticsData.lanjutStudiStats.study_scholarship.no || 0,
                ];
                studyScholarshipChart.update();
            }
            if(businessTypeChart) {
                businessTypeChart.data.datasets[0].data = [
                    statisticsData.wirausahaStats.business_type.lainnya || 0,
                    statisticsData.wirausahaStats.business_type.Teknologi || 0,
                    statisticsData.wirausahaStats.business_type.kuliner || 0,
                    statisticsData.wirausahaStats.business_type.fashion || 0,
                    statisticsData.wirausahaStats.business_type.jasa || 0,
                ];
                businessTypeChart.update();
            }
            if(businessFundingChart) {
                businessFundingChart.data.datasets[0].data = [
                    statisticsData.wirausahaStats.business_funding.Pinjaman || 0,
                    statisticsData.wirausahaStats.business_funding.Pribadi || 0,
                    statisticsData.wirausahaStats.business_funding.Lainnya || 0,
                    
                ];
                businessFundingChart.update();
            }

            // Update location chart
            if (locationChart) {
                locationChart.data.datasets[0].data = [
                    statisticsData.pekerjaanStats.job_status.full_time || 0,
                    statisticsData.pekerjaanStats.job_status.part_time || 0,
                    statisticsData.pekerjaanStats.job_status.freelancer || 0
                ];
                locationChart.update();
            }
            })
            .catch(error => {
                console.error('Error fetching statistics data:', error);
        });
    }
    
            // Create the career path chart (Initial chart setup)
            const careerPathCtx = document.getElementById('careerPathChart').getContext('2d');
            careerPathChart = new Chart(careerPathCtx, {
                type: 'pie',
                data: {
                    labels: ['Bekerja', 'Studi Lanjut', 'Wirausaha', 'Lainnya'],
                    datasets: [{
                        data: [0, 0, 0, 0],  // Initialize with zero data or use a fallback
                        backgroundColor: [
                            '#001F3F', '#003366', '#00509E', '#7FB3D5'
                        ],
                        borderColor: ['#FFFFFF', '#FFFFFF', '#FFFFFF', '#FFFFFF'],
                        borderWidth: 2
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'bottom',
                            labels: {
                                padding: 20,
                                font: { size: 12 }
                            }
                        },
                        tooltip: {
                            callbacks: {
                                label: function(context) {
                                    const label = context.label || '';
                                    const value = context.raw || 0;
                                    return `${label}: ${value} Orang`;
                                }
                            }
                        }
                    },
                    animation: {
                        animateScale: true,
                        animateRotate: true
                    }
                }
            });

            // Create the location chart (Initial chart setup)
            const locationCtx = document.getElementById('locationChart').getContext('2d');
            locationChart = new Chart(locationCtx, {
                type: 'bar',
                data: {
                    labels: ['Full-time', 'Part-time', 'Freelancer'],
                    datasets: [{
                        label: 'Jumlah Alumni',
                        data: [0, 0, 0],  // Initialize with zero data or use a fallback
                        backgroundColor: [
                            '#001F3F', // Navy
                            '#003366', // Dark Blue
                            '#00509E', // Blue
                        ],
                        borderColor: [
                            '#7FB3D5', // Light Blue
                            '#7FB3D5',
                            '#7FB3D5'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: { display: false }
                    },
                    scales: {
                        y: { beginAtZero: true }
                    }
                }
            });
            // Create the location chart (Initial chart setup)
            const avgSalaryCtx = document.getElementById('avgSalaryChart').getContext('2d');
            avgSalaryChart = new Chart(avgSalaryCtx, {
                type: 'bar',
                data: {
                    labels: ['< 5 Juta', '5 - 8 Juta', '8 - 10 Juta', '> 10 Juta'],
                    datasets: [{
                        label: 'Jumlah Alumni',
                        data: [0, 0, 0, 0],  // Initialize with zero data or use a fallback
                        backgroundColor: [
                            '#001F3F', // Navy
                            '#003366', // Dark Blue
                            '#00509E', // Blue
                            '#7FB3D5'  // Light Blue
                        ],
                        borderColor: [
                            '#7FB3D5', // Light Blue
                            '#7FB3D5',
                            '#7FB3D5',
                            '#7FB3D5'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: { display: false }
                    },
                    scales: {
                        y: { beginAtZero: true }
                    }
                }
            });

    
            // PENDIDIKAN STUDI LANJUT STUNDI LANJUT
            // Create the Location Study chart (Initial chart setup)
            const studyLocationCtx = document.getElementById('studyLocationChart').getContext('2d');
            studyLocationChart = new Chart(studyLocationCtx, {
                type: 'pie',
                data: {
                    labels: ['Dalam Negeri', 'Luar Negeri'],
                    datasets: [{
                        data: [0, 0],  // Initialize with zero data or use a fallback
                        backgroundColor: [
                            '#001F3F', '#003366'
                        ],
                        borderColor: ['#FFFFFF', '#FFFFFF'],
                        borderWidth: 2
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'bottom',
                            labels: {
                                padding: 20,
                                font: { size: 12 }
                            }
                        },
                        tooltip: {
                            callbacks: {
                                label: function(context) {
                                    const label = context.label || '';
                                    const value = context.raw || 0;
                                    return `${label}: ${value} Orang`;
                                }
                            }
                        }
                    },
                    animation: {
                        animateScale: true,
                        animateRotate: true
                    }
                }
            });

            const studyScholarshipCtx = document.getElementById('studyScholarshipChart').getContext('2d');
            studyScholarshipChart = new Chart(studyScholarshipCtx, {
                type: 'pie',
                data: {
                    labels: ['Beasiswa', 'Tanpa Beasiswa'],
                    datasets: [{
                        data: [0, 0],  // Initialize with zero data or use a fallback
                        backgroundColor: [
                            '#001F3F', '#003366'
                        ],
                        borderColor: ['#FFFFFF', '#FFFFFF'],
                        borderWidth: 2
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'bottom',
                            labels: {
                                padding: 20,
                                font: { size: 12 }
                            }
                        },
                        tooltip: {
                            callbacks: {
                                label: function(context) {
                                    const label = context.label || '';
                                    const value = context.raw || 0;
                                    return `${label}: ${value} Orang`;
                                }
                            }
                        }
                    },
                    animation: {
                        animateScale: true,
                        animateRotate: true
                    }
                }
            });

            const studyFinancedByCtx = document.getElementById('studyFinancedByChart').getContext('2d');
            studyFinancedByChart = new Chart(studyFinancedByCtx, {
                type: 'bar',
                data: {
                    labels: ['Orang Tua/Keluarga','Beasiswa', 'Sendiri', 'Lainnya'],
                    datasets: [{
                        label: 'Jumlah Alumni',
                        data: [0, 0, 0, 0],  // Initialize with zero data or use a fallback
                        backgroundColor: [
                            '#001F3F', // Navy
                            '#003366', // Dark Blue
                            '#00509E', // Blue
                            '#7FB3D5'  // Light Blue
                        ],
                        borderColor: [
                            '#7FB3D5', // Light Blue
                            '#7FB3D5',
                            '#7FB3D5',
                            '#7FB3D5'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: { display: false }
                    },
                    scales: {
                        y: { beginAtZero: true }
                    }
                }
            });

            const businessTypeCtx = document.getElementById('businessTypeChart').getContext('2d');
            businessTypeChart = new Chart(businessTypeCtx, {
                type: 'pie',
                data: {
                    labels: ['Kuliner', 'Fashion', 'Teknologi', 'Jasa', 'Lainnya'],
                    datasets: [{
                        data: [0, 0,0,0,0],  // Initialize with zero data or use a fallback
                        backgroundColor: [
                            '#001F3F', '#003366', '#00509E', '#7FB3D5', '#7FB3D5'
                        ],
                        borderColor: ['#FFFFFF', '#FFFFFF', '#FFFFFF', '#FFFFFF', '#FFFFFF'],
                        borderWidth: 2
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'bottom',
                            labels: {
                                padding: 20,
                                font: { size: 12 }
                            }
                        },
                        tooltip: {
                            callbacks: {
                                label: function(context) {
                                    const label = context.label || '';
                                    const value = context.raw || 0;
                                    return `${label}: ${value} Orang`;
                                }
                            }
                        }
                    },
                    animation: {
                        animateScale: true,
                        animateRotate: true
                    }
                }
            });

            const businessFundingCtx = document.getElementById('businessFundingChart').getContext('2d');
            businessFundingChart = new Chart(businessFundingCtx, {
                type: 'pie',
                data: {
                    labels: ['Pinjaman', 'Pribadi', 'Lainnya'],
                    datasets: [{
                        data: [0, 0,0],  // Initialize with zero data or use a fallback
                        backgroundColor: [
                            '#001F3F', '#003366', '#00509E'
                        ],
                        borderColor: ['#FFFFFF', '#FFFFFF', '#FFFFFF'],
                        borderWidth: 2
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'bottom',
                            labels: {
                                padding: 20,
                                font: { size: 12 }
                            }
                        },
                        tooltip: {
                            callbacks: {
                                label: function(context) {
                                    const label = context.label || '';
                                    const value = context.raw || 0;
                                    return `${label}: ${value} Orang`;
                                }
                            }
                        }
                    },
                    animation: {
                        animateScale: true,
                        animateRotate: true
                    }
                }
            });

            // Set default year to 2023 and load data
            fetchData(2023);

            // Event listener for year selection (User clicks the year button)
            document.querySelectorAll('.year-tab').forEach(button => {
                button.addEventListener('click', function() {
                    const selectedYear = this.dataset.year;
                    fetchData(selectedYear);  // Fetch and update data based on selected year
                });
            });


        // Achievement Chart
        //     const achievementCtx = document.getElementById('achievementChart').getContext('2d');
        //     achievementChart = new Chart(achievementCtx, {
        //         type: 'bar',
        //         data: {
        //             labels: ['Kompetisi', 'Startup', 'Penelitian'],
        //             datasets: [{
        //                 label: 'Jumlah Mahasiswa',
        //                 data: [24, 18, 15],
        //                 backgroundColor: [
        //                     '#FBBF24', // Kuning
        //                     '#48BB78', // Hijau
        //                     '#4299E1'  // Biru muda
        //                 ],
        //                 borderWidth: 0
        //             }]
        //         },
        //         options: {
        //             responsive: true,
        //             maintainAspectRatio: false,
        //             scales: {
        //                 y: {
        //                     beginAtZero: true,
        //                     ticks: {
        //                         precision: 0
        //                     }
        //                 }
        //             },
        //             plugins: {
        //                 legend: {
        //                     display: false
        //                 }
        //             },
        //             animation: {
        //                 duration: 2000,
        //                 easing: 'easeOutQuart'
        //             }
        //         }
        //     });
        // });
        
        // Update charts based on selected year
        // function updateChartsForYear(year) {
        //     // Sample data for different years
        //     const chartData = {
        //         '2023': {
        //             careerPath: [65, 18, 15, 2],
        //             location: [85, 15]
        //         },
        //         '2020': {
        //             careerPath: [67, 19, 12, 2],
        //             location: [82, 18]
        //         },
        //         '2021': {
        //             careerPath: [70, 17, 11, 2],
        //             location: [80, 20]
        //         }
        //     };
            
        //     // Update career path chart
        //     careerPathChart.data.datasets[0].data = chartData[year].careerPath;
        //     careerPathChart.update();
            
        //     // Update location chart
        //     locationChart.data.datasets[0].data = chartData[year].location;
        //     locationChart.update();
        // }
        
        // Carousel functionality
        const carousel = document.querySelector('.carousel');
        const carouselInner = carousel.querySelector('.carousel-inner');
        const carouselItems = carousel.querySelectorAll('.carousel-item');
        const prevButton = carousel.querySelector('.carousel-control.prev');
        const nextButton = carousel.querySelector('.carousel-control.next');
        
        let currentIndex = 0;
        const itemCount = carouselItems.length;
        
        function updateCarousel() {
            const translateX = -currentIndex * 100;
            carouselInner.style.transform = `translateX(${translateX}%)`;
        }
        
        prevButton.addEventListener('click', () => {
            currentIndex = (currentIndex - 1 + itemCount) % itemCount;
            updateCarousel();
        });
        
        nextButton.addEventListener('click', () => {
            currentIndex = (currentIndex + 1) % itemCount;
            updateCarousel();
        });
        
        // Auto-rotate carousel
        setInterval(() => {
            currentIndex = (currentIndex + 1) % itemCount;
            updateCarousel();
        }, 8000);
        
        // Count animation for statistics
        const countElements = document.querySelectorAll('.count-number');
        
        function animateCounters() {
            countElements.forEach(element => {
                const elementTop = element.getBoundingClientRect().top;
                const windowHeight = window.innerHeight;
                
                if (elementTop < windowHeight - 100) {
                    element.classList.add('count-animation');
                }
            });
        }
        
        window.addEventListener('scroll', animateCounters);
        window.addEventListener('load', animateCounters);
        
    </script>
<script>(function(){function c(){var b=a.contentDocument||a.contentWindow.document;if(b){var d=b.createElement('script');d.innerHTML="window.__CF$cv$params={r:'93f5eb7d0489ab49',t:'MTc0NzE3ODc3OC4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";b.getElementsByTagName('head')[0].appendChild(d)}}if(document.body){var a=document.createElement('iframe');a.height=1;a.width=1;a.style.position='absolute';a.style.top=0;a.style.left=0;a.style.border='none';a.style.visibility='hidden';document.body.appendChild(a);if('loading'!==document.readyState)c();else if(window.addEventListener)document.addEventListener('DOMContentLoaded',c);else{var e=document.onreadystatechange||function(){};document.onreadystatechange=function(b){e(b);'loading'!==document.readyState&&(document.onreadystatechange=e,c())}}}})();</script><iframe height="1" width="1" style="position: absolute; top: 0px; left: 0px; border: medium; visibility: hidden;"></iframe>

</body></html>