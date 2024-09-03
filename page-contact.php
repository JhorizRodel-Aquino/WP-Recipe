<?php get_header()?>

<section class="page__banner bg-light_accent mb-[180px]">
    <div class="container px-4 mx-auto">
        <div class="text-center pt-10">
            <h1 class="-mb-7"><?php the_title()?></h1>
            <?php if(has_post_thumbnail()) {the_post_thumbnail();}?>
        </div>
    </div>
</section>

<section class="page__content mb-20">
    <div class="container px-4 mx-auto">
        <div
            class="grid grid-cols-1 md:grid-cols-[1fr_350px] gap-10 max-w-[1000px] w-full mx-auto"
        >
            <div class="page__body">
                <?php echo get_the_content()?>

                <form action="">
                    <div class="wrap mb-5">
                    <label for="">Name</label>
                    <input type="text" />
                    </div>

                    <div class="wrap mb-5">
                    <label for="">Email</label>
                    <input type="email" />
                    </div>

                    <div class="wrap mb-5">
                    <label for="">Phone</label>
                    <input type="tel" />
                    </div>

                    <div class="wrap mb-5">
                    <label for="">Message</label>
                    <textarea name="" id="" cols="30" rows="10"></textarea>
                    </div>

                    <input
                    type="submit"
                    value="Send Message"
                    class="btn btn--accent"
                    />
                </form>
            </div>

            <div class="page__sidebar">
                <div class="bg-accent text-white px-8 py-12">
                    <h4>Contact Info</h4>

                    <div class="mb-2 font-mulish">
                        <h5 class="font-mulish">Email</h5>
                        <p class="text-white flex items-center gap-2">
                            <i class="fas fa-envelope"></i> <?php echo get_post_meta(get_the_ID(), 'Email', true)?>
                        </p>
                    </div>

                    <div class="mb-2">
                        <h5 class="font-mulish">Phone</h5>
                        <p class="text-white flex items-center gap-2">
                            <i class="fas fa-phone"></i> <?php echo get_post_meta(get_the_ID(), 'Phone', true)?>
                        </p>
                    </div>

                    <div class="mb-2">
                        <h5 class="font-mulish">Address</h5>
                        <p class="text-white flex items-center gap-2">
                            <i class="fas fa-map-marker-alt"></i>
                            <?php echo get_post_meta(get_the_ID(), 'Address', true)?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php get_footer()?>