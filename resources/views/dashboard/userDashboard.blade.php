
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
</head>

<style>
#hov :hover{
color: crimson;
}
</style>

<body>
   
<div class="text-center bg-danger text-white p-5">
            <h1>Hotel Reservation Form</h1>
        </div>
    <form action="{{ url('/create/user') }}" method="POST">
       @csrf
        <div class="card mt-2 m-5">
            <div class="card-header bg-danger">
            <h5 class=" text-white">Reservation Details</h5>
            </div>
        <div class="row m-4 ">
          

            
            <div class="col-md-6">

            <div  id="hov" class="form-group mb-3">
            <label> First Name</label>
            <input type="text" name='first_name' class="form-control"  required>
            </div>
            <div id="hov" class="form-group mb-3">
            <label> Address</label>
            <textarea name='address' class="form-control" rows="1" required></textarea>
            </div>
            <div id="hov" class="form-group mb-3">
            <label> City</label>
            <input type="text" name='city' class="form-control" required>
            </div>
            <div id="hov" class="form-group mb-3">
            <label> Email</label>
            <input type="email" name='email' class="form-control" required>
            </div>

            </div>



            <div class="col-md-6">

            <div id="hov" class="form-group mb-3 ">
            <label> Last Name</label>
            <input type="text" name='last_name' class="form-control" >
            </div>
            <div id="hov" class="form-group mb-3">
            <label> Zip Code</label>
            <input type="number" name='zip_code' class="form-control" required>
            </div>
            <div id="hov" class="form-group mb-3">
            <label> State </label>
            <input type="text" name='state' class="form-control" required>
            </div>
            <div id="hov" class="form-group mb-3">
            <label> Phone</label>
            <input type="text" name='phone' class="form-control" required>
            </div>
            </div>
           
        </div>
        </div>
       
        <div class="card mt-5 m-5">
        <div class="card-header bg-danger">
            <h5 class=" text-white">Dates</h5>
            </div>
            <div class="row m-4">
            <div class="col-md-6">
                <div  id="hov" class="form-group mb-5">
                    <label >Check-in Date</label> </br>
                    <input class="form-control" type="date" name="check_in_date" required>
            </div>
            <div  id="hov" class="form-group mb-5">
                    <label class="mb-3">Check-in Time</label> </br>
                    <select name="check_in_time">
                            <option value="" disabled selected>Select time</option>
                            <option value="Morning">Morning</option>
                            <option value="Afternoon">Afternoon</option>
                            <option value="Evening">Evening</option>
                           
                        </select>
            </div>
            <div  id="hov" class="form-group mb-5">
            <label class="mb-3">How many adults are coming?</label> <br>
            <select name="adult_number">
                            <option value="" disabled selected>Number of adults</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                           
                        </select>
            </div>
            </div>


            <div class="col-md-6">
            <div  id="hov" class="form-group mb-5">
                    <label >Check-out Date</label> </br>
                    <input class="form-control" type="date" name="check_out_date" required>
            </div>
            <div  id="hov" class="form-group mb-5">
                    <label class="mb-3">Check-out Time</label> </br>
                    <select name="check_out_time">
                            <option value="" disabled selected>Select time</option>
                            <option value="Morning">Morning</option>
                            <option value="Afternoon">Afternoon</option>
                            <option value="Evening">Evening</option>
                           
                       </select>
            </div>
            <div  id="hov" class="form-group mb-5">
            <label class="mb-3">How many children are coming?</label> <br>
            <select name="children_number">
                            <option value="" disabled selected>Number of children</option>
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                           
                        </select>
            </div>
            </div>
        </div>
        
        <div class="row  m-4">
            <div class="col-md-12">
                <div class="form-group">
                    <label class="mb-3">Number of rooms</label> </br>
                    <input   class="form-control" type="text" name="room">
                </div>
            </div>
        </div>
    
        <div class="row m-4">
        <div class="col-md-6">
            <div  id="hov" class="form-group mb-3">
                    <label class="mb-3">Room 1 type</label> </br>
                    <select name="room_1">
                            <option value="" disabled selected> </option>
                            <option value="Standard">Standard</option>
                            <option value="Delux">Delux</option>
                            <option value="Suite">Suite</option>
                           
                       </select>
            </div>
            </div>
            <div class="col-md-6">
            <div  id="hov" class="form-group mb-3">
                    <label class="mb-3">Room 2 type</label> </br>
                    <select name="room_2">
                            <option value="" disabled selected> </option>
                            <option value="Standard">Standard</option>
                            <option value="Delux">Delux</option>
                            <option value="Suite">Suite</option>
                           
                       </select>
            </div>
            </div>
        </div>

        <div class="row  m-4">
            <div class="col-md-12">
                <div class="form-group">
                    <label class="mb-3">Special Instructions</label> </br>
                    <textarea   class="form-control" rows="3"  name="instructions"></textarea>
                </div>
            </div>
        </div>

        </div>
        <div class="text-center d-grid gap-2 col-2 mx-auto mb-5">
    <button  class="btn btn-danger btn-lg">Submit</button>
    </div>
    </form>

    

</body>
</html>