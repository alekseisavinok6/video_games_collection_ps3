<div class="modal fade" id="delete_window_1" tabindex="-1" aria-labelledby="delete_window_2" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="delete_window_2">Notification</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Do you want to delete the record?
            </div>
            <div class="modal-footer">
                <form action="delete_data.php" method="post">
                    <input type="hidden" name="id" id="id">
                    <button type="button" class="btn btn-light" 
                    style="--bs-btn-padding-y: .10rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .95rem;" data-bs-dismiss="modal">No</button>
                    <button type="submit" class="btn btn-light" style="--bs-btn-padding-y: .10rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .95rem;">Yes</button>
                </form>
            </div>
        </div>
    </div>
</div>