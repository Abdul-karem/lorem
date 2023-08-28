<x-layout>
  <div class="container">
    <div class="card p-5 max-w-lg mx-auto mt-5">
      <header class="text-center">
        <h2 class="text-2xl font-bold uppercase mb-1">Register</h2>
        <p class="mb-4">Create an account </p>
      </header>

      <form method="POST" action="/users">
        <!-- Add CSRF token -->
        @csrf
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control" name="name" value="{{old('name')}}" />

          @error('name')
          <p class="text-danger">{{$message}}</p>
          @enderror
        </div>

        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" name="email" value="{{old('email')}}" />

          @error('email')
          <p class="text-danger">{{$message}}</p>
          @enderror
        </div>

        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" name="password" value="{{old('password')}}" />

          @error('password')
          <p class="text-danger">{{$message}}</p>
          @enderror
        </div>

        <div class="mb-3">
          <label for="password_confirmation" class="form-label">Confirm Password</label>
          <input type="password" class="form-control" name="password_confirmation" value="{{old('password_confirmation')}}" />

          @error('password_confirmation')
          <p class="text-danger">{{$message}}</p>
          @enderror
        </div>

        <div class="mb-3">
          <button type="submit" class="btn btn-primary">
            Sign Up
          </button>
        </div>

        <div class="mb-3">
          <p>
            Already have an account? <a href="/login" class="text-primary">Login</a>
          </p>
        </div>
      </form>
    </div>
  </div>

  <!-- Add Bootstrap JS scripts (optional) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</x-layout>
