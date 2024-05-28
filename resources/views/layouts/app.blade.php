<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OurCanvas</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://www.citygroup.com.bd/frontend/css/meanmenu.min.css">
    <link rel="stylesheet" href="https://www.citygroup.com.bd/frontend/style.css">
    <!-- ====Bootstrap css==== -->
    <link rel="stylesheet" href="https://www.citygroup.com.bd/frontend/css/bootstrap.min.css">

    
    <link rel="stylesheet" href="./CityGroup_files/font-family.css">

 <!-- ====Google font Open Sans==== -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://www.citygroup.com.bd/frontend/css/font-family.css">

    <!-- ====Bootstrap css==== -->
    <link rel="stylesheet" href="https://www.citygroup.com.bd/frontend/css/bootstrap.min.css">

    <!-- ====Font awesome css==== -->
    <!-- <link href="/your-path-to-fontawesome/css/fontawesome.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://www.citygroup.com.bd/frontend/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->

    <!-- ====Animate css==== -->
    <link rel="stylesheet" href="https://www.citygroup.com.bd/frontend/css/animate.css">

    <!-- ====Owl carousel 2 css==== -->
    <link rel="stylesheet" href="https://www.citygroup.com.bd/frontend/css/owl.carousel.css">

    <!-- ====Mean Menu / Mobile Menu css==== -->
    <link rel="stylesheet" href="https://www.citygroup.com.bd/frontend/css/meanmenu.min.css">

    <!-- ====Custom css==== -->
    <link rel="stylesheet" href="https://www.citygroup.com.bd/frontend/style.css">
    <!-- Toast message -->
    <link rel="stylesheet" href="https://www.citygroup.com.bd/backend/dist/css/jquery.toast.css">
    <!--All CSS Style Link End-->
    <!-- FAVICONS -->
    <link rel="icon" href="images/logo.png" type="image/png" sizes="16x16">
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
    <link rel="shortcut icon" href="images/logo.png">

    <link rel="icon" type="image/png" href="images/favicon.jpg" >
    <link rel="stylesheet" href="css/font-awesome.css" >
    <link rel="stylesheet" href="css/bootstraps.min.css" >
    <link rel="stylesheet" href="css/slick.css" >
    <link rel="stylesheet" href="css/magnific-popup.css" >
    <link rel="stylesheet" href="css/nice-select.css" >
    <link rel="stylesheet" href="css/spacing.css" >
    <link rel="stylesheet" href="css/style.css" >
    <link rel="stylesheet" href="css/responsive.css" >
    <link rel="stylesheet" href="css/contis-icon.css" >

    

           <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brand Logo Slider</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <style>
        /* styles.css */
        

        /* Step 5: Define the font */
@font-face {
    font-family: 'ZTFloogn';
    src: url('/fonts/ZTFloogn-ExtraBold.ttf') format('ttf'),
         url('/fonts/ZTFloogn-ExtraBold.ttf') format('ttf');
    font-weight: normal;
    font-style: normal;
}

/* Step 6: Apply the font */
body {
    font-family: 'ZTFloogn-ExtraBold';
}

