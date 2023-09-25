<div class="back-button">
    <a href="#" class="button back" id="backBtn">Back</a>
    <script>
        document.getElementById("backBtn").addEventListener("click", e => {
            e.preventDefault();
            history.back();
        });
    </script>
</div>