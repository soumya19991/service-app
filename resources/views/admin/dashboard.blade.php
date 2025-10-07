@extends('layout.admin.app')
@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <!-- Card Header with Logout -->
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <span>Dashboard</span>
                        <form action="{{ route('logged.logout') }}" method="POST" class="d-inline">
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm">
                                <i class="bi bi-box-arrow-right"></i> Logout
                            </button>
                        </form>
                    </div>

                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card shadow-sm">
                                    <div class="card-body">
                                        <h5 class="card-title">Users</h5>
                                        <p class="card-text">
                                            <span class="badge bg-primary">Active</span>
                                            <span class="badge bg-success">Verified</span>
                                            <span class="badge bg-danger">Banned</span>
                                        </p>
                                        <a href="#" class="btn btn-primary">View All</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
