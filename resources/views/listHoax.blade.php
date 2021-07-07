@extends('template.index')
@section('content')
<div class="main-content-container container-fluid px-4">
    <!-- Page Header -->
    <div class="page-header row no-gutters py-4">
        <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
            <span class="text-uppercase page-subtitle">List {{$title}}</span>
            <h3 class="page-title">{{$title}} Overview</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-lg col-md-6 col-sm-6 mb-4">
            <div class="stats-small stats-small--1 card card-small">
                <div class="card-body p-4">
                    <table id="example" class="table table-bordered" style="width:100%">
                        <thead class="bg-dark text-light">
                          <tr>
                            <th>Header Berita</th>
                            <th>Link Berita</th>
                            <th>Status Berita</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($listHoax as $item)
                                <tr>
                                    <th>{{ $item->text_header }}</th>
                                    <th>{{ $item->link_berita }}</th>
                                    <th>{{ $item->status }}</th>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
  </div>
</div>
@stop