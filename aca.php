<?php
$server="localhost";
$username="root";
$password="";
$database="code";
$sql="select * from a_code";
$conn = mysqli_connect($server, $username, $password, $database);
$res=$conn->query($sql);
if (!$res) {
      die("Connection failed: " . mysqli_connect_error());
}
?>
<?php
if (isset($_POST['searchcode']))
{
    $inputcode=$_POST['inputcode'];
    $query= "SELECT * FROM `a_code` WHERE CONCAT(`Code`, `Start`, `End`)LIKE '%".$inputcode."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `a_code`";
    $search_result = filterTable($query);
}

function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "code");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>    <script src="https://apis.google.com/js/platform.js" ></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


<style>
	option:hover {
			background-color: #FF8322 !important;
		}
	.bootbox-close-button {
			display: none !important;
		}
	.listStyle{
			margin-right: 3px;
		}
    #signup > div > div:nth-child(4) > div > div.open, #signupG > div.field-wrapper > div:nth-child(3) > div > div.open {
      max-width: 100%;
    }
.carousel{position:inherit;}/*for navbar list clickable in responsive mode*/
.header-bar {
  background-color: #fff;
  box-shadow: 0px 6px 12px 2px hsla(0, 0%, 0%, 0.04);
  color: #151515;
  left: 0;
  padding: 15px 0;
  position: fixed;
  right: 0;
  top: 0;
  z-index: 5;
}

