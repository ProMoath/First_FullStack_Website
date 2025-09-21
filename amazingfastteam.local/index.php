<!DOCTYPE html>
<html lang="en">
    <?php 
        require "connection.php";
    ?>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Amazing Fast Team</title>
        <link rel="icon" href="src/images/AFT_White.ico">
        <link rel="stylesheet" href="style.css?v=<?php echo filemtime('style.css'); ?>">
        <script src="script.js?v=<?php echo filemtime('script.js'); ?>"></script>

        <!-- Libraruies -->
        <link rel="stylesheet" href="src/lib/fontawsome.css">
        <script src="src/lib/fontawsome.js"></script>
    </head>

    <body id="home">
        <header>
            <nav>
                <ul class="sidebar">
                    <a onclick="hidesidebar()" href=""><i class="fa-solid fa-xmark icon-hover"></i></a>
                    <li><a href="#home"><i class="fa-solid fa-house"></i> HOME</a></li>
                    <li><a href="#about"><i class="fa-solid fa-user-group"></i> ABOUT</a></li>
                    <li><a href="#game"><i class="fa-solid fa-gamepad"></i> GAME</a></li>
                    <li><a href="#contact"><i class="fa-solid fa-envelope"></i> CONTACT</a></li>
                </ul>
               
                <ul>
                    <li ><a class="non_mobile" /*style="display:contents;"*/ href="#home"><i class="fa-solid fa-house"></i> HOME</a></li>
                    <li ><a class="non_mobile" href="#about"><i class="fa-solid fa-user-group"></i> ABOUT</a></li>
                    <li ><a class="non_mobile" href="#game"><i class="fa-solid fa-gamepad"></i> GAME</a></li>
                    <li ><a class="non_mobile" href="#contact"><i class="fa-solid fa-envelope"></i> CONTACT</a></li>
                </ul>
                <a href="#" id="search"><i class="fa-solid fa-magnifying-glass"></i></a>
                <a onclick="showsidebar()" href="#" id="menu"><i class="fa-solid fa-bars icon-hover"></i></a>
            </nav>
            <div class="hero">
                <h1>WELCOME TO <span class="non-mobile">AMAZING FAST TEAM</span><span class="mobile">AFT</span></h1>
            </div>
        </header>
        <div class="body">
            <section id="about">
                <div class="margin-top-64">
                    <h2><i class="fa-solid fa-user-group"></i> ABOUT US</h2>
                    <p><em>We are an ambitious team</em></p>
                    <p class="justify">
                        &emsp;&emsp;We have created a fictional "studio" website, and our fictional studio is a video game studio. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                </div>
                <div class="team">
                    <div class="margin-right-32">
                        <h3><i class="fa-solid fa-user-group"></i> Amazing Fast Team</h3>
                        <img src="src/images/team.png" alt="">
                    </div>
                    <p class="justify">
                        &emsp;&emsp;Welcome to our website. We are lorem ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                </div>
                <div class="skills margin-top-64">
                    <?php 
                        $skills = selectAll("skill");
                    ?>
                    <h3>We are really good at</h3>
                    <div>
                        <p><i class="fa-solid fa-laptop"></i> Game Program</p>
                        <div class="bar">
                            <div style="width: <?=$skills[0]['precentage'] ?>%;"><span><?=$skills[0]['precentage']?>%</span></div>
                        </div>
                    </div>
                    <div>
                        <p><i class="fa-solid fa-object-group"></i> Game Design</p>
                        <div class="bar">
                            <div style="width: <?=$skills[1]['precentage']?>%;"><span><?=$skills[1]['precentage']?>%</span></div>
                        </div>
                    </div>
                    <div>
                        <p><i class="fa-solid fa-book"></i> Game Story</p>
                        <div class="bar">
                            <div style="width: <?=$skills[2]['precentage']?>%;"><span><?=$skills[2]['precentage']?>%</span></div>
                        </div>
                    </div>
                </div>
                <div class="margin-top-64 overview">
                    <div>
                        <p><span><?=countAll('partener', 'ID')?>+</span><br>Partners</p>
                    </div>
                    <div>
                        <p><span><?=countWhere('project', 'Is_Done')?>+</span><br>Projects Done</p>
                    </div>
                    <div>
                        <p><span><?=countWhere('clients', 'Is_Happy')?>+</span><br>Happy Clients</p>
                    </div>
                    <div>
                        <p><span><?=countAll('meeting')?>+</span><br>Meetings</p>
                    </div>
                </div>
            </section>
            <section id="game">
                <div class="hero">
                    <h1><i class="fa-solid fa-gamepad"></i> OUR GAMES</h1>
                </div>
                    <div class="margin-top-64">
                        <h2>OUR PROJECTS</h2>
                        <p>
                        <em>Here are some of our latest projects <br> Click on the images to make them bigger</em>
                    </p>
                </div>
                <div class="galary">
                    <?php 
                        $projects = selectAll("project");                        
                        foreach($projects as $project)
                        {
                    ?>
                            <img onclick="maxImage(this)" src="src/images/<?=$project['Image']?>" alt="<?=$project['Pro_Name']?>">
                    <?php
                        }
                    ?>
                </div>
                <button id="load">LOAD MORE</button>

                <!-- Full Size Image -->
                <div id="max-image" style="display:none">
                    <button onclick="closeImage()"><i class="fa-solid fa-xmark"></i></button>
                    <img src="src/images/game1.png" alt="">
                    <p>Test</p>
                </div>
            </section>
            <section id="contact">
                <div class="hero">
                    <h1><i class="fa-solid fa-envelope"></i> CONTACT US</h1>
                </div>
                <div class="margin-top-64">
                    <h2>WHERE IS OUR STUDIO?</h2>
                    <p><em>We'd love your feedback!</em></p>
                </div>
                <div class="location">
                    <div class="map"><img src="src/images/map.png" alt="Location"></div>
                    <div>
                        <p><i class="icon-hover fa-solid fa-location-dot"></i> Sana'a, Yemen</p>
                        <p><i class="icon-hover fa-solid fa-phone"></i> Phone: +967-776186698</p>
                        <p><i class="icon-hover fa-solid fa-at"></i> Email: amazingfast.network@gmail.com</p>
                    </div>
                </div>
                <?php
                    if($_SERVER['REQUEST_METHOD'] == 'POST')
                    {
                        require "validation.php";
                        $error = array();
                        if(!empty($_POST))
                        {
                            validate($error);
                            if(empty($error))
                            {
                                try{
                                    $statement = $connection->prepare(
                                        "INSERT INTO message (Name, Email, Text) VALUES (?, ?, ?)"
                                    );
                                    $statement->execute([$_POST['name'], $_POST['email'], $_POST['message']]);
                                    echo "<script>alert('Thank you for your feed :)')</script>";
                                }
                                catch(PDOException $e){
                                    echo "<script>alert('Error: {$e->getMessage()}')</script>";
                                }
                                echo "<script>window.location.hash = ''</script>";
                            }
                            else
                                echo "<script>window.location.hash = '#form'</script>";
                        }
                    }
                ?>
                <form id="form" action="" method="post">
                    <input type="text" name="name" id="name" placeholder="Name" >
                    <input type="email" name="email" id="email" placeholder="Email" >
                    <?php
                        if(!empty($error))
                        {
                    ?> 
                            <p><?=(empty($error['name'])? '' : $error['name'])?></p>
                            <p><?=(empty($error['email'])? '' : $error['email'])?></p>
                    <?php
                        }
                    ?>
                    <textarea name="message" id="message" rows="5" placeholder="Message"></textarea>
                    <button type="submit"><i class="fa-solid fa-paper-plane"></i> Send</button>
                </form>
            </section>
        </div>
        <footer class="margin-top-64">
            <div class="social-icon">
            <li><a href="https://api.whatsapp.com/send/?phone=+967776186698" class="whatsup"><i class="fa-brands fa-whatsapp"></i></a></li>
            <li><a class="facebook" href=""><i class="fa-brands fa-facebook"></i></a></li>
            <li><a href="" class="instagram"><i class="fa-brands fa-instagram"></i></a></li>
            <li><a href="" class="snapchat"><i class="fa-brands fa-snapchat"></i></a></li>
            <li><a href="" class="linkedin"><i class="fa-brands fa-linkedin"></i></a></li>
            <li><a class="pinterest" href=""><i class="fa-brands fa-pinterest"></i></a></li>
            <li><a href="" class="twitter"><i class="fa-brands fa-twitter"></i></a></li>
        </div>
            <p>All Copyright 2025 &copy; Designed by Moath Al-Shahari</p>
        </footer>
    </body>
</html>