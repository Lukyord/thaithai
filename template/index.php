<?php $root = ""; ?>

<?php include($root . "header.php"); ?>

<main id="main" class="index-main">
    <section data-section="index-hero">
        <div class="sc-billboard full-screen">
            <div class="swiper auto autoplay loop" data-autoplay-interval="5000">
                <div class="swiper-wrapper ease-quint ">
                    <?php
                    for ($i = 0; $i < 3; $i++) {
                    ?>
                        <div class="swiper-slide">
                            <div class="slide-image animate fadeIn gradient-overlay-bottom" style="--gradient-opacity: 0.05; --gradient-height: 100%;">
                                <?php
                                $section_cover = "./assets/media/design/hero-slide.jpg";
                                $section_cover_m = "";
                                include("include/function-group.php");
                                ?>
                            </div>

                            <div class="index-logo animate fadeIn" data-wow-delay="0.75s" data-wow-duration="0.75s">
                                <picture class="object-fill-height">
                                    <img src="./assets/media/design/logo-full-white.svg" alt="">
                                </picture>
                            </div>

                        </div>
                    <?php } ?>
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-nav">
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>


        </div>
    </section>

    <section class="bg-beige" data-section="featured-content">
        <div class="sc-inner">
            <div class="container">
                <div class="slides">
                    <div class="swiper auto loop autoplay" data-autoplay-interval="5000">
                        <div class="swiper-wrapper ease-quint">
                            <?php
                            for ($i = 0; $i < 3; $i++) {
                            ?>
                                <div class="swiper-slide">
                                    <?php
                                    $section_cover = "./assets/media/design/featured-content-image.jpg";
                                    $section_cover_m = "";
                                    include("include/function-group.php");
                                    ?>
                                </div>
                            <?php } ?>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>

                    <div class="featured-logo animate fadeIn">
                        <picture class="object-fit">
                            <img src="./assets/media/design/logo-buriram-full-white.svg" alt="">
                        </picture>
                    </div>
                </div>

                <div class="content">
                    <div class="featured-header">
                        <p class="subtitle c-theme size-overline" data-split data-split-animate>นิทรรศการ</p>
                        <h2 class="title" data-split data-split-animate>Colors of Buriram 2025</h2>
                    </div>

                    <div class="featured-content">
                        <p class="animate fadeIn">นับจาก Colors of Buriram 2567
                            ปีแรกของการจัดมหกรรมนำผ้าพื้นถิ่นสู่แฟชั่นระดับ
                            อินเตอร์ ซึ่งได้เขียนประวัติศาสตร์หน้าใหม่ของ
                            ‘การท่องเที่ยวเชิงแฟชั่น’ ขึ้นเป็นครั้งแรกในประเทศไทย
                            มาถึงปีที่สองของการจัดงาน ซึ่งผ้าไทยยังคงเป็นตัวชูโรงเช่นเคย และชักชวนช่างฝีมือพื้นถิ่นผู้ผลิตงานศิลป์พื้นบ้านจากหลากหลายอำเภอมาร่วมกันแสดงพลังว่า
                            <br><strong>บุรีรัมย์: ไม่ทำ-มะ-ดา</strong>
                            <br><br>
                            Colors of Buriram 2568
                            จุดประกายการถักทอครั้งใหม่ของหัตถศิลป์ท้องถิ่นทั่ว
                            บุรีรัมย์ที่ชวนไปทำความรู้จักกับผ้าไทยชิ้นเก่าแก่แรร์
                            หายาก ชมความบากบั่นของยังดีไซเนอร์ที่มุ่งทำผ้าทอ
                            พื้นบ้านให้เป็นแฟชั่นไทยใส่สนุก ยลภารกิจปลุกชีพใหม่ให้
                            เฟอร์นิเจอร์ใกล้ตัวสู่ของใช้เชิงสร้างสรรค์ ส่องวิถีช่าง
                            ชาวบ้านที่ไปโลดแล่นบนภาพยนตร์ของผู้กำกับซีรีส์ไทย
                            อันดับ 1 ของโลก และชื่นชมผลิตภัณฑ์ต่างๆ ที่เกิดจาก
                            การพลังสามประสานของช่างฝีมือ มรดกของบุรีรัมย์ และแบรนด์ไทยระดับนานาชาติ
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section data-section="dual-image">
        <div class="sc-inner">
            <div class="container">
                <div class="dual-image-container">
                    <div class="image-display inner-parallax">
                        <?php
                        $section_cover = "./assets/media/design/dual-image-1.jpg";
                        $section_cover_m = "";
                        include("include/function-group.php");
                        ?>


                        <h2 class="image-caption c-white" data-split data-split-animate>
                            นิทรรศการ ผ้าไทย
                            หัตถศิลป์ท้องถิ่น
                            ภูมิปัญญาและวัฒนธรรม
                            จากบุรีรัมย์
                        </h2>
                    </div>

                    <div class="image-display inner-parallax">
                        <?php
                        $section_cover = "./assets/media/design/dual-image-2.jpg";
                        $section_cover_m = "";
                        include("include/function-group.php");
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section data-section="room-card-slider">
        <div class="sc-inner">
            <div class="container">
                <div class="sc-header">
                    <h2 class="sc-ttl" data-split data-split-animate>ROOM</h2>
                </div>

                <div class="card-container" data-card-layout="slider">
                    <div class="swiper auto">
                        <div class="swiper-wrapper">
                            <?php
                            $room_arr = [
                                [
                                    "image" => "./assets/media/design/card-slider-image-1.jpg",
                                    "title" => "The Traditions",
                                    "subtitle" => "Colors of Buriram ",
                                    "description" => "2568 จุดประกายการถักทอครั้งใหม่ของหัตถศิลป์ท้องถิ่นทั่วบุรีรัมย์ที่ชวนไปทำความรู้จักกับผ้าไทยชิ้นเก่าแก่แรร์หายาก ชมความบากบั่นของยังดีไซเนอร์ที่มุ่งทำผ้าทอพื้นบ้านให้เป็นแฟชั่นไทยใส่สนุก ยลภารกิจปลุกชีพใหม่ให้เฟอร์นิเจอร์ใกล้ ตัวสู่ของใช้เชิงสร้างสรรค์ ส่องวิถีช่างชาวบ้านที่ไปโลดแล่นบนภาพยนตร์ของผู้กำกับซีรีส์ไทยอันดับ 1 ของโลก และชื่นชมผลิตภัณฑ์ต่างๆ ที่เกิดจากการพลังสามประสานของช่างฝีมือ มรดกของบุรีรัมย์ และแบรนด์ไทยระดับนานาชาติ"
                                ],
                                [
                                    "image" => "./assets/media/design/card-slider-image-2.jpg",
                                    "title" => "The Cultivation in Fashion",
                                    "subtitle" => "Colors of Buriram ",
                                    "description" => "2568 จุดประกายการถักทอครั้งใหม่ของหัตถศิลป์ท้องถิ่นทั่วบุรีรัมย์ที่ชวนไปทำความรู้จักกับผ้าไทยชิ้นเก่าแก่แรร์หายาก"
                                ],
                                [
                                    "image" => "./assets/media/design/card-slider-image-3.jpg",
                                    "title" => "The Cultivation of Creation Creativity Lifestyle",
                                    "subtitle" => "Colors of Buriram ",
                                    "description" => "2568 จุดประกายการถักทอครั้งใหม่ของหัตถศิลป์ท้องถิ่นทั่วบุรีรัมย์ที่ชวนไปทำความรู้จักกับผ้าไทยชิ้นเก่าแก่แรร์หายาก ชมความบากบั่นของยังดีไซเนอร์ที่มุ่งทำผ้าทอพื้นบ้านให้เป็นแฟชั่นไทยใส่สนุก ยลภารกิจปลุกชีพใหม่ให้เฟอร์นิเจอร์ใกล้ ตัวสู่ของใช้เชิงสร้างสรรค์ ส่องวิถีช่างชาวบ้านที่ไปโลดแล่นบนภาพยนตร์ของผู้กำกับซีรีส์ไทยอันดับ 1 ของโลก และชื่นชมผลิตภัณฑ์ต่างๆ ที่เกิดจากการพลังสามประสานของช่างฝีมือ มรดกของบุรีรัมย์ และแบรนด์ไทยระดับนานาชาติ"
                                ],
                                [
                                    "image" => "./assets/media/design/card-slider-image-1.jpg",
                                    "title" => "The Traditions",
                                    "subtitle" => "Colors of Buriram ",
                                    "description" => "2568 จุดประกายการถักทอครั้งใหม่ของหัตถศิลป์ท้องถิ่นทั่วบุรีรัมย์ที่ชวนไปทำความรู้จักกับผ้าไทยชิ้นเก่าแก่แรร์หายาก ชมความบากบั่นของยังดีไซเนอร์ที่มุ่งทำผ้าทอพื้นบ้านให้เป็นแฟชั่นไทยใส่สนุก ยลภารกิจปลุกชีพใหม่ให้เฟอร์นิเจอร์ใกล้ ตัวสู่ของใช้เชิงสร้างสรรค์ ส่องวิถีช่างชาวบ้านที่ไปโลดแล่นบนภาพยนตร์ของผู้กำกับซีรีส์ไทยอันดับ 1 ของโลก และชื่นชมผลิตภัณฑ์ต่างๆ ที่เกิดจากการพลังสามประสานของช่างฝีมือ มรดกของบุรีรัมย์ และแบรนด์ไทยระดับนานาชาติ"
                                ],
                                [
                                    "image" => "./assets/media/design/card-slider-image-2.jpg",
                                    "title" => "The Cultivation in Fashion",
                                    "subtitle" => "Colors of Buriram ",
                                    "description" => "2568 จุดประกายการถักทอครั้งใหม่ของหัตถศิลป์ท้องถิ่นทั่วบุรีรัมย์ที่ชวนไปทำความรู้จักกับผ้าไทยชิ้นเก่าแก่แรร์หายาก"
                                ],
                            ];

                            foreach ($room_arr as $index => $room) {
                            ?>
                                <div class="swiper-slide">
                                    <div class="card animate fadeIn" data-card="room" data-wow-delay="<?= $index * 0.2 ?>s">
                                        <div class="card-image overlay" style="--gradient-opacity: 0.2;">
                                            <?php
                                            $section_cover = $room["image"];
                                            $section_cover_m = "";
                                            include("include/function-group.php");
                                            ?>
                                            <h3 class="card-ttl c-white">
                                                Room <?= $index + 1 ?>
                                                <br><?= $room["title"] ?>
                                            </h3>
                                        </div>

                                        <div class="card-content">
                                            <p class="card-subttl"><?= $room["subtitle"] ?></p>
                                            <p class="description"><?= $room["description"] ?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section data-section="index-masonry-gallery" class="bg-beige">
        <div class="sc-inner">
            <div class="masonry-grid">
                <div class="masonry-grid-item-sizer"></div>
                <div class="masonry-grid-gutter-sizer"></div>
                <?php
                for ($i = 1; $i <= 9; $i++) {
                ?>
                    <div class="masonry-grid-item">
                        <picture class="object-fill-width">
                            <img src="./assets/media/design/gallery-<?= $i ?>.jpg" alt="" class="animate fadeIn">
                        </picture>
                    </div>
                <?php
                }
                ?>
            </div>

            <a href="javascript:;" class="button load-more">
                ดูทั้งหมด
            </a>

        </div>
    </section>

    <section data-section="index-map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3854.4829163667596!2d103.09178907644869!3d14.965874568026745!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3119943080e722c5%3A0xc3c18ab0cea1a550!2z4LiK4LmJ4Liy4LiH4Lit4Liy4Lij4Li14LiZ4Liy!5e0!3m2!1sth!2sth!4v1741150235076!5m2!1sth!2sth"
            width="600"
            height="450"
            style="border:0;"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>

        <div class="map-content animate fadeIn">
            <p class="map-caption size-h4 c-white">COLORS OF BURIRAM 2025 19 มีนาคม ถึง 16 เมษายน เวลา 11:00-21:00 ณ ช้างอารีนา, บุรีรัมย์</p>
            <a href="javascript:;" class="button secondary c-white">
                ดูเส้นทาง
            </a>
        </div>
    </section>
</main>

<?php include($root . "footer.php"); ?>

<script>
    $('.load-more').on('click', function() {
        var originalItems = $('.masonry-grid-item').slice(0, 9).clone();
        var grid = $(this).closest("section").find('.masonry-grid');

        grid.append(originalItems).masonry('appended', originalItems);
        grid.masonry('layout');
    });
</script>