<script>
    if (window.screen.width >= 1080) {

        <?php get_template_part('partials/spaces-animations-common'); ?>

        document.addEventListener("DOMContentLoaded", () => {
            gsap.registerPlugin(ScrollTrigger);

            ScrollTrigger.defaults({
                // toggleActions: "restart pause resume pause"
                // toggleActions: "restart reverse reverse reverse"
            });

            const tl1 = gsap.timeline({
                scrollTrigger: {
                    trigger: ".hero",
                    pin: true,
                    start: "top top",
                    end: "+=" + duration + "%",
                    scrub: true,
                    // snap: snapConfig,
                    // markers: true
                }
            });

            tl1.to(".hero .background", {
                    scale: 0.8,
                    filter: 'grayscale(0) brightness(1)',
                    duration: 1,
                    // delay: .1
                }, "start")
                .to(".hero [class*=title]", {
                    autoAlpha: 0,
                    duration: 0.1,
                    // delay: .1
                }, "start");

            // Animate One
            const tlOne = gsap.timeline({
                scrollTrigger: {
                    trigger: ".one",
                    start: "top bottom",
                    end: "top top",
                    toggleActions: "play pause resume reset",
                    scrub: 3,
                    snap: snapConfig,
                    // markers: true
                }
            });

            tlOne.fromTo(".one p > span", {
                yPercent: 200,
                autoAlpha: 0,
                stagger: staggerDuration,
                duration: .7,
                ease: "power4.out",
            }, {
                yPercent: 0,
                autoAlpha: 1,
                stagger: staggerDuration,
                duration: .7,
                ease: "power4.out",
            })


            // Animate Two
            const tlTwo = gsap.timeline({
                scrollTrigger: {
                    trigger: ".two",
                    start: "top bottom",
                    end: "top top",
                    toggleActions: "play pause resume reset",
                    scrub: 3,
                    snap: snapConfig,
                    // markers: true
                }
            });

            tlTwo.fromTo(".two p > span", {
                    yPercent: 200,
                    autoAlpha: 0,
                    stagger: staggerDuration,
                    duration: .7,
                    ease: "power4.out",
                }, {
                    yPercent: 0,
                    autoAlpha: 1,
                    stagger: staggerDuration,
                    duration: .7,
                    ease: "power4.out",
                }, "Two")
                .from(".two img", {
                    yPercent: 50,
                    autoAlpha: 0,
                    duration: .7,
                    ease: "power4.out",
                    delay: 0.7
                }, "Two");


            // Animate Three
            const tlThree = gsap.timeline({
                scrollTrigger: {
                    trigger: ".three",
                    start: "top bottom",
                    end: "top top",
                    toggleActions: "play pause resume reset",
                    scrub: 3,
                    snap: snapConfig,
                    // markers: true
                }
            });
            tlThree
                .from(".three img", {
                    yPercent: 50,
                    autoAlpha: 0,
                    duration: .7,
                    ease: "power4.out"
                }, "Three")
                .fromTo(".three p > span", {
                    yPercent: 600,
                    autoAlpha: 0,
                    stagger: staggerDuration,
                    duration: 2.7,
                    ease: "power4.out",
                    // delay: 1.7
                }, {
                    yPercent: 0,
                    autoAlpha: 1,
                    stagger: staggerDuration,
                    // duration: .7,
                    ease: "power4.out",
                    // delay: 0.7
                }, "Three");


            // Animate Four
            const tlFour = gsap.timeline({
                scrollTrigger: {
                    trigger: ".four",
                    snap: snapConfig,
                    start: "top bottom",
                    end: "top top",
                    toggleActions: "play pause resume reset",
                    scrub: 3,
                    snap: snapConfig,
                    // markers: true
                }
            });

            tlFour.fromTo(".four p > span", {
                    yPercent: 200,
                    autoAlpha: 0,
                    stagger: staggerDuration,
                    duration: .7,
                    ease: "power4.out",
                }, {
                    yPercent: 0,
                    autoAlpha: 1,
                    stagger: staggerDuration,
                    duration: .7,
                    ease: "power4.out",
                }, "Four")
                .from(".four img", {
                    yPercent: 50,
                    autoAlpha: 0,
                    duration: .7,
                    delay: 0.7,
                    ease: "power4.out"
                }, "Four");


            // gsap.defaults({
            //     overwrite: "auto"
            // });
            // Animate Five
            const tlFive = gsap.timeline({
                scrollTrigger: {
                    trigger: ".five",
                    start: "top bottom",
                    end: "top top",
                    // pin: true,
                    // end: "+=250%",
                    // toggleActions: "play reset resume reset",
                    toggleActions: "play pause resume reset",
                    scrub: 3,
                    snap: snapConfig,
                    // onUpdate: self => console.log("progress", self.progress),
                    fastScrollEnd: true,
                    // markers: true
                }
            });

            tlFive.fromTo(".five > .title > span", {
                yPercent: 200,
                autoAlpha: 0,
                stagger: 0.5,
                duration: .7,
                ease: "power4.out",
            }, {
                yPercent: 0,
                autoAlpha: 1,
                stagger: 0.5,
                duration: .7,
                ease: "power4.out",
            }, "Five");



            // Overlay Animation
            const tl5 = gsap.timeline({
                scrollTrigger: {
                    trigger: ".plan-view",
                    pin: true,
                    start: "top top",
                    end: "+=" + 500 + "%",
                    scrub: true,
                    // onUpdate: self => console.log("progress", self.progress),
                    // markers: true
                }
            });

            gsap.set(".plan-view .plan-overlay-color", {
                autoAlpha: 0
            });
            gsap.set(".plan-view .plan-overlay", {
                autoAlpha: 0
            });

            gsap.set(".plan-view .details, .plan-view .details-blurb", {
                yPercent: 200
            });
            // gsap.set(".plan-view .footer", {
            //     yPercent: 0
            // });
            // gsap.set(".plan-view .plan-overlay, .plan-view .plan-overlay-color", {
            //     transformOrigin: "68% 90%"
            // });

            tl5
                .to(".plan-view .plan-overlay", {
                    autoAlpha: 0,
                    // duration: 3,
                    // delay: 1
                }, "color")
                .to(".plan-view .plan-overlay-color", {
                    autoAlpha: .5,
                    duration: 2,
                    delay: 1
                }, "color")

                .fromTo(".plan-view .plan-bg", {
                    autoAlpha: 1,
                    // yPercent: 0,
                    // duration: 0.2,
                    overwrite: true
                }, {
                    autoAlpha: 0,
                    // yPercent: -100,
                    duration: 1,
                    overwrite: true
                }, "bg")

                .to(".plan-view > .title", {
                    autoAlpha: 0,
                    yPercent: -100,
                    // duration: 0.2
                    duration: 0.5
                }, "bg")

                .to(".plan-view", {
                    backgroundColor: "black",
                    // duration: 0.2
                    duration: 1
                }, "bg")

                .to(".plan-view .plan-overlay-color", {
                    scale: 1.8,
                    transformOrigin: "68% 50%",
                    duration: 4
                }, "bg+=.9")
                .to(".plan-view .plan-overlay", {
                    autoAlpha: 1,
                    duration: .5
                }, "bg")

                .to(".plan-view .plan-overlay", {
                    scale: 1.8,
                    transformOrigin: "68% 50%",
                    duration: 4,
                }, "bg+=.9")

                .to(".plan-view .plan-overlay-color", {
                    autoAlpha: 0,
                    duration: 4
                }, "bg")

                .to(".plan-view .plan-overlay", {
                    scale: 1.8,
                    xPercent: -20,
                    // yPercent: -0,
                    duration: 2,
                    delay: 2.5
                }, "bgb")

                .to(".plan-view .details", {
                    yPercent: -100,
                    duration: 6
                }, "bg1")

                .to(".plan-view .plan-overlay", {
                    scale: 1.5,
                    xPercent: -20,
                    yPercent: -10,
                    duration: 2,
                }, "bg2")
                .to(".plan-view .details-blurb", {
                    yPercent: 0,
                    duration: 2,
                }, "bg2")


                .from(".plan-view .footer", {
                    yPercent: 100,
                    duration: 2,
                }, "bg2")

                .to(".plan-view .details-blurb", {
                    yPercent: 0,
                    duration: 1,
                }, "bg3+=3")


            // Animation Design Details

            const tlDD = gsap.timeline({
                scrollTrigger: {
                    trigger: ".design-details",
                    start: "top bottom",
                    end: "top top",
                    toggleActions: "play pause resume reset",
                    scrub: 3,
                    snap: snapConfig,
                    // markers: true
                }
            });

            // Animation CTA

            const tlLast = gsap.timeline({
                scrollTrigger: {
                    trigger: ".cta",
                    start: "top bottom",
                    end: "top top",
                    toggleActions: "play pause resume reset",
                    scrub: 3,
                    snap: snapConfig,
                    // markers: true
                }
            });

            tlLast.fromTo(".cta > *", {
                yPercent: 200,
                autoAlpha: 0,
                stagger: .5,
                duration: .7,
                ease: "power4.out",
            }, {
                yPercent: 0,
                autoAlpha: 1,
                stagger: .5,
                duration: .7,
                ease: "power4.out",
            });





        });

    }
</script>