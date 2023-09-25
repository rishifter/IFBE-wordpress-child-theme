if (window.screen.width < 980) {
    // console.log("Mobile");

    const dayEvents = document.querySelectorAll(".mec-calendar-day.has-event");
    const details = document.querySelectorAll(".event-details");
    const detailContainer = document.getElementById("mobile-event-details");
    var firstLoad = 1;

    init(details, detailContainer, dayEvents);

    // move details to detailContainer and setup click events for dayEvents
    function init(details, detailContainer, dayEvents) {
        details.forEach(detail => {
            detailContainer.appendChild(detail);
        });

        //on first page load, set selected day to today
        if (firstLoad) {
            let todayEvent = document.querySelector(".event-details.today");

            if (todayEvent) {
                let id = todayEvent.dataset.mecCell;
                let today = document.querySelector('.mec-calendar-day.has-event[data-mec-cell="' + id + '"]');
                showEvent(todayEvent, today, detailContainer);
            }

            firstLoad = 0;
        }

        dayEvents.forEach(day => {
            day.addEventListener("click", () => {
                let id = day.dataset.mecCell; // id from day in cal to match id of detail
                let event = document.querySelector('.event-details[data-mec-cell="' + id + '"]');
                showEvent(event, day, detailContainer);
            });
        });

        console.log("Added event details to container");
    }

    function showEvent(event, day, detailContainer) {
        let currentEvent = document.querySelector(".event-details.active");
        if (currentEvent) currentEvent.classList.remove("active");
        event.classList.add("active");

        let currentDay = document.querySelector(".mec-calendar-day.active");
        if (currentDay) currentDay.classList.remove("active");
        day.classList.add("active");

        // Scroll event details to bottom of screen unless first load
        // console.log(firstLoad);
        if (!firstLoad) detailContainer.scrollIntoView({ behavior: "smooth", block: "end", inline: "nearest" });
    }



    // REPEAT ON NEXT/PREV MONTHS
    // Select the node that will be observed for mutations
    const targetNode = document.querySelector('.mec-skin-monthly-view-month-navigator-container');

    // Options for the observer (which mutations to observe)
    const config = { attributes: false, childList: true, subtree: false };

    // Callback function to execute when mutations are observed
    const callback = function (mutationList, observer) {
        // Use traditional 'for loops' for IE 11
        for (const mutation of mutationList) {
            if (mutation.type === 'childList') {
                // console.log('A child node has been added or removed.');
                // console.log(mutation.addedNodes[0].id);
                let addedMonthNavigatorID = mutation.addedNodes[0].id;
                let addedMonthCalendarID = addedMonthNavigatorID.replace("mec_month_navigator", "mec_monthly_view_month");

                let details = document.querySelectorAll("#" + addedMonthCalendarID + " .event-details");
                let dayEvents = document.querySelectorAll("#" + addedMonthCalendarID + " .mec-calendar-day.has-event");

                init(details, detailContainer, dayEvents);
            }
            else if (mutation.type === 'attributes') {
                // console.log('The ' + mutation.attributeName + ' attribute was modified.');
            }
        }
    };

    // Create an observer instance linked to the callback function
    const observer = new MutationObserver(callback);

    // Start observing the target node for configured mutations
    observer.observe(targetNode, config);

}
