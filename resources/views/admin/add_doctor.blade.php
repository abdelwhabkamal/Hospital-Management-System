<!DOCTYPE html>
<html lang="en">
    <head>
        <style type="text/css">
            label{
                display:inline-block;
                width:200px;
            }
        </style>
@include('admin.css')
</head>
<body>
    
<div class="container-fluid page-body-wrapper">

@include('admin.sidebar')
@include('admin.nav')
<div class="container-fluid page-body-wrapper">

    <div class="container" align="center" style="padding-top: 100px;">
    @if(session()->has('message'))
<div class="alert alert-success">
<button type="button"class="close"data-dismiss="alert">x</button>

{{session()->get('message')}}
</div>


@endif
        <form action="{{url('upload_doctor')}}" method="post"enctype="multipart/form-data">
            @csrf

        <div style="padding:15px;">
                <label for="">Doctor Name</label>
                <input type="text" name="name" style="color:black" placeholder="Write the name" required="">
            </div>
           <div style="padding:15px;">
                <label for="">Phone </label>
                <input type="number" name="phone" style="color:black" placeholder="Write the phone number" required="">
            </div>
            <div style="padding:15px;">
                <label for="">Speciality</label>
                    <select name="speciality" id="" style="color:black; width:200px;" required="">
                    <option value="">--Select--</option>
                        <option value="skin">Skin</option>
                        <option value="heart">Heart</option>
                        <option value="eye">Eye</option>
                        <option value="nose">Nose</option>
                        <option value="nose">Dentist</option>
                    </select>
            </div>
            <div style="padding:15px;">
                <label for="">Room No</label>
                <input type="number" name="room" style="color:black" placeholder="Write the room number" required="">
            </div>    
                <div style="padding:15px;">
                <label for="">Doctor Image</label>
                <input type="file" name="file" required="">
            </div>
            <div style="padding:15px;">
                <input type="submit" name="submit" class="btn btn-success" >
            </div>
        </form>
    </div>
</div>
@include('admin.script')
</body>
</html>