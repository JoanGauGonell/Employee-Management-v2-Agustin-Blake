<!-- TODO Main view or Employees Grid View here is where you get when logged here there's the grid of employees -->
<?php 
  require '../assets/html/header.html'; 
?>


<section id="dashboardEmployees" class="dashboard__employees d-flex justify-content-center align-items-center m-auto">
  <table id="employeesTable" class="employees__table col-10">
    <thead id="employeesHeader">
      <tr id="employeesHeaderRow" class="employees__header-row">
        <th class="col-2">Name:</th>
        <th class="col-2">Email:</th>
        <th class="col-1">Age:</th>
        <th class="col-1">Street No.:</th>
        <th class="col-2">City:</th>
        <th class="col-1">State:</th>
        <th class="col-2">Phone No:</th>
        <th class="col-1">Post Code:</th>
        <th class="col-1">          
            <label for="addEmployeeBtn"></label>
            <button type="button" class="dash__btn mt-3 btn" id="addEmployeeBtn" name="addEmployee"><i class="fa-solid fa-user-plus"></i></button>
        </th>
      </tr>
    </thead>
    <tbody id="employeesTableBody" class="employees_table-body">
      
    </tbody>
    
  </table>
</section>


<?php
  require '../assets/html/footer.html';

?>