@extends('layouts.app')
@section('content')
    <div class="mt-2 mb-4">
        <h1 class="title1 ">Payment Settings</h1>
    </div>
    <x-admin.alert />
    <div class="mb-5 row">
        <div class="col-12">
            <div class="card p-md-5 p-2 shadow-lg ">

                @if(Auth('admin')->User()->type != 'Admin')
                <ul class="nav nav-pills">
                    <li class="nav-item">
                        <a href="#dep" class="nav-link active" data-toggle="tab">Payment Methods</a>
                    </li>
                    <li class="nav-item">
                        <a href="#with" class="nav-link" data-toggle="tab">Payment Preference</a>
                    </li>
                    <li class="nav-item">
                        <a href="#coin" class="nav-link" data-toggle="tab">Coinpayment</a>
                    </li>
                    <li class="nav-item">
                        <a href="#gate" class="nav-link" data-toggle="tab">Gateways</a>
                    </li>
                    <li class="nav-item">
                        <a href="#trans" class="nav-link" data-toggle="tab">Transfer</a>
                    </li>
                </ul>
                @endif
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="dep">
                        @include('admin.Settings.PaymentSettings.deposit')
                    </div>
                    <div class="tab-pane fade" id="with">
                        @include('admin.Settings.PaymentSettings.withdrawal')
                    </div>
                    <div class="tab-pane fade" id="coin">
                        @include('admin.Settings.PaymentSettings.coinpayment')
                    </div>
                    <div class="tab-pane fade" id="gate">
                        @include('admin.Settings.PaymentSettings.gateway')
                    </div>
                    <div class="tab-pane fade" id="trans">
                        @include('admin.Settings.PaymentSettings.transfers')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        // Submit payment option/ preference form
        $('#paypreform').on('submit', function() {
            //alert('love');
            $.ajax({
                url: "{{ route('paypreference') }}",
                type: 'POST',
                data: $('#paypreform').serialize(),
                success: function(response) {
                    if (response.status === 200) {
                        $.notify({
                            // options
                            icon: 'flaticon-alarm-1',
                            title: 'Success',
                            message: response.success,
                        }, {
                            // settings
                            type: 'success',
                            allow_dismiss: true,
                            newest_on_top: false,
                            placement: {
                                from: "top",
                                align: "right"
                            },
                            offset: 20,
                            spacing: 10,
                            z_index: 1031,
                            delay: 5000,
                            timer: 1000,
                            animate: {
                                enter: 'animated fadeInDown',
                                exit: 'animated fadeOutUp'
                            },

                        });
                    } else {

                    }
                },
                error: function(error) {
                    console.log(error);
                },
            });
        });




        // Submit coinpayment form
        $('#coinpayform').on('submit', function() {
            //alert('love');
            $.ajax({
                url: "{{ route('updatecpd') }}",
                type: 'POST',
                data: $('#coinpayform').serialize(),
                success: function(response) {
                    if (response.status === 200) {
                        $.notify({
                            // options
                            icon: 'flaticon-alarm-1',
                            title: 'Success',
                            message: response.success,
                        }, {
                            // settings
                            type: 'success',
                            allow_dismiss: true,
                            newest_on_top: false,
                            placement: {
                                from: "top",
                                align: "right"
                            },
                            offset: 20,
                            spacing: 10,
                            z_index: 1031,
                            delay: 5000,
                            timer: 1000,
                            animate: {
                                enter: 'animated fadeInDown',
                                exit: 'animated fadeOutUp'
                            },

                        });
                    } else {

                    }
                },
                error: function(error) {
                    console.log(error);
                },
            });
        });



        // Submit Gatway form
        $('#gatewayform').on('submit', function() {
            //alert('love');
            $.ajax({
                url: "{{ route('updategateway') }}",
                type: 'POST',
                data: $('#gatewayform').serialize(),
                success: function(response) {
                    if (response.status === 200) {
                        $.notify({
                            // options
                            icon: 'flaticon-alarm-1',
                            title: 'Success',
                            message: response.success,
                        }, {
                            // settings
                            type: 'success',
                            allow_dismiss: true,
                            newest_on_top: false,
                            placement: {
                                from: "top",
                                align: "right"
                            },
                            offset: 20,
                            spacing: 10,
                            z_index: 1031,
                            delay: 5000,
                            timer: 1000,
                            animate: {
                                enter: 'animated fadeInDown',
                                exit: 'animated fadeOutUp'
                            },

                        });
                    } else {

                    }
                },
                error: function(error) {
                    console.log(error);
                },
            });
        });


        // Submit Tranfer settings form
        $('#trasfer').on('submit', function() {
            //alert('love');
            $.ajax({
                url: "{{ route('updatetransfer') }}",
                type: 'POST',
                data: $('#trasfer').serialize(),
                success: function(response) {
                    if (response.status === 200) {
                        $.notify({
                            // options
                            icon: 'flaticon-alarm-1',
                            title: 'Success',
                            message: response.success,
                        }, {
                            // settings
                            type: 'success',
                            allow_dismiss: true,
                            newest_on_top: false,
                            placement: {
                                from: "top",
                                align: "right"
                            },
                            offset: 20,
                            spacing: 10,
                            z_index: 1031,
                            delay: 5000,
                            timer: 1000,
                            animate: {
                                enter: 'animated fadeInDown',
                                exit: 'animated fadeOutUp'
                            },

                        });
                    } else {

                    }
                },
                error: function(error) {
                    console.log(error);
                },
            });
        });
    </script>
@endpush
