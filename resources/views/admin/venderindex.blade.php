@extends('layout.admin.app')
@push('css')
    <style>
        .pagination {

            gap: 0.5rem;
            margin-left: 1rem;

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

            <div class="col-md-8">
                <div class="card border-0 shadow-lg rounded-4">
                    <div class="card-header bg-gradient rounded-top-4 d-flex justify-content-between align-items-center"
                        style="background: linear-gradient(135deg, #4e73df, #1cc88a); color: #ffd700;">
                        <h4 class="mb-0 fw-semibold">All vendors</h4>
                        
                    </div>

                    <div class="card-body p-4">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover align-middle">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Vendor Name</th>
                                        <th>Phone</th>
                                        <th>Pincode</th>
                                        <th>City</th>
                                        <th>Service</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($vendors as $vendor)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $vendor->user->name ?? 'N/A' }}</td>
                                            <td>{{ $vendor->mobile_number }}</td>
                                            <td>{{ $vendor->pin_code }}</td>
                                            <td>{{ $vendor->city }}</td>
                                            <td>{{ $vendor->service->name ?? 'N/A' }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            <div class="d-flex justify-content-center mt-4">
                                {{ $vendors->links('pagination::bootstrap-5') }}
                            </div>

                        </div>
                    </div>
                </div>
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
