<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | General Form Elements</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- SweetAlert CSS -->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
    integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
</head>

<body class="hold-transition sidebar-mini">
  <div class="container">
    <script>
      // $(document).ready(function() {
      // swal( "copy link : {{config('app.url').'/'.session('status')}}");
      // });
      swal({
      title:"Success for create telly",
      text: "copy link here",
      content: {
        element:"input",
      attributes : {
        placeholder :"Copy Link Here...",
       value: "{{config('app.url').'/'.session('status')}}"
      }},
      buttons: {
      confirm: "Ok"
      }
      })
    </script>
    @if (session()->has('status'))
    @if (session('status'))
    <script>
      // $(document).ready(function() {
        // swal( "copy link : {{config('app.url').'/'.session('status')}}");
        // });
      swal({
        title:"Success for create telly",
        text: "copy link here",
         content: {
           element:"input",
         attributes : {
           placeholder :"Copy Link Here...",
           value: "{{config('app.url').'/'.session('status')}}"
       }},
         buttons: {
          confirm: "Ok"
         }
      });
    </script>
    @else
    <script>
      swal("Faild to add new product row", {
                                                className: "red-bg",
                                            });
    </script>
    @endif
    @endif
    <!-- /.navbar -->



    <!-- Content Wrapper. Contains page content -->
    <div class="c">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-12">
              <h1 style="text-align: center; font-size:90px;">Telly Links</h1>
            </div>

          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->

              <!-- /.card -->


              <!-- /.card -->

              <!-- Input addon -->
              <div class="card card-info">
                <div class="card-header">
                  <h3 class="card-title">Form Telly</h3>
                </div>
                <form action="{{route('telly.store')}}" method="POST">
                  @csrf
                  <div class="card-body">
                    @error('link')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text "><i class="fas fa-link fa-spin fa-lg"></i></span>
                      </div>
                      <input type="text" class="form-control @error('link') is-invalid @enderror" name="link"
                        placeholder="Enter the Link" required>

                    </div>

                    <!-- /input-group -->
                  </div>
                  <div class="card-body">
                    @error('name')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                    <div class="input-group mb-3">

                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-pencil-ruler fa-rotate-90 fa-lg"></i></span>
                      </div>
                      <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                        placeholder="Enter a target word for the link">
                    </div>

                    <div>
                      <p>
                        <span class="text-danger"> note </span> : the target name is not required put it is preferable
                        to
                        put it.
                      </p>
                    </div>
                    <!-- /.card-body -->
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
                <!-- /.card -->

                <!-- /.card -->

              </div>
              <!--/.col (right) -->
            </div>
            <!-- /.row -->
          </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>

    <!-- Control Sidebar -->
    {{-- <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside> --}}
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
  <!-- Bootstrap 4 -->
  <script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <!-- bs-custom-file-input -->
  <script src="{{asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
  <!-- AdminLTE App -->
  <script src="{{asset('dist/js/adminlte.min.js')}}"></script>
  <!-- AdminLTE for demo purposes -->
  {{-- <script src="{{asset('dist/js/demo.js')}}"></script> --}}
  <!-- Page specific script -->
  <script>
    $(function () {
  bsCustomFileInput.init();
});
  </script>
</body>

</html>