

<?php
// include("./includes/header.php");  
?>
<nav class="navbar navbar-expand-lg px-5">
  <div class="container-fluid">
  <?php
          if(isset($_SESSION['is_admin'])==true){ ?>
    <a class="navbar-brand text-white" href="./index.php">Expense</a><?php
          }
          else{
           ?> <a class="navbar-brand text-white" href="./user_page.php">Expense</a><?php
          }?>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <?php
          if(isset($_SESSION['is_admin'])==true){?>
          <a class="nav-link active text-white" aria-current="page" href="./index.php">Dashboard</a><?php
          }
          else{
            ?><a class="nav-link active text-white" aria-current="page" href="./user_page.php">Dashboard</a><?php
          }?>
        </li>
        <li class="nav-item dropdown">
          <?php if(isset($_SESSION['is_admin'])==true){ ?>
          <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Users
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item text-black" href="./register_user.php">Add User</a></li>
            <li><a class="dropdown-item text-black" href="./display_register_users.php">All Users</a></li>
          </ul><?php
          }
          else{

          }
          ?>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Expenses
          </a>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item text-black" href="./add_expense.php">Add Expense</a></li>
            <li><a class="dropdown-item text-black" href="./total_expense.php">All Expense</a></li>
            <li><a class="dropdown-item text-black" href="./search_expense.php">Search Expense</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Income
          </a>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item text-black" href="./add_income.php">Add Income</a></li>
            <li><a class="dropdown-item text-black" href="./income.php">All Income</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Budget
          </a>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item text-black" href="./set_budget.php">Add Budget</a></li>
            <li><a class="dropdown-item text-black" href="./report.php">Show Report</a></li>
          </ul>
        </li>
      </ul>
      <div>
      <div class="dropdown">
            <button id="x" class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="bi bi-person-bounding-box me-2"></i> <span><?php echo ucfirst($_SESSION['name'])?></span>
            </button>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item text-black" href="./logout.php">Logout</a></li>
            <li><a class="dropdown-item text-black" target="_blank" href="./update_user_pass.php?update_id=<?php echo $_SESSION['id'] ?>">Set new password</a></li>
        </ul>
        </div>
      </div>
    </div>
  </div>
</nav>