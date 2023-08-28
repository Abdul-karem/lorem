{{-- @extends('listings.layouts.master')
@section('content') --}}
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <title>Document</title>
</head>
<body>
  <nav class="navbar navbar-dark bg-primary " style="width: 100%" >
    <a class="navbar-brand" style="margin-left: 20px"   >starta</a>
    <form class="form-inline">
      {{-- <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> --}}
    </form>
  </nav>
<section  style="justify-content: center ;height: 100vh ;width:100% "    >

  <div class="mx-4" style="  ;margin:20px; margin-top:100px " >
    <x-card class="p-10">
      <div class="flex flex-col items-center justify-center text-center"  >
        <img class="w-48 mr-6 mb-6"
          src="{{$listing->logo ? asset('imagess/' . $listing->logo) : asset('/images/no-image.png')}}" alt="" />

        <h3 class="text-2xl mb-2">
          {{$listing->title}}
        </h3>
        <div class="text-xl font-bold mb-4">{{$listing->company}}</div>

        <x-listing-tags :tagsCsv="$listing->tags" />

        <div class="text-lg my-4">
          <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
        </div>
        <div class="border border-gray-200 w-full mb-6"></div>
        <div>
          <h3 class="text-3xl font-bold mb-4">Job Description</h3>
          <div class="text-lg space-y-6">
            {{$listing->description}}

            <a href="mailto:{{$listing->email}}"
              class="block bg-laravel text-white mt-6 py-2 rounded-xl hover:opacity-80"><i
                class="fa-solid fa-envelope"></i>
              Contact Employer</a>

            <a href="{{$listing->website}}" target="_blank"
              class="block bg-black text-white py-2 rounded-xl hover:opacity-80"><i class="fa-solid fa-globe"></i>
              Visit Website</a>
          </div>
        </div>
      </div>
    </x-card>
  </div>
</section>

  <section class="">
    <!-- Footer -->
    <footer class="text-center text-white" style="background-color: #0a4275;">
      <!-- Grid container -->
      <div class="container p-4 pb-0">
        <!-- Section: CTA -->
        <section class="">
          <p class="d-flex justify-content-center align-items-center">
            {{-- <span class="me-3">Register for free</span> --}}
            {{-- <button type="button" class="btn btn-outline-light btn-rounded">
              Sign up!
            </button> --}}
          </p>
        </section>
        <!-- Section: CTA -->
      </div>
      <!-- Grid container -->
  
      <!-- Copyright -->
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2020 Copyright:
        <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
      </div>
      <!-- Copyright -->
    </footer>
    <!-- Footer -->
  </section>

</body>
</html>
  
{{-- @endsection --}}
