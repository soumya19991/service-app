@extends('layout.admin.app')
@push('css')
    <style>
        .pagination {

            gap: 0.5rem;
            margin-left: 1rem;

        }

        .table {
            width: 100%;
        }

        .table td,
        .table th {
            white-space: nowrap;
            text-align: center;
        }

        .modal-content {
            border-top: 4px solid #ffc107;
            /* Yellow accent */
        }

        .btn-warning:hover {
            background-color: #ffb300 !important;
            border-color: #ffb300 !important;
            color: #212529 !important;
        }
    </style>
@endpush
@section('content')
    {{-- @php
        $services = [
            (object) [
                'id' => 1,
                'service_name' => 'Web Development',
                'description' => 'Creating modern responsive websites.',
            ],
            (object) [
                'id' => 2,
                'service_name' => 'Graphic Design',
                'description' => 'Designing logos, banners, and branding materials.',
            ],
            (object) [
                'id' => 3,
                'service_name' => 'SEO Optimization',
                'description' => 'Improving website ranking on search engines.',
            ],
            (object) [
                'id' => 4,
                'service_name' => 'Digital Marketing',
                'description' => 'Running ad campaigns and social media marketing.',
            ],
        ];
    @endphp --}}
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show shadow-sm rounded-3 position-fixed top-0 end-0 m-4"
            role="alert" style="z-index: 1050; min-width: 300px;">
            <i class="fa-solid fa-circle-check me-2"></i>
            <strong>Success!</strong> {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

        <script>
            setTimeout(() => {
                const alert = document.querySelector('.alert');
                if (alert) {
                    alert.classList.remove('show');
                    setTimeout(() => alert.remove(), 300);
                }
            }, 4000);
        </script>
    @endif

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-2">
            </div>

            <div class="col-md-10">
                <div class="card border-0 shadow-lg rounded-4">
                    <div class="card-header bg-gradient rounded-top-4 d-flex justify-content-between align-items-center"
                        style="background: linear-gradient(135deg, #4e73df, #1cc88a); color: #ffd700;">
                        <h4 class="mb-0 fw-semibold">All vendors</h4>

                    </div>

                    <div class="card-body p-4">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover align-middle"
                                style="width:auto; min-width:100%; white-space:nowrap;">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Pincode</th>
                                        <th>City</th>
                                        <th>Request Service</th>
                                        <th>Transfer Vender Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($serviceRequests as $serviceRequest)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $serviceRequest->name ?? 'N/A' }}</td>
                                            <td>{{ $serviceRequest->phone ?? 'N/A' }}</td>
                                            <td>{{ $serviceRequest->pin_code ?? 'N/A' }}</td>
                                            <td>{{ $serviceRequest->city ?? 'N/A' }}</td>
                                            <td>{{ $serviceRequest->service->name ?? 'N/A' }}</td>
                                            <td>{{ $serviceRequest->transferUser->name ?? 'N/A' }}</td>
                                            <td>
                                                <button class="btn btn-outline-info btn-sm" data-bs-toggle="modal"
                                                    data-bs-target="#transferModal{{ $serviceRequest->id }}">
                                                    <i class="ti ti-transfer me-1"></i> Transfer
                                                </button>
                                            </td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            <div class="d-flex justify-content-center mt-4">
                                {{ $serviceRequests->links('pagination::bootstrap-5') }}
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="transferModal{{ $serviceRequest->id }}" tabindex="-1"
        aria-labelledby="transferModalLabel{{ $serviceRequest->id }}" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0 shadow-lg rounded-3">

                <!-- Header -->
                <div class="modal-header bg-warning text-dark">
                    <h5 class="modal-title fw-semibold" id="transferModalLabel{{ $serviceRequest->id }}">
                        <i class="ti ti-transfer me-1"></i> Transfer Request –
                        {{ $serviceRequest->service->name ?? 'N/A' }}
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <!-- Form -->
                <form action="{{ route('service.transfer', $serviceRequest->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label fw-semibold text-dark">Select Vendor</label>
                            <select name="transfer_at" class="form-select border-warning shadow-sm" required>
                                <option value="">-- Select Vendor --</option>
                                @foreach ($vendors as $vender)
                                    @if ($vender->pin_code == $serviceRequest->pin_code && $vender->service_id == $serviceRequest->service_id)
                                        <option value="{{ $vender->user->id }}">
                                            {{ $vender->user->name }} ({{ $vender->pin_code }})
                                        </option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <!-- Footer -->
                    <div class="modal-footer bg-light">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                            <i class="ti ti-x"></i> Cancel
                        </button>
                        <button type="submit" class="btn btn-warning text-dark fw-semibold">
                            <i class="ti ti-check"></i> Transfer
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script>
        const table = document.querySelector(".table");
        const deleteBtns = table.querySelectorAll("a.btn-outline-danger");

        deleteBtns.forEach(btn => {
            btn.addEventListener("click", function(e) {
                e.preventDefault();
                const row = btn.closest("tr");
                const id = row.dataset.id;

                Swal.fire({
                    title: "Are you sure?",
                    text: "You won't be able to revert this!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#1cc88a",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Yes, delete it!",
                }).then((result) => {
                    if (result.isConfirmed) {
                        Swal.fire({
                            title: "Deleted!",
                            text: "Your file has been deleted.",
                            icon: "success",
                            confirmButtonText: "Ok, got it!",
                        }).then(() => {
                            row.remove();
                        });
                    }
                });
            });
        });
    </script>
@endpush

{{-- Add Service Blade for reference --}}
