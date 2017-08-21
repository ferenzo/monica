@extends('layouts.skeleton')

@section('content')

  <div class="mw6 center mt5 mt6-ns mb4 ph3 ph0-ns">
    <h2 class="f2 mb4 normal tc lh-title">{{ trans('dashboard.dashboard_blank_title') }}</h2>
    <p class="tc f4 mb4">{{ trans('dashboard.dashboard_blank_description') }}</p>
    <p class="tc mb5"><a href="/people/add" class="btn btn-primary pa4 f4">{{ trans('dashboard.dashboard_blank_cta') }}</a></p>
    <div class="tc">
      <img src="/img/dashboard/blank.png">
    </div>
  </div>

@endsection
