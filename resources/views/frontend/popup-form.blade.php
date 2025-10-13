<!-- Service Request Modal -->
<div class="modal fade" id="serviceModal" tabindex="-1" aria-labelledby="serviceModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header" style="background: linear-gradient(135deg, #667eea, #764ba2); color: #fff;">
        <h5 class="modal-title" id="serviceModalLabel">Request a Service</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>
      <form action="{{ url('/service-request') }}" method="POST" class="p-3">
        @csrf
        <div class="mb-3">
          <label for="name" class="form-label">Full Name</label>
          <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
          <label for="phone" class="form-label">Phone Number</label>
          <input type="tel" class="form-control" id="phone" name="phone" required>
        </div>
        <div class="mb-3">
          <label for="city" class="form-label">City</label>
          <input type="text" class="form-control" id="city" name="city" required>
        </div>
        <div class="mb-3">
          <label for="service" class="form-label">Service Required</label>
          <select class="form-select" id="service" name="service" required>
            <option value="" disabled selected>Select a Service</option>
            <option value="AC Mechanic">AC Mechanic</option>
            <option value="Carpenter">Carpenter</option>
            <option value="Food Delivery">Food Delivery</option>
            <option value="Electrician">Electrician</option>
          </select>
        </div>
        <div class="text-center">
          <button type="submit" class="btn btn-primary w-100">Submit Request</button>
        </div>
      </form>
    </div>
  </div>
</div>
