<x-app-layout>
    
</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
      <base href="/public">
    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
          <div class="container">
          <form class="flex flex-col space-y-4" action="{{url('editdoctor', $doctor->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <label>Doctor name</label><input required type="text" name="name" value="{{$doctor->name}}" style="color: black">
                <label>Phone</label><input required type="number" value="{{$doctor->phone}}" name="number" style="color: black">
                <label>Speciality</label>
                <select value="{{$doctor->speciality}}" required name="speciality" style="color: black">
                    <option value="skin">Skin</option>
                    <option value="heart">Heart</option>
                    <option value="eye">Eye</option>
                    <option value="nose">Nose</option>
                </select>
                <label>Room no</label><input required type="text" name="room" value="{{$doctor->room}}" style="color: black">
                <input type="submit" class="btn btn-success w-[10rem] p-3">
            </form>
          </div>
      </div>
        <!-- partial:partials/_navbar.html -->
    <!-- container-scroller -->
    <!-- plugins:js -->
        @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>