<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find Doctors - Medicare Health</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .sticky-nav {
    position: sticky;
    top: 0;
    width: 98%;
    margin-left: 10px;
    z-index: 1000; /* Adjust the z-index as needed */
    background: linear-gradient(145deg, #333, #555);
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
}

.navbar {
    display: flex;
    margin-top: 10px;
    align-items: center;
    width: 98%;
    justify-content: space-between;
    padding: 10px;

}

.navbar .logo {
    width: 120px;
    transition: transform 0.5s ease;
}

.navbar .logo:hover {
    transform: scale(1.1);
}

ul {
    display: flex;
    list-style-type: none;
    padding-left: 0;
}

ul li {
    padding: 10px 20px;
}

ul li a {
    font-weight: bold;
    color: #f8f9fa;
    text-decoration: none;
    font-size: 18px;
    transition: color 0.3s ease-out;
}

ul li a:hover {
    color: #ff4081;
    text-decoration: none;
}

        .container {
            margin-top: 50px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        #searchResults {
            margin-top: 20px;
        }
        #searchResults div {
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 10px;
        }
        #searchResults h4 {
            margin-bottom: 5px;
        }
        #searchResults p {
            margin-bottom: 5px;
        }
        #searchResults ul {
            margin-top: 0;
            padding-left: 20px;
        }
        #searchResults li {
            list-style-type: none;
        }
        .book-btn {
            margin-top: 10px;
        }
        .modal-dialog {
            max-width: 400px;
        }
    </style>
</head>
<body>
    <div class="sticky-nav">
      <div class="navbar">
        <img src="https://marketplace.canva.com/EAE2x-ic0Gk/1/0/1600w/canva-caduceus-logo%2Chealth-logo%2Cmedical-logo-2lhCTZ-v9hc.jpg" class="logo">
        <ul>
            <li><a href="#">HOME</a></li>
            <li><a href="#">ABOUT</a></li>
            <li><a href="#find-doctor">FIND DOCTORS</a></li>
            <li><a href="#">MY APPOINTMENTS</a></li>
            <li><a href="#">FEEDBACK</a></li>
            <li><a href="#">LOG OUT</a></li>
        </ul>

     </div>
</div>


<div class="container">
    <h2>Find Doctors</h2>
    <form id="searchForm">
        <div class="form-group">
            <label for="disease">Select your disease:</label>
            <select id="disease" class="form-control">
                <option value="">--Choose a disease--</option>
                <option value="Heart Disease">Heart Disease</option>
                <option value="Gynecological Disorders">Gynecological Disorders</option>
                <option value="PCODS">PCODS</option>
                <option value="Diarrhea">Diarrhea</option>
                <option value="bp">bp</option>
                <option value="sugar">sugar</option>
                <option value="Brain Tumors">Brain Tumors</option>
                <option value="Headache">Headache</option>
                <option value="Tooth loose">Tooth loose</option>
                <option value="Oral cancer">Oral cancer</option>
                <option value="Cancer">Cancer</option>
                <option value="Pediatric Disorders">Pediatric Disorders</option>
                <option value="Gastric problems">Gastric problems</option>
            </select>
        </div>
        <div class="form-group">
            <label for="location">Select your location:</label>
            <select id="location" class="form-control">
                <option value="">--Choose a location--</option>
                <option value="Hyderabad">Hyderabad</option>
                <option value="Vijayawada">Vijayawada</option>
                <option value="Guntur">Guntur</option>
                <option value="Tenali">Tenali</option>
            </select>

        </div>
        <button type="submit" class="btn btn-primary">Search</button>
    </form>

    <!-- Display search results here -->
    <div id="searchResults"></div>
