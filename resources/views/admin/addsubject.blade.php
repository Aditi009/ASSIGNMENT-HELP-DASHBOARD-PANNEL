@extends('layout.layout')
  @section('title','Subject')
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
<div id="addassignment" class="modal">
    <div class="modal-content animate">
      <form  method="post" action="/uploadsubject" >
        @csrf
        <div class="imgcontainer" style="text-align:center;">
          <span onclick="document.getElementById('addassignment').style.display='none'" class="close" title="Close Modal">&times;</span>
          <br><br>
        </div>
        <div class="container" style="max-width:700px;padding-left:10%;padding-right:10%;">
        <input type="text" name="Subjectname" class="form-control" placeholder="Subject Name"><br>


        </div>
        <div class="container" style="width:100%;padding-bottom:20px;padding-top:10px;">
          <button class="btn btn-danger" type="button" onclick="document.getElementById('addassignment').style.display='none'">Cancel</button>
          <button type="submit" style="float:right;" class="btn btn-success">Send</button>
        </div>
      </form>

      </div>

    </div>
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
        <h3 class="card-title" style="font-weight:bold;">Subject</h3>
      </div>
      <div class="col-3 ml-3 mt-2">        <button class="btn btn-success" onclick="document.getElementById('addassignment').style.display='block'">Upload new Subject</button>
      </div>
      <!-- /.card-header -->
      <div class="card-body">

        <table id="example2" class="table table-bordered table-hover">
          <thead>
          <tr>
            <th class="btn-info">SUBJECT ID</th>

            <th class="btn-info">SUBJECT NAME</th>

            <th class="btn-info">Action</th>
          </tr>
          </thead>
          <tbody>


            @foreach ($sub as $item)

            <tr>

    <td>{{$item->id}}</td>
    <td>{{$item->subject}}</td>

    <td><a class="btn btn-danger" href="delsub/{{$item->id}}" style="color: white">Delete</a></td>

            </tr>

            @endforeach




          </tbody>

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
