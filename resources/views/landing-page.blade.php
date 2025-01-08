{{-- resources/views/landing-page.blade.php --}}
@extends(config('landing-page.layout'))  <!-- Dynamically use the layout from config -->

@section('content')
    <h1>{{ $message }}</h1>
@endsection