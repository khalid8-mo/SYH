<DOCTYPE html>
<html>
<head>
    <title>SHAKE YOUR HEAD</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>    
<body>
        <header id="header">
            <div class="timex-logo">
                <img id="header-img"src="https://st2.depositphotos.com/1384048/12364/v/950/depositphotos_123645440-stock-illustration-mans-head-with-light-bulb.jpg"  alt="logo">
            </div>
        <nav id="nav-bar">
            <ul>
                <li><a class="nav-link" href="#ourbrand">All courses</a>
                    </li>
                    <li><a class="nav-link" href="#features">Front-End</a>
                    </li>
                    <li><a class="nav-link" href="#products">Back-End</a>
                </li>
               <?php 
session_start();

                  include('db.php');
               if($_SESSION['username'] == ""){
                ?>
               <li><a class="nav-link" href="log.php">Login</a>
                </li>
                <?php
               }else{
                ?>
                  <li><a class="nav-link" href="logout.php">log out</a>
                </li>
              <?php
               }
               ?>
               
                 
            </ul>
        </nav>
        </header>
<div class="main">
           <div class="litlemain"> 
               <div class="cintainer">
        <section class="form">
            <h3 class="register">REGISTER TO OUR NEWSLETTER</h3>
            
            <input name="email" id="email" type="email" placeholder="Enter your email adress" required>
            <input id="submit" type="submit" value="Subscribe">
            </form>
        </section>
    </div>
        <div>
            <section id="ourbrand">
                <h3>OUR BRAND</h3>
                <div class="iframe-container">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/TdqQqyc7pfU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>          
                
            </section>
            <section id="features">
                <h3>Small notice</h3>
                    <p>Our platform are made with the best sources to ensure the best education.</p>
                <h3></h3>
                    <p>we also provide ahigh quality private lessons but with very low price </p>
                <h3>SYH</h3>
                    <p>Shake Your Head All your interests to become full stuck web devloper in one platform</p>
            </section>
            <section id="products">
                <div class="flex-container">
                    <div class="watch">
                        <img id="cheap" src="http://d1jnx9ba8s6j9r.cloudfront.net/blog/wp-content/uploads/2019/06/What-is-HTML.jpg">
                        <p>Hypertext Markup Language, a standardized system for tagging text files to achieve font, color, graphic, and hyperlink effects on World Wide Web pages.</p>
                        <h4>read more</h4>
                    </div>
                    <div class="watch">
                        <img src="https://content.techgig.com/photo/77717392/heres-why-php-is-still-popular-in-2020.jpg?333292">
                        <p> An extremely popular scripting language that is used to create dynamic Web pages. Combining syntax from the C, Java and Perl languages, PHP code is embedded within HTML pages for server side execution..</p>
                        <h4>read more</h4>
                    </div>
                    <div class="watch">
                        <img src="https://facemweb.com/wp-content/uploads/bfi_thumb/CSS-38j71laiobxozqyu9nzhu2.jpg">
                 
                     <p>Cascading Style Sheets (CSS) is a style sheet language used for describing the presentation of a document written in a markup language such as HTML..</p>
                     
                     <h4>read more</h4>
                    </div>
                </div>
            </section>
        </div>
  </div>
</div>
    <footer id="footer">

        <div class="about-us">
            
            
            <div class="footer-container-box">
            <div class="footer-column-1">
            <h3 class="footer-title">Important Links</h3>
            <ul>
            <li><a href="#" class="footer-links">About us</a></li>
            <li><a href="#" class="footer-links">Store Location</a></li>
            <li><a href="#" class="footer-links">Categories</a></li>
            </ul>
            </div>
            <div class="footer-column-2">
            <h3 class="footer-title">Check this out</h3>
            <ul>
            <li><a href="#" class="footer-links">Contact us</a></li>
            <li><a href="#" class="footer-links">FAQ</a></li>
            <li><a href="#" class="footer-links">Privacy Policy</a></li>
            </ul>
            </div>
            </div>
            
        <p>&copy;2022 ahmed kamal</p>
        
    </footer>
</body>    
</html>
 
