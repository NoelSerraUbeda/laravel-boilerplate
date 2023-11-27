@extends('admin.layout.master')

@section('content')
<div class="main-topbar">
    @component('admin.components.table-filter')
    @endcomponent
    @component('admin.components.main-buttons')
    @endcomponent
</div>
    <div class="dataMenu">
        <div class="dataMenu-table">
            @yield('table')
        </div>

        <div class="dataMenu-form">
            @yield('form')
        </div>
    </div>
@endsection
 