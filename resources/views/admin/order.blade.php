@extends('layout.layout')
  @section('title','Order')
  @section('content')
  <style>
/* Set a style for all buttons */

/* Extra styles for the cancel button */

/* Center the image and position the close button */
span.psw {
  float: right;
  padding-top: 16px;
}
input[type="file"] {
    position: absolute;
    z-index: -1;
    top: 6px;
    left: 0px;
    font-size: 15px;
    color: rgb(153,153,153);
}
.new-button {
    display: inline-block;
    padding: 8px 12px;
    cursor: pointer;
    border-radius: 4px;
    background-color: #60106e;
    font-size: 16px;
    color: #fff;
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
        <h3 class="card-title" style="font-weight:bold;">All Order</h3>
      </div>

      <!-- /.card-header -->
      <div class="card-body">

        <table id="example2" class="table table-bordered table-hover">
          <thead>
          <tr>
            <th class="btn-info">ORDER ID</th>
            <th class="btn-info">Assignment Name</th>
            <th class="btn-info">USER DETAILS</th>
            <th class="btn-info">SUBJECT</th>
            <th class="btn-info">SUBJECT DESC</th>
           <th class="btn-info">Uploaded File</th>
           <th class="btn-info">paid anount</th>
           <th class="btn-info">completion date</th>

          </tr>
          </thead>
          <tbody>
              @foreach ($upload as $item)
<tr>
              <td>{{$item->id}}</td>
              <td>{{$item->assignment_name}}</td>
              <td>{{$item->user_detail}}</td>
              <td>{{$item->subject}}</td>
              <td>{{$item->Subject_Description}}</td>
              <td>{{$item->assignment_file}}</td>
              <td>{{$item->paid_amount}}</td>
              <td>{{$item->completion_date}}</td>
              <td><a class="btn btn-danger" href="del/{{$item->id}}" style="color: white">Delete</a></td>

</tr>

              @endforeach

          </tfoot>
        </table>

      </div>
      <!-- /.card-body -->
      @if(session()->has('message'))
      <div class="alert ml-5 mr-5" role="alert">
        <p style="color:green">  {{ session()->get('message') }}</p>
      </div>
  @endif
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
