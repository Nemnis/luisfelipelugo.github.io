// get current url location
const currentUrl = window.location.href;

// links in nav
const homeLink = document.getElementsByClassName("link-home")[0];
const collectorLink = document.getElementsByClassName("link-data-collector")[0];
const segInfLink = document.getElementsByClassName("link-seg-inf")[0];
const aboutMe = document.getElementsByClassName("link-about-me")[0];


// debug current location
//console.log(currentUrl);

/*switch (currentUrl) {
    case 'http://localhost/portfolio-web/':
        homeLink.classList.add('active');
        break;
    
    case 'http://localhost/portfolio-web/collector.php':
        collectorLink.classList.add('active');
        break;

    case 'http://localhost/portfolio-web/temario.php':
        segInfLink.classList.add('active');
        break;

    case 'http://localhost/portfolio-web/aboutme.php':
        aboutMe.classList.add('active');
        break;
}*/

// Production
switch (currentUrl) {
    case 'https://luisfelipelugo.com/':
        homeLink.classList.add('active');
        break;
    
    case 'https://luisfelipelugo.com/collector.php':
        collectorLink.classList.add('active');
        break;

    case 'https://luisfelipelugo.com/temario.php':
        segInfLink.classList.add('active');
        break;

    case 'https://luisfelipelugo.com/aboutme.php':
        aboutMe.classList.add('active');
        break;
}