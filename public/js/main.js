function formCreateShow() {
    $.ajax({
        type: 'GET',
        url: '/admin/articles/create',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        },
        success: function (data) {
            $('.create-article').html(data)
        },
    });
}

function articleShow(id) {
    $.ajax({
        type: 'GET',
        url: '/admin/articles/' + id,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        },
        success: function (data) {
            $('#article-' + id).html(data)
        },
    });
}

function articleEdit(id) {
    $.ajax({
        type: 'GET',
        url: '/admin/articles/' + id + '/edit',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        },
        success: function (data) {
            $('#article-' + id).html(data)
        },
    });
}

function articleRemove(id) {
    $.ajax({
        type: 'DELETE',
        url: '/admin/articles/' + id,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        },
        success: function (data) {
            if (data === '1') {
                $('#article-' + id).remove()
            } else {
                $('#article-not-found-' + id).html('Not found')
            }

        },
    });
}

function formCreateRemove() {
    $('.create-article').empty()
}

function storeArticle(identifier) {
    event.preventDefault()
    let $form = $(identifier),
        formData = new FormData(identifier);
    $.ajax({
        type: 'POST',
        url: '/admin/articles',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        },
        data: {
            'title': formData.get('title'),
            'description': formData.get('description'),
        },
        success: function (data) {
            $('.list-articles').append(data)
            formCreateRemove()
        },
        error: function (data) {
            showErrorValidation(data.responseJSON.errors, $form)
        }
    });
}

function updateArticle(identifier, id) {
    event.preventDefault()
    let $form = $(identifier),
        formData = new FormData(identifier);
    $('.error').addClass('hidden')
    $.ajax({
        type: 'PUT',
        url: '/admin/articles/' + id,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        },
        data: {
            'title': formData.get('title'),
            'description': formData.get('description'),
        },
        success: function (data) {
            $('#article-' + id).html(data)
        },
        error: function (data) {
            showErrorValidation(data.responseJSON.errors, $form)
        }
    });
}

function showErrorValidation(errors, form = false) {
    $.each(errors, function (name, errorText) {
        form.find('.' + name + 'Error').text(errorText).removeClass('hidden')
    });
}
