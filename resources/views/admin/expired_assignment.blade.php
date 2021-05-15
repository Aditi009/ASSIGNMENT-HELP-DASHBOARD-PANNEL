@extends('layout.layout')
  @section('title','Expired Assignment')
  @section('content')
  <style>
/* Set a style for all buttons */

/* Extra styles for the cancel button */

/* Center the image and position the close button */
span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width:100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 3% auto 17% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  max-width: 500px; /* Could be more or less, depending on screen size */
}
.content
{
    max-width:400px;
}
/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)}
  to {-webkit-transform: scale(1)}
}

@keyframes animatezoom {
  from {transform: scale(0)}
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
}

/*    end modal       */
</style>

<!-- end quote -->
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
        <h3 class="card-title" style="font-weight:bold;">Order Not Paid</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table id="example2" class="table table-bordered table-hover">
          <thead>
          <tr>
            <th class="btn-info">ORDER ID</th>
            <th class="btn-info">USER DETAILS</th>
            <th class="btn-info">SUBJECT</th>
            <th class="btn-info">ORDER CREATE DATE</th>
            <th class="btn-info">DUE DATE</th>
            <th class="btn-info">Get Quote</th>
            <th class="btn-info">Action</th>
            <th class="btn-info">Payment Action</th>
            <th class="btn-info">Notify</th>
          </tr>
          </thead>
          <tbody>


          @foreach ($assignment as $item)

@if($item->dd>30)

          <tr>
              <td>{{$item->id}}</td>
              <td>{{$item->email}}</td>
              <td>{{$item->subjects}}</td>
              <td>{{$item->created_at}}</td>
              <td>{{$item->dd}}</td>
              <td>{{$item->dead_line}}</td>
              <td>{{$item->total_quotes}}<span> &nbsp;INR&nbsp;</span><span>&nbsp;</span>




            </td>


              <td>{{$item->status}}</td>
              <td>{{$item->order_status}}</td>

          </tr>


@endif



          @endforeach

          </tfoot>
        </table>

      </div>
      @if(session()->has('changesmessage'))
      <div class="alert ml-5 mr-5" role="alert">
        <p style="color:green">  {{ session()->get('changesmessage') }}</p>
      </div>
  @endif
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
      <!-- /.row -->
<script>
// Get the modal
var modal = document.getElementById('changequote');
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
@endsection
