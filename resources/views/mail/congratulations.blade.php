<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
      /* Reset some default styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body{
    width: 60%; 
    margin: 0 auto;
}
/* Style the container */
.container {
    display: flex;
    flex-direction: column; /* Stack items vertically by default */
    align-items: center; /* Center content horizontally */
    text-align: center; /* Center text content */
}

/* Style the photos */
.photos {
    display: flex;
    flex-direction: column; /* Stack photos vertically by default */
    align-items: center; /* Center photos horizontally */
}

.photo {
    max-width: 100%;
    height: auto;
    margin-bottom: 20px; /* Add spacing between photos */
}

/* Style the text */
.text {
    max-width: 100%;
    padding: 20px; /* Add some padding to the text */
}

/* Media query for responsiveness */
@media screen and (min-width: 768px) {
    .container {
        flex-direction: row; /* Arrange items horizontally on larger screens */
        justify-content: space-around; /* Distribute items evenly */
       
    }

    .photos {
        flex-direction: row; /* Arrange photos horizontally on larger screens */
        justify-content: space-around; /* Distribute photos evenly */
    }

    .photo {
        max-width: 45%; /* Adjust the width of photos on larger screens */
        margin-bottom: 0; /* Remove spacing between photos on larger screens */
    }

    .text {
        flex: 1; /* Expand to fill available space between photos */
        padding: 20px; /* Adjust padding on larger screens */
        text-align: left; /* Align text left on larger screens */
    }
}

    </style>
    <title>Vertical Responsive Design</title>
</head>
<body >
    <div class="container">
        <div class="photo left-photo">
            <!-- Your left photo content goes here -->
            <img src="https://www.szgmc.gov.ae/Ftp/6FB33AE2-37C6-41BD-BA59-CB8AA9556EDD.png" />
        </div>
        <div class="text" style=" font-family:TheSans;">
            
            <!-- Your text content goes here -->
         <b style="font-size: 30px;">   السيد/ة : {{$name}} </b>
      </p>
      <p style="font-size: 22px;">
      يسرنا أن نهنئكم بإكمال عام جديد في العمل والعطاء بمركز جامع الشيخ زايد الكبير
      </p>
      <p style="font-size: 22px;">
      ونتمنى لكم مزيد من التقدم والنجاح لما فيه عون في خدمة الوطن
    </p>
        </div>
        <div class="photo right-photo">
            <!-- Your right photo content goes here -->
            <img src="https://www.szgmc.gov.ae/Ftp/0A684DA8-D8E1-4250-9907-CB426E127669.png" />
        </div>
    </div>
</body>
</html>
