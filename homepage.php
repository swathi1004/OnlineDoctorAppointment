<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OnlineDoctorAppointment</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <style>
      .container {
            width: 80%;
            margin: 0 auto;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }
        .photo-container {
            width: 18%; /* Adjusted width to fit five columns */
            height: auto;
            margin-bottom: 20px;
            text-align: center;
        }
        .photo {
            width: 100%;
            height: 200px;
            overflow: hidden;
            margin: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }
        
        .photo img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
      .owl-carousel .item {
          text-align: center;
          padding: 10px;
          box-shadow: 0 0 10px rgba(0,0,0,0.1);
          border-radius: 10px;
          background: #fff;
      }
      .testimonial {
          font-style: italic;
          color: #555;
      }
      .author {
          margin-top: 10px;
          font-weight: bold;
      }
      .sticky-nav {
    position: sticky;
    top: 0;
    z-index: 1000; /* Adjust the z-index as needed */
    background: linear-gradient(145deg, #333, #555);
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
   margin-top: 10px;
   width: 100%;

}

.navbar {
        width: 100%;
        padding: 0;
        display: flex;
        align-items: center;
        justify-content: space-between;
        background: linear-gradient(145deg, #333, #555); /* Dark gradient */
        box-shadow: 0 2px 4px rgba(0,0,0,0.3); /* Enhanced shadow for depth */
      }
      .navbar .logo {
        width: 120px; /* Adjusted logo size for better fit */
        transition: transform 0.5s ease; /* Smooth transition for hover effect */
      }

      .navbar .logo:hover {
        transform: scale(1.1); /* Slightly enlarges the logo on hover */
      }
      ul {
        display: flex;
        list-style-type: none; /* Removes default bullet points */
        padding-left: 0; /* Removes default padding */
      }

      ul li {
        padding: 10px 10px; /* Increased padding for larger clickable area */
      }

    
    
      ul li a {
        font-weight: bold;
        color: #f8f9fa;
        text-decoration: none;
        font-size: 18px; /* Larger font size */
        transition: color 0.3s ease-out; /* Smooth color transition on hover */
      }

      ul li a:hover {
        color: #ff4081;
      }

      .box {
          padding: 50px;
          margin: 30px 80px;
          border-radius: 35px;
          background-image: linear-gradient(90deg, #E8DAEF, #C39BD3);
      }
      .doctorlogo {
          height: 170px;
          width: 300px;
          margin-left: 750px;
          border-radius: 10px;
      }

      .welcome-text {
          position: absolute;
          top: 50%;
          margin-left: 30px;
          transform: translateY(-50%);
          padding: 20px;
          border-radius: 10px;
          font-style: italic;
      }

      .welcome-text span {
          color: green;
          font-style: oblique;
      }

      .footer {
          width: 100%;
          background-color: #333; /* Dark background */
          color: #fff; /* White text color */
          text-align: center;
          padding: 20px 0;
      }

      .footer a {
          color: #f8f9fa;
          text-decoration: none;
          font-weight: bold;
      }

      .footer a:hover {
          color: #ddd;
      }
    </style>
</head>
<body>
  <div class="sticky-nav">
    <div class="navbar">
       <img src="https://marketplace.canva.com/EAE2x-ic0Gk/1/0/1600w/canva-caduceus-logo%2Chealth-logo%2Cmedical-logo-2lhCTZ-v9hc.jpg" class="logo">
       <ul>
       <li><a href="http://localhost/project/homepage.php">HOME</a></li>
       <li><a href="http://localhost/project/About.php">ABOUT</a></li>
       <li><a href="http://localhost/project/finddoctors.php">FIND DOCTORS</a></li>
       <li><a href="http://localhost/project/appointment.php">MY APPOINTMENTS</a></li>
       <li><a href="http://localhost/project/feedback.php">FEEDBACK</a></li>
       <li><a href="http://localhost/project/loginpage.php">LOG OUT</a></li>
       </ul>
    </div> 
  </div>  
<div class="box">
  <div class="welcome-text">
    <h1>Welcome To<br> <span>M</span>edicare <sub><span> H</span>ealth</sub></h1>
  </div>
  <div class="img">
    <img src="https://assets.thehansindia.com/h-upload/2022/07/06/1301571-dov.webp" class="doctorlogo">
  </div>
</div>
<h2>Meet Our Doctors</h2><br><br>
    <div class="container"> 
        <div class="photo-container">
            <div class="photo">
                <img src="https://storage.eglobaldoctors.com/assets/doctors/aaditi_acharya_cf4c.jpeg" alt="Photo 1">
            </div>
            <div class="info">
                <h2>Aaditi Acharya</h2>
                <h4>OBSTETRICS & GYNECOLOGY</h4>
                <h4>India</h4>
            </div>
        </div>
        <div class="photo-container">
            <div class="photo">
                <img src="https://storage.eglobaldoctors.com/assets/updated_doctor_profiles/aakanksha_dixit.jpg" alt="Photo 2">
            </div>
            <div class="info">
                <h2>Aakanksha Dixit</h2>
                <h4>NUTRITIONIST</h4>
                <h4>India</h4>
            </div>
        </div>
        <div class="photo-container">
            <div class="photo">
                <img src="https://storage.eglobaldoctors.com/assets/updated_doctor_profiles/aanandita_pande.jpeg" alt="Photo 3">
            </div>
            <div class="info">
                <h2>Aanandita Pande</h2>
                <h4>NUTRITIONIST</h4>
                <h4>India</h4>
            </div>
        </div>
        <div class="photo-container">
            <div class="photo">
                <img src="https://storage.eglobaldoctors.com/assets/doctors/abhi_sangam_ecbe.jpg" alt="Photo 3">
            </div>
            <div class="info">
                <h2>Abhi Sangam</h2>
                <h4>EMERGENCY MEDICINE</h4>
                <h4>Australia</h4>
            </div>
        </div>
        <div class="photo-container">
            <div class="photo">
                <img src="https://storage.eglobaldoctors.com/assets/updated_doctor_profiles/abhinand_reddy.jpg" alt="Photo 3">
            </div>
            <div class="info">
                <h2>Abhinand Reddy</h2>
                <h4>INTERNAL MEDICINE</h4>
                <h4>India</h4>
            </div>
        </div>
        <div class="photo-container">
        <div class="photo">
            <img src="https://storage.eglobaldoctors.com/assets/doctors/abhinandan_pakanati_530e.jpeg" alt="Photo 1">
            </div>
            <div class="info">
            <h2>Abhinandan Pakanati</h2>
    <h4>NEPHROLOGY</h4>
    <h4>United States</h4>
    </div>
        </div>
        <div class="photo-container">
        <div class="photo">
            <img src="https://storage.eglobaldoctors.com/assets/doctors/adinarayana_divakaruni_egd.jpg" alt="Photo 2">
        </div>
        <div class="info">
        <h2>Adinarayana Divakaruni</h2>
    <h4>GASTROENTEROLOGY</h4>
    <h4>United States</h4>
    </div>
        </div>
        <div class="photo-container">
        <div class="photo">
            <img src="https://storage.eglobaldoctors.com/assets/updated_doctor_profiles/ahmed_khan.jpeg" alt="Photo 3">
        </div>
        <div class="info">
        <h2>Ahmed Khan</h2>
        <h4>GENERAL MEDICINE</h4>
        <h4>India</h4>
        </div></div>
        <div class="photo-container">
        <div class="photo">
            <img src="https://storage.eglobaldoctors.com/assets/doctors/aishwarya_m_egd.jpg" alt="Photo 3">
        </div>
        <div class="info">
        <h2>Aishwarya M</h2>
        <h4>ENT</h4>
        <h4>India</h4>
        </div></div>
        <div class="photo-container">
        <div class="photo">
            <img src="https://storage.eglobaldoctors.com/assets/doctors/ajai_shreevatsa_5018.jpg" alt="Photo 3">
        </div>
        <div class="info">
        <h2>Ajai Shreevatsa</h2>
        <h4>INTERNAL MEDICINE</h4>
        <h4>United States</h4>
    </div></div>
    <div class="photo-container">
        <div class="photo">
            <img src="https://storage.eglobaldoctors.com/assets/doctors/amarendar_kasarla_e139.jpg" alt="Photo 1">
            </div>
            <div class="info">
            <h2>Amarendar kasarla</h2>
    <h4>PAIN MANAGMENT</h4>
    <h4>United States</h4>
    </div>
        </div>
        <div class="photo-container">
        <div class="photo">
            <img src="https://storage.eglobaldoctors.com/assets/updated_doctor_profiles/amit_chakrabarty.jpg" alt="Photo 2">
        </div>
        <div class="info">
        <h2>Amit Chakrabarty</h2>
    <h4>UROLOGY</h4>
    <h4>United States</h4>
    </div>
        </div>
        <div class="photo-container">
        <div class="photo">
            <img src="https://storage.eglobaldoctors.com/assets/doctors/amit_bhargava_5254.jpg" alt="Photo 3">
        </div>
        <div class="info">
        <h2>Amit Bhargava</h2>
        <h4>ENDOCRINOLOGY</h4>
        <h4>United States</h4>
        </div></div>
        <div class="photo-container">
        <div class="photo">
            <img src="https://storage.eglobaldoctors.com/assets/doctors/amol_takalkar_210b.jpg" alt="Photo 3">
        </div>
        <div class="info">
        <h2>Amol Takalkar</h2>
        <h4>NUCLEAR MEDICINE</h4>
        <h4>United States</h4>
        </div></div>
        <div class="photo-container">
        <div class="photo">
            <img src="https://storage.eglobaldoctors.com/assets/doctors/Dr_anand_chopda_egd.jpg" alt="Photo 3">
        </div>
        <div class="info">
        <h2>DR Anand Chopda</h2>
        <h4>CARDIOLOGY</h4>
        <h4>India</h4>
    </div></div>
    <div class="photo-container">
        <div class="photo">
            <img src="https://storage.eglobaldoctors.com/assets/updated_doctor_profiles/dr_ajit_ghadge.jpg" alt="Photo 1">
            </div>
            <div class="info">
            <h2>Ajit Ghadge</h2>
    <h4>INTERNAL MEDICINE</h4>
    <h4>India</h4>
    </div>
        </div>
        <div class="photo-container">
        <div class="photo">
            <img src="https://storage.eglobaldoctors.com/assets/doctors/ajitha_raju_895f.jpg" alt="Photo 2">
        </div>
        <div class="info">
        <h2>Ajitha Raju</h2>
    <h4>INTERNAL MEDICINE</h4>
    <h4>United States</h4>
    </div>
        </div>
        <div class="photo-container">
        <div class="photo">
            <img src="https://storage.eglobaldoctors.com/assets/doctors/akash_bhuriya_egd.jpg" alt="Photo 3">
        </div>
        <div class="info">
        <h2>Akash Bhuriya</h2>
        <h4>HOMEOPATHY</h4>
        <h4>India</h4>
        </div></div>
        <div class="photo-container">
        <div class="photo">
            <img src="https://storage.eglobaldoctors.com/assets/doctors/akhilesh_babbili_dea3.jpg" alt="Photo 3">
        </div>
        <div class="info">
        <h2>Akhilesh Babbili</h2>
        <h4>ENT</h4>
        <h4>India</h4>
        </div></div>
        <div class="photo-container">
        <div class="photo">
            <img src="https://storage.eglobaldoctors.com/assets/updated_doctor_profiles/amar_dave.jpg" alt="Photo 3">
        </div>
        <div class="info">
        <h2>Amar Dave</h2>
        <h4>INTERNAL MEDICINE</h4>
        <h4>United States</h4>
    </div></div>
    
    
    
    <div class="photo-container">
        <div class="photo">
            <img src="https://storage.eglobaldoctors.com/assets/doctors/anusha_badveli_egd.jpeg" alt="Photo X">
        </div>
        <div class="info">
            <h2>Doctor's Name</h2>
            <h4>Specialization</h4>
            <h4>Location</h4>
        </div>
    </div>
    <div class="photo-container">
        <div class="photo">
            <img src="https://storage.eglobaldoctors.com/assets/updated_doctor_profiles/anushka_reddy_marri.jpg" alt="Photo X">
        </div>
        <div class="info">
            <h2>Doctor's Name</h2>
            <h4>Specialization</h4>
            <h4>Location</h4>
        </div>
    </div>
    <div class="photo-container">
        <div class="photo">
            <img src="https://storage.eglobaldoctors.com/assets/doctors/apurva_vyas_d6c7.jpg" alt="Photo X">
        </div>
        <div class="info">
            <h2>Doctor's Name</h2>
            <h4>Specialization</h4>
            <h4>Location</h4>
        </div>
    </div>
    <div class="photo-container">
        <div class="photo">
            <img src="https://storage.eglobaldoctors.com/assets/doctors/archana_balasubramanya_04d7.jpg" alt="Photo X">
        </div>
        <div class="info">
            <h2>Doctor's Name</h2>
            <h4>Specialization</h4>
            <h4>Location</h4>
        </div>
    </div>
    <div class="photo-container">
        <div class="photo">
            <img src="https://storage.eglobaldoctors.com/assets/updated_doctor_profiles/archana_arora.jpg" alt="Photo X">
        </div>
        <div class="info">
            <h2>Doctor's Name</h2>
            <h4>Specialization</h4>
            <h4>Location</h4>
        </div>
    </div>
    
    

</div>

<div class="footer">
    For appointments, email us at <a href="mailto:appointments@medicarehealth.com">appointments@medicarehealth.com</a>
</div>


</body>
</html>