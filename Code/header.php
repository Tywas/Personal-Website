<header>
    <nav class="site_header">            
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <svg viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg">
                <path d="M904 160H120c-4.4 0-8 3.6-8 8v64c0 4.4 3.6 8 8 8h784c4.4 0 8-3.6 8-8v-64c0-4.4-3.6-8-8-8zm0 624H120c-4.4 0-8 3.6-8 8v64c0 4.4 3.6 8 8 8h784c4.4 0 8-3.6 8-8v-64c0-4.4-3.6-8-8-8zm0-312H120c-4.4 0-8 3.6-8 8v64c0 4.4 3.6 8 8 8h784c4.4 0 8-3.6 8-8v-64c0-4.4-3.6-8-8-8z">
                </path>
            </svg>
        </label>

        <div class="header_content">
            <a href="/" id="website-name">Tyler Bowes</a>
            <ul>
                <li><a href="/"<?php if (isset($thisPage) && $thisPage=="index"){
                    echo " id=\"current-page\"";
                }?>>Home</a></li>
                <li><a href="/career.php"<?php if (isset($thisPage) && $thisPage=="career"){
                    echo " id=\"current-page\"";
                }?>>Career</a></li>
                <!-- <li><a href="./#contact-section"<?php #if (isset($thisPage) && $thisPage=="contact"){
                    # echo " id=\"current-page\"";
                #}?>>contact</a></li> -->
                <li class="dropdown"><a href="/digitial-portfolio.php" class="dropbtn" <?php if (isset($thisPage) && $thisPage=="digitial-portfolio"){
                    echo " id=\"current-page\"";
                }?>>Digitial Portfolio<svg class="dvmRw" viewBox="0 0 24 24" stroke="currentColor" jsname="HIH2V" focusable="false"><g transform="translate(9.7,12) rotate(45)"><path class="K4B8Y" d="M-4.2 0 L4.2 0" stroke-width="2"></path></g><g transform="translate(14.3,12) rotate(-45)"><path class="MrYMx" d="M-4.2 0 L4.2 0" stroke-width="2"></path></g></svg>
                    <div class="dropdown-content">
                        <a href="..\Pages\MTF_documentation.php" class="dropdown-links">MTF Tool</a>
                        <a href="..\Pages\Color-checker.php" class="dropdown-links">Link 2</a>
                        <a href="..\Pages\PDO-communication.php" class="dropdown-links">Link 3</a>
                    </div>
                </a></li>
            </ul>
        </div>
    </nav>
</header>