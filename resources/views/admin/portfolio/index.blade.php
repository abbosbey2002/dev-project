
<x-layouts.header>



  <!-- Content Wrapper. Contains page content -->
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





    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Projects  | <a href={{route('portfolio.create')}} >Add</a>   </h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
          </button>
        </div>
      </div>
      <div class="card-body p-0">
        <table class="table table-striped projects">
            <thead>
                <tr>
                    <th style="width: 1%">
                        #
                    </th>
                    <th style="width: 20%">
                        Project Name
                    </th>
                    <th style="width: 30%">
                        Team Members
                    </th>
                    <th>
                        Project Progress
                    </th>
                    <th style="width: 8%" class="text-center">
                        Status
                    </th>
                    <th style="width: 20%">
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($portfolios as $portfolio)
                <tr>
                    <td>
                        #
                    </td>
                    <td>
                        <a>
                            {{$portfolio->name}}
                        </a>
                        <br/>
                        <small>
                            Deadline {{$portfolio->deadline}}
                        </small>
                    </td>
                    <td>
                        <ul class="list-inline">
                           <li> {{$portfolio->description}} </li>
                        </ul>
                    </td>
                    <td class="project_progress">
                        <div class="progress progress-sm">
                            <div class="progress-bar bg-green" role="progressbar" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100" style="width: 57%">
                            </div>
                        </div>
                        <small>
                            57% Complete
                        </small>
                    </td>
                    <td class="project-state">
                        <span class="badge badge-success">Success</span>
                    </td>
                    <td class="project-actions text-right">
                        <a class="btn btn-primary btn-sm" href={{route('portfolio.show', ['portfolio'=>$portfolio->id])}}>
                            <i class="fas fa-folder">
                            </i>
                            View
                        </a>
                        <a class="btn btn-info btn-sm" href={{ route('portfolio.edit', ['portfolio' => $portfolio->id]) }} >
                            <i class="fas fa-pencil-alt">
                            </i>
                            Edit
                        </a>
                        <form  class="btn btn-danger btn-sm" action={{  route('portfolio.destroy', ['portfolio'=>$portfolio->id]) }} method='POST' >
                            @csrf
                            @method('DELETE')
                             <button class="btn btn-danger  btn-sm" type="submit">  <i class="fas fa-trash">
                            </i>
                            Delete </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->

  </section>
</x-layouts.header>
