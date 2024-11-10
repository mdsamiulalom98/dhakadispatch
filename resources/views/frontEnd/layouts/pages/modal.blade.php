<!-- Modal -->
<div class="modal" id="local_modal" tabindex="-1" aria-labelledby="local_modal" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close modal-btn" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="modal-location">
            <div class="modal-district">
                <p><strong>Select City or Location</strong></p>
                <ul>
                    @foreach($districts as $key=>$value)
                    <li data-id="{{$value->district}}" class="district_filter">{{$value->district}}</li>
                    @endforeach
                </ul>
            </div>
            <div class="modal-areas">
                 <button class="back_button"><i class="fa-solid fa-angle-left"></i> Back</button>
                <ul class="areas_list"></ul>
                <div id="loading" class="loading">Loading more areas...</div>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>