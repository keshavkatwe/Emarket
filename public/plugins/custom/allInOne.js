function follow(user_id) {
    $.post(base_url + "/follow", {user_id: user_id}, function (result) { console.log(result);
        $('#followBtn').html('<i class="fa fa fa-spinner fa-spin"></i>');
        if (result['following'] == 1) {
            $('#followBtn').html('<b><i class="fa fa-hand-o-right"></i> Following</b>');
            $('#followBtn').addClass('btn-success');
            $('#followBtn').removeClass('btn-primary');
        }
        else {
            $('#followBtn').html('<b><i class="fa fa-hand-o-up"></i> Follow</b>');
            $('#followBtn').addClass('btn-primary');
            $('#followBtn').removeClass('btn-success');
        }
        $('#following_count').html(result['following_count']);
    });
}


