{{--
  Template Name: service template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.content-service')
  @endwhile
@endsection
