<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
 integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
  crossorigin="anonymous">
  <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
 integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Hotel Reservation Form </title>
    <title>Document</title>
</head>
<body>
<div class="text-center bg-dark text-white p-5">
            <h1>Hotel Reservation List</h1>
        </div> 

    
  


    <div class="row row-cols-1 row-cols-md-4 g-3 mt-2 justify-content mb-5 " >
    @foreach($reservation as $res)
    <div class="col-md-4">
                        <div class="card ">
                        <div class="card-header bg-dark text-white">
                          <h5>  Reservation List </h5>
                        </div>
                        <div class="card-body">
                        <h6>   <label>First Name</label> ___   {{ $res -> first_name }} </h6>
                        <h6>   <label>Last Name</label> ___   {{ $res -> last_name }} </h6>
                        <h6>   <label>Address</label> ___   {{ $res -> address }} </h6>
                        <h6>   <label>Zip Code</label> ___   {{ $res -> zip_code }} </h6>
                        <h6>   <label>City</label> ___   {{ $res -> city }} </h6>
                        <h6>   <label>State</label> ___   {{ $res -> state }} </h6>
                        <h6>   <label>Email</label> ___   {{ $res -> email }} </h6>
                        <h6>   <label>Phone</label> ___   {{ $res -> phone }} </h6>
                        <h6>   <label>Check-in Date</label> ___   {{ $res -> check_out_date}} </h6>
                        <h6>   <label>Check-out Date</label> ___   {{ $res -> check_out_date }} </h6>
                        <h6>   <label>Check-in Time</label> ___   {{ $res -> check_in_time }} </h6>
                        <h6>   <label>Check-out Time</label> ___   {{ $res -> check_out_time }} </h6>
                        <h6>   <label>Numbers of Adults</label> ___   {{ $res -> adult_number }} </h6>
                        <h6>   <label>Numbers of Childern</label> ___   {{ $res -> children_number }} </h6>
                        <h6>   <label>Number of Room</label> ___   {{ $res -> room }} </h6>
                        <h6>   <label>Room 1 Type</label> ___   {{ $res -> room_1 }} </h6>
                        <h6>   <label>Room 2 Type</label> ___   {{ $res -> room_2 }} </h6>
                        <h6>   <label>Special Instructions</label> ___   {{ $res -> instructions }} </h6>
                        </div>
                        <div class="card-footer">
                        @if(Auth::user()->roles[0]->name == "Super Admin")
                        <div class="row m-3">
                             <div class="col-md-6">
                                 <a href="{{url('admin/'.$res->id.'/edit')}}">
                            <button class="btn btn-dark">Edit</button>
                            </a>
                         </div>
                    
                             <div class="col-md-6">
                             <form action="{{ url('admin/'.$res->id) }}" method="POST">
                                @method('DELETE')
                                @csrf
                               
                                    <button  class="btn btn-secondary btn-sm" onclick="return confirm('Are you sure you want to delete?')">Delete</button>
                                
                            </form>
                           
                        </div>
                        </div>
    
                         @endif

                         @if(Auth::user()->roles[0]->name == "Hotel Manager")
       
                         <div >
                           <a href="{{url('admin/'.$res->id.'/edit')}}">
                            <button class="btn btn-dark">Edit</button>
                            </a>
                      
                        </div>
                        
                @endif  
                        </div>
                        </div>
    </div>
    @endforeach
    </div>
    <div class="m-5">
    <a href="{{url('export')}}" >
        <button class="btn btn-dark"> Excel Download</button>
    </a>
        </div>
    
</body>
</html>