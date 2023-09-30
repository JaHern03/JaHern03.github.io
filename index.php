<?php include 'sendemail.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jason Personal Portfolio</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="mobileportfolio.css">

    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300&display=swap" rel="stylesheet">

</head>
<body>

<?php echo $alert; ?>
            
    <header>
        <!--<a href="#" class="logo"><i class="ri-home-4-line"></i><span>My Portfolio</span></a>-->

            <ul class = "navbar">
                <li><a href="#" class="active"> Home</a></li>
                <li><a href="#about"> About</a></li>
                <li><a href="#projects"> Projects</a></li>
                <li><a href="#contact"> Contact</a></li>
            </ul>
        <div class ="main">
           <div class="bx bx-menu" id="menu-icon"></div>
        </div>
    </header>

    <section id="profile">
        <div class="section__pic-container">
            <img class = "pfp" src="./assets/pfp1.jpg" alt="My Picutre"> 
            </div>

            <div class="section__text">
                <p class="section__text__p1">Hello, I'm</p>
                <h1 class="title"> Jason Hernandez</h1>
                <p class="section__text__p2"> CMPE Student at San Jose State</p>
                <div class="btn-container">
                    <button class="btn btn-color-2" onclick="window.open('./assets/2023_Final_Resume.pdf')">Download CV
                    </button>
                    <button class="btn btn-color-1" onclick="location.href='./#contact'">Contact Me
                    </button>
                </div>

                <div id="socials-container">
                    <a href="https://www.linkedin.com/in/jason-hernandez-5680a9221/" target="_blank">
                        <img src="./assets/linkedin.png" alt="LinkedIn Profile" class="icon">
                      </a>
                      <a href="https://www.github.com/JaHern03" target="_blank">
                        <img src="./assets/github.png" alt="Github Profile" class="icon">
                      </a>
                </div>
            </div>
    </section>

    <section id="about">
    <h1 class="title"> About</h1>
    <div class="section-container">
      <div class="section__pic-container">
        <img src="./assets/pfp2.jpg" alt="Profile Picture" class="about-pic"/>
      </div>
        <div class="about-details-container">
        <div class="about-containers">

        <div class="details-container">
          <img src="./assets/experience.png" alt="Experience icon"class="icon" />
            <h3>Experience</h3>
            <p>1 Year Merchandiser - Costco Wholesale <br />5 Indepedent Complex Projects</p>
        </div>

        <div class="details-container">
            <img src="./assets/education.jpg" alt="Education icon"class="icon"/>
            <h3>Education</h3>
           <p>San Jose State University <br> B.S Computer Engineering (2021 - Current)</p>
        </div>
      </div>

      <div class="text-container">
                  <p>
                  <i>It does not matter how slowly you go as long as you do not stop. - Confucious</i><br><br>
                  Welcome to my personal portfolio. My name is Jason Hernandez, a prospective student at San Jose State University.
                  While I enjoy traveling to various places, cooking exqusite dishes, or listening to sports news, I have always had a 
                  burning passion for Computers and Engineering alike.
                  Eager to learn and to understand the meaning of success, I am motivated to stride through any obstacle and overcome
                  any barrier. Many of the projects showcased will depict the ingenuity and creativty that I am able to display. 
                   Please take your time and explore not only the projects, but the depth behind each explanation. "
                  </p>
                </div>
              </div>
            </div>
          </section>
   
    <section id="projects">
      <h1 class="title">Projects</h1>
      <div class="experience-details-container">
        <div class="about-containers">

          <div class="details-container color-container">
            <div class="article-container">
              <img src="./assets/robot1.jpg" alt="Project 1" class="project-img"/>
            </div>
            <h2 class="experience-sub-title project-title">Autonomous Robot</h2>
            <div class="btn-container">
            <button class="btn btn-color-2 project-btn" onclick="window.open('https://github.com/JaHern03/Autonomous-Robot', '_blank')">Github</button>
              </button>
            </div>
          </div>


          <div class="details-container color-container">
            <div class="article-container">
              <img src="./assets/dpc.jpg" alt="Project 2" class="project-img"/>
            </div>
            <h2 class="experience-sub-title project-title">Automated Dog Feeder</h2>
            <div class="btn-container">
            <button class="btn btn-color-2 project-btn" onclick="window.open('https://github.com/JaHern03/AutoDogFeed', '_blank')">Github</button>

            </div>
          </div>

          <div class="details-container color-container">
            <div class="article-container">
              <img src="./assets/month.PNG" alt="Project 3" class="project-img" />
            </div>
            <h2 class="experience-sub-title project-title">Monthly Sales Program</h2>
            <div class="btn-container">
            <button class="btn btn-color-2 project-btn" onclick="window.open('https://github.com/JaHern03/FiscalMonthSorter', '_blank')">Github</button>

              </button>
            </div>
          </div>


    </section>

    <section id="contact">
      <h1 class="title">Contact Me</h1>

    

      <div class="contact-section">
        <div class="contact-info">
            <div><i class="ri-mail-fill"></i></i>jason1hernandez@outlook.com</div>
            <div><i class="ri-phone-fill"></i>+1 (510) 334 - 8852</div>
            <div><i class="ri-map-pin-5-fill"></i>San Leandro, California</div>
        </div>
        <div class="contact-form">
          <h2> </h2>
          <form class="contact1" action="" method="post">
            <input type="text" name="name" class="text-box" placeholder="Your Name" required>
            <input type="email" name="email" class="text-box" placeholder="Your Email" required>
            <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
            <input type="submit" name="submit" class="send-btn" value="send">
          </form>
          </div>
      </div>
    </section>

    <footer>
      <p>Copyright &#169; 2023 Jason Hernandez. All Rights Reserved.</p>
      <p>Phone: 510 334 8852</p>
    </footer>

    <script type="text/javascript" src="java1.js"></script>
    <script type="text/javascript">
      if(window.historyState){
        window.historyState(null, null, window.location.href);
      }
      </script>
</body>
</html>