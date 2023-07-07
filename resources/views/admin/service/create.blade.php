
<x-layouts.header>


    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>Project Add</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                </ol>
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <!-- Main content -->

<section class="content">
    <form method="POST" action="{{route('service.store')}}" enctype="multipart/form-data" class="row">
      @csrf
      <div  class="col-md-6">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">General</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
              </button>
            </div>
          </div>
          <div class="card-body">
              <div class="form-group">
                  <label for="inputName">Service Name</label>
                  <input type="text" name="name" id="inputName" class="form-control">
                </div>
                <div class="form-group">
                  <label for="inputDescription">Serive Description</label>
                  <textarea name="description" id="inputDescription" class="form-control" rows="6"></textarea>
                </div>
                <div class="form-group">
                    <label for="inputDescription">Serive Description</label>
                    <textarea name="short_descr" id="inputshortDescription" class="form-control" rows="4"></textarea>
                  </div>

                <div class="form-group">
                  <label for="inputProjectLeader">Service image</label>
                  <input type="file" name="image" id="inputProjectLeader" class="form-control">
                </div>
              </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
        <a href="#" class="btn btn-secondary">Cancel</a>
        <input type="submit" value="Create new Project" class="btn btn-success float-right">
      </div>
      </form>


  </section>

      <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->

</x-layouts.header>