.header-bar a { 
    text-decoration: none;
    color: #151515; }
.header-bar a:hover { text-decoration: none; }

.header-bar .logo {
  max-width: 140px;
  overflow: hidden;
  position: relative;
  width: 100%;
  padding-left: 15px;
}

.header-bar .quick-info {
  align-items: center;
  display: flex;
  line-height: normal;
  margin-left: 0px;
}

.header-bar .quick-info .img { margin: -1px 13px 0 35px; }

.header-bar .user-info {
  align-items: center;
  display: flex;
}

.header-bar .user-img {
  height: 40px;
  margin-right: 8px;
  overflow: hidden;
  position: relative;
  width: 40px;
}
.signout{
    padding-left: 200px;
    font-family: Arial, Helvetica, sans-serif;
}
.header-bar .dropdown-toggle {
  align-items: center;
  display: flex;
}

.header-bar .dropdown-item {
  font-size: 14px;
}

.header-bar .nav-toggle {
  cursor: pointer;
  display: none;
  font-weight: 400;
  height: 22px;
  margin-right: 15px;
  position: relative;
  width: 24px;
  z-index: 1;
}

.header-bar .hamburg::before,
.header-bar .hamburg::after {
  background-color: #ff6200;
  content: '';
  display: block;
  left: 0;
  position: absolute;
  height: 3px;
  width: 100%;
}

.header-bar .hamburg::before { top: -7px; }
.header-bar .hamburg::after { bottom: -7px; }

.header-bar .hamburg {
  background-color: #ff6200;
  display: block;
  font-size: 0;
  left: 0;
  height: 3px;
  position: absolute;
  right: 0;
  text-indent: -9999px;
  top: 9px;
  z-index: 9;
}

.header-bar .hamburg.active { background: transparent; }

.header-bar .hamburg.active::before {
  top: 0;
  transform: rotate(45deg);
}
.header-bar .hamburg.active::after {
  bottom: 0;
  transform: rotate(-45deg);
}
.data{
    width: 60%;
    display: block;
    margin-left: auto;
    margin-right: auto;
    padding-top: 5%;

}
.abx{
  display:flex;
  padding-top:5%;
  margin-left: auto;
  margin-right: auto;
  width:60%;
  justify-content:space-between

}

.slide-menu {
  background-color: #fff;
  height: 100%;
  left: -100%;
  max-width: 100%;
  overflow: hidden;
  overflow-y: auto;
  padding: 25px 15px;
  position: fixed;
  top: 0;
  width: calc(100% - 50px);
  z-index: 9;
}
.end1{
    width: 60%;
    display: block;
    margin-left: auto;
    margin-right: auto;
    
}
.slide-menu ul.nav li {
  border-bottom: 1px solid #e3e3e3;
  margin-bottom: 5px;
}

.slide-menu ul.nav li:last-child { border-bottom: 0 none; }

.slide-menu ul.nav li a {
  color: #151515;
  display: block;
  font-weight: 700;
  padding: 10px 0;
  transition: color 0.4s ease;
}

.slide-menu ul.nav li a:hover {
  color: #ff6200;
  text-decoration: none;
}

.slide-menu ul.nav li .span {
  display: inline-block;
  margin-right: 5px;
  text-align: center;
  width: 35px;
}

.slide-menu ul.nav li .span .img { display: inline-block; }

.menu-overlay {
  background-color: #000;
  display: none;
  height: 100%;
  opacity: 0.65;
  overflow: hidden;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  z-index: 8;
}

@media(max-width:991px) {
  .header-bar .nav-toggle { display: block; }
}

@media(min-width:992px) {
  .slide-menu { left: -100% !important; }
  .menu-overlay { display: none !important; }
}
.footer-bar {
  background-color: #343434;
  color: #cecece;
  padding: 40px 0;
}

.footer-bar .row-x-1 { margin-bottom: 40px; }

.footer-bar a { color: #cecece; }

.footer-bar .row-x-1 .fa {
  color: #ff6200;
  font-size: 20px;
  margin-right: 8px;
}

.footer-bar .social-media li {
  margin: 0 10px 10px 0;
}
.footer-bar .social-media li a {
  padding: 0;
}

.widget-title {
  font-size: 22px;
  font-weight: 700;
  margin-bottom: 15px;
}

.footer-bar .social-media li:last-child { margin-right: 0; }
.footer-bar .terms li { margin-right: 18px; }
.footer-bar .terms li:last-child { margin-right: 0; }

@media(max-width:768px) {
  .footer-bar { padding: 30px 0 20px; }
  .footer-bar .row-x-1 { margin-bottom: 25px; }

  .widget-title {
    font-size: 18px;
    margin-bottom: 10px;
  }

  .widget-content { font-size: 12px; }
}
.align-items-center {
    -ms-flex-align: center!important;
    align-items: center!important;
}
.justify-content-between {
    -ms-flex-pack: justify!important;
    justify-content: space-between!important;
}
.header-bar .container-fluid .row,#js-vm-footer .site-container .section .row,.footer-bar .container-fluid .row {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px;
    font-size:small;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}
.d-flex {
    display: -ms-flexbox!important;
    display: flex!important;
}
.col-auto {
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: auto;
    max-width: 100%;
}
#js-vm-footer .site-container .section {
    padding: 60px 0;
}
#js-vm-footer .site-container .section.section-menu {
    padding: 30px 0;
}
@media (min-width: 992px){
  .d-lg-flex {
      display: -ms-flexbox!important;
      display: flex!important;
  }
}
.nav>li>a:hover, .nav>li>a:focus {
    text-decoration: underline;
    background-color: unset;
}
.section-menu ul.nav{
	align-items: center;
    justify-content: flex-start;
    margin-left: 30px;
}
.section-menu ul.nav,.footer-bar .container-fluid .row .col-12 .nav, .site-info .col-md-6 .nav {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    padding-left: 0;
    margin-bottom: 0;
    list-style: none;
}
.section-menu ul.nav li {
    align-items: center;
    color: #151515;
    display: flex;
    font-weight: 700;
    margin-right: 30px;
}
.section-menu ul.nav li .img {
    margin-right: 12px;
}
.section-menu ul.nav li:last-child { margin-right: 0; }
.text-center {
    text-align: center!important;
}
.mb-3, .my-3 {
    margin-bottom: 1rem!important;
}
.mb-4, .my-4 {
    margin-bottom: 1.5rem!important;
}
@media (min-width: 768px) {
  .text-md-left {
      text-align: left!important;
  }
  .mb-md-0, .my-md-0 {
      margin-bottom: 0!important;
  }
}
.col-12 {
    -ms-flex: 0 0 100%;
    flex: 0 0 100%;
    max-width: 100%;
}
.mb-2, .my-2 {
    margin-bottom: .5rem!important;
}
@media (min-width: 768px){
  .col-md-auto {
      -ms-flex: 0 0 auto;
      flex: 0 0 auto;
      width: auto;
      max-width: 100%;
  }
  .text-md-right {
      text-align: right!important;
  }
}
@media (min-width: 768px) {
  .text-md-right {
      text-align: right!important;
  }
  .mb-md-0, .my-md-0 {
      margin-bottom: 0!important;
  }
  .order-md-2 {
      -ms-flex-order: 2;
      order: 2;
  }
  .col-md-6 {
      -ms-flex: 0 0 50%;
      flex: 0 0 50%;
      max-width: 50%;
  }
  .justify-content-md-end {
      -ms-flex-pack: end!important;
      justify-content: flex-end!important;
  }
}
.dropdown-toggle::after {
    display: inline-block;
    margin-left: .255em;
    vertical-align: .255em;
    content: "";
    border-top: .3em solid;
    border-right: .3em solid transparent;
    border-bottom: 0;
    border-left: .3em solid transparent;
}
.dropdown-item {
    display: block;
    width: 100%;
    padding: .25rem 1.5rem;
    clear: both;
    font-weight: 400;
    color: #212529;
    text-align: inherit;
    white-space: nowrap;
    background-color: transparent;
    border: 0;
}
#js-vm-footer > div > footer > div > div.row.justify-content-between.site-info > div.col-md-6.text-center.text-md-right.order-md-2.mb-2.mb-md-0 > ul > li > a{
  padding: unset;
}
#js-vm-header .container-fluid:before, #js-vm-header .container-fluid:after, #js-vm-header .row:before, #js-vm-header .row:after {
    content: none;
    display: table;
}
#js-vm-footer .container-fluid:before, #js-vm-footer .container-fluid:after, #js-vm-footer .row:before, #js-vm-footer .row:after {
    content: none;
    display: table;
}
.min-height {
  min-height: 350px;
}

