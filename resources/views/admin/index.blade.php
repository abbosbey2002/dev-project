
<x-layouts.header>
<x-slot:titile>
    Doro | Dashboard
</x-slot:titile>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


<!-- Main content -->
<section class="content">

@foreach ($counter as $count)
<form method="POST" action={{route('counter.update', ['counter'=>$count->id])}}>
@method('PUT')
@csrf

<div  class="col-md-4 col-sm-6">
    <div class="card-body border">
    <h2>Counts </h2>
    <div class="form-group">
        <label for="inputName">Award</label>
        <input type="text" placeholder="primary number" value={{$count->award}} name="award" id="" class="form-control my-2">
        <label for="inputadress">Project</label>
        <input type="text" placeholder="" value={{$count->project}} name="project" id="" class="form-control my-2">
        <label for="inputtype">Client</label>
        <input type="text" value={{$count->client}} placeholder="" name="client" id="" class="form-control my-2">
        <label for="inputadress">Experience</label>
        <input type="text" value={{$count->experience}} placeholder="" name="experience" id="" class="form-control my-2">
        <input type="submit" value="Update Count" class="btn btn-success float-right m-2">
      </div>

  </div>
</div>
</form>
@endforeach




</section>


</x-layouts.header>
