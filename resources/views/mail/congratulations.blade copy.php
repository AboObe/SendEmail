<!DOCTYPE html>
<html lang="ar">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
	<style>
	
	
	
	@import url(http://fonts.googleapis.com/earlyaccess/droidarabickufi.css);
.row{
    background-color: #FCFDFD;
    width: 100%;
    min-height: 100vh;
}
 
p{
    text-align: center;
    font-family: Tahoma, Geneva, sans-serif;
    direction: rtl;
}
.title{
    font-weight: bold;
    font-size: 28px;
    color: rgb(56, 48, 36);
    padding: 0px;   
}
.content{
    font-size: 23px;
    color: rgb(77, 64, 44);
    margin: 1.5rem 0;
    padding: 0 1rem;
}

@media screen and (max-width:768px) {
    .header img, .footer img {
        width: 100%;
        object-fit: cover !important;
    }
    
    .title{
        font-size: 20px;
    }
    .content{
        font-size: 17px;
    }
    body{
    overflow: hidden;
    }
}


@media screen and (max-width:390px) {
    .title{
        font-size: 11px !important;
    }
    .content{
        font-size: 8px !important;
    }
    
}

body{
    width: 100vw;
    padding: 0;
    margin: 0;
    position: relative;
    overflow: auto;
    overflow-x: hidden;
	font-family: TheSans;
  background-color: #FCFDFD;
}
.container{
display: flex;
flex-direction: column;
width: 100%;
position: relative;
padding: 0 0 0;
background-color: #FCFDFD;
}
img{
width: 100%;
object-fit: cover;
max-height: 100%;
transform: scale(0.5);
}
.footer-img{
margin-top: auto;
}
	
	
	
	</style>
  </head>
  <body>
    <div class="container">
      <img src="https://www.szgmc.gov.ae/Ftp/6FB33AE2-37C6-41BD-BA59-CB8AA9556EDD.png" />
      <div class="content">
        <!-- <h3>TitleTitle Title Title Title Title</h3> -->
        <p class="title">
          السيد/ة : {{$name}}
      </p>
      <p class="content">
        يسرنا أن نهنئكم بإكمال عام جديد في العمل والعطاء بمركز جامع الشيخ زايد الكبير ونتمنى لكم مزيد من التقدم والنجاح لما فيه عون في خدمة الوطن.
    </p>
      </div>
      <img src="https://www.szgmc.gov.ae/Ftp/0A684DA8-D8E1-4250-9907-CB426E127669.png" />
    </div>
  </body>
</html>
