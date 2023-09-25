<?php
$title = the_title("", "", false);
?>

<section class="title-container flex-col">
    <h3 class="subtitle-top"><?php echo $title; ?></h3>
    <h1 class="title tabs">
        <span id="digital" class="digital active">Digital</span>
        <span id="print" class="print">In Print</span>
    </h1>
    <div class="tabs-content-container">
        <article class="digital active tab-content">
            <?php echo tangible_template('<Template name=media-articles-digital />'); ?>
        </article>
        <article class="print tab-content">
            <?php echo tangible_template('<Template name=media-articles-in-print />'); ?>
        </article>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const tabDigital = document.getElementById("digital");
            const tabPrint = document.getElementById("print");
            const contentDigital = document.querySelector("article.digital");
            const contentPrint = document.querySelector("article.print");

            tabDigital.addEventListener("click", () => {
                changeTabs(tabDigital);
            });
            tabPrint.addEventListener("click", () => {
                changeTabs(tabPrint);
            });

            const changeTabs = tab => {
                tabPrint.classList.remove("active");
                tabDigital.classList.remove("active");
                contentDigital.classList.remove("active");
                contentPrint.classList.remove("active");

                tab.classList.add("active");
                document.querySelector("article." + tab.id).classList.add("active");
            };
        });
    </script>
</section>