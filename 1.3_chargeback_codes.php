<?php include_once 'header.php'; ?>

<h2 class="zagolovok_h2">
    Коды чарджбэк
</h2>

<div class="container proba">
    Основной функцией Платежных систем является стабильный и надежный оборот денежных средств. Однако с
    ростом числа держателей пластиковых карт пропорционально вырастает количество людей, обманутых
    различными способами. Таких способов множество, поэтому платежные системы и ввели каталогизацию, а
    именно, коды, необходимые для более быстрой обработки возникшего спора.
    <br/>
    <br/>
    Для грамотного инициирования процедуры чарджбэк нужно определить код исходя из Вашей сложившейся
    ситуации. Также рекомендуем изучить особенности Вашей платежной системы VISA, MasterCard, МИР.
    <br/>
    <br/>
    Указанные в нижеприведенных таблицах коды актуальны на 29.05.2019 и взяты из правил Visa Core Rules,
    Chargeback Guide (MasterCard), Правил Платежной Системы “МИР”.
    <br/>
    <br/>

    <div class="rekvizit">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-sm">
                    <div class="row justify-content-center">
                        <p>MasterCard, 14 Мая 2020</p>
                        <a href="https://www.mastercard.us/content/dam/mccom/global/documents/chargeback-guide.pdf"><img
                                    src="https://charge-backer.ru/wp-content/uploads/2020/01/2.png" alt=""></a>
                    </div>
                </div>

                <div class="col-sm">
                    <div class="row justify-content-center">
                        <p>Visa, 18 April 2020</p>
                        <a href="https://usa.visa.com/dam/VCOM/download/about-visa/visa-rules-public.pdf">"<img
                                    src="https://charge-backer.ru/wp-content/uploads/2020/01/5-1.png"
                                    alt=""></a>
                    </div>
                </div>

                <div class="col-sm">
                    <div class="row justify-content-center">
                        <p>МИР, 25 декабря 2019</p>
                        <a href="https://www.nspk.ru/upload/iblock/34d/%D0%9F%D1%80%D0%B0%D0%B2%D0%B8%D0%BB%D0%B0%20%D0%9F%D0%A1%20%D0%9C%D0%B8%D1%80_v.3.1.pdf">
                            <img src="https://charge-backer.ru/wp-content/uploads/2020/01/4-2.png"
                                 alt=""></a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <br/>
    <br/>

    <b>Важно:</b>если Вы сомневаетесь в используемом коде, его можно не указывать. В таком случае присвоение
    кода остается за банковским специалистом.

    <h3 style="color:green;-webkit-text-stroke: 0.2px black">
        Коды чарджбэк VISA:
    </h3>
    <!--                <img src="/img/1_2_visa.png" alt="">-->
    <img src="https://charge-backer.ru/wp-content/uploads/2020/01/1-4.png" alt="виза">
    <br/>
    <br/>

    <h3 style="color:green;-webkit-text-stroke: 0.2px black">
        Коды чарджбэк MasterCard:
    </h3>
    <!--                <img src="/img/1_2_mastercard.png" alt="">-->
    <img src="https://charge-backer.ru/wp-content/uploads/2020/01/2-4.png" alt="мастеркард">
    <br/>
    <br/>

    <h3 style="color:green;-webkit-text-stroke: 0.2px black">
        Коды НПС МИР:
    </h3>
    <!--                <img src="/img/1_2_mir.png" alt="">-->
    <img src="https://charge-backer.ru/wp-content/uploads/2020/01/3-4.png" alt="мир">
    <br/>
    <br/>

    В случае разрешения спорных ситуаций с брокерами:
    <br/>
    <br/>
    1. ПРАВИЛА ПЛАТЕЖНОЙ СИСТЕМЫ «МИР» ПРИЛОЖЕНИЕ 6 ПОРЯДОК РАЗРЕШЕНИЯ ДИСПУТОВ
    Часто используваемый нами код, для возврата денежных средств: Диспутный код 4555 “Приобретенные товары
    не доставлены / услуги не оказаны / работы не выполнены” (ДК 4555). стр. 20.
    <br/>
    <br/>
    2. Chargeback Guide от 13 December 2018.
    <br/>
    <br/>
    Рекомендуемый код для возврата денежных средств: Interregional Message Reason Code 4855—Goods or
    Services Not Delivered (товары или услуги не поставляются) стр. 316.
    <br/>
    <br/>
    3. Visa Core Rules and Visa Product and Service Rules от 13 October 2018.
    Часто используваемый нами код для возврата денежных средств: Dispute Condition 13.5: Misrepresentation
    Dispute Reasons(продавец ввел в заблуждение) или Dispute Condition 13.1: Merchandise/Services Not
    Received Supporting Documentation/Certification (товары/услуги не получены) стр. 691 и стр.706
    <br/>
    <br/>
</div>

<? include_once 'form_baza.php' ?>

<? include_once 'footer.php' ?>
