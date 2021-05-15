@extends('layout.layout')
  @section('title','New Not Paid')
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
  <div id="changequote" class="modal">
<div class="modal-content animate">
  <form  method="post">
    <div class="imgcontainer" style="text-align:center;">
      <span onclick="document.getElementById('changequote').style.display='none'" class="close" title="Close Modal">&times;</span>
      <br><br>
    </div>

    <div class="container" style="max-width:700px;padding-left:10%;padding-right:10%;">
    <input type="number" class="form-control" placeholder="Word Count"><br>
    <input type="text" class="form-control" placeholder="PPT"><br>
    <input type="text" class="form-control" placeholder="Tech effort"><br>
    <input type="text" class="form-control" placeholder="Rate"><br>
    <input type="text" class="form-control" placeholder="Enter Quote Remark"><br>
    <input type="text" class="form-control" placeholder="Total Quote"><br>
    <select style="width:60px;">
    <option>AUD</option>
    <option>USd</option>
    <option>GBP</option>
    <option>NZD</option>
    <option>CAD</option>
    <option>INR</option>
    </select>
    </div>
    <div class="container" style="width:100%;padding-bottom:20px;padding-top:10px;">
      <button class="btn btn-danger" type="button" onclick="document.getElementById('changequote').style.display='none'">Cancel</button>
      <button type="submit" style="float:right;" class="btn btn-success">Give Quote</button>
    </div>
  </form>
  </div>
</div>
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
        <h3 class="card-title" style="font-weight:bold;">View Assignment</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table id="example2" class="table table-bordered table-hover">
          <thead>
          <tr>
            <th class="btn-info">ORDER ID</th>
            <th class="btn-info">USER DETAILS</th>
            <th class="btn-info">SUBJECT</th>
            <th class="btn-info">ORDER Quote</th>
            <th class="btn-info">RECIEVED AMOUNT</th>
            <th class="btn-info">DUE DATE</th>
            <th class="btn-info">EXTENDED DEADLINE</th>
            <th class="btn-info">ASSIGNED TEACHER</th>
            <th class="btn-info">PAYMENT ACTION</th>
            <th class="btn-info">NOTIFY</th>
            <th class="btn-info">MANUAL</th>
          </tr>
          </thead>
          <tbody>
          <tr>
            <td valign="top" colspan="11" style="text-align:center;"class="emptycol">No data available</td>
          </tr>
          </tfoot>
        </table>
      </div>
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
