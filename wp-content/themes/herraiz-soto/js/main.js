"use strict"

/* scroll effects */
window.addEventListener("scroll",function(e){

    //header zoone
    const headerElm = document.querySelector('header');
    if(window.pageYOffset > 100) {
        
        headerElm.style.position = 'fixed';
        headerElm.style.top = 0;
        headerElm.style.zIndex = 1000;
        headerElm.style.background = 'white';
        headerElm.classList.add("animate__animated","animate__fadeInDown");


    } else {
        headerElm.style.position = 'relative';
        headerElm.classList.remove("animate__animated","animate__fadeInDown");
    }

    //white zone
    const whiteZoneLeft = document.querySelector('.white-zone__left > p');
    const whiteZoneRight = document.querySelectorAll('.white-zone__right p');
    
    if(window.pageYOffset > 500) {
        whiteZoneLeft.style.visibility = 'initial';
        whiteZoneLeft.classList.add("animate__animated","animate__fadeInDown");
    }
    if(window.pageYOffset > 50) {
        whiteZoneRight.forEach((e) => {
            e.style.visibility = 'initial';
            e.classList.add("animate__animated","animate__fadeInDown");
        });

    }

    //gray zone
    const grayZoneRight = document.querySelectorAll('.gray-zone__right p');
    const grayZoneH2 = document.querySelector('.gray-zone__right h2');
    const grayZoneBtn = document.querySelector('.gray-zone__btn');

    if(window.pageYOffset > 850) {
        grayZoneRight.forEach((e) => {
            e.style.visibility = 'initial';
            e.classList.add("animate__animated","animate__fadeInDown");
        });

        grayZoneH2.style.visibility = 'initial';
        grayZoneH2.classList.add("animate__animated","animate__fadeInDown");


    }
    if(window.pageYOffset > 1000) { 
        grayZoneBtn.style.visibility = 'initial';
        grayZoneBtn.classList.add("animate__animated","animate__fadeInUp");
    }


});

/* POP UP VIDEO */
const videoZone = document.querySelector('.video-zone');
videoZone.addEventListener('click', createPopUp);

function createPopUp(e) {

    const popUp = document.createElement("div");

    const newContent = document.createTextNode("");

    const closeBtn = document.createElement("div");
    const closeIcon = document.createTextNode("×");

    closeBtn.appendChild(closeIcon);

    closeBtn.classList.add("video-zone__close__btn");

    popUp.appendChild(newContent);
    popUp.appendChild(closeBtn);
    popUp.classList.add("video-zone__popup","animate__animated","animate__zoomin", "animate__faster");

    /* create video */
    const video = document.createElement('video');

    video.src = 'http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/BigBuckBunny.mp4';
    video.autoplay = true;
    video.classList.add("video-zone__popup__video");

    popUp.appendChild(video);

    document.body.appendChild(popUp);

    const noVideoZone = document.querySelector('.video-zone__close__btn');
    noVideoZone.addEventListener('click', closePopUp)

}

/* close pop up */
function closePopUp(){
    const video = document.querySelector(".video-zone__popup__video");
    video.pause();
    const popUp = document.querySelector('.video-zone__popup');
    popUp.classList.add("animate__animated","animate__zoomOut", "animate__faster");
    popUp.setAttribute('id', 'popupdiv');
    const popUpClear = document.getElementById('popupdiv');
    popUpClear.remove();
}

   /* Parallax effect */

    // init controller
    var controller = new ScrollMagic.Controller();

    // create a scene
    new ScrollMagic.Scene({
        triggerElement: ".gray-zone__left",
        duration: 150, // the scene should last for a scroll distance of 100px
        offset:11, // start this scene after scrolling for 50px
    })
        .setPin('.img__vaina') // pins the element for the the scene's duration
        .addTo(controller) // assign the scene to the controller

     // create a scene
     new ScrollMagic.Scene({
        triggerElement: ".gray-zone__left",
        duration: 200, // the scene should last for a scroll distance of 100px
        offset:50, // start this scene after scrolling for 50px
    })
        .setPin('.img__bamboo') // pins the element for the the scene's duration
        .addTo(controller) // assign the scene to the controller
        
    // create a scene
    new ScrollMagic.Scene({
        triggerElement: ".gray-zone__left",
        duration: 270, // the scene should last for a scroll distance of 100px
        offset:-150, // start this scene after scrolling for 50px
    })
        .setPin('.img_berry') // pins the element for the the scene's duration
        .addTo(controller) // assign the scene to the controller
    // create a scene
    new ScrollMagic.Scene({
        triggerElement: ".gray-zone__left",
        duration: 370, // the scene should last for a scroll distance of 100px
        offset:-50, // start this scene after scrolling for 50px
    })
        .setPin('.img__leafes') // pins the element for the the scene's duration
        .addTo(controller) // assign the scene to the controller
    // create a scene
    new ScrollMagic.Scene({
        triggerElement: ".gray-zone__left",
        duration: 600, // the scene should last for a scroll distance of 100px
        offset:-490, // start this scene after scrolling for 50px
    })
        .setPin('.img__flower') // pins the element for the the scene's duration
        .addTo(controller) // assign the scene to the controller       











   


