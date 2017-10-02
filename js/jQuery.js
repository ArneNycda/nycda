const loadPage = name => {
    $.ajax(`pages/${name}.html`, {
        success: response => $('#content').html(response)
    });
};

const menuClicked = () => {
    $('body').on('click', '.pageLink', navItem => {
        const id = $(navItem.target).attr('id');

        if (id) {
            loadPage(id);
        }
    });
};

$(document).ready(() => {
    menuClicked();
    loadPage('home');
});
