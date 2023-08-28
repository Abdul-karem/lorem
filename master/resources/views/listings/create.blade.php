@extends('listings.layouts.master')

@section('content')
<x-card class="p-6 max-w-md mx-auto mt-12">
    <header class="text-center">
        <h2 class="text-2xl font-bold uppercase mb-1">Create a service</h2>
        <p class="mb-2">Post a service</p>
    </header>

    <form method="POST" action="/listings" enctype="multipart/form-data">
        @csrf
        <div class="mb-2">
            <label for="company" class="form-label">Service Name</label>
            <input type="text" class="form-control" name="company" value="{{ old('company') }}" />
            @error('company')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-2">
            <label for="title" class="form-label">Service Title</label>
            <input type="text" class="form-control" name="title" placeholder="Example: Senior Laravel Developer" value="{{ old('title') }}" />
            @error('title')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-2">
            <label for="location" class="form-label">Service Location</label>
            <input type="text" class="form-control" name="location" placeholder="Example: Remote, Boston MA, etc" value="{{ old('location') }}" />
            @error('location')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-2">
            <label for="email" class="form-label">Contact Email</label>
            <input type="text" class="form-control" name="email" value="{{ old('email') }}" />
            @error('email')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-2">
            <label for="website" class="form-label">Website/Application URL</label>
            <input type="text" class="form-control" name="website" value="{{ old('website') }}" />
            @error('website')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-2">
            <label for="tags" class="form-label">Tags (Comma Separated)</label>
            <input type="text" class="form-control" name="tags" placeholder="Example: Laravel, Backend, Postgres, etc" value="{{ old('tags') }}" />
            @error('tags')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-2">
            <label for="logo" class="form-label">Service Logo</label>
            <input type="file" class="form-control" name="logo" />
            @error('logo')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-2">
            <label for="description" class="form-label">Job Description</label>
            <textarea class="form-control" name="description" rows="10" placeholder="Include tasks, requirements, salary, etc">{{ old('description') }}</textarea>
            @error('description')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-2">
            <button class="btn btn-primary">Create Service</button>
            <a href="/" class="btn btn-secondary ml-3">Back</a>
        </div>

    </form>
</x-card>
@endsection
