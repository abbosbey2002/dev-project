
<x-layouts.header>


    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1> Contact</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="/">Home</a></li>
                  <li class="breadcrumb-item active"> Edit</li>
                </ol>
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <!-- Main content -->
    <section class="content">
        {{-- create --}}
        <div class="row ">

            <div class="col-md-6">


        <form method="POST" action={{route('contact.store')}} enctype="multipart/form-data" class="row">
            @csrf
          <div  class="col-md-8">
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
                      <label for="inputName">name</label>
                      <input type="text" placeholder="primary number" name="name" id="inputName" class="form-control my-2">
                      <label for="inputadress">adress</label>
                      <input type="text" placeholder="{{'+998994442255'}}" name="adress" id="inputadress" class="form-control my-2">
                      <label for="inputtype">type</label>
                      <input type="text" placeholder="number" name="type" id="inputtype" class="form-control my-2">
                      <input type="submit" value="Add contact" class="btn btn-success float-right m-2">
                    </div>

                </div>
                <!-- /.card-body -->
            </div>


            <!-- /.card -->

          </div>
          </form>
        </div>
        {{-- create --}}
        @foreach ($contacts as $contact)

          <div class="col-md-6">
        <form method="POST" action={{route('contact.update', ['contact'=>$contact])}} enctype="multipart/form-data" class="row">
            @method("PUT")
            @csrf
          <div  class="col-md-8">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"> {{$contact->type}}</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                  <div class="form-group">
                      <label for="inputName">Name</label>
                      <input type="text" value="{{$contact->name}}" name="name" id="inputName" class="form-control">

                      <label for="inputName">Adress</label>
                      <input type="text" value="{{$contact->adress}}" name="adress" id="inputName" class="form-control">

                      <label for="inputName">Type</label>
                      <input type="text" value="{{$contact->type}}" name="type" id="inputName" class="form-control">

                      <input type="submit" value="Update contact" class="btn btn-success float-right m-2">
                    </div>

                </div>
                <!-- /.card-body -->
            </div>


            <!-- /.card -->

          </div>
          </form>
        </div>
          @endforeach
          <div class="col-12">
        </div>
    </div>
      </section>
      <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->

</x-layouts.header>
