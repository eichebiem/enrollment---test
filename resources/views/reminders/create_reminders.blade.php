@extends ('layout.master')

@section('content')

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      <i class="fa fa-bell"></i> Create Reminder
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
      <form action="/reminders" method="POST" id="form_validate">
        @csrf

        <div class="box-body pad">
            <textarea name="reminder" class="textarea" placeholder="Place some text here"
                      style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
        </div>
        <!-- /.box-body -->

        <div class="box-footer">
          <button type="reset" class="btn btn-warning"><i class="fa fa-refresh"></i> Reset</button>
          <button type="submit" class="btn btn-success pull-right"><i class="fa fa-paper-plane"></i> Create</button>
        </div>
      </form>
    </div>
    <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>

@endsection