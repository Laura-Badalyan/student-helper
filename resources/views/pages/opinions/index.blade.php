@extends('layouts.main')


@push('_title', "Կուրսեր")

@push('_styles')
    <link rel="stylesheet" href="{{asset('css/pages/home/index.css')}}">
@endpush

@section('content')

    <section class="global_margin">
        <div class="global_margin"></div>
        <div class="page_content">

            <h1 class="block_title fz4 global_margin">Կարծիքներ</h1>

            <div class="opinions flex">

                <div class="opinion">
                    <div class="opinion_image">
                        <img src="/img/opinions/petros_muradyan.png" width="100%" alt="">
                    </div>
                    <div class="opinion_info">
                        <p class="mb-20">
                            Մարտինը բաց է իր գիտելիքները զարգացնելու և կիսվելու սեփական փորձով։ Գնահատում է ուսման կարևորությունը և մեծ պատասխանատվությամբ կրում է դասավանդողի կոչումը։
                        </p>
                        <div>
                            <p class="fz1 mini_info">Պետրոս Մուրադյան</p>
                            <p class="fz1 mini_info">TCO Team | Հիմնադիր & CTO</p>
                        </div>
                    </div>
                </div>

                <div class="opinion">
                    <div class="opinion_image">
                        <img src="/img/opinions/mane_karapetyan.png" width="100%" alt="">
                    </div>
                    <div class="opinion_info">
                        <p class="mb-20">
                            Մարտինը շատ օրինակելի ուսուցիչ է։ Նա ոչ միայն լավ մասնագետ է,
                            նաև շատ մատչելի ձևով է բացատրում ամեն ինչ։
                            Շատերը կուզենային նման ուսուցիչ ունենալ։
                        </p>
                        <div>
                            <p class="fz1 mini_info">Մանե Կարապետյան</p>
                            <p class="fz1 mini_info">Ուսանող։ 13տ</p>
                        </div>
                    </div>
                </div>

                <div class="opinion">
                    <div class="opinion_image">
                        <img src="/img/opinions/ruben_tovmasyan.png" width="100%" alt="">
                    </div>
                    <div class="opinion_info">
                        <p class="mb-20">
                            Ամիսներ շարունակ Մարտինը ինձ դասավանդել է Full Stack Web Development,
                            որի ընթացքում մակսիմալ փոխանցել է անհրաժեշտ ինֆորմացիան հանրամատչելի կերպով:
                            Ցուցաբերել է պատասխանատվություն ապագա հաջողված մասնագետ կերտելու գործում,
                            որի արդյունքում անցել եմ աշխատանքի։
                        </p>
                        <div>
                            <p class="fz1 mini_info">Ռուբեն Թովմասյան</p>
                            <p class="fz1 mini_info">Ուսանող: Աշխատում է TCO-ում</p>
                        </div>
                    </div>
                </div>

                <div class="opinion">
                    <div class="opinion_image">
                        <img src="/img/opinions/nelly_hovhannisyan.png" width="100%" alt="">
                    </div>
                    <div class="opinion_info">
                        <p class="mb-20">
                            Դեռ մի քանի ամիս է ինչ ճանաչում եմ Մարտինին, նա շատ ընկերասեր և բանիմաց է։
                            Երբեք ջանք ու եռանդ չի խնայում, որպեսզի մատչելի կերպով բացատրի ամբողջ կուրսը։
                            Համոզված կարող եմ ասել որ նա ուսուցչի ճիշտ կերպար է🙂😊
                        </p>
                        <div>
                            <p class="fz1 mini_info">Նելլի Հովհաննիսյան</p>
                            <p class="fz1 mini_info">Ուսանող</p>
                        </div>
                    </div>
                </div>

                <div class="opinion">
                    <div class="opinion_image">
                        <img src="/img/opinions/vahe_vardanyan.png" width="100%" alt="">
                    </div>
                    <div class="opinion_info">
                        <p class="mb-20">
                            Մարտինը շատ խստապահանջ և ճիշտ մեթոդաբանությամբ դասավանդող ուսուցիչ է: Ինձ դուր է գալիս հատկապես նրա բացատրելու տարբերակները, որոնք միանշանակ տալիս են իրենց դրական արդյունքները: Մարդկային տեսակի մասին չխոսել չեմ կարող. անկոտրուն է, նպատակասլաց, պարտվել չի սիրում և ամենավերջին ներուժն էլ կդնի հաղթանակի համար: Շնորհակալ եմ նրան  իր շնորհիվ հասածս հաջողությունների համար:
                        </p>
                        <div>
                            <p class="fz1 mini_info">Վահե Վարդանյան</p>
                            <p class="fz1 mini_info">Ուսանող</p>
                        </div>
                    </div>
                </div>

                <div class="opinion">
                    <div class="opinion_image">
                        <img src="/img/opinions/karina_dallaqyan.png" width="100%" alt="">
                    </div>
                    <div class="opinion_info">
                        <p class="mb-20">
                            Գիտելիքները փոխանցելու կարողությունն ամենակարևոր ունակությունն է մասնագետի համար։ Ուրախ եմ տեղեկացնել, որ Մարտինը ունի այդ կարողությունից բավականին շատ։ Ցանկացած պարագայում կարողանում է ճիշտ կողմնորոշվել և ուսանողին ճիշտ ուղղություն տալ, խրախուսել, ոգևորել, դրդել հաջողության ճանապարհն անցնել հեշտությամբ։
                        </p>
                        <div>
                            <p class="fz1 mini_info">Կարինա Դալլաքյան</p>
                            <p class="fz1 mini_info">Ուսանող</p>
                        </div>
                    </div>
                </div>

                <div class="opinion">
                    <div class="opinion_image">
                        <img src="/img/opinions/emiliya_arustamyan.png" width="100%" alt="">
                    </div>
                    <div class="opinion_info">
                        <p class="mb-20">
                            Եթե ուսուցիչը սիրում է իր աշխատանքը և իր աշակերտին, ապա նա կատարյալ է:
                            Մարտինը հիանալի ուսուցիչ է:
                            Կարողանում է փոխանցել իր ողջ գիտելիքները շատ մատչելի ձևով:
                            Նրա հետ դասերը ոչ միայն արդյունավետ, այլ նաև հետաքրքիր են անցնում:
                        </p>
                        <div>
                            <p class="fz1 mini_info">Էմիլյա Առուստամյան</p>
                            <p class="fz1 mini_info">Ուսանող: 15տ</p>
                        </div>
                    </div>
                </div>

                <div class="opinion">
                    <div class="opinion_image">
                        <img src="/img/opinions/inna_arustamyan.png" width="100%" alt="">
                    </div>
                    <div class="opinion_info">
                        <p class="mb-20">
                            Ուսուցիչն այն մարդն է, ով դժվար բաները դարձնում է հեշտ:
                            Եվ Մարտինը այդպիսի ուսուցիչ է:
                            Նրա հետ դասերը անցնում են հետաքրքիր և արդյունավետ։
                        </p>
                        <div>
                            <p class="fz1 mini_info">Իննա Առուստամյան</p>
                            <p class="fz1 mini_info">Ուսանող: 15տ</p>
                        </div>
                    </div>
                </div>

                <div class="opinion">
                    <div class="opinion_image">
                        <img src="/img/opinions/kima_baghdasaryan.png" width="100%" alt="">
                    </div>
                    <div class="opinion_info">
                        <p class="mb-20">
                            Մարտինը շատ բանիմաց ուսուցիչ է, թերևս ամենակարևոր որակներից մեկը ուսուցչի՝ մասնագիտական գիտելիքները։
                            Երկրորդ կարևոր հատկանիշը ուսուցչի , գիտելիքի ճիշտ փոխանցումը աշակերտին, որը նույնպես հրաշալիորեն ստացվում է Մարտինի մոտ։
                            Տարբեր մոտեցումներով բացատրել նյութը այնպես, որ հասկանալի լինի` համբերատարությամբ ու առանց բողոքների։
                            Ծրագրավորում սովորելը սկզբնական շրջանում շատ բարդ է ու նույնիսկ երբեմն թվում է` իր բարդության պատճառով հարկավոր է չշարունակել։
                            Մարտինի դրական ու մոտիվացնող տրամադրվածության շնորհիվ, հաղթահարում ես նաև սա։ Շատ ուրախ եմ ու շնորհակալ, որ իմ ուսուցիչը Մարտինն է։
                        </p>
                        <div>
                            <p class="fz1 mini_info">Կիմա Բաղդասարյան</p>
                            <p class="fz1 mini_info">Ուսանող: Աշխատում է 10Web-ում</p>
                        </div>
                    </div>
                </div>

                <div class="opinion">
                    <div class="opinion_image">
                        <img src="/img/opinions/narine_aghabekyan.png" width="100%" alt="">
                    </div>
                    <div class="opinion_info">
                        <p class="mb-20">
                            Արդեն 3 ամիս է ինչ Մարտինը ինձ դասավանդում է։
                            Այս կարճ ժամանակահատվածում նրա շնորհիվ կարողացա ինձ համար առանձնացնել լավագույն ուսուցչի կերպարը՝
                            բանիմաց, խստապահանջ, սիրալիր և համբերատար։ Անհատական մոտեցում ցուցաբերելու կարողությունն ու ուսանողին ոգևորելու ունակությունն իր մոտ լավագույնս է ստացվում,
                            ինչի շնորհիվ էլ նույնիսկ ամենադժվար պահերին կարողացել եմ մոտիվացվել և ավելի ջանասիրաբար աշխատել։
                            Իր տված գիտելիքների շնորհիվ դարձել եմ ավելի ինքնավստահ և վստահ եմ՝ կկարողանամ հասնել իմ նպատակ դարձած երազանքներին։
                        </p>
                        <div>
                            <p class="fz1 mini_info">Նարինե Աղաբեկյան</p>
                            <p class="fz1 mini_info">Ուսանող:</p>
                        </div>
                    </div>
                </div>

                <div class="opinion">
                    <div class="opinion_image">
                        <img src="/img/opinions/hamlet_moroyan.png" width="100%" alt="">
                    </div>
                    <div class="opinion_info">
                        <p class="mb-20">
                            21-րդ դարում ամենաթանկ բանը ինֆորմացիան է, որը Մարտինը տալիս է այնպես, որ մեզ դարձնի որակյալ մասնագետներ: Նա մեզ սովորեցրել է մտածել ինքնուրույն, որն էլ առաջնային ունակություններից մեկն է լավ ծրագրավորող դառնալու համար:
                            Ինչին մարդ դժվարությամբ է հասնում, գնահատում է և երբեք չի մոռանում: Մարտինի կողմից հանձնարարված առաջադրանքները հեշտ չեն լուծվել, սակայն դրանց շնորհիվ մենք ավելի ենք հմտացել և մեր գիտելիքները դարձրել մնայուն:
                            Մարտինի շնորհիվ ես սովորել եմ ինքնուրույն հասնել խնդրի լուծմանը: Դրանով ամեն ինչ ասված է!
                        </p>
                        <div>
                            <p class="fz1 mini_info">Համլետ Մոռոյան</p>
                            <p class="fz1 mini_info">Ուսանող: Աշխատում է Evistep-ում</p>
                        </div>
                    </div>
                </div>

                <div class="opinion">
                    <div class="opinion_image">
                        <img src="/img/opinions/anahit_karapetyan.png" width="100%" alt="">
                    </div>
                    <div class="opinion_info">
                        <p class="mb-20">
                            Մարտի՞ն, ո՞ր Մարտինը, JavaScript-ի արքա՞ն:
                            Վստահ եմ հեսա բոլորն են սկսելու սենց ճանաչել Մարտինին, եթե իհարկե դեռ չեն ճանաչում:
                            Մարդ՝ ով պատրաստ է նույնիսկ իր կյանքը JS-ի համար տա: Պատահական չի երևի, որ իրար հետ են ծնվել:
                            Արդեն իր գործում սենսեի դարձած Մարտինն, իրականում էն մարդկանցից մեկն է ում ուզում եմ նմանվել:
                            Իր մարդ տեսակով վստահ եմ շատերին է օրինակ ծառայում:
                            էն որ ուղակի անհնար է Մարտինի հետ չսիրել ծրագրավորումը:
                            Ինքը գիտի ոնց մատուցի նյութը, որ դու հասկանես:
                            ՈՒՍՈՒՑԻՉ` ով պատրաստ է օրը 25 ժամ համբերատար պատասխանի քո հարցերին:
                        </p>
                        <div>
                            <p class="fz1 mini_info">Անահիտ Կարապետյան</p>
                            <p class="fz1 mini_info">Ուսանող: Աշխատում է ArmCoding-ում</p>
                        </div>
                    </div>
                </div>

                <div class="opinion">
                    <div class="opinion_image">
                        <img src="/img/opinions/harutyun_hovsepyan.png" width="100%" alt="">
                    </div>
                    <div class="opinion_info">
                        <p class="mb-20">
                            Դասավանդողի կարևոր արժանիքներից մեկը այն է որպեսզի ուսանողին կարողանա մոտիվացնի այն ժամանակ երբ ուսանողը դժվարանում է։
                            Մարտինը միանշանակ օժտված է այդ արժանիքով և մարդկամց մոտիվացնելը իր ամենասիրելի զբաղմունքներից է։
                        </p>
                        <div>
                            <p class="fz1 mini_info">Հարություն Հովսեփյան</p>
                            <p class="fz1 mini_info">Ուսանող: Աշխատում է Haypost-ում</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


@endsection
