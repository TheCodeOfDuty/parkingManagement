<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sidebar</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    
    .sidenav{
      display: flex;
      flex-direction: column;
      background: #ecf0f3;
      height: 800px;
      width: 20%;
      border-radius: 40px;
      box-shadow: 13px 13px 20px #cdced1,
                  -13px -13px 20px #ffffff;
    }
    .sidenav a {
        padding: 8px 8px 8px 32px;
        text-decoration: none;
        font-size: 25px;
        color: #818181;
        transition: 0.3s;
      }
    .closebtn, .menu{
      display: none;
    }
  @media(max-width: 858px)
  { 
      body {
        font-family: "Lato", sans-serif;
      }
      .closebtn, .menu{
      display: block;
      }
      .sidenav {
        height: 100%;
        width: 0;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
        background: #ecf0f3;
        overflow-x: hidden;
        transition: 0.5s;
        padding-top: 60px;
      }

      .sidenav a {
        padding: 8px 8px 8px 32px;
        text-decoration: none;
        font-size: 25px;
        color: #818181;
        display: block;
        transition: 0.3s;
      }

      .sidenav a:hover {
        color: black;
      }

      .sidenav .closebtn {
        position: absolute;
        top: 0;
        right: 25px;
        font-size: 36px;
        margin-left: 50px;
      }
      .menu{
        float: left;
        background: #ecf0f3;
        border-radius: 20px;
        box-shadow: 13px 13px 25px #cdced1,
                  -13px -13px 25px #ffffff;
      }
      @media screen and (max-height: 450px) {
        .sidenav {padding-top: 15px;}
        .sidenav a {font-size: 18px;}
      }
}
  </style>
</head>
<body>

 
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#">About</a>
  <a href="#">Services</a>
  <a href="#">Clients</a>
  <a href="#">Contact</a>
</div>


<span class="menu" style="font-size:30px; cursor:pointer " onclick="openNav()">&#9776; </span>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>

</body>
</html>