
     <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
       <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
         <h1 class="h2">Dashboard</h1>
         <div class="btn-toolbar mb-2 mb-md-0">
           <div class="btn-group mr-2">
             <button class="btn btn-sm btn-outline-secondary">Share</button>
             <button class="btn btn-sm btn-outline-secondary">Export</button>
           </div>
           <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
             <span data-feather="calendar"></span>
             This week
           </button>
         </div>
       </div>
       <canvas class="my-4" id="myChart" width="900" height="380"></canvas>

       <h2>Customers</h2>
       <div class="table-responsive">
         <table class="table table-striped table-sm">
           <thead>
             <tr>
               <th>#</th>
               <th>Name</th>
               <th>Email</th>
               <th>Address</th>
               <th>City</th>
               <th>State</th>
               <th>Zip</th>
             </tr>
           </thead>
           <tbody>
             <?php
             foreach ($fullVisitors as $key) {
               $id = $key['id'];
               $name = $key['fName'] . " " . $key['lName'];
               $email = $key['email'];
               $address = $key['address'];
               $city = $key['city'];
               $state = $key['state'];
               $zip = $key['zip'];

               echo "<tr>" .
               "<td>" . $id . "</td>" .
               "<td>" . $name . "</td>" .
               "<td>" . $email . "</td>" .
               "<td>" . $address . "</td>" .
               "<td>" . $city . "</td>" .
               "<td>" . $state . "</td>" .
               "<td>" . $zip . "</td>" .
              "</td>";
             }
              ?>
           </tbody>
         </table>
       </div>
     </main>
