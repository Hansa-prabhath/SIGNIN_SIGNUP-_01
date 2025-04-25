function sign_animation(){
    
    document.body.style.overflow = 'hidden';
    var signin_box_animation = document.getElementById("signin_box_animation");
    var signup_box_animation = document.getElementById("signup_box_animation");
    var signin_box = document.getElementById("sign_in_box");
    var signup_box = document.getElementById("sign_up_box");

    signin_box_animation.classList.contains("d-none");

    const t1 = gsap.timeline({
        onComplete: () => {
            document.body.style.overflow = 'auto';
        }
    });

    var bgcolour = signin_box_animation.classList.contains("d-none") ?
    "background: #ff99cc":
    "background: #ffccff";

    t1.to(".bg_colour",{
        scale: 1,
        rotation: "+=360",
        backgroundColor: bgcolour,
        opacity: 0,
        duration: 0.8,
        ease: "power1.out",
    });
    t1.to([signup_box,signin_box],{
        opacity: 0,
        duration: 0.4,
        ease: "power1.out",
    });
    //Step2 : Mid-animatin toggle (around 0.45 in)
    t1.call(() => {
        // toggle boxess in the middle of the animation
        signin_box_animation.classList.toggle("d-none");
        signup_box_animation.classList.toggle("d-none");
        signin_box.classList.toggle("d-none");
        signup_box.classList.toggle("d-none");
    }, null, '+=0'); // Start immediately after the previous step

    t1.to([signup_box,signin_box],{
        opacity: 1,
        duration: 0.1,
        ease: "power2.out",
    });

    //Step 3: Fade back in
    t1.to(".bg_colour",{
        opacity:1,
        duration:0.1,
        ease: "power2.out"
    });

}