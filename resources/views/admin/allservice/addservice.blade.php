@extends('layout.admin.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-0 shadow-lg rounded-4">
                <div class="card-header bg-gradient rounded-top-4"
                    style="background: linear-gradient(135deg, #4e73df, #1cc88a); color: #ffd700;">
                    <h4 class="mb-0 text-center fw-semibold">Add New Service</h4>
                </div>

                <div class="card-body p-4">
                    <form action="{{ route('store.service') }}" method="POST" id="serviceForm" enctype="multipart/form-data" novalidate>
                        @csrf

                        {{-- Service Name --}}
                        <div class="mb-4">
                            <label class="form-label fw-semibold">Service Name</label>
                            <input type="text" name="service_name"
                                class="form-control form-control-lg rounded-pill shadow-sm"
                                placeholder="Enter service name" required>
                        </div>

                        {{-- Description --}}
                        <div class="mb-4">
                            <label class="form-label fw-semibold">Description</label>
                            <textarea name="description" class="form-control rounded-4 shadow-sm" rows="4"
                                placeholder="Write a short description..." required></textarea>
                        </div>

                        {{-- Image Upload --}}
                        <div class="mb-4">
                            <label class="form-label fw-semibold">Service Image</label>
                            <input type="file" name="image"
                                class="form-control form-control-lg rounded-pill shadow-sm"
                                accept="image/*" required>
                            <small class="text-muted d-block mt-1">Allowed formats: JPG, PNG, JPEG. Max size: 2MB</small>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-lg text-white rounded-pill px-5 py-2"
                                style="background: linear-gradient(135deg, #1cc88a, #4e73df); border: none;">
                                <i class="fa-solid fa-plus me-2"></i> Add Service
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
<script>
document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("serviceForm");
    const inputs = form.querySelectorAll("input[required], textarea[required]");

    form.addEventListener("submit", function (e) {
        let valid = true;

        inputs.forEach(input => {
            const value = input.type === "file" ? input.files.length : input.value.trim();

            if (!value) {
                valid = false;
                showError(input, `${getFieldName(input.name)} is required.`);
            } else {
                removeError(input);
            }
        });

        if (!valid) e.preventDefault();
    });

    inputs.forEach(input => {
        input.addEventListener("input", function () {
            if (this.value.trim() || (this.type === "file" && this.files.length > 0)) {
                removeError(this);
            }
        });
    });

    function showError(input, message) {
        removeError(input);
        input.classList.add("is-invalid");

        const error = document.createElement("div");
        error.classList.add("invalid-feedback", "d-block", "mt-1");
        error.innerText = message;

        input.insertAdjacentElement("afterend", error);
    }

    function removeError(input) {
        input.classList.remove("is-invalid");
        const next = input.nextElementSibling;
        if (next && next.classList.contains("invalid-feedback")) {
            next.remove();
        }
    }

    function getFieldName(name) {
        return name.replace(/_/g, " ").replace(/\b\w/g, l => l.toUpperCase());
    }
});
</script>
@endpush
