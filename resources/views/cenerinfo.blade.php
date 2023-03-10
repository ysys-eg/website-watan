@extends('layouts.app')
@section('content')
    <div data-collapse="medium" data-animation="default" data-duration="400" data-easing="ease" data-easing2="ease" role="banner"
        class="navigation w-nav">
        <div class="navigation-wrap">
            <div class="div-block-71"><a href="/" class="logo-link w-nav-brand" aria-label="home"><img
                        src="https://uploads-ssl.webflow.com/63c40d3f58ee2efaea8cdba4/63e13300107b4af46f5f4aba_YCash%20New%20Logo%2020235-01.png"
                        loading="lazy" alt="" class="image-33"></a>
                <div data-w-id="d724f4fd-eee5-8700-779b-1c3fa62cb9d1" class="toggle-parent"
                    style="background-color: rgb(216, 216, 216);">
                    <div data-w-id="d724f4fd-eee5-8700-779b-1c3fa62cb9d2" class="toggle-button"
                        style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d; background-color: rgb(138, 138, 138);">
                    </div>
                </div>
                <div class="div-block-72">
                    <div class="text-block-32">ع</div>
                </div>
            </div>
            <div class="div-block-75">
                <nav role="navigation" class="navigation-items w-nav-menu">
                    <div data-w-id="f28fab83-faaa-51f4-3c8f-03cadf67fa62" class="seach-parent-2"
                        style="width: 45px; height: 45px;">
                        <form action="/search" class="search-2 w-clearfix w-form"><input type="search"
                                class="search-input-2 w-input" maxlength="256" name="query" placeholder="Search…"
                                id="search" required="" style="opacity: 0;"><input type="submit" value=""
                                class="search-button-2 w-button"></form>
                    </div><a href="/styleguide" class="navigation-item w-nav-link">وطن للعميل</a><a href="/projects"
                        class="navigation-item w-nav-link">وطن للمنظمات</a><a href="/team"
                        class="navigation-item w-nav-link">وطن للأعمال</a><a href="/contact"
                        class="navigation-item w-nav-link">وطن للبنوك</a>
                    <div data-hover="true" data-delay="10" class="nav-dropdown-toggle-copy-copy w-dropdown">
                        <div class="dropdown-toggle-2 dropdown-toggle-3 dropdown-toggle-4 dropdown-toggle-5 dropdown-toggle-6 dropdown-toggle-7 dropdown-toggle-8 current w-dropdown-toggle"
                            id="w-dropdown-toggle-0" aria-controls="w-dropdown-list-0" aria-haspopup="menu"
                            aria-expanded="false" role="button" tabindex="0">
                            <div class="text-block-9">وطن للعميل</div>
                        </div>
                        <nav class="dropdown-list-4 w-dropdown-list" id="w-dropdown-list-0"
                            aria-labelledby="w-dropdown-toggle-0"><a href="/contact" class="dropdown-link-4 w-dropdown-link"
                                tabindex="0">محفظة الدفع</a><a href="#" class="dropdown-link55 w-dropdown-link"
                                tabindex="0">الخدمات المالية</a><a href="#" class="dropdown-link55 w-dropdown-link"
                                tabindex="0">خدمة السداد</a><a href="#" class="dropdown-link-55 w-dropdown-link"
                                tabindex="0">التسويق الرقمي</a></nav>
                    </div>
                    <div data-hover="true" data-delay="10" class="nav-dropdown-toggle-copy-copy navigation-item w-dropdown">
                        <div class="dropdown-toggle-2 dropdown-toggle-3 dropdown-toggle-4 dropdown-toggle-5 dropdown-toggle-6 dropdown-toggle-7 dropdown-toggle-8 current w-dropdown-toggle"
                            id="w-dropdown-toggle-1" aria-controls="w-dropdown-list-1" aria-haspopup="menu"
                            aria-expanded="false" role="button" tabindex="0">
                            <div class="text-block-9">خدمات المنظمات</div>
                        </div>
                        <nav class="dropdown-list-4 w-dropdown-list" id="w-dropdown-list-1"
                            aria-labelledby="w-dropdown-toggle-1"><a href="/projects"
                                class="dropdown-link-4 w-dropdown-link" tabindex="0">منصة التحويلات الانسانية</a></nav>
                    </div>
                    <div data-hover="true" data-delay="10" class="nav-dropdown-toggle-copy-copy navigation-item w-dropdown">
                        <div class="dropdown-toggle-2 dropdown-toggle-3 dropdown-toggle-4 dropdown-toggle-5 dropdown-toggle-6 dropdown-toggle-7 dropdown-toggle-8 current w-dropdown-toggle"
                            id="w-dropdown-toggle-2" aria-controls="w-dropdown-list-2" aria-haspopup="menu"
                            aria-expanded="false" role="button" tabindex="0">
                            <div class="text-block-9">خدمة للأعمال</div>
                        </div>
                        <nav class="dropdown-list-4 w-dropdown-list" id="w-dropdown-list-2"
                            aria-labelledby="w-dropdown-toggle-2"><a href="{{ route('about') }}"
                                class="dropdown-link-4 w-dropdown-link" tabindex="0">تطبيق الاعمال</a><a
                                href="/styleguide" class="dropdown-link55 w-dropdown-link" tabindex="0">خدمة
                                التحصيل</a><a href="#" class="dropdown-link55 w-dropdown-link"
                                tabindex="0">التجارة الالكترونية</a><a href="/work/project-3"
                                class="dropdown-link55 w-dropdown-link" tabindex="0">التطبيقات المصغرة</a><a
                                href="/work/project-1" class="dropdown-link55 w-dropdown-link" tabindex="0">التمويل
                                الرقمي</a><a href="#" class="dropdown-link55 w-dropdown-link" tabindex="0">سلسلة
                                التوريد</a><a href="#" class="dropdown-link-55 w-dropdown-link" tabindex="0">وكيل
                                الخدمات المالية</a></nav>
                    </div>
                    <div data-hover="true" data-delay="10"
                        class="nav-dropdown-toggle-copy-copy navigation-item w-dropdown">
                        <div class="dropdown-toggle-2 dropdown-toggle-3 dropdown-toggle-4 dropdown-toggle-5 dropdown-toggle-6 dropdown-toggle-7 dropdown-toggle-8 w-dropdown-toggle"
                            id="w-dropdown-toggle-3" aria-controls="w-dropdown-list-3" aria-haspopup="menu"
                            aria-expanded="false" role="button" tabindex="0">
                            <div class="text-block-9">المؤسسات المالية</div>
                        </div>
                        <nav class="dropdown-list-4 w-dropdown-list" id="w-dropdown-list-3"
                            aria-labelledby="w-dropdown-toggle-3"><a href="/team"
                                class="dropdown-link-4 w-dropdown-link" tabindex="0">نظام المدفوعات الفورية</a><a
                                href="#" class="dropdown-link55 w-dropdown-link" tabindex="0">نظام اصدار
                                البطائق</a><a href="#" class="dropdown-link-55 w-dropdown-link" tabindex="0">نطام
                                ادارة الصرافات الالية</a></nav>
                    </div>
                    <div data-hover="true" data-delay="10"
                        class="nav-dropdown-toggle-copy-copy navigation-item w-dropdown">
                        <div class="dropdown-toggle-2 dropdown-toggle-3 dropdown-toggle-4 dropdown-toggle-5 dropdown-toggle-6 dropdown-toggle-7 dropdown-toggle-8 current w-dropdown-toggle"
                            id="w-dropdown-toggle-4" aria-controls="w-dropdown-list-4" aria-haspopup="menu"
                            aria-expanded="false" role="button" tabindex="0">
                            <div class="text-block-9">الشركة</div>
                        </div>
                        <nav class="dropdown-list-4 w-dropdown-list" id="w-dropdown-list-4"
                            aria-labelledby="w-dropdown-toggle-4"><a href="{{ route('about') }}"
                                class="dropdown-link-4 w-dropdown-link" tabindex="0">من نحن</a><a href="#"
                                class="dropdown-link55 w-dropdown-link" tabindex="0">مقالات</a><a href="#"
                                class="dropdown-link55 w-dropdown-link" tabindex="0">تواصل معنا</a><a
                                href="{{ route('centerinfo') }}" aria-current="page"
                                class="dropdown-link55 w-dropdown-link w--current" tabindex="0">مركز التكنولوجيا
                                الماليه</a><a href="/work/project-1" class="dropdown-link55 w-dropdown-link"
                                tabindex="0">المسؤلية الاجتماعية</a><a href="#"
                                class="dropdown-link55 w-dropdown-link" tabindex="0">الحوكمة المؤسسية</a><a
                                href="#" class="dropdown-link-55 w-dropdown-link" tabindex="0">وظائف</a></nav>
                    </div><a href="/work/project-1" class="button w-inline-block">
                        <div class="text-block">تسجيل الدخول</div>
                    </a>
                </nav>
                <div class="menu-button w-nav-button" style="-webkit-user-select: text;" aria-label="menu"
                    role="button" tabindex="0" aria-controls="w-nav-overlay-0" aria-haspopup="menu"
                    aria-expanded="false"><img
                        src="https://uploads-ssl.webflow.com/63b9a023f28c5014ed3cdbbc/63b9a024f28c5094703cdbe1_menu-icon.png"
                        width="22" alt="" class="menu-icon">
                    <div data-w-id="01591ef9-20ab-9f27-ce9e-972610523023" class="menu-parent">
                        <div data-w-id="01591ef9-20ab-9f27-ce9e-972610523024" class="menu-bar"
                            style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                        </div>
                        <div data-w-id="01591ef9-20ab-9f27-ce9e-972610523025" class="menu-bar"
                            style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                        </div>
                        <div data-w-id="01591ef9-20ab-9f27-ce9e-972610523026" class="menu-bar"
                            style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-nav-overlay" data-wf-ignore="" id="w-nav-overlay-0">
        </div>
    </div>
    <div class="section cc-home-wrap">
        <div class="project-overview-header cc-project-2-header">
            <div class="intro-content">
                <div class="heading-jumbo">Project #2<br>
                </div>
            </div>
        </div>
    </div>
    <div class="section-19 wf-section">
        <div class="div-block-48">
            <h1 class="heading-23">مركز وطن للتكنلوجيا المالية</h1>
            <p class="paragraph-17">هو مركز تملكه وتديره الشركة الوطنية للمدفوعات (YCash) ، التي تضع نصب عينيها تطوير
                الاقتصاد اليمني ودفع التحول الرقمي عبر قطاعاته. لقد بذل إنشاء &nbsp;مركز وطن &nbsp;للتكنلوجيا المالية جهودًا
                وخطوات مستمرة من قبل الشركة الوطنية للمدفوعات (YCash) &nbsp;وشريكها الاستراتيجي، البنك المركزي اليمني،
                لرقمنة المدفوعات والخدمات المالية في اليمن وإتاحتها على مدار الساعة وتقديم حلول مالية مبتكرة للنظام المالي،
                وبالتالي تحقيق تحول نوعي في الخبرة المالية للأفراد والشركات.<br>يمكّن مركز &nbsp;وطن للتكنلوجيا المالية
                الفريد رواد الأعمال والمؤسسات المالية والطلاب اليمنيين من الشروع في مفاهيم التكنولوجيا المالية المبتكرة من
                خلال تزويدهم بإمكانية الوصول إلى العديد من الخدمات التي تتراوح من الوصول إلى البنية التحتية والخبرة
                والشراكات والوصول إلى التمويل والأسواق. تتمثل القيمة الفريدة لمركز التكنولوجيا المالية في تمكين أفكار
                وابتكارات التكنولوجيا المالية من الاختبار باستخدام بنية تحتية مخصصة تملكها وتديرها الشركة الوطنية للمدفوعات
                (YCash) ، مما يوفر الوصول إلى أدوات مثل واجهة التطبيقات المفتوحة، والتي تساعد رواد الأعمال على صياغة والتحقق
                والبدء في تنفيذ أفكار منتجاتهم وحلولهم المبتكرة.</p>
        </div>
    </div>
    <div class="section-20 wf-section">
        <div class="div-block-49">
            <h1 class="heading-25">الخدمات</h1>
            <div class="w-layout-grid grid-7">
                <div id="w-node-db96b64d-fcf5-7b5f-c4d1-6eb5a1616346-29ad51ea">
                    <h1 class="heading-24">إتاحة إمكانية الوصول إلى الشراكات</h1>
                    <p class="paragraph-18">يُتاح لجميع المشاركين الوصول إلى فرص الشراكة الاستراتيجية مع العديد من المؤسسات
                        المختلفة، مثل المصارف والمؤسسات المالية ومؤسسات الابتكار المالي العالمية ومسرعات/حاضنات الأعمال
                        التجارية المحلية والدولية والمؤسسات الأكاديمية ومراكز الفكر. يسمح هذا للمشاركين بتعزيز قدراتهم
                        وتوسيع مساحة التعريف الخاصة بهم جنبًا إلى جنب مع إنشاء علاقات حيوية وتعاون يتحول إلى علاقات طويلة
                        الأجل.</p>
                </div>
                <div id="w-node-_9b05b2bd-7e53-8584-b9f3-b898ceaf3d02-29ad51ea">
                    <h1 class="heading-24">توفير الوصول إلى البنية التحتية</h1>
                    <p class="paragraph-18">يؤمن مركز وطن للتكنولوجيا المالية بأهمية تطوير وإدارة البنية التحتية المالية
                        وتأثيرها على تحديث صورة الخدمات المالية الرقمية في اليمن، وتمكين الاستثمار الفعال في البنية التحتية
                        المركزية، والحد من ازدواجية الاستثمارات والجهود، وتعزيز قابلية التشغيل البيني. بالنظر إلى الفائدة
                        التي ستجنيها جميع المؤسسات المالية من هذا الوصول إلى البنية التحتية، يؤمن مركز التكنولوجيا المالية
                        بنشر هذه الفائدة على مبتكري التكنولوجيا المالية ومنظمي المشاريع. وعليه عمل المركز على تأمين منصات
                        ونظم وبيانات فعالة قد لا يتمكن الأفراد أو المؤسسات من الوصول إليها بمفردهم. يمكن لجميع المشاركين في
                        المركز الوصول إلى هذه البنية التحتية المالية الرقمية لتسريع وتمكين ابتكاراتهم في مجال التكنولوجيا
                        المالية.</p>
                </div>
                <div id="w-node-_3efd4e72-9f75-6776-8d82-b2de9629004a-29ad51ea">
                    <h1 class="heading-24">توفير الوصول إلى الأسواق</h1>
                    <p class="paragraph-18">تؤمن مركز وطن للتكنولوجيا المالية أن الأسواق هي الاختبار الحقيقي الوحيد لإقبال
                        الأعمال والاستدامة والتنفيذ. وفي الوقت الذي توفر فيه الأدوات اللازمة للتنبؤ على نحو أفضل بنجاح هذه
                        العوامل، فإن معيار النجاح يكمن في الأسواق الحقيقية. عندما يتعلق الأمر بالسوق المحلية، تسهل مركز وطن
                        للتكنولوجيا المالية التفاعل المبتكر مع ممثلي القطاع لمساعدتهم على جذب وزيادة فرص نجاحهم. وفيما يتعلق
                        بالوصول إلى الأسواق على الصعيدين الإقليمي والدولي، يعمل المركز بشكل وثيق مع مراكز تمكين التكنولوجيا
                        المالية في مختلف المناطق والبلدان لإتاحة الفرص لمجموعات المركز لتصدير منتجاتها وخدماتها المبتكرة.
                        وبهذه الطريقة، يضمن المركز التغلب على حواجز الدخول إلى الأسواق المهمة.</p>
                </div>
                <div id="w-node-_6fc3f210-c993-caee-290d-7a944f681475-29ad51ea">
                    <h1 class="heading-24">توفير الوصول إلى التمويل</h1>
                    <p class="paragraph-18">من المسلّم به احتياج المشاركين في المركز إلى المنح أو الاستثمار بأشكاله
                        المتعددة لتأمين التمويل لابتكاراتهم. من خلال روابط مركز وطن الوطيدة مع عالم البنوك والاستثمار، يوفر
                        المركز منصة للمبتكرين تمكنهم من مقابلة المستثمرين المحتملين ورجال الأعمال المغامرين الذين قد يكونون
                        مهتمين بمنتجاتهم وخدماتهم. يتم مساعدة جميع المشاركين في إعداد خطط عمل قوية تمكنهم من عرض مشاريعهم
                        للحصول على التمويل.</p>
                </div>
                <div id="w-node-_1221e1e7-bf0e-9628-a84c-516cf880560c-29ad51ea">
                    <h1 class="heading-24">توفير إمكانية الحصول على الخبرة</h1>
                    <p class="paragraph-18">عتمد مركز وطن للتكنولوجيا المالية على علاقاته الوثيقة مع القطاعين العام والخاص
                        على الصعيدين المحلي والعالمي لتيسير حصول جميع المشاركين في برامجه على الخبرات والمعارف</p>
                </div>
            </div>
            <div class="div-block-29"></div>
        </div>
        <div class="div-block-49">
            <h1 class="heading-25">المستهدفين</h1>
            <div class="w-layout-grid grid-7">
                <div id="w-node-a020d54f-871f-1313-a619-a165a1f48119-29ad51ea">
                    <h1 class="heading-24">الشركات الناشئة ورواد التكنولوجيا المالية</h1>
                    <p class="paragraph-18">يهدف المركز إلى تمكين الشركات الناشئة في مجال التكنولوجيا المالية ورواد الأعمال
                        من الاستفادة من البنية التحتية المالية الرقمية في اليمن واعتماد أسسها في تنمية منتجاتهم، مما يساهم
                        في تحقيق خطوات السير نحو الاقتصاد الرقمي. يلتزم المركز بمساعدة الشركات الناشئة في مجال التكنولوجيا
                        المالية ورواد الأعمال في الحصول على التمويل والعثور على الشركاء، والوصول إلى المعلومات والبنية
                        التحتية المتطورة، والتغلغل في الأسواق.</p>
                </div>
                <div id="w-node-a020d54f-871f-1313-a619-a165a1f4811e-29ad51ea">
                    <h1 class="heading-24">المؤسسات والشركات المالية</h1>
                    <p class="paragraph-18">لا يدخر مركز وطن جهداً لتمكين المؤسسات المالية والشركات من إنشاء وتطوير وتبني
                        منتجات وخدمات مالية رقمية مبتكرة جديدة بطريقة مرنة، الأمر الذي يسمح بزيادة إمكانية التشغيل البيني
                        والوصول إلى الخدمات المالية، ويصاحب كل ذلك تقليل التكلفة المطلوبة للوصول لها. </p>
                </div>
                <div id="w-node-a020d54f-871f-1313-a619-a165a1f48123-29ad51ea">
                    <h1 class="heading-24">الطلاب والمؤسسات الأكاديمية</h1>
                    <p class="paragraph-18">الطلاب والمؤسسات الأكاديمية: يسعى المركز إلى زيادة الاهتمام البحثي للطلاب
                        والمؤسسات الأكاديمية في مواضيع التكنولوجيا المالية. وبالتالي، صقل تجربة التعلم للطلاب من خلال توفير
                        مركز تطبيق عملي للمعرفة، مما يزيد من قدرتهم على الابتكار والتطوير، ويقلل من الحواجز التي تعيق فرص
                        التعلم التفاعلي.</p>
                </div>
                <div id="w-node-a020d54f-871f-1313-a619-a165a1f48128-29ad51ea">
                    <h1 class="heading-24">المانحون والمستثمرون</h1>
                    <p class="paragraph-18">يطمح المركز إلى جذب المزيد من استثمارات التكنولوجيا المالية إلى اليمن من خلال
                        زيادة ثقة وإقبال المستثمرين على الشركات الناشئة محلياً في مجال التكنولوجيا المالية. فمن خلال برامج
                        المركز التي تهتم بالمستثمر، يتم مطابقة المانحين مع الشركات الناشئة المناسبة والتي تتوافق مع بعضها
                        البعض في الأهداف، مما يخلق فرصة مربحة للطرفين المعنيين.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="section cc-cta">
        <div class="container">
            <div class="cta-wrap">
                <div>
                    <div class="cta-text">
                        <div class="heading-jumbo-small">Grow your business.<br></div>
                        <div class="paragraph-bigger cc-bigger-light">Today is the day to build the business of your
                            dreams. Share your mission with the world — and blow your customers away.<br></div>
                    </div><a href="/contact" class="button cc-jumbo-button w-inline-block">
                        <div>Start Now</div>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
