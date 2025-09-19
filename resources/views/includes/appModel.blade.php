<div class="modal fade" id="{{isset($modal_id)?$modal_id:'appModel'}}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content text-black">
            <div class="modal-header app_bar py-2">
                <h5 class="modal-title fs-6" id="mainModalLabel">{{isset($modal_head)?$modal_head:'Header'}}</h5>
                <a type="button" class="btn-close btn-sm" data-bs-dismiss="modal" aria-label="Close"></a>
            </div>
            <div class="modal-body app_content">
                {!! $modal_body !!}
            </div>

            <div class="modal-footer app_bar">
                <a href="javascript:0" type="submit" class="btn modal_action_btn">Save</a>
            </div>
        </div>
    </div>
</div>