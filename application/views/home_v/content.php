<?php
if (isset($_SESSION["isler"])){
    $yapilacaklar = $_SESSION["isler"]["yapilacaklar"];
}
?>

<div class="container">


    <div class="row mt-4">
        <div class="col-md-12">
            <div class="alert alert-primary" role="alert">
               <strong> PROJE NOTU:</strong> <br>
                Bu proje Uludağa Üniversitesi Final Sınav Projesi olarak kodlanmıştır.
                Proje sürükle bırak sistemi ile yapacaklarınızı yönetmenizi sağlıyor. <br>

                Projede DEMO amaçlı yüklendiği için bir veritabanı ile değil <strong>SESSİON</strong> olarak tutuyor verileri.
                <br>
                Projenin gelişimini
                Githup adresi üzerinden takip edebilirsiniz:
                


            </div>
        </div>
        <div class="col-md-12">
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
                Yeni İş Ekle
            </button>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-lg-12">
            <div class="container" >
                <div class="scrumboard row">
                    <div class="column flex col-md-4" style="background-color: #F5E6D5;border: 1px solid black">
                        <!-- ongoing -->
                        <h1 class="mt-2">Yapılacaklar</h1>
                        <hr>
                        <div class="card portlet">
                            <h5 class="card-header portlet-header"># (Buradan Sürükle)</h5>
                            <div class="card-body">
                                <h5 class="card-title">Mesaj Başlığı</h5>
                                <p class="card-text">
                                    Mesaj İçeriği Burada
                                </p>
                            </div>
                        </div>
                        <?php if (isset($yapilacaklar)){
                        foreach ($yapilacaklar as $item){ ?>
                            <div class="card portlet" data-id="$item['id']">
                                <h5 class="card-header portlet-header">##</h5>
                                <div class="card-body">
                                    <h5 class="card-title"><?=$item['isbaslik']; ?></h5>
                                    <p class="card-text">
                                        <?=$item['mesaj']; ?></p>
                                </div>
                                <div class="card-footer">
                                    <a href="<?=base_url("Welcome/kaldir/".$item['id']) ?>" class="btn btn-sm btn-danger">SİL</a>
                                </div>
                            </div>
                        <?php }} ?>

                    </div>

                    <div class="column flex col-md-4" style="background-color: #CADFEC;border: 1px solid black">
                        <!-- ongoing -->
                        <h1 class="mt-2">Önemli İşler</h1>
                        <hr>

                    </div>


                    <div class="column flex col-md-4" style="background-color: #C8E7E1;border: 1px solid black">
                        <!-- done -->
                        <h1 class="mt-2">Biten İşler</h1>
                        <hr>

                        <div class="card portlet">
                            <h5 class="card-header portlet-header"># (Buradan Sürükle)</h5>
                            <div class="card-body">
                                <h5 class="card-title">Mesaj Başlığı</h5>
                                <p class="card-text">
                                    Mesaj İçeriği Burada
                                </p>
                            </div>
                            <div class="card-footer">
                                <a href="javascript:void(0)" class="btn btn-sm btn-danger">SİL</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>