<? get_header(); ?>


    <section id="content" class="offset2 span6">
            <!--Здесь находятся вкладки и их содержимое-->
                    <div id="tab1" class="currentTab"><!--Первая вкладка - активная-->
                        <ul>
                            <li id="menu2box" class="menu2 box">
                                <img src="wp-content/themes/maketir/img/listview/printer.jpg">
                            </li>

                            <li id="menu3box" class="menu3 box">
                                <img src="wp-content/themes/maketir/img/listview/model.jpg">
                            </li>

                            <li id="menu4box" class="menu4 box">
                                <img src="wp-content/themes/maketir/img/listview/forma.jpg">
                            </li>

                            <li id="menu5box" class="menu5 box">
                                <img src="wp-content/themes/maketir/img/listview/lepnina.jpg">
                            </li>

                            <li id="menu6box" class="menu6 box">
                                <img src="wp-content/themes/maketir/img/listview/materials.jpg">
                            </li>
                            <br />
                            <li>
                                <iframe width="315" height="180" src="http://www.youtube.com/embed/jVM4gxW2Ams?rel=0" frameborder="0" allowfullscreen></iframe>    
                                <iframe width="315" height="180" src="http://www.youtube.com/embed/vOUWGNmuBeA?rel=0" frameborder="0" allowfullscreen></iframe>    
                            </li>
                            <br />
                            <li>
                                <div id="vk_groups"></div>
                            </li>
                        </ul>
                    </div>

                    <div id="tab2"><strong>3Д принтеры и сканеры:</strong><hr>
                        <article>
                            <?php
                                if ( have_posts() ) : // если имеются записи в блоге.
                                    query_posts('cat=stores');   // указываем ID рубрик, которые необходимо вывести.
                                    while (have_posts()) : the_post();  // запускаем цикл обхода материалов блога
                            ?>
                            <div class="item">
                                <strong><?php the_title(); ?></strong>
                                <?php the_content();?>
                            </div> 
                            <hr>
                                <?php                          
                                    endwhile;  // завершаем цикл.
                                endif;
                                    /* Сбрасываем настройки цикла. Если ниже по коду будет идти еще один цикл, чтобы не было сбоя. */
                                    wp_reset_query();      
                                ?>
                        </article>
                    </div>

                    <div id="tab3">
                        <p>Cтоимость работ: Услуги 3Д-печати всего 360руб/час работы принтера с учётом материала и НДС. Необходим файл для печати в формате STL.</p>
                        <p>Мы печатаем на следующем оборудовании:</p>
                        <div class="span5 inline">
                            <img src="wp-content/themes/maketir/img/replicator.jpg" width="50%">
                            <br />
                            <strong>MakerBot Replicator</strong>
                            <p> Толщина слоя 0,14...0,27мм,
                                размеры стола 150 х 220 х 145(высота),
                                материал для печати АБС, ПЛА, ПВА и др. различных цветов.
                            </p>
                        </div>

                        <div class="span5 inline">
                            <img src="wp-content/themes/maketir/img/mbot.jpg" width="50%">
                            <br />
                            <strong>MBot CUBE</strong>
                            <p> Толщина слоя 0,14...0,27мм,
                                размеры стола 200 х 200 х 200(высота),
                                материал для печати АБС, ПЛА, ПВА и др. различных цветов.
                            </p>
                        </div>
                        <strong><p>Также возможен заказ печати на фотополимерном принтере.</p></strong>
                                                

                        <div id="one">
                            <script>
                                var one = document.getElementById('one');
                                for(i=1; i<219; i++){
                                    one.insertAdjacentHTML("afterEnd", "<a class='example-image-link' href='wp-content/themes/maketir/img/prints/"+i+".jpg' data-lightbox='example-set'><img class='example-image' src='wp-content/themes/maketir/img/prints/"+i+"_preview.jpg' width='130' height='98'/></a>");
                                }
                            </script>
                        </div>

                    </div>

                    <div id="tab4">
                        <strong>Формы для литья и отлитые детали</strong>
                        <p>Можно заказать формы из полиуретана или силикона по Вашей модели (образцу) или модели, напечатанной на нашем принтере.
                        <strong>Применение:</strong> для литья гипса, литого монолита, бетона и цементных смесей, для изготовления мыла ручной работы, для отливок из воска (выплавляемые модели или свечи)</p><br />

                        <div id="two">
                            <script>
                                var two = document.getElementById('two');
                                for(i=1; i<118; i++){
                                two.insertAdjacentHTML("afterEnd", "<a class='example-image-link' href='wp-content/themes/maketir/img/lityo/"+i+".jpg' data-lightbox='example-set'><img class='example-image' src='wp-content/themes/maketir/img/lityo/"+i+"_preview.jpg' width='130' height='98'/></a>");
                                    }
                            </script>
                        </div>
                    </div>

                    <div id="tab5">
                        Макеты, созданные руками мастеров - можно использовать для прототипов или сувениров (различные материалы).<br />
                        <strong>Стоимость работ:</strong> Услуги по лепнине от 6000 руб/кв.метр, живопись от 3000 руб/кв.метр.<br />Минимальный объем заказа - от 2 кв.метров.<br />
                        <a href="wp-content/themes/maketir/content/lepnina_v_interyere.doc">Лепнина в интерьере</a><br />

                        <div id="three">
                            <script>
                                var three = document.getElementById('three');
                                for(i=1; i<7; i++){
                                three.insertAdjacentHTML("afterEnd", "<a class='example-image-link' href='wp-content/themes/maketir/img/lepnina/"+i+".jpg' data-lightbox='example-set'><img class='example-image' src='wp-content/themes/maketir/img/lepnina/"+i+"_preview.jpg' width='130' height='98'/></a>");
                                    }
                            </script>
                        </div>
                    </div>

                    <div id="tab6"><p><strong>Прайс по материалам:</strong><p>
                        <button id="lookButton">Просмотр</button>
                        <button id="loadButton">Загрузка</button>
                        <div id="materialsView"></div>
                    </div>

                    <div id="tab7">
                        <article>
                            <h3>Реквизиты:</h3>
                            <strong>Общество с ограниченной ответственностью "МАКЕТиР"</strong><br>
                            <strong>ИНН:</strong> 7448151686  <strong>|   КПП</strong> 744801001<br>
                            <strong>Юридический адрес:</strong> Россия, 454008, г. Челябинск, Свердловский тракт, 7-Б<br>
                            <strong>Банк получатель:</strong>  Отделение N8597 Сбербанка России<br>
                            <strong>р/с:</strong> 40702810272190000272  <strong>|  к/с:</strong> 30101810700000000602  <strong>|   БИК:</strong> 047501602<br>
                            <strong>ОГРН:</strong> 1127448010161  <strong>|   ОКПО:</strong> 21481162  <strong>|    ОКАТО:</strong> 75401366000<br>
                            <strong>Тел.:</strong>  8 (351) 7-505-205, 8 (351) 7-505-204, +7-919-323-60-20<br>
                            <strong>http:</strong> <i>www.maketir.ru,  http://vk.com/club39116674;</i><br>
                            <strong>e-mail:</strong> <i>Maketirovanie@gmail.com</i><br>
                            <strong>Директор ООО «МАКЕТиР»</strong> Ермаков Данил Владимирович<br><br>
                        </article>

                        <article>
                            <h3>Наши партнеры:</h3>
                            <strong>Лаборатория трёхмерной печати</strong><br>
                            Поставщик компании MakerBot в России<br>
                            <a href="http://shop.lab3dprint.ru/">http://shop.lab3dprint.ru/</a>
                            <details>
                                <summary><strong>Подробнее:</strong><br /></summary>
                                    Иван: +7(964)536-36-18, Сергей: +7-916-770-78-13<br>
                                    <strong>Skype:</strong> <i>moshkinivan</i><br>
                                    <strong>email:</strong> <i>info@lab3dprint.ru</i><br>
                                    <strong>email:</strong> <i>print@lab3dprint.ru</i> для отправки stl файлов на просчет и дальнейшую печать.<br>
                                    <strong>Адрес:</strong> Москва, 101000, Хохловский пер. д.7/9, стр.2 офис 301. м.Китай-Город.
                            </details><br />
                        </article>
                    </div>
    </section>

    <? get_footer(); ?>