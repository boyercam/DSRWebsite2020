<div id="sitepartHeader" class="desktopAspect">
    <div>
        <div>
            <a href="/"><img src="resources/images/logo.svg" alt="Drystone Radio Logo"></a>
        </div>
        <div></div>
        <div id="navContainer">
            <ul>
                <li>
                    <a href="#">
                    <i class="fas fa-broadcast-tower"></i>
                        <p>On Air</p>
                    </a>
                    <ul>
                        <li>
                            <a href="schedule">
                                Schedule
                            </a>
                        </li>
                        <li>
                            <a href="on-demand">
                                On Demand
                            </a>
                        </li>
                        <li>
                            <a href="how-to-listen">
                                How To Listen
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-map-marker-alt"></i>
                        <p>Local</p>
                    </a>
                    <ul>
                        <li>
                            <a href="news">
                                News
                            </a>
                        </li>
                        <li>
                            <a href="travel">
                                Traffic and Travel
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-info-circle"></i>
                        <p>About</p>
                    </a>
                    <ul>
                        <li>
                            <a href="about-us">
                                About Drystone Radio
                            </a>
                        </li>
                        <li>
                            <a href="advertise">
                                Advertise
                            </a>
                        </li>
                        <li>
                            <a href="volunteer">
                                Volunteer
                            </a>
                        </li>
                        <li>
                            <a href="privacy-policy">
                                Privacy Policy
                            </a>
                        </li>
                    </ul>
                </li>
                <!--<li>
                    <a href="https://members.drystoneradio.com">
                        <i class="fas fa-id-card"></i>
                        <p>Members Area</p>
                    </a>
                </li>-->
                <li>
                    <a onclick="var myWindow=window.open('http://www2.drystoneradio.com/radioplayer','DrystoneLive', 'width=380,height=665,resizable=yes,scrollbars=no'); myWindow.focus();">
                        <i class="fas fa-play"></i>
                        <p>Listen Live</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<div id="sitepartMHeader" class="mobileAspect">
    <div>
        <div>
            <a href="/"><img src="resources/images/logo.svg" alt="Drystone Radio Logo"></a>
        </div>
        <div></div>
        <div id="navMButtons">
            <a onclick="var myWindow=window.open('http://www2.drystoneradio.com/radioplayer','DrystoneLive', 'width=380,height=665,resizable=yes,scrollbars=no'); myWindow.focus();" id="navMPlay">
                <i class="fas fa-play"></i>
            </a>
            <a id="navMHamburger"><i class="fas fa-bars"></i></a>
        </div>
    </div>
    <div id="navMContainer" class="collapseClose">
        <ul>
            <li class="hasDropDown">
                <a href="#">
                    <p>On Air</p>
                    <i class="fas fa-chevron-down"></i>
                </a>
                <ul>
                    <li>
                        <a href="schedule">
                            Schedule
                        </a>
                    </li>
                    <li>
                        <a href="on-demand">
                            On Demand
                        </a>
                    </li>
                    <li>
                        <a href="how-to-listen">
                            How To Listen
                        </a>
                    </li>
                </ul>
            </li>
            <li class="hasDropDown">
                <a href="#">
                    <p>Local</p>
                    <i class="fas fa-chevron-down"></i>
                </a>
                <ul>
                    <li>
                        <a href="news">
                            News
                        </a>
                    </li>
                    <li>
                        <a href="travel">
                            Traffic and Travel
                        </a>
                    </li>
                </ul>
            </li>
            <li class="hasDropDown">
                <a href="#">
                    <p>About</p>
                    <i class="fas fa-chevron-down"></i>
                </a>
                <ul>
                    <li>
                        <a href="about-us">
                            About Drystone Radio
                        </a>
                    </li>
                    <li>
                        <a href="advertise">
                            Advertise
                        </a>
                    </li>
                    <li>
                        <a href="volunteer">
                            Volunteer
                        </a>
                    </li>
                    <li>
                        <a href="privacy-policy">
                            Privacy Policy
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>

    <!-- Ugghh, an Inline script. I know -->
    <script>
        var navMMenu = {};

        navMMenu.toggleMenu = function (e){
            //alert("You tapped the burger");
            document.querySelector('#navMContainer').classList.toggle("collapseClose");
        }

        navMMenu.toggleDropdown = function (e){
            //alert("You tapped the dropdown item");
            //document.querySelector('#navMContainer').classList.toggle("collapseClose");
            console.log(e.currentTarget);
            //e.preventDefault();
            e.currentTarget.parentElement.querySelector('ul').classList.toggle("collapseOpen");
        }

        var hamburgerButton = document.querySelector('#navMHamburger');
        hamburgerButton.addEventListener('click', navMMenu.toggleMenu);

        var dropdowns = document.querySelectorAll("#navMContainer ul li.hasDropDown a")
        for (const dropdown of dropdowns) {
            dropdown.addEventListener('click', navMMenu.toggleDropdown)
        }
    </script>
</div>