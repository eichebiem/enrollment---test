@extends ('layout.master')

@section('content')

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      <i class="fa fa-home"></i> Home
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
        <li class="active">Blank page</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">

          <h3 class="box-title">Reminders</h3>

        </div>
        <div class="box-body">
          <table id="example1" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>Posted By</th>
                <th>Message</th>
                <th>Date Posted</th>
              </tr>
            </thead>

            <tbody>
              <tr>
                <td>Harris Mariano</td>
                <td>Walang Pasok</td>
                <td>Mon, Apr 2, 2018 04:09:31 PM</td>
              </tr>
              <tr>
                <td>Harris Mariano</td>
                <td>Urdaneta Day</td>
                <td>Mon, Apr 2, 2018 04:01:21 PM</td>
              </tr>
            </tbody>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>

@endsection