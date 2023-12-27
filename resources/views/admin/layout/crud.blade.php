@extends('admin.layout.master')

@section('content')
    <div class="crud">
        <div class="crud-table table">
            @yield('table')
        </div>

        <div class="crud-form form">
            @yield('form')
        </div>
    </div>
@endsection
 