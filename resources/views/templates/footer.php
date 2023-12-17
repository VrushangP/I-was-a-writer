<?php
function generateFooter($pageType)
{
    $footer = sprintf('
<footer class="footer has-background-info-dark has-text-centered is-flex-align-items-flex-end mt-auto">
    <div class="container is-max-widescreen">
        <div class="columns">
            <div class="column has-text-white-ter">
                <p class="subtitle is-6 has-text-white-ter">Contact Me</p>
                <a href="mailto:vrushang.patel@gmail.com">Email: vrushang.patel@gmail.com</a><br>
                <a href="tel:+16475102172">Phone: +1 (647) 510-2172</a>
            </div>
            <div class="column has-text-white-ter">
                <p class="subtitle is-6 has-text-white-ter">More Work</p>
                <a href="mailto:vrushang.patel@gmail.com">Email: vrushang.patel@gmail.com</a>
                <a href="tel:+16475102172">Phone: +1 (647) 510-2172</a>
            </div>
            <div class="column has-text-white-ter">
                <p class="subtitle is-6 has-text-white-ter">Blog</p>
                <a href="mailto:vrushang.patel@gmail.com">Email: vrushang.patel@gmail.com</a>
                <a href="tel:+16475102172">Phone: +1 (647) 510-2172</a>
            </div>
            <div class="column has-text-white-ter">
                <p class="subtitle is-6 has-text-white-ter">Project Hub</p>
                <a href="https://www.linkedin.com/" class="button is-link is-outlined">LinkedIn</a>
                <a href="mailto:vrushang.patel@gmail.com">Email: vrushang.patel@gmail.com</a>
                <a href="tel:+16475102172">Phone: +1 (647) 510-2172</a>
            </div>
        </div>
    </div>
</footer>
</html>
');
    return $footer;
};
