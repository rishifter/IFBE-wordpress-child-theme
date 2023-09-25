const searchContainer = document.querySelector("#search");
const searchBox = document.querySelector("#search input");
const accordions = document.querySelectorAll(".accordion");
// const questions = accordions.querySelector(".heading");

searchBox.addEventListener("input", () => {
    let searchTerm = searchBox.value.toLowerCase();

    if (searchTerm.length > 1) {
        search(searchTerm);
        // console.log(searchTerm);
    } else {
        reset();
    }
});


let search = query => {
    let count = 0;
    accordions.forEach(accordion => {
        let target = accordion.querySelector(".heading").innerText.toLowerCase();

        if (target.indexOf(query) >= 0) {
            accordion.classList.add("in-search");
            accordion.classList.remove("not-in-search");
            accordion.style.display = 'block';
            count++;
        } else {
            accordion.classList.add("not-in-search");
            accordion.classList.remove("in-search");
            accordion.style.display = 'none';
        }
    });
    searchContainer.dataset.message = count + " results found.";
};

let reset = () => {
    accordions.forEach(accordion => {
        accordion.style.display = 'block';
    });

    searchContainer.dataset.message = "";
};