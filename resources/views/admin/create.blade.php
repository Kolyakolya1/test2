<div class="create-remove" style='cursor: pointer;' onclick="formCreateRemove()">
    Remove form
</div>
<form id="store-article" onsubmit="storeArticle(this)">
    @csrf
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Title</span>
        <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1" value="" name="title">
        <span class="error titleError hidden" style="color: red"></span>

    </div>
    <div class="input-group">
        <span class="input-group-text">Description</span>
        <textarea class="form-control" aria-label="With textarea" name="description"></textarea>
        <span class="error descriptionError hidden" style="color: red"></span>
    </div>
    <br>
    <button class="btn btn-primary" type="submit">Send</button>
</form>
