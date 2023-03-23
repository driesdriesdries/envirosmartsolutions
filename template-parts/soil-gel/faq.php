<div class="section section__faq">
    <h2>FAQ</h2>
    <?php 
        $items = array(
            array(
                'heading' => 'Why should I use soil gel?',
                'content' => 'Content1 goes here...and this <a href="https://www.goodreads.com/"> is a mock link</a>'
            ),
            array(
                'heading' => 'What makes soil gel unique?',
                'content' => 'Content2 goes here...and this <a href="https://coinmarketcap.com/currencies/bitcoin/"> is another mock link</a>'
            ),
            // add more items as needed...
        );

        generateAccordion($items); 
    ?>
</div>