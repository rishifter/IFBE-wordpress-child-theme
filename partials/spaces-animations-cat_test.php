<script>
    document.addEventListener("DOMContentLoaded", () => {
        gsap.registerPlugin(ScrollTrigger);

        ScrollTrigger.defaults({
            // toggleActions: "restart pause resume pause"
            // toggleActions: "restart reverse reverse reverse"
        });

        // Scroll animation for hero section
        let duration = 250;
        const tl1 = gsap.timeline({
            scrollTrigger: {
                trigger: ".hero",
                pin: true,
                start: "top top",
                end: "+=" + duration + "%",
                scrub: true,
                // snap: 1 / 3,
                // snap: {
                //     snapTo: 1 / 3,
                //     duration: {
                //         min: 0.1,
                //         max: 0.2
                //     },
                //     delay: 0.01,
                //     ease: "power1.inOut"
                // },
                markers: true
            }
        });

        tl1.to(".hero .background", {
                scale: 0.8,
                filter: 'grayscale(0) brightness(1)',
                duration: 1
            }, "start")
            .to(".hero [class*=title]", {
                autoAlpha: 0,
                duration: 0.1
            }, "start")


            .to(".hero .background", {
                autoAlpha: 0,
                yPercent: -100,
                // duration: .1
            }, "end1")
            .fromTo(".hero .aaa", {
                    autoAlpha: 0,
                    // top: "100%",
                    yPercent: 100
                }, {
                    autoAlpha: 1,
                    yPercent: 0,
                    // top: "0%",
                    duration: 1
                },
                "end1a")


            .to(".hero .aaa", {
                    autoAlpha: 0,
                    yPercent: -100,
                    // duration: .1
                },
                "end2")
            .fromTo(".hero .bbb", {
                    autoAlpha: 0,
                    yPercent: 100
                }, {
                    autoAlpha: 1,
                    yPercent: 0,
                    duration: 1
                },
                "end2a")

            .to(".hero .bbb", {
                    autoAlpha: 0,
                    yPercent: -100
                },
                "end3");

        // Snapping Scroll animation for 5 parallax sections
        // const sections = gsap.utils.toArray('.parallax');

        // ScrollTrigger.create({
        //     trigger: '.one',
        //     start: 'top top',
        //     endTrigger: '.five',
        //     end: 'bottom bottom',
        //     markers: true,
        //     //   snap: 1 / (sections.length - 1)
        //     snap: {
        //         snapTo: 1 / (sections.length - 1),
        //         duration: {
        //             min: 0.05,
        //             max: 0.1
        //         }, // the snap animation should be at least 0.25 seconds, but no more than 0.75 seconds (determined by velocity)
        //         delay: 0.025, // wait 0.125 seconds from the last scroll event before doing the snapping
        //         ease: "power1.inOut" // the ease of the snap animation ("power3" by default)
        //     }
        // });

        // gsap.from(".one p > span", {
        //     scrollTrigger: {
        //         trigger: ".one p",
        //         start: "top 90%",
        //         end: "top 10%",
        //         // toggleActions: "restart pause resume pause",
        //         toggleActions: "play none none reset",
        //         // markers: true
        //     },
        //     yPercent: 200,
        //     autoAlpha: 0,
        //     stagger: .5,
        //     duration: .7,
        //     ease: "power4.out",
        // });

        const tl2 = gsap.timeline();

        // Animate One
        const tlOne = gsap.timeline({
            scrollTrigger: {
                trigger: ".one",
                start: "top bottom",
                end: "top top",
                // pin: true,
                toggleActions: "play pause resume reset",
                scrub: 3,
                snap: {
                    snapTo: 1,
                    duration: {
                        min: 0.1,
                        max: 0.2
                    },
                    delay: 0.01,
                    ease: "power1.inOut"
                },
                // markers: true
            }
        });

        tlOne.fromTo(".one p > span", {
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
        })


        // Animate Two
        const tlTwo = gsap.timeline({
            scrollTrigger: {
                trigger: ".two",
                // start: "top 70%",
                start: "top bottom",
                // end: "top 10%",
                end: "top top",
                toggleActions: "play pause resume reset",
                scrub: 3,
                // pin: true,
                snap: {
                    snapTo: 1,
                    duration: {
                        min: 0.1,
                        max: 0.2
                    },
                    delay: 0.01,
                    ease: "power1.inOut"
                },
                markers: true
            }
        });

        tlTwo.fromTo(".two p > span", {
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
                snap: {
                    snapTo: 1,
                    duration: {
                        min: 0.1,
                        max: 0.2
                    },
                    delay: 0.01,
                    ease: "power1.inOut"
                },
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
                stagger: .5,
                duration: 2.7,
                ease: "power4.out",
                // delay: 1.7
            }, {
                yPercent: 0,
                autoAlpha: 1,
                stagger: .5,
                // duration: .7,
                ease: "power4.out",
                // delay: 0.7
            }, "Three");


        // Animate Four
        const tlFour = gsap.timeline({
            scrollTrigger: {
                trigger: ".four",
                start: "top 70%",
                end: "top 10%",
                toggleActions: "play pause resume reset",
                scrub: 3,
                // markers: true
            }
        });

        tlFour.fromTo(".four p > span", {
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
                start: "top 70%",
                end: "top 30%",
                // pin: true,
                // end: "+=250%",
                // toggleActions: "play reset resume reset",
                toggleActions: "play pause resume reset",
                scrub: .1,
                // onUpdate: self => console.log("progress", self.progress),
                fastScrollEnd: true,
                // markers: true
            }
        });

        tlFive.fromTo(".five .title > span", {
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
        }, "Five")
        // .from(".five img:nth-of-type(1)", {
        //     yPercent: 50,
        //     autoAlpha: 0,
        //     duration: 3,
        //     ease: "power4.out",
        //     delay: 0.7
        // }, "Five")
        // .to(".plan-view img.plan-bg", {
        //     autoAlpha: 0,
        //     // yPercent: -100,
        //     duration: 2,
        //     // overwrite: true
        // }, "Five");



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

        gsap.set(".plan-view .details", {
            yPercent: 100
        });
        // gsap.set(".plan-view .footer", {
        //     yPercent: 0
        // });
        // gsap.set(".plan-view .plan-overlay, .plan-view .plan-overlay-color", {
        //     transformOrigin: "68% 90%"
        // });

        tl5
            .to(".plan-view .plan-overlay", {
                autoAlpha: 1,
                duration: 3,
                delay: 1
            }, "color")
            .to(".plan-view .plan-overlay-color", {
                autoAlpha: 1,
                duration: 1,
                delay: 1
            }, "color")

            .fromTo(".plan-view .plan-bg", {
                autoAlpha: 1,
                yPercent: 0,
                // duration: 0.2,
                overwrite: true
            }, {
                autoAlpha: 0,
                yPercent: -100,
                duration: 1,
                overwrite: true
            }, "bg")

            .to(".plan-view .title", {
                autoAlpha: 0,
                yPercent: -100,
                // duration: 0.2
                duration: 0.5
            }, "bg")

            .to(".plan-view", {
                backgroundColor: "black",
                // duration: 0.2
                duration: 0.5
            }, "bg")

            .to(".plan-view .plan-overlay, .plan-view .plan-overlay-color", {
                scale: 2.5,
                transformOrigin: "68% 90%",
                duration: 4
            }, "bg")

            .to(".plan-view .plan-overlay-color", {
                autoAlpha: 0,
                duration: .5
            }, "bg")

            .to(".plan-view .plan-overlay", {
                scale: 1.5,
                // transformOrigin: "100% 80%",
                xPercent: -20,
                yPercent: -20,
                duration: 2,
                delay: 2.5
            }, "bg")

            .to(".plan-view .details", {
                yPercent: -100,
                duration: 6
                // }, "bg1+=2")
            }, "bg1")
            .from(".plan-view .footer", {
                yPercent: 100,
                duration: 1,
            }, "bg2")















        // elasticText(".one p", ".one p > span", true);

        // const tlOne = gsap.timeline({
        //     scrollTrigger: {
        //         trigger: ".one p",
        //         start: "top 70%",
        //         end: "top 30%",
        //         // toggleActions: "restart pause resume pause",
        //         toggleActions: "play none reverse reverse",
        //         // 	              scrub: true,
        //         markers: true
        //     }
        // });


        // tlOne.fromTo(".one p > span", {
        //     yPercent: 200,
        //     autoAlpha: 0,
        //     stagger: .5,
        //     duration: .7,
        //     ease: "power4.out"
        // }, {
        //     yPercent: 0,
        //     autoAlpha: 1,
        //     stagger: .5,
        //     duration: .7,
        //     ease: "power4.out"
        // });




        // tl2
        // .from(".one p > span", {
        //     scrollTrigger: {
        //         trigger: ".one p",
        //         start: "top 70%",
        //         end: "top 30%",
        //         // toggleActions: "restart pause resume pause",
        //         toggleActions: "play pause resume reset",
        //         markers: true
        //     },
        //     yPercent: 200,
        //     autoAlpha: 0,
        //     stagger: .5,
        //     duration: .7,
        //     ease: "power4.out",
        // })
        // .from(".one p > span", {
        //     yPercent: 50,
        //     autoAlpha: 0.4,
        //     duration: 1,
        //     ease: "circ.inOut",
        //     stagger: 0.5,
        //     scrollTrigger: {
        //         trigger: ".one p",
        //         start: "top 90%",
        //         end: "top 40%",
        //         scrub: true,
        //         markers: true,
        //         // snap: {
        //         //     snapTo: "labelsDirectional",
        //         //     duration: {
        //         //         min: 0.25,
        //         //         max: 0.5
        //         //     }, // the snap animation should be at least 0.25 seconds, but no more than 0.75 seconds (determined by velocity)
        //         //     delay: 0.025, // wait 0.125 seconds from the last scroll event before doing the snapping
        //         //     ease: "power1 .inOut" // the ease of the snap animation ("power3" by default)
        //         // }
        //     }
        // })


        // .from(".two > *", {
        //     yPercent: 200,
        //     autoAlpha: 0.4,
        //     // duration: 1,
        //     ease: "circ.inOut",
        //     scrollTrigger: {
        //         trigger: ".two",
        //         // start: "bottom bottom",
        //         end: "top 50%",
        //         scrub: true,
        //         markers: true
        //     }
        // })


        // .from(".two p > span", {
        //     scrollTrigger: {
        //         trigger: ".two p",
        //         start: "top 70%",
        //         end: "top 30%",
        //         // toggleActions: "restart pause resume pause",
        //         toggleActions: "play none none reset",
        //         // markers: true
        //     },
        //     yPercent: 200,
        //     autoAlpha: 0,
        //     stagger: .5,
        //     duration: .7,
        //     ease: "power4.out",
        // })
        // .from(".two p", {
        //     yPercent: 200,
        //     autoAlpha: 0.4,
        //     // duration: 1,
        //     ease: "circ.inOut",
        //     scrollTrigger: {
        //         trigger: ".two",
        //         // start: "bottom bottom",
        //         end: "top 50%",
        //         scrub: 1,
        //         // markers: true
        //     }
        // }, "two")
        // .from(".two img", {
        //     yPercent: 25,
        //     //   autoAlpha:0,
        //     // duration: 1,
        //     ease: "circ.inOut",
        //     scrollTrigger: {
        //         trigger: ".two",
        //         // start: "bottom bottom",
        //         end: "top 20%",
        //         scrub: 0.2,
        //         // markers: true
        //     }
        // }, "two")

        // .from(".three img", {
        //     yPercent: 50,
        //     // autoAlpha: 0.4,
        //     // duration: 1,
        //     ease: "circ.inOut",
        //     scrollTrigger: {
        //         trigger: ".three",
        //         // start: "bottom bottom",
        //         end: "top 50%",
        //         scrub: true,
        //         // markers: true
        //     }
        // }, "three")
        // .from(".three p", {
        //     yPercent: 200,
        //     autoAlpha: 0.4,
        //     // duration: 1,
        //     ease: "circ.inOut",
        //     scrollTrigger: {
        //         trigger: ".three",
        //         // start: "bottom bottom",
        //         end: "top 20%",
        //         scrub: true,
        //         // markers: true
        //     }
        // }, "three")

        // .from(".four p", {
        //     yPercent: 200,
        //     autoAlpha: 0.4,
        //     // duration: 1,
        //     ease: "circ.inOut",
        //     scrollTrigger: {
        //         trigger: ".four",
        //         // start: "bottom bottom",
        //         end: "top 50%",
        //         scrub: true,
        //         // markers: true
        //     }
        // }, "four")
        // .from(".four img", {
        //     yPercent: 50,
        //     //   autoAlpha:0,
        //     // duration: 1,
        //     ease: "circ.inOut",
        //     scrollTrigger: {
        //         trigger: ".four",
        //         // start: "bottom bottom",
        //         end: "top 20%",
        //         scrub: true,
        //         // markers: true
        //     }
        // }, "four")

        // .from(".five div", {
        //     yPercent: 200,
        //     autoAlpha: 0.4,
        //     // duration: 1,
        //     ease: "circ.inOut",
        //     scrollTrigger: {
        //         trigger: ".five",
        //         // start: "bottom bottom",
        //         end: "top 50%",
        //         scrub: true,
        //         // markers: true
        //     }
        // }, "five")
        // .from(".five img", {
        //     yPercent: 50,
        //     //   autoAlpha:0,
        //     // duration: 1,
        //     ease: "circ.inOut",
        //     scrollTrigger: {
        //         trigger: ".five",
        //         // start: "bottom bottom",
        //         end: "top 20%",
        //         scrub: true,
        //         // markers: true
        //     }
        // }, "five");



        // Animation CTA

        const tlLast = gsap.timeline({
            scrollTrigger: {
                trigger: ".cta",
                start: "top 90%",
                end: "top 20%",
                toggleActions: "play pause resume reset",
                scrub: 3,
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

    // function elasticText(trigger, element, start = "top 70%", end = "top 30%", markers = false) {

    //     const tlOne = gsap.timeline({
    //         scrollTrigger: {
    //             trigger: trigger,
    //             start: start,
    //             end: end,
    //             toggleActions: "play none reverse reverse",
    //             // 	              scrub: true,
    //             markers: markers
    //         }
    //     });


    //     tlOne.fromTo(element, {
    //         yPercent: 200,
    //         autoAlpha: 0,
    //         stagger: .5,
    //         duration: .7,
    //         ease: "power4.out"
    //     }, {
    //         yPercent: 0,
    //         autoAlpha: 1,
    //         stagger: .5,
    //         duration: .7,
    //         ease: "power4.out"
    //     });

    //     // return tlOne;
    // }
</script>