</div>

    <!-- Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Appointment Booking Modal -->
    <div class="modal fade" id="appointmentModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Book Appointment</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="appointmentForm">
                        <div class="form-group">
                            <label for="patientName">Name:</label>
                            <input type="text" class="form-control" id="patientName" placeholder="Enter your name">
                        </div>
                        <div class="form-group">
                            <label for="phoneNumber">Phone Number:</label>
                            <input type="text" class="form-control" id="phoneNumber" placeholder="Enter your phone number">
                        </div>
                        <div class="form-group">
                            <label for="modalHospital">Hospital:</label>
                            <p id="modalHospital"></p>
                        </div>
                        <div class="form-group">
                            <label for="modalDoctor">Doctor:</label>
                            <p id="modalDoctor"></p>
                        </div>
                        <div class="form-group">
                            <label for="modalSlot">Slot:</label>
                            <p id="modalSlot"></p>
                        </div>
                        <button type="submit" class="btn btn-primary">Book Appointment</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
        const searchForm = document.getElementById("searchForm");
        const searchResults = document.getElementById("searchResults");
        const hospitalsData = [
            {
                name: "Ramesh Hospital",
                location: "Guntur",
                doctors: [
                    {
                        name: "Dr. John Doe",
                        specialty: "Cardiologist",
                        diseases: ["Heart Disease"],
                        experience: '5 years',
                        address: "123 Main Street, Guntur",
                        slots: ["9:00 AM", "10:00 AM", "2:00 PM"],
                        profilePic: "data:image/jpeg;base64,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" // Placeholder image URL
                    },
                    {
                        name: "Dr. Priya Sharma",
                        specialty: "Gynecologist",
                        diseases: ["Gynecological Disorders","PCODS"],
                        experience: '3 years',
                        address: "123 Main Street, Guntur",
                        slots: ["9:00 AM", "11:00 AM", "1:00 PM"],
                        profilePic: "data:image/jpeg;base64,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" // Placeholder image URL
                    },
                    {
                        name: "Dr. John",
                        specialty: "Gastrology",
                        diseases: ["Diarrhea"],
                        experience: '6 years',
                        slots: ["9:30 AM", "11:00 AM", "3:00 PM"],
                        profilePic: "https://storage.eglobaldoctors.com/assets/doctors/adinarayana_divakaruni_egd.jpg"
                    },
                    {
                        name: "Dr. John",
                        specialty: "Diabaties",
                        diseases: ["bp", "sugar"],
                        experience: '6 years',
                        slots: ["9:30 AM", "11:00 AM", "3:00 PM"],
                        profilePic: "https://storage.eglobaldoctors.com/assets/doctors/adinarayana_divakaruni_egd.jpg"
                    }
                ]
            },
            {
                name: "Aiims Hospital",
                location: "Guntur",
                doctors: [
                    {
                        name: "Dr. John",
                        specialty: "Cardiologist",
                        diseases: ["Heart Disease"],
                        experience: '6 years',
                        slots: ["9:30 AM", "11:00 AM", "3:00 PM"],
                        profilePic: "https://storage.eglobaldoctors.com/assets/doctors/adinarayana_divakaruni_egd.jpg"
                    },
                    {
                        name: "Dr. Amala",
                        specialty: "Gynecologist",
                        diseases: ["Gynecological Disorders","PCODS"],
                        experience: '5 years',
                        address: "123 Main Street, Guntur",
                        slots: ["10:00 AM", "12:00 pM", "6:00 PM"],
                        profilePic: "data:image/jpeg;base64,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" // Placeholder image URL
                    },
                    {
                        name: "Dr. John",
                        specialty: "Neurologist",
                        diseases: ["Brain Tumors","Headache"],
                        experience: '6 years',
                        slots: ["9:30 AM", "11:00 AM", "3:00 PM"],
                        profilePic: "https://storage.eglobaldoctors.com/assets/doctors/adinarayana_divakaruni_egd.jpg"
                    },
                    {
                        name: "Dr. John",
                        specialty: "Dentist",
                        diseases: ["Tooth loose","Oral cancer"],
                        experience: '6 years',
                        slots: ["9:30 AM", "11:00 AM", "3:00 PM"],
                        profilePic: "https://storage.eglobaldoctors.com/assets/doctors/adinarayana_divakaruni_egd.jpg"
                    }

                ]
            },
            {
                name: "Apolo Hospital",
                location: "Guntur",
                doctors: [
                    {
                        name: "Dr. David Johnson",
                        specialty: "Cardiologist",
                        diseases: ["Heart Disease"],
                        experience: '5 years',
                        address: "123 Main Street, Guntur",
                        slots: ["9:30 AM", "12:00 PM", "4:00 PM"],
                        profilePic:"data:image/jpeg;base64,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"
                    },
                    {
                        name: "Dr. John",
                        specialty: "Neurologist",
                        diseases: ["Brain Tumors","Headache"],
                        experience: '6 years',
                        slots: ["9:30 AM", "11:00 AM", "3:00 PM"],
                        profilePic: "https://storage.eglobaldoctors.com/assets/doctors/adinarayana_divakaruni_egd.jpg"
                    },
                    {
                        name: "Dr. John",
                        specialty: "Oncology",
                        diseases: ["Cancer"],
                        experience: '6 years',
                        slots: ["9:30 AM", "11:00 AM", "3:00 PM"],
                        profilePic: "https://storage.eglobaldoctors.com/assets/doctors/adinarayana_divakaruni_egd.jpg"
                    },
                    {
                        name: "Dr. John",
                        specialty: "Diabaties",
                        diseases: ["bp", "sugar"],
                        experience: '6 years',
                        slots: ["9:30 AM", "11:00 AM", "3:00 PM"],
                        profilePic: "https://storage.eglobaldoctors.com/assets/doctors/adinarayana_divakaruni_egd.jpg"
                    }

                    
                ]
            },
            {
                name: "Amrita Hospital",
                location: "Guntur",
                doctors: [
                    {
                        name: "Dr. David Johnson",
                        specialty: "Cardiologist",
                        diseases: ["Heart Disease"],
                        experience: '5 years',
                        address: "123 Main Street, Guntur",
                        slots: ["9:30 AM", "12:00 PM", "4:00 PM"],
                        profilePic:"data:image/jpeg;base64,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"
                    },
                    {
                        name: "Dr. Priyanka",
                        specialty: "Gynecologist",
                        diseases: ["Gynecological Disorders","PCODS"],
                        experience: '5 years',
                        address: "123 Main Street, Guntur",
                        slots: ["9:00 AM", "1:00 pM", "4:30 PM"],
                        profilePic:"data:image/jpeg;base64,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"
                    },
                    {
                        name: "Dr. John",
                        specialty: "Dentist",
                        diseases: ["Tooth loose","Oral cancer"],
                        experience: '6 years',
                        slots: ["9:30 AM", "11:00 AM", "3:00 PM"],
                        profilePic: "https://storage.eglobaldoctors.com/assets/doctors/adinarayana_divakaruni_egd.jpg"
                    },
                    {
                        name: "Dr. John",
                        specialty: "Diabaties",
                        diseases: ["bp", "sugar"],
                        experience: '6 years',
                        slots: ["9:30 AM", "11:00 AM", "3:00 PM"],
                        profilePic: "https://storage.eglobaldoctors.com/assets/doctors/adinarayana_divakaruni_egd.jpg"
                    }
                ]
            },
            {
                        name: "NIMS Hospital",
                        location: "Vijayawada",
                        doctors: [
                  {
                        name: "Dr. Priya Sharma",
                        specialty: "Gynecologist",
                        diseases: ["Gynecological Disorders","PCODS"],
                        slots: ["9:00 AM", "11:00 AM", "1:00 PM"]
                  },
                  {
                        name: "Dr. Arjun Singh",
                        specialty: "Pediatrician",
                        diseases: ["Pediatric Disorders"],
                        slots: ["10:00 AM", "12:00 PM", "2:00 PM"]
                  },
                  {
                         name: "Dr. John Doe",
                        specialty: "Cardiologist",
                        diseases: ["Heart Disease"],
                        experience: '5 years',
                        address: "123 Main Street, Guntur",
                        slots: ["9:00 AM", "10:00 AM", "2:00 PM"],
                   },
                   {
                        name: "Dr. John",
                        specialty: "Oncology",
                        diseases: ["Cancer"],
                        experience: '6 years',
                        slots: ["9:30 AM", "11:00 AM", "3:00 PM"],
                        profilePic: "https://storage.eglobaldoctors.com/assets/doctors/adinarayana_divakaruni_egd.jpg"
                    }

                ]
            },
            {
                name: "Ashoka Hospital",
                location: "Vijayawada",
                doctors: [
                    {
                        name: "Dr. John Doe",
                        specialty: "Cardiologist",
                        diseases: ["Heart Disease"],
                        experience: '5 years',
                        address: "123 Main Street, Guntur",
                        slots: ["9:00 AM", "10:00 AM", "2:00 PM"],
                        profilePic: "data:image/jpeg;base64,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" // Placeholder image URL
                    },
                    {
                        name: "Dr. Priya Sharma",
                        specialty: "Gynecologist",
                        diseases: ["Gynecological Disorders","PCODS"],
                        experience: '3 years',
                        address: "123 Main Street, Guntur",
                        slots: ["9:00 AM", "11:00 AM", "1:00 PM"],
                        profilePic: "data:image/jpeg;base64,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" // Placeholder image URL
                    },
                    {
                        name: "Dr. John",
                        specialty: "Gastrologist",
                        diseases: ["Gastric problems"],
                        experience: '6 years',
                        slots: ["9:30 AM", "11:00 AM", "3:00 PM"],
                        profilePic: "https://storage.eglobaldoctors.com/assets/doctors/adinarayana_divakaruni_egd.jpg"
                    },
                    {
                        name: "Dr. John",
                        specialty: "Oncology",
                        diseases: ["Cancer"],
                        experience: '6 years',
                        slots: ["9:30 AM", "11:00 AM", "3:00 PM"],
                        profilePic: "https://storage.eglobaldoctors.com/assets/doctors/adinarayana_divakaruni_egd.jpg"
                    }
                ]
            },
            {
                name: "Manipal Super Specality Hospital",
                location: "Vijayawada",
                doctors: [
                    
                    {
                        name: "Dr. John",
                        specialty: "Oncology",
                        diseases: ["Cancer"],
                        experience: '6 years',
                        slots: ["9:30 AM", "11:00 AM", "3:00 PM"],
                        profilePic: "https://storage.eglobaldoctors.com/assets/doctors/adinarayana_divakaruni_egd.jpg"
                    },
                    {
                        name: "Dr. John",
                        specialty: "Neurologist",
                        diseases: ["Brain Tumors","Headache"],
                        experience: '6 years',
                        slots: ["9:30 AM", "11:00 AM", "3:00 PM"],
                        profilePic: "https://storage.eglobaldoctors.com/assets/doctors/adinarayana_divakaruni_egd.jpg"
                    },
                    {
                        name: "Dr. John",
                        specialty: "Gastrologist",
                        diseases: ["Gas problems"],
                        experience: '6 years',
                        slots: ["9:30 AM", "11:00 AM", "3:00 PM"],
                        profilePic: "https://storage.eglobaldoctors.com/assets/doctors/adinarayana_divakaruni_egd.jpg"
                    },
                    {
                        name: "Dr. John",
                        specialty: "Diabaties",
                        diseases: ["bp", "sugar"],
                        experience: '6 years',
                        slots: ["9:30 AM", "11:00 AM", "3:00 PM"],
                        profilePic: "https://storage.eglobaldoctors.com/assets/doctors/adinarayana_divakaruni_egd.jpg"
                    }
                    
                ]
            },
            {
                name: "Care Hospital",
                location: "Vijayawada",
                doctors: [
                    {
                        name: "Dr. John Doe",
                        specialty: "Cardiologist",
                        diseases: ["Heart Disease"],
                        experience: '5 years',
                        address: "123 Main Street, Guntur",
                        slots: ["9:00 AM", "10:00 AM", "2:00 PM"],
                        profilePic: "data:image/jpeg;base64,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" // Placeholder image URL
                    },
                    {
                        name: "Dr. Priya Sharma",
                        specialty: "Gynecologist",
                        diseases: ["Gynecological Disorders","PCODS"],
                        experience: '3 years',
                        address: "123 Main Street, Guntur",
                        slots: ["9:00 AM", "11:00 AM", "1:00 PM"],
                        profilePic: "data:image/jpeg;base64,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" // Placeholder image URL
                    },
                    {
                        name: "Dr. Arjun Singh",
                        specialty: "Pediatrician",
                        diseases: ["Pediatric Disorders"],
                        slots: ["10:00 AM", "12:00 PM", "2:00 PM"]
                  },
                  {
                        name: "Dr. John",
                        specialty: "Diabaties",
                        diseases: ["bp", "sugar"],
                        experience: '6 years',
                        slots: ["9:30 AM", "11:00 AM", "3:00 PM"],
                        profilePic: "https://storage.eglobaldoctors.com/assets/doctors/adinarayana_divakaruni_egd.jpg"
                    }
                ]
            },


            {
                name: "Hyderabad Hospital",
                location: "Hyderabad",
                doctors: [
                    {
                        name: "Dr. Michael Williams",
                        specialty: "Neurologist",
                        diseases: ["Neurological Disorders"],
                        slots: ["10:00 AM", "11:00 AM", "1:00 PM"]
                    }
                ]
            },
            {
                name: "Tenali Hospital",
                location: "Tenali",
                doctors: [
                    {
                        name: "Dr. Sarah Anderson",
                        specialty: "Dermatologist",
                        diseases: ["Skin Disorder"],
                        slots: ["10:00 AM", "11:00 AM", "12:00 PM"]
                    }
                ]
            },
        ];
        searchForm.addEventListener("submit", function(event) {
            event.preventDefault(); // Prevent form submission

            // Get the entered disease and location
            const disease = document.getElementById("disease").value.trim();
            const location = document.getElementById("location").value.trim();

            // Filter hospitals based on the entered location
            const filteredHospitals = hospitalsData.filter(function(hospital) {
                return hospital.location.toLowerCase() === location.toLowerCase(); // Case-insensitive comparison
            });

            // Build HTML to display search results
            let html = "<h3>Available Hospitals and Doctors</h3>";
            if (filteredHospitals.length > 0) {
                filteredHospitals.forEach(function(hospital) {
                    html += "<div>";
                    html += "<h4>" + hospital.name + "</h4>";
                    html += "<p>Location: " + hospital.location + "</p>";
                    html += "<p>Doctors:</p>";
                    let specialistAvailable = false; // Flag to check if specialist is available for the entered disease
                    hospital.doctors.forEach(function(doctor) {
                        // Check if the doctor specializes in the entered disease
                        if (doctor.diseases.includes(disease)) {
                            specialistAvailable = true;
                            html += "<div style='display: flex; align-items: center;'>"; // Set display to flex and align items to center
                            html += "<img src='" + doctor.profilePic + "' alt='" + doctor.name + "' style='width: 150px; height: 150px;'>";
                            html += "<div style='margin-left: auto;'>"; // Add margin for spacing
                            html += "<h5>" + doctor.name + "</h5>";
                            html += "<p>Specialty: " + doctor.specialty + "</p>";
                            html+="<p>Expereience: "+doctor.experience +"</p>";
                            html+="<p>Address: "+doctor.address +"</p>";
                            html += "<p>Available Slots:</p>";
                            html += "<ul>";
                            doctor.slots.forEach(function(slot) {
                            html += "<li>" + slot + " <button class='btn btn-primary book-btn' data-hospital='" + hospital.name + "' data-doctor='" + doctor.name + "' data-slot='" + slot + "'>Book</button></li>";
                           });
                           html += "</ul>";
                           html += "</div>"; // Close the inner div
                           html += "</div>"; // Close the outer div
                        }
                    });
                    if (!specialistAvailable) {
                        html += "<p>No specialist available for the entered disease in this hospital.</p>";
                    }
                    html += "</div>";
                });
            } else {
                html += "<p>No hospitals available in the entered location.</p>";
            }

            // Update the searchResults div with the generated HTML
            searchResults.innerHTML = html;

            // Add event listeners to book appointment buttons
            const bookButtons = document.querySelectorAll(".book-btn");
            bookButtons.forEach(function(button) {
                button.addEventListener("click", function() {
                    const hospitalName = this.getAttribute("data-hospital");
                    const doctorName = this.getAttribute("data-doctor");
                    const slot = this.getAttribute("data-slot");
                    bookAppointment(hospitalName, doctorName, slot);
                });
            });
        });

 function bookAppointment(hospitalName, doctorName, slot) {
    // Show modal for booking appointment
    $('#appointmentModal').modal('show');
    document.getElementById("modalHospital").textContent = hospitalName;
    document.getElementById("modalDoctor").textContent = doctorName;
    document.getElementById("modalSlot").textContent = slot;

    // Handle form submission
    const appointmentForm = document.getElementById("appointmentForm");
    appointmentForm.addEventListener("submit", function(event) {
        event.preventDefault();
        const name = document.getElementById("patientName").value.trim();
        const phoneNumber = document.getElementById("phoneNumber").value.trim();

        // Validate patient name and phone number
        if (name === "" || phoneNumber === "") {
            alert("Please enter your name and phone number.");
            return; // Exit the function if validation fails
        }
        // Validate phone number format
if (!/^\d{10}$/.test(phoneNumber)) {
    alert("Phone number must be exactly 10 digits.");
    return;
}

        console.log("Appointment booked:");
        console.log("Hospital: " + hospitalName);
        console.log("Doctor: " + doctorName);
        console.log("Slot: " + slot);
        console.log("Patient Name: " + name);
        console.log("Phone Number: " + phoneNumber);

        // Optionally, you can show a confirmation message to the user
        alert("Appointment booked successfully!");

        // Close the modal
        $('#appointmentModal').modal('hide');

        // Clear the form fields
        appointmentForm.reset();
    });
}

    });
</script>
</body>
</head>