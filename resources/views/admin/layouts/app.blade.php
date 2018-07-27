<<!DOCTYPE html>
<html>
<head>
   @include('admin/layouts/head')
</head>
<body  class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        @include('admin/layouts/header')

        @include('admin/layouts/sidebar')    

        <div class="content-wrapper">

          <section class="content">

      
<div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Responsive Hover Table</h3>

        <div class="box-tools">
          <div class="input-group input-group-sm" style="width: 150px;">
            <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

            <div class="input-group-btn">
              <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
            </div>
          </div>
        </div>
      </div>
      <!-- /.box-header -->
      <div class="box-body table-responsive no-padding">
        <table class="table table-hover">
          <tr>
            <th>ID</th>
            <th>User</th>
            <th>Date</th>
            <th>Status</th>
            <th>email</th>
            <th>      </th>
          </tr>
          @foreach($users as $user )
          
          
          <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>11-7-2014</td>
            <td>
              @if($user->approve=='YES')
              <span class="label label-success">Approved</span>
              @elseif($user->approve=='NO')
              <span class="label label-warning">Pending</span>
              @else
              <span class="label label-danger">Banned</span>
              @endif
            </td>
            <td>{{$user->email}}</td>
            <td>
              
             @if($user->approve=='YES')
             <a href="" class="fa fa-fw fa-close">Ban</a>
              @elseif($user->approve=='NO')
              <a method="PUT" href="{{route('adminapprove.edit',$user->id)}}" class="fa fa-fw fa-check-circle-o">Aprove</a>
              @endif
            </td>
          </tr>
          @endforeach
        </table>
      </div>

</section>
<!-- /.content -->
    
        </div>

        @include('admin/layouts/footer')
    </div>
    
</body>
</html>