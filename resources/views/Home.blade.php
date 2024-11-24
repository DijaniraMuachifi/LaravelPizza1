@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="container-fluid">
    <h1 class="text-center">Data Charts</h1>
    <div class="row">
        <div class="col-6 mb-4">
            <div class="card bg-white shadow-md" style="height: 400px;">
                <div class="card-body">
                    <canvas id="monthlyStatsChart" style="height: 100%;"></canvas>
                </div>
            </div>
        </div>
        <div class="col-6 mb-4">
            <div class="card bg-white shadow-md" style="height: 300px;">
                <div class="card-body">
                    <canvas id="bestSellingPizzasChart" style="height: 100%;"></canvas>
                </div>
            </div>
        </div>
        <div class="col-6 mb-4">
            <div class="card bg-white shadow-md" style="height: 300px;">
                <div class="card-body">
                    <canvas id="bestSellingCategoriesChart" style="height: 100%;"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Include Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<!-- Your custom script for creating charts -->
<script>
    // Monthly Stats Chart
    var ctx1 = document.getElementById('monthlyStatsChart').getContext('2d');
    var monthlyStatsChart = new Chart(ctx1, {
        type: 'line',
        data: {
            labels: {!! json_encode($monthlyLabels) !!},
            datasets: [{
                label: 'Monthly Statistics',
                data: {!! json_encode($monthlyData) !!},
                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                borderColor: 'rgba(255, 99, 132, 1)',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true,
                    title: {
                        display: true,
                        text: 'Number of Orders'
                    }
                },
                x: {
                    title: {
                        display: true,
                        text: 'Month/Year'
                    }
                }
            },
            plugins: {
                legend: {
                    display: true,
                    position: 'top',
                },
                title: {
                    display: true,
                    text: 'Monthly Statistics'
                }
            }
        }
    });

    // Best Selling Pizzas Chart
    var ctx2 = document.getElementById('bestSellingPizzasChart').getContext('2d');
    var bestSellingPizzasChart = new Chart(ctx2, {
        type: 'bar',
        data: {
            labels: {!! json_encode($pizzasSoldLabels) !!},
            datasets: [{
                label: 'Best Selling Pizzas',
                data: {!! json_encode($pizzasSoldData) !!},
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true,
                    title: {
                        display: true,
                        text: 'Number of Orders'
                    }
                },
                x: {
                    title: {
                        display: true,
                        text: 'Pizza'
                    }
                }
            },
            plugins: {
                legend: {
                    display: true,
                    position: 'top',
                },
                title: {
                    display: true,
                    text: 'Best Selling Pizzas'
                }
            }
        }
    });

    // Best Selling Categories Chart
    var ctx3 = document.getElementById('bestSellingCategoriesChart').getContext('2d');
    var bestSellingCategoriesChart = new Chart(ctx3, {
        type: 'pie',
        data: {
            labels: {!! json_encode($categoriesSoldLabels) !!},
            datasets: [{
                label: 'Best Selling Categories',
                data: {!! json_encode($categoriesSoldData) !!},
                backgroundColor: [
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)',
                    'rgba(255, 99, 132, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)',
                    'rgba(255, 99, 132, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    display: true,
                    position: 'top',
                },
                title: {
                    display: true,
                    text: 'Best Selling Categories'
                }
            }
        }
    });
</script>
@endsection
