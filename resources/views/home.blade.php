@extends('layouts.app')

@section('content')
<div class="container-fluid py-5 mb-5 " id="main" >
    <div class="row">
        <div class="col-4 text-center">
            <h3>Կրթություն</h3>
            <div class="hovereffect">
                <img src="images/krt.jpg" class="img-fluid" alt="Responsive image" id="sant">
            </div>
        </div>
        <div class="col-4 text-center">
            <h3>Արվեստ</h3>
            <div class="hovereffect">
                <img src="images/arv.jpg" class="img-fluid" alt="Responsive image" id="sant">
           </div>
        </div>
        <div class="col-4 text-center">
            <h3>Գիտելիք</h3>
            <div class="hovereffect">
                <img src="images/git.jpg" class="img-fluid" alt="Responsive image" id="sant">
           </div>
           
        </div>
    </div>



    <div class="container mt-5">
        <div class="intro my-5">
            <h2 class="text-center">Վերջին նորություններ </h2>
        </div>
        <div class="row articles">
            <div class="col-sm-6 col-md-4 item"><a href="#"><img class="img-fluid" src="https://escs.am/timthumb.php?src=https://escs.am/files/images/2022-04-11/83ae50d766bc5592e8eb630ff63868df.JPG&w=348&h=200"></a>
                <h3 class="pt-3 name">Վահրամ Դումանյանն ընդունել է երկրագնդի ուժեղագույն ծրագրավորողին՝ Գենադի Կորոտկևիչին</h3>
                <p class="description">Երևանի պետական համալսարանում ապրիլի 12-ին կմեկնարկի Ծրագրավորման միջազգային թիմային ICPC մրցույթի՝ Հյուսիսային Եվրասիայի տարածաշրջանային եզրափակիչ փուլը: Ծրագրավորման աշխարհի ամենահին, ամենամեծ և ամենահեղինակավոր…</p><a href="#" class="action"><i class="fa fa-arrow-circle-right"></i></a>
            </div>
            <div
                class="col-sm-6 col-md-4 item text-center"><a href="#"><img class="img-fluid" src="https://escs.am/timthumb.php?src=https://escs.am/files/images/2022-04-08/f26e5ee3dd56c09ae1b7f7db06c0c7ff.JPG&w=348&h=200"></a>
                <h3 class="pt-3 name">Հայաստանի ազգային կինոկենտրոնը պետության աջակցությամբ վերակառուցվել և հիմնովին նորոգվել է</h3>
                <p class="description">Երևանի կենտրոնում` Տերյան 3ա հասցեում, 1928-1929 թթ․կառուցված պատմական շենքում բացվել է «Հայաստանի ազգային կինոկենտրոնի» վերակառուցված և հիմնանորոգված գրասենյակը: 2006 թվականից վարձակալված…


                    Գիտաժողով՝ նվիրված Հայաստանի և ՉԺՀ-ի միջև դիվանագիտական հարաբերությունների հաստատման 30-ամյակին
                    08 Ապրիլ 2022
                    ՀՀ կրթության, գիտության, մշակույթի և սպորտի նախարարի տեղակալ Արթուր Մարտիրոսյանն այսօր մասնակցել է «Հայաստան-Չինաստան» գիտաժողովին, </p><a href="#" class="action"><i class="fa fa-arrow-circle-right"></i></a>
            </div>
            <div
                class="col-sm-6 col-md-4 item"><a href="#"><img class="img-fluid" src="https://escs.am/timthumb.php?src=https://escs.am/files/images/2022-04-08/ace9f893d72d4b8bc4617d8218ee0210.jpg&w=348&h=200"></a>
                <h3 class="pt-3 name">Գիտաժողով՝ նվիրված Հայաստանի և ՉԺՀ-ի միջև դիվանագիտական հարաբերությունների հաստատման 30-ամյակին</h3>
                <p class="description">ՀՀ կրթության, գիտության, մշակույթի և սպորտի նախարարի տեղակալ Արթուր Մարտիրոսյանն այսօր մասնակցել է «Հայաստան-Չինաստան» գիտաժողովին, որը նվիրված էր Հայաստանի Հանրապետության և Չինաստանի Ժողովրդական Հանրապետության...</p><a href="#" class="action"><i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>
</div>

<!-- credit: https://epicbootstrap.com/snippets/article-list -->

    <div class="row">
        <div class="col-4"></div>
        <div class="col-4"></div>
        <div class="col-4"></div>
        <div class="col-4"></div>
    </div>
</div>
@endsection
