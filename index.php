<?php

if(isset($_POST['submit']))
{
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
        
        require "Mail/phpmailer/PHPMailerAutoload.php";
        
        $mail = new PHPMailer();  // create a new object

        //check smtp host error
        // $mail->SMTPOptions = array(
        //     'ssl' => array(
        //     'verify_peer' => false,
        //     'verify_peer_name' => false,
        //     'allow_self_signed' => true
        //     )
        //     );
            
        $mail->IsSMTP(); // enable SMTP
        // $mail->SMTPDebug = 2;  // debugging: 1 = errors and messages, 2 = messages only
        $mail->SMTPAuth = true;  // authentication enabled
        $mail->SMTPSecure = 'tls'; // secure transfer enabled REQUIRED for GMail
        $mail->SMTPAutoTLS = false;
        $mail->Host = 'smtp.gmail.com';
        $mail->Port = 587;

        $mail->Username='email';
        $mail->Password='password';

        $mail->setFrom('email', 'JB Portfolio Website');
        $mail->addAddress('email');

        $mail->isHTML(true);
        $mail->Subject="New Message from your portfolio website!";
        $mail->Body="
        <div style='border-top: 2px solid #3e83fb; display: flex; justify-content: center; flex-direction: column; align-items: center; padding: 8px; padding-left: 22px;'>
        <div>
        <img src='https://i.ibb.co/JFVvNGJ/logo.png' alt='logo' style='width:32%; margin-left: 35%;'>
        <h4>Name: $name</h4>
        <h4>Email: $email</h4>
        <h4>Message: $message</h4>
        </div>
        </div>
        ";

                if(!$mail->send()){
                    ?>
                        <script>
                            alert("<?php echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}"?>");
                        </script>
                    <?php
               }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="/img/favicon.png">
    <title>Joecel Bombita | Portfolio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- navbar start -->
    <header id="header">
    <div class="navbar" id="navbar">
            <img class="logo" src="img/logo.png" alt="logo">
        <ul class="links" id="navlinks">
            <li><a class="menulink active" href="#home">Home</a></li>
            <li><a class="menulink" href="#about">About</a></li>
            <li><a class="menulink" href="#projects">Projects</a></li>
            <li><a class="menulink" href="#contact">Contact</a></li>
        </ul>

        <label class="switch">
                <input type="checkbox" id="dmswitch">
                <span class="slider round"></span>
              </label>

        <!-- menu bar -->
        <div class="menu_bar" id="menu_bar">
            <i class="fa-solid fa-bars" id="x_btn"></i>
            <!-- Dropdown Menu for small devices -->
    <div class="dropdown_menu w3-animate-right" id="dropdown_menu">
        <div class="menu_items" id="mobilenavlinks">
            <li><a class="menulink active" href="#home">Home</a></li>
            <li><a class="menulink" href="#about">About</a></li>
            <li><a class="menulink" href="#projects">Projects</a></li>
            <li><a class="menulink" href="#contact">Contact</a></li>
    </div>
        </div>
        </div>
    </div>
    </header>
    <!-- navbar end -->

    <section data-bs-spy="scroll" data-bs-target="#navlinks" class="content" id="main-section">
        <!-- Home Section Start -->
        <div class="home" id="home">
           <div class="home_container" id="particles-js">
            <div class="home_content">
            <p class="hometext1">Hi! I'm <span>Joe</span></p>
            <p class="hometext2">I am passionate about creating marvelous websites. <br> I love turning web designs into websites.</p>
            <div class="home_button">
            <a href="Resume/Joecel-Bombita-Resume.pdf" target="_blank"><button>Resume&nbsp;<i class="fa-solid fa-file"></i></button></a>
            </div>
        </div>
            </div>
        </div>
        <!-- Home Section End -->

        <!-- About Section Start -->

        <div class="about" id="about">
        <div class="about_container scrollAnimation">
                <div class="aboutme">
                    <div class="aboutmeContent">
                    <h3>About <span>Me</span></h3>
                    <p>Hi! I'm Joecel Bombita, an aspiring web developer. I am a Bachelor of Science in Information Technology graduate who is looking for an opportunity where I can apply my web development skills while at the same time learning and keeping up with rapidly evolving technology.</p>
                    </div>
                </div>

            <div class="mySkills">
                  <h3>Tech and Skills</h3>
                <div class="techAndSkills">
                    <ul>
                        <li>
                        <img src="img/techAndSkillsIcon/html-5.png" alt="icon">
                            <p>HTML</p>
                        </li>
                        <li>
                        <img src="img/techAndSkillsIcon/css-3.png" alt="icon">
                            <p>CSS</p>
                        </li>
                        <li>
                        <img src="img/techAndSkillsIcon/bootstrap.png" alt="icon">
                            <p>Bootstrap</p>
                        </li>
                        <li>
                        <img src="img/techAndSkillsIcon/js.png" alt="icon">
                            <p>JavaScript</p>
                        </li>
                        <li>
                        <img src="img/techAndSkillsIcon/php.png" alt="icon">
                            <p>PHP</p>
                        </li>
                        <li>
                        <img src="img/techAndSkillsIcon/wordpress.png" alt="icon">
                            <p>WordPress</p>
                        </li>
                        <li>
                        <img src="img/techAndSkillsIcon/visual-studio.png" alt="icon">
                            <p>VSCode</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        </div>

        <!-- About Section End -->

                <!-- Projects Section Start -->
                <div class="projects" id="projects">
                    <h1>Projects</h1>
                    <hr class="myProjects_line" />
                    <p class="myprojectSub">These are the projects that I created using different tech and tools. I've built several responsive websites. Here are some of them.</p>

                    <div class="project_container scrollAnimation">
                        <div class="projectImg_Odd ignoredm_1">
                            <img src="img/portfolioSS.png" class="d-block w-100" alt="...">
                        </div>

                        <div class="project_description">
                            <h2>Personal Website</h2>
                            <p>This is my portfolio website. This project was created using HTML for website structure, CSS and Bootstrap for styling, JavaScript for functions, and PHP <a class="weblink" href="https://github.com/PHPMailer/PHPMailer">[PHPMailer]</a> for sending messages via email. I built this website from scratch to practice my skills in web development.</p>

                            <div class="project-description-btn">
                                <a href="https://joebombita.infinityfreeapp.com/" target="_blank">
                                    <button>Visit Website <i class="fa-solid fa-up-right-from-square"></i></button>
                                </a>
                                <a href="https://github.com/joebombits/joebombitaPortfolio" target="_blank">
                                    <button>Source Code <i class="fa-brands fa-github"></i></button>
                                </a>
                            </div>
                        </div>
                    </div>


                    <div class="project_container scrollAnimation">
                        <div class="projectImg_Even ignoredm_2">
                            <img src="img/sipandblissss.png" class="d-block w-100" alt="...">
                        </div>

                        <div class="project_description">
                            <h2>Sip And Bliss | E-Commerce Website</h2>
                            <p>I've always wanted to design and create an E-Commerce website. This time I designed a website called "Sip and Bliss". It is an e-commerce website where you can buy and order your favorite milk tea online. This website was designed and developed using WordPress, HTML/CSS, Canva, and Photoshop.</p>

                            <div class="project-description-btn">
                                <a href="https://joebombita.infinityfreeapp.com/sab/" target="_blank">
                                    <button>Visit Website <i class="fa-solid fa-up-right-from-square"></i></button>
                                </a>
                                <a href="https://www.docfly.com/files/tqjlxsd71l-150e5d9c" target="_blank">
                                    <button>View Design <i class="fas fa-paperclip"></i></button>
                                </a>
                            </div>
                        </div>
                    </div>


                    <div class="project_container scrollAnimation">
                        <div class="projectImg_Odd ignoredm_3">
                            <img src="img/luxuryhotelss.png" class="d-block w-100" alt="...">
                        </div>

                        <div class="project_description">
                            <h2>Hotel Luxury | Website</h2>
                            <p>I built this website using WordPress, HTML/CSS and Figma web design by <a class="weblink" href="https://www.figma.com/@ayokunle">Ayokunle.</a> The Hotel Luxury website is an informative website where you can view the details, contacts, and other information about the hotel online.</p>

                            <div class="project-description-btn">
                                <a href="https://luxuryhotelweb.infinityfreeapp.com/" target="_blank">
                                    <button>Visit Website <i class="fa-solid fa-up-right-from-square"></i></button>
                                </a>
                                <a href="https://www.figma.com/community/file/886138994287878976/Hotel-Website-Design" target="_blank">
                                    <button>View Design <i class="fa-brands fa-figma"></i></button>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- other projects -->
                    <h1>Other Projects</h1>
                    <hr class="myProjects_line" />
                    <div class="other_projects_container">

                        <div class="other_project">
                            <div class="image cm-image ignoredm_4">
                                <p><span class=other-project-description>To enhance my skills for creating responsive websites, I built this project by following the design on <a class="weblink" href="https://www.freepik.com/free-psd/landing-page-template-design-newsletter_13810234.htm#query=landing%20page%20website&position=4&from_view=search&track=ais#page=1&query=l&from_query=undefined&position=0&from_view=search&track=ais">Freepik.</a> This project was built using HTML|CSS and JavaScript.</span></p>
                            </div>
                            
                            <div class="other_project_description">
                            <h2>Creative Marketing</h2>
                            <div>
                                <a href="https://creative-marketing.infinityfreeapp.com/" target="_blank"><i class="fa-solid fa-up-right-from-square"></i></a>
                                <a href="https://github.com/joebombits/Creative-Marketing-Landing-Page" target="_blank"><i class="fa-brands fa-github"></i></a>
                            </div>
                            </div>
                        </div>


                        <div class="other_project">
                            <div class="image res-image ignoredm_5">
                                <p><span class=other-project-description>I built this project using WordPress, HTML/CSS, and Figma Web Design by <a class="weblink" href="https://www.figma.com/@kwekuseydesign">Isaac.</a> Restaurant website is a one-page website that contains essential information about the Restaurant.</span></p>
                            </div>
                            <div class="other_project_description">
                            <h2>Restaurant Website</h2>
                            <div>
                                <a href="https://joebombita.infinityfreeapp.com/Restaurant/" target="_blank"><i class="fa-solid fa-up-right-from-square"></i></a>
                                <a href="https://www.figma.com/community/file/1173601241909576521/Restaurant-website-Landing-Page-Design" target="_blank"><i class="fa-brands fa-figma"></i></a>
                            </div>
                            </div>
                        </div>


                        <div class="other_project">
                            <div class="image fblite-img ignoredm_6">
                                <p><span class=other-project-description>This project was created using HTML, CSS, and PHP. A Facebook Lite clone was developed while I was taking an HMTL/CSS course on an online platform <a class="weblink" href="https://www.sololearn.com/">[SoloLearn]</a> to apply my learning from the course.</span></p>
                            </div>
                            <div class="other_project_description">
                               <h2>FB Lite | Clone</h2>
                              <div>
                                <a href="http://fbliteclone.infinityfreeapp.com/" target="_blank"><i class="fa-solid fa-up-right-from-square"></i></a>
                                <a href="https://github.com/joebombits/facebookliteclone" target="_blank"><i class="fa-brands fa-github"></i></a>
                              </div>
                            </div>
                        </div>

                    </div>
                </div>
                
                <!-- Projects Section End -->



        <!-- contacts Section Start -->
        <div class="contact" id="contact">
        <div class="contact_container scrollAnimation">
            <div class="contact_git">
                <div class="cleft_content">
                    <h2>Send me a message</h2>
                    <p>Feel free to message me anytime.</p>
                    <form action="" method="post">
                    <input type="text" name="name" id="name" placeholder="Name" required>
                    <input type="email" name="email" id="email" placeholder="Email" required>
                    <textarea name="message" id="message" cols="100" rows="1" placeholder="Your message"></textarea>
                    <button class="cbtn btn" type="submit" name="submit">Send Message  <i class="fa-solid fa-paper-plane"></i> </button>
                    </form>
                </div>
                </div>
                <div class="contact_info dmw">
                    <div class="cright_content">
                    <h2>Contact Info</h2>
                    <hr class="contactInfo_line" />
                    <div class="cDetails">
                        <i class="fa-solid fa-envelope"><span><a href="https://mail.google.com/mail/u/0/?fs=1&to=bombitajowzel@mail.com&su=&tf=cm">bombitajowzel@gmail.com</a></span></i>
                    </div>
                    <div class="cDetails">
                        <i class="fa-brands fa-facebook-messenger"><span><a href="https://m.me/joebombits17">Messenger</a></span></i>
                    </div>
                    <h3>Social</h3>
                    <div class="social_icons dmw">
                        <hr class="social_line" />
                        <a href="https://facebook.com/joebombits17" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                        <a href="https://www.linkedin.com/in/joecel-bombita-900374243" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                        <a href="https://github.com/joebombits" target="_blank"><i class="fa-brands fa-github"></i></a>
                    </div>

                    <div class="contact_img">
                        <img src="img/contact_img.png" alt="contact_image">
                    </div>

                    </div>
                </div>
            </div>
        </div>
        
        <!-- Modal -->
        <div class='modal fade' id='messagesendPopup' tabindex='-1' aria-hidden='true'>
                      <div class='modal-dialog'>
                        <div class='modal-content'>
                          <div class='modal-body'>
                            <p>Your message has been sent! Please wait for my response thanks!</p>
                          </div>
                          <div class='modal-footer'>
                          <button type='button' class='btn btn-primary' data-bs-dismiss='modal'>Okay</button>
                          </div>
                        </div>
                      </div>
                    </div>
        <!-- modal end -->
        <!-- contacts Section End -->

        <!-- footer -->
        <div class="footer">
            <p>© 2023 Designed & Developed By Joecel Bombita</p>
        </div>
        <!-- footer -->
    </section>

    <script src="script.js"></script>
    <script src="particles.js"></script>
    <script src="app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
</body>
</html>