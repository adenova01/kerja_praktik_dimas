@extends('template.index')
@section('content')
<div class="main-content-container container-fluid px-4">
  <!-- Page Header -->
  <div class="page-header row no-gutters py-4">
    <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
      <span class="text-uppercase page-subtitle">News Posts</span>
      <h3 class="page-title">Add New Check News</h3>
    </div>
  </div>
  <!-- End Page Header -->
  <div class="row">
    <div class="col-lg-9 col-md-12" id="content_berita">
      
      <!-- Add New Post Form -->
      <div class="card card-small mb-3">
        <div class="card-body">
          <form class="add-new-post" action="" method="">
            <label>Header Title</label>
            <input v-model="header_title" class="form-control form-control-md mb-3" name="title" type="text" placeholder="Post Title" required>
            <label>Link Berita</label>
            <div class="row">
              <div class="col-sm-10">
                <input v-model="link" class="form-control form-control-md mb-3" name="link" type="text"   placeholder="Link Berita">
              </div>
              <div class="col-sm-2">
                <a v-bind:href="link" class="btn btn-primary btn-md" target="beritanya">cek link</a>
              </div>
            </div>
          </form>
        </div>
      </div>
      <!-- / Add New Post Form -->

      {{-- Content link --}}
      <div class="card card-small mb-3">
        <div class="card-body">
            <p class="text-center text-justify text-dark">Content berita : <span class="text-primary">@{{link}}</span></p>
            <hr style="border: 2px solid"/>
            <div class="input-group mb-3">
                <input v-model="cari_kata" type="text" class="form-control" placeholder="Search">
                <div class="input-group-append">
                  <button class="btn btn-success" type="submit" v-on:click="cek_berita()">Cari</button>
                </div>
            </div>
            @include('frame_berita')
        </div>
      </div>
      {{-- ./Content link --}}

    </div>

    <div class="col-lg-3 col-md-12">
      <!-- Post Overview -->
      <div class='card card-small mb-3'>
        <div class="card-header border-bottom">
          <h6 class="m-0">Actions</h6>
        </div>
        <div class='card-body p-0'>
          <ul class="list-group list-group-flush">
            <li class="list-group-item p-3">
              <span class="d-flex mb-2">
                <i class="material-icons mr-1">flag</i>
                <strong class="mr-1">Status:</strong> Checked
              </span>
              <span class="d-flex mb-2">
                <i class="material-icons mr-1">visibility</i>
                <strong class="mr-1">Visibility:</strong>
                <strong class="text-success">Invisible</strong>
              </span>
              <span class="d-flex mb-2">
                <i class="material-icons mr-1">calendar_today</i>
                <strong class="mr-1">Schedule:</strong> Now
              </span>
              <span class="d-flex">
                <i class="material-icons mr-1">score</i>
                <strong class="mr-1">Readability:</strong>
                <strong class="text-warning">Ok</strong>
              </span>
            </li>
            <li class="list-group-item d-flex px-3">
              <button class="btn btn-sm btn-outline-accent">
                <i class="material-icons">check</i> Valid</button>
              <button class="btn btn-sm btn-accent ml-auto">
                <i class="material-icons">close</i> Hoax</button>
            </li>
          </ul>
        </div>
      </div>
      <!-- / Post Overview -->
      <!-- Post Overview -->
      <div class='card card-small mb-3'>
        <div class="card-header border-bottom">
          <h6 class="m-0">Categories</h6>
        </div>
        <div class='card-body p-0'>
          <ul class="list-group list-group-flush">
            <li class="list-group-item px-3 pb-2">
              <div class="custom-control custom-checkbox mb-1">
                <input type="checkbox" class="custom-control-input" id="category1" checked>
                <label class="custom-control-label" for="category1">Uncategorized</label>
              </div>
              <div class="custom-control custom-checkbox mb-1">
                <input type="checkbox" class="custom-control-input" id="category2" checked>
                <label class="custom-control-label" for="category2">Design</label>
              </div>
              <div class="custom-control custom-checkbox mb-1">
                <input type="checkbox" class="custom-control-input" id="category3">
                <label class="custom-control-label" for="category3">Development</label>
              </div>
              <div class="custom-control custom-checkbox mb-1">
                <input type="checkbox" class="custom-control-input" id="category4">
                <label class="custom-control-label" for="category4">Writing</label>
              </div>
              <div class="custom-control custom-checkbox mb-1">
                <input type="checkbox" class="custom-control-input" id="category5">
                <label class="custom-control-label" for="category5">Books</label>
              </div>
            </li>
          </ul>
        </div>
      </div>
      <!-- / Post Overview -->
    </div>
  </div>
</div>
@stop