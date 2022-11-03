<x-app-layout>
    
</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">

      @include('admin.sidebar')

      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        @if(session()->has('message'))
      </div class="alert alert-success">
      <button type="button" class="close" data-dismiss="alert">
        x
      </button>
      {{session()->get('message')}}
      </div>
        @endif
        <!-- partial:partials/_navbar.html -->
        @include('admin.navbar')
    <!-- container-scroller -->
    <div class="container-fluid page-body-wrapper p-10">
        <div class="container space-y-10">
            <h1>Add Doctors</h1>
            <form class="flex flex-col space-y-4" action="{{url('upload_doctor')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <label>Doctor name</label><input required type="text" name="name" style="color: black" placeholder="Name">
                <label>Phone</label><input required type="number" name="number" style="color: black" placeholder="Phone">
                <label>Speciality</label>
                <select required name="speciality" style="color: black">
                    <option value="skin">Skin</option>
                    <option value="heart">Heart</option>
                    <option value="eye">Eye</option>
                    <option value="nose">Nose</option>
                </select>
                <label>Room no</label><input required type="text" name="room" style="color: black" placeholder="Room no.">
                <input type="submit" class="btn btn-success w-[10rem] p-3">
            </form>
        </div>
    </div>
    <!-- plugins:js -->
        @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>