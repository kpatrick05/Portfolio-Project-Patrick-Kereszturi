/*!
* Start Bootstrap - Freelancer v7.0.3 (https://startbootstrap.com/theme/freelancer)
* Copyright 2013-2021 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-freelancer/blob/master/LICENSE)
*/
//
// Scripts
// 

window.addEventListener('DOMContentLoaded', event => {

    // Navbar shrink function
    var navbarShrink = function () {
        const navbarCollapsible = document.body.querySelector('#mainNav');
        if (!navbarCollapsible) {
            return;
        }
        if (window.scrollY === 0) {
            navbarCollapsible.classList.remove('navbar-shrink')
        } else {
            navbarCollapsible.classList.add('navbar-shrink')
        }

    };

    // Shrink the navbar 
    navbarShrink();

    // Shrink the navbar when page is scrolled
    document.addEventListener('scroll', navbarShrink);

    // Activate Bootstrap scrollspy on the main nav element
    const mainNav = document.body.querySelector('#mainNav');
    if (mainNav) {
        new bootstrap.ScrollSpy(document.body, {
            target: '#mainNav',
            offset: 72,
        });
    };

    // Collapse responsive navbar when toggler is visible
    const navbarToggler = document.body.querySelector('.navbar-toggler');
    const responsiveNavItems = [].slice.call(
        document.querySelectorAll('#navbarResponsive .nav-link')
    );
    responsiveNavItems.map(function (responsiveNavItem) {
        responsiveNavItem.addEventListener('click', () => {
            if (window.getComputedStyle(navbarToggler).display !== 'none') {
                navbarToggler.click();
            }
        });
    });

});


    //Taking data from JSON

    let myData = JSON.parse(projects);
    console.log(myData);
    var text = "";


    text +=`<div class="row m-2 p-2">`
    for(let val of myData) {
        text += `
        
        <div class=" mb-3 col col-12 col-sm-12 col-md-6 col-lg-6 d-flex align-items-stretch mb-5">
          <div  class="shadow">
  <img  object-fit: cover;" src="${val.img}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">${val.projectName}</h5>
    <p class="card-text">${val.description}</p>
    <p class="card-text">Technologies: ${val.technologies}</p>
   <div style="margin-top: 5px;" class="d-flex justify-content-around"><a style="height:20px"  href="${val.githubLink}"> <i style="font-size:24px; color:black;" class="fab fa-github"></i></a>
    <a style="height:20px"  href="${val.link}"> <i style="color: black; font-size:20px"; class="fas fa-globe"></i></a>
    </div> 
    </div>
</div> 
        </div>
        `
        
        
        }
        text +=`</div>`
        document.getElementById("result").innerHTML += text;

