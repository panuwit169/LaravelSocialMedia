@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
            @include('components.showProfileInfo')
        </div>
        <div class="col-md-8">
            @include('components.post')
            @include('components.showPost', ['posts' => $posts])
        </div>
    </div>
</div>
@endsection
