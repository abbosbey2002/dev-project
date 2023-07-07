<x-layouts.header>

     <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>{{$service->name}}</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href={{route('portfolio.index')}} >back</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card card-solid">
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-sm-6">
              <h3 class="d-inline-block d-sm-none">{{$service->name}}</h3>
              <div class="col-12">
                <img src={{asset('storage/'.$service->image)}} class="product-image" alt="Product Image">
              </div>
            </div>
            <div class="col-12 col-sm-6">
                <h3 class="my-3">{{$service->name}}</h3>
                <hr>
              <p class="my-3">{{$service->short_descr}}</p>
              <p>{{$service->description}}</p>


            </div>
          </div>

        </div>

        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
</x-layouts.header>
