@extends('layouts.base.master')

@section('content')
    <div class="be-page-outer">
        <div class="be-header-sub">
            @include('layouts.partials.subheader-v1')
            <div class="be-header-sub-option"></div>
        </div>

        <div class="be-page">
            <div class="be-page-body">

                <div class="row">
                    <div class="col-xxl-3">

                        <div class="card app-card mb-4">
                            <div class="card-body">
                                <h5 class="card-title">Expected Earnings</h5>
                                <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                    of the card's content.</p>
                                <a href="#" class="card-link">Card link</a>
                                <a href="#" class="card-link">Another link</a>
                            </div>
                        </div>


                        <div class="card app-card">
                            <div class="card-body">
                                <h5 class="card-title">Orders This Month</h5>
                                <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                    of the card's content.</p>
                                <a href="#" class="card-link">Card link</a>
                                <a href="#" class="card-link">Another link</a>
                            </div>
                        </div>

                    </div>
                    <div class="col-xxl-3">

                        <div class="card app-card mb-4">
                            <div class="card-body">
                                <h5 class="card-title">Average Daily Sales</h5>
                                <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                    of the card's content.</p>
                                <a href="#" class="card-link">Card link</a>
                                <a href="#" class="card-link">Another link</a>
                            </div>
                        </div>


                        <div class="card app-card">
                            <div class="card-body">
                                <h5 class="card-title">New Customers This Month</h5>
                                <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                    of the card's content.</p>
                                <a href="#" class="card-link">Card link</a>
                                <a href="#" class="card-link">Another link</a>
                            </div>
                        </div>

                    </div>
                    <div class="col-xxl-6">

                        <div class="card app-card overflow-hidden h-md-100">
                            <div class="card-body">
                                <h5 class="card-title">Sales This Months</h5>
                                <div id="salesThisMonth"></div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection


@push('after-js')
    <script>
        var options = {
            series: [{
                name: "Desktops",
                data: [10, 41, 35, 51, 49, 62, 69, 91, 148]
            }],
            chart: {
                height: 350,
                type: 'line',
                zoom: {
                    enabled: false
                }
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                curve: 'straight'
            },
            title: {
                // text: 'Product Trends by Month',
                align: 'left'
            },
            grid: {
                row: {
                    colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
                    opacity: 0.5
                },
            },
            xaxis: {
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep'],
            }
        };

        var chart = new ApexCharts(document.querySelector("#salesThisMonth"), options);
        chart.render();
    </script>
@endpush
