@extends("layouts.app")

@section("main")
  @include("partials.createEditForm", ["route"=>"admin.comic.update", "method" => "PUT", "comic"=> $comic])
@endsection