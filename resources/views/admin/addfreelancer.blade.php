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
  span.psw {
     display: block;
     float: none;
  }
}

/*    end modal       */
</style>
  <div id="addfreelancer" class="modal">
<div class="modal-content animate">
  <form  method="post" action="/addfreelancerprofile">
    @csrf
    <div class="imgcontainer" style="text-align:center;">
      <span onclick="document.getElementById('addfreelancer').style.display='none'" class="close" title="Close Modal">&times;</span>
      <br><br>
    </div>
    <div class="container" style="max-width:700px;padding-left:10%;padding-right:10%;">
    <input type="text" name="name" class="form-control" placeholder="Name"><br>
    <input type="text" name="email" class="form-control" placeholder="Email"><br>
    <select name="subject" class="form-control mb-2">
        <option>Select Subject</option>
        <option value="hindi">Hindi</option>
        <option value="english">English</option>
        <option value="Math">Math</option>
        <option value="Chamistry">Chamistry</option>
        <option value="Art">Art</option>
        </select>
    </div>
    <div class="container" style="width:100%;padding-bottom:20px;padding-top:10px;">
      <button class="btn btn-danger" type="button" onclick="document.getElementById('addfreelancer').style.display='none'">Cancel</button>
      <button type="submit" style="float:right;" class="btn btn-success">Give Quote</button>
    </div>
  </form>

  </div>

</div>
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
        <h3 class="card-title" style="font-weight:bold;padding-right:20px;">My Freelancers</h3>
        <button class="btn btn-success" onclick="document.getElementById('addfreelancer').style.display='block'">Add new Freelancer</button>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table id="example2" class="table table-bordered table-hover">
          <thead>
          <tr>
            <th class="btn-info">Freelancer Id</th>
            <th class="btn-info">Name</th>
            <th class="btn-info">Email</th>
            <th class="btn-info">Subject</th>

            <th class="btn-info">Delete</th>
            <th>
          </tr>
          </thead>
          <tbody>
              @foreach ($freelancer as $item)
              <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}
                </td>
                <td>{{$item->email}}</td>
                <td>{{$item->subject}}</td>

            <td><a class="btn btn-danger" href="editP/{{$item->id}}" style="color: white">Delete</a></td>
              </tr>
              @endforeach

          </tfoot>
        </table>




    </div>
    @if(session()->has('message'))
    <div class="alert ml-5 mr-5" role="alert">
      <p style="color:green">  {{ session()->get('message') }}</p>
    </div>
@endif
    <!-- /.card -->
      <!-- /.row -->
      <script>
// Get the modal
var modal = document.getElementById('freelancerquote');
var modal1 = document.getElementById('givequote');
// When the user clicks anywhere outside of the modal, close it
$("#freelance_submit").on('click', function()
  {
      var a=$('#summernote').html();
      alert(a);
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
