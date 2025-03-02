@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4 text-center">Welcome, {{ auth()->user()->name }} 🎉</h2>

    <div class="row">
        <!-- Profile Card -->
        <div class="col-md-4">
            <div class="card shadow-lg border-0">
                <div class="card-body text-center">
                    <h4 class="card-title">Your Profile</h4>
                    <p class="card-text text-muted">{{ auth()->user()->email }}</p>
                    <a href="#" class="btn btn-primary">Edit Profile</a>
                </div>
            </div>
        </div>

        <!-- Quick Actions -->
        <div class="col-md-4">
            <div class="card shadow-lg border-0">
                <div class="card-body text-center">
                    <h4 class="card-title">Quick Actions</h4>
                    <a href="#" class="btn btn-success mb-2">View Members</a>
                    <a href="#" class="btn btn-info mb-2">Add Member</a>
                </div>
            </div>
        </div>

        <!-- Logout Card -->
        <div class="col-md-4">
            <div class="card shadow-lg border-0">
                <div class="card-body text-center">
                    <h4 class="card-title">Logout</h4>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-danger">Logout</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Activity -->
    {{-- <div class="row mt-4">
        <div class="col-md-12">
            <div class="card shadow-lg border-0">
                <div class="card-body">
                    <h4 class="card-title">Recent Activity</h4>
                    <ul class="list-group">
                        <li class="list-group-item">✔️ Member John Doe added.</li>
                        <li class="list-group-item">✔️ Profile updated.</li>
                        <li class="list-group-item">✔️ New settings applied.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div> --}}
</div>
@endsection
