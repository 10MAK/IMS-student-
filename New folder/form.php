<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- coustom css -->
<link rel="stylesheet" type="text/css" href="style.css">
<!-- css animation -->
<link  rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- icon -->
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <title>IMS SC </title>
  </head>
  <body>

<div class="container-fluid main_div_form">
  <div class="row form_row py-2 ">
    <div class="col-sm-12">
      
      <div class="d-flex justify-content-around align-items-center">
     <img src="./Assests/images/ims.png" width="10%" class="img-fluid d-md-inline-block d-none ">
     <div class="text-white mx-auto text-center">
       <h1>Welcome To IMSciences Students Council  </h1>
       <h1>Office Of The Joint Director</h1>
       <h1>Institute of Management Sciences Peshawar</h1>
    </div>
        
     </div>
    

   </div>
  </div>
  <!-- form section -->
   <div class="container">
     <div class="row">
       <div class=" col-sm-8 col-11 mx-auto  text-center">

         <form action="form-process.php" method="post" class="mt-5">
           


            <div class="input-group mb-4">
              <span class="input-group-text" id="inputGroup-sizing-default">Name</span>
              <input type="text" class="form-control" name="name" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-4">
              <span class="input-group-text" id="inputGroup-sizing-default">Father Name</span>
              <input type="text" class="form-control" name="f_name" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-4">
              <span class="input-group-text" id="inputGroup-sizing-default">Email</span>
              <input type="email" class="form-control" name="email" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-4">
              <span class="input-group-text" id="inputGroup-sizing-default">Department</span>
              <input type="text" class="form-control" name="dprt" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>


            <div class="input-group mb-4">
              <label class="input-group-text" for="inputGroupSelect01">Semester</label>
              <select class="form-select" id="inputGroupSelect01" name="sem">
                <option selected>Choose Semester</option>
                <option value="1">First</option>
                <option value="2">Second</option>
                <option value="3">third</option>
                <option value="4">Fourth</option>
                <option value="5">Fifth</option>
                <option value="6">Sixth</option>
                <option value="7">Seventh</option>
                <option value="8">Eighth</option>
                <option value="9">Ninth</option>
                <option value="10">Tenth</option>
              </select>
            </div>
            <div class="input-group mb-4">
              <span class="input-group-text" id="inputGroup-sizing-default">Contact No</span>
              <input type="text" class="form-control" name="c_no" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="input-group mb-4">
              <label class="input-group-text" for="inputGroupSelect01">Societies</label>
              <select class="form-select" id="inputGroupSelect01" name="soc">
                <option selected>Choose  Society</option>
                <option value="Debating">IMS Debating Society</option>
                <option value="Hiking">IMS Hiking Society</option>
                <option value="Dramatic">Ims Dramatic Society</option>
                <option value="Music">IMS Music Society</option>
                <option value="Naat & Qirat">IMS Naat & Qirat Society</option>
                <option value="Media">IMS Media Society</option>
                <option value="Blood Donation">IMS Blood Donation Society</option>
                <option value="Character Building">IMS Character Building Society</option>
                <option value="Entrepreneurial">IMS Entrepreneurial Society</option>
                <option value="Think Ink-Study">IMS Think Ink-Study  Society</option>
                <option value="Fine Art">IMS Fine Art  Society</option>
                <option value="Social">IMS Social Welfare Society</option>
                <option value="Enviromental">IMS Enviromental Society</option>
                <option value="Sports">IMS Sports Society</option>
                <option value="Drug Abuse">IMS Drug Abuse Society</option>
                <option value="Women Empowerment">IMS Women Empowerment Society</option>
                <option value="Peace Building & Conflict Resolution">IMS Peace Building & Conflict Resolution Society</option>
              </select>
            </div>
            <div class="input-group mb-4">
              <label class="input-group-text" for="inputGroupSelect01">Designations</label>
              <select class="form-select" id="inputGroupSelect01" name="des">
                <option selected>Choose Designation </option>
                <option value="President">President</option>
                <option value="Vice President">Vice President</option>
                <option value="General Secretary">General Secretary</option>
                <option value="Coordinator">Coordinator</option>
                <option value="Membership">Membership</option>
              </select>
            </div>

                <button type="submit" class="btn  mb-5 px-4" id="btncss">Submit <i class="fas fa-share-square"></i></button>
          </form>
                      

                   </div>
                 </div>

              </div>
              <div class="row footer_row">
                <footer>   Designed By Asad </footer> 
               
                
              </div>
            </div>





  

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    
  </body>
</html>