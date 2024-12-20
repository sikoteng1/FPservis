{{-- @extends('layouts.app')
@extends('layouts.mazer-be')

@section('content')
<section class="row">
    <div class="col-12 col-lg-9">
        <div class="row">
            <div class="col-6 col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body px-4 py-4-5">
                        <div class="row">
                            <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                <div class="stats-icon purple mb-2">
                                    <i class="iconly-boldShow"></i>
                                </div>
                            </div>
                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                <h6 class="text-muted font-semibold">Profile Views</h6>
                                <h6 class="font-extrabold mb-0">1.000</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body px-4 py-4-5">
                        <div class="row">
                            <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                <div class="stats-icon blue mb-2">
                                    <i class="iconly-boldProfile"></i>
                                </div>
                            </div>
                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                <h6 class="text-muted font-semibold">Followers</h6>
                                <h6 class="font-extrabold mb-0">1.000</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body px-4 py-4-5">
                        <div class="row">
                            <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                <div class="stats-icon green mb-2">
                                    <i class="iconly-boldAdd-User"></i>
                                </div>
                            </div>
                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                <h6 class="text-muted font-semibold">Following</h6>
                                <h6 class="font-extrabold mb-0">1.000</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body px-4 py-4-5">
                        <div class="row">
                            <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                <div class="stats-icon red mb-2">
                                    <i class="iconly-boldBookmark"></i>
                                </div>
                            </div>
                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                <h6 class="text-muted font-semibold">Saved Post</h6>
                                <h6 class="font-extrabold mb-0">1.000</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Profile Visit</h4>
                    </div>
                    <div class="card-body">
                        <div id="chart-profile-visit"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-xl-4">
                <div class="card">
                    <div class="card-header">
                        <h4>Profile Visit</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-7">
                                <div class="d-flex align-items-center">
                                    <svg class="bi text-primary" width="32" height="32" fill="blue"
                                        style="width:10px">
                                        <use
                                            xlink:href="{{asset('./dist/assets/static/images/bootstrap-icons.svg#circle-fill')}}" />
                                    </svg>
                                    <h5 class="mb-0 ms-3">Europe</h5>
                                </div>
                            </div>
                            <div class="col-5">
                                <h5 class="mb-0 text-end">1.000</h5>
                            </div>
                            <div class="col-12">
                                <div id="chart-europe"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-7">
                                <div class="d-flex align-items-center">
                                    <svg class="bi text-success" width="32" height="32" fill="blue"
                                        style="width:10px">
                                        <use
                                            xlink:href="{{asset('./dist/assets/static/images/bootstrap-icons.svg#circle-fill')}}" />
                                    </svg>
                                    <h5 class="mb-0 ms-3">America</h5>
                                </div>
                            </div>
                            <div class="col-5">
                                <h5 class="mb-0 text-end">375</h5>
                            </div>
                            <div class="col-12">
                                <div id="chart-america"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-7">
                                <div class="d-flex align-items-center">
                                    <svg class="bi text-danger" width="32" height="32" fill="blue"
                                        style="width:10px">
                                        <use
                                            xlink:href="{{asset('./dist/assets/static/images/bootstrap-icons.svg#circle-fill')}}" />
                                    </svg>
                                    <h5 class="mb-0 ms-3">Indonesia</h5>
                                </div>
                            </div>
                            <div class="col-5">
                                <h5 class="mb-0 text-end">1025</h5>
                            </div>
                            <div class="col-12">
                                <div id="chart-indonesia"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-8">
                <div class="card">
                    <div class="card-header">
                        <h4>Latest Comments</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-lg">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Comment</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="col-3">
                                            <div class="d-flex align-items-center">
                                                <div class="avatar avatar-md">
                                                    <img src="{{asset('./dist/assets/compiled/jpg/5.jpg')}}">
                                                </div>
                                                <p class="font-bold ms-3 mb-0">Si kotenG</p>
                                            </div>
                                        </td>
                                        <td class="col-auto">
                                            <p class=" mb-0">Congratulations on your Final Project!</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="col-3">
                                            <div class="d-flex align-items-center">
                                                <div class="avatar avatar-md">
                                                    <img src="{{asset('./dist/assets/compiled/jpg/2.jpg')}}">
                                                </div>
                                                <p class="font-bold ms-3 mb-0">Si Ganteng</p>
                                            </div>
                                        </td>
                                        <td class="col-auto">
                                            <p class=" mb-0">Wow amazing design! Can you make another tutorial for
                                                this design?</p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-3">
        <div class="card">
            <div class="card-body py-4 px-4">
                <div class="d-flex align-items-center">
                    <div class="avatar avatar-xl">
                        <img src="{{asset('./dist/assets/compiled/jpg/1.jpg')}}" alt="Face 1">
                    </div>
                    <div class="ms-3 name">
                        <h5 class="font-bold">Mas Fuad</h5>
                        <h6 class="text-muted mb-0">@mfuad</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h4>Recent Messages</h4>
            </div>
            <div class="card-content pb-4">
                <div class="recent-message d-flex px-4 py-3">
                    <div class="avatar avatar-lg">
                        <img src="{{asset('./dist/assets/compiled/jpg/4.jpg')}}">
                    </div>
                    <div class="name ms-4">
                        <h5 class="mb-1">Ahmad Tailwind</h5>
                        <h6 class="text-muted mb-0">@ahmat</h6>
                    </div>
                </div>
                <div class="recent-message d-flex px-4 py-3">
                    <div class="avatar avatar-lg">
                        <img src="{{asset('./dist/assets/compiled/jpg/5.jpg')}}">
                    </div>
                    <div class="name ms-4">
                        <h5 class="mb-1">Asep Knalpot</h5>
                        <h6 class="text-muted mb-0">@aspot</h6>
                    </div>
                </div>
                <div class="recent-message d-flex px-4 py-3">
                    <div class="avatar avatar-lg">
                        <img src="{{asset('./dist/assets/compiled/jpg/1.jpg')}}">
                    </div>
                    <div class="name ms-4">
                        <h5 class="mb-1">Rehan Karburator</h5>
                        <h6 class="text-muted mb-0">@rehan</h6>
                    </div>
                </div>
                <div class="px-4">
                    <button class='btn btn-block btn-xl btn-outline-primary font-bold mt-3'>Start Conversation</button>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h4>Visitors Profile</h4>
            </div>
            <div class="card-body">
                <div id="chart-visitors-profile"></div>
            </div>
        </div>
    </div>
</section>
@endsection --}}

