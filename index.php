<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>My Portfolio</title>
  <link rel="icon" href="assets/logo.png" type="" />

  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="mediaqueries.css" />

</head>
</head>

<body>

  <nav id="desktop-nav">
    <div class="logo">Prajwol Rajbansi</div>
    <div>
      <ul class="nav-links">
        <li><a href="#about">About</a></li>
        <li><a href="#experience">Experience</a></li>
        <li><a href="#projects">Projects</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </div>
  </nav>
  <nav id="hamburger-nav">
    <div class="logo">Prajwol Rajbansi</div>
    <div class="hamburger-menu">
      <div class="hamburger-icon" onclick="toggleMenu()">
        <span></span>
        <span></span>
        <span></span>
      </div>
      <div class="menu-links">
        <li><a href="#about" onclick="toggleMenu()">About</a></li>
        <li><a href="#experience" onclick="toggleMenu()">Experience</a></li>
        <li><a href="#projects" onclick="toggleMenu()">Projects</a></li>
        <li><a href="#contact" onclick="toggleMenu()">Contact</a></li>
      </div>
    </div>
  </nav>
  <section id="profile">
    <div class="section__pic-container">
      <img class="img" src="./assets/profile-pic.png" alt="Prajwol Rajbansi's profile picture" />
    </div>
    <div class="section__text">
      <p class="section__text__p1">Hey there, I'm</p>
      <h5 class="title">Prajwol Rajbansi</h5>
      <p class="section__text__p2">Web Developer</p>
      <div class="btn-container">
        <button class="btn btn-color-2" onclick="window.open('./assets/PrajwolCV.pdf')">
          Download CV
        </button>
        <button class="btn btn-color-1" onclick="location.href='./#contact'">
          Contact Info
        </button>
      </div>
      <div id="socials-container">
        <a href="https://www.linkedin.com/in/prajwol-rajbansi-333k/" target="_blank" rel="noopener noreferrer">
          <img src="./assets/linkedin.png" alt="My LinkedIn profile" class="icon" />
        </a>

        <a href="https://www.linkedin.com/in/prajwol-rajbansi-333k/" target="_blank" rel="noopener noreferrer">
          <img src="./assets/github.png" alt="My LinkedIn profile" class="icon" />
        </a>

      </div>
    </div>
  </section>
  <section id="about">
    <p class="section__text__p1">Get To Know More</p>
    <h1 class="title">About Me</h1>
    <div class="section-container">
      <div class="section__pic-container">
        <img src="./assets/about-pic.jpg" alt="Profile picture" class="about-pic" />
      </div>
      <div class="about-details-container">
        <div class="about-containers">
          <div class="details-container">
            <img src="./assets/experience.png" alt="Experience icon" class="icon" />
            <h3>Experience</h3>
            <p>College Projects <br />
              Frontend Development</p>
          </div>
          <div class="details-container">
            <img src="./assets/education.png" alt="Education icon" class="icon" />
            <h3>Education</h3>
            <p>Bachelors(running) in Computer Application <br /></p>
          </div>
        </div>
        <div class="text-container">
          <p>
            As a BCA student at Sagarmatha College, I am passionate about using technology to address real-world issues.
            With a solid foundation in HTML, CSS, JavaScript, Python, Java, C, C#, and SQL, I've developed both
            front-end and back-end skills through various mini projects, enabling me to create dynamic web applications.
          </p>
        </div>
      </div>
    </div>
    <img src="./assets/arrow.png" alt="Arrow icon" class="icon arrow" onclick="location.href='./#experience'" />
  </section>
  <section id="experience">
    <p class="section__text__p1">Explore My</p>
    <h1 class="title">Experience</h1>
    <div class="experience-details-container">
      <div class="about-containers">
        <div class="details-container">
          <h2 class="experience-sub-title">Frontend Development</h2>
          <div class="article-container">
            <article>
              <img src="./assets/checkmark.png" alt="Experience icon" class="icon" />
              <div>
                <h3>HTML</h3>
                <p>Experienced</p>
              </div>
            </article>
            <article>
              <img src="./assets/checkmark.png" alt="Experience icon" class="icon" />
              <div>
                <h3>CSS</h3>
                <p>Experienced</p>
              </div>
            </article>
            <article>
              <img src="./assets/checkmark.png" alt="Experience icon" class="icon" />
              <div>
                <h3>SASS</h3>
                <p>Intermediate</p>
              </div>
            </article>
            <article>
              <img src="./assets/checkmark.png" alt="Experience icon" class="icon" />
              <div>
                <h3>JavaScript</h3>
                <p>Experienced</p>
              </div>
            </article>
            <article>
              <img src="./assets/checkmark.png" alt="Experience icon" class="icon" />
              <div>
                <h3>React</h3>
                <p>Intermediate</p>
              </div>
            </article>
            <article>
              <img src="./assets/checkmark.png" alt="Experience icon" class="icon" />
              <div>
                <h3>Material UI</h3>
                <p>Intermediate</p>
              </div>
            </article>
          </div>
        </div>
        <div class="details-container">
          <h2 class="experience-sub-title">Tools</h2>
          <div class="article-container">
            <article>
              <img src="./assets/checkmark.png" alt="Experience icon" class="icon" />
              <div>
                <h3>Git</h3>
                <p>Experienced</p>
              </div>
            </article>
            <article>
              <img src="./assets/checkmark.png" alt="Experience icon" class="icon" />
              <div>
                <h3>Figma</h3>
                <p>Experienced</p>
              </div>
            </article>
            <article>
              <img src="./assets/checkmark.png" alt="Experience icon" class="icon" />
              <div>
                <h3>MS Office</h3>
                <p>Experienced</p>
              </div>
            </article>
            <article>
              <img src="./assets/checkmark.png" alt="Experience icon" class="icon" />
              <div>
                <h3>Canva</h3>
                <p>Experienced</p>
              </div>
            </article>
          </div>
        </div>
      </div>
    </div>
    <img src="./assets/arrow.png" alt="Arrow icon" class="icon arrow" onclick="location.href='./#projects'" />
  </section>
  <section id="projects">
    <p class="section__text__p1">Browse My Recent</p>
    <h1 class="title">Projects</h1>
    <div class="experience-details-container">
      <div class="about-containers">
        <div class="details-container color-container">
          <div class="article-container">
            <img src="./assets/project-1.png" alt="Project 1" class="project-img" />
          </div>
          <h2 class="experience-sub-title project-title">Project One</h2>
          <div class="btn-container">
            <button class="btn btn-color-2 project-btn" onclick="location.href='https://github.com/'">
              Github
            </button>
            <button class="btn btn-color-2 project-btn" onclick="location.href='https://github.com/'">
              Live Demo
            </button>
          </div>
        </div>
        <div class="details-container color-container">
          <div class="article-container">
            <img src="./assets/project-2.png" alt="Project 2" class="project-img" />
          </div>
          <h2 class="experience-sub-title project-title">Project Two</h2>
          <div class="btn-container">
            <button class="btn btn-color-2 project-btn" onclick="location.href='https://github.com/'">
              Github
            </button>
            <button class="btn btn-color-2 project-btn" onclick="location.href='https://github.com/'">
              Live Demo
            </button>
          </div>
        </div>
        <div class="details-container color-container">
          <div class="article-container">
            <img src="./assets/project-3.png" alt="Project 3" class="project-img" />
          </div>
          <h2 class="experience-sub-title project-title">Project Three</h2>
          <div class="btn-container">
            <button class="btn btn-color-2 project-btn" onclick="location.href='https://github.com/'">
              Github
            </button>
            <button class="btn btn-color-2 project-btn" onclick="location.href='https://github.com/'">
              Live Demo
            </button>
          </div>
        </div>
      </div>
    </div>
    <img src="./assets/arrow.png" alt="Arrow icon" class="icon arrow" onclick="location.href='./#contact'" />
  </section>
  <section id="contact">

    <h1 class="title">Contact Me</h1>
    <div class="contact-info-upper-container">
      <div class="contact-info-container">
        <img src="./assets/email.png" alt="Email icon" class="icon contact-icon email-icon" />
        <p><a target="_blank" href="mailto:examplemail@gmail.com">rajbansiprajwol@gmail.com</a></p>
      </div>
      <div class="contact-info-container">
        <img src="./assets/linkedin.png" alt="LinkedIn icon" class="icon contact-icon" />
        <p><a target="_blank" href="https://www.linkedin.com/in/prajwol-rajbansi-333k/">Prajwol Rajbansi</a></p>
      </div>
      <div class="contact-info-container">
        <img src="./assets/phone.jpg" alt="LinkedIn icon" class="icon contact-icon" />
        <p><a>+977-9818600762</a></p>
      </div>
    </div>
    <div class="form">
      <h3 class="headingC">Leave a message</h3>
      <br>
      <form class="formC" action="submit.php" method="post">
        <label for="name">Your Name:</label>

        <input type="text" name="name" id="">

        <label for="email">Your Email:</label>

        <input type="email" name="email">

        <label for="phone">Phone Number:</label>

<input type="number" name="number">
        <label for="message">Your Message:</label>

        <textarea id="userMessage" name="userMessage" rows="2" cols="20"
          placeholder="Enter your message here"></textarea>
        <button style="padding: 10px; border: 1px solid green; border-radius: 5px; width: 100px; "
          type="submit">Submit</button>

      </form>
    </div>

  </section>

  <br>
  <hr>
  <br>


  <footer>
    <nav>
      <div class="nav-links-container">
        <ul class="nav-links">
          <li><a href="#about">About</a></li>
          <li><a href="#experience">Experience</a></li>
          <li><a href="#projects">Projects</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </div>
    </nav>
    <p>Copyright &#169; 2024 Prajwol Rajbansi. All Rights Reserved.</p>
  </footer>
  <script src="script.js"></script>
</body>

</html>