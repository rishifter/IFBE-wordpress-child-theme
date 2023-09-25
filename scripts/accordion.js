const accordionLinks = document.querySelectorAll(".accordion .heading");
const openFirstItemOnLoad = 0;

accordionLinks.forEach(a => {
    a.addEventListener("click", () => {
        openAccordion(a);
    });
});
// console.log("events added");
const openAccordion = a => {
    accordionLinks.forEach(link => {
        link.parentElement.classList.remove("active");
    })
    a.parentElement.classList.add("active");
}

if (openFirstItemOnLoad) openAccordion(accordionLinks[0]);
