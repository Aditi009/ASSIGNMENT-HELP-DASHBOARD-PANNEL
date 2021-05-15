@extends('layout.layout')
  @section('title','Ppfa')
  @section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <div class="card">
      <div class="card-header">
        <h3 class="card-title" style="font-weight:bold;">PPFA</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table id="example2" class="table table-bordered table-hover">
          <thead>
          <tr>
            <th class="btn-info">ORDER ID</th>
            <th class="btn-info">USER DETAILS</th>
            <th class="btn-info">SUBJECT</th>
            <th class="btn-info">Order Quote</th>
            <th class="btn-info">RECEIVE QUOTE</th>
            <th class="btn-info">PAY DATE</th>
            <th class="btn-info">DUE DATE</th>
            <th class="btn-info">EXTENDED DEADLINE</th>
            <th class="btn-info">ASSIGNED TEACHER</th>
            <th class="btn-info">Priority</th>
            <th class="btn-info">Notify</th>
            <th class="btn-info">Action</th>
          </tr>
          @foreach ($assignment as $item)
          @if ($item->table_status=="ppfa")


          <td>{{$item->id}}</td>
          <td>Userdetail</td>
          <td>{{$item->subjects}}</td>
          <td>{{$item->created_at}}</td>
          <td>{{$item->dead_line}}</td>
          <td>{{$item->total_quotes}}</td>
          <td>{{$item->status}}</td>
          <td>{{$item->order_status}}</td>

@endif


@endforeach
          </thead>
          <tbody>
          <tr>
          </tr>
          </tfoot>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
      <!-- /.row -->
@endsection
