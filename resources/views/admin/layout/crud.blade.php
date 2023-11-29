@extends('admin.layout.master')

@section('content')
    <div class="dataMenu">
            <div class="dataMenu-table">
                @yield('table')
            </div>

            <div class="dataMenu-form">
                @yield('form')
            </div>
    </div>
@endsection
 