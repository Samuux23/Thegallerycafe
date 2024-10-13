

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Box icons link -->
    <link
      rel="stylesheet"
      href="https://unpkg.com/boxicons@latest/css/boxicons.min.css"
    />

    <!-- Remix icon link -->
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css"
      rel="stylesheet"
    />

    <!-- Google fonts link -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Afacad:ital,wght@0,400..700;1,400..700&display=swap"
      rel="stylesheet"
    />
</head>
<body>
    <style>
 /* facilities */

.facilities{
    background-image: linear-gradient(rgb(28, 28, 28), black);
    color: white;
    text-align: center;
    justify-content: center;
    padding-left: 90px;
    padding-right: 90px;
    padding-top: 40px;
}

.facility-item{
    height:100px;
    width: 400px;
    background-color: rgb(73, 73, 73);
    border-radius: 10px;
    padding: 20px;
    margin: 20px;
    align-items: center;
    text-align: center;
    display: flex;
    flex-direction: row;
    
}

.facility-item i{
    font-size:x-large;
    padding-left: 40px;
    
}

.cont01{
    display: flex;
    flex-direction: column;
    padding-left: 40px;
    text-align: left;
}
.facility-wrapper01 {
    display: flex;
    flex-direction: row;
    align-items: center;
}

.facility-cont{
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 20px;
    
}
/* facilities */
    </style>

<div class="facility-cont">
  
  <div class="facility-item">
        <i class="fa-solid '.$iconClass.'"></i>
        <div class="cont01">
        <h3>parking</h3>
        <p>20 available</p>
        </div>
   </div>

   <div class="facility-item">
        <i class="fa-solid '.$iconClass.'"></i>
        <div class="cont01">
        <h3>parking</h3>
        <p>20 available</p>
        </div>
   </div>
   <div class="facility-item">
        <i class="fa-solid '.$iconClass.'"></i>
        <div class="cont01">
        <h3>parking</h3>
        <p>20 available</p>
        </div>
   </div>

</div>
</body>
</html>