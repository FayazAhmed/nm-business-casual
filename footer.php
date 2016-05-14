    <footer>
        <div class="container">
            <div class="row">
                <!-- <div class="col-lg-12 text-center">
                    <p>Copyright &copy; Your Website 2014</p>
                </div> -->
                <?php if(!dynamic_sidebar('footer-w-1')):?>
              <!--- our custom styles here ---> 
              No widget
            <?php endif;?>
            </div>
        </div>
    </footer>
    <?php wp_footer(); ?>
</body>

</html>