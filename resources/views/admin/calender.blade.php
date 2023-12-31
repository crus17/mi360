@extends('layouts.app')
@section('content')
    @include('admin.topmenu')
    @include('admin.sidebar')
    <div class="main-panel ">
        <div class="content ">
            <div class="page-inner">
                <div class="mt-2 mb-5">
                    <h1 class="title1 ">Create your to do List</h1> <br> <br>
                </div>
                <x-admin.alert />

                @if (count($errors) > 0)
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="alert alert-danger alert-dismissable" role="alert">
                                <button type="button" clsass="close" data-dismiss="alert"
                                    aria-hidden="true">&times;</button>
                                @foreach ($errors->all() as $error)
                                    <i class="fa fa-warning"></i> {{ $error }}
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endif
                <div class="row mb-5">
                    <div class="col-lg-12 card p-4  shadow">
                        <div>
                            <SCRIPT src="//localendar.com/public/Victory33404?current_only=Y&include=Y&dynamic=Y"></SCRIPT>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
