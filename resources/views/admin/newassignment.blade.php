@extends('layout.layout')
  @section('title','New Assignment')
  @section('content')
  <!--start modals -->
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
  span.psw
  {
     display: block;
     float: none;
  }
}

/*    end modal       */
</style>
  <div id="givequote" class="modal">
<div class="modal-content animate">
  <form  method="post">
    @csrf
    <div class="imgcontainer" style="text-align:center;">
      <span onclick="document.getElementById('givequote').style.display='none'" class="close" title="Close Modal">&times;</span>
      <br><br>
    </div>
    <div class="container" style="max-width:700px;padding-left:10%;padding-right:10%;">
    <input type="number" name="word_count" class="form-control" placeholder="Word Count"><br>
    <input type="text" name="ppt" class="form-control" placeholder="PPT"><br>
    <input type="text" name="tech_effort" class="form-control" placeholder="Tech effort"><br>
    <input type="text" name="rate" class="form-control" placeholder="Rate"><br>
    <input type="text" name="quote_remark" class="form-control" placeholder="Enter Quote Remark"><br>
    <input type="text" name="total_amount" class="form-control" placeholder="Total Quote"><br>
    <select name="currency" style="width:60px;">
    <option>AUD</option>
    <option>USd</option>
    <option>GBP</option>
    <option>NZD</option>
    <option>CAD</option>
    <option>INR</option>
    </select>
    </div>
    <div class="container" style="width:100%;padding-bottom:20px;padding-top:10px;">
      <button class="btn btn-danger" type="button" onclick="document.getElementById('givequote').style.display='none'">Cancel</button>
      <button type="submit" style="float:right;" class="btn btn-success">Give Quote</button>
    </div>
  </form>
  </div>
</div>
 <!--end modals -->

 <!--end modals -->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title" style="font-weight:bold;">NEW ASSIGNMENT</h3>
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
            <th class="btn-info">Action</th>
            <th class="btn-info">Notify</th>
          </tr>
          </thead>
          <tbody>
            @foreach ($assignment as $item)
            @if ($item->table_status=="NewAssignment")

          <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->email}}</td>
            <td>{{$item->subjects}}</td>
            <td>{{$item->created_at}}</td>
            <td>{{$item->dead_line}}</td>
            <td><button class="btn btn-primary btn-sm" onclick="document.getElementById('{{$item->id}}').style.display='block'" style="width:auto;">Get freelancer Quote</button>
                <div id="{{$item->id}}" class="modal">
                    <div class="modal-content animate">
                      <form  method="post" action="/freelancerquotes">
                        @csrf
                        <div class="imgcontainer" style="text-align:center;">
                          <span onclick="document.getElementById('{{$item->id}}').style.display='none'" class="close" title="Close Modal">&times;</span>
                          <br><br>
                        </div>

                        <div class="container" style="max-width:800px;padding:5%;">
                            <input type="text" value="{{$item->subjects}}" name="subject" class="form-control mb-2">

                        <input type="text" class="form-control" name="ppt" placeholder="PPT"><br>
                        <input id="summernote" type="text" class="form-control" placeholder="Tech effort"><br>
                        <input type="text" name="desc" id="desc" hidden>
                        <input type="datetime-local" name="duedate" class="form-control"><br>
                        </div>
                        <div class="container" style="width:100%;padding-bottom:20px;">
                          <button class="btn btn-danger" type="button" onclick="document.getElementById('{{$item->id}}').style.display='none'">Cancel</button>
                          <button type="submit" style="float:right;" id="freelance_submit" class="btn btn-success">Quote</button>
                        </div>
                      </form>
                      </div>
                    </div>


            </td>
            <td><button class="btn btn-danger btn-sm" onclick="document.getElementById('givequote').style.display='block'" style="width:auto;">Give Quote</button></td>
            <td><button class="btn btn-success btn-sm">Can't Quote</button></td>
        <td>&nbsp;</td>
          </tr>
          @endif
          @endforeach

          </tfoot>
        </table>
      </div>
      @if(session()->has('message'))
      <div class="alert ml-5 mr-5" role="alert">
        <p style="color:green">  {{ session()->get('message') }}</p>
      </div>
  @endif
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
      <!-- /.row -->
      <script>
// Get the modal
var modal = document.getElementById('freelancerquote');
var modal1 = document.getElementById('givequote');
// When the user clicks anywhere outside of the modal, close it
$("#freelance_submit").on('click', function()
  {
      var a=$($("#summernote").summernote("code")).html();
      $("#desc").val(a);
  });
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
    if (event.target == modal1) {
        modal1.style.display = "none";
    }
}
</script>
@endsection
