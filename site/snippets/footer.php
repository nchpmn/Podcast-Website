<div class="footer">
                <div class="pure-menu pure-menu-horizontal">
                    <ul>
                        <li class="pure-menu-item"><a href="#" class="pure-menu-link">Contact Us</a></li>
                        <li class="pure-menu-item"><a href="#" class="pure-menu-link">About</a></li>
                        <li class="pure-menu-item"><a href="http://relativity.com.au" class="pure-menu-link">Relativity Studios</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>



<?php echo js('https://code.jquery.com/jquery-2.2.4.min.js'); ?>
<script type="text/javascript">
    // code gets installed at the end of the body (after all other HTML)
 var quotes = $(".topic");
    var quoteIndex = -1;

    function showNextQuote() {
        ++quoteIndex;
        quotes.eq(quoteIndex % quotes.length)
            .fadeIn(1000)
            .delay(2000)
            .fadeOut(200, showNextQuote);
    }

    showNextQuote();
</script>


</body>
</html>
