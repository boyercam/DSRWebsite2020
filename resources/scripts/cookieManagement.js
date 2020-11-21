var Cookie = {};

var consentElement = "<div id=\"cookie-modal\" style=\"position:fixed;top:0px;width:100%;height:100%;background-color:rgba(0, 0, 0, 0.7);display: flex;justify-content: center;align-items: center;\">\
<div style=\"background-color:white;max-width:1100px;padding:20px;\"><h1>Drystone Radio uses cookies</h1>\
<p>This website makes use of cookies to improve your experience and supply you with relevant advertising around the web. \
We need to ask for your consent to use these cookies. You can read our <a href=\"#\">Privacy Policy here.</a>\
<br>\
<br>You can always change your cookie preferences by clicking on the cookie icon on the bottom right of your screen.</p>\
<div id=\"cookieOptIn\" onclick=\"Cookie.optIn();\" style=\"background-color:var(--colour-drystone-blue);color:white;padding:10px;cursor:pointer;margin-bottom:10px;\">Agree to the use of Cookies</div>\
<div id=\"cookieOptOut\" onclick=\"Cookie.optOut();\" style=\"border:solid 1px var(--colour-drystone-blue);color:var(--colour-drystone-blue);padding:10px;cursor:pointer;\">Don't use cookies during this session</div></div></div>";

var consentUpdateElement = "<div id=\"cookie-settings-button\" onclick=\"Cookie.askConsent(1,1);\" style=\"cursor:pointer;position:fixed;bottom:5px;right:5px;background-color:white;padding:5px;\"><img src=\"resources/images/CookieSettingsIcon.jpg\"></div>";

Cookie.hasResponded = function() {
    var cookieValue = Cookie.getValue("cookiesConsented");
    console.log("CVal: "+cookieValue)
    return cookieValue;
}

Cookie.getValue = function(name){
    const value = `; ${document.cookie}`;
    const parts = value.split(`; ${name}=`);
    if (parts.length === 2) return parts.pop().split(';').shift();
}

Cookie.askConsent = function(override,reconsent){
    //See if cookiesConsent is set
    var currentCookieValue = Cookie.hasResponded();
    if (currentCookieValue==undefined||override==1){
        //User has not previously responded. Ask for consent
        console.log("Coookies: No preference set")
        Cookie.deleteCookies();
        document.body.insertAdjacentHTML( 'beforeend', consentElement );
    }
    if (currentCookieValue==0){
        console.log("Coookies: Previously opted out")
        Cookie.drawSettingsButton();
        Cookie.deleteCookies();
    }
    if (currentCookieValue==1){
        //Cookies are accepted
        console.log("Coookies: Previously opted in")
        Cookie.drawSettingsButton();
    }
    if(reconsent==1){
        console.log("Re-consenting")
        //document.querySelector('#cookie-settings-button').remove();
    }
}

Cookie.deleteCookies = function(){
    //Cookies need to be deleted as they have either been rejected OR the user hasn't responded.
    //document.cookie = 'analyticsOptOut=1; max-age=31536000; path=/;';// domain=.drystoneradio.com';
    var cookies = ['__utma', '__utmb', '__utmz', '__utmc', '__utmt', '__utmv', '__utmt_b', '_gat', '_gat_allSites', '_ga', '_gid', '_fbp', 'cid', 'rsi_segs'];
    cookies.forEach(function(cookie) {
        //See if the cookie exists or not. We don't want to add cookies to the page
        if(Cookie.getValue(cookie)!=undefined){
            document.cookie = cookie + '=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/ domain=.drystoneradio.com'; <--Be Sure to Uncomment this line!
        }else{
            console.log("Cookie "+cookie+" undefined")
        }    
    });
    console.log("Cookies deleted");
}

Cookie.optOut = function(){
    //Opt out for 24hrs
    document.cookie = 'cookiesConsented=0; max-age=86400; path=/ domain=.drystoneradio.com';
    document.querySelector('#cookie-modal').remove();
    Cookie.deleteCookies();
    Cookie.drawSettingsButton();
    console.log("Cookies have been opted out")
}

Cookie.optIn = function(){
    console.log("Cookies have been opted in")
    //Opt in for 30 days
    document.cookie = 'cookiesConsented=1; max-age=2592000; path=/ domain=.drystoneradio.com';
    document.querySelector('#cookie-modal').remove();
    //Reload the page to allow cookies
    location.reload();
}

Cookie.drawSettingsButton = function (){
    //Check if the settings button already exists. If not draw it
    if(document.querySelector('#cookie-settings-button')==undefined){
        //Draw
        document.body.insertAdjacentHTML( 'beforeend', consentUpdateElement );
    }else{
        console.log("Cookie Settings Button Already Exists")
    }
}

window.addEventListener('load',Cookie.askConsent,false); //W3C

//Can't add an event listener if the element doesn't exist
//var optInButton = document.querySelector('#cookieOptIn');
//optInButton.addEventListener('click', Cookie.optIn);