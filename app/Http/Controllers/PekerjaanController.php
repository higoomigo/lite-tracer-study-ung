<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Pekerjaan;
use Illuminate\Http\Request;

class PekerjaanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('forms.pekerjaan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // <script>
        //         function tracerForm() {
        //             return {
        //                 employed: '',
        //                 industri: '',
        //                 status_pekerjaan: '',
        //                 gaji: '',
        //                 lokasi_pekerjaan: '',
        //                 waktu_tunggu: '',
        //                 faktor_pekerjaan: '',
        //                 everEmployed: '',
        //                 last_job_title: '',
        //                 last_company: '',
        //                 reason_left: '',
        //                 current_activity: '',
        //                 never_employed_reason: '',
        //                 never_employed_looking: '',
        //                 never_employed_business: '',
        //                 desired_industry: '',
        //                 plan_study: '',
        //                 hasBusiness: '',
        //                 business_name: '',
        //                 interest_return_school: '',
        //                 bukti_pekerjaan: null, // Tambahan untuk input gambar
        //                 isValid: false,

        //                 validateEmployed() {
        //                     if (!this.employed) return false;
        //                     if (this.employed === 'yes') {
        //                         // bukti_pekerjaan opsional, tidak perlu dicek
        //                         return this.industri && this.status_pekerjaan && this.gaji && this.lokasi_pekerjaan && this.waktu_tunggu && this.faktor_pekerjaan;
        //                     }
        //                     if (this.employed === 'no') {
        //                         if (!this.everEmployed) return false;
        //                         if (this.everEmployed === 'yes') {
        //                             if (!this.last_job_title || !this.last_company || !this.reason_left || !this.current_activity) return false;
        //                         }
        //                         if (this.everEmployed === 'no') {
        //                             if (!this.never_employed_reason || !this.never_employed_looking || !this.never_employed_business) return false;
        //                         }
        //                         if (!this.desired_industry || !this.plan_study) return false;
        //                     }
        //                     return true;
        //                 },
        //                 validateGeneral() {
        //                     if (!this.hasBusiness) return false;
        //                     if (this.hasBusiness === 'yes' && !this.business_name) return false;
        //                     if (!this.interest_return_school) return false;
        //                     return true;
        //                 },
        //                 validateImage() {
        //                     // Validasi file gambar jika ada
        //                     if (this.bukti_pekerjaan) {
        //                         const file = this.bukti_pekerjaan;
        //                         const allowedTypes = ['image/jpeg', 'image/png', 'image/jpg'];
        //                         if (!allowedTypes.includes(file.type)) {
        //                             alert('Format gambar harus JPG, JPEG, atau PNG.');
        //                             return false;
        //                         }
        //                         if (file.size > 2 * 1024 * 1024) {
        //                             alert('Ukuran gambar maksimal 2MB.');
        //                             return false;
        //                         }
        //                     }
        //                     return true;
        //                 },
        //                 validateForm(event) {
        //                     if (!this.validateEmployed()) {
        //                         alert('Silakan lengkapi semua data pekerjaan.');
        //                         this.isValid = false;
        //                         this.$nextTick(() => {
        //                             let invalid = event.target.querySelector('[x-model]:invalid, [x-model][aria-invalid="true"]');
        //                             if (invalid && typeof invalid.focus === 'function') invalid.focus();
        //                         });
        //                         return;
        //                     }
        //                     if (!this.validateGeneral()) {
        //                         alert('Silakan lengkapi data umum.');
        //                         this.isValid = false;
        //                         this.$nextTick(() => {
        //                             let invalid = event.target.querySelector('[x-model]:invalid, [x-model][aria-invalid="true"]');
        //                             if (invalid && typeof invalid.focus === 'function') invalid.focus();
        //                         });
        //                         return;
        //                     }
        //                     if (!this.validateImage()) {
        //                         this.isValid = false;
        //                         return;
        //                     }
        //                     // Ensure all fields are enabled before submit (for hidden fields)
        //                     Array.from(event.target.elements).forEach(el => {
        //                         if (el.hasAttribute('disabled')) el.removeAttribute('disabled');
        //                     });
        //                     this.isValid = true;
        //                     event.target.closest('form').submit();
        //                 },
        //                 init() {
        //                     this.$watch(
        //                         () => [
        //                             this.employed, this.industri, this.status_pekerjaan, this.gaji, this.lokasi_pekerjaan, this.waktu_tunggu, this.faktor_pekerjaan,
        //                             this.everEmployed, this.last_job_title, this.last_company, this.reason_left, this.current_activity,
        //                             this.never_employed_reason, this.never_employed_looking, this.never_employed_business,
        //                             this.desired_industry, this.plan_study,
        //                             this.hasBusiness, this.business_name, this.interest_return_school,
        //                             this.bukti_pekerjaan // tambahkan watcher untuk gambar
        //                         ],
        //                         () => {
        //                             this.isValid = this.validateEmployed() && this.validateGeneral() && this.validateImage();
        //                         },
        //                         { deep: true }
        //                     );
        //                     this.$watch('employed', (val, old) => {
        //                         if (val !== old) {
        //                             if (val !== 'no') {
        //                                 this.everEmployed = '';
        //                                 this.last_job_title = '';
        //                                 this.last_company = '';
        //                                 this.reason_left = '';
        //                                 this.current_activity = '';
        //                                 this.never_employed_reason = '';
        //                                 this.never_employed_looking = '';
        //                                 this.never_employed_business = '';
        //                                 this.desired_industry = '';
        //                                 this.plan_study = '';
        //                             }
        //                             if (val !== 'yes') {
        //                                 this.industri = '';
        //                                 this.status_pekerjaan = '';
        //                                 this.gaji = '';
        //                                 this.lokasi_pekerjaan = '';
        //                                 this.waktu_tunggu = '';
        //                                 this.faktor_pekerjaan = '';
        //                                 this.bukti_pekerjaan = null;
        //                                 // Reset file input jika berpindah dari employed yes
        //                                 const fileInput = document.getElementById('bukti_pekerjaan');
        //                                 if (fileInput) fileInput.value = '';
        //                             }
        //                         }
        //                     });
        //                     this.$watch('hasBusiness', (val, old) => {
        //                         if (val !== old && val !== 'yes') {
        //                             this.business_name = '';
        //                         }
        //                     });
        //                 }
        //             }
        //         }
        //         document.addEventListener('alpine:init', () => {
        //             Alpine.data('tracerForm', tracerForm);
        //         });
        //         // Listener untuk input file
        //         document.addEventListener('DOMContentLoaded', function () {
        //             const fileInput = document.getElementById('bukti_pekerjaan');
        //             if (fileInput) {
        //                 fileInput.addEventListener('change', function (e) {
        //                     const alpineComponent = Alpine.closestDataStack(fileInput)?.[0];
        //                     if (alpineComponent) {
        //                         alpineComponent.bukti_pekerjaan = fileInput.files[0] || null;
        //                     }
        //                 });
        //             }
        //         });
        //         </script>


        $validatedData = $request->validate([
            'employed' => 'required|string',
            'industri' => 'nullable|string',
            'status_pekerjaan' => 'nullable|string',
            'gaji' => 'nullable|numeric',
            'lokasi_pekerjaan' => 'nullable|string',
            'waktu_tunggu' => 'nullable|numeric',
            'faktor_pekerjaan' => 'nullable|string',
            'everEmployed' => 'nullable|string',
            'last_job_title' => 'nullable|string',
            'last_company' => 'nullable|string',
            'reason_left' => 'nullable|string',
            'current_activity' => 'nullable|string',
            'never_employed_reason' => 'nullable|string',
            'never_employed_looking' => 'nullable|string',
            'never_employed_business' => 'nullable|string',
            'desired_industry' => 'nullable|string',
            'plan_study' => 'nullable|string',
            'hasBusiness' => 'nullable|string',
            'business_name' => 'nullable|string',
            'interest_return_school' => 'nullable|string',
            'bukti_pekerjaan' => 'nullable|image|mimes:jpg,jpeg,png|max:2048', // max 2MB
        ]);

        // Sanitize gaji to ensure only digits are stored (for bigInt)
        if (isset($validatedData['gaji'])) {
            $validatedData['gaji'] = preg_replace('/\D/', '', $validatedData['gaji']);
        }

        // Handle file upload if exists
        $buktiPekerjaanPath = null;
        if ($request->hasFile('bukti_pekerjaan')) {
            $buktiPekerjaanPath = $request->file('bukti_pekerjaan')->store('bukti_pekerjaan', 'public');
        }

        // Store the data in the tracer_studies table
        Pekerjaan::create([
            'employed' => $validatedData['employed'],
            'industry' => $validatedData['industri'] ?? null,
            'job_status' => $validatedData['status_pekerjaan'] ?? null,
            'monthly_salary' => $validatedData['gaji'] ?? null,
            'job_location' => $validatedData['lokasi_pekerjaan'] ?? null,
            'waiting_time' => $validatedData['waktu_tunggu'] ?? null,
            'job_choice_factor' => $validatedData['faktor_pekerjaan'] ?? null,
            'ever_employed' => $validatedData['everEmployed'] ?? 'no',
            'last_job_title' => $validatedData['last_job_title'] ?? null,
            'last_company' => $validatedData['last_company'] ?? null,
            'reason_left' => $validatedData['reason_left'] ?? null,
            'current_activity' => $validatedData['current_activity'] ?? null,
            'never_employed_reason' => $validatedData['never_employed_reason'] ?? null,
            'never_employed_looking' => $validatedData['never_employed_looking'] ?? null,
            'never_employed_business' => $validatedData['never_employed_business'] ?? null,
            'desired_industry' => $validatedData['desired_industry'] ?? null,
            'plan_study' => $validatedData['plan_study'] ?? null,
            'has_business' => $validatedData['hasBusiness'] ?? null,
            'business_name' => $validatedData['business_name'] ?? null,
            'interest_return_school' => $validatedData['interest_return_school'] ?? null,
            'bukti_pekerjaan' => $buktiPekerjaanPath,
            'user_id' => Auth::id(),
        ]);

        // Return success message and redirect
        return redirect()->route('user.dashboard')->with('success', 'Your form has been successfully submitted!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pekerjaan $pekerjaan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pekerjaan $pekerjaan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pekerjaan $pekerjaan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pekerjaan $pekerjaan)
    {
        //
    }
}
