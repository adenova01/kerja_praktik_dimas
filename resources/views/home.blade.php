@extends('template.index')
@section('content')
<div class="main-content-container container-fluid px-4">
  <!-- Page Header -->
  <div class="page-header row no-gutters py-4">
    <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
      <span class="text-uppercase page-subtitle">Dashboard</span>
      <h3 class="page-title">{{$title}} Overview</h3>
    </div>
  </div>
  <!-- End Page Header -->
  <!-- Small Stats Blocks -->
  <div class="row">
    <div class="col-lg col-md-6 col-sm-6 mb-4">
      <div class="stats-small stats-small--1 card card-small">
        <div class="card-body p-0 d-flex">
          <div class="d-flex flex-column m-auto">
            <div class="stats-small__data text-center">
              <span class="stats-small__label text-uppercase">Hoax</span>
              <h6 class="stats-small__value count my-3">2,390</h6>
            </div>
            <div class="stats-small__data">
              <span class="stats-small__percentage stats-small__percentage--increase">4.7%</span>
            </div>
          </div>
          <canvas height="120" class="blog-overview-stats-small-1"></canvas>
        </div>
      </div>
    </div>
    <div class="col-lg col-md-6 col-sm-6 mb-4">
      <div class="stats-small stats-small--1 card card-small">
        <div class="card-body p-0 d-flex">
          <div class="d-flex flex-column m-auto">
            <div class="stats-small__data text-center">
              <span class="stats-small__label text-uppercase">Valid</span>
              <h6 class="stats-small__value count my-3">182</h6>
            </div>
            <div class="stats-small__data">
              <span class="stats-small__percentage stats-small__percentage--increase">12.4%</span>
            </div>
          </div>
          <canvas height="120" class="blog-overview-stats-small-2"></canvas>
        </div>
      </div>
    </div>
    <div class="col-lg col-md-4 col-sm-6 mb-4">
      <div class="stats-small stats-small--1 card card-small">
        <div class="card-body p-0 d-flex">
          <div class="d-flex flex-column m-auto">
            <div class="stats-small__data text-center">
              <span class="stats-small__label text-uppercase">Situs</span>
              <h6 class="stats-small__value count my-3">2,413</h6>
            </div>
            <div class="stats-small__data">
              <span class="stats-small__percentage stats-small__percentage--increase">12.4%</span>
            </div>
          </div>
          <canvas height="120" class="blog-overview-stats-small-4"></canvas>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-lg col-md-6 col-sm-6 mb-4">
      <table id="example" class="table table-striped table-bordered" style="width:100%">
          <thead>
            <tr>
                <th>Header Berita</th>
                <th>Link</th>
                <th>Status</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($berita as $item)  
                <tr>
                  <td>{{$item->text_header}}</td>
                  <td>{{$item->link_berita}}</td>
                  <td>
                    <span class="badge badge-{{ $item->status == 'valid' ? 'success' : ( $item->status == 'hoax' ? 'danger' : 'info' ) }}">{{$item->status}}</span>
                  </td>
                </tr>
            @endforeach
          </tbody>
          <tfoot>
            <tr>
                <th>Header Berita</th>
                <th>Link</th>
                <th>Status</th>
          </tfoot>
      </table>
    </div>
  </div>
</div>
@stop