/* Example usage */
h1 {
    font-family: 'ZTFloogn-ExtraBold';
}
h2 {
    font-family: 'ZTFloogn-ExtraBold';
}
h3 {
    font-family: 'ZTFloogn-ExtraBold';
}
h4 {
    font-family: 'ZTFloogn-ExtraBold';
}
h5 {
    font-family: 'ZTFloogn-ExtraBold';
}
p {
    font-family: 'ZTFloogn-ExtraBold';
}
h6 {
    font-family: 'ZTFloogn-ExtraBold';
}



        .brand-section {
            background-color: #f9f9f9;
            padding: 60px 0;
        }
        
        .brand-wrapper {
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .brand-wrapper h6 {
            margin-bottom: 30px;
            font-size: 24px;
            color: #333;
        }
        
        .swiper {
            width: 100%;
            height: 100%;
        }
        
        .swiper-slide {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        .brand-image img {
            max-width: 100%;
            height: auto;
            display: block;
        }
        
        .swiper-button-next,
        .swiper-button-prev {
            color: #3333333d; /* Customize the color as needed */
        }
    </style>

<style>




.tf__testimonia {
    background-color: #f5f5f5;
    /* Add any additional styling for the section */
}

.tf__team_member {
    margin-bottom: 30px;
}

.tf__team_member_img {
    position: relative;
}

.team-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }
        .team-member {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin: 10px;
            padding: 20px;
            text-align: center;
            flex: 1 1 calc(33.333% - 40px); /* For PC */
            box-sizing: border-box;
        }
        .team-member img {
            border-radius: 50%;
            width: 100px;
            height: 100px;
        }
        .team-member h4, .team-member h5 {
            margin: 10px 0;
        }
        @media (max-width: 768px) {
            .team-member {
                flex: 1 1 100%; /* For mobile */
                max-width: 100%;
            }
        }
        
img {
    width: 100% !important;
    height: 100% !important;
    object-fit: contain!important;
}
.tf__team_member_img img {
    width: 100%;
    height: auto;
    cursor: pointer;
}

.tf__common_btn {
    font-size: 15px;
    font-weight: 600;
    font-family: #000000!important;
    padding: 13px 20px;
    background: #e30000!important;
    color: var(--colorWhite);
    border-radius: 6px;
    transition: all linear 0.3s;
}

.white-title {
    color: #e30000!important;
    font-size: 40px;
    font-weight: bold;
}

.tf__social_icons {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    background-color: rgba(0, 0, 0, 0.5);
    padding: 10px 0;
    text-align: center;
    transition: background-color 0.3s ease;
    opacity: 0;
}

.tf__social_icons a {
    color: #fff;
    margin: 0 5px;
    font-size: 20px;
}

.tf__team_member_img:hover .tf__social_icons {
    opacity: 1;
}

.tf__team_member_info {
    text-align: center;
    padding-top: 10px;
}

.tf__team_member_info h4 {
    margin-bottom: 5px;
}

.tf__team_member_info p {
    margin: 0;
}

.tf__team_member_info a {
    color: #000;
    text-decoration: none;
    transition: color 0.3s ease;
}

.tf__team_member_info a:hover {
    color: #333;
}


.p {
        font-size: 13px;
        width: 100%;
        word-wrap: break-word;
        text-align: justify!important;
    }
.mean-container a.meanmenu-reveal {
    width: 22px;
    height: 22px;
    padding: 13px 13px 11px;
    position: absolute;
    top: 8px;
    right: 20px!important;
    cursor: pointer;
    color: #0083cb;
    text-decoration: none;
    font-size: 16px;
    text-indent: -9999em;
    line-height: 22px;
    font-size: 1px;
    display: block;
    /* font-family: Arial, Helvetica, sans-serif; */
    font-weight: 700;
}
.social-icons a {
    color: #333;
    font-size: 20px;
}

.social-icons a:hover {
    color: #007bff;
}

.fab {
    font-family: FontAwesome!important; /* Assuming you have FontAwesome included */
}





.pc-logo {
    max-width: 88px; /* Adjust this value as needed */
    max-height: auto; /* This will maintain the aspect ratio */
}



/* styles.css */

.brand-section {
    background-color: #f9f9f9;
    padding: 60px 0;
}

.brand-wrapper {
    max-width: 1200px;
    margin: 0 auto;
}

.brand-wrapper h6 {
    margin-bottom: 30px;
    font-size: 24px;
    color: #333;
}


/* styles.css */

.brand-section {
    background-color: #f9f9f9;
    padding: 60px 0;
}

.brand-wrapper {
    max-width: 1200px;
    margin: 0 auto;
}

.brand-wrapper h6 {
    margin-bottom: 30px;
    font-size: 24px;
    color: #333;
}

.swiper {
    width: 100%;
    height: 100%;
}

.swiper-slide {
    display: flex;
    justify-content: center;
    align-items: center;
}

.brand-image img {
    max-width: 100%;
    height: auto;
    display: block;
}

.swiper-button-next,
.swiper-button-prev {
    color: #333; /* Customize the color as needed */
}



.swiper {
    width: 100%;
    height: 100%;
}

.swiper-slide {
    display: flex;
    justify-content: center;
    align-items: center;
}

.brand-image img {
    max-width: 100%;
    height: auto;
    display: block;
}

.swiper-button-next,
.swiper-button-prev {
    color: #333; /* Customize the color as needed */
}



.navbar-header {
    display: flex;
    align-items: center;
    margin-right: 20px; /* Adjust this value as needed */
}

.mean-container .mean-nav {
    float: left;
    width: 100%;
    background: #fff;
    margin-top: -17px!important;
}

.mean-nav > a > .mobile-logo {
    position: relative;
    top: 8px !important;
    left: 13px;
    height: 42px;
}


.navbar-collapse {
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-grow: 1;
}

.navbar-nav > li {
    margin-right: 20px; /* Adjust this value as needed */
}


.gallery-container {
    display: flex;
    justify-content: center;
    align-items: center;
}

.gallery {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
}

.gallery img {
    width: 200px;
    margin: 10px;
    cursor: pointer;
    transition: transform 0.2s;
}

.gallery img:hover {
    transform: scale(1.1);
}

.modal {
    display: none;
    position: fixed;
    z-index: 1;
    padding-top: 50px;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgb(0,0,0);
    background-color: rgba(0,0,0,0.9);
}

.modal-content {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 800px;
}

.close {
    position: absolute;
    top: 15px;
    right: 35px;
    color: #f1f1f1;
    font-size: 40px;
    font-weight: bold;
    transition: 0.3s;
}

.close:hover,
.close:focus {
    color: #bbb;
    text-decoration: none;
    cursor: pointer;
}

.mean-container .mean-nav {
    float: left;
    width: 100%;
    background: #fff;
    margin-top: 38px;
}

 
.img-responsive {
    top: 2px;
    left: 13px;
    height: 71px;
}

.mobile_menu {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 10px; /* Adjust this value as needed */
}
.nav.navbar-nav {
    display: flex;
    align-items: center;
    flex-wrap: wrap;
}
.mobile-logo {
    max-width: 80px; /* Adjust this value as needed */
    max-height: 80px; /* Adjust this value as needed */
}



.tf__footer, .tf__footer a, .tf__footer h5, .tf__footer p, .tf__footer span, .tf__footer li, .tf__footer .fa-comment-alt-lines, .tf__footer .tf__contact_icon_text p {
            color: white!important;
        }


.mean-container .mean-nav ul li a {
    
    color: #e30000!important;
    
}

.main-menu-area .nav.navbar-nav.navbar-right li a {
    color: #000000;
    font-weight: 500;
}

.mean-container a.meanmenu-reveal span {
    
    background: #e30000!important;
  
}

</style>

</head>
<body>
    @include('includes.header')

    <main>
        @yield('content')
    </main>

    
    @include('includes.footer')
    
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>