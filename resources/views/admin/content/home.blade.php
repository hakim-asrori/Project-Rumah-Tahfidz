@extends('admin.main')

@section('title', 'Home')

@section('page_content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="header">
                @yield('title')
            </div>
            <div class="content">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit delectus molestias ea doloremque ullam provident neque nemo, itaque ipsum magnam. Odio minus nulla impedit id blanditiis? Architecto distinctio sunt ex.</p>
            </div>
        </div>
    </div>
</div>
@endsection
