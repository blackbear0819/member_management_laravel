@extends('layouts.main')

@section('content')
<div class="">
    <h2>{{ isset($member) ? 'Edit Member' : 'Add New Member' }}</h2>

    <form action="{{ isset($member) ? route('members.update', $member->id) : route('members.store') }}" method="POST">
        @csrf
        @if(isset($member))
            @method('PUT')
        @endif

        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" name="name" class="form-control" value="{{ $member->name ?? '' }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Title</label>
            <input type="text" name="title" class="form-control" value="{{ $member->title ?? '' }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Address</label>
            <textarea name="address" class="form-control" required>{{ $member->address ?? '' }}</textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Birthday</label>
            <input type="date" name="birthday" class="form-control" value="{{ $member->birthday ?? '' }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Description (Optional)</label>
            <textarea name="description" class="form-control">{{ $member->description ?? '' }}</textarea>
        </div>

        <button type="submit" class="btn btn-success">{{ isset($member) ? 'Update' : 'Save' }}</button>
        <a href="{{ route('members.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
