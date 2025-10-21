<!-- Service Request Modal -->
<div class="modal fade" id="serviceModal" tabindex="-1" aria-labelledby="serviceModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-warning border-2 rounded-4">
            <div class="modal-header" style="background: linear-gradient(135deg, #FFC107, #FFB300); color: #212529;">
                <h5 class="modal-title" id="serviceModalLabel">Request a Service</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ url('/service-request') }}" method="POST" class="p-4">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label fw-bold">Full Name</label>
                    <input type="text" class="form-control" id="name" name="name"
                        placeholder="Enter your full name" required>
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label fw-bold">Phone Number</label>
                    <input type="tel" class="form-control" id="phone" name="phone"
                        placeholder="e.g. +91 98765 43210" required>
                </div>
                <div class="mb-3">
                    <label for="city" class="form-label fw-bold">City</label>
                    <input type="text" class="form-control" id="city" name="city"
                        placeholder="Enter your city" required>
                </div>
                <div class="mb-3">
                    <label for="pincode" class="form-label fw-bold">Pin Code</label>
                    <input type="text" class="form-control" id="pincode" name="pincode"
                        placeholder="Enter your pin code" required>
                </div>
                <div class="mb-3">
                    <label for="service" class="form-label fw-bold">Service Required</label>
                    <select class="form-select" id="service" name="service" required>
                        <option value="" disabled selected>Select a Service</option>
                         @foreach ($services as $service)
                            <option value="{{ $service->id}}">{{ $service->name }}</option>
                        @endforeach 
                        {{-- <option value="AC Mechanic">AC Mechanic</option>
                        <option value="Carpenter">Carpenter</option>
                        <option value="Food Delivery">Food Delivery</option>
                        <option value="Electrician">Electrician</option> --}}
                    </select>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-warning btn-lg w-100">Submit Request</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Optional: Add subtle focus & hover styles -->
<style>
    .modal-content {
        border-radius: 1rem;
    }

    .form-control:focus,
    .form-select:focus {
        border-color: #FFC107;
        box-shadow: 0 0 0 0.25rem rgba(255, 193, 7, 0.25);
    }

    .btn-warning {
        background-color: #FFC107;
        border-color: #FFC107;
        color: #212529;
        font-weight: 500;
    }

    .btn-warning:hover {
        background-color: #FFB300;
        border-color: #FFB300;
        color: #212529;
    }
</style>
