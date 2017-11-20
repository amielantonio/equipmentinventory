<form class="fg-form" method="POST" id="diagnostics-form">
    {{ csrf_field() }}


    <div class="fg-form-group">
        <input type="text" class="fg-form-control" id="computer_id" name="computer_id">
        <label for="computer_id">Computer</label>
    </div>

    <div class="fg-form-group">
        <input type="text" class="fg-form-control" id="diagnostics-title" name="diagnostics_title">
        <label for="diagnostics_title">Title</label>
    </div>

    <div class="fg-form-group">
        <input type="text" class="fg-form-control" id="diagnostics_text">
        <label for="diagnostics_text">Diagnostics Text/Description</label>
    </div>

    <div class="fg-form-group">
        <input type="text" class="fg-form-control" id="diagnostics_date" name="diagnostics_date">
        <label for="diagnostics_date">Date</label>
    </div>


    <button type="button" class="btn btn-primary submit"><span>Add New</span></button>
    <button type="reset" class="btn btn-warning"><span>Clear</span></button>

</form>