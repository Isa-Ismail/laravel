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
        <div class="container-fluid page-body-wrapper p-10">
            <div align="center" style="padding: 70px">
                <table>
                    <tr style="background-color: black">
                        <th style="padding: 20px; color: white">Patient Name</th>
                        <th style="padding: 20px; color: white">Doctor Name</th>
                        <th style="padding: 20px; color: white">Contact</th>
                        <th style="padding: 20px; color: white">Date</th>
                        <th style="padding: 20px; color: white">Message</th>
                        <th style="padding: 20px; color: white">Status</th>
                        <th style="padding: 20px; color: white">Approve</th>
                        <th style="padding: 20px; color: white">Cancel</th>
                    </tr>
                    @foreach($appointments as $appoints)
                    <tr style="background-color: white; color: black">
                        <td style="padding: 20px">{{$appoints->name}}</td>
                        <td style="padding: 20px">{{$appoints->doctor}}</td>
                        <td style="padding: 20px">{{$appoints->phone}}</td>
                        <td style="padding: 20px">{{$appoints->date}}</td>
                        <td style="padding: 20px">{{$appoints->message}}</td>
                        <td style="padding: 20px">{{$appoints->status}}</td>
                        <td style="padding: 20px"><a class="" style="background-color: green; border-radius: .4rem; padding: .5rem" href="{{url('approved', $appoints->id)}}">Approve</a></td>
                        <td style="padding: 20px"><a class="" style="background-color: red;border-radius: .4rem; padding: .5rem" href="{{url('disapp', $appoints->id)}}">Cancel</a></td>
                    </tr>
                    @endforeach
                </table>
             </div>
        </div>
        {{-- @include('admin.body') --}}
    <!-- container-scroller -->
    <!-- plugins:js -->
        @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>