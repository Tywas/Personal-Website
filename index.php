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
    <!-- Favicon links -->
    <link rel="apple-touch-icon" sizes="180x180" href="Favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="Favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="Favicon/favicon-16x16.png">
    <link rel="manifest" href="Favicon/site.webmanifest">
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
        .contact-section p a{
            text-decoration: none; 
            color: #0060B6;
        }
            

        .socialmedia-icon {
            height: 8vh;
            width: 8vh;
            display: inline;
            padding: 10px;
            transition: 0.3s ease;
        }

        .socialmedia-icon:hover {
            transform: scale(1.2);
           
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
            <p>
                <a href="https://www.linkedin.com/in/tyler-bowes/">
                    <img alt="Tyler Bowes' LinkedIn" title="Tyler Bowes' LinkedIn" 
                        class="socialmedia-icon" data-image-link="https://www.linkedin.com/in/tyler-bowes/"
                        width="315" height="315" id="LinkedIn"
                        src="//custom-images.strikinglycdn.com/res/hrscywv4p/image/upload/c_limit,fl_lossy,h_960,w_480,f_auto,q_auto/svvszaufolhr4jkwl7vz.jpg">
                </a>
                <a href="https://github.com/Tywas" alt="Tyler Bowes' Github" title="Tyler Bowes' Github">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 120.78 117.79" class="socialmedia-icon" id="Github" alt="Tyler Bowes' Github" title="Tyler Bowes' Github">
                    <g id="Layer_2" data-name="Layer 2">
                        <g id="Layer_1-2" data-name="Layer 1">
                            <path class="cls-1" d="M60.39 0A60.39 60.39 0 0 0 41.3 117.69c3 .56 4.12-1.31 4.12-2.91 0-1.44-.05-6.19-.08-11.24C28.54 107.19 25 96.42 25 96.42c-2.75-7-6.71-8.84-6.71-8.84-5.48-3.75.41-3.67.41-3.67 6.07.43 9.26 6.22 9.26 6.22 5.39 9.23 14.13 6.57 17.57 5 .55-3.9 2.11-6.56 3.84-8.07C36 85.55 21.85 80.37 21.85 57.23A23.35 23.35 0 0 1 28.08 41c-.63-1.52-2.7-7.66.58-16 0 0 5.07-1.62 16.61 6.19a57.36 57.36 0 0 1 30.25 0C87 23.42 92.11 25 92.11 25c3.28 8.32 1.22 14.46.59 16a23.34 23.34 0 0 1 6.21 16.21c0 23.2-14.12 28.3-27.57 29.8 2.16 1.87 4.09 5.55 4.09 11.18 0 8.08-.06 14.59-.06 16.57 0 1.61 1.08 3.49 4.14 2.9A60.39 60.39 0 0 0 60.39 0Z">
                            </path><path class="cls-2" d="M22.87 86.7c-.13.3-.6.39-1 .19s-.69-.61-.55-.91.61-.39 1-.19.69.61.54.91ZM25.32 89.43c-.29.27-.85.14-1.24-.28a.92.92 0 0 1-.17-1.25c.3-.27.84-.14 1.24.28s.47 1 .17 1.25ZM27.7 92.91c-.37.26-1 0-1.35-.52s-.37-1.18 0-1.44 1 0 1.35.51.37 1.19 0 1.45ZM31 96.27a1.13 1.13 0 0 1-1.59-.27c-.53-.49-.68-1.18-.34-1.54s1-.27 1.56.23.68 1.18.33 1.54ZM35.46 98.22c-.15.47-.82.69-1.51.49s-1.13-.76-1-1.24.82-.7 1.51-.49 1.13.76 1 1.24ZM40.4 98.58c0 .5-.56.91-1.28.92s-1.3-.38-1.31-.88.56-.91 1.29-.92 1.3.39 1.3.88ZM45 97.8c.09.49-.41 1-1.12 1.12s-1.35-.17-1.44-.66.42-1 1.12-1.12 1.35.17 1.44.66Z">
                    </path></g></g></svg>
               </a>
            </p>
            <!-- </a> -->

        </div>
        <div class="resume-section">
            <h2><a href="Tyler Bowes Resume 2024.pdf">Resume</a></h2>
        </div>
    </div>
</body>
</html>
