<x-layout>
  <div class="container">
    <div class="card p-5 mx-auto mt-5" style="max-width: 30rem;">
      <div class="card-header text-center">
        <h2 class="text-uppercase mb-1">Login</h2>
        <p class="mb-4">Log into your account to </p>
      </div>

      <form method="POST" action="/users/authenticate">
        <!-- Add CSRF token -->
        @csrf

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
          <button type="submit" class="btn btn-primary">
            Sign In
          </button>
        </div>

        <div class="mb-3">
          <p>
            Don't have an account? <a href="/register" class="text-primary">Register</a>
          </p>
        </div>
      </form>
    </div>
  </div>

  <!-- Add Bootstrap JS scripts (optional) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</x-layout>