#subjectDropdown > ul {
  left: unset;
}
.dropdown-submenu:hover >.dropdown-menu {
  display: block;
}
#subjectDropdown .dropdown-submenu {
    position:relative;
}
#subjectDropdown .dropdown-submenu>.dropdown-menu {
    top: 0;
    left: 100%;
    margin-top:-6px;
    max-height: 350px;
    overflow-y: scroll;
}
#subjectDropdown .dropdown-menu > li > a:hover:after {
    text-decoration: none;
    transform: rotate(-90deg);
}
.active-sub-menu {
  display: contents;
}
.menu-custom-scrollbar::-webkit-scrollbar {
  width: 10px;
}
.menu-custom-scrollbar::-webkit-scrollbar-track {
  background : #f1f1f1;
}
.menu-custom-scrollbar::-webkit-scrollbar-thumb {
  background : #FF8322;
}
.menu-custom-scrollbar::-webkit-scrollbar-thumb:hover {
  background: #cf6919;
}
</style>
<body >
<div class="row pt-50">
  <div class="col-lg-6">
    <div class="input-group">
      <div class="input-group-btn">
        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action <span class="caret"></span></button>
        <ul class="dropdown-menu">
          <li><a href="#">Action</a></li>
          <li><a href="#">Another action</a></li>
          <li><a href="#">Something else here</a></li>
          <li role="separator" class="divider"></li>
          <li><a href="#">Separated link</a></li>
        </ul>
      </div><!-- /btn-group -->
      <input type="text" class="form-control" aria-label="...">
    </div><!-- /input-group -->
  </div><!-- /.col-lg-6 -->


    <div class="site-container">
        <header class="header-bar setPadding">
            <div class="container-fluid" style="padding-right: 15px;padding-left: 15px;">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto align-items-center d-flex">
                    <div class="nav-toggle">
                     <span class="hamburg">Toggle Menu</span>
                    </div>
    
                    <div class="logo">
                        <a href="/"><img src="logo1.png" alt="goprac logo" height="40" width="100%"></a>
                    </div>
    
                    <div class="quick-info d-none d-lg-flex">
                        <div class="dropdown" id="subjectDropdown">
                            <a href="" class="dropdown-toggle" id="subjectDropdownMenu" data-toggle="dropdown"><strong class="strong"><i class="glyphicon glyphicon-th img" style="margin: -1px 13px 0 35px; color: #FF8322;"></i>CATEGORIES</strong></a>
                        </div>
                        <a href=""><img class="img" src="practice.png"> <strong class="strong">WHY PRACTICE</strong></a>
                        <a href=""><img class="img" src="how-it-works.png"> <strong class="strong">HOW WORKS</strong></a>
                        <a href=""><img class="img" src="expertpanel.png"> <strong class="strong">EXPERT PANEL</strong></a>
                        <a href=""><img class="img" src="about-us.png"> <strong class="strong">ABOUT US</strong></a>
                        <div class="signout" id="subjectDropdown">
                            <a href="" class="dropdown-toggle" id="subjectDropdownMenu" data-toggle="dropdown"><img class="img" src="user-avatar.png"><strong class="strong">Mohammad Azhar</strong></a> 
                        </div>
                    </div>
                </div>
            </div>
          </header>
    </div>
    
    
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add New Record</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="insertcode.php" method="POST">
          <div class="modal-body">
   <div class="form-group">
    <label for="code">Code</label>
    <input type="varchar" name="alcode" class="form-control" id="exampleInputcode1" aria-describedby="emailHelp" placeholder="Enter New Code">
  </div>
  <div class="form-group">
    <label for="start Date">Start Date</label>
    <input type="date"name="start" class="form-control" id="exampleInputPassword1" placeholder="Enter Start Date">
  </div>
  <div class="form-group">
    <label for="End Date">End Date</label>
    <input type="date" name="end" class="form-control" id="exampleInputPassword1" placeholder="Enter End Date">
  </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="insert" class="btn btn-dark">Save Data</button>
          </div>
        </form>
        </div>
      </div>
    </div>



<div class="data">
  <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModal">
    Add New Record
  </button>    <table class="table" id="mytable">
                <thead class="thead-dark">
                  <tr>
                   <th scope="col">Code<img class="img" src="sort.png" height=10 width=10> </th>
                    <th scope="col">Start Date <img class="img" src="sort.png" height=10 width=10></th>
                    <th scope="col">End Date <img class="img" src="sort.png" height=10 width=10></th>
                  </tr>
                </thead>
        <?php
            while($row=$res->fetch_object())
            {
        ?>
	        <tr>
		        <td><?php echo $row->alcode;?></td>
		        <td><?php echo $row->start;?></td>
		        <td><?php echo $row->end;?></td>
	        <?php
	         }   
        ?>
    </table>
</div>
 
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
<script>
  $(document).ready(function() {
    $('#mytable').DataTable();
} );
</script>

</body>
</html>