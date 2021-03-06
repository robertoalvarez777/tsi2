@extends('layouts.master')

@section('contenido')
  <div class="container-fluid">
    <div class="row pt-4">
      <div class="col-12">
        <div class="card">
          <div class="card-header colorbg bg-gradient">
            <div class="row">
              <div class="col-10 pt-2">
                <h6 class="text-white">Destacados</h6>
              </div>
              <div class="col-2 text-end">
                <a class="nav-link active text-white" href="{{ route('almacenamiento') }}">Ver más</a>
              </div>
            </div>
          </div>
          <div class="card-body container-fluid">
            <div class="card-group mt-3">
              <div class="card text-center border-info" style="width: 18rem;">
                <a href="{{ route('almacenamiento') }}">
                  <img src="{{ asset('img/ssd.jpg') }}" class="card-img-top img-fluid estiloimagen" alt="">
                </a>
                <div class="card-body">
                  <p class="card-text">WD® Unidad SSD 120GB Sata3 2.5" Green</p>
                </div>
              </div>

              <div class="card text-center border-info" style="width: 18rem;">
                <a href="{{ route('almacenamiento') }}">
                  <img src="{{ asset('img/plc.jpg') }}" class="card-img-top img-fluid estiloimagen" alt="">
                </a>
                <div class="card-body">
                  <p class="card-text">MSI B450 Gaming Pro Carbon AC</p>
                </div>
              </div>

              <div class="card text-center border-info" style="width: 18rem;">
                <a href="{{ route('almacenamiento') }}">
                  <img src="{{ asset('img/ram.jpg') }}" class="card-img-top img-fluid estiloimagen" alt="">
                </a>
                <div class="card-body">
                  <p class="card-text">Memoria Ram DDR4 8GB 2666MHz HyperX Fury Black, Non-ECC, CL16, XMP</p>
                </div>
              </div>

            </div>
          </div>
          <div class="card-footer colorbg">
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('javascript')
  <script src="https://apps.elfsight.com/p/platform.js" defer></script>
  <div class="elfsight-app-cd22e2fb-ae46-4598-a817-9d897234a01f"></div>
@endsection
