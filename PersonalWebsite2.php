<!-- 
    Name: Tyler Bowes
    Date: 10-18-2020
    Assignment: Personal Website

    Copilot request:
Create me a personal website that has the current features:
1. adds the picture from directory: "Images\Portrate (linkedin).jpg"
2. adds styling so the that picture only shows the middle potion
3. Put next to the image my name, "Tyler Bowes"
4. add a section for the contact information
5. style the section for the contact information to go along with the image
6. add a section to imput my resume or a link to do so
 -->


<!DOCTYPE html>
<html>
<head>
    <title>Personal Website</title>
    <style>
        .container {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }
        
        .profile-image {
            width: 300px;
            height: 300px;
            overflow: hidden;
            border-radius: 50%;
        }
        
        .profile-image img {
            object-fit: cover;
            width: 100%;
            height: 100%;
        }
        
        .name {
            font-size: 24px;
            margin-top: 20px;
        }
        
        .contact-section {
            margin-top: 50px;
            background-color: #f2f2f2;
            padding: 10px 20px;
            border-radius: 5px;
            display: flex;
            flex-direction: column;
            /* align-items: center; */
            /* justify-content: center; */
            text-align: center;
        }
        
        .contact-section p {
            text-align: left;
        }

        .socialmedia-icon {
            height: 8vh;
            width: 8vh;
            display: inline;
        }

        .socialmedia-icon:hover {
            transform: scale(1.2);
            transition: 0.3s ease;
        }
        .resume-section {
            margin-top: 50px;
        }


    </style>
</head>
<body>
    <div class="container">
        <div class="profile-image">
            <img src="Images/Portrate (linkedin).jpg" alt="Profile Picture">
        </div>
        <div class="name">
            Tyler Bowes
        </div>
        <div class="contact-section">
            <h2>Contact Information</h2>
            <p>Email: tylervictorbowes@gmail.com</p>
            <p>Phone: (408) 607-3393</p>
                <img alt="Tyler Bowes' LinkedIn" title="Tyler Bowes' LinkedIn" 
                    class="socialmedia-icon" data-image-link="https://www.linkedin.com/in/tyler-bowes/"
                    width="315" height="315" 
                    src="//custom-images.strikinglycdn.com/res/hrscywv4p/image/upload/c_limit,fl_lossy,h_960,w_480,f_auto,q_auto/svvszaufolhr4jkwl7vz.jpg">
                    <a href="https://www.linkedin.com/in/tyler-bowes/"></a>

                </img>
            <!-- </a> -->

        </div>
        <div class="resume-section">
            <h2>Resume</h2>
            <p>Please upload your resume or provide a link to it.</p>
        </div>
    </div>
</body>
</html>
