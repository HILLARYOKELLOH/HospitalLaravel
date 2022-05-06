
<!DOCTYPE html>
<html lang="en">
  <head>
    
    
@include('admin.css')
  </head>
  <body>
    <div class="container.scroller">
      
      @include('admin.sidebar')
    
      @include('admin.navbar')
      <div class="container-fluid page-body-wrapper">

        
          
            <div align="center"style="padding-top:100px;">

              <table>
            
                  <tr align="center" style="background-color: black;">
<th style="padding:10px">CUSTOMER NAME</th>
<th style="padding:20px">E-MAIL</th>
<th style="padding:20px">PHONE no:</th>
<th sttyle="padding:20px">DOCTOR</th>
<th style="padding:20px">DATE</th>
<th style="padding:20px">MESSAGE</th>
<th style="padding:20px">STATUS</th>
<th style="padding:20px">APPROVED</th>
<th style="padding:20px">CANCELLED</th>


                  </tr>
                  @foreach($data as $appoint)
                  <tr align="center" style="background-color:skyblue;">
                    <td style="padding:10px; color:white;">{{$appoint->name}}<td>
                        <td style="padding:10px; color:white;">{{$appoint->Email}}<td>
                            <td style="padding:10px; color:white;">{{$appoint->phone}}</td>
                                <td style="padding:10px; color:white;">{{$appoint->date}}</td>
                                    <td style="padding:10px; color:white;">{{$appoint->message}}</td>
                                        <td style="padding:10px; color:white;">{{$appoint->status}}</td>
                                        <td>


                                          <a class="btn btn-success"href="{{url('approved',$appoint->id)}}">Approved</a></td>
                                          <td>
                                          <a class="btn btn-danger"href="{{url('cancel',$appoint->id)}}">Cancel</a>   </td>         
                    </tr>
                    
                    @endforeach
              </table>
            </div>

    </div>
     
      
        <!-- partial -->
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
  </body>
</html>
