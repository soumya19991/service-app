<!-- Registration Modal -->
<div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content border-warning border-2">
            <div class="modal-header bg-warning text-dark">
                <h5 class="modal-title" id="registerModalLabel">Create Your Account</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
                <form action="{{ route('store.vendor') }}" method="post" autocomplete="off">
                    @csrf
                    <div class="row g-3">

                        <!-- Name -->
                        <div class="col-md-6">
                            <label class="form-label">Full Name</label>
                            <input type="text" name="name"
                                class="form-control @error('name') is-invalid @enderror" placeholder="Your full name"
                                value="{{ old('name') }}" required>
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Email -->
                        <div class="col-md-6">
                            <label class="form-label">Email address</label>
                            <input type="email" name="email"
                                class="form-control @error('email') is-invalid @enderror" placeholder="your@email.com"
                                value="{{ old('email') }}" required>
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Phone -->
                        <div class="col-md-6">
                            <label class="form-label">Phone Number</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light text-dark fw-bold">+91</span>
                                <input type="tel" name="phone"
                                    class="form-control @error('phone') is-invalid @enderror"
                                    placeholder="Enter 10-digit mobile number" value="{{ old('phone') }}"
                                    maxlength="10" pattern="[0-9]{10}" required>
                                @error('phone')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>




                        <!-- Pin Code -->
                        <div class="col-md-6">
                            <label class="form-label">Pin Code</label>
                            <input type="text" name="pincode"
                                class="form-control @error('pincode') is-invalid @enderror"
                                placeholder="Enter your pin code" value="{{ old('pincode') }}" required>
                            @error('pincode')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <!-- City -->
                        <div class="col-md-6">
                            <label class="form-label">City</label>
                            <input type="text" name="city"
                                class="form-control @error('city') is-invalid @enderror" placeholder="Enter your city"
                                value="{{ old('city') }}" required>
                            @error('city')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Service -->
                        <div class="col-md-6">
                            <label class="form-label">Select Service</label>
                            <select name="service" class="form-select @error('service') is-invalid @enderror" required>
                                <option value="">-- Select Service --</option>
                                @foreach ($services as $service)
                                    <option value="{{ $service->id }}">{{ $service->name }}</option>
                                @endforeach
                                {{-- <option value="loan">Loan</option>
                                <option value="insurance">Insurance</option>
                                <option value="investment">Investment</option> --}}
                            </select>
                            @error('service')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Dynamic Service Fields -->
                        <div id="service-extra-fields" class="col-12"></div>

                        <!-- Password -->
                        <div class="col-md-6">
                            <label class="form-label">Password</label>
                            <div class="input-group input-group-flat">
                                <input type="password" name="password"
                                    class="form-control @error('password') is-invalid @enderror"
                                    placeholder="Enter password" required>
                                <span class="input-group-text">
                                    <a href="#" class="link-dark" title="Show password" data-bs-toggle="tooltip">
                                        <i class="bi bi-eye"></i>
                                    </a>
                                </span>
                            </div>
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Confirm Password -->
                        <div class="col-md-6">
                            <label class="form-label">Confirm Password</label>
                            <input type="password" name="password_confirmation"
                                class="form-control @error('password_confirmation') is-invalid @enderror"
                                placeholder="Confirm password" required>
                            @error('password_confirmation')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Terms -->
                        <div class="col-12">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" required>
                                <label class="form-check-label">I agree to the <a href="#">terms and
                                        conditions</a>.</label>
                            </div>
                        </div>

                        <!-- Submit -->
                        <div class="col-12">
                            <button type="submit" class="btn btn-warning btn-lg w-100">Create Account</button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="modal-footer justify-content-center bg-light">
                Already have an account? <a href="{{ route('login') }}" class="text-warning ms-2">Sign in</a>
            </div>
        </div>
    </div>
</div>

@if ($errors->any())
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var registerModal = new bootstrap.Modal(document.getElementById('registerModal'));
            registerModal.show();
        });
    </script>
@endif

<!-- Dynamic Service Fields Script -->
<script>
    document.addEventListener("DOMContentLoaded", () => {
        const serviceSelect = document.querySelector('select[name="service"]');
        const extraFieldsContainer = document.getElementById('service-extra-fields');

        serviceSelect.addEventListener('change', () => {
            const selected = serviceSelect.value;
            extraFieldsContainer.innerHTML = '';

            if (selected === 'loan') {
                extraFieldsContainer.innerHTML = `
                <div class="row g-3 fade-in">
                    <div class="col-md-6">
                        <label class="form-label">Loan Amount</label>
                        <input type="number" name="loan_amount" class="form-control" placeholder="Enter loan amount" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Loan Type</label>
                        <input type="text" name="loan_type" class="form-control" placeholder="e.g. Personal, Home, Car" required>
                    </div>
                </div>
            `;
            } else if (selected === 'insurance') {
                extraFieldsContainer.innerHTML = `
                <div class="row g-3 fade-in">
                    <div class="col-md-6">
                        <label class="form-label">Policy Number</label>
                        <input type="text" name="policy_number" class="form-control" placeholder="Enter policy number" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Coverage Type</label>
                        <input type="text" name="coverage_type" class="form-control" placeholder="e.g. Health, Life" required>
                    </div>
                </div>
            `;
            } else if (selected === 'investment') {
                extraFieldsContainer.innerHTML = `
                <div class="row g-3 fade-in">
                    <div class="col-md-6">
                        <label class="form-label">Investment Type</label>
                        <input type="text" name="investment_type" class="form-control" placeholder="e.g. FD, SIP" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Investment Amount</label>
                        <input type="number" name="investment_amount" class="form-control" placeholder="Enter amount" required>
                    </div>
                </div>
            `;
            }
        });
    });
</script>

<!-- Modal Custom Style -->
<style>
    .modal-content {
        border-radius: 1rem;
    }

    .fade-in {
        animation: fadeIn 0.5s ease-in;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(10px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .btn-warning {
        background-color: #FFC107;
        border-color: #FFC107;
        color: #212529;
    }

    .btn-warning:hover {
        background-color: #FFB300;
        border-color: #FFB300;
    }

    .form-control:focus,
    .form-select:focus {
        border-color: #FFC107;
        box-shadow: 0 0 0 0.25rem rgba(255, 193, 7, 0.25);
    }

    .input-group-text {
        background-color: #FFF8E1;
        border-color: #FFC107;
    }
</style>
