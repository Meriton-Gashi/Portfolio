<!DOCTYPE html>
<html>
    <head>
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <link rel="shortcut icon" href="../images/Iconslogo/rsz_logo_1-150x150.png" />
        <link href="../css/resume.css" type="text/css" rel="stylesheet">
        <link href="../css/style.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Audiowide|Baloo+Tamma|Kelly+Slab|Neucha|Righteous&display=swap" rel="stylesheet">
    <style>
        .toggle{
            height: 0px;
        }
        @media only screen and (max-width: 800px){
            .toggle{
                height: 50px;
            }
        }
    </style>
    </head>
    <body>
        <div class="toggle">
            <span style="font-size:40px;cursor:pointer;margin-left: 10px;" onclick="openNav()" id="open">&#9776; </span>
        </div>
       <div id="myNav" class="navbar" style="background-color: rgba(0,0,0,0.9);">
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()" id="close">&times;</a>
          <div class="navbar-content">
            <a href="home.php">Home</a>
            <a href="resume.php" id="active">CV</a>
            <a href="contact.php">Contact</a>
          </div>
        </div>
        <div class="top-part">
            <div class="back-part">
            <div class="sign">
               <img src="../images/Iconslogo/sign1.png">
            </div>
            <div class="social-icons">
               <a href="https://www.facebook.com/" target="_blank"><img src="../images/Iconslogo/facebook-32.png"></a>
               
               <a href="https://twitter.com/" target="_blank"><img src="../images/Iconslogo/twitter-32.png"></a>
               
               <a href="https://www.instagram.com/meriton.gashii1/" target="_blank"><img src="../images/Iconslogo/instagram-32.png"></a>
               
               <a href="https://github.com/Meriton-Gashi" target="_blank"><img src="../images/Iconslogo/github-32.png"></a>
            
            </div>
            <div class="down-button">
                <a href="">
                    <button class="btn-dwn" type="button" onclick="confirmDownload()">Download CV<i class="fa fa-download" id="dwn-icon"></i></button>
                </a>
            </div>
        </div>
        <div class="per-img"></div>
        </div>
        <div class="main-part">
            <h2>Meriton Gashi</h2>
            <div class="cv-area">
               <div class="fieldset-cover">
                   <fieldset>
                  <legend>Personal Detail</legend>
                   <div class="per-detail">
                   <table class="tb-left">
                       <tr>
                           <th>Name </th>
                           <td> : </td>
                           <td>Meriton Gashi</td>
                       </tr>
                       <tr>
                           <th>Address </th>
                           <td> : </td>
                           <td>Podujeve</td>
                           
                       </tr>
                       <tr>
                           <th>Gender </th>
                           <td> : </td>
                           <td>Male</td>
                           
                       </tr>
                       <tr>
                           <th>Contact</th>
                           <td> : </td>
                           <td>0453681775</td>
                           
                       </tr>
                   </table>
                   <table class="tb-right">
                       <tr>
                           <th> Age </th>
                           <th> : </th>
                           <td>22</td>
                       </tr>
                       <tr>
                           <th> Experience </th>
                           <td> : </td>
                           <td>2</td>
                       </tr>
                       <tr>
                           <th> Email </th>
                           <td> : </td>
                           <td>meriton.gashii10@gmail.com</td>
                       </tr>
                       <tr>
                           <th> Language </th>
                           <td> : </td>
                           <td>Albania,English</td>
                       </tr>
                       <tr>
                           <th> GitHub </th>
                           <td> : </td>
                           <td>Meriton-Gashi</td>
                       </tr>
                   </table>
               </div>
               </fieldset>
               </div>
               <div class="fieldset-cover">
               <fieldset>
                   <legend>Education</legend>
                   <div class="edu-detail">
                       <table>
                          
                           <tr>
                               <th>UBT</th>
                               <td>:</td>
                               <td>Computer Science (Engineer System Software)</td>
                           </tr>
                           <tr>
                               <th>Probit Academy</th>
                               <td>:</td>
                               <td>Web Development</td>
                           </tr>
                       </table>
                   </div>
               </fieldset>
               </div>
               <div class="fieldset-cover">
                   <fieldset>
                   <legend>Work Experience</legend>
                   <div class="work-detail">
                       <table class="tbl-work">
                           <tr>
                               <th>I am currently a student and I managed to get good knowledge in web developer and I want to apply for the Web Developer(PHP)position. Until now, I have not worked in any company, but I have worked in many school projects and in the courses where I participated, now I want to start a job (practice).</th>
                           </tr>
                       </table>
                   </div>
               </fieldset>
               </div>
                <div class="skill-section" id="skill-section">
                   <h2>My Skills & Abilities</h2>
                    <div class="skill-part">
                    <div class="prgm-skill">
                    <h2>Programming</h2>
                        <p>Java</p>
                        <div class="container-skill">
                          <div class="skills java">50%</div>
                        </div>
                        <p>Javascript</p>
                        <div class="container-skill">
                          <div class="skills js">60%</div>
                        </div>
                        <p>PHP</p>
                        <div class="container-skill">
                          <div class="skills php">85%</div>
                        </div>
                        <p>MySQL</p>
                        <div class="container-skill">
                          <div class="skills sql">80%</div>
                        </div>
                    </div>
                    
                    <div class="design-skill">
                       <h2>Designing</h2>
                        <p>HTML</p>
                        <div class="container-skill">
                          <div class="skills html">90%</div>
                        </div>
                        <p>CSS</p>
                        <div class="container-skill">
                          <div class="skills css">90%</div>
                        </div>
                        <p>Bootstrap</p>
                        <div class="container-skill">
                          <div class="skills bootstrap">70%</div>
                        </div>
                        
                    </div>
                </div>
                </div> 
            </div>
        </div>
        <!--Copyright Information-->
        <div class="copyright">
            <p>&copy; 2022 <a href="#">Meriton Gashi</a></p>
        </div>
        <script>
            function confirmDownload(){
                alert("Download is preparing & will begin shortly...");
            }
        </script>
        <script src="../js/main.js" type="text/javascript"></script>
    </body>
</html>
