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

            validateEmployed() {
                if (!this.employed) return false;
                if (this.employed === 'yes') {
                    return this.industri && this.status_pekerjaan && this.gaji && this.lokasi_pekerjaan && this
                        .waktu_tunggu && this.faktor_pekerjaan;
                }
                if (this.employed === 'no') {
                    if (!this.everEmployed) return false;
                    if (this.everEmployed === 'yes') {
                        if (!this.last_job_title || !this.last_company || !this.reason_left || !this.current_activity)
                            return false;
                    }
                    if (this.everEmployed === 'no') {
                        if (!this.never_employed_reason || !this.never_employed_looking || !this
                            .never_employed_business) return false;
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
                // Focus the first invalid input if any
                if (!this.validateEmployed()) {
                    alert('Silakan lengkapi semua data pekerjaan.');
                    this.isValid = false;
                    this.$nextTick(() => {
                        let invalid = event.target.querySelector(
                            '[x-model]:invalid, [x-model][aria-invalid="true"]');
                        if (invalid && typeof invalid.focus === 'function') invalid.focus();
                    });
                    return;
                }
                if (!this.validateGeneral()) {
                    alert('Silakan lengkapi data umum.');
                    this.isValid = false;
                    this.$nextTick(() => {
                        let invalid = event.target.querySelector(
                            '[x-model]:invalid, [x-model][aria-invalid="true"]');
                        if (invalid && typeof invalid.focus === 'function') invalid.focus();
                    });
                    return;
                }
                // Ensure all fields are enabled before submit (for hidden fields)
                Array.from(event.target.elements).forEach(el => {
                    if (el.hasAttribute('disabled')) el.removeAttribute('disabled');
                });
                this.isValid = true;
                event.target.closest('form').submit();
            },
            init() {
                this.$watch(
                    () => [
                        this.employed, this.industri, this.status_pekerjaan, this.gaji, this.lokasi_pekerjaan, this
                        .waktu_tunggu, this.faktor_pekerjaan,
                        this.everEmployed, this.last_job_title, this.last_company, this.reason_left, this
                        .current_activity,
                        this.never_employed_reason, this.never_employed_looking, this.never_employed_business,
                        this.desired_industry, this.plan_study,
                        this.hasBusiness, this.business_name, this.interest_return_school
                    ],
                    () => {
                        this.isValid = this.validateEmployed() && this.validateGeneral();
                    }, {
                        deep: true
                    }
                );
                this.$watch('employed', (val, old) => {
                    if (val !== old) {
                        if (val !== 'no') {
                            this.everEmployed = '';
                            this.last_job_title = '';
                            this.last_company = '';
                            this.reason_left = '';
                            this.current_activity = '';
                            this.never_employed_reason = '';
                            this.never_employed_looking = '';
                            this.never_employed_business = '';
                            this.desired_industry = '';
                            this.plan_study = '';
                        }
                        if (val !== 'yes') {
                            this.industri = '';
                            this.status_pekerjaan = '';
                            this.gaji = '';
                            this.lokasi_pekerjaan = '';
                            this.waktu_tunggu = '';
                            this.faktor_pekerjaan = '';
                        }
                    }
                });
                this.$watch('hasBusiness', (val, old) => {
                    if (val !== old && val !== 'yes') {
                        this.business_name = '';
                    }
                });
            }
        }
    }
</script>
