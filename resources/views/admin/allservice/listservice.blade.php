@extends('layout.admin.app')
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
                        <h4 class="mb-0 fw-semibold">All Services</h4>
                        <a href="{{ route('add.service') }}" class="btn btn-sm btn-light fw-semibold">
                            <i class="fa-solid fa-plus"></i> Add Service
                        </a>
                    </div>

                    <div class="card-body p-4">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover align-middle">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Service Name</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($services as $service)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $service->name }}</td>
                                            <td>{{ $service->description }}</td>
                                            <td>
                                                <form action="{{ route('update.status', $service->id) }}" method="POST"
                                                    class="d-inline">
                                                    @csrf
                                                    @method('PUT')
                                                    <button type="submit"
                                                        class="badge border-0 {{ $service->status == 1 ? 'bg-success' : 'bg-secondary' }} status-toggle-btn">
                                                        {{ $service->status == 1 ? 'Active' : 'Inactive' }}
                                                    </button>
                                                </form>
                                            </td>
                                            <td>
                                                {{-- Edit Button --}}
                                                <a href="{{ route('edit.service', $service->id) }}"
                                                    class="btn btn-sm btn-outline-primary" title="Edit">
                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                </a>
                                                <form action="{{ route('delete.service', $service->id) }}" method="POST"
                                                    class="d-inline"
                                                    onsubmit="return confirm('Are you sure you want to delete this service?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-outline-danger">
                                                        <i class="fa-solid fa-trash-can"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
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
