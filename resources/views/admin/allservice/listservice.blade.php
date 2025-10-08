@extends('layout.admin.app')
@section('content')
@php
    $services = [
        (object)[ 'id' => 1, 'service_name' => 'Web Development', 'description' => 'Creating modern responsive websites.' ],
        (object)[ 'id' => 2, 'service_name' => 'Graphic Design', 'description' => 'Designing logos, banners, and branding materials.' ],
        (object)[ 'id' => 3, 'service_name' => 'SEO Optimization', 'description' => 'Improving website ranking on search engines.' ],
        (object)[ 'id' => 4, 'service_name' => 'Digital Marketing', 'description' => 'Running ad campaigns and social media marketing.' ],
    ];
@endphp

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
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($services as $service)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $service->service_name }}</td>
                                    <td>{{ $service->description }}</td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-outline-primary">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </a>
                                        <a href="#" class="btn btn-sm btn-outline-danger">
                                            <i class="fa-solid fa-trash-can"></i>
                                        </a>
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
        btn.addEventListener("click", function (e) {
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