<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Register - Tabler Styled Form</title>
    <!-- Tabler CSS -->
    <link href="{{ asset('assets/css/tabler.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/tabler-flags.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/tabler-payments.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/tabler-venders.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/demo.min.css') }}" rel="stylesheet" />
    <style>
        @import url('https://rsms.me/inter/inter.css');

        :root {
            --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
        }

        body {
            font-feature-settings: "cv03", "cv04", "cv11";
            /* Optional gradient background */
            /* background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); */
        }

        /* Fade animation for dynamic fields */
        .fade-in {
            animation: fadeIn 0.4s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-5px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body class="d-flex flex-column">
    <script src="{{ asset('assets/js/demo-theme.min.js') }}"></script>
    <div class="page page-center">
        <div class="container container-tight py-4">
            <div class="text-center mb-4">
                <a href="#" class="navbar-brand navbar-brand-autodark">
                    <img src="#" height="80" alt="Logo">
                </a>
            </div>
            <div class="card card-md shadow-lg">
                <div class="card-body">
                    <h2 class="h2 text-center mb-4">Create your account</h2>

                    <form action="{{ route('store.user') }}" method="post" autocomplete="off">
                        @csrf
                        <div class=row>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Full Name</label>
                                <input type="text" name="name"
                                    class="form-control @error('name') is-invalid @enderror"
                                    placeholder="Your full name" value="{{ old('name') }}" required>
                                @error('name')
                                    <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label">Email address</label>
                                <input type="email" name="email"
                                    class="form-control @error('email') is-invalid @enderror"
                                    placeholder="your@email.com" value="{{ old('email') }}" required>
                                @error('email')
                                    <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label">Phone Number</label>
                                <input type="tel" name="phone"
                                    class="form-control @error('phone') is-invalid @enderror"
                                    placeholder="e.g. +91 98765 43210" value="{{ old('phone') }}" required>
                                @error('phone')
                                    <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                                @enderror
                            </div>

                            <!-- Service Dropdown -->
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Select Service</label>
                                <select name="service" class="form-select @error('service') is-invalid @enderror"
                                    required>
                                    <option value="">-- Select Service --</option>
                                    <option value="loan">Loan</option>
                                    <option value="insurance">Insurance</option>
                                    <option value="investment">Investment</option>
                                </select>
                                @error('service')
                                    <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                                @enderror
                            </div>

                            <!-- Dynamic Extra Fields -->
                            <div id="service-extra-fields"></div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label">Password</label>
                                <div class="input-group input-group-flat">
                                    <input type="password" name="password"
                                        class="form-control @error('password') is-invalid @enderror"
                                        placeholder="Enter password" required>
                                    <span class="input-group-text">
                                        <a href="#" class="link-secondary" title="Show password"
                                            data-bs-toggle="tooltip">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24"
                                                height="24" viewBox="0 0 24 24" stroke-width="2"
                                                stroke="currentColor" fill="none" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                                                <path
                                                    d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
                                            </svg>
                                        </a>
                                    </span>
                                </div>
                                @error('password')
                                    <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label">Confirm Password</label>
                                <input type="password" name="password_confirmation"
                                    class="form-control @error('password_confirmation') is-invalid @enderror"
                                    placeholder="Confirm password" required>
                                @error('password_confirmation')
                                    <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                                @enderror
                            </div>

                            <div class="col-md-12 mb-3">
                                <label class="form-check">
                                    <input type="checkbox" class="form-check-input" required>
                                    <span class="form-check-label">I agree to the <a href="#">terms and
                                            conditions</a>.</span>
                                </label>
                            </div>

                            <div class="">
                                <button type="submit" class="btn btn-primary w-100">Create Account</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="text-center text-secondary ">
                    Already have an account? <a href="{{ route('login') }}" class="text-primary">Sign in</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Tabler JS -->
    <script src="{{ asset('assets/js/tabler.min.js') }}" defer></script>
    <script src="{{ asset('assets/js/demo.min.js') }}" defer></script>

    <!-- Dynamic Service Fields Script -->
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const serviceSelect = document.querySelector('select[name="service"]');
            const extraFieldsContainer = document.getElementById('service-extra-fields');

            serviceSelect.addEventListener('change', () => {
                const selected = serviceSelect.value;
                extraFieldsContainer.innerHTML = ''; // Clear previous fields

                if (selected === 'loan') {
                    extraFieldsContainer.innerHTML = `
                        <div class="fade-in">
                            <div class="mb-3">
                                <label class="form-label">Loan Amount</label>
                                <input type="number" name="loan_amount" class="form-control" placeholder="Enter loan amount" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Loan Type</label>
                                <input type="text" name="loan_type" class="form-control" placeholder="e.g. Personal, Home, Car" required>
                            </div>
                        </div>
                    `;
                } else if (selected === 'insurance') {
                    extraFieldsContainer.innerHTML = `
                        <div class="fade-in">
                            <div class="mb-3">
                                <label class="form-label">Policy Number</label>
                                <input type="text" name="policy_number" class="form-control" placeholder="Enter policy number" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Coverage Type</label>
                                <input type="text" name="coverage_type" class="form-control" placeholder="e.g. Health, Life" required>
                            </div>
                        </div>
                    `;
                } else if (selected === 'investment') {
                    extraFieldsContainer.innerHTML = `
                        <div class="fade-in">
                            <div class="mb-3">
                                <label class="form-label">Investment Type</label>
                                <input type="text" name="investment_type" class="form-control" placeholder="e.g. FD, SIP" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Investment Amount</label>
                                <input type="number" name="investment_amount" class="form-control" placeholder="Enter amount" required>
                            </div>
                        </div>
                    `;
                }
            });
        });
    </script>
</body>

</html>
