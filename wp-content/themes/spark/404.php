<?php
/*
Theme Name: Spark
Theme URI: http://mkvadrat.com/
Author: M2
Author URI: http://mkvadrat.com/
Description: Тема для сайта http://mkvadrat.com/
Version: 1.0
*/

get_header(); 
?>

    <div class="content parallax-content">
        <div class="main__banner pad-l">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="spark-404" > 
                            <div id="planet-2" class="planet layer-2"></div>    
                        </div> 
                        <div class="mob-block">
                            <div class="mob-404"></div>
                            <div>
                                <h1>Ошибка 404</h1>
                            <p>Данная страница не найдена или удалена.</p>

                            <div class="btn-group-back">
                                <a href="javascript:void(0)" class="btn btn__link back" >Назад</a>
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn__link back">На главную</a>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
        </div>
    </div>
    <script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery('.back').click(function(){
            parent.history.back();
            return false;
        });
    });
    </script>
            
<?php get_footer(); ?>