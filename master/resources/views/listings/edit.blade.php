

@extends('listings.layouts.master')
@section('content')

<x-card class="p-10 max-w-lg mx-auto mt-24">
  <header class="text-center">
    <h2 class="text-2xl font-bold uppercase mb-1">Edit services</h2>
    <p class="mb-4">Edit: {{$listing->title}}</p>
  </header>

  <form class="needs-validation" method="POST" action="/listings/{{$listing->id}}" enctype="multipart/form-data" novalidate>
    @csrf
    @method('PUT')
    <div class="mb-3">
      <label for="company" class="form-label">services Name</label>
      <input type="text" class="form-control" name="company" value="{{$listing->company}}" required>
      @error('company')
      <div class="text-danger">{{$message}}</div>
      @enderror
    </div>

    <div class="mb-3">
      <label for="title" class="form-label">Job Title</label>
      <input type="text" class="form-control" name="title" placeholder="Example: Senior Laravel Developer" value="{{$listing->title}}" required>
      @error('title')
      <div class="text-danger">{{$message}}</div>
      @enderror
    </div>

    <div class="mb-3">
      <label for="location" class="form-label">Job Location</label>
      <input type="text" class="form-control" name="location" placeholder="Example: Remote, Boston MA, etc" value="{{$listing->location}}" required>
      @error('location')
      <div class="text-danger">{{$message}}</div>
      @enderror
    </div>

    <div class="mb-3">
      <label for="email" class="form-label">Contact Email</label>
      <input type="text" class="form-control" name="email" value="{{$listing->email}}" required>
      @error('email')
      <div class="text-danger">{{$message}}</div>
      @enderror
    </div>

    <div class="mb-3">
      <label for="website" class="form-label">Website/Application URL</label>
      <input type="text" class="form-control" name="website" value="{{$listing->website}}" required>
      @error('website')
      <div class="text-danger">{{$message}}</div>
      @enderror
    </div>

    <div class="mb-3">
      <label for="tags" class="form-label">Tags (Comma Separated)</label>
      <input type="text" class="form-control" name="tags" placeholder="Example: Laravel, Backend, Postgres, etc" value="{{$listing->tags}}" required>
      @error('tags')
      <div class="text-danger">{{$message}}</div>
      @enderror
    </div>

    <div class="mb-3">
      <label for="logo" class="form-label">services Logo</label>
      <input type="file" class="form-control" name="logo">
      <img class="w-48 mt-2" src="{{$listing->logo ? asset('storage/' . $listing->logo) : asset('/images/no-image.png')}}" alt="">
      @error('logo')
      <div class="text-danger">{{$message}}</div>
      @enderror
    </div>

    <div class="mb-3">
      <label for="description" class="form-label">services Description</label>
      <textarea class="form-control" name="description" rows="10" placeholder="Include tasks, requirements, salary, etc" required>{{$listing->description}}</textarea>
      @error('description')
      <div class="text-danger">{{$message}}</div>
      @enderror
    </div>

    <div class="mb-3">
      <button class="btn btn-primary">Update services</button>
      <a href="/" class="btn btn-secondary ml-2">Back</a>
    </div>
  </form>
</x-card>

@endsection
