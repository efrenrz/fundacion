
<!-- Onready send msg-->
<div class="modal fade " id="ayudalos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content jumbotron text-center">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">{{trans('inicio.sonrian')}}</h4>
            </div>
            <div class="modal-body text-center ">
                <div class="modal-dialog">
                    <h4>{{trans('inicio.sonrian.ya')}}</h4>
                </div>
                <p>
                    <a href="/{{trans('menu.sonrian')}}">
                        {{trans('inicio.sonrian.click')}}
                        <div id="cf">
                            <img class="bottom" src="/images/face/face-happy.jpg" />
                            <img class="top" src="/images/face/face-sad.jpg" />
                        </div>
                        <img class="img-responsive"  src="{{asset('/')}}images/programas/sonrian-logo.png" alt="Haz Que Sonrían"/>
                    </a>
                </p>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">{{trans('inicio.sonrian.cerrar')}}</button>
            </div>
        </div>
    </div>
</div>
</div>


<!--<MEJOR VIVIENDA-->

