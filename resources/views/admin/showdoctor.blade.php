
<!DOCTYPE html>
<html lang="en">
  <head>
      @include('admin.css')
    </head>
  <body>
    <div class="container-scroller">

      <!-- partial:partials/_sidebar.html -->
@include('admin.sidebar')
      <!-- partial -->
@include('admin.nav')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
        <div align="center" style="padding:100px;">
        <table>
                <tr >
                    <th style="background-color:black; padding: 10px;">Doctor Name</th>
                    <th style="background-color:black; padding: 10px;">Phone</th>
                    <th style="background-color:black; padding: 10px;">Speciality</th>
                    <th style="background-color:black; padding: 10px;">Room no</th>
                    <th style="background-color:black; padding: 10px;">Image</th>
                    <th style="background-color:black; padding: 10px;">Delete</th>
                    <th style="background-color:black; padding: 10px;">Update</th>

                </tr>
     @foreach($data as $doctors)
                
                <tr align="center" style="background-color:purple;">      
                <td>{{$doctors->name}}</td>
                <td>{{$doctors->phone}}</td>
                <td>{{$doctors->speciality}}</td>
                <td>{{$doctors->room}}</td>
                <td><img height="120" width="120" src="doctorimage/{{$doctors->image}}" alt=""></td>
               
                <td><a onclick="return confirm ('are you sure to delete {{$doctors->name}} data')" class="btn btn-danger" href="{{url('deletedoctor',$doctors->id)}}">Delete</a></td>
                <td><a class="btn btn-primary" href="{{url('updatedoctor',$doctors->id)}}">Update</a></td>
               
            </tr>
@endforeach
            </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
@include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>