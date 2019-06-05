<?php get_header(); ?>

    <div class="error-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ">
                    <div class="error-text">
                        <h1 class="error">404 Hata</h1>
                        <h4>Üzgünüm! Aradığınız sayfayı bulamadım!</h4>
                        <p>Aradığınız sayfa mevcut değil, kaldırıldı ya da ismi değiştirildi. Lütfen başka bir sayfa ile devam ediniz.</p>
                        <a href="<?=get_site_url();?>" class="btn btn-danger rounded-pill">Ana Sayfa'ya Git</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>