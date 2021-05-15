@extends('layout.layout')
  @section('title','Studen Rework')
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
        <h3 class="card-title" style="font-weight:bold;">Student Rework</h3>
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
@if ($item->table_status=="StudentRework")





          <tr>
              <td>{{$item->id}}</td>
              <td>{{$item->email}}</td>
              <td>{{$item->subjects}}</td>
              <td>{{$item->created_at}}</td>
              <td>{{$item->dead_line}}</td>
              <td>{{$item->total_quotes}}<span> &nbsp;INR&nbsp;</span><span>&nbsp;</span>
                <a  class="btn btn-success btn-sm" onclick="document.getElementById('{{$item->id}}').style.display='block'" style="width:auto;">change</a><br>
                <div id="{{$item->id}}" class="modal">
                    <div class="modal-content animate">
                      <form  method="post" action="/updateQuotes/{{$item->id}}" >
                        @csrf
                        <div class="imgcontainer" style="text-align:center;">
                          <span onclick="document.getElementById('{{$item->id}}').style.display='none'" class="close" title="Close Modal">&times;</span>
                          <br><br>
                        </div>

                        <div class="container" style="max-width:700px;padding-left:10%;padding-right:10%;">
                            <input name="id" type="text" value="{{$item->id}}" hidden>
                        <input type="number" class="form-control" name="wordCount" value="{{$item->word_count}}" placeholder="Word Count"><br>
                        <input type="text" class="form-control" name="ppt" value="{{$item->ppt}}" placeholder="PPT"><br>
                        <input type="text" class="form-control" name="techeffort" value="{{$item->tech_effort}}" placeholder="Tech effort"><br>
                        <input type="text" class="form-control"  name="rate" value="{{$item->rate}}" placeholder="Rate"><br>
                        <input type="text" class="form-control" name="quoteremark" value="{{$item->quote_remark}}" placeholder="Enter Quote Remark"><br>
                        <input type="text" class="form-control" name="totalquotes" value="{{$item->total_quotes}}" placeholder="Total Quote"><br>
                        <select  class="form-control" name="currency" style="width:60px;">
                        <option value="AUD">AUD</option>
                        <option value="USD">USd</option>
                        <option value="GBP">GBP</option>
                        <option value="NZD">NZD</option>
                        <option value="CAD">CAD</option>
                        <option value="INR">INR</option>
                        </select>
                        </div>
                        <div class="container" style="width:100%;padding-bottom:20px;padding-top:10px;">
                          <button class="btn btn-danger" type="button" onclick="document.getElementById('{{$item->id}}').style.display='none'">Cancel</button>
                          <button type="submit" style="float:right;" class="btn btn-success">Give Quote</button>
                        </div>
                      </form>
                      </div>
                    </div>

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
