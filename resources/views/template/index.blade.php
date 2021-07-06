<!doctype html>
<html class="no-js h-100" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Cek Hoax Dinas Kominfo Jatim</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" id="main-stylesheet" data-version="1.1.0" href="{{ asset('/vendors/styles/shards-dashboards.1.1.0.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/vendors/styles/extras.1.1.0.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/vendors/assets/dataTables.bootstrap4.min.css') }}">

    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/quill/1.3.6/quill.snow.css">
  </head>
  <body class="h-100">
    <div class="container-fluid">
      <div class="row">
        <!-- Main Sidebar -->
        @include('template.sidebar')
        <!-- End Main Sidebar -->
        <main class="main-content col-lg-10 col-md-9 col-sm-12 p-0 offset-lg-2 offset-md-3">
          <div class="main-navbar sticky-top bg-white">
            <!-- Main Navbar -->
            @include('template.top_nav')
          </div>
          <!-- / .main-navbar -->
          @yield('content')
          @include('template.footer')
        </main>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
    <script src="https://unpkg.com/shards-ui@latest/dist/js/shards.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Sharrre/2.0.1/jquery.sharrre.min.js"></script>
    
    <script src="{{ asset('/vendors/scripts/extras.1.1.0.min.js') }}"></script>
    <script src="{{ asset('/vendors/scripts/shards-dashboards.1.1.0.min.js') }}"></script>
    <script src="{{ asset('/vendors/scripts/app/app-blog-new-post.1.1.0.js') }}"></script>

    <script src="{{ asset('/vendors/assets/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('/vendors/assets/dataTables.bootstrap4.min.js') }}"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <script>
      $(document).ready(function() {
        $('#example').DataTable();
        alert(('#iframe_content').value());
      });

      // script vue 
      const app = new Vue({
        el: "#content_berita",
        data: {
          link : '',
          header_title : '',
          cari_kata : '',
          berita : '',
          status_berita : '',
          id_berita : ''
        },
        watch: {},
        methods: {
          cek_kata: function(){
            console.log(this.berita);
            // axios
            //   .post("{{ url('api/cek_kata') }}", {
            //     kata : this.cari_kata,
            //     url : this.link,
            //   })
            //   .then(response => {
            //     this.file = response.data.file_content
            //     console.log(this.file);
            //   }).catch(err => {
            //     console.log(err);
            //   });
          },
          cekLink: function(){
            axios
              .get("{{ url('api/cek_berita/."+this.berita+"') }}")
              .then(response => {
                console.log(response);
              }).catch(err => {
                console.log(err);
              });
          },
          saveBerita: function(){
            axios
              .post("{{ url('api/save_berita/') }}", {
                header : this.header_title,
                link : this.link,
                user_id : "{{ session('id_user') }}"
              }).then(response => {
                this.get_detil_berita();
                // console.log(response.data);
              }).catch(err => {
                console.log(err);
              });
          },
          get_detil_berita: function(){
            axios
              .get("{{ url('api/get_berita/') }}")
              .then(response => {
                this.status_berita = response.data.status;
                this.id_berita = response.data.id_berita;
                console.log(this.id_berita);
              }).catch(err => {
                console.log(err);
              });
          },
          valid: function(){
            var url = "{{ url('api/update_berita/"+this.id_berita+"') }}";
            // console.log(url);
            axios
              .post(url, {
                status : 'valid'
              })
              .then(response => {
                console.log(response.data);
              })
              .catch(err => {
                console.log(err);
              });
          }
        },
        mounted(){
          // this.cek_kata();
        }
      });
      //  ./script vue
    </script>
  </body>
</html>