let $page = 1;

$('.page-link').on('click', function () {
    ($(this).attr('data-to') === 'prev') ? $page-- : $page++;
    loadMore();
})

$(function () {
    loadMore()
});

function loadMore() {
    if ($page <= 0)
        $page = 1
    else {
        $.ajax({
            type: 'GET',
            url: '/api/post-offices?page=' + $page,
            beforeSend: function () {
                $('#postOfficeTable tbody').html('');
                $('#loader').show();
            },
            success: function (response) {
                const data = response.data;
                let $row;
                for (let i = 0; i < data.length; ++i) {
                    $row = '<tr>\n' +
                        '<td>' + data[i].office_name + '</td>\n' +
                        '<td>' + data[i].office_type + '</td>\n' +
                        '<td>' + data[i].delivery_status + '</td>\n' +
                        '<td>' + data[i].pincode.name + '</td>\n' +
                        '<td>' + data[i].division.name + '</td>\n' +
                        '<td>' + data[i].region.name + '</td>\n' +
                        '<td>' + data[i].circle.name + '</td>\n' +
                        '<td>' + data[i].taluk.name + '</td>\n' +
                        '<td>' + data[i].district.name + '</td>\n' +
                        '<td>' + data[i].state.name + '</td>\n' +
                    '</tr>'
                    $('#postOfficeTable tbody').append($row);
                    $('#currentPage').html($page);
                }
            },
            error: function (response) {
                console.log(response);
            },
            complete: function () {
                $('#loader').hide();
            },
        });
    }
    return false;
};
