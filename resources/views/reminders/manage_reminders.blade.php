@extends ('layout.master')

@section('content')

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      <i class="fa fa-bell"></i> Manage Reminders
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

          <h3 class="box-title">Reminder's List</h3>

     </div>

     <div class="box-body">
          <table id="example1" class="table table-bordered table-hover">
               <thead>
                    <tr>
                         <th>Posted By</th>
                         <th>Message</th>
                         <th>Date Posted</th>
                         <th>Status</th>
                         <th>Action</th>
                    </tr>
               </thead>

               <tbody>
                    <tr>
                         <td>Harris Mariano</td>
                         <td>Walang PasokWalang PasokWalang PasokWalang PasokWalang PasokWalang PasokWalang PasokWalang PasokWalang PasokWalang PasokWalang PasokWalang PasokWalang PasokWalang PasokWalang PasokWalang PasokWalang Pasok</td>
                         <td>Mon, Apr 2, 2018 04:09:31 PM</td>
                         <td>Active</td>
                         <td>
                              <form action="" method="post" class="form-block">
                                   <button type="reset" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i> Edit</button>
                                   <button type="reset" class="btn btn-danger btn-sm"><i class="fa fa-times"></i> Delete</button>
                                   <button type="reset" class="btn btn-info btn-sm"><i class="fa fa-edit"></i> d ko pa alam</button>
                              </form>
                         </td>                         
                    </tr>
                    <tr>
                         <td>Harris Mariano</td>
                         <td>Urdaneta Day</td>
                         <td>Mon, Apr 2, 2018 04:01:21 PM</td>
                         <td>Active</td>
                         <td>
                              <form action="" method="post" class="form-block">
                                   <button type="reset" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i> Edit</button>
                                   <button type="reset" class="btn btn-danger btn-sm"><i class="fa fa-times"></i> Delete</button>
                                   <button type="reset" class="btn btn-info btn-sm"><i class="fa fa-edit"></i> d ko pa alam</button>
                              </form>
                         </td>   
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