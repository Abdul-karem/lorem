@extends('listings.layouts.master')
@section('content')

<div class="container">
  <div class="card p-10">
    <header>
      <h1 class="text-3xl text-center font-bold my-6 text-uppercase">
        Manage mint
      </h1>
    </header>

    <table class="table table-bordered table-hover">
      <tbody>
        @unless($listings->isEmpty())
        @foreach($listings as $listing)
        <tr class="border-gray-300">
          <td class="px-4 py-8 border-top border-bottom border-gray-300">
            <a href="/listings/{{$listing->id}}"> {{$listing->title}} </a>
          </td>
          <td class="px-4 py-8 border-top border-bottom border-gray-300">
            <a href="/listings/{{$listing->id}}/edit" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i>
              Edit</a>
          </td>
          <td class="px-4 py-8 border-top border-bottom border-gray-300">
            <form method="POST" action="/listings/{{$listing->id}}">
              @csrf
              @method('DELETE')
              <button class="btn btn-danger"><i class="fa-solid fa-trash"></i> Delete</button>
            </form>
          </td>
        </tr>
        @endforeach
        @else
        <tr class="border-gray-300">
          <td class="px-4 py-8 border-top border-bottom border-gray-300" colspan="3">
            <p class="text-center">No Data Found</p>
          </td>
        </tr>
        @endunless
      </tbody>
    </table>
  </div>
</div>

@endsection