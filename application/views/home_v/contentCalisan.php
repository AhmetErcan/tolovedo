<?php
$yapilacaklar = $_SESSION["isler"]["yapilacaklar"];
?>
<div class="container">
    <div class="row mt-4">
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
                    <div class="column flex">
                        <!-- todo -->
                        <h1>Todo</h1>
                        <div class="portlet">
                            <div class="portlet-header">Task</div>
                            <div class="portlet-content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</div>
                        </div>

                        <div class="portlet">
                            <div class="portlet-header">Task</div>
                            <div class="portlet-content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</div>
                        </div>

                    </div>

                    <div class="column flex">
                        <!-- ongoing -->
                        <h1>Ongoing</h1>

                        <div class="portlet">
                            <div class="portlet-header">Task</div>
                            <div class="portlet-content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</div>
                        </div>

                    </div>





                    <div class="column flex">
                        <!-- done -->
                        <h1>Testing</h1>

                        <div class="portlet">
                            <div class="portlet-header">Task</div>
                            <div class="portlet-content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</div>
                        </div>

                        <div class="portlet">
                            <div class="portlet-header">Task</div>
                            <div class="portlet-content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</div>
                        </div>

                    </div>

                    <div class="column flex">
                        <!-- done -->
                        <h1>Done</h1>

                        <div class="card portlet">
                            <h5 class="card-header portlet-header">Featured</h5>
                            <div class="card-body">
                                <h5 class="card-title">Special title treatment</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>

                        <div class="portlet">
                            <div class="portlet-header">Task</div>
                            <div class="portlet-content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</div>
                        </div>

                        <div class="portlet">
                            <div class="portlet-header">Task</div>
                            <div class="portlet-content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</div>
                        </div>

                    </div>



                </div>
            </div>
        </div>
    </div>
</div>