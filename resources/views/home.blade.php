@extends('layout.app')
@section('title','Dashboard | BRI')

@section('container')
@include('layout.header')
@include('layout.sidebar')

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">

      <div class="row">
        
        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">
            <div class="col-xxl-12 col-md-12">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-8 col-sm-12">
                      <h5 class="card-title mb-0">Halo, </h5>
                     
                          <span class="mt-0">Ada  laporan masuk, verifikasi sekarang!</span>
                      
                    </div>
                    <div class="col-md-4 mt-3 col-sm-12 d-flex align-items-center justify-content-end">
                    
                          <a href="" class="btn btn-primary rounded-pill"> <i class="bi bi-journal-text"></i> Lihat Laporan</a>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <!-- Terkirim -->
            <div class="col-4">
              <div class="card info-card sales-card">
                <div class="card-body">
                
                      <h5 class="card-title">Laporan Masuk <span>| Per 2022</span></h5>
                
                 
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-cursor"></i>
                    </div>
                    <div class="ps-3">
                   
                        <h6></h6>
                    
                      <span class="text-muted small pt-2 ps-1">laporan</span>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Terkirim -->
            <!-- Diproses -->
            <div class="col-4">
              <div class="card info-card sales-card">
                <div class="card-body">
                  <h5 class="card-title">Diproses <span>| Per 2022</span></h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-arrow-repeat"></i>
                    </div>
                    <div class="ps-3">
                      <h6>h</h6>
                      <span class="text-muted small pt-2 ps-1">laporan</span>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End Diproses -->
            <!-- Selesai -->
            <div class="col-4">
              <div class="card info-card sales-card">
                <div class="card-body">
                  <h5 class="card-title">Tuntas<span> | Per 2022</span></h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-check"></i>
                    </div>
                    <div class="ps-3">
                      <h6></h6>
                      <span class="text-muted small pt-2 ps-1">laporan</span>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End Selesai -->
          </div>
          
         
            <div class="row">
              <!-- Recent Sales -->
              <div class="col-12">
                <div class="d-flex justify-content-between">
                  <h5 class="card-title">Laporan Terakhir <span>| Per 2022</span></h5>
                  <div class="mt-3">
                    <a href="" class="btn btn-primary btn-sm">Lihat Semua</a>
                  </div>
                </div>
               
              </div><!-- End Recent Sales -->
            </div>
           
      </div>
    </section>

  </main><!-- End #main -->
  @endsection