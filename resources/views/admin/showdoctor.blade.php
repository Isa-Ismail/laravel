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
        <!-- partial:partials/_navbar.html -->
        @include('admin.navbar')
        {{-- @include('admin.body') --}}
        <div class="container-fluid page-body-wrapper">
        <div class="container-fluid page-body-wrapper p-10">
            <div>
                <table>
                    <tr style="background-color: black">
                        <th style="padding: 20px; color: white">Name</th>
                        <th style="padding: 20px; color: white">Contact</th>
                        <th style="padding: 20px; color: white">Speciality</th>
                        <th style="padding: 20px; color: white">Room</th>
                        <th style="padding: 20px; color: white">Update</th>
                        <th style="padding: 20px; color: white">Delete</th>
                    </tr>
                    @foreach($doctor as $doctor)
                    <tr style="background-color: white; color: black">
                        <td style="padding: 20px">{{$doctor->name}}</td>
                        <td style="padding: 20px">{{$doctor->phone}}</td>
                        <td style="padding: 20px">{{$doctor->speciality}}</td>
                        <td style="padding: 20px">{{$doctor->room}}</td>
                        <td style="padding: 20px"><a class="" style="background-color: blue;border-radius: .4rem; padding: .5rem" href="{{url('updatedoctor', $doctor->id)}}">Update</a></td>

                        <td style="padding: 20px"><a class="" style="background-color: red;border-radius: .4rem; padding: .5rem" href="{{url('deletedoctor', $doctor->id)}}">Delete</a></td>
                    </tr>
                    @endforeach
                </table>
             </div>
        </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
        @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>