
<x-layouts.header>


    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>Project Edit</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">{{$service->name}} Edit</li>
                </ol>
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <!-- Main content -->
    <section class="content">
        <form method="POST" action="{{route('service.update',  $service->id)}}" enctype="multipart/form-data" class="row">
            @method("PUT")
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
                      <label for="inputName">Project Name</label>
                      <input type="text" value="{{$service->name}}" name="name" id="inputName" class="form-control">
                    </div>
                    <div class="form-group">
                      <label for="inputDescription">Project Description</label>
                      <textarea name="description"  id="inputDescription" class="form-control" rows="4"> {{$service->description}} </textarea>
                    </div>
                    <div class="form-group">
                        <label for="inputDescription">Project Description</label>
                        <textarea name="short_descr"  id="inputDescription" class="form-control" rows="4"> {{$service->short_descr}} </textarea>
                      </div>

                    <div class="form-group">
                      <label for="inputProjectLeader">Project image</label>
                      <input type="file" name="image" id="inputProjectLeader" class="form-control">
                    </div>
                  </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <a href="#" class="btn btn-secondary">Cancel</a>
            <input type="submit" value="Update Project" class="btn btn-success float-right">
          </div>
          </form>
          <div class="col-12">
        </div>

      </section>
      <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->

</x-layouts.header>