@extends('layouts.mazer-be')

@section('page-heading', 'Grafik User')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.jsdeliver.net/npm/chart.js"></script>
</head>
<body>



<div class="container mt-4">
    <div class="card shadow-lg">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Grafik Booking</h4>
        </div>
        <div class="card-body">
            @php
                $labels = $visitor->pluck('date'); // Mengambil tanggal
                $data = $visitor->pluck('total_visitors'); // Mengambil total pengunjung
            @endphp

            <!-- Tempat untuk menampilkan grafik -->
            <div class="chart-container" style="position: relative; width:100%; height:70vh;">
                <canvas id="visitorBarChart"></canvas>
            </div>

            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> <!-- Tambahkan pustaka Chart.js -->
            <script>
                const visitorLabels = @json($labels); // Mengirim data tanggal ke JavaScript
                const visitorData = @json($data); // Mengirim data jumlah pengunjung ke JavaScript

                window.onload = function () {
                    var ctx = document.getElementById('visitorBarChart').getContext('2d');

                    // Membuat grafik batang
                    var visitorBarChart = new Chart(ctx, {
                        type: 'bar', // Jenis grafik: batang
                        data: {
                            labels: visitorLabels, // Data label (tanggal)
                            datasets: [{
                                label: 'Total Visitors', // Label grafik
                                data: visitorData, // Data jumlah pengunjung
                                backgroundColor: [
                                    'rgba(75, 192, 192, 0.2)',
                                    'rgba(153, 102, 255, 0.2)',
                                    'rgba(255, 159, 64, 0.2)',
                                    'rgba(255, 99, 132, 0.2)',
                                    'rgba(54, 162, 235, 0.2)'
                                ],
                                borderColor: [
                                    'rgba(75, 192, 192, 1)',
                                    'rgba(153, 102, 255, 1)',
                                    'rgba(255, 159, 64, 1)',
                                    'rgba(255, 99, 132, 1)',
                                    'rgba(54, 162, 235, 1)'
                                ],
                                borderWidth: 1 // Ketebalan garis tepi batang
                            }]
                        },
                        options: {
                            responsive: true, // Grafik akan menyesuaikan ukuran layar
                            maintainAspectRatio: false, // Memastikan grafik tidak terdistorsi
                            plugins: {
                                legend: {
                                    display: true,
                                    position: 'top'
                                },
                                title: {
                                    display: true,
                                    text: 'Grafik Jumlah Pengunjung Harian'
                                }
                            },
                            scales: {
                                y: {
                                    beginAtZero: true, // Mulai dari nol
                                    title: {
                                        display: true,
                                        text: 'Jumlah Pengunjung' // Judul sumbu Y
                                    }
                                },
                                x: {
                                    title: {
                                        display: true,
                                        text: 'Tanggal' // Judul sumbu X
                                    }
                                }
                            }
                        }
                    });
                };
            </script>
        </div>
    </div>
</div>

</body>
</html>
@endsection
