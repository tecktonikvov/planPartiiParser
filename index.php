<?
dump($_POST);
?><link rel="stylesheet" type="text/css" href="/views/assets/pages/data-table/css/buttons.dataTables.min.css">
<link rel="stylesheet" type="text/css"
      href="/views/bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css">
<style>

    .page-body{

    }
    .partija__all{
        width: 100%;
        display: flex;
        justify-content: right;
        width: 84vw;
        height: 100%;
        background-color: green;
        flex-wrap: wrap;
    }
    .section_left{
        width: 50%;
        height: 100%;
        background-color: #1ccacd;
    }
    .section_right{
        width: 50%;
        height: 500px;
        background-color: yellow;
    }
    .section_right textarea{
        width: 100%;
    }
    form{
        width: 100%;
    }
    .form-group{
        display: contents;
    }
</style>

<?php
$text_plan = '204060D-2010D1-204161R-204262J-204263K-2010D2-204364R
План (204770K,204871O,2012D1,204872D,204973R,205074J,205075K,2012D2) выслать на утвержд. 20.08, утвердить 20.08 и согласовать с поставщиком 27.08.2020
204060D-2010D1-204161R-204262J Кобзарь-Дроздов-Бершадская-Соболева ответственные 
Отправка 204060D+2010D1+204161R+204262J  DI 22.09.2020, +сканы писем и выплат+Webgesch
PostCH 60D FR 25.09.2020, 2010D1 DI 29.09, 61R DO 01.10.2020, 62J DI 06.10.2020
204263K-2010D2-204364R Панасюк- Власенко-Федорук-Соболева ответственные 
Отправка 204263K+2010D2+204364R DI 06.10.2020, +сканы писем и выплат+Webgesch
PostCH 63K FR 09.10, 2010D2 DI 13.10, 64R FR 16.10.2020
Адреса  60D,10D1,61R,62J +макет чека – 28.07 (22.07), 63K,10D2,64R+макет чека – 28.07 (04.08)
(Aend. 60D,10D1,61R,62J 15.09.2020, 63K,10D2,64R 29.09.2020
Печатн. продукц мониторинг 
60D,10D1,61R,62J  – в день отправки 60D адресов на утвержд. 
63K,10D2,64R  – в день отправки 63K адресов на утвержд. 
Представители 
61R,62J  найти 07.07, утверд 08.07, ведомость выплат 08.07
63K, 64R  найти 21.07, утверд 22.07, ведомость выплат 22.07
Фотосъемки 62FM(B) нуждающийся молодежная-11.07, 60D(B) 18.07
60D,10D1,61R,62J     (D,DB) 25.07 (план 23.06) (отчет)
63K,10D2,64R    (D,DB) 08.08 (план 11.07) (отчет)
(первый звонок для связи с представителем делает директор) 
Ведомость выплат 60D,10D1,61R,62J (D,DB) 25.07, 63K,10D2,64R  (D,DB) 08.08
Сдача писем  60D,10D1,61R,62J  (B)- 08.09, 63K,10D2,64R  (B)- 22.09
60D,10D1,61R,62J  (DB+D) 14.09.2020, 63K,10D2,64R (DB+D) 28.09.2020
204060D Weihnacht-Aktion+1, открытка, брошюра Nik(B+DB), WW
2010D1 Детский дом (71О-Одинокий чел, 77О- Многодетн.семья)
204161R  брошюра F(B) нужд. девочка, серая газетная бумага, M(B) фотоген. мальчик, бумага серая в линию В2
Голуб Владислав  (онко) 202233R R-Gow DВ Retten 01 бордовые розы 
Панченко Александр (бытовая травма) 200710К К-Alp, Kranke 02 темный узор 
204262J Weihnacht-Aktion брошюра К(B) (показат. реанимация) серая газ. бум.
Златьева Оксана (дочь Зверева Стефания) (онко) 203146К К-Sws DВ Kranke 01 золотой узор
Порудеева Татьяна (дочь Анна) (показат. реаним.) 192537R R-Pan, Вместо умер Васильченко Егор (гнойн. хирургия-умер) 201725R R-WE DВ 54 оранжевая линия
J(DB) Карпенко Светлана F- Kas (DB), Шатайло Игнатий М-Igs(DB), 201826J Jug 01разноцв. абстракция
204263K K(B) большая партия, (онко)  серая газ. бум.
Лазаренко Лилия (сын Андрей) (гнойн. хирург.) 202334K K-LA DВ Kranke 01 золотой узор
Голец Александр (супруга Ильина Елена) (ожог) 200913R R-Ago DВ 63 цветущая сакура
2010D2 , открытка TF(B+DB),OF(DB), KO(G) 
(Тоница Александр (дочь Дарья) (показат. реаним.) R-Ton 194161R, Васюнин Александр (без конечности) К-Awas 194263К, Голян Александр (гнойная хирургия) R-Goa 194364R, Пишенина Яна (многодетная семья) O-PJ 194465О)
204364R , Открытка TF(B+DB),OF(DB), KO(G) 
Середа Кирилл (онко) 202537R R-Kis DB Retten 02 зеленй голубь 
Догорученко Вера (дочь Вероника) (гнойн. хирург.) 201015К К-Dow, DВ 64 розовые линии

';
$arr_kol = ['204263K' => 'Всего адресов	2077
Всего писем	2338
63K-Koe(B)	2077
LA(DB)	102
Ago(D)	159',
        '2010D1'=> 'Всего адресов	2102
Всего писем	2528
Emal(B)	1861
Emal(DB)	241
Emiro(DB)	225
Eire(DB)	201',
        '204060D'=> 'Всего адресов	1300
Всего писем	1493
Nik(B)	841
Nik(DB)	450
WW(DB)	202',
        '204161R' => 'Всего адресов	900
Всего писем	1083
61R-EL(B)	900
Gow(DB)	90
Alp(D)	93',
        '204262J' => 'Всего адресов	419
Всего писем	734
F-Wer(B)	365
M-Tyd(B)	301
Kas(DB)	33
Igs(DB)	35',
        '2010D2' => 'Всего адресов	985
Всего писем	1091
Isu(B)	811
Isu(DB)	166
OF(DB)	114',
        '204364R' => 'Всего адресов	752
Всего писем	974
34K-Alet(B)	715
Man(DB) 	91
Ssw(D)  	168'];

// ЭТО ВЫВОДИТСЯ ЕСЛ КНОПКА ОТПРАВИТЬ НЕ НАЖАТА
$body =
'<div class="main-body">
    <div class="page-wrapper">
        <div class="page-header">
            <div class="page-header-title" style="width: 100%">
            </div>
        </div>

        <div class="page-body">
            <form action="#" method="post">
            <div class="partija__all">
                <div class="formbuilder-text form-group">
                    <label for="" class="formbuilder-text-label">Все партии в отправке</label><input type="text" class="form-control" name="all_partii_num" access="false" id="" value="">
                </div>
                <div class="formbuilder-date form-group">
                    <label for="" class="formbuilder-date-label">Дата отправки</label><input type="date" class="form-control" name="" access="false" id="">
                </div>
            </div>

            <div class="section_left">
                <div class="partija__container partija__block__one">
                    <div class="formbuilder-text form-group">
                     <label for="" class="formbuilder-text-label">Номер партии</label><input type="text" class="form-control" value="202020Xui" name="" access="false" id="number_partii">
                    </div>
                    <div class="formbuilder-textarea form-group">
                        <label for="" class="formbuilder-textarea-label">Количество адресов в партии</label><textarea type="textarea" class="form-control" name="" access="false" id=""></textarea>
                    </div>
                    <div class="formbuilder-checkbox-group form-group">
                        <label for="" class="formbuilder-checkbox-group-label">Печатная продукция в партии (заказная)&nbsp;</label>
                        <div class="checkbox-group zakaz">
                            <div class="formbuilder-checkbox tschek_zak">
                                <input name="" access="false" id="" value="Чек" type="checkbox"><label for="">Чек</label>
                            </div>
                            <div class="formbuilder-checkbox broshuere_zak">
                                <input name="" access="false" id="" value="Брошюра" type="checkbox"><label for="">Брошюра</label>
                            </div>
                            <div class="formbuilder-checkbox otkr_zak">
                                <input name="" access="false" id="" value="Отркытка" type="checkbox"><label for="">Отркытка</label>
                            </div>
                            <div class="formbuilder-checkbox infobrief_zak">
                                <input name="" access="false" id="" value="Инфобриф" type="checkbox"><label for="">Инфобриф</label>
                            </div>
                        </div>
                    </div>
                    <div class="formbuilder-checkbox-group form-group">
                        <label for="" class="formbuilder-checkbox-group-label">Печатная продукция в партии (обычная)</label>
                        <div class="checkbox-group">
                            <div class="formbuilder-checkbox">
                                <input name="" access="false" id="" value="Чек" type="checkbox"><label for="">Чек</label>
                            </div>
                            <div class="formbuilder-checkbox">
                                <input name="" access="false" id="" value="Брошюра" type="checkbox"><label for="">Брошюра</label>
                            </div>
                            <div class="formbuilder-checkbox">
                                <input name="" access="false" id="" value="Отркытка" type="checkbox"><label for="">Отркытка</label>
                            </div>
                            <div class="formbuilder-checkbox">
                                <input name="" access="false" id="" value="Инфобриф" type="checkbox"><label for="">Инфобриф</label>
                            </div>
                        </div>
                    </div>
                    <div class="formbuilder-text form-group">
                        <label for="" class="formbuilder-text-label">Акция (если есть)</label><input type="text" class="form-control" name="" access="false" id="">
                    </div>
                </div>
                <button class="btn btn-primary" name="submit" type="submit">Otpravit</button>
            </div>

            <div class="section_right">
                <form action="#">
                    <textarea name="plan_data" id="plan_data" rows="50" placeholder="Текст плана" >
                       
                    </textarea>
                </form>
            </div>
            </form>
        </div>
    </div>
</div>
';

//ЕСЛИ КНОПКА ОТПРАВИТЬ НАЖАТА ТО НАЧИНАЕМ ОБРАБОТКУ

if(isset($_POST['submit']) OR isset($_POST['save'])){
    $arr_plan_partii = explode("\n", $_POST['plan_data']);

// ВЫВОДИМ часть ХТМЛ КОДА
    echo '
<div class="main-body">
    <div class="page-wrapper">
        <div class="page-header">
            <div class="page-header-title" style="width: 100%">
            </div>
        </div>


        <div class="page-body">
            <form action="#" method="post">
            <div class="partija__all">
                <div class="formbuilder-text form-group">
                <label for="" class="formbuilder-text-label">Все партии в отправке</label><input type="text" class="form-control" name="all_partii_num" access="false" id="" value="' . $arr_plan_partii[0] . '">
            </div>
          
<div class="section_left">';

    // ОБРАБАТЫВАЕМ ПЛАН ПАРТИИ ПОСТРОЧНО
    foreach($arr_plan_partii as $k => $v){

        // ДОСТАЕМ ДАТУ ОТПРАВКИ ПАРТИЙ
        if(stristr($v,  "Отправка")){
            $v = trim(stristr($v,  "Отправка"), "Отправка ");
            $num = explode(" ", $v);
            $pre="/\d{1,2}\.\d{1,2}\.\d{2,4}/";
            preg_match_all($pre, $v, $date);
            $num = array_slice($num, 0,1); // ОСТАВЛЯЕМ ТОЛЬКО 1 ЕЛЕмент в массиве ДАТУ

            // Експлодим номенра партий в одной отправке во второй елемент массива $num
            $num['date'] = $date[0][0];
            $num['partii'] = explode("+", $num[0]);
            //$num Массив 0 елемет которого номера парии 1й дата отправки из плана партии
            $num['partii'] = array_flip($num['partii']);

            //Добавляем количесство адресов
            foreach ($num['partii'] as $k => $v) {   // Ищим Брошюры или открытки в плане партии

                foreach($arr_kol as $key => $value){
                    if($k == $key){
                        $num['partii'][$k] = trim($value, " ");
                    }
                }

                foreach($arr_plan_partii as $sting){
                    $sting = str_ireplace('К', 'K',$sting); // Заменяем русские символы на англ в номерах партий
                    $sting = str_ireplace('О', 'О',$sting); // Заменяем русские символы на англ в номерах партий

                    if(stristr($sting, $k) && stristr($sting, "брошюра")){
                        $num['broshure'] = $k;
                    }

                    if(stristr($sting, $k) && stristr($sting, "открытка")){
                        $num['otkritka'] = $k;
                    }
                }

                echo '
                <hr>
                <div class="partija__container partija__block__one">
                    <div class="formbuilder-text form-group">
                        <label for="" class="formbuilder-text-label">Номер партии</label><input type="text" class="form-control" value="' . $k. '" name="" access="false" id="number_partii">
                    </div>
                    <div class="formbuilder-date form-group">
                        <label for="" class="formbuilder-date-label">Дата отправки</label><input type="text" class="form-control" name="" value="' . $num['date'] . '" access="false" id="">
                    </div>
                    <div class="formbuilder-textarea form-group">
                        <label for="" class="formbuilder-textarea-label">Количество адресов в партии</label>
                        <textarea rows="10" type="textarea" class="form-control" name="" access="false" id=""> ' . $num['partii'][$k] . '   </textarea>
                    </div>';

                foreach ($arr_plan_partii as $str){
                    $str = str_ireplace($k, '', stristr($str,$k)); // Находим строку в которой есть номер парии и обрезаем у нее номер партии

                    if (strpos($str, ' брош')) $needle = ' брош';
                    if (strpos($str, ' Брош')) $needle = ' Брош';
                    if (strpos($str, ' откр')) $needle = ' откр';
                    if (strpos($str, ' Откр')) $needle = ' Откр';  // Если в строке содержиться подстрока ' брош' или ' откр'
                    if(isset($needle)){
                        $str = mb_substr($str, 0, strpos($str, $needle)); // То находим позицию вхождения подстроки и обрезаем её до этой длинны
                        $str = trim($str,',  ' );
                        $str = preg_replace("/[^,\p{Latin}\d\s\:+-]/ui", '', $str); // Отбираем в сроке только латиницу, цифры, пробелы и двоеточие и +
                        if (strlen($str) <= 12) continue;

                        else $num['action_'.$k] = $str; //   В этой переменной Названии акции
                        echo $str;
                        $action = $str;

                        if(!isset($action)){
                            $action = '';
                        }
                    }
                }
                $is_checked_brosh = '';
                $is_checked_otkritka = '';

                if(isset($num['broshure']) && $num['broshure'] == $k) $is_checked_brosh = 'checked';
                if(isset($num['otkritka']) && $num['otkritka'] == $k) $is_checked_otkritka = 'checked';
                echo ' <label for="" class="formbuilder-checkbox-group-label">Печатная продукция в партии (заказная)&nbsp;</label>';

                            if(isset($action)){
                                  echo' <h3 style="color: red;" class="action" > ' .$action. '</h3>';
                            }
                                echo '<div class="checkbox-group zakaz">
                                 <div class="formbuilder-checkbox tschek_zak"><input name="" access="false" id="" value="Чек" type="checkbox"><label for="">Чек</label></div>
                                 <div class="formbuilder-checkbox broshuere_zak"><input name="" access="false"  id="" value="Брошюра" type="checkbox" '.$is_checked_brosh.' ><label for="">Брошюра</label></div>
                                 <div class="formbuilder-checkbox otkr_zak"><input name="" access="false" id="" value="Отркытка" type="checkbox" '.$is_checked_otkritka .'><label for="">Отркытка</label></div>
                                 <div class="formbuilder-checkbox infobrief_zak"><input name="" access="false" id="" value="Инфобриф" type="checkbox"><label for="">Инфобриф</label></div>
                                </div>
                                </div>   ';
                unset($action);
                unset($is_checked_brosh);
                unset($_POST['submit']);
            }
            if(isset($_POST['save'])){
                $num_partii_from_db = ORM::for_table('plan_partii')->find_many();
                if ($partia = ORM::for_table('plan_partii')
                    ->where('partija_num', 1111)
                    ->where('post_date', 222)
                    ->findOne()){
                    $partia
                        ->set('data','ttttt')
                        ->save();
                }else{
                    ORM::for_table('plan_partii')
                        ->create()
                        ->set('partija_num', 1111)
                        ->set('post_date', 222)
                        ->save();
                }
            }
        }

    }
    echo '';
    echo '
            </div>
                <div class="section_right">

                    <textarea name="plan_data" id="plan_data" rows="50" placeholder="Текст плана" > ' . $text_plan . ' </textarea>
                    <button class="btn btn-primary" name="submit" type="submit">Otpravit</button>
                     <button class="btn btn-primary" name="save" type="submit">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>';

}else{
    echo $body;
}


